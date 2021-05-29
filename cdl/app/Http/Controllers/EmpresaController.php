<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;


class EmpresaController extends Controller
{
    
    public function index()
    {
        return view('empresa');
    }
    public function formularioEmpresa(){

        return view('add_empresa');
    }

   
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        $empresa = new Empresa();
        $empresa->emp_logo = $request->logo;
        $empresa->emp_fantasia = $request->fantasia;
        $empresa->emp_email = $request->email;
        $empresa->emp_razao = $request->razao;
        $empresa->emp_cnpj = $request->cnpj;
        $empresa->emp_atividade = $request->ramo;
        $empresa->emp_telefone = $request->telefone;
        $empresa->emp_celular = $request->telefone2;
        $empresa->emp_cep = $request->cep;
        $empresa->emp_logrador = $request->rua;
        $empresa->emp_numero = $request->numero;
        $empresa->emp_bairro = $request->bairro;
        $empresa->emp_cidade = $request->cidade;
        $empresa->emp_uf = $request->uf;
        $empresa->emp_nome_contato = $request->tecnico;
        $empresa->emp_email_contato = $request->emailtecnico;
        $empresa->emp_chack_assoc = $request->associado;
        $empresa->emp_cod_assoc = $request->cod;
        $empresa->emp_senha = $request->senha;
        $empresa->emp_termo = $request->termo;
        $empresa->emp_status = $request->status;
        $empresa->save();
    }

  
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}

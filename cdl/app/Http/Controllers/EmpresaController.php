<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use phpDocumentor\Reflection\Types\Void_;

class EmpresaController extends Controller
{
    


        
    public function validarLogin(Request $request)
    {
      

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $empresa =  Empresa::where('emp_email',$request->email)->first();
        
            if(!empty($empresa)){

                if (Hash::check($request->password, $empresa->emp_senha)) {
                    echo "ok";
                }else{
                    echo "fudeu";
                }
            }
           
    }

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

        if($request->senha === $request->confirmar){

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
            $empresa->emp_senha = Hash::make($request->senha);
            $empresa->emp_termo = $request->termo;
            $empresa->emp_status = $request->status;
            $empresa->save();
        
            return View('add_empresa');
            
        }
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

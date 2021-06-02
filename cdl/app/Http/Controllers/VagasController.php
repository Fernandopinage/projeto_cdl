<?php

namespace App\Http\Controllers;

use App\Models\Vagas;
use Illuminate\Http\Request;

class VagasController extends Controller
{
   
    public function index()
    {
        //
    }

   
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
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

    public function anucieVagas(Request $request){


        // validando campos obrigatorios caso um dos campos esteja em banco nao inserir no banco de dados 
        $this->validate($request,[

            'cargo'=>'required',
            'tipo'=>'required',
            'formacao'=>'required',
            'experiencia'=>'required',
            'tempoexperiencia'=>'required',
            'uf'=>'required',
            'cidade'=>'required'
        ]);


        $anucio = new Vagas();
        $anucio->vag_data_inicio = $request->datainicio;
        $anucio->vag_data_final = $request->datafim;
        $anucio->vag_cargo = $request->cargo;
        $anucio->vag_tipo = $request->tipo;
        $anucio->vag_opcao = $request->vaga;
        $anucio->vag_oculta = $request->exibir_empresa;
        $anucio->vag_formacao = $request->formacao;
        $anucio->vag_curso = $request->curso;
        $anucio->vag_termino = $request->termino;
        $anucio->vag_semestre = $request->semestre;
        $anucio->vag_periodo = $request->periodo;
        $anucio->vag_experiencia = $request->experiencia;
        $anucio->vag_tempo = $request->tempoexperiencia;
        //$anucio->vag_cidade = $request->cidade;
        //$anucio->vag_cep = $request->cep;
        $anucio->vag_uf = $request->uf;
        $anucio->vag_bairro = $request->bairro;
        $anucio->vag_descricao = $request->descricao;
        $anucio->vag_idioma = $request->idioma;
        $anucio->vag_idioma_ingles = $request->ingles;
        $anucio->vag_idioma_espanhol = $request->espanhol;
        $anucio->vag_idioma_frances = $request->framces;
        $anucio->vag_idioma_outros = $request->outros;
        $anucio->vag_idioma_leitura = $request->leitura;
        $anucio->vag_idioma_escrita = $request->Escrita;
        $anucio->vag_salario = $request->salario;
        $anucio->vag_pcd = $request->pcd;
        $anucio->vag_pcd_descricao = $request->descricao_pcd;
        $anucio->save();
        return view('anucie_empresa');
        
    }
}

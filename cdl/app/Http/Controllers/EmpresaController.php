<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use phpDocumentor\Reflection\Types\Void_;

class EmpresaController extends Controller
{
    


        
    public function validarLogin(Request $request)
    {
      

        $request->validate([
            'email' => 'required',                  //request de email do formulario 
            'password' => 'required',               //request de senha do formulario 
        ]);
   
        $empresa =  Empresa::where('emp_email',$request->email)->first();       // selecionando o usuario 
        
            if(!empty($empresa)){                                               //  caso tenha valor dentro da variavel empresa

                if (Hash::check($request->password, $empresa->emp_senha)) {     //  decodificando senha hash 
                    echo "ok";                                                  // redirecinanmento se estiver tudo certo
                }else{
                    return redirect()->intended('/login/empresa');              // redirecinamento caso senha nao seja valida
                }
            }else{

                return redirect()->intended('/login/empresa');                  // caso não existe o email
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

                // validando campos obrigatorios caso um dos campos esteja em banco nao inserir no banco de dados 
                $this->validate($request,[

                    'razao'=>'required',
                    'cnpj'=>'required',
                    'senha'=>'required',
                    'confirmar'=>'required',
                    'ramo'=>'required',
                    'cep'=>'required',
                    'uf'=>'required',
                    'cidade'=>'required',
                    'bairro'=>'required',
                    'termo'=>'required'
                ]);

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

   
    public function destroy($id)                                // "deletar" registro ou ocultar
    {
        //
    }

    public function anuciarVagas(){                             //  chamndo tela de anucio

        return view('anucie_empresa');
    }

    public function redefinirSenha(){                           //  redefinir senha da empresa

        return view('redefinir_empresa');
    }

    public function filtroEmpresa(){                            // chamando tela de filtro candidato

        return view('candidato_empresa');
    }

    public function filtrarCandidato(Request $request){         //  filtrando candidato na base de dados

        
    }
}

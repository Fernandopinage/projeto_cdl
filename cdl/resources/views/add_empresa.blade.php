@extends('layout.add_empresa')

@section('cadastro')

<form method="post" action="/insert/empresa" >

    @csrf

    <div class="form-signin">
        <div class="text-end">
            <label class="switch">
                <input type="checkbox" id="pessoais" checked>
                <span class="slider round"></span>
            </label>
        </div>
        
        <div class="text" >          
            <h2 class="form-signin-heading"> Dados da Empresa </h2>
            <hr>
        </div>
        
        <div class="pessoais">

            <div class="row g-3">

                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nome Fantasia </label>
                    <input type="text" name="fantasia" class="form-control" placeholder="">
                </div>

                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Razão Social</label>
                    <input type="text" name="razao" class="form-control" placeholder="">
                </div>

                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Logo Empresa</label>
                    <input class="form-control" name="logo" type="file" id="formFile">
                </div>  

                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">CNPJ</label>
                    <input type="text" class="form-control" name="cnpj" placeholder="">
                </div>
                <div class="col-md-5">
                    <label class="form-check-label" for="flexCheckIndeterminate">Email da empresa </label>
                    <input type="text" class="form-control" name="email" placeholder="">
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Senha </label>
                    <input type="password" class="form-control" name="senha" placeholder="">
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Confirmar Senha </label>
                    <input type="password" class="form-control" name="confirmar" placeholder="">
                </div>
                <div class="col-md-6">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nome do Técnico </label>
                    <input type="text" class="form-control" name="tecnico" placeholder="">
                </div>
                <div class="col-md-6">
                    <label class="form-check-label" for="flexCheckIndeterminate">Email do Técnico </label>
                    <input type="text" class="form-control" name="emailtecnico" placeholder="">
                </div>

                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Ramo de Atividade</label>
                    <input type="text" class="form-control" name="ramo" placeholder="">
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Telefone</label>
                    <input type="text" class="form-control" name="telefone" placeholder="">
                </div>
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Telefone</label>
                    <input type="text" class="form-control" name="telefone2" placeholder="">
                </div>
            </div>  
        </div> 
    </div>
    <div class="form-signin">
        <div class="text-end">
            <label class="switch">
                <input type="checkbox" checked>
                <span class="slider round"></span>
            </label>
        </div>
    
        <div class="text" >
            <h2 class="form-signin-heading">Endereço</h2>
            <hr>
        </div>
            
        <div class="row g-3">
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">CEP</label>
                <input type="text" class="form-control" name="cep" id="cep" placeholder="">
            </div>
            <div class="col-md-1">
                <label class="form-check-label" for="flexCheckIndeterminate">UF</label>
                <input type="text" class="form-control" name="uf" id="uf" placeholder="">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Cidade</label>
                <input type="text" class="form-control" name="cidade" id="cidade" placeholder="">
            </div>
            <div class="col-md-7">
                <label class="form-check-label" for="flexCheckIndeterminate">Bairro</label>
                <input type="text" class="form-control" name="bairro" id="bairro" placeholder="">
            </div>
            <div class="col-md-2">
                <label class="form-check-label" for="flexCheckIndeterminate">Nº</label>
                <input type="text" class="form-control" name="numero" id="numero" placeholder="">
            </div>
            <div class="col-md-10">
                <label class="form-check-label" for="flexCheckIndeterminate">Complemento</label>
                <input type="text" class="form-control" name="rua" id="rua" placeholder="">
            </div>
        </div>
       
    
    </div>


    <div class="form-signin">
        <div class="text-end">
            <label class="switch">
                <input type="checkbox" checked>
                <span class="slider round"></span>
            </label>
        </div>
        <div class="row g-3">
        <div class="text" >
            <h2 class="form-signin-heading">Informações Adicionais</h2>
            <hr>
        </div>
            <div class="col-md-2">
                <input type="hidden" value="1" name="status"> <!-- campo responsavel por ativar empresa -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" name="associado" for="flexCheckIndeterminate">Associado CDL manaus?</label>
                </div>
            </div>
            <div class="col-md-4">
                <label class="form-check-label" for="flexCheckIndeterminate">Preenchar com o códiogo</label>
                <input type="text" class="form-control" name="cod" placeholder="">
            </div>
            <div class="col-md-6">
            </div>
        </div>

    </div>

    <div class="form-signin">
    
        <div class="text-center" >
            <h2 class="form-signin-heading">Termo</h2>
            <hr>
        </div>
            
        <div class="row g-3">
            <div class="col-md-6">
            </div>
            <div class="col-md-12" style="padding-top: 50px ">
                <div class="text-center">
                    <label class="form-check-label" for="flexCheckIndeterminate">Termo de política</label>
                    <div class="form-check">
                        <input class="" type="checkbox" value="" name="termo" id="flexCheckDefault">
                    </div>
                </div>
            </div>
        </div>
       
    
    </div>
    <input type="submit" class="btn btn-primary" name="submit">

</form>
@endsection

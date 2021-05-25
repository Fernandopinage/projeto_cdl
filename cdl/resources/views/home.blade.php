@extends('layout.home')
    
       
        @section('conteudo')

        <form class="form-signin" method="POST" action="">
            <div class="text-center" id="text-pesquisar">
                <p class="h1 text-center">Faça sua busca</p>
            </div>
            <div class="input-group">
                <div class="input-group mb-3">
                    <select class="fdropdown-menu" aria-label="">
                        <option selected></option>
                        <option value="1">Vagas</option>
                        <option value="2">Candidatos</option>
                        <option value="3">Curso UTV</option>
                      </select>
                <input type="text" name="pesquisa" class="form-control form-control" placeholder="Digite um cargo ou uma palavra chave" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-success" type="submit" id="button-addon2">Busca</button>
            </div>
        </form>  
        @endsection
        
   
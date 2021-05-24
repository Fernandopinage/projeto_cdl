@extends('layout.home')
    
       
        @section('conteudo')

        <form class="form-signin" method="POST" action="../home.php">
            <div class="text-center" id="text-pesquisar">
                <p class="h1 text-center">Faça sua busca</p>
            </div>
            <div class="input-group">
                <input type="text" class="form-control form-control" placeholder="Digite um cargo ou uma palavra chave" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-success" type="submit" id="button-addon2">Busca</button>
            </div>
        </form>  
        @endsection
        
   
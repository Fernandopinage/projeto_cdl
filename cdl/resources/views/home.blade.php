@extends('layout.home')
    
       
        @section('conteudo')

        <form class="form-signin" method="POST" action="../home.php">
            <div class="text-center" id="text-pesquisar">
                <p class="h1 text-center">Faça sua busca</p>
            </div>
            <div class="input-group">
                <div class="input-group mb-3">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                <input type="text" class="form-control form-control" placeholder="Digite um cargo ou uma palavra chave" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-success" type="submit" id="button-addon2">Busca</button>
            </div>
        </form>  
        @endsection
        
   
@extends('layout.home')
    <div class="container">
        @section('conteudo')
     
            <div class="row g-1" id="row">
                <p class="h1 text-center">Encontre a vaga ideal</p>

                <form action="" method="POST" class="row g-3">
                    <div class="row g-2">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <input type="type" class="form-control form-control-lg" id="" placeholder="Digite um cargo ou Palavra chave">
                            </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        
                                        <input type="text" class="form-control form-control-lg" placeholder="Digite uma cidade" aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <button class="btn btn-success" type="submit" id="button-addon2" style="border-radius: 0px 5px 5px 0px">Buscar</button>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                </form>
            </div>   
        @endsection
            
    </div>    
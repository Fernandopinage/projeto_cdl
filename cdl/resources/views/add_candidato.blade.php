@extends('layout.add_candidato')

@section('cadastro')

<form class="form-signin" method="POST">
    <div class="text-center" >
        <h2 class="form-signin-heading">Candidato</h2>
        <hr>
    </div>
        
    <div class="row g-3">
        <div class="col-md-6">
            <label class="form-check-label" for="flexCheckIndeterminate">Primeiro nome </label>
            <input type="text" class="form-control" placeholder="">
        </div>

        <div class="col-md-6">
            <label class="form-check-label" for="flexCheckIndeterminate">Sobre Nome</label>
            <input type="text" class="form-control" placeholder="">
        </div>

        <div class="col-md-6">
            <label class="form-check-label" for="flexCheckIndeterminate">Email </label>
            <input type="text" class="form-control" placeholder="">
        </div>
        <div class="col-md-3">
            <label class="form-check-label" for="flexCheckIndeterminate">Senha </label>
            <input type="text" class="form-control" placeholder="">
        </div>
        <div class="col-md-3">
            <label class="form-check-label" for="flexCheckIndeterminate">Confirmar Senha </label>
            <input type="text" class="form-control" placeholder="">
        </div>

        <div class="col-md-2">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                <label class="form-check-label" for="gridRadios2">
                  Homem
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
                <label class="form-check-label" for="gridRadios3">
                  Mulher
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
                <label class="form-check-label" for="gridRadios3">
                  Outros
                </label>
             </div>
        </div>
    
        <div class="col-md-1">
            <label class="form-check-label" for="flexCheckIndeterminate">Peso</label>
            <input type="email" class="form-control" placeholder="">
        </div>
        <div class="col-md-1">
            <label class="form-check-label" for="flexCheckIndeterminate">Altura</label>
            <input type="email" class="form-control" placeholder="">
        </div>
        <div class="col-md-2">
            <label class="form-check-label" for="flexCheckIndeterminate">Cor</label>
            <select id="inputState" class="form-select">
                <option selected></option>
                <option>Branca</option>
                <option>Preta</option>
                <option>Parta</option>
                <option>Amarela</option>
                <option>Indígena</option>
              </select>
        </div>
        <div class="col-md-3">
            <label class="form-check-label" for="flexCheckIndeterminate">Telefone</label>
            <input type="text" class="form-control" placeholder="">
        </div>
        <div class="col-md-3">
            <label class="form-check-label" for="flexCheckIndeterminate">Celular </label>
            <input type="text" class="form-control" placeholder="">
        </div>
    
    </div>

    <button type="submit" class="btn btn-primary">Sign in</button>
</form>


@endsection
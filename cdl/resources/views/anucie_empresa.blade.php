@extends('layout.anucie_empresa')

@section('anuncio')

<form method="post" action="/insert/empresa" >

    @csrf

    <div class="form-signin">
        
        <div class="text" >          
            <h2 class="form-signin-heading"> ANUNCIE UMA VAGA </h2>
            <hr>
        </div>
        
        <div class="pessoais">

            <div class="row g-3">

                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Data de inicio </label>
                    <input type="date" name="fantasia" class="form-control form-control-sm" placeholder="">
                </div>

                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Data termino</label>
                    <input type="date" name="razao" class="form-control form-control-sm" placeholder="">
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Cargo/Função </label>
                    <select class="form-select form-select-sm" aria-label="Default select example">
                        <option selected></option>
                        <option value="1">Financeiro</option>
                        <option value="2">Vendas</option>
                        <option value="3">Administrativa</option>
                    </select>
                </div>
                <div class="col-md-5">
                    <label class="form-check-label" for="flexCheckIndeterminate">Descrição da Vaga </label>
                    <input type="text" class="form-control form-control-sm" name="senha" placeholder="">
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Tipo de Vaga </label>
                    <select class="form-select form-select-sm" aria-label="Default select example">
                        <option selected></option>
                        <option value="1">CLT</option>
                        <option value="2">PJ</option>
                        <option value="3">Témporario</option>
                        <option value="4">Menor Aprendiz</option>
                        <option value="5">Estágio</option>
                        <option value="5">Trainee</option>
                      </select>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Salario Oferecido</label>
                    <input type="text" class="form-control form-control-sm" name="senha" placeholder="R$">
                    
                </div>
               
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Formação</label>
                    <select class="form-select form-select-sm" aria-label="Default select example">
                        <option selected></option>
                        <option value="1">Ensino fundamental completo</option>
                        <option value="2">Ensino fundamental incompleto</option>
                        <option value="3">Ensino Médio completo</option>
                        <option value="4">Ensino Médio cursando</option>
                        <option value="5">Ensino Técnico cursando</option>
                        <option value="6">Ensino Técnico completo</option>
                        <option value="7">Superior Cursando</option>
                        <option value="7">Superior Completo</option>
                        <option value="7">Pós-Graduação Cursando</option>
                        <option value="7">Pós-Graduação Completo</option>
                      </select>
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nome do curso </label>
                    <input type="text" class="form-control form-control-sm" name="senha" placeholder="">
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Ano de termino </label>
                    <input type="number" min="1900" max="2099" class="form-control form-select-sm" name="email" placeholder="">
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Semestre em Curso </label>
                    <select class="form-select form-select-sm" aria-label="Default select example">
                        <option selected></option>
                        <option value="1">1º Semestre</option>
                        <option value="2">2º Semestre</option>
                  
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Périodo em Curso </label>
                    <select class="form-select form-select-sm" aria-label="Default select example">
                        <option selected></option>
                        <option value="1">1º Périodo</option>
                        <option value="2">2º Périodo</option>
                        <option value="3">3º Périodo</option>
                        <option value="4">4º Périodo</option>
                        <option value="5">5º Périodo</option>
                        <option value="6">6º Périodo</option>
                        <option value="7">7º Périodo</option>
                        <option value="8">8º Périodo</option>
                        <option value="9">Ou Mais</option>
                        
                      </select>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Experiência </label>
                    <select class="form-select form-select-sm" aria-label="Default select example">
                        <option selected></option>
                        <option value="1">Sem Experiência</option>
                        <option value="2">Com Experiência</option>
                        <option value="3">Primeiro Emprego</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Tempo de Experiência</label>
                    <select class="form-select form-select-sm" aria-label="Default select example">
                        <option selected></option>
                        <option value="1">Não informado</option>
                        <option value="2">3 meses</option>
                        <option value="3">6 meses</option>
                        <option value="4">1 ano</option>
                        <option value="5">3 anos</option>
                        <option value="6">5 anos</option>
                        <option value="7">10 anos</option>
                        <option value="8">20 anos</option>
                        <option value="9">30+ anos</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">CEP</label>
                    <input type="text" class="form-control form-control-sm" name="cep" id="cep" placeholder="">
                </div>
                <div class="col-md-1">
                    <label class="form-check-label" for="flexCheckIndeterminate">UF</label>
                    <input type="text" class="form-control form-control-sm" name="uf" id="uf" placeholder="">
                </div>
                <div class="col-md-1">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nº</label>
                    <input type="text" class="form-control form-control-sm" name="numero" id="numero" placeholder="">
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Cidade</label>
                    <input type="text" class="form-control form-control-sm" name="cidade" id="cidade" placeholder="">
                </div>
                <div class="col-md-7">
                    <label class="form-check-label" for="flexCheckIndeterminate">Bairro</label>
                    <input type="text" class="form-control form-control-sm" name="bairro" id="bairro" placeholder="">
                </div>
                <div class="col-md-6">
                    <label class="form-check-label" for="flexCheckIndeterminate">Complemento</label>
                    <input type="text" class="form-control form-control-sm" name="rua" id="rua" placeholder="">
                </div>

                <div class="col-md-1">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label" for="inlineCheckbox1">Vaga </label>
                        <input class="form-control-plaintext" type="checkbox" id="inlineCheckbox1" value="option1">
                      </div>
                </div>
                <div class="col-md-2">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label" for="inlineCheckbox1">Exibir Empresa </label>
                        <input class="form-control-plaintext" type="checkbox" id="inlineCheckbox1" value="option1">
                      </div>
                </div>
            </div>  

        </div> 

        <hr>
        <div class="text-end">
            <input type="submit" class="btn btn-primary" value="Buscar">
        </div>
    </div>
</div>

</form>
@endsection

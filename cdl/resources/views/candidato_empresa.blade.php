@extends('layout.candidato_empresa')

@section('filtrocandidato')

<form method="post" action="/insert/empresa" >

    @csrf

    <div class="form-signin">

        <div class="text" >          
            <h2 class="form-signin-heading"> ENCONTRE CANDIDATO IDEAL </h2>
            <hr>
        </div>
        
        <div class="pessoais">

            <div class="row g-3">

                <div class="col-md-5">
                    <label class="form-check-label" for="flexCheckIndeterminate">Ária de atuação </label>
                    <select class="form-select form-select-sm" aria-label="Default select example">
                        <option selected></option>
                        <option value="1">Financeiro</option>
                        <option value="2">Vendas</option>
                        <option value="3">Administrativa</option>
                      </select>
                </div>
                <div class="col-md-3">
                    <div class="text-left">
                        <label class="form-check-label" for="flexCheckIndeterminate">Experiência</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Ex-Militar</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">Ex-Aluno UTV</label>
                    </div>
                </div>
                <div class="col-md-4">
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
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Bairro </label>
                    <input type="text"class="form-control form-select-sm" name="email" placeholder="">
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Idioma</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Inglês
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                          Espanhol
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                          Francês
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                          Outros
                        </label>
                      </div>
                </div>

                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nivel de Leitura</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Basico
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Intermediario
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                        <label class="form-check-label" for="exampleRadios3">
                            Avançado
                        </label>
                    </div>
                </div>

                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nivel de Escrita</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Basico
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Intermediario
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios3" value="option3">
                        <label class="form-check-label" for="exampleRadios3">
                            Avançado
                        </label>
                    </div>
                </div>

                

            </div>  
        </div> 
        <hr>
        <div class="text-end">
            <input type="submit" class="btn btn-primary" value="Buscar">
        </div>
    </div>
    

</form>
@endsection

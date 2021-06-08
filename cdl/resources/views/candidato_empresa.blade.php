@extends('layout.candidato_empresa')

@section('filtrocandidato')

<form method="post" action="/filtra/candidato/empresa" >

    @csrf

    <div class="form-signin">

        <div class="text" >          
            <h2 class="form-signin-heading"> ENCONTRE CANDIDATO IDEAL </h2>
            <hr>
        </div>
        
        <div class="pessoais">

            <div class="row g-3">

                <div class="col-md-5">
                    <label class="form-check-label" for="flexCheckIndeterminate">Área de Atuação </label>
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
                    <select class="form-select form-select-sm" name="formacao" id="formacao" aria-label="Default select example">
                        <option selected></option>
                        <option value="fundamental incompleto">Ensino fundamental incompleto</option>
                        <option value="fundamental completo">Ensino fundamental completo</option>
                        <option value="medio cursando">Ensino Médio cursando</option>
                        <option value="medio completo">Ensino Médio completo</option>
                        <option value="tecnico cursando">Ensino Técnico cursando</option>
                        <option value="tecnico completo">Ensino Técnico completo</option>
                        <option value="superior cursando">Superior Cursando</option>
                        <option value="superior completo">Superior Completo</option>
                        <option value="pos cursando">Pós-Graduação Cursando</option>
                        <option value="pos completo">Pós-Graduação Completo</option>
                      </select>
                </div>
<!--*************************************** ensino medio ***********************************************-->
                <div class="col-md-2" id="letivo_medio">
                    <label class="form-check-label" for="flexCheckIndeterminate">Ano Letivo</label>
                    <select class="form-select form-select-sm" name="letivo"  aria-label="Default select example">
                        <option selected></option>
                        <option value="1">1º Ano</option>
                        <option value="2">2º Ano</option>
                        <option value="3">3º Ano</option>
                    </select>
                </div>

                <div class="col-md-2" id="termino_medeio">
                    <label class="form-check-label" for="flexCheckIndeterminate">Ano de Conclusão </label>
                    <input type="date"  class="form-control form-select-sm" name="termino_medio" placeholder="">
                </div>

<!--*************************************** ----------- ***********************************************-->

<!--*************************************** ensino tecnico ***********************************************-->
                <div class="col-md-3" id="curso_tecnico">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nome do Curso </label>
                    <input type="text" class="form-control form-control-sm"  name="curso" placeholder="">
                </div>
                <div class="col-md-2" id="semetre">
                    <label class="form-check-label" for="flexCheckIndeterminate">Semestre em Curso </label>
                    <select class="form-select form-select-sm" name="semetre"  aria-label="Default select example">
                        <option selected></option>
                        <option value="1">1º Semestre</option>
                        <option value="2">2º Semestre</option>
                  
                    </select>
                </div>
<!--*************************************** ----------- ***********************************************-->

<!--*************************************** ensino superior ***********************************************-->
                <div class="col-md-3" id="curso_superior">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nome do Curso </label>
                    <input type="text" class="form-control form-control-sm"  name="superior" placeholder="">
                </div>
                <div class="col-md-2" id="periodo_superior">
                    <label class="form-check-label" for="flexCheckIndeterminate">Périodo em Curso </label>
                    <select class="form-select form-select-sm" name="periodo"  aria-label="Default select example">
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

 <!--*************************************** ----------- ***********************************************-->

 <!--*************************************** Pós graduação ***********************************************-->
                <div class="col-md-3" id="curso_pos">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nome do Curso </label>
                    <input type="text" class="form-control form-control-sm"  name="pos" placeholder="">
                </div>
                <div class="col-md-2" id="modulo_pos">
                    <label class="form-check-label" for="flexCheckIndeterminate">Modulo da Pós </label>
                    <select class="form-select form-select-sm" name="periodo"  aria-label="Default select example">
                        <option selected></option>
                        <option value="1">1º Modulo</option>
                        <option value="2">2º Modulo</option>
                        <option value="3">3º Modulo</option>
                        <option value="4">4º Modulo</option>
                        <option value="5">5º Modulo</option>
                        <option value="6">6º Modulo</option>
                        <option value="7">7º Modulo</option>
                        <option value="8">8º Modulo</option>
                        <option value="9">Ou Modulo</option>
                        
                      </select>
                </div>
 <!--*************************************** ----------- ***********************************************-->   
 
 
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Bairro </label>
                    <input type="text"class="form-control form-select-sm" name="bairro" placeholder="">
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Idioma</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="ingle">
                        <label class="form-check-label" for="flexCheckDefault">
                          Inglês
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="espanhol">
                        <label class="form-check-label" for="flexCheckChecked">
                          Espanhol
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="frances">
                        <label class="form-check-label" for="flexCheckChecked">
                          Francês
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="outros">
                        <label class="form-check-label" for="flexCheckChecked">
                          Outros
                        </label>
                      </div>
                </div>

                <div class="col-md-2" id="leitura_ingles">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nivel de Leitura</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="leitura_ingles" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Basico
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="leitura_ingles" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Intermediario
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="leitura_ingles" id="exampleRadios3" value="option3">
                        <label class="form-check-label" for="exampleRadios3">
                            Avançado
                        </label>
                    </div>
                </div>

                <div class="col-md-2" id="escrita_ingles">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nivel de Escrita</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="escrita_ingles" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Basico
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="escrita_ingles" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Intermediario
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="escrita_ingles" id="exampleRadios3" value="option3">
                        <label class="form-check-label" for="exampleRadios3">
                            Avançado
                        </label>
                    </div>
                </div>
                
                <div class="col-md-2" id="leitura_espanhol">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nivel de Leitura</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="leitura_espanhol" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Basico
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="leitura_espanhol" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Intermediario
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="leitura_espanhol" id="exampleRadios3" value="option3">
                        <label class="form-check-label" for="exampleRadios3">
                            Avançado
                        </label>
                    </div>
                </div>

                <div class="col-md-2" id="escrita_espanhol">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nivel de Escrita</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="escrita_espanhol" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Basico
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="escrita_espanhol" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Intermediario
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="escrita_espanhol" id="exampleRadios3" value="option3">
                        <label class="form-check-label" for="exampleRadios3">
                            Avançado
                        </label>
                    </div>
                </div>

                
                <div class="col-md-2" id="leitura_frances">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nivel de Leitura</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="leitura_frances" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Basico
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="leitura_frances" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Intermediario
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="leitura_frances" id="exampleRadios3" value="option3">
                        <label class="form-check-label" for="exampleRadios3">
                            Avançado
                        </label>
                    </div>
                </div>

                <div class="col-md-2" id="escrita_frances">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nivel de Escrita</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="escrita_frances" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Basico
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="escrita_frances" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Intermediario
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="escrita_frances" id="exampleRadios3" value="option3">
                        <label class="form-check-label" for="exampleRadios3">
                            Avançado
                        </label>
                    </div>
                </div>


                
                <div class="col-md-2" id="leitura_outros">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nivel de Leitura</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="leitura_outros" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Basico
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="leitura_outros" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Intermediario
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="leitura_outros" id="exampleRadios3" value="option3">
                        <label class="form-check-label" for="exampleRadios3">
                            Avançado
                        </label>
                    </div>
                </div>

                <div class="col-md-2" id="escrita_outros">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nivel de Escrita</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="escrita_outros" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Basico
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="escrita_outros" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Intermediario
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="escrita_outros" id="exampleRadios3" value="option3">
                        <label class="form-check-label" for="exampleRadios3">
                            Avançado
                        </label>
                    </div>
                </div>



                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">PCD</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pcd" id="exampleRadios2" value="s" checked>
                        <label class="form-check-label" for="exampleRadios2">
                            Sim
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pcd" id="exampleRadios3" value="n" >
                        <label class="form-check-label" for="exampleRadios3">
                            Não
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

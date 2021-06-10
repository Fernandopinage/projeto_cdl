@extends('layout.anucie_empresa')

@section('anuncio')

<form method="POST" action="/anucie/vaga/empresa" >

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
                    <input type="date" name="datainicio" class="form-control form-control-sm" placeholder="">
                </div>

                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Data termino</label>
                    <input type="date" name="datafim" class="form-control form-control-sm" placeholder="">
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Cargo/Função <span><strong>*</strong></span></label>
                    <input type="text" name="cargo" class="form-control form-control-sm" placeholder="">
                </div>
                <div class="col-md-5">
                    <label class="form-check-label" for="flexCheckIndeterminate">Descrição da Vaga </label>
                    <input type="text" class="form-control form-control-sm" name="descricao" placeholder="">
                </div>
                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Tipo de Vaga  <span><strong>*</strong></span></label>
                    <select class="form-select form-select-sm" name="tipo" aria-label="Default select example">
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
                    <input type="text" class="form-control form-control-sm" name="salario" placeholder="R$">
                    
                </div>
               
                <div class="col-md-4">
                    <label class="form-check-label" for="flexCheckIndeterminate">Formação  <span><strong>*</strong></span></label>
                    <select class="form-select form-select-sm" name="formacao" aria-label="Default select example">
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
                    <input type="text" class="form-control form-control-sm" name="curso" placeholder="">
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Ano de termino </label>
                    <input type="number" min="1900" max="2099" class="form-control form-select-sm" name="termino" placeholder="">
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Semestre em Curso </label>
                    <select class="form-select form-select-sm" name="semestre" aria-label="Default select example">
                        <option selected></option>
                        <option value="1">1º Semestre</option>
                        <option value="2">2º Semestre</option>
                  
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Périodo em Curso </label>
                    <select class="form-select form-select-sm" name="periodo" aria-label="Default select example">
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
                    <label class="form-check-label" for="flexCheckIndeterminate">Experiência <span><strong>*</strong></span></label>
                    <select class="form-select form-select-sm" name="experiencia" aria-label="Default select example">
                        <option selected></option>
                        <option value="1">Sem Experiência</option>
                        <option value="2">Com Experiência</option>
                        <option value="3">Primeiro Emprego</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Tempo de Experiência  <span><strong>*</strong></span></label>
                    <select class="form-select form-select-sm" name="tempoexperiencia" aria-label="Default select example">
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

                <div class="col-md-1">
                    <label class="form-check-label" for="flexCheckIndeterminate">UF <span>*</span></label>
                    <input type="text" class="form-control form-control-sm" name="uf" id="uf" placeholder="">
                </div>

                <div class="col-md-3">
                    <label class="form-check-label" for="flexCheckIndeterminate">Cidade <span><strong>*</strong></span></label>
                    <input type="text" class="form-control form-control-sm" name="cidade" id="cidade" placeholder="">
                </div>
                <div class="col-md-7">
                    <label class="form-check-label" for="flexCheckIndeterminate">Bairro</label>
                    <input type="text" class="form-control form-control-sm" name="bairro" id="bairro" placeholder="">
                </div>
                <!-- ************************************* -->
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Idioma Necessário?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" name="idioma_necessario" id="idioma_necessario">
                        <label class="form-check-label" for="flexCheckDefault">
                          
                        </label>
                      </div>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Idioma</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="ingle" id="ingle" name="itens[]">
                        <label class="form-check-label" for="vag_idioma">
                          Inglês
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="espanhol" id="espanhol" name="itens[]">
                        <label class="form-check-label" for="vag_idioma">
                          Espanhol
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="frances" id="frances" name="itens[]">
                        <label class="form-check-label" for="vag_idioma">
                          Francês
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="outros" id="outros" name="itens[]">
                        <label class="form-check-label" for="vag_idioma">
                          Outros
                        </label>
                      </div>
                </div>

                
                <div class="col-md-2" id="leitura_ingles">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nivel de Leitura (Inglês)</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="leitura_ingles" id="leitura_ingles" value="B" checked>
                        <label class="form-check-label" for="leitura_ingles">
                            Basico
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="leitura_ingles" id="leitura_ingles" value="I">
                        <label class="form-check-label" for="leitura_ingles">
                            Intermediario
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="leitura_ingles" id="leitura_ingles" value="A">
                        <label class="form-check-label" for="leitura_ingles">
                            Avançado
                        </label>
                    </div>
                </div>

                <div class="col-md-2" id="escrita_ingles">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nivel de Escrita (Inglês)</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="escrita_ingles" id="escrita_ingles" value="B" checked>
                        <label class="form-check-label" for="escrita_ingles">
                            Basico
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="escrita_ingles" id="escrita_ingles" value="I">
                        <label class="form-check-label" for="escrita_ingles">
                            Intermediario
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="escrita_ingles" id="escrita_ingles" value="A">
                        <label class="form-check-label" for="escrita_ingles">
                            Avançado
                        </label>
                    </div>
                </div>

                <div class="col-md-2" id="leitura_espanhol">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nivel de Leitura (Espanhol)</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="leitura_espanhol" id="leitura_espanhol" value="B" checked>
                        <label class="form-check-label" for="leitura_espanhol">
                            Basico
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="leitura_espanhol" id="leitura_espanhol" value="I">
                        <label class="form-check-label" for="leitura_espanhol">
                            Intermediario
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="leitura_espanhol" id="leitura_espanhol" value="A">
                        <label class="form-check-label" for="leitura_espanhol">
                            Avançado
                        </label>
                    </div>
                </div>

                <div class="col-md-2" id="escrita_espanhol">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nivel de Escrita (Espanhol)</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="escrita_espanhol" id="escrita_espanhol" value="B" checked>
                        <label class="form-check-label" for="escrita_espanhol">
                            Basico
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="escrita_espanhol" id="escrita_espanhol" value="I">
                        <label class="form-check-label" for="escrita_espanhol">
                            Intermediario
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="escrita_espanhol" id="escrita_espanhol" value="A">
                        <label class="form-check-label" for="escrita_espanhol">
                            Avançado
                        </label>
                    </div>
                </div>

                
                <div class="col-md-2" id="leitura_frances">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nivel de Leitura (Francês)</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="leitura_frances" id="leitura_frances" value="B" checked>
                        <label class="form-check-label" for="leitura_frances">
                            Basico
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="leitura_frances" id="leitura_frances" value="I">
                        <label class="form-check-label" for="leitura_frances">
                            Intermediario
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="leitura_frances" id="leitura_frances" value="A">
                        <label class="form-check-label" for="leitura_frances">
                            Avançado
                        </label>
                    </div>
                </div>

                <div class="col-md-2" id="escrita_frances">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nivel de Escrita (Francês)</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="escrita_frances" id="escrita_frances" value="B" checked>
                        <label class="form-check-label" for="escrita_frances">
                            Basico
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="escrita_frances" id="escrita_frances" value="I">
                        <label class="form-check-label" for="escrita_frances">
                            Intermediario
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="escrita_frances" id="escrita_frances" value="A">
                        <label class="form-check-label" for="escrita_frances">
                            Avançado
                        </label>
                    </div>
                </div>

                <div class="col-md-3" id="idioma_nome">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nome do Idioma </label>
                    <input type="text" class="form-control form-control-sm" name="curso" placeholder="">
                </div>

                
                <div class="col-md-2" id="leitura_outros">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nivel de Leitura (Outros)</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="leitura_outros" id="leitura_outros" value="B" checked>
                        <label class="form-check-label" for="leitura_outros">
                            Basico
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="leitura_outros" id="leitura_outros" value="I">
                        <label class="form-check-label" for="leitura_outros">
                            Intermediario
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="leitura_outros" id="leitura_outros" value="A">
                        <label class="form-check-label" for="leitura_outros">
                            Avançado
                        </label>
                    </div>
                </div>

                <div class="col-md-2" id="escrita_outros">
                    <label class="form-check-label" for="flexCheckIndeterminate">Nivel de Escrita (Outros)</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="escrita_outros" id="leitura_outros" value="B" checked>
                        <label class="form-check-label" for="leitura_outros">
                            Basico
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="escrita_outros" id="leitura_outros" value="I">
                        <label class="form-check-label" for="leitura_outros">
                            Intermediario
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="escrita_outros" id="leitura_outros" value="A">
                        <label class="form-check-label" for="leitura_outros">
                            Avançado
                        </label>
                    </div>
                </div>
            
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate"> Vaga remota</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="S" name="vaga" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
      
                        </label>
                      </div>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate"> Exibir nome da Empresa </span></label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="N" name="exibir_empresa" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        
                        </label>
                      </div>
                </div>
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate"> PCD?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="S" id="pcd" name="pcd" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        
                        </label>
                      </div>
                </div>
                <div class="mb-3" id="descPCD">
                    <label for="exampleFormControlTextarea1" class="form-label">Descreva a deficiêmcia</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1"  name="descricao_pcd" rows="4"></textarea>
                  </div>
                
        </div> 
        <span>Campos Obrigatórios<strong>*</strong></span>
        <hr>
        <div class="text-end">
            <input type="submit" class="btn btn-primary" value="Anunciar">
        </div>
    </div>
</div>

</form>
@endsection

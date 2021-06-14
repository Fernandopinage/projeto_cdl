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
                <div class="col-md-3">
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
                <div class="col-md-8">
                    <label class="form-check-label" for="flexCheckIndeterminate">Bairro</label>
                    <input type="text" class="form-control form-control-sm" name="bairro" id="bairro" placeholder="">
                </div>
                <!-- ************************************* -->
                <div class="col-md-2">
                    <label class="form-check-label" for="flexCheckIndeterminate">Idioma Necessário</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" name="idioma_necessario" id="idioma_necessario">
                        <label class="form-check-label" for="flexCheckDefault">
                          
                        </label>
                    </div>
                </div>
                <div class="col-md-2" id="idioma">
                    <label class="form-check-label" for="flexCheckIndeterminate">Idioma</label>
                    <select class="form-select form-select-sm" name="idioma" aria-label="Default select example">
                        <option selected></option>
                        <option value="ingles">Inglês</option>
                        <option value="espanhol">Espanhol</option>
                        <option value="frances">Francês</option>
                        <option value="italiano">Itália</option>
                      
                    </select>
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
        <hr>
        <span>Campos Obrigatórios<strong>*</strong></span>
        <div class="text-end">
            <input type="submit" class="btn btn-primary" value="Anunciar">
        </div>
    </div>
</div>

</form>
@endsection

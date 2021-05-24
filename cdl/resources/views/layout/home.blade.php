<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="/css/home.css" rel="stylesheet">
    <title>CDL</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img id="logo" src="/img/cdl_logo.png"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Candidatos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Empresas
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          UTV
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          OM's
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
          </div>
        </div>
      </nav>
      
      <div id="menu">

      </div>
    
    <div class="container-fluid">
        <div id="banner-principal">

            @yield('conteudo')

        </div>
    </div>
    <div class="container" id="cards">
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <img class="card-img-top" src="/img/index-1.jpg" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title">ÚLTIMOS PROFISSIONAIS CADASTRADOS</h5>
                        <p class="card-text">Aqui você encontra o candidato que precisa onde sua empresa estiver, no perfil que você desejar.</p>
                        <a href="#" class="btn btn-outline-primary btn-lg btn-block">BUSCAR CANDIDATO</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <img class="card-img-top" src="/img/index-2.jpg" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title">OPORTUNIDADES RECENTES EM DESTAQUE</h5>
                        <p class="card-text">Conecte-se ao mercado de trabalho com essa ferramenta ligada a grandes empresas. Cadastra-se. É GRÁTIS!</p>
                        <a href="#" class="btn btn-outline-primary btn-lg btn-block">BUSCAR OPORTUNIDADE</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <img class="card-img-top" src="/img/index-3.jpg" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title">PROGRAMAS DE CAPACITAÇÃO DISPONÍVEIS</h5>
                        <p class="card-text">Venha conhecer a forma mais rápida, pratica e segura de ampliar seus horizontes.</p>
                        <a href="#" class="btn btn-outline-primary btn-lg btn-block">SAIBA MAIS</a>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
    
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="/css/anucie_empresa.css" rel="stylesheet">
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <title>CDL</title>
</head>
<body>
    
    <ul class="nav justify-content-end navbar-light bg-light">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href=""><img  src="/icons/facebook.png"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><img  src="/icons/instagram.png"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><img  src="/icons/youtube.png"></a>
        </li>

      </ul>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="/"><img id="logo" src="/img/cdl_logo.png"></a>
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
                          <li><a class="dropdown-item" href="/login/candidato">Entrar</a></li>
                          <li><a class="dropdown-item" href="/busca/candidato">Buscar</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Empresas
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="/login/empresa">Entrar</a></li>
                          <li><a class="dropdown-item" href="/filtra/candidato/empresa">Busca Candidatos</a></li>
                          <li><a class="dropdown-item" href="/anucio/empresa">Anúncio de vaga </a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          UTV
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="/login/utv">Entrar</a></li>
                          <li><a class="dropdown-item" href="/busca/candidato">Buscar</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          OM's
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="/login/militar">Entrar</a></li>
                          <li><a class="dropdown-item" href="/busca/militar">Ex Militares</a></li>
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

    <div class="container">

        @yield('anuncio')
        
    </div>
    <div id="footer-cadastro">

    </div>
</body>
<footer>
  @include('sweetalert::alert')
  <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark">
  </nav>
</footer>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<!-- Adicionando Javascript -->
<script>
    $(document).ready(function() {

      $('#leitura_ingles').hide();
      $('#escrita_ingles').hide();
      $('#leitura_espanhol').hide();
      $('#escrita_espanhol').hide();
      $('#leitura_frances').hide();
      $('#escrita_frances').hide();
      $('#leitura_outros').hide();
      $('#escrita_outros').hide();
      $('#descPCD').hide();
      
      $('#pcd').change(function(){

        if($("#pcd:checked").val() == undefined){
            $("#pcd").prop('checked', false);
            $('#descPCD').hide(); 
            
        }else{
          $("#pcd").prop('checked', true);
          $('#descPCD').show();  
          $
        }


      });

      $('#ingle').change(function(){

        if($("#ingle:checked").val() == undefined){
            $("#ingle").prop('checked', false);
            $('#leitura_ingles').hide(); 
            $('#escrita_ingles').hide(); 
        }else{
          $("#ingle").prop('checked', true);
          $('#leitura_ingles').show();  
          $('#escrita_ingles').show();
        }


      });

      $('#espanhol').change(function(){

        if($("#espanhol:checked").val() == undefined){
            $("#espanhol").prop('checked', false);
            $('#leitura_espanhol').hide(); 
            $('#escrita_espanhol').hide(); 
        }else{
          $("#espanhol").prop('checked', true);
          $('#leitura_espanhol').show();  
          $('#escrita_espanhol').show();
        }


      });

      $('#frances').change(function(){

        if($("#frances:checked").val() == undefined){
            $("#frances").prop('checked', false);
            $('#leitura_frances').hide(); 
            $('#escrita_frances').hide(); 
        }else{
          $("#frances").prop('checked', true);
          $('#leitura_frances').show();  
          $('#escrita_frances').show();
        }


      });

        $('#outros').change(function(){

        if($("#outros:checked").val() == undefined){
            $("#outros").prop('checked', false);
            $('#leitura_frances').hide(); 
            $('#escrita_frances').hide(); 
        }else{
          $("#outros").prop('checked', true);
          $('#leitura_frances').show();  
          $('#escrita_frances').show();
        }


      });

    });

</script>

   <!-- jquery -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <!-- ***** -->


<!-- Mensagem de cadastro com sucesso -->
@if(session('mensagem'))
  <script>
  Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Registro cadastrado com sucesso!',
  showConfirmButton: false,
  timer: 1500
})
</script>
@endif

<!-- Mesagem de validação de campos  -->
@if ($errors->any())
<script>
Swal.fire({  position: 'center',  icon: 'warning',  title: 'Preencha os campos obrigatório',  showConfirmButton: false,  timer: 1500  })
</script>
@endif

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="/js/checkbox.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> <!-- jquery CDN  -->
</html>
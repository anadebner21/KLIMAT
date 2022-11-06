<?php 

session_start();
include('verificar_login.php');

if($_SESSION['cargo_usuario'] != 'gestor'){
    header('Location: index.php');
    exit();
}
?>

<!doctype html>
<html lang="pt-br">

<head>
  <title>KLIMAT</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- Material Kit CSS -->
  <link href="assets/css/material-kit.css?v=3.0.0" rel="stylesheet" />
</head>

<body>
  <!-- Navbar Transparent -->
  <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent">
    <div class="container">
      <a class="navbar-brand  text-white " href="https://demos.creative-tim.com/material-kit/presentation" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
        KLIMAT - GERENCIAMENTO 
      </a>
      <ul class="navbar-nav">
             
        <li class="nav-item btn-rotate dropdown">
          <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          
          <i class="nc-icon nc-circle-10"></i>
            <p>
              <span class="d-lg-none d-md-block">Ações</span>
            </p>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="logout.php">Sair</a>
          </div>
        </li>
       
      </ul>        
      </div>
    </div>
  </nav>
  <!-- End Navbar -->


  <div class="page-header min-vh-80" style="background-image: url('https://www.adagil.com.br/assets/site/img/aplicacao2.png')">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <div class="text-center">
            <h1 class="text-white">FLUISERV</h1>
            <h3 class="text-white">bem-vindo</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
    <div class="container">
      <div class="section text-center">
        <h2 class="title">Your main section here</h2>
        <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

          <section class="pt-3 pb-4" id="count-stats">
            <div class="container">
              <div class="row">
                <div class="col-lg-9 mx-auto py-3">
                  <div class="row">
                    <div class="col-md-4 position-relative">
                      <div class="p-3 text-center">
                        <h4 class="text-gradient text-primary"> <a href="clientes.php">CLIENTES</a></h4>
                        <h5 class="mt-3"><a href="clientes.php">Veja aqui</a></h5>
                        <p class="text-sm font-weight-normal">a lista de clientes de sua empresa ou cadastre</p>
                      </div>
                      <hr class="vertical dark">
                    </div>
                    <div class="col-md-4 position-relative">
                      <div class="p-3 text-center">
                        <h4 class="text-gradient text-primary">ESTOQUE</h4>
                        <h5 class="mt-3">Veja aqui</h5>
                        <p class="text-sm font-weight-normal">A lista de materiais da sua empresa</p>
                      </div>
                      <hr class="vertical dark">
                    </div>
                    <div class="col-md-4">
                      <div class="p-3 text-center">
                        <h4 class="text-gradient text-primary" >ORÇAMENTOS</h4>
                        <h5 class="mt-3">Veja aqui</h5>
                        <p class="text-sm font-weight-normal">Os orçamentos abertos e fechados</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
      </div>
    </div>
  </div>
  <footer class="footer pt-5 mt-5">
    <div class="container">
      <div class=" row">
        <div class="col-md-3 mb-4 ms-auto">
        
         
        <div class="col-12">
          <div class="text-center">
            <p class="text-dark my-4 text-sm font-weight-normal">
              All rights reserved. Copyright © <script>
                document.write(new Date().getFullYear())
              </script> Material Kit by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>

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
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
</head>

<body style="background-image: url('https://elements-cover-images-0.imgix.net/3e4aa778-b667-4617-a2dd-1212d92331bb?auto=compress%2Cformat&fit=max&w=900&s=dcad91fe49803559f3ba2550dd0ca71a')">
<span class="mask bg-gradient-dark opacity-4"></span>
<!-- Navbar Transparent -->
  <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent">
    
    <div class="container">
      <a class="navbar-brand  text-dark "  rel="tooltip" title="" data-placement="bottom" target="_blank">
        KLIMAT - GERENCIAMENTO 
      </a>
      <ul class="navbar-nav">
             
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
           
           <ul class="navbar-nav">
           <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="logout.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo $_SESSION['nome_usuario'];?>
                <i class="nc-icon nc-circle-10"></i>
                </a>
            </li> 
           </ul>
         </div>
       
      </ul>        
      </div>
    </div>
  </nav>
  <!-- End Navbar -->


  <div class="page-header min-vh-80" style="background-image: url('https://elements-cover-images-0.imgix.net/3e4aa778-b667-4617-a2dd-1212d92331bb?auto=compress%2Cformat&fit=max&w=900&s=dcad91fe49803559f3ba2550dd0ca71a')">
    <span class="mask bg-gradient-dark opacity-4"></span>
    <div class="container" >
      <div class="row">
        <div class="col-md-8 mx-auto">
          <div class="text-center">
            <h1 class="text-secondary font-weight-bold">FLUISERV</h1>
            <h3 class="text-secondary">Administrador</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6 card text-white bg-dark mb-3">
    <div class="container">
      <div class="section text-center">
        <h2 class="title"></h2>
        <div class="card card-body  mx-3 mx-md-4 mt-n6 bg-secondary mb-3">

          <section class="pt-3 pb-4" id="count-stats">
          <div class="content ">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6 ">
            <div class="card card-stats bg-dark">
              <div class="card-body">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-badge"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="words">
                      <h3><p class="card-category"><a href="clientes.php">CLIENTES</a></p></h3>
                      <p class="card-title">Veja seus clientes....
                        <p>
                          
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 ">
            <div class="card card-stats bg-dark">
              <div class="card-body">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-badge"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="words">
                      <h3><p class="card-category"><a href="abrir_orcamento.php">ORÇT</a></p></h3>
                      <p class="card-title">Veja seus orçamentos
                        <p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 ">
            <div class="card card-stats bg-dark">
              <div class="card-body">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-badge"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="words">
                      <h3><p class="card-category"><a href="clientes.php">ESTOQUE</a></p></h3>
                      <p class="card-title">Veja seus materiais
                        <p>
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
              </script> Ana Debner 
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>

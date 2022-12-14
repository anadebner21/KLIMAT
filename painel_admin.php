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
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/paper-dashboard.css">
  <link rel="stylesheet" href="assets/demo/demo.css">
  <link rel="shortcut icon" href="assets/img/favicon.png">
<meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="img/Klimat_Logo__1_-removebg-preview.png">
  <link rel="icon" type="image/png" href="img/Klimat_Logo__1_-removebg-preview.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    KLIMAT-GERENCIAMENTO
  </title>
  <!-- Required meta tags -->
  
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

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
</head>

<body style="background-color:	#3b3b3b;">

<!-- Navbar Transparent -->
  <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent" >
  
    <div class="container">
    
          <a class="navbar-center text-dark " >
            
             
          </a>
          
      <ul class="navbar-nav">
             
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
           
           <ul class="navbar-nav">
           <li class="nav-item">
                <a class="nav-link" href="logout.php" >
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


  <div class="page-header min-vh-80" style="background-image: url('img/painel5.png') ;" >
<link img src="img/painel5.png">
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
                      <h3 ><p class="card-category" class="text-muted" ><a href="clientes.php" class="text-light">CLIENTES</a></p></h3>
                      <p class="card-title">Veja seus clientes
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
                  <div class="icon-big text-center icon-warning" class="demo-icons">
                      
                      <i class="nc-icon nc-book-bookmark"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="words">
                      <h3><p class="card-category" class="text-muted"><a href="orcamento.php"  class="text-light">OR??AMENTO</a></p></h3>
                      <p class="card-title">Veja seus or??amentos
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
                    <div class="icon-big text-center icon-warning" class="demo-icons">
                      <i class="nc-icon nc-settings-gear-65"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="words">
                      <h3><p class="card-category"  class="text-muted"><a href="estoque.php"  class="text-light">ESTOQUE</a></p></h3>
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
        <div class="col-md-15 mb-6 ms-auto">
        
         
        <div class="col-20">
          <div class="text-center">
            <p class="text-ligth my-4 text-sm font-weight-normal">
              All rights reserved. Copyright ?? <script>
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

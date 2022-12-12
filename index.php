<?php
session_start();
?>

<!DOCTYPE html>
                        
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="76x76" href="img/Klimat_Logo__1_-removebg-preview.png">
  <link rel="icon" type="image/png" href="img/Klimat_Logo__1_-removebg-preview.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>KLIMAT</title>
</head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link ref="stylesheet" href="css/login.css">
<body style="background-image: url('img/fundo3.png') ;" >
<link img src="img/fundo3.pg">

<div class="page" >
    <div class="container">
      <div class="row-end">
        <div class="col-md-8 mx-auto">
          <div class="text-center">
            <h1 class="text-black"></h1>
            <h3 class="text" style="color:#3b3b3b;">..........</h3>
            <h3 class="text" style="color:#3b3b3b;">..........</h3>
            <h3 class="text" style="color:#3b3b3b;">..........</h3>

          </div>
        </div>
      </div>
    </div>
  </div>






<div id="login">
        <h3 class="text-start pt-5" style="color: #3b3b3b;">.</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-start align-items-start">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="login.php" method="post">
                            <?php 
                            if(isset($_SESSION['nao_autenticado'])): ?>
                                <h5 class="text-center text-danger"> Usuário ou senha inválidos!!</h5>
                            <?php 
                                endif;
                                unset($_SESSION['nao_autenticado']);
                            ?>
                            <div class="form-group">
                                <label for="usuario" class="text" style="color: #24b3d8;">Usuário:</label><br>
                                <input type="text" name="usuario" id="usuario" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="senha" class="text" style="color: #24b3d8;" >Senha:</label><br>
                                <input type="text" name="senha" id="senha" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

    
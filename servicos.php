<?php
include('conexao.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Serviços</title>


<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
 
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
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


<body>


<nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent">
    <div class="container">
      <a class="navbar-brand  text-dark " rel="tooltip"  data-placement="bottom" target="_blank">
        KLIMAT - GERENCIAMENTO 
      </a>
      <ul class="navbar-nav">
             
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
           
      
    <ul class="navbar-nav mr-auto">
      
    </ul>
    

    
         </div>
       
      </ul>        
      </div>
    </div>
  </nav>
 
   

<div class="page" style="background-image: url('https://www.adagil.com.br/assets/site/img/aplicacao2.png')">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <div class="text-center">
            <h1 class="text-black"></h1>
            <h3 class="text-secondary">..........</h3>
          </div>
        </div>
      </div>
    </div>
  </div>



<div class="content">
            <div class="row">
              <div class="col-md-12">
                <div class="card text-white bg-dark mb-3">
                  <div class="card-header">
                  <h2 class="text-start text-secondary font-weight-bold ">Serviços</h2>
                    <h6 class="card text-right"></h6>

                  <div class="col-xs-4">
                  <div class="col-xs-4">
                  <div class="row">
                    
  <div class="col-md-9 col-xs-4">
    <div class="form-group"> 
     <form class="form-inline my-2 my-lg-0">
       <input name="pesquisar" class="form-control mr-sm-2" type="search" placeholder="Buscar pelo Nome" aria-label="Pesquisar">
       <button name="buttonPesquisar" class="btn btn-outline-info my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
     </form>
    </div>
  </div>
  <div class="col-md-3 col-xs-4">
    <div class="form-group">
    <h6 class="text-end"><button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#modalExemplo">Inserir Novo </button></h6>
    </div>
  </div>
</div>
</div>


  
                  <div class="card-body">
                    <div class="table-secundary">

                      <!--LISTAR TODOS OS Materiais -->

                      <?php


                        if(isset($_GET['buttonPesquisar']) and $_GET['pesquisar'] != ''){
                          $id_servico = $_GET['pesquisar'] . '%';
                           $query = "select * from servico_oferecido where descricao LIKE '$descricao'  order by id_servico asc"; 
                        }else{ 
                         $query = "select * from servico_oferecido order by id_servico asc"; 
                        }


                      
                        

                        $result = mysqli_query($conexao, $query);
                        //$dado = mysqli_fetch_array($result);

                        $row = mysqli_num_rows($result);

                        if($row == ''){

                            echo "<h3> Não existem dados cadastrados no banco </h3>";

                        }else{

                           ?>

                          

                      <table class="table">
                        <thead>
                          
                          <th>
                            Descricao
                          </th>
                          <th>
                            Valor
                          </th>
                           </th>
                           </th>
                            <th>
                            Ações
                          </th>
                        </thead>
                        <tbody>
                         
                         <?php 

                          while($res_1 = mysqli_fetch_array($result)){
                            $descricao = $res_1["descricao"];
                            $valor = $res_1["valor"];
                            $id_servico = $res_1["id_servico"];
                            ?>

                            <tr>

                             <td><?php echo $descricao; ?></td> 
                             <td><?php echo $valor; ?></td>
                            
                             <td>
                             <a class="btn btn-outline-warning" href="estoque.php?func=edita&id_servico=<?php echo $id_servico; ?>"><i class="fa fa-pencil-square-o"></i></a>

                             <a class="btn btn-outline-danger" href="estoque.php?func=deleta&id_servico=<?php echo $id_servico; ?>"><i class="fa fa-minus-square"></i></a>

                             </td>
                            </tr>

                            <?php 
                              }                        
                            ?>
                            

                        </tbody>
                      </table>
                          <?php 
                              }                        
                            ?>
                    </div>
                  </div>
                </div>
              </div>

</div>




 <!-- Modal -->
      <div id="modalExemplo" class="modal fade" role="dialog">
        <div class="modal-dialog">
         <!-- Modal content-->
          <div class="modal-content" style="background-color:#708090;">
            <div class="modal-header" >
              
              <h2 class="text-center text-dark font-weight-bold ">Serviço</h2>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <form method="POST" action="">
              <div class="form-group">
                <label for="id_produto">Nome</label>
                <input type="text" class="form-control mr-2" name="descricao" placeholder="Descrição do Serviço" required>
              </div>
              <div class="form-group">
                <label for="id_produto">Valor</label>
                <input type="text" class="form-control mr-2" name="valor" placeholder="Valor" required>
              </div>

            </div>
                   
            <div class="modal-footer">
               <button type="submit" class="btn btn-success mb-3" name="button">Salvar </button>


                <button type="button" class="btn btn-danger mb-3" data-dismiss="modal">Cancelar </button>
            </form>
            </div>
          </div>
        </div>
      </div>    




</body>
</html>




<!--CADASTRAR -->

<?php
if(isset($_POST['button'])){
  $descricao = $_POST['descricao'];
  $valor = $_POST['valor'];


  //VERIFICAR SE O material JÁ ESTÁ CADASTRADO
  $query_verificar = "select * from servico_oferecido where descricao = '$descricao' ";

  $result_verificar = mysqli_query($conexao, $query_verificar);
  $row_verificar = mysqli_num_rows($result_verificar);

  if($row_verificar > 0){
  echo "<script language='javascript'> window.alert('Serviço já Cadastrado!'); </script>";
  exit();
  }


$query = "INSERT into servico_oferecido (descricao, valor) VALUES ('$descricao', '$valor')";

$result = mysqli_query($conexao, $query);

if($result == ''){
  echo "<script language='javascript'> window.alert('Ocorreu um erro ao Cadastrar!'); </script>";
}else{
    echo "<script language='javascript'> window.alert('Salvo com Sucesso!'); </script>";
    echo "<script language='javascript'> window.location='servicos.php'; </script>";
}

}
?>


<!--EXCLUIR -->
<?php
if(@$_GET['func'] == 'deleta'){
  $id_servico = $_GET['id_servico'];
  $query = "DELETE FROM servico_oferecido where id_servico = '$id_servico'";
  mysqli_query($conexao, $query);
  echo "<script language='javascript'> window.location='servicos.php'; </script>";
}
?>



<!--EDITAR -->
<?php
if(@$_GET['func'] == 'edita'){  
$id_servico= $_GET['id_servico'];
$query = "select * from servico_oferecido where id_servico = '$id_servico'";
$result = mysqli_query($conexao, $query);

 while($res_1 = mysqli_fetch_array($result)){


?>

  <!-- Modal -->
      <div id="modalEditar" class="modal fade" role="dialog">
        <div class="modal-dialog">
         <!-- Modal content-->
          <div class="modal-content" style="background-color:#708090;">
            <div class="modal-header">
              
              <h4 class="modal-title">Serviço</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <form method="POST" action="">
              <div class="form-group">
                <label >Nome</label>
                <input type="text" class="form-control mr-2" name="descricao" placeholder="Nome" value="<?php echo $res_1['descricao']; ?>" required>
              </div>
              <div class="form-group">
                <label >Valor</label>
                <input type="text" class="form-control mr-2" name="valor" placeholder="Valor" value="<?php echo $res_1['valor']; ?>" required>
              </div>

            </div>
                   
            <div class="modal-footer">
               <button type="submit" class="btn btn-success mb-3" name="buttonEditar">Salvar </button>


                <button type="button" class="btn btn-danger mb-3" data-dismiss="modal">Cancelar </button>
            </form>
            </div>
          </div>
        </div>
      </div>    

 

 <script> $("#modalEditar").modal("show"); </script> 

<!--Comando para editar os dados UPDATE -->
<?php
if(isset($_POST['buttonEditar'])){
  $descricao = $_POST['descricao'];
  $valor= $_POST['valor'];



  if ($res_1['descricao'] != $descricao){

       //VERIFICAR SE O CPF JÁ ESTÁ CADASTRADO
    $query_verificar = "select * from servico_oferecido where descricao = '$descricao' ";

    $result_verificar = mysqli_query($conexao, $query_verificar);
    $row_verificar = mysqli_num_rows($result_verificar);

    if($row_verificar > 0){
    echo "<script language='javascript'> window.alert('Serviço já Cadastrado!'); </script>";
    exit();
    }

  }

 


$query_editar = "UPDATE servico_oferecido set descricao = '$descricao', valor = '$valor' where id_servico = '$id_servico' ";

$result_editar = mysqli_query($conexao, $query_editar);

if($result_editar == ''){
  echo "<script language='javascript'> window.alert('Ocorreu um erro ao Editar!'); </script>";
}else{
    echo "<script language='javascript'> window.alert('Editado com Sucesso!'); </script>";
    echo "<script language='javascript'> window.location='servicos.php'; </script>";
}

}
?>


<?php } }  ?>





   
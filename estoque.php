<?php
include('conexao.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>ESTOQUE</title>


<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
 
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>



</head>


<body>



  <nav class="navbar navbar-expand-lg navbar-light bg-light">

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      
    </ul>
    <form class="form-inline my-2 my-lg-0 mr-5">
     
    <form class="form-inline my-2 my-lg-0">
      <input name="pesquisar" class="form-control mr-sm-2" type="search" placeholder="Buscar pelo Nome" aria-label="Pesquisar">
      <button name="buttonPesquisar" class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</nav>





<div class="container">


    

      <br>


         <div class="row">
           <div class="col-sm-12">
            <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#modalExemplo">Inserir Novo </button>

           </div>

          
        </div>


          <div class="content">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">ESTOQUE</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">

                      <!--LISTAR TODOS OS CLIENTES -->

                      <?php


                        if(isset($_GET['buttonPesquisar']) and $_GET['pesquisar'] != ''){
                          $nome_material = $_GET['pesquisar'] . '%';
                           $query = "select * from estoque_materiais where nome_material LIKE '$nome_material'  order by nome asc"; 
                        }else{ 
                         $query = "select * from estoque_materiais order by nome asc"; 
                        }


                      
                        

                        $result = mysqli_query($conexao, $query);
                        //$dado = mysqli_fetch_array($result);
                        $row = mysqli_num_rows($result);

                        if($row == ''){

                            echo "<h3> Não existem dados cadastrados no banco </h3>";

                        }else{

                           ?>

                          

                      <table class="table">
                        <thead class=" text-primary">
                          
                          <th>
                            Nome
                          </th>
                          <th>
                            Valor_Material
                          </th>
                          <th>
                            Quantidade_Material
                          </th>
                           <th>
                            Status
                          </th>
                            <th>
                            Observações
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
                            $nome_material = $res_1["nome_material"];
                            $valor_material = $res_1["valor_material"];
                            $quantidade_material = $res_1["quantidade_material"];
                            $status = $res_1["status"];
                            $obs = $res_1["obs"];
                            $id = $res_1["id_material"];
                            ?>

                            <tr>

                             <td><?php echo $nome_material; ?></td> 
                             <td><?php echo $valor_material; ?></td>
                             <td><?php echo $quantidade_material; ?></td>
                             <td><?php echo $status; ?></td>
                             <td><?php echo $obs; ?></td>
                             <td>
                             <a class="btn btn-info" href="clientes.php?func=edita&id=<?php echo $id; ?>"><i class="fa fa-pencil-square-o"></i></a>

                             <a class="btn btn-danger" href="clientes.php?func=deleta&id=<?php echo $id; ?>"><i class="fa fa-minus-square"></i></a>

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
          <div class="modal-content">
            <div class="modal-header" >
              
              <h4 class="modal-title">MATERIAL</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <form method="POST" action="">
              <div class="form-group">
                <label for="id_produto">Nome</label>
                <input type="text" class="form-control mr-2" name="nome_material" placeholder="Nome" required>
              </div>
              <div class="form-group">
                <label for="id_produto">Valor Material</label>
                <input type="text" class="form-control mr-2" name="valor_material" placeholder="Valor Material" required>
              </div>
              <div class="form-group">
                <label for="quantidade">Quantidade Material</label>
                <input type="text" class="form-control mr-2" name="quantidade_material" placeholder="Quantidade" required>
              </div>
               <div class="form-group">
                <label for="fornecedor">Status</label>
                 <input type="text" class="form-control mr-2" name="status" placeholder="Status" required>
              </div>
              <div class="form-group">
                <label for="fornecedor">Observações</label>
                 <input type="text" class="form-control mr-2" name="obs" placeholder="OBSERVAÇÕES" required>
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
  $nome_material = $_POST['nome_material'];
  $valor_material = $_POST['valor_material'];
  $quantidade_material = $_POST['quantidade_material'];
  $status = $_POST['status'];
  $obs = $_POST['obs'];


  //VERIFICAR SE O material JÁ ESTÁ CADASTRADO
  $query_verificar = "select * from estoque_materiais where nome_material = '$nome_material' ";

  $result_verificar = mysqli_query($conexao, $query_verificar);
  $row_verificar = mysqli_num_rows($result_verificar);

  if($row_verificar > 0){
  echo "<script language='javascript'> window.alert('Material já Cadastrado!'); </script>";
  exit();
  }


$query = "INSERT into estoque_materiais (nome_material, valor_material, quantidade_material, status, obs) VALUES ('$nomenome_material', '$valor_material', '$quantidade_material', '$status', '$obs')";

$result = mysqli_query($conexao, $query);

if($result == ''){
  echo "<script language='javascript'> window.alert('Ocorreu um erro ao Cadastrar!'); </script>";
}else{
    echo "<script language='javascript'> window.alert('Salvo com Sucesso!'); </script>";
    echo "<script language='javascript'> window.location='estoque.php'; </script>";
}

}
?>


<!--EXCLUIR -->
<?php
if(@$_GET['func'] == 'deleta'){
  $id = $_GET['id_material'];
  $query = "DELETE FROM estoque_materiais where id_material = '$id'";
  mysqli_query($conexao, $query);
  echo "<script language='javascript'> window.location='estoque.php'; </script>";
}
?>



<!--EDITAR -->
<?php
if(@$_GET['func'] == 'edita'){  
$id = $_GET['id_material'];
$query = "select * from estoque_materiais where id_material = '$id'";
$result = mysqli_query($conexao, $query);

 while($res_1 = mysqli_fetch_array($result)){


?>

  <!-- Modal -->
      <div id="modalEditar" class="modal fade" role="dialog">
        <div class="modal-dialog">
         <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              
              <h4 class="modal-title">Material</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <form method="POST" action="">
              <div class="form-group">
                <label >Nome</label>
                <input type="text" class="form-control mr-2" name="nome_material" placeholder="Nome" value="<?php echo $res_1['nome_material']; ?>" required>
              </div>
              <div class="form-group">
                <label >Valor_Material</label>
                <input type="text" class="form-control mr-2" name="valor_material" placeholder="Valor" value="<?php echo $res_1['valor_material']; ?>" required>
              </div>
              <div class="form-group">
                <label >Quantidade_Material</label>
                <input type="text" class="form-control mr-2" name="quantidade_material" placeholder="Quantidqde" value="<?php echo $res_1['quantidade_material']; ?>" required>
              </div>
               <div class="form-group">
                <label >Status</label>
                 <input type="text" class="form-control mr-2" name="status" placeholder="Status" value="<?php echo $res_1['status']; ?>" required>
              </div>
              <div class="form-group">
                <label>Observações</label>
                 <input type="text" class="form-control mr-2" name="obs" placeholder="OBS" value="<?php echo $res_1['obs']; ?>" required>
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
  $nome_material = $_POST['nome_material'];
  $valor_material = $_POST['valor_material'];
  $quantidade_material = $_POST['quantidade_material'];
  $status = $_POST['status'];
  $obs = $_POST['obs'];


  if ($res_1['nome_material'] != $nome_material){

       //VERIFICAR SE O CPF JÁ ESTÁ CADASTRADO
    $query_verificar = "select * from estoque_materiais where nome_material = '$nome_material' ";

    $result_verificar = mysqli_query($conexao, $query_verificar);
    $row_verificar = mysqli_num_rows($result_verificar);

    if($row_verificar > 0){
    echo "<script language='javascript'> window.alert('Material já Cadastrado!'); </script>";
    exit();
    }

  }

 


$query_editar = "UPDATE estoque_materiais set nome_material = '$nome_material', valor_material = '$valor_material', quantidade_material = '$quantidade_material', status = '$status', obs = '$obs' where id_material = '$id' ";

$result_editar = mysqli_query($conexao, $query_editar);

if($result_editar == ''){
  echo "<script language='javascript'> window.alert('Ocorreu um erro ao Editar!'); </script>";
}else{
    echo "<script language='javascript'> window.alert('Editado com Sucesso!'); </script>";
    echo "<script language='javascript'> window.location='estoque.php'; </script>";
}

}
?>


<?php } }  ?>





   
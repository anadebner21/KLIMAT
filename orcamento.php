<?php
include('conexao.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>Orçamentos</title>


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
  <a class="navbar-brand" href="painel_funcionario.php"><big><big><i class="fa fa-arrow-left"></i></big></big></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      
    </ul>
    <form class="form-inline my-2 my-lg-0">

      <select class="form-control mr-2" id="category" name="status">
         <option value="Todos">Todos</option> 
          <option value="Aberto">Aberto</option> 
           <option value="Aguardando">Aguardando</option> 
            <option value="Aprovado">Aprovado</option> 
             <option value="Cancelado">Cancelado</option> 
      </select>

      <input name="txtpesquisar" class="form-control mr-sm-2" type="date" placeholder="Pesquisar" aria-label="Pesquisar">
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
                    <h4 class="card-title"> Orçamentos Abertos</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">

                      <!--LISTAR TODOS OS ORÇAMENTOS -->

                      <?php


                        if(isset($_GET['buttonPesquisar']) and $_GET['txtpesquisar'] != '' and $_GET['status'] != 'Todos'){
                          $data = $_GET['txtpesquisar'] . '%';
                          $status = $_GET['status'];

                           $query = "select o.id_orcamento, o.tecnico ,o.cliente, o.servico_oferecido, o.valor_total, o.status, c.nome as cli_nome from orcamento as o INNER JOIN clientes as c on (o.cliente = c.id) where o.data = '$data' and o.status = '$status' order by o.id_orcamento asc";

                         }else if(isset($_GET['buttonPesquisar']) and $_GET['txtpesquisar'] == '' and $_GET['status'] != 'Todos'){
                         $status= $_GET['status'];
                         $query = "select o.id_orcamento, o.tecnico ,o.cliente, o.servico_oferecido, o.valor_total, o.status, c.nome as cli_nome from orcamento as o INNER JOIN clientes as c on (o.cliente = c.id) where o.data = curDate() and o.status = '$status' order by o.id_orcamento asc"; 

                          }else if(isset($_GET['buttonPesquisar']) and $_GET['txtpesquisar']!= '' and $_GET['status'] == 'Todos'){
                         $data = $_GET['txtpesquisar'] . '%';
                         $query = "select o.id_orcamento, o.tecnico,o.cliente, o.servico_oferecido, o.valor_total, o.status, c.nome as cli_nome from orcamento as o INNER JOIN clientes as c on (o.cliente = c.id) where o.data = '$data' order by o.id_orcamento asc"; 
                        

                        }else{
                         $query = "select o.id_orcamento, o.tecnico ,o.cliente, o.servico_oferecido, o.valor_total, o.status, c.nome as cli_nome from orcamento as o INNER JOIN clientes as c on (o.cliente = c.id) where o.data = curDate()  order by o.id_orcamento asc"; 
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
                            Cliente
                          </th>
                          <th>
                            Técnico
                          </th>
                          <th>
                            Servico
                          </th>
                           <th>
                            Valor Total
                          </th>
                            <th>
                            Status
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
                            $cliente = $res_1["cli_nome"];
                            $tecnico = $res_1["tecnico"];
                            $servico_oferecido= $res_1["servico_oferecido"];
                            $valor_total = $res_1["valor_total"];
                            $status = $res_1["status"];
                           
                            $id_orcamento = $res_1["id_orcamento"];

                         
                            ?>

                            <tr>

                             <td><?php echo $cliente; ?></td>
                             <td><?php echo $tecnico; ?></td> 
                             <td><?php echo $servico_oferecido; ?></td>
                             <td><?php echo $valor_total; ?></td>
                             <td><?php echo $status; ?></td>
                             
                           
                             <td>
                             <a class="btn btn-info" href="orcamento.php?func=edita&id=<?php echo $id_orcamento; ?>"><i class="fa fa-pencil-square-o"></i></a>

                             <a class="btn btn-danger" href="orcamento.php?func=deleta&id=<?php echo $id_orcamento; ?>"><i class="fa fa-minus-square"></i></a>

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
            <div class="modal-header">
              
              <h4 class="modal-title">Novo Orçamento</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <form method="POST" action="">
              <div class="form-group">
                <label for="fornecedor">Técnico Responsável</label>
                 <input type="text" class="form-control mr-2" name="tecnico" placeholder="Técnico" required>
              </div>
              <div class="form-group">
               <label for="fornecedor">Cliente</label>
                
                  <select class="form-control mr-2" id="category" name="cliente">
                  <?php
                  
                  $query = "SELECT * FROM clientes ORDER BY nome asc";
                  $result = mysqli_query($conexao, $query);

                  if($result){
                    while($res_1 = mysqli_fetch_array($result)){
                         ?>                                             
                    <option value="<?php echo $res_1['id']; ?>"><?php echo $res_1['nome']; ?></option> 
                         <?php      
                       }
                   }
                  ?>
                  </select>
              </div>
             
              <div class="form-group">
                <label for="quantidade">Cliente Responsável Pelo Tratamento do Serviço</label>
                <input type="text" class="form-control mr-2" name="cliente_representante_projeto" placeholder="Cliente Representante" required>
              </div>
              
               <div class="form-group">
                <label for="quantidade">Quantidade Aparelhos</label>
                <input type="number" class="form-control mr-2" name="quantidade_aparelhos" placeholder="Qtd Aparelhos" required>
              </div>

               <div class="form-group">
                <label for="quantidade">Servico a ser prestado</label>
                <input type="text" class="form-control mr-2" name="servico_oferecido" placeholder="Serviço a ser Prestado" required>
              </div>

              <div class="form-group">
                <label for="quantidade">Descrição Serviço</label>
                <input type="text" class="form-control mr-2" name="descricao" placeholder="Descrição" required>
              </div>
              <div class="form-group">
                <label for="quantidade">Tempo Garantia</label>
                <input type="text" class="form-control mr-2" name="tempo_garantia" placeholder="Garantia" required>
              </div>
              <div class="form-group">
                <label for="quantidade">Sub-Total</label>
                <input type="text" class="form-control mr-2" name="sub_total" placeholder="Sub-total" required>
              </div>
              
              <div class="form-group">
                <label for="quantidade">valor Total</label>
                <input type="text" class="form-control mr-2" name="valor_total" placeholder="Valor ttl" required>
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
  $tecnico = $_POST['tecnico'];
  $cliente = $_POST['cliente'];
  $cliente_representante_projeto = $_POST['cliente_representante_projeto'];
  $quantidade_aparelhos = $_POST['quantidade_aparelhos']; 
  $servico_oferecido = $_POST['servico_oferecido']; 
  $descricao = $_POST['descricao'];
  $tempo_garantia = $_POST['tempo_garantia'];
  $sub_total = $_POST['sub_total'];
  $status = $_POST['status'];
  $valor_total = $_POST['valor_total'];

  //VERIFICAR SE O CPF JÁ ESTÁ CADASTRADO
  

$query = "INSERT into orcamento (data, tecnico, cliente, cliente_representante_projeto, quantidade_aparelhos, servico_oferecido, descricao, tempo_garantia, sub_total,status, valor_total) VALUES (curDate(), '$tecnico', '$cliente', '$cliente_representante_projeto	', '$quantidade_aparelhos', '$servico_oferecido','descricao','tempo_garantia','0', 'Aberto', '0' )";

$result = mysqli_query($conexao, $query);

if($result == ''){
  echo "<script language='javascript'> window.alert('Ocorreu um erro ao Cadastrar!'); </script>";
}else{
    echo "<script language='javascript'> window.alert('Salvo com Sucesso!'); </script>";
    echo "<script language='javascript'> window.location='orcamento.php'; </script>";
}

}
?>


<!--EXCLUIR -->
<?php
if(@$_GET['func'] == 'deleta'){
  $id_orcamento = $_GET['id_orcamento'];
  $query = "DELETE FROM orcamento where id_orcamento = '$id_orcamento'";
  mysqli_query($conexao, $query);
  echo "<script language='javascript'> window.location='orcamento.php'; </script>";
}
?>



<!--EDITAR -->
<?php
if(@$_GET['func'] == 'edita'){  
  $id_orcamento = $_GET['id_orcamento'];
  $query = "select * from orcamento where id_orcamento = '$id_orcamento '";
  $result = mysqli_query($conexao, $query);
  
   while($res_1 = mysqli_fetch_array($result)){


?>

 <!-- Modal -->
 <div id="modalEditar" class="modal fade" role="dialog">
        <div class="modal-dialog">
         <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              
              <h4 class="modal-title">Editar Orçamento</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <form method="POST" action="">
              <div class="form-group">
                <label for="quantidade">Técnico</label>
                <input type="text" class="form-control mr-2" name="tecnico" placeholder="tecnico_responsavel" value="<?php echo $res_1['tecnico_responsavel']; ?>" required>
              </div>
             
              <div class="form-group">
               <label for="fornecedor">Cliente</label>
                
                  <select class="form-control mr-2" id="category" name="cliente">
                  <?php
                  
                  $query = "SELECT * FROM clientes ORDER BY nome asc";
                  $result = mysqli_query($conexao, $query);

                  if($result){
                    while($res_2 = mysqli_fetch_array($result)){
                      ?>                                             
                 <option value="<?php echo $res_2['id']; ?>"><?php echo $res_2['nome']; ?></option> 
                      <?php      
                    }
                    
                   }
                  ?>
                  </select>
              </div>
              <div class="form-group">
                <label for="quantidade">Cliente representante_projeto</label>
                <input type="text" class="form-control mr-2" name="cliente_representante_projeto" value="<?php echo $res_1['cliente_representante_projeto']; ?>" placeholder="Cliente Repre Projeto" required>
              </div>
              
               <div class="form-group">
                <label for="quantidade">Quantidade Aparelhos</label>
                <input type="text" class="form-control mr-2" name="quantidade_aparelhos" placeholder="aparelhos" value="<?php echo $res_1['quantidade_aparelhos']; ?>" required>
              </div>

               <div class="form-group">
                <label for="quantidade">Serviço A Ser Prestado</label>
                <input type="text" class="form-control mr-2" name="servico_oferecido" value="<?php echo $res_1['servico_oferecido']; ?>" placeholder="servico_oferecido" required>
              </div>

              <div class="form-group">
                <label for="quantidade">Descrição</label>
                <input type="text" class="form-control mr-2" name="descricao" placeholder="descricao" value="<?php echo $res_1['descricao']; ?>" required>
              </div>
              
              <div class="form-group">
                <label for="quantidade">Tempo Garantia</label>
                <input type="text" class="form-control mr-2" name="tempo_garantia" placeholder="tempo_garantia" value="<?php echo $res_1['tempo_garantia']; ?>" required>
              </div>
              <div class="form-group">
                <label for="quantidade">Sub Total</label>
                <input type="text" class="form-control mr-2" name="sub_total" placeholder="sub_total" value="<?php echo $res_1['sub_total']; ?>" required>
              </div>
              <div class="form-group">
                <label for="quantidade">Valor Total</label>
                <input type="text" class="form-control mr-2" name="valor_total" placeholder="valor_total" value="<?php echo $res_1['valor_total']; ?>" required>
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
  $tecnico = $_POST['tecnico'];
  $cliente = $_POST['cliente'];
  $cliente_representante_projeto = $_POST['cliente_representante_projeto'];
  $quantidade_aparelhos = $_POST['quantidade_aparelhos'];
  $servico_oferecido = $_POST['servico_oferecido'];
  $descricao = $_POST['descricao'];
  $tempo_garantia = $_POST['tempo_garantia'];
  $sub_total = $_POST['sub_total'];
  $valor_total = $_POST['valor_total'];



$query_editar = "UPDATE orcamento set tecnico = '$tecnico', cliente = '$cliente', cliente_representante_projeto = '$cliente_representante_projeto', quantidade_aparelhos= '$quantidade_aparelhos', servico_oferecido = '$servico_oferecido', descricao = '$descricao',tempo_garantia = '$tempo_garantia', sub_total = '$sub_total', valor_total = '$valor_total' where id_orcamento = '$id_orcamento' ";

$result_editar = mysqli_query($conexao, $query_editar);

if($result_editar == ''){
  echo "<script language='javascript'> window.alert('Ocorreu um erro ao Editar!'); </script>";
}else{
    echo "<script language='javascript'> window.alert('Editado com Sucesso!'); </script>";
    echo "<script language='javascript'> window.location='orcamento.php'; </script>";
}

}
?>


<?php } }  ?>


<!--MASCARAS -->

<script type="text/javascript">
    $(document).ready(function(){
      $('#txttelefone').mask('(00) 00000-0000');
      $('#txtcpf').mask('000.000.000-00');
      });
</script>



   
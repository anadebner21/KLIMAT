<?php
include('conexao.php');
?>

<!DOCTYPE html>
<html>
<head>
<link rel="apple-touch-icon" sizes="76x76" href="img/Klimat_Logo__1_-removebg-preview.png">
  <link rel="icon" type="image/png" href="img/Klimat_Logo__1_-removebg-preview.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Orçamentos</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
 
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



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
                    <h2 class="text-start text-secondary font-weight-bold ">ORÇAMENTOS</h2>
                    <h6 class="card text-right"></h6>

                    <div class="col-xs-4">
                    <div class="col-xs-4">
                    <div class="row">
                    
  <div class="col-md-4 col-xs-4">
    <div class="form-group">
    <form class="form-inline my-2 my-lg-0">

      <select class="form-control mr-2" id="category" name="status" style="background-color: 	#C0C0C0;">
         <option value="Todos">Todos</option> 
          <option value="Aberto">Aberto</option> 
           <option value="Aguardando">Aguardando</option> 
            <option value="Aprovado">Aprovado</option> 
             <option value="Cancelado">Cancelado</option> 
      </select>

      <input name="txtpesquisar" class="form-control mr-sm-2" type="date" placeholder="Pesquisar" aria-label="Pesquisar" style="background-color: 	#C0C0C0;">
      <button name="buttonPesquisar" class="btn btn-outline-info my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
    </form>
    </div>
  </div>
  
  </div>
  
  

  <div class="col-md-12 col-xs-4">
    <div class="form-group">
    <h6 class="text-end"><button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#modalExemplo">Inserir Novo</h6>

    
    </div>
  </div>
</div>
</div>

    

          



          
      
    
                  <div class="card-body">
                    <div class="table-secundary">

                      <!--LISTAR TODOS OS ORÇAMENTOS -->

                      <?php


                        if(isset($_GET['buttonPesquisar']) and $_GET['txtpesquisar'] != '' and $_GET['status'] != 'Todos'){
                          $data = $_GET['txtpesquisar'] . '%';
                          $status = $_GET['status'];

                           $query = "select o.id_orcamento, o.tecnico ,o.cliente, o.servico_oferecido, o.valor_total, o.status, c.nome as cli_nome, s.descricao as ser_descri from orcamento as o INNER JOIN clientes as c on (o.cliente = c.id) INNER JOIN servico_oferecido as s on (o.servico_oferecido = s.id_servico) where o.data = '$data' and o.status = '$status' order by o.id_orcamento asc";

                         }else if(isset($_GET['buttonPesquisar']) and $_GET['txtpesquisar'] == '' and $_GET['status'] != 'Todos'){
                         $status= $_GET['status'];
                         $query = "select o.id_orcamento, o.tecnico ,o.cliente, o.servico_oferecido, o.valor_total, o.status, c.nome as cli_nome, s.descricao as ser_descri from orcamento as o INNER JOIN clientes as c on (o.cliente = c.id) INNER JOIN servico_oferecido as s on (o.servico_oferecido = s.id_servico) where o.data = curDate() and o.status = '$status' order by o.id_orcamento asc"; 

                          }else if(isset($_GET['buttonPesquisar']) and $_GET['txtpesquisar']!= '' and $_GET['status'] == 'Todos'){
                          $data = $_GET['txtpesquisar'] . '%';
                          $query = "select o.id_orcamento, o.tecnico,o.cliente, o.servico_oferecido, o.valor_total, o.status, c.nome as cli_nome, s.descricao as ser_descri from orcamento as o INNER JOIN clientes as c on (o.cliente = c.id) INNER JOIN servico_oferecido as s on (o.servico_oferecido = s.id_servico) where o.data = '$data' order by o.id_orcamento asc"; 
                        

                        }else{
                         $query = "select o.id_orcamento, o.tecnico ,o.cliente,o.cliente_representante_projeto, o.quantidade_aparelhos, o.descricao, o.tempo_garantia, o.sub_total, o.servico_oferecido, o.valor_total, o.status, c.nome as cli_nome, s.descricao as ser_descri from orcamento as o INNER JOIN clientes as c on (o.cliente = c.id) INNER JOIN servico_oferecido as s on (o.servico_oferecido = s.id_servico) where o.cliente order by o.id_orcamento asc"; 
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
                            $servico_oferecido= $res_1["ser_descri"];
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
                             <a class="btn btn-outline-info" href="rel/rel_orcamentos_class.php?id_orcamento=<?php echo $id_orcamento; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
                                <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"/>
                                <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
                              </svg></a>
                             <a class="btn btn-outline-success" href="orcamento.php?func=visualiza&id_orcamento=<?php echo $id_orcamento; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-binoculars-fill" viewBox="0 0 16 16">
                              <path d="M4.5 1A1.5 1.5 0 0 0 3 2.5V3h4v-.5A1.5 1.5 0 0 0 5.5 1h-1zM7 4v1h2V4h4v.882a.5.5 0 0 0 .276.447l.895.447A1.5 1.5 0 0 1 15 7.118V13H9v-1.5a.5.5 0 0 1 .146-.354l.854-.853V9.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v.793l.854.853A.5.5 0 0 1 7 11.5V13H1V7.118a1.5 1.5 0 0 1 .83-1.342l.894-.447A.5.5 0 0 0 3 4.882V4h4zM1 14v.5A1.5 1.5 0 0 0 2.5 16h3A1.5 1.5 0 0 0 7 14.5V14H1zm8 0v.5a1.5 1.5 0 0 0 1.5 1.5h3a1.5 1.5 0 0 0 1.5-1.5V14H9zm4-11H9v-.5A1.5 1.5 0 0 1 10.5 1h1A1.5 1.5 0 0 1 13 2.5V3z"/>
                              </svg></a>
                              <a class="btn btn-outline-warning" href="orcamento.php?func=edita&id_orcamento=<?php echo $id_orcamento; ?>"><i class="fa fa-pencil-square-o"></i></a>

                              <a class="btn btn-outline-danger" href="orcamento.php?func=deleta&id_orcamento=<?php echo $id_orcamento; ?>"><i class="fa fa-minus-square"></i></a>

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
            <div class="modal-header">
              
              <h2 class="text-center text-dark font-weight-bold">Novo Orçamento</h2>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <form method="POST" action="">
              <div class="form-group">
                <label class="text-dark" for="fornecedor" >Técnico Responsável</label>
                 <input type="text" class="form-control mr-2" name="tecnico" placeholder="Técnico" required>
              </div>
              <div class="form-group">
               <label class="text-dark" for="fornecedor">Cliente</label>
                
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
                <label class="text-dark" for="quantidade">Cliente Responsável Pelo Tratamento do Serviço</label>
                <input type="text" class="form-control mr-2" name="cliente_representante_projeto" placeholder="Cliente Representante" required>
              </div>
              
               <div class="form-group">
                <label class="text-dark" for="quantidade">Quantidade Aparelhos</label>
                <input type="number" class="form-control mr-2" name="quantidade_aparelhos" placeholder="Qtd Aparelhos" required>
              </div>

              <div class="form-group">
               <label class="text-dark" for="fornecedor">Serviço Oferecido</label>
                
                  <select class="form-control mr-2" id="category" name="servico_oferecido">
                  <?php
                  
                  $query = "SELECT * FROM servico_oferecido ORDER BY descricao asc";
                  $result = mysqli_query($conexao, $query);

                  if($result){
                    while($res_1 = mysqli_fetch_array($result)){
                         ?>                                             
                    <option value="<?php echo $res_1['id_servico']; ?>"><?php echo $res_1['descricao']; ?></option> 
                         <?php      
                       }
                   }
                  ?>
                  </select>
              </div>
             

              <div class="form-group">
                <label class="text-dark" for="quantidade">Descrição Serviço</label>
                <input type="text" class="form-control mr-2" name="descricao" placeholder="Descrição" required>
              </div>
              <div class="form-group">
                <label class="text-dark" for="quantidade">Tempo Garantia</label>
                <input type="text" class="form-control mr-2" name="tempo_garantia" placeholder="Garantia" required>
              </div>
              <div class="form-group">
                <label class="text-dark" for="quantidade">Sub-Total</label>
                <input type="text" class="form-control mr-2" name="sub_total" placeholder="Sub-total" required>
              </div>
              
              <div class="form-group">
                <label class="text-dark" for="quantidade">valor Total</label>
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

  

$query = "INSERT into orcamento (data, tecnico, cliente, cliente_representante_projeto, quantidade_aparelhos, servico_oferecido, descricao, tempo_garantia, sub_total,status, valor_total) VALUES (curDate(), '$tecnico', '$cliente', '$cliente_representante_projeto	', '$quantidade_aparelhos', '$servico_oferecido','$descricao','$tempo_garantia','$sub_total', 'Aberto', '$valor_total' )";

$result = mysqli_query($conexao, $query);

if($result == ''){
  echo "<script language='javascript'> window.alert('Ocorreu um erro ao Cadastrar!'); </script>";
}else{
    echo "<script language='javascript'> window.alert('Salvo com Sucesso!'); </script>";
    echo "<script language='javascript'> window.location='orcamento.php'; </script>";
?>


<?php 
}
}?>


<!--EXCLUIR -->
<?php
if(@$_GET['func'] == 'deleta'){
  $id_orcamento = $_GET['id_orcamento'];
  $query = "DELETE FROM orcamento where id_orcamento = '$id_orcamento'";
  mysqli_query($conexao, $query);
  echo "<script language='javascript'> window.location='orcamento.php'; </script>";
}
?>
<!--Visualizar-->

<?php
if(@$_GET['func'] == 'visualiza'){  
  $id_orcamento = $_GET['id_orcamento'];
  
$query_visualizar = "select o.id_orcamento, o.data, o.tecnico ,o.cliente, o.cliente_representante_projeto, o.sub_total, o.quantidade_aparelhos, o.servico_oferecido, o.tempo_garantia, o.descricao, o.valor_total, o.status, c.nome as cli_nome, c.cpf_cnpj, c.endereco, c.email, c.telefone, s.descricao as ser_descri from orcamento as o INNER JOIN clientes as c on (o.cliente = c.id) INNER JOIN servico_oferecido as s on (o.servico_oferecido = s.id_servico) where o.id_orcamento = '$id_orcamento' "; 

$result_visualizar = mysqli_query($conexao, $query_visualizar);


 while($res_2 = mysqli_fetch_array($result_visualizar)){

$data2 = implode('/', array_reverse(explode('-', $res_2['data'])));
$tecnico = $res_2['tecnico'];
  $cliente = $res_2['cli_nome'];
  $cliente_representante_projeto = $res_2['cliente_representante_projeto'];
  $quantidade_aparelhos = $res_2['quantidade_aparelhos']; 
  $servico_oferecido = $res_2['ser_descri']; 
  $descricao = $res_2['descricao'];
  $tempo_garantia = $res_2['tempo_garantia'];
  $sub_total = $res_2['sub_total'];
  $valor_total = $res_2['valor_total'];
}


?>


<!-- Modal -->
<div class="modal fade" id="modalVisualizar"  role="dialog"  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-color:#708090;">
      <div class="modal-header">
      <h2 class="text-center text-dark font-weight-bold">Detalhes Orçamento</h2>

        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p class="font-weight-bold" style="font-size:20px"> <b> ID Orçamento: </b><?php echo $id_orcamento; ?> </p>
      <p style="font-size:12px">  <b><h6>Data Orçamento: </h6></b><?php echo $data2; ?> </p>
      <p style="font-size:12px">  <h6><b>Técnico:</b></h6> <?php echo $tecnico; ?> </p>
      <p style="font-size:12px">  <h6><b>Cliente: </b></h6><?php echo $cliente; ?> </p>
      <p style="font-size:12px">  <h6><b>Cliente Mediador: </b></h6><?php echo $cliente_representante_projeto; ?> </p>
      <p style="font-size:12px">  <h6><b>Serviço Oferecido:</b></h6> <?php echo $servico_oferecido; ?> </p>
      <p style="font-size:12px">  <h6><b>Quantidade Aparelhos:</b></h6> <?php echo $quantidade_aparelhos; ?> </p>
      <p style="font-size:12px">  <h6><b>Descrição:</b></h6> <?php echo $descricao; ?> </p>
      <p style="font-size:12px">  <h6><b>Tempo de Garantia do Serviço a ser executado: </b></h6><?php echo $tempo_garantia; ?> </p>
      <p style="font-size:12px">  <h6><b>Sub-Total:</b></h6> <?php echo $sub_total; ?> </p>
      <p style="font-size:12px">  <h6><b>Total:</b></h6> <?php echo $valor_total; ?> </p>
              






      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<script> $("#modalVisualizar").modal("show"); </script> 


  <?php }  ?>


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
          <div class="modal-content" style="background-color:#708090;">
            <div class="modal-header">
              
              <h4 class="modal-title">Editar Orçamento</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <form method="POST" action="">
              <div class="form-group">
                <label class="text-dark" for="quantidade">Técnico</label>
                <input type="text" class="form-control mr-2" name="tecnico" placeholder="tecnico" value="<?php echo $res_1['tecnico']; ?>" required>
              </div>
              
        
              <div class="form-group">
                <label class="text-dark" for="quantidade">Cliente representante_projeto</label>
                <input type="text" class="form-control mr-2" name="cliente_representante_projeto" value="<?php echo $res_1['cliente_representante_projeto']; ?>" placeholder="Cliente Repre Projeto" required>
              </div>
              <div class="form-group">
                <label class="text-dark" for="quantidade">Quantidade Aparelhos</label>
                <input type="number" class="form-control mr-2" name="quantidade_aparelhos" value="<?php echo $res_1['quantidade_aparelhos']; ?>"  placeholder="Qtd Aparelhos" required>
              </div>

              <div class="form-group">
               <label class="text-dark"for="fornecedor">Serviço Oferecido</label>
                
                  <select class="form-control mr-2" id="category" name="servico_oferecido" value="<?php echo $res_1['servico_oferecido']; ?> " required>
                  <?php
                  
                  $query = "SELECT * FROM servico_oferecido ORDER BY descricao asc";
                  $result = mysqli_query($conexao, $query);

                  if($result){
                    while($res_2 = mysqli_fetch_array($result)){
                      ?>                                             
                 <option value="<?php echo $res_2['id_servico']; ?>"><?php echo $res_2['descricao']; ?></option> 
                      <?php      
                    }
                    if((int)$row['count'] > 0) 
                    {
                        echo 'You have already entered this competition!\n';
                        echo $row['Email'];
                        echo $row['IP'];
                    }
                    else {
                        echo 'success';
                    }
                    
                   }
                  ?>
                  </select>
              </div>
              <div class="form-group">
                <label class="text-dark"for="quantidade">Descrição</label>
                <input type="text" class="form-control mr-2" name="descricao" placeholder="descricao" value="<?php echo $res_1['descricao']; ?>" required>
              </div>
              
              <div class="form-group">
                <label class="text-dark" for="quantidade">Tempo Garantia</label>
                <input type="text" class="form-control mr-2" name="tempo_garantia" placeholder="tempo_garantia" value="<?php echo $res_1['tempo_garantia']; ?>" required>
              </div>
              <div class="form-group">
                <label class="text-dark" for="quantidade">Sub Total</label>
                <input type="text" class="form-control mr-2" name="sub_total" placeholder="sub_total" value="<?php echo $res_1['sub_total']; ?>" required>
              </div>
              <div class="form-group">
                <label class="text-dark" for="quantidade">Valor Total</label>
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
  $cliente_representante_projeto = $_POST['cliente_representante_projeto'];
  $quantidade_aparelhos = $_POST['quantidade_aparelhos'];
  $servico_oferecido = $_POST['servico_oferecido'];
  $descricao = $_POST['descricao'];
  $tempo_garantia = $_POST['tempo_garantia'];
  $sub_total = $_POST['sub_total'];
  $valor_total = $_POST['valor_total'];



$query_editar = "UPDATE orcamento set tecnico = '$tecnico', cliente_representante_projeto = '$cliente_representante_projeto', quantidade_aparelhos= '$quantidade_aparelhos', servico_oferecido = '$servico_oferecido', descricao = '$descricao',tempo_garantia = '$tempo_garantia', sub_total = '$sub_total', valor_total = '$valor_total' where id_orcamento = '$id_orcamento' ";

$result_editar = mysqli_query($conexao, $query_editar);

if($result_editar == ''){
  echo "<script language='javascript'> window.alert('Ocorreu um erro ao Editar!'); </script>";
}else{
    echo "<script language='javascript'> window.alert('Editado com Sucesso!'); </script>";
    echo "<script language='javascript'> window.location='orcamento.php'; </script>";
}

}
?>


<?php } }   ?>


<!--MASCARAS -->

<script type="text/javascript">
    $(document).ready(function(){
      $('#txttelefone').mask('(00) 00000-0000');
      $('#txtcpf').mask('000.000.000-00');
      });
</script>



   
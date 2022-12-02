<?php
include('conexao.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>ORÇAMENTOS</title>


<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
 
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>



</head>


<body>



  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input name="txtpesquisar" class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
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
                    <h4 class="card-title">ORÇAMENTOS</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">

                      <!--LISTAR TODOS OS ORÇAMENTOS -->

                      <?php


                        if(isset($_GET['buttonPesquisar']) and $_GET['pesquisar'] != ''){
                          $data = $_GET['pesquisar'] . '%';
                           $query = "select * from orcamento where data_orcamento = '$data_orcamento'  order by id_orcamento asc"; 
                        }else{
                         $query = "select * from orcamento where data_orcamento = curDate() order by id_orcamento asc"; 
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
                            Técnico_Responsável
                          </th>
                          <th>
                            Quantidade_Aparelhos
                          </th>
                           <th>
                            Valor Total
                          </th>
                            <th>
                            Status
                          </th>
                           </th>
                            Data
                           </th>
                            <th>
                            Ações
                          </th>
                        </thead>
                        <tbody>
                         
                         <?php 

                          while($res_1 = mysqli_fetch_array($result)){
                            $cliente = $res_1["cliente"];
                            $tecnico_responsavel = $res_1["tecnico_responsavel"];
                            $quantidade_aparelhos = $res_1["quantidade_aparelhos"];
                            $valor_total = $res_1["valor_total"];
                            $status = $res_1["status"];
                           
                            $id = $res_1["id_orcamento"];

                         
                            ?>

                            <tr>

                             <td><?php echo $cliente; ?></td>
                             <td><?php echo $tecnico_responsavel; ?></td> 
                             <td><?php echo $quantidade_aparelhos; ?></td>
                             <td><?php echo $valor_total; ?></td>
                             <td><?php echo $status; ?></td>
                             
                           
                             <td>
                             <a class="btn btn-info" href="funcionarios.php?func=edita&id=<?php echo $id; ?>"><i class="fa fa-pencil-square-o"></i></a>

                             <a class="btn btn-danger" href="funcionarios.php?func=deleta&id=<?php echo $id; ?>"><i class="fa fa-minus-square"></i></a>

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
               <div class="form-group">
                <label for="fornecedor">Cliente</label>
                
                  <select class="form-control mr-2" id="category" name="cargo">
                  <?php
                  
                  $query = "SELECT * FROM clientes ORDER BY nome asc";
                  $result = mysqli_query($conexao, $query);

                  if((int)$row['count'] > ($result)){
                    while($res_1 = mysqli_fetch_array($result)){
                         ?>                                             
                    <option value="<?php echo $res_1['nome']; ?>"><?php echo $res_1['nome']; ?></option> 
                         <?php      
                       }
                   }
                  ?>
                  </select>             
             </div>
                   
            <div class="modal-footer">
               <button type="submit" class="btn btn-success mb-3" name="button">Salvar </button>


                <button type="button" class="btn btn-danger mb-3" data-dismiss="modal">Cancelar </button>
            </form>
            </div>
          
    
        




</body>
</html>




<!--CADASTRAR -->

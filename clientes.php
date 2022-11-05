<?php 

include("conexao.php");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Clientes</title>


<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
 
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

</head>


<body>



  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><big><big><i class="fa fa-arrow-left"></i></big></big></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
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
                    <h4 class="card-title"> CLIENTES</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                        <?php

                        
                                
                                $query = "select * from clientes order by nome asc"; 
                                

                                $result = mysqli_query($conexao, $query);
                                //$dado = mysqli_fetch_array($result);
                                $row = mysqli_num_rows($result);
                            
                            if($row == ''){
                            echo"<h3>Não existe dados a serem mostrados</h3>";
                           
                            }else{
                            
                            ?>   


                      <table class="table">
                        <thead class=" text-primary">
                          
                        <th>
                            Nome
                          </th>
                          <th>
                            CPF/CNPJ
                          </th>
                          <th>
                            Endereço
                          </th>
                           <th>
                            Email
                          </th>
                            <th>
                            Telefone
                          </th>
                           </th>
                            <th>
                            Data
                          </th>
                           </th>
                            <th>
                            Ações
                          </th>
                        </thead>
                        <tbody>
                        <?php
                         while($res_1 = mysqli_fetch_array($result)) {
                            $nome = $res_1['nome'];
                            $cpf_cnpj = $res_1['cpf_cnpj'];
                            $endereco = $res_1['endereco'];
                            $email = $res_1['email'];
                            $telefone = $res_1['telefone'];
                            $data = $res_1['data'];
                            $id = $res_1["id"];

                            $data2 = implode('/', array_reverse(explode('-', $data)));

                            ?>

                            <tr>
                                <td><?php echo $nome; ?></td> 
                                <td><?php echo $cpf_cnpj; ?></td>
                                <td><?php echo $endereco; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $telefone; ?></td>
                                <td><?php echo $data2; ?></td>
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
            <div class="modal-header">
              
              <h4 class="modal-title">Clientes</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            <form method="POST" action="">
              <div class="form-group">
                <label for="id_produto">Nome</label>
                <input type="text" class="form-control mr-2" name="nome" id="nome" placeholder="Nome" required>
              </div>
              <div class="form-group">
                <label for="fornecedor">CPF ou CNPJ</label>
                 <input type="text" class="form-control mr-2" name="cpf_cnpj" id="cpf_cnpj" placeholder="CPF/CNPJ" required>
              </div>
              <div class="form-group">
                <label for="quantidade">Endereço</label>
                <input type="text" class="form-control mr-2" name="endereco" id="endereco" placeholder="Endereço" required>
              </div>
               <div class="form-group">
                <label for="fornecedor">Email</label>
                 <input type="email" class="form-control mr-2" name="email" id="email" placeholder="Email" required>
              </div>
              <div class="form-group">
                <label for="fornecedor">Telefone</label>
                 <input type="text" class="form-control mr-2" name="telefone" id="telefone" placeholder="Telefone" required>
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
    $nome =$_POST['nome'];
    $cpf_cnpj =$_POST['cpf_cnpj'];
    $endereco =$_POST['endereco'];
    $email =$_POST['email'];
    $telefone =$_POST['telefone'];

    //vereficar cpf igual 
    $query_verificar= "select * from clientes where cpf_cnpj = '{$cpf_cnpj}'";

    $result_verificar = mysqli_query($conexao, $query_verificar);
    $row_verificar = mysqli_num_rows($result_verificar);

    if($row_verificar > 0){
        echo "<script language ='javascript'> window.alert('CPF JÁ CADASTRADO'); </scrip>";
        exit();
    }


$query = "INSERT into clientes (nome,cpf_cnpj, endereco, email, telefone, data) VALUES('$nome', '$cpf_cnpj', '$endereco', '$email', '$telefone', curDate())";
$result = mysqli_query($conexao, $query);

if($result == ''){
    echo "<script language = 'javascript'> window.alert('Ocorreu um erro ao cadastrar cliente'); </scrip>";

}else{
    echo "<script language = 'javascript'> window.alert('Salvo com Sucesso!!'); </script>";
}


}
?>

<script type="text/javascript">
    $(document).ready(function(){
      $('#telefone').mask('(00) 00000-0000');
     
    });
</script>



   
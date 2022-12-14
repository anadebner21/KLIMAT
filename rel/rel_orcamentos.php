
<?php 
$id_orcamento = $_GET['id_orcamento'];

include('../conexao.php');
$query = "select o.id_orcamento, o.data, o.tecnico ,o.cliente, o.cliente_representante_projeto, o.sub_total, o.quantidade_aparelhos, o.servico_oferecido, o.tempo_garantia, o.descricao, o.valor_total, o.status, c.nome as cli_nome, c.cpf_cnpj, c.endereco, c.email, c.telefone, s.descricao as ser_descri from orcamento as o INNER JOIN clientes as c on (o.cliente = c.id) INNER JOIN servico_oferecido as s on (o.servico_oferecido = s.id_servico) where o.id_orcamento = '$id_orcamento' "; 

$result = mysqli_query($conexao, $query);


 while($res_1 = mysqli_fetch_array($result)){

$data2 = implode('/', array_reverse(explode('-', $res_1['data'])));
$tecnico = $res_1['tecnico'];
$cliente_representante_projeto = $res_1['cliente_representante_projeto'];
$quantidade_aparelhos = $res_1['quantidade_aparelhos']; 
$descricao = $res_1['descricao'];
$tempo_garantia = $res_1['tempo_garantia'];
$sub_total = $res_1['sub_total'];
$valor_total = $res_1['valor_total'];



 ?>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<style>

 @page {
            margin: 0px;

        }

.footer {
    position:absolute;
    bottom:0;
    width:100%;
    background-color: #ebebeb;
    padding:10px;
}

.cabecalho {    
    background-color: #ebebeb;
    padding-top:15px;
    margin-bottom:15px;
}

.titulo{
	margin:0;
}

.areaTotais{
	border : 0.5px solid #bcbcbc;
	padding: 15px;
	border-radius: 5px;
	margin-right:25px;
}

.areaTotal{
	border : 1.0px solid #bcbcbc;
	padding: 15px;
	border-radius: 5px;
	margin-right:25px;
	background-color: #f9f9f9;
	margin-top:2px;
}

.pgto{
	margin:1px;
}



</style>


<div class="cabecalho">
	
		<div class="row">
			<div class="col-sm-5">	
			  <img src="../img/fluiserv.png">
			</div>
			<div class="col-sm-6">	
			 <h3 class="titulo"><b>FLUISERV - Climatização </b></h3>
			 <h6 class="titulo">Avenida Belmiro Sebastião Marques Nº 4161, Conj. Residensial Moradias Porto Seguro - PGUÁ - PR - CEP 83215-747</h6>
			</div>
		</div>
	

</div>

<div class="container">

		
			<div class="row">
				<div class="col-sm-8">	
				  <big> Orçamento Nº <?php echo $id_orcamento ?> </big>


				</div>
				<div class="col-sm-4">	
				<big> Data: <?php echo $data2; ?> </big>
				</div>
			</div>
		
		<hr>

			<div class="row">
				<div class="col-sm-12">
					<p style="font-size:12px"> <b> Dados do Cliente </b> </p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3">	
				 <p style="font-size:12px">  Nome: <?php echo $res_1['cli_nome']; ?> </p>
				</div>
				<div class="col-sm-3">	
				 <p style="font-size:12px">  Email: <?php echo $res_1['email']; ?> </p>
				</div>
				<div class="col-sm-3">	
				 <p style="font-size:12px">  Endereço: <?php echo $res_1['endereco']; ?> </p>
				</div>
				
			</div>

			<div class="row">
				<div class="col-sm-3">	
				 <p style="font-size:12px">  Telefone: <?php echo $res_1['telefone']; ?> </p>
				</div>
				<div class="col-sm-3">	
				 <p style="font-size:12px">  CPF: <?php echo $res_1['cpf_cnpj']; ?> </p>
				</div>
				<div class="col-sm-3">	
				 <p style="font-size:12px">  Cliente Responsável Pelo Projeto: <?php echo $cliente_representante_projeto; ?> </p>
				</div>
				
				
			</div>
		
		<hr>


		<div class="row">
				<div class="col-sm-12">
					<p style="font-size:12px"> <b>Seviço Orçado</b> </p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3">	
				 <p style="font-size:12px">  Quantidade de Aparelhos: <?php echo $quantidade_aparelhos; ?> </p>
				</div>
				<div class="col-sm-3">	
				 <p style="font-size:12px">  Serviço Requerido: <?php echo $res_1['ser_descri']; ?> </p>
				</div>
				<div class="col-sm-3">	
				<p style="font-size:12px">  Descrição: <?php echo $descricao; ?> </p>
				</div>
				
			</div>

			<div class="row">
				<div class="col-sm-12">	
				 <p style="font-size:12px">  Tempo de Garantia: <?php echo $tempo_garantia; ?> </p>
				</div>
				
				
				
			</div>

			
		
		<hr>


		<div class="row">
				<div class="col-sm-12">
					<p style="font-size:12px"> <b> </b> </p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">	
				 <p style="font-size:12px">  <?php  ?>  </p>
				</div>
				
				
			</div>

						
		<br><br>

		<table class="table">
			<tr bgcolor="#f9f9f9">
				<td> <b>Materiais</b> </td>
				<td> <b>Valor dos Materiais</b> </td>
				<td> <b> Quantidade De Cada</b> </td>
				
			</tr>
			<tr>
				<td> <?php ?> </td>
				<td> <?php ?> </td>
				<td> 1 </td>
				
			</tr>
		</table>


		<hr>
		<br>
		<br>

		<div class="row">
				<div class="col-sm-6">	
				 
				 
				</div>
				<div class="col-sm-4 areaTotais">	
				 <p class="pgto" style="font-size:14px">  <b>Total de Materiais: </b> R$ <?php ?> </p>
				 <p class="pgto" style="font-size:14px">  <b>Total Mão de Obra: </b> R$ <?php echo $sub_total; ?> </p>
				
				</div>
				
				
		</div>

		<div class="row">
				<div class="col-sm-6">	
				 <p style="font-size:14px">  <b>Técnico: </b> <?php echo $res_1['tecnico']; ?> </p>
				
				</div>
				<div class="col-sm-4 areaTotal">	
				
				 <p class="pgto" style="font-size:14px">  <b>Total a Pagar: </b> R$ <?php echo $res_1['valor_total']; ?> </p>
				</div>
				
				
		</div>

		<br>

		<div class="row">
				<div class="col-sm-6">	
				
				</div>

				<div class="col-sm-3">	
				<p style="font-size:12px">  Orçamento válido até: <?php echo date('d/m/Y', strtotime("+30 days",strtotime($res_1['data']))); ?></p>
				</div>
				
				
		</div>

			

	
</div>


<div class="footer">
 <p style="font-size:12px" align="center">Desenvolvido por KLIMAT-GERENCIAMENTO</p> 
</div>


<?php } ?>
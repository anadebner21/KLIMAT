<?php 

define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('BD', 'klimat');


$conexao = mysqli_connect(HOST, USUARIO, SENHA, BD) or die ('Não conectou');

?>
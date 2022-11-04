<?php 

session_start();
include('verificar_login.php');

if($_SESSION['cargo_usuario'] != 'gestor'){
    header('Location: index.php');
    exit();
}

?>
<h3> USUÁRIO: <?php echo $_SESSION['nome_usuario'];?> <h3>
<h3> CARGO: <?php echo $_SESSION['cargo_usuario'];?> <h3>

<a href="logout.php">Sair</a>
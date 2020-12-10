<?php

include 'conexao.php';

session_start();

$recebe_email = $_POST['email'];
$recebe_senha = $_POST['senha'];


$consulta = $conexao->query("SELECT id_user,email,senha,adm FROM usuarios WHERE email='$recebe_email' AND senha='$recebe_senha'");

if ($consulta->rowCount()==1) {
	
	$exibeUser=$consulta->fetch(PDO::FETCH_ASSOC);
	
	$_SESSION['id']=$exibeUser['id_user'];
	
	header("location:logado.php");
	
	

}

else {
	
	header("location:erro.php");
}


?>
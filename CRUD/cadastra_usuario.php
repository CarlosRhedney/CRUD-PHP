<?php
include("db_class.php");
$usuario = $_POST["usuario"];
$email = $_POST["email"];
$fone = $_POST["fone"];
$objdb = new db();
$conexao = $objdb->conecta_mysql();
$sql = " INSERT INTO usuarios(usuario, email, fone) values('$usuario', '$email', '$fone') ";
if(mysqli_query($conexao, $sql)){
	header("Location: index.php?sucCad=1");
}else{
	header("Location: index.php?erroCad=1");
}
?>
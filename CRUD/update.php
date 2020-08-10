<?php
include("db_class.php");
$id_usuario = $_POST["id_usuario"];
$usuario = $_POST["usuario"];
$email = $_POST["email"];
$fone = $_POST["fone"];
$objdb = new db();
$conexao = $objdb->conecta_mysql();
$sql = " UPDATE usuarios SET usuario = '$usuario', email = '$email', fone = '$fone' WHERE id = $id_usuario ";
mysqli_query($conexao, $sql);
header("Location: index.php");
?>
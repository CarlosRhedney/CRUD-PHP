<?php
include("db_class.php");
$id_usuario = $_POST["id_usuario"];
$objdb = new db();
$conexao = $objdb->conecta_mysql();
$sql = " UPDATE usuarios SET usuario = '?', email = '?', fone = '?' WHERE id = $id_usuario ";
mysqli_query($conexao, $sql);
?>
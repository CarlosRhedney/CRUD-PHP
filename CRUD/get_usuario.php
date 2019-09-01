<?php
include("db_class.php");
$objdb = new db();
$conexao = $objdb->conecta_mysql();
$sql = " SELECT * FROM usuarios ORDER BY data_inclusao DESC ";
$resultado_cad = mysqli_query($conexao, $sql);
if($resultado_cad){
	while($registro = mysqli_fetch_array($resultado_cad, MYSQLI_ASSOC)){
		echo "<a href='#' class='list-group-item'>";
		echo "<table border='1' class='table table-condensed'>";
		echo "<thead>";
		echo "<tr>";
		echo "<td><strong>Nome:</strong></td>";
		echo "<td><strong>Email:</strong></td>";
		echo "<td><strong>Fone:</strong></td>";
		echo "<td><strong>Acões:</strong></td>";
		echo "</tr>";
		echo "</thead>";
		echo "<tbody>";
		echo "<tr>";
		echo "<td>".$registro["usuario"]."</td>";
		echo "<td>".$registro["email"]."</td>";
		echo "<td>".$registro["fone"]."</td>";
		echo "<td>";
		echo "<button type='button' class='btn btn-success btn_alterar' data-id_usuario='".$registro["id"]."'>Alterar</button>";
		echo "<button type='button' class='btn btn-danger btn_excluir' data-id_usuario='".$registro["id"]."'>Excluir</button>";
		echo "</td>";
		echo "</tr>";
		echo "</tbody>";
		echo "</table>";
		echo "</a>";
	}
}
?>
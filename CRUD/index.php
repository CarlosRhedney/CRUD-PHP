<?php
$suc_cad = isset($_GET["suc_cad"]) ? $_GET["suc_cad"] : 0;
$erro_cad = isset($_GET["erro_cad"]) ? $_GET["erro_cad"] : 0;
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <?php include("cabecalho_index.php"); ?>
  </head>
  <body>
    <?php include("navegacao_index.php"); ?>
    <?php include("section_index.php"); ?>
    <?php include("div_cadastro.php"); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
<?php
$sucCad = isset($_GET["sucCad"]) ? $_GET["sucCad"] : 0;
$erroCad = isset($_GET["erroCad"]) ? $_GET["erroCad"] : 0;
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <?php include("cabecalho.php"); ?>
  </head>
  <body>
    <?php include("navegacao.php"); ?>
    <?php include("modal.php"); ?>
    <?php include("section.php"); ?>
    <?php include("div_conteudo.php"); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
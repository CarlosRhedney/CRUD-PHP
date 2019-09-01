<?php
$suc_cad = isset($_GET["suc_cad"]) ? $_GET["suc_cad"] : 0;
$erro_cad = isset($_GET["erro_cad"]) ? $_GET["erro_cad"] : 0;
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>CRtech</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <script src="arquivo1.js" type="text/javascript"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra">
            <span class="sr-only">NAVIGATION</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <h4 class="navbar-brand">CRUD</h4>
        </div>
        <div class="collapse navbar-collapse" id="barra">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Home</a></li>
            <li><a href="#">Quem Somos</a></li>
            <li><a href="#">Contato</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Minha Conta<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Logar</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="section" style="margin-top:100px">
      <div class="container">
        <div class="row">
          <div class="panel panel-default">
            <div class="panel-body">
              <form role="form" action="cadastra_usuario.php" method="post">
                <div class="col-xs-3">
                  <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" class="form-control" name="usuario" placeholder="Digite seu nome" required>
                  </div>
                </div>
                <div class="col-xs-3">
                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" class="form-control" name="email" placeholder="Digite seu email" required>
                  </div>
                </div>
                <div class="col-xs-3">
                  <div class="form-group">
                    <label for="fone">Fone:</label>
                    <input type="text" id="fone" class="form-control" name="fone" placeholder="Digite seu telefone" required>
                  </div>
                </div>
                <div class="col-xs-3">
                  <div class="form-group" style="margin-top:25px">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                  </div>
                </div>
              </form>
              <?php
                if($suc_cad == 1){
                  echo "<font style='color:red'>Usuário cadastrado com sucesso!</font>";
                }else if($erro_cad == 1){
                  echo "<font style='color:red'>Erro ao tentar cadastrar usuário!</font>";
                }
              ?>      
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="cadastros"></div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
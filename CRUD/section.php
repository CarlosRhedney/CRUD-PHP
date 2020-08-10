<div class="section" style="margin-top:100px">
  <div class="container">
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-body">
          <form role="form" action="cadastra_usuario.php" method="post">
            <div class="col-xs-3">
              <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" class="form-control" name="usuario" placeholder="Digite o seu nome" required>
              </div>
            </div>
            <div class="col-xs-3">
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" class="form-control" name="email" placeholder="Digite o seu email" required>
              </div>
            </div>
            <div class="col-xs-3">
              <div class="form-group">
                <label for="fone">Fone:</label>
                <input type="text" id="fone" class="form-control" name="fone" placeholder="Digite o seu telefone" required>
              </div>
            </div>
            <div class="col-xs-3">
              <div class="form-group" style="margin-top:25px">
                <button type="submit" class="btn btn-primary">Salvar</button>
              </div>
            </div>
          </form>
          <?php
          if($sucCad == 1){
            echo "<font style='color:red'>Usuário cadastrado com sucesso!</font>";
          }else if($erroCad == 1){
            echo "<font style='color:red'>Erro ao tentar cadastrar o usuário!</font>";
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
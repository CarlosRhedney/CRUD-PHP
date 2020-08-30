<div class="modal fade" id="modal">
  <div class="modal-dialog">
    <div style="background-color:#E0FFFF;" class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 align="center">Atualizar Cadastro</h4>
      </div>
      <form role="form" action="update.php" method="post">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" name="usuario" placeholder="Digite o novo nome..." required />
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Digite o novo email..." required />
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="fone" placeholder="Digite o novo telefone..." required maxlength="10" />
          </div>
          <div class="form-group" style="display:none">
            <input type="text" name="id_usuario" id="id_usuario" required readonly />
          </div>
        </div>
        <div class="modal-footer" style="text-align:center">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary" id="btn_alterar">Atualizar</button>
        </div>
      </form>
    </div>
  </div>
</div>
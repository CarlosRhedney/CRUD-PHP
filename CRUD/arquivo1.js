$(document).ready(function(){
  function atualizaCadastro(){
    $.ajax({
      url: "get_usuario.php",
      success: function(data){
        $("#cadastros").html(data);
        $(".btn_excluir").click(function(){
          let id_usuario = $(this).data("id_usuario");
          $.ajax({
            url: "excluir.php",
            method: "post",
            data: { id_usuario: id_usuario },
            success: function(data){
              atualizaCadastro();
              alert("Cadastro excluido com sucesso!");
            }
          });
        });
        $(".btn_alterar").click(function(){
          let id_usuario = $(this).data("id_usuario");
          $.ajax({
            url: "alterar.php",
            method: "post",
            data: { id_usuario: id_usuario },
            success: function(data){
              atualizaCadastro();
              alert("Cadastro alterado com sucesso!");
            }
          });
        });
      }
    });
  }
  atualizaCadastro();
});
$(document).ready(function(){
  function atualizaCadastro(){
    $.ajax({
      url: "get_cadastro.php",
      success: function(data){
        $("#usuarios").html(data);
        $(".btn_alterar").click(function(){
          let id_usuario = $(this).data("id_usuario");
          $.ajax({
            success: function(data){
              atualizaCadastro();
              document.getElementById("id_usuario").value = id_usuario;
            }
          });
        });
        $(".btn_excluir").click(function(){
          let id_usuario = $(this).data("id_usuario");
          $.ajax({
            url: "delete.php",
            method: "post",
            data: { id_usuario: id_usuario },
            success: function(data){
              atualizaCadastro();
              alert("Cadastro excluido com sucesso!");
            }
          });
        });
      }
    });
  }
  atualizaCadastro();
});
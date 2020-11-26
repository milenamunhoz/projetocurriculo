$(document).ready(function(event){

    $("#form").submit(function(){
     var instituicao = $("#instituicao");
     var funcao = $("#funcao");
     var descricao = $("#descricao");
     var situacao = $("#situacao");
     var dt_admissao = $("#dt_admissao");
     var dt_demissao = $("#dt_demissao");

     if(
         !validarInput(instituicao) ||
         !validarInput(funcao) ||
         !validarInput(descricao) ||
         !validarInput(situacao) ||
         !validarInput(dt_admissao) ||
         !validarInput(dt_demissao)
     ){
         return false;
     }
 
 
     return false;
 
    });
 });
 
 function validarInput(elemento){
 
     if(elemento.val().trim() === ""){
         console.log("entrou");
         elemento.css("border-color", "blue");
         elemento.css("outline-color", "blue");
         elemento.focus(); 
 
         return false;
     }
 
     return true;
 };


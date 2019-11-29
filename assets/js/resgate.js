$(document).ready(function () {
  $(".form-promo button").click(function(){
    if($(".form-promo input").val().toLowerCase() == "soumaisomajm" ){
        $("#form-promocional").submit();
    }else{

        alert("Código Inválido! Por favor tente novamente ou fale com nossa equipe. Obrigado!")
    }         
  })

  $("#form-contato-resgate button").click(function(){
    $("#form-contato-resgate").submit();       
  })

})
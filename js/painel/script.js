const url_base = "//www.oma.inf.br/";
$(document).ready(function(){

  var audio = new Audio(url_base+'js/painel/toque.mp3');
  var date = '';
  get(date);
  setInterval(get,'10000');

 
  function get(){
    $.getJSON(url_base + 'painel/notifications/get_notification', {last: date}, function(data, textStatus) {
        if(data == "necas"){
          //alert(date);
        }
        else{
          json = data;
          $.each(json, function(i,val){
            $('#notificacoes').append("<li><a href='"+ url_base + "painel/pedidos'>  <i class='fa fa-users text-aqua'></i>" + json[i].nome + "</a>  </li>");
          });
          count = json.length;
          
          if($('.notifications-menu .label-warning').text()){
            count_notifications = count + parseInt($('.notifications-menu .label-warning').text()) ;
          }else{
            count_notifications = count;
          }
          $('.notifications-menu .header').html('Você tem ' + count_notifications +' pedidos');
          $('.notifications-menu .label-warning').html(count_notifications);
          
          //alert(count_notifications);
          setInterval(function(){
            audio.play();
          },'1000');
          var icon = 'http://downsmaster.com/public/images/logo.png';
          var title = 'Novo Pedido de Suporte';
          var mensagem = 'Cliente solicitou suporte técnico via o site.';
          var link = 'http://oma.inf.br/painel';
          notifyMe(icon, title, mensagem, link);
          date = json[json.length -1].date;
        }
    });
  }

  

  $("#escrever-historico").click(function(){
    $("#balon-escreve-historico").fadeIn("slow");
  });

  $("#balon-escreve-historico > a").click(function(){
    $("#balon-escreve-historico").fadeOut("slow");
  });

  $("[data-mask]").inputmask();


  $("input[id='nome_cliente']").autocomplete({

    source: url_base + "Ordemservico/getNome", 
    minLength: 1,
    select: function( event, ui ) {
     $("input[name='ID_cliente']").val(ui.item.ID);
   }
 });

});
             
//  NOTIFICAÇÃO
document.addEventListener('DOMContentLoaded', function(){
  if(Notification.permission !== 'granted')
    Notification.requestPermission();
});

function notifyMe(icon, title, mensagem, link){
  if(!Notification){
    alert('O navegador que você está utilizando não possui o notifications. Tente o Chrome');
    return;
  }

  if(Notification.permission !== "granted"){
    Notification.requestPermission();
  }else{
    var notification = new Notification(title, {
      icon: icon,
      body: mensagem
    });
    notification.onclick = function(){
      window.open(link);
    };
  }
}
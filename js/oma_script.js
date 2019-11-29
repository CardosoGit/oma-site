
jQuery(function($) {

    /*==========================================
    CUSTOM SCRIPTS
    =====================================================*/

    // CUSTOM LINKS SCROLLING FUNCTION 

    $('a[href*=#]').click(function () {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
       && location.hostname == this.hostname) {
        var $target = $(this.hash);
      $target = $target.length && $target
      || $('[name=' + this.hash.slice(1) + ']');
      if ($target.length) {
        var targetOffset = $target.offset().top;
        $('html,body')
                .animate({ scrollTop: targetOffset }, 800); //set scroll speed here
                return false;
              }
            }
          });

    /*==========================================
   SCROLL REVEL SCRIPTS
   =====================================================*/

   window.scrollReveal = new scrollReveal();


    /*==========================================
    WRITE  YOUR  SCRIPTS BELOW
    =====================================================*/

  });

//FAQ
$(function() {
  $(".expand").on( "click", function() {
    $(this).next().slideToggle(200);
    $expand = $(this).find(">:first-child");
    if($expand.text() == "+") {
      $expand.text("-");
    } else {
      $expand.text("+");
    }
  });
});

//END FAQ


// When the DOM is ready, run this function
$(document).ready(function() {
  //Set the carousel options
  $('#quote-carousel').carousel({
    pause: true,
    interval: 4000,
  });
});


$(document).ready(function(){  

  // $(window).scroll(function () {

  //  set = $(document).scrollTop();
  //  $("#teste").text(set);
  //  if (set >= 50) {
  //   $("#step").addClass("topo-fixo");
  // }
  // else{
  //   $("#step").removeClass("topo-fixo");
  // } 
  // });

  $(".sintoma").change(function(){
    var temp = 0;
    $("#agenda-servico > button").removeClass("enable desable")
    $( "input:checked" ).each(function(){
      var valor = Number($(this).val());
      temp = valor + temp;          
    }); 
    if(temp < 22 && temp != 0){
      temp = 22;
    } 
    if(temp == 0){
      $("#agenda-servico > button").addClass('desable').prop('disabled',true);
    }else{
      $("#agenda-servico > button").addClass('enable').prop('disabled',false);
    }
    $("#preco-total").text(temp); 
  });


  $('#btn-cadastrar').click(function() {
    $('#register-btn').hide();
    $('#form-cadastrar').fadeIn('slow');
  });



  $("#news button").click(function(){

   $.ajax({
     url: 'Inicio/news',
     type: 'POST',
     data: $("#formnews").serialize(),
     beforeSend: function(){
      $("#news > div:nth-child(2)").html(" <img src='imagens/ring.gif'> ");
    },
    success: function(msg){
     $("#news > div:nth-child(2)").html(msg).addClass('text-success');
     if(msg == 'Obrigado por se cadastrar!'){
       jQuery.fn.reset = function(){
         $(this).each(function(){ this.reset();});
       }
       $("#formnews").reset();
     }
   }
 });
 });
  
});      
                      
  

             
          

jQuery(function ($) {

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
$(function () {
  $(".expand").on("click", function () {
    $(this).next().slideToggle(200);
    $expand = $(this).find(">:first-child");
    if ($expand.text() == "+") {
      $expand.text("-");
    } else {
      $expand.text("+");
    }
  });
});

//END FAQ


// When the DOM is ready, run this function
$(document).ready(function () {
  //Set the carousel options
  $('#quote-carousel').carousel({
    pause: true,
    interval: 4000,
  });
});


$(document).ready(function () {
  autoPlayYouTubeModal();

  if ($("[data-mask]").length) {
    $("[data-mask]").inputmask();
  }

  if ($(".sintoma").length) {
    $(".sintoma").change(function () {
      var temp = 0;
      $("#agenda-servico > button").removeClass("enable desable")
      $("input:checked").each(function () {
        var valor = Number($(this).val());
        temp = valor + temp;
      });
      if (temp < 22 && temp != 0) {
        temp = 22;
      }
      if (temp == 0) {
        $("#agenda-servico > button").addClass('desable').prop('disabled', true);
      } else {
        $("#agenda-servico > button").addClass('enable').prop('disabled', false);
      }
      $("#preco-total").text(temp);
    });
  }

  if ($('#btn-cadastrar').length) {
    $('#btn-cadastrar').click(function () {
      $('#register-btn').hide();
      $('#form-cadastrar').fadeIn('slow');
    });
  }


  $("#news button").click(function () {

    $.ajax({
      url: 'Inicio/news',
      type: 'POST',
      data: $("#formnews").serialize(),
      beforeSend: function () {
        $("#news > div:nth-child(2)").html(" <img src='imagens/ring.gif'> ");
      },
      success: function (msg) {
        $("#news > div:nth-child(2)").html(msg).addClass('text-success');
        if (msg == 'Obrigado por se cadastrar!') {
          jQuery.fn.reset = function () {
            $(this).each(function () { this.reset(); });
          }
          $("#formnews").reset();
        }
      }
    });
  });

  $(window).scroll(function(x){
      var top = $(window).scrollTop();
      if(top >= 3915){
        $(".inicio-topo-fixo").addClass("fixed");
      }else{
        $(".inicio-topo-fixo").removeClass("fixed");
      }
  })

  

});
function toggleMenu(){
    if($('menu').is(':visible')) {
        $("menu").fadeOut("fast");
        $(".btn-menu button").removeClass("animation-menu").addClass("close-animation-menu");
    }else{
        $("menu").fadeIn("slow");
        $(".btn-menu button").removeClass("close-animation-menu").addClass("animation-menu");
    }
    
    return false;
  }


// VIDEO POPUP
 

//FUNCTION TO GET AND AUTO PLAY YOUTUBE VIDEO FROM DATATAG
function autoPlayYouTubeModal() {
    var trigger = $("body").find('[data-target="#videoModal"]');
    trigger.click(function () {
        var theModal = $(this).data("target"),
            videoSRC = $(this).attr("data-theVideo"),
            videoSRCauto = videoSRC + "?autoplay=1";
        $(theModal + ' iframe').attr('src', videoSRCauto);
        $(theModal + ' button.close').click(function () {
            $(theModal + ' iframe').attr('src', videoSRC);
        });
        $('.modal').click(function () {
            $(theModal + ' iframe').attr('src', videoSRC);
        });
    });
}




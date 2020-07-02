$(document).ready(function () {
    $("#next").click(function(){        
        event.preventDefault();
    });
    // // $("#previous").click(function(){
    // //     event.preventDefault();
    // // });
    // // $("#validator").click(function(){
    // //     // event.preventDefault();
    // // })
    // $("#next").click(function(){
    //     $(this).hide();
    //     $("#mention").addClass(slideInLeft);
    //     $("#personnal").hide(1000);
    //     $("#submit").show(1000);
    // });
    // $("#previous").click(function(){
    //     $("#submit").hide(1000);
    //     $("#mention").addClass(fadeInLeft);
    //     $("#personnal").show(1000);
        
    //     $("#next").show(1000);
    // });
    $("#next").click(function(){
      $("#personnal").addClass('wow animated bounceOutLeft');
      $("#personnal").css("display", "none");
      // $("#personnal").addClass('wow animated bounceOutLeft');
      $("#mention").css("display", "block");
      $("#mention").show().addClass('wow animated bounceInRight');
      $("#personnal").removeClass('wow animated bounceOutLeft');
    })

    $("#previous").click(function(){
      $("#mention").css("display", "none");
      $("#mention").removeClass('wow animated bounceInRight');
      $("#mention").addClass('wow animated bounceOutRight');
      
      // $("#personnal").addClass('wow animated bounceOutLeft');
      $("#personnal").css("display", "block");
      $("#personnal").show().addClass('wow animated bounceInLeft');
      $("#mention").removeClass('wow animated bounceOutRight');
    })
    
    $( "#formId" ).delegate( "*", "focus blur", function() {      
        var elem = $( this );
        setTimeout(function() {
          elem.toggleClass( "shadow", elem.is( ":focus" ) );
        }, 0 );
      });
    // alert($("#formId input[type='text'], #formId input[type='file'], #formId select").length);

  });
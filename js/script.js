$(document).ready(function () {
    $("#next").click(function(){
        $(this).hide();
        $("#mention").show(1000);
        $("#personnal").hide(1000);
        $("#submit").show(1000);
    });
    $("#previous").click(function(){
        $("#submit").hide(1000);
        $("#mention").hide(1000);
        $("#personnal").show(1000);
        
        $("#next").show(1000);
    });
    
    $( "#formId" ).delegate( "*", "focus blur", function() {
        var elem = $( this );
        setTimeout(function() {
          elem.toggleClass( "shadow", elem.is( ":focus" ) );
        }, 0 );
      });
    // alert($("#formId input[type='text'], #formId input[type='file'], #formId select").length);

  });
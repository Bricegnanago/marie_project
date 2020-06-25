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
    })
  });
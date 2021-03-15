

(function($){

    $("#expander").click(function() {


        if($('#site-navigation').css("display") == "none"){
            // $("#expander").text(($("#expander").text() == 'X') ? '+' : 'X');
            $('#site-navigation').css({ display: "block" })
        } else if ($('#site-navigation').css("display") == "block"){
            // $("#expander").text(($("#expander").text() == 'X') ? '+' : 'X');
            $('#site-navigation').css({ display: "none" })
        }
      

     

    });


   
}( jQuery ) );


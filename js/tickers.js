/**
 * File tickers.js.
 *
 * handles the tickers
 */


jQuery(document).ready(function($) {



  $("#loader").fadeOut()

  if($('#overlay')){

    setTimeout(function(){

      $('#overlay').slideToggle(500, function () {
        $("#masthead").css("position", "fixed");      
      });
      
    }, 3500)

  }


});


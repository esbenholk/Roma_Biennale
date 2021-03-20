

(function($){



    $.fn.animateRotate = function(start, angle, duration, easing, complete) {
        return this.each(function() {
          var $elem = $(this);
      
          $({deg: start}).animate({deg: angle}, {
            duration: duration,
            easing: easing,
            step: function(now) {
              $elem.css({
                 transform: 'rotate(' + now + 'deg)'
               });
            },
            complete: complete || $.noop
          });
        });
      };

    $("#expander").click(function() {


        if($('#site-navigation').hasClass("hidden")){

            $('#site-navigation').addClass("active")
            $('#site-navigation').removeClass("hidden")

            $("#expander").animateRotate(0,90);

        } else if ($('#site-navigation').hasClass("active")){
            
            $('#site-navigation').addClass("hidden")
            $('#site-navigation').removeClass("active")

            $("#expander").animateRotate(90,0);
        }
      
    });

    $("#primary-menu").click(function() {

      if($('#site-navigation').hasClass("hidden")){

          $('#site-navigation').addClass("active")
          $('#site-navigation').removeClass("hidden")

          $("#expander").animateRotate(0,90);

      } else if ($('#site-navigation').hasClass("active")){
          
          $('#site-navigation').addClass("hidden")
          $('#site-navigation').removeClass("active")

          $("#expander").animateRotate(90,0);
      }
      
    });






   
}( jQuery ) );




(function($){



    $(".menutoggle").click(function() {


        if($('#site-navigation').hasClass("unactive")){

            $('#site-navigation').addClass("active")
            $('#site-navigation').removeClass("unactive")
            console.log("menu goes out");

        } else if ($('#site-navigation').hasClass("active")){
            
            console.log("menu goes in");
            $('#site-navigation').addClass("unactive")
            $('#site-navigation').removeClass("active")

        }
      
    });

    $('#primary-menu').click(function() {

      if($('#site-navigation').hasClass("unactive")){



          $('#site-navigation').addClass("active")
          $('#site-navigation').removeClass("unactive")


      } else if ($('#site-navigation').hasClass("active")){
          
          $('#site-navigation').addClass("unactive")
          $('#site-navigation').removeClass("active")

      }
      
    });

    $('#primary-menu-side-wagon').click(function() {

        if($('#site-navigation').hasClass("unactive")){
  
  
  
            $('#site-navigation').addClass("active")
            $('#site-navigation').removeClass("unactive")
  
  
        } else if ($('#site-navigation').hasClass("active")){
            
            $('#site-navigation').addClass("unactive")
            $('#site-navigation').removeClass("active")
  
        }
        
      });


    // Hide Header on on scroll down
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('header').outerHeight();

    $(window).scroll(function(event){
        didScroll = true;
    });

    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(this).scrollTop();
        
        // Make sure they scroll more than delta
        if(Math.abs(lastScrollTop - st) <= delta)
            return;
        
        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > navbarHeight){
            // Scroll Down
            $('header').removeClass('nav-down').addClass('nav-up');
       

        } else {
            // Scroll Up
            if(st + $(window).height() < $(document).height()) {
                $('header').removeClass('nav-up').addClass('nav-down');
            }
        }
        
        lastScrollTop = st;
    }

 
    //expanding and collapsing divs
    $(".event-expander").click(function(event){

        $(event.target).parents('.event-container').parents('article').find('.hidden').slideToggle('fast', function(){
            if($(event.target).parents('.event-container').parents('article').attr("class").includes('active')){
                $(event.target).parents('.event-container').parents('article').removeClass("active");
                $(event.target).parents('.event-container').parents('article').find('.primary-expander').attr('src', "/wp-content/themes/Roma_Biennale/icons/Expand.svg");
    
            } else{
                $(event.target).parents('.event-container').parents('article').addClass("active");
                $(event.target).parents('.event-container').parents('article').find('.primary-expander').attr('src', "/wp-content/themes/Roma_Biennale/icons/Collapse.svg");
            }
        });
        
       
    });



   
}( jQuery ) );


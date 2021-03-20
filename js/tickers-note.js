/**
 * File tickers.js.
 *
 * handles the tickers
 */


jQuery(document).ready(function($) {


  $("#loader").fadeOut()
  if($('.quote').length>0){
    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
      setUpeventsOnMobile();
      console.log("mobiel");
      
    }else{
      // false for not mobile device
      setUpeventsOnDesktop();
      console.log("desktop");


    }
  }

  function toggleOverlay(element){
    if(element.classList.contains("visible")){

      element.classList.remove("visible")
  
      for (let i = 0; i < element.parentNode.children.length; i++) {
        const siblingelement = element.parentNode.children[i];
        if(siblingelement.classList.contains("hidden")){
          siblingelement.classList.remove("hidden")
          siblingelement.classList.add("visible");
        }
        
      }
      element.classList.add("hidden");

    }
  }

  function setUpeventsOnMobile(){
    
      for (let index = 0; index < $('.quote').length; index++) {
        const element = $('.quote')[index];

        element.addEventListener("click", function(){
          toggleOverlay(element);
        })

        element.addEventListener("touch", function(){
          toggleOverlay(element);
        })
  
      }

  }
    
  function setUpeventsOnDesktop(){


    for (let index = 0; index < $('.quote').length; index++) {
      const element = $('.quote')[index];

      element.addEventListener("mouseover", function(){

  
        if(element.classList.contains("visible")){

          element.classList.remove("visible")
      
          for (let i = 0; i < element.parentNode.children.length; i++) {
            const siblingelement = element.parentNode.children[i];
            if(siblingelement.classList.contains("hidden")){
              console.log("is hidden", siblingelement);
              siblingelement.classList.remove("hidden")
              siblingelement.classList.add("visible");
            }
            
          }
          element.classList.add("hidden");
    
        } else if(element.classList.contains("hidden")){

  
            element.classList.remove("hidden")
        
            for (let i = 0; i < element.parentNode.children.length; i++) {
              const siblingelement = element.parentNode.children[i];
              if(siblingelement.classList.contains("visible")){
                console.log("is hidden", siblingelement);
                siblingelement.classList.remove("visible")
                siblingelement.classList.add("hidden");
              }
              
            }
            element.classList.add("visible");
      
          }


      })
    }

  }
  



  if($('#overlay')){

    setTimeout(function(){

      $('#overlay').slideToggle(500, function () {
        $("#masthead").css("position", "fixed");      
      });
      
    }, 3500)

  }


});


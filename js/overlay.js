/**
 * File overlays.js.
 *
 * handles the Overlays
 */


jQuery(document).ready(function($) {

  $("#loading").fadeOut()

  $("figcaption").click(function(event) {

    if(event.target  != null){
      event.target.style.display = "none";

      //ads autoplay to current iframe video src
      event.target.parentNode.getElementsByTagName("iframe")[0].src += "&autoplay=1";

      //goes through the other captions
      let captions = event.target.parentNode.parentNode.getElementsByTagName("figcaption");
      for (let index = 0; index < captions.length; index++) {
        const element = captions[index];

        //edits the captions that are not the current one
        if(element != event.target){

          if(element.parentNode.getElementsByTagName("iframe")[0].src.includes("&autoplay=1")){
            element.parentNode.getElementsByTagName("iframe")[0].src = element.parentNode.getElementsByTagName("iframe")[0].src.replace("&autoplay=1","");
          }
          element.style.display = "block"
        }
        
      }


    }
    

    event.preventDefault();

  });


  $(".pic").parent("div").find("a").mouseenter(function(event){

    let currentColor = $(event.target).closest(".campaign-gallery").css("background-color");

    if(!currentColor){
      currentColor = "#fff500";
      currentFontColor = "white"
    }
    let currentFontColor = $(event.target).closest(".campaign-gallery").css("color");
   
    if(event.target.dataset.caption.length>0){
      $(event.target).parent("div").append('<div class="overlay dynamic" style="background-color:'+currentColor+';"><h1 class="poster-caption" style="color:'+currentFontColor+';">'+event.target.dataset.caption+'</h1></div>'); 
    }
  })

  $(".pic").parent("div").find("a").mouseleave(function(event){

    $(event.target).parent("div").find(".overlay").remove(); 
    
  })


});


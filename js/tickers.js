/**
 * File tickers.js.
 *
 * handles the tickers
 */


jQuery(document).ready(function($) {
  if($("#ticker").length){

    ticker("ticker1");
  
    function ticker(element) {
      
      var ticker = document.getElementById(element);
  
      var headlines = ticker.querySelector(".elements");
      var links = headlines.getElementsByTagName("a");
      var left = headlines.offsetLeft;
      var animId;
  
      // headlines.addEventListener("mouseenter", function() {
      //   cancelAnimationFrame(animId);
      // });
  
      // headlines.addEventListener("mouseleave", function() {
      //   moveHeadLines();
      // });
  
      moveHeadLines();
  
      function moveHeadLines() {
        left--;
        if (left <= -links[0].offsetWidth) {
          left += links[0].offsetWidth;
          headlines.appendChild(links[0]);
        }
        headlines.style.left = left + "px";
        animId = requestAnimationFrame(moveHeadLines);
      }
    }

  }

});


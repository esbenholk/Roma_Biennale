

(function($){

    $(".share-button").click(function(event){
        const info = $(event.target).parents('.sharing-info').find('.share-details')
        const title = $(info).find('.title')[0].innerText
        const url = $(info).find('.url')[0].innerText

        if (navigator.share) {
            navigator.share({
              title: title,
              url: url
            }).then(() => {
              console.log('Thanks for sharing!');
            })
            .catch(console.error);
          } else {
            // fallback /send email instead
            window.location.href='mailto:?subject='+title+'&body='+title+url;
          }

    });

 
}( jQuery ) );


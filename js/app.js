$(document).ready(function() {

/*************************
**   =FLEX SLIDER
***************************/

    $('.flexslider').flexslider({
    	slideshow: true,
    	animation: "fade",
    	touch: true,
    	useCSS: true
    	//easing: "easeOutBounce"
    });



/*************************
**   =LOGO CAROUSEL
***************************/

  $("#carousel-boxes").bxSlider({
				  minSlides: 2,
  				maxSlides: 4,
  				slideWidth: 225,
  				slideHeight: 350,
  				slideMargin: 15,
  				controls: true,
  				auto: true,
  				pause: 5000,
  				autoHover: true,
  				easing: 'ease-in-out'
			});

});

/*************************
**   =Marquee News Ticker
***************************/

$(function(){
        var $mwo = $('.marquee-with-options');
        $('.marquee').marquee();
        $('.marquee-with-options').marquee({
          //speed in milliseconds of the marquee
          speed: 5000,
          //gap in pixels between the tickers
          gap: 100,
          //gap in pixels between the tickers
          delayBeforeStart: 0,
          //'left' or 'right'
          direction: 'left',
          //true or false - should the marquee be duplicated to show an effect of continues flow
          duplicated: true,
          //on hover pause the marquee - using jQuery plugin https://github.com/tobia/Pause
          pauseOnHover: true
        });

        //pause and resume links
        $('.pause').click(function(e){
          e.preventDefault();
          $mwo.trigger('pause');
        });
        $('.resume').click(function(e){
          e.preventDefault();
          $mwo.trigger('resume');
        });
        //toggle
        $('.toggle').hover(function(e){
          $mwo.trigger('pause');
        },function(){
          $mwo.trigger('resume');
        })
        .click(function(e){
          e.preventDefault();
        })
      });

//Fade in titles over images

/*$('li.gallery-images').hover(
    function(){
      $(this).find('.wp-caption-text').animate({bottom:"3%"}, 400);
    },
    function(){
      $(this).find('.wp-caption-text').animate({bottom:"-15%"}, 500);
    }
  );*/

//Calls Isotope

/*$('li.gallery-images').isotope({
    itemSelector: '.wp-caption',
    animationEngine: 'best-available',
     animationOptions: {
     duration: 750,
     easing: 'linear',
     queue: false
   },
     masonryHorizontal: {
    rowHeight: 360
  }
});*/

//Calls Masonry

/*var $container = $( 'ul#gallery' );

$container.imagesLoaded(function(){
  $container.masonry({
    itemSelector : 'p.item',
    isFitWidth: true,
     // set columnWidth a fraction of the container width
  columnWidth: function( containerWidth ) {
    return containerWidth / 12;
  },
    isAnimated: true,
      animationOptions: {
    duration: 750,
    easing: 'linear',
    queue: false
  }
  });
});*/

/*************************
**   =ToolTip
***************************/
 /*$("img").tooltip({
      items: "img",
              content: function() {
                return $(this).attr("alt");
              }
    });*/


/*(function(window, $, PhotoSwipe){

      $(document).ready(function(){

        var options = {};

        $("#gallery p a").photoSwipe(options);

      });


    }(window, window.jQuery, window.Code.PhotoSwipe));*/
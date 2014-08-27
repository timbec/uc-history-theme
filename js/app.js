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

  //Memorabilia

$('.isotope').find('div').addClass('item'); 


$container = jQuery('.item');

//getUnitWidth($container);

// with vanilla JS
var iso = new Isotope( '.isotope', {
  itemSelector: '.item',
  // getSortData: {
  //   name: '.name',
  //   category: '[data-category]'
  //},
  masonry: {
    columnWidth: 320
  }
});

console.log($container);

  $('.item').find('a').magnificPopup({
    type:'image', 
    gallery: {
      enabled: true
    }
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

(function() {

})(); 
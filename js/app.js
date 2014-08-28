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

$('.gallery').find('dt').addClass('item'); 


//$container = jQuery('.item');

//getUnitWidth($container);

// with vanilla JS
// var iso = new Isotope( '.isotope', {
//   itemSelector: '.item',
//   // getSortData: {
//   //   name: '.name',
//   //   category: '[data-category]'
//   //},
//   masonry: {
//     columnWidth: 320
//   }
// });

// console.log($container);

    var $container = $('.isotope');
    // initialize
    $container.masonry({
      columnWidth: 225,
      itemSelector: '.item'
    });

      // $('.item').find('a').magnificPopup({
      //   type:'image', 
      //   gallery: {
      //     enabled: true
      //   }
      // });


  $('.item').magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    },
    image: {
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
      titleSrc: function(item) {
        return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
      }
    }
  });

  $('.popup-youtube').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,

    fixedContentPos: false
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
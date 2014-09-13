jQuery(document).ready(function() {

/*************************
**   =FLEX SLIDER
***************************/

    jQuery('.flexslider').flexslider({
    	slideshow: true,
    	animation: "fade",
    	touch: true,
    	useCSS: true
    	//easing: "easeOutBounce"
    });



/*************************
**   =LOGO CAROUSEL
***************************/

  jQuery("#carousel-boxes").bxSlider({
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

//jQuery('.gallery').find('dt').addClass('item'); 

    var jQuerycontainer = jQuery('.memorabilia-gallery');
    // initialize
    jQuerycontainer.masonry({
      columnWidth: 225,
      itemSelector: '.item'
    });


  jQuery('.item, .gallery-item').magnificPopup({
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

  // jQuery('.popup-youtube').magnificPopup({
  //   disableOn: 700,
  //   type: 'iframe',
  //   mainClass: 'mfp-fade',
  //   removalDelay: 160,
  //   preloader: false,

  //   fixedContentPos: false
  // });

jQuery(window).bind('scroll', function(e) {
    parallax();
  });

});

function parallax() {
  var scrollPosition = jQuery(window).scrollTop();
  jQuery('#places-header')
    .css('top', (10 + (scrollPosition * .45)) + 'px')
    .css('opacity', (1 - (scrollPosition * .001)));

  //jQuery('.scroll').css('top', (-400 + (scrollPosition * .5)) + 'px')
}




/*************************
**   =Marquee News Ticker
***************************/

jQuery(function(){
        var jQuerymwo = jQuery('.marquee-with-options');
        jQuery('.marquee').marquee();
        jQuery('.marquee-with-options').marquee({
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
        jQuery('.pause').click(function(e){
          e.preventDefault();
          jQuerymwo.trigger('pause');
        });
        jQuery('.resume').click(function(e){
          e.preventDefault();
          jQuerymwo.trigger('resume');
        });
        //toggle
        jQuery('.toggle').hover(function(e){
          jQuerymwo.trigger('pause');
        },function(){
          jQuerymwo.trigger('resume');
        })
        .click(function(e){
          e.preventDefault();
        }); 
});

/**********************
  FITVIDS
  ***********************/

jQuery(function(){
  jQuery(".video-container").fitVids();
}); 

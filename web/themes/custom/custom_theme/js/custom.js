(function ($) {

  Drupal.behaviors.initSlider = {
    attach: function (context, settings) {

      $(document).ready(function(){
        $('.slick-slider').slick({
          dots: true,
          speed: 800,
          autoplay: true,
        });
      });

    }
  };

})(jQuery);



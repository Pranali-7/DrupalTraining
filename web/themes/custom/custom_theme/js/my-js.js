(function ($) {
    Drupal.behaviors.myModuleBehavior = {
      attach: function (context, settings) {
        $(context).find('.click-me').click(function () {
          alert('Hello, World!');
        });
        // $('.inner').append('<p>Test</p>');
        // alert('Hello, World!');


      }
    };

  })(jQuery);

  



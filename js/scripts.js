/**
 * @file
 * JS for Pure CSS.
 */
(function ($, Backdrop, window, document, undefined) {

  // Show dropdown on hover.
  Backdrop.behaviors.pure_css_dropdown = {
    attach: function(context, setting) {
      $('.dropdown').once('pure-css-dropdown', function(){
        // Show dropdown on hover.
        $(this).mouseenter(function(){
          $(this).addClass('open');
        });
        $(this).mouseleave(function(){
          $(this).removeClass('open');
        });
      });
    }
  }

  $(document).ready(function() {

// run Javascript on page load here
console.log("Welcome to the console");

  });
})(jQuery, Backdrop, this, this.document);

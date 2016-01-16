/**
 * @file
 * JS for Afterlight Tribute.
 */
(function($, Backdrop, window, document, undefined) {

  $(document).ready(function() {

    jQuery(window).scroll(function() {
      var win = jQuery(this);
      if (win.scrollTop() > 30) {
        if (screen.width > 768) {
          $("header.l-header").css("opacity", ".6").css("backgroundColor", "#bbb");
          $("html.admin-bar header.l-header").css("top", "0px");
        }
        $(".block-system-header").css("display", "none");
      } else {
        if (screen.width > 768) {
          $("header.l-header").css("opacity", "1").css("backgroundColor", "transparent");
          $("html.admin-bar header.l-header").css("top", "32px");
        }
        $(".block-system-header").css("display", "block");
      }
    });


  });
})(jQuery, Backdrop, this, this.document);

jQuery(document).ready(function($) {

// scroll state for header
  $(window).scroll(function() {
      // get the amount the window has scrolled
      var scroll = $(window).scrollTop();
        // add the 'scrolled' class to the masthead based on scroll amount
      if (scroll >= 20) {
          $("#masthead").addClass("scrolled");
      } else {
          $("#masthead").removeClass("scrolled");
      }
  });

});
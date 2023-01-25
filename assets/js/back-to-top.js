//Back to top
jQuery(document).ready(function () {
    jQuery(window).scroll(function () {
      if (jQuery(this).scrollTop() > 1240) {
        jQuery("#scrollToTop").fadeIn();
      } else {
        jQuery("#scrollToTop").fadeOut();
      }
    });
    jQuery("#scrollToTop").click(function () {
      jQuery("html, body").animate({ scrollTop: 0 }, 800);
    });
  });
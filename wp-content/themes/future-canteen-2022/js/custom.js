jQuery(document).ready(function($) {

  $(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
      $('body').addClass('scrolled');
    } else {
      $('body').removeClass('scrolled');
    }
  });

});

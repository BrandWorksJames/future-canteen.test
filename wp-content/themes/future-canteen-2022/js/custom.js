jQuery(document).ready(function($) {

  $(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
      $('body').addClass('scrolled');
    } else {
      $('body').removeClass('scrolled');
    }
  });

  $("#ticker-1 .wpb_wrapper").eocjsNewsticker({
    speed: 4,
    divider:'',

  });

  $("#ticker-2 .wpb_wrapper").eocjsNewsticker({
    speed: 6,
    divider:'',
  });

  $( "#scroll-click" ).click(function() {
    $('html, body').animate({
      scrollTop: $("#home-2").offset().top - 128
    }, 1500);
  });

  var $hamburger = $(".hamburger");
  var $mobilemenu = $("#mobile-navigation");
  $hamburger.on("click", function(e) {
    $hamburger.toggleClass("is-active");
    $mobilemenu.slideToggle( "slow", function() {
    // Animation complete.
  });
  });

});

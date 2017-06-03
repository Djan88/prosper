jQuery(function() {
  var screen,
      stripe_w,
    videoResizer = function(){
      screen = jQuery(window).width()/3.2;
      stripe_w = jQuery(window).width()/51.2;
      jQuery('.slider video').css('height', screen+'px');
      jQuery('.video_stripe').css('height', stripe_w+'px');
      console.log(screen);
    }
  if ('.slider') {
    videoResizer();
    jQuery(window).resize(function() {
      videoResizer();
    })
  }
});

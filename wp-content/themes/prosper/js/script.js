jQuery(function() {
  var screen,
      stripe_w,
      stripe_pb,
    videoResizer = function(){
      screen = jQuery(window).width()/3.1;
      stripe_w = jQuery(window).width()/51.2;
      stripe_pb = jQuery(window).width()/52.2;
      jQuery('.slider video').css('height', screen+'px');
      jQuery('.video_stripe').css('height', stripe_w+'px');
      jQuery('.video_stripe').css('paddingBottom', stripe_pb+'px');
      console.log(screen);
    }
  if ('.slider') {
    videoResizer();
    jQuery(window).resize(function() {
      videoResizer();
    })
  }
});

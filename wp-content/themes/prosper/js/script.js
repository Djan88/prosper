jQuery(function() {
  var screen,
    videoResizer = function(){
      screen = jQuery(window).width()/3.1
      jQuery('.slider video').css('height', screen+'px');
      console.log(screen);
    }
  if ('.slider') {
    videoResizer();
    jQuery(window).resize(function() {
      videoResizer();
    })
  }
});
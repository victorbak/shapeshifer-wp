jQuery(document).ready(function ($) {
  if( $('#video1').length ) {
    var videoPlayer1 = new Vimeo.Player('video1');
  } 
  if( $('#video2').length ) {
    var videoPlayer2 = new Vimeo.Player('video2');
  } 
  if( $('#video3').length ) {
    var videoPlayer3 = new Vimeo.Player('video3');
  } 
  if( $('#video4').length ) {
    var videoPlayer4 = new Vimeo.Player('video4');
  } 
  if( $('#video5').length ) {
    var videoPlayer5 = new Vimeo.Player('video5');
  } 

  $(window).scroll(function(){ 
    if( $('#slide1').length ) {
      playPause('slide1',videoPlayer1); 
    }
  });
    
  $(window).scroll(function(){ 
    if( $('#slide2').length ) {
      playPause('slide2',videoPlayer2); 
    }
  });
    
  $(window).scroll(function(){ 
    if( $('#slide3').length ) {
      playPause('slide3',videoPlayer3); 
    }
  });
    
  $(window).scroll(function(){ 
    if( $('#slide4').length ) {
      playPause('slide4',videoPlayer4); 
    }
  });
    
  $(window).scroll(function(){ 
    if( $('#slide5').length ) {
      playPause('slide5',videoPlayer5); 
    }
  });
    

  videoPlayer1.on('play', function() {
      console.log('played Video 1!');
  });

  videoPlayer2.on('play', function() {
      console.log('played the 2.0 video!');
  });

  videoPlayer1.on('pause', function() {
    console.log('paused Video 1!');
  });

  videoPlayer2.on('pause', function() {
    console.log('paused the 2.0 video!');
  });

  $.fn.isOnScreen = function(){
    var win = $(window);
    console.log(this);
    var viewport = {
        top : win.scrollTop(),
        left : win.scrollLeft()
    };
    viewport.right = viewport.left + win.width();
    viewport.bottom = viewport.top + win.height();

    var bounds = this.offset();
    bounds.right = bounds.left + this.outerWidth();
    bounds.bottom = bounds.top + this.outerHeight();

    return (!(viewport.bottom < bounds.top  + ( (this.outerHeight() / 2) ) || viewport.top + (this.outerHeight() / 2) + 200 > bounds.bottom ));
  };

  //Play if element is in the viewport
  function playPause(divID, player){
    if ($('#'+divID).isOnScreen()) {
      player.play();
    } else {
      player.pause();
    }
  }

})

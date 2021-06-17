projectLimit = 5;
players = {};
jQuery(document).ready(function ($) {
  setVideoPlayers();
  setScrollListeners();

  $.fn.isOnScreen = function () {
    var win = $(window);
    var viewport = {
      top: win.scrollTop(),
      left: win.scrollLeft()
    };
    viewport.right = viewport.left + win.width();
    viewport.bottom = viewport.top + win.height();

    var bounds = this.offset();
    bounds.right = bounds.left + this.outerWidth();
    bounds.bottom = bounds.top + this.outerHeight();

    return (!(viewport.bottom < bounds.top + ((this.outerHeight() / 2)) || viewport.top + (this.outerHeight() / 2) + 200 > bounds.bottom));
  };

  //Play if element is in the viewport
  function playPause(divID, player) {
    if ($(`#${divID}`).isOnScreen()) {
      player.play();
    } else {
      const isVideoPlaying = player => !!(player.currentTime > 0 && !player.paused && !player.ended && player.readyState > 2);
      return isVideoPlaying ? player.pause() : '';
    }
  }
  function setVideoPlayers() {
    for (let i = 1; i < projectLimit + 1; i++) {
      if ($(`#video${i}`).length) {
        players[`player${i}`] = new Vimeo.Player(`video${i}`);
      }
      if (i == 1) {
        players[`player${i}`].on('loaded', function (data) {
          $('.video-el').css('background-color', 'black');
        });
      }
    }
  }
  function setScrollListeners() {
    for (let i = 1; i < projectLimit + 1; i++) {
      $(window).scroll(function () {
        if ($(`#slide${i}`).length) {
          playPause(`slide${i}`, players[`player${i}`]);
        }
      });
    }
  }
})
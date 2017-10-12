// Algae Scripts

$( document ).ready(function() {

	window._wq = window._wq || [];
	
	_wq.push({ id: "cecdwaq3dz", onReady: function(video) {
	  var video = Wistia.api('cecdwaq3dz');

	  $('.overlay').click(function() {
			video.play();
			$(this).fadeOut();
		});

	  // at 10 seconds, do something amazing
	  video.bind('secondchange', function(s) {
	    if (s >= 133)  {
	      // Insert code to do something amazing here
	      $('#three-container').fadeIn();
	      $('html, body').animate({
		        scrollTop: $('#three-container').offset().top
		    }, 'slow');
	      return video.unbind;

	    }
	  });
	    
	}});

});
// Algae Scripts

$( document ).ready(function() {

	window._wq = window._wq || [];
	
	_wq.push({ id: "cecdwaq3dz", onReady: function(video) {
	  var video = Wistia.api('cecdwaq3dz');

	  $('.overlay').click(function() {
			video.play();
			$(this).fadeOut();
		});

	  video.bind('secondchange', function(s) {
	    if (s >= 133)  {
	      $('#three-container').fadeIn();
	      $('html, body').animate({
		        scrollTop: $('#three-container').offset().top
		    }, 'slow');
	      return video.unbind;

	    }
	  });
	    
	}});

	$('a.buy-now').click(function() {
	   $('#three-container').fadeIn();
       $('html, body').animate({
	        scrollTop: $('#three-container').offset().top
	    }, 'slow');
	});

	$('a.view-full-list').click(function(event) {
	   event.preventDefault();
	   $('ol.reference-list li').fadeIn();
	   $(this).hide();

       
	});


});



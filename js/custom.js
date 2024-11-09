	
// Select all links with hashes
jQuery('a[href*="#"].hash')
// Remove links that don't actually link to anything
.not('[href="#"]')
.not('[href="#0"]')
.click(function (event) {
	// On-page links
	if (
			location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
			&&
			location.hostname == this.hostname
			) {
		// Figure out element to scroll to
		var target = jQuery(this.hash);
		target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
		// Does a scroll target exist?
		if (target.length) {
			// Only prevent default if animation is actually gonna happen
			event.preventDefault();
			jQuery('html, body').animate({
				scrollTop: target.offset().top
			}, 1000, function () {
				// Callback after animation
				// Must change focus!
				var $target = jQuery(target);
				$target.focus();
				if ($target.is(":focus")) { // Checking if the target was focused
					return false;
				} else {
					$target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
					$target.focus(); // Set focus again
				}
				;
			});
		}
	}
});

$('.hash_area a.hash').on('click', function (e) {
	e.preventDefault();

	$('html, body').animate({
		scrollTop: $($(this).attr('href')).offset().top - 170
	}, 500, 'linear');
});



// backto-top btn script
		var btn = jQuery('#backto-top');
		jQuery(window).scroll(function() {
		  if (jQuery(window).scrollTop() > 300) {
		    btn.addClass('show');
		  } else {
		    btn.removeClass('show');
		  }
		});

		btn.on('click', function(e) {
		  e.preventDefault();
		  jQuery('html, body').animate({scrollTop:0}, '1000');
		});
	// backto-top btn script end

 
		jQuery(document).ready(function($) {
			jQuery('.stellarnav').stellarNav({
			theme: 'dark',
			breakpoint: 991,
			position: 'right',
			});
			
			jQuery("#navbar-top").scrollToFixed();
		});

		




			// When + or - buttons are clicked the font size of the h1 is increased/decreased by 2
// The max is set to 50px for this demo, the min is set by min font in the user's style sheet

jQuery(document).ready(function() {

	function getSize() {
		size = $( "h1" ).css( "font-size" );
		size = $( "h2").css( "font-size" );
		size = $( "h3").css( "font-size" );
		size = $( "h4").css( "font-size" );
		size = $( "h5").css( "font-size" );
		size = $( "h6").css( "font-size" );
		size = $( "p").css( "font-size" );
		size = $( "li").css( "font-size" );
		size = parseInt(size, 10);
	  }
	  
	  //get inital font size
	  getSize();
	  
	  $( "#up,#up-m" ).on( "click", function() {
	  
		// parse font size, if less than 50 increase font size
		if ((size + 2) <= 50) {
		  $( "h1" ).css( "font-size", "+=2" );
		  $( "h2" ).css( "font-size", "+=2" );
		  $( "h3" ).css( "font-size", "+=2" );
		  $( "h4" ).css( "font-size", "+=2" );
		  $( "h5" ).css( "font-size", "+=2" );
		  $( "h6" ).css( "font-size", "+=2" );
		  $( "p" ).css( "font-size", "+=2" );
		  $( "li" ).css( "font-size", "+=2" );
		}
	  });
	  
	  $( "#down,#down-m" ).on( "click", function() {
		if ((size - 2) >= 12) {
		  $( "h1" ).css( "font-size", "-=2" );
		  $( "h2" ).css( "font-size", "-=2" );
		  $( "h3" ).css( "font-size", "-=2" );
		  $( "h4" ).css( "font-size", "-=2" );
		  $( "h5" ).css( "font-size", "-=2" );
		  $( "h6" ).css( "font-size", "-=2" );
		  $( "p" ).css( "font-size", "-=2" );
		  $( "li" ).css( "font-size", "-=2" );
		}
	  });


	  $( "#reset-size,#reset-size-m" ).on( "click", function() {
		
		  $( "h1" ).css( "font-size", "26px" );
		  $( "h2" ).css( "font-size", "26px" );
		  $( "h3" ).css( "font-size", "24px" );
		  $( "h4" ).css( "font-size", "18px" );
		  $( "h5" ).css( "font-size", "18px" );
		  $( "h6" ).css( "font-size", "1rem" );
		  $( "p" ).css( "font-size", "14px" );
		  $( "li" ).css( "font-size", "14px" );
	
	  });
	  
	  $( "#high,#high-m" ).on( "click", function() {

		$('body').addClass('high_contrast');
		
  
	});


	$( "#normal,#normal-m" ).on( "click", function() {

		$('body').removeClass('high_contrast');		
  
	});
	
	})



$(document).ready(function () {
	Fancybox.bind('[data-fancybox="gallery-recent"]', {
		Thumbs: {
            type: "classic",
        },
	});
});








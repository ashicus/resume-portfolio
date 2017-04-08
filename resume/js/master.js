$(function()
{
	function init()
	{
		// Populate email and phone number
		showContact();

		// Initialize the portfolio slideshows
		setupSlideshows();

		// Initialize the tag highlighting
		setupTags();
	}

	function showContact()
	{
		var phoneText = '<a href=\'tel:706' + '-' + '830' + '-' + '6424\'>706' + '-' + '830' + '-' + '6424</a>';
		$('#phone-number').html(phoneText);

		var emailText = 'ashmwhite' + '@' + 'gmail' + '.' + 'com';
		$('#email-link').attr('href', 'mailto:' + emailText).html(emailText);
	}

	function setupSlideshows()
	{
		var imageContainers = $('.project ol.images');
		var imageGraceTime = 500;
		var imageTransitionInterval = 2500;
		var imageTransitionTime = 500;

		imageContainers.each(function(i) {
			// Hide all but the first screenshot in each group
			$(this).children().each(function(i) {
				if(i != 0) {
					$(this).css({opacity: 0});
				}
			});

			var index = 0;
			var timer;
			var gracePeriodTimer;

			// Anonymous function triggered when the container is moused over, starting the slideshow
			$(this).mouseover(function() {
				clearInterval(timer);
				timer = null;

				var node = this;

				var f = function() {
					$($(node).children()[index]).animate({ opacity: 0 }, imageTransitionTime);
					index = (index + 1) % $(node).children().length;
					$($(node).children()[index]).animate({ opacity: 1 }, imageTransitionTime);
				};

				gracePeriodTimer = setTimeout(function() {
					f();
					timer = setInterval(f, imageTransitionInterval);
				}, imageGraceTime);
			});

			// Anonymous function triggered on mouse out, canceling the associated slideshow
			$(this).mouseout(function() {
				clearTimeout(gracePeriodTimer);
				gracePeriodTimer = null;

				clearInterval(timer);
				timer = null;
			});
		});
	}

	function setupTags()
	{
		var tags = $('li.tag');
		tags.click(function() {
			tags.removeClass('active');

			var newTag;
			var cn = this.className.split(' ');
			for(var i = 0; cn[i]; i++) {
				var n = cn[i];
				if(n != 'tag' && n != 'active') {
					newTag = n;
				}
			}

			$('li.tag.'+newTag).addClass('active');
		});

		// If a tag has been passed in the URL hash, pre-highlight that tag
		var hash = location.hash;
		if(hash) {
			hash = hash.replace(/\#/, '');
			$('li.tag.'+hash).addClass('active');
		}
	}

	init();
});

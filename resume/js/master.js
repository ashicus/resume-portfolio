$(function()
{
	function init()
	{
		// Populate email and phone number
		showContact();

		// Initialize the portfolio slideshows
		setupSlideshows();

		// Initialize the tag highlighting
		// setupTags();
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
		$('.slider').slick({
			infinite: true,
			dots: true,
			draggable: true
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

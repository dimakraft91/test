$(document).ready(function () {
	var showPopup = false
	var hidePopup = true
	var showPlay = true
	var videoPlayed = false
	if (prod) {
		$('#video').attr('disablePictureInPicture')
		$('#video').attr('pip', 'false');
		$('html').attr('translate', 'no');
		$('head').append('<meta name="google" content="notranslate" />');
		window.addEventListener('contextmenu', (event) => { event.preventDefault() })

		function ctrlShiftKey(e, keyCode) {
			return e.ctrlKey && e.shiftKey && e.keyCode === keyCode.charCodeAt(0);
		}

		document.onkeydown = (e) => {
			if (
				event.keyCode === 123 ||
				ctrlShiftKey(e, 'I') ||
				ctrlShiftKey(e, 'J') ||
				ctrlShiftKey(e, 'C') ||
				(e.ctrlKey && e.keyCode === 'U'.charCodeAt(0))
			)
				return false;
		};
	}

	//safari autoplay
	$('body').on('click touchstart', function () {
		if (!videoPlayed) {
			const videoElement = document.getElementById('video');
			if (videoElement.playing) {
				return;
			}
			else {
				videoElement.play();
			}
		}
	});
	document.getElementById('play-button').addEventListener('click', () => {
		window.scrollTo(0, 0)
		$('#play').fadeOut('fast', function () {
			$('#video').prop('muted', false).prop('currentTime', 0).trigger('play')
			showPlay = false
		})
	})
	$('#video').on('timeupdate', function () {
		if (!showPlay && !showPopup && $(this).prop('currentTime') > start) {
			showPopup = true;
		}
		if (hidePopup && $(this).prop('currentTime') > start + duration) {
			hidePopup = false
		}
	})
})

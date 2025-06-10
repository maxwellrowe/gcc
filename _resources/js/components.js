$(document).ready(function () {
	// Match Height
	// By Row
	$('.match-height-row').matchHeight({
		byRow: true,
		property: 'min-height'
	});
	// By All
	$('.match-height-all').matchHeight({
		byRow: false,
		property: 'min-height'
	});
});

// Stop YT and Vimeo Videos on Modal Close
document.querySelectorAll('.video-modal').forEach(modal => {
	modal.addEventListener('hidden.bs.modal', () => {
		const iframes = modal.querySelectorAll('iframe');
			iframes.forEach(iframe => {
			const src = iframe.src;
			iframe.src = '';      // Clear to stop playback
			iframe.src = src;     // Reset to enable replay
		});
	});
});

// Data Tables
$(document).ready(function () {
	$('.datatable').DataTable({
		responsive: true,
		paging: true,
		searching: true,
		ordering: true,
		language: {
			search: "_INPUT_",
			searchPlaceholder: "Search..."
		}
	});
});

// Swiper Carousel Anything
$('.component-carousel-anything').each(function(index, slider) {
	var $slider = $(slider);
	var slides_desktop = $slider.attr('data-desktop-items');
	var slides_tablet = $slider.attr('data-tablet-items');
	var slides_mobile = $slider.attr('data-mobile-items');
	var autoplayAttr = $slider.attr('data-autoplay');
	var autoplayEnabled = autoplayAttr === "true";

	var swiper = new Swiper(slider, {
		loop: false,
		speed: 500,
		slidesPerView: 1,
		spaceBetween: 30,
		zoom: true,
		breakpoints: {
			600: {
				slidesPerView: parseInt(slides_mobile),
			},
			992: {
				slidesPerView: parseInt(slides_tablet),
			},
			1200: {
				slidesPerView: parseInt(slides_desktop),
			},
		},
		watchOverflow: true,
		autoplay: autoplayEnabled ? {
			delay: 4000,
			pauseOnMouseEnter: true
		} : false,
		scrollbar: {
			el: ".swiper-scrollbar",
			draggable: true
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		}
	});
});

// Academic Programs Controller
document.addEventListener('DOMContentLoaded', function () {
	const searchInput = document.getElementById('ap-controller-search');
	const checkboxes = document.querySelectorAll('input.form-check-input[type="checkbox"]');
	const cards = document.querySelectorAll('.academic-program-card');

	// Debounce utility
	function debounce(func, wait) {
		let timeout;
		return function (...args) {
			clearTimeout(timeout);
			timeout = setTimeout(() => func.apply(this, args), wait);
		};
	}

	function filterCards() {
		const checkedValues = Array.from(checkboxes)
			.filter(checkbox => checkbox.checked)
			.map(checkbox => checkbox.value);
	
		const searchTerm = searchInput.value.trim().toLowerCase();
	
		let visibleCount = 0;
	
		cards.forEach(card => {
			const matchesCheckboxes = checkedValues.every(val => card.classList.contains(val));
			const matchesSearch = card.textContent.toLowerCase().includes(searchTerm);
			const shouldShow = matchesCheckboxes && (!searchTerm || matchesSearch);
	
			if (shouldShow) {
				card.style.display = 'block';
				requestAnimationFrame(() => {
					card.style.opacity = 1;
				});
				visibleCount++;
			} else {
				card.style.opacity = 0;
				setTimeout(() => {
					card.style.display = 'none';
				}, 300);
			}
		});
	
		// Show/hide no results message
		const noResultsMessage = document.getElementById('ap-controller-no-results');
		if (noResultsMessage) {
			noResultsMessage.style.display = visibleCount === 0 ? 'block' : 'none';
		}
	}

	// Event listeners
	if (searchInput) {
		searchInput.addEventListener('input', debounce(filterCards, 300));
		checkboxes.forEach(cb => cb.addEventListener('change', filterCards));
		
		// Optional: trigger filter on page load if needed
		filterCards();
	}
});
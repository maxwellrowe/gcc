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

// Directory Data Table
$(document).ready(function () {
	const table = $('.directory-datatable').DataTable({
		responsive: true,
		paging: true,
		searching: true,
		ordering: false,
		pageLength: 25,
		dom:
			// Top row: search left, filters placeholder right
			'<"row align-items-center mb-2"<"col-sm-6"f><"col-sm-6 text-end dataTables_filters">>' +
			// Table
			'rt' +
			// Bottom row: length left, info center, pagination right
			'<"row mt-2"<"col-sm-4"l><"col-sm-4 text-center"i><"col-sm-4 text-end"p>>',
		language: {
			search: "_INPUT_",
			searchPlaceholder: "Search..."
		},
		initComplete: function () {
			$('.directory-datatable').closest('.dt-container').addClass('directory-datatable-wrapper');
			// Add filters to the placeholder container
			this.api().columns([3, 4]).every(function () {
				const column = this;
				const title = $(column.header()).text();
				const select = $(`
					<select class="form-select form-select-sm d-inline-block ms-2" style="width: auto;">
						<option value="">Filter ${title}</option>
					</select>
				`)
				.appendTo('.dataTables_filters')
				.on('change', function () {
					const val = $.fn.dataTable.util.escapeRegex($(this).val());
					column.search(val ? '^' + val + '$' : '', true, false).draw();
				});

				column.data().unique().sort().each(function (d) {
					select.append(`<option value="${d}">${d}</option>`);
				});
			});
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

// Slide Card
function setSlideCardHeights() {
	const slideCards = document.querySelectorAll('.component-slide-card');

	slideCards.forEach(card => {
		const content = card.querySelector('.component-slide-card-content');
		if (!content) return;

		// Temporarily reset height to get correct measurement
		card.style.height = 'auto';

		// If it's visible, get height
		const cardHeight = card.offsetHeight;
		card.style.height = `${cardHeight}px`;
		card.style.overflow = 'auto';
	});
}

// Initial run
document.addEventListener('DOMContentLoaded', () => {
	setSlideCardHeights();

	// Toggle logic
	document.querySelectorAll('.component-slide-card').forEach(card => {
		const toggle = card.querySelector('.slide-card-toggle');
		if (!toggle) return;

		toggle.addEventListener('click', (e) => {
			e.preventDefault();
			card.classList.toggle('active');
		});
	});
});

// Responsive update
window.addEventListener('resize', () => {
	setSlideCardHeights();
});
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
		ordering: true, // enable ordering
		order: [[0, 'asc']], // sort by first column ascending
		pageLength: 25,
		dom:
			// Top row: search left, filters placeholder right
			'<"row align-items-center mb-2"<"col-md-6"f><"col-md-6 text-md-end text-start dataTables_filters">>' +
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
			const api = this.api();
		
			api.columns([3, 4]).every(function () {
				const column = this;
				const columnIndex = column.index();
				const title = $(column.header()).text();
				const selectId = `filter-col-${columnIndex}`;
				const select = $(`
					<label for="${selectId}" class="visually-hidden">Filter ${title}</label>
					<select id="${selectId}" class="form-select form-select-sm d-inline-block me-2 me-md-0 ms-md-2 mb-1 mb-md-0" style="width: auto;">
						<option value="">Filter ${title}</option>
					</select>
				`)
				.appendTo('.dataTables_filters')
				.on('change', function () {
					const val = $(this).val();
					column.search(val ? val : '', true, false).draw();
				});
		
				// Custom logic for column 4 (index 4)
				if (columnIndex === 4) {
					let values = new Set();
		
					// Loop through each cell in the column
					column.nodes().each(function (cell) {
						// Look for <li> items inside the <td>
						$(cell).find('li').each(function () {
							const text = $(this).text().trim();
							if (text) values.add(text);
						});
					});
		
					// Sort and append unique <li> values
					Array.from(values).sort().forEach(function (d) {
						select.append(`<option value="${d}">${d}</option>`);
					});
				} else {
					// Default logic for other columns
					column.data().unique().sort().each(function (d) {
						select.append(`<option value="${d}">${d}</option>`);
					});
				}
			});
			$('.dataTables_filter label').each(function () {
				const $label = $(this);
				const $input = $label.find('input');
			
				// Give the input an ID if it doesn't have one
				const inputId = 'directory-search-input';
				$input.attr('id', inputId);
			
				// Replace label text with a visually-hidden label
				$label.html(`<label for="${inputId}" class="visually-hidden">Search directory</label>`).append($input);
			});
		}
		
	});
	
	// A-Z Filter
	$('#alpha-filter .alpha-letter').on('click', function (e) {
		e.preventDefault();
	
		const letter = $(this).data('letter');
		const table = $('.directory-datatable').DataTable();
	
		// Set active styling
		$('#alpha-filter .alpha-letter').removeClass('active');
		$(this).addClass('active');
	
		if (letter === 'all') {
			table.column(0).search('').draw(); // clear filter
		} else {
			const regex = '^' + letter; // match start of last name
			table.column(0).search(regex, true, false).draw();
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
	
	$('#ap-controller-open-mobile').on('click', function() {
		$('#academic-programs-controller').addClass('nav-tertiary-lg-show');
	});
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

// Photo Gallery
document.addEventListener('DOMContentLoaded', function () {
  const gallerySection = document.querySelector('.component-photo-gallery');
  if (!gallerySection) return;
  const grid = gallerySection.querySelector('.isotope-grid');
  const items = grid.querySelectorAll('.gallery-item');
  const modal = document.getElementById('galleryModal');
  let swiper;

  const breakpoints = {
	xs: 0,
	sm: 576,
	md: 768,
	lg: 992
  };

  function getCurrentColumns() {
	const width = window.innerWidth;
	if (width >= breakpoints.lg) return parseInt(gallerySection.dataset.columnsLg) || 4;
	if (width >= breakpoints.md) return parseInt(gallerySection.dataset.columnsMd) || 3;
	if (width >= breakpoints.sm) return parseInt(gallerySection.dataset.columnsSm) || 2;
	return parseInt(gallerySection.dataset.columnsXs) || 1;
  }

  function updateItemWidths() {
	const columns = getCurrentColumns();
	const totalGutter = 10 * (columns - 1);
	const itemWidth = `calc(${100 / columns}% - ${totalGutter / columns}px)`;

	items.forEach(item => {
	  item.style.width = itemWidth;
	});

	if (window.iso) window.iso.layout();
  }

  // Wait for images, then initialize Isotope
  imagesLoaded(grid, function () {
	updateItemWidths();
	window.iso = new Isotope(grid, {
	  itemSelector: '.gallery-item',
	  layoutMode: 'packery',
	  packery: {
		gutter: 10
	  }
	});
  });

  window.addEventListener('resize', updateItemWidths);

  // Initialize Swiper inside Bootstrap modal
  modal.addEventListener('shown.bs.modal', function (event) {
	  const index = event.relatedTarget?.dataset.index || 0;
  
	  // Delay and force paint with requestAnimationFrame
	  setTimeout(() => {
		  requestAnimationFrame(() => {
			  swiper = new Swiper('#galleryModal .gallery-swiper', {
				  initialSlide: parseInt(index),
				  loop: true,
				  keyboard: {
					  enabled: true,
					  onlyInViewport: false
				  },
				  navigation: {
					  nextEl: '#galleryModal .swiper-button-next',
					  prevEl: '#galleryModal .swiper-button-prev'
				  },
				  pagination: {
					  el: '#galleryModal .swiper-pagination',
					  clickable: true
				  }
			  });
		  });
	  }, 100);
  });

  // Destroy Swiper when modal is closed
  modal.addEventListener('hidden.bs.modal', function () {
	if (swiper) {
	  swiper.destroy(true, true);
	  swiper = null;
	}
  });
});

// Accordion Expand / Collapse All
document.addEventListener('DOMContentLoaded', () => {
	// Click handlers for any toolbar inside an accordion
	document.addEventListener('click', (e) => {
		const expandBtn = e.target.closest('.accordion-expand-all');
		const collapseBtn = e.target.closest('.accordion-collapse-all');
		if (!expandBtn && !collapseBtn) return;

		const btn = expandBtn || collapseBtn;
		const accordion = btn.closest('.accordion');
		if (!accordion) return;

		const isExpand = !!expandBtn;
		const collapses = accordion.querySelectorAll(':scope .accordion-collapse');

		collapses.forEach(c => {
			const inst = bootstrap.Collapse.getOrCreateInstance(c, { toggle: false });
			isExpand ? inst.show() : inst.hide();
		});

		// Immediate pass; final state will also sync on shown/hidden events
		updateToolbarState(accordion);
	});

	// Keep buttons in sync when users open/close items manually
	document.querySelectorAll('.accordion').forEach(acc => {
		acc.addEventListener('shown.bs.collapse', () => updateToolbarState(acc));
		acc.addEventListener('hidden.bs.collapse', () => updateToolbarState(acc));
		updateToolbarState(acc);
	});

	function setDisabled(el, disabled) {
		if (!el) return;
		el.disabled = disabled;
		if (disabled) {
			el.setAttribute('disabled', 'disabled');
			el.setAttribute('aria-disabled', 'true');
			el.classList.add('disabled');   // visual parity (esp. if styles expect it)
			el.setAttribute('tabindex', '-1');
		} else {
			el.removeAttribute('disabled');
			el.setAttribute('aria-disabled', 'false');
			el.classList.remove('disabled');
			el.removeAttribute('tabindex');
		}
	}

	function updateToolbarState(accordion) {
		// Find the buttons inside THIS accordion (don't assume a specific wrapper class)
		const expandBtn   = accordion.querySelector(':scope .accordion-expand-all');
		const collapseBtn = accordion.querySelector(':scope .accordion-collapse-all');

		// If buttons aren't present, bail
		if (!expandBtn && !collapseBtn) return;

		const collapses = accordion.querySelectorAll(':scope .accordion-collapse');
		const allExpanded  = Array.from(collapses).every(c => c.classList.contains('show'));
		const allCollapsed = Array.from(collapses).every(c => !c.classList.contains('show'));

		setDisabled(expandBtn, allExpanded);
		setDisabled(collapseBtn, allCollapsed);
	}
});
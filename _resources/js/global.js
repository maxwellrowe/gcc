// Heading 1 Animation and Main content fade in
window.addEventListener('DOMContentLoaded', () => {
	const h1 = document.getElementById('page-title');
	const text = h1.textContent;
	h1.textContent = '';

	const words = text.trim().split(/\s+/); // split by any whitespace

	words.forEach((word, index) => {
		const span = document.createElement('span');
		span.textContent = word;
		span.classList.add('fade-up');
		span.style.display = 'inline-block';
		span.style.animationDelay = `${index * 0.1}s`;
		h1.appendChild(span);

		// Add a space between words (not inside the span)
		if (index < words.length - 1) {
			h1.appendChild(document.createTextNode(' '));
		}
	});

	// Animate sections
	const sections = document.querySelectorAll('#main-content section');
	sections.forEach((section, i) => {
		section.style.animationDelay = `${i * 0.2}s`;
		section.classList.add('fade-in-section');
	});
});

// AOS for animations
function applyGCCAnimations() {
  const elements = document.querySelectorAll('[class*="gcc-anim-"]');

  elements.forEach(el => {
	el.classList.forEach(cls => {
	  // data-aos
	  if (cls.startsWith('gcc-anim-') && !cls.startsWith('gcc-anim-delay-')) {
		const aosValue = cls.replace('gcc-anim-', '');
		el.setAttribute('data-aos', aosValue);
	  }

	  // data-aos-delay
	  if (cls.startsWith('gcc-anim-delay-')) {
		const delayValue = cls.replace('gcc-anim-delay-', '');
		if (!isNaN(delayValue)) {
		  el.setAttribute('data-aos-delay', delayValue);
		}
	  }
	});
  });
}
// Run AOS
document.addEventListener('DOMContentLoaded', function () {
  applyGCCAnimations();

  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
	AOS.init({ disable: true });
  } else {
	AOS.init({
	  duration: 800,
	  easing: 'cubic-bezier(0.85, 0, 0.15, 1)',
	  once: true
	});
  }
});

// Sticky Nav with threshold
let lastScrollTop = 0;
const header = document.getElementById('global-header');
const secondaryNav = document.getElementById('secondary-nav');
const navTertiaryLg = document.querySelector('.nav-tertiary-lg .position-sticky');

function getThreshold() {
	let secondaryNavHeight = 0;
	if (secondaryNav && secondaryNav.offsetParent !== null) {
		secondaryNavHeight = secondaryNav.offsetHeight;
	}
	return header.offsetHeight + secondaryNavHeight;
}

function updateTertiaryPosition(topOffset) {
	if (navTertiaryLg) {
		navTertiaryLg.style.top = `${topOffset}px`;
	}
}

window.addEventListener('scroll', () => {
	const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
	const threshold = getThreshold();

	if (scrollTop === 0) {
		// At the top of the page
		header.classList.remove('show', 'hide');
		updateTertiaryPosition(header.offsetHeight);
	} else if (scrollTop > lastScrollTop && scrollTop > threshold) {
		// Scrolling down
		header.classList.remove('show');
		header.classList.add('hide');

		if (secondaryNav && secondaryNav.offsetParent !== null) {
			updateTertiaryPosition(secondaryNav.offsetHeight);
		}
	} else if (scrollTop < lastScrollTop) {
		// Scrolling up
		header.classList.remove('hide');
		header.classList.add('show');
		updateTertiaryPosition(header.offsetHeight);
	}

	lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
});

// Main Navigation
const primaryMenuOffcanvas = document.getElementById('primary-menu');
const primaryMenuOffcanvasTrigger = document.getElementById('primary-menu-toggle');
primaryMenuOffcanvas.addEventListener('show.bs.offcanvas', () => {
	primaryMenuOffcanvasTrigger.classList.add('is-open');
	header.classList.add('fixed-top');
});
primaryMenuOffcanvas.addEventListener('hide.bs.offcanvas', () => {
	primaryMenuOffcanvasTrigger.classList.remove('is-open');
	header.classList.remove('fixed-top');
});

// Search
const searchOffcanvas = document.getElementById('global-search');
const searchOffcanvasTrigger = document.getElementById('global-search-toggle');
searchOffcanvas.addEventListener('show.bs.offcanvas', () => {
	searchOffcanvasTrigger.classList.add('is-open');
	header.classList.add('fixed-top');
});
searchOffcanvas.addEventListener('hide.bs.offcanvas', () => {
	searchOffcanvasTrigger.classList.remove('is-open');
	header.classList.remove('fixed-top');
});

// Set height of offcanvas
function setOffcanvasHeights() {
	const mainNav = document.getElementById('main-nav');
	const offcanvasIds = ['primary-menu', 'global-search'];

	if (!mainNav) return;

	const navHeight = mainNav.offsetHeight;

	offcanvasIds.forEach(id => {
		const el = document.getElementById(id);
		if (el) {
			el.style.height = `calc(100vh - ${navHeight}px)`;
		}
	});
}
// Set on page load
window.addEventListener('load', setOffcanvasHeights);
// Set on window resize
window.addEventListener('resize', setOffcanvasHeights);
// Set on each offcanvas open
['primary-menu', 'global-search'].forEach(id => {
	const el = document.getElementById(id);
	if (el) {
		el.addEventListener('show.bs.offcanvas', setOffcanvasHeights);
	}
});

// On desktop, info for dropdown click hide offcanvas if open
document.getElementById('info-for-dropdown').addEventListener('click', () => {
	const openOffcanvasElements = document.querySelectorAll('.offcanvas.show');
	openOffcanvasElements.forEach(offcanvasEl => {
		const offcanvasInstance = bootstrap.Offcanvas.getInstance(offcanvasEl);
		if (offcanvasInstance) {
			offcanvasInstance.hide();
		}
	});
});

// Secondary and Tertiary Nav
$(document).ready(function() {
	// Toggle open close
	$('.toggle-tertiary').on('click', function() {
		$('.nav-tertiary-lg').toggleClass('nav-tertiary-lg-show');
		$('body').toggleClass('nav-tertiary-lg-shown');
	});
	// Tertiary Nav Toggle child UL
	$('.nav-tertiary li').has('ul').addClass('toggle-sub-menu');
	$('.nav-tertiary li.toggle-sub-menu > a').on('click', function(event) {
		event.preventDefault();
		$(this).closest('li').toggleClass('toggle-sub-menu-open');
	});
	
	// Secondary Nav Toggle child UL
	$('.nav-secondary li').has('ul').addClass('toggle-sub-menu');
	$('.nav-secondary').on('click', 'li.toggle-sub-menu > a', function (event) {
		event.preventDefault();
	
		const $clickedLi = $(this).closest('li');
		const $parentUl = $(this).parents('ul').last();
	
		if (window.innerWidth >= 992) {
			// Only target siblings at the same level
			$clickedLi.siblings('.toggle-sub-menu').removeClass('toggle-sub-menu-open');
			
			if (!$parentUl.is('#secondary-nav-more')) {
				$('#secondary-nav-more li.toggle-sub-menu').removeClass('toggle-sub-menu-open');
			} else {
				console.log('else');
				$('.nav-secondary li.toggle-sub-menu').not('#secondary-nav-more li.toggle-sub-menu').removeClass('toggle-sub-menu-open');
			}
			
		}
	
		// Always toggle the clicked one
		$clickedLi.toggleClass('toggle-sub-menu-open');
	});
	// Dismiss open submenus when clicking outside (992px and up)
	$(document).on('click', function (event) {
		if (window.innerWidth >= 992) {
			if (!$(event.target).closest('.nav-secondary li.toggle-sub-menu').length) {
				$('.nav-secondary li.toggle-sub-menu').removeClass('toggle-sub-menu-open');
			}
		}
	});
});

// Debounce utility
function debounce(func, wait = 100) {
	let timeout;
	return function () {
		clearTimeout(timeout);
		timeout = setTimeout(() => func.apply(this, arguments), wait);
	};
}

// Match height of secondary if desktop
function updateMatchHeight() {
	const links = $('.nav-secondary > ul > li > a');
	if (window.innerWidth >= 992) {
		links.matchHeight({
			byRow: true,
			property: 'min-height',
			target: $('.secondary-nav-section')
		});
	} else {
		links.matchHeight('remove');
	}
}

// Secondary Nav on Desktop More button
function secondaryNavMore() {
	const $secondaryNavSection = $('.secondary-nav-section');
	const $container = $('#secondary-nav .container-xxl');
	const $moreButton = $('#secondary-nav-more > li > a');
	const $overflowDiv = $('#secondary-nav-more li ul');
	const $moreWrapper = $('#secondary-nav-more');
	const $navItems = $('.nav-secondary > ul:not(#secondary-nav-more) > li');

	const containerWidth = $container.width();
	const menuWidth = containerWidth - $secondaryNavSection.outerWidth();
	const moreButtonWidth = $moreButton.outerWidth();

	let total = 0;
	let exceeded = false;

	// Clear overflow
	$overflowDiv.empty();

	$navItems.each(function () {
		const $item = $(this);
		const width = $item.outerWidth(true); // include margins

		if (width + total > menuWidth - moreButtonWidth || exceeded) {
			$item.clone().appendTo($overflowDiv);
			$item.hide();
			exceeded = true;
		} else {
			$item.show();
			total += width;
		}
	});
	
	// Make sure cloned items are shown
	$overflowDiv.children('li').css('display', '');
	
	// Toggle more menu visibility
	$moreWrapper.toggleClass('secondary-nav-more-show', exceeded);
	$moreWrapper.toggleClass('secondary-nav-more-hide', !exceeded);
}

// Init
function handleResize() {
	updateMatchHeight();
	if (window.innerWidth >= 992) {
		secondaryNavMore();
	}
}

// Initial run
handleResize();

// Debounced resize
$(window).on('resize', debounce(handleResize, 150));

// Force Smooth Scrolling on Page Load
document.addEventListener("DOMContentLoaded", function () {
	const yOffset = -100; // Offset from top

	function scrollWithOffset(target) {
		const element = document.querySelector(target);
		if (element) {
			const y = element.getBoundingClientRect().top + window.pageYOffset + yOffset;
			window.scrollTo({ top: y, behavior: "smooth" });
		}
	}

	// 1. On page load
	if (window.location.hash) {
		scrollWithOffset(window.location.hash);
	}

	// 2. On anchor link click
	document.querySelectorAll('a[href^="#"]').forEach(anchor => {
		anchor.addEventListener("click", function (e) {
			const target = this.getAttribute("href");
			if (target.length > 1 && document.querySelector(target)) {
				e.preventDefault();
				history.pushState(null, null, target); // update URL hash
				scrollWithOffset(target);
			}
		});
	});
});

// Copy to Clipboard
var clipboard = new ClipboardJS('.gcc-copy-button');
// fire class change on success
clipboard.on('success', function(e) {
	var trigger = e.trigger;
	$(e.trigger).addClass('copied');
	
	setTimeout(function(e) {
		$(trigger).removeClass('copied');
	}, 1000);
});

// Move Modals to just before closing body tag
document.addEventListener('DOMContentLoaded', () => {
	const body = document.body;
	const modals = document.querySelectorAll('.modal');
		modals.forEach(modal => {
		body.appendChild(modal);
	});
});

// Hero Video Play Pause
document.addEventListener('DOMContentLoaded', function () {
  const video = document.querySelector('#page-header video');
  const button = document.getElementById('page-hero-full-video-play-pause');
  const icon = document.querySelector('#page-hero-full-video-play-pause span');

  // Only proceed if both button and icon exist
  if (button && icon && video) {
	button.addEventListener('click', function () {
	  if (video.paused) {
		video.play();
		icon.classList.remove('fa-play');
		icon.classList.add('fa-pause');
	  } else {
		video.pause();
		icon.classList.remove('fa-pause');
		icon.classList.add('fa-play');
	  }
	});
  }
});

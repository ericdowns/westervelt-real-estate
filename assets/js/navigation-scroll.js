// Navigation Scroll Effect
document.addEventListener('DOMContentLoaded', function() {
	const mainNav = document.getElementById('mainNav');
	
	function handleScroll() {
		if (window.scrollY > 100) {
			mainNav.classList.remove('bg-white/50');
			mainNav.classList.add('bg-white/100');
		} else {
			mainNav.classList.remove('bg-white/100');
			mainNav.classList.add('bg-white/50');
		}
	}

	// Listen for scroll events
	window.addEventListener('scroll', handleScroll);
	
	// Check initial scroll position on page load
	handleScroll();
});
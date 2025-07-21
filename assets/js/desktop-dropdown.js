// Desktop Dropdown Navigation
document.addEventListener('DOMContentLoaded', function() {
	const dropdownParents = document.querySelectorAll('.dropdown-parent');
	
	// Add hover events to each dropdown parent
	dropdownParents.forEach(parent => {
		const trigger = parent.querySelector('.dropdown-trigger');
		const menu = parent.querySelector('.dropdown-menu');
		const arrow = parent.querySelector('.dropdown-arrow');
		
		let hoverTimeout;
		
		// Show dropdown on hover
		parent.addEventListener('mouseenter', () => {
			clearTimeout(hoverTimeout);
			
			// Close other open dropdowns and remove their green underlines
			dropdownParents.forEach(otherParent => {
				if (otherParent !== parent) {
					const otherMenu = otherParent.querySelector('.dropdown-menu');
					const otherArrow = otherParent.querySelector('.dropdown-arrow');
					const otherTrigger = otherParent.querySelector('.dropdown-trigger');
					otherMenu.classList.remove('opacity-100', 'visible', 'translate-y-0');
					otherMenu.classList.add('opacity-0', 'invisible', 'translate-y-2');
					otherArrow.classList.remove('rotate-180');
					otherTrigger.classList.remove('border-moss');
					otherTrigger.classList.add('border-transparent');
				}
			});
			
			// Show current dropdown and add green underline
			menu.classList.remove('opacity-0', 'invisible', 'translate-y-2');
			menu.classList.add('opacity-100', 'visible', 'translate-y-0');
			arrow.classList.add('rotate-180');
			trigger.classList.remove('border-transparent');
			trigger.classList.add('border-moss');
		});
		
		// Hide dropdown on leave (with delay)
		parent.addEventListener('mouseleave', () => {
			hoverTimeout = setTimeout(() => {
				menu.classList.remove('opacity-100', 'visible', 'translate-y-0');
				menu.classList.add('opacity-0', 'invisible', 'translate-y-2');
				arrow.classList.remove('rotate-180');
				trigger.classList.remove('border-moss');
				trigger.classList.add('border-transparent');
			}, 150); // Small delay to prevent flickering
		});
		
		// Prevent dropdown from closing when hovering over menu items
		menu.addEventListener('mouseenter', () => {
			clearTimeout(hoverTimeout);
		});
		
		// Close dropdown when clicking outside
		document.addEventListener('click', (e) => {
			if (!parent.contains(e.target)) {
				menu.classList.remove('opacity-100', 'visible', 'translate-y-0');
				menu.classList.add('opacity-0', 'invisible', 'translate-y-2');
				arrow.classList.remove('rotate-180');
				trigger.classList.remove('border-moss');
				trigger.classList.add('border-transparent');
			}
		});
		
		// Close dropdown on escape key
		document.addEventListener('keydown', (e) => {
			if (e.key === 'Escape') {
				menu.classList.remove('opacity-100', 'visible', 'translate-y-0');
				menu.classList.add('opacity-0', 'invisible', 'translate-y-2');
				arrow.classList.remove('rotate-180');
				trigger.classList.remove('border-moss');
				trigger.classList.add('border-transparent');
			}
		});
	});
	
	// Close all dropdowns when scrolling
	window.addEventListener('scroll', () => {
		dropdownParents.forEach(parent => {
			const menu = parent.querySelector('.dropdown-menu');
			const arrow = parent.querySelector('.dropdown-arrow');
			const trigger = parent.querySelector('.dropdown-trigger');
			menu.classList.remove('opacity-100', 'visible', 'translate-y-0');
			menu.classList.add('opacity-0', 'invisible', 'translate-y-2');
			arrow.classList.remove('rotate-180');
			trigger.classList.remove('border-moss');
			trigger.classList.add('border-transparent');
		});
	});
});
// Mobile Menu Functionality
document.addEventListener('DOMContentLoaded', function() {
	const mobileMenuButton = document.getElementById('mobileMenuButton');
	const mobileMenu = document.getElementById('mobileMenu');
	const mobileMenuPanel = document.getElementById('mobileMenuPanel');
	const closeMobileMenu = document.getElementById('closeMobileMenu');
	const line1 = document.getElementById('line1');
	const line2 = document.getElementById('line2');
	const line3 = document.getElementById('line3');

	let isMenuOpen = false;

	function toggleMobileMenu() {
		isMenuOpen = !isMenuOpen;

		if (isMenuOpen) {
			mobileMenu.classList.remove('hidden');
			setTimeout(() => {
				mobileMenuPanel.classList.remove('-translate-x-full');
			}, 10);

			line1.classList.add('rotate-45', 'translate-y-2.5');
			line2.classList.add('opacity-0');
			line3.classList.add('-rotate-45', '-translate-y-2.5');

			document.body.style.overflow = 'hidden';
		} else {
			mobileMenuPanel.classList.add('-translate-x-full');
			setTimeout(() => {
				mobileMenu.classList.add('hidden');
			}, 300);

			line1.classList.remove('rotate-45', 'translate-y-2.5');
			line2.classList.remove('opacity-0');
			line3.classList.remove('-rotate-45', '-translate-y-2.5');

			document.body.style.overflow = '';
		}
	}

	// Generic submenu toggle functionality
	function initializeSubmenus() {
		const toggles = document.querySelectorAll('.submenu-toggle');
		
		toggles.forEach((toggle, index) => {
			toggle.addEventListener('click', (e) => {
				e.preventDefault();
				const submenu = toggle.nextElementSibling;
				const verticalLine = toggle.querySelector('.plus-vertical');
				
				if (submenu && submenu.classList.contains('submenu')) {
					const isOpen = !submenu.classList.contains('hidden');
					
					if (isOpen) {
						submenu.classList.add('hidden');
						verticalLine.classList.add('rotate-90');
					} else {
						submenu.classList.remove('hidden');
						verticalLine.classList.remove('rotate-90');
					}
				}
			});
		});
	}

	// Event listeners
	mobileMenuButton.addEventListener('click', toggleMobileMenu);
	closeMobileMenu.addEventListener('click', toggleMobileMenu);

	mobileMenu.addEventListener('click', (e) => {
		if (e.target === mobileMenu) {
			toggleMobileMenu();
		}
	});

	document.addEventListener('keydown', (e) => {
		if (e.key === 'Escape' && isMenuOpen) {
			toggleMobileMenu();
		}
	});

	// Initialize submenu functionality
	initializeSubmenus();
});
// Mini Sitemap Toggle Functionality
document.addEventListener('DOMContentLoaded', function() {
	const toggleBox = document.getElementById('toggleBox');
	const toggleButton = document.getElementById('toggleButton');
	const openButton = document.getElementById('openButton');

	const STORAGE_KEY = 'toggleBoxClosed';

	// Check saved state on load
	if (localStorage.getItem(STORAGE_KEY) === 'true') {
		toggleBox.classList.add('hidden');
		openButton.classList.remove('hidden');
	}

	toggleButton.addEventListener('click', () => {
		toggleBox.classList.add('hidden');
		openButton.classList.remove('hidden');
		localStorage.setItem(STORAGE_KEY, 'true');
	});

	openButton.addEventListener('click', () => {
		toggleBox.classList.remove('hidden');
		openButton.classList.add('hidden');
		localStorage.removeItem(STORAGE_KEY);
	});
});
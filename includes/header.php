<!-- <style> *{outline: 1px solid rgba(0, 0, 0, .1);} </style> -->

<div id="toggleBox" class="bg-white shadow-xl fixed rounded-lg left-10 bottom-10 flex flex-col w-[300px] hover:[&>a]:bg-gray-200 text-sm z-[999] p-4 pt-2 space-y-1 border-2 transition-all duration-300">

	<button id="toggleButton" class="easy size-8 flex items-center justify-center font-semibold text-white absolute -top-2 bg-moss -right-2 text-xl leading-none p-1 rounded-full hover:bg-primary">&times;</button>

	<a href="/index.php">Home ✅</a>
	<a href="/land-for-sale-all.php">Land for Sale - All 🔄</a>
	<a href="/land-for-sale-category.php">Land for Sale - Category 🔄</a>
	<a href="/land-for-sale-map.php">Land for Sale - Map 🔄</a>
	<a href="/land-for-sale-single.php">Land for Sale - Single 🔄</a>
	<a href="/land-for-sale-image-expanded.php">Land for Sale - Image Expanded 🔄</a>
	<a href="/residential-sales.php">Residential Sales - All 🔄</a>
	<a href="/residential-community.php">Residential Community 🔄</a>
	<a href="/residential-single.php">Residential Single 🔄</a>
	<a href="/about.php">About ✅</a>
	<a href="/contact.php">Contact 🔄</a>
	<a href="/styles.php">Styles 🔄</a>
</div>

<button id="openButton" class="text-sm font-semibold shadow-xl border border-forest-green border-2 fixed left-10 bottom-10 z-[998] bg-moss text-white px-3 py-1 rounded hidden">
	Sitemap
</button>

<script>
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
</script>


<header class="z-[99] fixed w-full">


	<div class="message_bar flex justify-between items-center px-5 bg-white h-[45px] border-b">

		<div class="[&_*_a]:text-moss [&_*_a]:font-semibold [&_*_a]:underline">
			<p class="mb-0 sm">Optional <a href="#">news statement</a>... something not too long.</p>
		</div>

		<ul class="lg:flex hidden gap-4 items-center">
			<li><a href="#" class="hover:text-moss easy"><h6 class="flex items-center gap-1">Careers <img class="w-4 h-auto" src="/assets/images/arrow_outward.svg"></h6></a></li>
			<li><a href="#" class="hover:text-moss easy"><h6 class="flex items-center gap-1">Sustainability Report <img class="w-4 h-auto" src="/assets/images/arrow_down.svg"></h6></a></li>
		</ul>
	</div>

	<nav class="bg-white/50 backdrop-blur-lg h-[95px] flex items-center">
		<div class="w-full mx-auto flex justify-between px-5 h-full">

			<a class="flex flex-col justify-center" href="/">
				<img src="/assets/images/Westervelt-Real-Estate.svg" alt="Westervelt Real Estate">
			</a>

			<ul class="lg:flex hidden font-serif h-full [&_*_a]:px-8">
				<li>
					<a href="#" class="flex items-center easy h-full border-b-2 border-transparent hover:border-moss xl:text-size-h5 lg:text-size-m-h5">
						<span class="flex items-center">Land for Sale <img class="w-6 h-auto" src="/assets/images/expand_more.svg"> </span>
					</a>
				</li>
				<li>
					<a href="#" class="flex items-center easy h-full border-b-2 border-transparent hover:border-moss xl:text-size-h5 lg:text-size-m-h5">
						<span class="flex items-center">Residential Sales<img class="mx-auto w-6 h-auto" src="/assets/images/expand_more.svg"> </span>
					</a>
				</li>
				<li>
					<a href="#" class="flex items-center easy h-full border-b-2 border-transparent hover:border-moss xl:text-size-h5 lg:text-size-m-h5">
						<span class="flex items-center">About</span>
					</a>
				</li>
				<li>
					<a href="#" class="flex items-center easy h-full border-b-2 border-transparent hover:border-moss xl:text-size-h5 lg:text-size-m-h5">
						<span class="flex items-center">Contact Us</span>
					</a>
				</li>
			</ul>


		</div>
	</nav>

</header>
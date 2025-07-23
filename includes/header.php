<!-- <style> *{outline: 1px solid rgba(0, 0, 0, .1);} </style> -->

<div id="toggleBox" class="bg-white shadow-lg fixed rounded-lg left-5 bottom-5 flex flex-col w-[300px] hover:[&>a]:bg-gray-200 text-sm z-[100000] p-4 pt-2 space-y-1 border-2 transition-all duration-300">

	<button id="toggleButton" class="easy size-8 flex items-center justify-center font-semibold text-white absolute -top-2 bg-moss -right-2 text-xl leading-none p-1 rounded-full hover:bg-primary">&times;</button>

	<a href="/index.php">Home </a>
	<a href="/land-for-sale-all.php">Land for Sale - All</a>
	<a href="/land-for-sale-category.php">Land for Sale - Category </a>
	<a href="/land-for-sale-map.php">Land for Sale - Map </a>
	<a href="/land-for-sale-single.php">Land for Sale - Single </a>
	<a href="/land-for-sale-image-expanded.php">Land for Sale - Image Expanded </a>
	<a href="/residential-sales.php">Residential Sales - All </a>
	<a href="/residential-community.php">Residential - Community </a>
	<a href="/residential-single.php">Residential -  Single </a>
	<a href="/about.php">About </a>
	<a href="/contact.php">Contact </a>
	<a href="/styles.php">Styles </a>
</div>

<button id="openButton" class="text-sm shadow-lg fixed left-5 bottom-5 z-[100000] bg-moss text-white px-3 pt-2 pb-1 rounded hidden">
	Mini Sitemap
</button>

<!-- Sitemap Toggle Script -->
<script src="/assets/js/sitemap-toggle.js"></script>


<header class="z-[99] fixed w-full">


	<div class="message_bar flex justify-between items-center px-5 bg-white h-[45px]">

		<div>
			<p class="mb-0 sm">Optional <a href="#" class="link-green">news statement</a>... something not too long.</p>
		</div>

		<ul class="lg:flex hidden gap-4 items-center">
			<li><a href="#" class="hover:text-moss easy text-label flex items-center gap-1">Careers <img class="w-4 h-auto" src="/assets/images/icon-arrow-outward.svg" alt="External link arrow"></a></li>
			<li><a href="#" class="hover:text-moss easy text-label flex items-center gap-1">Sustainability Report <img class="w-4 h-auto" src="/assets/images/icon-arrow-down.svg" alt="Dropdown arrow"></a></li>
		</ul>
	</div>

	<nav id="mainNav" class="bg-white/70 backdrop-blur-lg h-[95px] flex items-center transition-all duration-300">
		
		<div class="w-full mx-auto flex justify-between px-5 h-full items-center">

			<a class="flex flex-col justify-center" href="/">
				<img src="/assets/images/logo-westervelt-main.svg" alt="Westervelt Real Estate">
			</a>

			<ul class="lg:flex hidden font-serif h-full [&_*_a]:px-8">
				<!-- Land for Sale Dropdown -->
				<li class="relative dropdown-parent">
					<a href="#" class="flex items-center easy h-full border-b-2 border-transparent xl:text-size-h5 lg:text-size-m-h5 dropdown-trigger">
						<span class="flex items-center font-serif">Land for Sale <img class="w-6 h-auto transition-transform dropdown-arrow" src="/assets/images/icon-expand-more.svg"> </span>
					</a>
					<!-- Dropdown Menu -->
					<div class="dropdown-menu absolute top-full left-1/2 transform -translate-x-1/2 bg-white shadow-lg rounded-lg py-6 px-0 w-[280px] opacity-0 invisible transition-all duration-200 translate-y-2">
						<a href="#" class="dropdown-item">See All</a>
						<a href="#" class="dropdown-item">Commercial/Industrial</a>
						<a href="#" class="dropdown-item">Mini-Farms</a>
						<a href="#" class="dropdown-item">Recreational Tracts</a>
						<a href="#" class="dropdown-item">Acreage</a>
					</div>
				</li>
				<!-- Residential Sales Dropdown -->
				<li class="relative dropdown-parent">
					<a href="#" class="flex items-center easy h-full border-b-2 border-transparent xl:text-size-h5 lg:text-size-m-h5 dropdown-trigger">
						<span class="flex items-center font-serif">Residential Sales<img class="mx-auto w-6 h-auto transition-transform dropdown-arrow" src="/assets/images/icon-expand-more.svg"> </span>
					</a>
					<!-- Dropdown Menu -->
					<div class="dropdown-menu absolute top-full left-1/2 transform -translate-x-1/2 bg-white shadow-lg rounded-lg py-6 px-0 w-[280px] opacity-0 invisible transition-all duration-200 translate-y-2">
						<a href="#" class="dropdown-item">See All</a>
						<a href="#" class="dropdown-item">Lake Crest</a>
						<a href="#" class="dropdown-item">Harbor Ridge</a>
						<a href="#" class="dropdown-item">The Lakes of NorthRiver</a>
						<a href="#" class="dropdown-item">Martin Farms</a>
						<a href="#" class="dropdown-item">Neptune's Cove</a>
						<a href="#" class="dropdown-item">NorthRiver</a>
					</div>
				</li>
				<li>
					<a href="#" class="flex items-center easy h-full border-b-2 border-transparent hover:border-moss xl:text-size-h5 lg:text-size-m-h5">
						<span class="flex items-center font-serif">About</span>
					</a>
				</li>
				<li>
					<a href="#" class="flex items-center easy h-full border-b-2 border-transparent hover:border-moss xl:text-size-h5 lg:text-size-m-h5">
						<span class="flex items-center font-serif">Contact Us</span>
					</a>
				</li>
			</ul>

			<!-- Mobile Menu Button -->
			<button id="mobileMenuButton" class="lg:hidden flex flex-col justify-center items-center w-10 h-10 space-y-2 focus:outline-none">
				<span id="line1" class="block w-8 h-0.5 bg-primary transition-all duration-300 ease-in-out"></span>
				<span id="line2" class="block w-8 h-0.5 bg-primary transition-all duration-300 ease-in-out"></span>
				<span id="line3" class="block w-8 h-0.5 bg-primary transition-all duration-300 ease-in-out"></span>
			</button>

		</div>
	</nav>

</header>



<!-- Mobile Menu -->
<div id="mobileMenu" class="lg:hidden fixed inset-0 bg-primary bg-opacity-50 z-[100] hidden">
	<div class="bg-white w-full h-full shadow-lg transform transition-transform duration-300 ease-in-out overflow-y-auto -translate-x-full" id="mobileMenuPanel">
		
		<div class="sticky top-0 bg-white p-6 border-b border-mediumgray/50 z-10">
			<div class="flex justify-end items-center">
				<button id="closeMobileMenu" class="flex justify-center items-center w-10 h-10 focus:outline-none relative">
					<span class="block w-8 h-0.5 bg-moss transform rotate-45 absolute"></span>
					<span class="block w-8 h-0.5 bg-moss transform -rotate-45 absolute"></span>
				</button>
			</div>
		</div>

		
		<nav class="px-6  pb-20">
			<ul class="space-y-0 divide-y divide-lightgray/50 border-b border-lightgray/50">
				<li>
					<div class="flex items-center justify-between cursor-pointer submenu-toggle py-3" data-target="0">
						<span class="text-lg font-medium text-gray-800 hover:text-moss flex-1">Land for Sale</span>
						<div class="toggle-icon flex justify-center items-center w-10 h-10 relative">
							<span class="block w-4 h-0.5 bg-moss absolute"></span>
							<span class="plus-vertical block w-4 h-0.5 bg-moss absolute transform rotate-90 transition-transform duration-300"></span>
						</div>
					</div>
					<div class="submenu hidden pl-4 space-y-2 pb-3">
						<a href="#" class="easy block py-2 text-base  hover:text-moss">See All</a>
						<a href="#" class="easy block py-2 text-base  hover:text-moss">Commercial/Industrial</a>
						<a href="#" class="easy block py-2 text-base  hover:text-moss">Mini-Farms</a>
						<a href="#" class="easy block py-2 text-base  hover:text-moss">Recreational Tracts</a>
						<a href="#" class="easy block py-2 text-base  hover:text-moss">Acreage</a>
					</div>
				</li>
				<li>
					<div class="flex items-center justify-between cursor-pointer submenu-toggle py-3" data-target="1">
						<span class="text-lg hover:text-moss flex-1 font-medium">Residential Sales</span>
						<div class="toggle-icon flex justify-center items-center w-10 h-10 relative">
							<span class="block w-4 h-0.5 bg-moss absolute"></span>
							<span class="plus-vertical block w-4 h-0.5 bg-moss absolute transform rotate-90 transition-transform duration-300"></span>
						</div>
					</div>
					<div class="submenu hidden pl-4 space-y-2 pb-3">
						<a href="#" class="easy block py-2 text-base hover:text-moss">See All</a>
						<a href="#" class="easy block py-2 text-base  hover:text-moss">Lake Crest</a>
						<a href="#" class="easy block py-2 text-base  hover:text-moss">Harbor Ridge</a>
						<a href="#" class="easy block py-2 text-base  hover:text-moss">The Lakes of NorthRiver</a>
						<a href="#" class="easy block py-2 text-base  hover:text-moss">Martin Farms</a>
						<a href="#" class="easy block py-2 text-base  hover:text-moss">Neptune's Cove</a>
						<a href="#" class="easy block py-2 text-base  hover:text-moss">NorthRiver</a>
					</div>
				</li>
				<li>
					<a href="#" class="easy block py-3 text-lg font-medium  hover:text-moss">About</a>
				</li>
				<li>
					<a href="#" class="easy block py-3 text-lg font-medium  hover:text-moss">Contact Us</a>
				</li>
				<li>
					<a href="#" class="easy block py-3 text-lg font-medium  hover:text-moss">Careers</a>
				</li>
				<li>
					<a href="#" class="easy block py-3 text-lg font-medium  hover:text-moss">Sustainability Report</a>
				</li>
			</ul>
		</nav>


	</div>
</div>



<!-- Mobile Menu & Navigation Scripts -->
<script src="/assets/js/mobile-menu.js"></script>
<script src="/assets/js/navigation-scroll.js"></script>
<script src="/assets/js/desktop-dropdown.js"></script>
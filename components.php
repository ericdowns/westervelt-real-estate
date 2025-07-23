<!-- <style> *{outline: 1px solid rgba(0, 0, 0, 1);} </style> -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Westervelt Real Estate</title>
	<link rel="stylesheet" href="style.css">
</head>
<body class="min-h-screen flex flex-col bg-tan">
	<?php include './includes/header.php'; ?>
	<main class="mx-auto flex-grow w-full mt-[200px]">
		<div class="content mx-auto pb-10">
			<!-- ========== PROPERTY CARDS ========== -->
			<div class="w-full border-b border-mediumgray pb-5 mb-10">
				<h2>Property Card Components</h2>
			</div>
			<div class="grid md:grid-cols-3 grid-cols-1 gap-5 mb-20">
				<!-- Card Land (Vertical) -->
				<div>
					<h6 class="mb-4">Card Land (Vertical)</h6>
					<?php include './components/cards/card_land.php'; ?>
				</div>
				<!-- Card Buying -->
				<div>
					<h6 class="mb-4">Card Buying</h6>
					<?php include './components/cards/card_buying.php'; ?>
				</div>
				<!-- Card Land Horizontal -->
				<div>
					<h6 class="mb-4">Card Land (Horizontal)</h6>
					<?php include './components/cards/card_land_horizontal.php'; ?>
				</div>
			</div>
			<!-- ========== NAVIGATION COMPONENTS ========== -->
			<div class="w-full border-b border-mediumgray pb-5 mb-10">
				<h2>Navigation Components</h2>
			</div>
			<div class="grid md:grid-cols-2 grid-cols-1 gap-10 mb-20">
				<!-- Swiper Buttons -->
				<div>
					<h6 class="mb-4">Swiper Navigation Buttons</h6>
					<div class="flex gap-2">
						<button class="btn_swiper"> 
							<img class="mx-auto w-4 h-auto scale-x-[-1]" src="/assets/images/ui-swiper-arrow.svg" alt="Previous">
						</button>
						<button class="btn_swiper active"> 
							<img class="mx-auto w-4 h-auto " src="/assets/images/ui-swiper-arrow.svg" alt="Next">
						</button>
					</div>
				</div>
				<!-- Swiper Buttons Light (for dark backgrounds) -->
				<div>
					<h6 class="mb-4">Swiper Navigation Buttons (Light)</h6>
					<div class="bg-dark-green p-4 rounded flex gap-2">
						<button class="btn_swiper btn_swiper_light"> 
							<img class="mx-auto w-4 h-auto scale-x-[-1]" src="/assets/images/ui-swiper-arrow-white.svg" alt="Previous">
						</button>
						<button class="btn_swiper btn_swiper_light"> 
							<img class="mx-auto w-4 h-auto " src="/assets/images/ui-swiper-arrow-white.svg" alt="Next">
						</button>
					</div>
				</div>
			</div>
			<!-- ========== CONTENT COMPONENTS ========== -->
			<div class="w-full border-b border-mediumgray pb-5 mb-10">
				<h2>Content Components</h2>
			</div>
			<div class="grid md:grid-cols-2 grid-cols-1 gap-10 mb-20">
				<!-- Testimonial Card -->
				<div>
					<h6 class="mb-4">Testimonial Card</h6>
					<div class="bg-white rounded-md p-8 flex flex-col gap-10">
						<img class="w-6 h-auto" src="/assets/images/icon-quote.svg" alt="Quote">
						<h5>The Westervelt Team did a great job anticipating our needs and finding a property that was perfect for us.</h5>
						<div class="flex justify-between">
							<div class="flex gap-4 items-center">
								<p><b>John Smith</b></p> <span class="text-[#C4C4C4]">|</span>
								<h6 class="text-secondary">Owner</h6>
							</div>
							<div class="relative h-[50px] w-[80px] rounded-md overflow-clip">
								<img class="absolute h-full w-full object-cover" src="/assets/images/content-testimonial-person.jpg" alt="Customer Photo">
							</div>
						</div>
					</div>
				</div>
				<!-- Badge Component -->
				<div>
					<h6 class="mb-4">Badge Component</h6>
					<div class="flex gap-4 items-center">
						<span class="badge">Land for Sale</span>
						<span class="badge">We can Help</span>
					</div>
				</div>
			</div>
			<!-- ========== INTERFACE COMPONENTS ========== -->
			<div class="w-full border-b border-mediumgray pb-5 mb-10">
				<h2>Interface Components</h2>
			</div>
			<div class="grid md:grid-cols-2 grid-cols-1 gap-10 mb-20">
				<!-- View Toggle Buttons -->
				<div>
					<h6 class="mb-4">View Toggle Buttons</h6>
					<div class="flex rounded-md overflow-hidden">
						<!-- Left Button (Active) -->
						<button class="view-tab-active view-tab-active-left">
							<img src="/assets/images/icon-grid.svg" alt="Grid view icon" class="w-5 h-5 mr-2" />
							<span>Listings</span>
						</button>
						<!-- Right Button (Inactive) -->
						<button class="view-tab view-tab-right">
							<img src="/assets/images/icon-map.svg" alt="Map view icon" class="w-5 h-5 mr-2" />
							<span>Map</span>
						</button>
					</div>
				</div>
				<!-- Property Gallery Component -->
				<div>
					<h6 class="mb-4">Property Gallery Component</h6>
					<div class="grid md:grid-cols-3 grid-cols-1 gap-5">
						<div class="group">
							<div class="relative mb-3">
								<div class="relative pb-[71.4%] w-full overflow-clip rounded-xl">
									<img class="absolute h-full w-full object-cover transform group-hover:scale-105 easy" src="/assets/images/photo-gallery-1.jpg" alt="Gallery Photo 1">
								</div>
								<div class="absolute bottom-5 right-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300 easy">
									<div class="w-10 h-10 bg-moss rounded-full flex items-center justify-center">
										<img class="w-5 h-5" src="/assets/images/icon-expand.svg" alt="Expand">
									</div>
								</div>
							</div>
							<p class="sm">Property gallery image...</p>
						</div>
						<div class="group">
							<div class="relative mb-3">
								<div class="relative pb-[71.4%] w-full overflow-clip rounded-xl">
									<img class="absolute h-full w-full object-cover transform group-hover:scale-105 easy" src="/assets/images/photo-gallery-2.jpg" alt="Gallery Photo 2">
								</div>
								<div class="absolute bottom-5 right-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300 easy">
									<div class="w-10 h-10 bg-moss rounded-full flex items-center justify-center">
										<img class="w-5 h-5" src="/assets/images/icon-expand.svg" alt="Expand">
									</div>
								</div>
							</div>
							<p class="sm">Property gallery image...</p>
						</div>
						<div class="group">
							<div class="relative mb-3">
								<div class="relative pb-[71.4%] w-full overflow-clip rounded-xl">
									<img class="absolute h-full w-full object-cover transform group-hover:scale-105 easy" src="/assets/images/photo-gallery-3.jpg" alt="Gallery Photo 3">
								</div>
								<div class="absolute bottom-5 right-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300 easy">
									<div class="w-10 h-10 bg-moss rounded-full flex items-center justify-center">
										<img class="w-5 h-5" src="/assets/images/icon-expand.svg" alt="Expand">
									</div>
								</div>
							</div>
							<p class="sm">Property gallery image...</p>
						</div>
					</div>
				</div>
			</div>
			<!-- ========== AGENT COMPONENTS ========== -->
			<div class="w-full border-b border-mediumgray pb-5 mb-10">
				<h2>Agent Components</h2>
			</div>
			<div class="max-w-md mx-auto mb-20">
				<!-- Agent Bio Card -->
				<div>
					<h6 class="mb-4 text-center">Agent Bio Card</h6>
					<div class="bg-white w-full rounded-xl p-8 flex flex-col justify-center items-center gap-8">
						<div class="w-20 h-20 relative">
							<img class="absolute h-full w-full object-cover rounded-full" src="/assets/images/team-tom-headshot.jpg" alt="Agent Headshot">
						</div>
						<h4>Tom Chambers</h4>
						<div class="flex flex-col [@media(min-width:1200px)]:flex-row items-center justify-center gap-3 xl:gap-5 w-full text-center">
							<a href="tel:+12057920355" class="font-bold whitespace-nowrap text-dark-green hover:text-moss easy">205-792-0355</a>
							<a class="btn" href="mailto:tchambers@westervelt.com">Email Tom</a>
						</div>
						<div class="socials flex flex-row items-center justify-center gap-4 w-full border-t border-lightgray pt-5">
							<p class="text-dark-green sm">Share:</p>
							<img class="size-6 hover:opacity-40 transition" src="/assets/images/icon-twitter.svg" alt="Twitter">
							<img class="size-6 hover:opacity-40 transition" src="/assets/images/icon-linkedin.svg" alt="Linkedin">
							<img class="size-6 hover:opacity-40 transition" src="/assets/images/icon-facebook-dark.svg" alt="Facebook">
							<img class="size-6 hover:opacity-40 transition" src="/assets/images/icon-envelope.svg" alt="Email">
						</div>
					</div>
				</div>
			</div>
		</main>
		<footer class="bg-dark-green text-white  mt-auto"> </footer>
	</body>
	</html>
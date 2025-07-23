<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Westervelt Real Estate</title>
	<link rel="icon" type="image/svg+xml" href="/assets/images/favicon.svg">
	<link rel="stylesheet" href="style.css">
</head>
<body class="min-h-screen flex flex-col">
	<?php include './includes/header.php'; ?>
	<main class="mx-auto flex-grow w-full pt-[45px]">

		<div class="relative lg:h-[750px] h-[550px] w-full">
			<img class="absolute h-full w-full object-cover" src="/assets/images/hero-home.jpg" alt="Home Hero">
			<div class="gradient-overlay"></div>
			<div class="absolute w-full h-full inset-0 flex flex-col justify-end items-start space-y-2 lg:p-10 p-5 pb-14 z-10">
				<div class="lg:w-6/12 w-full flex flex-col space-y-6 items-start">
					<h1 class="text-white">Our Sustainability Commitment Is in Every Piece of Land</h1>
					<a class="btn" href="#">View Properties</a>
				</div>
			</div>
		</div>

		<div class="bg-dark-green lg:py-40 py-20 flex flex-col justify-center relative">
			<img class="absolute h-full w-full object-cover" src="/assets/images/bg-terrain.svg" alt="Home Hero">
			<div class="max-w-5xl mx-auto text-center px-10 flex flex-col items-center gap-4 z-10">
				<span class="badge">Land for Sale</span>
				<h3 class="max-md:text-2xl text-white">Whether you're looking for a water view, acres of forests, a single lot for your dream home, or space to build your business – we believe our lands are a perfect place for you. Our legacy of stewardship means our lands have been sustainably managed for generations - are you ready to build your own legacy?
				</h3>
			</div>
		</div>



		<div class="bg-tan">
			<div class="content">
				<div class="flex pt-10 lg:flex-row flex-col justify-between w-full gap-5 lg:items-end">
					<div class="flex">
						<span class="greendot mt-4 mr-3"></span>
						<div>
							<h3 class="mb-1">Featured Land for Sale</h3>
							<p>Find your new future at one of our featured properties.</p>
						</div>
					</div>
					<a class="btn lg:self-end self-start ml-5" href="#">See All</a>
				</div>
				<div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-y-10 gap-x-5 grid_cards_land_wrapper  pb-20 pt-5">
					<?php for ($i = 0; $i < 3; $i++) {include './components/cards/card_land.php'; } ?>
				</div>
			</div>
		</div>


		<div class="lg:px-10 px-5 bg-tan">
			<hr class="py-8 border-t border-mediumgray">
		</div>



		<div class="bg-tan">
			<div class="content">
				<div class="flex pt-10 flex lg:flex-row flex-col justify-between w-full gap-5 lg:items-end">
					<div class="flex">
						<span class="greendot mt-4 mr-3"></span>
						<div>
							<h3 class="mb-1">Residential Communities</h3>
							<p>Our communities are filling up fast – we'd be happy to talk with you about a perfect place for your family.</p>
						</div>
					</div>
					<a class="btn lg:self-end self-start ml-5" href="#">See All</a>
				</div>
				<div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-y-10 gap-x-5 grid_cards_land_wrapper pb-20 pt-5">
					<?php for ($i = 0; $i < 3; $i++) {include './components/cards/card_land.php'; } ?>
				</div>
			</div>
		</div>





		<div class="relative min-h-[650px]  w-full">
			<video autoplay muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover "> 
				<source src="https://RoyalZone.b-cdn.net/Westevelt-Intro.mp4" type="video/mp4"> 
				</video>
				<div class="gradient-overlay"></div>
				<div class="absolute w-full h-full inset-0 flex flex-col justify-center items-start lg:px-10 p-5 z-10">
					<div class="lg:w-6/12 w-full flex flex-col space-y-6 items-start">
						<span class="badge">About Us</span>
						<h4 class="max-md:text-2xl text-white">
							Westervelt Real Estate offers clients land that has been sustainably managed for decades. Because of our sustainability commitment, all our lands have been managed responsibly. Each acre reflects that commitment – whether on rolling hills, sweeping hilltop views or acres of high-quality forests.
						</h4>
						<a class="btn" href="#">Learn More</a>
					</div>
				</div> 
			</div>
		</div>



		<div>
			<div class="grid md:grid-cols-2 grid-cols-1 gap-y-10 gap-x-5 grid_cards_land_wrapper px-5 py-20">
				<a href="#" class="block group hover:shadow-lg transition-shadow easy rounded-xl overflow-clip">
					<div class="flex flex-col bg-white card_land">
						<div class="relative pb-[95%] w-full">
							<img
							class="absolute h-full w-full object-cover transform group-hover:scale-[1.045] easy"
							src="/assets/images/card-buying.jpg"
							alt="Westervelt buying services property image"
							>
							
							<div class="absolute bottom-0 h-2/3 w-full bg-gradient-to-t from-black to-black/0 pointer-events-none"></div>

							<div class="flex flex-col justify-end items-start space-y-4 p-6 rounded absolute h-full w-full *:text-white">
								<span class="badge">We can Help</span>
								<h2>Buying</h2>
								<h5>Our skilled Westervelt Real Estate team is here for you every step of the way. Check out our listings.</h5>
							</div>

						</div>
					</div>
				</a>
				<a href="#" class="block group hover:shadow-lg transition-shadow easy rounded-xl overflow-clip">
					<div class="flex flex-col bg-white card_land">
						<div class="relative pb-[95%] w-full">
							<img
							class="absolute h-full w-full object-cover transform group-hover:scale-[1.045] easy"
							src="/assets/images/selling.jpg"
							alt="Westervelt selling services property image"
							>
							
							<div class="absolute bottom-0 h-2/3 w-full bg-gradient-to-t from-black to-black/0 pointer-events-none"></div>

							<div class="flex flex-col justify-end items-start space-y-4 p-6 rounded absolute h-full w-full *:text-white">
								<span class="badge">We're Always Looking</span>
								<h2>Selling</h2>
								<h5>Do you have land you're interested in selling? Contact us and tell us more!</h5>
							</div>

						</div>
					</div>
				</a>
			</div>
		</div>



		<div class="testimonial_wrapper bg-sky min-h-40">
			<div class="content">
				<div class="flex w-full items-center py-10 justify-between">
					<div class="">
						<h2>Testimonials</h2>
					</div>
					<div class="flex gap-2">
						<button class="btn_swiper inactive"> 
							<img class="mx-auto w-4 h-auto scale-x-[-1]" src="/assets/images/ui-swiper-arrow.svg" alt="Swiper Arrow">
						</button>
						<button class="btn_swiper active"> 
							<img class="mx-auto w-4 h-auto " src="/assets/images/ui-swiper-arrow.svg" alt="Swiper Arrow">
						</button>
					</div>
				</div>
				<div class="grid md:grid-cols-2 grid-cols-1 gap-5 pb-20">
					<?php for ($i = 0; $i < 2; $i++) { ?>
						<div class="bg-white rounded-xl p-8 flex flex-col gap-10">
							<img  class="w-6 h-auto" src="/assets/images/icon-quote.svg" alt="quote">
							<h5>The Westervelt Team did a great job anticipating our needs and finding a property that was perfect for us.</h5>
							<div class="flex justify-between">
								<div class="flex gap-4 items-center">
									<p><b>John Smith</b></p> <span class="text-[#C4C4C4]">|</span>
									<h6 class="text-secondary">Owner</h6>
								</div>
								<div class="relative  h-[50px] w-[80px] rounded-md overflow-clip">
									<img  class="absolute h-full w-full object-cover" src="/assets/images/content-testimonial-person.jpg" alt="John Smith customer photo">
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>



	</main>


	<?php include './includes/footer.php'; ?>
</body>
</html>
<!-- <style> *{outline: 1px solid rgba(0, 0, 0, .5);} </style> -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Westervelt Real Estate</title>
	<link rel="stylesheet" href="style.css">
</head>
<body class="min-h-screen flex flex-col">


	<?php include './includes/header.php'; ?>


	

	<main class="mx-auto flex-grow w-full pt-[45px]">

		<div class="relative lg:h-[750px] h-[550px] w-full">
			<img class="absolute h-full w-full object-cover" src="/assets/images/home_hero.jpg" alt="Home Hero">
			<div class="absolute bg-black/30  w-full h-full inset-0 flex flex-col justify-end items-start space-y-2 p-5 pb-14">
				<div class="lg:w-6/12 w-full flex flex-col space-y-6 items-start">
					<h1 class="text-white">Our Sustainability Commitment Is in Every Piece of Land</h1>
					<a class="btn" href="#">View Properties</a>
				</div>
			</div>
		</div>





		<div class="bg-dark-green lg:py-40 py-20 flex flex-col justify-center relative">
			<img class="absolute h-full w-full object-cover" src="/assets/images/terrain_bg.svg" alt="Home Hero">
			<div class="max-w-5xl mx-auto text-center px-10 flex flex-col items-center gap-4 z-10">
				<span class="badge"><h6>Land for Sale</h6></span>
				<h3 class="text-white">Whether you're looking for a water view, acres of forests, a single lot for your dream home, or space to build your business – we believe our lands are a perfect place for you. Our legacy of stewardship means our lands have been sustainably managed for generations - are you ready to build your own legacy?
				</h3>
			</div>
		</div>



		<div class="bg-tan">
			<div class="px-5 flex py-8 flex lg:flex-row flex-col justify-between w-full gap-5 lg:items-end">
				<div class="flex">
					<span class="greendot mt-4 mr-3"></span>
					<div>
						<h3 class="mb-1">Featured Land for Sale</h3>
						<p>Find your new future at one of our featured properties.</p>
					</div>
				</div>
				<a class="btn lg:self-end self-start ml-5" href="#">See All</a>
			</div>
			<div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-y-10 gap-x-5 grid_cards_land_wrapper px-5 pb-20 pt-5">
				<?php for ($i = 0; $i < 3; $i++) {include './components/cards/card_land.php'; } ?>
			</div>
		</div>


		<div class="px-5 bg-tan">
			<hr class="px-5 py-8 border-t border-gray-300">
		</div>





		<div class="bg-tan">
			<div class="px-5 flex pb-8 flex lg:flex-row flex-col justify-between w-full gap-5 lg:items-end">
				<div class="flex">
					<span class="greendot mt-4 mr-3"></span>
					<div>
						<h3 class="mb-1">Residential Communities</h3>
						<p>Our communities are filling up fast – we'd be happy to talk with you about a perfect place for your family.</p>
					</div>
				</div>
				<a class="btn lg:self-end self-start ml-5" href="#">See All</a>
			</div>
			<div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-y-10 gap-x-5 grid_cards_land_wrapper px-5 pb-20 pt-5">
				<?php for ($i = 0; $i < 3; $i++) {include './components/cards/card_land.php'; } ?>
			</div>
		</div>






		<div class="relative  min-h-[650px]  w-full">
			<video autoplay muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover "> 
				<source src="https://RoyalZone.b-cdn.net/Westevelt-Intro.mp4" type="video/mp4"> 
				</video>
				<div class="absolute bg-black/30  w-full h-full inset-0 flex flex-col justify-center items-start p-5">
					<div class="lg:w-6/12 w-full flex flex-col space-y-6 items-start">
						<span class="text-white rounded-full border border-white uppercase text-sm py-1 px-3 flex">Land for Sale</span>
						<h4 class="text-white">
							Westervelt Real Estate offers clients land that has been sustainably managed for decades. Because of our sustainability commitment, all our lands have been managed responsibly. Each acre reflects that commitment – whether on rolling hills, sweeping hilltop views or acres of high-quality forests.
						</h4>
						<a class="btn" href="#">Learn More</a>
					</div>
				</div> 
			</div>



			<div>
				<div class="grid md:grid-cols-2 grid-cols-1 gap-y-10 gap-x-5 grid_cards_land_wrapper px-5 py-20">
					<?php for ($i = 0; $i < 2; $i++) {include './components/cards/card_buying.php'; } ?>
				</div>
			</div>



			<div class="testimonial_wrapper bg-sky min-h-40">


				<div class="flex w-full items-center px-5 py-10 justify-between">
					<div class="">
						<h2>Testimonials</h2>
					</div>


					<div class="flex gap-2">
						<button class="btn_swiper"> 
							<img class="mx-auto w-5 h-auto scale-x-[-1]" src="/assets/images/swiper_arrow.svg" alt="Swiper Arrow">
						</button>
						<button class="btn_swiper active"> 
							<img class="mx-auto w-5 h-auto " src="/assets/images/swiper_arrow.svg" alt="Swiper Arrow">
						</button>
					</div>
				</div>



				<div class="grid md:grid-cols-2 grid-cols-1 gap-5 px-5 pb-20">
					<?php for ($i = 0; $i < 2; $i++) { ?>
						<div class="bg-white rounded-md p-8 flex flex-col gap-10">
							<img  class="w-6 h-auto" src="/assets/images/quote.svg" alt="quote">
							<h5>The Westervelt Team did a great job anticipating our needs and finding a property that was perfect for us.</h5>
							<div class="flex justify-between">
								<div class="flex gap-4 items-center">
									<p><b>John Smith</b></p> <span class="text-[#C4C4C4]">|</span>
									<h6 class="text-secondary">Owner</h6>
								</div>
								<div class="relative  h-[50px] w-[80px] rounded-md overflow-clip">
									<img  class="absolute h-full w-full object-cover" src="/assets/images/testimonial_person.jpg" alt="Westervelt Real Estate">
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>



		</main>


		<?php include './includes/footer.php'; ?>
	</body>
	</html>
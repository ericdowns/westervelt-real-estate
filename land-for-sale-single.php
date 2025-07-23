<!-- <style> *{outline: 1px solid rgba(0, 0, 0, .1);} </style>  -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Westervelt Real Estate</title>
	<link rel="stylesheet" href="style.css">
</head>
<body class="min-h-screen flex flex-col">
	<header class="z-[9999] fixed w-full">
		<?php include './includes/header.php'; ?>
	</header>
	<main class="mx-auto flex-grow w-full  z-0">
		<div class="relative lg:h-[750px] h-[550px] w-full">
			<img class="absolute h-full w-full object-cover" src="/assets/images/hero-property-lake-tamaha.jpg" alt="Lake_Tamaha">';
			<div class="absolute bg-black/30  w-full h-full inset-0 flex flex-col justify-end items-start space-y-2 lg:p-10 p-5 pb-14">
				<div class="lg:w-6/12 w-full flex flex-col space-y-6 items-start">
					<span class="badge">Commercial/Industrial</span>
					<h1 class="text-white">Lake Tamaha</h1>
					<a class="btn" href="#">Contact Us</a>
				</div>
			</div>
		</div>

		<div class="py-14 content">
			<div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
				<div class="col-span-1 lg:col-span-8">
					<div class="prose">
						<h4>
							Premiere Living on Lake Tuscaloosa - whether you’re looking to build your dream lake home or invest in an exceptional piece of property, Harbor Ridge delivers unparalleled opportunity on the shores of Lake Tuscaloosa.
						</h4>
						<p class="text-secondary">
							Discover Harbor Ridge, an exclusive, gated community nestled along the scenic bluffs of Lake Tuscaloosa. Designed for discerning homeowners, Harbor Ridge offers estate-sizes lots perfect for custom new builds, combining privacy, luxury, and breathtaking natural surroundings. This thoughtfully planned subdivision features a charming gatehouse entrance, a community playground, and a serene gazebo gathering area - ideal for enjoying sunsets over the water. Perched high above the Lake, the bluffs provide sweeping views that elevate everyday living. Homeowners benefit from a Homeowners Association that ensures beauty, value, and integrity for the neighborhood are preserved for years to come.
						</p>
					</div>
				</div>
				<div class="col-span-1 lg:col-span-4">
					<div class="bg-tan w-full rounded-xl p-8 flex flex-col justify-center items-center gap-8">
						<div class="w-20 h-20 relative">
							<img class="absolute h-full w-full object-cover rounded-full" src="/assets/images/team-tom-headshot.jpg" alt="Headshot">
						</div>
						<h4>Tom Chambers</h4>

						<div class="flex flex-col [@media(min-width:1200px)]:flex-row items-center justify-center gap-3 xl:gap-5 w-full text-center">
							<a href="tel:+12057920355" class="font-bold whitespace-nowrap text-dark-green hover:text-moss easy">205-792-0355</a>
							<a class="btn" href="mailto:tchambers@westervelt.com">Email Tom</a>
						</div>

						<div class="socials flex flex-row items-center justify-center gap-4 w-full  border-t border-mediumgray pt-5">
							<p class="text-dark-green sm">Share:</p>
							<img class="size-6 hover:opacity-40 transition" src="/assets/images/icon-twitter.svg" alt="Twitter">
							<img class="size-6 hover:opacity-40 transition" src="/assets/images/icon-linkedin.svg" alt="Linkedin">
							<img class="size-6 hover:opacity-40 transition" src="/assets/images/icon-facebook-dark.svg" alt="Facebook">
							<img class="size-6 hover:opacity-40 transition" src="/assets/images/icon-envelope.svg" alt="Email">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="pb-14 content w-full">
			<div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
				<div class="col-span-1 lg:col-span-8 border-t border-mediumgray py-10">
					<div class="flex flex-wrap lg:flex-nowrap gap-5">
						<div class="flex flex-col gap-10 w-full lg:w-1/2">
							<div>
								<p class="font-bold">HOA:</p>
								<p class="text-secondary">Harbor Ridge Homeowners Association</p>
							</div>
							<div>
								<p class="font-bold">Covenants:</p>
								<p><a href="#" class="text-moss underline">Get information here</a></p>
							</div>
							<div>
								<p class="font-bold">Utilities:</p>
								<p class="text-secondary">Electricity</p>
								<p class="text-secondary">Water</p>
								<p class="text-secondary">Gas</p>
							</div>
							<div>
								<p class="font-bold">School Zones:</p>
								<p class="text-secondary">Elementary – Rock Quarry</p>
								<p class="text-secondary">Middle – Northridge Middle</p>
								<p class="text-secondary">High – Northridge High</p>
							</div>
						</div>
						<div class="flex flex-col gap-10 w-full lg:w-1/2">
							<div>
								<p class="font-bold">County:</p>
								<p class="text-secondary">Tuscaloosa County, Alabama</p>
							</div>
							<div>
								<p class="font-bold">Lot Sizes:</p>
								<p class="text-secondary">Range from 0.5 to 3 acres</p>
							</div>
							<div>
								<p class="font-bold">Average Finished Home Size</p>
								<p class="text-secondary">Ranges from 2,500 to 4,500 sq. feet</p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>


		<div class="bg-tan w-full py-8">
			<div class="content">
				<div class="flex w-full items-center py-8 justify-between">
					<div class="">
						<h3>Photo Gallery</h3>
					</div>
					<div class="flex gap-2">
						<button class="btn_swiper"> 
							<img class="mx-auto w-4 h-auto scale-x-[-1]" src="/assets/images/ui-swiper-arrow.svg" alt="Swiper Arrow">
						</button>
						<button class="btn_swiper active"> 
							<img class="mx-auto w-4 h-auto " src="/assets/images/ui-swiper-arrow.svg" alt="Swiper Arrow">
						</button>
					</div>
				</div>
				<div class="grid md:grid-cols-3 grid-cols-1 gap-5 ">
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
						<p class="sm">About this image...</p>
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
						<p class="sm">About this image...</p>
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
						<p class="sm">About this image...</p>
					</div>
				</div>
			</div>
		</div>




		<div class="bg-white w-full py-10">
			<div class="content">
				<div class="lg:h-[500px] h-[300px] bg-white rounded-xl overflow-hidden">
					<iframe 
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3355.1!2d-87.5692!3d33.2098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzPCsDEyJzM1LjMiTiA4N8KwMzQnMDkuMSJX!5e0!3m2!1sen!2sus!4v1234567890"
					class="w-full h-full"
					style="border:0;" 
					allowfullscreen="" 
					loading="lazy" 
					referrerpolicy="no-referrer-when-downgrade">
				</iframe>
			</div>

		</div>
	</div>


	<div class="bg-tan w-full">
		<div class="content">
			<div class="flex  flex lg:flex-row flex-col justify-between w-full gap-5 lg:items-end py-8">
				<div class="flex">
					<span class="greendot lg:mt-4 mt-2 mr-3"></span>
					<div>
						<h3>Properties for Sale</h3>
					</div>
				</div>
				<a class="btn lg:self-end self-start ml-5" href="#">See All</a>
			</div>
			<div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-y-10 gap-x-5 pb-14">
				<?php for ($i = 0; $i < 3; $i++) {include './components/cards/card_land.php'; } ?>
			</div>
		</div>
	</div>









</main>
<?php include './includes/footer.php'; ?>
</body>
</html>
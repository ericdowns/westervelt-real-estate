<!-- <style> *{outline: 1px solid rgba(0, 0, 0, .1);} </style>  -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Westervelt Real Estate - Residential Single</title>
	<link rel="stylesheet" href="style.css">
</head>
<body class="min-h-screen flex flex-col">
	<?php include './includes/header.php'; ?>

	<main class="mx-auto flex-grow w-full">

		

		<div class="relative lg:h-[750px] h-[550px] w-full">
			<img class="absolute h-full w-full object-cover" src="/assets/images/westervelt-residential-single.jpg" alt="Hero">
			<div class="lg:w-6/12 justify-end flex flex-col space-y-6 items-start z-10 absolute w-full h-full lg:p-10 p-5">
				<span class="badge"><h6>Harbor Ridge at NorthRiver</h6></span>
				<h1 class="text-white">Lot 76 Harbor Ridge at Northridge Phase 2 Section 2</h1>
				<a class="btn" href="#">Contact Us</a>
			</div>
			<div class="absolute bottom-0 top-0 h-full  w-full bg-gradient-to-r from-black/30 to-black/0 pointer-events-none"></div>
		</div>



		<div class="py-14 content">
			<div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
				<div class="col-span-1 lg:col-span-8">
					<div class="prose">
						<h4>
							Premiere Living on Lake Tuscaloosa - whether you’re looking to build your dream lake home or invest in an exceptional piece of property, Harbor Ridge delivers unparalleled opportunity on the shores of Lake Tuscaloosa.
						</h4>
						<p class="">
							Unlock the full potential of this 265 +/- acre parcel ideally suited for mixed-use development. Strategically located in a high-growth area, this expansive property offers a rare opportunity to create a dynamic blend of residential, commercial, and retail spaces to meet evolving market demand. With excellent visibility and access from Jack Warner Parkway, 25th Avenue and the Eastern Bypass ROW, this site is perfectly positiioned for a master-planned community, live-work-play concept, or a mixed-density housing development with integrated retail and office space.
						</p>
					</div>
				</div>
				<div class="col-span-1 lg:col-span-4">
					<div class="bg-tan w-full rounded p-8 flex flex-col justify-center items-center gap-8">
						<div class="w-20 h-20 relative">
							<img class="absolute h-full w-full object-cover rounded-full" src="/assets/images/tom_bio_headshot.jpg" alt="Headshot">
						</div>
						<h4>Tom Chambers</h4>

						<div class="flex flex-col [@media(min-width:1200px)]:flex-row items-center justify-center gap-3 xl:gap-5 w-full text-center">
							<p class="font-bold whitespace-nowrap">205-792-0355</p>
							<a class="btn" href="#">Email Tom</a>
						</div>

						<div class="socials flex flex-row items-center justify-center gap-4 w-full  border-t border-lightgray pt-5">
							<p class="text-dark-green sm">Share:</p>
							<img class="size-8 hover:opacity-40 transition" src="/assets/images/facebook_dark.svg" alt="Facebook">
							<img class="size-8 hover:opacity-40 transition" src="/assets/images/facebook_dark.svg" alt="Facebook">
							<img class="size-8 hover:opacity-40 transition" src="/assets/images/facebook_dark.svg" alt="Facebook">
							<img class="size-8 hover:opacity-40 transition" src="/assets/images/facebook_dark.svg" alt="Facebook">
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="pb-14 content w-full">
			<div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
				<div class="col-span-1 lg:col-span-8 border-t border-lightgray py-10">
					<div class="flex flex-wrap lg:flex-nowrap gap-5">
						<div class="flex flex-col gap-10 w-full lg:w-1/2">
							<div>
								<p class="font-bold">Location:</p>
								<p class="text-secondary">Tuscaloosa, AL</p>
							</div>
							<div>
								<p class="font-bold">School Zone:</p>
								<p class="text-secondary">Elem: Rocky Quarry</p>
								<p class="text-secondary">Middle: Northridge Middle School</p>
								<p class="text-secondary">High: Northridge High School</p>
							</div>
							<div>
								<p class="font-bold">County:</p>
								<p class="text-secondary">Tuscaloosa</p>
							</div>
						</div>
						<div class="flex flex-col gap-5 w-full lg:w-1/2">
							<div>
								<p class="font-bold">Lot Number:</p>
								<p class="text-secondary">76</p>
							</div>
							<div>
								<p class="font-bold">Acres:</p>
								<p class="text-secondary">2</p>
							</div>
							<div>
								<p class="font-bold">Price:</p>
								<p class="text-secondary">$155,900</p>
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
						<h2>Photo Gallery</h2>
					</div>
					<div class="flex gap-2">
						<button class="btn_swiper"> 
							<img class="mx-auto w-4 h-auto scale-x-[-1]" src="/assets/images/swiper_arrow.svg" alt="Swiper Arrow">
						</button>
						<button class="btn_swiper active"> 
							<img class="mx-auto w-4 h-auto " src="/assets/images/swiper_arrow.svg" alt="Swiper Arrow">
						</button>
					</div>
				</div>
				<div class="grid md:grid-cols-3 grid-cols-1 gap-5 ">
					<div class="group">
						<img class="transform group-hover:shadow-lg overflow-clip easy rounded-lg mb-3" src="/assets/images/lake_tamaha_photo_card.jpg" >
						<p class="sm">About this image...</p>
					</div>
					<div class="group">
						<img class="transform group-hover:shadow-lg overflow-clip easy rounded-lg mb-3" src="/assets/images/lake_tamaha_photo_card.jpg" >
						<p class="sm">About this image...</p>
					</div>
					<div class="group">
						<img class="transform group-hover:shadow-lg overflow-clip easy rounded-lg mb-3" src="/assets/images/lake_tamaha_photo_card.jpg" >
						<p class="sm">About this image...</p>
					</div>
				</div>
			</div>
		</div>



		<div class="bg-tan w-full py-10">
			<div class="content">
				<div class="lg:min-h-[500px] min-h-[300px] bg-white rounded-lg flex items-center justify-center">
					<p class="sm text-secondary">Map Goes Here</p>
				</div>

			</div>
		</div>


		<div class="bg-tan w-full">
			<div class="content">
				<div class="flex  flex lg:flex-row flex-col justify-between w-full gap-5 lg:items-end pb-8">
					<div class="flex">
						<span class="greendot lg:mt-4 mt-2 mr-3"></span>
						<div>
							<h3>Similar Properties</h3>
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
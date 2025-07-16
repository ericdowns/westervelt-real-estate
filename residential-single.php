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
	<?php include './includes/header.php'; ?>

	<main class="mx-auto flex-grow w-full">

		

		<div class="relative lg:h-[750px] h-[550px] w-full">
			<img class="absolute h-full w-full object-cover" src="/assets/images/westervelt-residential-single.jpg" alt="Hero">
			<div class="lg:w-6/12 justify-end flex flex-col space-y-6 items-start z-10 absolute w-full h-full p-5">
				<span class="badge"><h6>Harbor Ridge at NorthRiver</h6></span>
				<h1 class="text-white">Lot 76 Harbor Ridge at Northridge Phase 2 Section 2</h1>
				<a class="btn" href="#">Contact Us</a>
			</div>
			<div class="absolute bottom-0 top-0 h-full  w-full bg-gradient-to-r from-black/30 to-black/0 pointer-events-none"></div>
		</div>



		<div class="py-14 px-5">
			<div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
				<div class="col-span-1 lg:col-span-8">
					<div class="prose">
						<h4>
							Premiere Living on Lake Tuscaloosa - whether you’re looking to build your dream lake home or invest in an exceptional piece of property, Harbor Ridge delivers unparalleled opportunity on the shores of Lake Tuscaloosa.
						</h4>
						<p class="text-secondary">
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

		<div class="pb-14 px-5">
			<div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
				<div class="col-span-1 lg:col-span-8">
					
					<div class="grid grid-cols-2 gap-y-6 gap-x-10">
						<!-- Left Column -->
						<div>
							<p class="font-bold">Location:</p>
							<p>Tuscaloosa, AL</p>
						</div>
						<!-- Right Column -->
						<div>
							<p class="font-bold">School Zone:</p>
							<p>Elem: Rocky Quarry</p>
							<p>Middle: Northridge Middle School</p>
							<p>High: Northridge High School</p>
						</div>

						<!-- Left -->
						<div>
							<p class="font-bold">County:</p>
							<p>Tuscaloosa</p>
						</div>
						<!-- Right -->
						<div>
							<p class="font-bold">Lot Number:</p>
							<p>76</p>
						</div>

						<!-- Left -->
						<div>
							<p class="font-bold">Acres:</p>
							<p>2</p>
						</div>
						<!-- Right -->
						<div>
							<p class="font-bold">Price:</p>
							<p>$155,900</p>
						</div>
					</div>
					

				</div>

				<div class="col-span-1 lg:col-span-4">
				</div>



			</div>
		</div>





	</main>
	<?php include './includes/footer.php'; ?>
</body>
</html>
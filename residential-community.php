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
	<main class="mx-auto flex-grow w-full z-0">
		<div class="relative lg:h-[750px] h-[550px] w-full">
			<img class="absolute h-full w-full object-cover" src="/assets/images/residential_community_hero.jpg" alt="Lake_Tamaha">';
			<div class="absolute bg-black/30  w-full h-full inset-0 flex flex-col justify-end items-start space-y-2 lg:p-10 p-5 pb-14">
				<div class="lg:w-6/12 w-full flex flex-col space-y-6 items-start">
					<span class="badge"><h6>Communities </h6> </span>
					<h1 class="text-white">Harbor Ridge at NorthRiver</h1>
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
								<p class="text-secondary">Elementary - Rock Quarry</p>
								<p class="text-secondary">Middle - Northridge Middle</p>
								<p class="text-secondary">High - Northridge High</p>
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






		<div class="bg-tan w-full">
			<div class="content py-14">
				<div class="flex  flex lg:flex-row flex-col justify-between w-full gap-5 lg:items-end pb-8">
					<div class="flex">
						<span class="greendot lg:mt-4 mt-2 mr-3"></span>
						<div>
							<h3>Properties for Sale</h3>
						</div>
					</div>
				</div>
				<div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-y-10 gap-x-5">
					<?php for ($i = 0; $i < 2; $i++) {include './components/cards/card_land.php'; } ?>
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




	</main>
	<?php include './includes/footer.php'; ?>
</body>
</html>
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
	<main class="mx-auto flex-grow w-full pt-[140px]">
		
		<div class="bg-tan">
			<div class="content">
				<div class="flex py-8 pt-14">
					<div class="flex flex-col gap-4">
						<h6>Land for Sale</h6>
						<h1>Commercial/Industrial </h1>
					</div>
				</div>
			</div>


			<div class="content">
				<div class="flex justify-between gap-5  lg:items-center items-start pb-8 lg:flex-row flex-col">
					<div class="flex flex-wrap gap-2">
						<button class="filter-button ">All</button>
						<button class="filter-button active">Commercial/Industrial</button>
						<button class="filter-button">Mini-Farms</button>
						<button class="filter-button">Recreational Tracts</button>
						<button class="filter-button">Acreage</button>
					</div>
					



					<div class="relative inline-flex overflow-hidden">
						<!-- Left Button (Inactive) -->
						<button class="view-tab view-tab-left">
							<img src="/assets/images/grid.svg" alt="Grid view icon" class="w-5 h-5 mr-2" />
							<span>Listings</span>
						</button>
						<!-- Right Button (Active) -->
						<button class="view-tab-active view-tab-active-right">
							<img src="/assets/images/map.svg" alt="Map view icon" class="w-5 h-5 mr-2" />
							<span>Map</span>
						</button>
					</div>


				</div>
			</div>

			<div class="content">
				<div class="grid lg:grid-cols-2 grid-cols-1 gap-5 pb-20">
					<div class="lisings_wrapper">
						<div class="flex flex-col gap-4">
							<?php for ($i = 0; $i < 3; $i++) {include './components/cards/card_land_horizontal.php'; } ?>
						</div>
					</div>
					<div>
						<div class="map_wrapper bg-[#D9F7E3] lg:min-h-full min-h-[30vh] rounded-md p-5 flex flex-col justify-center items-center">


							<a href="#" class="block group shadow-lg easy max-w-[300px] rounded-xl overflow-clip">
								<div class="flex flex-col bg-white card_land ">
									<div class="relative pb-[60%] w-full overflow-clip">
										<img
										class="absolute h-full w-full object-cover transform group-hover:scale-105 easy"
										src="/assets/images/card_land_image.jpg"
										alt="Fallback Image"
										>
									</div>

									<div class="flex flex-col space-y-4 p-6 rounded">
										<h6>Tuscaloosa, AL</h6>
										<h4 class="group-hover:text-moss easy">Lake Tamaha</h4>
										<p class="sm text-secondary">265 +/- Acres functional for a proposed mix use development</p>
										<p>265 +/- Acres  |   $1.00**</p>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>


	</main>
	<?php include './includes/footer.php'; ?>
</body>
</html>
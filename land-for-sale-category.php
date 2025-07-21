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




				<div class="flex justify-between gap-5  lg:items-center items-start pb-8 lg:flex-row flex-col">
					<div class="flex flex-wrap gap-2">
						<button class="filter-button ">All</button>
						<button class="filter-button active">Commercial/Industrial</button>
						<button class="filter-button">Mini-Farms</button>
						<button class="filter-button">Recreational Tracts</button>
						<button class="filter-button">Acreage</button>
					</div>
					
					

					<div class="relative inline-flex overflow-hidden">
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
				<div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-y-10 gap-x-5 grid_cards_land_wrapper pb-20 pt-5">
					<?php for ($i = 0; $i < 3; $i++) {include './components/cards/card_land.php'; } ?>
				</div>
			</div>
		</div>


	</main>
	<?php include './includes/footer.php'; ?>
</body>
</html>
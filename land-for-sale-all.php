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
			<div class="px-5 flex py-8 pt-14">
				<div>
					<h1>Land for Sale</h1>
				</div>
			</div>
			<div class="flex justify-between gap-5 px-5 lg:items-center items-start pb-8 lg:flex-row flex-col">
				<div class="flex flex-wrap gap-2">
					<button class="filter-button active">All</button>
					<button class="filter-button">Commercial/Industrial</button>
					<button class="filter-button">Mini-Farms</button>
					<button class="filter-button">Recreational Tracts</button>
					<button class="filter-button">Acreage</button>
				</div>
				<div class="relative inline-flex overflow-hidden rounded-md border border-gray-300 bg-[#F5F4EB]">
					<!-- Active Button -->
					<button class="view-tab-active z-10">
						<img src="/assets/images/grid.svg" alt="" class="w-4 h-4 mr-2" />
						<span>Listings</span>
					</button>
					<!-- Inactive Button -->
					<button class="view-tab">
						<img src="/assets/images/grid.svg" alt="" class="w-4 h-4 mr-2" />
						<span>Map</span>
					</button>
				</div>
			</div>
			<div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-y-10 gap-x-5 grid_cards_land_wrapper px-5 pb-20 pt-5">
				<?php for ($i = 0; $i < 12; $i++) {include './components/cards/card_land.php'; } ?>
			</div>
		</div>
	</main>

	<?php include './includes/footer.php'; ?>

</body>
</html>
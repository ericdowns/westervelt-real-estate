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
	<main class="mx-auto flex-grow w-full pt-[140px] z-0">
		<div class="relative h-[650px] w-full">
			<img class="absolute h-full w-full object-cover" src="/assets/images/Lake_Tamaha.jpg" alt="Lake_Tamaha">';
			<div class="absolute bg-black/30  w-full h-full inset-0 flex flex-col justify-end items-start space-y-2 p-5 pb-14">
				<div class="lg:w-6/12 w-full flex flex-col space-y-6 items-start">
					<span class="badge"><h6>Commercial/Industrial </h6> </span>
					<h1 class="text-white">Lake Tamaha</h1>
					<a class="btn" href="#">Contact Us</a>
				</div>
			</div>
		</div>
		<div class="py-14 px-5">
			<div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
				<div class="col-span-1 lg:col-span-8">
					<div class="prose">
						<h4>
							Rare opportunity to acquire a large-scale parcel with immense development potential. Whether you're a residential developer, commercial investor, or looking to create a transformative mixed-use community, this site is poised for long-term success.
						</h4>
						<p class="text-secondary">
							Unlock the full potential of this 265 +/- acre parcel ideally suited for mixed-use development. Strategically located in a high-growth area, this expansive property offers a rare opportunity to create a dynamic blend of residential, commercial, and retail spaces to meet evolving market demand. With excellent visibility and access from Jack Warner Parkway, 25th Avenue and the Eastern Bypass ROW, this site is perfectly positiioned for a master-planned community, live-work-play concept, or a mixed-density housing development with integrated retail and office space.
						</p>
					</div>
				</div>
				<div class="col-span-1 lg:col-span-4">
					Test
				</div>
			</div>
		</div>
		<div class="bg-tan">
			<div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-y-10 gap-x-5 grid_cards_land_wrapper px-5 pb-20 pt-5">
				<?php for ($i = 0; $i < 3; $i++) {include './components/cards/card_land.php'; } ?>
			</div>
		</div>
	</main>
	<?php include './includes/footer.php'; ?>
</body>
</html>
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
	<main class="mx-auto flex-grow w-full pt-[140px]">




		<div class="bg-dark-green/90 min-h-screen py-20 px-5">

			<div class="flex items-center justify-between gap-3">


				<button class="btn_swiper btn_swiper_light"> 
					<img class="mx-auto w-4 h-auto scale-x-[-1]" src="/assets/images/swiper_arrow_white.svg" alt="Swiper Arrow">
				</button>


				<div class="md:w-1/2 w-full">
					<img class="w-full h-auto rounded-md" src="/assets/images/pop_up_map.jpg" alt="Image" >
					<div class="flex py-4 gap-3 justify-between lg:items-center lg:flex-row flex-col">
						<h5 class="text-white">About this image...</h5>
						<a class="self-start btn" href="#">Download</a>
					</div>
				</div>

				<button class="btn_swiper btn_swiper_light"> 
					<img class="mx-auto w-4 h-auto " src="/assets/images/swiper_arrow_white.svg" alt="Swiper Arrow">
				</button>



			</div>

		</div>
		




	</main>


	<?php include './includes/footer.php'; ?>
</body>
</html>
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
			<img class="absolute h-full w-full object-cover" src="/assets/images/westervelt-real-estate-about-hero.jpg" alt="About Hero">

			<div class="lg:w-6/12 justify-end flex flex-col space-y-6 items-start z-10 absolute w-full h-full p-5">
				<span class="badge"><h6>About</h6></span>
				<h1 class="text-white">A Different Approach to Real Estate</h1>
			</div>
			<div class="absolute bottom-0 top-0 h-full  w-full bg-gradient-to-r from-black/30 to-black/0 pointer-events-none"></div>

		</div>




		<div class="bg-dark-green lg:py-40 py-20 flex flex-col justify-center relative">
			<img class="absolute h-full w-full object-cover" src="/assets/images/terrain_bg.svg" alt="Home Hero">
			<div class="max-w-5xl mx-auto text-center px-10 flex flex-col items-center gap-4 z-10">
				<h3 class="text-white">Working with Wepstervelt Real Estate provides an exceptional opportunity to own a part of our legacy of sustainability. </h3>
				<p class="text-lightgray">Westervelt Real Estate is part of The Westervelt Company, a privately-owned land stewardship company founded in 1884. Each of our five businesses are focused on sustainability, and we manage our lands according to that commitment. </p>
			</div>
		</div>

		<div class="py-14 px-5">

			<div class="pb-10 w-full">
				<h2>Real Estate Staff</h2>
			</div>

			<div class="flex flex-col divide-y divide-lightgray">
				<?php for ($i = 0; $i < 2; $i++) { ?>
					<div class="py-12 first:pt-0 grid grid-cols-1 md:grid-cols-12 gap-10">
						<div class="col-span-1 md:col-span-2">
							<img class="rounded-lg" src="/assets/images/bio_ray_colvin.jpg" alt="Bio">
						</div>
						<div class="col-span-1 md:col-span-10">
							<div class="prose">
								<h4>Ray Colvin, R.F.</h4>
								<h6 class="text-secondary">Director, Mergers & Acquisitions and Real Estate</h6>
								<p>
									Ray Colvin, R.F., is the Director of Mergers & Acquisitions and Real Estate with The Westervelt Company, joining what was then Gulf States Paper in 1997. He has held numerous roles with the Company, including Senior Portfolio Manager; Manager, Westervelt Land Company; and Director of Real Estate and Forest Recreation. In his current role, he has oversight for all merger and acquisition activities, as well as the identification and development of the company’s real estate portfolio. 
								</p>
								<p>Ray is actively involved with numerous forestry and real estate associations. He most currently serves as a Board Member and Past Chairman of the Alabama Forestry Association.
								</p>
								<p>Ray is a Registered Forester, having earned a Master’s Degree in Forestry from Auburn University in 1997. He was a four year member of the baseball team at Faulkner University, where he earned a B.S. in Commerce and Business Administration. He also is a Licensed Real Estate Agent. </p>
								<p>Throughout his career, Ray has focused on building relationships with multiple stakeholders, and has focused on real estate, marketing, financial analysis and operations. He is skilled in multi-faceted acquisitions with publicly traded companies, government agencies and private landowners.
								</p>
								<p>Ray is an avid outdoorsman and enjoys spending time with his family and friends at his recreational farm or on Lake Tuscaloosa.</p>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>

		<div class="bg-sky py-16">
			<div class="px-5">

				<div class="max-w-4xl mx-auto text-center flex flex-col gap-4 mb-20">
					<h3>Our land has been properly cared for</h3>
					<p>Each acre of our property has been a part of our land base and has been responsibly managed to ensure the health of the forest and the environment.</p>
				</div>

				<div class="flex flex-wrap md:flex-nowrap gap-4">
					<!-- Large image -->
					
					<div class="w-full md:w-1/2 relative h-80 md:h-auto rounded-lg overflow-hidden">
						<video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover" >
							<source src="https://RoyalZone.b-cdn.net/westervelt_caring_for_land.mp4" type="video/mp4"> 
							</video>
						</div>

						<!-- Right images stack on desktop, side-by-side on mobile -->
						<div class="w-full md:w-1/2 flex flex-row md:flex-col gap-4">
							<div class="w-1/2 md:w-full lg:h-[330px] min-h-[200px]">
								<img 
								src="/assets/images/about_collage_1.jpg" 
								alt="Right Top Image" 
								class="w-full h-full object-cover rounded-lg"
								>
							</div>

							<div class="w-1/2 md:w-full lg:h-[330px] min-h-[200px]">
								<img 
								src="/assets/images/about_collage_2.jpg" 
								alt="Right Bottom Image" 
								class="w-full h-full object-cover rounded-lg"
								>
							</div>
						</div>
					</div>

				</div>
			</div>

		</main>
		<?php include './includes/footer.php'; ?>
	</body>
	</html>
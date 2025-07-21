<!-- <style> *{outline: 1px solid rgba(0, 0, 0, .1);} </style>  -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Westervelt Real Estate - Contact</title>
	<link rel="icon" type="image/svg+xml" href="/assets/images/favicon.svg">
	<link rel="stylesheet" href="style.css">
</head>
<body class="min-h-screen flex flex-col">
	<?php include './includes/header.php'; ?>

	<main class="mx-auto flex-grow w-full">

		<div class="relative h-[350px] w-full">
			<img class="absolute h-full w-full object-cover" src="/assets/images/hero-contact.jpg" alt="About Hero">

			<div class="lg:w-6/12 justify-end flex flex-col space-y-6 items-start z-10 absolute w-full h-full lg:p-10 p-5">
				<h1 class="text-white">Contact</h1>
			</div>
			<div class="absolute bottom-0 top-0 h-full  w-full bg-gradient-to-r from-black/30 to-black/0 pointer-events-none"></div>
		</div>


		

		<div class="py-14 bg-tan">
			<div class="content">
				<div class="grid grid-cols-1 lg:grid-cols-12 max-lg:gap-10">
					<div class="col-span-1 lg:col-span-5">
						<div class="">
							<h4 class="mb-5"> Get in Touch </h4>
							<p class="mb-8">
								Phone: (205) 562-5531 <br> 
								Fax: (205) 562-5013
							</p>

							<p class="mb-8">
								<a href="">tchambers@westervelt.com</a>
							</p>

							<p class="font-bold mb-2">Mailing address:</p>
							<p class="mb-8">
								PO Box 48999 <br>
								Tuscaloosa, Alabama 35404
							</p>

							<a href="#" class="flex items-start gap-3  w-10">
								<img class="hover:opacity-40 easy" src="/assets/images/icon-facebook-dark.svg" alt="Facebook Icon">
							</a>
						</div>
					</div>
					<div class="col-span-1 lg:col-span-7">
						<div class="bg-white h-full rounded-xl lg:p-8 p-5 py-8">

							<h5>We’d love to help you find your perfect place – for your family, for your business, or your your recreation.</h5>

							<div>
								<form method="post" action="#" class="mx-auto space-y-6 py-10">

									<!-- First & Last Name -->
									<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
										<div>
											<label for="first_name">First Name*</label>
											<input type="text" id="first_name" name="first_name" required>
										</div>
										<div>
											<label for="last_name">Last Name*</label>
											<input type="text" id="last_name" name="last_name" required>
										</div>
									</div>

									<!-- Email -->
									<div>
										<label for="email">Email*</label>
										<input type="email" id="email" name="email" required>
									</div>

									<!-- Address -->
									<div>
										<label for="address">Address</label>
										<input type="text" id="address" name="address">
									</div>

									<!-- Address 2 -->
									<div>
										<label for="address2">Address 2</label>
										<input type="text" id="address2" name="address2">
									</div>

									<!-- City / State -->
									<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
										<div>
											<label for="city">City</label>
											<input type="text" id="city" name="city">
										</div>
										<div>
											<label for="state">State</label>
											<select id="state" name="state">
												<option value="">Select a state</option>
												<option value="NE">Nebraska</option>
												<!-- Add more options -->
											</select>
										</div>
									</div>

									<!-- Repeat Email -->
									<div>
										<label for="email_confirm">Email*</label>
										<input type="email" id="email_confirm" name="email_confirm" required>
									</div>

									<!-- Phone -->
									<div>
										<label for="phone">Phone*</label>
										<input type="tel" id="phone" name="phone" required>
									</div>

									<!-- Message -->
									<div>
										<label for="message">Message</label>
										<textarea id="message" name="message" rows="5" placeholder="Enter message here..."></textarea>
									</div>

									<!-- Submit Button -->
									<div>
										<button type="submit" class="btn">Submit</button>
									</div>

								</form>
							</div>


						</div>

					</div>
				</div>
			</div>
		</div>
	</div>




	<div class="px-5 flex w-full bg-tan py-10">
		<div class="bg-[#D9F7E3] h-full rounded-2xl p-5 w-full min-h-[600px] relative">

			<div class="mapmaker bg-white md:w-[450px] w-[80%] p-5 py-10 rounded-xl absolute flex flex-col gap-5 left-10 items-start top-1/2  -translate-y-1/2 ">
				<h3>Visit Us</h3>
				<p class="text-secondary">
					1400 Jack Warner Parkway NE <br>
					Tuscaloosa, Alabama 35404
				</p>

				<a class="btn" href="#">Get Directions</a>
			</div>
		</div>
	</div>



</main>
<?php include './includes/footer.php'; ?>
</body>
</html>
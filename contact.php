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
			<div class="gradient-overlay"></div>
		</div>


		

		<div class="py-14 bg-tan">
			<div class="content">
				<div class="grid grid-cols-1 lg:grid-cols-12 max-lg:gap-10">
					<div class="col-span-1 lg:col-span-5">
						<div class="">
							<h4 class="mb-5"> Get in Touch </h4>
							<p class="mb-8">
								Phone: <a href="tel:+12055625531" class="text-dark-green hover:text-moss easy font-medium">(205) 562-5531</a> <br> 
								Fax: (205) 562-5013
							</p>

							<p class="mb-8">
								<a href="mailto:tchambers@westervelt.com" class="link-green">tchambers@westervelt.com</a>
							</p>

							<p class="font-bold mb-2">Mailing address:</p>
							<p class="mb-8">
								PO Box 48999 <br>
								Tuscaloosa, Alabama 35404
							</p>

							<a href="https://www.facebook.com/WesterverltCompany" class="flex items-start gap-3 w-10" target="_blank" rel="noopener noreferrer" aria-label="Visit our Facebook page">
								<img class="hover:opacity-40 easy" src="/assets/images/icon-facebook-dark.svg" alt="Facebook Icon">
							</a>
						</div>
					</div>
					<div class="col-span-1 lg:col-span-7">
						<div class="bg-white h-full rounded-xl lg:p-8 p-5 py-8">

							<h5>We’d love to help you find your perfect place – for your family, for your business, or your your recreation.</h5>

							<div>
								<form method="post" action="#" class="mx-auto space-y-6 py-10" aria-label="Contact form">

									<!-- Personal Information -->
									<fieldset class="space-y-6">
										<legend class="sr-only">Personal Information</legend>
										<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
											<div>
												<label for="first_name">First Name*</label>
												<input type="text" id="first_name" name="first_name" required aria-required="true">
											</div>
											<div>
												<label for="last_name">Last Name*</label>
												<input type="text" id="last_name" name="last_name" required aria-required="true">
											</div>
										</div>

										<!-- Email -->
										<div>
											<label for="email">Email*</label>
											<input type="email" id="email" name="email" required aria-required="true">
										</div>
									</fieldset>

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




	<div class="bg-tan w-full py-10">
		<div class="content">
			<div class="lg:h-[500px] h-[300px] bg-white rounded-xl overflow-hidden relative">
				<iframe 
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3328.8!2d-87.5692!3d33.2098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x888628c8c8c8c8c8%3A0x8c8c8c8c8c8c8c8c!2s1400%20Jack%20Warner%20Pkwy%20NE%2C%20Tuscaloosa%2C%20AL%2035404!5e0!3m2!1sen!2sus!4v1234567890"
					class="w-full h-full"
					style="border:0;" 
					allowfullscreen="" 
					loading="lazy" 
					referrerpolicy="no-referrer-when-downgrade">
				</iframe>
				
				<div class="mapmaker bg-white md:w-[450px] w-[80%] p-5 py-10 rounded-xl absolute flex flex-col gap-5 left-4 md:left-8 items-start top-1/2 -translate-y-1/2 shadow-lg">
					<h3>Visit Us</h3>
					<p class="text-secondary">
						1400 Jack Warner Parkway NE <br>
						Tuscaloosa, Alabama 35404
					</p>

					<button type="button" class="btn" onclick="window.open('https://maps.google.com/?q=1400+Jack+Warner+Parkway+NE+Tuscaloosa+AL+35404', '_blank')" aria-label="Get driving directions to our office">Get Directions</button>
				</div>
			</div>
		</div>
	</div>



</main>
<?php include './includes/footer.php'; ?>
</body>
</html>
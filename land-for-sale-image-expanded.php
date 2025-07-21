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
		<div class="fixed inset-0 z-[99999] bg-dark-green/90 flex items-center justify-center overflow-hidden">
			<div class="relative w-full h-full flex items-center justify-center px-4 md:px-8 py-4 md:py-8">
				<!-- Left Arrow -->
				<button class="absolute left-4 md:left-8 top-1/2 transform -translate-y-1/2 btn_swiper btn_swiper_light z-10"> 
					<img class="mx-auto w-4 h-auto scale-x-[-1]" src="/assets/images/ui-swiper-arrow-white.svg" alt="Previous">
				</button>
				
				<!-- Right Arrow -->
				<button class="absolute right-4 md:right-8 top-1/2 transform -translate-y-1/2 btn_swiper btn_swiper_light z-10"> 
					<img class="mx-auto w-4 h-auto" src="/assets/images/ui-swiper-arrow-white.svg" alt="Next">
				</button>
				
				<!-- Main Content -->
				<div class="flex flex-col items-center justify-center w-full h-full max-w-4xl mx-auto px-16 md:px-20">
					<div class="relative w-full h-full max-h-[calc(100vh-8rem)] flex items-center justify-center">
						<img id="lightboxImage" class="max-w-full max-h-full w-auto h-auto object-contain rounded-md" src="/assets/images/content-map-popup.jpg" alt="Image">
						<!-- Close Button positioned relative to image -->
						<button id="closeButton" class="absolute  z-10 w-8 h-8 flex items-center justify-center hover:opacity-75 transition-opacity">
							<img class="w-8 h-8" src="/assets/images/icon-close.svg" alt="Close">
						</button>
					</div>
					<div id="lightboxCaption" class="flex py-4 gap-3 justify-between items-center lg:flex-row flex-col">
						<h5 class="text-white">About this image...</h5>
						<a class=" btn" href="#">Download</a>
					</div>
				</div>
			</div>
		</div>
	</main>
	<?php include './includes/footer.php'; ?>
	
	<script>
		// Match caption width to image width and position close button
		function updateImageLayout() {
			const image = document.getElementById('lightboxImage');
			const caption = document.getElementById('lightboxCaption');
			const closeButton = document.getElementById('closeButton');
			
			if (image && caption && closeButton) {
				const imageRect = image.getBoundingClientRect();
				const containerRect = image.parentElement.getBoundingClientRect();
				
				// Match caption width to image width
				caption.style.width = imageRect.width + 'px';
				
				// Position close button to the right of image - 10px left + 10px down from top
				const leftPosition = (imageRect.right - containerRect.left) + 10;
				const topPosition = (imageRect.top - containerRect.top) + 10;
				
				closeButton.style.left = leftPosition + 'px';
				closeButton.style.top = topPosition + 'px';
			}
		}
		
		// Update on load and resize
		window.addEventListener('load', updateImageLayout);
		window.addEventListener('resize', updateImageLayout);
		
		// Update when image loads (if not already loaded)
		document.getElementById('lightboxImage').addEventListener('load', updateImageLayout);
	</script>
</body>
</html>
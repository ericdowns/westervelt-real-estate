<!-- <style> *{outline: 1px solid rgba(0, 0, 0, 1);} </style> -->

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

	

	<main class="mx-auto flex-grow w-full mt-[140px]">
		
		<!-- Header -->
		<div class="bg-tan py-16">
			<div class="max-w-6xl mx-auto px-5">
				<h1 class="mb-4">Westervelt Design System</h1>
				<p class="text-lg text-secondary max-w-3xl">A comprehensive style guide for developers working on the Westervelt Real Estate website. All components use Tailwind CSS with custom configuration.</p>
			</div>
		</div>

		<div class="max-w-6xl mx-auto px-5 py-16 space-y-20">

			<!-- Typography Section -->
			<section>
				<div class="border-b border-mediumgray pb-6 mb-12">
					<h2 class="mb-2">Typography</h2>
					<p class="text-secondary">Two primary font families: Avenir (sans-serif) for UI elements and Bembo (serif) for headings.</p>
				</div>

				<!-- Heading Examples -->
				<div class="mb-16">
					<h3 class="mb-8">Heading Styles</h3>
					<div class="border border-mediumgray rounded-lg p-6 space-y-4">
						<h1>Heading 1 - Main page titles</h1>
						<h2>Heading 2 - Section titles</h2>
						<h3>Heading 3 - Subsection titles</h3>
						<h4>Heading 4 - Component titles</h4>
						<h5>Heading 5 - Card titles and quotes</h5>
						<h6>HEADING 6 - LABELS AND TAGS</h6>
						<code class="text-sm bg-gray-100 px-2 py-1 rounded block mt-4">Use semantic HTML tags (h1, h2, h3, etc.) - Custom styling applied automatically</code>
					</div>
				</div>

				<!-- Body Text Examples -->
				<div class="mb-16">
					<h3 class="mb-8">Body Text Styles</h3>
					<div class="border border-mediumgray rounded-lg p-6 space-y-4">
						<p>Default paragraph text - Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						<p class="sm">Small text - Used for captions and secondary information.</p>
						<p class="xs">Extra small text - Used for metadata and legal text.</p>
						<div class="space-y-2 mt-4">
							<code class="text-sm bg-gray-100 px-2 py-1 rounded block">Default p tag - Custom responsive sizing</code>
							<code class="text-sm bg-gray-100 px-2 py-1 rounded block">class="sm" - Smaller text size</code>
							<code class="text-sm bg-gray-100 px-2 py-1 rounded block">class="xs" - Extra small text size</code>
						</div>
					</div>
				</div>

				<!-- Font Weight Examples -->
				<div>
					<h3 class="mb-8">Font Weight Examples</h3>
					<div class="grid md:grid-cols-2 gap-8">
						<div>
							<h4 class="mb-4">Avenir (Sans-Serif)</h4>
							<div class="space-y-3">
								<div class="font-sans font-light">font-light - Light</div>
								<div class="font-sans font-normal">font-normal - Book</div>
								<div class="font-sans font-medium">font-medium - Medium</div>
								<div class="font-sans font-bold">font-bold - Heavy</div>
								<div class="font-sans font-black">font-black - Black</div>
							</div>
						</div>
						<div>
							<h4 class="mb-4">Bembo (Serif)</h4>
							<div class="space-y-3">
								<div class="font-serif font-normal">font-normal - Regular</div>
								<div class="font-serif font-semibold">font-semibold - Semibold</div>
								<div class="font-serif font-bold">font-bold - Bold</div>
								<div class="font-serif font-extrabold">font-extrabold - ExtraBold</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Colors Section -->
			<section>
				<div class="border-b border-mediumgray pb-6 mb-12">
					<h2 class="mb-2">Color Palette</h2>
					<p class="text-secondary">Brand colors with Tailwind classes for consistent usage across the site.</p>
				</div>

				<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
					<!-- Primary Colors -->
					<div class="text-center">
						<div class="bg-dark-green h-32 w-full rounded-lg mb-4 border shadow-sm"></div>
						<h5 class="mb-1">Dark Green</h5>
						<p class="text-sm text-secondary mb-2">#0F2C1B</p>
						<code class="text-xs bg-gray-100 px-2 py-1 rounded">.bg-dark-green</code>
						<p class="text-xs text-secondary mt-2">Primary text, headers</p>
					</div>

					<div class="text-center">
						<div class="bg-moss h-32 w-full rounded-lg mb-4 border shadow-sm"></div>
						<h5 class="mb-1">Moss</h5>
						<p class="text-sm text-secondary mb-2">#69A82E</p>
						<code class="text-xs bg-gray-100 px-2 py-1 rounded">.bg-moss</code>
						<p class="text-xs text-secondary mt-2">Buttons, accents, hover states</p>
					</div>

					<div class="text-center">
						<div class="bg-kelly-green h-32 w-full rounded-lg mb-4 border shadow-sm"></div>
						<h5 class="mb-1">Kelly Green</h5>
						<p class="text-sm text-secondary mb-2">#006937</p>
						<code class="text-xs bg-gray-100 px-2 py-1 rounded">.bg-kelly-green</code>
						<p class="text-xs text-secondary mt-2">Button hover states</p>
					</div>

					<div class="text-center">
						<div class="bg-tan h-32 w-full rounded-lg mb-4 border shadow-sm"></div>
						<h5 class="mb-1">Tan</h5>
						<p class="text-sm text-secondary mb-2">#F0EFE6</p>
						<code class="text-xs bg-gray-100 px-2 py-1 rounded">.bg-tan</code>
						<p class="text-xs text-secondary mt-2">Section backgrounds</p>
					</div>

					<!-- Secondary Colors -->
					<div class="text-center">
						<div class="bg-sky h-32 w-full rounded-lg mb-4 border shadow-sm"></div>
						<h5 class="mb-1">Sky</h5>
						<p class="text-sm text-secondary mb-2">#CFE0D8</p>
						<code class="text-xs bg-gray-100 px-2 py-1 rounded">.bg-sky</code>
						<p class="text-xs text-secondary mt-2">Light backgrounds</p>
					</div>

					<div class="text-center">
						<div class="bg-blue h-32 w-full rounded-lg mb-4 border shadow-sm"></div>
						<h5 class="mb-1">Blue</h5>
						<p class="text-sm text-secondary mb-2">#34657F</p>
						<code class="text-xs bg-gray-100 px-2 py-1 rounded">.bg-blue</code>
						<p class="text-xs text-secondary mt-2">Accent color</p>
					</div>

					<div class="text-center">
						<div class="bg-brick h-32 w-full rounded-lg mb-4 border shadow-sm"></div>
						<h5 class="mb-1">Brick</h5>
						<p class="text-sm text-secondary mb-2">#AF7C58</p>
						<code class="text-xs bg-gray-100 px-2 py-1 rounded">.bg-brick</code>
						<p class="text-xs text-secondary mt-2">Warm accent</p>
					</div>

					<div class="text-center">
						<div class="bg-sand h-32 w-full rounded-lg mb-4 border shadow-sm"></div>
						<h5 class="mb-1">Sand</h5>
						<p class="text-sm text-secondary mb-2">#DEC9A2</p>
						<code class="text-xs bg-gray-100 px-2 py-1 rounded">.bg-sand</code>
						<p class="text-xs text-secondary mt-2">Neutral background</p>
					</div>
				</div>
			</section>

			<!-- Components Section -->
			<section>
				<div class="border-b border-mediumgray pb-6 mb-12">
					<h2 class="mb-2">Components</h2>
					<p class="text-secondary">Reusable UI components with Tailwind classes and custom CSS components.</p>
				</div>

				<!-- Buttons -->
				<div class="mb-16">
					<h3 class="mb-8">Buttons</h3>
					<div class="space-y-8">
						<!-- Primary Button -->
						<div class="border border-mediumgray rounded-lg p-6">
							<div class="flex flex-wrap gap-4 mb-4">
								<button type="button" class="btn" aria-label="Example primary button for demonstration">Primary Button</button>
							</div>
							<code class="text-sm bg-gray-100 px-2 py-1 rounded block">class="btn" - Primary button with moss background</code>
						</div>

						<!-- Secondary Button -->
						<div class="border border-mediumgray rounded-lg p-6">
							<div class="flex flex-wrap gap-4 mb-4">
								<button type="button" class="btn-secondary" aria-label="Example secondary button for demonstration">Secondary Button</button>
							</div>
							<code class="text-sm bg-gray-100 px-2 py-1 rounded block">class="btn-secondary" - Outline button with dark green border</code>
						</div>

						<!-- Default Swiper Buttons -->
						<div class="border border-mediumgray rounded-lg p-6">
							<div class="flex flex-wrap gap-4 mb-4">
								<button class="btn_swiper">
									<img class="mx-auto w-4 h-auto scale-x-[-1]" src="/assets/images/ui-swiper-arrow.svg" alt="Left Arrow">
								</button>
								<button class="btn_swiper">
									<img class="mx-auto w-4 h-auto" src="/assets/images/ui-swiper-arrow.svg" alt="Right Arrow">
								</button>
							</div>
							<div class="space-y-2">
								<code class="text-sm bg-gray-100 px-2 py-1 rounded block">class="btn_swiper" - Circular navigation button</code>
								<code class="text-sm bg-gray-100 px-2 py-1 rounded block">scale-x-[-1] - Flip arrow for left direction</code>
							</div>
						</div>

						<!-- Light Swiper Buttons on Dark Background -->
						<div class="border border-mediumgray rounded-lg p-6 bg-dark-green">
							<div class="flex flex-wrap gap-4 mb-4">
								<button class="btn_swiper btn_swiper_light">
									<img class="mx-auto w-4 h-auto scale-x-[-1]" src="/assets/images/ui-swiper-arrow-white.svg" alt="Left Arrow">
								</button>
								<button class="btn_swiper btn_swiper_light">
									<img class="mx-auto w-4 h-auto" src="/assets/images/ui-swiper-arrow-white.svg" alt="Right Arrow">
								</button>
							</div>
							<div class="space-y-2">
								<code class="text-sm bg-gray-800 text-white px-2 py-1 rounded block">class="btn_swiper btn_swiper_light" - Light version for dark backgrounds</code>
								<code class="text-sm bg-gray-800 text-white px-2 py-1 rounded block">scale-x-[-1] - Flip arrow for left direction</code>
							</div>
						</div>
					</div>
				</div>

				<!-- Custom Classes -->
				<div class="mb-16">
					<h3 class="mb-8">Custom Utility Classes</h3>
					<div class="space-y-6">
						<div class="border border-mediumgray rounded-lg p-6">
							<div class="flex items-center gap-4 mb-4">
								<span class="greendot"></span>
								<span>Green dot indicator</span>
							</div>
							<code class="text-sm bg-gray-100 px-2 py-1 rounded">class="greendot" - Small moss-colored indicator dot</code>
						</div>

						<div class="border border-mediumgray rounded-lg p-6 bg-dark-green">
							<div class="mb-4">
								<span class="badge">Badge Example</span>
							</div>
							<code class="text-sm bg-gray-800 text-white px-2 py-1 rounded">class="badge" - Rounded badge for labels and tags</code>
						</div>

						<div class="border border-mediumgray rounded-lg p-6">
							<div class="mb-4">
								<button class="btn">Hover me</button>
							</div>
							<code class="text-sm bg-gray-100 px-2 py-1 rounded">class="easy" - Smooth transition utility for hover effects</code>
						</div>

						<div class="border border-mediumgray rounded-lg p-6">
							<div class="mb-4">
								<a href="#" class="smooth-underline">Link with animated underline</a>
							</div>
							<code class="text-sm bg-gray-100 px-2 py-1 rounded">class="smooth-underline" - Animated underline for links</code>
						</div>
					</div>
				</div>

				<!-- Layout Classes -->
				<div>
					<h3 class="mb-8">Layout Utilities</h3>
					<div class="space-y-6">
						<div class="border border-mediumgray rounded-lg p-6">
							<code class="text-sm bg-gray-100 px-2 py-1 rounded mb-2 block">class="content" - Standard content container with responsive padding</code>
							<p class="text-sm text-secondary">Adds lg:px-10 px-5 for consistent content spacing</p>
						</div>

						<div class="border border-mediumgray rounded-lg p-6">
							<code class="text-sm bg-gray-100 px-2 py-1 rounded mb-2 block">class="noring" - Removes all focus rings and outlines</code>
							<p class="text-sm text-secondary">Useful for custom focus states</p>
						</div>

					</div>
				</div>
			</section>

			<!-- Usage Guidelines -->
			<section>
				<div class="border-b border-mediumgray pb-6 mb-12">
					<h2 class="mb-2">Usage Guidelines</h2>
					<p class="text-secondary">Best practices for implementing the design system.</p>
				</div>

				<div class="grid md:grid-cols-2 gap-8">
					<div class="space-y-6">
						<div>
							<h4 class="mb-3 text-moss">Typography</h4>
							<ul class="space-y-2 text-sm">
								<li>• Use semantic HTML (h1, h2, p) for automatic styling</li>
								<li>• Bembo serif for all headings and display text</li>
								<li>• Avenir sans-serif for body text and UI elements</li>
								<li>• Custom responsive type scales handle sizing automatically</li>
							</ul>
						</div>

						<div>
							<h4 class="mb-3 text-moss">Colors</h4>
							<ul class="space-y-2 text-sm">
								<li>• Dark green for primary text and headers</li>
								<li>• Moss green for interactive elements and CTAs</li>
								<li>• Tan backgrounds for content sections</li>
								<li>• Use semantic color names, not hex values</li>
							</ul>
						</div>
					</div>

					<div class="space-y-6">
						<div>
							<h4 class="mb-3 text-moss">Components</h4>
							<ul class="space-y-2 text-sm">
								<li>• Use custom CSS components for consistent styling</li>
								<li>• Combine with Tailwind utilities for layout</li>
								<li>• Follow established patterns for interactive elements</li>
								<li>• Test responsive behavior across all breakpoints</li>
							</ul>
						</div>

						<div>
							<h4 class="mb-3 text-moss">Layout</h4>
							<ul class="space-y-2 text-sm">
								<li>• Use 'content' class for standard page sections</li>
								<li>• Consistent spacing with Tailwind scale (4, 8, 16, etc.)</li>
								<li>• Mobile-first responsive design approach</li>
								<li>• Maximum content width of 1200px for readability</li>
							</ul>
						</div>
					</div>
				</div>
			</section>

		</div>
	</main>



	<footer class="bg-dark-green text-white  mt-auto"> </footer>








</body>
</html>
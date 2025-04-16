<?php global $SITEURL; ?>

<h2>Tools</h2>
<p>Tools tab content.</p>

<div class="w3-row">

	<div class="w3-container w3-third w3-panel w3-padding w3-border w3-center">

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/classic.min.css"/> <!-- 'classic' theme -->
		<script src="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.min.js"></script>
		<style>
			.pcr-app .pcr-interaction .pcr-result {color: #3F51B5;font-weight: bold;}
		</style>
		<p><svg xmlns="http://www.w3.org/2000/svg" style="vertical-align:middle;" width="1.3em" height="1.3em" viewBox="0 0 32 32"><rect width="32" height="32" fill="none"/><g fill="none"><path fill="#fbb8ab" d="M21.993 5.854c-6.707-3.42-14.656-2.1-18.279 3.883S2.398 23.68 8.87 27.517c3.18 1.886 8.312 3.811 10.398 1.244c2.044-2.516-.972-4.11-.268-5.502c1.133-2.24 6.2.699 9.515-2.922c3.734-4.082.009-11.151-6.522-14.483M24 19c-1.745 0-3-1.273-3-3s1.255-3 3-3s3 1.273 3 3s-1.255 3-3 3" stroke-width="1" stroke="#fbb8ab"/><path fill="#8d65c5" d="M14.25 11a2.25 2.25 0 1 0 0-4.5a2.25 2.25 0 0 0 0 4.5" stroke-width="1" stroke="#8d65c5"/><path fill="#f70a8d" d="M8.25 15a2.25 2.25 0 1 0 0-4.5a2.25 2.25 0 0 0 0 4.5" stroke-width="1" stroke="#f70a8d"/><path fill="#00d26a" d="M8.25 22a2.25 2.25 0 1 0 0-4.5a2.25 2.25 0 0 0 0 4.5" stroke-width="1" stroke="#00d26a"/><path fill="#3f5fff" d="M13.75 26.5a2.25 2.25 0 1 0 0-4.5a2.25 2.25 0 0 0 0 4.5" stroke-width="1" stroke="#3f5fff"/></g></svg><b> Pickr</b></p>
		
		<div class="pickr-container"></div>
		
		<script>
			// Simple example, see optional options for more configuration.
			const pickr = Pickr.create({
				el: '.pickr-container',
				theme: 'classic', // or 'monolith', or 'nano'

				swatches: [
					'rgba(244, 67, 54, 1)',
					'rgba(233, 30, 99, 0.95)',
					'rgba(156, 39, 176, 0.9)',
					'rgba(103, 58, 183, 0.85)',
					'rgba(63, 81, 181, 0.8)',
					'rgba(33, 150, 243, 0.75)',
					'rgba(3, 169, 244, 0.7)',
					'rgba(0, 188, 212, 0.7)',
					'rgba(0, 150, 136, 0.75)',
					'rgba(76, 175, 80, 0.8)',
					'rgba(139, 195, 74, 0.85)',
					'rgba(205, 220, 57, 0.9)',
					'rgba(255, 235, 59, 0.95)',
					'rgba(255, 193, 7, 1)'
				],

				components: {

					// Main components
					preview: true,
					opacity: true,
					hue: true,

					// Input / output Options
					interaction: {
						hex: true,
						rgba: true,
						hsla: true,
						hsva: true,
						cmyk: true,
						input: true,
						clear: true,
						save: true
					}
				}
			});
		</script>
	</div>
	
	<div class="w3-container w3-third w3-panel xw3-border w3-center">
		
	</div>
	
	<div class="w3-container w3-third w3-panel xw3-border w3-center">
		
	</div>
	
	<div class="w3-container w3-quarter w3-panel xw3-border w3-center">
		
	</div>
	
	<div class="w3-container w3-quarter w3-panel xw3-border w3-center">
		
	</div>
	
	<div class="w3-container w3-quarter w3-panel xw3-border w3-center">
		
	</div>
	
</div> 

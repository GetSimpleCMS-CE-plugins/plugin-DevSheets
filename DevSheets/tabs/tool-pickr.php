	<div class="w3-container pickr">
		<h3><svg xmlns="http://www.w3.org/2000/svg" style="vertical-align:middle;" width="1.3em" height="1.3em" viewBox="0 0 32 32"><rect width="32" height="32" fill="none"/><g fill="none"><path fill="#fbb8ab" d="M21.993 5.854c-6.707-3.42-14.656-2.1-18.279 3.883S2.398 23.68 8.87 27.517c3.18 1.886 8.312 3.811 10.398 1.244c2.044-2.516-.972-4.11-.268-5.502c1.133-2.24 6.2.699 9.515-2.922c3.734-4.082.009-11.151-6.522-14.483M24 19c-1.745 0-3-1.273-3-3s1.255-3 3-3s3 1.273 3 3s-1.255 3-3 3" stroke-width="1" stroke="#fbb8ab"/><path fill="#8d65c5" d="M14.25 11a2.25 2.25 0 1 0 0-4.5a2.25 2.25 0 0 0 0 4.5" stroke-width="1" stroke="#8d65c5"/><path fill="#f70a8d" d="M8.25 15a2.25 2.25 0 1 0 0-4.5a2.25 2.25 0 0 0 0 4.5" stroke-width="1" stroke="#f70a8d"/><path fill="#00d26a" d="M8.25 22a2.25 2.25 0 1 0 0-4.5a2.25 2.25 0 0 0 0 4.5" stroke-width="1" stroke="#00d26a"/><path fill="#3f5fff" d="M13.75 26.5a2.25 2.25 0 1 0 0-4.5a2.25 2.25 0 0 0 0 4.5" stroke-width="1" stroke="#3f5fff"/></g></svg> <b> Pickr</b> (Color Wheel)</h3>
		
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/classic.min.css"/> 
		<script src="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.min.js"></script>
		<style>.pcr-app .pcr-interaction .pcr-result {color: #3F51B5;font-weight: bold;} .pcr-app.visible {border:2px solid #42445a;box-shadow: 5px 5px 15px 0px rgba(0,0,0,0.85); -webkit-box-shadow: 5px 5px 15px 0px rgba(0,0,0,0.85); -moz-box-shadow: 5px 5px 15px 0px rgba(0,0,0,0.85);}</style>
		
		<svg xmlns="http://www.w3.org/2000/svg" style="margin-left:-20px" width="2em" height="2em" viewBox="0 0 512 512"><rect width="512" height="512" fill="none"/><path fill="#42445A" d="M72.156 21.906c-19.51-.096-34.187 10.357-43.47 26.47c-14.848 25.778-10.262 56.354 29.845 79.56c26.354 15.25 61.527 23.54 86.75 20.126l-11.374 19.72l15.25 8.812l49.688-86.25l-15.25-8.813l-10.5 18.22c-9.66-23.603-34.394-49.968-60.75-65.22c-15.04-8.703-28.482-12.566-40.188-12.624zm134.375 92.53l-9.343 16.22l171.75 99.375h-56.25l-129.562-75l-9.344 16.19L382.53 292l3.376 1.97l3.75-1.033c3.705-1.014 10.983-.39 18.344 1.844c7.36 2.237 14.843 5.778 19.656 8.564l2.188 1.25h.72c.224.082.458.145.686.22a16.6 16.6 0 0 0-.594 4.373c0 9.165 7.43 16.594 16.594 16.594s16.594-7.428 16.594-16.592c0-6.497-3.75-12.09-9.188-14.813c1.873-3.64 2.85-7.855 2.156-12.406c-.77-5.067-4.173-10.32-9.187-13.22c-10.71-6.198-25.414-17.442-27.97-27.688l-.967-3.843l-3.438-1.97l-208.72-120.813zm242.94 235.47c-18.66 69.634-44.595 59.99-44.595 100.75c0 24.617 19.98 44.563 44.594 44.563c24.613 0 44.592-19.947 44.592-44.564c0-44.002-25.602-29.875-44.593-100.75z" stroke-width="20" stroke="#42445A"/></svg>
		<div class="pickr-container"></div>
	</div>
	
	<script>
		const pickr = Pickr.create({
			el: '.pickr-container',
			theme: 'classic',

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
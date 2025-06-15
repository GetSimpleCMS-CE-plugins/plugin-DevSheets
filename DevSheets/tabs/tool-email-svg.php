	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/mdbassit/Coloris@latest/dist/coloris.min.css"/>
	
	<style>
	.svg-email h1, h2, h3, h4{font-weight:bold;color: #343434;}
	.svg-email h4 {font-size:1.3em;color:#1b1b80;font-weight:bold;}
	.svg-email p, li{color: #343434;}
	.svg-email hr {
		margin-top:30px;
		border: 0;
		height: 1px;
		background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
	}
	/* Remove Arrows: Chrome, Safari, Edge, Opera */
	input::-webkit-outer-spin-button,
	input::-webkit-inner-spin-button {
		-webkit-appearance: none;
		margin: 0;
	}
	/* Remove Arrows: Firefox */
	input[type=number] {
		-moz-appearance: textfield;
	}
	
	.svg-email input {
		border-radius: 5px;
		padding: 8px !important;
    }
	.svg-email .square .clr-field button,
    .svg-email .circle .clr-field button {
		width: 22px;
		height: 22px;
		left: 5px;
		right: auto;
		border-radius: 5px;
    }
    .svg-email .square .clr-field input,
    .svg-email .circle .clr-field input {
		padding-left: 36px!important;
    }
    .svg-email .circle .clr-field button {
		border-radius: 50%;
    }
    .svg-email .full .clr-field button {
		width: 100%;
		height: 100%;
		border-radius: 5px;
    }
	.svg-email code {color:blue;font-size:.75em;}
	.svg-email #copyCode {
		margin-top: 10px;
		min-height: 75px;
		padding: 10px;
		border-radius: 5px;
		border: 1px dashed #666;
		background-color: #f9f9f9;
	}
	.svg-email #svgPreview {
		display: flex;
		align-items: center;
		justify-content: center;
		min-height: 75px;
		padding: 10px;
		border-radius: 5px;
		border: 1px dashed #666;
		background-color: #f9f9f9;
	}
	.svg-email li {list-style-type:none;}
	.svg-email .w3-third {
		padding: 0 15px;
	}
	.svg-email .w3-col {
		width: 16%;
		padding: 0 15px;
	}
	@media (min-width: 601px) {
		.svg-email .w3-col.m4, .svg-email .w3-third {
			width: 30%;
		}
	}
	</style>
	
	<div class="w3-container svg-email">
		<h3 class="w3-center w3-margin"><svg xmlns="http://www.w3.org/2000/svg" style="vertical-align:middle" width="1.2em" height="1.2em" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path fill="currentColor" d="m213.66 82.34l-56-56A8 8 0 0 0 152 24H56a16 16 0 0 0-16 16v76a4 4 0 0 0 4 4h168a4 4 0 0 0 4-4V88a8 8 0 0 0-2.34-5.66M152 88V44l44 44ZM87.82 196.31a20.82 20.82 0 0 1-9.19 15.23C73.44 215 67 216 61.14 216A61.2 61.2 0 0 1 46 214a8 8 0 0 1 4.3-15.41c4.38 1.2 14.95 2.7 19.55-.36c.88-.59 1.83-1.52 2.14-3.93c.35-2.67-.71-4.1-12.78-7.59c-9.35-2.7-25-7.23-23-23.11a20.55 20.55 0 0 1 9-14.95c11.84-8 30.72-3.31 32.83-2.76a8 8 0 0 1-4.07 15.48c-4.48-1.17-15.23-2.56-19.83.56a4.54 4.54 0 0 0-2 3.67c-.11.9-.14 1.09 1.12 1.9c2.31 1.49 6.44 2.68 10.45 3.84c9.79 2.83 26.35 7.66 24.11 24.97m63.72-41.62l-19.9 55.72a8.25 8.25 0 0 1-6.5 5.51a8 8 0 0 1-8.67-5.23L96.59 155a8.21 8.21 0 0 1 4.5-10.45a8 8 0 0 1 10.45 4.76l12.46 34.9l12.46-34.9a8 8 0 0 1 15.07 5.38ZM216 184v16.87a8 8 0 0 1-2.26 5.57A30 30 0 0 1 192 216c-17.64 0-32-16.15-32-36s14.36-36 32-36a29.36 29.36 0 0 1 16.09 4.86a8.22 8.22 0 0 1 3 10.64a8 8 0 0 1-11.54 2.88A13.27 13.27 0 0 0 192 160c-8.82 0-16 9-16 20s7.18 20 16 20a13.38 13.38 0 0 0 8-2.71V192a8 8 0 0 1-8-8.53a8.18 8.18 0 0 1 8.26-7.47H208a8 8 0 0 1 8 8" stroke-width="6.5" stroke="currentColor"/></svg> Protecting your email address via SVG</h3>
		<ul class="w3-center w3-margin">
			<li>Works with JavaScript turned off.</li>
			<li>Permits a standard <span>mailto:</span> link.</li>
			<li>Conceals content like an image; Copyable like text.</li>
		</ul>
		<hr>
		<form class="w3-container" id="svgForm">
			
			<div class="w3-row-padding">
				<h4>Info:</h4>
				
				<!--div class="w3-quarter">
					<label>ID:</label>
					<input class="w3-input w3-border" type="text" placeholder="123" name="id" value="">
				</div-->
				
				<div class="w3-third">
					<label>Title:</label>
					<input class="w3-input w3-border" type="text" placeholder="Contact me at:" name="title" value="">
				</div>
				
				<div class="w3-third">
					<label>Email:</label>
					<input class="w3-input w3-border" type="text" placeholder="name@domain.tld" name="email" value="">
				</div>
			</div> 
			
			<hr>
			
			<div class="w3-row-padding">
				<h4>Text:</h4>
				
				<div class="w3-col">
					<label>Color:</label>
					<div class="circle">
						<div class="clr-field" style="color: #000000;">
							<button type="button" aria-labelledby="clr-open-label"></button>
							<input type="text" class="coloris text_color" name="text_color" value="#000000">
						</div>
					</div>
				</div>
				
				<div class="w3-col">
					<label>Font:</label>
					<select class="w3-input w3-border" name="text_font">
						<option value="Arial, Helvetica, sans-serif">Sans-Serif</option>
						<option value="Times New Roman, Times, serif">Serif</option>
					</select>
				</div>
				
				<div class="w3-col">
					<label>Size:</label>
					<input class="w3-input w3-border" type="text" placeholder=".85em or 12px" name="text_size" value=".85em">
				</div>
				
				<div class="w3-col">
					<label>Weight:</label>
					<input class="w3-input w3-border" type="text" placeholder="400" name="text_weight" value="400">
				</div>
				
				<div class="w3-col">
					<label>Text-Decoration:</label>
					<input class="w3-input w3-border" type="text" placeholder="underline 1px dashed" name="text_decor" value="underline 1px dashed">
				</div>
			</div>
			
			<hr>
			
			<div class="w3-row-padding">
				<h4>Background:</h4>
				
				<div class="w3-col">
					<label>BG-Color:</label>
					<div class="square">
						<div class="clr-field bg-color" style="color:#e8e8e8;">
							<button type="button" aria-labelledby="clr-open-label"></button>
							<input type="text" class="coloris bg_color" name="bg_color" value="#e8e8e8">
						</div>
					</div>
				</div>
				
				<div class="w3-col">
					<label>Width:</label>
					<input class="w3-input w3-border" type="text" placeholder="180px" name="bg_width" value="180px">
				</div>
				
				<div class="w3-col"">
					<label>Height:</label>
					<input class="w3-input w3-border" type="text" placeholder="24px" name="bg_height" value="24px">
				</div>
				
				<div class="w3-col">
					<label>Corner Radius:</label>
					<input class="w3-input w3-border" type="text" placeholder="5px" name="bg_radius" value="5px">
				</div>
			</div> 
			
			<hr>
			
			<div class="w3-row-padding">
				<h4>Hover Text:</h4>
					
				<div class="w3-col">
					<label>Color:</label>
					<div class="circle">
						<div class="clr-field" style="color:#d32f2f;">
							<button type="button" aria-labelledby="clr-open-label"></button>
							<input type="text" class="coloris h_text_color" name="h_text_color" value="#d32f2f">
						</div>
					</div>
				</div>

				<div class="w3-col">
					<label>Size:</label>
					<input class="w3-input w3-border" type="text" placeholder=".85em or 12px" name="h_text_size" value=".85em">
				</div>

				<div class="w3-col">
					<label>Weight:</label>
					<input class="w3-input w3-border" type="text" placeholder="600" name="h_text_weight" value="600">
				</div>
				
				<div class="w3-col">
					<label>Text-Decoration:</label>
					<input class="w3-input w3-border" type="text" placeholder="underline 1px dashed" name="h_text_decor" value="none">
				</div>
			</div>
			
			<hr>
			
			<div class="w3-row-padding">
				<h4>Hover Background:</h4>
				
				<div class="w3-col">
					<label>BG-Color:</label>
					<div class="square">
						<div class="clr-field" style="color:#628eaa;">
							<button type="button" aria-labelledby="clr-open-label"></button>
							<input type="text" class="coloris h_bg_color" name="h_bg_color" value="#628eaa">
						</div>
					</div>
				</div>
			</div>
			
			<hr>
			
			<div class="w3-row-padding">
				<h4 style="color:green">Output:</h4>
				
				<div class="w3-third w3-center">
					<label>Preview:</label>
					<div id="svgPreview"></div>
				</div>
				
				<div class="w3-third w3-center" style="margin-top:35px;">
					<button type="button" id="exportBtn" class="w3-button w3-round-large w3-green">Download SVG</button>
				</div>
				
				<div class="w3-third w3-center">
					<label>Embed Code:</label>
					<div id="copyCode">
						<code id="embedCode">&lt;object style="width: 180px; height: 24px; vertical-align: middle;" data="email.svg" type="image/svg+xml">&lt;/object></code>
					</div>
					<button type="button" id="copyBtn" class="w3-button w3-tiny w3-round-large w3-blue" style="margin-top: 10px;">Copy Code</button>
				</div>
			</div>
			
		</form>
	</div>
	
	<script src="https://cdn.jsdelivr.net/gh/mdbassit/Coloris@latest/dist/coloris.min.js"></script>
	<script type="text/javascript">
		Coloris({
			el: '.coloris',
			theme: 'polaroid',
			themeMode: 'auto',
			margin: 2,
			format: 'mixed',
			clearButton: true,
			closeButton: true,
			swatches: [
				'#000000',
				'#FF0000',
				'#FFFF00',
				'#00FF00',
				'#00FFFF',
				'#FF00FF',
				
				'#D32F2F',
				'#FBC02D',
				'#388E3C',
				'#2980B9',
				'#8E44AD',
				'#ffffff'
			],
		});
		
		Coloris.setInstance('.text_color', {
			defaultColor: '#000000'
		});
		
		Coloris.setInstance('.bg_color', {
			defaultColor: '#e8e8e8'
		});
		
		Coloris.setInstance('.h_text_color', {
			defaultColor: '#d32f2f'
		});
		
		Coloris.setInstance('.h_bg_color', {
			defaultColor: '#628eaa'
		});
		
	</script>
	
	<script>
	// SVG Template
	const svgTemplate = `
<svg xmlns="http://www.w3.org/2000/svg" lang="en-US" aria-labelledby="title" viewBox="0 0 $viewbox_width $viewbox_height">
	<title id="title">$title $email</title>
	<defs>
		<style type="text/css"><![CDATA[
			rect {
				rx: $radius;
				ry: $radius;
				width: $css_width;
                height: $css_height;
				fill: $bg_color;
			}
			text {
				font-family: $font;
				font-size: $text_size;
				font-weight: $text_weight;
				fill: $text_color;
				text-decoration: $text_decor;
				text-underline-offset: 5px;
				pointer-events: none;
			}
			
			a:focus rect, rect:hover {
				fill: $h_bg_color;
			}
			a:focus text, rect:hover + text {
				fill: $h_text_color;
				font-size: $h_text_size;
				font-weight: $h_text_weight;
				text-decoration: $h_text_decor;
			}
		]]></style>
	</defs>
	<a href="mailto:$email" aria-label="$title $email">
		<rect />
		<text x="50%" y="50%" text-anchor="middle" dominant-baseline="middle">$email</text>
	</a>
</svg>
`;

	// Function to generate SVG from form data
	function generateSVG() {
		const form = document.getElementById('svgForm');
		const formData = new FormData(form);
		const data = {};
		
		// Convert FormData to object
		for (let [key, value] of formData.entries()) {
			data[key] = value;
		}
		
		// Get numeric values for viewBox (without 'px')
		const viewboxWidth = data.bg_width.replace('px', '');
		const viewboxHeight = data.bg_height.replace('px', '');
		
		// Keep original values with 'px' for CSS
		const cssWidth = data.bg_width;
		const cssHeight = data.bg_height;
    
    // Generate SVG
    let svg = svgTemplate
        .replace(/\$viewbox_width/g, viewboxWidth)
        .replace(/\$viewbox_height/g, viewboxHeight)
        .replace(/\$css_width/g, cssWidth)
        .replace(/\$css_height/g, cssHeight)
        .replace(/\$title/g, data.title)
        .replace(/\$email/g, data.email)
        .replace(/\$font/g, data.text_font)
        .replace(/\$text_size/g, data.text_size)
        .replace(/\$text_weight/g, data.text_weight)
        .replace(/\$text_color/g, data.text_color)
        .replace(/\$text_decor/g, data.text_decor)
        .replace(/\$bg_color/g, data.bg_color)
        .replace(/\$radius/g, data.bg_radius)
        .replace(/\$h_text_color/g, data.h_text_color)
        .replace(/\$h_text_size/g, data.h_text_size)
        .replace(/\$h_text_weight/g, data.h_text_weight)
        .replace(/\$h_text_decor/g, data.h_text_decor)
        .replace(/\$h_bg_color/g, data.h_bg_color);
    
		return svg;
	}
	
	// Update preview and embed code
	function updatePreview() {
		const form = document.getElementById('svgForm');
		const formData = new FormData(form);
		const data = {};
		
		for (let [key, value] of formData.entries()) {
			data[key] = value;
		}
		
		// Generate SVG with CDATA properly escaped
		let svgString = generateSVG();
		
		// Manually create the SVG element
		const previewContainer = document.getElementById('svgPreview');
		previewContainer.innerHTML = '';
		
		// Create a div and use innerHTML with proper XML namespace
		const tempDiv = document.createElement('div');
		tempDiv.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg">' + 
							svgString.split('<svg')[1];
		
		const svgElement = tempDiv.firstChild;
		svgElement.setAttribute('width', data.bg_width);
		svgElement.setAttribute('height', data.bg_height);
		
		previewContainer.appendChild(svgElement);
		
		// Update embed code
		const emailPrefix = data.email.split('@')[0] || 'email';
		const embedCode = `<object style="width: ${data.bg_width}; height: ${data.bg_height}; vertical-align: middle;" data="data/uploads/${emailPrefix}.svg" type="image/svg+xml"></object>`;
		document.getElementById('embedCode').textContent = embedCode;
		
		// Clean up the object URL when the image loads
		img.onload = function() {
			URL.revokeObjectURL(url);
		};
	}
	
	// Export SVG as file
	function exportSVG() {
		const form = document.getElementById('svgForm');
		const email = form.email.value;
		const emailPrefix = email.split('@')[0] || 'email';
		const fileName = `${emailPrefix}.svg`;
		
		const svg = generateSVG();
		const blob = new Blob([svg], {type: 'image/svg+xml'});
		const url = URL.createObjectURL(blob);
		
		const a = document.createElement('a');
		a.href = url;
		a.download = fileName;
		document.body.appendChild(a);
		a.click();
		document.body.removeChild(a);
		URL.revokeObjectURL(url);
	}
	
	// Copy embed code to clipboard
	function copyEmbedCode() {
		const code = document.getElementById('embedCode').textContent;
		navigator.clipboard.writeText(code).then(() => {
			const btn = document.getElementById('copyBtn');
			btn.textContent = 'Copied!';
			setTimeout(() => {
				btn.textContent = 'Copy Code';
			}, 2000);
		});
	}
	
	// Initialize event listeners
	document.addEventListener('DOMContentLoaded', () => {
		// Update preview when any input changes
		const form = document.getElementById('svgForm');
		form.addEventListener('input', updatePreview);
		
		// Export button
		document.getElementById('exportBtn').addEventListener('click', exportSVG);
		
		// Copy button
		document.getElementById('copyBtn').addEventListener('click', copyEmbedCode);
		
		// Initial preview
		updatePreview();
	});
	</script>
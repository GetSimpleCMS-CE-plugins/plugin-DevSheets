<?php global $SITEURL; ?>

<h2>Tools</h2>
<p>Tools tab content.</p>

<div class="w3-row">
	
	<div class="w3-col">
		
		<button onclick="myFunction('tab1')" class="w3-button w3-block w3-deep-orange xw3-left-align"><svg xmlns="http://www.w3.org/2000/svg" style="vertical-align:middle;" width="1.3em" height="1.3em" viewBox="0 0 32 32"><rect width="32" height="32" fill="none"/><g fill="none"><path fill="#fbb8ab" d="M21.993 5.854c-6.707-3.42-14.656-2.1-18.279 3.883S2.398 23.68 8.87 27.517c3.18 1.886 8.312 3.811 10.398 1.244c2.044-2.516-.972-4.11-.268-5.502c1.133-2.24 6.2.699 9.515-2.922c3.734-4.082.009-11.151-6.522-14.483M24 19c-1.745 0-3-1.273-3-3s1.255-3 3-3s3 1.273 3 3s-1.255 3-3 3" stroke-width="1" stroke="#fbb8ab"/><path fill="#8d65c5" d="M14.25 11a2.25 2.25 0 1 0 0-4.5a2.25 2.25 0 0 0 0 4.5" stroke-width="1" stroke="#8d65c5"/><path fill="#f70a8d" d="M8.25 15a2.25 2.25 0 1 0 0-4.5a2.25 2.25 0 0 0 0 4.5" stroke-width="1" stroke="#f70a8d"/><path fill="#00d26a" d="M8.25 22a2.25 2.25 0 1 0 0-4.5a2.25 2.25 0 0 0 0 4.5" stroke-width="1" stroke="#00d26a"/><path fill="#3f5fff" d="M13.75 26.5a2.25 2.25 0 1 0 0-4.5a2.25 2.25 0 0 0 0 4.5" stroke-width="1" stroke="#3f5fff"/></g></svg><b> Pickr</b> (Color Wheel)</button>
		<div id="tab1" class="w3-hide w3-container w3-center w3-padding-16">
			<?php include 'tool-pickr.php'; ?>
		</div>

		<button onclick="myFunction('tab2')" class="w3-button w3-block w3-deep-orange w3-border xw3-left-align"><svg xmlns="http://www.w3.org/2000/svg" style="vertical-align:middle" width="1.5em" height="1.5em" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><path fill="#3333FF" d="M2.75 4.5a.75.75 0 0 0 0 1.5h14.5a.75.75 0 0 0 0-1.5zm0 3a.75.75 0 0 0 0 1.5h8.5a.75.75 0 0 0 0-1.5zm0 3a.75.75 0 0 0 0 1.5h6.633a1.5 1.5 0 0 1-.284-1.5zm0 3h6.628L7.876 15H2.75a.75.75 0 0 1 0-1.5m11.746-6.061a.5.5 0 0 0-.992 0l-.098.791a2.5 2.5 0 0 1-2.176 2.176l-.791.098a.5.5 0 0 0 0 .992l.791.098a2.5 2.5 0 0 1 2.176 2.176l.098.791a.5.5 0 0 0 .992 0l.098-.791a2.5 2.5 0 0 1 2.176-2.176l.791-.098a.5.5 0 0 0 0-.992l-.791-.098a2.5 2.5 0 0 1-2.176-2.176zm-2.643 5.708a.5.5 0 0 1 0 .707l-4 3.996a.5.5 0 0 1-.706-.707l3.999-3.997a.5.5 0 0 1 .707 0" stroke-width="0.5" stroke="#3333FF"/></svg> Code Minifier/Beautifier</button>
		<div id="tab2" class="w3-hide w3-container">
			<?php include 'tool-format.php'; ?>
		</div>

		<button onclick="myFunction('tab3')" class="w3-button w3-block w3-deep-orange w3-border xw3-left-align"><svg xmlns="http://www.w3.org/2000/svg" style="vertical-align:middle" width="1.5em" height="1.5em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="#000066" d="m23.414 12l-4.95-4.95l-1.414 1.414L20.586 12l-2.5 2.501l1.415 1.414zm-2 8L4 2.587L2.586 4.001l3 3l-5 5l4.95 4.949l1.414-1.414L3.414 12L7 8.415l13 13z" stroke-width="0.5" stroke="#000066"/></svg> HTML Escape</button>
		<div id="tab3" class="w3-hide w3-container">
			<?php include 'tool-escape.php'; ?>
		</div>

		<button onclick="myFunction('tab4')" class="w3-button w3-block w3-deep-orange w3-border xw3-left-align"><svg xmlns="http://www.w3.org/2000/svg" width="1.08em" height="1.2em" viewBox="0 0 458 512"><rect width="458" height="512" fill="none"/><path fill="currentColor" d="m228.502 233.071l-14.428 45.75c-7.693 28.4-7.039 37.358-3.137 43.966c.963 1.624 3.597 6.94 7.278 21.14c5.344 20.554 10.05 51.587 10.165 53.072c-.773 18.97-.355 39.069 1.179 58.313H39.147C17.617 455.312 0 437.695 0 416.166V61.88c0-21.53 17.616-39.15 39.147-39.15h293.008c-44.876 47.605-89.341 137.936-103.653 210.341M435.338 11.136c53.695 47.899.376 157.402-48.565 234.483c-35.586 11.437-77.064 36.696-77.064 36.696s3.45-1.832 16.255-7.203c8.68-3.649 34.598-9.811 50.381-13.41c-26.349 39.726-48.896 67.532-48.896 67.532s-45.97 18.681-60.187 62.14c8.24-46.357 21.913-94.74 41.208-146.3c17.232-46.042 74.796-170.377 117.328-208.788c-46.664 37.193-97.65 115.072-134.4 212.138c-21.751 64.3-33.523 125.992-35.44 177.149c-1.267 33.467 1.626 62.488 8.749 84.632L261.414 512c-6.987-18.132-13.399-49.997-11.865-115.295c-.23-2.913-.367-4.806-.367-4.806s-4.242-28.568-10.343-52.035c-2.702-10.417-5.778-19.836-9.007-25.295c-1.664-2.817.18-14.388 4.824-31.527c7.864 13.692 16.348 28.515 19.607 40.643c0 0-6.284-32.33-16.595-51.197c2.26-7.627 4.96-16.057 8.015-25.07c7.605 13.3 15.361 25.955 18.455 38.63c-3.384-16.193-7.965-32.32-15.101-48.307c12.97-67.496 54.719-155.876 99.696-203.59c24.007-25.617 57.092-48.544 86.605-23.015"/></svg> SQLite Editor</button>
		<div id="tab4" class="w3-hide w3-container">
			<?php include 'tool-sqlite.php'; ?>
		</div>

	</div>
	
</div> 

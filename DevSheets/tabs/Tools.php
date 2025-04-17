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

	</div>
	
</div> 

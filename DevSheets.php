<?php

# get correct id for plugin
$thisfile = basename(__FILE__, ".php");

# register plugin
register_plugin(
    $thisfile, // Plugin id
    'Dev Sheets', // Plugin name
    '1.1', // Plugin version
    'CE Team', // Plugin author
    'https://www.getsimple-ce.ovh/', // author website
    'Cheat Sheets for devs. Small list of common placeholders and other miscellaneous code snippets and tools.', // Plugin description
    'devsheet_full', // page type - on which admin tab to display
    'devsheet' // main function (administration)
);

# add a link in the main menu
add_action('theme-sidebar', 'createSideMenu', array($thisfile, 'Dev Sheets <svg xmlns="http://www.w3.org/2000/svg" style="vertical-align:middle;" width="1.88em" height="1.5em" viewBox="0 0 640 512"><rect width="640" height="512" fill="none"/><path fill="#E6E6E6" d="M444.2 0c-47 49.6-60.2 126.5-60.2 192c0 158.8-27.3 247-42.7 283.9c-10 24-33.2 36.1-55.4 36.1H48c-11.5 0-22.2-6.2-27.8-16.2s-5.6-22.3.4-32.2c9.8-17.7 15.4-38.2 20.5-57.7C52.3 362.8 64 293.5 64 192C64 86 107 0 160 0zM512 384c-53 0-96-86-96-192S459 0 512 0s96 86 96 192s-43 192-96 192m0-128c17.7 0 32-28.7 32-64s-14.3-64-32-64s-32 28.7-32 64s14.3 64 32 64m-368-48a16 16 0 1 0-32 0a16 16 0 1 0 32 0m64 0a16 16 0 1 0-32 0a16 16 0 1 0 32 0m48 16a16 16 0 1 0 0-32a16 16 0 1 0 0 32m80-16a16 16 0 1 0-32 0a16 16 0 1 0 32 0" stroke-width="20" stroke="#000"/></svg>'));

function devsheet() {
    global $SITEURL;
	global $USR;
	
    echo '
	<link rel="stylesheet" href="'.$SITEURL.'plugins/DevSheets/assets/w3.css">
	<link rel="stylesheet" href="'.$SITEURL.'plugins/DevSheets/assets/w3-custom.css">
	<link rel="stylesheet" href="'.$SITEURL.'plugins/DevSheets/assets/prism.css">
	
	<div class="w3-parent ">
	
		<header class="w3-container w3-border-bottom w3-margin-bottom">
			
			<div class="w3-twothird">
			
				<h3 class="floated"><svg xmlns="http://www.w3.org/2000/svg" style="vertical-align:middle;" width="1.88em" height="1.5em" viewBox="0 0 640 512"><rect width="640" height="512" fill="none"/><path fill="#E6E6E6" d="M444.2 0c-47 49.6-60.2 126.5-60.2 192c0 158.8-27.3 247-42.7 283.9c-10 24-33.2 36.1-55.4 36.1H48c-11.5 0-22.2-6.2-27.8-16.2s-5.6-22.3.4-32.2c9.8-17.7 15.4-38.2 20.5-57.7C52.3 362.8 64 293.5 64 192C64 86 107 0 160 0zM512 384c-53 0-96-86-96-192S459 0 512 0s96 86 96 192s-43 192-96 192m0-128c17.7 0 32-28.7 32-64s-14.3-64-32-64s-32 28.7-32 64s14.3 64 32 64m-368-48a16 16 0 1 0-32 0a16 16 0 1 0 32 0m64 0a16 16 0 1 0-32 0a16 16 0 1 0 32 0m48 16a16 16 0 1 0 0-32a16 16 0 1 0 0 32m80-16a16 16 0 1 0-32 0a16 16 0 1 0 32 0" stroke-width="20" stroke="#000"/></svg> Dev Sheets</h3>
				<p class="clear w3-margin-bottom">Wipe some troubles away.<br>Cheat Sheets for devs. Small list of common placeholders and other miscellaneous code snippets and tools.</p>
				
			</div>
			
			<div class="w3-third w3-center">
			
				<button onclick="openWin()" onclick="document.getElementById(\'id01\').style.display=\'block\'" class="w3-btn w3-green w3-round">Open Window <svg xmlns="http://www.w3.org/2000/svg" style="vertical-align:middle;" width="1.5em" height="1.5em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 4H6a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-4m-8-2l8-8m0 0v5m0-5h-5"/></svg></button>
				
				<button onclick="closeWin()" onclick="document.getElementById(\'id01\').style.display=\'block\'" class="w3-btn w3-orange w3-round"><svg xmlns="http://www.w3.org/2000/svg" style="vertical-align:middle;" width="1.5em" height="1.5em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="#000" d="M8 18q-.825 0-1.412-.587T6 16V4q0-.825.588-1.412T8 2h12q.825 0 1.413.588T22 4v12q0 .825-.587 1.413T20 18zm0-2h12V4H8zm-4 6q-.825 0-1.412-.587T2 20V7q0-.425.288-.712T3 6t.713.288T4 7v13h13q.425 0 .713.288T18 21t-.288.713T17 22zM8 4v12zm4.6 8.8l1.4-1.4l1.4 1.4q.275.275.7.275t.7-.275t.275-.7t-.275-.7L15.4 10l1.4-1.4q.275-.275.275-.7t-.275-.7t-.7-.275t-.7.275L14 8.6l-1.4-1.4q-.275-.275-.7-.275t-.7.275t-.275.7t.275.7l1.4 1.4l-1.4 1.4q-.275.275-.275.7t.275.7t.7.275t.7-.275" stroke-width="0.5" stroke="#000"/></svg> Close Window</button>
				
			</div>
			
		</header>
		
		<div class="w3-container w3-border-bottom w3-margin-bottom">
					
			<div class="w3-row">
				<a href="javascript:void(0)" onclick="openTab(event, \'tab01\');">
					<div class="w3-quarter tablink w3-bottombar w3-hover-light-grey w3-center w3-border-orange"><svg xmlns="http://www.w3.org/2000/svg" style="vertical-align:middle;" width="1.3em" height="1.3em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 8l-4 4l4 4m10-8l4 4l-4 4M14 4l-4 16"/></svg> Placeholders</div>
				</a>
				<a href="javascript:void(0)" onclick="openTab(event, \'tab02\');">
					<div class="w3-quarter tablink w3-bottombar w3-hover-light-grey w3-center"><svg xmlns="http://www.w3.org/2000/svg" style="vertical-align:middle;" width="1.3em" height="1.3em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.009m3.986 0h.01m3.986 0H16m2 9c1.232 0 2.231-1.151 2.231-2.571c0-2.248-.1-3.742 1.442-5.52c.436-.502.436-1.316 0-1.818c-1.542-1.777-1.442-3.272-1.442-5.52C20.231 4.151 19.232 3 18 3M6 21c-1.232 0-2.231-1.151-2.231-2.571c0-2.248.1-3.742-1.442-5.52c-.436-.502-.436-1.316 0-1.818C3.835 9.353 3.769 7.84 3.769 5.57C3.769 4.151 4.768 3 6 3" color="#000"/></svg> Code Snippets</div>
				</a>
				<a href="javascript:void(0)" onclick="openTab(event, \'tab03\');">
					<div class="w3-quarter tablink w3-bottombar w3-hover-light-grey w3-center"><svg xmlns="http://www.w3.org/2000/svg" style="vertical-align:middle;" width="1.3em" height="1.3em" viewBox="0 0 20 20"><rect width="20" height="20" fill="none"/><path fill="#000" d="M3 6a3 3 0 0 1 3-3h8a3 3 0 0 1 3 3v2.03a4.5 4.5 0 0 0-1-.004V7H4v7a2 2 0 0 0 2 2h3.492a2.5 2.5 0 0 0-.443 1H6a3 3 0 0 1-3-3zm10.044 3.587l-1.44-1.44a.5.5 0 0 0-.708.707l1.578 1.577q.232-.447.57-.844M6 4a2 2 0 0 0-2 2h12a2 2 0 0 0-2-2zm3.104 4.854a.5.5 0 1 0-.708-.708l-2.5 2.5a.5.5 0 0 0 0 .708l2.5 2.5a.5.5 0 0 0 .708-.708L6.957 11zm7.788.17c.366.042.471.48.21.742l-.975.975a1.507 1.507 0 1 0 2.132 2.132l.975-.975c.261-.261.7-.156.742.21a3.518 3.518 0 0 1-4.676 3.723l-2.726 2.727a1.507 1.507 0 1 1-2.132-2.132l2.726-2.726a3.518 3.518 0 0 1 3.724-4.676" stroke-width="0.5" stroke="#000"/></svg> Tools</div>
				</a>
				<a href="javascript:void(0)" onclick="openTab(event, \'tab04\');">
					<div class="w3-quarter tablink w3-bottombar w3-hover-light-grey w3-center"><svg xmlns="http://www.w3.org/2000/svg" style="vertical-align:middle;" width="1.3em" height="1.3em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="#000" d="M8.465 11.293c1.133-1.133 3.109-1.133 4.242 0l.707.707l1.414-1.414l-.707-.707c-.943-.944-2.199-1.465-3.535-1.465s-2.592.521-3.535 1.465L4.929 12a5.01 5.01 0 0 0 0 7.071a4.98 4.98 0 0 0 3.535 1.462A4.98 4.98 0 0 0 12 19.071l.707-.707l-1.414-1.414l-.707.707a3.007 3.007 0 0 1-4.243 0a3.005 3.005 0 0 1 0-4.243z" stroke-width="0.5" stroke="#000"/><path fill="#000" d="m12 4.929l-.707.707l1.414 1.414l.707-.707a3.007 3.007 0 0 1 4.243 0a3.005 3.005 0 0 1 0 4.243l-2.122 2.121c-1.133 1.133-3.109 1.133-4.242 0L10.586 12l-1.414 1.414l.707.707c.943.944 2.199 1.465 3.535 1.465s2.592-.521 3.535-1.465L19.071 12a5.01 5.01 0 0 0 0-7.071a5.006 5.006 0 0 0-7.071 0" stroke-width="0.5" stroke="#000"/></svg> Links</div>
				</a>
			</div>

			<div id="tab01" class="w3-margin-top w3-margin-bottom mytabs">';
				include(GSPLUGINPATH .'DevSheets/tabs/Placeholders.php');
			echo '</div>';
		
			echo '
			<div id="tab02" class="w3-margin-top w3-margin-bottom mytabs" style="display:none">';
				include(GSPLUGINPATH .'DevSheets/tabs/Snippets.php');
			echo '</div>';
			
			echo '
			<div id="tab03" class="w3-margin-top w3-margin-bottom mytabs" style="display:none">';
				include(GSPLUGINPATH .'DevSheets/tabs/Tools.php');
			echo '</div>';
			
			echo '
			<div id="tab04" class="w3-margin-top w3-margin-bottom mytabs" style="display:none">';
				include(GSPLUGINPATH .'DevSheets/tabs/Links.php');
			echo '</div>';
			echo '
		</div>
					
		<footer class="w3-padding-top-32 margin-bottom-none">
			<p class="w3-small clear w3-margin-bottom w3-margin-left">Made with <span class="credit-icon">❤️</span> especially for "<b>'.$USR.'</b>". Is this plugin useful to you?
			<span class="w3-btn w3-khaki w3-border w3-border-red w3-round-xlarge"><a href="https://getsimple-ce.ovh/donate" target="_blank" class="donateButton"><b>Buy Us A Coffee </b><svg xmlns="http://www.w3.org/2000/svg" style="vertical-align:middle" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" fill-opacity="0" d="M17 14v4c0 1.66 -1.34 3 -3 3h-6c-1.66 0 -3 -1.34 -3 -3v-4Z"><animate fill="freeze" attributeName="fill-opacity" begin="0.8s" dur="0.5s" values="0;1"/></path><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path stroke-dasharray="48" stroke-dashoffset="48" d="M17 9v9c0 1.66 -1.34 3 -3 3h-6c-1.66 0 -3 -1.34 -3 -3v-9Z"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.6s" values="48;0"/></path><path stroke-dasharray="14" stroke-dashoffset="14" d="M17 9h3c0.55 0 1 0.45 1 1v3c0 0.55 -0.45 1 -1 1h-3"><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.6s" dur="0.2s" values="14;0"/></path><mask id="lineMdCoffeeHalfEmptyFilledLoop0"><path stroke="#fff" d="M8 0c0 2-2 2-2 4s2 2 2 4-2 2-2 4 2 2 2 4M12 0c0 2-2 2-2 4s2 2 2 4-2 2-2 4 2 2 2 4M16 0c0 2-2 2-2 4s2 2 2 4-2 2-2 4 2 2 2 4"><animateMotion calcMode="linear" dur="3s" path="M0 0v-8" repeatCount="indefinite"/></path></mask><rect width="24" height="0" y="7" fill="currentColor" mask="url(#lineMdCoffeeHalfEmptyFilledLoop0)"><animate fill="freeze" attributeName="y" begin="0.8s" dur="0.6s" values="7;2"/><animate fill="freeze" attributeName="height" begin="0.8s" dur="0.6s" values="0;5"/></rect></g></svg></a></span></p>
		</footer>
	
    </div>';
	
	echo '
	<script src="'.$SITEURL.'plugins/DevSheets/assets/prism.js"></script>
	<script src="'.$SITEURL.'plugins/DevSheets/assets/scripts.js"></script>
	';
	
	echo '
	<script>
	
		let popupWindow;

		function openWin() {
			// Get screen width and height
			let screenWidth = window.screen.width;
			let screenHeight = window.screen.height;

			// Define popup dimensions
			let popupWidth = 860;
			let popupHeight = 540;

			// Calculate center position
			let left = (screenWidth - popupWidth) / 2;
			let top = (screenHeight - popupHeight) / 2;

			// Open centered popup
			popupWindow = window.open(
				"'.$SITEURL.'plugins/DevSheets/DevSheets-PopUp.php",
				"DevSheetsPopup",
				`width=${popupWidth},height=${popupHeight},top=${top},left=${left},scrollbars=yes`
			);
		}

		function closeWin() {
			if (popupWindow) {
				popupWindow.close();
			}
		}

	</script>
	';
}

?>

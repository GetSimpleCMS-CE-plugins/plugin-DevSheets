<style>
    #copyMessage {
        display: none;
        color: green;
        font-size: 12px;
		float:right;
		margin-top:5px;
		margin-right:50%;
		background-color:white;
		padding:5px;
		border-radius:8px;
		-webkit-animation-duration: 5s;animation-duration: 5s;
        -webkit-animation-fill-mode: both;animation-fill-mode: both;
    }
	@-webkit-keyframes fadeOut {
		0% {opacity: 1;}
		100% {opacity: 0;}
	}
	@keyframes fadeOut {
		0% {opacity: 1;}
		100% {opacity: 0;}
	}
	.fadeOut {
		-webkit-animation-name: fadeOut;
		animation-name: fadeOut;
	}
</style>

<div class="w3-container escape">
	<h3 class="w3-center w3-margin"><svg xmlns="http://www.w3.org/2000/svg" style="vertical-align:middle" width="1.5em" height="1.5em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="#000066" d="m23.414 12l-4.95-4.95l-1.414 1.414L20.586 12l-2.5 2.501l1.415 1.414zm-2 8L4 2.587L2.586 4.001l3 3l-5 5l4.95 4.949l1.414-1.414L3.414 12L7 8.415l13 13z" stroke-width="0.5" stroke="#000066"/></svg> HTML Escape</h3>
	
	<div class="w3-half">
		<div class="w3-container w3-padding-24">
			<label class="w3-text-green"><b>Input</b></label>
			<textarea class="w3-input w3-border w3-round-large w3-animate-input" style="width:70%" id="input" rows="10" cols="50" placeholder="Paste your code here"></textarea>
			<br><button class="w3-btn w3-round w3-green" onclick="convert()">Convert</button>
		</div>
	</div>
	
	<div class="w3-half">
		<div class="w3-container w3-padding-24">
			<label class="w3-text-blue"><b>Output</b></label>
			<textarea class="w3-input w3-border w3-round-large w3-animate-input" style="width:70%" id="output" rows="10" cols="50" readonly placeholder="Converted code will appear here"></textarea>
			<br><button class="w3-btn w3-round w3-blue" onclick="copyOutput()">Copy Output</button>
			<span id="copyMessage" class="fadeOut">Copied to clipboard!</span>
		</div>
		
	</div>
	
</div>

<script>
        function convert() {
            var input = document.getElementById('input').value;
            var output = document.getElementById('output');
            output.value = escapeHtml(input);
        }

        function escapeHtml(str) {
            return str.replace(/</g, '&lt;');
        }

        function copyOutput() {
            var output = document.getElementById('output');
            output.select();
            document.execCommand('copy');
			showCopyMessage();
        }
		
		function showCopyMessage() {
            var copyMessage = document.getElementById('copyMessage');
            copyMessage.style.display = 'block';
            setTimeout(function() {
                copyMessage.style.display = 'none';
            }, 3000);
        }
    </script>
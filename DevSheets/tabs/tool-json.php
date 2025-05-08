<!-- CodeMirror CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/codemirror.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/theme/material-darker.min.css">
    <!-- Custom CSS -->
    <style>
        .dev-sheets .json textarea {
            width: 100%;
            height: 150px;
            font-family: monospace;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        .button-container {
            display: flex;
            gap: 20px;
            margin-bottom: 10px;
            flex-wrap: wrap;
            align-items: center;
        }
        .save-options {
            display: flex;
            gap: 10px;
            align-items: center;
        }
        .save-options input {
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            width: 120px;
        }
        .save-options select {
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }
        .dev-sheets .CodeMirror {
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            margin-top: 10px;
            height: auto;
        }
    </style>
	
	<div class="w3-container json">
        <h3 class="w3-center w3-margin"><svg xmlns="http://www.w3.org/2000/svg" style="vertical-align:middle" width="1.2em" height="1.2em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M4 22h14a2 2 0 0 0 2-2V7l-5-5H6a2 2 0 0 0-2 2v4"/><path d="M14 2v4a2 2 0 0 0 2 2h4M4 12a1 1 0 0 0-1 1v1a1 1 0 0 1-1 1a1 1 0 0 1 1 1v1a1 1 0 0 0 1 1m4 0a1 1 0 0 0 1-1v-1a1 1 0 0 1 1-1a1 1 0 0 1-1-1v-1a1 1 0 0 0-1-1"/></g></svg>  JSON Editor</h3>
		
        <textarea id="jsonInput" placeholder="Paste your DB here..."></textarea>
        <div class="button-container">
            <button class="w3-btn w3-round w3-blue" onclick="document.getElementById('fileInput').click()">
                <svg xmlns="http://www.w3.org/2000/svg" style="vertical-align:middle;" width="1.5em" height="1.5em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="#fff" d="M12 11q3.75 0 6.375-1.175T21 7t-2.625-2.825T12 3T5.625 4.175T3 7t2.625 2.825T12 11m0 2.5q1.025 0 2.563-.213t2.962-.687t2.45-1.237T21 9.5V12q0 1.1-1.025 1.863t-2.45 1.237t-2.962.688T12 16t-2.562-.213t-2.963-.687t-2.45-1.237T3 12V9.5q0 1.1 1.025 1.863t2.45 1.237t2.963.688T12 13.5m0 5q1.025 0 2.563-.213t2.962-.687t2.45-1.237T21 14.5V17q0 1.1-1.025 1.863t-2.45 1.237t-2.962.688T12 21t-2.562-.213t-2.963-.687t-2.45-1.237T3 17v-2.5q0 1.1 1.025 1.863t2.45 1.237t2.963.688T12 18.5"/></svg> Import DB
            </button>
            <button class="w3-btn w3-round w3-blue-gray" onclick="beautifyJSON()">
                <svg xmlns="http://www.w3.org/2000/svg" style="vertical-align:middle;" width="1.5em" height="1.5em" viewBox="0 0 16 16"><rect width="16" height="16" fill="none"/><path fill="#fff" d="M2.75 2.5a.75.75 0 0 0 0 1.5h10.5a.75.75 0 0 0 0-1.5zm1.69 9.935l.936-.935H2.75a.75.75 0 0 0 0 1.5h1.334c.072-.206.191-.4.356-.565M2.75 8.5H6c0 .637.4 1.19.973 1.405L6.878 10H2.75a.75.75 0 0 1 0-1.5m0-3a.75.75 0 0 0 0 1.5h4.5a.75.75 0 0 0 0-1.5zm8.246-.061a.5.5 0 0 0-.992 0l-.09.734a2 2 0 0 1-1.741 1.74l-.734.09a.5.5 0 0 0 0 .993l.734.09a2 2 0 0 1 1.74 1.741l.09.734a.5.5 0 0 0 .993 0l.09-.734a2 2 0 0 1 1.741-1.74l.734-.09a.5.5 0 0 0 0-.993l-.734-.09a2 2 0 0 1-1.74-1.741zm-2.142 4.708a.5.5 0 0 1 0 .707l-3 2.996a.5.5 0 1 1-.707-.707l3-2.997a.5.5 0 0 1 .707 0"/></svg> Beautify DB
            </button>
            <button class="w3-btn w3-round w3-teal" onclick="minifyJSON()">
                <svg xmlns="http://www.w3.org/2000/svg" style="vertical-align:middle;" width="1.5em" height="1.5em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><g fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" color="#fff"><circle cx="12" cy="12" r="10"/><path d="M12.885 11.115c-.517-.517-.431-2.715-.431-2.715m.431 2.715c.517.517 2.715.431 2.715.431m-2.715-.43L16.5 7.5m-5.388 5.388c-.518-.517-2.715-.431-2.715-.431m2.715.431c.517.518.431 2.715.431 2.715m-.431-2.715L7.5 16.5"/></g></svg> Minify DB
            </button>
            <button class="w3-btn w3-round w3-light-green" onclick="copyToClipboard()">
                <svg xmlns="http://www.w3.org/2000/svg" style="vertical-align:middle;" width="1.5em" height="1.5em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><g fill="none"><path d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="#fff" d="M19 2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-2v2a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h2V4a2 2 0 0 1 2-2zm-4 6H5v12h10zm-5 7a1 1 0 1 1 0 2H8a1 1 0 1 1 0-2zm9-11H9v2h6a2 2 0 0 1 2 2v8h2zm-7 7a1 1 0 0 1 .117 1.993L12 13H8a1 1 0 0 1-.117-1.993L8 11z"/></g></svg> Copy to Clipboard
            </button>
            <!--button class="dark-button" onclick="toggleDarkMode()">
                <svg xmlns="http://www.w3.org/2000/svg" style="vertical-align:middle;" width="1.5em" height="1.5em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="#fff" d="M6 12c0-1.54 1.667-2.502 3-1.732c.619.357 1 1.017 1 1.732c0 1.54-1.667 2.502-3 1.732A2 2 0 0 1 6 12" class="duoicon-primary-layer"/><path fill="#fff" fill-rule="evenodd" d="M8 5C2.611 5-.756 10.833 1.938 15.5A7 7 0 0 0 8 19h8c5.389 0 8.756-5.833 6.062-10.5A7 7 0 0 0 16 5zm0 3c-3.079 0-5.004 3.333-3.464 6A4 4 0 0 0 8 16c3.079 0 5.004-3.333 3.464-6A4 4 0 0 0 8 8" class="duoicon-secondary-layer" opacity="0.3"/></svg> Toggle Dark Mode
            </button-->
            <div class="save-options">
                <input type="text" id="fileName" placeholder="File name" value="db">
                <select id="fileFormat">
                    <option value="json">.json</option>
                    <option value="txt">.txt</option>
                </select>
            </div>
            <button class="w3-btn w3-round w3-green" onclick="saveAsFile()">
                <svg xmlns="http://www.w3.org/2000/svg" style="vertical-align:middle;" width="1.5em" height="1.5em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="#fff" d="M21 7v12q0 .825-.587 1.413T19 21H5q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h12zm-9 11q1.25 0 2.125-.875T15 15t-.875-2.125T12 12t-2.125.875T9 15t.875 2.125T12 18m-6-8h9V6H6z"/></svg> Save As
            </button>
            <input type="file" id="fileInput" style="display: none;" accept=".txt,.json" onchange="handleFileImport(event)">
        </div>
        <div id="editor"></div>
		
    </div>

    <!-- CodeMirror JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/codemirror.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/mode/javascript/javascript.min.js"></script>
    <!-- Custom JS -->
    <script>
        // Initialize CodeMirror editor
        const editor = CodeMirror(document.getElementById('editor'), {
            mode: "javascript",
            lineNumbers: true,
            lineWrapping: true,
            readOnly: false,
            theme: "material-darker",
        });

        // Auto-beautify JSON when pasted into the textarea
        document.getElementById('jsonInput').addEventListener('input', function () {
            beautifyJSON();
        });

        // Beautify JSON
        function beautifyJSON() {
            const jsonInput = document.getElementById('jsonInput').value;
            try {
                const parsedJSON = JSON.parse(jsonInput);
                const beautifiedJSON = JSON.stringify(parsedJSON, null, 4); // Beautify with 4 spaces
                editor.setValue(beautifiedJSON);
            } catch (error) {
                editor.setValue('Invalid DB! Please check your input.');
            }
        }

        // Minify JSON
        function minifyJSON() {
            try {
                const parsedJSON = JSON.parse(editor.getValue());
                const minifiedJSON = JSON.stringify(parsedJSON); // Minify JSON
                editor.setValue(minifiedJSON);
            } catch (error) {
                editor.setValue('Invalid DB! Please check your input.');
            }
        }

        // Copy JSON to clipboard
        function copyToClipboard() {
            const jsonContent = editor.getValue();
            navigator.clipboard.writeText(jsonContent).then(() => {
                alert('Copied to clipboard!');
            }).catch(() => {
                alert('Failed to copy to clipboard.');
            });
        }

        // Dark Mode
        function toggleDarkMode() {
            const isDark = editor.getOption("theme") === "material";
            editor.setOption("theme", isDark ? "default" : "material");
            document.body.classList.toggle("dark-mode", !isDark);
        }

        // Handle file import
        function handleFileImport(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    const fileContent = e.target.result;
                    document.getElementById('jsonInput').value = fileContent;
                    beautifyJSON(); // Automatically beautify the imported content
                };
                reader.readAsText(file);
            }
        }

        // Save As functionality with custom file name and format
        function saveAsFile() {
            const content = editor.getValue();
            if (!content) {
                alert('Editor is empty! Nothing to save.');
                return;
            }

            const fileName = document.getElementById('fileName').value || 'db';
            const fileFormat = document.getElementById('fileFormat').value;
            const fullFileName = `${fileName}.${fileFormat}`;

            const blob = new Blob([content], { type: fileFormat === 'json' ? 'application/json' : 'text/plain' });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = fullFileName;
            a.click();
            URL.revokeObjectURL(url);
        }
    </script>
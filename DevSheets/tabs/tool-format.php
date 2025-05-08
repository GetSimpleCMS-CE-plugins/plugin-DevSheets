
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/codemirror.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/theme/blackboard.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/codemirror.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/mode/htmlmixed/htmlmixed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/mode/xml/xml.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/mode/javascript/javascript.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/mode/css/css.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/mode/clike/clike.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/mode/php/php.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/addon/edit/closetag.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-beautify/1.15.3/beautify.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-beautify/1.15.3/beautify-css.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-beautify/1.15.3/beautify-html.min.js"></script>
    
    <style>
        .editor-container { border: 1px solid #ddd; margin-bottom: 10px; height: 400px; background: white; }
        .button-group { margin: 10px 0; display: flex; align-items: center; flex-wrap: wrap; gap: 8px; }
        button { padding: 8px 12px; cursor: pointer; background: #4a6fa5; color: white; border: none; border-radius: 4px; }
        button:hover { background: #3a5a8f; }
        .file-input { display: none; }
        .file-name { margin-left: 10px; font-style: italic; color: #666; }
        select { padding: 7px 10px; border-radius: 4px; border: 1px solid #ccc; background: white; }
        .status { margin-top: 10px; color: #666; font-size: 0.9em; }
        .CodeMirror { height: 100% !important; }
    </style>
    
    <div class="button-group">
		
        <button class="w3-asphault" id="uploadBtn"><svg xmlns="http://www.w3.org/2000/svg" style="vertical-align:middle" width="1.3em" height="1.3em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="#fff" d="M6 20q-.825 0-1.412-.587T4 18v-2q0-.425.288-.712T5 15t.713.288T6 16v2h12v-2q0-.425.288-.712T19 15t.713.288T20 16v2q0 .825-.587 1.413T18 20zm5-12.15L9.125 9.725q-.3.3-.712.288T7.7 9.7q-.275-.3-.288-.7t.288-.7l3.6-3.6q.15-.15.325-.212T12 4.425t.375.063t.325.212l3.6 3.6q.3.3.288.7t-.288.7q-.3.3-.712.313t-.713-.288L13 7.85V15q0 .425-.288.713T12 16t-.712-.288T11 15z" stroke-width="0.5" stroke="#fff"/></svg> Upload File</button>
	
        <button class="w3-green" id="beautify"><svg xmlns="http://www.w3.org/2000/svg" style="vertical-align:middle" width="1.2em" height="1.2em" viewBox="0 0 14 14"><rect width="14" height="14" fill="none"/><path fill="#fff" fill-rule="evenodd" d="M0 1A.75.75 0 0 1 .75.25h12.5a.75.75 0 0 1 0 1.5H.75A.75.75 0 0 1 0 1m3.25 2.25a.75.75 0 0 0 0 1.5h10a.75.75 0 0 0 0-1.5zM5.5 7a.75.75 0 0 1 .75-.75h7a.75.75 0 0 1 0 1.5h-7A.75.75 0 0 1 5.5 7m-3 3a.75.75 0 0 1 .75-.75h10a.75.75 0 0 1 0 1.5h-10A.75.75 0 0 1 2.5 10M.75 12.25a.75.75 0 0 0 0 1.5h12.5a.75.75 0 0 0 0-1.5z" clip-rule="evenodd" stroke-width="0.5" stroke="#fff"/></svg> Beautify</button>
        
		<button class="w3-teal" id="minify"><svg xmlns="http://www.w3.org/2000/svg" style="vertical-align:middle" width="1.05em" height="1.2em" viewBox="0 0 448 512"><rect width="448" height="512" fill="none"/><path fill="#fff" d="M448 64c0-17.7-14.3-32-32-32H32C14.3 32 0 46.3 0 64s14.3 32 32 32h384c17.7 0 32-14.3 32-32m0 256c0-17.7-14.3-32-32-32H32c-17.7 0-32 14.3-32 32s14.3 32 32 32h384c17.7 0 32-14.3 32-32M0 192c0 17.7 14.3 32 32 32h384c17.7 0 32-14.3 32-32s-14.3-32-32-32H32c-17.7 0-32 14.3-32 32m448 256c0-17.7-14.3-32-32-32H32c-17.7 0-32 14.3-32 32s14.3 32 32 32h384c17.7 0 32-14.3 32-32" stroke-width="20" stroke="#fff"/></svg> Minify</button>
        
		<button class="w3-blue-gray" id="downloadBtn"><svg xmlns="http://www.w3.org/2000/svg" style="vertical-align:middle" width="1.3em" height="1.3em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="#fff" d="M12 15.575q-.2 0-.375-.062T11.3 15.3l-3.6-3.6q-.3-.3-.288-.7t.288-.7q.3-.3.713-.312t.712.287L11 12.15V5q0-.425.288-.712T12 4t.713.288T13 5v7.15l1.875-1.875q.3-.3.713-.288t.712.313q.275.3.288.7t-.288.7l-3.6 3.6q-.15.15-.325.213t-.375.062M6 20q-.825 0-1.412-.587T4 18v-2q0-.425.288-.712T5 15t.713.288T6 16v2h12v-2q0-.425.288-.712T19 15t.713.288T20 16v2q0 .825-.587 1.413T18 20z" stroke-width="0.5" stroke="#fff"/></svg> Download File</button>
		
        <input type="file" id="fileInput" class="file-input" accept=".html,.php,.css,.js,.txt">
        <span id="fileName" class="file-name"></span>
        <select id="language">
            <option value="htmlmixed">HTML</option>
            <option value="application/x-httpd-php">PHP</option>
            <option value="css">CSS</option>
            <option value="javascript">JavaScript</option>
        </select>
		
    </div>
    <div class="editor-container">
        <textarea id="editor">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Sample Code&lt;/title&gt;
    &lt;style&gt;
        body {
            font-family: Arial;
            margin: 20px;
        }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Welcome to the Minifier/Beautifier&lt;/h1&gt;
    &lt;?php 
        // Sample PHP code
        function hello($name) {
            echo "Hello, " . htmlspecialchars($name) . "!";
        }
        hello("World"); 
    ?&gt;
    &lt;script&gt;
        console.log("Hello World");
    &lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;</textarea>
    </div>
    <div id="status" class="status"></div>

    <script>
        // Initialize CodeMirror with tab indentation
        const editor = CodeMirror.fromTextArea(document.getElementById('editor'), {
            lineNumbers: false,
            mode: 'htmlmixed',
            autoCloseTags: true,
            indentWithTabs: true,
            tabSize: 4,
            lineWrapping: true,
            theme: 'blackboard'
        });

        // Current file reference
        let currentFile = null;
        const statusElement = document.getElementById('status');

        // Update status message
        function updateStatus(message, isError = false) {
            statusElement.textContent = message;
            statusElement.style.color = isError ? '#d32f2f' : '#4CAF50';
            setTimeout(() => statusElement.textContent = '', 3000);
        }

        // Language selector with proper PHP mode
        document.getElementById('language').addEventListener('change', function() {
            const mode = this.value;
            editor.setOption('mode', mode);
            updateStatus(`Mode changed to ${mode === 'application/x-httpd-php' ? 'PHP' : mode}`);
        });

        // Beautify button
        document.getElementById('beautify').addEventListener('click', function() {
            const code = editor.getValue();
            const mode = editor.getOption('mode');
            
            let beautified;
            try {
                if (mode === 'css') {
                    beautified = css_beautify(code, {
                        indent_with_tabs: true,
                        tab_size: 4,
                        selector_separator_newline: true
                    });
                } else if (mode === 'application/x-httpd-php' || mode === 'htmlmixed') {
                    beautified = html_beautify(code, {
                        indent_with_tabs: true,
                        tab_size: 4,
                        max_preserve_newlines: 2,
                        preserve_newlines: true,
                        wrap_line_length: 120,
                        unformatted: ['a', 'span', 'img', 'code', 'pre', 'sub', 'sup', 'em', 'strong', 'b', 'i', 'u', 'link'],
                        inline: ['a', 'span', 'img', 'code', 'pre', 'sub', 'sup', 'em', 'strong', 'b', 'i', 'u', 'link']
                    });
                } else {
                    beautified = js_beautify(code, {
                        indent_with_tabs: true,
                        tab_size: 4,
                        preserve_newlines: true
                    });
                }
                
                editor.setValue(beautified);
                updateStatus('Code beautified successfully');
            } catch (error) {
                updateStatus('Beautification error: ' + error.message, true);
                console.error(error);
            }
        });

        // SIMPLE BUT RELIABLE MINIFICATION FUNCTIONS
        function minifyCSS(css) {
            // Remove comments
            css = css.replace(/\/\*[\s\S]*?\*\//g, '');
            // Remove whitespace
            css = css.replace(/\s+/g, ' ');
            // Remove spaces around brackets and colons
            css = css.replace(/\s*([{:;}])\s*/g, '$1');
            // Remove last semicolon before }
            css = css.replace(/;}/g, '}');
            return css.trim();
        }

        function minifyJS(js) {
            // Remove comments
            js = js.replace(/\/\*[\s\S]*?\*\//g, '');
            js = js.replace(/\/\/.*$/gm, '');
            // Remove whitespace
            js = js.replace(/\s+/g, ' ');
            // Remove spaces around operators
            js = js.replace(/\s*([=+\-*\/%&|^~!<>?:,;{}()[\]])\s*/g, '$1');
            return js.trim();
        }

        function minifyHTML(html) {
            // Protect PHP tags
            html = html.replace(/<\?php[\s\S]*?\?>/g, function(match) {
                return match.replace(/\s+/g, ' ').replace(/\s*([{};=])\s*/g, '$1');
            });
            // Remove HTML comments
            html = html.replace(/<!--[\s\S]*?-->/g, '');
            // Remove whitespace between tags
            html = html.replace(/>\s+</g, '><');
            // Remove whitespace in tags
            html = html.replace(/\s*([<>])\s*/g, '$1');
            // Collapse multiple whitespace
            html = html.replace(/\s+/g, ' ');
            return html.trim();
        }

        // Minify button using our reliable functions
        document.getElementById('minify').addEventListener('click', function() {
            const code = editor.getValue();
            const mode = editor.getOption('mode');
            
            try {
                let minified;
                if (mode === 'css') {
                    minified = minifyCSS(code);
                } else if (mode === 'javascript') {
                    minified = minifyJS(code);
                } else if (mode === 'application/x-httpd-php' || mode === 'htmlmixed') {
                    minified = minifyHTML(code);
                } else {
                    minified = code
                        .replace(/\/\*[\s\S]*?\*\//g, '')
                        .replace(/<!--[\s\S]*?-->/g, '')
                        .replace(/\s+/g, ' ')
                        .replace(/>\s+</g, '><')
                        .trim();
                }
                
                editor.setValue(minified);
                updateStatus('Code minified successfully');
            } catch (error) {
                updateStatus('Minification error: ' + error.message, true);
                console.error(error);
            }
        });

        // File Upload
        document.getElementById('uploadBtn').addEventListener('click', function() {
            document.getElementById('fileInput').click();
        });

        document.getElementById('fileInput').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (!file) return;
            
            currentFile = file;
            document.getElementById('fileName').textContent = file.name;
            
            // Set editor mode based on file extension
            const ext = file.name.split('.').pop().toLowerCase();
            if (ext === 'css') {
                editor.setOption('mode', 'css');
                document.getElementById('language').value = 'css';
            } else if (ext === 'js') {
                editor.setOption('mode', 'javascript');
                document.getElementById('language').value = 'javascript';
            } else if (ext === 'php') {
                editor.setOption('mode', 'application/x-httpd-php');
                document.getElementById('language').value = 'application/x-httpd-php';
            } else {
                editor.setOption('mode', 'htmlmixed');
                document.getElementById('language').value = 'htmlmixed';
            }
            
            // Read file
            const reader = new FileReader();
            reader.onload = function(e) {
                editor.setValue(e.target.result);
                updateStatus(`File "${file.name}" loaded successfully`);
            };
            reader.onerror = function() {
                updateStatus('Error reading file', true);
            };
            reader.readAsText(file);
        });

        // File Download
        document.getElementById('downloadBtn').addEventListener('click', function() {
            const code = editor.getValue();
            const mode = editor.getOption('mode');
            let ext = 'txt';
            
            // Determine extension
            if (mode === 'css') ext = 'css';
            else if (mode === 'javascript') ext = 'js';
            else if (mode === 'application/x-httpd-php') ext = 'php';
            else ext = 'html';
            
            // Create filename
            let filename = 'code';
            if (currentFile) {
                filename = currentFile.name.split('.')[0];
            }
            filename += '.' + ext;
            
            try {
                // Create download
                const blob = new Blob([code], { type: 'text/plain' });
                const url = URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.href = url;
                a.download = filename;
                document.body.appendChild(a);
                a.click();
                document.body.removeChild(a);
                URL.revokeObjectURL(url);
                updateStatus(`File "${filename}" downloaded`);
            } catch (error) {
                updateStatus('Download error: ' + error.message, true);
                console.error(error);
            }
        });
    </script>
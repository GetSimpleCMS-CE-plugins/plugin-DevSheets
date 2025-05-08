<script src="https://cdnjs.cloudflare.com/ajax/libs/sql.js/1.8.0/sql-wasm.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/PapaParse/5.3.0/papaparse.min.js"></script>
    <style>
        .file-upload {
            margin-bottom: 20px;
            padding: 20px;
            border: 2px dashed #ccc;
            border-radius: 5px;
            text-align: center;
        }
        .editor {
            display: flex;
            gap: 20px;
        }
        .query-panel {
            flex: 1;
        }
        .schema-panel {
            width: 300px;
        }
        .sqlite textarea {
            width: 95%;
            height: 150px;
            font-family: monospace;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            position: sticky;
            top: 0;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr.modified {
            background-color: #fff3cd;
        }
        tr.new-row {
            background-color: #d4edda;
        }
        tr.marked-for-deletion {
            background-color: #f8d7da;
            text-decoration: line-through;
            opacity: 0.7;
        }
        .error {
            color: red;
            margin: 10px 0;
        }
        .success {
            color: green;
            margin: 10px 0;
        }
        .warning-message {
            color: #856404;
            margin: 10px 0;
        }
        .table-list {
            list-style-type: none;
            padding: 0;
        }
        .table-list li {
            padding: 8px;
            cursor: pointer;
            border-bottom: 1px solid #eee;
        }
        .table-list li:hover {
            background-color: #f0f0f0;
        }
        .results-container {
            max-height: 500px;
            overflow-y: auto;
            margin-top: 20px;
        }
        .export-options {
            margin: 15px 0;
            padding: 10px;
            background: #f8f9fa;
            border-radius: 5px;
        }
        .editable {
            background-color: #e7f5ff;
        }
        .editable:focus {
            background-color: #d0ebff;
            outline: 2px solid #339af0;
        }
        .action-buttons {
            display: flex;
            gap: 10px;
            margin: 10px 0;
            flex-wrap: wrap;
        }
        .new-row-form {
            margin: 15px 0;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 5px;
            display: none;
        }
        .new-row-form input {
            padding: 8px;
            margin: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .new-row-form button {
            margin: 5px;
        }
        .action-cell {
            text-align: center;
        }
        .action-cell button {
            padding: 5px 10px;
            margin: 0 2px;
        }
    </style>
	
	
    <div class="w3-container sqlite">
        <h3 class="w3-center w3-margin"><svg xmlns="http://www.w3.org/2000/svg" style="vertical-align:middle" width="1.08em" height="1.2em" viewBox="0 0 458 512"><rect width="458" height="512" fill="none"/><path fill="currentColor" d="m228.502 233.071l-14.428 45.75c-7.693 28.4-7.039 37.358-3.137 43.966c.963 1.624 3.597 6.94 7.278 21.14c5.344 20.554 10.05 51.587 10.165 53.072c-.773 18.97-.355 39.069 1.179 58.313H39.147C17.617 455.312 0 437.695 0 416.166V61.88c0-21.53 17.616-39.15 39.147-39.15h293.008c-44.876 47.605-89.341 137.936-103.653 210.341M435.338 11.136c53.695 47.899.376 157.402-48.565 234.483c-35.586 11.437-77.064 36.696-77.064 36.696s3.45-1.832 16.255-7.203c8.68-3.649 34.598-9.811 50.381-13.41c-26.349 39.726-48.896 67.532-48.896 67.532s-45.97 18.681-60.187 62.14c8.24-46.357 21.913-94.74 41.208-146.3c17.232-46.042 74.796-170.377 117.328-208.788c-46.664 37.193-97.65 115.072-134.4 212.138c-21.751 64.3-33.523 125.992-35.44 177.149c-1.267 33.467 1.626 62.488 8.749 84.632L261.414 512c-6.987-18.132-13.399-49.997-11.865-115.295c-.23-2.913-.367-4.806-.367-4.806s-4.242-28.568-10.343-52.035c-2.702-10.417-5.778-19.836-9.007-25.295c-1.664-2.817.18-14.388 4.824-31.527c7.864 13.692 16.348 28.515 19.607 40.643c0 0-6.284-32.33-16.595-51.197c2.26-7.627 4.96-16.057 8.015-25.07c7.605 13.3 15.361 25.955 18.455 38.63c-3.384-16.193-7.965-32.32-15.101-48.307c12.97-67.496 54.719-155.876 99.696-203.59c24.007-25.617 57.092-48.544 86.605-23.015"/></svg> SQLite Editor</h3>
		
        <div class="file-upload w3-margin">
            <h2>Upload SQLite Database</h2>
            <input type="file" id="db-upload" accept=".db,.sqlite,.sqlite3">
            <p class="w3-margin w3-text-indigo">Or drag and drop file here</p>
            <div id="db-info"></div>
        </div>
        
        <div class="editor">
            <div class="query-panel">
                <h2>SQL Query</h2>
                <textarea id="sql-query" placeholder="SELECT * FROM table_name"></textarea>
                <div class="action-buttons">
                    <button id="execute-query" class="w3-btn w3-round w3-blue">Execute</button>
                    <button id="clear-query" class="w3-btn w3-round w3-border w3-border-grey w3-light-grey">Clear</button>
                    <button id="add-row-btn" class="w3-btn w3-round w3-orange" disabled>Add New Row</button>
                    <button id="cancel-changes" class="w3-btn w3-round w3-red" disabled>Cancel Changes</button>
                    <button id="save-changes" class="w3-btn w3-round w3-green" disabled>Save Changes</button>
                </div>
                <div id="query-status"></div>
                
                <div class="new-row-form" id="new-row-form">
                    <h3>Add New Row</h3>
                    <div id="new-row-fields"></div>
                    <button id="confirm-add-row" class="w3-btn w3-round w3-orange">Add Row</button>
                    <button id="cancel-add-row" class="w3-btn w3-round w3-red">Cancel</button>
                </div>
                
                <h2>Results</h2>
                <div class="results-container">
                    <div id="query-results"></div>
                </div>
            </div>
            
            <div class="schema-panel">
                <h2>Database Schema</h2>
                <div id="schema-info">
                    <ul class="table-list" id="table-list"></ul>
                </div>
                
                <div class="export-options">
                    <h3>Export Options</h3>
                    <!--button id="export-sql" class="secondary">Export as SQL</button-->
                    <button id="export-csv" class="w3-btn w3-round w3-green">Export as CSV</button>
                    <button id="export-db" class="w3-btn w3-round w3-green">Export Database</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Initialize SQL.js
        let SQL;
        let db;
        let currentTable = null;
        let currentResults = null;
        let modifiedCells = new Set();
        let newRows = [];
        let rowsToDelete = new Set();
        
        async function initialize() {
            SQL = await initSqlJs({
                locateFile: file => `https://cdnjs.cloudflare.com/ajax/libs/sql.js/1.8.0/${file}`
            });
            
            // Set up drag and drop
            const uploadArea = document.querySelector('.file-upload');
            uploadArea.addEventListener('dragover', (e) => {
                e.preventDefault();
                uploadArea.style.borderColor = '#666';
            });
            
            uploadArea.addEventListener('dragleave', () => {
                uploadArea.style.borderColor = '#ccc';
            });
            
            uploadArea.addEventListener('drop', (e) => {
                e.preventDefault();
                uploadArea.style.borderColor = '#ccc';
                if (e.dataTransfer.files.length) {
                    document.getElementById('db-upload').files = e.dataTransfer.files;
                    loadDatabase(e.dataTransfer.files[0]);
                }
            });
            
            // Set up file input
            document.getElementById('db-upload').addEventListener('change', (e) => {
                if (e.target.files.length) {
                    loadDatabase(e.target.files[0]);
                }
            });
            
            // Set up buttons
            document.getElementById('execute-query').addEventListener('click', executeQuery);
            document.getElementById('clear-query').addEventListener('click', () => {
                document.getElementById('sql-query').value = '';
            });
            document.getElementById('save-changes').addEventListener('click', saveChanges);
            document.getElementById('export-csv').addEventListener('click', exportAsCSV);
            document.getElementById('export-db').addEventListener('click', exportDatabase);
            document.getElementById('add-row-btn').addEventListener('click', showAddRowForm);
            document.getElementById('confirm-add-row').addEventListener('click', confirmAddRow);
            document.getElementById('cancel-add-row').addEventListener('click', hideAddRowForm);
            document.getElementById('cancel-changes').addEventListener('click', cancelChanges);
        }
        
        function loadDatabase(file) {
            const reader = new FileReader();
            reader.onload = function() {
                try {
                    const uint8Array = new Uint8Array(reader.result);
                    db = new SQL.Database(uint8Array);
                    
                    // Update UI
                    document.getElementById('db-info').innerHTML = `
                        <div class="success">Loaded database: ${file.name} (${(file.size / 1024).toFixed(2)} KB)</div>
                    `;
                    
                    // Reset state
                    currentTable = null;
                    currentResults = null;
                    modifiedCells.clear();
                    newRows = [];
                    rowsToDelete.clear();
                    document.getElementById('save-changes').disabled = true;
                    document.getElementById('cancel-changes').disabled = true;
                    document.getElementById('add-row-btn').disabled = true;
                    hideAddRowForm();
                    
                    // Load schema information
                    loadSchema();
                } catch (err) {
                    document.getElementById('db-info').innerHTML = `
                        <div class="error">Error loading database: ${err.message}</div>
                    `;
                }
            };
            reader.readAsArrayBuffer(file);
        }
        
        function loadSchema() {
            if (!db) return;
            
            try {
                // Get all tables
                const tables = db.exec(`
                    SELECT name FROM sqlite_schema 
                    WHERE type='table' 
                    AND name NOT LIKE 'sqlite_%'
                    ORDER BY name;
                `);
                
                const tableList = document.getElementById('table-list');
                tableList.innerHTML = '';
                
                if (tables.length && tables[0].values.length) {
                    tables[0].values.forEach(table => {
                        const tableName = table[0];
                        const li = document.createElement('li');
                        li.textContent = tableName;
                        li.addEventListener('click', () => {
                            document.getElementById('sql-query').value = `SELECT * FROM ${tableName} LIMIT 100;`;
                            currentTable = tableName;
                            executeQuery();
                        });
                        tableList.appendChild(li);
                    });
                } else {
                    tableList.innerHTML = '<li>No tables found</li>';
                }
            } catch (err) {
                console.error('Error loading schema:', err);
            }
        }
        
        function executeQuery() {
            if (!db) {
                showStatus('Please load a database first', 'error');
                return;
            }
            
            const query = document.getElementById('sql-query').value.trim();
            if (!query) {
                showStatus('Please enter a SQL query', 'error');
                return;
            }
            
            try {
                // Check if this is a SELECT query
                const isSelect = query.trim().toUpperCase().startsWith('SELECT');
                
                if (isSelect) {
                    currentResults = db.exec(query);
                    displayResults(currentResults);
                    showStatus('Query executed successfully', 'success');
                    document.getElementById('add-row-btn').disabled = !currentTable;
                } else {
                    // For non-SELECT queries, just execute and show status
                    db.exec(query);
                    showStatus('Query executed successfully', 'success');
                    // If we were viewing a table, refresh it
                    if (currentTable) {
                        document.getElementById('sql-query').value = `SELECT * FROM ${currentTable} LIMIT 100;`;
                        executeQuery();
                    }
                }
                
                // Reset change tracking
                modifiedCells.clear();
                newRows = [];
                rowsToDelete.clear();
                document.getElementById('save-changes').disabled = true;
                document.getElementById('cancel-changes').disabled = true;
                
            } catch (err) {
                showStatus(`Error: ${err.message}`, 'error');
                console.error(err);
            }
        }
        
        function displayResults(results) {
            const resultsDiv = document.getElementById('query-results');
            resultsDiv.innerHTML = '';
            
            if (results.length === 0) {
                resultsDiv.innerHTML = '<p>Query executed successfully (no results returned)</p>';
                return;
            }
            
            results.forEach((result, index) => {
                if (index > 0) {
                    resultsDiv.appendChild(document.createElement('hr'));
                }
                
                const table = document.createElement('table');
                table.dataset.resultIndex = index;
                
                // Create header
                const thead = document.createElement('thead');
                const headerRow = document.createElement('tr');
                result.columns.forEach(column => {
                    const th = document.createElement('th');
                    th.textContent = column;
                    headerRow.appendChild(th);
                });
                
                // Add action column header if this is a table view
                if (currentTable) {
                    const actionTh = document.createElement('th');
                    actionTh.textContent = 'Actions';
                    headerRow.appendChild(actionTh);
                }
                
                thead.appendChild(headerRow);
                table.appendChild(thead);
                
                // Create body
                const tbody = document.createElement('tbody');
                
                // Display new rows first
                newRows.forEach((newRow, newRowIndex) => {
                    const tr = document.createElement('tr');
                    tr.classList.add('new-row');
                    tr.dataset.isNew = 'true';
                    tr.dataset.newRowIndex = newRowIndex;
                    
                    result.columns.forEach(column => {
                        const td = document.createElement('td');
                        td.dataset.columnName = column;
                        td.textContent = newRow[column] !== undefined ? newRow[column] : 'NULL';
                        tr.appendChild(td);
                    });
                    
                    // Add delete button for new rows
                    if (currentTable) {
                        const actionTd = document.createElement('td');
                        actionTd.className = 'action-cell';
                        const deleteBtn = document.createElement('button');
                        deleteBtn.className = 'w3-btn w3-red';
                        deleteBtn.textContent = 'Delete';
                        deleteBtn.addEventListener('click', () => deleteNewRow(newRowIndex));
                        actionTd.appendChild(deleteBtn);
                        tr.appendChild(actionTd);
                    }
                    
                    tbody.appendChild(tr);
                });
                
                // Display existing rows
                result.values.forEach((row, rowIndex) => {
                    // Skip rows marked for deletion
                    if (rowsToDelete.has(rowIndex)) return;
                    
                    const tr = document.createElement('tr');
                    tr.dataset.rowIndex = rowIndex;
                    
                    row.forEach((cell, cellIndex) => {
                        const td = document.createElement('td');
                        td.dataset.columnName = result.columns[cellIndex];
                        if (currentTable) {
                            // Make cells editable if we're viewing a table
                            td.contentEditable = true;
                            td.classList.add('editable');
                            td.addEventListener('focus', () => {
                                td.dataset.originalValue = cell !== null ? cell.toString() : 'NULL';
                            });
                            td.addEventListener('blur', (e) => {
                                const newValue = e.target.textContent;
                                if (newValue !== td.dataset.originalValue) {
                                    modifiedCells.add(`${index}-${rowIndex}-${cellIndex}`);
                                    tr.classList.add('modified');
                                    updateSaveButtonState();
                                } else {
                                    modifiedCells.delete(`${index}-${rowIndex}-${cellIndex}`);
                                    if (!tr.querySelector('.editable[data-original-value]')) {
                                        tr.classList.remove('modified');
                                    }
                                    updateSaveButtonState();
                                }
                            });
                        }
                        td.textContent = cell !== null ? cell : 'NULL';
                        tr.appendChild(td);
                    });
                    
                    // Add action buttons for existing rows
                    if (currentTable) {
                        const actionTd = document.createElement('td');
                        actionTd.className = 'action-cell';
                        
                        const deleteBtn = document.createElement('button');
                        deleteBtn.className = 'w3-btn w3-red';
                        deleteBtn.textContent = 'Delete';
                        deleteBtn.addEventListener('click', () => markRowForDeletion(rowIndex, tr));
                        actionTd.appendChild(deleteBtn);
                        
                        tr.appendChild(actionTd);
                    }
                    
                    tbody.appendChild(tr);
                });
                
                // Show deleted rows at the bottom (struck through)
                if (rowsToDelete.size > 0) {
                    const deletedHeader = document.createElement('tr');
                    const deletedTh = document.createElement('th');
                    deletedTh.colSpan = result.columns.length + (currentTable ? 1 : 0);
                    deletedTh.textContent = `Marked for deletion (${rowsToDelete.size} rows)`;
                    deletedHeader.appendChild(deletedTh);
                    tbody.appendChild(deletedHeader);
                    
                    result.values.forEach((row, rowIndex) => {
                        if (rowsToDelete.has(rowIndex)) {
                            const tr = document.createElement('tr');
                            tr.classList.add('marked-for-deletion');
                            tr.dataset.rowIndex = rowIndex;
                            
                            row.forEach((cell, cellIndex) => {
                                const td = document.createElement('td');
                                td.textContent = cell !== null ? cell : 'NULL';
                                tr.appendChild(td);
                            });
                            
                            // Add restore button for deleted rows
                            if (currentTable) {
                                const actionTd = document.createElement('td');
                                actionTd.className = 'action-cell';
                                
                                const restoreBtn = document.createElement('button');
                                restoreBtn.className = 'info';
                                restoreBtn.textContent = 'Restore';
                                restoreBtn.addEventListener('click', () => unmarkRowForDeletion(rowIndex));
                                actionTd.appendChild(restoreBtn);
                                
                                tr.appendChild(actionTd);
                            }
                            
                            tbody.appendChild(tr);
                        }
                    });
                }
                
                table.appendChild(tbody);
                resultsDiv.appendChild(table);
            });
        }
        
        function updateSaveButtonState() {
            const hasChanges = modifiedCells.size > 0 || newRows.length > 0 || rowsToDelete.size > 0;
            document.getElementById('save-changes').disabled = !hasChanges;
            document.getElementById('cancel-changes').disabled = !hasChanges;
        }
        
        function markRowForDeletion(rowIndex, trElement) {
            rowsToDelete.add(rowIndex);
            updateSaveButtonState();
            
            // If the row was modified, remove those modifications
            modifiedCells.forEach(cellId => {
                const [resultIndex, modifiedRowIndex] = cellId.split('-').map(Number);
                if (modifiedRowIndex === rowIndex) {
                    modifiedCells.delete(cellId);
                }
            });
            
            // Redisplay results to show the row in the deleted section
            displayResults(currentResults);
            showStatus('Row marked for deletion (not saved yet)', 'warning-message');
        }
        
        function unmarkRowForDeletion(rowIndex) {
            rowsToDelete.delete(rowIndex);
            updateSaveButtonState();
            displayResults(currentResults);
        }
        
        function deleteNewRow(newRowIndex) {
            newRows.splice(newRowIndex, 1);
            updateSaveButtonState();
            displayResults(currentResults);
        }
        
        function showAddRowForm() {
            if (!currentTable || !currentResults || currentResults.length === 0) return;
            
            const columns = currentResults[0].columns;
            const form = document.getElementById('new-row-fields');
            form.innerHTML = '';
            
            columns.forEach(column => {
                const div = document.createElement('div');
                div.innerHTML = `
                    <label>${column}:</label>
                    <input type="text" id="new-${column}" placeholder="Enter value for ${column}">
                `;
                form.appendChild(div);
            });
            
            document.getElementById('new-row-form').style.display = 'block';
        }
        
        function hideAddRowForm() {
            document.getElementById('new-row-form').style.display = 'none';
        }
        
        function confirmAddRow() {
            if (!currentTable || !currentResults || currentResults.length === 0) return;
            
            const columns = currentResults[0].columns;
            const newRow = {};
            
            columns.forEach(column => {
                const input = document.getElementById(`new-${column}`);
                newRow[column] = input.value.trim() === '' ? null : input.value;
            });
            
            newRows.push(newRow);
            updateSaveButtonState();
            displayResults(currentResults);
            hideAddRowForm();
            showStatus('New row added (not saved yet)', 'success');
        }
        
        function cancelChanges() {
            if (confirm('Are you sure you want to discard all unsaved changes?')) {
                modifiedCells.clear();
                newRows = [];
                rowsToDelete.clear();
                updateSaveButtonState();
                displayResults(currentResults);
                showStatus('All changes discarded', 'warning-message');
            }
        }
        
        function saveChanges() {
            if (!db || !currentTable || (!modifiedCells.size && !newRows.length && !rowsToDelete.size)) {
                showStatus('No changes to save', 'error');
                return;
            }
            
            try {
                // Process modified cells
                modifiedCells.forEach(cellId => {
                    const [resultIndex, rowIndex, cellIndex] = cellId.split('-').map(Number);
                    const result = currentResults[resultIndex];
                    const table = document.querySelector(`table[data-result-index="${resultIndex}"]`);
                    const row = table.querySelector(`tr[data-row-index="${rowIndex}"]`);
                    const cell = row.querySelector(`td[data-column-name="${result.columns[cellIndex]}"]`);
                    
                    const newValue = cell.textContent === 'NULL' ? null : cell.textContent;
                    const primaryKey = findPrimaryKeyColumn(result);
                    
                    if (!primaryKey) {
                        throw new Error("Couldn't determine primary key for updates");
                    }
                    
                    // Find the primary key value for this row
                    const pkIndex = result.columns.indexOf(primaryKey);
                    if (pkIndex === -1) {
                        throw new Error("Primary key column not found in results");
                    }
                    
                    const pkValue = currentResults[resultIndex].values[rowIndex][pkIndex];
                    
                    // Build and execute UPDATE statement
                    const updateQuery = `UPDATE ${currentTable} SET ${result.columns[cellIndex]} = ? WHERE ${primaryKey} = ?`;
                    db.run(updateQuery, [newValue, pkValue]);
                });
                
                // Process new rows
                if (newRows.length > 0) {
                    const columns = currentResults[0].columns;
                    
                    newRows.forEach(row => {
                        const columnNames = [];
                        const placeholders = [];
                        const values = [];
                        
                        columns.forEach(col => {
                            if (row[col] !== undefined) {
                                columnNames.push(col);
                                placeholders.push('?');
                                values.push(row[col]);
                            }
                        });
                        
                        const insertQuery = `INSERT INTO ${currentTable} (${columnNames.join(', ')}) VALUES (${placeholders.join(', ')})`;
                        db.run(insertQuery, values);
                    });
                }
                
                // Process deleted rows
                if (rowsToDelete.size > 0) {
                    const result = currentResults[0];
                    const primaryKey = findPrimaryKeyColumn(result);
                    
                    if (!primaryKey) {
                        throw new Error("Couldn't determine primary key for deletions");
                    }
                    
                    const pkIndex = result.columns.indexOf(primaryKey);
                    if (pkIndex === -1) {
                        throw new Error("Primary key column not found in results");
                    }
                    
                    rowsToDelete.forEach(rowIndex => {
                        const pkValue = result.values[rowIndex][pkIndex];
                        const deleteQuery = `DELETE FROM ${currentTable} WHERE ${primaryKey} = ?`;
                        db.run(deleteQuery, [pkValue]);
                    });
                }
                
                showStatus(`Successfully saved ${modifiedCells.size} changes, ${newRows.length} new rows, and ${rowsToDelete.size} deletions`, 'success');
                
                // Reset change tracking
                modifiedCells.clear();
                newRows = [];
                rowsToDelete.clear();
                updateSaveButtonState();
                
                // Refresh the view
                if (currentTable) {
                    document.getElementById('sql-query').value = `SELECT * FROM ${currentTable} LIMIT 100;`;
                    executeQuery();
                }
                
            } catch (err) {
                showStatus(`Error saving changes: ${err.message}`, 'error');
                console.error(err);
            }
        }
        
        function findPrimaryKeyColumn(result) {
            // First try to find a column named 'id'
            const idCol = result.columns.find(col => col.toLowerCase() === 'id');
            if (idCol) return idCol;
            
            // Otherwise look for any column that looks like a primary key
            const possiblePKs = result.columns.filter(col => 
                col.toLowerCase().includes('id') || 
                col.toLowerCase().includes('key') ||
                col.toLowerCase().includes('pk')
            );
            
            return possiblePKs.length ? possiblePKs[0] : result.columns[0];
        }
        
        function exportAsSQL() {
            if (!db) {
                showStatus('No database loaded', 'error');
                return;
            }
            
            try {
                const exportData = db.export();
                const blob = new Blob([exportData], { type: 'application/x-sqlite3' });
                const url = URL.createObjectURL(blob);
                
                const a = document.createElement('a');
                a.href = `data:text/plain;charset=utf-8,${encodeURIComponent(db.exec("SELECT sql FROM sqlite_master").map(r => r.values.join('\n')).join('\n\n'))}`;
                a.download = 'database_export.sql';
                a.click();
                
                showStatus('Database exported as SQL', 'success');
            } catch (err) {
                showStatus(`Error exporting SQL: ${err.message}`, 'error');
            }
        }
        
        function exportAsCSV() {
            if (!currentResults || currentResults.length === 0) {
                showStatus('No results to export', 'error');
                return;
            }
            
            try {
                const result = currentResults[0];
                const csvData = [
                    result.columns.join(','),
                    ...result.values.map(row => 
                        row.map(cell => 
                            cell === null ? 'NULL' : 
                            typeof cell === 'string' ? `"${cell.replace(/"/g, '""')}"` : cell
                        ).join(',')
                    )
                ].join('\n');
                
                const a = document.createElement('a');
                a.href = `data:text/csv;charset=utf-8,${encodeURIComponent(csvData)}`;
                a.download = 'data_export.csv';
                a.click();
                
                showStatus('Data exported as CSV', 'success');
            } catch (err) {
                showStatus(`Error exporting CSV: ${err.message}`, 'error');
            }
        }
        
        function exportDatabase() {
            if (!db) {
                showStatus('No database loaded', 'error');
                return;
            }
            
            try {
                const exportData = db.export();
                const blob = new Blob([exportData], { type: 'application/x-sqlite3' });
                const url = URL.createObjectURL(blob);
                
                const a = document.createElement('a');
                a.href = url;
                a.download = 'modified_database.sqlite';
                a.click();
                
                showStatus('Database exported', 'success');
            } catch (err) {
                showStatus(`Error exporting database: ${err.message}`, 'error');
            }
        }
        
        function showStatus(message, type) {
            const statusDiv = document.getElementById('query-status');
            statusDiv.innerHTML = `<div class="${type}">${message}</div>`;
        }
        
        // Initialize the application
        initialize().catch(err => {
            console.error('Initialization error:', err);
            document.getElementById('db-info').innerHTML = `
                <div class="error">Failed to initialize SQL.js: ${err.message}</div>
            `;
        });
    </script>
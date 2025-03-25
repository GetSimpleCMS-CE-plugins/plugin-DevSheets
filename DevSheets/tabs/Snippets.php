<h2>Tips / Tricks</h2>
<p>Tips / Tricks tab content.</p>

<h4>Automatically updating copyright year in your footers</h4>	

<p class="title">Output as:<b> © <?php echo date("Y"); ?></b></p>
<pre><code class="language-php" data-prismjs-copy="Copy">© &lt;?php echo date("Y"); ?></code></pre>

<p class="title">Output as:<b> 
© <?php
	$fromYear = 2008;
	$thisYear = (int)date('Y');
	echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');
?> Company.</b>
</p>
<pre><code class="language-php" data-prismjs-copy="Copy">&copy; &lt;?php
	$fromYear = 2008;
	$thisYear = (int)date('Y');
	echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');
?> Company.
</code></pre>

<hr class="style-eight">

<h4>Useful .htaccess Snippets</h4>

<p class="title">Force www </p>
<pre><code class="language-php" data-prismjs-copy="Copy">RewriteEngine on
RewriteCond %{HTTP_HOST} ^example\.com [NC]
RewriteRule ^(.*)$ http://www.example.com/$1 [L,R=301,NC]
</code></pre>

<p class="title">Force non-www </p>
<pre><code class="language-php" data-prismjs-copy="Copy">RewriteEngine on
RewriteCond %{HTTP_HOST} ^www\.example\.com [NC]
RewriteRule ^(.*)$ http://example.com/$1 [L,R=301]
</code></pre>

<p class="title">Redirect a Single Page </p>
<pre><code class="language-php" data-prismjs-copy="Copy">Redirect 301 /oldpage.html http://www.example.com/newpage.html
Redirect 301 /oldpage2.html http://www.example.com/folder/
</code></pre>
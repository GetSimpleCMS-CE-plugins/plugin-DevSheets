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

<h4>CSS version</h4>

<p class="title">Add random CSS version to prevent caching</p>
<pre><code class="language-php line-numbers" data-prismjs-copy="">&lt;link href="&lt;?php get_theme_url(); ?>/css/custom.css<mark>?v=&lt;?= rand(0,99999) ?></mark>" rel="stylesheet">
</code></pre>

<hr class="style-eight">

<h4>Useful .htaccess Snippets</h4>



<h2 id="-optimized-htaccess-for-getsimple-cms-and-similar-php-sites-">🧾 Optimized .htaccess for GetSimple CMS (and similar PHP sites)</h2>
<p>This file provides a <strong>secure, fast, and SEO-friendly configuration</strong> for websites running on Apache — designed especially for <strong>GetSimple CMS</strong>, but compatible with almost any PHP site.</p>
<h3 id="-1-core-settings-seo-friendly-urls">⚙️ 1. Core settings &amp; SEO-friendly URLs</h3>
<p>Handles clean URLs and redirects visitors to the secure, canonical version of each page.</p>
<ul>
<li><strong>Forces HTTPS</strong> if SSL is available.  </li>
<li><strong>Forces WWW</strong> (Optional).  </li>
<li><strong>Adds a trailing slash</strong> to URLs (<code>/about → /about/</code>) for consistency and SEO.  </li>
</ul>
<h3 id="-2-security-headers">🔒 2. Security Headers</h3>
<p>Adds modern browser protection using HTTP headers.</p>
<table>
<thead>
<tr>
<th>Header</th>
<th>Purpose</th>
</tr>
</thead>
<tbody>
<tr>
<td><strong>Strict-Transport-Security (HSTS)</strong></td>
<td>Forces browsers to always use HTTPS once they’ve connected securely.</td>
</tr>
<tr>
<td><strong>Content-Security-Policy (CSP)</strong></td>
<td>Restricts which sources can load scripts, styles, images, etc.</td>
</tr>
<tr>
<td><strong>X-Frame-Options</strong></td>
<td>Prevents your site from being embedded in iframes (anti-clickjacking).</td>
</tr>
<tr>
<td><strong>X-Content-Type-Options</strong></td>
<td>Stops MIME-type sniffing.</td>
</tr>
<tr>
<td><strong>Referrer-Policy</strong></td>
<td>Limits how much referrer info browsers send.</td>
</tr>
<tr>
<td><strong>X-XSS-Protection</strong></td>
<td>Enables basic legacy browser protection.</td>
</tr>
</tbody>
</table>
<blockquote>
<p>💡 Tip: The included CSP allows safe embedding of Google Maps, OpenStreetMap, and Google Fonts.</p>
</blockquote>
<h3 id="-3-compression">🚀 3. Compression</h3>
<p>Improves performance by shrinking text-based files before they’re sent to browsers.</p>
<ul>
<li><strong>mod_deflate</strong> → Gzip compression (widely supported).  </li>
<li><strong>mod_brotli</strong> → Brotli compression (modern browsers, even smaller files).</li>
</ul>
<h3 id="-4-browser-caching">🧠 4. Browser Caching</h3>
<p>Sets how long browsers should keep static assets.</p>
<ul>
<li><strong>HTML</strong>: no cache (changes frequently).  </li>
<li><strong>Images, JS, CSS, Fonts</strong>: cached for months or a year.  </li>
<li>Adds <code>Cache-Control: immutable</code> for assets that rarely change.</li>
</ul>
<blockquote>
<p>💡 This dramatically improves load time for returning visitors.</p>
</blockquote>
<h3 id="-5-automatic-webp-avif-fallback">🖼️ 5. Automatic WebP / AVIF Fallback</h3>
<p>If your server has modern images available (e.g., <code>photo.webp</code>), browsers that support those formats will automatically receive the smaller version.<br>Older browsers will still get the original JPEG/PNG.</p>
<h3 id="-6-hotlink-protection">🚫 6. Hotlink Protection</h3>
<p>Prevents other websites from embedding or “stealing” your images and using your bandwidth.</p>
<ul>
<li>Only allows image loading from <code>YourDomain.com</code>.  </li>
<li>Other domains trying to embed images will get a <strong>403 Forbidden</strong> error.</li>
</ul>
<blockquote>
<p>🔧 Change <code>YourDomain.com</code> to your real domain.</p>
</blockquote>

<h3 id="-benefits">✅ Benefits</h3>
<ul>
<li><strong>Faster page loads</strong> (compression + caching)  </li>
<li><strong>Better SEO</strong> (canonical URLs, HTTPS, and performance)  </li>
<li><strong>Improved security</strong> (headers, HSTS, CSP, anti-hotlinking)  </li>
<li><strong>Modern browser support</strong> (WebP/AVIF, Brotli)</li>
</ul>
<h3 id="-testing-checklist">🧪 Testing checklist</h3>
<ul>
<li>Run through <a href="https://developer.mozilla.org/en-US/observatory" target="_blank">Mozilla Observatory</a> → target grade A+ possible.</li>
<li>Check <a href="https://securityheaders.com/" target="_blank">SecurityHeaders.com</a> for confirmation.</li>
<li>Check <a href="https://pagespeed.web.dev/" target="_blank">PageSpeed Insights</a> → “Reduce unused JavaScript/CSS” and “Serve images in next-gen formats” should improve.</li>
<li>Clear browser cache → verify via browser DevTools → Network → Response Headers.</li>
</ul>
<h3 id="-how-to-use">💡 How to Use</h3>
<ol>
<li>Back up your current <span class="file">.htaccess</span>.  </li>
<li>Replace lines <a href="https://github.com/GetSimpleCMS-CE/GetSimpleCMS-CE/blob/5486c10c75111e93404413fea6408f53dbffd930/temp.htaccess#L1-L22" target="_blank">1 - 22</a> of your current version with the rules below.  </li>
<li>Update:<ul>
<li><code>YourDomain.com</code> → your real domain name.</li>
<li>CSP sources (add any extra CDNs or embeds you use).  </li>
</ul>
</li>
<li>Test on both <strong>HTTP and HTTPS</strong>.  </li>
<li>Check your browser console for any CSP warnings and adjust if needed.</li>
</ol>



<pre><code class="language-php" data-prismjs-copy="Copy"># ==========================================================
# GetSimple CMS Optimized .htaccess
# Security • Performance • Compatibility • SEO
# The following require certain allow overrides, if getting 500 error comment them out one by one 
# can be resolved in apache httpd.conf to ensure security alternatives
# ==========================================================

# ----------------------------------------------------------
# 1. Core settings and SEO-friendly URLs
# ----------------------------------------------------------
&lt;IfModule mod_rewrite.c>
  RewriteEngine On

  # Optional: Force HTTPS
  RewriteCond %{HTTPS} !=on
  RewriteRule ^ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]

  # Optional: Force WWW
#  RewriteCond %{HTTP_HOST} !^www\. [NC]
#  RewriteCond %{HTTP_HOST} !^$
#  RewriteRule ^(.*)$ https://www.%{HTTP_HOST}/$1 [R=301,L]
  
  # Optional: Force No WWW
#  RewriteCond %{HTTP_HOST} ^www\.(.+)$ [NC]
#  RewriteRule ^ https://%1%{REQUEST_URI} [L,R=301]

  # Canonical trailing slash for consistency (/about → /about/)
  RewriteCond %{REQUEST_FILENAME} !-f
  RewriteCond %{REQUEST_URI} !(.*)/$
  RewriteCond %{REQUEST_URI} !\.
  RewriteRule ^(.*)$ /$1/ [L,R=301]
&lt;/IfModule>

# ----------------------------------------------------------
# 2. Security Headers
# ----------------------------------------------------------
&lt;IfModule mod_headers.c>
  # Prevent MIME sniffing
  Header always set X-Content-Type-Options "nosniff"

  # Prevent clickjacking
  Header always set X-Frame-Options "SAMEORIGIN"

  # Enforce HTTPS (HSTS)
  Header always set Strict-Transport-Security "max-age=31536000; includeSubDomains; preload"

  # Content Security Policy (CSP)
  Header always set Content-Security-Policy "default-src 'self'; script-src 'self' 'unsafe-inline' 'unsafe-eval' https://www.google.com https://maps.googleapis.com https://cdn.jsdelivr.net https://unpkg.com; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; img-src 'self' data: https://www.google.com https://maps.googleapis.com https://tile.openstreetmap.org; font-src 'self' https://fonts.gstatic.com; frame-src 'self' https://www.google.com https://maps.googleapis.com https://www.openstreetmap.org https://www.youtube.com https://player.vimeo.com; media-src 'self' data:; object-src 'none'; base-uri 'self'; form-action 'self'; connect-src 'self';"
	
  # Referrer policy
  Header always set Referrer-Policy "strict-origin-when-cross-origin"

  # XSS Protection (legacy)
  Header always set X-XSS-Protection "1; mode=block"
&lt;/IfModule>

# ----------------------------------------------------------
# 3. Compression
# ----------------------------------------------------------
&lt;IfModule mod_deflate.c>
  AddOutputFilterByType DEFLATE text/plain text/html text/xml text/css text/javascript application/javascript application/json application/xml
&lt;/IfModule>

&lt;IfModule mod_brotli.c>
  AddOutputFilterByType BROTLI_COMPRESS text/plain text/html text/xml text/css text/javascript application/javascript application/json application/xml
&lt;/IfModule>

# ----------------------------------------------------------
# 4. Caching
# ----------------------------------------------------------
&lt;IfModule mod_expires.c>
  ExpiresActive On

  # HTML - no caching
  ExpiresByType text/html "access plus 0 seconds"

  # Static assets - long-term cache
  ExpiresByType image/jpeg "access plus 1 year"
  ExpiresByType image/png "access plus 1 year"
  ExpiresByType image/gif "access plus 1 year"
  ExpiresByType image/webp "access plus 1 year"
  ExpiresByType image/avif "access plus 1 year"
  ExpiresByType text/css "access plus 3 months"
  ExpiresByType application/javascript "access plus 3 months"
  ExpiresByType font/woff2 "access plus 1 year"
  ExpiresByType font/woff "access plus 1 year"
  ExpiresByType font/ttf "access plus 1 year"
  ExpiresByType font/otf "access plus 1 year"
&lt;/IfModule>

&lt;IfModule mod_headers.c>
  &lt;FilesMatch "\.(js|css|jpg|jpeg|png|gif|webp|avif|svg|woff2?)$">
    Header set Cache-Control "public, max-age=31536000, immutable"
  &lt;/FilesMatch>
&lt;/IfModule>

# ----------------------------------------------------------
# 5. Automatic WebP / AVIF Fallback
# ----------------------------------------------------------
&lt;IfModule mod_rewrite.c>
  # Serve .webp if supported
  RewriteCond %{HTTP_ACCEPT} image/webp
  RewriteCond %{REQUEST_FILENAME}.webp -f
  RewriteRule (.+)\.(jpe?g|png)$ $1.$2.webp [T=image/webp,E=accept:1]

  # Serve .avif if supported
  RewriteCond %{HTTP_ACCEPT} image/avif
  RewriteCond %{REQUEST_FILENAME}.avif -f
  RewriteRule (.+)\.(jpe?g|png)$ $1.$2.avif [T=image/avif,E=accept:1]
&lt;/IfModule>

# ----------------------------------------------------------
# 6. Hotlink Protection (update "YourDomain\.com" with your domain)
# ----------------------------------------------------------
#&lt;IfModule mod_rewrite.c>
#  RewriteCond %{HTTP_REFERER} !^$
#  RewriteCond %{HTTP_REFERER} !^https?://(www\.)?YourDomain\.com [NC]
#  RewriteRule \.(jpg|jpeg|png|gif|webp|avif)$ - [F]
#&lt;/IfModule>

# ----------------------------------------------------------
</code></pre>

<p class="title">Redirect a Single Page </p>
<pre><code class="language-php" data-prismjs-copy="Copy">Redirect 301 /oldpage.html http://www.example.com/newpage.html
Redirect 301 /oldpage2.html http://www.example.com/folder/
</code></pre>

<p class="title">Include .html extension in FancyURLs.<br> Use <span class="file">%slug%.html</span> and add the following below the <span class="file">RewriteBase</span> line, near the end of your <b>.htaccess</b>:</p>
<pre><code class="language-php" data-prismjs-copy="Copy"># Handle .html requests
RewriteRule ^([A-Za-z0-9_-]+)\.html$ index.php?id=$1 [QSA,L]

# Handle extensionless requests (except for existing files/directories)
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^([A-Za-z0-9_-]+)$ $1.html [L,R=301]
</code></pre>

<hr class="style-eight">

<h4>Useful CSS</h4>

<p class="title">Common CSS Resets</p>
<pre><code class="language-css" data-prismjs-copy="">    .reset-this {
        animation : none;
        animation-delay : 0;
        animation-direction : normal;
        animation-duration : 0;
        animation-fill-mode : none;
        animation-iteration-count : 1;
        animation-name : none;
        animation-play-state : running;
        animation-timing-function : ease;
        backface-visibility : visible;
        background : 0;
        background-attachment : scroll;
        background-clip : border-box;
        background-color : transparent;
        background-image : none;
        background-origin : padding-box;
        background-position : 0 0;
        background-position-x : 0;
        background-position-y : 0;
        background-repeat : repeat;
        background-size : auto auto;
        border : 0;
        border-style : none;
        border-width : medium;
        border-color : inherit;
        border-bottom : 0;
        border-bottom-color : inherit;
        border-bottom-left-radius : 0;
        border-bottom-right-radius : 0;
        border-bottom-style : none;
        border-bottom-width : medium;
        border-collapse : separate;
        border-image : none;
        border-left : 0;
        border-left-color : inherit;
        border-left-style : none;
        border-left-width : medium;
        border-radius : 0;
        border-right : 0;
        border-right-color : inherit;
        border-right-style : none;
        border-right-width : medium;
        border-spacing : 0;
        border-top : 0;
        border-top-color : inherit;
        border-top-left-radius : 0;
        border-top-right-radius : 0;
        border-top-style : none;
        border-top-width : medium;
        bottom : auto;
        box-shadow : none;
        box-sizing : content-box;
        caption-side : top;
        clear : none;
        clip : auto;
        color : inherit;
        columns : auto;
        column-count : auto;
        column-fill : balance;
        column-gap : normal;
        column-rule : medium none currentColor;
        column-rule-color : currentColor;
        column-rule-style : none;
        column-rule-width : none;
        column-span : 1;
        column-width : auto;
        content : normal;
        counter-increment : none;
        counter-reset : none;
        cursor : auto;
        direction : ltr;
        display : inline;
        empty-cells : show;
        float : none;
        font : normal;
        font-family : inherit;
        font-size : medium;
        font-style : normal;
        font-variant : normal;
        font-weight : normal;
        height : auto;
        hyphens : none;
        left : auto;
        letter-spacing : normal;
        line-height : normal;
        list-style : none;
        list-style-image : none;
        list-style-position : outside;
        list-style-type : disc;
        margin : 0;
        margin-bottom : 0;
        margin-left : 0;
        margin-right : 0;
        margin-top : 0;
        max-height : none;
        max-width : none;
        min-height : 0;
        min-width : 0;
        opacity : 1;
        orphans : 0;
        outline : 0;
        outline-color : invert;
        outline-style : none;
        outline-width : medium;
        overflow : visible;
        overflow-x : visible;
        overflow-y : visible;
        padding : 0;
        padding-bottom : 0;
        padding-left : 0;
        padding-right : 0;
        padding-top : 0;
        page-break-after : auto;
        page-break-before : auto;
        page-break-inside : auto;
        perspective : none;
        perspective-origin : 50% 50%;
        position : static;
        /* May need to alter quotes for different locales (e.g fr) */
        quotes : '\201C' '\201D' '\2018' '\2019';
        right : auto;
        tab-size : 8;
        table-layout : auto;
        text-align : inherit;
        text-align-last : auto;
        text-decoration : none;
        text-decoration-color : inherit;
        text-decoration-line : none;
        text-decoration-style : solid;
        text-indent : 0;
        text-shadow : none;
        text-transform : none;
        top : auto;
        transform : none;
        transform-style : flat;
        transition : none;
        transition-delay : 0s;
        transition-duration : 0s;
        transition-property : none;
        transition-timing-function : ease;
        unicode-bidi : normal;
        vertical-align : baseline;
        visibility : visible;
        white-space : normal;
        widows : 0;
        width : auto;
        word-spacing : normal;
        z-index : auto;
        /* basic modern patch */
        all: initial;
        all: unset;
    }
    /* basic modern patch */
    #reset-this-root {
        all: initial;
        * {
            all: unset;
        }
    }
</code></pre>


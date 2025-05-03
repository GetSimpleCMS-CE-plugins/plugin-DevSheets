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

<h2>Placeholders</h2>
<p>Various template placeholders. More info can be found by visiting the <a href="https://github.com/GetSimpleCMS-CE/GetSimpleCMS-CE/wiki/Template-Tags" target="_blank">Wiki <span class="link"></span></a>.</p>

<h4>Common Template Tags:</h4>	
<pre><code class="language-php" data-prismjs-copy="">&lt;?php get_header(); ?>

&lt;?php get_site_name(); ?>

&lt;?php get_site_url(); ?>

&lt;?php get_theme_url(); ?>

&lt;?php get_navigation(); ?>

&lt;?php get_page_title(); ?>

&lt;?php get_page_content(); ?>

&lt;?php get_footer(); ?>
</code></pre>

<h4>Commonly Substituted Tags:</h4>
<pre><code class="language-diff-php diff-highlight" data-prismjs-copy="">- &lt;?php get_header(); ?>
+ &lt;?php get_seoheader();?> &lt;!-- BetterSEO plugin-->

- &lt;?php get_navigation(); ?>
+ &lt;?php get_i18n_navigation(return_page_slug()); ?> &lt;!-- I18N Navigation plugin-->
</code></pre>

<h4>Include a Seperate File:</h4>
<pre><code class="language-php" data-prismjs-copy="">&lt;?php include('common.header.inc.php'); ?>

&lt;?php include('common.footer.inc.php'); ?>
</code></pre>

<hr class="style-eight">

<h4>Conditional Includes:</h4>

<p class="title">By Template</p>
<pre><code class="language-php" data-prismjs-copy="">&lt;?php if ($template_file == 'name-of-template.php') { ?>
	xyz
&lt;?php } ?>
</code></pre>

<p class="title">By Slug</p>
<pre><code class="language-php" data-prismjs-copy="">&lt;?php if (return_page_slug() == 'contact') { ?>
	123
&lt;?php } ?>
</code></pre>

<p class="title">As an Array</p>
<pre><code class="language-php" data-prismjs-copy="">&lt;?php $slugs = ['index','services','contact']; 
if(in_array(return_page_slug(),$slugs)){  ?>
	xyz
&lt;?php } ?>
</code></pre>

<p class="title">If Else</p>
<pre><code class="language-php" data-prismjs-copy="">&lt;?php if (return_page_slug() == 'index') { ?>
	456
&lt;?php } else{ ?>
	fgh
&lt;?php } ?>
</code></pre>

<hr class="style-eight">

<h4>Custom 404 Page:</h4>
<p>To add a customize 404 page, create a new page with slug "<b>404</b>" and the template of your choice. <br>This will override the default version.</p>

<hr class="style-eight">

<h4>Basic Template Example:</h4>
<p> </p>
<pre><code class="language-php line-numbers" data-prismjs-copy="Copy this template">&lt;!DOCTYPE html>
&lt;html lang="en">
	&lt;head>
		&lt;meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		&lt;base href=" <mark>&lt;?php get_site_url(); ?></mark> ">
		&lt;title> <mark>&lt;?php get_site_name(); ?></mark> &lt;/title>
		&lt;meta name="description" content=" <mark>&lt;?php get_page_meta_desc(); ?></mark> ">
		&lt;meta http-equiv="last-modified" content=" <mark>&lt;?php get_page_date('F jS, Y'); ?></mark> ">
		
		&lt;link rel="stylesheet" href="<mark>&lt;?php get_theme_url(); ?></mark>/css/MyStyleSheet.css">

		<mark>&lt;?php get_header(); ?></mark>
	&lt;/head>
	
	&lt;body>
		&lt;header>
			&lt;nav>
				&lt;ul>
					<mark>&lt;?php get_navigation(); ?></mark>
				&lt;/ul>
			&lt;nav>
			
			&lt;div id="banner">
				&lt;img src="<mark>&lt;?php get_theme_url(); ?></mark>/images/main-banner.jpg" >
			&lt;/div>
		&lt;/header>
		
		&lt;div class="container" id="welcome">
			&lt;h1> <mark>&lt;?php get_page_title(); ?></mark> &lt;h1>
			<mark>&lt;?php get_page_content(); ?></mark>
		&lt;/div>
	
		&lt;footer> Page last updated: <mark>&lt;?php get_page_date('F jS, Y'); ?></mark> &lt;/footer>
	&lt;/body>
	
	&lt;script src="<mark>&lt;?php get_theme_url(); ?></mark>/js/MyScripts.js">&lt;/script>

	<mark>&lt;?php get_footer(); ?></mark>
&lt;/html>




</code></pre>

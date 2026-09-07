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

<h4>Commonly Used Optional Tags:</h4>
<pre><code class="language-php" data-prismjs-copy="">&lt;?php get_page_date(); ?>
&lt;?php get_page_date('F jS, Y'); ?> // https://www.php.net/manual/en/function.date.php

&lt;?php get_data_uploads(); ?>

&lt;?php get_breadcrumbs('title', ' > ', 'Home'); ?>
&lt;?php get_breadcrumbs('menu', ' > ', 'Home'); ?>

&lt;?php get_sibling_pages(); ?>

&lt;?php get_adjacent_pages(); ?>

&lt;?php get_child_pages(); ?>
&lt;?php get_child_pages('services'); ?> // children of page "services"

&lt;?php theme_asset('css/style.css'); ?>¡
</code></pre>

<h4>Theme Image with Paramaters:</h4>
<pre><code class="language-php" data-prismjs-copy="">&lt;?php theme_image('logo.png', 'Site Logo', 'logo'); ?>
</code></pre>

<p>Output</p>
<pre><code class="language-html" data-prismjs-copy="">&lt;img src="http://yoursite.com/theme/mytheme/images/logo.png" alt="Site Logo" class="logo" />
</code></pre>

<hr class="style-eight">

<h4>Conditional Includes:</h4>

<p class="title">By Template</p>
<pre><code class="language-php" data-prismjs-copy="Copy this code">&lt;?php if ($template_file == 'name-of-template.php') { ?>
	xyz
&lt;?php } ?>
</code></pre>

<p class="title">By Slug</p>
<pre><code class="language-php" data-prismjs-copy="Copy this code">&lt;?php if (return_page_slug() == 'contact') { ?>
	123
&lt;?php } ?>
</code></pre>

<p class="title">As an Array</p>
<pre><code class="language-php" data-prismjs-copy="Copy this code">&lt;?php $slugs = ['index','services','contact']; 
if(in_array(return_page_slug(),$slugs)){  ?>
	xyz
&lt;?php } ?>
</code></pre>

<p class="title">If Else</p>
<pre><code class="language-php" data-prismjs-copy="Copy this code">&lt;?php if (return_page_slug() == 'index') { ?>
	123
&lt;?php } else{ ?>
	xyz
&lt;?php } ?>
</code></pre>

<p class="title">Is HomePage</p>
<pre><code class="language-php" data-prismjs-copy="Copy this code">&lt;?php if (is_homepage()) : ?>
	&lt;div class="hero">
		&lt;h1>Welcome to our website!&lt;/h1>
	&lt;/div>
&lt;?php else : ?>
	&lt;div class="page-header">
		&lt;h1>&lt;?php get_page_title(); ?>&lt;/h1>
	&lt;/div>
&lt;?php endif; ?>
</code></pre>

<p class="title">Is Parent</p>
<pre><code class="language-php" data-prismjs-copy="Copy this code">&lt;?php if (is_parent('services')) : ?>
    &lt;div class="services-child-header">
        &lt;p>You are viewing one of our services&lt;/p>
    &lt;/div>
&lt;?php endif; ?>
</code></pre>

<p class="title">If Field Has Content</p>
<pre><code class="language-php" data-prismjs-copy="Copy this code">&lt;?php
	ob_start();
	get_page_content(); // Field 
	$content = trim(ob_get_clean());

	if ($content !== '') {
		echo '&lt;div>';
		echo $content;
		echo '&lt;/div>';
	}
?>

</code></pre>

<p class="title">If Field Has Content, Else</p>
<pre><code class="language-php" data-prismjs-copy="Copy this code">&lt;?php
	ob_start();
	multiFields('Imagen-de-Contenido'); // Field & Value
	$content = trim(ob_get_clean());

	if ($content !== '') {
		echo '&lt;img src="';
		echo $content;
		echo '" alt="" />';
	}else{
		echo '&lt;img src="' . $SITEURL . 'theme/' . $TEMPLATE . '/images/default.jpg" alt="" />';
	}
?>
</code></pre>

<p class="title">If Field with nested content</p>
<pre><code class="language-php" data-prismjs-copy="Copy this code">&lt;?php
$maintitle = r_multiFields('MainTitle');
$subtitle = r_multiFields('SubTitle');

if (trim($maintitle) !== ''): ?>
	&lt;div class="col col-lg-8 text-center fit-videos md-mb-50px sm-mb-30px">

		&lt;?php echo $maintitle; ?>

		&lt;?php if (trim($subtitle) !== ''): ?>
			&lt;div class="text-dark-gray fs-18 fw-600 mt-6">
				&lt;?php echo $subtitle; ?>
			&lt;/div>
		&lt;?php endif; ?>

	&lt;/div>
&lt;?php endif; ?>
</code></pre>

<hr class="style-eight">

<h4>Add custom CSS styleing to ckEditor:</h4>
<p>Add your custom styles to the new <span class="tpl">ckEditor.css</span> file.</p>
<pre><code class="language-diff-php diff-highlight" data-prismjs-copy=""># WYSIWYG Editor Options
define('GSEDITOROPTIONS', '
extraPlugins:"fontawesome5,youtube,codemirror,cmsgrid,colorbutton,oembed,simplebutton,spacingsliders",
disableNativeSpellChecker : false,
- forcePasteAsPlainText : true
+ forcePasteAsPlainText : true,
+ contentsCss : "theme/YOUR_THEME/css/ckEditor.css"
');
</code></pre>

<hr class="style-eight">

<h4>Custom Menu:</h4>
<p>Personalize and add to your themes "<b>functions.php</b>" file.</p>
<p>Replace <span class="tpl">&lt;?php get_navigation(); ?></span> with <span class="cke">&lt;?php get_my_navigation('', 'nav-', false); ?></span> in your theme.</p>


<pre><code class="language-php" data-prismjs-copy="Copy this code">&lt;?php 

function <mark>build_my_menu</mark>($parentId, $menuTree, $currentpage, $classPrefix, $isSubmenu = false, $disableParentLinks = false) {
	if (!isset($menuTree[$parentId])) {
		return '';
	}

	$menu = $isSubmenu ? "\n<ul class=\" subMenu \">\n" : ""; 
	foreach ($menuTree[$parentId] as $page) {
		$url_nav = $page['url'];
		$classes = !empty($page['parent']) ? $classPrefix . $page['parent'] . " " : "";
		$classes .= $classPrefix . $url_nav;
		
		// Check if the current page has sub-pages
		$hasSubmenu = isset($menuTree[$url_nav]);
		if ($hasSubmenu) {
			$classes .= " wSub "; // Add the "with-sub-pages" class to <li>
		}

		// Add a class for <li> elements within a submenu
		if ($isSubmenu) {
			$classes .= " subItem "; // Add the "submenu-item" class to <li>
		} else {
			// Add a class for first-level <li> items
			$classes .= " topL "; // Add the "top-level" class to <li>
		}

		if ($currentpage == $url_nav) {
			$classes .= " current active "; // Add the "current active" class to <li>
		}

		$menuText = !empty($page['menu']) ? $page['menu'] : (!empty($page['title']) ? $page['title'] : $url_nav);
		$pageTitle = !empty($page['title']) ? $page['title'] : $page['menu'];
		
		// Add classes to the <a> element
		$linkClasses = [];
		if (!$isSubmenu) {
			$linkClasses[] = " topL-a "; // Add class to top-level <a>
		}
		if ($hasSubmenu) {
			$linkClasses[] = " wSub-a "; // Add class to <a> with submenus
		}
		if ($isSubmenu) {
			$linkClasses[] = " subItem-a "; // Add class to submenu <a>
		}
		if ($currentpage == $url_nav) {
			$linkClasses[] = " cur-act-a "; // Add class to active <a>
		}

		// Determine if this link should be disabled (parent with children and setting is enabled)
		$isDisabledLink = ($disableParentLinks && $hasSubmenu && !$isSubmenu);
		
		// Build the link
		if ($isDisabledLink) {
			// For disabled parent links, use a span or # with javascript:void(0)
			$href = 'javascript:void(0)';
			$linkClasses[] = " disabled-link ";
		} else {
			$href = find_url($page['url'], $page['parent']);
		}

		$menu .= '<li class="' . trim($classes) . '"><a href="' . $href . '" class="' . implode(" ", $linkClasses) . '" title="' . encode_quotes(cl($pageTitle)) . '"' . ($isDisabledLink ? ' onclick="return false;"' : '') . '>' . strip_decode($menuText) . '</a>';

		// Add submenu if exists
		$subMenu = <mark>build_my_menu</mark>($url_nav, $menuTree, $currentpage, $classPrefix, true, $disableParentLinks);
		if (!empty($subMenu)) {
			$menu .= $subMenu;
		}

		$menu .= "</li>\n";
	}
	$menu .= $isSubmenu ? "</ul>\n" : ""; 
	return $menu;
}

function <mark>get_my_navigation</mark>($currentpage = "", $classPrefix = "", $disableParentLinks = false) { // true/false, Disables parent links
	global $pagesArray, $id;
	if (empty($currentpage)) {
		$currentpage = $id;
	}

	$pagesSorted = subval_sort($pagesArray, 'menuOrder');

	$menuTree = [];
	foreach ($pagesSorted as $page) {
		if ($page['menuStatus'] == 'Y') {
			$parent = !empty($page['parent']) ? $page['parent'] : 0;
			$menuTree[$parent][] = $page;
		}
	}

	if (!empty($menuTree)) {
		$menuHtml = <mark>build_my_menu</mark>(0, $menuTree, $currentpage, $classPrefix, false, $disableParentLinks);
		echo exec_filter('menuitems', $menuHtml);
	} else {
		echo "<!-- No menu items -->";
	}
}
</code></pre>

<hr class="style-eight">

<h4>Custom 404 Page:</h4>
<p>To add a customize 404 page, create a new page with slug "<b>404</b>" and the template of your choice. <br>This will override the default version.</p>
<p>Include the following into theme to generate a sitemap (where 3 is the Maximum nesting level to display):</p>

<pre><code class="language-php" data-prismjs-copy="Copy this code">&lt;?php echo get_sitemap('', 0, 3); ?>
</code></pre>

<hr class="style-eight">

<h4>Basic Template Example:</h4>
<p> </p>
<pre><code class="language-php line-numbers" data-prismjs-copy="Copy this template"><mark>&lt;?php if (!defined('IN_GS')) { die('you cannot load this page directly.'); }?></mark>

&lt;!DOCTYPE html>
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

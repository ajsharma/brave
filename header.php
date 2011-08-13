<?php
/**
 * @package WordPress
 * @subpackage brave
 */
?>
<!DOCTYPE html>
	<meta charset="utf-8"> 
	<!-- Add "maximum-scale=1" to fix the weird iOS auto-zoom bug on orientation changes. --> 
	<meta name="viewport" content="width=device-width; initial-scale=1"/>  

	<title><?php wp_title('-', true, 'right'); ?> <?php bloginfo('name'); ?></title>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="shortcut icon" href="images/favicon.ico"/>
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="author" href="http://twitter.com/#!/ajsharma" />

	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]--> 

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="everything">
	<header class="global-header">
		<?php get_search_form(); ?>
		<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
	</header>
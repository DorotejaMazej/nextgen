<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nextgen
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<title>nextgen</title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

 <script>
        // Picture element HTML5 shiv
        document.createElement( "picture" );
</script>
<script src="https://cdn.rawgit.com/scottjehl/picturefill/master/dist/picturefill.min.js" async></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="profile" href="http://gmpg.org/xfn/11">

<!-- FONT -->
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'nextgen' ); ?></a>

	<header>
		<div class="wrapper">
            <h1 class="logo">nextgen</h1>

		    <nav role="navigation">
            <h2>Main Navigation</h2>
                <div id="burger-nav"></div>
                    <ul>
                         <button id="button"><a href="" class="current">Contact us</a></button>
                    </ul>
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'nextgen' ); ?></button>
                <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		    </nav><!-- #site-navigation -->
		</div><!-- .wrapper-->

	</header><!-- header -->

	<div id="content" class="site-content">

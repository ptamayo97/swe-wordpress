<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="header">
<div id="pattern" class="pattern">
      <a href="#menu" class="menu-link">&#9776;</a>
      <nav id="menu" class="main-navigation" role="navigation">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'primary',
			'menu_id'        => 'primary-menu',
			'menu_class'     => 'nav-menu',
		) );
		?>
    </nav><!-- #site-navigation -->
    </div>
</header>
<div id="container">
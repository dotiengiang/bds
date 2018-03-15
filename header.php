<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
        	<div class="container">
	          <a class="navbar-brand" href="#">
	            <span class="q">Q</span><span class="u">u</span><span class="e">e</span><span class="n">n</span>
	          </a>
	          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	            <span class="navbar-toggler-icon"></span>
	          </button>

	            <div class="collapse navbar-collapse" id="navbarSupportedContent">
		          	<?php
					wp_nav_menu( array(
					    'theme_location'	=> 'primary',
					    'depth'				=> 2,
						'container'			=> 'div',
						'container_class'	=> 'navbar-collapse',
						'menu_class'		=> 'navbar-nav ml-auto',
					    'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
					    'walker'			=> new WP_Bootstrap_Navwalker()
					) );
					?>
		        </div>
        
     		</div>
      	</nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content my-4">

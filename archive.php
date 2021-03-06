<?php get_header();?>

	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-md-9 order-sm-12">
				<div id="primary" class="content-area">
					<main id="main" class="site-main">
						<?php quen_breadcrumb(); ?>
						<?php if ( have_posts() ) : ?>

							<header class="page-header">
								<?php
								the_archive_title( '<h1 class="page-title">', '</h1>' );
								the_archive_description( '<div class="archive-description">', '</div>' );
								?>
							</header><!-- .page-header -->

							<div class="row">
							<?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();
								get_template_part( 'template-parts/content-home');

							endwhile;?>
							</div>
							<?php
							quen_pagination();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;
						?>
					</main><!-- #main -->
				</div><!-- #primary -->
			</div>

<?php
get_sidebar();
get_footer();

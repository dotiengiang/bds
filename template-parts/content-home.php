
<div class="col-sm-6">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );?>
		</header><!-- .entry-header -->

		<?php quen_post_thumbnail(); ?>
		<?php the_excerpt();?>
		
	</article><!-- #post-<?php the_ID(); ?> -->

</div>

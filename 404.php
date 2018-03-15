<?php get_header();?>

	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-md-9 order-sm-12">
				<div id="primary" class="content-area">
					<main id="main" class="site-main">
						<?php quen_breadcrumb(); ?>

						<section class="error-404 not-found">
							<header class="page-header">
								<h1 class="page-title"><?php esc_html_e( 'Thông tin bạn cần chưa được xuất bản.', 'quen' ); ?></h1>
							</header><!-- .page-header -->

							<div class="page-content">
								<p><?php esc_html_e( 'Hãy thử tìm kiếm một nội dung khác!', 'quen' ); ?></p>

								<?php get_search_form(); ?>
								
							</div><!-- .page-content -->
						</section><!-- .error-404 -->

					</main><!-- #main -->
				</div><!-- #primary -->
			</div>
<?php
get_sidebar();
get_footer();

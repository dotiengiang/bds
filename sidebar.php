<?php
if ( ! is_active_sidebar( 'main-sidebar' ) ) {
	return;
}
?>
			<div class="col-sm-4 col-md-3">
				<aside id="secondary" class="widget-area">
					<?php dynamic_sidebar( 'main-sidebar' ); ?>
				</aside><!-- #secondary -->
			</div>
		</div><!--row-->
	</div><!--container-->
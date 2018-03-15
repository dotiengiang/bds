<?php get_header(); ?>
	
	<div class="container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
				<?php quen_breadcrumb(); ?>
				<header class="head-bds">
					<?php quen_post_thumbnail(); ?>
					<div class="head-bds-text p-3">
						<div class="row align-items-center">
							<div class="col-12 col-md-8 col-lg-9">
								<h1 class="entry-title text-primary"><?php the_title(); ?></h1>
							</div>

							<div class="col-12 col-md-4 col-lg-3">
								<?php if( get_field('price_bds') ): ?>	
									<p class="bds-price-label">
										<span class="text-warning">Giá từ:</span>
										<span class="number text-danger"><?php the_field('price_bds'); ?></span>
									</p>						
								<?php endif; ?>
							</div>
						</div>
					</div>										
				</header>
				<?php if( get_field('promotion_bds') ): ?>	
					<div class="p-3 mb-2 bg-danger text-white">
						<h2 id="khuyen-mai">Quà tặng - Khuyến mại</h2>
						<?php the_field('promotion_bds'); ?>
					</div>						
				<?php endif; ?>
				<div id="accordion">
					<?php if( get_field('overview_bds') ): ?>	
						<div class="card mb-2">
						    <div class="card-header p-0" id="headingOne">
						      <h2 class="m-0" id="tong-quan">
						        <a class="btn p-3" data-toggle="collapse" data-target="#overview_bds" aria-expanded="true" aria-controls="overview_bds">
						          Thông tin tổng quan
						        </a>
						      </h2>
						    </div>

						    <div id="overview_bds" class="collapse show" aria-labelledby="headingOne">
						      <div class="card-body">
						        <?php the_field('overview_bds'); ?>
						      </div>
						    </div>
						  </div>						
					<?php endif; ?>
					<?php if( get_field('location_bds') ): ?>	
						<div class="card mb-2">
						    <div class="card-header p-0" id="headingTwo">
						      <h2 class="m-0" id="vi-tri">
						        <a class="btn p-3 collapsed" data-toggle="collapse" data-target="#location_bds" aria-expanded="false" aria-controls="location_bds">
						          Vị trí dự án
						        </a>
						      </h2>
						    </div>
						    <div id="location_bds" class="collapse" aria-labelledby="headingTwo">
						      <div class="card-body">
						        <?php the_field('location_bds'); ?>
						      </div>
						    </div>
						</div>	
					<?php endif; ?>
					<?php if( get_field('ground_bds') ): ?>	
						<div class="card mb-2">
						    <div class="card-header p-0" id="headingTwo">
						      <h2 class="m-0" id="mat-bang">
						        <a class="btn p-3 collapsed" data-toggle="collapse" data-target="#ground_bds" aria-expanded="false" aria-controls="ground_bds">
						          Thông tin mặt bằng
						        </a>
						      </h2>
						    </div>
						    <div id="ground_bds" class="collapse" aria-labelledby="headingTwo">
						      <div class="card-body">
						        <?php the_field('ground_bds'); ?>
						      </div>
						    </div>
						</div>	
					<?php endif; ?>
					<?php if( get_field('design_bds') ): ?>	
						<div class="card mb-2">
						    <div class="card-header p-0" id="headingTwo">
						      <h2 class="m-0" id="thiet-ke">
						        <a class="btn p-3 collapsed" data-toggle="collapse" data-target="#design_bds" aria-expanded="false" aria-controls="design_bds">
						          Thiết kế căn hộ
						        </a>
						      </h2>
						    </div>
						    <div id="design_bds" class="collapse" aria-labelledby="headingTwo">
						      <div class="card-body">
						        <?php the_field('design_bds'); ?>
						      </div>
						    </div>
						</div>	
					<?php endif; ?>
					<?php if( get_field('benefit_bds') ): ?>	
						<div class="card mb-2">
						    <div class="card-header p-0" id="headingTwo">
						      <h2 class="m-0" id="tien-ich">
						        <a class="btn p-3 collapsed" data-toggle="collapse" data-target="#benefit_bds" aria-expanded="false" aria-controls="benefit_bds">
						          Tiện ích dự án
						        </a>
						      </h2>
						    </div>
						    <div id="benefit_bds" class="collapse" aria-labelledby="headingTwo">
						      <div class="card-body">
						        <?php the_field('benefit_bds'); ?>
						      </div>
						    </div>
						</div>	
					<?php endif; ?>
					<?php if( get_field('pay_bds') ): ?>	
						<div class="card mb-2">
						    <div class="card-header p-0" id="headingTwo">
						      <h2 class="m-0" id="thanh-toan">
						        <a class="btn p-3 collapsed" data-toggle="collapse" data-target="#pay_bds" aria-expanded="false" aria-controls="pay_bds">
						          Thanh toán - Vay trả góp
						        </a>
						      </h2>
						    </div>
						    <div id="pay_bds" class="collapse" aria-labelledby="headingTwo">
						      <div class="card-body">
						        <?php the_field('pay_bds'); ?>
						      </div>
						    </div>
						</div>	
					<?php endif; ?>
					<?php if( get_field('progress_bds') ): ?>	
						<div class="card mb-2">
						    <div class="card-header p-0" id="headingTwo">
						      <h2 class="m-0" id="tien-do">
						        <a class="btn p-3 collapsed" data-toggle="collapse" data-target="#progress_bds" aria-expanded="false" aria-controls="progress_bds">
						          Tiến độ thi công
						        </a>
						      </h2>
						    </div>
						    <div id="progress_bds" class="collapse" aria-labelledby="headingTwo">
						      <div class="card-body">
						        <?php the_field('progress_bds'); ?>
						      </div>
						    </div>
						</div>	
					<?php endif; ?>

				</div>
				
								
				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
<?php
get_footer();


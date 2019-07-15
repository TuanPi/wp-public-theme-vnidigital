<!-- Selection 2 -->
<div id="home-category" class="pi-selection-layout">
	<div class="container">
		<div class="pi-layout-title">
			<h2>Điện tử</h2>
		</div>

		<div class="pi-layout-grid">
			<div class="row">

				<?php query_posts( array(
					'category_name' => 'electronics',
					'posts_per_page' => 5,
				)); ?>

				<?php if (have_posts()) : the_post(); ?>
					<?php get_template_part( 'template-parts/components/style-grid-1-2x2-first', get_post_format() ); ?>
					<div class="col-sm-12 col-md-6">
						<div class="row">
							<div class="pi-layout-box">
								<?php endif;
								while (have_posts()) : the_post();
									get_template_part( 'template-parts/components/style-grid-1-2x2', get_post_format() );
								endwhile; ?>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<div id="home-category" class="pi-selection-layout">
	<div class="container">
		<div class="pi-layout-title">
			<h2>Công cụ</h2>
		</div>

		<div class="pi-layout-grid">
			<div class="row">
				<div class="pi-layout-box">
					<?php query_posts( array(
					//'category_name' => 'news',
					'posts_per_page' => 4,
					)); ?>

					<?php if( have_posts() ): while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'template-parts/components/style-grid-4xn', get_post_format() ); ?>
					<?php //the_excerpt(); ?>
					<?php endwhile; ?>
					<?php endif; ?>
					
				</div>
			</div>
		</div>

	</div>
</div>
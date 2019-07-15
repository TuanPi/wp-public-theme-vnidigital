<!-- Selection 3 -->
<div id="home-category" class="pi-selection-layout">
	<div class="container">
		<div class="pi-layout-title">
			<h2>Học tập</h2>
		</div>

		<div class="pi-layout-grid">
	
			<?php query_posts( array(
				//'category_name' => 'news',
				'posts_per_page' => 6,
			)); ?>
			<!--start first-->
			<div class="two-post">	
				<div class="row">
					<?php if( have_posts() ): $postCount = 1;
						while ( have_posts() ) : $postCount++; the_post();
							if($postCount == 2 || $postCount == 3) {
								get_template_part( 'template-parts/components/style-grid-2-4xn-first', get_post_format() );
							} else if($postCount == 4) { ?>
									</div>
								</div> <!--end first-->
								<!--start grid-->
								<div class="grid-post">	
									<div class="row">
										<div class="pi-layout-box">
								<?php get_template_part( 'template-parts/components/style-grid-2-4xn', get_post_format() );
							} else {
								get_template_part( 'template-parts/components/style-grid-2-4xn', get_post_format() );
							}
							endwhile;
						endif; ?>
					</div>
				</div>
			</div> <!--end grid-->
		</div>
	</div>
</div>
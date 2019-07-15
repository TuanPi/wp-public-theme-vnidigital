<?php 
	$category = get_queried_object(); 
	$cateID = $category->term_id;
	#$taxonomy_name = 'hoc-tap';

	$args = array(
		'hide_empty' => 0,
		'orderby' => 'name',
		'depth' => 1,
		'parent' => $cateID,
		'order' => 'ASC'
		#'taxonomy' => 'hoc-tap'
	);
	$term_children = get_categories($args);
?>
<!-- Homepage - header -->
<div id="homepage-header" class="homepage">
	<div class="container wselect">
		<h1>category-study.php</h1>
		<p>Electronicvn phát triển những nội dung khoá học về điện tử hoàn toàn miễn phí</p>
		<div class="buttons clr"><a href="#" class="theme-button">Khoá học miễn phí</a> <a href="#" class="theme-button">Khoá học nâng cao</a></div>
		<div class="blog-link">hoặc <a href="#">bài tập thực hành</a></div>
	</div>
</div>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

	<div class="container">
		<div class="pi-layout-grid">
			<div class="row">
				<div class="pi-layout-box">
					<?php foreach ( $term_children as $child ) { 
						//$tax_term_id = $child->term_taxonomy_id;
						//$images = get_option('taxonomy_image_plugin');
						//$image_id = $images[$tax_term_id];
						//$image_src = taxonomy_image_plugin_get_image_src( $image_id );

					?>
					<div class="col-md-3 col-sm-6 col-xs-12 pi-style-box">
						<div class="pi-news-item">
							<div class="pi-news-thumb">
								<div class="pi-news-img">
									<a href="<?php echo get_term_link( $child )?>">
										<img src="http://localhost:8888/wp-content/uploads/2019/07/smart-industry.jpg"/>
									</a>
								</div>
							</div>
							<div class="pi-news-article">
								<div class="pi-news-pubDate">
									<span class="pi-news-sm-tag pull-left">
										<?php echo '<p> Số bài học: '. $child->count . '</p>'?>
									</span>
									<span class="pubDate pull-right"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo get_the_date('n-j-Y'); ?></span>
								</div>
								<div class="pi-news-name">
									<a href="<?php echo get_term_link( $child )?>"><?php echo $child->name ?></a>
								</div>
								<?php echo '<p> '. $child->description . '</p>'?>
							</div>
						</div>
					</div>	
						<?php } ?>
				</div>
			</div>
		</div>
	</div>

	</main><!-- #main -->
</div><!-- #primary -->

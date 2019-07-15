
<?php
global $cateID;
global $nameCategory;
	$agrs = array(
		'post_type'			=> 'post',
		'category'			=> $cateID,
		'post_status'		=> 'publish',
		//'orderby' 		=> 'name',
		'orderby' => 'date',
		'order' => 'ASC',
	);
?>

<div class="container-fluid">
	<div class="row flex-xl-nowrap">
		<div class="col-12 col-md-3 col-xl-2 pi-docs-sidebar">
			<!--------------------Docs nav-------------------------->
			<div class="pi-group-docs">
				<div class="pi-group-docs-title">
					<div class="pi-docs-title">
						<span class="title"> Khoá học: <?php echo $nameCategory ?> </span>
						<span><button id="btn-list-docs" type="button" class="btn button-list-docs"><i class="fa fa-angle-right fa-lg" aria-hidden="true"></i></button></span>
					</div>
				</div>
				<div class="pi-list-docs">
					<?php get_template_part( 'template-parts/pages/category-docs-nav' ); ?>
				</div>
			</div>
		</div>


		<div class="d-none d-xl-block col-xl-2 tuanpi-toc">
			<nav id="toc" data-toggle="toc" class="sticky-top"></nav>
		</div>

		<main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">

						<?php bootstrap_breadcrumb() ?>
			<!--------------------Content-------------------------->
						<div class="pi-single-content pi-content-docs" id="post-info" data-content="<?php  ?>">
							<?php $agrs['showposts'] = 1; $posts = get_posts( $agrs ); if ( $posts ) :
								foreach( $posts as $post ):
									echo '<h1>';
									the_title();
									echo '</h1>';
									echo '<div class="publishDate"><i class="fa fa-clock-o" aria-hidden="true"></i>';
										echo ' | ';
										pi_get_the_modified_time();
										echo ' | <i class="fa fa-eye" aria-hidden="true"></i> ';
										echo getPostViews(get_the_ID());
									echo '</div>
									<hr>';
									echo '<div class="nextprev">';
										previous_post_link( '%link', '&laquo; Bài trước', true );
										next_post_link( '%link', 'Bài sau &raquo;', true );
									echo '</div>';
									echo $post->post_content;
									echo '<div class="nextprev">';
										previous_post_link( '%link', '&laquo; Bài trước', true );
										next_post_link( '%link', 'Bài sau &raquo;', true );
									echo '</div>';

									echo '<div>';
										if ( comments_open() || get_comments_number() ) {
											comments_template();
										}
									echo '</div>';
								endforeach; endif;
							?>
						</div>
		</main>

	</div>
</div>
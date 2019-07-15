	<?php global $nameCategory;?>
	<div class="container-fluid">
		<div class="row flex-xl-nowrap">
			<div class="col-12 col-md-3 col-xl-2 pi-docs-sidebar sidebar-single">
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
			<!-- <nav id="toc" data-toggle="toc" class="sticky-top"></nav> -->
		</div>

			
			<main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">

			<?php //bootstrap_breadcrumb() ?>
			<!--------------------Content-------------------------->

				<?php while ( have_posts() ) : the_post(); //setPostViews(get_the_ID());?>
				<div class="pi-single-content pi-content-docs" id="post-info" data-content="<?php the_ID() ?>">
					
					<!-- Title -->
					<h1><?php the_title() ?></h1>
					<div class="publishDate"><i class="fa fa-clock-o" aria-hidden="true"></i> 
							<?php 
								echo ' | ';
								//pi_get_the_modified_time();
								echo ' | <i class="fa fa-eye" aria-hidden="true"></i> ';
								//echo getPostViews(get_the_ID());
							?>
					</div>
					<hr>
					<div class="nextprev">
						<?php
							previous_post_link( '%link', '&laquo; Bài trước', true );
							next_post_link( '%link', 'Bài sau &raquo;', true );
						?>
					</div>
					<?php the_content(); ?>
					<!-- <iframe width="100%" height="460" frameborder="0" style="border: 1px solid rgb(238, 238, 238);" src="https://cdn.rawgit.com/dabbott/react-native-web-player/gh-v1.10.0/index.html"></iframe> -->
					<div class="nextprev">
						<?php
							previous_post_link( '%link', '&laquo; Bài trước', true );
							next_post_link( '%link', 'Bài sau &raquo;', true );
						?>
					</div>
					<div>
						<?php 
							if ( comments_open() || get_comments_number() ) {
								comments_template();
							}
						?>
					</div>
				</div> 
				<?php endwhile; ?>
			</main>
		</div>
	</div>
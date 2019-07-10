<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vnidigital
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php //esc_html_e( 'Skip to content', 'vnidigital' ); ?></a> -->

	<header id="masthead" class="site-header">
		<div id="topnotice">
			<a href="https://phanhuutuan.com/" class="link" target="_blank">
				<div class="container clr">
					Giao diện được xây dựng dựa trên <span class="outline">bootstrap</span> bởi Phan Hữu Tuấn<span
						class="btn">Xem thêm<span class="icon icon-right" aria-hidden="true"></span></span>
				</div>
			</a>
		</div>
		<div class="site-branding d-none">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$vnidigital_description = get_bloginfo( 'description', 'display' );
			if ( $vnidigital_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $vnidigital_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		

<!-- <nav id="site-navigation" class="main-navigation"> -->
		<!-- Navigation -->
		<nav id="pi-navbar" class="navbar navbar-expand-lg navbar-dark bg-dark">
			<?php 
				if( $catePa == 31 )
					echo '<div class="container-fluid">';
				else {
					echo '<div class="container">';
				}
			?>
			
				<a class="navbar-brand d-none" href="<?php echo home_url() ?>">
					<!-- <img src="/wp-content/uploads/2019/07/logo-w-45px.png"
						style="margin-right: 3px; margin-top: -2px;" />
					ELECTRONICVN -->
					<?php the_custom_logo();?>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
					aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<?php 
						wp_nav_menu( array(
							'theme_location'  => 'menu-pi', // Gọi menu đã đăng ký trong function
							'menu_id'        => 'primary-menu',
							'depth'           => 2,     // Cấu hình dropdown 2 cấp
							'container'       => false, // Thẻ div bọc menu
							'menu_class'      => 'navbar-nav ml-auto', // Class của nav bootstrap
							'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
							'walker'          => new WP_Bootstrap_Navwalker()
						));
					?>
					<!-- Navbar-nav with FORM -->
					<li class="navbar-nav">
						<form action="/">
							<div class="input-group">
								<input type="text" class="pi-form-control" name="s" placeholder="Tìm kiếm...">
								<button class="pi-btn-search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
							</div>
						</form>
					</li>
				</div>
			</div>
		</nav>

	</header><!-- #masthead -->

	<div id="content" class="site-content">

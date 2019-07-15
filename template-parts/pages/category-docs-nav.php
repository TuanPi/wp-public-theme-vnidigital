<?php
global $cateID;
$args = array(
	'cat'=>$cateID,
	'orderby' => 'date',
    'order' => 'ASC',
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
		$query->the_post();
		$item += 1;
		if( $item == 1 && !is_single()){
			$active = 'active';
		}
		else{
			$active = '';
		}
		
		?>
		<li class="li-title <?php echo $active ?>" data-id="<?php the_ID() ?>"><a href="<?php the_permalink() ?>"><?php echo get_the_title() ?></a></li>
<?php    }
} else {
	// no posts found
	echo '<p>Chưa có bài học nào! :)</p>';
}
/* Restore original Post Data */
wp_reset_postdata(); ?>
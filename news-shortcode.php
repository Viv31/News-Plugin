<?php 
//Shortcode for disply on page

if(!function_exists('NewsListShortcode')){
	function NewsListShortcode(){
		$args = array(
		'post_type'=> 'news-section',
		'orderby'    => 'ID',
		'post_status' => 'publish',
		'order'    => 'ASC',
		'posts_per_page' => 2, // this will retrive all the post that is published 
		'paged' => get_query_var('paged') ? get_query_var('paged') : 1//Added for pagination section
		);
		$result = new WP_Query( $args );
		if ( $result-> have_posts() ) : ?>
		<?php while ( $result->have_posts() ) : $result->the_post(); ?>
			<!-- <div class="container"> -->
				<div class="row">
				<div class="col-md-8">
				<img src="<?php echo  get_the_post_thumbnail_url($result->ID,'post-thumbnail');?>" height="250" width="auto">
					<?php the_title(); ?>
					<?php the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>" class="btn btn-primary btn-lg mx-auto" target="_blank"> View Details</a>
				</div>
				</div>
				<!-- </div> -->
  			
  			<?php endwhile; ?>
  			<div class="col-md-4" style="text-align:center;">
  			<?php
			$big = 999999999; // need an unlikely integer
			 echo paginate_links( array(
			    'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
			    'format' => '?paged=%#%',
			    'current' => max( 1, get_query_var('paged') ),
			    'total' => $result->max_num_pages,
			) );

			wp_reset_postdata();
?>
</div>

<?php endif; wp_reset_postdata(); ?>
	<?php }
}
add_shortcode('NewsList','NewsListShortcode');//First parameter is shortcode name and second parameter is function  name
?>
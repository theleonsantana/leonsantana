<h2><?php echo get_cat_name( $category_id = 4 );?></h2>
<?php
// The main query.
// Loop 1, About Me section
  $first_query = new WP_Query('cat=4'); // Category 4 is the About Me section 
  while($first_query->have_posts()) : $first_query->the_post(); ?>
                                       
<?php 
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  the_post_thumbnail( 'medium' ); }                  
  the_content(); 
endwhile; 
  wp_reset_postdata();
  ?>
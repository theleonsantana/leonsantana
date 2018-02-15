<h2><?php echo get_cat_name( $category_id = 7 );?></h2>
<?php
// The main query.
// Loop 4, Let's Talk section
  $first_query = new WP_Query('cat=7'); // Category 7 is the Let's Talk section 
  while($first_query->have_posts()) : $first_query->the_post(); ?>
                                       
<?php 
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  the_post_thumbnail( 'medium' ); }                  
  the_content();
  ?>
<?php 
endwhile; 
  wp_reset_postdata();
  ?>
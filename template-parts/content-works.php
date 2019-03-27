<?php
// Loop 3, my works section
$third_query = new WP_Query('cat=6');  // category for my works

while($third_query->have_posts()) : $third_query->the_post();
?>

<div class="content-works">
  <?php
    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
        the_post_thumbnail('works-images', array('class' => 'image-work-content')); 
        } ?>
  <h3 class="title-works"><?php the_title(); ?></h3>

  <?php the_content();?>
</div>



<?php

endwhile;
wp_reset_postdata();
?> 
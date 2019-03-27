<h2><?php echo get_cat_name( $category_id = 5 );?></h2>

<div class="process-icons">
<?php 
  // Loop 2, My Thinking section
  $second_query = new WP_Query('cat=5&posts_per_page=4&order=ASC'); // Category 5, My Thinking and displays only 4 post
  ?>
<?php while($second_query->have_posts()) : $second_query->the_post(); ?>

<div class="single-process-icons">
  <?php
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  the_post_thumbnail('full', array('class' => 'image-process-content')); } ?>
  
<h3><?php the_title(); ?></h3>
<?php the_content();?>


</div>

<?php endwhile;
wp_reset_postdata(); 
?>

</div>
  

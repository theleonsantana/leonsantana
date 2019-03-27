<?php 
// Custom Home page.
get_header(); ?>
  <!-- about me section -->
  <div id="about" class="about-section">
    <?php get_template_part( 'template-parts/content-about' ); ?>
  </div><!-- #about .about-section -->
  <!-- my process section -->
  <div id="process" class="process-section">
    <?php get_template_part( 'template-parts/content-process' ); ?>
  </div><!-- #process .process-section -->
    <!-- slider slik .my-works-items -->
  <div id="works" class="works-section">
    <!-- my works section -->
  <h2><?php echo get_cat_name( $category_id = 6 );?></h2>
  <div class="my-works-item">
    <?php get_template_part( 'template-parts/content-works' ); ?>
  </div><!-- .my-works-items , slick slider -->
  </div><!-- #works .works-section -->
  <!-- lets talk section -->
  <div id="lets-talk" class="letstalk-section">
    <?php get_template_part ( 'template-parts/content-lets-tak' ); ?>
  </div><!-- #lets-talk .letstalk-section -->
<?php get_footer(); ?>
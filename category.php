<?php get_header(); ?>

<div class="nav-button">
  <div class="nav-button-line"></div>
</div>

<section class="content-image-container" style="background-image:url(<?php echo get_template_directory_uri() . '/images/img-library-min.jpg'; ?>);">
</section>


<section class="content-text-container">
  <h2>Category Archives: <?php single_cat_title(); ?></h2>
  <?php
    $category_description = category_description();
    if ( ! empty( $category_description ) )
      echo '' . $category_description . '';
     get_template_part( 'loop-category', 'category' );
  ?>

  <section class="nav-overlay">
    <nav class="nav-pages">
      <div class="logo-container">
        <img src="<?php site_icon_url(); ?>" alt="">
      </div>
      <?php wp_nav_menu( array(
        'container' => '' 
      )) ?>

      <?php get_footer(); ?>
    </nav>
  </section>

</section>


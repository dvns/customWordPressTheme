<?php get_header();  ?>

<div class="nav-button">
  <div class="nav-button-line"></div>
</div>

<section class="content-image-container" style="background-image:url(<?php echo hackeryou_get_thumbnail_url($post); ?>);">
</section>

<section class="content-text-container">
  <?php // Start the loop ?>
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>

  <?php endwhile; // end the loop?>

  <section class="nav-overlay">
    <nav class="nav-pages">
      <div class="logo-container">
        <img src="<?php site_icon_url(); ?>" alt="">
      </div>
      <?php wp_nav_menu( array(
        'container' => '' 
      )) ?>
    </nav>
  </section>

</section>





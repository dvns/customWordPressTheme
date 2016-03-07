<?php get_header();  ?>

<div class="nav-button">
  <div class="nav-button-line"></div>
</div>

<section class="content-image-container" style="background-image:url(<?php echo get_template_directory_uri() . '/images/img-grandma2-min.jpg'; ?>);">
</section>

<section class="content-text-container">
	<h2>YOLO! Don't waste your time here.</h2>
	<h1><a href="<?php echo get_permalink( get_page_by_path( 'blog' ) )?>">Check out my cool shit.</a></h1>


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
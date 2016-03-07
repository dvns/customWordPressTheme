<?php get_header(); ?>

<div class="nav-button">
  <div class="nav-button-line"></div>
</div>

<?php if ( have_posts() ) while ( have_posts() ) : the_post();?> 
  <a class="index-button mobile" href="<?php echo get_permalink( get_page_by_path('blog') ) ?>">
    <div class="entry-date-border">
      <h2 class=entry-date><?php the_time('d') ?></h2>
    </div>
    <h2 class=entry-month><?php the_time('M'); ?></h2>
  </a> 
<?php endwhile; ?>

<section class="content-image-container" style="background-image:url(<?php echo hackeryou_get_thumbnail_url($post); ?>);">

  <div class="gallery-button">
    <div class="gallery-squares square1"></div>
    <div class="gallery-squares square2"></div>
    <div class="gallery-squares square3"></div>
    <div class="gallery-squares square4"></div>
  </div>

  <section class="gallery-overlay">
    <div class="gallery-flex-container">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post();?> 
        <a class="index-button" href="<?php echo get_permalink( get_page_by_path('blog') ) ?>">
          <div class="entry-date-border">
            <h2 class=entry-date><?php the_time('d') ?></h2>
          </div>
          <h2 class=entry-month><?php the_time('M'); ?></h2>
        </a> 
      <?php endwhile; ?>
      
      <div class="gallery-container clearfix">
        <?php if( class_exists('Dynamic_Featured_Image') ) { ?>
          <?php global $dynamic_featured_image; ?>
          <?php $featured_images = $dynamic_featured_image -> get_featured_images( ); ?>
          <?php foreach ($featured_images as $value) { ?>
          <!-- Featured_images as value give back the url of the images -->
          <div class="gallery-image">
            <img src="<?= $value['full'] ?>" >
          </div>
        <?php } } ?>
      </div>
    </div>
  </section>
</section>

<section class="content-text-container">
  <article>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h2><?php the_category(' | '); ?></h2>
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php the_content(); ?>

      </div><!-- #post-## -->

      <div id="nav-below">
        <p class="nav-previous"><?php previous_post_link('%link', '<i class="fa fa-angle-left"></i> OLDER'); ?></p>
        <p class="nav-next"><?php next_post_link('%link', 'NEWER <i class="fa fa-angle-right"></i>'); ?></p>
      </div><!-- #nav-below -->
    <?php endwhile; // end of the loop. ?>
  </article>
  
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

<section class="gallery mobile">
  <div class="gallery-container clearfix mobile">
    <?php if( class_exists('Dynamic_Featured_Image') ) { ?>
      <?php global $dynamic_featured_image; ?>
      <?php $featured_images = $dynamic_featured_image -> get_featured_images( ); ?>
      <?php foreach ($featured_images as $value) { ?>
      <!-- Featured_images as value give back the url of the images -->
      <div class="gallery-image">
        <img src="<?= $value['full'] ?>" >
      </div>
    <?php } } ?>
  </div>
</section>




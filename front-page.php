<?php get_header();  ?>

<section class="content-image-container" style="background-image:url(<?php echo header_image(); ?>);">
</section>

<section class="content-text-container">
  <h2><?php bloginfo('description') ?></h2>
  <h1><?php bloginfo('name'); ?></h1>
  <div class="logo-container">
    <img src="<?php site_icon_url(); ?>" alt="">
  </div>

  <nav class="nav-home">
    <?php $args = array(
        'numberposts' => 1
      );
      $recentPosts = wp_get_recent_posts($args);
    ?>
    <ul>
      <li><a href="<?php echo $recentPosts[0]["guid"] ?>">Blog</a></li>
      <li><a href="<?php echo get_permalink( get_page_by_path( 'about' ) )?>">About</a></li>
    </ul>
  </nav>

  <!-- <h1>Heading 1</h1>
  <h2>Heading 2</h2>
  <h3>Heading 3</h3>
  <h4>Heading 4</h4>
  <h5>Heading 5</h5>
  <h6>Heading 6</h6> -->

  <?php get_footer(); ?>

</section>


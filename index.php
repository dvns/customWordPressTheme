<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="nav-button">
  <div class="nav-button-line"></div>
</div>

<?php 
	$blogID = get_option('page_for_posts');
	$imageID = get_post_thumbnail_id($blogID);
	$imageURL = wp_get_attachment_url($imageID);
?>

<section class="content-image-container" style="background-image:url(<?php echo $imageURL; ?>);">
</section>

<section class="content-text-container">
	<?php get_template_part( 'loop-index', 'index' );	?>

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
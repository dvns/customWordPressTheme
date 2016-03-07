<?php // If there are no posts to display, such as an empty archive page ?>

<?php if ( ! have_posts() ) : ?>

<article id="post-0">
	<h1>Not Found</h1>
	<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
</article>

<?php endif; // end if there are no posts ?>

<?php // if there are posts, Start the Loop. ?>

<?php while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>">
		<?php the_date() ?>
		<h2><?php the_category(' | ') ?></h2>
		<h1>
			<a href="<?php  the_permalink();?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
				<?php the_title(); ?>
			</a>
		</h1>
	</article>

<?php endwhile; // End the loop. Whew. ?>

<?php // Display navigation to next/previous pages when applicable ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
  <p class="alignleft"><?php next_posts_link('&laquo; Older Entries'); ?></p>
  <p class="alignright"><?php previous_posts_link('Newer Entries &raquo;'); ?></p>
<?php endif; ?>

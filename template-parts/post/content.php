<div id="post-container">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="post-header" id="mobile-menu-zoom-el"
	<?php if ( has_post_thumbnail() ) : ?>
		<?php
			$postID = get_post();
			$postThumbURI = get_the_post_thumbnail_url( get_the_ID(), 'full' ); 
		?>

		style="background-image: url(<?php echo $postThumbURI ?>);"

	<?php endif; ?>
	>
		<h1>
			<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
			<?php the_title(); ?>
			</a>
			<span><?php the_time('j/F/Y'); ?></span>
		</h1>
	</div>


	<div class="content-text">
		<?php
		$loaded_content = strip_shortcodes( get_the_content('') );
		echo $loaded_content; 
		?>
	</div>
	
	<?php endwhile; ?>

	<?php else : ?>
	<p><?php _e( 'Could\'t load any post.' ); ?></p>
	
<!-- Stop the loop -->
<?php endif; ?>
</div>

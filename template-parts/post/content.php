<div id="page-container">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="page-header-image"
<?php if ( has_post_thumbnail() ) : ?>
	<?php
		$postID = get_post();
		$postThumbURI = get_the_post_thumbnail_url( get_the_ID(), 'large' ); 
	?>

	style="background-image: url(<?php echo $postThumbURI ?>);"

<?php endif; ?>
></div>
<div class="page-content clear-both">
	<div class="page-heading-container">
		<div class="heading-blurred-bg" <?php echo "style='background-image: url(" . $postThumbURI . ");'"; ?>></div>
		<div class="heaeding-bg-tint"></div>
		<h1><?php the_title(); ?></h1>
	</div>

	<div class="content-wrap">
		<div class="content-text clear-both">
		<?php
		$loaded_content = strip_shortcodes( get_the_content('') );
		echo $loaded_content; 
		?>
		</div>
	</div>
</div>

<?php endwhile; ?>

<?php else : ?>
<p><?php _e( 'Could\'t load any post.' ); ?></p>
	
<!-- Stop the loop -->
<?php endif; ?>
</div>

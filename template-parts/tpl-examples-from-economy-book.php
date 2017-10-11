<?php /* Template Name: Ukázky z hospodářské knihy */ ?>
<?php get_header();?>

<!-- get specified CSS -->
<link  rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/tpl-examples-forms.css">

<div id="content">

<?php require_once('navigation/top-menu-bar.php');?>

<div class="content-examples economy-book">
	<?php require_once('navigation/examples-navigation.php');?>
	<div id="example-items-container" class="clear-both">
		<?php 
		$args = array(
			'post_type' => 'example',
			'posts_per_page' => '1000',
			'tax_query' => array(
				array(
					'taxonomy' => 'example_type',
					'field'    => 'slug',
					'terms'    => 'ukazky-z-hospodarske-knihy',
				),
			),
			'orderby' => 'date',
			'order' => 'ASC'
		);
		$my_query = new WP_Query( $args );

		while ( $my_query->have_posts() ) : $my_query->the_post();

		$lspb_stored_data = get_post_meta( get_the_ID() );
		?>

		<div class="item-wrap">
			<div class="item-text-field-wrap">
				<h2><?php if ( ! empty($lspb_stored_data['example-name']) ) echo esc_attr( $lspb_stored_data['example-name'][0] ); ?></h2>
				<span class="example-annotation">
				<?php if ( ! empty($lspb_stored_data['example-annotation']) ) echo esc_attr( $lspb_stored_data['example-annotation'][0] ); ?>
				</span>
				<span class="example-details">
				<?php if ( ! empty($lspb_stored_data['example-details']) ) echo esc_attr( $lspb_stored_data['example-details'][0] ); ?>
				</span>
			</div>
			<?php the_post_thumbnail( "large" )?>
		</div>

		<?php endwhile; ?>

		<?php

		//get_term_link();
		?>
		<?php if ( !$currentPageContent == "") { ?>
		<div class="additional-note">
			<?php echo $currentPageContent; ?>
		</div>
		<?php }?>
	</div>
</div>

<?php get_footer();?>

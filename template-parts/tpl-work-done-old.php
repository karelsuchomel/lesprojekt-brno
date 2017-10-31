<?php /* Template Name: Přehled zakázek - OLD */ ?>
<?php get_header();?>

<!-- get specified CSS -->
<link  rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/tpl-work-done-old.css">

<div id="content">

<?php require_once('navigation/top-menu-bar.php');?>

<div class="content-work-done clear-both">
	<div class="list-wrap">
	<h1>Úplný seznam LHP a LHO zpracovaných od roku 1998</h1>
	<ul>

	<?php 
	$args = array(
	'post_type' => 'project',
	'posts_per_page' => '10000',
	'meta_query' => array(
		'project-type' => array(
			'key' => 'project-type',
		),		
	),
	'orderby' => array(
								'date' => 'DESC',
								'project-type' => 'DESC',
								'project-importance' => 'DESC',
								'title' => 'ASC',
							),
	'order' => 'DESC'
	);
	$my_query = new WP_Query( $args );

	$current_year = 100000;
	$first_round = 1;

	while ( $my_query->have_posts() ) : $my_query->the_post();

	$lspb_stored_data = get_post_meta( get_the_ID() );

	if ( get_the_date('Y') < $current_year ) {
		if ( $first_round === 0) {
			echo "</div>";
		}
	?>
		<div>
		<h3>Platnost k 1.1.<?php the_date('Y'); ?>:</h3>
	<?php
		$first_round = 0;
		$current_year = get_the_date('Y');
	}
	?>

		<li><strong><?php if ( ! empty($lspb_stored_data['project-type']) ) echo esc_attr( $lspb_stored_data['project-type'][0] ); ?></strong><span class="project-name-wrap"><?php if ( ! empty($lspb_stored_data['project-name']) ) echo esc_attr( $lspb_stored_data['project-name'][0] ); ?></span></li>

	<?php endwhile; ?>
	</div>
	</ul>
	</div>
</div>

<?php get_footer();?>

<?php /* Template Name: Přehled zakázek */ ?>
<?php get_header();?>

<!-- get specified CSS -->
<link  rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/tpl-work-done.css">

<div id="content">

<?php require_once('navigation/top-menu-bar.php');?>

<div class="page-header-image"
	<?php 
		if ( has_post_thumbnail() )
		{
			$postID = get_post();
			$postThumbURI = get_the_post_thumbnail_url( get_the_ID(), 'large' ); 

			echo "style='background-image: url(" . $postThumbURI . ");'";
		}
	?>
></div>
<div class="content-work-done clear-both">
	<div class="page-heading-container">
		<div class="heading-blurred-bg" <?php echo "style='background-image: url(" . $postThumbURI . ");'"; ?>></div>
		<div class="heaeding-bg-tint"></div>
		<h1>Úplný seznam LHP a LHO zpracovaných od roku 1998</h1>
	</div>
	<div class="list-wrap">
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

		<li><span class="project-type-wrap"><?php if ( ! empty($lspb_stored_data['project-type']) ) echo esc_attr( $lspb_stored_data['project-type'][0] ); ?></span><span class="project-name-wrap"><?php if ( ! empty($lspb_stored_data['project-name']) ) echo esc_attr( $lspb_stored_data['project-name'][0] ); ?></span></li>

	<?php endwhile; ?>
	</div>
	</ul>
	</div>
</div>

<?php get_footer();?>

<?php
// retrieve path to card's blurred background
$cardBGImageURL = get_bloginfo('template_url') . "/assets/images/tree-trunk-bg-minified.jpg";
$cardBGblurredImageURL = get_bloginfo('template_url') . "/assets/images/tree-trunk-bg-blurred-darker.jpg";
?>

<div class="front-card-container" style="background-image: url('<?php echo $cardBGImageURL; ?>');">
	<div class="card-content">
		<div class="headline-container" style="background-image: url('<?php echo $cardBGblurredImageURL; ?>');">
			<div class="headline-text">
				<span>Taxační kancelář</span>
				<h1>
					<?php echo get_theme_mod('lsp-home-page-headline'); ?>
				</h1>
			</div>
		</div>
		<div class="three-box-container clear-both">
			<div class="specialization-box first" style="background-image: url('<?php echo $cardBGblurredImageURL; ?>');">
				<div class="special-box-content">
					<h2>Lesní&nbsp;hospodářské&nbsp;plány</h2>
					<img class="specialization-graphic" src="<?php echo get_bloginfo('template_url'); ?>/assets/images/specialization-graphic-01.png">
				</div>
			</div>
			<div class="specialization-box second" style="background-image: url('<?php echo $cardBGblurredImageURL; ?>');">
				<div class="special-box-content">
					<h2>Lesní&nbsp;hospodářské&nbsp;osnovy</h2>
					<img class="specialization-graphic" src="<?php echo get_bloginfo('template_url'); ?>/assets/images/specialization-graphic-02.png">
				</div>
			</div>
			<div class="specialization-box third" style="background-image: url('<?php echo $cardBGblurredImageURL; ?>');">
				<div class="special-box-content">
					<h2>Poradenství&nbsp;v&nbsp;lesnictví</h2>
					<img class="specialization-graphic" src="<?php echo get_bloginfo('template_url'); ?>/assets/images/specialization-graphic-03.png">
				</div>
			</div>
		</div>
	</div>
</div>

<div class="text-card-container clear-both">
	<div class="devider-50-50">
	<?php echo get_theme_mod('lsp-home-page-content-50-1-paragraph'); ?>
	</div>
	<div class="devider-50-50">
	<?php echo get_theme_mod('lsp-home-page-content-50-2-paragraph'); ?>
	</div>
</div>
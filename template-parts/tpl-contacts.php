<?php /* Template Name: Kontakty */ ?>
<?php get_header();?>

<!-- get specified CSS -->
<link  rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/tpl-contacts.css">

<div id="content">

<?php require_once('navigation/top-menu-bar.php');?>

<div class="content-contacts clear-both">
	<div class="devider-50-50">
		<div class="map-box">
			<div class="point-to-loc-box">
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/building-small.png">
				<div class="text-content">
					<h2>NAJDETE NÁS</h2>
					<span>
						ve druhém patře (3. NP) krajského ředitelství LČR,s.p. Jezuitská 13, BRNO
					</span>
				</div>
			</div>

		</div>
	</div>
	<div class="devider-50-50">
	<?php echo get_theme_mod('lsp-contact-page-contacts-list'); ?>
	</div>
</div>

<?php get_footer();?>

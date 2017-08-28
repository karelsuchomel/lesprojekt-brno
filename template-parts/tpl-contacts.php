<?php /* Template Name: Kontakty */ ?>
<?php get_header();?>

<!-- get specified CSS -->
<link  rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/tpl-contacts.css">

<div id="content">

<?php require_once('navigation/top-menu-bar.php');?>

<div class="content-contacts clear-both">
	<div class="column-container" id="contacts-listing-container">
		<?php echo get_theme_mod('lsp-contact-page-contacts-list'); ?>
	</div>
	<div class="column-container">
		<div class="map-container">
			<div class="point-to-loc-box">
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/building-small.png">
				<div class="text-content">
					<h2>NAJDETE NÁS</h2>
					<span>
						ve druhém patře (3. NP) krajského ředitelství LČR,s.p. Jezuitská 13, BRNO
					</span>
				</div>
				<a href="https://www.google.cz/maps/place/Jezuitsk%C3%A1+14%2F13,+602+00+Brno-st%C5%99ed-Brno-m%C4%9Bsto/@49.1972532,16.6086837,17z/data=!3m1!4b1!4m5!3m4!1s0x471294598b76a909:0x576b1aa89aec7cfc!8m2!3d49.1972532!4d16.6108777?hl=en" id="button-show-map" target="_blank">otevřít mapu</a>
			</div>
		</div>
	</div>
</div>

<?php get_footer();?>

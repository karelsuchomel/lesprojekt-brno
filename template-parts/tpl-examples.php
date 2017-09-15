<?php /* Template Name: Ukázky */ ?>
<?php get_header();?>

<!-- get specified CSS -->
<link  rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/tpl-examples.css">

<div id="content">

<?php require_once('navigation/top-menu-bar.php');?>

<div class="content-examples">
	<div id="examples-navigation">
		<a href="" class="examples-button">Základní typy map</a>
		<a href="" class="examples-button">Základní formy map</a>
		<a href="" class="examples-button">Ukázky z hospodářské knihy</a>
	</div>
	<div id="example-items-container" class="clear-both">
		<div class="item-wrap" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/map-examples/dopravni.jpg');">
			<div class="item-text-field-wrap">
				<h2>Obrysová mapa</h2>
				přehledná lesnická mapa
			</div>
		</div>
		<div class="item-wrap" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/map-examples/porostni.jpg');">
			<div class="item-text-field-wrap">
				<h2>Porostní mapa</h2>
				lesnická mapa s barevně odlišenými věkovými stupni
			</div>
		</div>
		<div class="item-wrap" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/map-examples/tezebni.jpg');">
			<div class="item-text-field-wrap">
				<h2>Těžební mapa</h2>
				lesnická mapa s barevně odlišenými způsoby těžeb
			</div>
		</div>
		<div class="item-wrap" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/map-examples/parcelni.jpg');">
			<div class="item-text-field-wrap">
				<h2>Parcelní mapa</h2>
				mapa znározňující plochy parcel
			</div>
		</div>
		<div class="item-wrap" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/map-examples/typologicka.jpg');">
			<div class="item-text-field-wrap">
				<h2>Typologická mapa</h2>
				lesnická mapa s hranicemi a názvy lesních typů
			</div>
		</div>
		<div class="item-wrap" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/map-examples/orto.jpg');">
			<div class="item-text-field-wrap">
				<h2>Lesnická mapa s ortofotem</h2>
				přehledná lesnická mapa umístěná na lesteckém snímku
			</div>
		</div>
		<div class="item-wrap" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/map-examples/dopravni.jpg');">
			<div class="item-text-field-wrap">
				<h2>Dopravní mapa</h2>
				přehledná lesnická mapa s barevně odlišenými druhy lesních cest
			</div>
		</div>
		<div class="item-wrap" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/map-examples/tereni.jpg');">
			<div class="item-text-field-wrap">
				<h2>Mapa teréních typů</h2>
				přehledná lesnická mapa barevně odlišenými teréními typy a jejich hranicemi
			</div>
		</div>
	</div>
</div>

<?php get_footer();?>

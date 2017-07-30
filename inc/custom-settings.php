<?php
// customization partials for partial refresh
function homePageFrontCardHeadline() {
	echo get_theme_mod('lsp-home-page-gradient-card-headline');
}

function homePageFrontCardParagraph() {
	echo get_theme_mod('lsp-home-page-gradient-card-paragraph');
}


// add customize option to various page elements
function lesprojekt_brno_customize_elements ( $wp_customize ) {
	$wp_customize->add_section('lsp-edit-content', array(
			'title' => 'Upravit obsah - Profil firmy', 
		));

	$wp_customize->add_setting('lsp-home-page-gradient-card-headline', array(
			'default' => 'LESPROJEKT BRNO, a.s.',
			'transport' => 'postMessage'
		));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'lsp-home-page-gradient-card-headline-control', array(
			'label' => 'Headline',
			'section' => 'lsp-edit-content',
			'settings' => 'lsp-home-page-gradient-card-headline'
		)) );

	$wp_customize->selective_refresh->add_partial( 'lsp-home-page-gradient-card-headline', array(
		'selector'            => '.home-intro h1',
		'container_inclusive' => false,
		'render_callback'     => 'homePageFrontCardHeadline',
	) );

	$wp_customize->add_setting('lsp-home-page-gradient-card-paragraph', array(
			'default' => 'Die lsp ist eine Evangelisationsschule der Gemeinschaft Emmanuel e.V. die jungen Christen zwischen 18 und 30 Jahren eine katholisch theologische, philosophische und humanistische Ausbildung bietet. Es geht um eine persönliche Bezieh ung zu Gott und um ein Fundament im Glauben, das ins eigene Leben und zu den Menschen unserer Welt ausstrahlt. Ein geistliches und gemeinschaftliches Leben stehen dabei im Mittelpunkt. ',
			'transport' => 'postMessage'
		));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'lsp-home-page-gradient-card-paragraph-control', array(
			'label' => 'Paragraph',
			'section' => 'lsp-edit-content',
			'settings' => 'lsp-home-page-gradient-card-paragraph',
			'type' => 'textarea'
		)) );

		$wp_customize->selective_refresh->add_partial( 'lsp-home-page-gradient-card-paragraph', array(
			'selector'            => '.home-intro p',
			'container_inclusive' => false,
			'render_callback'     => 'homePageFrontCardParagraph',
		) );

}

add_action( 'customize_register', 'lesprojekt_brno_customize_elements' );
<?php
// customization partials for partial refresh
function homePageGradientCardHeadline() {
	echo get_theme_mod('esm-home-page-gradient-card-headline');
}

function homePageGradientCardParagraph() {
	echo get_theme_mod('esm-home-page-gradient-card-paragraph');
}


// add customize option to various page elements
function esm_altoetting_customize_elements ( $wp_customize ) {
	$wp_customize->add_section('esm-edit-content', array(
			'title' => 'Edit content - home page', 
		));

	$wp_customize->add_setting('esm-home-page-gradient-card-headline', array(
			'default' => 'Emmanuel School of Mission',
			'transport' => 'postMessage'
		));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'esm-home-page-gradient-card-headline-control', array(
			'label' => 'Headline',
			'section' => 'esm-edit-content',
			'settings' => 'esm-home-page-gradient-card-headline'
		)) );

	$wp_customize->selective_refresh->add_partial( 'esm-home-page-gradient-card-headline', array(
		'selector'            => '.home-intro h1',
		'container_inclusive' => false,
		'render_callback'     => 'homePageGradientCardHeadline',
	) );

	$wp_customize->add_setting('esm-home-page-gradient-card-paragraph', array(
			'default' => 'Die ESM ist eine Evangelisationsschule der Gemeinschaft Emmanuel e.V. die jungen Christen zwischen 18 und 30 Jahren eine katholisch theologische, philosophische und humanistische Ausbildung bietet. Es geht um eine persönliche Bezieh ung zu Gott und um ein Fundament im Glauben, das ins eigene Leben und zu den Menschen unserer Welt ausstrahlt. Ein geistliches und gemeinschaftliches Leben stehen dabei im Mittelpunkt. ',
			'transport' => 'postMessage'
		));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'esm-home-page-gradient-card-paragraph-control', array(
			'label' => 'Paragraph',
			'section' => 'esm-edit-content',
			'settings' => 'esm-home-page-gradient-card-paragraph',
			'type' => 'textarea'
		)) );

		$wp_customize->selective_refresh->add_partial( 'esm-home-page-gradient-card-paragraph', array(
			'selector'            => '.home-intro p',
			'container_inclusive' => false,
			'render_callback'     => 'homePageGradientCardParagraph',
		) );

}

add_action( 'customize_register', 'esm_altoetting_customize_elements' );
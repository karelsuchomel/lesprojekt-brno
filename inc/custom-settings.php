<?php
// customization partials for partial refresh
function homePageFrontCardHeadline() {
	echo get_theme_mod('lsp-home-page-headline');
}

function homePageFrontCardParagraph1() {
	echo get_theme_mod('lsp-home-page-content-50-1-paragraph');
}
function homePageFrontCardParagraph2() {
	echo get_theme_mod('lsp-home-page-content-50-2-paragraph');
}
function contactPageContactCard() {
	echo get_theme_mod('lsp-contact-page-contact-card');
}

// add customize option to various page elements
function lesprojekt_brno_customize_elements ( $wp_customize ) {
	$wp_customize->add_section('lsp-edit-firm-profile', array(
			'title' => 'Upravit obsah - Profil firmy', 
		));

	$wp_customize->add_section('lsp-edit-contacts-page', array(
			'title' => 'Upravit obsah - Kontakty', 
		));

	$wp_customize->add_setting('lsp-home-page-headline', array(
			'default' => 'LESPROJEKT BRNO, a.s.',
			'transport' => 'postMessage'
		));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'lsp-home-page-headline-control', array(
			'label' => 'Headline',
			'section' => 'lsp-edit-firm-profile',
			'settings' => 'lsp-home-page-headline'
		)) );

	$wp_customize->selective_refresh->add_partial( 'lsp-home-page-headline', array(
		'selector'            => '.headline-text h1',
		'container_inclusive' => false,
		'render_callback'     => 'homePageFrontCardHeadline',
	) );

	$wp_customize->add_setting('lsp-home-page-content-50-1-paragraph', array(
			'default' => '
<h2>Rádi vám zpracujeme</h2>
<ul>
<li>Lesní hospodářské plány</li>
<li>Lesní hospodářské osnovy</li>
<li>Projekty zalesnění</li>
<li>Plány péče</li>
<li>Podklady k žádosti o odnětí    nebo o omezení PUPFL</li>
<li>Ocenění pozemků  a trvalých     porostů včetně lesních</li>
<li>Znalecké posudky</li>
<li>Výpočet výše újmy nebo    škody způsobené na lesích</li>
<li>Výpočet výše újmy vzniklé    omezením lesního hospodaření</li>
</ul>
<h3>Dále provádíne:</h3>
<ul>
<li>Velkoformátové tisky</li>
<li>Laminování (fóliování)</li>
<li>Digitální zpracování dat</li>
</ul>',
			'transport' => 'postMessage'
		));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'lsp-home-page-content-50-1-paragraph-control', array(
			'label' => 'Paragraph',
			'section' => 'lsp-edit-firm-profile',
			'settings' => 'lsp-home-page-content-50-1-paragraph',
			'type' => 'textarea'
		)) );

	$wp_customize->selective_refresh->add_partial( 'lsp-home-page-content-50-1-paragraph', array(
			'selector'            => '.devider-50-50:nth-of-type(1)',
			'container_inclusive' => false,
			'render_callback'     => 'homePageFrontCardParagraph1',
		) );

	$wp_customize->add_setting('lsp-home-page-content-50-2-paragraph', array(
			'default' => '
<h2>O společnosti</h2>
<p>
Společnost LESPROJEKT BRNO, a.s. vznikla v roce 1996 v rámci probíhající transformace Ústavu pro hospodářskou úpravu lesů Brandýs nad Labem, pobočky Brno. Do této společnosti přešla většina projektantů z původní organizace. Dlouholetá praxe zaměstnanců je zárukou vysoké odbornosti a kvality výsledných děl.
<br>
Specializujeme se zejména na tvorbu lesních hospodářských plánů, lesních hospodářských osnov, realizaci projektů a poradenství v oblasti lesnictví a ochraně přírody a krajiny.
<br>
Naše společnost zpracovala v letech 1996 – 2016 lesní hospodářské plány a osnovy (tj. s platností k 1.1.1998 až k 1.1.2016) na ploše přes 535 000 ha v oblastech LHC Jihlava, Přibyslav, Prostějov, Brno, Svitavy, Židlochovice, Janovice, Rájec, Tábor, Tišnov, Náměšť nad Oslavou,
</p>',
			'transport' => 'postMessage'
		));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'lsp-home-page-content-50-2-paragraph-control', array(
			'label' => 'Paragraph',
			'section' => 'lsp-edit-firm-profile',
			'settings' => 'lsp-home-page-content-50-2-paragraph',
			'type' => 'textarea'
		)) );

	$wp_customize->selective_refresh->add_partial( 'lsp-home-page-content-50-2-paragraph', array(
			'selector'            => '.devider-50-50:nth-of-type(2)',
			'container_inclusive' => false,
			'render_callback'     => 'homePageFrontCardParagraph2',
		) );

		$wp_customize->add_setting('lsp-contact-page-contact-card', array(
			'default' => '
<h2 class="corporate-info-headline">LESPROJEKT BRNO, a.s.</h2>
<span>Jezuitská 14/13, Brno 602 00<br>Společnost je zapsána v OR u KS Brno,<br> oddíl B, vložka 1976</span>
<hr>
<span>
<strong>Kontakt</strong><br>
Tel.: +420 724 717 203<br>
E-mail: info@lesprojekt-brno.cz<br>
Fax: 542 513 258<br><br>
IČ: 65279191<br>
DIČ: CZ65279191<br>
</span>',
			'transport' => 'postMessage'
		));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'lsp-contact-page-contact-card-control', array(
			'label' => 'Kontakty detail',
			'section' => 'lsp-edit-contacts-page',
			'settings' => 'lsp-contact-page-contact-card',
			'type' => 'textarea'
		)) );

	$wp_customize->selective_refresh->add_partial( 'lsp-contact-page-contact-card', array(
			'selector'            => '.corporate-info-table',
			'container_inclusive' => false,
			'render_callback'     => 'contactPageContactCard',
		) );

}

add_action( 'customize_register', 'lesprojekt_brno_customize_elements' );
<?php
// Customize Appearance Options
// Controls (UI in appearance -> customize)
// Settings (save to Database)
// Sections (Groups)
function present_idea_theme_customize_register($wp_customize) {

	$wp_customize->add_setting('prid_base_background_color', array(
		'default' => '#34495e',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting('prid_complementary_color', array(
		'default' => '#e74c3c',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting('prid_dark_background_color', array(
		'default' => '#2c3e50',
		'transport' => 'refresh',
	));

	$wp_customize->add_section('prid_custom_colors', array(
		'title' => __('Custom colors', 'present-idea'), // on screen label
		'priority' => 30,
	));

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'prid_base_background_color_control', array(
			'label' => __('Base backgroud color', 'present-idea'),
			'section' => 'prid_custom_colors',
			'settings' => 'prid_base_background_color',
	)) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'prid_complementary_color_control', array(
			'label' => __('Complementary color', 'present-idea'),
			'section' => 'prid_custom_colors',
			'settings' => 'prid_complementary_color',
	)) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'prid_dark_background_color_control', array(
			'label' => __('Dark background color', 'zs-hroznova'),
			'section' => 'prid_custom_colors',
			'settings' => 'prid_dark_background_color',
	)) );

}

add_action('customize_register', 'present_idea_theme_customize_register');



// Output customize CSS
function zsh_customize_css() { ?>

	<style>
		a {
			color: <?php echo get_theme_mod('prid_complementary_color'); ?> ;
		}
		h1 {
			color: <?php echo get_theme_mod('prid_complementary_color'); ?> ;
		}
		#asside-panel .home-page-link.hover {
			background-color: <?php echo get_theme_mod('prid_base_background_color'); ?> ;
		}
	</style>

<?php }

add_action('wp_head', 'zsh_customize_css');
?>
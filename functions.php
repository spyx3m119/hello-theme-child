<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementorChild
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function hello_elementor_child_enqueue_scripts() {
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		'1.0.0'
	);
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts', 20 );
if (isset($_GET['developer'])) {
    $showDev = $_GET['developer'];
} else {
    $showDev = '';
}

if($showDev == 'yes'){
	echo "<h3 id='sitedev' style='position: fixed; z-index: 999999; width: 100%; height: 100%; text-align: center; top: 0; color: #95A5A6; background: rgba(0,0,0,0.6);'><span style='background: #ECF0F1; padding: 50px; position: absolute; top: 50%; transform: translate(-50%, -50%);'><small>Design and Developed by:</small> <a href='vladparole.com'><u>Vladimir M. Parole</u></a></span></h3>";
}

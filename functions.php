<?php
	add_theme_support('post-thumbnails');
	add_theme_support( 'custom-logo' );
?>

<?php
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'aog-theme' ),
	) );
?>

<?php require 'customizer.php'; ?>
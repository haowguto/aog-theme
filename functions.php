<?php
	add_theme_support('post-thumbnails');
?>

<?php
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'aog-theme' ),
	) );
?>

<?php 
	add_theme_support( 'custom-logo', array(
		'width'       => 120,
		'flex-width'  => true,
	) );
?>

<?php require 'customizer.php'; ?>

<?php
	function aog_widgets_init() {
		register_sidebar( array(
			'name'          => __( 'Hero', 'aog' ),
			'id'            => 'hero',
			'description'   => __( 'Bloco destaque na home', 'aog' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		));

		register_sidebar( array(
			'name'          => __( 'Newsletter', 'aog' ),
			'id'            => 'newsletter',
			'description'   => __( 'Bloco de newsletter', 'aog' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		));
	}
	add_action( 'widgets_init', 'aog_widgets_init' );
?>
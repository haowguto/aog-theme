<?php
/**
* @file customizer.php
*
* aog Customizer support
*/

/**
* Implement Customizer additions and adjustments.
*
* @param WP_Customize_Manager $wp_customize Customizer object.
*/
function aog_customizer( $wp_customize ) {
  /**
   * Footer Section
   */
  $wp_customize->add_section( 'aog_footer_section', array(
		'title'    => __( 'Footer', 'aog' ),
		'priority' => 200
	) );

  /**
   * Contact Section
   */
  $wp_customize->add_section( 'aog_contact_section', array(
		'title'    => __( 'Contato', 'aog' ),
		'priority' => 100
	) );

  /**
   * Address setting
   */
  $wp_customize->add_setting( 'aog_address', array(
    'type'    => 'option',
		'default' => 'Rua Bandeira Paulista 716, Conjunto 124',
	));

  /**
   * Control for Address setting
   */
  $wp_customize->add_control( 'aog_address', array(
		'label'    => __( 'Endereço', 'aog' ),
		'section'  => 'aog_footer_section',
		'type'     => 'text',
		'priority' => 10
	) );

  /**
   * Email setting
   */
  $wp_customize->add_setting( 'aog_email', array(
    'type'    => 'option',
		'default' => 'contato@aog.solutions',
	));

  /**
   * Control for Email setting
   */
  $wp_customize->add_control( 'aog_email', array(
		'label'    => __( 'Email', 'aog' ),
		'section'  => 'aog_footer_section',
		'type'     => 'text',
		'priority' => 10
	) );

  /**
   * Phone 1 setting
   */
  $wp_customize->add_setting( 'aog_phone_1', array(
    'type'    => 'option',
		'default' => '+55 11 9999-9999',
	));

  /**
   * Control for Phone 1 setting
   */
  $wp_customize->add_control( 'aog_phone_1', array(
		'label'    => __( 'Telefone 1', 'aog' ),
		'section'  => 'aog_contact_section',
		'type'     => 'text',
		'priority' => 10
	) );

  /**
   * Phone 2 setting
   */
  $wp_customize->add_setting( 'aog_phone_2', array(
    'type'    => 'option',
		'default' => '+55 11 9999-9999',
	));

  /**
   * Control for Phone 2 setting
   */
  $wp_customize->add_control( 'aog_phone_2', array(
		'label'    => __( 'Telefone 2', 'aog' ),
		'section'  => 'aog_contact_section',
		'type'     => 'text',
		'priority' => 10
	) );

  /**
   * Phone 3 setting
   */
  $wp_customize->add_setting( 'aog_phone_3', array(
    'type'    => 'option',
		'default' => '+55 11 9999-9999',
	));

  /**
   * Control for Phone 3 setting
   */
  $wp_customize->add_control( 'aog_phone_3', array(
		'label'    => __( 'Telefone 3', 'aog' ),
		'section'  => 'aog_contact_section',
		'type'     => 'text',
		'priority' => 10
	) );

  /**
   * Facebook setting
   */
  $wp_customize->add_setting( 'aog_facebook', array(
    'default' => 'https://www.facebook.com/aogedu',
  ));

  /**
   * Control for Facebook setting
   */
  $wp_customize->add_control( 'aog_facebook', array(
    'label'    => __( 'Facebook', 'aog' ),
    'section'  => 'aog_footer_section',
    'type'     => 'url',
    'priority' => 10
  ) );

  /**
   * Linkedin setting
   */
  $wp_customize->add_setting( 'aog_linkedin', array(
    'type'    => 'option',
    'default' => 'https://www.linkedin.com/in/andreguadalupe/',
  ));

  /**
   * Control for Linkedin setting
   */
  $wp_customize->add_control( 'aog_linkedin', array(
    'label'    => __( 'Linkedin', 'aog' ),
    'section'  => 'aog_footer_section',
    'type'     => 'url',
    'priority' => 10
  ) );

  /**
   * YouTube setting
   */
  $wp_customize->add_setting( 'aog_youtube', array(
    'type'    => 'option',
    'default' => 'https://www.youtube.com/user/andre97web',
  ));

  /**
   * Control for YouTube setting
   */
  $wp_customize->add_control( 'aog_youtube', array(
    'label'    => __( 'youtube', 'aog' ),
    'section'  => 'aog_footer_section',
    'type'     => 'url',
    'priority' => 10
  ) );

  /**
   * Social networks text setting
   */
  $wp_customize->add_setting( 'aog_social_networks_text', array(
    'type'    => 'option',
    'default' => 'Nos acompanhe nas redes sociais',
  ));

  /**
   * Control for social networks text setting
   */
  $wp_customize->add_control( 'aog_social_networks_text', array(
    'label'    => __('Chamada para redes sociais', 'aog' ),
    'section'  => 'aog_footer_section',
    'type'     => 'text',
    'priority' => 10
  ) );
}

add_action( 'customize_register', 'aog_customizer' );

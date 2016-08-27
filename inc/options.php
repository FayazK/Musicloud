<?php
function musicloud_options(WP_Customize_Manager $wp_customize){
    $wp_customize->add_section('mc-options',[
        'title' => 'MusiCloud',
        'priority' => 1,
    ]);

    /*
     * Track/List for Front Page
     */
    $wp_customize->add_setting( 'mc_ff_music', array(
        'type' => 'theme_mod',
        'default' => 'https://soundcloud.com/pakxpert/wa-malanga-yara',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control('mc_ff_music', [
        'type' => 'text',
        'section' => 'mc-options',
        'label' => 'Front Page Music',
        'settings' => 'mc_ff_music'
    ]);

    /*
     * Track/List for Blog Page
     */
    $wp_customize->add_setting( 'mc_blog_music', array(
        'type' => 'theme_mod',
        'default' => 'https://soundcloud.com/pakxpert/wa-malanga-yara',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control('mc_blog_music', [
        'type' => 'text',
        'section' => 'mc-options',
        'label' => 'Blog Music',
        'settings' => 'mc_blog_music'
    ]);

    /*
     * Track/List for Single Post Page
     */
    $wp_customize->add_setting( 'mc_single_music', array(
        'type' => 'theme_mod',
        'default' => 'https://soundcloud.com/pakxpert/wa-malanga-yara',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control('mc_single_music', [
        'type' => 'text',
        'section' => 'mc-options',
        'label' => 'Blog Post Music',
        'settings' => 'mc_single_music'
    ]);

    /*
     * Track/List for WooCommerce Page
     */
    $wp_customize->add_setting( 'mc_woo_music', array(
        'type' => 'theme_mod',
        'default' => 'https://soundcloud.com/pakxpert/wa-malanga-yara',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control('mc_woo_music', [
        'type' => 'text',
        'section' => 'mc-options',
        'label' => 'Shop Music',
        'settings' => 'mc_woo_music'
    ]);
}

add_action( 'customize_register', 'musicloud_options' );

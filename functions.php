<?php
/**
 * Ressources du theme enfant First Try.
 * Verifier le chargement du CSS du parent avant activation (voir README).
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function first_try_enqueue_assets() {
    $theme_version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style(
        'first-try-child',
        get_stylesheet_uri(),
        array(),
        $theme_version
    );

    wp_enqueue_script(
        'first-try-main',
        get_stylesheet_directory_uri() . '/assets/js/main.js',
        array(),
        $theme_version,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'first_try_enqueue_assets', 20 );

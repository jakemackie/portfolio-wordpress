<?php

/**
 * Enqueue theme styles and scripts.
 */
function jakemackie_enqueue_assets(): void {
    wp_enqueue_style(
        'jakemackie-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap',
        [],
        null
    );

    wp_enqueue_style(
        'jakemackie-style',
        get_stylesheet_uri(),
        ['jakemackie-google-fonts'],
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'jakemackie_enqueue_assets');

/**
 * Enqueue Google Fonts in the block editor too.
 */
function jakemackie_enqueue_editor_assets(): void {
    wp_enqueue_style(
        'jakemackie-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap',
        [],
        null
    );
}
add_action('enqueue_block_editor_assets', 'jakemackie_enqueue_editor_assets');

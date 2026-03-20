<?php

function theme_enqueue_styles(): void {
    $style_url = get_template_directory_uri() . '/assets/css/style.css';

    // Frontend
    wp_enqueue_style(
        'frontend-styles',
        $style_url,
        [],
        null
    );

    // Editor
    wp_enqueue_style(
        'editor-styles',
        $style_url,
        [],
        null
    );

    // JS
    wp_enqueue_script(
        'editor-js',
        get_template_directory_uri() . '/assets/js/editor.js',
        ['wp-blocks', 'wp-dom-ready'],
        null,
        true
    );
}

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
add_action('enqueue_block_editor_assets', 'theme_enqueue_styles');
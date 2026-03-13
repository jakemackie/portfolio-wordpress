<?php
function register_blocks() {
    register_block_type(get_template_directory() . '/build/card');
}
add_action('init', 'register_blocks');

/**
 * Register a custom block category for your theme's blocks
 */
function block_categories(array $categories): array {
    return array_merge($categories, [
        [
            'slug'  => 'jakemackie-blocks',
            'title' => 'Portfolio Blocks',
            'icon'  => 'star-filled'
        ]
    ]);
}

add_filter('block_categories_all', 'block_categories', 10, 1);
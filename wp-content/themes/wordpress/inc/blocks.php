<?php

/**
 * Register custom blocks from the build directory.
 */
function register_blocks(): void {
    $build_dir = get_template_directory() . '/blocks/build';

    if (! is_dir($build_dir)) {
        return;
    }

    foreach (glob($build_dir . '/*/block.json') as $block) {
        register_block_type(dirname($block));
    }
}
add_action('init', 'register_blocks');

/**
 * Register a custom block category for the theme's blocks.
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

/**
 * Replace default button styles with custom styles.
 */
function replace_core_button_styles(): void {
    unregister_block_style('core/button', 'fill');
    unregister_block_style('core/button', 'outline');

    register_block_style('core/button', [
        'name'  => 'primary',
        'label' => 'Primary'
    ]);

    register_block_style('core/button', [
        'name'  => 'secondary',
        'label' => 'Secondary'
    ]);
}
add_action('after_setup_theme', 'replace_core_button_styles');
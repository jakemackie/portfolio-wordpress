<?php
/**
 * Theme Setup and Features
 */

function jakemackie_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('align-wide');

    add_theme_support('custom-logo', [
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ]);

    register_nav_menus([
        'primary' => __('Primary Menu', 'jakemackie'),
        'footer'  => __('Footer Menu', 'jakemackie'),
    ]);

    add_theme_support('editor-styles');
    add_editor_style('style.css');
}
add_action('after_setup_theme', 'jakemackie_setup');
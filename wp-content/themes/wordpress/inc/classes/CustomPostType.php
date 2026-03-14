<?php

namespace JakeMackie\Core;

/**
 * Custom Post Type
 *
 * A simple class to register custom post types in WordPress.
 */
class CustomPostType {
    private $slug;
    private $singular;
    private $plural;
    private $args;

    public function __construct(string $slug, string $singular, string $plural, array $args = []) {
        $this->slug         = $slug;
        $this->singular     = $singular;
        $this->plural       = $plural;
        $this->args         = $args;

        add_action('init', [$this, 'register']);
    }

    public function register() {
        $labels = [
            'name'          => $this->plural,
            'singular_name' => $this->singular,
            'add_new_item'  => "Add New {$this->singular}",
            'edit_item'     => "Edit {$this->singular}",
            'new_item'      => "New {$this->singular}",
            'all_items'     => "All {$this->plural}",
            'view_item'     => "View {$this->singular}",
            'search_items'  => "Search {$this->plural}",
        ];

        $defaults = [
            'labels'        => $labels,
            'public'        => true,
            'has_archive'   => true,
            'show_in_rest'  => true,
            'supports'      => ['title', 'editor', 'thumbnail', 'excerpt'],
            'menu_icon'     => 'dashicons-admin-post',
            'rewrite'       => ['slug' => $this->slug],
        ];

        register_post_type($this->slug, array_replace_recursive($defaults, $this->args));
    }
}
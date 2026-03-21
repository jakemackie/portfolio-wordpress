<?php

namespace JakeMackie\Core;

/**
 * Custom Taxonomy
 * 
 * A simple class to register custom taxonomies in WordPress.
 */
class CustomTaxonomy {
    private $slug;
    private $singular;
    private $plural;
    private $postTypes;
    private $args;

    public function __construct(string $slug, string $singular, string $plural, array $postTypes, array $args = []) {
        $this->slug         = $slug;
        $this->singular     = $singular;
        $this->plural       = $plural;
        $this->postTypes    = $postTypes;
        $this->args         = $args;

        add_action('init', [$this, 'register']);
    }

    public function register() {
        $labels = [
            'name'          => $this->plural,
            'singular_name' => $this->singular,
            'search_items'  => "Search {$this->plural}",
            'all_items'     => "All {$this->plural}",
            'edit_item'     => "Edit {$this->singular}",
            'update_item'   => "Update {$this->singular}",
            'add_new_item'  => "Add New {$this->singular}",
            'new_item_name' => "New {$this->singular} Name",
            'menu_name'     => $this->plural,
        ];

        $defaults = [
            'labels'        => $labels,
            'public'        => true,
            'show_in_rest'  => true,
            'rewrite'       => ['slug' => $this->slug],
        ];

        register_taxonomy($this->slug, $this->postTypes, array_replace_recursive($defaults, $this->args));
    }
}

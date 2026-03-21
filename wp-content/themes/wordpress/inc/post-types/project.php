<?php

use JakeMackie\Core\CustomPostType;

new CustomPostType(
    slug: 'project',
    singular: 'Project',
    plural: 'Projects',
    args: [
        'menu_icon' => 'dashicons-portfolio',
        'supports'  => ['title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'],
    ]
);

new CustomPostType(
    slug: 'position',
    singular: 'Position',
    plural: 'Positions',
    args: [
        'menu_icon' => 'dashicons-businessman',
        'supports'  => ['title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'],
    ]
);

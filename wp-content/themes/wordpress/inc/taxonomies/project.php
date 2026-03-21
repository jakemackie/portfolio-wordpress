<?php

use JakeMackie\Core\CustomTaxonomy;

new CustomTaxonomy(
    slug: 'tech-stack',
    singular: 'Tech Stack',
    plural: 'Tech Stacks',
    postTypes: ['project'],
    args: [
        'menu_icon' => 'dashicons-portfolio',
        'rewrite' => ['slug' => 'projects'],
    ]
);
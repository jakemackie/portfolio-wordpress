<?php

/**
 * Recursively require all PHP files in the inc/ directory,
 * skipping classes (handled by the autoloader) and this file.
 */
function jakemackie_load_inc(): void {
    $dir = get_template_directory() . '/inc';

    $skip = [
        $dir . '/classes',
        __FILE__,
    ];

    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS)
    );

    foreach ($iterator as $file) {
        if ($file->getExtension() !== 'php') {
            continue;
        }

        $path = $file->getPathname();

        foreach ($skip as $prefix) {
            if (strpos($path, $prefix) === 0) {
                continue 2;
            }
        }

        require_once $path;
    }
}
jakemackie_load_inc();

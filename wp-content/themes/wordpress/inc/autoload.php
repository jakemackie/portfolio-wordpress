<?php

/**
 * PSR-4 style autoloader for theme classes.
 * Namespace root: JakeMackie\Core → inc/classes/
 */
spl_autoload_register(function (string $class): void {
    $prefix = 'JakeMackie\\Core\\';

    if (strpos($class, $prefix) !== 0) {
        return;
    }

    $relative_class = substr($class, strlen($prefix));
    $file = get_template_directory() . '/inc/classes/' . str_replace('\\', '/', $relative_class) . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
});

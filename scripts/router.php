<?php

/**
 * Router script for PHP built-in server.
 *
 * PHP's built-in server doesn't automatically route all requests
 * to index.php like Apache/Nginx does. This script replicates
 * the same logic as Laravel's public/.htaccess:
 *   - If the file/directory exists in public/ → serve it directly
 *   - Otherwise → hand off to public/index.php (Laravel's front controller)
 */

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Resolve the requested path inside the public/ folder
$requested = __DIR__ . '/../public' . $uri;

// Serve real files/directories directly (assets, images, etc.)
if ($uri !== '/' && file_exists($requested)) {
    return false;
}

// Everything else → Laravel front controller
require_once __DIR__ . '/../public/index.php';

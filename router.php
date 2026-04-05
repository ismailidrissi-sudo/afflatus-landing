<?php
/**
 * Local dev only: PHP built-in server does not read .htaccess.
 * From project root: php -S localhost:8080 router.php
 */
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?: '/');
$path = __DIR__ . $uri;
if ($uri !== '/' && is_file($path)) {
    return false;
}
require __DIR__ . '/index.php';

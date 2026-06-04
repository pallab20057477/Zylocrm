<?php
// Simple router for PHP built-in server to map /page -> /page.php
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$file = __DIR__ . $uri;

if ($uri === '/' || $uri === '') {
    include __DIR__ . '/index.php';
    return;
}

// If a .php file exists for the route, include it
$routePhp = __DIR__ . rtrim($uri, '/') . '.php';
if (file_exists($routePhp) && is_file($routePhp)) {
    include $routePhp;
    return;
}

// Serve static files normally
if (file_exists($file) && is_file($file)) {
    return false; // let the server handle it
}

// Otherwise 404
http_response_code(404);
echo "404 Not Found";

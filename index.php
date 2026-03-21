<?php
// ══════════════════════════════════════════════════════════════
// AFFLATUS LANDING PAGES — ROUTEUR PRINCIPAL
// ══════════════════════════════════════════════════════════════

$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

// PHP built-in server: serve static files directly
if (php_sapi_name() === 'cli-server') {
    $file = __DIR__ . '/' . $uri;
    if ($uri && is_file($file)) {
        return false; // Let the server handle static files
    }
}

// Admin routes: let them handle themselves (direct file access)
if (str_starts_with($uri, 'admin')) {
    $admin_file = __DIR__ . '/' . $uri;
    if (is_file($admin_file)) {
        require $admin_file;
        return;
    }
    // Try adding .php extension
    if (is_file($admin_file . '.php')) {
        require $admin_file . '.php';
        return;
    }
    // Try index.php in directory
    if (is_dir($admin_file) && is_file($admin_file . '/index.php')) {
        require $admin_file . '/index.php';
        return;
    }
}

// Form handler route
if ($uri === 'includes/form-handler.php' || $uri === 'includes/form-handler') {
    require __DIR__ . '/includes/form-handler.php';
    return;
}

$routes = [
    ''                => 'pages/nos-services.php',
    'nos-services'    => 'pages/nos-services.php',
    'qse-esg'         => 'pages/qse-esg.php',
    'food-safety'     => 'pages/food-safety.php',
    'formation'       => 'pages/formation.php',
    'anir-ia'         => 'pages/anir-ia.php',
    'sites-web'       => 'pages/sites-web.php',
    'merci'           => 'thank-you.php',
    'confidentialite'  => 'privacy.php',
];

if (array_key_exists($uri, $routes)) {
    require __DIR__ . '/' . $routes[$uri];
} else {
    http_response_code(404);
    echo '<!DOCTYPE html><html lang="fr"><head><meta charset="UTF-8"><title>404</title></head>';
    echo '<body style="display:flex;align-items:center;justify-content:center;min-height:100vh;font-family:sans-serif;background:#0B0F1A;color:#fff">';
    echo '<div style="text-align:center"><h1 style="font-size:72px;margin:0">404</h1><p>Page non trouvée</p>';
    echo '<a href="/" style="color:#E8C547;text-decoration:none">← Retour à l\'accueil</a></div></body></html>';
}

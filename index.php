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

// Fichiers statiques /LOGO/* (références « Ils nous font confiance »)
if (str_starts_with($uri, 'LOGO/') && strpos($uri, '..') === false) {
    $logo_file = __DIR__ . '/' . str_replace('/', DIRECTORY_SEPARATOR, $uri);
    if (is_file($logo_file)) {
        $ext = strtolower(pathinfo($logo_file, PATHINFO_EXTENSION));
        $mimes = [
            'png' => 'image/png',
            'jpg' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'webp' => 'image/webp',
            'gif' => 'image/gif',
            'svg' => 'image/svg+xml',
        ];
        $mime = $mimes[$ext] ?? 'application/octet-stream';
        header('Content-Type: ' . $mime);
        header('Cache-Control: public, max-age=86400');
        readfile($logo_file);
        return;
    }
}

// Fichiers statiques /Cert/* (logos de certifications)
if (str_starts_with($uri, 'Cert/') && strpos($uri, '..') === false) {
    $rel = substr($uri, strlen('Cert/'));
    $decoded = rawurldecode($rel);
    if (strpos($decoded, '..') === false) {
        $cert_file = __DIR__ . DIRECTORY_SEPARATOR . 'Cert' . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $decoded);
        if (is_file($cert_file)) {
            $ext = strtolower(pathinfo($cert_file, PATHINFO_EXTENSION));
            $mimes = [
                'png' => 'image/png',
                'jpg' => 'image/jpeg',
                'jpeg' => 'image/jpeg',
                'webp' => 'image/webp',
                'gif' => 'image/gif',
                'svg' => 'image/svg+xml',
            ];
            $mime = $mimes[$ext] ?? 'application/octet-stream';
            header('Content-Type: ' . $mime);
            header('Cache-Control: public, max-age=86400');
            readfile($cert_file);
            return;
        }
    }
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
    'thank-you'       => 'thank-you.php',
    'confidentialite'  => 'privacy.php',
];

if (array_key_exists($uri, $routes)) {
    require __DIR__ . '/' . $routes[$uri];
} else {
    http_response_code(404);
    echo '<!DOCTYPE html><html lang="fr"><head><meta charset="UTF-8"><title>404</title></head>';
    echo '<body style="display:flex;align-items:center;justify-content:center;min-height:100vh;font-family:Poppins,Segoe UI,sans-serif;background:#1A0A2E;color:#fff">';
    echo '<div style="text-align:center;max-width:420px;padding:2rem"><h1 style="font-size:4rem;margin:0 0 0.5rem;font-weight:800">404</h1><p style="opacity:0.85;margin-bottom:1.5rem;line-height:1.6">Page non trouvée</p>';
    echo '<a href="/" style="display:inline-block;padding:0.75rem 1.5rem;background:#7B2D8B;color:#fff;border-radius:8px;text-decoration:none;font-weight:600">← Retour à l\'accueil</a></div></body></html>';
}

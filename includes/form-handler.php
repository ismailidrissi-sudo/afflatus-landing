<?php
// ══════════════════════════════════════════════════════════════
// FORM HANDLER — Stores submissions in JSON DB + optional email
// Called via AJAX from main.js or as POST action
// ══════════════════════════════════════════════════════════════

require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../admin/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize inputs
    $s = function($key) { return htmlspecialchars(trim($_POST[$key] ?? ''), ENT_QUOTES, 'UTF-8'); };

    $lead = [
        'source'        => $s('source'),
        'nom'           => $s('Nom'),
        'entreprise'    => $s('Entreprise'),
        'whatsapp'      => $s('Telephone') ?: $s('WhatsApp'),
        'secteur'       => $s('Secteur'),
        'besoin'        => $s('Besoin'),
        'taille'        => $s('Taille'),
        'certification' => $s('Certification'),
        'employes'      => $s('Employés') ?: $s('Employes'),
        'projet'        => $s('Projet'),
        'budget'        => $s('Budget'),
        'cas_usage'     => $s('Cas d\'usage') ?: $s('Cas_usage'),
        'ip_address'    => $_SERVER['REMOTE_ADDR'] ?? '',
        'user_agent'    => $_SERVER['HTTP_USER_AGENT'] ?? '',
    ];

    // Remove empty values to keep JSON clean
    $lead = array_filter($lead, fn($v) => $v !== '');

    // Store in database
    try {
        $db = getDB();
        $db->addLead($lead);
    } catch (Exception $e) {
        error_log('Lead save error: ' . $e->getMessage());
    }

    // Respond based on request type
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
        strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
        header('Content-Type: application/json');
        echo json_encode(['status' => 'ok', 'message' => 'Lead saved']);
        exit;
    }

    // Non-AJAX: redirect to thank you page
    $source = $s('source');
    header("Location: /merci?source=" . urlencode($source));
    exit;
}

http_response_code(405);
echo 'Method not allowed';

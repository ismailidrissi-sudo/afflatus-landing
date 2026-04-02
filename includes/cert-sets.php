<?php
/**
 * Logos « Normes & certificateurs » par landing.
 * Fichiers réels dans /Cert/ (servis par le routeur — voir index.php).
 */
if (!function_exists('acg_cert_file')) {
    /**
     * @param string $basename Nom exact du fichier sous Cert/ (espaces autorisés)
     */
    function acg_cert_file(string $basename): string
    {
        return '/Cert/' . rawurlencode($basename);
    }
}

return [
    /** Hub : panorama QSE + sécurité alimentaire + supply chain */
    'nos-services' => [
        ['src' => acg_cert_file('iso 9001.jpg'), 'alt' => 'ISO 9001'],
        ['src' => acg_cert_file('Logo-norme-ISO-14001.png'), 'alt' => 'ISO 14001'],
        ['src' => acg_cert_file('Logo-norme-ISO-45001.png'), 'alt' => 'ISO 45001'],
        ['src' => acg_cert_file('BRCGS.png'), 'alt' => 'BRCGS'],
        ['src' => acg_cert_file('fssc 22000.png'), 'alt' => 'FSSC 22000'],
        ['src' => acg_cert_file('Sedex.jpg'), 'alt' => 'Sedex'],
    ],

    /** QSE & ESG */
    'qse-esg' => [
        ['src' => acg_cert_file('iso 9001.jpg'), 'alt' => 'ISO 9001'],
        ['src' => acg_cert_file('Logo-norme-ISO-14001.png'), 'alt' => 'ISO 14001'],
        ['src' => acg_cert_file('Logo-norme-ISO-45001.png'), 'alt' => 'ISO 45001'],
        ['src' => acg_cert_file('amfori BSCI.jpg'), 'alt' => 'amfori BSCI'],
        ['src' => acg_cert_file('Sedex.jpg'), 'alt' => 'Sedex'],
        ['src' => acg_cert_file('logo_smeta.png'), 'alt' => 'SMETA'],
    ],

    /** Food safety */
    'food-safety' => [
        ['src' => acg_cert_file('BRCGS FOOD SAFETY.png'), 'alt' => 'BRCGS Food Safety'],
        ['src' => acg_cert_file('fssc 22000.png'), 'alt' => 'FSSC 22000'],
        ['src' => acg_cert_file('iso-22000.webp'), 'alt' => 'ISO 22000'],
        ['src' => acg_cert_file('IFS_Logo.jpg'), 'alt' => 'IFS', 'img_class' => 'anatomy-cert-img--crop-inner-frame'],
        ['src' => acg_cert_file('FDA.jpg'), 'alt' => 'FDA'],
        ['src' => acg_cert_file('Halal_logo.svg.png'), 'alt' => 'Halal'],
        ['src' => acg_cert_file('global G A P.png'), 'alt' => 'Global G.A.P.'],
    ],

    /** Formation : IRCA / OFPPT (assets) + normes depuis /Cert/ */
    'formation' => [
        ['src' => '/assets/img/logos/irca.svg', 'alt' => 'IRCA'],
        ['src' => '/assets/img/logos/ofppt.svg', 'alt' => 'OFPPT'],
        ['src' => acg_cert_file('iso 9001.jpg'), 'alt' => 'ISO 9001'],
        ['src' => acg_cert_file('BRCGS.png'), 'alt' => 'BRCGS'],
        ['src' => acg_cert_file('fssc 22000.png'), 'alt' => 'FSSC 22000'],
        ['src' => acg_cert_file('Logo-norme-ISO-45001.png'), 'alt' => 'ISO 45001'],
    ],

    /** Anir.io */
    'anir-ia' => [
        ['src' => acg_cert_file('iso 9001.jpg'), 'alt' => 'ISO 9001'],
    ],

    /** Sites web */
    'sites-web' => [
        ['src' => acg_cert_file('iso 9001.jpg'), 'alt' => 'ISO 9001'],
    ],
];

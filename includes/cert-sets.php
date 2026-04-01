<?php
/**
 * Logos de certifications par landing — fichiers dans /Cert (racine du projet).
 * Chemins URL : rawurlencode pour espaces et caractères spéciaux dans les noms de fichiers.
 */
if (!function_exists('acg_cert_src')) {
    function acg_cert_src(string $filename): string
    {
        return '/Cert/' . rawurlencode($filename);
    }
}

return [
    /** Hub : panorama QSE + sécurité alimentaire + supply chain */
    'nos-services' => [
        ['src' => acg_cert_src('iso 9001.jpg'), 'alt' => 'ISO 9001'],
        ['src' => acg_cert_src('Logo-norme-ISO-14001.png'), 'alt' => 'ISO 14001'],
        ['src' => acg_cert_src('Logo-norme-ISO-45001.png'), 'alt' => 'ISO 45001'],
        ['src' => acg_cert_src('BRCGS.png'), 'alt' => 'BRCGS'],
        ['src' => acg_cert_src('fssc 22000.png'), 'alt' => 'FSSC 22000'],
        ['src' => acg_cert_src('Sedex.jpg'), 'alt' => 'Sedex'],
    ],

    /** QSE & ESG : normes ISO management + achats responsables / chaîne d’approvisionnement */
    'qse-esg' => [
        ['src' => acg_cert_src('iso 9001.jpg'), 'alt' => 'ISO 9001'],
        ['src' => acg_cert_src('Logo-norme-ISO-14001.png'), 'alt' => 'ISO 14001'],
        ['src' => acg_cert_src('Logo-norme-ISO-45001.png'), 'alt' => 'ISO 45001'],
        ['src' => acg_cert_src('amfori BSCI.jpg'), 'alt' => 'amfori BSCI'],
        ['src' => acg_cert_src('Sedex.jpg'), 'alt' => 'Sedex'],
        ['src' => acg_cert_src('logo_smeta.png'), 'alt' => 'SMETA'],
    ],

    /** Food safety : schémas agroalimentaires & export */
    'food-safety' => [
        ['src' => acg_cert_src('BRCGS FOOD SAFETY.png'), 'alt' => 'BRCGS Food Safety'],
        ['src' => acg_cert_src('fssc 22000.png'), 'alt' => 'FSSC 22000'],
        ['src' => acg_cert_src('iso-22000.webp'), 'alt' => 'ISO 22000'],
        ['src' => acg_cert_src('IFS_Logo.jpg'), 'alt' => 'IFS'],
        ['src' => acg_cert_src('FDA.jpg'), 'alt' => 'FDA'],
        ['src' => acg_cert_src('Halal_logo.svg.png'), 'alt' => 'Halal'],
        ['src' => acg_cert_src('global G A P.png'), 'alt' => 'Global G.A.P.'],
    ],

    /** Formation certifiante : IRCA / OFPPT + référentiels souvent couverts en inter */
    'formation' => [
        ['src' => '/assets/img/logos/irca.svg', 'alt' => 'IRCA'],
        ['src' => '/assets/img/logos/ofppt.svg', 'alt' => 'OFPPT'],
        ['src' => acg_cert_src('iso 9001.jpg'), 'alt' => 'ISO 9001'],
        ['src' => acg_cert_src('BRCGS.png'), 'alt' => 'BRCGS'],
        ['src' => acg_cert_src('fssc 22000.png'), 'alt' => 'FSSC 22000'],
        ['src' => acg_cert_src('Logo-norme-ISO-45001.png'), 'alt' => 'ISO 45001'],
    ],

    /** Anir.io : crédibilité management (pas de norme « IA » dédiée dans /Cert) */
    'anir-ia' => [
        ['src' => acg_cert_src('iso 9001.jpg'), 'alt' => 'ISO 9001'],
    ],

    /** Sites web : même logique — qualité de service */
    'sites-web' => [
        ['src' => acg_cert_src('iso 9001.jpg'), 'alt' => 'ISO 9001'],
    ],
];

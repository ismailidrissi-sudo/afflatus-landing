<?php
// ══════════════════════════════════════════════════════════════
// AFFLATUS LANDING PAGES — CONFIGURATION GLOBALE
// ══════════════════════════════════════════════════════════════

// Google Tag Manager
define('GTM_ID', 'GTM-WZR9BDBX');

// Google Ads
define('GADS_CONVERSION_ID', 'AW-18011199656');
define('GADS_CONVERSION_LABEL_QSE', 'XXXXXXXXXX');
define('GADS_CONVERSION_LABEL_FOOD', 'XXXXXXXXXX');
define('GADS_CONVERSION_LABEL_FORMATION', 'XXXXXXXXXX');
define('GADS_CONVERSION_LABEL_ANIR', 'XXXXXXXXXX');
define('GADS_CONVERSION_LABEL_WEB', 'XXXXXXXXXX');

// Google Analytics 4
define('GA4_MEASUREMENT_ID', 'G-XXXXXXXXXX');

// Meta (Facebook) Pixel
define('META_PIXEL_ID', 'XXXXXXXXXXXXXXXX');

// TikTok Pixel
define('TIKTOK_PIXEL_ID', 'XXXXXXXXXXXXXXXX');

// LinkedIn Insight Tag
define('LINKEDIN_PARTNER_ID', 'XXXXXXX');

// WhatsApp
define('WHATSAPP_NUMBER', '212661863618');
define('WHATSAPP_URL', 'https://wa.me/' . WHATSAPP_NUMBER);

// Company Info
define('COMPANY_NAME', 'Afflatus Consulting Group');
define('COMPANY_ADDRESS', 'Villa 9K4 Rue Annajd, Hay Ryad, Rabat');
define('COMPANY_EMAIL', 'contact@afflatusconsulting.tech');
define('COMPANY_PHONE', '+212 661 863 618');
define('COMPANY_URL', 'https://afflatusconsulting.tech');
define('COMPANY_DOMAIN_DISPLAY', preg_replace('/^www\./i', '', parse_url(COMPANY_URL, PHP_URL_HOST) ?: ''));
define('COMPANY_LOGO_PATH', '/assets/img/brand/afflatus-logo.png');
define('COMPANY_LINKEDIN_URL', 'https://www.linkedin.com/company/afflatus-consulting');
define('COMPANY_BLOG_URL', COMPANY_URL . '/blog');

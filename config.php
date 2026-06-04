<?php
// SEO Configuration and Initialization
// This file sets up default SEO variables used throughout the site

// Get the current page path
$currentPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$currentPath = rtrim($currentPath, '/');
if (empty($currentPath)) {
    $currentPath = '/';
}

// Protocol and host
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];

// Default values
$siteName = 'ZYLO CRM';
$siteDescription = 'ZYLO CRM - All-in-one Business Management Platform for Accounts, Inventory & Client Management';
$siteUrl = $protocol . '://' . $host;
$defaultImage = $siteUrl . '/assets/logo.png';

// Initialize SEO variables with defaults
$pageTitleText = 'ZYLO CRM - Manage Accounts, Inventory & Clients';
$pageDescriptionText = 'ZYLO CRM is your all-in-one solution for accounts management, inventory control, and client relationships.';
$pageKeywordsText = 'CRM, accounting software, inventory management, invoicing, business management';
$pageCanonical = $siteUrl . $currentPath;
$pageImage = $defaultImage;

// Page-specific SEO overrides based on current path
switch ($currentPath) {
    case '/':
    case '/index.php':
        $pageTitleText = 'ZYLO CRM - Business Management Software';
        $pageDescriptionText = 'ZYLO CRM empowers your business with intelligent accounts management, seamless inventory tracking, and exceptional client relationship tools—all unified in one lightning-fast platform.';
        $pageKeywordsText = 'CRM software, accounting software, inventory management, business management tools';
        break;
    
    case '/about':
    case '/about.php':
        $pageTitleText = 'About ZYLO CRM - Our Mission & Values';
        $pageDescriptionText = 'Learn about ZYLO CRM, our mission to empower businesses, our vision for the future, and our core values guiding innovation and customer success.';
        $pageKeywordsText = 'about ZYLO, CRM company, business software provider, customer relationship management';
        break;
    
    case '/services':
    case '/services.php':
        $pageTitleText = 'ZYLO Services - Accounts, Inventory & Client Management';
        $pageDescriptionText = 'Explore ZYLO\'s comprehensive services: Accounts Management for financial control, Inventory Control for stock optimization, and Client Management for relationship excellence.';
        $pageKeywordsText = 'accounting services, inventory software, CRM services, business management solutions';
        break;
    
    case '/contact':
    case '/contact.php':
        $pageTitleText = 'Contact ZYLO CRM - Get in Touch';
        $pageDescriptionText = 'Contact ZYLO CRM for support, sales inquiries, partnerships, or feedback. We\'re here to help 24/7.';
        $pageKeywordsText = 'contact us, customer support, ZYLO CRM help, business inquiries';
        break;
    
    case '/accounting-software':
    case '/accounting-software.php':
        $pageTitleText = 'Accounting Software - ZYLO CRM';
        $pageDescriptionText = 'Master your finances with ZYLO\'s powerful accounting software. Automate invoicing, track expenses, and generate comprehensive financial reports.';
        $pageKeywordsText = 'accounting software, invoicing software, expense tracking, financial reporting';
        break;
    
    case '/inventory-software':
    case '/inventory-software.php':
        $pageTitleText = 'Inventory Management Software - ZYLO CRM';
        $pageDescriptionText = 'Never run out of stock with ZYLO\'s inventory management solution. Real-time tracking, automated purchase orders, and demand forecasting.';
        $pageKeywordsText = 'inventory software, stock management, warehouse management, purchase order system';
        break;
    
    case '/sales-crm':
    case '/sales-crm.php':
        $pageTitleText = 'Sales CRM - Client Management Software';
        $pageDescriptionText = 'Build lasting customer relationships with ZYLO\'s Sales CRM. Manage leads, track communication history, and automate follow-ups.';
        $pageKeywordsText = 'sales CRM, client management, lead management, customer database, sales pipeline';
        break;
    
    case '/privacy-policy':
    case '/privacy-policy.php':
        $pageTitleText = 'Privacy Policy - ZYLO CRM';
        $pageDescriptionText = 'Learn how ZYLO CRM protects your data and maintains your privacy. Read our comprehensive privacy policy.';
        $pageKeywordsText = 'privacy policy, data protection, GDPR compliance, data security';
        break;
    
    case '/terms':
    case '/terms.php':
        $pageTitleText = 'Terms & Conditions - ZYLO CRM';
        $pageDescriptionText = 'Review the terms and conditions for using ZYLO CRM services. Understand your rights and responsibilities.';
        $pageKeywordsText = 'terms and conditions, user agreement, service terms';
        break;
}

// Append " - ZYLO CRM" if not already present
if (strpos($pageTitleText, 'ZYLO') === false) {
    $pageTitleText .= ' - ZYLO CRM';
}

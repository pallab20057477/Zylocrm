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
    
    case '/commercial-invoice':
    case '/commercial-invoice.php':
        $pageTitleText = 'Commercial Invoice Software – GST-Compliant Export Invoices - ZYLO CRM';
        $pageDescriptionText = 'Create professional commercial invoices for exports & international trade with ZYLO CRM. GST-compliant, multi-currency, HS codes & customs declarations. Free plan.';
        $pageKeywordsText = 'commercial invoice, commercial invoice software, export invoice, international invoice, GST export invoice, trade invoice generator, commercial invoice format India';
        break;

    case '/download-mobile-app':
    case '/download-mobile-app.php':
        $pageTitleText = 'Download ZYLO CRM Mobile App – Android & iOS | Free Business Management App';
        $pageDescriptionText = 'Download ZYLO CRM mobile app for Android & iOS. Manage invoices, track expenses, create GST bills, and run your business from your phone. Free to download.';
        $pageKeywordsText = 'download ZYLO app, ZYLO CRM mobile app, GST billing app Android, invoice app download, business management app, accounting app India, free invoice app Android iOS';
        break;

    case '/download-ios-app':
    case '/download-ios-app.php':
        $pageTitleText = 'Download ZYLO CRM iOS App – iPhone & iPad Business App | Free GST Invoicing';
        $pageDescriptionText = 'Download ZYLO CRM iOS app for iPhone & iPad. Create GST invoices, track expenses, manage inventory & clients. Face ID, offline mode, iCloud sync. Free on App Store.';
        $pageKeywordsText = 'ZYLO iOS app, download ZYLO iPhone app, GST invoice app iPhone, business app iPad, invoice app iOS, accounting app iPhone India, ZYLO CRM App Store';
        break;

    case '/consulting-invoice':
    case '/consulting-invoice.php':
        $pageTitleText = 'Consulting Invoice Generator – Create Professional Consulting Invoices Free | ZYLO CRM';
        $pageDescriptionText = 'Create professional consulting invoices online with ZYLO. Add hourly/project rates, GST with SAC codes, payment terms, and bank details. Free — PDF & WhatsApp ready.';
        $pageKeywordsText = 'consulting invoice, consulting invoice template, create consulting invoice online, consulting invoice format India, freelance consulting invoice, IT consulting invoice, GST consulting invoice';
        break;

    case '/smbs':
    case '/smbs.php':
        $pageTitleText = 'CRM & Accounting Software for Small & Medium Businesses (SMBs) | ZYLO CRM';
        $pageDescriptionText = 'ZYLO CRM is the all-in-one business software for SMBs in India. GST invoicing, expense tracking, inventory management, client CRM, and real-time reports — built for small business owners.';
        $pageKeywordsText = 'SMB software India, small business CRM, accounting software for small business, GST billing software SMB, inventory software small business, business management software India';
        break;

    case '/consultants':
    case '/consultants.php':
        $pageTitleText = 'Business Software for Consultants – Client, Billing & Project Management | ZYLO CRM';
        $pageDescriptionText = 'ZYLO CRM is built for consultants. Manage multiple clients, bill hourly or on retainer, track expenses, generate GST invoices with SAC codes, and get paid faster. Free plan available.';
        $pageKeywordsText = 'consulting software India, consultant billing software, client management for consultants, GST invoice consultant, retainer billing software, consulting CRM India';
        break;

    case '/export-import-business':
    case '/export-import-business.php':
        $pageTitleText = 'Software for Export Import Business – Commercial Invoice, HS Codes & Multi-Currency | ZYLO CRM';
        $pageDescriptionText = 'ZYLO CRM is built for Indian EXIM businesses. Create GST-compliant commercial invoices with HS codes, bill foreign buyers in USD/EUR/GBP, track import costs, and manage trade documents. Free plan.';
        $pageKeywordsText = 'export import business software India, export invoicing software, commercial invoice software India, HS code invoicing, multi-currency invoice India, import export billing software, EXIM software India';
        break;

    case '/chartered-accountant':
    case '/chartered-accountant.php':
        $pageTitleText = 'Software for Chartered Accountants – Multi-Client Billing, GST SAC Codes & TDS | ZYLO CRM';
        $pageDescriptionText = 'ZYLO CRM is built for Chartered Accountants. Manage multiple clients, auto-apply GST SAC codes, track TDS under 194J, set up retainer billing, and generate client-wise reports. Free plan available.';
        $pageKeywordsText = 'software for chartered accountants, CA billing software India, CA practice management software, GST software for CA, SAC code invoicing CA, TDS tracking CA, chartered accountant CRM India';
        break;

    case '/startups':
    case '/startups.php':
        $pageTitleText = 'Business Software for Startups – GST Invoicing, Cash Flow & Investor Reports | ZYLO CRM';
        $pageDescriptionText = 'ZYLO CRM is built for Indian startups. Create GST invoices, track cash flow, manage multi-user access, generate investor-ready P&L reports, and bill international clients. Free plan available.';
        $pageKeywordsText = 'startup software India, startup accounting software, GST billing for startups, startup invoicing, startup CRM, business software for startups, startup finance management India';
        break;

    case '/create-purchase-order':
    case '/create-purchase-order.php':
        $pageTitleText = 'Create Purchase Order - Professional PO Software - ZYLO CRM';
        $pageDescriptionText = 'Create professional purchase orders with ZYLO CRM. Automate PO generation, track orders, manage vendors, and streamline procurement with our easy-to-use purchase order software.';
        $pageKeywordsText = 'create purchase order, purchase order software, PO generator, procurement software, buy order, vendor management, purchase management';
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

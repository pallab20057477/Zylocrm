<?php
$siteName = 'ZYLO CRM';
$siteUrl = 'https://zylocrm.com';
$pagePath = isset($canonicalPath) ? $canonicalPath : (parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/');
$pageCanonical = $siteUrl . $pagePath;
$pageTitleText = isset($pageTitle) ? $pageTitle . ' - ' . $siteName : $siteName . ' - Manage Accounts, Inventory & Clients';
$pageDescriptionText = isset($pageDescription) ? $pageDescription : 'ZYLO CRM is your all-in-one solution for accounts management, inventory control, and client relationships.';
$pageImage = isset($pageImage) ? $pageImage : $siteUrl . '/assets/logo.png';
$pageKeywordsText = isset($pageKeywords) ? $pageKeywords : 'CRM, accounts management, inventory software, invoicing software, client management, business management software';
$pageSchema = isset($pageSchema) ? $pageSchema : [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-X7LMFF4QKP"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-X7LMFF4QKP');
    </script>
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PV374Q8P');</script>
    <!-- End Google Tag Manager -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitleText, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="google-site-verification" content="tmZdqNECATkUXgfIRXsDOdYMt8Bu2eUdxTD9MB0Phpc" />
    <meta name="description" content="<?php echo htmlspecialchars($pageDescriptionText, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($pageKeywordsText, ENT_QUOTES, 'UTF-8'); ?>">
    <link rel="canonical" href="<?php echo htmlspecialchars($pageCanonical, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="robots" content="index,follow,max-image-preview:large,max-snippet:-1,max-video-preview:-1">
    <meta property="og:site_name" content="<?php echo htmlspecialchars($siteName, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitleText, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDescriptionText, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($pageCanonical, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($pageImage, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitleText, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($pageDescriptionText, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($pageImage, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="theme-color" content="#0c4f78">
    <link rel="stylesheet" href="styles.css">
    <?php if (!empty($pageSchema)): ?>
    <script type="application/ld+json"><?php echo json_encode($pageSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>
    <?php endif; ?>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PV374Q8P"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Header -->
    <header>
        <div class="container">
            <a href="/" class="logo">
                <img src="assets/logo.png" alt="ZYLO Logo"
                    onerror="this.onerror=null; this.outerHTML='<h2 style=\'color: var(--primary); margin:0;\'>ZYLO</h2>';">
            </a>

            <nav class="nav-menu" aria-label="Primary">
                <a href="/">Home</a>
                <a href="about">About</a>
                
                <!-- Mega Menu Dropdown -->
                <div class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn" aria-haspopup="true" aria-expanded="false">Products <svg style="width:12px;height:12px;vertical-align:middle;margin-left:2px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></a>
                    <div class="dropdown-content mega-menu">

                        <div class="mega-column">
                            <h3>Solutions</h3>
                            <a href="accounting-software">Accounting Software</a>
                            <a href="ai-accounting-agent">AI Accounting Agent</a>
                            <a href="gst-billing-software">GST Billing Software</a>
                            <a href="invoicing-software">Invoicing Software</a>
                            <a href="quotation-software">Quotation Software</a>
                            <a href="e-invoicing-software">e-Invoicing Software</a>
                            <a href="eway-bill-software">eWay Bill Software</a>
                            <a href="inventory-software">Inventory Software</a>
                            <a href="invoicing-api">Invoicing API</a>
                            <a href="sales-crm">Sales CRM</a>
                            <a href="lead-management-software">Lead Management Software</a>
                            <a href="subscription-management-software">Subscription Management Software</a>
                        </div>
                        <div class="mega-column">
                            <h3>Free Tools</h3>
                            <a href="gst-invoice-maker">GST Invoice Maker</a>
                            <a href="invoice-generator">Invoice Generator</a>
                            <a href="quotation-generator">Quotation Generator</a>
                            <a href="creator-proforma-invoice">Creator Proforma Invoice</a>
                            <a href="invoice-formats">Invoice Formats</a>
                            <a href="create-purchase-order">Create Purchase Order</a>
                            <a href="create-delivery-challan">Create Delivery Challan</a>
                            <a href="quotation-templates">Quotation Templates</a>
                            <a href="commercial-invoice">Commercial Invoice</a>
                            <a href="download-mobile-app">Download Mobile App</a>
                            <a href="download-ios-app">Download iOS App</a>
                            <a href="consulting-invoice">Consulting Invoice</a>
                        </div>
                        <div class="mega-column">
                            <h3>Categories</h3>
                            <a href="smbs">SMBs</a>
                            <a href="consultants">Consultants</a>
                            <a href="startups">Startups</a>
                            <a href="chartered-accountant">Chartered Accountant</a>
                            <a href="export-import-business">Export/Import Business</a>
                            <a href="professional-services">Professional Services</a>
                            <a href="freelancers-self-employed">Freelancers/Self-Employed</a>
                        </div>
                    </div>
                </div>

                <a href="services">Services</a>
                <a href="contact">Contact Us</a>
            </nav>

            <button class="hamburger" type="button" aria-label="Open menu" aria-controls="primary-nav" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>

        </div>
    </header>

<?php
$pageTitle = "Download ZYLO CRM iOS App – iPhone & iPad Business App | Free GST Invoicing";
$pageDescription = "Download ZYLO CRM iOS app for iPhone & iPad. Create GST invoices, track expenses, manage inventory & clients from your iPhone. Face ID, offline mode, iCloud sync. Free.";
$pageKeywords = "ZYLO iOS app, download ZYLO iPhone app, GST invoice app iPhone, business app iPad, invoice app iOS, accounting app iPhone India, free GST billing app iOS, ZYLO CRM App Store";
$canonicalPath = '/download-ios-app';
$pageSchema = [
    '@context' => 'https://schema.org',
    '@type'    => 'MobileApplication',
    'name'     => 'ZYLO CRM – iPhone & iPad Business App',
    'url'      => 'https://zylocrm.com/download-ios-app',
    'description' => 'ZYLO CRM iOS app for iPhone and iPad. Create GST invoices, track expenses, manage inventory and clients. Face ID login, offline mode, iCloud sync.',
    'operatingSystem' => 'iOS',
    'applicationCategory' => 'BusinessApplication',
    'offers' => [
        '@type'         => 'Offer',
        'price'         => '0',
        'priceCurrency' => 'INR'
    ],
    'aggregateRating' => [
        '@type'       => 'AggregateRating',
        'ratingValue' => '4.9',
        'reviewCount' => '3840',
        'bestRating'  => '5'
    ],
    'provider' => [
        '@type' => 'Organization',
        'name'  => 'ZYLO CRM',
        'url'   => 'https://zylocrm.com',
        'logo'  => 'https://zylocrm.com/assets/logo.png'
    ]
];

$faqSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name'  => 'Is ZYLO CRM iOS app free to download?',
            'acceptedAnswer' => ['@type'=>'Answer','text'=>'Yes! The ZYLO CRM iOS app is completely free to download from the Apple App Store. A free Starter plan is included with no credit card required. Premium features are available from ₹999/month.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Does ZYLO iOS app support Face ID and Touch ID?',
            'acceptedAnswer' => ['@type'=>'Answer','text'=>'Yes. ZYLO CRM for iOS supports both Face ID and Touch ID for quick, secure login. Your biometric data never leaves your device and is handled entirely by Apple\'s secure authentication system.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Does the ZYLO iPhone app work offline?',
            'acceptedAnswer' => ['@type'=>'Answer','text'=>'Yes. ZYLO has a full offline mode. You can create invoices, add expenses, and update inventory without an internet connection. All data syncs automatically when you come back online.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Is ZYLO CRM optimized for iPad?',
            'acceptedAnswer' => ['@type'=>'Answer','text'=>'Yes. The ZYLO iPad app uses a multi-panel layout to take full advantage of the larger screen. View your dashboard and invoice details side by side, and use Apple Pencil for signature capture.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can I sync ZYLO between my iPhone and MacBook?',
            'acceptedAnswer' => ['@type'=>'Answer','text'=>'Absolutely. Your ZYLO account syncs seamlessly in real-time across iPhone, iPad, and the ZYLO web app on your MacBook or any browser. All changes are reflected instantly on every device.']
        ]
    ]
];

include 'includes/header.php';
?>
<script type="application/ld+json"><?php echo json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>

<!-- ========== HERO ========== -->
<section class="bg-offwhite" style="padding-top:calc(var(--header-height) + 4.5rem); padding-bottom:5rem;">
    <div class="container">
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:4rem; align-items:center;" class="intro-grid">
            <div>
                <div style="display:inline-flex; align-items:center; gap:0.5rem; background:rgba(12,79,120,0.08); color:var(--primary); font-size:0.8rem; font-weight:700; padding:0.35rem 1rem; border-radius:50px; margin-bottom:1.5rem; text-transform:uppercase; letter-spacing:1px; border:1px solid rgba(12,79,120,0.15);">
                    <svg width="13" height="13" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.8-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/></svg>
                    Available on App Store — Free
                </div>

                <h1 style="font-size:3.25rem; color:var(--primary-dark); line-height:1.15; margin-bottom:1.5rem;">
                    ZYLO CRM for iPhone &amp; iPad — Run Your Business on iOS
                </h1>
                <p style="font-size:1.2rem; line-height:1.8; color:var(--text-muted); margin-bottom:2rem;">
                    The most powerful business management app for iPhone and iPad. Create GST invoices, track expenses, manage inventory, and grow your business — all from your iOS device.
                </p>

                <!-- Primary App Store CTA -->
                <div style="display:flex; gap:1rem; flex-wrap:wrap; margin-bottom:2rem;">
                    <a href="https://apps.apple.com" target="_blank" rel="noopener noreferrer"
                       style="display:inline-flex; align-items:center; gap:0.75rem; background:#1a1a2e; color:white; padding:0.9rem 1.75rem; border-radius:12px; text-decoration:none; transition:opacity 0.2s;"
                       aria-label="Download ZYLO CRM on Apple App Store">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.8-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/></svg>
                        <div>
                            <div style="font-size:0.7rem; opacity:0.8; line-height:1;">DOWNLOAD ON THE</div>
                            <div style="font-size:1.1rem; font-weight:700; line-height:1.2;">App Store</div>
                        </div>
                    </a>
                    <a href="download-mobile-app"
                       style="display:inline-flex; align-items:center; gap:0.75rem; background:rgba(12,79,120,0.08); color:var(--primary); padding:0.9rem 1.75rem; border-radius:12px; text-decoration:none; font-weight:600; border:1px solid rgba(12,79,120,0.2);">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M3.18 23.76a2 2 0 001.96-.19l11.82-6.83-3.06-3.06-10.72 10.08zM.3 1.34A2 2 0 000 2.4v19.2a2 2 0 00.3 1.06L.4 22.76 11.6 11.56v-.24L.4 .24l-.1.1zM21.06 10.2L18 8.4l-3.36 3.36 3.36 3.36 3.06-1.8a2 2 0 000-3.12zM5.14.43L16.96 7.26 13.9 10.32 3.18.24A2 2 0 005.14.43z"/></svg>
                        Get Android App
                    </a>
                </div>

                <div style="display:flex; flex-wrap:wrap; gap:0.6rem; margin-bottom:1.5rem;">
                    <?php foreach(['Face ID Login','iPad Optimized','Offline Mode','iCloud Sync','GST Invoicing','Free Plan'] as $pill): ?>
                    <span style="background:white; border:1px solid var(--border-color); color:var(--text-main); font-size:0.82rem; font-weight:600; padding:0.35rem 0.9rem; border-radius:50px;">✓ &nbsp;<?= $pill ?></span>
                    <?php endforeach; ?>
                </div>

                <p style="font-size:0.85rem; color:var(--text-muted); margin-bottom:0;">
                    ⭐ 4.9/5 on App Store from 3,840+ reviews &nbsp;·&nbsp; iPhone &amp; iPad
                </p>
            </div>

            <div style="position:relative;">
                <img src="assets/store/section-1.jpg"
                     alt="ZYLO CRM iOS app running on iPhone showing GST invoice creation and business dashboard"
                     width="580" height="400"
                     style="width:100%; border-radius:20px; box-shadow:var(--shadow-xl); display:block;"
                     fetchpriority="high" loading="lazy">

                <!-- Floating: App Store rating -->
                <div style="position:absolute; bottom:-1.25rem; left:-1.25rem; background:white; border-radius:14px; padding:0.9rem 1.25rem; box-shadow:var(--shadow-lg); border:1px solid var(--border-color); display:flex; align-items:center; gap:0.75rem;">
                    <span style="width:38px; height:38px; background:#fef9c3; border-radius:10px; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                        <svg width="18" height="18" fill="#ca8a04" viewBox="0 0 20 20" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.78rem; color:var(--text-muted);">App Store Rating</div>
                        <div style="font-size:1rem; font-weight:700; color:var(--text-main);">4.9 ⭐ &nbsp;·&nbsp; 3,840 reviews</div>
                    </div>
                </div>

                <!-- Floating: Invoice paid -->
                <div style="position:absolute; top:-1rem; right:-1rem; background:white; border-radius:14px; padding:0.9rem 1.25rem; box-shadow:var(--shadow-lg); border:1px solid var(--border-color); display:flex; align-items:center; gap:0.65rem;">
                    <span style="width:34px; height:34px; background:#dcfce7; border-radius:8px; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                        <svg width="16" height="16" fill="none" stroke="#16a34a" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.78rem; color:var(--text-muted);">Invoice status</div>
                        <div style="font-size:0.9rem; font-weight:700; color:var(--text-main);">INV-2024 · Paid ✓</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== STATS BAR ========== -->
<section style="padding:3rem 0; background:white; border-bottom:1px solid var(--border-color);">
    <div class="container">
        <div style="display:grid; grid-template-columns:repeat(4,1fr); gap:1rem; text-align:center;" class="stats-bar-grid">
            <?php
            $stats = [
                ['val'=>'4.9 ⭐',   'label'=>'App Store Rating'],
                ['val'=>'3,840+',   'label'=>'iOS Reviews'],
                ['val'=>'iPhone+iPad', 'label'=>'Both Supported'],
                ['val'=>'Free',     'label'=>'To Download'],
            ];
            foreach($stats as $i => $s):
                $border = $i > 0 ? 'border-left:1px solid var(--border-color);' : '';
            ?>
            <div style="<?= $border ?>">
                <div style="font-size:1.85rem; font-weight:800; color:var(--primary-dark); line-height:1; margin-bottom:0.4rem;"><?= $s['val'] ?></div>
                <div style="font-size:0.85rem; color:var(--text-muted);"><?= $s['label'] ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== iOS FEATURES ========== -->
<section id="features" class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>Built for iPhone &amp; iPad — Every Feature You Need</h2>
            <p>ZYLO's iOS app is designed from the ground up for Apple devices, with native iOS features that make business management effortless.</p>
        </div>

        <div style="display:grid; grid-template-columns:repeat(3,1fr); gap:1.75rem; margin-top:3rem;" class="features-grid">
            <?php
            $features = [
                [
                    'icon'  => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
                    'title' => 'GST Invoice on iPhone',
                    'desc'  => 'Create, share, and track GST-compliant invoices right from your iPhone. Generate professional PDFs and send via WhatsApp, email, or AirDrop in seconds.',
                    'pts'   => ['GST & e-Invoice compliant','PDF via WhatsApp & AirDrop','Payment link in invoice']
                ],
                [
                    'icon'  => 'M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4',
                    'title' => 'Face ID & Touch ID',
                    'desc'  => 'Log in instantly with Face ID or Touch ID. Your business data stays protected with Apple\'s industry-leading biometric security — fast and effortless.',
                    'pts'   => ['Face ID & Touch ID login','Zero typing required','Biometric data stays on device']
                ],
                [
                    'icon'  => 'M12 18h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z',
                    'title' => 'iPad Multi-Panel View',
                    'desc'  => 'On iPad, ZYLO uses a split-screen layout so you can view your client list and invoice details side by side. Use Apple Pencil to capture customer signatures.',
                    'pts'   => ['Split-screen on iPad','Apple Pencil signature','Stage Manager support']
                ],
                [
                    'icon'  => 'M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4',
                    'title' => 'Offline Mode',
                    'desc'  => 'No WiFi? No problem. Create invoices, add expenses, and update stock in full offline mode. Everything auto-syncs when you reconnect to the internet.',
                    'pts'   => ['Full offline functionality','Auto-sync on reconnect','iCloud backup support']
                ],
                [
                    'icon'  => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01',
                    'title' => 'Camera Expense Scanning',
                    'desc'  => 'Snap a photo of any receipt with your iPhone camera. AI extracts the amount, vendor, and date automatically and logs it as an expense instantly.',
                    'pts'   => ['AI receipt OCR','Auto expense categorization','Keep photo proof of receipt']
                ],
                [
                    'icon'  => 'M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9',
                    'title' => 'Push Notifications',
                    'desc'  => 'Get real-time alerts on your iPhone for invoice payments, overdue reminders, low stock, and pending approvals — so you never miss what matters.',
                    'pts'   => ['Payment received alerts','Overdue invoice reminders','Low stock notifications']
                ],
            ];
            foreach($features as $f): ?>
            <div class="card" style="padding:2rem; border-left:3px solid var(--primary); display:flex; flex-direction:column;">
                <div style="width:48px; height:48px; background:rgba(12,79,120,0.08); border-radius:10px; display:flex; align-items:center; justify-content:center; margin-bottom:1.25rem; color:var(--primary); flex-shrink:0;">
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="<?= $f['icon'] ?>"/></svg>
                </div>
                <h3 style="font-size:1.15rem; color:var(--primary-dark); margin-bottom:0.75rem;"><?= $f['title'] ?></h3>
                <p style="color:var(--text-muted); font-size:0.93rem; line-height:1.7; margin-bottom:1rem; flex:1;"><?= $f['desc'] ?></p>
                <ul style="list-style:none; padding:0; margin:0;">
                    <?php foreach($f['pts'] as $pt): ?>
                    <li style="display:flex; align-items:center; gap:0.5rem; font-size:0.85rem; color:var(--text-muted); margin-bottom:0.35rem;">
                        <svg width="14" height="14" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <?= $pt ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== FEATURE SPOTLIGHT ========== -->
<section>
    <div class="container">
        <!-- Spotlight 1: iPhone -->
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:5rem; align-items:center; margin-bottom:6rem;" class="intro-grid">
            <div>
                <div style="display:inline-block; background:rgba(12,79,120,0.08); color:var(--primary); font-size:0.78rem; font-weight:700; padding:0.3rem 0.85rem; border-radius:50px; margin-bottom:1.25rem; text-transform:uppercase; letter-spacing:1px;">iPhone App</div>
                <h2 style="font-size:2.25rem; color:var(--primary-dark); line-height:1.25; margin-bottom:1.25rem;">Everything a Business Owner Needs on Their iPhone</h2>
                <p style="font-size:1.05rem; line-height:1.8; color:var(--text-muted); margin-bottom:1.5rem;">From creating a GST invoice in 30 seconds to checking your live P&amp;L before a client meeting — ZYLO on iPhone gives you complete financial visibility wherever you are.</p>
                <p style="font-size:1.05rem; line-height:1.8; color:var(--text-muted); margin-bottom:1.75rem;">Face ID login, offline mode, real-time sync with your web account, and WhatsApp invoice sharing — all built natively for iOS.</p>
                <a href="https://apps.apple.com" target="_blank" rel="noopener noreferrer"
                   style="display:inline-flex; align-items:center; gap:0.75rem; background:#1a1a2e; color:white; padding:0.8rem 1.5rem; border-radius:12px; text-decoration:none; font-weight:600; font-size:0.95rem;"
                   aria-label="Download ZYLO on App Store">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.8-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/></svg>
                    Download on App Store
                </a>
            </div>
            <div style="position:relative;">
                <img src="assets/store/section-1.jpg" alt="ZYLO CRM iPhone app interface showing GST invoice dashboard" width="560" height="380"
                     style="width:100%; border-radius:20px; box-shadow:var(--shadow-xl); display:block;" loading="lazy">
            </div>
        </div>

        <!-- Spotlight 2: iPad -->
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:5rem; align-items:center;" class="intro-grid">
            <div style="order:2;" class="feature-img-right">
                <div style="position:relative;">
                    <img src="assets/store/section-2.jpg" alt="ZYLO CRM iPad app with split-screen layout and Apple Pencil support" width="560" height="380"
                         style="width:100%; border-radius:20px; box-shadow:var(--shadow-xl); display:block;" loading="lazy">
                    <div style="position:absolute; bottom:-1rem; right:-1rem; background:white; border-radius:12px; padding:0.9rem 1.1rem; box-shadow:var(--shadow-lg); border:1px solid var(--border-color);">
                        <div style="font-size:0.75rem; color:var(--text-muted); margin-bottom:0.3rem;">Signed on iPad</div>
                        <div style="font-size:1rem; font-weight:800; color:var(--primary-dark);">✍️ Apple Pencil — Done ✓</div>
                    </div>
                </div>
            </div>
            <div style="order:1;">
                <div style="display:inline-block; background:rgba(12,79,120,0.08); color:var(--primary); font-size:0.78rem; font-weight:700; padding:0.3rem 0.85rem; border-radius:50px; margin-bottom:1.25rem; text-transform:uppercase; letter-spacing:1px;">iPad App</div>
                <h2 style="font-size:2.25rem; color:var(--primary-dark); line-height:1.25; margin-bottom:1.25rem;">A Full Desktop-Class Experience on Your iPad</h2>
                <p style="font-size:1.05rem; line-height:1.8; color:var(--text-muted); margin-bottom:1.5rem;">ZYLO on iPad is fully optimized for the larger screen. Use split-screen to manage clients and invoices side by side, and capture customer signatures with Apple Pencil.</p>
                <div style="display:grid; grid-template-columns:1fr 1fr; gap:0.75rem; margin-bottom:1.75rem;">
                    <?php foreach(['Split-screen layout','Apple Pencil support','Stage Manager ready','Keyboard shortcuts','External display','Files app integration'] as $r): ?>
                    <div style="display:flex; align-items:center; gap:0.5rem; font-size:0.88rem; color:var(--text-muted);">
                        <svg width="14" height="14" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <?= $r ?>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a href="https://apps.apple.com" target="_blank" rel="noopener noreferrer"
                   style="display:inline-flex; align-items:center; gap:0.75rem; background:#1a1a2e; color:white; padding:0.8rem 1.5rem; border-radius:12px; text-decoration:none; font-weight:600; font-size:0.95rem;"
                   aria-label="Download ZYLO for iPad on App Store">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.8-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/></svg>
                    Download for iPad
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ========== TESTIMONIALS ========== -->
<section class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>What iPhone &amp; iPad Users Say</h2>
            <p>Real App Store reviews from business owners using ZYLO on iOS every day.</p>
        </div>
        <div class="grid-3" style="margin-top:3rem;">
            <?php
            $reviews = [
                [
                    'quote'  => '"Face ID login and the clean iOS design makes ZYLO feel like it was made for iPhone. I create invoices in under a minute and send them via WhatsApp instantly."',
                    'name'   => 'David Chen',
                    'role'   => 'Freelance Consultant · Mumbai',
                    'avatar' => 'assets/store/avatar-david.svg',
                    'stars'  => 5,
                ],
                [
                    'quote'  => '"The iPad split-screen is brilliant. I review client details on one side and create the invoice on the other. Apple Pencil signature capture is a great touch too."',
                    'name'   => 'Sarah Miller',
                    'role'   => 'Owner, Studio Sarah · Pune',
                    'avatar' => 'assets/store/avatar-sarah.svg',
                    'stars'  => 5,
                ],
                [
                    'quote'  => '"Offline mode saved me during a trip to a remote site. I created 12 invoices without signal. They all synced perfectly the moment I got back online."',
                    'name'   => 'Emily Watson',
                    'role'   => 'Site Engineer, BuildRight · Bengaluru',
                    'avatar' => 'assets/store/avatar-emily.svg',
                    'stars'  => 5,
                ],
            ];
            foreach($reviews as $r): ?>
            <div class="card" style="background:white; display:flex; flex-direction:column;" itemscope itemtype="https://schema.org/Review">
                <div style="display:flex; gap:2px; margin-bottom:1.1rem;" aria-label="5 out of 5 stars">
                    <?php for($i=0;$i<$r['stars'];$i++): ?>
                    <svg width="15" height="15" fill="#FBBF24" viewBox="0 0 20 20" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    <?php endfor; ?>
                </div>
                <p itemprop="reviewBody" style="font-style:italic; font-size:0.95rem; line-height:1.75; margin-bottom:1.5rem; color:var(--text-main); flex:1;"><?= $r['quote'] ?></p>
                <div style="display:flex; align-items:center; gap:0.85rem; padding-top:1.1rem; border-top:1px solid var(--border-color);" itemscope itemprop="author" itemtype="https://schema.org/Person">
                    <img src="<?= $r['avatar'] ?>" alt="<?= $r['name'] ?>" width="42" height="42"
                         style="width:42px; height:42px; border-radius:50%; object-fit:cover; flex-shrink:0;" loading="lazy">
                    <div>
                        <div style="font-weight:700; font-size:0.9rem; color:var(--text-main);" itemprop="name"><?= $r['name'] ?></div>
                        <div style="font-size:0.8rem; color:var(--text-muted);"><?= $r['role'] ?></div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== FAQ ========== -->
<section>
    <div class="container" style="max-width:820px;">
        <div class="section-title">
            <h2>Frequently Asked Questions</h2>
            <p>Everything you need to know about ZYLO CRM on iPhone and iPad.</p>
        </div>
        <div style="margin-top:2.5rem;" itemscope itemtype="https://schema.org/FAQPage">
            <?php
            $faqs = [
                ['q'=>'Is ZYLO CRM iOS app free to download?',               'a'=>'Yes! The ZYLO CRM iOS app is completely free to download from the Apple App Store. A free Starter plan is included with no credit card required. Premium features are available from ₹999/month.'],
                ['q'=>'Does ZYLO iOS app support Face ID and Touch ID?',      'a'=>'Yes. ZYLO CRM for iOS supports both Face ID and Touch ID for quick, secure login. Your biometric data never leaves your device and is handled entirely by Apple\'s secure authentication system.'],
                ['q'=>'Does the ZYLO iPhone app work offline?',              'a'=>'Yes. ZYLO has a full offline mode. Create invoices, add expenses, and update inventory without internet. All data syncs automatically when you reconnect, with zero data loss.'],
                ['q'=>'Is ZYLO CRM optimized for iPad?',                     'a'=>'Yes. The ZYLO iPad app uses a multi-panel layout to take full advantage of the larger screen. View your dashboard and invoice details side by side, and use Apple Pencil for signature capture.'],
                ['q'=>'Can I sync ZYLO between my iPhone and MacBook?',      'a'=>'Absolutely. Your ZYLO account syncs seamlessly in real-time across iPhone, iPad, and the ZYLO web app on your MacBook or any browser. All changes are reflected instantly on every device.'],
            ];
            foreach($faqs as $i => $faq): ?>
            <div style="border:1px solid var(--border-color); border-radius:12px; margin-bottom:0.9rem; overflow:hidden;"
                 itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <button onclick="toggleFaq(this)" aria-expanded="<?= $i===0?'true':'false' ?>"
                    style="width:100%; text-align:left; background:white; border:none; padding:1.25rem 1.5rem; font-size:0.97rem; font-weight:600; color:var(--primary-dark); cursor:pointer; display:flex; justify-content:space-between; align-items:center; gap:1rem;">
                    <span itemprop="name"><?= $faq['q'] ?></span>
                    <svg class="faq-icon" width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"
                         style="flex-shrink:0; transition:transform 0.3s; <?= $i===0?'transform:rotate(180deg)':'' ?>">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="faq-body" style="display:<?= $i===0?'block':'none' ?>; padding:0 1.5rem 1.25rem; background:white;"
                     itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <p itemprop="text" style="color:var(--text-muted); margin:0; font-size:0.95rem; line-height:1.7;"><?= $faq['a'] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== DOWNLOAD CTA ========== -->
<section style="text-align:center; padding:6rem 0; background:linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%); color:white;">
    <div class="container">
        <h2 style="font-size:2.75rem; margin-bottom:1rem; color:white;">Download ZYLO for iPhone &amp; iPad — Free</h2>
        <p style="max-width:580px; margin:0 auto 2.5rem; font-size:1.1rem; opacity:0.95; color:white;">The highest-rated GST invoicing app on the App Store. Join thousands of business owners managing everything from their iPhone.</p>

        <div style="display:flex; gap:1rem; flex-wrap:wrap; justify-content:center; margin-bottom:2rem;">
            <a href="https://apps.apple.com" target="_blank" rel="noopener noreferrer"
               style="display:inline-flex; align-items:center; gap:0.75rem; background:white; color:#1a1a2e; padding:0.9rem 1.75rem; border-radius:12px; text-decoration:none; font-weight:700; font-size:1rem; transition:opacity 0.2s;"
               aria-label="Download ZYLO CRM on Apple App Store">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.8-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/></svg>
                <div style="text-align:left;">
                    <div style="font-size:0.7rem; opacity:0.7; line-height:1;">DOWNLOAD ON THE</div>
                    <div style="font-size:1.05rem; font-weight:700; line-height:1.3;">App Store</div>
                </div>
            </a>
            <a href="download-mobile-app"
               style="display:inline-flex; align-items:center; gap:0.75rem; background:rgba(255,255,255,0.15); border:2px solid rgba(255,255,255,0.6); color:white; padding:0.8rem 1.75rem; border-radius:12px; text-decoration:none; font-weight:700; font-size:1rem; transition:background 0.2s;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M3.18 23.76a2 2 0 001.96-.19l11.82-6.83-3.06-3.06-10.72 10.08zM.3 1.34A2 2 0 000 2.4v19.2a2 2 0 00.3 1.06L.4 22.76 11.6 11.56v-.24L.4 .24l-.1.1zM21.06 10.2L18 8.4l-3.36 3.36 3.36 3.36 3.06-1.8a2 2 0 000-3.12zM5.14.43L16.96 7.26 13.9 10.32 3.18.24A2 2 0 005.14.43z"/></svg>
                Get Android App
            </a>
        </div>

        <p style="font-size:0.9rem; opacity:0.8; color:white;">Free to download &nbsp;·&nbsp; No credit card &nbsp;·&nbsp; Offline mode &nbsp;·&nbsp; iPhone &amp; iPad</p>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

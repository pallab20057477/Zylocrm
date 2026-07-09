<?php
$pageTitle = "Download ZYLO CRM Mobile App – Android & iOS | Free Business Management App";
$pageDescription = "Download ZYLO CRM mobile app for Android & iOS. Manage invoices, track expenses, create GST bills, and run your entire business from your phone. Free to download.";
$pageKeywords = "download ZYLO app, ZYLO CRM mobile app, GST billing app Android, invoice app download, business management app, accounting app India, free invoice app Android iOS";
$canonicalPath = '/download-mobile-app';
$pageSchema = [
    '@context' => 'https://schema.org',
    '@type'    => 'MobileApplication',
    'name'     => 'ZYLO CRM - Business Management App',
    'url'      => 'https://zylocrm.com/download-mobile-app',
    'description' => 'ZYLO CRM mobile app for Android and iOS. Create GST invoices, track expenses, manage inventory and clients from your smartphone.',
    'operatingSystem' => 'Android, iOS',
    'applicationCategory' => 'BusinessApplication',
    'offers' => [
        '@type' => 'Offer',
        'price' => '0',
        'priceCurrency' => 'INR'
    ],
    'aggregateRating' => [
        '@type'       => 'AggregateRating',
        'ratingValue' => '4.8',
        'reviewCount' => '8420',
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
            'name'  => 'Is the ZYLO CRM mobile app free to download?',
            'acceptedAnswer' => ['@type'=>'Answer','text'=>'Yes! The ZYLO CRM app is completely free to download on both Android (Google Play Store) and iOS (Apple App Store). A free Starter plan is included with no credit card required.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'What features are available on the ZYLO mobile app?',
            'acceptedAnswer' => ['@type'=>'Answer','text'=>'The ZYLO mobile app includes GST invoice creation, expense tracking, inventory management, client management, purchase orders, delivery challans, payment collection, and real-time business reports — all accessible from your smartphone.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Does the ZYLO app work offline?',
            'acceptedAnswer' => ['@type'=>'Answer','text'=>'Yes. ZYLO has an offline mode that lets you create invoices and record transactions without internet. Data automatically syncs when you reconnect.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Is ZYLO available on both Android and iPhone?',
            'acceptedAnswer' => ['@type'=>'Answer','text'=>'Yes. ZYLO CRM is available on both Android (Google Play Store) and iPhone/iPad (Apple App Store). Both apps are kept in sync with the same data.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can I use the same account on mobile and desktop?',
            'acceptedAnswer' => ['@type'=>'Answer','text'=>'Absolutely. Your ZYLO account syncs seamlessly across mobile (Android & iOS) and the web browser. Switch between devices without losing any data.']
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
                    <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                    Android &amp; iOS App — Free
                </div>

                <h1 style="font-size:3.25rem; color:var(--primary-dark); line-height:1.15; margin-bottom:1.5rem;">
                    Run Your Business from Your Phone
                </h1>
                <p style="font-size:1.2rem; line-height:1.8; color:var(--text-muted); margin-bottom:2rem;">
                    Download ZYLO CRM and manage invoices, expenses, inventory, and clients — all from your Android or iPhone. No laptop needed.
                </p>

                <!-- App Store Buttons -->
                <div style="display:flex; gap:1rem; flex-wrap:wrap; margin-bottom:2rem;">
                    <!-- Google Play -->
                    <a href="https://play.google.com/store" target="_blank" rel="noopener noreferrer"
                       style="display:inline-flex; align-items:center; gap:0.75rem; background:#1a1a2e; color:white; padding:0.8rem 1.5rem; border-radius:12px; text-decoration:none; transition:opacity 0.2s; min-width:180px;"
                       aria-label="Download ZYLO CRM on Google Play Store">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M3.18 23.76a2 2 0 001.96-.19l11.82-6.83-3.06-3.06-10.72 10.08zM.3 1.34A2 2 0 000 2.4v19.2a2 2 0 00.3 1.06L.4 22.76 11.6 11.56v-.24L.4 .24l-.1.1zM21.06 10.2L18 8.4l-3.36 3.36 3.36 3.36 3.06-1.8a2 2 0 000-3.12zM5.14.43L16.96 7.26 13.9 10.32 3.18.24A2 2 0 005.14.43z"/></svg>
                        <div>
                            <div style="font-size:0.7rem; opacity:0.8; line-height:1;">GET IT ON</div>
                            <div style="font-size:1rem; font-weight:700; line-height:1.2;">Google Play</div>
                        </div>
                    </a>
                    <!-- App Store -->
                    <a href="https://apps.apple.com" target="_blank" rel="noopener noreferrer"
                       style="display:inline-flex; align-items:center; gap:0.75rem; background:#1a1a2e; color:white; padding:0.8rem 1.5rem; border-radius:12px; text-decoration:none; transition:opacity 0.2s; min-width:180px;"
                       aria-label="Download ZYLO CRM on Apple App Store">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.8-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/></svg>
                        <div>
                            <div style="font-size:0.7rem; opacity:0.8; line-height:1;">DOWNLOAD ON THE</div>
                            <div style="font-size:1rem; font-weight:700; line-height:1.2;">App Store</div>
                        </div>
                    </a>
                </div>

                <div style="display:flex; flex-wrap:wrap; gap:0.6rem; margin-bottom:1.5rem;">
                    <?php foreach(['GST Invoicing','Expense Tracker','Inventory','Client CRM','Offline Mode','Free Plan'] as $pill): ?>
                    <span style="background:white; border:1px solid var(--border-color); color:var(--text-main); font-size:0.82rem; font-weight:600; padding:0.35rem 0.9rem; border-radius:50px;">✓ &nbsp;<?= $pill ?></span>
                    <?php endforeach; ?>
                </div>

                <p style="font-size:0.85rem; color:var(--text-muted); margin-bottom:0;">
                    ⭐ 4.8/5 from 8,420+ reviews &nbsp;·&nbsp; 50,000+ downloads
                </p>
            </div>

            <div style="position:relative;">
                <img src="assets/store/section-1.jpg"
                     alt="ZYLO CRM mobile app for Android and iOS showing invoice and business dashboard"
                     width="580" height="400"
                     style="width:100%; border-radius:20px; box-shadow:var(--shadow-xl); display:block;"
                     fetchpriority="high" loading="lazy">

                <div style="position:absolute; bottom:-1.25rem; left:-1.25rem; background:white; border-radius:14px; padding:0.9rem 1.25rem; box-shadow:var(--shadow-lg); border:1px solid var(--border-color); display:flex; align-items:center; gap:0.75rem;">
                    <span style="width:38px; height:38px; background:#dcfce7; border-radius:10px; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                        <svg width="18" height="18" fill="none" stroke="#16a34a" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M12 10v6m0 0l-3-3m3 3l3-3M3 17V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.78rem; color:var(--text-muted);">Total downloads</div>
                        <div style="font-size:1rem; font-weight:700; color:var(--text-main);">50,000+ <span style="color:#16a34a; font-size:0.8rem;">↑ Growing</span></div>
                    </div>
                </div>

                <div style="position:absolute; top:-1rem; right:-1rem; background:white; border-radius:14px; padding:0.9rem 1.25rem; box-shadow:var(--shadow-lg); border:1px solid var(--border-color); display:flex; align-items:center; gap:0.65rem;">
                    <span style="width:34px; height:34px; background:#fef9c3; border-radius:8px; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                        <svg width="16" height="16" fill="#ca8a04" viewBox="0 0 20 20" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.78rem; color:var(--text-muted);">App Store Rating</div>
                        <div style="font-size:0.9rem; font-weight:700; color:var(--text-main);">4.8 ⭐ (8,420 reviews)</div>
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
                ['val'=>'50,000+', 'label'=>'App Downloads'],
                ['val'=>'4.8 ⭐',  'label'=>'Average Rating'],
                ['val'=>'99.9%',   'label'=>'App Uptime'],
                ['val'=>'Free',    'label'=>'To Download'],
            ];
            foreach($stats as $i => $s):
                $border = $i > 0 ? 'border-left:1px solid var(--border-color);' : '';
            ?>
            <div style="<?= $border ?>">
                <div style="font-size:2rem; font-weight:800; color:var(--primary-dark); line-height:1; margin-bottom:0.4rem;"><?= $s['val'] ?></div>
                <div style="font-size:0.85rem; color:var(--text-muted);"><?= $s['label'] ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== APP FEATURES ========== -->
<section id="features" class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>Everything Your Business Needs in One App</h2>
            <p>ZYLO's mobile app brings the full power of our platform to your Android or iPhone.</p>
        </div>

        <div style="display:grid; grid-template-columns:repeat(3,1fr); gap:1.75rem; margin-top:3rem;" class="features-grid">
            <?php
            $features = [
                [
                    'icon'  => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
                    'title' => 'GST Invoice Creation',
                    'desc'  => 'Create, send, and track GST-compliant invoices directly from your phone. Generate professional PDFs and share via WhatsApp or email instantly.',
                    'pts'   => ['GST & e-Invoice ready','PDF generation & sharing','WhatsApp delivery']
                ],
                [
                    'icon'  => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01',
                    'title' => 'Expense Tracking',
                    'desc'  => 'Capture receipts on-the-go with your phone camera. AI auto-categorizes expenses and keeps you audit-ready with organized records.',
                    'pts'   => ['Camera receipt scanning','AI auto-categorization','Instant expense reports']
                ],
                [
                    'icon'  => 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4',
                    'title' => 'Inventory Management',
                    'desc'  => 'Track stock levels, scan barcodes, set reorder alerts, and manage warehouse operations — all from your mobile device.',
                    'pts'   => ['Barcode & QR scanning','Low stock alerts','Multi-location support']
                ],
                [
                    'icon'  => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z',
                    'title' => 'Client CRM',
                    'desc'  => 'Manage your customer database, track communication history, log follow-ups, and never miss a sales opportunity from your phone.',
                    'pts'   => ['Full client database','Call & note logging','Follow-up reminders']
                ],
                [
                    'icon'  => 'M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4',
                    'title' => 'Offline Mode',
                    'desc'  => 'No internet? No problem. Create invoices and record transactions offline. Everything syncs automatically when you reconnect.',
                    'pts'   => ['Full offline functionality','Auto-sync on reconnect','Zero data loss']
                ],
                [
                    'icon'  => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z',
                    'title' => 'Real-time Reports',
                    'desc'  => 'View P&L, cash flow, sales summaries, and outstanding payment reports with live data updates — right on your mobile dashboard.',
                    'pts'   => ['Live P&L dashboard','Sales & collection reports','Outstanding payment alerts']
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
        <!-- Spotlight 1 -->
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:5rem; align-items:center; margin-bottom:6rem;" class="intro-grid">
            <div>
                <div style="display:inline-block; background:rgba(12,79,120,0.08); color:var(--primary); font-size:0.78rem; font-weight:700; padding:0.3rem 0.85rem; border-radius:50px; margin-bottom:1.25rem; text-transform:uppercase; letter-spacing:1px;">Android App</div>
                <h2 style="font-size:2.25rem; color:var(--primary-dark); line-height:1.25; margin-bottom:1.25rem;">Full-Featured Android App for Business Owners</h2>
                <p style="font-size:1.05rem; line-height:1.8; color:var(--text-muted); margin-bottom:1.5rem;">The ZYLO Android app gives you complete control of your business on the go. Create GST invoices in seconds, track payments, manage inventory with barcode scanning, and get real-time profit reports — all from your Android phone.</p>
                <p style="font-size:1.05rem; line-height:1.8; color:var(--text-muted); margin-bottom:1.75rem;">Works seamlessly with your ZYLO web account. Every change syncs instantly across all your devices.</p>
                <a href="https://play.google.com/store" target="_blank" rel="noopener noreferrer"
                   style="display:inline-flex; align-items:center; gap:0.75rem; background:#1a1a2e; color:white; padding:0.8rem 1.5rem; border-radius:12px; text-decoration:none; font-weight:600; font-size:0.95rem;"
                   aria-label="Download ZYLO on Google Play">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M3.18 23.76a2 2 0 001.96-.19l11.82-6.83-3.06-3.06-10.72 10.08zM.3 1.34A2 2 0 000 2.4v19.2a2 2 0 00.3 1.06L.4 22.76 11.6 11.56v-.24L.4 .24l-.1.1zM21.06 10.2L18 8.4l-3.36 3.36 3.36 3.36 3.06-1.8a2 2 0 000-3.12zM5.14.43L16.96 7.26 13.9 10.32 3.18.24A2 2 0 005.14.43z"/></svg>
                    Download on Google Play
                </a>
            </div>
            <div style="position:relative;">
                <img src="assets/store/section-1.jpg" alt="ZYLO CRM Android app interface showing GST invoicing and business dashboard" width="560" height="380"
                     style="width:100%; border-radius:20px; box-shadow:var(--shadow-xl); display:block;" loading="lazy">
            </div>
        </div>

        <!-- Spotlight 2 -->
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:5rem; align-items:center;" class="intro-grid">
            <div style="order:2;" class="feature-img-right">
                <div style="position:relative;">
                    <img src="assets/store/section-2.jpg" alt="ZYLO CRM iOS iPhone app showing invoice and client management" width="560" height="380"
                         style="width:100%; border-radius:20px; box-shadow:var(--shadow-xl); display:block;" loading="lazy">
                    <div style="position:absolute; bottom:-1rem; right:-1rem; background:white; border-radius:12px; padding:0.9rem 1.1rem; box-shadow:var(--shadow-lg); border:1px solid var(--border-color);">
                        <div style="font-size:0.75rem; color:var(--text-muted); margin-bottom:0.3rem;">Invoice sent via</div>
                        <div style="font-size:1rem; font-weight:800; color:var(--primary-dark);">📱 WhatsApp — Paid ✓</div>
                    </div>
                </div>
            </div>
            <div style="order:1;">
                <div style="display:inline-block; background:rgba(12,79,120,0.08); color:var(--primary); font-size:0.78rem; font-weight:700; padding:0.3rem 0.85rem; border-radius:50px; margin-bottom:1.25rem; text-transform:uppercase; letter-spacing:1px;">iPhone &amp; iPad App</div>
                <h2 style="font-size:2.25rem; color:var(--primary-dark); line-height:1.25; margin-bottom:1.25rem;">Powerful iOS App for iPhone and iPad</h2>
                <p style="font-size:1.05rem; line-height:1.8; color:var(--text-muted); margin-bottom:1.5rem;">ZYLO's iOS app is optimized for iPhone and iPad. Enjoy a beautifully designed interface that makes invoicing, expense tracking, and client management feel effortless.</p>
                <div style="display:grid; grid-template-columns:1fr 1fr; gap:0.75rem; margin-bottom:1.75rem;">
                    <?php foreach(['Face ID login','iPad optimized','Siri shortcuts','iCloud sync','Apple Pay ready','Widget support'] as $r): ?>
                    <div style="display:flex; align-items:center; gap:0.5rem; font-size:0.88rem; color:var(--text-muted);">
                        <svg width="14" height="14" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <?= $r ?>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a href="https://apps.apple.com" target="_blank" rel="noopener noreferrer"
                   style="display:inline-flex; align-items:center; gap:0.75rem; background:#1a1a2e; color:white; padding:0.8rem 1.5rem; border-radius:12px; text-decoration:none; font-weight:600; font-size:0.95rem;"
                   aria-label="Download ZYLO on App Store">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.8-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/></svg>
                    Download on App Store
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ========== TESTIMONIALS ========== -->
<section class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>What Users Say About ZYLO App</h2>
            <p>Real reviews from business owners using ZYLO on their phones every day.</p>
        </div>
        <div class="grid-3" style="margin-top:3rem;">
            <?php
            $reviews = [
                [
                    'quote'  => '"I run my entire trading business from my phone now. ZYLO lets me create GST invoices and share them on WhatsApp in under 30 seconds. It\'s honestly changed how I work."',
                    'name'   => 'David Chen',
                    'role'   => 'Owner, FastTrade Exports · Mumbai',
                    'avatar' => 'assets/store/avatar-david.svg',
                    'stars'  => 5,
                ],
                [
                    'quote'  => '"The offline mode is a game-changer. I travel to remote areas for client visits. ZYLO lets me create invoices without internet and syncs everything when I\'m back online."',
                    'name'   => 'Sarah Miller',
                    'role'   => 'Field Sales Manager, BrightCo · Pune',
                    'avatar' => 'assets/store/avatar-sarah.svg',
                    'stars'  => 5,
                ],
                [
                    'quote'  => '"Switched from Tally to ZYLO mobile app and haven\'t looked back. The barcode scanning for inventory and instant P&L dashboard on my phone is incredible."',
                    'name'   => 'Emily Watson',
                    'role'   => 'Retailer, Organic Basket · Bengaluru',
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
            <p>Everything you need to know about the ZYLO CRM mobile app.</p>
        </div>
        <div style="margin-top:2.5rem;" itemscope itemtype="https://schema.org/FAQPage">
            <?php
            $faqs = [
                ['q'=>'Is the ZYLO CRM mobile app free to download?',         'a'=>'Yes! The ZYLO CRM app is completely free to download on both Android (Google Play Store) and iOS (Apple App Store). A free Starter plan is included with no credit card required.'],
                ['q'=>'What features are available on the ZYLO mobile app?',  'a'=>'The ZYLO mobile app includes GST invoice creation, expense tracking, inventory management, client CRM, purchase orders, delivery challans, payment collection, and real-time business reports — all accessible from your smartphone.'],
                ['q'=>'Does the ZYLO app work offline?',                      'a'=>'Yes. ZYLO has an offline mode that lets you create invoices and record transactions without internet. Data automatically syncs when you reconnect, with zero data loss.'],
                ['q'=>'Is ZYLO available on both Android and iPhone?',        'a'=>'Yes. ZYLO CRM is available on both Android (Google Play Store) and iPhone/iPad (Apple App Store). Both apps stay in sync with the same account data in real-time.'],
                ['q'=>'Can I use the same account on mobile and desktop?',    'a'=>'Absolutely. Your ZYLO account syncs seamlessly across mobile (Android & iOS) and the web browser. Switch between devices anytime without losing any data.'],
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
        <h2 style="font-size:2.75rem; margin-bottom:1rem; color:white;">Download ZYLO Free Today</h2>
        <p style="max-width:560px; margin:0 auto 2.5rem; font-size:1.1rem; opacity:0.95; color:white;">Available on Android and iOS. Join 50,000+ business owners managing their entire business from their phone.</p>

        <div style="display:flex; gap:1rem; flex-wrap:wrap; justify-content:center; margin-bottom:2rem;">
            <a href="https://play.google.com/store" target="_blank" rel="noopener noreferrer"
               style="display:inline-flex; align-items:center; gap:0.75rem; background:white; color:#1a1a2e; padding:0.9rem 1.75rem; border-radius:12px; text-decoration:none; font-weight:700; font-size:1rem; transition:opacity 0.2s;"
               aria-label="Download ZYLO CRM on Google Play Store">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M3.18 23.76a2 2 0 001.96-.19l11.82-6.83-3.06-3.06-10.72 10.08zM.3 1.34A2 2 0 000 2.4v19.2a2 2 0 00.3 1.06L.4 22.76 11.6 11.56v-.24L.4 .24l-.1.1zM21.06 10.2L18 8.4l-3.36 3.36 3.36 3.36 3.06-1.8a2 2 0 000-3.12zM5.14.43L16.96 7.26 13.9 10.32 3.18.24A2 2 0 005.14.43z"/></svg>
                <div style="text-align:left;">
                    <div style="font-size:0.7rem; opacity:0.7; line-height:1;">GET IT ON</div>
                    <div style="font-size:1.05rem; font-weight:700; line-height:1.3;">Google Play</div>
                </div>
            </a>
            <a href="https://apps.apple.com" target="_blank" rel="noopener noreferrer"
               style="display:inline-flex; align-items:center; gap:0.75rem; background:white; color:#1a1a2e; padding:0.9rem 1.75rem; border-radius:12px; text-decoration:none; font-weight:700; font-size:1rem; transition:opacity 0.2s;"
               aria-label="Download ZYLO CRM on Apple App Store">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.8-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/></svg>
                <div style="text-align:left;">
                    <div style="font-size:0.7rem; opacity:0.7; line-height:1;">DOWNLOAD ON THE</div>
                    <div style="font-size:1.05rem; font-weight:700; line-height:1.3;">App Store</div>
                </div>
            </a>
        </div>

        <p style="font-size:0.9rem; opacity:0.8; color:white;">Free to download &nbsp;·&nbsp; No credit card &nbsp;·&nbsp; Works offline &nbsp;·&nbsp; Android &amp; iOS</p>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

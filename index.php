<?php
$pageTitle = "ZYLO CRM – Business Management Software for Accounts, Inventory & Clients";
$pageDescription = "ZYLO CRM is an all-in-one business management platform. Manage accounts, automate invoicing, track inventory, and grow client relationships — all in one place. Start free.";
$pageKeywords = "CRM software India, business management software, accounting software, inventory management, invoicing software, GST billing, client management, ZYLO CRM";
$canonicalPath = '/';
$pageSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'WebSite',
    'name' => 'ZYLO CRM',
    'url' => 'https://zylocrm.com',
    'description' => 'All-in-one business management software for accounts, inventory, and client relationships.',
    'potentialAction' => [
        '@type' => 'SearchAction',
        'target' => [
            '@type' => 'EntryPoint',
            'urlTemplate' => 'https://zylocrm.com/search?q={search_term_string}'
        ],
        'query-input' => 'required name=search_term_string'
    ]
];

$orgSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'Organization',
    'name' => 'ZYLO CRM',
    'url' => 'https://zylocrm.com',
    'logo' => 'https://zylocrm.com/assets/logo.png',
    'description' => 'All-in-one CRM and business management platform for Indian SMBs and startups.',
    'foundingDate' => '2022',
    'contactPoint' => [
        '@type' => 'ContactPoint',
        'telephone' => '+91-7501137266',
        'contactType' => 'customer support',
        'availableLanguage' => ['English', 'Hindi'],
        'areaServed' => 'IN'
    ],
    'address' => [
        '@type' => 'PostalAddress',
        'addressLocality' => 'Contai',
        'addressRegion' => 'West Bengal',
        'postalCode' => '721401',
        'addressCountry' => 'IN'
    ],
    'sameAs' => ['https://wa.me/917501137266']
];

$softwareSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'SoftwareApplication',
    'name' => 'ZYLO CRM',
    'applicationCategory' => 'BusinessApplication',
    'operatingSystem' => 'Web, Android, iOS',
    'offers' => [
        '@type' => 'Offer',
        'price' => '0',
        'priceCurrency' => 'USD',
        'description' => 'Free Starter Plan available'
    ],
    'aggregateRating' => [
        '@type' => 'AggregateRating',
        'ratingValue' => '4.8',
        'reviewCount' => '312',
        'bestRating' => '5'
    ]
];

include 'includes/header.php';
?>
<script type="application/ld+json"><?php echo json_encode($orgSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>
<script type="application/ld+json"><?php echo json_encode($softwareSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>

<!-- ========== HERO ========== -->
<section class="hero" aria-label="Hero">
    <div class="container">
        <div class="hero-content">
            <!-- Badge -->
            <div style="display:inline-flex; align-items:center; gap:0.5rem; background:rgba(12,79,120,0.1); color:var(--primary); font-size:0.82rem; font-weight:700; padding:0.35rem 1rem; border-radius:50px; margin-bottom:1.5rem; text-transform:uppercase; letter-spacing:1px; border:1px solid rgba(12,79,120,0.2);">
                <span style="width:7px;height:7px;background:#22c55e;border-radius:50%;display:inline-block;animation:pulse-dot 2s ease-in-out infinite;"></span>
                Trusted by 10,000+ Businesses
            </div>

            <h1 style="font-size:3.75rem; line-height:1.1; margin-bottom:1.5rem;">
                The Smarter Way to Run Your Business
            </h1>
            <p style="font-size:1.25rem; line-height:1.7; margin-bottom:2.25rem; color:var(--text-muted);">
                ZYLO CRM brings accounts, inventory, invoicing, and client management into one clean platform — so you can stop juggling tools and start growing.
            </p>

            <div class="hero-btns" style="margin-bottom:2rem;">
                <a href="services" class="btn btn-primary" style="padding:1rem 2.25rem; font-size:1.05rem;" aria-label="Start your free trial with ZYLO CRM">
                    Start Free — No Card Needed
                </a>
                <a href="contact" class="btn btn-outline" style="padding:1rem 2.25rem; font-size:1.05rem;" aria-label="Book a live demo of ZYLO CRM">
                    Book a Live Demo
                </a>
            </div>

            <!-- Social proof micro-line -->
            <div style="display:flex; align-items:center; gap:0.75rem; flex-wrap:wrap;">
                <div style="display:flex;">
                    <img src="assets/store/avatar-sarah.jpg" alt="ZYLO user" width="30" height="30"
                         style="width:30px;height:30px;border-radius:50%;object-fit:cover;border:2px solid white;margin-left:-6px;">
                    <img src="assets/store/avatar-emily.jpg" alt="ZYLO user" width="30" height="30"
                         style="width:30px;height:30px;border-radius:50%;object-fit:cover;border:2px solid white;margin-left:-10px;">
                    <img src="assets/store/avatar-david.jpg" alt="ZYLO user" width="30" height="30"
                         style="width:30px;height:30px;border-radius:50%;object-fit:cover;border:2px solid white;margin-left:-10px;">
                </div>
                <span style="color:var(--text-muted); font-size:0.875rem;">
                    <strong style="color:var(--text-main);">4.8 ★</strong>&nbsp; from 312+ reviews &nbsp;·&nbsp; Join 10,000+ teams
                </span>
            </div>
        </div>

        <div class="hero-image">
            <img src="assets/store/hero-1.jpg"
                 alt="ZYLO CRM dashboard showing accounts, inventory, and client management"
                 width="600" height="420"
                 style="max-width:100%; height:auto; border-radius:20px;"
                 fetchpriority="high">
        </div>
    </div>
</section>

<style>
@keyframes pulse-dot {
    0%, 100% { opacity: 1; transform: scale(1); }
    50%       { opacity: 0.6; transform: scale(1.4); }
}
</style>

<!-- ========== TRUSTED BY ========== -->
<section style="padding:2.5rem 0; background:white; border-bottom:1px solid var(--border-color);" aria-label="Trusted by">
    <div class="container" style="text-align:center;">
        <p style="color:var(--text-muted); text-transform:uppercase; letter-spacing:2px; font-size:0.8rem; margin-bottom:1.75rem;">Trusted by fast-growing teams across India</p>
        <div style="display:flex; justify-content:center; align-items:center; flex-wrap:wrap; gap:2.5rem 3.5rem; opacity:0.45; filter:grayscale(1);">
            <span style="font-size:1.2rem; font-weight:800; color:var(--text-main); letter-spacing:-0.5px;">ACME Corp</span>
            <span style="font-size:1.2rem; font-weight:800; color:var(--text-main); letter-spacing:-0.5px;">Globex</span>
            <span style="font-size:1.2rem; font-weight:800; color:var(--text-main); letter-spacing:-0.5px;">Soylent</span>
            <span style="font-size:1.2rem; font-weight:800; color:var(--text-main); letter-spacing:-0.5px;">Initech</span>
            <span style="font-size:1.2rem; font-weight:800; color:var(--text-main); letter-spacing:-0.5px;">Umbrella Co.</span>
        </div>
    </div>
</section>

<!-- ========== STATS ========== -->
<section style="padding:4.5rem 0; background:linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);" aria-label="Key metrics">
    <div class="container">
        <div style="display:grid; grid-template-columns:repeat(4, 1fr); gap:2rem; text-align:center;">
            <div>
                <div style="font-size:2.75rem; font-weight:800; color:white; line-height:1; margin-bottom:0.5rem;" aria-label="10,000 plus active users">10k+</div>
                <p style="color:rgba(255,255,255,0.75); margin:0; font-size:0.95rem;">Active Users</p>
            </div>
            <div style="border-left:1px solid rgba(255,255,255,0.15);">
                <div style="font-size:2.75rem; font-weight:800; color:white; line-height:1; margin-bottom:0.5rem;" aria-label="5 million plus invoices generated">5M+</div>
                <p style="color:rgba(255,255,255,0.75); margin:0; font-size:0.95rem;">Invoices Generated</p>
            </div>
            <div style="border-left:1px solid rgba(255,255,255,0.15);">
                <div style="font-size:2.75rem; font-weight:800; color:white; line-height:1; margin-bottom:0.5rem;">99.9%</div>
                <p style="color:rgba(255,255,255,0.75); margin:0; font-size:0.95rem;">Uptime Guaranteed</p>
            </div>
            <div style="border-left:1px solid rgba(255,255,255,0.15);">
                <div style="font-size:2.75rem; font-weight:800; color:white; line-height:1; margin-bottom:0.5rem;">24/7</div>
                <p style="color:rgba(255,255,255,0.75); margin:0; font-size:0.95rem;">Priority Support</p>
            </div>
        </div>
    </div>
</section>

<!-- ========== CORE FEATURES ========== -->
<section class="bg-offwhite" aria-labelledby="features-heading">
    <div class="container">
        <div class="section-title">
            <h2 id="features-heading">Everything Your Business Needs</h2>
            <p>One platform to handle finances, stock, and clients — without the complexity.</p>
        </div>

        <div class="grid-3" style="padding-top:1.25rem; align-items:start;">
            <div class="card">
                <div class="card-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </div>
                <h3>Accounts & Invoicing</h3>
                <p>Generate GST-compliant invoices, track expenses, reconcile payments, and get real-time P&L reports — all automated.</p>
                <ul style="color:var(--text-muted); font-size:0.9rem; margin-bottom:1.5rem; line-height:2;">
                    <li>✓ &nbsp;GST & e-Invoice ready</li>
                    <li>✓ &nbsp;Automated payment reminders</li>
                    <li>✓ &nbsp;Multi-currency support</li>
                </ul>
                <a href="accounting-software" style="font-weight:600; margin-top:auto; display:inline-flex; align-items:center; gap:0.3rem;" aria-label="Learn more about Accounts & Invoicing">Learn more &rarr;</a>
            </div>

            <div class="card" style="border-color:var(--primary); box-shadow:var(--shadow-lg); overflow:visible; margin-top:1rem;">
                <div style="position:absolute; top:0; left:50%; transform:translate(-50%,-50%); background:var(--primary); color:white; font-size:0.7rem; font-weight:700; padding:0.35rem 1.1rem; border-radius:50px; text-transform:uppercase; letter-spacing:1px; white-space:nowrap; box-shadow:0 4px 12px rgba(12,79,120,0.3);">Most Popular</div>
                <div class="card-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" /></svg>
                </div>
                <h3>Inventory Control</h3>
                <p>Track stock levels in real time, manage product variants, auto-generate purchase orders, and eliminate stockouts forever.</p>
                <ul style="color:var(--text-muted); font-size:0.9rem; margin-bottom:1.5rem; line-height:2;">
                    <li>✓ &nbsp;Real-time stock alerts</li>
                    <li>✓ &nbsp;Barcode & SKU support</li>
                    <li>✓ &nbsp;Auto purchase orders</li>
                </ul>
                <a href="inventory-software" style="font-weight:600; margin-top:auto; display:inline-flex; align-items:center; gap:0.3rem;" aria-label="Learn more about Inventory Control">Learn more &rarr;</a>
            </div>

            <div class="card">
                <div class="card-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                </div>
                <h3>Client & Sales CRM</h3>
                <p>Manage leads, track deals through a visual pipeline, log interactions, and never let a follow-up slip through the cracks.</p>
                <ul style="color:var(--text-muted); font-size:0.9rem; margin-bottom:1.5rem; line-height:2;">
                    <li>✓ &nbsp;Visual sales pipeline</li>
                    <li>✓ &nbsp;Lead scoring & automation</li>
                    <li>✓ &nbsp;WhatsApp integration</li>
                </ul>
                <a href="sales-crm" style="font-weight:600; margin-top:auto; display:inline-flex; align-items:center; gap:0.3rem;" aria-label="Learn more about Client & Sales CRM">Learn more &rarr;</a>
            </div>
        </div>

        <!-- Secondary feature grid -->
        <div style="display:grid; grid-template-columns:repeat(3,1fr); gap:1.25rem; margin-top:1.5rem;" class="secondary-feat-grid">
            <?php
            $miniFeatures = [
                ['icon'=>'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z', 'label'=>'GST Billing', 'href'=>'gst-billing-software'],
                ['icon'=>'M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z', 'label'=>'Quotation Software', 'href'=>'quotation-software'],
                ['icon'=>'M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z', 'label'=>'e-Invoicing', 'href'=>'e-invoicing-software'],
                ['icon'=>'M13 10V3L4 14h7v7l9-11h-7z', 'label'=>'Lead Management', 'href'=>'lead-management-software'],
                ['icon'=>'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15', 'label'=>'Subscription Mgmt', 'href'=>'subscription-management-software'],
                ['icon'=>'M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z', 'label'=>'Mobile App', 'href'=>'download-mobile-app'],
            ];
            foreach ($miniFeatures as $f): ?>
            <a href="<?= $f['href'] ?>" style="display:flex; align-items:center; gap:0.75rem; background:white; padding:1rem 1.25rem; border-radius:12px; border:1px solid var(--border-color); color:var(--text-main); font-weight:500; font-size:0.9rem; transition:all 0.2s;" onmouseover="this.style.borderColor='var(--primary)';this.style.boxShadow='var(--shadow-md)';" onmouseout="this.style.borderColor='var(--border-color)';this.style.boxShadow='none';" aria-label="<?= $f['label'] ?>">
                <span style="width:34px;height:34px;background:rgba(12,79,120,0.08);border-radius:8px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                    <svg width="17" height="17" fill="none" stroke="var(--primary)" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="<?= htmlspecialchars($f['icon'], ENT_QUOTES, 'UTF-8') ?>" /></svg>
                </span>
                <?= $f['label'] ?>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== HOW IT WORKS ========== -->
<section aria-labelledby="how-heading">
    <div class="container">
        <div class="section-title">
            <h2 id="how-heading">Up and Running in 3 Steps</h2>
            <p>No lengthy setup. No training required. Just sign up and go.</p>
        </div>

        <div style="display:grid; grid-template-columns:repeat(3,1fr); gap:2rem; position:relative;" class="steps-grid">
            <!-- connector line (desktop only) -->
            <div style="position:absolute; top:40px; left:calc(16.66% + 1rem); right:calc(16.66% + 1rem); height:2px; background:linear-gradient(90deg, var(--primary) 0%, var(--primary-light) 100%); z-index:0;" class="steps-connector" aria-hidden="true"></div>

            <?php
            $steps = [
                ['n'=>'1', 'title'=>'Create Your Account', 'desc'=>'Sign up in under 60 seconds — no credit card, no setup fee. Your workspace is ready instantly.'],
                ['n'=>'2', 'title'=>'Import & Configure',  'desc'=>'Bring in your existing clients, products, and data with one-click import. Tailor every module to your workflow.'],
                ['n'=>'3', 'title'=>'Automate & Grow',     'desc'=>'Let ZYLO handle recurring invoices, low-stock alerts, and follow-up reminders while you focus on growth.'],
            ];
            foreach ($steps as $s): ?>
            <div style="text-align:center; padding:2rem 1.5rem; background:white; border-radius:20px; border:1px solid var(--border-color); box-shadow:var(--shadow-sm); position:relative; z-index:1;">
                <div style="width:70px;height:70px;background:var(--primary);color:white;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:1.75rem;font-weight:800;margin:0 auto 1.5rem;box-shadow:0 0 0 8px rgba(12,79,120,0.1);">
                    <?= $s['n'] ?>
                </div>
                <h3 style="font-size:1.15rem; color:var(--primary-dark); margin-bottom:0.75rem;"><?= $s['title'] ?></h3>
                <p style="font-size:0.95rem; color:var(--text-muted); margin:0;"><?= $s['desc'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== FEATURE SPOTLIGHT ========== -->
<section class="bg-offwhite" aria-labelledby="spotlight-heading">
    <div class="container">
        <div class="section-title">
            <h2 id="spotlight-heading">Built for the Way You Work</h2>
            <p>Powerful features that adapt to your business — not the other way around.</p>
        </div>

        <div style="display:grid; grid-template-columns:1fr 1fr; gap:5rem; align-items:center; margin-bottom:5rem;" class="feature-split">
            <div>
                <div style="display:inline-block; background:rgba(12,79,120,0.08); color:var(--primary); font-size:0.8rem; font-weight:700; padding:0.3rem 0.9rem; border-radius:50px; margin-bottom:1.25rem; text-transform:uppercase; letter-spacing:1px;">Invoicing</div>
                <h3 style="font-size:2rem; color:var(--primary-dark); margin-bottom:1.25rem; line-height:1.3;">Create GST Invoices in Under 30 Seconds</h3>
                <p style="font-size:1.05rem; line-height:1.8; margin-bottom:1.75rem;">Pick a client, add line items, and hit send. ZYLO auto-fills GST rates, calculates totals, and emails the invoice as a professional PDF — all without leaving the screen.</p>
                <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem; margin-bottom:1.75rem;">
                    <?php
                    $pts = ['GST & e-Invoice', 'PDF & WhatsApp share', 'Payment tracking', 'Recurring invoices'];
                    foreach ($pts as $pt): ?>
                    <div style="display:flex; align-items:center; gap:0.5rem; font-size:0.9rem; color:var(--text-muted);">
                        <svg width="16" height="16" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <?= $pt ?>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a href="invoicing-software" class="btn btn-primary" style="padding:0.75rem 1.75rem;">Explore Invoicing</a>
            </div>
            <div style="position:relative;">
                <img src="assets/store/section-1.jpg" alt="ZYLO CRM invoice creation screen" width="560" height="380"
                     style="width:100%; border-radius:20px; box-shadow:var(--shadow-xl); display:block;" loading="lazy">
                <div style="position:absolute;bottom:-1.5rem;left:-1.5rem;background:white;border-radius:14px;padding:1rem 1.25rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.75rem;">
                    <span style="width:38px;height:38px;background:#dcfce7;border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="18" height="18" fill="none" stroke="#16a34a" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.8rem;color:var(--text-muted);">Invoice sent</div>
                        <div style="font-size:0.9rem;font-weight:700;color:var(--text-main);">₹42,500 · just now</div>
                    </div>
                </div>
            </div>
        </div>

        <div style="display:grid; grid-template-columns:1fr 1fr; gap:5rem; align-items:center;" class="feature-split">
            <div style="position:relative; order:-1;" class="feature-img-second">
                <img src="assets/store/section-2.jpg" alt="ZYLO CRM inventory dashboard" width="560" height="380"
                     style="width:100%; border-radius:20px; box-shadow:var(--shadow-xl); display:block;" loading="lazy">
                <div style="position:absolute;top:-1.5rem;right:-1.5rem;background:white;border-radius:14px;padding:1rem 1.25rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.75rem;">
                    <span style="width:38px;height:38px;background:#fef9c3;border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="18" height="18" fill="none" stroke="#ca8a04" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.8rem;color:var(--text-muted);">Low stock alert</div>
                        <div style="font-size:0.9rem;font-weight:700;color:var(--text-main);">3 items need reorder</div>
                    </div>
                </div>
            </div>
            <div>
                <div style="display:inline-block; background:rgba(12,79,120,0.08); color:var(--primary); font-size:0.8rem; font-weight:700; padding:0.3rem 0.9rem; border-radius:50px; margin-bottom:1.25rem; text-transform:uppercase; letter-spacing:1px;">Inventory</div>
                <h3 style="font-size:2rem; color:var(--primary-dark); margin-bottom:1.25rem; line-height:1.3;">Know Your Stock Before It Runs Out</h3>
                <p style="font-size:1.05rem; line-height:1.8; margin-bottom:1.75rem;">ZYLO watches your inventory 24/7 and alerts you the moment stock dips below your threshold — so you can reorder before customers notice a gap.</p>
                <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem; margin-bottom:1.75rem;">
                    <?php
                    $pts2 = ['Real-time stock sync', 'Barcode scanning', 'Demand forecasting', 'Multi-warehouse'];
                    foreach ($pts2 as $pt): ?>
                    <div style="display:flex; align-items:center; gap:0.5rem; font-size:0.9rem; color:var(--text-muted);">
                        <svg width="16" height="16" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <?= $pt ?>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a href="inventory-software" class="btn btn-primary" style="padding:0.75rem 1.75rem;">Explore Inventory</a>
            </div>
        </div>
    </div>
</section>

<!-- ========== TESTIMONIALS ========== -->
<section aria-labelledby="testimonials-heading">
    <div class="container">
        <div class="section-title">
            <h2 id="testimonials-heading">Loved by Businesses Like Yours</h2>
            <p>Real feedback from teams that switched to ZYLO CRM.</p>
        </div>

        <div class="grid-3">
            <?php
            $testimonials = [
                [
                    'quote' => '"ZYLO completely transformed how we handle inventory. What used to take hours of manual checking now happens automatically in real-time. We\'ve cut stock-related losses by 40%."',
                    'name'  => 'Sarah Jenkins',
                    'role'  => 'Operations Manager, Globex',
                    'img'   => 'assets/store/avatar-sarah.jpg',
                    'stars' => 5
                ],
                [
                    'quote' => '"The invoicing module is a lifesaver. We get paid faster, and our CA loves the clean export formats. Setup took less than a day."',
                    'name'  => 'David Chen',
                    'role'  => 'CEO, TechStart',
                    'img'   => 'assets/store/avatar-david.jpg',
                    'stars' => 5
                ],
                [
                    'quote' => '"We switched from a massive, clunky CRM to ZYLO and haven\'t looked back. It\'s fast, intuitive, and exactly what our sales team needed to close more deals."',
                    'name'  => 'Emily Watson',
                    'role'  => 'Sales Director, ACME Corp',
                    'img'   => 'assets/store/avatar-emily.jpg',
                    'stars' => 5
                ],
            ];
            foreach ($testimonials as $t): ?>
            <div class="card" style="background:white; display:flex; flex-direction:column;"
                 itemscope itemtype="https://schema.org/Review">
                <meta itemprop="reviewRating" content="<?= $t['stars'] ?>">
                <!-- Stars -->
                <div style="display:flex; gap:2px; margin-bottom:1.25rem;" aria-label="<?= $t['stars'] ?> out of 5 stars">
                    <?php for ($i = 0; $i < $t['stars']; $i++): ?>
                    <svg width="16" height="16" fill="#FBBF24" viewBox="0 0 20 20" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    <?php endfor; ?>
                </div>
                <p itemprop="reviewBody" style="font-style:italic; font-size:0.97rem; line-height:1.75; margin-bottom:1.5rem; color:var(--text-main); flex:1;"><?= $t['quote'] ?></p>
                <div style="display:flex; align-items:center; gap:0.85rem; margin-top:auto; padding-top:1.25rem; border-top:1px solid var(--border-color);" itemscope itemprop="author" itemtype="https://schema.org/Person">
                    <img src="<?= $t['img'] ?>" alt="<?= $t['name'] ?>" width="44" height="44"
                         style="width:44px;height:44px;border-radius:50%;object-fit:cover;flex-shrink:0;" loading="lazy">
                    <div>
                        <div style="font-weight:700; font-size:0.95rem; color:var(--text-main);" itemprop="name"><?= $t['name'] ?></div>
                        <div style="font-size:0.82rem; color:var(--text-muted);"><?= $t['role'] ?></div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== WHO IT'S FOR ========== -->
<section class="bg-offwhite" aria-labelledby="who-heading">
    <div class="container">
        <div class="section-title">
            <h2 id="who-heading">Built for Every Kind of Business</h2>
            <p>Whether you're a solo freelancer or scaling startup, ZYLO fits your workflow.</p>
        </div>

        <div style="display:grid; grid-template-columns:repeat(4,1fr); gap:1.25rem;" class="who-grid">
            <?php
            $segments = [
                ['icon'=>'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-2 10v-5a1 1 0 00-1-1h-2a1 1 0 00-1 1v5m4 0H9', 'label'=>'SMBs',                    'href'=>'smbs'],
                ['icon'=>'M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z', 'label'=>'Startups',               'href'=>'startups'],
                ['icon'=>'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2',                                                 'label'=>'Consultants',             'href'=>'consultants'],
                ['icon'=>'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z',               'label'=>'Freelancers',             'href'=>'freelancers-self-employed'],
                ['icon'=>'M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z',                              'label'=>'Chartered Accountants',   'href'=>'chartered-accountant'],
                ['icon'=>'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064',            'label'=>'Export / Import',         'href'=>'export-import-business'],
                ['icon'=>'M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',  'label'=>'Professional Services',   'href'=>'professional-services'],
                ['icon'=>'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',                                                                       'label'=>'E-commerce',              'href'=>'services'],
            ];
            foreach ($segments as $seg): ?>
            <a href="<?= $seg['href'] ?>" style="display:flex;align-items:center;gap:0.85rem;background:white;padding:1.1rem 1.25rem;border-radius:14px;border:1px solid var(--border-color);color:var(--text-main);font-weight:600;font-size:0.9rem;transition:all 0.2s;text-decoration:none;" onmouseover="this.style.borderColor='var(--primary)';this.style.transform='translateY(-3px)';this.style.boxShadow='var(--shadow-md)';" onmouseout="this.style.borderColor='var(--border-color)';this.style.transform='';this.style.boxShadow='none';">
                <span style="width:38px;height:38px;background:rgba(12,79,120,0.08);border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                    <svg width="18" height="18" fill="none" stroke="var(--primary)" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="<?= $seg['icon'] ?>"/></svg>
                </span>
                <?= $seg['label'] ?>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== CTA ========== -->
<section style="text-align:center; padding:6rem 0; background:linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);" aria-label="Call to action">
    <div class="container" style="max-width:720px; margin:0 auto;">
        <h2 style="font-size:2.6rem; color:white; margin-bottom:1.25rem; line-height:1.2;">Ready to Simplify the Way You Do Business?</h2>
        <p style="font-size:1.15rem; color:rgba(255,255,255,0.85); margin-bottom:2.5rem; line-height:1.7;">Join over 10,000 businesses that manage their accounts, inventory, and clients with ZYLO — starting for free, scaling as they grow.</p>
        <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap;">
            <a href="services" class="btn" style="padding:1rem 2.25rem; font-size:1.05rem; background:white; color:var(--primary); border-radius:10px; font-weight:700;" aria-label="Get started with ZYLO CRM for free">
                Get Started Free
            </a>
            <a href="contact" class="btn" style="padding:1rem 2.25rem; font-size:1.05rem; background:transparent; color:white; border:2px solid rgba(255,255,255,0.5); border-radius:10px; font-weight:600;" onmouseover="this.style.borderColor='white';" onmouseout="this.style.borderColor='rgba(255,255,255,0.5)';" aria-label="Talk to ZYLO CRM sales team">
                Talk to Sales
            </a>
        </div>
        <p style="color:rgba(255,255,255,0.6); font-size:0.85rem; margin-top:1.5rem; margin-bottom:0;">No credit card needed · Free plan available · Cancel anytime</p>
    </div>
</section>

<style>
/* Secondary feature grid responsive */
@media (max-width: 768px) {
    .secondary-feat-grid { grid-template-columns: 1fr 1fr !important; }
    .steps-connector { display: none !important; }
    .steps-grid { grid-template-columns: 1fr !important; }
    .feature-split { grid-template-columns: 1fr !important; gap: 2.5rem !important; }
    .feature-img-second { order: 0 !important; }
    .who-grid { grid-template-columns: 1fr 1fr !important; }
}
@media (max-width: 480px) {
    .secondary-feat-grid { grid-template-columns: 1fr !important; }
    .who-grid { grid-template-columns: 1fr !important; }
}
</style>

<?php include 'includes/footer.php'; ?>

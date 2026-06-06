<?php
$pageTitle = "Accounting Software for Small Business – GST, Invoicing & Reports | ZYLO CRM";
$pageDescription = "ZYLO's cloud accounting software automates GST invoicing, expense tracking, bank reconciliation & financial reports. Free plan available. Trusted by 10,000+ Indian businesses.";
$pageKeywords = "accounting software India, GST accounting software, invoicing software for small business, expense tracker, cloud accounting, accounting software for freelancers, financial reporting software, best accounting software India";
$canonicalPath = '/accounting-software';
$pageSchema = [
    '@context' => 'https://schema.org',
    '@type'    => 'SoftwareApplication',
    'name'     => 'ZYLO CRM Accounting Software',
    'url'      => 'https://zylocrm.com/accounting-software',
    'description' => 'Cloud-based accounting software with GST invoicing, expense tracking, bank reconciliation, and real-time financial reporting for Indian businesses.',
    'applicationCategory' => 'BusinessApplication',
    'operatingSystem' => 'Web, Android, iOS',
    'provider' => [
        '@type' => 'Organization',
        'name'  => 'ZYLO CRM',
        'url'   => 'https://zylocrm.com',
        'logo'  => 'https://zylocrm.com/assets/logo.png'
    ],
    'offers' => [
        '@type'         => 'Offer',
        'priceCurrency' => 'USD',
        'price'         => '0',
        'description'   => 'Free plan available. Pro plan from $49/month.',
        'pricingModel'  => 'Freemium'
    ],
    'aggregateRating' => [
        '@type'       => 'AggregateRating',
        'ratingValue' => '4.8',
        'reviewCount' => '312',
        'bestRating'  => '5'
    ],
    'featureList' => [
        'GST & e-Invoice compliant invoicing',
        'Automated expense tracking',
        'Bank reconciliation',
        'Real-time financial reports',
        'Multi-currency support',
        'Tax management for India'
    ]
];

$faqSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name'  => 'How much does ZYLO Accounting Software cost?',
            'acceptedAnswer' => ['@type'=>'Answer','text'=>'ZYLO offers a free plan with basic invoicing and expense tracking. Pro plan starts at $49/month with full accounting features, unlimited invoices, bank sync, and 24/7 support.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Is ZYLO accounting software GST compliant?',
            'acceptedAnswer' => ['@type'=>'Answer','text'=>'Yes. ZYLO auto-calculates GST, generates e-Invoices as per GSTN standards, and produces GSTR-ready reports. It supports all GST invoice formats including B2B, B2C, and exports.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can I import existing invoices and data?',
            'acceptedAnswer' => ['@type'=>'Answer','text'=>'Yes. ZYLO provides automated CSV/Excel import tools and a dedicated onboarding specialist to migrate your data safely with zero downtime.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Is my financial data secure with ZYLO?',
            'acceptedAnswer' => ['@type'=>'Answer','text'=>'ZYLO uses bank-grade 256-bit AES encryption, ISO 27001 compliance, role-based access control, and 99.9% uptime SLA. Data is backed up every hour on redundant servers.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can my accountant or CA access my books?',
            'acceptedAnswer' => ['@type'=>'Answer','text'=>'Yes. You can grant your accountant or CA read-only or full access. They can review books, collaborate on reconciliation, and prepare tax returns directly inside ZYLO.']
        ]
    ]
];

include 'includes/header.php';
?>
<script type="application/ld+json"><?php echo json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>

<!-- ========== HERO ========== -->
<section class="bg-offwhite accounting-hero" style="padding-top:calc(var(--header-height) + 4.5rem); padding-bottom:5rem;">
    <div class="container">
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:4rem; align-items:center;" class="intro-grid">
            <div>
                <!-- Badge -->
                <div style="display:inline-flex; align-items:center; gap:0.5rem; background:rgba(12,79,120,0.08); color:var(--primary); font-size:0.8rem; font-weight:700; padding:0.35rem 1rem; border-radius:50px; margin-bottom:1.5rem; text-transform:uppercase; letter-spacing:1px; border:1px solid rgba(12,79,120,0.15);">
                    <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    GST &amp; e-Invoice Compliant
                </div>

                <h1 style="font-size:3.25rem; color:var(--primary-dark); line-height:1.15; margin-bottom:1.5rem;">
                    Accounting Software Built for Indian Businesses
                </h1>
                <p style="font-size:1.2rem; line-height:1.8; color:var(--text-muted); margin-bottom:2rem;">
                    Automate GST invoicing, track every expense, reconcile banks, and get real-time P&amp;L — all from one clean dashboard. No CA degree required.
                </p>

                <!-- Feature pills -->
                <div style="display:flex; flex-wrap:wrap; gap:0.6rem; margin-bottom:2rem;">
                    <?php foreach(['GST Ready','e-Invoice','Bank Sync','Multi-Currency','Free Plan'] as $pill): ?>
                    <span style="background:white; border:1px solid var(--border-color); color:var(--text-main); font-size:0.82rem; font-weight:600; padding:0.35rem 0.9rem; border-radius:50px;">✓ &nbsp;<?= $pill ?></span>
                    <?php endforeach; ?>
                </div>

                <div style="display:flex; gap:1rem; flex-wrap:wrap;">
                    <a href="contact" class="btn btn-primary" style="padding:0.9rem 2rem; font-size:1rem;">Start Free Trial</a>
                    <a href="#features" class="btn btn-outline" style="padding:0.9rem 2rem; font-size:1rem;">See All Features</a>
                </div>

                <!-- Social proof -->
                <p style="margin-top:1.5rem; font-size:0.85rem; color:var(--text-muted); margin-bottom:0;">
                    ⭐ 4.8/5 from 312 reviews &nbsp;·&nbsp; Trusted by 10,000+ businesses
                </p>
            </div>

            <div style="position:relative;">
                <img src="assets/store/section-1.jpg"
                     alt="ZYLO CRM accounting software dashboard showing GST invoices and financial reports"
                     width="580" height="400"
                     style="width:100%; border-radius:20px; box-shadow:var(--shadow-xl); display:block;"
                     fetchpriority="high">
                <!-- Floating stat -->
                <div style="position:absolute; bottom:-1.25rem; left:-1.25rem; background:white; border-radius:14px; padding:0.9rem 1.25rem; box-shadow:var(--shadow-lg); border:1px solid var(--border-color); display:flex; align-items:center; gap:0.75rem;">
                    <span style="width:38px; height:38px; background:#dcfce7; border-radius:10px; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                        <svg width="18" height="18" fill="none" stroke="#16a34a" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" /></svg>
                    </span>
                    <div>
                        <div style="font-size:0.78rem; color:var(--text-muted);">Revenue this month</div>
                        <div style="font-size:1rem; font-weight:700; color:var(--text-main);">₹3,42,800 <span style="color:#16a34a; font-size:0.8rem;">↑ 24%</span></div>
                    </div>
                </div>
                <!-- Floating invoice badge -->
                <div style="position:absolute; top:-1rem; right:-1rem; background:white; border-radius:14px; padding:0.9rem 1.25rem; box-shadow:var(--shadow-lg); border:1px solid var(--border-color); display:flex; align-items:center; gap:0.65rem;">
                    <span style="width:34px; height:34px; background:rgba(12,79,120,0.08); border-radius:8px; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                        <svg width="16" height="16" fill="none" stroke="var(--primary)" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                    </span>
                    <div>
                        <div style="font-size:0.78rem; color:var(--text-muted);">Invoice sent</div>
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
                ['val'=>'5M+',    'label'=>'Invoices Generated'],
                ['val'=>'10,000+','label'=>'Active Businesses'],
                ['val'=>'99.9%',  'label'=>'Uptime SLA'],
                ['val'=>'< 30s',  'label'=>'Invoice Creation Time'],
            ];
            foreach ($stats as $i => $s):
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

<!-- ========== KEY FEATURES ========== -->
<section id="features" class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>Key Features of ZYLO Accounting Software</h2>
            <p>Everything you need to manage your business finances — without the complexity.</p>
        </div>

        <div style="display:grid; grid-template-columns:repeat(3,1fr); gap:1.75rem; margin-top:3rem;" class="features-grid">
            <?php
            $features = [
                [
                    'icon'  => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
                    'title' => 'GST & e-Invoice Ready',
                    'desc'  => 'Generate GSTN-compliant invoices and e-Invoices in seconds. Auto-calculate CGST, SGST, IGST. Export GSTR reports ready to file.',
                    'pts'   => ['B2B, B2C & Export invoices','IRN & QR code generation','GSTR-1 ready reports']
                ],
                [
                    'icon'  => 'M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z',
                    'title' => 'Automated Invoicing',
                    'desc'  => 'Create, send, and track invoices automatically. Set recurring billing, payment reminders, and let customers pay online directly from the invoice.',
                    'pts'   => ['Recurring billing','Auto payment reminders','Online payment links']
                ],
                [
                    'icon'  => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01',
                    'title' => 'Expense Tracking',
                    'desc'  => 'Capture every business expense with AI-powered receipt scanning. Auto-categorize, spot deductible expenses, and stay audit-ready at all times.',
                    'pts'   => ['AI receipt scanning','Auto-categorization','Tax deduction finder']
                ],
                [
                    'icon'  => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z',
                    'title' => 'Financial Reports',
                    'desc'  => 'Get real-time P&amp;L statements, balance sheets, and cash flow reports. Export to PDF or Excel, or share directly with your CA.',
                    'pts'   => ['P&L, balance sheet, cash flow','One-click PDF / Excel export','Share with CA directly']
                ],
                [
                    'icon'  => 'M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z',
                    'title' => 'Bank Reconciliation',
                    'desc'  => 'Auto-sync with your bank via secure API. Match transactions instantly, identify discrepancies, and close your books faster every month.',
                    'pts'   => ['Auto bank feed sync','Smart transaction matching','1000+ banks supported']
                ],
                [
                    'icon'  => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
                    'title' => 'Multi-Currency',
                    'desc'  => 'Invoice clients in 150+ currencies with live exchange rates. Manage international payments and foreign income with zero complexity.',
                    'pts'   => ['150+ currencies','Live exchange rates','Forex gain/loss tracking']
                ],
            ];
            foreach ($features as $f): ?>
            <div class="card" style="padding:2rem; border-left:3px solid var(--primary); display:flex; flex-direction:column;">
                <div style="width:48px; height:48px; background:rgba(12,79,120,0.08); border-radius:10px; display:flex; align-items:center; justify-content:center; margin-bottom:1.25rem; color:var(--primary); flex-shrink:0;">
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="<?= $f['icon'] ?>" /></svg>
                </div>
                <h3 style="font-size:1.15rem; color:var(--primary-dark); margin-bottom:0.75rem;"><?= $f['title'] ?></h3>
                <p style="color:var(--text-muted); font-size:0.93rem; line-height:1.7; margin-bottom:1rem; flex:1;"><?= $f['desc'] ?></p>
                <ul style="list-style:none; padding:0; margin:0;">
                    <?php foreach($f['pts'] as $pt): ?>
                    <li style="display:flex; align-items:center; gap:0.5rem; font-size:0.85rem; color:var(--text-muted); margin-bottom:0.35rem;">
                        <svg width="14" height="14" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
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
                <div style="display:inline-block; background:rgba(12,79,120,0.08); color:var(--primary); font-size:0.78rem; font-weight:700; padding:0.3rem 0.85rem; border-radius:50px; margin-bottom:1.25rem; text-transform:uppercase; letter-spacing:1px;">GST Invoicing</div>
                <h2 style="font-size:2.25rem; color:var(--primary-dark); line-height:1.25; margin-bottom:1.25rem;">Create GST-Compliant Invoices in Under 30 Seconds</h2>
                <p style="font-size:1.05rem; line-height:1.8; color:var(--text-muted); margin-bottom:1.5rem;">Pick a customer, add products, and hit send. ZYLO auto-fills HSN codes, calculates CGST/SGST/IGST, and emails a professional PDF — no manual calculation, no errors.</p>
                <p style="font-size:1.05rem; line-height:1.8; color:var(--text-muted); margin-bottom:1.75rem;">Generate IRN, attach QR codes, and stay 100% compliant with GSTN e-Invoice standards — all without leaving ZYLO.</p>
                <a href="gst-billing-software" class="btn btn-primary" style="padding:0.75rem 1.75rem;">Explore GST Billing</a>
            </div>
            <div style="position:relative;">
                <img src="assets/store/section-1.jpg" alt="ZYLO GST invoice creation dashboard" width="560" height="380"
                     style="width:100%; border-radius:20px; box-shadow:var(--shadow-xl); display:block;" loading="lazy">
            </div>
        </div>

        <!-- Spotlight 2 -->
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:5rem; align-items:center;" class="intro-grid">
            <div style="order:2;" class="feature-img-right">
                <div style="position:relative;">
                    <img src="assets/store/section-2.jpg" alt="ZYLO financial reports and P&L dashboard" width="560" height="380"
                         style="width:100%; border-radius:20px; box-shadow:var(--shadow-xl); display:block;" loading="lazy">
                    <!-- Floating card -->
                    <div style="position:absolute; bottom:-1rem; right:-1rem; background:white; border-radius:12px; padding:0.9rem 1.1rem; box-shadow:var(--shadow-lg); border:1px solid var(--border-color);">
                        <div style="font-size:0.75rem; color:var(--text-muted); margin-bottom:0.3rem;">Net Profit (Q3)</div>
                        <div style="font-size:1.1rem; font-weight:800; color:var(--primary-dark);">₹8,24,500 <span style="color:#16a34a; font-size:0.82rem; font-weight:600;">↑ 31%</span></div>
                    </div>
                </div>
            </div>
            <div style="order:1;">
                <div style="display:inline-block; background:rgba(12,79,120,0.08); color:var(--primary); font-size:0.78rem; font-weight:700; padding:0.3rem 0.85rem; border-radius:50px; margin-bottom:1.25rem; text-transform:uppercase; letter-spacing:1px;">Financial Reports</div>
                <h2 style="font-size:2.25rem; color:var(--primary-dark); line-height:1.25; margin-bottom:1.25rem;">Real-Time Reports Your CA Will Love</h2>
                <p style="font-size:1.05rem; line-height:1.8; color:var(--text-muted); margin-bottom:1.5rem;">Stop waiting for month-end to know where your money is. ZYLO's live P&amp;L, balance sheet, and cash flow dashboards update with every transaction — so you always know your exact financial position.</p>
                <div style="display:grid; grid-template-columns:1fr 1fr; gap:0.75rem; margin-bottom:1.75rem;">
                    <?php foreach(['P&L Statement','Balance Sheet','Cash Flow','GSTR Reports','Tax Summary','Expense Reports'] as $r): ?>
                    <div style="display:flex; align-items:center; gap:0.5rem; font-size:0.88rem; color:var(--text-muted);">
                        <svg width="14" height="14" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                        <?= $r ?>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a href="contact" class="btn btn-outline" style="padding:0.75rem 1.75rem;">See a Demo</a>
            </div>
        </div>
    </div>
</section>

<!-- ========== WHO IT'S FOR ========== -->
<section class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>Who Is ZYLO Accounting Software For?</h2>
            <p>Whether you're just starting out or scaling fast — ZYLO grows with you.</p>
        </div>

        <div style="display:grid; grid-template-columns:repeat(3,1fr); gap:1.75rem; margin-top:3rem;" class="perfect-for-grid">
            <?php
            $personas = [
                [
                    'icon'  => 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z',
                    'title' => 'Freelancers & Consultants',
                    'desc'  => 'Send professional invoices, track income and deductible expenses, and stay tax-ready year-round — without hiring an accountant.',
                    'link'  => 'freelancers-self-employed',
                    'pts'   => ['Quick invoice creation','Expense deduction tracker','Tax filing ready']
                ],
                [
                    'icon'  => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
                    'title' => 'Small Business Owners',
                    'desc'  => 'Get full financial visibility without a dedicated accountant. Manage payables, receivables, and GST compliance from your phone.',
                    'link'  => 'smbs',
                    'pts'   => ['GST billing & compliance','Payables & receivables','Real-time cash flow']
                ],
                [
                    'icon'  => 'M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z',
                    'title' => 'Chartered Accountants',
                    'desc'  => 'Manage multiple client books from a single dashboard. Grant granular access, collaborate on reconciliation, and streamline ITR prep.',
                    'link'  => 'chartered-accountant',
                    'pts'   => ['Multi-client dashboard','Granular access control','CA collaboration tools']
                ],
            ];
            foreach ($personas as $p): ?>
            <div class="card" style="padding:2.25rem; display:flex; flex-direction:column;">
                <div style="width:52px; height:52px; background:rgba(12,79,120,0.08); border-radius:12px; display:flex; align-items:center; justify-content:center; margin-bottom:1.25rem; color:var(--primary);">
                    <svg width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="<?= $p['icon'] ?>" /></svg>
                </div>
                <h3 style="font-size:1.2rem; color:var(--primary-dark); margin-bottom:0.75rem;"><?= $p['title'] ?></h3>
                <p style="color:var(--text-muted); font-size:0.93rem; line-height:1.7; margin-bottom:1rem; flex:1;"><?= $p['desc'] ?></p>
                <ul style="list-style:none; padding:0; margin:0 0 1.5rem;">
                    <?php foreach($p['pts'] as $pt): ?>
                    <li style="display:flex; align-items:center; gap:0.5rem; font-size:0.85rem; color:var(--text-muted); margin-bottom:0.35rem;">
                        <svg width="14" height="14" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                        <?= $pt ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <a href="<?= $p['link'] ?>" style="font-weight:600; font-size:0.9rem; color:var(--primary); display:inline-flex; align-items:center; gap:0.3rem; margin-top:auto;">Learn more &rarr;</a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== COMPARISON TABLE ========== -->
<section>
    <div class="container">
        <div class="section-title">
            <h2>ZYLO vs Traditional Accounting Software</h2>
            <p>See why 10,000+ businesses made the switch.</p>
        </div>

        <div style="overflow-x:auto; margin-top:2.5rem; border-radius:16px; box-shadow:var(--shadow-md); border:1px solid var(--border-color);" class="comparison-table">
            <table style="width:100%; border-collapse:collapse; background:white; min-width:500px;">
                <thead>
                    <tr style="background:var(--primary); color:white;">
                        <th style="padding:1.1rem 1.5rem; text-align:left; font-weight:600; font-size:0.95rem;">Feature</th>
                        <th style="padding:1.1rem 1.5rem; text-align:center; font-weight:700; font-size:0.95rem;">
                            <span style="background:rgba(255,255,255,0.15); padding:0.25rem 0.75rem; border-radius:50px;">ZYLO CRM</span>
                        </th>
                        <th style="padding:1.1rem 1.5rem; text-align:center; font-weight:600; font-size:0.95rem; opacity:0.85;">Traditional Software</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $rows = [
                        ['Free Plan Available',       '✅ Yes — forever free',    '❌ No'],
                        ['GST & e-Invoice Support',   '✅ Built-in, GSTN ready',  '⚠️ Add-on / extra cost'],
                        ['Unlimited Invoices',         '✅ Pro plan',               '❌ Capped at 100–500'],
                        ['Bank Auto-Sync',             '✅ 1000+ banks',            '❌ Manual import only'],
                        ['AI Receipt Scanning',        '✅ Included',               '❌ Not available'],
                        ['Mobile App (Android/iOS)',   '✅ Full featured',          '⚠️ Basic / view-only'],
                        ['CA Collaboration Access',   '✅ Granular roles',         '❌ Limited'],
                        ['Price / Month',              '₹0 – ₹3,999',              '₹4,000 – ₹25,000+'],
                    ];
                    foreach ($rows as $i => $row):
                        $bg = $i % 2 === 1 ? 'background:#f8f9fa;' : '';
                    ?>
                    <tr style="<?= $bg ?>">
                        <td style="padding:1rem 1.5rem; font-weight:600; color:var(--primary-dark); font-size:0.93rem; border-bottom:1px solid var(--border-color);" data-label="Feature"><?= $row[0] ?></td>
                        <td style="padding:1rem 1.5rem; text-align:center; font-size:0.93rem; border-bottom:1px solid var(--border-color); color:var(--primary-dark); font-weight:500;" data-label="ZYLO CRM"><?= $row[1] ?></td>
                        <td style="padding:1rem 1.5rem; text-align:center; font-size:0.93rem; border-bottom:1px solid var(--border-color); color:var(--text-muted);" data-label="Traditional"><?= $row[2] ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- ========== TESTIMONIALS ========== -->
<section class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>What Our Customers Say</h2>
            <p>Real feedback from businesses using ZYLO accounting every day.</p>
        </div>

        <div class="grid-3" style="margin-top:3rem;">
            <?php
            $reviews = [
                [
                    'quote' => '"ZYLO cut our invoice processing time from 2 hours to 10 minutes. GST compliance is now completely stress-free — the GSTR-1 report exports perfectly every month."',
                    'name'  => 'Rajesh Sharma',
                    'role'  => 'Owner, RS Trading Co. · Mumbai',
                    'img'   => 'assets/store/avatar-david.jpg',
                ],
                [
                    'quote' => '"As a CA managing 40+ clients, ZYLO\'s multi-client dashboard is a game-changer. I can review books, flag issues, and collaborate with clients — all in one place."',
                    'name'  => 'Priya Nair',
                    'role'  => 'Chartered Accountant · Bengaluru',
                    'img'   => 'assets/store/avatar-sarah.jpg',
                ],
                [
                    'quote' => '"The bank sync feature alone saves me 4–5 hours every month. Reconciliation used to be my nightmare. Now it\'s done in 15 minutes with ZYLO."',
                    'name'  => 'Emily Watson',
                    'role'  => 'Finance Head, ACME Corp · Delhi',
                    'img'   => 'assets/store/avatar-emily.jpg',
                ],
            ];
            foreach ($reviews as $r): ?>
            <div class="card" style="background:white; display:flex; flex-direction:column;"
                 itemscope itemtype="https://schema.org/Review">
                <div style="display:flex; gap:2px; margin-bottom:1.1rem;" aria-label="5 out of 5 stars">
                    <?php for ($i=0;$i<5;$i++): ?>
                    <svg width="15" height="15" fill="#FBBF24" viewBox="0 0 20 20" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    <?php endfor; ?>
                </div>
                <p itemprop="reviewBody" style="font-style:italic; font-size:0.95rem; line-height:1.75; margin-bottom:1.5rem; color:var(--text-main); flex:1;"><?= $r['quote'] ?></p>
                <div style="display:flex; align-items:center; gap:0.85rem; padding-top:1.1rem; border-top:1px solid var(--border-color);" itemscope itemprop="author" itemtype="https://schema.org/Person">
                    <img src="<?= $r['img'] ?>" alt="<?= $r['name'] ?>" width="42" height="42"
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
            <p>Everything you need to know about ZYLO Accounting Software.</p>
        </div>

        <div style="margin-top:2.5rem;" itemscope itemtype="https://schema.org/FAQPage">
            <?php
            $faqs = [
                ['q'=>'How much does ZYLO Accounting Software cost?',       'a'=>'ZYLO offers a free plan with basic invoicing and expense tracking. The Pro plan starts at $49/month (approximately ₹3,999/month) with full accounting features, unlimited invoices, bank sync, and 24/7 priority support.'],
                ['q'=>'Is ZYLO accounting software GST compliant?',          'a'=>'Yes. ZYLO auto-calculates GST, generates e-Invoices as per GSTN standards, and produces GSTR-ready reports. It supports all GST invoice formats including B2B, B2C, B2CS, and export invoices with HSN codes and IRN generation.'],
                ['q'=>'Can I import my existing invoices and data?',          'a'=>'Yes. ZYLO provides automated CSV/Excel import tools and a dedicated onboarding specialist to migrate your data safely with zero downtime. Most businesses are fully migrated within 1 business day.'],
                ['q'=>'Is my financial data secure with ZYLO?',              'a'=>'ZYLO uses bank-grade 256-bit AES encryption, ISO 27001-aligned security, role-based access control, and a 99.9% uptime SLA. Your data is backed up every hour on geographically redundant servers.'],
                ['q'=>'Can my accountant or CA access my books?',            'a'=>'Yes. You can invite your CA or accountant with read-only or full edit access. They can review books, collaborate on reconciliation, generate reports, and prepare ITR/GST returns directly inside ZYLO — no separate software needed.'],
            ];
            foreach ($faqs as $i => $faq): ?>
            <div style="border:1px solid var(--border-color); border-radius:12px; margin-bottom:0.9rem; overflow:hidden;"
                 itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <button onclick="toggleFaq(this)" aria-expanded="<?= $i===0?'true':'false' ?>"
                    style="width:100%; text-align:left; background:white; border:none; padding:1.25rem 1.5rem; font-size:0.97rem; font-weight:600; color:var(--primary-dark); cursor:pointer; display:flex; justify-content:space-between; align-items:center; gap:1rem;">
                    <span itemprop="name"><?= $faq['q'] ?></span>
                    <svg class="faq-icon" width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"
                         style="flex-shrink:0; transition:transform 0.3s; <?= $i===0?'transform:rotate(180deg)':'' ?>">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="faq-body" style="<?= $i===0?'':'display:none;' ?>padding:0 1.5rem 1.25rem; background:white;"
                     itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <p itemprop="text" style="color:var(--text-muted); margin:0; line-height:1.75; font-size:0.93rem;"><?= $faq['a'] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== CTA ========== -->
<section style="text-align:center; padding:6rem 0; background:linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);">
    <div class="container" style="max-width:680px; margin:0 auto;">
        <h2 style="font-size:2.5rem; color:white; margin-bottom:1.25rem; line-height:1.2;">Start Managing Your Finances the Smart Way</h2>
        <p style="font-size:1.1rem; color:rgba(255,255,255,0.85); margin-bottom:2.5rem; line-height:1.7;">Free plan available. No credit card required. Join 10,000+ businesses already saving hours every week with ZYLO.</p>
        <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap;">
            <a href="contact" class="btn" style="padding:1rem 2.25rem; font-size:1.05rem; background:white; color:var(--primary); border-radius:10px; font-weight:700;">
                Start Free Trial
            </a>
            <a href="https://wa.me/917501137266?text=Hi%2C%20I%20want%20to%20know%20more%20about%20ZYLO%20Accounting%20Software" target="_blank" rel="noopener noreferrer"
               class="btn" style="padding:1rem 2.25rem; font-size:1.05rem; background:#25d366; color:white; border-radius:10px; font-weight:600; border:none;">
                💬 Chat on WhatsApp
            </a>
        </div>
        <p style="color:rgba(255,255,255,0.55); font-size:0.82rem; margin-top:1.5rem; margin-bottom:0;">Free plan · No credit card · Cancel anytime</p>
    </div>
</section>

<script>
function toggleFaq(btn) {
    var body     = btn.nextElementSibling;
    var icon     = btn.querySelector('.faq-icon');
    var expanded = btn.getAttribute('aria-expanded') === 'true';

    document.querySelectorAll('.faq-body').forEach(function(el) { el.style.display = 'none'; });
    document.querySelectorAll('[onclick="toggleFaq(this)"]').forEach(function(el) {
        el.setAttribute('aria-expanded', 'false');
        el.querySelector('.faq-icon').style.transform = '';
    });

    if (!expanded) {
        body.style.display = 'block';
        btn.setAttribute('aria-expanded', 'true');
        icon.style.transform = 'rotate(180deg)';
    }
}
</script>

<style>
@media (max-width: 768px) {
    .stats-bar-grid  { grid-template-columns: 1fr 1fr !important; }
    .features-grid   { grid-template-columns: 1fr !important; }
    .perfect-for-grid{ grid-template-columns: 1fr !important; }
    .feature-img-right { order: 0 !important; }
}
@media (max-width: 480px) {
    .stats-bar-grid { grid-template-columns: 1fr 1fr !important; }
}
</style>

<?php include 'includes/footer.php'; ?>

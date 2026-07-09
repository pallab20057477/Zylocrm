<?php
$pageTitle = "Business Software for Startups – Invoicing, GST & Finance Management | ZYLO CRM";
$pageDescription = "ZYLO CRM is built for Indian startups. Create GST invoices, manage expenses, track cash flow, handle multi-user access, and generate investor-ready reports. Free plan available.";
$pageKeywords = "startup software India, startup accounting software, GST billing for startups, startup invoicing, startup CRM, business software for startups, startup finance management India";
$canonicalPath = '/startups';
$pageImage = 'https://zylocrm.com/assets/store/section-1.jpg';

$pageSchema = [
    '@context' => 'https://schema.org',
    '@type'    => 'SoftwareApplication',
    'name'     => 'ZYLO CRM for Startups',
    'url'      => 'https://zylocrm.com/startups',
    'description' => 'All-in-one business management platform for Indian startups. GST invoicing, expense tracking, cash flow management, multi-user access, and investor-ready financial reports.',
    'applicationCategory' => 'BusinessApplication',
    'operatingSystem' => 'Web, Android, iOS',
    'provider' => ['@type'=>'Organization','name'=>'ZYLO CRM','url'=>'https://zylocrm.com','logo'=>'https://zylocrm.com/assets/logo.png'],
    'offers'   => ['@type'=>'Offer','priceCurrency'=>'INR','price'=>'0','pricingModel'=>'Freemium'],
    'aggregateRating' => ['@type'=>'AggregateRating','ratingValue'=>'4.8','reviewCount'=>'7640','bestRating'=>'5'],
    'featureList' => [
        'GST billing & e-Invoice compliant',
        'Cash flow & burn rate tracking',
        'Investor-ready P&L reports',
        'Multi-user with role-based access',
        'Client CRM & lead tracking',
        'Expense management & bank sync',
        'Mobile app for Android & iOS',
        'Multi-currency for international clients'
    ]
];

$breadcrumb = [
    '@context' => 'https://schema.org',
    '@type'    => 'BreadcrumbList',
    'itemListElement' => [
        ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://zylocrm.com/'],
        ['@type'=>'ListItem','position'=>2,'name'=>'Startups','item'=>'https://zylocrm.com/startups'],
    ]
];

$faqSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        ['@type'=>'Question','name'=>'Is ZYLO CRM suitable for early-stage startups?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes. ZYLO is free to start — no credit card required. It covers GST invoicing, expense tracking, cash flow management, and client CRM. Whether you\'re pre-revenue or scaling to Series A, ZYLO grows with your startup.']],
        ['@type'=>'Question','name'=>'Can ZYLO generate investor-ready financial reports?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes. ZYLO generates P&L statements, cash flow reports, and balance sheets that are formatted for investor presentations and due diligence. Export to PDF or share a live link with your investors or CA.']],
        ['@type'=>'Question','name'=>'Does ZYLO support multiple team members?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes. ZYLO supports multi-user access with role-based permissions. Assign specific roles to founders, finance teams, and sales staff — everyone sees only what they need to.']],
        ['@type'=>'Question','name'=>'Can I invoice international clients in foreign currency?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes. ZYLO supports multi-currency invoicing. Bill US, UK, or UAE clients in USD, GBP, or AED and automatically track amounts in INR for your GST and accounting records.']],
        ['@type'=>'Question','name'=>'How much does ZYLO cost for a startup?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'ZYLO offers a free Starter plan with no credit card required. Paid plans start from ₹999/month with unlimited invoices, multi-user access, bank sync, and priority support. Startups on annual billing save up to 40%.']],
    ]
];

$pageSchema = [$pageSchema, $breadcrumb];

include 'includes/header.php';
?>
<script type="application/ld+json"><?php echo json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>

<!-- ========== HERO ========== -->
<section class="bg-offwhite" style="padding-top:calc(var(--header-height) + 4.5rem); padding-bottom:5rem; position:relative; overflow:hidden;">
    <div style="position:absolute;top:-15%;right:-8%;width:520px;height:520px;background:radial-gradient(circle,rgba(12,79,120,0.07) 0%,transparent 70%);border-radius:50%;pointer-events:none;" aria-hidden="true"></div>
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:center;" class="intro-grid">
            <div>
                <div style="display:inline-flex;align-items:center;gap:0.5rem;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.8rem;font-weight:700;padding:0.38rem 1rem;border-radius:50px;margin-bottom:1.5rem;text-transform:uppercase;letter-spacing:1px;border:1px solid rgba(12,79,120,0.18);">
                    <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    Built for Indian Startups
                </div>

                <h1 style="font-size:3.2rem;color:var(--primary-dark);line-height:1.12;margin-bottom:1.4rem;">
                    The All-in-One Business Software Built for Startups
                </h1>
                <p style="font-size:1.18rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.9rem;">
                    From your first invoice to your Series A — ZYLO handles GST billing, expense tracking, cash flow management, and investor-ready reports. Built for speed, not spreadsheets.
                </p>

                <div style="display:flex;flex-wrap:wrap;gap:0.55rem;margin-bottom:2rem;">
                    <?php foreach(['GST Ready','Cash Flow','Investor Reports','Multi-User','Mobile App','Free Plan'] as $p): ?>
                    <span style="background:white;border:1px solid var(--border-color);color:var(--text-main);font-size:0.82rem;font-weight:600;padding:0.35rem 0.9rem;border-radius:50px;box-shadow:var(--shadow-sm);">✓ &nbsp;<?= $p ?></span>
                    <?php endforeach; ?>
                </div>

                <div style="display:flex;gap:1rem;flex-wrap:wrap;">
                    <a href="contact" class="btn btn-primary" style="padding:0.9rem 2rem;font-size:1rem;">Start Free — No Credit Card</a>
                    <a href="accounting-software" class="btn btn-outline" style="padding:0.9rem 2rem;font-size:1rem;">See All Features</a>
                </div>

                <p style="margin-top:1.5rem;font-size:0.85rem;color:var(--text-muted);margin-bottom:0;">
                    ⭐ 4.8/5 from 7,640+ reviews &nbsp;·&nbsp; Trusted by 5,000+ startups across India
                </p>
            </div>

            <div style="position:relative;">
                <img src="assets/store/section-1.jpg"
                     alt="ZYLO CRM startup dashboard showing GST invoices, cash flow, and investor-ready financial reports"
                     width="580" height="400"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" fetchpriority="high" loading="lazy">

                <div style="position:absolute;bottom:-1.25rem;left:-1.25rem;background:white;border-radius:14px;padding:0.9rem 1.25rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.75rem;">
                    <span style="width:38px;height:38px;background:#dcfce7;border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="18" height="18" fill="none" stroke="#16a34a" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.78rem;color:var(--text-muted);">Monthly Recurring Revenue</div>
                        <div style="font-size:1rem;font-weight:700;color:var(--text-main);">₹12,40,000 <span style="color:#16a34a;font-size:0.8rem;">↑ 34%</span></div>
                    </div>
                </div>

                <div style="position:absolute;top:-1rem;right:-1rem;background:white;border-radius:14px;padding:0.9rem 1.25rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.65rem;">
                    <span style="width:34px;height:34px;background:rgba(12,79,120,0.08);border-radius:8px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="16" height="16" fill="none" stroke="var(--primary)" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.78rem;color:var(--text-muted);">Invoice sent</div>
                        <div style="font-size:0.9rem;font-weight:700;color:var(--text-main);">INV-2024 · Paid ✓</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== STATS BAR ========== -->
<section style="padding:2.75rem 0;background:white;border-bottom:1px solid var(--border-color);">
    <div class="container">
        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1rem;text-align:center;" class="stats-bar-grid">
            <?php
            $stats = [
                ['val'=>'5,000+', 'label'=>'Startups Trust ZYLO'],
                ['val'=>'₹0',     'label'=>'To Get Started'],
                ['val'=>'99.9%',  'label'=>'Uptime SLA'],
                ['val'=>'< 30s',  'label'=>'Invoice Creation Time'],
            ];
            foreach($stats as $i=>$s): $b=$i>0?'border-left:1px solid var(--border-color);':''; ?>
            <div style="<?= $b ?>">
                <div style="font-size:2rem;font-weight:800;color:var(--primary-dark);line-height:1;margin-bottom:0.4rem;"><?= $s['val'] ?></div>
                <div style="font-size:0.83rem;color:var(--text-muted);"><?= $s['label'] ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== CHALLENGES → SOLUTIONS ========== -->
<section>
    <div class="container">
        <div style="text-align:center;max-width:700px;margin:0 auto 4rem;">
            <h2 style="font-size:2.5rem;color:var(--primary-dark);margin-bottom:1rem;">The Real Challenges Startups Face — And How ZYLO Solves Them</h2>
            <p style="color:var(--text-muted);font-size:1.05rem;">Building a startup is hard enough. ZYLO eliminates the operational chaos so you can focus on growth.</p>
        </div>
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:2rem;" class="features-grid">
            <?php
            $challenges = [
                ['icon'=>'M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2z',
                 'problem'=>'GST Compliance is Overwhelming',
                 'solution'=>'ZYLO auto-calculates CGST/SGST/IGST, generates e-Invoices with IRN and QR codes, and exports GSTR-1 ready reports — so you stay compliant from day one without hiring a full-time accountant.',
                 'tag'=>'GST & e-Invoice'],
                ['icon'=>'M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z',
                 'problem'=>'Cash Running Out Unexpectedly',
                 'solution'=>'Real-time burn rate tracking, cash flow forecasting, and receivables aging reports give you a clear runway view at all times. Know exactly how many months of cash you have left.',
                 'tag'=>'Cash Flow'],
                ['icon'=>'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z',
                 'problem'=>'Investors Ask for Reports You Don\'t Have',
                 'solution'=>'Generate investor-ready P&L statements, balance sheets, and cash flow reports in one click. Export to PDF or share a live dashboard link directly with your investors or CA during due diligence.',
                 'tag'=>'Investor Reports'],
                ['icon'=>'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z',
                 'problem'=>'Team Access & Permissions Are Messy',
                 'solution'=>'Assign role-based access for co-founders, finance, and sales. Each team member sees only what they need — no accidental edits, no shared passwords, no spreadsheet chaos.',
                 'tag'=>'Multi-User Access'],
                ['icon'=>'M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9',
                 'problem'=>'Billing International Clients is Complicated',
                 'solution'=>'Bill US, UK, and UAE clients in USD, GBP, or AED. ZYLO auto-converts to INR for your GST records and generates compliant export invoices with the correct currency and payment terms.',
                 'tag'=>'Multi-Currency'],
                ['icon'=>'M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z',
                 'problem'=>'Can\'t Manage Business on the Go',
                 'solution'=>'Full-featured Android and iOS apps let you invoice clients, check cash flow, approve expenses, and view real-time reports from anywhere — even without an internet connection.',
                 'tag'=>'Mobile App'],
            ];
            foreach($challenges as $c): ?>
            <div class="card" style="padding:2rem;border-left:3px solid var(--primary);display:flex;flex-direction:column;">
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.72rem;font-weight:700;padding:0.25rem 0.7rem;border-radius:50px;margin-bottom:1rem;text-transform:uppercase;letter-spacing:0.8px;"><?= $c['tag'] ?></div>
                <div style="width:44px;height:44px;background:rgba(12,79,120,0.08);border-radius:10px;display:flex;align-items:center;justify-content:center;margin-bottom:1rem;color:var(--primary);flex-shrink:0;">
                    <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="<?= $c['icon'] ?>"/></svg>
                </div>
                <h3 style="font-size:1.1rem;color:var(--primary-dark);margin-bottom:0.6rem;">❌ &nbsp;<?= $c['problem'] ?></h3>
                <p style="color:var(--text-muted);font-size:0.92rem;line-height:1.7;margin:0;flex:1;"><strong style="color:var(--text-main);">ZYLO fix:</strong> <?= $c['solution'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== FEATURE SPOTLIGHT 1 ========== -->
<section class="bg-offwhite">
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:center;" class="intro-grid">
            <div>
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.78rem;font-weight:700;padding:0.3rem 0.85rem;border-radius:50px;margin-bottom:1.25rem;text-transform:uppercase;letter-spacing:1px;">Investor-Ready Finance</div>
                <h2 style="font-size:2.2rem;color:var(--primary-dark);line-height:1.25;margin-bottom:1.25rem;">Reports That Impress Investors & Pass Due Diligence</h2>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.5rem;">Stop scrambling for financials before every investor meeting. ZYLO keeps your P&L, cash flow, and balance sheet always up to date — ready to export as a PDF or share a live link in seconds.</p>
                <div style="display:grid;grid-template-columns:1fr 1fr;gap:0.75rem;margin-bottom:1.75rem;">
                    <?php foreach(['P&L statement (PDF ready)','Cash flow statement','Balance sheet','Burn rate tracker','Revenue forecasting','Expense category reports'] as $r): ?>
                    <div style="display:flex;align-items:center;gap:0.5rem;font-size:0.88rem;color:var(--text-muted);">
                        <svg width="14" height="14" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <?= $r ?>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a href="accounting-software" class="btn btn-primary" style="padding:0.75rem 1.75rem;">Explore Financial Reports</a>
            </div>
            <div style="position:relative;">
                <img src="assets/store/section-1.jpg" alt="ZYLO investor-ready financial reports and P&L dashboard for startups"
                     width="560" height="380"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- ========== FEATURE SPOTLIGHT 2 ========== -->
<section>
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:center;" class="intro-grid">
            <div style="order:2;" class="feature-img-right">
                <div style="position:relative;">
                    <img src="assets/store/section-2.jpg" alt="ZYLO multi-user team access and role-based permissions for startup teams"
                         width="560" height="380"
                         style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" loading="lazy">
                    <div style="position:absolute;bottom:-1rem;right:-1rem;background:white;border-radius:12px;padding:0.9rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);">
                        <div style="font-size:0.75rem;color:var(--text-muted);margin-bottom:0.3rem;">Runway remaining</div>
                        <div style="font-size:1.1rem;font-weight:800;color:var(--primary-dark);">18 months <span style="color:#16a34a;font-size:0.82rem;">✓ On Track</span></div>
                    </div>
                </div>
            </div>
            <div style="order:1;">
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.78rem;font-weight:700;padding:0.3rem 0.85rem;border-radius:50px;margin-bottom:1.25rem;text-transform:uppercase;letter-spacing:1px;">Team & Access</div>
                <h2 style="font-size:2.2rem;color:var(--primary-dark);line-height:1.25;margin-bottom:1.25rem;">Give Your Team the Right Access — Nothing More, Nothing Less</h2>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.5rem;">Invite co-founders, accountants, and sales reps with role-based permissions. Your finance team sees reports, sales sees client CRM, and admins control everything — all from one secure platform.</p>
                <div style="display:grid;grid-template-columns:1fr 1fr;gap:0.75rem;margin-bottom:1.75rem;">
                    <?php foreach(['Role-based permissions','Unlimited team members','Audit log of all actions','Invite via email','Department-level views','Secure data isolation'] as $r): ?>
                    <div style="display:flex;align-items:center;gap:0.5rem;font-size:0.88rem;color:var(--text-muted);">
                        <svg width="14" height="14" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <?= $r ?>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a href="contact" class="btn btn-outline" style="padding:0.75rem 1.75rem;">Start Your Free Team Plan</a>
            </div>
        </div>
    </div>
</section>

<!-- ========== STARTUP TYPES ========== -->
<section class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>ZYLO Works for Every Type of Startup</h2>
            <p>Whether you're SaaS, D2C, FinTech, or a service-based startup — ZYLO adapts to your business model.</p>
        </div>
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.75rem;margin-top:3rem;" class="perfect-for-grid">
            <?php
            $types = [
                ['emoji'=>'💻','title'=>'SaaS Startups',
                 'desc' =>'Manage subscription revenue, track MRR/ARR, invoice B2B clients with GST, and generate the financial reports your investors expect each quarter.',
                 'pts'  =>['Subscription invoicing','MRR tracking','B2B GST billing'],
                 'link' =>'accounting-software'],
                ['emoji'=>'🛍️','title'=>'D2C & E-Commerce',
                 'desc' =>'Sync orders, auto-generate tax invoices, manage product inventory across channels, and track your cost of goods sold and margins in real-time.',
                 'pts'  =>['Multi-channel inventory','Auto tax invoices','COGS & margin tracking'],
                 'link' =>'gst-billing-software'],
                ['emoji'=>'💳','title'=>'FinTech Startups',
                 'desc' =>'Handle complex fee structures, generate GST-compliant invoices for financial services, and maintain the audit-ready records required for regulatory compliance.',
                 'pts'  =>['Financial services invoicing','Regulatory-ready records','GST on fintech services'],
                 'link' =>'accounting-software'],
                ['emoji'=>'📚','title'=>'EdTech Startups',
                 'desc' =>'Issue course invoices and receipts, handle GST exemptions on educational services, manage instructor payouts, and track cohort-level revenue.',
                 'pts'  =>['Course & fee invoicing','GST exemption handling','Instructor payout tracking'],
                 'link' =>'consulting-invoice'],
                ['emoji'=>'🏥','title'=>'HealthTech Startups',
                 'desc' =>'Generate compliant invoices for health services and products, track patient billing, manage vendor payments, and maintain clean financial records for healthcare audits.',
                 'pts'  =>['Health service invoicing','Vendor payment tracking','Audit-ready records'],
                 'link' =>'accounting-software'],
                ['emoji'=>'🔧','title'=>'Service-Based Startups',
                 'desc' =>'Bill clients hourly or on retainer, track project expenses, issue GST invoices with SAC codes, and get paid faster via UPI or bank transfer links in your invoices.',
                 'pts'  =>['Hourly & retainer billing','SAC code invoices','UPI payment links'],
                 'link' =>'consulting-invoice'],
            ];
            foreach($types as $t): ?>
            <div class="card" style="padding:2.25rem;display:flex;flex-direction:column;">
                <div style="font-size:2.5rem;margin-bottom:1rem;" aria-hidden="true"><?= $t['emoji'] ?></div>
                <h3 style="font-size:1.2rem;color:var(--primary-dark);margin-bottom:0.75rem;"><?= $t['title'] ?></h3>
                <p style="color:var(--text-muted);font-size:0.93rem;line-height:1.7;margin-bottom:1rem;flex:1;"><?= $t['desc'] ?></p>
                <ul style="list-style:none;padding:0;margin:0 0 1.5rem;">
                    <?php foreach($t['pts'] as $pt): ?>
                    <li style="display:flex;align-items:center;gap:0.5rem;font-size:0.85rem;color:var(--text-muted);margin-bottom:0.35rem;">
                        <svg width="14" height="14" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <?= $pt ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <a href="<?= $t['link'] ?>" style="font-weight:600;font-size:0.9rem;color:var(--primary);display:inline-flex;align-items:center;gap:0.3rem;margin-top:auto;">Learn more &rarr;</a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== COMPARISON ========== -->
<section>
    <div class="container">
        <div class="section-title">
            <h2>ZYLO vs Expensive Enterprise Tools</h2>
            <p>See why 5,000+ startups chose ZYLO over Zoho Books, QuickBooks, and spreadsheet chaos.</p>
        </div>
        <div style="overflow-x:auto;margin-top:2.5rem;border-radius:16px;box-shadow:var(--shadow-md);border:1px solid var(--border-color);">
            <table style="width:100%;border-collapse:collapse;background:white;min-width:500px;">
                <thead>
                    <tr style="background:var(--primary);color:white;">
                        <th style="padding:1.1rem 1.5rem;text-align:left;font-weight:600;font-size:0.95rem;">Feature</th>
                        <th style="padding:1.1rem 1.5rem;text-align:center;font-weight:700;font-size:0.95rem;">
                            <span style="background:rgba(255,255,255,0.15);padding:0.25rem 0.75rem;border-radius:50px;">ZYLO CRM</span>
                        </th>
                        <th style="padding:1.1rem 1.5rem;text-align:center;font-weight:600;font-size:0.95rem;opacity:0.85;">Zoho / QuickBooks</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $rows = [
                        ['Free Plan Available',           '✅ Yes — forever free',       '❌ No — paid from day one'],
                        ['GST & e-Invoice Built-in',      '✅ Fully automated',           '⚠️ Add-on / manual setup'],
                        ['Investor-Ready Reports',        '✅ One-click export',          '⚠️ Manual formatting needed'],
                        ['Multi-User Roles',              '✅ Included in free plan',     '❌ Paid add-on'],
                        ['Works on Mobile',               '✅ Full Android & iOS app',    '⚠️ Limited mobile features'],
                        ['Multi-Currency Invoicing',      '✅ USD, GBP, AED & more',      '✅ Yes (paid plans only)'],
                        ['Setup Time',                    '< 10 minutes',                '1–3 days with onboarding'],
                        ['Monthly Cost (Startup Plan)',   '₹0 – ₹1,999',                 '₹3,000 – ₹8,000+'],
                    ];
                    foreach($rows as $i=>$row):
                        $bg = $i%2===1 ? 'background:#f8f9fa;' : '';
                    ?>
                    <tr style="<?= $bg ?>">
                        <td style="padding:1rem 1.5rem;font-weight:600;color:var(--primary-dark);font-size:0.93rem;border-bottom:1px solid var(--border-color);"><?= $row[0] ?></td>
                        <td style="padding:1rem 1.5rem;text-align:center;font-size:0.93rem;border-bottom:1px solid var(--border-color);color:var(--primary-dark);font-weight:500;"><?= $row[1] ?></td>
                        <td style="padding:1rem 1.5rem;text-align:center;font-size:0.93rem;border-bottom:1px solid var(--border-color);color:var(--text-muted);"><?= $row[2] ?></td>
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
            <h2>What Startup Founders Say About ZYLO</h2>
            <p>Real feedback from founders and finance teams using ZYLO every day across India.</p>
        </div>
        <div class="grid-3" style="margin-top:3rem;">
            <?php
            $reviews = [
                ['quote'=>'"We were using three different tools — Tally, Excel, and a separate CRM. ZYLO replaced all of them. Our investors now get a live dashboard link instead of a messy spreadsheet every month."',
                 'name'=>'David Chen','role'=>'Co-founder, NovaPay FinTech · Bengaluru','avatar'=>'assets/store/avatar-david.svg','stars'=>5],
                ['quote'=>'"As a SaaS startup, we needed proper subscription invoicing with GST. ZYLO handled it out of the box. And the multi-user access means our CA can pull reports without us sharing passwords."',
                 'name'=>'Sarah Miller','role'=>'CEO, CloudDesk SaaS · Mumbai','avatar'=>'assets/store/avatar-sarah.svg','stars'=>5],
                ['quote'=>'"The investor-ready P&L and cash flow reports saved us during our Series A due diligence. Our lead investor was impressed we had everything ready in one click. ZYLO is a must for any startup."',
                 'name'=>'Emily Watson','role'=>'Founder, GreenCart D2C · Delhi','avatar'=>'assets/store/avatar-emily.svg','stars'=>5],
            ];
            foreach($reviews as $r): ?>
            <div class="card" style="background:white;display:flex;flex-direction:column;" itemscope itemtype="https://schema.org/Review">
                <div style="display:flex;gap:2px;margin-bottom:1.1rem;" aria-label="5 out of 5 stars">
                    <?php for($i=0;$i<$r['stars'];$i++): ?>
                    <svg width="15" height="15" fill="#FBBF24" viewBox="0 0 20 20" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    <?php endfor; ?>
                </div>
                <p itemprop="reviewBody" style="font-style:italic;font-size:0.95rem;line-height:1.75;margin-bottom:1.5rem;color:var(--text-main);flex:1;"><?= $r['quote'] ?></p>
                <div style="display:flex;align-items:center;gap:0.85rem;padding-top:1.1rem;border-top:1px solid var(--border-color);" itemscope itemprop="author" itemtype="https://schema.org/Person">
                    <img src="<?= $r['avatar'] ?>" alt="<?= $r['name'] ?>" width="42" height="42"
                         style="width:42px;height:42px;border-radius:50%;object-fit:cover;flex-shrink:0;" loading="lazy">
                    <div>
                        <div style="font-weight:700;font-size:0.9rem;color:var(--text-main);" itemprop="name"><?= $r['name'] ?></div>
                        <div style="font-size:0.8rem;color:var(--text-muted);"><?= $r['role'] ?></div>
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
            <p>Everything startup founders ask about ZYLO CRM.</p>
        </div>
        <div style="margin-top:2.5rem;" itemscope itemtype="https://schema.org/FAQPage">
            <?php
            $faqs = [
                ['q'=>'Is ZYLO CRM suitable for early-stage startups?',
                 'a'=>'Yes. ZYLO is free to start — no credit card required. It covers GST invoicing, expense tracking, cash flow management, and client CRM. Whether you\'re pre-revenue or scaling to Series A, ZYLO grows with your startup without changing your workflow.'],
                ['q'=>'Can ZYLO generate investor-ready financial reports?',
                 'a'=>'Yes. ZYLO generates P&L statements, cash flow reports, and balance sheets that are formatted for investor presentations and due diligence. Export to PDF or share a live link with your investors or CA in seconds.'],
                ['q'=>'Does ZYLO support multiple team members?',
                 'a'=>'Yes. ZYLO supports multi-user access with role-based permissions. Assign specific roles to founders, finance teams, and sales staff — everyone sees only what they need to, keeping your financial data secure.'],
                ['q'=>'Can I invoice international clients in foreign currency?',
                 'a'=>'Yes. ZYLO supports multi-currency invoicing. Bill US, UK, or UAE clients in USD, GBP, or AED and automatically track amounts in INR for your GST and accounting records. Export invoices are also GST-compliant.'],
                ['q'=>'How much does ZYLO cost for a startup?',
                 'a'=>'ZYLO offers a free Starter plan with no credit card required. Paid plans start from ₹999/month with unlimited invoices, multi-user access, bank sync, and priority support. Startups on annual billing save up to 40%.'],
            ];
            foreach($faqs as $i=>$faq): ?>
            <div style="border:1px solid var(--border-color);border-radius:12px;margin-bottom:0.9rem;overflow:hidden;"
                 itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <button onclick="toggleFaq(this)" aria-expanded="<?= $i===0?'true':'false' ?>"
                    style="width:100%;text-align:left;background:white;border:none;padding:1.25rem 1.5rem;font-size:0.97rem;font-weight:600;color:var(--primary-dark);cursor:pointer;display:flex;justify-content:space-between;align-items:center;gap:1rem;">
                    <span itemprop="name"><?= $faq['q'] ?></span>
                    <svg class="faq-icon" width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"
                         style="flex-shrink:0;transition:transform 0.3s;<?= $i===0?'transform:rotate(180deg)':'' ?>">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="faq-body" style="display:<?= $i===0?'block':'none' ?>;padding:0 1.5rem 1.25rem;background:white;"
                     itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <p itemprop="text" style="color:var(--text-muted);margin:0;font-size:0.95rem;line-height:1.7;"><?= $faq['a'] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== CTA ========== -->
<section style="text-align:center;padding:6rem 0;background:linear-gradient(135deg,var(--primary) 0%,var(--primary-dark) 100%);color:white;">
    <div class="container">
        <h2 style="font-size:2.75rem;margin-bottom:1rem;color:white;">Launch Smarter — Start Free Today</h2>
        <p style="max-width:600px;margin:0 auto 2.5rem;font-size:1.1rem;opacity:0.95;color:white;">Join 5,000+ Indian startups using ZYLO to manage invoicing, cash flow, team access, and investor-ready reports — all from one platform. Free plan, no credit card required.</p>

        <div style="display:flex;gap:1rem;flex-wrap:wrap;justify-content:center;">
            <a href="contact" style="display:inline-block;background:white;color:var(--primary);padding:1rem 2.5rem;border-radius:10px;font-weight:700;font-size:1.1rem;text-decoration:none;transition:opacity 0.2s;">Get Started Free</a>
            <a href="https://wa.me/917501137266" target="_blank" rel="noopener noreferrer"
               style="display:inline-block;background:rgba(255,255,255,0.15);border:2px solid rgba(255,255,255,0.6);color:white;padding:0.8rem 2.5rem;border-radius:10px;font-weight:700;font-size:1.1rem;text-decoration:none;transition:background 0.2s;">
                Chat on WhatsApp
            </a>
        </div>

        <p style="margin-top:1.5rem;font-size:0.9rem;opacity:0.8;color:white;">Free plan · GST ready · Investor reports · Multi-user · No credit card · Cancel anytime</p>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

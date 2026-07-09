<?php
$pageTitle = "CRM & Accounting Software for Small & Medium Businesses (SMBs) | ZYLO CRM";
$pageDescription = "ZYLO CRM is the all-in-one business software for SMBs in India. GST invoicing, expense tracking, inventory management, client CRM, and real-time reports — built for small business owners.";
$pageKeywords = "SMB software India, small business CRM, accounting software for small business, GST billing software SMB, inventory software small business, business management software India, small business invoicing";
$canonicalPath = '/smbs';
$pageImage = 'https://zylocrm.com/assets/store/section-1.jpg';

$pageSchema = [
    '@context' => 'https://schema.org',
    '@type'    => 'SoftwareApplication',
    'name'     => 'ZYLO CRM for Small & Medium Businesses',
    'url'      => 'https://zylocrm.com/smbs',
    'description' => 'All-in-one business management platform for Indian SMBs. GST invoicing, inventory, CRM, expense tracking, and real-time financial reporting.',
    'applicationCategory' => 'BusinessApplication',
    'operatingSystem' => 'Web, Android, iOS',
    'provider' => ['@type'=>'Organization','name'=>'ZYLO CRM','url'=>'https://zylocrm.com','logo'=>'https://zylocrm.com/assets/logo.png'],
    'offers'   => ['@type'=>'Offer','priceCurrency'=>'INR','price'=>'0','pricingModel'=>'Freemium'],
    'aggregateRating' => ['@type'=>'AggregateRating','ratingValue'=>'4.8','reviewCount'=>'10420','bestRating'=>'5'],
    'featureList' => [
        'GST billing & e-Invoice compliant',
        'Inventory & stock management',
        'Client CRM & lead tracking',
        'Expense tracking & bank sync',
        'Real-time P&L and financial reports',
        'Purchase orders & delivery challans',
        'Mobile app for Android & iOS',
        'Multi-user with role-based access'
    ]
];

$breadcrumb = [
    '@context' => 'https://schema.org',
    '@type'    => 'BreadcrumbList',
    'itemListElement' => [
        ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://zylocrm.com/'],
        ['@type'=>'ListItem','position'=>2,'name'=>'SMBs','item'=>'https://zylocrm.com/smbs'],
    ]
];

$faqSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        ['@type'=>'Question','name'=>'Is ZYLO CRM suitable for small businesses?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes. ZYLO is specifically designed for Indian SMBs. It covers GST invoicing, inventory, expense tracking, client management, and financial reporting — all from one dashboard. The free Starter plan is ideal for small businesses just getting started.']],
        ['@type'=>'Question','name'=>'How does ZYLO help with GST compliance for SMBs?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'ZYLO auto-calculates CGST, SGST, and IGST on invoices, generates e-Invoices with IRN and QR codes, and produces GSTR-1 ready reports. SMBs can stay fully GST-compliant without hiring a dedicated accountant.']],
        ['@type'=>'Question','name'=>'Can I manage inventory with ZYLO?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes. ZYLO includes full inventory management — track stock levels, set reorder points, manage multiple warehouses, scan barcodes, and generate purchase orders automatically when stock runs low.']],
        ['@type'=>'Question','name'=>'Does ZYLO work on mobile?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes. ZYLO has fully-featured apps for both Android and iOS. You can create invoices, track payments, update inventory, and view reports from your phone — with offline mode support.']],
        ['@type'=>'Question','name'=>'How much does ZYLO cost for a small business?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'ZYLO offers a free Starter plan with no credit card required. Paid plans start from ₹999/month with unlimited invoices, full inventory, bank sync, and priority support. Annual billing saves up to 40%.']],
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
                    Built for Indian Small Businesses
                </div>

                <h1 style="font-size:3.2rem;color:var(--primary-dark);line-height:1.12;margin-bottom:1.4rem;">
                    The All-in-One Business Software Built for SMBs
                </h1>
                <p style="font-size:1.18rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.9rem;">
                    Run your entire business from one platform — GST invoicing, inventory, client CRM, expense tracking, and real-time financial reports. No CA degree, no complex setup, no expensive ERP.
                </p>

                <div style="display:flex;flex-wrap:wrap;gap:0.55rem;margin-bottom:2rem;">
                    <?php foreach(['GST Ready','Inventory','Client CRM','Expense Tracker','Mobile App','Free Plan'] as $p): ?>
                    <span style="background:white;border:1px solid var(--border-color);color:var(--text-main);font-size:0.82rem;font-weight:600;padding:0.35rem 0.9rem;border-radius:50px;box-shadow:var(--shadow-sm);">✓ &nbsp;<?= $p ?></span>
                    <?php endforeach; ?>
                </div>

                <div style="display:flex;gap:1rem;flex-wrap:wrap;">
                    <a href="contact" class="btn btn-primary" style="padding:0.9rem 2rem;font-size:1rem;">Start Free — No Credit Card</a>
                    <a href="accounting-software" class="btn btn-outline" style="padding:0.9rem 2rem;font-size:1rem;">See All Features</a>
                </div>

                <p style="margin-top:1.5rem;font-size:0.85rem;color:var(--text-muted);margin-bottom:0;">
                    ⭐ 4.8/5 from 10,420+ reviews &nbsp;·&nbsp; Trusted by 10,000+ SMBs across India
                </p>
            </div>

            <div style="position:relative;">
                <img src="assets/store/section-1.jpg"
                     alt="ZYLO CRM dashboard for small business showing GST invoices, inventory, and financial reports"
                     width="580" height="400"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" fetchpriority="high" loading="lazy">

                <div style="position:absolute;bottom:-1.25rem;left:-1.25rem;background:white;border-radius:14px;padding:0.9rem 1.25rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.75rem;">
                    <span style="width:38px;height:38px;background:#dcfce7;border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="18" height="18" fill="none" stroke="#16a34a" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.78rem;color:var(--text-muted);">Revenue this month</div>
                        <div style="font-size:1rem;font-weight:700;color:var(--text-main);">₹8,42,000 <span style="color:#16a34a;font-size:0.8rem;">↑ 28%</span></div>
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
                ['val'=>'10,000+','label'=>'SMBs Trust ZYLO'],
                ['val'=>'5M+',    'label'=>'Invoices Generated'],
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
            <h2 style="font-size:2.5rem;color:var(--primary-dark);margin-bottom:1rem;">The Real Challenges SMBs Face — And How ZYLO Solves Them</h2>
            <p style="color:var(--text-muted);font-size:1.05rem;">Running a small business in India comes with unique hurdles. ZYLO is built to tackle every one of them.</p>
        </div>
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:2rem;" class="features-grid">
            <?php
            $challenges = [
                ['icon'=>'M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2z',
                 'problem'=>'GST Compliance Stress',
                 'solution'=>'ZYLO auto-calculates CGST/SGST/IGST, generates e-Invoices with IRN, and exports GSTR-1 ready reports. Stay 100% compliant without a dedicated accountant.',
                 'tag'=>'GST & e-Invoice'],
                ['icon'=>'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4',
                 'problem'=>'Stock Running Out Unexpectedly',
                 'solution'=>'Track real-time stock across multiple locations, set auto-reorder alerts, and generate purchase orders instantly when inventory hits minimum levels.',
                 'tag'=>'Inventory Management'],
                ['icon'=>'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z',
                 'problem'=>'No Clear Financial Picture',
                 'solution'=>'Real-time P&L, cash flow, and balance sheet update with every transaction. Know your exact profit position before making any business decision.',
                 'tag'=>'Financial Reports'],
                ['icon'=>'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z',
                 'problem'=>'Losing Track of Clients & Leads',
                 'solution'=>'Manage your entire client database, track communication history, set follow-up reminders, and never let a sales opportunity fall through the cracks.',
                 'tag'=>'Client CRM'],
                ['icon'=>'M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z',
                 'problem'=>'Chasing Overdue Payments',
                 'solution'=>'Auto-send payment reminders via WhatsApp and email. Add UPI/bank payment links directly to invoices. Collect payments faster with less manual follow-up.',
                 'tag'=>'Payment Collection'],
                ['icon'=>'M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z',
                 'problem'=>'Managing Everything from a Laptop',
                 'solution'=>'Full-featured Android and iOS apps let you invoice clients, check stock, and view daily reports from your phone — even without an internet connection.',
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
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.78rem;font-weight:700;padding:0.3rem 0.85rem;border-radius:50px;margin-bottom:1.25rem;text-transform:uppercase;letter-spacing:1px;">GST Billing</div>
                <h2 style="font-size:2.2rem;color:var(--primary-dark);line-height:1.25;margin-bottom:1.25rem;">GST-Compliant Invoices in Under 30 Seconds</h2>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.5rem;">Pick your customer, add products from your item library, and hit send. ZYLO auto-fills HSN codes, calculates CGST/SGST/IGST, and emails a professional PDF — no manual tax calculation, no errors.</p>
                <div style="display:grid;grid-template-columns:1fr 1fr;gap:0.75rem;margin-bottom:1.75rem;">
                    <?php foreach(['GST invoice in < 30s','e-Invoice with IRN & QR','GSTR-1 ready reports','Proforma invoice','Delivery challan','Purchase orders'] as $r): ?>
                    <div style="display:flex;align-items:center;gap:0.5rem;font-size:0.88rem;color:var(--text-muted);">
                        <svg width="14" height="14" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <?= $r ?>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a href="gst-billing-software" class="btn btn-primary" style="padding:0.75rem 1.75rem;">Explore GST Billing</a>
            </div>
            <div style="position:relative;">
                <img src="assets/store/section-1.jpg" alt="ZYLO GST billing software for small business" width="560" height="380"
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
                    <img src="assets/store/section-2.jpg" alt="ZYLO inventory and business reports dashboard for SMBs" width="560" height="380"
                         style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" loading="lazy">
                    <div style="position:absolute;bottom:-1rem;right:-1rem;background:white;border-radius:12px;padding:0.9rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);">
                        <div style="font-size:0.75rem;color:var(--text-muted);margin-bottom:0.3rem;">Net profit (this month)</div>
                        <div style="font-size:1.1rem;font-weight:800;color:var(--primary-dark);">₹2,14,500 <span style="color:#16a34a;font-size:0.82rem;">↑ 22%</span></div>
                    </div>
                </div>
            </div>
            <div style="order:1;">
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.78rem;font-weight:700;padding:0.3rem 0.85rem;border-radius:50px;margin-bottom:1.25rem;text-transform:uppercase;letter-spacing:1px;">Reports & Inventory</div>
                <h2 style="font-size:2.2rem;color:var(--primary-dark);line-height:1.25;margin-bottom:1.25rem;">See Your Business Finances & Stock in Real-Time</h2>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.5rem;">Stop guessing how your business is doing. ZYLO's live dashboard shows P&L, cash flow, outstanding payments, and stock levels — all updating in real-time so you always have the full picture.</p>
                <div style="display:grid;grid-template-columns:1fr 1fr;gap:0.75rem;margin-bottom:1.75rem;">
                    <?php foreach(['Live P&L dashboard','Cash flow statement','Stock level tracking','Low stock alerts','Bank reconciliation','Outstanding payments'] as $r): ?>
                    <div style="display:flex;align-items:center;gap:0.5rem;font-size:0.88rem;color:var(--text-muted);">
                        <svg width="14" height="14" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <?= $r ?>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a href="accounting-software" class="btn btn-outline" style="padding:0.75rem 1.75rem;">Explore Accounting Features</a>
            </div>
        </div>
    </div>
</section>

<!-- ========== SMB TYPES ========== -->
<section class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>ZYLO Works for Every Type of Small Business</h2>
            <p>Whether you sell products, provide services, or both — ZYLO adapts to how you work.</p>
        </div>
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.75rem;margin-top:3rem;" class="perfect-for-grid">
            <?php
            $types = [
                ['emoji'=>'🏪','title'=>'Retail & Trading',
                 'desc' =>'Manage stock, create GST bills at the counter, track supplier payments, and monitor daily sales — all from ZYLO.',
                 'pts'  =>['Barcode & GST billing','Supplier management','Daily sales reports'],
                 'link' =>'inventory-software'],
                ['emoji'=>'🏭','title'=>'Manufacturing & Production',
                 'desc' =>'Track raw material stock, create production records, manage purchase orders, and invoice B2B clients with full GST compliance.',
                 'pts'  =>['Raw material tracking','Production order management','B2B GST invoicing'],
                 'link' =>'accounting-software'],
                ['emoji'=>'🔧','title'=>'Service Businesses',
                 'desc' =>'Bill clients for hourly services, manage recurring contracts, track project expenses, and collect payments via UPI or bank transfer.',
                 'pts'  =>['Service-based invoicing','Retainer billing','Expense tracking'],
                 'link' =>'consulting-invoice'],
                ['emoji'=>'🍽️','title'=>'Food & Hospitality',
                 'desc' =>'Track perishable inventory, manage supplier orders, handle GST on food items, and reconcile daily revenue quickly.',
                 'pts'  =>['Perishable stock tracking','GST on food categories','Daily revenue reports'],
                 'link' =>'gst-billing-software'],
                ['emoji'=>'🛒','title'=>'E-Commerce & Online Sellers',
                 'desc' =>'Sync orders from your online store, auto-generate tax invoices, manage returns, and track multi-channel inventory.',
                 'pts'  =>['Multi-channel order sync','Auto tax invoices','Return management'],
                 'link' =>'inventory-software'],
                ['emoji'=>'🏗️','title'=>'Construction & Contracting',
                 'desc' =>'Raise milestone invoices, track project-wise expenses, manage subcontractor payments, and monitor project profitability.',
                 'pts'  =>['Milestone invoicing','Project cost tracking','Subcontractor billing'],
                 'link' =>'accounting-software'],
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
            <h2>ZYLO vs Traditional Accounting Software</h2>
            <p>See why 10,000+ SMBs switched from Tally, spreadsheets, and paper-based accounting.</p>
        </div>
        <div style="overflow-x:auto;margin-top:2.5rem;border-radius:16px;box-shadow:var(--shadow-md);border:1px solid var(--border-color);">
            <table style="width:100%;border-collapse:collapse;background:white;min-width:500px;">
                <thead>
                    <tr style="background:var(--primary);color:white;">
                        <th style="padding:1.1rem 1.5rem;text-align:left;font-weight:600;font-size:0.95rem;">Feature</th>
                        <th style="padding:1.1rem 1.5rem;text-align:center;font-weight:700;font-size:0.95rem;">
                            <span style="background:rgba(255,255,255,0.15);padding:0.25rem 0.75rem;border-radius:50px;">ZYLO CRM</span>
                        </th>
                        <th style="padding:1.1rem 1.5rem;text-align:center;font-weight:600;font-size:0.95rem;opacity:0.85;">Traditional / Tally</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $rows = [
                        ['Free Plan Available',         '✅ Yes — forever free',       '❌ No — licence fee upfront'],
                        ['GST & e-Invoice Built-in',    '✅ Fully automated',           '⚠️ Manual / add-on cost'],
                        ['Works on Mobile',             '✅ Full Android & iOS app',    '❌ Desktop only'],
                        ['Inventory Management',        '✅ Included',                  '⚠️ Separate module'],
                        ['Client CRM',                  '✅ Full CRM included',         '❌ Not available'],
                        ['Bank Auto-Sync',              '✅ 1000+ banks',               '❌ Manual CSV import'],
                        ['Setup Time',                  '< 10 minutes',                 '1–3 days with IT support'],
                        ['Monthly Cost',                '₹0 – ₹3,999',                 '₹4,000 – ₹20,000+'],
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
            <h2>What SMB Owners Say About ZYLO</h2>
            <p>Real feedback from small business owners using ZYLO every day across India.</p>
        </div>
        <div class="grid-3" style="margin-top:3rem;">
            <?php
            $reviews = [
                ['quote'=>'"I switched from Tally to ZYLO 8 months ago and haven\'t looked back. GST invoices, stock management, and P&L reports — everything I need in one app. And it works on my phone!"',
                 'name'=>'David Chen','role'=>'Owner, FastMart Retail · Mumbai','avatar'=>'assets/store/avatar-david.svg','stars'=>5],
                ['quote'=>'"ZYLO replaced 4 different tools we were using — Tally for accounts, Excel for inventory, a separate CRM, and WhatsApp for reminders. Now it\'s all in one place."',
                 'name'=>'Sarah Miller','role'=>'Director, BrightTech Services · Bengaluru','avatar'=>'assets/store/avatar-sarah.svg','stars'=>5],
                ['quote'=>'"The GST auto-calculation and GSTR-1 export alone saves my accountant 5 hours every month. Plus, my customers pay faster because I send invoices via WhatsApp instantly."',
                 'name'=>'Emily Watson','role'=>'Founder, EcoTrade Pvt Ltd · Delhi','avatar'=>'assets/store/avatar-emily.svg','stars'=>5],
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
            <p>Everything small business owners ask about ZYLO CRM.</p>
        </div>
        <div style="margin-top:2.5rem;" itemscope itemtype="https://schema.org/FAQPage">
            <?php
            $faqs = [
                ['q'=>'Is ZYLO CRM suitable for small businesses?',
                 'a'=>'Yes. ZYLO is specifically designed for Indian SMBs. It covers GST invoicing, inventory, expense tracking, client management, and financial reporting — all from one dashboard. The free Starter plan is perfect for small businesses just getting started.'],
                ['q'=>'How does ZYLO help with GST compliance for SMBs?',
                 'a'=>'ZYLO auto-calculates CGST, SGST, and IGST on invoices, generates e-Invoices with IRN and QR codes, and produces GSTR-1 ready reports. SMBs can stay fully GST-compliant without hiring a dedicated accountant.'],
                ['q'=>'Can I manage inventory with ZYLO?',
                 'a'=>'Yes. ZYLO includes full inventory management — track stock levels across multiple locations, set reorder points, manage purchase orders, scan barcodes, and generate automatic low-stock alerts.'],
                ['q'=>'Does ZYLO work on mobile?',
                 'a'=>'Yes. ZYLO has fully-featured apps for both Android and iOS. Create invoices, track payments, update inventory, and view reports from your phone — with offline mode support for areas with poor connectivity.'],
                ['q'=>'How much does ZYLO cost for a small business?',
                 'a'=>'ZYLO offers a free Starter plan with no credit card required. Paid plans start from ₹999/month with unlimited invoices, full inventory, bank sync, and priority support. Annual billing saves up to 40%.'],
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
        <h2 style="font-size:2.75rem;margin-bottom:1rem;color:white;">Start Running Your Business Smarter — Free</h2>
        <p style="max-width:600px;margin:0 auto 2.5rem;font-size:1.1rem;opacity:0.95;color:white;">Join 10,000+ Indian small businesses using ZYLO to manage invoicing, inventory, clients, and finances from one platform. Free plan, no credit card required.</p>

        <div style="display:flex;gap:1rem;flex-wrap:wrap;justify-content:center;">
            <a href="contact" style="display:inline-block;background:white;color:var(--primary);padding:1rem 2.5rem;border-radius:10px;font-weight:700;font-size:1.1rem;text-decoration:none;transition:opacity 0.2s;">Get Started Free</a>
            <a href="https://wa.me/917501137266" target="_blank" rel="noopener noreferrer"
               style="display:inline-block;background:rgba(255,255,255,0.15);border:2px solid rgba(255,255,255,0.6);color:white;padding:0.8rem 2.5rem;border-radius:10px;font-weight:700;font-size:1.1rem;text-decoration:none;transition:background 0.2s;">
               Chat on WhatsApp
            </a>
        </div>

        <p style="margin-top:1.5rem;font-size:0.9rem;opacity:0.8;color:white;">Free plan · GST ready · Mobile app · No credit card · Cancel anytime</p>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

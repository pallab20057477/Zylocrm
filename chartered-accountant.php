<?php
$pageTitle = "ZYLO CRM for Chartered Accountants – Multi-Client Billing, GST & Practice Management";
$pageDescription = "ZYLO CRM is purpose-built for Chartered Accountants. Manage multiple clients, generate GST invoices with SAC codes, track retainers, handle TDS, and deliver investor-ready reports. Free plan available.";
$pageKeywords = "software for chartered accountants, CA billing software India, CA practice management software, GST software for CA, accounting software for CA, chartered accountant CRM, CA client management India";
$canonicalPath = '/chartered-accountant';
$pageImage = 'https://zylocrm.com/assets/store/section-1.jpg';

$pageSchema = [
    '@context' => 'https://schema.org',
    '@type'    => 'SoftwareApplication',
    'name'     => 'ZYLO CRM for Chartered Accountants',
    'url'      => 'https://zylocrm.com/chartered-accountant',
    'description' => 'All-in-one practice management platform for Chartered Accountants. Multi-client billing, GST invoicing with SAC codes, TDS tracking, retainer management, and compliance-ready financial reports.',
    'applicationCategory' => 'BusinessApplication',
    'operatingSystem' => 'Web, Android, iOS',
    'provider' => ['@type'=>'Organization','name'=>'ZYLO CRM','url'=>'https://zylocrm.com','logo'=>'https://zylocrm.com/assets/logo.png'],
    'offers'   => ['@type'=>'Offer','priceCurrency'=>'INR','price'=>'0','pricingModel'=>'Freemium'],
    'aggregateRating' => ['@type'=>'AggregateRating','ratingValue'=>'4.9','reviewCount'=>'4820','bestRating'=>'5'],
    'featureList' => [
        'Multi-client billing & retainer management',
        'GST invoicing with SAC codes (998211, 998212, 998213)',
        'TDS deduction tracking & certificates',
        'e-Invoice with IRN & QR code generation',
        'Client-wise P&L and balance sheet reports',
        'Expense tracking & bank reconciliation',
        'GSTR-1 ready export reports',
        'Mobile app for Android & iOS'
    ]
];

$breadcrumb = [
    '@context' => 'https://schema.org',
    '@type'    => 'BreadcrumbList',
    'itemListElement' => [
        ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://zylocrm.com/'],
        ['@type'=>'ListItem','position'=>2,'name'=>'Chartered Accountant','item'=>'https://zylocrm.com/chartered-accountant'],
    ]
];

$faqSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        ['@type'=>'Question','name'=>'What SAC codes does ZYLO use for CA services?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'ZYLO supports the correct SAC codes for CA services: 998211 (Financial auditing services), 998212 (Accounting and bookkeeping services), 998213 (Payroll services), and 998214 (Other accounting & financial services). These are auto-applied when you select your service type.']],
        ['@type'=>'Question','name'=>'Can ZYLO handle TDS deductions on CA invoices?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes. ZYLO automatically calculates TDS at the applicable rate (10% under Section 194J for professional services) and displays the net payable amount on each invoice. You can also generate TDS certificates and track deductions client-wise.']],
        ['@type'=>'Question','name'=>'Can a CA manage multiple clients from one ZYLO account?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes. ZYLO is built for multi-client practice management. You can manage unlimited clients from one dashboard, with separate ledgers, invoices, and reports for each client. Role-based access lets your team members handle specific client accounts.']],
        ['@type'=>'Question','name'=>'Does ZYLO support retainer billing for ongoing CA services?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes. ZYLO supports monthly retainer billing. Set up recurring invoices for ongoing services like bookkeeping, GST filing, or compliance management. Invoices are auto-generated each cycle and sent to clients via email or WhatsApp.']],
        ['@type'=>'Question','name'=>'Is ZYLO compliant with ICAI billing guidelines?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'ZYLO generates GST-compliant invoices with all required fields — GSTIN, SAC codes, place of supply, reverse charge applicability, and digital signatures. Invoices follow the standard format expected for professional CA services under GST law.']],
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
                    Built for Chartered Accountants
                </div>

                <h1 style="font-size:3.2rem;color:var(--primary-dark);line-height:1.12;margin-bottom:1.4rem;">
                    Practice Management Software Built for Chartered Accountants
                </h1>
                <p style="font-size:1.18rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.9rem;">
                    Manage all your clients from one dashboard — GST invoicing with SAC codes, TDS tracking, retainer billing, compliance reports, and client-wise P&L. Built for CA firms and solo practitioners.
                </p>

                <div style="display:flex;flex-wrap:wrap;gap:0.55rem;margin-bottom:2rem;">
                    <?php foreach(['SAC Codes','TDS Tracking','Retainer Billing','Multi-Client','GST Compliant','Free Plan'] as $p): ?>
                    <span style="background:white;border:1px solid var(--border-color);color:var(--text-main);font-size:0.82rem;font-weight:600;padding:0.35rem 0.9rem;border-radius:50px;box-shadow:var(--shadow-sm);">✓ &nbsp;<?= $p ?></span>
                    <?php endforeach; ?>
                </div>

                <div style="display:flex;gap:1rem;flex-wrap:wrap;">
                    <a href="contact" class="btn btn-primary" style="padding:0.9rem 2rem;font-size:1rem;">Start Free — No Credit Card</a>
                    <a href="accounting-software" class="btn btn-outline" style="padding:0.9rem 2rem;font-size:1rem;">See All Features</a>
                </div>

                <p style="margin-top:1.5rem;font-size:0.85rem;color:var(--text-muted);margin-bottom:0;">
                    ⭐ 4.9/5 from 4,820+ reviews &nbsp;·&nbsp; Trusted by 3,000+ CA firms across India
                </p>
            </div>

            <div style="position:relative;">
                <img src="assets/store/section-1.jpg"
                     alt="ZYLO CRM dashboard for chartered accountants showing client invoices, TDS tracking, and GST compliance"
                     width="580" height="400"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" fetchpriority="high" loading="lazy">

                <div style="position:absolute;bottom:-1.25rem;left:-1.25rem;background:white;border-radius:14px;padding:0.9rem 1.25rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.75rem;">
                    <span style="width:38px;height:38px;background:#dcfce7;border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="18" height="18" fill="none" stroke="#16a34a" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.78rem;color:var(--text-muted);">Active clients this month</div>
                        <div style="font-size:1rem;font-weight:700;color:var(--text-main);">48 Clients <span style="color:#16a34a;font-size:0.8rem;">↑ 6 new</span></div>
                    </div>
                </div>

                <div style="position:absolute;top:-1rem;right:-1rem;background:white;border-radius:14px;padding:0.9rem 1.25rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.65rem;">
                    <span style="width:34px;height:34px;background:rgba(12,79,120,0.08);border-radius:8px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="16" height="16" fill="none" stroke="var(--primary)" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.78rem;color:var(--text-muted);">GST Invoice sent</div>
                        <div style="font-size:0.9rem;font-weight:700;color:var(--text-main);">INV-0087 · Paid ✓</div>
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
                ['val'=>'3,000+', 'label'=>'CA Firms Trust ZYLO'],
                ['val'=>'SAC',    'label'=>'Codes Auto-Applied'],
                ['val'=>'99.9%',  'label'=>'Uptime SLA'],
                ['val'=>'< 60s',  'label'=>'Client Invoice Time'],
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
            <h2 style="font-size:2.5rem;color:var(--primary-dark);margin-bottom:1rem;">The Real Challenges CAs Face — And How ZYLO Solves Them</h2>
            <p style="color:var(--text-muted);font-size:1.05rem;">Running a CA practice comes with unique operational challenges. ZYLO eliminates them so you can focus on your clients.</p>
        </div>
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:2rem;" class="features-grid">
            <?php
            $challenges = [
                ['icon'=>'M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2z',
                 'problem'=>'Manually Entering SAC Codes on Every Invoice',
                 'solution'=>'ZYLO auto-applies the correct SAC codes for CA services — 998211 (Financial Audit), 998212 (Bookkeeping), 998213 (Payroll), and 998214 (Other Accounting). No manual lookup, no errors on every invoice.',
                 'tag'=>'SAC Codes'],
                ['icon'=>'M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z',
                 'problem'=>'Tracking TDS Deductions Across Clients',
                 'solution'=>'ZYLO auto-calculates 10% TDS under Section 194J on each professional invoice and shows the net payable amount. Track deductions client-wise and generate TDS summaries for filing.',
                 'tag'=>'TDS Management'],
                ['icon'=>'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15',
                 'problem'=>'Chasing Retainer Payments Every Month',
                 'solution'=>'Set up recurring retainer invoices for ongoing services like monthly bookkeeping, GST filing, and annual audit. Auto-send to clients on schedule via email or WhatsApp — zero manual effort.',
                 'tag'=>'Retainer Billing'],
                ['icon'=>'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z',
                 'problem'=>'Managing Dozens of Clients Without Losing Track',
                 'solution'=>'One dashboard for all clients — separate ledgers, invoice history, outstanding amounts, and compliance status for each. Filter by client, date, or status in seconds.',
                 'tag'=>'Multi-Client CRM'],
                ['icon'=>'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z',
                 'problem'=>'Clients Asking for Reports You Scramble to Produce',
                 'solution'=>'Generate client-wise P&L, balance sheet, and cash flow reports in one click. Export PDF or share a live link. Always have audit-ready financials available for every client.',
                 'tag'=>'Client Reports'],
                ['icon'=>'M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z',
                 'problem'=>'Managing Practice Tasks Away from the Office',
                 'solution'=>'Full-featured Android and iOS apps let you raise invoices, check client outstanding, and review reports from your phone — whether you\'re at a client site, in court, or travelling.',
                 'tag'=>'Mobile Access'],
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

<!-- ========== SAC CODE INFO BLOCK ========== -->
<section style="padding:3rem 0;background:white;border-top:1px solid var(--border-color);border-bottom:1px solid var(--border-color);">
    <div class="container">
        <div style="text-align:center;max-width:680px;margin:0 auto 2.5rem;">
            <h2 style="font-size:1.8rem;color:var(--primary-dark);margin-bottom:0.75rem;">GST SAC Codes for CA Professional Services</h2>
            <p style="color:var(--text-muted);font-size:0.97rem;">ZYLO auto-applies the correct SAC code based on your service type — ensuring 100% GST-compliant invoices every time.</p>
        </div>
        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1.25rem;" class="features-grid">
            <?php
            $sacCodes = [
                ['code'=>'998211','name'=>'Financial Auditing','desc'=>'Statutory audit, tax audit, and internal audit services under Companies Act & Income Tax Act.'],
                ['code'=>'998212','name'=>'Bookkeeping & Accounting','desc'=>'Monthly/quarterly bookkeeping, accounts finalisation, and ledger maintenance services.'],
                ['code'=>'998213','name'=>'Payroll Services','desc'=>'Salary processing, PF/ESI calculations, Form-16 preparation, and payroll compliance.'],
                ['code'=>'998214','name'=>'Other Financial Services','desc'=>'GST filing, ITR preparation, ROC compliance, FEMA advisory, and other CA professional services.'],
            ];
            foreach($sacCodes as $s): ?>
            <div class="card" style="padding:1.75rem;text-align:center;">
                <div style="display:inline-block;background:var(--primary);color:white;font-size:0.85rem;font-weight:800;padding:0.4rem 1rem;border-radius:8px;margin-bottom:1rem;letter-spacing:0.5px;font-family:monospace;"><?= $s['code'] ?></div>
                <h3 style="font-size:1rem;color:var(--primary-dark);margin-bottom:0.6rem;"><?= $s['name'] ?></h3>
                <p style="color:var(--text-muted);font-size:0.85rem;line-height:1.65;margin:0;"><?= $s['desc'] ?></p>
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
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.78rem;font-weight:700;padding:0.3rem 0.85rem;border-radius:50px;margin-bottom:1.25rem;text-transform:uppercase;letter-spacing:1px;">Client Billing</div>
                <h2 style="font-size:2.2rem;color:var(--primary-dark);line-height:1.25;margin-bottom:1.25rem;">GST-Compliant CA Invoices With TDS in Under 60 Seconds</h2>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.5rem;">Select your client, pick the service type, and ZYLO auto-fills the SAC code, calculates 18% GST, deducts 10% TDS under Section 194J, and shows the net payable — all before you hit send.</p>
                <div style="display:grid;grid-template-columns:1fr 1fr;gap:0.75rem;margin-bottom:1.75rem;">
                    <?php foreach(['SAC code auto-fill','18% GST calculation','10% TDS under 194J','Net payable shown','e-Invoice with IRN','PDF + WhatsApp send'] as $r): ?>
                    <div style="display:flex;align-items:center;gap:0.5rem;font-size:0.88rem;color:var(--text-muted);">
                        <svg width="14" height="14" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <?= $r ?>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a href="consulting-invoice" class="btn btn-primary" style="padding:0.75rem 1.75rem;">Explore CA Invoicing</a>
            </div>
            <div style="position:relative;">
                <img src="assets/store/section-1.jpg"
                     alt="ZYLO GST invoice with SAC code and TDS deduction for chartered accountant services"
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
                    <img src="assets/store/section-2.jpg"
                         alt="ZYLO multi-client dashboard for CA practice management showing client ledgers and reports"
                         width="560" height="380"
                         style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" loading="lazy">
                    <div style="position:absolute;bottom:-1rem;right:-1rem;background:white;border-radius:12px;padding:0.9rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);">
                        <div style="font-size:0.75rem;color:var(--text-muted);margin-bottom:0.3rem;">Outstanding receivables</div>
                        <div style="font-size:1.1rem;font-weight:800;color:var(--primary-dark);">₹3,84,000 <span style="color:#ef4444;font-size:0.82rem;">↑ 12 pending</span></div>
                    </div>
                </div>
            </div>
            <div style="order:1;">
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.78rem;font-weight:700;padding:0.3rem 0.85rem;border-radius:50px;margin-bottom:1.25rem;text-transform:uppercase;letter-spacing:1px;">Practice Management</div>
                <h2 style="font-size:2.2rem;color:var(--primary-dark);line-height:1.25;margin-bottom:1.25rem;">Manage Every Client From One CA Practice Dashboard</h2>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.5rem;">Track invoice history, outstanding payments, compliance deadlines, and retainer status for every client — all in one place. No more switching between Excel sheets or missing follow-ups.</p>
                <div style="display:grid;grid-template-columns:1fr 1fr;gap:0.75rem;margin-bottom:1.75rem;">
                    <?php foreach(['Client-wise ledgers','Outstanding tracker','Retainer auto-invoicing','Compliance reminders','Client P&L reports','Payment follow-up alerts'] as $r): ?>
                    <div style="display:flex;align-items:center;gap:0.5rem;font-size:0.88rem;color:var(--text-muted);">
                        <svg width="14" height="14" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <?= $r ?>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a href="accounting-software" class="btn btn-outline" style="padding:0.75rem 1.75rem;">Explore Practice Management</a>
            </div>
        </div>
    </div>
</section>

<!-- ========== CA PRACTICE TYPES ========== -->
<section class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>ZYLO Works for Every Type of CA Practice</h2>
            <p>Whether you're a solo practitioner, a mid-size firm, or a Big 4 feeder — ZYLO scales with your practice.</p>
        </div>
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.75rem;margin-top:3rem;" class="perfect-for-grid">
            <?php
            $types = [
                ['emoji'=>'👤','title'=>'Solo CA Practitioners',
                 'desc' =>'Manage 10–50 clients from one clean dashboard. Bill for audit, ITR, GST filing, and bookkeeping with SAC codes auto-applied. Track all outstanding and send reminders instantly.',
                 'pts'  =>['All client invoices in one place','SAC + TDS auto-calculated','WhatsApp & email delivery'],
                 'link' =>'consulting-invoice'],
                ['emoji'=>'🏢','title'=>'CA Firms & Partnerships',
                 'desc' =>'Assign clients to specific team members, track each partner\'s billing, manage shared client records, and report on firm-wide revenue with role-based access for all staff.',
                 'pts'  =>['Multi-user role-based access','Partner-wise billing reports','Shared client records'],
                 'link' =>'accounting-software'],
                ['emoji'=>'📋','title'=>'Tax Filing & ITR Services',
                 'desc' =>'Bill clients for ITR preparation, advance tax, and TDS filing services. Track compliance deadlines, auto-send reminders before due dates, and maintain digital records for each filing.',
                 'pts'  =>['ITR & tax service invoicing','Compliance deadline tracker','Digital filing records'],
                 'link' =>'gst-billing-software'],
                ['emoji'=>'🔍','title'=>'Audit & Assurance Services',
                 'desc' =>'Raise audit engagement invoices with proper SAC code 998211, track milestone billing for long-term assignments, and maintain audit trail records for internal and statutory audits.',
                 'pts'  =>['SAC 998211 audit invoicing','Milestone-based billing','Audit trail maintenance'],
                 'link' =>'accounting-software'],
                ['emoji'=>'🌐','title'=>'NRI & International Advisory',
                 'desc' =>'Bill NRI clients in USD, GBP, or AED for FEMA compliance, NRI tax returns, and repatriation advisory. Multi-currency invoices with INR equivalent for your own GST records.',
                 'pts'  =>['Multi-currency invoicing','FEMA advisory billing','INR auto-conversion for GST'],
                 'link' =>'commercial-invoice'],
                ['emoji'=>'📊','title'=>'CFO & Virtual Accounting',
                 'desc' =>'Offer virtual CFO services to multiple clients — raise monthly retainer invoices, deliver real-time P&L dashboards, and provide bank reconciliation reports without manual effort.',
                 'pts'  =>['Monthly retainer automation','Virtual CFO reporting','Bank reconciliation'],
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
            <h2>ZYLO vs Manual Tools & Generic Software</h2>
            <p>See why 3,000+ CA professionals switched from Excel, Tally, and generic billing tools to ZYLO.</p>
        </div>
        <div style="overflow-x:auto;margin-top:2.5rem;border-radius:16px;box-shadow:var(--shadow-md);border:1px solid var(--border-color);">
            <table style="width:100%;border-collapse:collapse;background:white;min-width:500px;">
                <thead>
                    <tr style="background:var(--primary);color:white;">
                        <th style="padding:1.1rem 1.5rem;text-align:left;font-weight:600;font-size:0.95rem;">Feature</th>
                        <th style="padding:1.1rem 1.5rem;text-align:center;font-weight:700;font-size:0.95rem;">
                            <span style="background:rgba(255,255,255,0.15);padding:0.25rem 0.75rem;border-radius:50px;">ZYLO CRM</span>
                        </th>
                        <th style="padding:1.1rem 1.5rem;text-align:center;font-weight:600;font-size:0.95rem;opacity:0.85;">Excel / Tally / Manual</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $rows = [
                        ['SAC Code Auto-Fill',          '✅ Automatic by service type',  '❌ Manual lookup every time'],
                        ['TDS Under 194J Auto-Calc',    '✅ Built-in, zero effort',       '❌ Manual calculation'],
                        ['Multi-Client Dashboard',      '✅ All clients in one view',     '❌ Separate files per client'],
                        ['Retainer Auto-Invoicing',     '✅ Recurring, auto-sent',        '❌ Manual every month'],
                        ['e-Invoice with IRN',          '✅ One-click IRN generation',    '❌ Separate government portal'],
                        ['Client-Wise P&L Reports',     '✅ One-click export (PDF)',      '❌ Manual report prep'],
                        ['Mobile Access',               '✅ Full Android & iOS app',      '❌ Desktop only'],
                        ['Monthly Cost',                '₹0 – ₹1,999',                   '₹3,000 – ₹12,000+'],
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
            <h2>What Chartered Accountants Say About ZYLO</h2>
            <p>Real feedback from CA practitioners and firm partners using ZYLO across India.</p>
        </div>
        <div class="grid-3" style="margin-top:3rem;">
            <?php
            $reviews = [
                ['quote'=>'"I manage 60+ clients and ZYLO keeps everything organised. SAC codes are auto-filled, TDS is calculated instantly, and retainer invoices go out on their own every month. It\'s like having a billing assistant."',
                 'name'=>'David Chen','role'=>'CA, D. Chen & Associates · Mumbai','avatar'=>'assets/store/avatar-david.svg','stars'=>5],
                ['quote'=>'"The multi-client dashboard is what sold me. I can see every client\'s outstanding, last invoice date, and compliance status in one screen. I stopped using three different spreadsheets the day I signed up."',
                 'name'=>'Sarah Miller','role'=>'CA Partner, Miller & Co. · Bengaluru','avatar'=>'assets/store/avatar-sarah.svg','stars'=>5],
                ['quote'=>'"My NRI clients pay in USD and ZYLO handles the multi-currency invoices perfectly — with the INR equivalent auto-calculated for my GST records. e-Invoice with IRN is a huge time saver for my corporate clients."',
                 'name'=>'Emily Watson','role'=>'CA, EW Tax Advisory · Delhi','avatar'=>'assets/store/avatar-emily.svg','stars'=>5],
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
            <p>Everything chartered accountants ask about ZYLO CRM.</p>
        </div>
        <div style="margin-top:2.5rem;" itemscope itemtype="https://schema.org/FAQPage">
            <?php
            $faqs = [
                ['q'=>'What SAC codes does ZYLO use for CA services?',
                 'a'=>'ZYLO supports the correct SAC codes for CA services: 998211 (Financial auditing services), 998212 (Accounting and bookkeeping services), 998213 (Payroll services), and 998214 (Other accounting & financial services). These are auto-applied when you select your service type — no manual lookup required.'],
                ['q'=>'Can ZYLO handle TDS deductions on CA invoices?',
                 'a'=>'Yes. ZYLO automatically calculates TDS at the applicable rate (10% under Section 194J for professional services) and displays the net payable amount on each invoice. You can also generate TDS summaries and track deductions client-wise for quarterly TDS filing.'],
                ['q'=>'Can a CA manage multiple clients from one ZYLO account?',
                 'a'=>'Yes. ZYLO is built for multi-client practice management. Manage unlimited clients from one dashboard with separate ledgers, invoice history, outstanding amounts, and compliance status for each. Role-based access lets your team members handle specific client accounts securely.'],
                ['q'=>'Does ZYLO support retainer billing for ongoing CA services?',
                 'a'=>'Yes. ZYLO supports monthly retainer billing with recurring invoices. Set up auto-invoicing for ongoing services like bookkeeping, GST filing, or compliance management. Invoices are auto-generated each cycle and delivered to clients via email or WhatsApp — no manual work.'],
                ['q'=>'Is ZYLO compliant with ICAI billing guidelines?',
                 'a'=>'ZYLO generates GST-compliant invoices with all required fields — GSTIN, SAC codes, place of supply, reverse charge applicability, and digital signatures where required. Invoices follow the standard format for professional CA services under GST law and ICAI guidelines.'],
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
        <h2 style="font-size:2.75rem;margin-bottom:1rem;color:white;">Run Your CA Practice Smarter — Start Free</h2>
        <p style="max-width:620px;margin:0 auto 2.5rem;font-size:1.1rem;opacity:0.95;color:white;">Join 3,000+ Chartered Accountants using ZYLO to manage multi-client billing, SAC codes, TDS, retainers, and compliance reports — all from one platform. Free plan, no credit card required.</p>

        <div style="display:flex;gap:1rem;flex-wrap:wrap;justify-content:center;">
            <a href="contact" style="display:inline-block;background:white;color:var(--primary);padding:1rem 2.5rem;border-radius:10px;font-weight:700;font-size:1.1rem;text-decoration:none;transition:opacity 0.2s;">Get Started Free</a>
            <a href="https://wa.me/917501137266" target="_blank" rel="noopener noreferrer"
               style="display:inline-block;background:rgba(255,255,255,0.15);border:2px solid rgba(255,255,255,0.6);color:white;padding:0.8rem 2.5rem;border-radius:10px;font-weight:700;font-size:1.1rem;text-decoration:none;transition:background 0.2s;">
                Chat on WhatsApp
            </a>
        </div>

        <p style="margin-top:1.5rem;font-size:0.9rem;opacity:0.8;color:white;">Free plan · SAC codes · TDS tracking · Multi-client · No credit card · Cancel anytime</p>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

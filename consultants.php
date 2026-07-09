<?php
$pageTitle = "Business Software for Consultants – Client, Billing & Project Management | ZYLO CRM";
$pageDescription = "ZYLO CRM is built for consultants. Manage multiple clients, bill hourly or on retainer, track expenses, generate GST invoices with SAC codes, and get paid faster. Free plan available.";
$pageKeywords = "consulting software India, consultant billing software, client management for consultants, GST invoice consultant, retainer billing software, consulting CRM India, consulting invoice software";
$canonicalPath = '/consultants';
$pageImage = 'https://zylocrm.com/assets/store/section-1.jpg';

$pageSchema = [
    [
        '@context' => 'https://schema.org',
        '@type'    => 'SoftwareApplication',
        'name'     => 'ZYLO CRM for Consultants',
        'url'      => 'https://zylocrm.com/consultants',
        'description' => 'All-in-one business management for consultants. Client management, hourly/retainer billing, GST invoicing with SAC codes, expense tracking, and real-time project financials.',
        'applicationCategory' => 'BusinessApplication',
        'operatingSystem' => 'Web, Android, iOS',
        'provider' => ['@type'=>'Organization','name'=>'ZYLO CRM','url'=>'https://zylocrm.com','logo'=>'https://zylocrm.com/assets/logo.png'],
        'offers'   => ['@type'=>'Offer','priceCurrency'=>'INR','price'=>'0','pricingModel'=>'Freemium'],
        'aggregateRating' => ['@type'=>'AggregateRating','ratingValue'=>'4.9','reviewCount'=>'5280','bestRating'=>'5'],
        'featureList' => ['Multi-client dashboard','Hourly & retainer billing','GST invoicing with SAC codes','Expense reimbursement tracking','Multi-currency for international clients','Project profitability reports']
    ],
    [
        '@context' => 'https://schema.org',
        '@type'    => 'BreadcrumbList',
        'itemListElement' => [
            ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://zylocrm.com/'],
            ['@type'=>'ListItem','position'=>2,'name'=>'Consultants','item'=>'https://zylocrm.com/consultants'],
        ]
    ]
];

$faqSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        ['@type'=>'Question','name'=>'What billing models does ZYLO support for consultants?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'ZYLO supports hourly billing (hours × rate), fixed-fee project billing, milestone-based invoicing, and monthly retainer invoices. You can mix billing types across different clients and projects.']],
        ['@type'=>'Question','name'=>'Which SAC code should I use for consulting services?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'For management consulting use SAC 998311, for business consulting use 998312, and for IT consulting use 998313. ZYLO has a built-in SAC code lookup so you find and apply the right code instantly.']],
        ['@type'=>'Question','name'=>'Can I manage multiple clients in ZYLO?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes. ZYLO has a unified client dashboard where you can manage all your clients, track outstanding invoices per client, view project-wise profitability, and log communication history — all in one place.']],
        ['@type'=>'Question','name'=>'How do I send a retainer invoice in ZYLO?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'Set up a recurring retainer invoice once, and ZYLO auto-generates and sends it on the 1st of every month. All client details, amounts, and GST calculations carry forward automatically.']],
        ['@type'=>'Question','name'=>'Can I invoice international consulting clients in USD or EUR?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes. ZYLO supports 150+ currencies with live exchange rates. Invoice international clients in their preferred currency. ZYLO auto-generates zero-rated GST export invoices and handles forex tracking in your INR books.']],
    ]
];

include 'includes/header.php';
?>
<script type="application/ld+json"><?php echo json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>

<!-- ========== HERO ========== -->
<section class="bg-offwhite" style="padding-top:calc(var(--header-height) + 4.5rem);padding-bottom:5rem;position:relative;overflow:hidden;">
    <div style="position:absolute;top:-15%;right:-8%;width:520px;height:520px;background:radial-gradient(circle,rgba(12,79,120,0.07) 0%,transparent 70%);border-radius:50%;pointer-events:none;" aria-hidden="true"></div>
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:center;" class="intro-grid">
            <div>
                <div style="display:inline-flex;align-items:center;gap:0.5rem;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.8rem;font-weight:700;padding:0.38rem 1rem;border-radius:50px;margin-bottom:1.5rem;text-transform:uppercase;letter-spacing:1px;border:1px solid rgba(12,79,120,0.18);">
                    <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    Built for Consulting Professionals
                </div>
                <h1 style="font-size:3.2rem;color:var(--primary-dark);line-height:1.12;margin-bottom:1.4rem;">Business Software Built for Consultants</h1>
                <p style="font-size:1.18rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.9rem;">Manage every client, bill hourly or on retainer, track project expenses, and get paid faster — all from one clean dashboard. No complex ERP, no accountant needed.</p>
                <div style="display:flex;flex-wrap:wrap;gap:0.55rem;margin-bottom:2rem;">
                    <?php foreach(['Client Dashboard','Hourly & Retainer','GST + SAC Codes','Expense Tracking','Multi-Currency','Free Plan'] as $p): ?>
                    <span style="background:white;border:1px solid var(--border-color);color:var(--text-main);font-size:0.82rem;font-weight:600;padding:0.35rem 0.9rem;border-radius:50px;box-shadow:var(--shadow-sm);">✓ &nbsp;<?= $p ?></span>
                    <?php endforeach; ?>
                </div>
                <div style="display:flex;gap:1rem;flex-wrap:wrap;">
                    <a href="contact" class="btn btn-primary" style="padding:0.9rem 2rem;font-size:1rem;">Start Free — No Credit Card</a>
                    <a href="consulting-invoice" class="btn btn-outline" style="padding:0.9rem 2rem;font-size:1rem;">Create Invoice Free</a>
                </div>
                <p style="margin-top:1.5rem;font-size:0.85rem;color:var(--text-muted);margin-bottom:0;">⭐ 4.9/5 from 5,280+ reviews &nbsp;·&nbsp; Trusted by 5,000+ consulting professionals</p>
            </div>

            <div style="position:relative;">
                <img src="assets/store/section-1.jpg" alt="ZYLO CRM consultant dashboard showing client billing, retainer invoices and project financials" width="580" height="400" style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" fetchpriority="high" loading="lazy">
                <div style="position:absolute;bottom:-1.25rem;left:-1.25rem;background:white;border-radius:14px;padding:0.9rem 1.25rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.75rem;">
                    <span style="width:38px;height:38px;background:#dcfce7;border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="18" height="18" fill="none" stroke="#16a34a" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.78rem;color:var(--text-muted);">Billed this month</div>
                        <div style="font-size:1rem;font-weight:700;color:var(--text-main);">₹4,20,000 <span style="color:#16a34a;font-size:0.8rem;">↑ 31%</span></div>
                    </div>
                </div>
                <div style="position:absolute;top:-1rem;right:-1rem;background:white;border-radius:14px;padding:0.9rem 1.25rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.65rem;">
                    <span style="width:34px;height:34px;background:rgba(12,79,120,0.08);border-radius:8px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="16" height="16" fill="none" stroke="var(--primary)" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.78rem;color:var(--text-muted);">Active clients</div>
                        <div style="font-size:0.9rem;font-weight:700;color:var(--text-main);">8 clients · On track ✓</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== STATS ========== -->
<section style="padding:2.75rem 0;background:white;border-bottom:1px solid var(--border-color);">
    <div class="container">
        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1rem;text-align:center;">
            <?php $stats=[['val'=>'5,000+','label'=>'Consultants Trust ZYLO'],['val'=>'4.9 ⭐','label'=>'Average Rating'],['val'=>'150+','label'=>'Currencies Supported'],['val'=>'< 60s','label'=>'Invoice Creation Time']];
            foreach($stats as $i=>$s): $b=$i>0?'border-left:1px solid var(--border-color);':''; ?>
            <div style="<?= $b ?>"><div style="font-size:2rem;font-weight:800;color:var(--primary-dark);line-height:1;margin-bottom:0.4rem;"><?= $s['val'] ?></div><div style="font-size:0.83rem;color:var(--text-muted);"><?= $s['label'] ?></div></div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== CHALLENGES ========== -->
<section>
    <div class="container">
        <div style="text-align:center;max-width:700px;margin:0 auto 4rem;">
            <h2 style="font-size:2.5rem;color:var(--primary-dark);margin-bottom:1rem;">The Real Challenges Consultants Face — Solved by ZYLO</h2>
            <p style="color:var(--text-muted);font-size:1.05rem;">Every consultant deals with these headaches. ZYLO eliminates them.</p>
        </div>
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:2rem;" class="features-grid">
            <?php $challenges=[
                ['icon'=>'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3','tag'=>'Billing','problem'=>'Billing Errors on Hourly Work','solution'=>'ZYLO calculates hours × rate automatically. Log time per session, review before invoicing, and send accurate bills every time — no more client disputes.'],
                ['icon'=>'M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2z','tag'=>'GST','problem'=>'Wrong SAC Codes on Invoices','solution'=>'ZYLO\'s built-in SAC code lookup covers 500+ service categories. Select your service type and the correct SAC and GST rate apply automatically — no guesswork.'],
                ['icon'=>'M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z','tag'=>'Payments','problem'=>'Chasing Overdue Invoices','solution'=>'Auto payment reminders via WhatsApp and email. Add UPI/bank payment links to invoices. Clients pay faster when the link is right there in the invoice.'],
                ['icon'=>'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z','tag'=>'Clients','problem'=>'Losing Track Across 10+ Clients','solution'=>'Unified client dashboard shows every client\'s outstanding balance, last invoice, last contact date, and project status — all in one view. Never drop the ball again.'],
                ['icon'=>'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z','tag'=>'International','problem'=>'Forex Complexity with Global Clients','solution'=>'Invoice in USD, EUR, GBP, or 150+ currencies. ZYLO handles forex rate tracking in your INR books and auto-generates zero-rated GST export invoices for foreign clients.'],
                ['icon'=>'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10','tag'=>'Reporting','problem'=>'No Visibility into Project Profitability','solution'=>'See revenue vs cost per project. Track billable hours, expenses, and margins in real-time. Know which clients and projects are most profitable — instantly.'],
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

<!-- ========== SPOTLIGHT 1 ========== -->
<section class="bg-offwhite">
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:center;" class="intro-grid">
            <div>
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.78rem;font-weight:700;padding:0.3rem 0.85rem;border-radius:50px;margin-bottom:1.25rem;text-transform:uppercase;letter-spacing:1px;">Client & Project Billing</div>
                <h2 style="font-size:2.2rem;color:var(--primary-dark);line-height:1.25;margin-bottom:1.25rem;">Bill Every Engagement Your Way — Hourly, Project, or Retainer</h2>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.5rem;">ZYLO supports every consulting billing model. Set hourly rates per client, bill fixed fees for projects, create milestone payment schedules, or auto-generate monthly retainer invoices — all with correct GST and SAC codes applied automatically.</p>
                <div style="display:grid;grid-template-columns:1fr 1fr;gap:0.75rem;margin-bottom:1.75rem;">
                    <?php foreach(['Hourly time billing','Fixed-fee projects','Milestone invoicing','Monthly retainers','Expense line items','Advance & balance'] as $r): ?>
                    <div style="display:flex;align-items:center;gap:0.5rem;font-size:0.88rem;color:var(--text-muted);">
                        <svg width="14" height="14" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <?= $r ?>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a href="consulting-invoice" class="btn btn-primary" style="padding:0.75rem 1.75rem;">Create Consulting Invoice</a>
            </div>
            <div style="position:relative;">
                <img src="assets/store/section-1.jpg" alt="ZYLO consulting billing dashboard showing hourly and retainer invoices" width="560" height="380" style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- ========== SPOTLIGHT 2 ========== -->
<section>
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:center;" class="intro-grid">
            <div style="order:2;" class="feature-img-right">
                <div style="position:relative;">
                    <img src="assets/store/section-2.jpg" alt="ZYLO multi-client dashboard and project profitability reports for consultants" width="560" height="380" style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" loading="lazy">
                    <div style="position:absolute;bottom:-1rem;right:-1rem;background:white;border-radius:12px;padding:0.9rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);">
                        <div style="font-size:0.75rem;color:var(--text-muted);margin-bottom:0.3rem;">Project margin</div>
                        <div style="font-size:1.1rem;font-weight:800;color:var(--primary-dark);">68% <span style="color:#16a34a;font-size:0.82rem;">↑ Above target ✓</span></div>
                    </div>
                </div>
            </div>
            <div style="order:1;">
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.78rem;font-weight:700;padding:0.3rem 0.85rem;border-radius:50px;margin-bottom:1.25rem;text-transform:uppercase;letter-spacing:1px;">Client Dashboard & Reports</div>
                <h2 style="font-size:2.2rem;color:var(--primary-dark);line-height:1.25;margin-bottom:1.25rem;">See Every Client & Project at a Glance</h2>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.5rem;">Your unified dashboard shows all active clients, outstanding invoices, project margins, and upcoming deadlines — all in real time. Spot which clients are most profitable and where to focus your efforts.</p>
                <div style="display:grid;grid-template-columns:1fr 1fr;gap:0.75rem;margin-bottom:1.75rem;">
                    <?php foreach(['Multi-client view','Outstanding by client','Project P&L','Revenue forecasting','Client comm log','Follow-up reminders'] as $r): ?>
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

<!-- ========== WHO IT'S FOR ========== -->
<section class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>ZYLO Works for Every Type of Consultant</h2>
            <p>Whether you work solo or lead a firm, ZYLO adapts to your practice.</p>
        </div>
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.75rem;margin-top:3rem;" class="perfect-for-grid">
            <?php $types=[
                ['emoji'=>'🏢','title'=>'Management & Strategy','desc'=>'Bill on project retainers or daily rates. Track deliverables, expense reimbursements, and client ROI metrics in one place.','pts'=>['Project & retainer billing','Expense reimbursement','Deliverable tracking'],'link'=>'consulting-invoice'],
                ['emoji'=>'💻','title'=>'IT & Technology Consultants','desc'=>'Create sprint-based or hourly invoices with time logs. Apply SAC 998313 with correct 18% GST automatically.','pts'=>['Hourly time log billing','SAC 998313 support','Sprint milestone invoicing'],'link'=>'consulting-invoice'],
                ['emoji'=>'📊','title'=>'Financial & Tax Advisors','desc'=>'Manage client books, generate GST-compliant invoices, and produce GSTR-ready reports for your own practice and your clients.','pts'=>['GST compliance invoicing','GSTR-1 reports','Client book access'],'link'=>'accounting-software'],
                ['emoji'=>'🎯','title'=>'Marketing & PR Consultants','desc'=>'Track campaign budgets, bill clients for media spend + fees, and show project ROI with clear reports that build client retention.','pts'=>['Fee + expense billing','Campaign cost tracking','Monthly retainer invoices'],'link'=>'consulting-invoice'],
                ['emoji'=>'👥','title'=>'HR & L&D Consultants','desc'=>'Bill workshop sessions by hours or batch. Manage training contracts, issue GST receipts to corporate clients, and track multiple engagements.','pts'=>['Session-based billing','Training contract management','Corporate GST invoices'],'link'=>'consulting-invoice'],
                ['emoji'=>'⚖️','title'=>'Legal & Compliance Advisors','desc'=>'Create itemised invoices for legal work, track billable hours per case, and manage retainer agreements with auto-renewal billing.','pts'=>['Case-based billing','Retainer auto-renewal','Confidential client data'],'link'=>'consulting-invoice'],
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
            <h2>ZYLO vs Spreadsheets & Manual Invoicing</h2>
            <p>See why 5,000+ consultants switched to ZYLO from Excel and paper-based billing.</p>
        </div>
        <div style="overflow-x:auto;margin-top:2.5rem;border-radius:16px;box-shadow:var(--shadow-md);border:1px solid var(--border-color);">
            <table style="width:100%;border-collapse:collapse;background:white;min-width:500px;">
                <thead>
                    <tr style="background:var(--primary);color:white;">
                        <th style="padding:1.1rem 1.5rem;text-align:left;font-weight:600;font-size:0.95rem;">Feature</th>
                        <th style="padding:1.1rem 1.5rem;text-align:center;font-weight:700;font-size:0.95rem;"><span style="background:rgba(255,255,255,0.15);padding:0.25rem 0.75rem;border-radius:50px;">ZYLO CRM</span></th>
                        <th style="padding:1.1rem 1.5rem;text-align:center;font-weight:600;font-size:0.95rem;opacity:0.85;">Spreadsheets / Manual</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $rows=[
                        ['GST Auto-Calculation',      '✅ Instant, error-free',     '❌ Manual formula, error-prone'],
                        ['SAC Code Lookup',           '✅ 500+ codes built-in',     '❌ Google it every time'],
                        ['Retainer Auto-Generation',  '✅ Set once, runs forever',  '❌ Copy-paste every month'],
                        ['Multi-Currency Billing',    '✅ 150+ currencies',         '❌ Manual forex calculation'],
                        ['Payment Reminders',         '✅ Auto WhatsApp & email',   '❌ Manual follow-up calls'],
                        ['Project Profitability',     '✅ Real-time dashboard',     '❌ Manual calculation'],
                        ['Mobile App',                '✅ Full Android & iOS',      '❌ Laptop only'],
                        ['Time to Invoice',           '< 60 seconds',              '15–30 minutes'],
                    ];
                    foreach($rows as $i=>$row): $bg=$i%2===1?'background:#f8f9fa;':''; ?>
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
            <h2>What Consultants Say About ZYLO</h2>
            <p>Real feedback from consulting professionals using ZYLO every day.</p>
        </div>
        <div class="grid-3" style="margin-top:3rem;">
            <?php $reviews=[
                ['quote'=>'"I manage 12 consulting clients across IT and management. ZYLO\'s unified dashboard and auto-retainer billing saves me 8+ hours every month. GST is completely stress-free now."','name'=>'David Chen','role'=>'Strategy Consultant · Mumbai','avatar'=>'assets/store/avatar-david.svg','stars'=>5],
                ['quote'=>'"The SAC code lookup is a lifesaver. I used to spend 20 minutes per invoice checking the right code. ZYLO fills it in automatically. And the multi-currency billing for my US clients works perfectly."','name'=>'Sarah Miller','role'=>'IT Consultant · Bengaluru','avatar'=>'assets/store/avatar-sarah.svg','stars'=>5],
                ['quote'=>'"My monthly retainer invoices used to take me an hour across all clients. Now ZYLO auto-generates them on the 1st of every month and sends them via WhatsApp. Clients pay within 2 days."','name'=>'Emily Watson','role'=>'HR & L&D Advisor · Delhi','avatar'=>'assets/store/avatar-emily.svg','stars'=>5],
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
                    <img src="<?= $r['avatar'] ?>" alt="<?= $r['name'] ?>" width="42" height="42" style="width:42px;height:42px;border-radius:50%;object-fit:cover;flex-shrink:0;" loading="lazy">
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
            <p>Everything consultants ask about ZYLO CRM.</p>
        </div>
        <div style="margin-top:2.5rem;" itemscope itemtype="https://schema.org/FAQPage">
            <?php $faqs=[
                ['q'=>'What billing models does ZYLO support for consultants?','a'=>'ZYLO supports hourly billing (hours × rate), fixed-fee project billing, milestone-based invoicing, and monthly retainer invoices. You can mix billing types across different clients and projects freely.'],
                ['q'=>'Which SAC code should I use for consulting services?','a'=>'For management consulting use SAC 998311, for business consulting use 998312, and for IT consulting use 998313. ZYLO has a built-in SAC code lookup so you find and apply the right code instantly.'],
                ['q'=>'Can I manage multiple clients in ZYLO?','a'=>'Yes. ZYLO has a unified client dashboard where you can manage all clients, track outstanding invoices per client, view project-wise profitability, log communication history, and set follow-up reminders — all in one place.'],
                ['q'=>'How do I send a retainer invoice in ZYLO?','a'=>'Set up a recurring retainer invoice once, and ZYLO auto-generates and sends it on the 1st of every month. All client details, amounts, and GST calculations carry forward automatically — zero manual effort.'],
                ['q'=>'Can I invoice international consulting clients in USD or EUR?','a'=>'Yes. ZYLO supports 150+ currencies with live exchange rates. Invoice international clients in their preferred currency. ZYLO auto-generates zero-rated GST export invoices and handles forex tracking in your INR books.'],
            ];
            foreach($faqs as $i=>$faq): ?>
            <div style="border:1px solid var(--border-color);border-radius:12px;margin-bottom:0.9rem;overflow:hidden;" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <button onclick="toggleFaq(this)" aria-expanded="<?= $i===0?'true':'false' ?>"
                    style="width:100%;text-align:left;background:white;border:none;padding:1.25rem 1.5rem;font-size:0.97rem;font-weight:600;color:var(--primary-dark);cursor:pointer;display:flex;justify-content:space-between;align-items:center;gap:1rem;">
                    <span itemprop="name"><?= $faq['q'] ?></span>
                    <svg class="faq-icon" width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true" style="flex-shrink:0;transition:transform 0.3s;<?= $i===0?'transform:rotate(180deg)':'' ?>"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div class="faq-body" style="display:<?= $i===0?'block':'none' ?>;padding:0 1.5rem 1.25rem;background:white;" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
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
        <h2 style="font-size:2.75rem;margin-bottom:1rem;color:white;">Start Managing Your Consulting Practice Smarter — Free</h2>
        <p style="max-width:600px;margin:0 auto 2.5rem;font-size:1.1rem;opacity:0.95;color:white;">Join 5,000+ consultants using ZYLO to manage clients, bill accurately, and get paid faster. Free plan, no credit card required.</p>
        <div style="display:flex;gap:1rem;flex-wrap:wrap;justify-content:center;">
            <a href="contact" style="display:inline-block;background:white;color:var(--primary);padding:1rem 2.5rem;border-radius:10px;font-weight:700;font-size:1.1rem;text-decoration:none;transition:opacity 0.2s;">Get Started Free</a>
            <a href="https://wa.me/917501137266" target="_blank" rel="noopener noreferrer" style="display:inline-block;background:rgba(255,255,255,0.15);border:2px solid rgba(255,255,255,0.6);color:white;padding:0.8rem 2.5rem;border-radius:10px;font-weight:700;font-size:1.1rem;text-decoration:none;">Chat on WhatsApp</a>
        </div>
        <p style="margin-top:1.5rem;font-size:0.9rem;opacity:0.8;color:white;">Free plan · GST + SAC codes · Retainer billing · Multi-currency · No credit card</p>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

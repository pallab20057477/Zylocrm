<?php
$pageTitle = "Business Software for Professional Services – Billing, GST & Client Management | ZYLO CRM";
$pageDescription = "ZYLO CRM is built for professional services firms. Manage client billing, hourly and retainer invoicing, GST with SAC codes, TDS tracking, expense management, and project-wise reporting. Free plan.";
$pageKeywords = "professional services software India, billing software for professional services, GST invoicing professional services, SAC code billing software, client management professional services, retainer billing software India";
$canonicalPath = '/professional-services';
$pageImage = 'https://zylocrm.com/assets/store/section-1.jpg';

$pageSchema = [
    '@context' => 'https://schema.org',
    '@type'    => 'SoftwareApplication',
    'name'     => 'ZYLO CRM for Professional Services',
    'url'      => 'https://zylocrm.com/professional-services',
    'description' => 'All-in-one business management platform for professional services firms. Hourly and retainer billing, GST invoicing with SAC codes, TDS tracking, multi-client management, project expense tracking, and professional financial reports.',
    'applicationCategory' => 'BusinessApplication',
    'operatingSystem' => 'Web, Android, iOS',
    'provider' => ['@type'=>'Organization','name'=>'ZYLO CRM','url'=>'https://zylocrm.com','logo'=>'https://zylocrm.com/assets/logo.png'],
    'offers'   => ['@type'=>'Offer','priceCurrency'=>'INR','price'=>'0','pricingModel'=>'Freemium'],
    'aggregateRating' => ['@type'=>'AggregateRating','ratingValue'=>'4.8','reviewCount'=>'6280','bestRating'=>'5'],
    'featureList' => [
        'Hourly, fixed-fee and retainer billing',
        'GST invoicing with SAC codes',
        'TDS deduction tracking (Section 194J)',
        'Multi-client project management',
        'Expense tracking per project',
        'Client payment reminders via WhatsApp',
        'Professional P&L and revenue reports',
        'Mobile app for Android & iOS'
    ]
];

$breadcrumb = [
    '@context' => 'https://schema.org',
    '@type'    => 'BreadcrumbList',
    'itemListElement' => [
        ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://zylocrm.com/'],
        ['@type'=>'ListItem','position'=>2,'name'=>'Professional Services','item'=>'https://zylocrm.com/professional-services'],
    ]
];

$faqSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        ['@type'=>'Question','name'=>'What SAC codes apply to professional services in GST?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'Common SAC codes for professional services include: 998311 (Management consulting), 998312 (Business consulting), 998313 (IT & technology consulting), 998211 (Financial auditing), 998212 (Accounting & bookkeeping), 998393 (Legal services), and 998399 (Other professional services). ZYLO auto-applies the correct SAC code based on your service type.']],
        ['@type'=>'Question','name'=>'Does ZYLO handle TDS on professional service invoices?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes. ZYLO automatically calculates TDS at 10% under Section 194J for professional and technical services. The TDS amount and net payable are shown on each invoice. You can track TDS deductions per client and generate summaries for quarterly filing.']],
        ['@type'=>'Question','name'=>'Can I do both hourly and retainer billing in ZYLO?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes. ZYLO supports multiple billing models — hourly billing (log hours and multiply by rate), fixed-fee project billing, monthly retainers (auto-recurring invoices), and milestone-based billing. You can mix billing types across different clients.']],
        ['@type'=>'Question','name'=>'Can ZYLO track expenses per client or project?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes. ZYLO lets you log expenses against specific clients or projects — travel, subscriptions, subcontractor costs, and more. View project-wise profitability and include reimbursable expenses directly on client invoices.']],
        ['@type'=>'Question','name'=>'How does ZYLO help professional services firms get paid faster?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'ZYLO adds UPI payment links and bank account details directly to invoices. Auto-send payment reminders via WhatsApp and email at custom intervals. Track invoice status (sent, viewed, paid, overdue) from your dashboard so no payment slips through.']],
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
                    Built for Professional Services Firms
                </div>

                <h1 style="font-size:3.2rem;color:var(--primary-dark);line-height:1.12;margin-bottom:1.4rem;">
                    Billing & Practice Management Software for Professional Services
                </h1>
                <p style="font-size:1.18rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.9rem;">
                    Bill clients hourly, by project, or on retainer — with GST SAC codes auto-applied, TDS calculated, and payment reminders sent automatically. Run your entire professional practice from one platform.
                </p>

                <div style="display:flex;flex-wrap:wrap;gap:0.55rem;margin-bottom:2rem;">
                    <?php foreach(['SAC Codes','TDS Tracking','Retainer Billing','Hourly Billing','Multi-Client','Free Plan'] as $p): ?>
                    <span style="background:white;border:1px solid var(--border-color);color:var(--text-main);font-size:0.82rem;font-weight:600;padding:0.35rem 0.9rem;border-radius:50px;box-shadow:var(--shadow-sm);">✓ &nbsp;<?= $p ?></span>
                    <?php endforeach; ?>
                </div>

                <div style="display:flex;gap:1rem;flex-wrap:wrap;">
                    <a href="contact" class="btn btn-primary" style="padding:0.9rem 2rem;font-size:1rem;">Start Free — No Credit Card</a>
                    <a href="consulting-invoice" class="btn btn-outline" style="padding:0.9rem 2rem;font-size:1rem;">See Consulting Invoice</a>
                </div>

                <p style="margin-top:1.5rem;font-size:0.85rem;color:var(--text-muted);margin-bottom:0;">
                    ⭐ 4.8/5 from 6,280+ reviews &nbsp;·&nbsp; Trusted by 8,000+ professional services firms across India
                </p>
            </div>

            <div style="position:relative;">
                <img src="assets/store/section-1.jpg"
                     alt="ZYLO CRM professional services dashboard showing client billing, GST invoices with SAC codes and TDS tracking"
                     width="580" height="400"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" fetchpriority="high" loading="lazy">

                <div style="position:absolute;bottom:-1.25rem;left:-1.25rem;background:white;border-radius:14px;padding:0.9rem 1.25rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.75rem;">
                    <span style="width:38px;height:38px;background:#dcfce7;border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="18" height="18" fill="none" stroke="#16a34a" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.78rem;color:var(--text-muted);">Billable revenue this month</div>
                        <div style="font-size:1rem;font-weight:700;color:var(--text-main);">₹9,84,000 <span style="color:#16a34a;font-size:0.8rem;">↑ 31%</span></div>
                    </div>
                </div>

                <div style="position:absolute;top:-1rem;right:-1rem;background:white;border-radius:14px;padding:0.9rem 1.25rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.65rem;">
                    <span style="width:34px;height:34px;background:rgba(12,79,120,0.08);border-radius:8px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="16" height="16" fill="none" stroke="var(--primary)" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.78rem;color:var(--text-muted);">Invoice delivered</div>
                        <div style="font-size:0.9rem;font-weight:700;color:var(--text-main);">INV-0213 · Paid ✓</div>
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
                ['val'=>'8,000+', 'label'=>'Professional Firms Trust ZYLO'],
                ['val'=>'SAC',    'label'=>'Codes Auto-Applied'],
                ['val'=>'10%',    'label'=>'TDS Auto-Calculated (194J)'],
                ['val'=>'< 60s',  'label'=>'Professional Invoice Time'],
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
            <h2 style="font-size:2.5rem;color:var(--primary-dark);margin-bottom:1rem;">The Real Challenges Professional Services Firms Face — And How ZYLO Solves Them</h2>
            <p style="color:var(--text-muted);font-size:1.05rem;">From billing disputes to GST compliance, professional services have unique operational pain points. ZYLO is built to eliminate every one of them.</p>
        </div>
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:2rem;" class="features-grid">
            <?php
            $challenges = [
                ['icon'=>'M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2z',
                 'problem'=>'Manually Applying GST SAC Codes on Every Invoice',
                 'solution'=>'ZYLO auto-applies the correct SAC code based on your service type — 998311 for management consulting, 998313 for IT services, 998393 for legal services, and more. No manual lookup, zero errors on every GST invoice.',
                 'tag'=>'SAC Code Auto-Fill'],
                ['icon'=>'M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z',
                 'problem'=>'Chasing Clients for Overdue Payments',
                 'solution'=>'ZYLO adds UPI payment links and bank details directly to every invoice. Auto-send reminders via WhatsApp and email at 7, 14, and 30 days. Track invoice status — sent, viewed, paid, overdue — from one dashboard.',
                 'tag'=>'Payment Collection'],
                ['icon'=>'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15',
                 'problem'=>'Managing Retainer Clients is Time-Consuming',
                 'solution'=>'Set up recurring monthly retainer invoices for ongoing clients — ZYLO auto-generates and sends them on schedule. Track retainer utilisation, carry-forward hours, and top-ups without a single manual step.',
                 'tag'=>'Retainer Management'],
                ['icon'=>'M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z',
                 'problem'=>'TDS Deductions Creating Billing Confusion',
                 'solution'=>'ZYLO auto-calculates 10% TDS under Section 194J on every professional services invoice. The gross amount, TDS deduction, and net payable are clearly shown — no client disputes, no calculation errors.',
                 'tag'=>'TDS Under 194J'],
                ['icon'=>'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z',
                 'problem'=>'No Visibility Into Project Profitability',
                 'solution'=>'Track all expenses — travel, tools, subcontractors — against each project or client. See exactly how much you billed vs spent per engagement and instantly identify your most and least profitable clients.',
                 'tag'=>'Project P&L'],
                ['icon'=>'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z',
                 'problem'=>'Team Members Accessing the Wrong Client Data',
                 'solution'=>'Assign role-based access — account managers see only their clients, finance sees billing, senior partners see everything. Secure client data with department-level permissions and a full audit log of all actions.',
                 'tag'=>'Team Access Control'],
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

<!-- ========== SAC CODE REFERENCE STRIP ========== -->
<section style="padding:3rem 0;background:white;border-top:1px solid var(--border-color);border-bottom:1px solid var(--border-color);">
    <div class="container">
        <div style="text-align:center;max-width:680px;margin:0 auto 2.5rem;">
            <h2 style="font-size:1.8rem;color:var(--primary-dark);margin-bottom:0.75rem;">GST SAC Codes for Professional Services — Auto-Applied by ZYLO</h2>
            <p style="color:var(--text-muted);font-size:0.97rem;">Select your service type and ZYLO applies the right SAC code on every invoice automatically — no manual lookup, no errors.</p>
        </div>
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.25rem;" class="features-grid">
            <?php
            $sacCodes = [
                ['code'=>'998311','name'=>'Management Consulting','desc'=>'Strategic management, business advisory, operations, and organisational consulting services.'],
                ['code'=>'998312','name'=>'Business & HR Consulting','desc'=>'Human resources, marketing strategy, sales consulting, and general business advisory services.'],
                ['code'=>'998313','name'=>'IT & Technology Consulting','desc'=>'Software development advisory, IT strategy, cybersecurity consulting, and digital transformation.'],
                ['code'=>'998393','name'=>'Legal & Paralegal Services','desc'=>'Corporate legal advisory, contract drafting, compliance consulting, and paralegal support services.'],
                ['code'=>'998211','name'=>'Financial Auditing','desc'=>'Statutory audit, internal audit, tax audit, and assurance services for businesses.'],
                ['code'=>'998399','name'=>'Other Professional Services','desc'=>'Architecture, engineering consulting, scientific research, and other specialised professional services.'],
            ];
            foreach($sacCodes as $s): ?>
            <div class="card" style="padding:1.6rem;display:flex;gap:1rem;align-items:flex-start;">
                <div style="background:var(--primary);color:white;font-size:0.78rem;font-weight:800;padding:0.35rem 0.7rem;border-radius:8px;letter-spacing:0.5px;font-family:monospace;flex-shrink:0;margin-top:2px;"><?= $s['code'] ?></div>
                <div>
                    <h3 style="font-size:0.95rem;color:var(--primary-dark);margin-bottom:0.4rem;font-weight:700;"><?= $s['name'] ?></h3>
                    <p style="color:var(--text-muted);font-size:0.83rem;line-height:1.6;margin:0;"><?= $s['desc'] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== BILLING MODELS ========== -->
<section class="bg-offwhite">
    <div class="container">
        <div style="text-align:center;max-width:680px;margin:0 auto 3rem;">
            <h2 style="font-size:2.2rem;color:var(--primary-dark);margin-bottom:1rem;">Every Billing Model Professional Services Use</h2>
            <p style="color:var(--text-muted);font-size:1.05rem;">ZYLO supports the way you actually bill — no forcing you into one template.</p>
        </div>
        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1.5rem;" class="features-grid">
            <?php
            $billingModels = [
                ['icon'=>'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z',
                 'title'=>'Hourly Billing',
                 'desc' =>'Log hours worked per client or project. Set your hourly rate and ZYLO calculates the total with GST and TDS automatically.',
                 'tag'  =>'Per Hour'],
                ['icon'=>'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
                 'title'=>'Fixed-Fee Projects',
                 'desc' =>'Create a single invoice for a defined scope of work. Add milestones for large projects and invoice at each delivery point.',
                 'tag'  =>'Per Project'],
                ['icon'=>'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15',
                 'title'=>'Monthly Retainers',
                 'desc' =>'Auto-generate recurring invoices for ongoing clients. ZYLO sends them on your schedule — no manual action needed every month.',
                 'tag'  =>'Recurring'],
                ['icon'=>'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4',
                 'title'=>'Milestone Billing',
                 'desc' =>'Split large project fees across defined milestones. Invoice on completion of each phase — discovery, delivery, sign-off.',
                 'tag'  =>'Per Milestone'],
            ];
            foreach($billingModels as $m): ?>
            <div class="card" style="padding:2rem;text-align:center;display:flex;flex-direction:column;align-items:center;">
                <div style="width:52px;height:52px;background:rgba(12,79,120,0.08);border-radius:14px;display:flex;align-items:center;justify-content:center;margin-bottom:1.1rem;color:var(--primary);">
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="<?= $m['icon'] ?>"/></svg>
                </div>
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.7rem;font-weight:700;padding:0.2rem 0.65rem;border-radius:50px;margin-bottom:0.75rem;text-transform:uppercase;letter-spacing:0.8px;"><?= $m['tag'] ?></div>
                <h3 style="font-size:1.05rem;color:var(--primary-dark);margin-bottom:0.6rem;"><?= $m['title'] ?></h3>
                <p style="color:var(--text-muted);font-size:0.88rem;line-height:1.65;margin:0;"><?= $m['desc'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== FEATURE SPOTLIGHT 1 ========== -->
<section>
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:center;" class="intro-grid">
            <div>
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.78rem;font-weight:700;padding:0.3rem 0.85rem;border-radius:50px;margin-bottom:1.25rem;text-transform:uppercase;letter-spacing:1px;">GST & TDS Billing</div>
                <h2 style="font-size:2.2rem;color:var(--primary-dark);line-height:1.25;margin-bottom:1.25rem;">Professional Invoices With GST, SAC Codes & TDS in Under 60 Seconds</h2>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.5rem;">Select your client and service type — ZYLO fills the SAC code, calculates 18% GST, deducts 10% TDS under Section 194J, and shows the net payable on the invoice. Send via email or WhatsApp instantly. No accountant needed for every invoice.</p>
                <div style="display:grid;grid-template-columns:1fr 1fr;gap:0.75rem;margin-bottom:1.75rem;">
                    <?php foreach(['SAC code auto-filled','18% GST applied','10% TDS under 194J','Net payable shown clearly','e-Invoice with IRN & QR','PDF + WhatsApp in one click'] as $r): ?>
                    <div style="display:flex;align-items:center;gap:0.5rem;font-size:0.88rem;color:var(--text-muted);">
                        <svg width="14" height="14" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <?= $r ?>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a href="consulting-invoice" class="btn btn-primary" style="padding:0.75rem 1.75rem;">Explore Professional Invoicing</a>
            </div>
            <div style="position:relative;">
                <img src="assets/store/section-1.jpg"
                     alt="ZYLO professional services invoice with GST SAC code and TDS deduction"
                     width="560" height="380"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- ========== FEATURE SPOTLIGHT 2 ========== -->
<section class="bg-offwhite">
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:center;" class="intro-grid">
            <div style="order:2;" class="feature-img-right">
                <div style="position:relative;">
                    <img src="assets/store/section-2.jpg"
                         alt="ZYLO project profitability and client management dashboard for professional services firms"
                         width="560" height="380"
                         style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" loading="lazy">
                    <div style="position:absolute;bottom:-1rem;right:-1rem;background:white;border-radius:12px;padding:0.9rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);">
                        <div style="font-size:0.75rem;color:var(--text-muted);margin-bottom:0.3rem;">Project profit margin</div>
                        <div style="font-size:1.1rem;font-weight:800;color:var(--primary-dark);">68% <span style="color:#16a34a;font-size:0.82rem;">↑ above target</span></div>
                    </div>
                </div>
            </div>
            <div style="order:1;">
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.78rem;font-weight:700;padding:0.3rem 0.85rem;border-radius:50px;margin-bottom:1.25rem;text-transform:uppercase;letter-spacing:1px;">Client & Project Management</div>
                <h2 style="font-size:2.2rem;color:var(--primary-dark);line-height:1.25;margin-bottom:1.25rem;">See Every Client, Every Project, Every Rupee — From One Dashboard</h2>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.5rem;">Track billable hours, project expenses, outstanding invoices, and profitability per client — all updating in real-time. Know which clients are most profitable, which projects are overrunning, and where to focus your team's time.</p>
                <div style="display:grid;grid-template-columns:1fr 1fr;gap:0.75rem;margin-bottom:1.75rem;">
                    <?php foreach(['Client-wise revenue','Project expense tracking','Outstanding tracker','Retainer utilisation','Team billing reports','Profitability per client'] as $r): ?>
                    <div style="display:flex;align-items:center;gap:0.5rem;font-size:0.88rem;color:var(--text-muted);">
                        <svg width="14" height="14" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <?= $r ?>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a href="accounting-software" class="btn btn-outline" style="padding:0.75rem 1.75rem;">Explore Practice Reports</a>
            </div>
        </div>
    </div>
</section>

<!-- ========== SERVICE TYPES ========== -->
<section>
    <div class="container">
        <div class="section-title">
            <h2>ZYLO Works for Every Professional Services Firm</h2>
            <p>From solo consultants to mid-size firms — ZYLO handles billing, compliance, and client management for every discipline.</p>
        </div>
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.75rem;margin-top:3rem;" class="perfect-for-grid">
            <?php
            $types = [
                ['emoji'=>'💼','title'=>'Management Consultants',
                 'desc' =>'Bill clients hourly or on project retainers, track consulting hours per engagement, manage multiple concurrent clients, and generate strategy-level profitability reports.',
                 'pts'  =>['Hourly & retainer billing','Multi-client management','SAC 998311 auto-applied'],
                 'link' =>'consultants'],
                ['emoji'=>'⚖️','title'=>'Legal & Law Firms',
                 'desc' =>'Bill clients by the hour or per matter, track time across cases, manage advance fees and retainers, and generate GST-compliant invoices with SAC 998393 for all legal services.',
                 'pts'  =>['Matter-based hourly billing','Retainer & advance management','SAC 998393 legal invoices'],
                 'link' =>'consulting-invoice'],
                ['emoji'=>'💻','title'=>'IT & Technology Consultants',
                 'desc' =>'Invoice clients for software development, IT advisory, and managed services. Bill by sprint, milestone, or monthly retainer — with SAC 998313 auto-applied and TDS deducted.',
                 'pts'  =>['Sprint & milestone billing','Managed service retainers','SAC 998313 IT invoices'],
                 'link' =>'consulting-invoice'],
                ['emoji'=>'🏥','title'=>'Healthcare & Medical Services',
                 'desc' =>'Manage patient billing, insurance claims, specialist consultation fees, and recurring healthcare service contracts with proper GST treatment for medical services.',
                 'pts'  =>['Consultation fee billing','Medical GST handling','Recurring care contracts'],
                 'link' =>'accounting-software'],
                ['emoji'=>'🎨','title'=>'Creative & Design Agencies',
                 'desc' =>'Bill for branding, design, and creative projects by milestone or time. Track ad-spend and production expenses per client and invoice with all costs consolidated on one professional invoice.',
                 'pts'  =>['Milestone creative billing','Expense pass-through','Project cost tracking'],
                 'link' =>'consulting-invoice'],
                ['emoji'=>'🏗️','title'=>'Architecture & Engineering',
                 'desc' =>'Raise project-stage invoices for design, drawing, and supervision phases. Track site expenses, manage subcontractor costs, and maintain project-wise profitability for every assignment.',
                 'pts'  =>['Stage-wise project billing','Subcontractor cost tracking','Site expense management'],
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
<section class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>ZYLO vs Generic Billing Tools for Professional Services</h2>
            <p>See why 8,000+ professional services firms across India switched to ZYLO.</p>
        </div>
        <div style="overflow-x:auto;margin-top:2.5rem;border-radius:16px;box-shadow:var(--shadow-md);border:1px solid var(--border-color);">
            <table style="width:100%;border-collapse:collapse;background:white;min-width:500px;">
                <thead>
                    <tr style="background:var(--primary);color:white;">
                        <th style="padding:1.1rem 1.5rem;text-align:left;font-weight:600;font-size:0.95rem;">Feature</th>
                        <th style="padding:1.1rem 1.5rem;text-align:center;font-weight:700;font-size:0.95rem;">
                            <span style="background:rgba(255,255,255,0.15);padding:0.25rem 0.75rem;border-radius:50px;">ZYLO CRM</span>
                        </th>
                        <th style="padding:1.1rem 1.5rem;text-align:center;font-weight:600;font-size:0.95rem;opacity:0.85;">Generic Billing Tools</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $rows = [
                        ['SAC Code Auto-Fill',           '✅ By service type, always correct', '❌ Manual lookup every time'],
                        ['TDS 194J Auto-Calculation',    '✅ Built-in, shown on invoice',       '❌ Manual or not supported'],
                        ['Retainer Auto-Invoicing',      '✅ Recurring, auto-sent on schedule', '❌ Manual every month'],
                        ['Hourly + Fixed + Milestone',   '✅ All billing types supported',      '⚠️ Usually only one type'],
                        ['Project Expense Tracking',     '✅ Per project, with P&L',            '❌ Separate tool needed'],
                        ['Client Payment Reminders',     '✅ WhatsApp + email, auto-scheduled', '❌ Manual follow-up only'],
                        ['e-Invoice with IRN',           '✅ One-click for eligible invoices',  '❌ Separate govt portal'],
                        ['Free Plan Available',          '✅ Yes — forever free',               '❌ Paid from day one'],
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
<section>
    <div class="container">
        <div class="section-title">
            <h2>What Professional Services Firms Say About ZYLO</h2>
            <p>Real feedback from consultants, lawyers, and service firms using ZYLO every day across India.</p>
        </div>
        <div class="grid-3" style="margin-top:3rem;">
            <?php
            $reviews = [
                ['quote'=>'"We manage 40+ consulting clients and ZYLO keeps every retainer and hourly invoice perfectly organised. SAC codes are auto-filled, TDS is calculated instantly, and clients pay faster because invoices have UPI links. Couldn\'t go back to Excel."',
                 'name'=>'David Chen','role'=>'Managing Partner, ChenStrategy Consulting · Mumbai','avatar'=>'assets/store/avatar-david.svg','stars'=>5],
                ['quote'=>'"As a law firm, we needed proper matter-based billing with retainer tracking. ZYLO handles it all — hourly invoices with SAC 998393, TDS deduction, and auto-reminders for outstanding amounts. The project P&L view is exactly what we needed."',
                 'name'=>'Sarah Miller','role'=>'Partner, Miller & Associates Law · Delhi','avatar'=>'assets/store/avatar-sarah.svg','stars'=>5],
                ['quote'=>'"Our IT consulting firm bills on a mix of retainer and milestone. ZYLO handles both perfectly. The e-Invoice IRN for our larger clients, WhatsApp delivery, and the outstanding tracker means we get paid 40% faster than before."',
                 'name'=>'Emily Watson','role'=>'CEO, Watson Tech Consulting · Bengaluru','avatar'=>'assets/store/avatar-emily.svg','stars'=>5],
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
<section class="bg-offwhite">
    <div class="container" style="max-width:820px;">
        <div class="section-title">
            <h2>Frequently Asked Questions</h2>
            <p>Everything professional services firms ask about ZYLO CRM.</p>
        </div>
        <div style="margin-top:2.5rem;" itemscope itemtype="https://schema.org/FAQPage">
            <?php
            $faqs = [
                ['q'=>'What SAC codes apply to professional services in GST?',
                 'a'=>'Common SAC codes for professional services include: 998311 (Management consulting), 998312 (Business & HR consulting), 998313 (IT & technology consulting), 998393 (Legal services), 998211 (Financial auditing), and 998399 (Other professional services). ZYLO auto-applies the correct SAC code based on your service type — no manual lookup needed.'],
                ['q'=>'Does ZYLO handle TDS on professional service invoices?',
                 'a'=>'Yes. ZYLO automatically calculates 10% TDS under Section 194J for professional and technical services. The gross amount, TDS deduction, and net payable are clearly displayed on every invoice. You can track TDS deductions per client and generate summaries for quarterly TDS filing.'],
                ['q'=>'Can I do both hourly and retainer billing in ZYLO?',
                 'a'=>'Yes. ZYLO supports all billing models — hourly billing, fixed-fee projects, monthly retainers with auto-recurring invoices, and milestone-based billing. You can use different billing types for different clients and switch at any time without changing your setup.'],
                ['q'=>'Can ZYLO track expenses per client or project?',
                 'a'=>'Yes. ZYLO lets you log expenses against specific clients or projects — travel, subscriptions, subcontractor fees, and reimbursable costs. View project-wise profitability and include reimbursable expenses directly on client invoices. Know your true margin per engagement.'],
                ['q'=>'How does ZYLO help professional services firms get paid faster?',
                 'a'=>'ZYLO adds UPI payment links and bank account details directly on every invoice. Auto-send payment reminders via WhatsApp and email at scheduled intervals. Track invoice status — sent, viewed, paid, overdue — from your dashboard so no payment slips through.'],
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
        <h2 style="font-size:2.75rem;margin-bottom:1rem;color:white;">Run Your Professional Practice Smarter — Start Free</h2>
        <p style="max-width:620px;margin:0 auto 2.5rem;font-size:1.1rem;opacity:0.95;color:white;">Join 8,000+ professional services firms using ZYLO to manage client billing, SAC codes, TDS, retainers, project expenses, and practice reports — all from one platform. Free plan, no credit card required.</p>

        <div style="display:flex;gap:1rem;flex-wrap:wrap;justify-content:center;">
            <a href="contact" style="display:inline-block;background:white;color:var(--primary);padding:1rem 2.5rem;border-radius:10px;font-weight:700;font-size:1.1rem;text-decoration:none;transition:opacity 0.2s;">Get Started Free</a>
            <a href="https://wa.me/917501137266" target="_blank" rel="noopener noreferrer"
               style="display:inline-block;background:rgba(255,255,255,0.15);border:2px solid rgba(255,255,255,0.6);color:white;padding:0.8rem 2.5rem;border-radius:10px;font-weight:700;font-size:1.1rem;text-decoration:none;transition:background 0.2s;">
                Chat on WhatsApp
            </a>
        </div>

        <p style="margin-top:1.5rem;font-size:0.9rem;opacity:0.8;color:white;">Free plan · SAC codes · TDS tracking · Retainer billing · No credit card · Cancel anytime</p>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

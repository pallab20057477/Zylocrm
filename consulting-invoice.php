<?php
$pageTitle = "Consulting Invoice – Create Professional Consulting Invoices Free | ZYLO CRM";
$pageDescription = "Create professional consulting invoices online with ZYLO. Add hourly/project rates, GST, payment terms, and bank details. Free consulting invoice template — PDF & WhatsApp ready.";
$pageKeywords = "consulting invoice, consulting invoice template, create consulting invoice online, consulting invoice format India, freelance consulting invoice, IT consulting invoice, GST consulting invoice, professional services invoice";
$canonicalPath = '/consulting-invoice';
$pageImage = 'https://zylocrm.com/assets/store/section-1.jpg';

$softwareSchema = [
    '@context' => 'https://schema.org',
    '@type'    => 'SoftwareApplication',
    'name'     => 'ZYLO Consulting Invoice Generator',
    'url'      => 'https://zylocrm.com/consulting-invoice',
    'description' => 'Free consulting invoice creator for consultants and professional service providers. Create GST-compliant invoices with hourly/project billing, payment terms, and bank details.',
    'applicationCategory' => 'BusinessApplication',
    'operatingSystem' => 'Web, Android, iOS',
    'provider' => ['@type'=>'Organization','name'=>'ZYLO CRM','url'=>'https://zylocrm.com','logo'=>'https://zylocrm.com/assets/logo.png'],
    'offers'   => ['@type'=>'Offer','priceCurrency'=>'INR','price'=>'0','pricingModel'=>'Freemium'],
    'aggregateRating' => ['@type'=>'AggregateRating','ratingValue'=>'4.9','reviewCount'=>'742','bestRating'=>'5'],
    'featureList' => [
        'Free consulting invoice creation online',
        'Hourly & project-based billing',
        'GST compliant with SAC codes',
        'Retainer & milestone invoicing',
        'Bank details & payment terms',
        'PDF download and WhatsApp sharing',
        'Multi-currency for international clients',
        'Digital signature support'
    ]
];

$breadcrumb = [
    '@context' => 'https://schema.org',
    '@type'    => 'BreadcrumbList',
    'itemListElement' => [
        ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://zylocrm.com/'],
        ['@type'=>'ListItem','position'=>2,'name'=>'Free Tools','item'=>'https://zylocrm.com/consulting-invoice'],
        ['@type'=>'ListItem','position'=>3,'name'=>'Consulting Invoice','item'=>'https://zylocrm.com/consulting-invoice']
    ]
];

$pageSchema = [$softwareSchema, $breadcrumb];

$faqSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        ['@type'=>'Question','name'=>'What is a consulting invoice?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'A consulting invoice is a formal billing document issued by a consultant or professional service provider to their client. It details the services rendered, hours worked or project fees charged, applicable GST or taxes, payment terms, and bank details for payment.']],
        ['@type'=>'Question','name'=>'Is ZYLO consulting invoice creator free?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes. ZYLO\'s consulting invoice creator is free for up to 20 invoices per month. The free plan includes PDF download, GST support, WhatsApp sharing, and logo branding. The Pro plan (from ₹999/month) adds unlimited invoices, recurring billing, and full accounting features.']],
        ['@type'=>'Question','name'=>'What SAC code should I use for consulting services?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'For most consulting services in India, SAC code 998311 (Management consulting) or 998312 (Business consulting) is applicable. IT consulting typically uses 998313. ZYLO has a built-in SAC code lookup so you can find and apply the right code instantly.']],
        ['@type'=>'Question','name'=>'Can I create hourly and project-based consulting invoices?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes. ZYLO supports both hourly billing (hours × rate) and fixed-fee project billing. You can also set up milestone-based invoices and retainer invoices for ongoing consulting engagements.']],
        ['@type'=>'Question','name'=>'Can I invoice international consulting clients in USD or EUR?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes. ZYLO supports 150+ currencies. Invoice your international clients in USD, EUR, GBP, or any currency. The system handles forex tracking in your INR books automatically. You can also generate zero-rated GST export invoices for foreign clients.']],
    ]
];

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
                    100% Free · No Signup Required
                </div>

                <h1 style="font-size:3.2rem;color:var(--primary-dark);line-height:1.12;margin-bottom:1.4rem;">
                    Free Consulting Invoice Generator — Bill Clients Professionally
                </h1>
                <p style="font-size:1.18rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.9rem;">
                    Create professional consulting invoices with hourly or project rates, GST with SAC codes, payment terms, and bank details — download PDF or share via WhatsApp instantly.
                </p>

                <div style="display:flex;flex-wrap:wrap;gap:0.55rem;margin-bottom:2rem;">
                    <?php foreach(['Free to Use','Hourly & Project','GST + SAC Code','Retainer Billing','PDF Download','Multi-Currency'] as $p): ?>
                    <span style="background:white;border:1px solid var(--border-color);color:var(--text-main);font-size:0.82rem;font-weight:600;padding:0.35rem 0.9rem;border-radius:50px;box-shadow:var(--shadow-sm);">✓ &nbsp;<?= $p ?></span>
                    <?php endforeach; ?>
                </div>

                <div style="display:flex;gap:1rem;flex-wrap:wrap;">
                    <a href="contact" class="btn btn-primary" style="padding:0.9rem 2rem;font-size:1rem;">Create Invoice Free</a>
                    <a href="freelancers-self-employed" class="btn btn-outline" style="padding:0.9rem 2rem;font-size:1rem;">For Freelancers</a>
                </div>

                <p style="margin-top:1.5rem;font-size:0.85rem;color:var(--text-muted);margin-bottom:0;">
                    ⭐ 4.9/5 from 742 reviews &nbsp;·&nbsp; Used by 10,000+ consultants
                </p>
            </div>

            <div style="position:relative;">
                <img src="assets/store/section-1.jpg"
                     alt="ZYLO consulting invoice generator showing hourly billing and professional invoice with GST"
                     width="580" height="400"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" fetchpriority="high" loading="lazy">

                <div style="position:absolute;top:-1rem;left:-1.25rem;background:white;border-radius:14px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.7rem;">
                    <span style="width:36px;height:36px;background:#dcfce7;border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="17" height="17" fill="none" stroke="#16a34a" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.75rem;color:var(--text-muted);">Invoice ready</div>
                        <div style="font-size:0.88rem;font-weight:700;color:#16a34a;">PDF in under 60s ✓</div>
                    </div>
                </div>

                <div style="position:absolute;bottom:-1.25rem;right:-1rem;background:white;border-radius:14px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.7rem;">
                    <span style="width:36px;height:36px;background:rgba(12,79,120,0.08);border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="17" height="17" fill="none" stroke="var(--primary)" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.75rem;color:var(--text-muted);">20 hrs @ ₹5,000/hr</div>
                        <div style="font-size:0.88rem;font-weight:700;color:var(--text-main);">₹1,00,000 + GST</div>
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
                ['val'=>'< 60s',   'label'=>'To Create a Consulting Invoice'],
                ['val'=>'Free',    'label'=>'Up to 20 Invoices/Month'],
                ['val'=>'742+',    'label'=>'5-Star Reviews'],
                ['val'=>'10,000+', 'label'=>'Consultants Use ZYLO'],
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

<!-- ========== BILLING TYPES ========== -->
<section>
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:center;" class="intro-grid">
            <div>
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.78rem;font-weight:700;padding:0.3rem 0.85rem;border-radius:50px;margin-bottom:1.25rem;text-transform:uppercase;letter-spacing:1px;">Billing Flexibility</div>
                <h2 style="font-size:2.2rem;color:var(--primary-dark);line-height:1.25;margin-bottom:1.25rem;">Hourly, Project, Retainer — Invoice Your Way</h2>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.5rem;">Every consultant bills differently. ZYLO supports all engagement models — hourly time-and-materials, fixed-fee project billing, milestone-based payments, and monthly retainer invoices.</p>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.75rem;">Switch between billing types per client without any reconfiguration. The invoice format adapts automatically to show hours, rates, milestones, or monthly fees.</p>
                <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;margin-bottom:1.75rem;">
                    <div style="background:var(--bg-offwhite);border:1px solid var(--border-color);border-radius:14px;padding:1.25rem;">
                        <div style="font-size:0.8rem;font-weight:700;color:var(--primary);text-transform:uppercase;letter-spacing:1px;margin-bottom:0.75rem;">⏱ Hourly Billing</div>
                        <?php foreach(['Hours × Rate auto-calc','Time log per session','GST on total amount','Partial hour support'] as $p): ?>
                        <div style="display:flex;align-items:center;gap:0.5rem;font-size:0.82rem;color:var(--text-muted);margin-bottom:0.35rem;">
                            <svg width="12" height="12" fill="none" stroke="var(--primary)" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg><?= $p ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div style="background:var(--bg-offwhite);border:1px solid var(--border-color);border-radius:14px;padding:1.25rem;">
                        <div style="font-size:0.8rem;font-weight:700;color:#16a34a;text-transform:uppercase;letter-spacing:1px;margin-bottom:0.75rem;">📋 Project / Retainer</div>
                        <?php foreach(['Fixed fee per project','Milestone payments','Monthly retainer','Advance + balance'] as $p): ?>
                        <div style="display:flex;align-items:center;gap:0.5rem;font-size:0.82rem;color:var(--text-muted);margin-bottom:0.35rem;">
                            <svg width="12" height="12" fill="none" stroke="#16a34a" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg><?= $p ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <a href="contact" class="btn btn-primary" style="padding:0.75rem 1.75rem;">Create Your First Invoice Free</a>
            </div>
            <div style="position:relative;">
                <img src="assets/store/section-2.jpg"
                     alt="ZYLO consulting invoice showing hourly billing and project-based invoice format"
                     width="560" height="380"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" loading="lazy">
                <div style="position:absolute;bottom:-1rem;right:-1rem;background:white;border-radius:12px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);">
                    <div style="font-size:0.75rem;color:var(--text-muted);margin-bottom:0.2rem;">Retainer invoice sent</div>
                    <div style="font-size:0.9rem;font-weight:700;color:var(--text-main);">₹75,000/month · Auto ✓</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== HOW TO CREATE ========== -->
<section class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>How to Create a Consulting Invoice in 4 Steps</h2>
            <p>No templates to format. No spreadsheets. Just fill in your details and send — in under 60 seconds.</p>
        </div>
        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1.5rem;margin-top:3rem;position:relative;" class="steps-grid">
            <div style="position:absolute;top:36px;left:calc(12.5% + 1rem);right:calc(12.5% + 1rem);height:2px;background:linear-gradient(90deg,var(--primary) 0%,var(--primary-light) 100%);z-index:0;" class="steps-connector" aria-hidden="true"></div>
            <?php
            $steps = [
                ['n'=>'1','icon'=>'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5',
                 'title'=>'Your Business Details','desc'=>'Add your name/firm, GSTIN, address, and logo. Saved once for all future invoices.'],
                ['n'=>'2','icon'=>'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z',
                 'title'=>'Client Details','desc'=>'Enter client name, company, address, and GSTIN (if applicable).'],
                ['n'=>'3','icon'=>'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3',
                 'title'=>'Add Services & Rates','desc'=>'List services, add hours or flat fees, apply GST/SAC codes, and set payment terms.'],
                ['n'=>'4','icon'=>'M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4',
                 'title'=>'Download or Send','desc'=>'Download PDF instantly or share via WhatsApp/email directly to your client.'],
            ];
            foreach($steps as $step): ?>
            <div style="text-align:center;padding:1.75rem 1.25rem;background:white;border-radius:18px;border:1px solid var(--border-color);position:relative;z-index:1;">
                <div style="width:62px;height:62px;background:var(--primary);color:white;border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 1.25rem;box-shadow:0 0 0 8px rgba(12,79,120,0.1);">
                    <svg width="25" height="25" fill="none" stroke="white" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="<?= $step['icon'] ?>"/></svg>
                </div>
                <div style="font-size:0.72rem;font-weight:700;color:var(--primary);text-transform:uppercase;letter-spacing:1px;margin-bottom:0.5rem;">Step <?= $step['n'] ?></div>
                <h3 style="font-size:1.05rem;color:var(--primary-dark);margin-bottom:0.6rem;"><?= $step['title'] ?></h3>
                <p style="font-size:0.87rem;color:var(--text-muted);line-height:1.65;margin:0;"><?= $step['desc'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== WHAT TO INCLUDE ========== -->
<section>
    <div class="container">
        <div class="section-title">
            <h2>What a Consulting Invoice Must Include</h2>
            <p>ZYLO fills every required field automatically — nothing to forget, nothing to miss.</p>
        </div>
        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1.25rem;margin-top:3rem;" class="who-grid">
            <?php
            $fields = [
                ['icon'=>'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5',
                 'label'=>'Consultant Name & GSTIN',   'desc'=>'Your legal name or firm name, GSTIN, and registered address'],
                ['icon'=>'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z',
                 'label'=>'Client Details',             'desc'=>'Client company name, GSTIN, billing address and PO reference'],
                ['icon'=>'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
                 'label'=>'Invoice Number & Date',      'desc'=>'Unique sequential invoice number and invoice issue date'],
                ['icon'=>'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3',
                 'label'=>'Services & SAC Codes',       'desc'=>'Itemised services with description, hours/qty, rate, and SAC code'],
                ['icon'=>'M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2z',
                 'label'=>'GST Breakdown',              'desc'=>'CGST + SGST or IGST calculated separately per line item'],
                ['icon'=>'M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z',
                 'label'=>'Bank & Payment Details',     'desc'=>'Account number, IFSC, UPI ID or payment link for fast settlement'],
                ['icon'=>'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z',
                 'label'=>'Due Date & Payment Terms',   'desc'=>'Net-15, Net-30, or custom due date with late fee clause'],
                ['icon'=>'M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z',
                 'label'=>'Terms & Digital Signature',  'desc'=>'Scope, confidentiality notes, and authorized signatory signature'],
            ];
            foreach($fields as $f): ?>
            <div style="background:var(--bg-offwhite);border:1px solid var(--border-color);border-radius:14px;padding:1.25rem;display:flex;flex-direction:column;gap:0.6rem;">
                <span style="width:38px;height:38px;background:white;border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;box-shadow:var(--shadow-sm);">
                    <svg width="18" height="18" fill="none" stroke="var(--primary)" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="<?= $f['icon'] ?>"/></svg>
                </span>
                <div style="font-size:0.9rem;font-weight:700;color:var(--primary-dark);"><?= $f['label'] ?></div>
                <div style="font-size:0.8rem;color:var(--text-muted);"><?= $f['desc'] ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== KEY FEATURES ========== -->
<section id="features" class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>Everything in ZYLO's Free Consulting Invoice Creator</h2>
            <p>Built specifically for consultants, freelancers, and professional service providers.</p>
        </div>
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.75rem;margin-top:3rem;" class="features-grid">
            <?php
            $features = [
                ['icon'=>'M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z',
                 'title'=>'Professional Templates',
                 'desc' =>'Choose from clean, professional consulting invoice templates. Add your logo, brand colours, and firm stamp — every invoice builds client trust.',
                 'pts'  =>['Multiple layout options','Logo & brand colours','Firm stamp / signature']],
                ['icon'=>'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z',
                 'title'=>'Hourly Time Billing',
                 'desc' =>'Log hours per session and ZYLO calculates total automatically. Include a time log table to show clients exactly what was worked on and when.',
                 'pts'  =>['Hours × rate auto-calc','Session-wise time log','Partial hour support']],
                ['icon'=>'M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2z',
                 'title'=>'GST with SAC Codes',
                 'desc' =>'Apply 18% GST with the correct SAC code for your service category. ZYLO has a built-in SAC code lookup — management consulting, IT consulting, legal, and 500+ more.',
                 'pts'  =>['Built-in SAC code lookup','CGST/SGST/IGST auto','Zero-rated for exports']],
                ['icon'=>'M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4',
                 'title'=>'PDF & WhatsApp Delivery',
                 'desc' =>'Generate a print-quality PDF instantly. Send directly via WhatsApp, email, or a shareable link — no downloading and re-uploading needed.',
                 'pts'  =>['Instant PDF generation','1-click WhatsApp share','Shareable payment link']],
                ['icon'=>'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15',
                 'title'=>'Retainer & Recurring Invoices',
                 'desc' =>'Set up monthly retainer invoices that auto-generate on the 1st of each month. Perfect for ongoing advisory, maintenance contracts, and long-term engagements.',
                 'pts'  =>['Monthly auto-generation','Custom retainer amounts','Recurring until cancelled']],
                ['icon'=>'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
                 'title'=>'Multi-Currency & Export Invoicing',
                 'desc' =>'Invoice international clients in USD, EUR, GBP, or 150+ currencies. Generate zero-rated GST export invoices for foreign clients with FIRA documentation.',
                 'pts'  =>['150+ currencies','Zero-rated export invoice','FIRA-ready format']],
            ];
            foreach($features as $f): ?>
            <div class="card" style="padding:2rem;border-left:3px solid var(--primary);display:flex;flex-direction:column;">
                <div style="width:48px;height:48px;background:rgba(12,79,120,0.08);border-radius:10px;display:flex;align-items:center;justify-content:center;margin-bottom:1.25rem;color:var(--primary);flex-shrink:0;">
                    <svg width="23" height="23" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="<?= $f['icon'] ?>"/></svg>
                </div>
                <h3 style="font-size:1.1rem;color:var(--primary-dark);margin-bottom:0.7rem;"><?= $f['title'] ?></h3>
                <p style="color:var(--text-muted);font-size:0.92rem;line-height:1.7;margin-bottom:1rem;flex:1;"><?= $f['desc'] ?></p>
                <ul style="list-style:none;padding:0;margin:0;">
                    <?php foreach($f['pts'] as $pt): ?>
                    <li style="display:flex;align-items:center;gap:0.5rem;font-size:0.84rem;color:var(--text-muted);margin-bottom:0.35rem;">
                        <svg width="13" height="13" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <?= $pt ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== WHO IT'S FOR ========== -->
<section>
    <div class="container">
        <div class="section-title">
            <h2>Who Uses ZYLO's Consulting Invoice Generator?</h2>
            <p>Built for every type of consultant and professional service provider.</p>
        </div>
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.75rem;margin-top:3rem;" class="perfect-for-grid">
            <?php
            $personas = [
                ['icon'=>'M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18',
                 'title'=>'Management & Strategy Consultants',
                 'desc' =>'Bill clients on project retainers or daily rates. Include milestone deliverables, expense reimbursements, and detailed scope descriptions.',
                 'link' =>'consultants',
                 'pts'  =>['Project & retainer billing','Expense line items','Milestone breakdowns']],
                ['icon'=>'M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z',
                 'title'=>'IT & Technology Consultants',
                 'desc' =>'Create hourly or sprint-based invoices with time logs. Apply SAC 998313 for IT consulting and support services with correct GST treatment.',
                 'link' =>'freelancers-self-employed',
                 'pts'  =>['Hourly time log billing','SAC 998313 support','Sprint/milestone invoicing']],
                ['icon'=>'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z',
                 'title'=>'Freelancers & Independent Advisors',
                 'desc' =>'Bill clients professionally with branded invoices. Support for multi-client management, recurring retainer invoices, and foreign currency billing.',
                 'link' =>'freelancers-self-employed',
                 'pts'  =>['Multi-client management','Recurring invoices','Foreign currency billing']],
            ];
            foreach($personas as $p): ?>
            <div class="card" style="padding:2.25rem;display:flex;flex-direction:column;">
                <div style="width:52px;height:52px;background:rgba(12,79,120,0.08);border-radius:12px;display:flex;align-items:center;justify-content:center;margin-bottom:1.25rem;color:var(--primary);">
                    <svg width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="<?= $p['icon'] ?>"/></svg>
                </div>
                <h3 style="font-size:1.2rem;color:var(--primary-dark);margin-bottom:0.75rem;"><?= $p['title'] ?></h3>
                <p style="color:var(--text-muted);font-size:0.93rem;line-height:1.7;margin-bottom:1rem;flex:1;"><?= $p['desc'] ?></p>
                <ul style="list-style:none;padding:0;margin:0 0 1.5rem;">
                    <?php foreach($p['pts'] as $pt): ?>
                    <li style="display:flex;align-items:center;gap:0.5rem;font-size:0.85rem;color:var(--text-muted);margin-bottom:0.35rem;">
                        <svg width="14" height="14" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <?= $pt ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <a href="<?= $p['link'] ?>" style="font-weight:600;font-size:0.9rem;color:var(--primary);display:inline-flex;align-items:center;gap:0.3rem;margin-top:auto;">Learn more &rarr;</a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== TESTIMONIALS ========== -->
<section class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>What Consultants Say About ZYLO</h2>
            <p>Real feedback from independent consultants and professional service providers.</p>
        </div>
        <div class="grid-3" style="margin-top:3rem;">
            <?php
            $reviews = [
                ['quote' => '"I bill 8 clients on hourly retainers. ZYLO auto-generates all my monthly invoices on the 1st. I used to spend 2 hours doing this manually. Now it takes zero effort."',
                 'name'  => 'David Chen', 'role'=>'Strategy Consultant · Mumbai', 'avatar'=>'assets/store/avatar-david.svg', 'stars'=>5],
                ['quote' => '"The SAC code lookup and GST auto-calculation are perfect for my IT consulting practice. Clients receive professional PDFs on WhatsApp the moment I hit send."',
                 'name'  => 'Sarah Miller', 'role'=>'IT Consultant · Bengaluru', 'avatar'=>'assets/store/avatar-sarah.svg', 'stars'=>5],
                ['quote' => '"I invoice US clients in USD and Indian clients in INR. ZYLO handles both seamlessly — even generates the zero-rated GST invoice for my US retainer automatically."',
                 'name'  => 'Emily Watson', 'role'=>'Independent Advisor · Delhi', 'avatar'=>'assets/store/avatar-emily.svg', 'stars'=>5],
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
            <p>Everything you need to know about creating consulting invoices with ZYLO.</p>
        </div>
        <div style="margin-top:2.5rem;" itemscope itemtype="https://schema.org/FAQPage">
            <?php
            $faqs = [
                ['q'=>'What is a consulting invoice?',
                 'a'=>'A consulting invoice is a formal billing document issued by a consultant or professional service provider to their client. It details the services rendered, hours worked or project fees, applicable GST/taxes, payment terms, and bank details for payment.'],
                ['q'=>'Is ZYLO consulting invoice creator free?',
                 'a'=>'Yes. ZYLO\'s consulting invoice creator is free for up to 20 invoices per month. The free plan includes PDF download, GST support, WhatsApp sharing, and logo branding. The Pro plan (from ₹999/month) adds unlimited invoices, recurring billing, and full accounting features.'],
                ['q'=>'What SAC code should I use for consulting services?',
                 'a'=>'For most consulting services in India, SAC code 998311 (Management consulting) or 998312 (Business consulting) applies. IT consulting typically uses 998313. ZYLO has a built-in SAC code lookup so you can find and apply the right code instantly.'],
                ['q'=>'Can I create hourly and project-based consulting invoices?',
                 'a'=>'Yes. ZYLO supports hourly billing (hours × rate), fixed-fee project billing, milestone-based invoices, and monthly retainer invoices — all from the same platform. Switch billing type per client.'],
                ['q'=>'Can I invoice international consulting clients in USD or EUR?',
                 'a'=>'Yes. ZYLO supports 150+ currencies. Invoice international clients in USD, EUR, GBP, or any currency. The system handles forex tracking in your INR books automatically and generates zero-rated GST invoices for foreign clients.'],
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
        <h2 style="font-size:2.75rem;margin-bottom:1rem;color:white;">Create Your First Consulting Invoice — Free</h2>
        <p style="max-width:580px;margin:0 auto 2.5rem;font-size:1.1rem;opacity:0.95;color:white;">Join 10,000+ consultants billing clients professionally with ZYLO. Free plan, no credit card required.</p>

        <div style="display:flex;gap:1rem;flex-wrap:wrap;justify-content:center;">
            <a href="contact" style="display:inline-block;background:white;color:var(--primary);padding:1rem 2.5rem;border-radius:10px;font-weight:700;font-size:1.1rem;text-decoration:none;transition:opacity 0.2s;">Start Free — No Signup</a>
            <a href="https://wa.me/917501137266" target="_blank" rel="noopener noreferrer"
               style="display:inline-block;background:rgba(255,255,255,0.15);border:2px solid rgba(255,255,255,0.6);color:white;padding:0.8rem 2.5rem;border-radius:10px;font-weight:700;font-size:1.1rem;text-decoration:none;transition:background 0.2s;">
               Chat on WhatsApp
            </a>
        </div>

        <p style="margin-top:1.5rem;font-size:0.9rem;opacity:0.8;color:white;">Free plan · PDF download · GST support · WhatsApp sharing · No credit card</p>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

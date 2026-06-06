<?php
$pageTitle = "GST Billing Software – Generate GST Invoices Online Free | ZYLO CRM";
$pageDescription = "ZYLO's GST billing software generates GSTN-compliant invoices, e-Invoices with IRN & QR code, GSTR-1 & GSTR-3B reports instantly. Free plan for Indian businesses. Trusted by 10,000+.";
$pageKeywords = "GST billing software, GST invoicing software India, GST invoice generator, GSTR-1 software, e-invoice software India, GST software for small business, free GST billing software, GSTN compliant software";
$canonicalPath = '/gst-billing-software';

$pageSchema = [
    '@context' => 'https://schema.org',
    '@type'    => 'SoftwareApplication',
    'name'     => 'ZYLO GST Billing Software',
    'url'      => 'https://zylocrm.com/gst-billing-software',
    'description' => 'GSTN-compliant GST billing software for Indian businesses. Generate e-Invoices with IRN and QR code, GSTR-1, GSTR-3B, and GST-compliant invoices in seconds.',
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
        'priceCurrency' => 'INR',
        'price'         => '0',
        'description'   => 'Free plan available. Pro plan from ₹3,999/month.',
        'pricingModel'  => 'Freemium'
    ],
    'aggregateRating' => [
        '@type'       => 'AggregateRating',
        'ratingValue' => '4.8',
        'reviewCount' => '524',
        'bestRating'  => '5'
    ],
    'featureList' => [
        'GSTN-compliant GST invoicing',
        'e-Invoice with IRN and QR code',
        'GSTR-1 and GSTR-3B report generation',
        'Auto CGST SGST IGST calculation',
        'HSN/SAC code auto-fill',
        'ITC reconciliation',
        'GST payment tracking',
        'Multi-GSTIN support'
    ]
];

$faqSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name'  => 'What is GST billing software?',
            'acceptedAnswer' => ['@type'=>'Answer','text'=>'GST billing software is a tool that helps businesses create GSTN-compliant invoices, calculate GST automatically (CGST, SGST, IGST), generate e-Invoices with IRN and QR codes, and prepare GSTR-1 and GSTR-3B reports for filing with the GST portal.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Is ZYLO GST billing software free?',
            'acceptedAnswer' => ['@type'=>'Answer','text'=>'Yes. ZYLO offers a free plan that includes basic GST invoice creation for up to 50 invoices per month. The Pro plan starts at ₹3,999/month with unlimited invoices, e-Invoice with IRN, GSTR reports, and 24/7 support.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Does ZYLO generate e-Invoice with IRN and QR code?',
            'acceptedAnswer' => ['@type'=>'Answer','text'=>'Yes. ZYLO connects directly to the GSTN IRP portal to generate e-Invoices with IRN (Invoice Reference Number) and digitally signed QR codes as required under the e-Invoicing mandate for eligible taxpayers.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can ZYLO generate GSTR-1 and GSTR-3B reports?',
            'acceptedAnswer' => ['@type'=>'Answer','text'=>'Yes. ZYLO auto-generates GSTR-1 and GSTR-3B reports from your invoices and purchase records. You can download them in the format required by the GST portal and file directly or share with your CA.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Does ZYLO support multiple GSTINs?',
            'acceptedAnswer' => ['@type'=>'Answer','text'=>'Yes. ZYLO supports businesses with multiple GSTINs (multiple states or business verticals) from a single account. Switch between GSTINs instantly and manage each business\'s compliance separately.']
        ]
    ]
];

include 'includes/header.php';
?>
<script type="application/ld+json"><?php echo json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>

<!-- ========== HERO ========== -->
<section class="bg-offwhite" style="padding-top:calc(var(--header-height) + 4.5rem); padding-bottom:5rem; position:relative; overflow:hidden;">
    <div style="position:absolute;top:-15%;right:-8%;width:520px;height:520px;background:radial-gradient(circle,rgba(12,79,120,0.07) 0%,transparent 70%);border-radius:50%;pointer-events:none;" aria-hidden="true"></div>

    <div class="container">
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:4rem; align-items:center;" class="intro-grid">
            <div>
                <div style="display:inline-flex;align-items:center;gap:0.5rem;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.8rem;font-weight:700;padding:0.38rem 1rem;border-radius:50px;margin-bottom:1.5rem;text-transform:uppercase;letter-spacing:1px;border:1px solid rgba(12,79,120,0.18);">
                    <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    100% GSTN Compliant
                </div>

                <h1 style="font-size:3.2rem; color:var(--primary-dark); line-height:1.12; margin-bottom:1.4rem;">
                    GST Billing Software for Indian Businesses
                </h1>
                <p style="font-size:1.18rem; line-height:1.8; color:var(--text-muted); margin-bottom:1.9rem;">
                    Create GST invoices in under 30 seconds, generate e-Invoice with IRN &amp; QR code, and get GSTR-1 &amp; GSTR-3B reports ready to file — all from one place.
                </p>

                <div style="display:flex;flex-wrap:wrap;gap:0.55rem;margin-bottom:2rem;">
                    <?php foreach(['GSTN Compliant','e-Invoice + IRN','GSTR-1 & GSTR-3B','HSN/SAC Auto-fill','Multi-GSTIN','Free Plan'] as $p): ?>
                    <span style="background:white;border:1px solid var(--border-color);color:var(--text-main);font-size:0.82rem;font-weight:600;padding:0.35rem 0.9rem;border-radius:50px;box-shadow:var(--shadow-sm);">✓ &nbsp;<?= $p ?></span>
                    <?php endforeach; ?>
                </div>

                <div style="display:flex;gap:1rem;flex-wrap:wrap;">
                    <a href="contact" class="btn btn-primary" style="padding:0.9rem 2rem;font-size:1rem;">Generate GST Invoice Free</a>
                    <a href="#features" class="btn btn-outline" style="padding:0.9rem 2rem;font-size:1rem;">Explore Features</a>
                </div>
                <p style="margin-top:1.5rem;font-size:0.85rem;color:var(--text-muted);margin-bottom:0;">
                    ⭐ 4.8/5 from 524 reviews &nbsp;·&nbsp; Trusted by 10,000+ Indian businesses
                </p>
            </div>

            <div style="position:relative;">
                <img src="assets/store/section-1.jpg"
                     alt="ZYLO GST billing software showing a GSTN-compliant invoice with auto CGST SGST calculation"
                     width="580" height="400"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;"
                     fetchpriority="high">

                <!-- Floating: Invoice sent -->
                <div style="position:absolute;top:-1rem;left:-1.25rem;background:white;border-radius:14px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.7rem;">
                    <span style="width:36px;height:36px;background:#dcfce7;border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="17" height="17" fill="none" stroke="#16a34a" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.75rem;color:var(--text-muted);">e-Invoice generated</div>
                        <div style="font-size:0.88rem;font-weight:700;color:var(--text-main);">IRN: A1B2C3... ✓</div>
                    </div>
                </div>

                <!-- Floating: GST amount -->
                <div style="position:absolute;bottom:-1.25rem;right:-1rem;background:white;border-radius:14px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.7rem;">
                    <span style="width:36px;height:36px;background:rgba(12,79,120,0.08);border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="17" height="17" fill="none" stroke="var(--primary)" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2z"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.75rem;color:var(--text-muted);">Total GST this month</div>
                        <div style="font-size:0.88rem;font-weight:700;color:var(--text-main);">₹1,24,800 collected</div>
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
                ['val'=>'5M+',    'label'=>'GST Invoices Generated'],
                ['val'=>'< 30s',  'label'=>'Invoice Creation Time'],
                ['val'=>'100%',   'label'=>'GSTN Compliant'],
                ['val'=>'10,000+','label'=>'Businesses Trust ZYLO'],
            ];
            foreach($stats as $i=>$s):
                $b = $i>0 ? 'border-left:1px solid var(--border-color);':'';
            ?>
            <div style="<?= $b ?>">
                <div style="font-size:2rem;font-weight:800;color:var(--primary-dark);line-height:1;margin-bottom:0.4rem;"><?= $s['val'] ?></div>
                <div style="font-size:0.83rem;color:var(--text-muted);"><?= $s['label'] ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== WHAT IS GST BILLING ========== -->
<section>
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:center;" class="intro-grid">
            <div>
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.78rem;font-weight:700;padding:0.3rem 0.85rem;border-radius:50px;margin-bottom:1.25rem;text-transform:uppercase;letter-spacing:1px;">GST Compliance</div>
                <h2 style="font-size:2.2rem;color:var(--primary-dark);line-height:1.25;margin-bottom:1.25rem;">
                    Complete GST Compliance Without the Complexity
                </h2>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.5rem;">
                    ZYLO handles every aspect of GST compliance — from generating tax invoices to filing GSTR returns. The system auto-applies the correct GST rates, splits CGST/SGST/IGST based on supply type, and fills HSN/SAC codes from your product master.
                </p>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.75rem;">
                    Whether you're a retailer, manufacturer, service provider, or exporter — ZYLO adapts to your GST registration type and invoice format requirements automatically.
                </p>
                <div style="display:grid;grid-template-columns:1fr 1fr;gap:0.75rem;">
                    <?php foreach(['B2B Invoices','B2C Invoices','Export Invoices','Reverse Charge','Debit Notes','Credit Notes','Composition Scheme','SEZ Supply'] as $t): ?>
                    <div style="display:flex;align-items:center;gap:0.5rem;font-size:0.88rem;color:var(--text-muted);">
                        <svg width="14" height="14" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <?= $t ?>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div style="position:relative;">
                <img src="assets/store/section-2.jpg"
                     alt="ZYLO GST billing dashboard showing CGST SGST IGST auto-calculation"
                     width="560" height="380"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" loading="lazy">
                <div style="position:absolute;bottom:-1rem;left:-1rem;background:white;border-radius:12px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);">
                    <div style="font-size:0.75rem;color:var(--text-muted);margin-bottom:0.2rem;">GST auto-calculated</div>
                    <div style="font-size:0.9rem;font-weight:700;color:var(--primary-dark);">CGST ₹9,000 + SGST ₹9,000</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== KEY FEATURES ========== -->
<section id="features" class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>Key Features of ZYLO GST Billing Software</h2>
            <p>Everything you need to stay GST compliant and get paid faster.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.75rem;margin-top:3rem;" class="features-grid">
            <?php
            $features = [
                [
                    'icon'  => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
                    'title' => 'GST Invoice Generation',
                    'desc'  => 'Create GSTN-compliant tax invoices in under 30 seconds. Auto-fills customer GSTIN, HSN/SAC codes, and splits tax as CGST+SGST or IGST based on supply state.',
                    'pts'   => ['All GST invoice formats','HSN/SAC auto-fill','PDF + WhatsApp share']
                ],
                [
                    'icon'  => 'M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01',
                    'title' => 'e-Invoice with IRN & QR Code',
                    'desc'  => 'Generate e-Invoices directly via the GSTN IRP portal. ZYLO fetches the IRN, attaches the digitally signed QR code, and embeds it in your invoice PDF automatically.',
                    'pts'   => ['GSTN IRP integration','IRN generation in seconds','QR code auto-embed']
                ],
                [
                    'icon'  => 'M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
                    'title' => 'GSTR-1 & GSTR-3B Reports',
                    'desc'  => 'Auto-generate GSTR-1 and GSTR-3B from your sales and purchase data. Download in the exact format required by the GST portal — zero manual data entry.',
                    'pts'   => ['Auto GSTR-1 generation','GSTR-3B summary','Portal-ready download']
                ],
                [
                    'icon'  => 'M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z',
                    'title' => 'ITC Reconciliation',
                    'desc'  => 'Match your purchase invoices against GSTR-2A/2B automatically. ZYLO flags mismatches before you file, so you claim every rupee of eligible Input Tax Credit.',
                    'pts'   => ['GSTR-2A/2B matching','Mismatch alerts','Maximum ITC claims']
                ],
                [
                    'icon'  => 'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z',
                    'title' => 'GST Payment Tracking',
                    'desc'  => 'Track GST liability, ITC balance, and net payable for each return period. Set reminders for due dates and never miss a GSTR filing deadline again.',
                    'pts'   => ['Liability vs ITC summary','Due date reminders','Payment history']
                ],
                [
                    'icon'  => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
                    'title' => 'Multi-GSTIN Support',
                    'desc'  => 'Manage multiple GSTINs from a single ZYLO account. Perfect for businesses operating in multiple states or verticals — switch between registrations instantly.',
                    'pts'   => ['Multiple GSTINs','State-wise segregation','Consolidated reports']
                ],
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

<!-- ========== HOW IT WORKS ========== -->
<section>
    <div class="container">
        <div class="section-title">
            <h2>Create a GST Invoice in 4 Simple Steps</h2>
            <p>From blank to sent — in under 30 seconds.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1.5rem;margin-top:3rem;position:relative;" class="steps-grid">
            <div style="position:absolute;top:36px;left:calc(12.5% + 1rem);right:calc(12.5% + 1rem);height:2px;background:linear-gradient(90deg,var(--primary) 0%,var(--primary-light) 100%);z-index:0;" class="steps-connector" aria-hidden="true"></div>
            <?php
            $steps = [
                ['n'=>'1','icon'=>'M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z','title'=>'Add Customer','desc'=>'Search or add a customer. ZYLO auto-fills their GSTIN, address, and supply state.'],
                ['n'=>'2','icon'=>'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4','title'=>'Add Line Items','desc'=>'Pick products or services. HSN/SAC codes, GST rates, and amounts auto-calculate instantly.'],
                ['n'=>'3','icon'=>'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z','title'=>'Generate Invoice','desc'=>'Hit save. ZYLO creates a professional PDF with CGST/SGST/IGST breakdown and your logo.'],
                ['n'=>'4','icon'=>'M12 19l9 2-9-18-9 18 9-2zm0 0v-8','title'=>'Send & Track','desc'=>'Email or WhatsApp the invoice instantly. Track when it\'s viewed, due, and paid.'],
            ];
            foreach($steps as $step): ?>
            <div style="text-align:center;padding:1.75rem 1.25rem;background:var(--bg-offwhite);border-radius:18px;border:1px solid var(--border-color);position:relative;z-index:1;">
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

<!-- ========== e-INVOICE SPOTLIGHT ========== -->
<section class="bg-offwhite">
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:center;" class="intro-grid">
            <div>
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.78rem;font-weight:700;padding:0.3rem 0.85rem;border-radius:50px;margin-bottom:1.25rem;text-transform:uppercase;letter-spacing:1px;">e-Invoice Mandate</div>
                <h2 style="font-size:2.2rem;color:var(--primary-dark);line-height:1.25;margin-bottom:1.25rem;">
                    e-Invoice with IRN &amp; QR Code — Fully Automated
                </h2>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.5rem;">
                    For businesses under the e-Invoicing mandate (turnover above ₹5 crore), ZYLO connects directly to the GSTN IRP portal. Every B2B invoice gets an IRN generated and a digitally signed QR code attached — automatically, before the invoice reaches your customer.
                </p>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.75rem;">
                    No third-party tool, no manual portal uploads. ZYLO handles the full e-Invoice lifecycle — generation, cancellation, and amendment — in real time.
                </p>
                <div style="background:white;border:1px solid var(--border-color);border-radius:14px;padding:1.25rem 1.5rem;margin-bottom:1.75rem;">
                    <div style="font-size:0.8rem;font-weight:700;color:var(--primary);text-transform:uppercase;letter-spacing:1px;margin-bottom:0.75rem;">e-Invoice Flow in ZYLO</div>
                    <?php
                    $flow = ['Create invoice in ZYLO','Auto-sent to IRP portal','IRN returned in seconds','QR code embedded in PDF','Invoice emailed to buyer'];
                    foreach($flow as $i=>$fl): ?>
                    <div style="display:flex;align-items:center;gap:0.75rem;padding:0.5rem 0;<?= $i<count($flow)-1?'border-bottom:1px solid var(--border-color);':'' ?>">
                        <span style="width:22px;height:22px;background:var(--primary);color:white;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:0.7rem;font-weight:700;flex-shrink:0;"><?= $i+1 ?></span>
                        <span style="font-size:0.88rem;color:var(--text-main);"><?= $fl ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a href="contact" class="btn btn-primary" style="padding:0.75rem 1.75rem;">Set Up e-Invoice</a>
            </div>
            <div style="position:relative;">
                <img src="assets/store/hero-1.jpg"
                     alt="ZYLO e-Invoice generation showing IRN number and QR code on invoice PDF"
                     width="560" height="380"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" loading="lazy">
                <div style="position:absolute;top:-1rem;right:-1rem;background:white;border-radius:12px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);">
                    <div style="font-size:0.75rem;color:var(--text-muted);margin-bottom:0.2rem;">e-Invoice status</div>
                    <div style="font-size:0.88rem;font-weight:700;color:#16a34a;">IRN Generated ✓</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== INVOICE TYPES ========== -->
<section>
    <div class="container">
        <div class="section-title">
            <h2>All GST Invoice Types Supported</h2>
            <p>No matter your business type — ZYLO has the right format ready.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1.25rem;margin-top:3rem;" class="who-grid">
            <?php
            $types = [
                ['icon'=>'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z','label'=>'B2B Tax Invoice','desc'=>'For registered buyer with GSTIN'],
                ['icon'=>'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z','label'=>'B2C Invoice','desc'=>'For unregistered consumers'],
                ['icon'=>'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064','label'=>'Export Invoice','desc'=>'With/without payment of tax'],
                ['icon'=>'M13 10V3L4 14h7v7l9-11h-7z','label'=>'Reverse Charge','desc'=>'Auto RCM flag on purchase'],
                ['icon'=>'M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z','label'=>'Debit Note','desc'=>'Increase in taxable value'],
                ['icon'=>'M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z','label'=>'Credit Note','desc'=>'Reduce or cancel invoice'],
                ['icon'=>'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4','label'=>'Composition Dealer','desc'=>'For composition scheme taxpayers'],
                ['icon'=>'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2','label'=>'Bill of Supply','desc'=>'For exempt & nil-rated goods'],
            ];
            foreach($types as $t): ?>
            <div style="background:var(--bg-offwhite);border:1px solid var(--border-color);border-radius:14px;padding:1.25rem;display:flex;flex-direction:column;gap:0.6rem;">
                <span style="width:38px;height:38px;background:rgba(12,79,120,0.08);border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                    <svg width="18" height="18" fill="none" stroke="var(--primary)" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="<?= $t['icon'] ?>"/></svg>
                </span>
                <div style="font-size:0.9rem;font-weight:700;color:var(--primary-dark);"><?= $t['label'] ?></div>
                <div style="font-size:0.8rem;color:var(--text-muted);"><?= $t['desc'] ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== COMPARISON ========== -->
<section class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>ZYLO vs Other GST Software</h2>
            <p>See why businesses switch to ZYLO for GST billing.</p>
        </div>

        <div style="overflow-x:auto;margin-top:2.5rem;border-radius:16px;box-shadow:var(--shadow-md);border:1px solid var(--border-color);" class="comparison-table">
            <table style="width:100%;border-collapse:collapse;background:white;min-width:560px;">
                <thead>
                    <tr style="background:var(--primary);color:white;">
                        <th style="padding:1.1rem 1.5rem;text-align:left;font-weight:600;font-size:0.93rem;width:34%;">Feature</th>
                        <th style="padding:1.1rem 1.5rem;text-align:center;font-weight:700;font-size:0.93rem;">
                            <span style="background:rgba(255,255,255,0.15);padding:0.2rem 0.75rem;border-radius:50px;">ZYLO CRM</span>
                        </th>
                        <th style="padding:1.1rem 1.5rem;text-align:center;font-weight:600;font-size:0.93rem;opacity:0.8;">Other GST Software</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $rows = [
                        ['Free Plan',                   '✅ Forever free tier',          '❌ Trial only (30 days)'],
                        ['e-Invoice + IRN',             '✅ Built-in, no extra cost',    '⚠️ Add-on / paid extra'],
                        ['GSTR-1 & GSTR-3B Auto',      '✅ One-click generation',       '⚠️ Manual data mapping'],
                        ['ITC Reconciliation',           '✅ GSTR-2A/2B auto-match',     '❌ Not available'],
                        ['WhatsApp Invoice Sharing',    '✅ One-click share',            '❌ Email only'],
                        ['Inventory + CRM Integrated',  '✅ All-in-one platform',        '❌ Standalone tool'],
                        ['Mobile App',                  '✅ Full-featured Android+iOS',  '⚠️ View only'],
                        ['Price / Month',               '₹0 – ₹3,999',                 '₹2,500 – ₹12,000+'],
                    ];
                    foreach($rows as $i=>$row):
                        $bg = $i%2===1?'background:#f8f9fa;':'';
                    ?>
                    <tr style="<?= $bg ?>">
                        <td style="padding:1rem 1.5rem;font-weight:600;color:var(--primary-dark);font-size:0.9rem;border-bottom:1px solid var(--border-color);" data-label="Feature"><?= $row[0] ?></td>
                        <td style="padding:1rem 1.5rem;text-align:center;font-size:0.9rem;border-bottom:1px solid var(--border-color);color:var(--primary-dark);font-weight:500;" data-label="ZYLO CRM"><?= $row[1] ?></td>
                        <td style="padding:1rem 1.5rem;text-align:center;font-size:0.9rem;border-bottom:1px solid var(--border-color);color:var(--text-muted);" data-label="Others"><?= $row[2] ?></td>
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
            <h2>What Indian Businesses Say</h2>
            <p>Real results from ZYLO GST billing customers.</p>
        </div>

        <div class="grid-3" style="margin-top:3rem;">
            <?php
            $reviews = [
                [
                    'quote' => '"Earlier we were paying ₹8,000/month for a CA to just do our GST invoicing and GSTR filing. ZYLO does it all for ₹3,999/month and our CA just reviews. We saved ₹50,000+ last year."',
                    'name'  => 'Suresh Patel',
                    'role'  => 'Owner, Patel Traders · Ahmedabad',
                    'img'   => 'assets/store/avatar-david.jpg',
                ],
                [
                    'quote' => '"The e-Invoice IRN generation is seamless. Our turnover crossed ₹5 crore and the mandate hit us mid-year. ZYLO had us compliant in one afternoon. Zero disruption."',
                    'name'  => 'Anita Sharma',
                    'role'  => 'Finance Manager, ShopTech · Pune',
                    'img'   => 'assets/store/avatar-sarah.jpg',
                ],
                [
                    'quote' => '"ITC reconciliation used to take 2 full days every quarter. ZYLO matches our GSTR-2A automatically and flags mismatches. What took 2 days now takes 20 minutes."',
                    'name'  => 'Priya Nair',
                    'role'  => 'Chartered Accountant · Bengaluru',
                    'img'   => 'assets/store/avatar-emily.jpg',
                ],
            ];
            foreach($reviews as $r): ?>
            <div class="card" style="background:white;display:flex;flex-direction:column;"
                 itemscope itemtype="https://schema.org/Review">
                <div style="display:flex;gap:2px;margin-bottom:1.1rem;" aria-label="5 out of 5 stars">
                    <?php for($i=0;$i<5;$i++): ?>
                    <svg width="15" height="15" fill="#FBBF24" viewBox="0 0 20 20" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    <?php endfor; ?>
                </div>
                <p itemprop="reviewBody" style="font-style:italic;font-size:0.95rem;line-height:1.75;margin-bottom:1.5rem;color:var(--text-main);flex:1;"><?= $r['quote'] ?></p>
                <div style="display:flex;align-items:center;gap:0.85rem;padding-top:1.1rem;border-top:1px solid var(--border-color);"
                     itemscope itemprop="author" itemtype="https://schema.org/Person">
                    <img src="<?= $r['img'] ?>" alt="<?= $r['name'] ?>" width="42" height="42"
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
            <p>Everything you need to know about ZYLO GST Billing Software.</p>
        </div>

        <div style="margin-top:2.5rem;" itemscope itemtype="https://schema.org/FAQPage">
            <?php
            $faqs = [
                ['q'=>'What is GST billing software?',                 'a'=>'GST billing software helps businesses create GSTN-compliant invoices, calculate GST automatically (CGST, SGST, IGST), generate e-Invoices with IRN and QR codes, and prepare GSTR-1 and GSTR-3B reports for filing with the GST portal.'],
                ['q'=>'Is ZYLO GST billing software free?',            'a'=>'Yes. ZYLO offers a free plan with basic GST invoice creation for up to 50 invoices per month. The Pro plan starts at ₹3,999/month with unlimited invoices, e-Invoice with IRN, all GSTR reports, and 24/7 support.'],
                ['q'=>'Does ZYLO generate e-Invoice with IRN & QR?',  'a'=>'Yes. ZYLO connects directly to the GSTN IRP portal to generate e-Invoices with IRN (Invoice Reference Number) and digitally signed QR codes as required under the e-Invoicing mandate for eligible taxpayers.'],
                ['q'=>'Can ZYLO generate GSTR-1 and GSTR-3B reports?','a'=>'Yes. ZYLO auto-generates GSTR-1 and GSTR-3B from your invoices and purchase records in the format required by the GST portal — ready to download and file directly or share with your CA.'],
                ['q'=>'Does ZYLO support multiple GSTINs?',            'a'=>'Yes. ZYLO supports businesses with multiple GSTINs (multiple states or business verticals) from a single account. Switch between GSTINs instantly and manage each business\'s compliance separately.'],
            ];
            foreach($faqs as $i=>$faq): ?>
            <div style="border:1px solid var(--border-color);border-radius:12px;margin-bottom:0.9rem;overflow:hidden;"
                 itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <button onclick="toggleFaq(this)" aria-expanded="<?= $i===0?'true':'false' ?>"
                    style="width:100%;text-align:left;background:white;border:none;padding:1.2rem 1.5rem;font-size:0.97rem;font-weight:600;color:var(--primary-dark);cursor:pointer;display:flex;justify-content:space-between;align-items:center;gap:1rem;">
                    <span itemprop="name"><?= $faq['q'] ?></span>
                    <svg class="faq-icon" width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"
                         style="flex-shrink:0;transition:transform 0.3s;<?= $i===0?'transform:rotate(180deg)':'' ?>">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="faq-body" style="<?= $i===0?'':'display:none;' ?>padding:0 1.5rem 1.25rem;background:white;"
                     itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <p itemprop="text" style="color:var(--text-muted);margin:0;line-height:1.75;font-size:0.93rem;"><?= $faq['a'] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== CTA ========== -->
<section style="text-align:center;padding:6rem 0;background:linear-gradient(135deg,var(--primary) 0%,var(--primary-dark) 100%);">
    <div class="container" style="max-width:700px;margin:0 auto;">
        <h2 style="font-size:2.5rem;color:white;margin-bottom:1.25rem;line-height:1.2;">
            Start Generating GST Invoices in 60 Seconds
        </h2>
        <p style="font-size:1.1rem;color:rgba(255,255,255,0.85);margin-bottom:2.5rem;line-height:1.7;">
            Free plan available. No CA needed. No credit card required. Join 10,000+ Indian businesses that trust ZYLO for GST billing.
        </p>
        <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
            <a href="contact" class="btn" style="padding:1rem 2.25rem;font-size:1.05rem;background:white;color:var(--primary);border-radius:10px;font-weight:700;">
                Create GST Invoice Free
            </a>
            <a href="https://wa.me/917501137266?text=Hi%2C%20I%20want%20to%20know%20more%20about%20ZYLO%20GST%20Billing%20Software"
               target="_blank" rel="noopener noreferrer"
               class="btn" style="padding:1rem 2.25rem;font-size:1.05rem;background:#25d366;color:white;border-radius:10px;font-weight:600;border:none;">
                💬 Chat on WhatsApp
            </a>
        </div>
        <p style="color:rgba(255,255,255,0.5);font-size:0.82rem;margin-top:1.5rem;margin-bottom:0;">Free plan · No credit card · Cancel anytime</p>
    </div>
</section>

<script>
function toggleFaq(btn) {
    var body = btn.nextElementSibling;
    var icon = btn.querySelector('.faq-icon');
    var expanded = btn.getAttribute('aria-expanded') === 'true';
    document.querySelectorAll('.faq-body').forEach(function(el){ el.style.display='none'; });
    document.querySelectorAll('[onclick="toggleFaq(this)"]').forEach(function(el){
        el.setAttribute('aria-expanded','false');
        el.querySelector('.faq-icon').style.transform='';
    });
    if (!expanded) {
        body.style.display = 'block';
        btn.setAttribute('aria-expanded','true');
        icon.style.transform = 'rotate(180deg)';
    }
}
</script>

<style>
@media (max-width: 768px) {
    .stats-bar-grid { grid-template-columns: 1fr 1fr !important; }
    .features-grid  { grid-template-columns: 1fr !important; }
    .steps-grid     { grid-template-columns: 1fr 1fr !important; }
    .steps-connector{ display: none !important; }
    .who-grid       { grid-template-columns: 1fr 1fr !important; }
    .feature-img-right { order: 0 !important; }
}
@media (max-width: 480px) {
    .steps-grid { grid-template-columns: 1fr !important; }
    .who-grid   { grid-template-columns: 1fr 1fr !important; }
}
</style>

<?php include 'includes/footer.php'; ?>

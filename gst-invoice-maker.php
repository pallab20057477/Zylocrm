<?php
$pageTitle = "GST Invoice Maker – Create GST Invoice Online Free | ZYLO CRM";
$pageDescription = "Create professional GST invoices online in under 30 seconds with ZYLO's free GST Invoice Maker. Auto CGST/SGST/IGST calculation, PDF download, WhatsApp share. No signup required for basic use.";
$pageKeywords = "GST invoice maker, GST invoice generator free, create GST invoice online, GST invoice format, free GST invoice maker India, online GST bill maker, GST invoice maker app, GST invoice creator";
$canonicalPath = '/gst-invoice-maker';

$pageSchema = [
    '@context' => 'https://schema.org',
    '@type'    => 'SoftwareApplication',
    'name'     => 'ZYLO GST Invoice Maker',
    'url'      => 'https://zylocrm.com/gst-invoice-maker',
    'description' => 'Free online GST invoice maker for Indian businesses. Create GSTN-compliant tax invoices with auto CGST/SGST/IGST calculation, download as PDF, and share via WhatsApp in under 30 seconds.',
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
        'description'   => 'Free GST invoice maker. Pro plan from ₹3,999/month for unlimited invoices.',
        'pricingModel'  => 'Freemium'
    ],
    'aggregateRating' => [
        '@type'       => 'AggregateRating',
        'ratingValue' => '4.9',
        'reviewCount' => '1248',
        'bestRating'  => '5'
    ],
    'featureList' => [
        'Free GST invoice creation online',
        'Auto CGST SGST IGST calculation',
        'GST invoice PDF download',
        'WhatsApp and email sharing',
        'HSN and SAC code support',
        'Multiple GST invoice formats',
        'Add logo and business details',
        'Payment link on invoice'
    ]
];

$faqSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name'  => 'How do I create a GST invoice online for free?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'With ZYLO\'s free GST Invoice Maker: 1) Enter your business name and GSTIN, 2) Add your customer\'s details, 3) Add line items with HSN/SAC codes, 4) ZYLO auto-calculates CGST, SGST, or IGST based on supply type, 5) Download as PDF or share via WhatsApp. The whole process takes under 30 seconds.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Is ZYLO GST Invoice Maker really free?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. ZYLO\'s GST Invoice Maker is free for up to 50 invoices per month. The free plan includes PDF download, CGST/SGST/IGST auto-calculation, and WhatsApp sharing. The Pro plan (₹3,999/month) adds unlimited invoices, e-Invoice with IRN, GSTR reports, and payment links.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'What is the correct GST invoice format?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'A valid GST tax invoice must include: seller\'s GSTIN, legal name, and address; buyer\'s GSTIN and address (for B2B); invoice number and date; description of goods/services with HSN/SAC codes; quantity, unit price, and taxable value; applicable GST rate with CGST/SGST or IGST split; total invoice value; and place of supply. ZYLO generates invoices in this exact format automatically.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can I add my logo to the GST invoice?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. ZYLO lets you upload your business logo, set your brand colours, and add custom payment terms and notes. Every invoice is generated with your branding — looking professional every time.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Does ZYLO support e-Invoice with IRN?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. ZYLO\'s Pro plan connects directly to the GSTN IRP portal to generate e-Invoices with IRN (Invoice Reference Number) and a digitally signed QR code — as required for businesses with turnover above ₹5 crore.']
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
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:center;" class="intro-grid">
            <div>
                <div style="display:inline-flex;align-items:center;gap:0.5rem;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.8rem;font-weight:700;padding:0.38rem 1rem;border-radius:50px;margin-bottom:1.5rem;text-transform:uppercase;letter-spacing:1px;border:1px solid rgba(12,79,120,0.18);">
                    <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    100% Free · GSTN Compliant
                </div>

                <h1 style="font-size:3.2rem;color:var(--primary-dark);line-height:1.12;margin-bottom:1.4rem;">
                    GST Invoice Maker — Create GST Bills Online in 30 Seconds
                </h1>
                <p style="font-size:1.18rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.9rem;">
                    India's simplest free GST invoice maker. Enter your details, add items, and ZYLO auto-calculates CGST, SGST, or IGST — then generates a professional PDF you can download or share on WhatsApp instantly.
                </p>

                <div style="display:flex;flex-wrap:wrap;gap:0.55rem;margin-bottom:2rem;">
                    <?php foreach(['Free to Use','Auto GST Calculation','PDF Download','WhatsApp Share','Add Your Logo','HSN/SAC Codes'] as $p): ?>
                    <span style="background:white;border:1px solid var(--border-color);color:var(--text-main);font-size:0.82rem;font-weight:600;padding:0.35rem 0.9rem;border-radius:50px;box-shadow:var(--shadow-sm);">✓ &nbsp;<?= $p ?></span>
                    <?php endforeach; ?>
                </div>

                <div style="display:flex;gap:1rem;flex-wrap:wrap;">
                    <a href="contact" class="btn btn-primary" style="padding:0.9rem 2rem;font-size:1rem;">Create GST Invoice Free</a>
                    <a href="gst-billing-software" class="btn btn-outline" style="padding:0.9rem 2rem;font-size:1rem;">Explore GST Software</a>
                </div>
                <p style="margin-top:1.5rem;font-size:0.85rem;color:var(--text-muted);margin-bottom:0;">
                    ⭐ 4.9/5 from 1,248 reviews &nbsp;·&nbsp; Used by 10,000+ Indian businesses
                </p>
            </div>

            <div style="position:relative;">
                <img src="assets/store/section-1.jpg"
                     alt="ZYLO GST invoice maker showing a professional tax invoice with auto CGST SGST calculation"
                     width="580" height="400"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;"
                     fetchpriority="high">

                <!-- Floating: Invoice ready -->
                <div style="position:absolute;top:-1rem;left:-1.25rem;background:white;border-radius:14px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.7rem;">
                    <span style="width:36px;height:36px;background:#dcfce7;border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="17" height="17" fill="none" stroke="#16a34a" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.75rem;color:var(--text-muted);">GST invoice ready</div>
                        <div style="font-size:0.88rem;font-weight:700;color:#16a34a;">PDF + WhatsApp in 30s ✓</div>
                    </div>
                </div>

                <!-- Floating: Auto GST -->
                <div style="position:absolute;bottom:-1.25rem;right:-1rem;background:white;border-radius:14px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.7rem;">
                    <span style="width:36px;height:36px;background:rgba(12,79,120,0.08);border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="17" height="17" fill="none" stroke="var(--primary)" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2z"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.75rem;color:var(--text-muted);">GST auto-calculated</div>
                        <div style="font-size:0.88rem;font-weight:700;color:var(--text-main);">CGST ₹4,500 + SGST ₹4,500</div>
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
                ['val'=>'< 30s',  'label'=>'To Create a GST Invoice'],
                ['val'=>'Free',   'label'=>'Up to 50 Invoices/Month'],
                ['val'=>'100%',   'label'=>'GSTN Compliant Format'],
                ['val'=>'1,248+', 'label'=>'5-Star Reviews'],
            ];
            foreach($stats as $i=>$s):
                $b=$i>0?'border-left:1px solid var(--border-color);':'';
            ?>
            <div style="<?= $b ?>">
                <div style="font-size:2rem;font-weight:800;color:var(--primary-dark);line-height:1;margin-bottom:0.4rem;"><?= $s['val'] ?></div>
                <div style="font-size:0.83rem;color:var(--text-muted);"><?= $s['label'] ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== HOW TO CREATE ========== -->
<section>
    <div class="container">
        <div class="section-title">
            <h2>How to Create a GST Invoice in 4 Simple Steps</h2>
            <p>No accounting knowledge needed. ZYLO handles all the calculations automatically.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1.5rem;margin-top:3rem;position:relative;" class="steps-grid">
            <div style="position:absolute;top:36px;left:calc(12.5% + 1rem);right:calc(12.5% + 1rem);height:2px;background:linear-gradient(90deg,var(--primary) 0%,var(--primary-light) 100%);z-index:0;" class="steps-connector" aria-hidden="true"></div>
            <?php
            $steps = [
                ['n'=>'1','icon'=>'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
                 'title'=>'Add Your Business Details',
                 'desc' =>'Enter your business name, GSTIN, address, and upload your logo. Save once — used on every future invoice.'],
                ['n'=>'2','icon'=>'M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z',
                 'title'=>'Add Customer Details',
                 'desc' =>'Enter the buyer\'s name, GSTIN, and address. ZYLO detects the supply type and applies CGST+SGST or IGST automatically.'],
                ['n'=>'3','icon'=>'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3',
                 'title'=>'Add Line Items',
                 'desc' =>'Add products or services with quantity, rate, HSN/SAC code, and GST rate. Tax totals are calculated instantly.'],
                ['n'=>'4','icon'=>'M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4',
                 'title'=>'Download or Share',
                 'desc' =>'Download the professional PDF invoice or share directly via WhatsApp or email in one click.'],
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

<!-- ========== WHAT IS IN A GST INVOICE ========== -->
<section class="bg-offwhite">
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:center;" class="intro-grid">
            <div>
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.78rem;font-weight:700;padding:0.3rem 0.85rem;border-radius:50px;margin-bottom:1.25rem;text-transform:uppercase;letter-spacing:1px;">GST Invoice Format</div>
                <h2 style="font-size:2.2rem;color:var(--primary-dark);line-height:1.25;margin-bottom:1.25rem;">
                    What Must a GST Invoice Contain?
                </h2>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.5rem;">
                    Under GST rules, a tax invoice must contain specific mandatory fields. Missing any of them makes the invoice non-compliant — and your buyer can't claim ITC. ZYLO's GST invoice maker includes every mandatory field automatically.
                </p>

                <div style="display:grid;grid-template-columns:1fr 1fr;gap:0.75rem;margin-bottom:1.75rem;">
                    <?php
                    $mandatory = [
                        'Supplier GSTIN & name','Buyer GSTIN & address',
                        'Unique invoice number','Invoice date',
                        'HSN / SAC code','Description of goods/services',
                        'Quantity & unit','Taxable value',
                        'GST rate (CGST/SGST/IGST)','Total invoice value',
                        'Place of supply','Signature / e-sign',
                    ];
                    foreach($mandatory as $m): ?>
                    <div style="display:flex;align-items:center;gap:0.5rem;font-size:0.88rem;color:var(--text-muted);">
                        <svg width="14" height="14" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <?= $m ?>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a href="contact" class="btn btn-primary" style="padding:0.75rem 1.75rem;">Create Compliant Invoice Free</a>
            </div>

            <div style="position:relative;">
                <img src="assets/store/section-2.jpg"
                     alt="ZYLO GST invoice format showing all mandatory fields including GSTIN HSN code and tax breakdown"
                     width="560" height="380"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" loading="lazy">
                <div style="position:absolute;bottom:-1rem;left:-1rem;background:white;border-radius:12px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);">
                    <div style="font-size:0.75rem;color:var(--text-muted);margin-bottom:0.2rem;">All mandatory fields</div>
                    <div style="font-size:0.9rem;font-weight:700;color:#16a34a;">Included automatically ✓</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== INVOICE TYPES SUPPORTED ========== -->
<section>
    <div class="container">
        <div class="section-title">
            <h2>All GST Invoice Types — All Free</h2>
            <p>ZYLO's GST Invoice Maker supports every invoice type required under GST law.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1.25rem;margin-top:3rem;" class="who-grid">
            <?php
            $types = [
                ['icon'=>'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z','label'=>'B2B Tax Invoice',    'desc'=>'For registered GST buyers','color'=>'#dbeafe'],
                ['icon'=>'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z',                                                     'label'=>'B2C Invoice',        'desc'=>'For unregistered consumers','color'=>'#dcfce7'],
                ['icon'=>'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064','label'=>'Export Invoice',    'desc'=>'With/without payment of tax','color'=>'#fef9c3'],
                ['icon'=>'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2','label'=>'Bill of Supply',    'desc'=>'Exempt & nil-rated goods','color'=>'#ede9fe'],
                ['icon'=>'M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z',                                                             'label'=>'Debit Note',         'desc'=>'Increase invoice value','color'=>'#fee2e2'],
                ['icon'=>'M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z',                                                                              'label'=>'Credit Note',        'desc'=>'Reduce or cancel invoice','color'=>'#f0fdf4'],
                ['icon'=>'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15',           'label'=>'Revised Invoice',    'desc'=>'Correct a previously sent bill','color'=>'#fef3c7'],
                ['icon'=>'M13 10V3L4 14h7v7l9-11h-7z',                                                                                              'label'=>'Proforma Invoice',   'desc'=>'Quote before work begins','color'=>'#e0f2fe'],
            ];
            foreach($types as $t): ?>
            <div style="background:<?= $t['color'] ?>;border:1px solid rgba(0,0,0,0.06);border-radius:14px;padding:1.25rem;display:flex;flex-direction:column;gap:0.6rem;">
                <span style="width:38px;height:38px;background:white;border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;box-shadow:var(--shadow-sm);">
                    <svg width="18" height="18" fill="none" stroke="var(--primary)" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="<?= $t['icon'] ?>"/></svg>
                </span>
                <div style="font-size:0.9rem;font-weight:700;color:var(--primary-dark);"><?= $t['label'] ?></div>
                <div style="font-size:0.8rem;color:var(--text-muted);"><?= $t['desc'] ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== KEY FEATURES ========== -->
<section id="features" class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>Everything in ZYLO's Free GST Invoice Maker</h2>
            <p>More than just a template — a complete GST invoicing tool for Indian businesses.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.75rem;margin-top:3rem;" class="features-grid">
            <?php
            $features = [
                [
                    'icon'  => 'M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2z',
                    'title' => 'Auto GST Calculation',
                    'desc'  => 'Select the GST rate per item and ZYLO automatically splits CGST+SGST for intra-state supply or applies IGST for inter-state — based on buyer\'s state. Zero manual calculation.',
                    'pts'   => ['CGST + SGST or IGST auto','Based on place of supply','Zero manual tax entry']
                ],
                [
                    'icon'  => 'M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z',
                    'title' => 'HSN / SAC Code Support',
                    'desc'  => 'Add HSN codes for goods or SAC codes for services. ZYLO\'s built-in code library lets you search and auto-fill codes — so you never have to look them up manually.',
                    'pts'   => ['Search HSN/SAC by keyword','Auto-fill on selection','4/6/8 digit HSN support']
                ],
                [
                    'icon'  => 'M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4',
                    'title' => 'PDF Download & Sharing',
                    'desc'  => 'Download your GST invoice as a professional PDF instantly. Share via WhatsApp, email, or a direct link — all from the same screen, in one click.',
                    'pts'   => ['Instant PDF generation','WhatsApp one-click share','Email with Pay Now link']
                ],
                [
                    'icon'  => 'M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z',
                    'title' => 'Custom Templates & Branding',
                    'desc'  => 'Upload your logo, set your brand colours, add payment terms, and customise invoice notes. Choose from multiple invoice templates — each fully GST-compliant.',
                    'pts'   => ['Logo & colour branding','Multiple invoice templates','Custom payment terms & notes']
                ],
                [
                    'icon'  => 'M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z',
                    'title' => 'Payment Link on Invoice',
                    'desc'  => 'Add a "Pay Now" button to every invoice. Customers pay via UPI, cards, or net banking directly from the invoice PDF or link — no separate payment setup needed.',
                    'pts'   => ['UPI, cards, net banking','Pay Now button in PDF','Instant payment notification']
                ],
                [
                    'icon'  => 'M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
                    'title' => 'Invoice History & Tracking',
                    'desc'  => 'All invoices are saved in your ZYLO account. Track which are paid, overdue, or pending. Filter by date or client and export for your CA or GSTR filing.',
                    'pts'   => ['Full invoice history','Paid/overdue/pending status','Export for GSTR & CA']
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

<!-- ========== FREE VS PRO ========== -->
<section>
    <div class="container">
        <div class="section-title">
            <h2>Free GST Invoice Maker vs Full GST Software</h2>
            <p>Start free. Upgrade when your business needs more.</p>
        </div>

        <div style="display:grid;grid-template-columns:1fr 1fr;gap:1.75rem;margin-top:3rem;max-width:800px;margin-left:auto;margin-right:auto;padding-top:1.5rem;" class="perfect-for-grid">
            <!-- Free -->
            <div style="background:white;border:1px solid var(--border-color);border-radius:18px;padding:2.25rem;display:flex;flex-direction:column;">
                <div style="font-size:0.85rem;font-weight:700;color:var(--text-muted);text-transform:uppercase;letter-spacing:1px;margin-bottom:0.75rem;">Free Plan</div>
                <div style="font-size:2.5rem;font-weight:800;color:var(--primary-dark);line-height:1;margin-bottom:0.3rem;">₹0</div>
                <div style="font-size:0.85rem;color:var(--text-muted);margin-bottom:1.75rem;">forever free</div>
                <ul style="list-style:none;padding:0;margin:0 0 2rem;flex:1;">
                    <?php foreach(['Up to 50 invoices/month','B2B & B2C invoice formats','Auto CGST/SGST/IGST','HSN/SAC code support','PDF download','WhatsApp share','Basic invoice templates','Payment tracking'] as $pt): ?>
                    <li style="display:flex;align-items:center;gap:0.5rem;font-size:0.88rem;color:var(--text-muted);margin-bottom:0.6rem;">
                        <svg width="14" height="14" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <?= $pt ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <a href="contact" class="btn btn-outline" style="width:100%;text-align:center;">Start Free</a>
            </div>

            <!-- Pro -->
            <div style="background:white;border:2px solid var(--primary);border-radius:18px;padding:2.25rem;display:flex;flex-direction:column;box-shadow:var(--shadow-lg);position:relative;overflow:visible;">
                <div style="position:absolute;top:0;left:50%;transform:translate(-50%,-50%);background:var(--primary);color:white;font-size:0.7rem;font-weight:700;padding:0.3rem 1rem;border-radius:50px;text-transform:uppercase;letter-spacing:1px;white-space:nowrap;box-shadow:0 4px 12px rgba(12,79,120,0.3);">Most Popular</div>
                <div style="font-size:0.85rem;font-weight:700;color:var(--primary);text-transform:uppercase;letter-spacing:1px;margin-bottom:0.75rem;">Pro Plan</div>
                <div style="font-size:2.5rem;font-weight:800;color:var(--primary-dark);line-height:1;margin-bottom:0.3rem;">₹3,999</div>
                <div style="font-size:0.85rem;color:var(--text-muted);margin-bottom:1.75rem;">per month</div>
                <ul style="list-style:none;padding:0;margin:0 0 2rem;flex:1;">
                    <?php foreach(['Everything in Free','Unlimited invoices','e-Invoice with IRN & QR code','GSTR-1 & GSTR-3B reports','ITC reconciliation','Bulk invoice generation','Recurring billing automation','Payment links on invoices','Priority support'] as $pt): ?>
                    <li style="display:flex;align-items:center;gap:0.5rem;font-size:0.88rem;color:var(--text-muted);margin-bottom:0.6rem;">
                        <svg width="14" height="14" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <?= $pt ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <a href="contact" class="btn btn-primary" style="width:100%;text-align:center;">Start Pro Trial</a>
            </div>
        </div>
    </div>
</section>

<!-- ========== TESTIMONIALS ========== -->
<section class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>What Indian Businesses Say</h2>
            <p>Thousands use ZYLO's GST Invoice Maker every day.</p>
        </div>

        <div class="grid-3" style="margin-top:3rem;">
            <?php
            $reviews = [
                [
                    'quote' => '"I used to spend 20 minutes making each GST invoice in Excel. ZYLO does it in 30 seconds. The CGST/SGST calculation is automatic and the PDF looks completely professional. My clients are impressed."',
                    'name'  => 'Suresh Patel',
                    'role'  => 'Freelance Consultant · Ahmedabad',
                    'img'   => 'assets/store/avatar-david.jpg',
                ],
                [
                    'quote' => '"As a small shop owner with no accounting background, ZYLO\'s GST invoice maker is a lifesaver. I just enter the items and ZYLO calculates everything — CGST, SGST, total. Done. Share on WhatsApp. Perfect."',
                    'name'  => 'Anita Sharma',
                    'role'  => 'Shop Owner · Pune',
                    'img'   => 'assets/store/avatar-sarah.jpg',
                ],
                [
                    'quote' => '"The HSN code search saves me so much time. I used to look up codes in a PDF every time. Now I type the product name and ZYLO suggests the right HSN. Our GSTR-1 has been error-free for 8 months."',
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
<section>
    <div class="container" style="max-width:820px;">
        <div class="section-title">
            <h2>Frequently Asked Questions</h2>
            <p>Everything you need to know about ZYLO's free GST Invoice Maker.</p>
        </div>

        <div style="margin-top:2.5rem;" itemscope itemtype="https://schema.org/FAQPage">
            <?php
            $faqs = [
                ['q'=>'How do I create a GST invoice online for free?',  'a'=>'With ZYLO\'s free GST Invoice Maker: enter your business GSTIN and address, add customer details, add line items with HSN/SAC codes and GST rates — ZYLO auto-calculates CGST/SGST or IGST — then download as PDF or share via WhatsApp. The whole process takes under 30 seconds.'],
                ['q'=>'Is ZYLO GST Invoice Maker really free?',          'a'=>'Yes. Up to 50 invoices per month are completely free with PDF download, auto tax calculation, and WhatsApp sharing. The Pro plan (₹3,999/month) adds unlimited invoices, e-Invoice with IRN, GSTR reports, and payment links.'],
                ['q'=>'What is the correct GST invoice format?',         'a'=>'A valid GST invoice must include: supplier GSTIN, legal name and address; buyer GSTIN and address (for B2B); invoice number and date; HSN/SAC codes; quantity and unit price; taxable value; CGST/SGST or IGST rate and amount; total value; and place of supply. ZYLO includes all of these automatically.'],
                ['q'=>'Can I add my logo to the GST invoice?',           'a'=>'Yes. Upload your business logo, set brand colours, add custom payment terms and notes. Every invoice is generated with your branding — professional every time.'],
                ['q'=>'Does ZYLO support e-Invoice with IRN?',           'a'=>'Yes. The Pro plan connects directly to the GSTN IRP portal to generate e-Invoices with IRN and a digitally signed QR code — required for businesses with turnover above ₹5 crore.'],
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

<!-- ========== RELATED TOOLS ========== -->
<section class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>More Free Tools from ZYLO</h2>
            <p>Everything you need to run your billing — free to start.</p>
        </div>
        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1.25rem;margin-top:3rem;" class="who-grid">
            <?php
            $tools = [
                ['icon'=>'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z','label'=>'Invoice Generator',    'href'=>'invoice-generator',  'desc'=>'Create professional invoices'],
                ['icon'=>'M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z','label'=>'Quotation Generator',  'href'=>'quotation-generator','desc'=>'Send professional quotes'],
                ['icon'=>'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064','label'=>'Commercial Invoice',   'href'=>'commercial-invoice', 'desc'=>'For exports & trade'],
                ['icon'=>'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2','label'=>'Consulting Invoice',   'href'=>'consulting-invoice', 'desc'=>'For service providers'],
                ['icon'=>'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z','label'=>'Purchase Order',       'href'=>'create-purchase-order','desc'=>'Create POs for suppliers'],
                ['icon'=>'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4','label'=>'Delivery Challan',      'href'=>'create-delivery-challan','desc'=>'Track goods movement'],
                ['icon'=>'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15','label'=>'Proforma Invoice',     'href'=>'creator-proforma-invoice','desc'=>'Quote before delivery'],
                ['icon'=>'M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z','label'=>'Invoice Formats',       'href'=>'invoice-formats',    'desc'=>'Download ready templates'],
            ];
            foreach($tools as $t): ?>
            <a href="<?= $t['href'] ?>" style="background:white;border:1px solid var(--border-color);border-radius:14px;padding:1.25rem;display:flex;flex-direction:column;gap:0.6rem;text-decoration:none;transition:all 0.2s;" onmouseover="this.style.borderColor='var(--primary)';this.style.transform='translateY(-3px)';this.style.boxShadow='var(--shadow-md)';" onmouseout="this.style.borderColor='var(--border-color)';this.style.transform='';this.style.boxShadow='';">
                <span style="width:38px;height:38px;background:rgba(12,79,120,0.08);border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                    <svg width="18" height="18" fill="none" stroke="var(--primary)" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="<?= $t['icon'] ?>"/></svg>
                </span>
                <div style="font-size:0.9rem;font-weight:700;color:var(--primary-dark);"><?= $t['label'] ?></div>
                <div style="font-size:0.8rem;color:var(--text-muted);"><?= $t['desc'] ?></div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== CTA ========== -->
<section style="text-align:center;padding:6rem 0;background:linear-gradient(135deg,var(--primary) 0%,var(--primary-dark) 100%);">
    <div class="container" style="max-width:700px;margin:0 auto;">
        <h2 style="font-size:2.5rem;color:white;margin-bottom:1.25rem;line-height:1.2;">
            Create Your First GST Invoice Free — Right Now
        </h2>
        <p style="font-size:1.1rem;color:rgba(255,255,255,0.85);margin-bottom:2.5rem;line-height:1.7;">
            No credit card. No signup required for basic use. Join 10,000+ Indian businesses already creating GST invoices with ZYLO.
        </p>
        <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
            <a href="contact" class="btn" style="padding:1rem 2.25rem;font-size:1.05rem;background:white;color:var(--primary);border-radius:10px;font-weight:700;">
                Create GST Invoice Free
            </a>
            <a href="https://wa.me/917501137266?text=Hi%2C%20I%20want%20to%20create%20a%20GST%20invoice%20using%20ZYLO"
               target="_blank" rel="noopener noreferrer"
               class="btn" style="padding:1rem 2.25rem;font-size:1.05rem;background:#25d366;color:white;border-radius:10px;font-weight:600;border:none;">
                💬 Chat on WhatsApp
            </a>
        </div>
        <p style="color:rgba(255,255,255,0.5);font-size:0.82rem;margin-top:1.5rem;margin-bottom:0;">Free · No credit card · 50 invoices/month free forever</p>
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
    .stats-bar-grid   { grid-template-columns: 1fr 1fr !important; }
    .features-grid    { grid-template-columns: 1fr !important; }
    .steps-grid       { grid-template-columns: 1fr 1fr !important; }
    .steps-connector  { display: none !important; }
    .who-grid         { grid-template-columns: 1fr 1fr !important; }
    .perfect-for-grid { grid-template-columns: 1fr !important; }
}
@media (max-width: 480px) {
    .steps-grid { grid-template-columns: 1fr !important; }
    .who-grid   { grid-template-columns: 1fr 1fr !important; }
}
</style>

<?php include 'includes/footer.php'; ?>

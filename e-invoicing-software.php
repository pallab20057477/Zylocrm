<?php
$pageTitle = "e-Invoicing Software India – Generate IRN & QR Code Instantly | ZYLO CRM";
$pageDescription = "ZYLO's e-Invoicing software connects directly to the GSTN IRP portal. Generate IRN, attach digitally signed QR codes, cancel & amend e-Invoices — fully automated. Free plan available.";
$pageKeywords = "e-invoicing software India, e-invoice with IRN, IRP portal software, e-invoice generation India, GSTN e-invoice software, IRN generation software, e-invoice mandate India, e-invoice for GST, best e-invoicing software India";
$canonicalPath = '/e-invoicing-software';

$pageSchema = [
    '@context' => 'https://schema.org',
    '@type'    => 'SoftwareApplication',
    'name'     => 'ZYLO e-Invoicing Software',
    'url'      => 'https://zylocrm.com/e-invoicing-software',
    'description' => 'GSTN-compliant e-Invoicing software for Indian businesses. Connects to the IRP portal to generate IRN, attach digitally signed QR codes, and manage e-Invoice lifecycle automatically.',
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
        'ratingValue' => '4.9',
        'reviewCount' => '286',
        'bestRating'  => '5'
    ],
    'featureList' => [
        'Direct GSTN IRP portal integration',
        'IRN generation in seconds',
        'Digitally signed QR code auto-embed',
        'e-Invoice cancellation within 24 hours',
        'e-Invoice amendment support',
        'GSTR-1 auto-population from e-Invoices',
        'Bulk e-Invoice generation',
        'e-Invoice for B2B, SEZ, and export transactions'
    ]
];

$faqSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name'  => 'What is e-Invoicing under GST in India?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'e-Invoicing under GST is a system where B2B invoices are electronically authenticated by the GSTN Invoice Registration Portal (IRP). The IRP generates a unique Invoice Reference Number (IRN) and a digitally signed QR code that must be printed on every applicable invoice. It is mandatory for businesses with annual turnover above ₹5 crore.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Who is required to generate e-Invoices in India?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'As of 2023, e-Invoicing is mandatory for all GST-registered businesses with an annual aggregate turnover above ₹5 crore. It applies to B2B transactions, SEZ supplies, and exports. B2C invoices are currently exempt from the e-Invoice mandate.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'How does ZYLO generate e-Invoices with IRN?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'When you create a B2B invoice in ZYLO, the system automatically sends the invoice data to the GSTN IRP portal in the required JSON format. The IRP validates and returns an IRN (Invoice Reference Number) along with a digitally signed QR code — all within seconds. ZYLO then embeds the IRN and QR code in the invoice PDF automatically.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can I cancel an e-Invoice in ZYLO?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. e-Invoices can be cancelled within 24 hours of IRN generation as per GSTN rules. ZYLO allows you to cancel an e-Invoice directly from the portal with a reason code — the cancellation is sent to IRP automatically and your records are updated.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Does e-Invoice auto-populate GSTR-1?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. All e-Invoices generated via the IRP are automatically reflected in GSTR-1 on the GST portal. ZYLO reconciles these entries and shows you your GSTR-1 status in real time so you can file with full confidence.']
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
                    GSTN IRP Connected · 100% Compliant
                </div>

                <h1 style="font-size:3.2rem;color:var(--primary-dark);line-height:1.12;margin-bottom:1.4rem;">
                    e-Invoicing Software with Instant IRN &amp; QR Code Generation
                </h1>
                <p style="font-size:1.18rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.9rem;">
                    ZYLO connects directly to the GSTN IRP portal. Every B2B invoice gets an IRN generated and a digitally signed QR code attached — automatically, in seconds, before the invoice reaches your buyer.
                </p>

                <div style="display:flex;flex-wrap:wrap;gap:0.55rem;margin-bottom:2rem;">
                    <?php foreach(['IRN in Seconds','QR Code Auto-Embed','Cancel & Amend','GSTR-1 Auto-populate','Bulk Generation','Free Plan'] as $p): ?>
                    <span style="background:white;border:1px solid var(--border-color);color:var(--text-main);font-size:0.82rem;font-weight:600;padding:0.35rem 0.9rem;border-radius:50px;box-shadow:var(--shadow-sm);">✓ &nbsp;<?= $p ?></span>
                    <?php endforeach; ?>
                </div>

                <div style="display:flex;gap:1rem;flex-wrap:wrap;">
                    <a href="contact" class="btn btn-primary" style="padding:0.9rem 2rem;font-size:1rem;">Start e-Invoicing Free</a>
                    <a href="#how-it-works" class="btn btn-outline" style="padding:0.9rem 2rem;font-size:1rem;">See How It Works</a>
                </div>
                <p style="margin-top:1.5rem;font-size:0.85rem;color:var(--text-muted);margin-bottom:0;">
                    ⭐ 4.9/5 from 286 reviews &nbsp;·&nbsp; Trusted by 10,000+ Indian businesses
                </p>
            </div>

            <div style="position:relative;">
                <img src="assets/store/section-1.jpg"
                     alt="ZYLO e-Invoicing software showing IRN generation and digitally signed QR code on GST invoice"
                     width="580" height="400"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;"
                     fetchpriority="high">

                <!-- Floating: IRN generated -->
                <div style="position:absolute;top:-1rem;left:-1.25rem;background:white;border-radius:14px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.7rem;">
                    <span style="width:36px;height:36px;background:#dcfce7;border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="17" height="17" fill="none" stroke="#16a34a" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.75rem;color:var(--text-muted);">IRN generated</div>
                        <div style="font-size:0.88rem;font-weight:700;color:#16a34a;">A1B2C3D4E5F6... ✓</div>
                    </div>
                </div>

                <!-- Floating: IRP status -->
                <div style="position:absolute;bottom:-1.25rem;right:-1rem;background:white;border-radius:14px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.7rem;">
                    <span style="width:36px;height:36px;background:rgba(12,79,120,0.08);border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="17" height="17" fill="none" stroke="var(--primary)" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.75rem;color:var(--text-muted);">IRP portal status</div>
                        <div style="font-size:0.88rem;font-weight:700;color:var(--text-main);">Accepted &amp; QR embedded</div>
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
                ['val'=>'< 5s',   'label'=>'IRN Generation Time'],
                ['val'=>'100%',   'label'=>'GSTN Compliant'],
                ['val'=>'Zero',   'label'=>'Manual IRP Portal Visits'],
                ['val'=>'10,000+','label'=>'Businesses Trust ZYLO'],
            ];
            foreach($stats as $i=>$s):
                $b = $i>0?'border-left:1px solid var(--border-color);':'';
            ?>
            <div style="<?= $b ?>">
                <div style="font-size:2rem;font-weight:800;color:var(--primary-dark);line-height:1;margin-bottom:0.4rem;"><?= $s['val'] ?></div>
                <div style="font-size:0.83rem;color:var(--text-muted);"><?= $s['label'] ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== WHAT IS e-INVOICING ========== -->
<section>
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:center;" class="intro-grid">
            <div>
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.78rem;font-weight:700;padding:0.3rem 0.85rem;border-radius:50px;margin-bottom:1.25rem;text-transform:uppercase;letter-spacing:1px;">The e-Invoice Mandate</div>
                <h2 style="font-size:2.2rem;color:var(--primary-dark);line-height:1.25;margin-bottom:1.25rem;">
                    What Is e-Invoicing &amp; Who Needs It?
                </h2>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.5rem;">
                    Under GST, e-Invoicing means electronically authenticating every B2B invoice through the GSTN Invoice Registration Portal (IRP). The IRP assigns a unique <strong>IRN (Invoice Reference Number)</strong> and a <strong>digitally signed QR code</strong> that must appear on every applicable invoice.
                </p>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.75rem;">
                    Non-compliance attracts penalties up to 100% of the tax amount. ZYLO makes compliance effortless — every eligible invoice is automatically registered with the IRP before it leaves your system.
                </p>

                <!-- Applicability table -->
                <div style="background:var(--bg-offwhite);border:1px solid var(--border-color);border-radius:14px;padding:1.25rem 1.5rem;">
                    <div style="font-size:0.8rem;font-weight:700;color:var(--primary);text-transform:uppercase;letter-spacing:1px;margin-bottom:1rem;">e-Invoice Mandate Applicability</div>
                    <?php
                    $applicability = [
                        ['turnover'=>'Above ₹500 crore',  'since'=>'Oct 2020', 'status'=>'mandatory'],
                        ['turnover'=>'Above ₹100 crore',  'since'=>'Jan 2021', 'status'=>'mandatory'],
                        ['turnover'=>'Above ₹50 crore',   'since'=>'Apr 2021', 'status'=>'mandatory'],
                        ['turnover'=>'Above ₹20 crore',   'since'=>'Apr 2022', 'status'=>'mandatory'],
                        ['turnover'=>'Above ₹10 crore',   'since'=>'Oct 2022', 'status'=>'mandatory'],
                        ['turnover'=>'Above ₹5 crore',    'since'=>'Aug 2023', 'status'=>'mandatory'],
                    ];
                    foreach($applicability as $row): ?>
                    <div style="display:flex;justify-content:space-between;align-items:center;padding:0.5rem 0;border-bottom:1px solid var(--border-color);">
                        <span style="font-size:0.88rem;font-weight:600;color:var(--text-main);"><?= $row['turnover'] ?></span>
                        <span style="font-size:0.82rem;color:var(--text-muted);">Since <?= $row['since'] ?></span>
                        <span style="font-size:0.78rem;font-weight:700;background:#dcfce7;color:#16a34a;padding:0.2rem 0.65rem;border-radius:50px;">Mandatory</span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div style="position:relative;">
                <img src="assets/store/section-2.jpg"
                     alt="GSTN e-Invoice compliance dashboard showing IRN status and QR code verification"
                     width="560" height="380"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" loading="lazy">
                <div style="position:absolute;bottom:-1rem;left:-1rem;background:white;border-radius:12px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);">
                    <div style="font-size:0.75rem;color:var(--text-muted);margin-bottom:0.2rem;">e-Invoice compliance</div>
                    <div style="font-size:0.9rem;font-weight:700;color:#16a34a;">100% of invoices registered ✓</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== HOW IT WORKS ========== -->
<section id="how-it-works" class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>How ZYLO Generates e-Invoices with IRN</h2>
            <p>Fully automated — from invoice creation to IRP registration in seconds.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(5,1fr);gap:1.25rem;margin-top:3rem;position:relative;" class="steps-grid-5">
            <div style="position:absolute;top:34px;left:calc(10% + 0.75rem);right:calc(10% + 0.75rem);height:2px;background:linear-gradient(90deg,var(--primary) 0%,var(--primary-light) 100%);z-index:0;" class="steps-connector" aria-hidden="true"></div>
            <?php
            $steps = [
                ['n'=>'1','icon'=>'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z','title'=>'Create Invoice',    'desc'=>'Create a B2B invoice in ZYLO as usual with all line items and GST.'],
                ['n'=>'2','icon'=>'M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1','title'=>'Auto-sent to IRP',  'desc'=>'ZYLO sends invoice JSON to GSTN IRP portal instantly — no manual upload.'],
                ['n'=>'3','icon'=>'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z','title'=>'IRP Validates',     'desc'=>'IRP checks for duplicates and validates the invoice data in real time.'],
                ['n'=>'4','icon'=>'M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01','title'=>'IRN Returned',     'desc'=>'A unique IRN and digitally signed QR code are returned to ZYLO within seconds.'],
                ['n'=>'5','icon'=>'M12 19l9 2-9-18-9 18 9-2zm0 0v-8','title'=>'PDF Sent to Buyer','desc'=>'ZYLO embeds IRN & QR in the invoice PDF and sends it to your buyer automatically.'],
            ];
            foreach($steps as $step): ?>
            <div style="text-align:center;padding:1.5rem 0.9rem;background:white;border-radius:16px;border:1px solid var(--border-color);position:relative;z-index:1;">
                <div style="width:58px;height:58px;background:var(--primary);color:white;border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 1rem;box-shadow:0 0 0 7px rgba(12,79,120,0.1);">
                    <svg width="22" height="22" fill="none" stroke="white" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="<?= $step['icon'] ?>"/></svg>
                </div>
                <div style="font-size:0.68rem;font-weight:700;color:var(--primary);text-transform:uppercase;letter-spacing:1px;margin-bottom:0.4rem;">Step <?= $step['n'] ?></div>
                <h3 style="font-size:0.95rem;color:var(--primary-dark);margin-bottom:0.5rem;"><?= $step['title'] ?></h3>
                <p style="font-size:0.82rem;color:var(--text-muted);line-height:1.55;margin:0;"><?= $step['desc'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== KEY FEATURES ========== -->
<section id="features">
    <div class="container">
        <div class="section-title">
            <h2>Everything ZYLO e-Invoicing Does for You</h2>
            <p>Complete e-Invoice lifecycle management — generation, tracking, cancellation, and reconciliation.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.75rem;margin-top:3rem;" class="features-grid">
            <?php
            $features = [
                [
                    'icon'  => 'M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01',
                    'title' => 'Instant IRN Generation',
                    'desc'  => 'ZYLO connects directly to GSTN IRP via API. Every eligible B2B invoice is submitted and an IRN is returned within 3–5 seconds — no manual IRP portal visits ever.',
                    'pts'   => ['Direct IRP API integration','IRN in under 5 seconds','No manual portal upload']
                ],
                [
                    'icon'  => 'M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01',
                    'title' => 'QR Code Auto-Embed',
                    'desc'  => 'The digitally signed QR code returned by IRP is automatically embedded in the invoice PDF. Buyers can scan it to verify invoice authenticity on the GSTN portal.',
                    'pts'   => ['Digitally signed QR code','Auto-embedded in PDF','Buyer verification ready']
                ],
                [
                    'icon'  => 'M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636',
                    'title' => 'e-Invoice Cancellation',
                    'desc'  => 'Cancel e-Invoices within 24 hours directly from ZYLO. Select the reason code, confirm, and ZYLO notifies IRP automatically. Records updated instantly — no portal login needed.',
                    'pts'   => ['Cancel within 24-hr window','GSTN reason codes supported','Records auto-updated']
                ],
                [
                    'icon'  => 'M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z',
                    'title' => 'e-Invoice Amendment',
                    'desc'  => 'Need to correct an e-Invoice? Cancel the original and generate a fresh IRN for the amended invoice — ZYLO manages the entire amendment workflow with full audit trail.',
                    'pts'   => ['Cancel & re-generate IRN','Full amendment audit trail','Linked invoice records']
                ],
                [
                    'icon'  => 'M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
                    'title' => 'GSTR-1 Auto-Population',
                    'desc'  => 'e-Invoices registered with IRP automatically populate GSTR-1 on the GST portal. ZYLO reconciles IRP data with your GSTR-1 and flags any mismatches before filing.',
                    'pts'   => ['Auto GSTR-1 population','Mismatch detection','File with full confidence']
                ],
                [
                    'icon'  => 'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15',
                    'title' => 'Bulk e-Invoice Generation',
                    'desc'  => 'Generate IRNs for hundreds of invoices in one batch. Ideal for businesses with high invoice volumes — upload in bulk, ZYLO processes each one with IRP and returns all IRNs together.',
                    'pts'   => ['Batch IRN generation','CSV bulk upload support','Real-time batch status']
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

<!-- ========== COMPLIANCE SPOTLIGHT ========== -->
<section class="bg-offwhite">
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:center;" class="intro-grid">
            <div>
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.78rem;font-weight:700;padding:0.3rem 0.85rem;border-radius:50px;margin-bottom:1.25rem;text-transform:uppercase;letter-spacing:1px;">Zero-Touch Compliance</div>
                <h2 style="font-size:2.2rem;color:var(--primary-dark);line-height:1.25;margin-bottom:1.25rem;">
                    Stay 100% Compliant Without Visiting the IRP Portal Once
                </h2>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.5rem;">
                    Traditional e-Invoicing requires logging into the IRP portal, manually uploading JSON files, downloading IRN responses, and embedding QR codes — for every single invoice. That's hours of work every month.
                </p>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.75rem;">
                    ZYLO eliminates all of it. Create an invoice in ZYLO, and the entire IRP registration happens in the background — automatically, instantly, and without any manual steps.
                </p>

                <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;margin-bottom:1.75rem;">
                    <?php
                    $compare = [
                        ['old'=>'Manual IRP portal login',        'new'=>'Zero portal visits'],
                        ['old'=>'Manual JSON file upload',        'new'=>'Auto API submission'],
                        ['old'=>'Download & embed QR manually',   'new'=>'QR auto-embedded in PDF'],
                        ['old'=>'Cancel via IRP portal',         'new'=>'Cancel in one click from ZYLO'],
                    ];
                    foreach($compare as $c): ?>
                    <div style="background:white;border:1px solid var(--border-color);border-radius:12px;padding:1rem;">
                        <div style="font-size:0.78rem;color:#ef4444;text-decoration:line-through;margin-bottom:0.35rem;"><?= $c['old'] ?></div>
                        <div style="font-size:0.85rem;font-weight:600;color:#16a34a;">✓ <?= $c['new'] ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a href="contact" class="btn btn-primary" style="padding:0.75rem 1.75rem;">Activate e-Invoicing</a>
            </div>

            <div style="position:relative;">
                <img src="assets/store/hero-1.jpg"
                     alt="ZYLO zero-touch e-Invoice compliance dashboard showing automated IRP registration"
                     width="560" height="380"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" loading="lazy">
                <div style="position:absolute;top:-1rem;right:-1rem;background:white;border-radius:12px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);">
                    <div style="font-size:0.75rem;color:var(--text-muted);margin-bottom:0.2rem;">IRP registrations today</div>
                    <div style="font-size:0.88rem;font-weight:700;color:var(--text-main);">47 invoices · all compliant ✓</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== APPLICABLE TRANSACTION TYPES ========== -->
<section>
    <div class="container">
        <div class="section-title">
            <h2>e-Invoice Applies to These Transaction Types</h2>
            <p>ZYLO handles all applicable scenarios — automatically identifying which invoices need IRN.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1.25rem;margin-top:3rem;" class="who-grid">
            <?php
            $txTypes = [
                ['icon'=>'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5','label'=>'B2B Invoices',         'desc'=>'Supply to registered GST buyers','badge'=>'Mandatory','badgeColor'=>'#dcfce7','textColor'=>'#16a34a'],
                ['icon'=>'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064','label'=>'Export Invoices',       'desc'=>'Exports with or without tax payment','badge'=>'Mandatory','badgeColor'=>'#dcfce7','textColor'=>'#16a34a'],
                ['icon'=>'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z','label'=>'SEZ Supply',            'desc'=>'Supply to SEZ units & developers','badge'=>'Mandatory','badgeColor'=>'#dcfce7','textColor'=>'#16a34a'],
                ['icon'=>'M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z','label'=>'Debit / Credit Notes',  'desc'=>'Amendments to B2B invoices','badge'=>'Mandatory','badgeColor'=>'#dcfce7','textColor'=>'#16a34a'],
                ['icon'=>'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z','label'=>'B2C Invoices',         'desc'=>'Sales to unregistered consumers','badge'=>'Exempt','badgeColor'=>'#fef3c7','textColor'=>'#d97706'],
                ['icon'=>'M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z','label'=>'Nil-Rated / Exempt',  'desc'=>'Exempt goods and services','badge'=>'Exempt','badgeColor'=>'#fef3c7','textColor'=>'#d97706'],
                ['icon'=>'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z','label'=>'Composition Dealers',  'desc'=>'Registered under composition scheme','badge'=>'Exempt','badgeColor'=>'#fef3c7','textColor'=>'#d97706'],
                ['icon'=>'M13 10V3L4 14h7v7l9-11h-7z','label'=>'RCM Transactions',     'desc'=>'Reverse charge mechanism supplies','badge'=>'Mandatory','badgeColor'=>'#dcfce7','textColor'=>'#16a34a'],
            ];
            foreach($txTypes as $t): ?>
            <div style="background:var(--bg-offwhite);border:1px solid var(--border-color);border-radius:14px;padding:1.25rem;display:flex;flex-direction:column;gap:0.6rem;">
                <div style="display:flex;justify-content:space-between;align-items:flex-start;">
                    <span style="width:38px;height:38px;background:rgba(12,79,120,0.08);border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="18" height="18" fill="none" stroke="var(--primary)" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="<?= $t['icon'] ?>"/></svg>
                    </span>
                    <span style="font-size:0.7rem;font-weight:700;background:<?= $t['badgeColor'] ?>;color:<?= $t['textColor'] ?>;padding:0.2rem 0.6rem;border-radius:50px;"><?= $t['badge'] ?></span>
                </div>
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
            <h2>ZYLO vs Manual IRP Portal vs Other e-Invoice Tools</h2>
            <p>See why businesses choose ZYLO for zero-touch e-Invoice compliance.</p>
        </div>

        <div style="overflow-x:auto;margin-top:2.5rem;border-radius:16px;box-shadow:var(--shadow-md);border:1px solid var(--border-color);" class="comparison-table">
            <table style="width:100%;border-collapse:collapse;background:white;min-width:580px;">
                <thead>
                    <tr style="background:var(--primary);color:white;">
                        <th style="padding:1.1rem 1.5rem;text-align:left;font-weight:600;font-size:0.93rem;width:32%;">Task</th>
                        <th style="padding:1.1rem 1.5rem;text-align:center;font-weight:700;font-size:0.93rem;">
                            <span style="background:rgba(255,255,255,0.15);padding:0.2rem 0.75rem;border-radius:50px;">ZYLO CRM</span>
                        </th>
                        <th style="padding:1.1rem 1.5rem;text-align:center;font-weight:600;font-size:0.93rem;opacity:0.8;">Manual IRP Portal</th>
                        <th style="padding:1.1rem 1.5rem;text-align:center;font-weight:600;font-size:0.93rem;opacity:0.8;">Other e-Invoice Tools</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $rows = [
                        ['IRN Generation',          '⚡ Instant, auto via API',    '⏱️ Manual JSON upload',  '⚠️ Semi-automated'],
                        ['QR Code Embedding',       '✅ Auto in PDF',              '❌ Manual download',      '⚠️ Extra step needed'],
                        ['Invoice Cancellation',    '✅ One click from ZYLO',      '❌ IRP portal login',    '⚠️ Limited'],
                        ['GSTR-1 Reconciliation',  '✅ Auto-populated',           '❌ Manual match',         '⚠️ Basic reconciliation'],
                        ['Bulk Generation',         '✅ Hundreds at once',         '❌ One by one',           '⚠️ Limited batch size'],
                        ['Duplicate Detection',     '✅ Auto by ZYLO + IRP',       '✅ IRP only',             '⚠️ IRP only'],
                        ['Integrated Invoicing',    '✅ Full billing platform',    '❌ e-Invoice only',       '⚠️ e-Invoice only'],
                        ['Price / Month',           '₹0 – ₹3,999',               'Free (manual effort)',   '₹2,000 – ₹8,000+'],
                    ];
                    foreach($rows as $i=>$row):
                        $bg = $i%2===1?'background:#f8f9fa;':'';
                    ?>
                    <tr style="<?= $bg ?>">
                        <td style="padding:0.9rem 1.25rem;font-weight:600;color:var(--primary-dark);font-size:0.88rem;border-bottom:1px solid var(--border-color);"><?= $row[0] ?></td>
                        <td style="padding:0.9rem 1.25rem;text-align:center;font-size:0.88rem;border-bottom:1px solid var(--border-color);color:var(--primary-dark);font-weight:500;"><?= $row[1] ?></td>
                        <td style="padding:0.9rem 1.25rem;text-align:center;font-size:0.88rem;border-bottom:1px solid var(--border-color);color:var(--text-muted);"><?= $row[2] ?></td>
                        <td style="padding:0.9rem 1.25rem;text-align:center;font-size:0.88rem;border-bottom:1px solid var(--border-color);color:var(--text-muted);"><?= $row[3] ?></td>
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
            <p>Real results from businesses that automated e-Invoice compliance with ZYLO.</p>
        </div>

        <div class="grid-3" style="margin-top:3rem;">
            <?php
            $reviews = [
                [
                    'quote' => '"When the e-Invoice mandate hit us at ₹10 crore turnover, we panicked. ZYLO had us fully compliant in one afternoon. Now every invoice gets an IRN automatically — I haven\'t visited the IRP portal in 14 months."',
                    'name'  => 'Rajesh Sharma',
                    'role'  => 'Owner, RS Pharma Distributors · Mumbai',
                    'img'   => 'assets/store/avatar-david.jpg',
                ],
                [
                    'quote' => '"We process 400+ B2B invoices a month. Without ZYLO, generating IRNs manually would take a full-time employee. With ZYLO, it\'s completely automatic. Zero extra headcount, zero compliance risk."',
                    'name'  => 'Anita Verma',
                    'role'  => 'Finance Director, AV Exports · Surat',
                    'img'   => 'assets/store/avatar-sarah.jpg',
                ],
                [
                    'quote' => '"The GSTR-1 auto-population from e-Invoices is exactly what I needed for my clients. I manage 30+ CAs and ZYLO reconciles every IRN against GSTR-1 automatically. Filing season is no longer stressful."',
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
            <p>Everything you need to know about e-Invoicing under GST and ZYLO's e-Invoice software.</p>
        </div>

        <div style="margin-top:2.5rem;" itemscope itemtype="https://schema.org/FAQPage">
            <?php
            $faqs = [
                ['q'=>'What is e-Invoicing under GST in India?',      'a'=>'e-Invoicing under GST means electronically authenticating every B2B invoice through the GSTN IRP (Invoice Registration Portal). The IRP generates an IRN and a digitally signed QR code that must appear on every applicable invoice. It is mandatory for businesses with annual turnover above ₹5 crore.'],
                ['q'=>'Who is required to generate e-Invoices?',       'a'=>'As of 2023, e-Invoicing is mandatory for all GST-registered businesses with annual aggregate turnover above ₹5 crore. It applies to B2B transactions, SEZ supplies, exports, and debit/credit notes. B2C invoices are currently exempt.'],
                ['q'=>'How does ZYLO generate e-Invoices with IRN?',   'a'=>'When you create a B2B invoice in ZYLO, the system automatically sends the invoice data to the GSTN IRP portal via API. The IRP validates and returns an IRN and digitally signed QR code within seconds. ZYLO embeds these in the invoice PDF automatically — no manual steps.'],
                ['q'=>'Can I cancel an e-Invoice in ZYLO?',            'a'=>'Yes. e-Invoices can be cancelled within 24 hours of IRN generation as per GSTN rules. From ZYLO, select the invoice, choose Cancel e-Invoice, pick a reason code, and confirm. The cancellation is sent to IRP automatically and your records are updated instantly.'],
                ['q'=>'Does e-Invoice auto-populate GSTR-1?',          'a'=>'Yes. All e-Invoices generated via the IRP are automatically reflected in GSTR-1 on the GST portal. ZYLO reconciles IRP data with your GSTR-1 and flags any mismatches before filing so you can file with full confidence.'],
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
            Get e-Invoice Compliant Today — Zero Manual Work
        </h2>
        <p style="font-size:1.1rem;color:rgba(255,255,255,0.85);margin-bottom:2.5rem;line-height:1.7;">
            Join 10,000+ Indian businesses that generate IRN-verified e-Invoices automatically with ZYLO. Free plan available — no credit card, no setup fee.
        </p>
        <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
            <a href="contact" class="btn" style="padding:1rem 2.25rem;font-size:1.05rem;background:white;color:var(--primary);border-radius:10px;font-weight:700;">
                Activate e-Invoicing Free
            </a>
            <a href="https://wa.me/917501137266?text=Hi%2C%20I%20want%20to%20know%20more%20about%20ZYLO%20e-Invoicing%20Software"
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
@media (max-width: 992px) {
    .steps-grid-5 { grid-template-columns: repeat(3,1fr) !important; }
}
@media (max-width: 768px) {
    .stats-bar-grid  { grid-template-columns: 1fr 1fr !important; }
    .features-grid   { grid-template-columns: 1fr !important; }
    .steps-grid-5    { grid-template-columns: 1fr 1fr !important; }
    .steps-connector { display: none !important; }
    .who-grid        { grid-template-columns: 1fr 1fr !important; }
}
@media (max-width: 480px) {
    .steps-grid-5 { grid-template-columns: 1fr !important; }
    .who-grid     { grid-template-columns: 1fr 1fr !important; }
}
</style>

<?php include 'includes/footer.php'; ?>

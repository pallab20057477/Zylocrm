<?php
$pageTitle = "eWay Bill Software – Generate & Manage eWay Bills Instantly | ZYLO CRM";
$pageDescription = "ZYLO's eWay Bill software connects to the NIC portal to generate, extend, cancel & track eWay Bills automatically. GST-linked, bulk generation, vehicle update support. Free plan available.";
$pageKeywords = "eway bill software India, eWay bill generation software, NIC eway bill portal, GST eway bill software, eway bill generator India, best eway bill software, eway bill extension software, eway bill for transporters India";
$canonicalPath = '/eway-bill-software';

$pageSchema = [
    '@context' => 'https://schema.org',
    '@type'    => 'SoftwareApplication',
    'name'     => 'ZYLO eWay Bill Software',
    'url'      => 'https://zylocrm.com/eway-bill-software',
    'description' => 'eWay Bill software for Indian businesses. Generate, extend, cancel and track eWay Bills directly via NIC portal integration. Linked to GST invoices for zero manual data entry.',
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
        'reviewCount' => '342',
        'bestRating'  => '5'
    ],
    'featureList' => [
        'Direct NIC eWay Bill portal API integration',
        'Auto-generate eWay Bill from GST invoice',
        'Bulk eWay Bill generation',
        'eWay Bill extension before expiry',
        'Vehicle number update (Part B)',
        'eWay Bill cancellation within 24 hours',
        'Real-time eWay Bill validity tracking',
        'Transporter ID and multi-vehicle support'
    ]
];

$faqSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name'  => 'What is an eWay Bill under GST?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'An eWay Bill (Electronic Way Bill) is a compliance document required under GST for the movement of goods worth more than ₹50,000 by road, rail, air, or waterway. It must be generated on the NIC eWay Bill portal before the goods start moving and must accompany the shipment throughout transit.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'When is an eWay Bill required?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'An eWay Bill is required when the value of goods being transported exceeds ₹50,000 (or as notified by individual states for intra-state movement). It applies to all types of movement — supply, return, job work, or otherwise — whether by registered or unregistered persons.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'How does ZYLO generate eWay Bills?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'ZYLO connects directly to the NIC eWay Bill portal via API. When you generate a GST invoice in ZYLO, the system auto-fills all required details and generates the eWay Bill in one click — no manual entry on the NIC portal, no separate login required.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can I extend an eWay Bill validity in ZYLO?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. ZYLO tracks eWay Bill validity and alerts you before expiry. You can extend the validity directly from ZYLO — enter the reason, new vehicle details if applicable, and confirm. The extension is processed with NIC instantly.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can I update the vehicle number on an eWay Bill?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. If goods are transshipped or the vehicle changes mid-transit, ZYLO allows you to update the vehicle number (Part B of the eWay Bill) directly. The update is submitted to the NIC portal automatically and the revised eWay Bill is available instantly.']
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
                    NIC Portal Connected · 100% GST Compliant
                </div>

                <h1 style="font-size:3.2rem;color:var(--primary-dark);line-height:1.12;margin-bottom:1.4rem;">
                    eWay Bill Software That Generates &amp; Manages eWay Bills in One Click
                </h1>
                <p style="font-size:1.18rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.9rem;">
                    ZYLO connects directly to the NIC eWay Bill portal. Generate eWay Bills from your GST invoice in seconds, extend validity before it expires, update vehicle numbers, and cancel — all without logging into the NIC portal once.
                </p>

                <div style="display:flex;flex-wrap:wrap;gap:0.55rem;margin-bottom:2rem;">
                    <?php foreach(['NIC API Connected','1-Click Generation','Bulk eWay Bills','Extend Validity','Vehicle Update','Free Plan'] as $p): ?>
                    <span style="background:white;border:1px solid var(--border-color);color:var(--text-main);font-size:0.82rem;font-weight:600;padding:0.35rem 0.9rem;border-radius:50px;box-shadow:var(--shadow-sm);">✓ &nbsp;<?= $p ?></span>
                    <?php endforeach; ?>
                </div>

                <div style="display:flex;gap:1rem;flex-wrap:wrap;">
                    <a href="contact" class="btn btn-primary" style="padding:0.9rem 2rem;font-size:1rem;">Generate eWay Bill Free</a>
                    <a href="#how-it-works" class="btn btn-outline" style="padding:0.9rem 2rem;font-size:1rem;">See How It Works</a>
                </div>
                <p style="margin-top:1.5rem;font-size:0.85rem;color:var(--text-muted);margin-bottom:0;">
                    ⭐ 4.8/5 from 342 reviews &nbsp;·&nbsp; Trusted by 10,000+ Indian businesses
                </p>
            </div>

            <div style="position:relative;">
                <img src="assets/store/section-1.jpg"
                     alt="ZYLO eWay Bill software dashboard showing eWay Bill number generation from GST invoice"
                     width="580" height="400"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;"
                     fetchpriority="high">

                <!-- Floating: EWB generated -->
                <div style="position:absolute;top:-1rem;left:-1.25rem;background:white;border-radius:14px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.7rem;">
                    <span style="width:36px;height:36px;background:#dcfce7;border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="17" height="17" fill="none" stroke="#16a34a" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.75rem;color:var(--text-muted);">eWay Bill generated</div>
                        <div style="font-size:0.88rem;font-weight:700;color:#16a34a;">EWB-1234567890 ✓</div>
                    </div>
                </div>

                <!-- Floating: Validity -->
                <div style="position:absolute;bottom:-1.25rem;right:-1rem;background:white;border-radius:14px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.7rem;">
                    <span style="width:36px;height:36px;background:rgba(12,79,120,0.08);border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="17" height="17" fill="none" stroke="var(--primary)" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.75rem;color:var(--text-muted);">Validity</div>
                        <div style="font-size:0.88rem;font-weight:700;color:var(--text-main);">Valid till 18 Jun · 320 km</div>
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
                ['val'=>'< 10s',  'label'=>'eWay Bill Generation Time'],
                ['val'=>'100%',   'label'=>'NIC Portal Compliant'],
                ['val'=>'Zero',   'label'=>'Manual NIC Portal Visits'],
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

<!-- ========== WHAT IS eWAY BILL ========== -->
<section>
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:center;" class="intro-grid">
            <div>
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.78rem;font-weight:700;padding:0.3rem 0.85rem;border-radius:50px;margin-bottom:1.25rem;text-transform:uppercase;letter-spacing:1px;">eWay Bill Mandate</div>
                <h2 style="font-size:2.2rem;color:var(--primary-dark);line-height:1.25;margin-bottom:1.25rem;">
                    What Is an eWay Bill &amp; When Is It Required?
                </h2>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.5rem;">
                    An <strong>eWay Bill (Electronic Way Bill)</strong> is a compliance document required under GST for the movement of goods worth more than <strong>₹50,000</strong> by road, rail, air, or waterway across India. It must be generated on the NIC eWay Bill portal before the goods leave the premises and must accompany the shipment throughout transit.
                </p>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.5rem;">
                    Non-compliance leads to detention of goods, seizure of vehicle, and penalties up to 200% of the tax amount. ZYLO eliminates compliance risk by automatically generating eWay Bills directly from your GST invoices.
                </p>

                <!-- When required grid -->
                <div style="background:var(--bg-offwhite);border:1px solid var(--border-color);border-radius:14px;padding:1.25rem 1.5rem;margin-bottom:1.75rem;">
                    <div style="font-size:0.8rem;font-weight:700;color:var(--primary);text-transform:uppercase;letter-spacing:1px;margin-bottom:0.85rem;">eWay Bill Required When:</div>
                    <?php
                    $whenRequired = [
                        'Goods value exceeds ₹50,000',
                        'Inter-state movement of any value',
                        'Intra-state as per state notification',
                        'Job work movement above threshold',
                        'Goods sent on approval basis',
                        'Sales return or purchase return',
                    ];
                    foreach($whenRequired as $item): ?>
                    <div style="display:flex;align-items:center;gap:0.6rem;padding:0.4rem 0;border-bottom:1px solid var(--border-color);">
                        <svg width="14" height="14" fill="none" stroke="#16a34a" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <span style="font-size:0.88rem;color:var(--text-main);"><?= $item ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a href="contact" class="btn btn-primary" style="padding:0.75rem 1.75rem;">Start Generating eWay Bills</a>
            </div>

            <div style="position:relative;">
                <img src="assets/store/section-2.jpg"
                     alt="ZYLO eWay Bill compliance dashboard showing validity tracking and NIC portal status"
                     width="560" height="380"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" loading="lazy">
                <div style="position:absolute;bottom:-1rem;left:-1rem;background:white;border-radius:12px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);">
                    <div style="font-size:0.75rem;color:var(--text-muted);margin-bottom:0.2rem;">Active eWay Bills</div>
                    <div style="font-size:0.9rem;font-weight:700;color:#16a34a;">28 in transit · all valid ✓</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== HOW IT WORKS ========== -->
<section id="how-it-works" class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>Generate an eWay Bill from Your GST Invoice in 3 Steps</h2>
            <p>Invoice data flows directly to eWay Bill — zero re-entry, zero NIC portal login.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:2rem;margin-top:3rem;position:relative;" class="steps-grid">
            <div style="position:absolute;top:36px;left:calc(16.66% + 1rem);right:calc(16.66% + 1rem);height:2px;background:linear-gradient(90deg,var(--primary) 0%,var(--primary-light) 100%);z-index:0;" class="steps-connector" aria-hidden="true"></div>
            <?php
            $steps = [
                ['n'=>'1','icon'=>'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
                 'title'=>'Create GST Invoice',
                 'desc' =>'Create your invoice in ZYLO as usual. Add buyer, items, GST. All data is ready for eWay Bill automatically.'],
                ['n'=>'2','icon'=>'M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0',
                 'title'=>'Add Transport Details',
                 'desc' =>'Enter vehicle number, transporter ID, and distance. ZYLO calculates validity period automatically.'],
                ['n'=>'3','icon'=>'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z',
                 'title'=>'eWay Bill Generated',
                 'desc' =>'ZYLO submits to NIC portal via API. EWB number returned in seconds. Print or share PDF instantly.'],
            ];
            foreach($steps as $step): ?>
            <div style="text-align:center;padding:2rem 1.5rem;background:white;border-radius:18px;border:1px solid var(--border-color);position:relative;z-index:1;">
                <div style="width:64px;height:64px;background:var(--primary);color:white;border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 1.25rem;box-shadow:0 0 0 8px rgba(12,79,120,0.1);">
                    <svg width="26" height="26" fill="none" stroke="white" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="<?= $step['icon'] ?>"/></svg>
                </div>
                <div style="font-size:0.72rem;font-weight:700;color:var(--primary);text-transform:uppercase;letter-spacing:1px;margin-bottom:0.5rem;">Step <?= $step['n'] ?></div>
                <h3 style="font-size:1.1rem;color:var(--primary-dark);margin-bottom:0.65rem;"><?= $step['title'] ?></h3>
                <p style="font-size:0.88rem;color:var(--text-muted);line-height:1.65;margin:0;"><?= $step['desc'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== KEY FEATURES ========== -->
<section id="features">
    <div class="container">
        <div class="section-title">
            <h2>Complete eWay Bill Management — All in ZYLO</h2>
            <p>Generate, extend, update, cancel, and track eWay Bills without ever visiting the NIC portal.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.75rem;margin-top:3rem;" class="features-grid">
            <?php
            $features = [
                [
                    'icon'  => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
                    'title' => 'Auto-Generate from Invoice',
                    'desc'  => 'ZYLO pre-fills all eWay Bill details from your GST invoice — buyer GSTIN, item details, HSN codes, and values. Add vehicle info and generate in one click.',
                    'pts'   => ['Invoice data auto-populated','No re-entry of GST details','Linked to invoice records']
                ],
                [
                    'icon'  => 'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15',
                    'title' => 'Bulk eWay Bill Generation',
                    'desc'  => 'Generate eWay Bills for hundreds of invoices in a single batch. Upload via CSV, ZYLO processes each with NIC portal and returns all EWB numbers together.',
                    'pts'   => ['Batch processing support','CSV bulk upload','Real-time batch status']
                ],
                [
                    'icon'  => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z',
                    'title' => 'Validity Tracking & Extension',
                    'desc'  => 'ZYLO tracks every eWay Bill validity in real time and alerts you before expiry. Extend the validity before it lapses — enter the reason and new vehicle details, done.',
                    'pts'   => ['Expiry alerts before due','One-click extension','Distance-based validity calc']
                ],
                [
                    'icon'  => 'M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0',
                    'title' => 'Vehicle Number Update (Part B)',
                    'desc'  => 'Goods transshipped mid-transit? Update the vehicle number on any active eWay Bill directly from ZYLO. No NIC portal login, no manual form filling.',
                    'pts'   => ['Part B update from ZYLO','Transshipment support','Multi-vehicle journey tracking']
                ],
                [
                    'icon'  => 'M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636',
                    'title' => 'eWay Bill Cancellation',
                    'desc'  => 'Cancel eWay Bills within 24 hours if the shipment is cancelled or the vehicle doesn\'t move. Select a reason code in ZYLO, confirm, and the cancellation is processed with NIC instantly.',
                    'pts'   => ['Cancel within 24-hour window','Reason codes as per NIC','Records auto-updated']
                ],
                [
                    'icon'  => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z',
                    'title' => 'eWay Bill Reports & Analytics',
                    'desc'  => 'Track all eWay Bills — active, expired, cancelled — in one dashboard. Filter by date, transporter, or vehicle. Export reports for reconciliation and audit.',
                    'pts'   => ['All EWBs in one dashboard','Filter by status & date','Export for audit ready']
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

<!-- ========== VALIDITY RULES SPOTLIGHT ========== -->
<section class="bg-offwhite">
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:center;" class="intro-grid">
            <div>
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.78rem;font-weight:700;padding:0.3rem 0.85rem;border-radius:50px;margin-bottom:1.25rem;text-transform:uppercase;letter-spacing:1px;">Validity Rules</div>
                <h2 style="font-size:2.2rem;color:var(--primary-dark);line-height:1.25;margin-bottom:1.25rem;">
                    Never Let an eWay Bill Expire Mid-Transit Again
                </h2>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.75rem;">
                    eWay Bill validity is based on distance — ZYLO calculates it automatically and alerts your team well before expiry so you can extend it in time. An expired eWay Bill is a compliance violation even if the goods are still in transit.
                </p>

                <!-- Validity table -->
                <div style="background:white;border:1px solid var(--border-color);border-radius:14px;overflow:hidden;margin-bottom:1.75rem;">
                    <div style="background:var(--primary);color:white;padding:0.9rem 1.25rem;display:grid;grid-template-columns:1fr 1fr;gap:1rem;">
                        <div style="font-size:0.82rem;font-weight:700;">Distance</div>
                        <div style="font-size:0.82rem;font-weight:700;">Validity Period</div>
                    </div>
                    <?php
                    $validity = [
                        ['distance'=>'Up to 200 km',         'period'=>'1 Day'],
                        ['distance'=>'201–500 km',           'period'=>'3 Days'],
                        ['distance'=>'501–1000 km',          'period'=>'5 Days'],
                        ['distance'=>'1001–2000 km',         'period'=>'10 Days'],
                        ['distance'=>'More than 2000 km',    'period'=>'15 Days'],
                        ['distance'=>'Over-dimensional cargo','period'=>'1 Day (any distance)'],
                    ];
                    foreach($validity as $i=>$v):
                        $bg = $i%2===1?'background:#f8f9fa;':'background:white;';
                    ?>
                    <div style="<?= $bg ?>padding:0.8rem 1.25rem;display:grid;grid-template-columns:1fr 1fr;gap:1rem;border-top:1px solid var(--border-color);">
                        <div style="font-size:0.88rem;font-weight:600;color:var(--primary-dark);"><?= $v['distance'] ?></div>
                        <div style="font-size:0.88rem;color:var(--text-muted);"><?= $v['period'] ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a href="contact" class="btn btn-primary" style="padding:0.75rem 1.75rem;">Set Up eWay Bill Alerts</a>
            </div>

            <div style="position:relative;">
                <img src="assets/store/hero-1.jpg"
                     alt="ZYLO eWay Bill validity tracking dashboard showing expiry alerts and extension options"
                     width="560" height="380"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" loading="lazy">
                <div style="position:absolute;top:-1rem;right:-1rem;background:white;border-radius:12px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);">
                    <div style="font-size:0.75rem;color:#d97706;margin-bottom:0.2rem;">⚠️ Expiring in 4 hours</div>
                    <div style="font-size:0.88rem;font-weight:700;color:var(--text-main);">EWB-9876 · Extend now</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== eWAY BILL TYPES ========== -->
<section>
    <div class="container">
        <div class="section-title">
            <h2>All eWay Bill Transaction Types Supported</h2>
            <p>ZYLO handles every scenario — outward supply, inward, job work, and more.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1.25rem;margin-top:3rem;" class="who-grid">
            <?php
            $txTypes = [
                ['icon'=>'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6','label'=>'Outward Supply',        'desc'=>'Sales to registered & unregistered buyers'],
                ['icon'=>'M7 16l-4-4m0 0l4-4m-4 4h18',      'label'=>'Inward Supply',         'desc'=>'Purchases and inward movement of goods'],
                ['icon'=>'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15','label'=>'Job Work',              'desc'=>'Send / receive goods for processing'],
                ['icon'=>'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064','label'=>'Export / Import',      'desc'=>'Inter-state movement to/from port or customs'],
                ['icon'=>'M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0 M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0','label'=>'SKD / CKD Transport',   'desc'=>'Semi/completely knocked down goods'],
                ['icon'=>'M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4','label'=>'Sales Return',          'desc'=>'Return of goods from buyer to seller'],
                ['icon'=>'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z','label'=>'Exempt Movement',       'desc'=>'Goods exempt from eWay Bill requirement'],
                ['icon'=>'M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z','label'=>'Own Use / Branch Txfr', 'desc'=>'Movement to own warehouse or branch'],
            ];
            foreach($txTypes as $t): ?>
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
            <h2>ZYLO vs Manual NIC Portal vs Other eWay Bill Tools</h2>
            <p>See why businesses choose ZYLO for zero-touch eWay Bill compliance.</p>
        </div>

        <div style="overflow-x:auto;margin-top:2.5rem;border-radius:16px;box-shadow:var(--shadow-md);border:1px solid var(--border-color);" class="comparison-table">
            <table style="width:100%;border-collapse:collapse;background:white;min-width:600px;">
                <thead>
                    <tr style="background:var(--primary);color:white;">
                        <th style="padding:1.1rem 1.25rem;text-align:left;font-weight:600;font-size:0.9rem;width:30%;">Task</th>
                        <th style="padding:1.1rem 1.25rem;text-align:center;font-weight:700;font-size:0.9rem;">
                            <span style="background:rgba(255,255,255,0.15);padding:0.2rem 0.75rem;border-radius:50px;">ZYLO CRM</span>
                        </th>
                        <th style="padding:1.1rem 1.25rem;text-align:center;font-weight:600;font-size:0.9rem;opacity:0.8;">Manual NIC Portal</th>
                        <th style="padding:1.1rem 1.25rem;text-align:center;font-weight:600;font-size:0.9rem;opacity:0.8;">Other eWay Tools</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $rows = [
                        ['EWB Generation',         '⚡ Auto from invoice, 1-click',  '⏱️ Manual data entry on portal', '⚠️ Semi-automated'],
                        ['Validity Tracking',      '✅ Real-time alerts in ZYLO',    '❌ Manual check required',        '⚠️ Basic alerts only'],
                        ['Validity Extension',     '✅ One click from ZYLO',         '❌ Portal login required',        '⚠️ Limited'],
                        ['Vehicle No. Update',     '✅ Part B from ZYLO',            '❌ NIC portal only',             '⚠️ Some tools support'],
                        ['Bulk Generation',        '✅ Hundreds at once via CSV',    '❌ One at a time',               '⚠️ Limited batch size'],
                        ['GST Invoice Linked',     '✅ Auto-populated from invoice', '❌ Re-enter all data',           '⚠️ Import only'],
                        ['Cancellation',           '✅ 1-click with reason code',    '❌ Portal login required',        '⚠️ Supported'],
                        ['Price / Month',          '₹0 – ₹3,999',                  'Free (manual effort)',           '₹1,500 – ₹6,000+'],
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
            <p>Real results from businesses that automated eWay Bill compliance with ZYLO.</p>
        </div>

        <div class="grid-3" style="margin-top:3rem;">
            <?php
            $reviews = [
                [
                    'quote' => '"We dispatch 80–100 consignments a day. Generating eWay Bills manually on the NIC portal used to take 2 hours every morning. With ZYLO, it\'s done in 10 minutes — bulk generation from our invoices in one click."',
                    'name'  => 'Suresh Patel',
                    'role'  => 'Logistics Head, Patel Distributors · Ahmedabad',
                    'img'   => 'assets/store/avatar-david.jpg',
                ],
                [
                    'quote' => '"The validity expiry alerts saved us from a major compliance issue. A truck broke down mid-route and the eWay Bill was about to expire. ZYLO alerted us, we extended in 30 seconds. No penalty, no detention."',
                    'name'  => 'Anita Sharma',
                    'role'  => 'Finance Manager, ShipSmart India · Pune',
                    'img'   => 'assets/store/avatar-sarah.jpg',
                ],
                [
                    'quote' => '"We manage eWay Bills for 25 clients as a CA firm. ZYLO\'s multi-client dashboard means I can see all active EWBs across all clients in one screen. The bulk generation from invoices alone saves 15+ hours a month."',
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
            <p>Everything you need to know about eWay Bills under GST and ZYLO's eWay Bill software.</p>
        </div>

        <div style="margin-top:2.5rem;" itemscope itemtype="https://schema.org/FAQPage">
            <?php
            $faqs = [
                ['q'=>'What is an eWay Bill under GST?',                  'a'=>'An eWay Bill is a compliance document required under GST for movement of goods worth more than ₹50,000 by road, rail, air, or waterway across India. It must be generated on the NIC eWay Bill portal before goods start moving and must accompany the shipment throughout transit.'],
                ['q'=>'When is an eWay Bill required?',                    'a'=>'An eWay Bill is required when the value of goods being transported exceeds ₹50,000 for inter-state movement, or as per state notifications for intra-state movement. It applies to supply, returns, job work, branch transfers, and own-use movement.'],
                ['q'=>'How does ZYLO generate eWay Bills?',               'a'=>'ZYLO connects directly to the NIC eWay Bill portal via API. When you generate a GST invoice in ZYLO, invoice data is auto-populated into the eWay Bill form. Add vehicle details and click generate — ZYLO submits to NIC and returns the EWB number in seconds.'],
                ['q'=>'Can I extend eWay Bill validity in ZYLO?',         'a'=>'Yes. ZYLO tracks every eWay Bill and alerts you before it expires. You can extend validity directly from ZYLO — enter the reason, new vehicle details if applicable, and confirm. Extension is processed with NIC portal instantly.'],
                ['q'=>'Can I update the vehicle number on an eWay Bill?', 'a'=>'Yes. If goods are transshipped or the vehicle changes mid-transit, ZYLO allows you to update the vehicle number (Part B) directly. The update is submitted to the NIC portal automatically and the revised eWay Bill is available instantly.'],
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
            Generate eWay Bills Without Touching the NIC Portal
        </h2>
        <p style="font-size:1.1rem;color:rgba(255,255,255,0.85);margin-bottom:2.5rem;line-height:1.7;">
            Join 10,000+ Indian businesses that manage eWay Bill compliance automatically with ZYLO. Free plan available — no credit card, no setup fee.
        </p>
        <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
            <a href="contact" class="btn" style="padding:1rem 2.25rem;font-size:1.05rem;background:white;color:var(--primary);border-radius:10px;font-weight:700;">
                Start eWay Bill Free
            </a>
            <a href="https://wa.me/917501137266?text=Hi%2C%20I%20want%20to%20know%20more%20about%20ZYLO%20eWay%20Bill%20Software"
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
    .stats-bar-grid  { grid-template-columns: 1fr 1fr !important; }
    .features-grid   { grid-template-columns: 1fr !important; }
    .steps-grid      { grid-template-columns: 1fr !important; }
    .steps-connector { display: none !important; }
    .who-grid        { grid-template-columns: 1fr 1fr !important; }
}
@media (max-width: 480px) {
    .who-grid { grid-template-columns: 1fr 1fr !important; }
}
</style>

<?php include 'includes/footer.php'; ?>

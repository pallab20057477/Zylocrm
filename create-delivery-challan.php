<?php
$pageTitle = "Free Delivery Challan Generator - Create Delivery Note Online | ZYLO CRM";
$pageDescription = "Create professional delivery challans online for free with ZYLO. Add dispatch details, item quantities, transporter info, and delivery notes. Download PDF or share instantly.";
$pageKeywords = "free delivery challan generator, create delivery challan online, delivery challan format, goods dispatch challan, delivery note format india, challan template";
$canonicalPath = '/create-delivery-challan';
$pageImage = 'https://zylocrm.com/assets/store/section-2.jpg';

$pageSchema = [
    '@context' => 'https://schema.org',
    '@type'    => 'SoftwareApplication',
    'name'     => 'ZYLO Free Delivery Challan Generator',
    'url'      => 'https://zylocrm.com/create-delivery-challan',
    'description' => 'Free online delivery challan generator for businesses. Create compliant dispatch documents with itemized quantities, transporter details, and PDF export.',
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
        'description'   => 'Free delivery challan generator. Pro plan from Rs 3,999/month.',
        'pricingModel'  => 'Freemium'
    ],
    'aggregateRating' => [
        '@type'       => 'AggregateRating',
        'ratingValue' => '4.9',
        'reviewCount' => '1324',
        'bestRating'  => '5'
    ],
    'featureList' => [
        'Free professional delivery challan generation',
        'Dispatch and consignee details',
        'Itemized goods with quantity and unit',
        'Transporter and vehicle information',
        'Delivery date and movement purpose',
        'PDF export and instant sharing',
        'Linked workflow with purchase order and invoice',
        'Dispatch tracking on Pro plan'
    ]
];

$breadcrumbSchema = [
    '@context' => 'https://schema.org',
    '@type'    => 'BreadcrumbList',
    'itemListElement' => [
        [
            '@type' => 'ListItem',
            'position' => 1,
            'name' => 'Home',
            'item' => 'https://zylocrm.com/'
        ],
        [
            '@type' => 'ListItem',
            'position' => 2,
            'name' => 'Create Delivery Challan',
            'item' => 'https://zylocrm.com/create-delivery-challan'
        ]
    ]
];

$faqSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name'  => 'How do I create a delivery challan online for free?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'With ZYLO Delivery Challan Generator: 1) Add consignor and consignee details, 2) Add item lines with quantity and unit, 3) Enter transport details and dispatch date, 4) Add movement purpose and notes, 5) Review and download the challan PDF or share instantly.'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'Is ZYLO Delivery Challan Generator really free?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'Yes. You can create and download delivery challans for free. Pro features include dispatch tracking, user approvals, and integration with inventory and invoicing workflows.'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'What should a delivery challan include?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'A delivery challan should include challan number and date, consignor and consignee details, item description and quantity, transporter and vehicle details, dispatch location, destination, and purpose of movement. ZYLO includes these fields automatically.'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'When is a delivery challan used instead of an invoice?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'A delivery challan is used when goods are moved without immediately issuing a tax invoice, such as job work, approval basis, transfer between branches, or returnable goods movement. Invoice is issued later when supply is confirmed.'
            ]
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can I link delivery challan with purchase order and invoice?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => 'Yes. In ZYLO Pro, delivery challans can be linked with purchase orders and invoices so teams can track requested, dispatched, received, and billed quantities from one workflow.'
            ]
        ]
    ]
];

include 'includes/header.php';
?>
<script type="application/ld+json"><?php echo json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>
<script type="application/ld+json"><?php echo json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>

<section class="bg-offwhite" style="padding-top:calc(var(--header-height) + 4.5rem); padding-bottom:5rem; position:relative; overflow:hidden;">
    <div style="position:absolute;top:-15%;right:-8%;width:520px;height:520px;background:radial-gradient(circle,rgba(12,79,120,0.07) 0%,transparent 70%);border-radius:50%;pointer-events:none;" aria-hidden="true"></div>

    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:center;" class="intro-grid">
            <div>
                <div style="display:inline-flex;align-items:center;gap:0.5rem;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.8rem;font-weight:700;padding:0.38rem 1rem;border-radius:50px;margin-bottom:1.5rem;text-transform:uppercase;letter-spacing:1px;border:1px solid rgba(12,79,120,0.18);">
                    <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0"/></svg>
                    Free Tool · Dispatch-Ready Delivery Challan
                </div>

                <h1 style="font-size:3.1rem;color:var(--primary-dark);line-height:1.12;margin-bottom:1.4rem;">
                    Free Delivery Challan Generator for Clean Dispatch Operations
                </h1>
                <p style="font-size:1.15rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.9rem;">
                    Create compliant delivery challans with dispatch details, item quantities, and transporter information. Reduce shipment errors, maintain movement records, and share professional challans instantly.
                </p>

                <div style="display:flex;flex-wrap:wrap;gap:0.55rem;margin-bottom:2rem;">
                    <?php foreach(['Free to Use','Dispatch Format','Transport Details','PDF Download','Share Instantly','Inventory Workflow'] as $p): ?>
                    <span style="background:white;border:1px solid var(--border-color);color:var(--text-main);font-size:0.82rem;font-weight:600;padding:0.35rem 0.9rem;border-radius:50px;box-shadow:var(--shadow-sm);">&#10003; &nbsp;<?= $p ?></span>
                    <?php endforeach; ?>
                </div>

                <div style="display:flex;gap:1rem;flex-wrap:wrap;">
                    <a href="contact" class="btn btn-primary" style="padding:0.9rem 2rem;font-size:1rem;">Create Delivery Challan Free</a>
                    <a href="inventory-software" class="btn btn-outline" style="padding:0.9rem 2rem;font-size:1rem;">Explore Inventory Workflow</a>
                </div>
                <p style="margin-top:1.5rem;font-size:0.85rem;color:var(--text-muted);margin-bottom:0;">
                    Rated 4.9/5 by dispatch teams and operations managers
                </p>
            </div>

            <div style="position:relative;">
                <img src="assets/store/section-2.jpg"
                     alt="Delivery challan dashboard showing dispatch details item quantities and transport information"
                     width="580" height="400"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;"
                     fetchpriority="high">

                <div style="position:absolute;top:-1rem;left:-1.25rem;background:white;border-radius:14px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.7rem;">
                    <span style="width:36px;height:36px;background:#dcfce7;border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="17" height="17" fill="none" stroke="#16a34a" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.75rem;color:var(--text-muted);">Challan generated</div>
                        <div style="font-size:0.88rem;font-weight:700;color:#16a34a;">DC-2026-118 in under 1 min</div>
                    </div>
                </div>

                <div style="position:absolute;bottom:-1.25rem;right:-1rem;background:white;border-radius:14px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.7rem;">
                    <span style="width:36px;height:36px;background:rgba(12,79,120,0.08);border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="17" height="17" fill="none" stroke="var(--primary)" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.75rem;color:var(--text-muted);">Dispatch status</div>
                        <div style="font-size:0.88rem;font-weight:700;color:var(--text-main);">In transit to consignee</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="padding:2.75rem 0;background:white;border-bottom:1px solid var(--border-color);">
    <div class="container">
        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1rem;text-align:center;" class="stats-bar-grid">
            <?php
            $stats = [
                ['val'=>'< 60s',  'label'=>'Average Challan Creation Time'],
                ['val'=>'Free',   'label'=>'Start Creating Instantly'],
                ['val'=>'1,324+', 'label'=>'Operations Teams Reviewed'],
                ['val'=>'10,000+','label'=>'Businesses on ZYLO'],
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

<section>
    <div class="container">
        <div class="section-title">
            <h2>How to Create a Delivery Challan in 4 Steps</h2>
            <p>Standardized dispatch documents help you reduce delivery disputes and keep movement records audit-ready.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1.5rem;margin-top:3rem;position:relative;" class="steps-grid">
            <div style="position:absolute;top:36px;left:calc(12.5% + 1rem);right:calc(12.5% + 1rem);height:2px;background:linear-gradient(90deg,var(--primary) 0%,var(--primary-light) 100%);z-index:0;" class="steps-connector" aria-hidden="true"></div>
            <?php
            $steps = [
                ['n'=>'1','icon'=>'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5',
                 'title'=>'Consignor and Consignee',
                 'desc' =>'Add sender and receiver details with address, contact, and tax information.'],
                ['n'=>'2','icon'=>'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2',
                 'title'=>'Itemized Goods',
                 'desc' =>'Add item description, quantity, unit, batch or serial details, and packing notes.'],
                ['n'=>'3','icon'=>'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4',
                 'title'=>'Transport and Dispatch',
                 'desc' =>'Enter transporter name, vehicle number, dispatch date, and destination details.'],
                ['n'=>'4','icon'=>'M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4',
                 'title'=>'Review and Share',
                 'desc' =>'Generate a professional PDF challan and share instantly with your logistics or buyer team.'],
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

<section class="bg-offwhite">
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:center;" class="intro-grid">
            <div>
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.78rem;font-weight:700;padding:0.3rem 0.85rem;border-radius:50px;margin-bottom:1.25rem;text-transform:uppercase;letter-spacing:1px;">Delivery Challan vs Invoice</div>
                <h2 style="font-size:2.2rem;color:var(--primary-dark);line-height:1.25;margin-bottom:1.25rem;">
                    Delivery Challan vs Invoice: Know the Difference
                </h2>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.75rem;">
                    A delivery challan records movement of goods during dispatch. An invoice requests payment after sale is recognized. Keeping both documents aligned reduces reconciliation issues between warehouse, logistics, and accounts teams.
                </p>

                <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;margin-bottom:1.75rem;">
                    <div style="background:white;border:1px solid var(--border-color);border-radius:14px;padding:1.25rem;">
                        <div style="font-size:0.8rem;font-weight:700;color:var(--primary);text-transform:uppercase;letter-spacing:1px;margin-bottom:0.75rem;">Delivery Challan</div>
                        <?php foreach(['Tracks goods movement','Created at dispatch stage','Shows quantity and transport details','Used before invoicing in many cases','Supports eWay and logistics records'] as $p): ?>
                        <div style="display:flex;align-items:center;gap:0.5rem;font-size:0.82rem;color:var(--text-muted);margin-bottom:0.35rem;">
                            <svg width="12" height="12" fill="none" stroke="var(--primary)" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <?= $p ?>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div style="background:white;border:1px solid var(--border-color);border-radius:14px;padding:1.25rem;">
                        <div style="font-size:0.8rem;font-weight:700;color:#16a34a;text-transform:uppercase;letter-spacing:1px;margin-bottom:0.75rem;">Invoice</div>
                        <?php foreach(['Requests payment for supplied goods','Created at billing stage','Shows taxable value and tax amount','Used for accounting entry','Linked with receivables and tax filing'] as $p): ?>
                        <div style="display:flex;align-items:center;gap:0.5rem;font-size:0.82rem;color:var(--text-muted);margin-bottom:0.35rem;">
                            <svg width="12" height="12" fill="none" stroke="#16a34a" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <?= $p ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <a href="invoice-generator" class="btn btn-primary" style="padding:0.75rem 1.75rem;">Create Invoice After Dispatch</a>
            </div>

            <div style="position:relative;">
                <img src="assets/store/section-1.jpg"
                     alt="Delivery challan and invoice workflow for dispatch and billing control"
                     width="560" height="380"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" loading="lazy">
                <div style="position:absolute;bottom:-1rem;right:-1rem;background:white;border-radius:12px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);">
                    <div style="font-size:0.75rem;color:var(--text-muted);margin-bottom:0.2rem;">Document continuity</div>
                    <div style="font-size:0.9rem;font-weight:700;color:var(--text-main);">Dispatch to billing traceability</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="section-title">
            <h2>What Should a Professional Delivery Challan Include?</h2>
            <p>Include all dispatch-critical fields so goods movement remains clear, compliant, and easy to verify.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1.25rem;margin-top:3rem;" class="who-grid">
            <?php
            $fields = [
                ['icon'=>'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z','label'=>'Challan Number and Date', 'desc'=>'Unique reference and issue date for dispatch records'],
                ['icon'=>'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z','label'=>'Consignor and Consignee',  'desc'=>'Sender and receiver details with address and contact'],
                ['icon'=>'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2','label'=>'Itemized Goods',     'desc'=>'Product description, unit, quantity, and identification tags'],
                ['icon'=>'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4','label'=>'Transport Details',     'desc'=>'Transporter, vehicle number, and movement information'],
                ['icon'=>'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z','label'=>'Dispatch and Delivery Date', 'desc'=>'Planned movement date and expected delivery timeline'],
                ['icon'=>'M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z','label'=>'Reference Order', 'desc'=>'Linked purchase order or sales order reference for validation'],
                ['icon'=>'M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586','label'=>'Purpose of Movement', 'desc'=>'Reason such as job work, transfer, return, or direct delivery'],
                ['icon'=>'M5 13l4 4L19 7','label'=>'Authorized Sign-Off', 'desc'=>'Name and signature for operational and audit accountability'],
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

<section id="features" class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>Everything You Need in a Delivery Challan Workflow</h2>
            <p>Move goods with confidence using dispatch documents that are complete, trackable, and professional.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.75rem;margin-top:3rem;" class="features-grid">
            <?php
            $features = [
                [
                    'icon'  => 'M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z',
                    'title' => 'Professional Challan Templates',
                    'desc'  => 'Use polished delivery challan templates with your branding and clear item-level dispatch details.',
                    'pts'   => ['Consistent challan format','Company branding support','Print-ready PDF output']
                ],
                [
                    'icon'  => 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4',
                    'title' => 'Dispatch and Transport Clarity',
                    'desc'  => 'Capture transporter and vehicle data correctly so dispatch teams and recipients can coordinate better.',
                    'pts'   => ['Transporter details','Vehicle and route references','Dispatch notes support']
                ],
                [
                    'icon'  => 'M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4',
                    'title' => 'Instant Sharing',
                    'desc'  => 'Generate and share challans instantly with warehouse, logistics, and customer teams.',
                    'pts'   => ['Instant PDF generation','Email and WhatsApp sharing','Cleaner handover process']
                ],
                [
                    'icon'  => 'M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4',
                    'title' => 'Dispatch Status Tracking',
                    'desc'  => 'Track challans from draft to delivered to improve follow-ups and reduce missing receipts.',
                    'pts'   => ['Draft, dispatched, delivered states','Delivery confirmation linkage','Faster issue resolution']
                ],
                [
                    'icon'  => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z',
                    'title' => 'Movement Audit Trail',
                    'desc'  => 'Maintain a searchable record of every dispatch for operations, customer support, and audits.',
                    'pts'   => ['Centralized challan history','Item-wise traceability','Audit-ready documentation']
                ],
                [
                    'icon'  => 'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15',
                    'title' => 'Connected Document Flow',
                    'desc'  => 'Connect challans with purchase orders, inventory updates, and invoices to avoid quantity mismatch.',
                    'pts'   => ['PO to challan linkage','Inventory update alignment','Invoice matching support']
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

<section>
    <div class="container">
        <div class="section-title">
            <h2>Built for Teams That Handle Daily Dispatches</h2>
            <p>ZYLO helps different business teams maintain reliable dispatch control and cleaner communication.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.75rem;margin-top:3rem;" class="perfect-for-grid">
            <?php
            $personas = [
                [
                    'icon'  => 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z',
                    'title' => 'Small Businesses',
                    'desc'  => 'Move goods with proper dispatch proof instead of informal notes and chat messages.',
                    'link'  => 'smbs',
                    'pts'   => ['Formal goods handover proof','Cleaner customer communication','Reduced delivery disputes']
                ],
                [
                    'icon'  => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
                    'title' => 'Warehouse and Inventory Teams',
                    'desc'  => 'Ensure every outbound movement is recorded with item quantity and transport details.',
                    'link'  => 'inventory-software',
                    'pts'   => ['Outbound quantity accuracy','Transport record visibility','Better stock movement control']
                ],
                [
                    'icon'  => 'M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                    'title' => 'Operations and Accounts Teams',
                    'desc'  => 'Link dispatch records with billing and reconciliation to reduce mismatch and delays.',
                    'link'  => 'accounting-software',
                    'pts'   => ['Dispatch to billing continuity','Fewer quantity disputes','Faster reconciliations']
                ],
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

<section class="bg-offwhite">
    <div class="container" style="max-width:820px;">
        <div class="section-title">
            <h2>Frequently Asked Questions</h2>
            <p>Common questions about creating and using delivery challans with ZYLO.</p>
        </div>

        <div style="margin-top:2.5rem;" itemscope itemtype="https://schema.org/FAQPage">
            <?php
            $faqs = [
                ['q'=>'How do I create a delivery challan online for free?', 'a'=>'Use ZYLO Delivery Challan Generator to add consignor and consignee details, goods quantity, transporter information, and movement notes. Then download and share the professional PDF instantly.'],
                ['q'=>'Is ZYLO Delivery Challan Generator really free?', 'a'=>'Yes. You can generate delivery challans free of cost. Pro features include dispatch tracking, approvals, and end-to-end workflow integrations.'],
                ['q'=>'What details should be mentioned in a delivery challan?', 'a'=>'A proper delivery challan includes challan number, date, sender details, receiver details, item-wise quantity, transporter details, vehicle number, dispatch date, destination, and authorized signature.'],
                ['q'=>'When should a delivery challan be used?', 'a'=>'It is used when goods are moved without immediate invoicing, such as branch transfer, job work, approval basis supply, returnable movement, or preliminary dispatch before final billing.'],
                ['q'=>'Can delivery challan be linked to invoice and PO?', 'a'=>'Yes. In ZYLO Pro, challans can be linked with purchase orders and invoices for clean quantity matching and dispatch-to-billing continuity.'],
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

<section>
    <div class="container">
        <div class="section-title">
            <h2>More Free Business Tools from ZYLO</h2>
            <p>Use connected tools to complete your full order, dispatch, and billing workflow.</p>
        </div>
        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1.25rem;margin-top:3rem;" class="who-grid">
            <?php
            $tools = [
                ['icon'=>'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z','label'=>'Purchase Order',      'href'=>'create-purchase-order',     'desc'=>'Create supplier purchase orders'],
                ['icon'=>'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z','label'=>'Invoice Generator',   'href'=>'invoice-generator',         'desc'=>'Create professional invoices'],
                ['icon'=>'M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2z','label'=>'GST Invoice Maker',    'href'=>'gst-invoice-maker',         'desc'=>'GST-compliant tax invoices'],
                ['icon'=>'M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z','label'=>'Quotation Generator',  'href'=>'quotation-generator',       'desc'=>'Send sales quotations'],
                ['icon'=>'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064','label'=>'Commercial Invoice',  'href'=>'commercial-invoice',        'desc'=>'For international trade'],
                ['icon'=>'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2','label'=>'Proforma Invoice',    'href'=>'creator-proforma-invoice',  'desc'=>'Pre-sales invoice format'],
                ['icon'=>'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15','label'=>'Consulting Invoice',   'href'=>'consulting-invoice',        'desc'=>'For service businesses'],
                ['icon'=>'M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z','label'=>'Invoice Formats',      'href'=>'invoice-formats',           'desc'=>'Download ready templates'],
            ];
            foreach($tools as $t): ?>
            <a href="<?= $t['href'] ?>" style="background:var(--bg-offwhite);border:1px solid var(--border-color);border-radius:14px;padding:1.25rem;display:flex;flex-direction:column;gap:0.6rem;text-decoration:none;transition:all 0.2s;" onmouseover="this.style.borderColor='var(--primary)';this.style.transform='translateY(-3px)';this.style.boxShadow='var(--shadow-md)';" onmouseout="this.style.borderColor='var(--border-color)';this.style.transform='';this.style.boxShadow='';">
                <span style="width:38px;height:38px;background:white;border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;box-shadow:var(--shadow-sm);">
                    <svg width="18" height="18" fill="none" stroke="var(--primary)" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="<?= $t['icon'] ?>"/></svg>
                </span>
                <div style="font-size:0.9rem;font-weight:700;color:var(--primary-dark);"><?= $t['label'] ?></div>
                <div style="font-size:0.8rem;color:var(--text-muted);"><?= $t['desc'] ?></div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section style="text-align:center;padding:6rem 0;background:linear-gradient(135deg,var(--primary) 0%,var(--primary-dark) 100%);">
    <div class="container" style="max-width:700px;margin:0 auto;">
        <h2 style="font-size:2.5rem;color:white;margin-bottom:1.25rem;line-height:1.2;">
            Create Professional Delivery Challans in Minutes
        </h2>
        <p style="font-size:1.1rem;color:rgba(255,255,255,0.85);margin-bottom:2.5rem;line-height:1.7;">
            Standardize dispatch documentation, reduce quantity disputes, and improve coordination between warehouse, logistics, and billing teams.
        </p>
        <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
            <a href="contact" class="btn" style="padding:1rem 2.25rem;font-size:1.05rem;background:white;color:var(--primary);border-radius:10px;font-weight:700;">
                Create Delivery Challan
            </a>
            <a href="https://wa.me/917501137266?text=Hi%2C%20I%20want%20to%20create%20a%20delivery%20challan%20using%20ZYLO"
               target="_blank" rel="noopener noreferrer"
               class="btn" style="padding:1rem 2.25rem;font-size:1.05rem;background:#25d366;color:white;border-radius:10px;font-weight:600;border:none;">
                Chat on WhatsApp
            </a>
        </div>
        <p style="color:rgba(255,255,255,0.5);font-size:0.82rem;margin-top:1.5rem;margin-bottom:0;">Free start · Professional format · Dispatch-ready</p>
    </div>
</section>

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

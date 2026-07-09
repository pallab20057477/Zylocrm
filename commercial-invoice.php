<?php
$pageTitle = "Commercial Invoice Software – Create GST-Compliant International Invoices | ZYLO CRM";
$pageDescription = "Create professional commercial invoices for exports & international trade with ZYLO CRM. GST-compliant, multi-currency, auto-calculates duties & taxes. Free plan available.";
$pageKeywords = "commercial invoice, commercial invoice software, export invoice, international invoice, commercial invoice template, GST export invoice, trade invoice generator, commercial invoice format India";
$canonicalPath = '/commercial-invoice';
$pageSchema = [
    '@context' => 'https://schema.org',
    '@type'    => 'SoftwareApplication',
    'name'     => 'ZYLO CRM Commercial Invoice Software',
    'url'      => 'https://zylocrm.com/commercial-invoice',
    'description' => 'Professional commercial invoice software for exporters and international businesses. Create GST-compliant export invoices with multi-currency support.',
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
        'description'   => 'Free plan available. Pro plan from ₹999/month.',
        'pricingModel'  => 'Freemium'
    ],
    'aggregateRating' => [
        '@type'       => 'AggregateRating',
        'ratingValue' => '4.8',
        'reviewCount' => '196',
        'bestRating'  => '5'
    ],
    'featureList' => [
        'GST & export invoice compliant',
        'Multi-currency support (150+ currencies)',
        'HS code & customs declaration',
        'Digital signature support',
        'PDF export & email delivery',
        'Bank detail & payment terms'
    ]
];

$faqSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name'  => 'What is a commercial invoice and when do I need one?',
            'acceptedAnswer' => ['@type'=>'Answer','text'=>'A commercial invoice is an official document used in international trade. It serves as a contract between the buyer and seller, and is required by customs authorities for clearing shipments. It includes details like item description, quantity, price, country of origin, and HS codes.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Is ZYLO commercial invoice GST-compliant for Indian exporters?',
            'acceptedAnswer' => ['@type'=>'Answer','text'=>'Yes. ZYLO generates GST-compliant export invoices including zero-rated supply invoices, LUT/bond declarations, and IGST refund-ready formats as per GSTN guidelines for Indian exporters.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can I create commercial invoices in multiple currencies?',
            'acceptedAnswer' => ['@type'=>'Answer','text'=>'Yes. ZYLO supports 150+ currencies with live exchange rates. You can invoice clients in USD, EUR, GBP, AED, or any other currency and the system automatically handles forex conversion for your books.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Does ZYLO support HS codes and customs declarations?',
            'acceptedAnswer' => ['@type'=>'Answer','text'=>'Yes. ZYLO has a built-in HS code lookup with 5000+ codes. You can add customs declarations, country of origin, incoterms, and other required fields for international shipments.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can I digitally sign commercial invoices in ZYLO?',
            'acceptedAnswer' => ['@type'=>'Answer','text'=>'Yes. ZYLO supports digital signatures on invoices. You can upload your authorized signatory\'s signature image or use a digital certificate to sign documents electronically.']
        ]
    ]
];

include 'includes/header.php';
?>
<script type="application/ld+json"><?php echo json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>

<!-- ========== HERO ========== -->
<section class="bg-offwhite" style="padding-top:calc(var(--header-height) + 4.5rem); padding-bottom:5rem;">
    <div class="container">
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:4rem; align-items:center;" class="intro-grid">
            <div>
                <div style="display:inline-flex; align-items:center; gap:0.5rem; background:rgba(12,79,120,0.08); color:var(--primary); font-size:0.8rem; font-weight:700; padding:0.35rem 1rem; border-radius:50px; margin-bottom:1.5rem; text-transform:uppercase; letter-spacing:1px; border:1px solid rgba(12,79,120,0.15);">
                    <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    Export &amp; International Trade Ready
                </div>

                <h1 style="font-size:3.25rem; color:var(--primary-dark); line-height:1.15; margin-bottom:1.5rem;">
                    Create Professional Commercial Invoices in Seconds
                </h1>
                <p style="font-size:1.2rem; line-height:1.8; color:var(--text-muted); margin-bottom:2rem;">
                    Generate GST-compliant commercial invoices for exports and international trade. Multi-currency support, HS codes, customs declarations — everything customs needs, built right in.
                </p>

                <div style="display:flex; flex-wrap:wrap; gap:0.6rem; margin-bottom:2rem;">
                    <?php foreach(['GST Export Ready','150+ Currencies','HS Code Lookup','Digital Signature','PDF & Email','Free Plan'] as $pill): ?>
                    <span style="background:white; border:1px solid var(--border-color); color:var(--text-main); font-size:0.82rem; font-weight:600; padding:0.35rem 0.9rem; border-radius:50px;">✓ &nbsp;<?= $pill ?></span>
                    <?php endforeach; ?>
                </div>

                <div style="display:flex; gap:1rem; flex-wrap:wrap;">
                    <a href="contact" class="btn btn-primary" style="padding:0.9rem 2rem; font-size:1rem;">Start Free Trial</a>
                    <a href="#features" class="btn btn-outline" style="padding:0.9rem 2rem; font-size:1rem;">See All Features</a>
                </div>

                <p style="margin-top:1.5rem; font-size:0.85rem; color:var(--text-muted); margin-bottom:0;">
                    ⭐ 4.8/5 from 196 reviews &nbsp;·&nbsp; Trusted by 500+ exporters
                </p>
            </div>

            <div style="position:relative;">
                <img src="assets/store/section-1.jpg"
                     alt="ZYLO CRM commercial invoice software dashboard for export and international trade"
                     width="580" height="400"
                     style="width:100%; border-radius:20px; box-shadow:var(--shadow-xl); display:block;"
                     fetchpriority="high" loading="lazy">

                <div style="position:absolute; bottom:-1.25rem; left:-1.25rem; background:white; border-radius:14px; padding:0.9rem 1.25rem; box-shadow:var(--shadow-lg); border:1px solid var(--border-color); display:flex; align-items:center; gap:0.75rem;">
                    <span style="width:38px; height:38px; background:#dcfce7; border-radius:10px; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                        <svg width="18" height="18" fill="none" stroke="#16a34a" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.78rem; color:var(--text-muted);">Export revenue this month</div>
                        <div style="font-size:1rem; font-weight:700; color:var(--text-main);">$48,200 <span style="color:#16a34a; font-size:0.8rem;">↑ 18%</span></div>
                    </div>
                </div>

                <div style="position:absolute; top:-1rem; right:-1rem; background:white; border-radius:14px; padding:0.9rem 1.25rem; box-shadow:var(--shadow-lg); border:1px solid var(--border-color); display:flex; align-items:center; gap:0.65rem;">
                    <span style="width:34px; height:34px; background:rgba(12,79,120,0.08); border-radius:8px; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                        <svg width="16" height="16" fill="none" stroke="var(--primary)" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.78rem; color:var(--text-muted);">Invoice cleared</div>
                        <div style="font-size:0.9rem; font-weight:700; color:var(--text-main);">CI-2024 · Customs ✓</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== STATS BAR ========== -->
<section style="padding:3rem 0; background:white; border-bottom:1px solid var(--border-color);">
    <div class="container">
        <div style="display:grid; grid-template-columns:repeat(4,1fr); gap:1rem; text-align:center;" class="stats-bar-grid">
            <?php
            $stats = [
                ['val'=>'500+',   'label'=>'Exporters Trust ZYLO'],
                ['val'=>'150+',   'label'=>'Currencies Supported'],
                ['val'=>'5000+',  'label'=>'HS Codes Available'],
                ['val'=>'< 60s',  'label'=>'Invoice Creation Time'],
            ];
            foreach($stats as $i => $s):
                $border = $i > 0 ? 'border-left:1px solid var(--border-color);' : '';
            ?>
            <div style="<?= $border ?>">
                <div style="font-size:2rem; font-weight:800; color:var(--primary-dark); line-height:1; margin-bottom:0.4rem;"><?= $s['val'] ?></div>
                <div style="font-size:0.85rem; color:var(--text-muted);"><?= $s['label'] ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== KEY FEATURES ========== -->
<section id="features" class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>Key Features of ZYLO Commercial Invoice Software</h2>
            <p>Everything exporters and international businesses need to invoice professionally and compliantly.</p>
        </div>

        <div style="display:grid; grid-template-columns:repeat(3,1fr); gap:1.75rem; margin-top:3rem;" class="features-grid">
            <?php
            $features = [
                [
                    'icon'  => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
                    'title' => 'GST Export Invoices',
                    'desc'  => 'Create zero-rated supply invoices compliant with GSTN export standards. Auto-fill LUT/bond references and generate IGST refund-ready export invoices in seconds.',
                    'pts'   => ['Zero-rated supply invoices','LUT/bond declaration','IGST refund-ready format']
                ],
                [
                    'icon'  => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
                    'title' => 'Multi-Currency Billing',
                    'desc'  => 'Invoice international clients in 150+ currencies with live exchange rates. ZYLO handles forex conversion for your books automatically — no manual calculations.',
                    'pts'   => ['150+ currencies supported','Live exchange rate sync','Forex gain/loss tracking']
                ],
                [
                    'icon'  => 'M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9',
                    'title' => 'HS Code & Customs',
                    'desc'  => 'Built-in HS code lookup with 5000+ codes. Add customs declarations, country of origin, incoterms, and port of loading for hassle-free customs clearance.',
                    'pts'   => ['5000+ HS code library','Country of origin field','Incoterms & port details']
                ],
                [
                    'icon'  => 'M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z',
                    'title' => 'Digital Signatures',
                    'desc'  => 'Add authorized signatory signatures digitally to every invoice. Upload signature images or use digital certificates for legally valid signed documents.',
                    'pts'   => ['Signature image upload','Digital certificate support','Legally valid documents']
                ],
                [
                    'icon'  => 'M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z',
                    'title' => 'PDF & Email Delivery',
                    'desc'  => 'Generate branded PDF commercial invoices instantly and email them directly to buyers with one click. Set custom email templates for professional communication.',
                    'pts'   => ['Branded PDF generation','One-click email delivery','Custom email templates']
                ],
                [
                    'icon'  => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2',
                    'title' => 'Payment Terms & Bank Details',
                    'desc'  => 'Include SWIFT/IBAN bank details, payment terms, and advance payment conditions directly in the invoice for smooth international wire transfers.',
                    'pts'   => ['SWIFT/IBAN bank details','Custom payment terms','Advance payment tracking']
                ],
            ];
            foreach($features as $f): ?>
            <div class="card" style="padding:2rem; border-left:3px solid var(--primary); display:flex; flex-direction:column;">
                <div style="width:48px; height:48px; background:rgba(12,79,120,0.08); border-radius:10px; display:flex; align-items:center; justify-content:center; margin-bottom:1.25rem; color:var(--primary); flex-shrink:0;">
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="<?= $f['icon'] ?>"/></svg>
                </div>
                <h3 style="font-size:1.15rem; color:var(--primary-dark); margin-bottom:0.75rem;"><?= $f['title'] ?></h3>
                <p style="color:var(--text-muted); font-size:0.93rem; line-height:1.7; margin-bottom:1rem; flex:1;"><?= $f['desc'] ?></p>
                <ul style="list-style:none; padding:0; margin:0;">
                    <?php foreach($f['pts'] as $pt): ?>
                    <li style="display:flex; align-items:center; gap:0.5rem; font-size:0.85rem; color:var(--text-muted); margin-bottom:0.35rem;">
                        <svg width="14" height="14" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <?= $pt ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== FEATURE SPOTLIGHT ========== -->
<section>
    <div class="container">
        <!-- Spotlight 1 -->
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:5rem; align-items:center; margin-bottom:6rem;" class="intro-grid">
            <div>
                <div style="display:inline-block; background:rgba(12,79,120,0.08); color:var(--primary); font-size:0.78rem; font-weight:700; padding:0.3rem 0.85rem; border-radius:50px; margin-bottom:1.25rem; text-transform:uppercase; letter-spacing:1px;">Export Invoicing</div>
                <h2 style="font-size:2.25rem; color:var(--primary-dark); line-height:1.25; margin-bottom:1.25rem;">GST-Compliant Export Invoices in Under 60 Seconds</h2>
                <p style="font-size:1.05rem; line-height:1.8; color:var(--text-muted); margin-bottom:1.5rem;">Select your buyer, add line items with HS codes, and generate a fully compliant commercial invoice ready for customs. ZYLO auto-fills LUT/bond references, calculates duties, and formats everything as per GSTN export standards.</p>
                <p style="font-size:1.05rem; line-height:1.8; color:var(--text-muted); margin-bottom:1.75rem;">Send PDF invoices directly to your international buyers via email, with your SWIFT/IBAN bank details and incoterms automatically included.</p>
                <a href="export-import-business" class="btn btn-primary" style="padding:0.75rem 1.75rem;">Explore Export Tools</a>
            </div>
            <div style="position:relative;">
                <img src="assets/store/section-1.jpg" alt="ZYLO commercial invoice creation for exports" width="560" height="380"
                     style="width:100%; border-radius:20px; box-shadow:var(--shadow-xl); display:block;" loading="lazy">
            </div>
        </div>

        <!-- Spotlight 2 -->
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:5rem; align-items:center;" class="intro-grid">
            <div style="order:2;" class="feature-img-right">
                <div style="position:relative;">
                    <img src="assets/store/section-2.jpg" alt="ZYLO multi-currency commercial invoice dashboard" width="560" height="380"
                         style="width:100%; border-radius:20px; box-shadow:var(--shadow-xl); display:block;" loading="lazy">
                    <div style="position:absolute; bottom:-1rem; right:-1rem; background:white; border-radius:12px; padding:0.9rem 1.1rem; box-shadow:var(--shadow-lg); border:1px solid var(--border-color);">
                        <div style="font-size:0.75rem; color:var(--text-muted); margin-bottom:0.3rem;">Invoice value</div>
                        <div style="font-size:1.1rem; font-weight:800; color:var(--primary-dark);">$12,400 USD <span style="color:#16a34a; font-size:0.82rem; font-weight:600;">↑ Paid ✓</span></div>
                    </div>
                </div>
            </div>
            <div style="order:1;">
                <div style="display:inline-block; background:rgba(12,79,120,0.08); color:var(--primary); font-size:0.78rem; font-weight:700; padding:0.3rem 0.85rem; border-radius:50px; margin-bottom:1.25rem; text-transform:uppercase; letter-spacing:1px;">Multi-Currency</div>
                <h2 style="font-size:2.25rem; color:var(--primary-dark); line-height:1.25; margin-bottom:1.25rem;">Invoice Anyone, Anywhere in Their Currency</h2>
                <p style="font-size:1.05rem; line-height:1.8; color:var(--text-muted); margin-bottom:1.5rem;">Bill clients in USD, EUR, GBP, AED, or any of 150+ global currencies. Live exchange rates update automatically so your INR books always reflect the correct value.</p>
                <div style="display:grid; grid-template-columns:1fr 1fr; gap:0.75rem; margin-bottom:1.75rem;">
                    <?php foreach(['USD · EUR · GBP','AED · SGD · AUD','Live exchange rates','Forex gain/loss','FIRA-ready reports','RBI compliance'] as $r): ?>
                    <div style="display:flex; align-items:center; gap:0.5rem; font-size:0.88rem; color:var(--text-muted);">
                        <svg width="14" height="14" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <?= $r ?>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a href="contact" class="btn btn-outline" style="padding:0.75rem 1.75rem;">See a Demo</a>
            </div>
        </div>
    </div>
</section>

<!-- ========== WHO IT'S FOR ========== -->
<section class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>Who Needs a Commercial Invoice?</h2>
            <p>Any business involved in international trade requires a commercial invoice for customs clearance.</p>
        </div>

        <div style="display:grid; grid-template-columns:repeat(3,1fr); gap:1.75rem; margin-top:3rem;" class="perfect-for-grid">
            <?php
            $personas = [
                [
                    'icon'  => 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4',
                    'title' => 'Exporters & Manufacturers',
                    'desc'  => 'Generate GSTN-compliant export invoices for every shipment. Stay audit-ready with organized records and IGST refund tracking.',
                    'link'  => 'export-import-business',
                    'pts'   => ['LUT/bond invoice support','Port-wise tracking','Shipping bill linkage']
                ],
                [
                    'icon'  => 'M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9',
                    'title' => 'Import/Export Traders',
                    'desc'  => 'Manage both import and export invoices in one place. Track international shipments, manage buyer/supplier relationships, and reconcile payments.',
                    'link'  => 'export-import-business',
                    'pts'   => ['Import & export invoices','Buyer/supplier management','Payment reconciliation']
                ],
                [
                    'icon'  => 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z',
                    'title' => 'Freelancers & Consultants',
                    'desc'  => 'Invoice international clients professionally in their preferred currency. Add service descriptions, tax declarations, and bank details for smooth cross-border payments.',
                    'link'  => 'freelancers-self-employed',
                    'pts'   => ['Foreign currency invoicing','FIRA documentation','Online payment links']
                ],
            ];
            foreach($personas as $p): ?>
            <div class="card" style="padding:2.25rem; display:flex; flex-direction:column;">
                <div style="width:52px; height:52px; background:rgba(12,79,120,0.08); border-radius:12px; display:flex; align-items:center; justify-content:center; margin-bottom:1.25rem; color:var(--primary);">
                    <svg width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="<?= $p['icon'] ?>"/></svg>
                </div>
                <h3 style="font-size:1.2rem; color:var(--primary-dark); margin-bottom:0.75rem;"><?= $p['title'] ?></h3>
                <p style="color:var(--text-muted); font-size:0.93rem; line-height:1.7; margin-bottom:1rem; flex:1;"><?= $p['desc'] ?></p>
                <ul style="list-style:none; padding:0; margin:0 0 1.5rem;">
                    <?php foreach($p['pts'] as $pt): ?>
                    <li style="display:flex; align-items:center; gap:0.5rem; font-size:0.85rem; color:var(--text-muted); margin-bottom:0.35rem;">
                        <svg width="14" height="14" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <?= $pt ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <a href="<?= $p['link'] ?>" style="font-weight:600; font-size:0.9rem; color:var(--primary); display:inline-flex; align-items:center; gap:0.3rem; margin-top:auto;">Learn more &rarr;</a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== TESTIMONIALS ========== -->
<section>
    <div class="container">
        <div class="section-title">
            <h2>What Our Customers Say</h2>
            <p>Real feedback from exporters and international businesses using ZYLO every day.</p>
        </div>

        <div class="grid-3" style="margin-top:3rem;">
            <?php
            $reviews = [
                [
                    'quote' => '"ZYLO made our export invoicing completely seamless. HS codes, LUT references, and GST calculations are all automatic. Customs clearance has never been this smooth."',
                    'name'  => 'David Chen',
                    'role'  => 'Director, GlobalTex Exports · Mumbai',
                    'avatar'=> 'assets/store/avatar-david.svg',
                ],
                [
                    'quote' => '"We invoice clients across 12 countries in different currencies. ZYLO handles all the forex conversions and keeps our INR books accurate. Incredible time saver."',
                    'name'  => 'Sarah Miller',
                    'role'  => 'CFO, TechTrade Solutions · Bengaluru',
                    'avatar'=> 'assets/store/avatar-sarah.svg',
                ],
                [
                    'quote' => '"As a freelance consultant billing international clients, ZYLO\'s commercial invoice with bank wire details and digital signature looks incredibly professional."',
                    'name'  => 'Emily Watson',
                    'role'  => 'Independent Consultant · Delhi',
                    'avatar'=> 'assets/store/avatar-emily.svg',
                ],
            ];
            foreach($reviews as $r): ?>
            <div class="card" style="background:white; display:flex; flex-direction:column;" itemscope itemtype="https://schema.org/Review">
                <div style="display:flex; gap:2px; margin-bottom:1.1rem;" aria-label="5 out of 5 stars">
                    <?php for($i=0;$i<5;$i++): ?>
                    <svg width="15" height="15" fill="#FBBF24" viewBox="0 0 20 20" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    <?php endfor; ?>
                </div>
                <p itemprop="reviewBody" style="font-style:italic; font-size:0.95rem; line-height:1.75; margin-bottom:1.5rem; color:var(--text-main); flex:1;"><?= $r['quote'] ?></p>
                <div style="display:flex; align-items:center; gap:0.85rem; padding-top:1.1rem; border-top:1px solid var(--border-color);" itemscope itemprop="author" itemtype="https://schema.org/Person">
                    <img src="<?= $r['avatar'] ?>" alt="<?= $r['name'] ?>" width="42" height="42"
                         style="width:42px; height:42px; border-radius:50%; object-fit:cover; flex-shrink:0;" loading="lazy">
                    <div>
                        <div style="font-weight:700; font-size:0.9rem; color:var(--text-main);" itemprop="name"><?= $r['name'] ?></div>
                        <div style="font-size:0.8rem; color:var(--text-muted);"><?= $r['role'] ?></div>
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
            <p>Everything you need to know about commercial invoices and ZYLO's export tools.</p>
        </div>

        <div style="margin-top:2.5rem;" itemscope itemtype="https://schema.org/FAQPage">
            <?php
            $faqs = [
                ['q'=>'What is a commercial invoice and when do I need one?',           'a'=>'A commercial invoice is an official document used in international trade. It serves as a contract between buyer and seller, and is required by customs authorities for clearing shipments. It includes item description, quantity, price, country of origin, and HS codes.'],
                ['q'=>'Is ZYLO commercial invoice GST-compliant for Indian exporters?',  'a'=>'Yes. ZYLO generates GST-compliant export invoices including zero-rated supply invoices, LUT/bond declarations, and IGST refund-ready formats as per GSTN guidelines for Indian exporters.'],
                ['q'=>'Can I create commercial invoices in multiple currencies?',         'a'=>'Yes. ZYLO supports 150+ currencies with live exchange rates. Invoice clients in USD, EUR, GBP, AED, or any currency — the system automatically handles forex conversion for your books.'],
                ['q'=>'Does ZYLO support HS codes and customs declarations?',            'a'=>'Yes. ZYLO has a built-in HS code lookup with 5000+ codes. Add customs declarations, country of origin, incoterms, and port of loading details required for international shipments.'],
                ['q'=>'Can I digitally sign commercial invoices in ZYLO?',              'a'=>'Yes. ZYLO supports digital signatures on invoices. Upload your authorized signatory\'s signature image or use a digital certificate for legally valid signed export documents.'],
            ];
            foreach($faqs as $i => $faq): ?>
            <div style="border:1px solid var(--border-color); border-radius:12px; margin-bottom:0.9rem; overflow:hidden;"
                 itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <button onclick="toggleFaq(this)" aria-expanded="<?= $i===0?'true':'false' ?>"
                    style="width:100%; text-align:left; background:white; border:none; padding:1.25rem 1.5rem; font-size:0.97rem; font-weight:600; color:var(--primary-dark); cursor:pointer; display:flex; justify-content:space-between; align-items:center; gap:1rem;">
                    <span itemprop="name"><?= $faq['q'] ?></span>
                    <svg class="faq-icon" width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"
                         style="flex-shrink:0; transition:transform 0.3s; <?= $i===0?'transform:rotate(180deg)':'' ?>">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="faq-body" style="display:<?= $i===0?'block':'none' ?>; padding:0 1.5rem 1.25rem; background:white;"
                     itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <p itemprop="text" style="color:var(--text-muted); margin:0; font-size:0.95rem; line-height:1.7;"><?= $faq['a'] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== CTA ========== -->
<section style="text-align:center; padding:6rem 0; background:linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%); color:white;">
    <div class="container">
        <h2 style="font-size:2.75rem; margin-bottom:1.5rem; color:white;">Start Creating Commercial Invoices Today</h2>
        <p style="max-width:560px; margin:0 auto 2rem; font-size:1.1rem; opacity:0.95; color:white;">Join 500+ exporters using ZYLO to create professional, GST-compliant commercial invoices in seconds. Free plan available.</p>

        <div style="display:flex; gap:1rem; flex-wrap:wrap; justify-content:center;">
            <a href="contact" style="display:inline-block; background:white; color:var(--primary); padding:1rem 2.5rem; border-radius:10px; font-weight:700; font-size:1.1rem; text-decoration:none; transition:opacity 0.2s;">Get Started Free</a>
            <a href="https://wa.me/917501137266" target="_blank" rel="noopener noreferrer"
               style="display:inline-block; background:rgba(255,255,255,0.15); border:2px solid rgba(255,255,255,0.6); color:white; padding:0.8rem 2.5rem; border-radius:10px; font-weight:700; font-size:1.1rem; text-decoration:none; transition:background 0.2s;">
               Chat on WhatsApp
            </a>
        </div>

        <p style="margin-top:1.5rem; font-size:0.9rem; opacity:0.8; color:white;">No credit card required &nbsp;·&nbsp; Instant access &nbsp;·&nbsp; Cancel anytime</p>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

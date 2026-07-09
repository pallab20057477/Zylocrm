<?php
$pageTitle = "Free Proforma Invoice Creator — Create Proforma Invoice Online";
$pageDescription = "Create professional proforma invoices online for free with ZYLO. Add logo, itemised pricing, advance amount, and delivery terms — download as PDF or share via WhatsApp instantly.";
$pageKeywords = "proforma invoice creator, create proforma invoice online free, proforma invoice generator India, free proforma invoice maker, proforma invoice format India, proforma invoice template free download, online proforma invoice creator";
$canonicalPath = '/creator-proforma-invoice';

// Page image used for Open Graph / social previews
$pageImage = 'https://zylocrm.com/assets/store/section-1.jpg';

// Primary software application schema
$softwareSchema = [
    '@context' => 'https://schema.org',
    '@type'    => 'SoftwareApplication',
    'name'     => 'ZYLO Proforma Invoice Creator',
    'url'      => 'https://zylocrm.com/creator-proforma-invoice',
    'description' => 'Free online proforma invoice creator for Indian businesses. Create professional proforma invoices with logo, itemised pricing, advance amounts, and delivery terms. Download as PDF or share instantly.',
    'applicationCategory' => 'BusinessApplication',
    'operatingSystem' => 'Web, Android, iOS',
    'provider' => ['@type'=>'Organization','name'=>'ZYLO CRM','url'=>'https://zylocrm.com'],
    'offers'   => ['@type'=>'Offer','priceCurrency'=>'INR','price'=>'0','pricingModel'=>'Freemium'],
    'aggregateRating' => ['@type'=>'AggregateRating','ratingValue'=>'4.9','reviewCount'=>'892','bestRating'=>'5'],
    'featureList' => [
        'Free proforma invoice creation online',
        'Add logo and business branding',
        'Itemised line items with quantity and rate',
        'Advance payment and balance amount',
        'Delivery date and terms',
        'PDF download and WhatsApp sharing',
        'Convert proforma to tax invoice',
        'GST and tax support'
    ]
];

// Breadcrumbs for improved search appearance
$breadcrumb = [
    '@context' => 'https://schema.org',
    '@type'    => 'BreadcrumbList',
    'itemListElement' => [
        ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://zylocrm.com/'],
        ['@type'=>'ListItem','position'=>2,'name'=>'Free Tools','item'=>'https://zylocrm.com/creator-proforma-invoice'],
        ['@type'=>'ListItem','position'=>3,'name'=>'Proforma Invoice Creator','item'=>'https://zylocrm.com/creator-proforma-invoice']
    ]
];

// Combine schema objects so header prints them in a single JSON-LD block
$pageSchema = [$softwareSchema, $breadcrumb];

$faqSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        ['@type'=>'Question','name'=>'What is a proforma invoice?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'A proforma invoice is a preliminary bill of sale sent to a buyer before delivery of goods or services. It states the price, quantity, and terms but is not a demand for payment. It\'s used to help buyers arrange financing, import approvals, or advance payments before the actual tax invoice is raised.']],
        ['@type'=>'Question','name'=>'Is ZYLO Proforma Invoice Creator free?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes. ZYLO\'s Proforma Invoice Creator is free for up to 20 proforma invoices per month. The free plan includes PDF download, GST support, WhatsApp sharing, and branding. The Pro plan (₹3,999/month) adds unlimited proformas, one-click conversion to tax invoice, and full invoicing features.']],
        ['@type'=>'Question','name'=>'What is the difference between a proforma invoice and a tax invoice?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'A proforma invoice is issued before delivery — it\'s a price estimate, not a legal demand for payment, and GST is not yet due. A tax invoice is issued after delivery — it is a legal document, GST is applicable and must be paid. ZYLO lets you convert a proforma invoice into a tax invoice in one click once goods are delivered.']],
        ['@type'=>'Question','name'=>'Can I add advance amount to a proforma invoice?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes. ZYLO\'s proforma invoice creator lets you show the total amount, specify the advance payment required, and calculate the balance due on delivery — all clearly displayed in the document.']],
        ['@type'=>'Question','name'=>'Can I convert a proforma invoice to a tax invoice?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes. Once goods are delivered or services completed, convert the proforma invoice to a GST-compliant tax invoice in one click. All details carry over automatically — no re-entry needed. Available on the Pro plan.']]
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
                    Free Proforma Invoice Creator — Generate Proforma Bills Online
                </h1>
                <p style="font-size:1.18rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.9rem;">
                    Create professional proforma invoices with logo, itemised pricing, advance payment, and delivery terms — download as PDF or share via WhatsApp instantly. Convert to a tax invoice in one click when goods are delivered.
                </p>
                <div style="display:flex;flex-wrap:wrap;gap:0.55rem;margin-bottom:2rem;">
                    <?php foreach(['Free to Use','Add Logo','GST Support','Advance Amount','PDF Download','To Tax Invoice'] as $p): ?>
                    <span style="background:white;border:1px solid var(--border-color);color:var(--text-main);font-size:0.82rem;font-weight:600;padding:0.35rem 0.9rem;border-radius:50px;box-shadow:var(--shadow-sm);">✓ &nbsp;<?= $p ?></span>
                    <?php endforeach; ?>
                </div>
                <div style="display:flex;gap:1rem;flex-wrap:wrap;">
                    <a href="contact" class="btn btn-primary" style="padding:0.9rem 2rem;font-size:1rem;">Create Proforma Free</a>
                    <a href="invoicing-software" class="btn btn-outline" style="padding:0.9rem 2rem;font-size:1rem;">Full Invoicing Software</a>
                </div>
                <p style="margin-top:1.5rem;font-size:0.85rem;color:var(--text-muted);margin-bottom:0;">⭐ 4.9/5 from 892 reviews &nbsp;·&nbsp; Used by 10,000+ businesses</p>
            </div>
            <div style="position:relative;">
                <img src="assets/store/section-1.jpg"
                     alt="ZYLO proforma invoice creator showing a professional proforma with advance payment and delivery terms"
                     width="580" height="400"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" fetchpriority="high">
                <div style="position:absolute;top:-1rem;left:-1.25rem;background:white;border-radius:14px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.7rem;">
                    <span style="width:36px;height:36px;background:#dcfce7;border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="17" height="17" fill="none" stroke="#16a34a" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.75rem;color:var(--text-muted);">Proforma ready</div>
                        <div style="font-size:0.88rem;font-weight:700;color:#16a34a;">PDF + WhatsApp in 60s ✓</div>
                    </div>
                </div>
                <div style="position:absolute;bottom:-1.25rem;right:-1rem;background:white;border-radius:14px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.7rem;">
                    <span style="width:36px;height:36px;background:rgba(12,79,120,0.08);border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="17" height="17" fill="none" stroke="var(--primary)" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.75rem;color:var(--text-muted);">Advance received</div>
                        <div style="font-size:0.88rem;font-weight:700;color:var(--text-main);">₹45,000 of ₹1,50,000</div>
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
                ['val'=>'< 60s',  'label'=>'To Create a Proforma Invoice'],
                ['val'=>'Free',   'label'=>'Up to 20 Proformas/Month'],
                ['val'=>'892+',   'label'=>'5-Star Reviews'],
                ['val'=>'10,000+','label'=>'Businesses Use ZYLO'],
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

<!-- ========== WHAT IS PROFORMA ========== -->
<section>
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:center;" class="intro-grid">
            <div>
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.78rem;font-weight:700;padding:0.3rem 0.85rem;border-radius:50px;margin-bottom:1.25rem;text-transform:uppercase;letter-spacing:1px;">Proforma vs Tax Invoice</div>
                <h2 style="font-size:2.2rem;color:var(--primary-dark);line-height:1.25;margin-bottom:1.25rem;">What Is a Proforma Invoice &amp; When Should You Use It?</h2>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.5rem;">A proforma invoice is a <strong>preliminary bill</strong> sent before goods are delivered or services completed. It gives the buyer an exact picture of what they'll be charged — helping them arrange financing, get import approvals, or pay an advance — without triggering a GST liability yet.</p>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.75rem;">Once the order is fulfilled, ZYLO lets you convert the proforma into a proper GST tax invoice in one click — so there's no re-entry of data and no delay in billing.</p>
                <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;margin-bottom:1.75rem;">
                    <div style="background:var(--bg-offwhite);border:1px solid var(--border-color);border-radius:14px;padding:1.25rem;">
                        <div style="font-size:0.8rem;font-weight:700;color:var(--primary);text-transform:uppercase;letter-spacing:1px;margin-bottom:0.75rem;">📋 Proforma Invoice</div>
                        <?php foreach(['Sent before delivery','No GST liability yet','Used for advance payment','Import/export clearance','Buyer arranges finance'] as $p): ?>
                        <div style="display:flex;align-items:center;gap:0.5rem;font-size:0.82rem;color:var(--text-muted);margin-bottom:0.35rem;">
                            <svg width="12" height="12" fill="none" stroke="var(--primary)" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg><?= $p ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div style="background:var(--bg-offwhite);border:1px solid var(--border-color);border-radius:14px;padding:1.25rem;">
                        <div style="font-size:0.8rem;font-weight:700;color:#16a34a;text-transform:uppercase;letter-spacing:1px;margin-bottom:0.75rem;">🧾 Tax Invoice</div>
                        <?php foreach(['Sent after delivery','GST is due & payable','Legal payment demand','Must match delivery','Buyer can claim ITC'] as $p): ?>
                        <div style="display:flex;align-items:center;gap:0.5rem;font-size:0.82rem;color:var(--text-muted);margin-bottom:0.35rem;">
                            <svg width="12" height="12" fill="none" stroke="#16a34a" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg><?= $p ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <a href="contact" class="btn btn-primary" style="padding:0.75rem 1.75rem;">Create Proforma Invoice Free</a>
            </div>
            <div style="position:relative;">
                <img src="assets/store/section-2.jpg"
                     alt="ZYLO proforma invoice format showing advance amount delivery terms and one-click conversion to tax invoice"
                     width="560" height="380"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" loading="lazy">
                <div style="position:absolute;bottom:-1rem;right:-1rem;background:white;border-radius:12px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);">
                    <div style="font-size:0.75rem;color:var(--text-muted);margin-bottom:0.2rem;">Proforma → Tax Invoice</div>
                    <div style="font-size:0.9rem;font-weight:700;color:var(--text-main);">1-click conversion ✓</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== HOW TO CREATE ========== -->
<section class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>How to Create a Proforma Invoice in 4 Steps</h2>
            <p>No templates to format. No Excel. Just fill in and download in under 60 seconds.</p>
        </div>
        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1.5rem;margin-top:3rem;position:relative;" class="steps-grid">
            <div style="position:absolute;top:36px;left:calc(12.5% + 1rem);right:calc(12.5% + 1rem);height:2px;background:linear-gradient(90deg,var(--primary) 0%,var(--primary-light) 100%);z-index:0;" class="steps-connector" aria-hidden="true"></div>
            <?php
            $steps = [
                ['n'=>'1','icon'=>'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5',
                 'title'=>'Your Business Details','desc'=>'Add your name, GSTIN, address, and logo. Saved once — used on every future proforma.'],
                ['n'=>'2','icon'=>'M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z',
                 'title'=>'Buyer Details','desc'=>'Enter buyer name, address, and GSTIN. ZYLO auto-detects supply type for GST.'],
                ['n'=>'3','icon'=>'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3',
                 'title'=>'Add Items & Terms','desc'=>'List goods or services, set rates, add GST/taxes, advance %, and delivery date.'],
                ['n'=>'4','icon'=>'M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4',
                 'title'=>'Download or Share','desc'=>'Download PDF or WhatsApp to buyer instantly. Convert to tax invoice when goods ship.'],
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

<!-- ========== WHAT GOES IN A PROFORMA ========== -->
<section>
    <div class="container">
        <div class="section-title">
            <h2>What a Proforma Invoice Must Include</h2>
            <p>ZYLO fills in every required field automatically — nothing to forget.</p>
        </div>
        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1.25rem;margin-top:3rem;" class="who-grid">
            <?php
            $fields = [
                ['icon'=>'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5','label'=>'Seller Name & GSTIN',   'desc'=>'Your legal business name, GSTIN, and address'],
                ['icon'=>'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z',  'label'=>'Buyer Details',          'desc'=>'Buyer name, GSTIN, billing & shipping address'],
                ['icon'=>'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z','label'=>'Proforma Number & Date','desc'=>'Unique reference number and issue date'],
                ['icon'=>'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3','label'=>'Line Items & HSN/SAC',  'desc'=>'Itemised goods/services with qty, rate, HSN codes'],
                ['icon'=>'M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2z','label'=>'GST / Tax Breakdown',  'desc'=>'CGST, SGST or IGST clearly separated per item'],
                ['icon'=>'M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z','label'=>'Advance & Balance',      'desc'=>'Advance amount required and balance due on delivery'],
                ['icon'=>'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z','label'=>'Delivery Date & Terms',  'desc'=>'Expected delivery date and dispatch conditions'],
                ['icon'=>'M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z','label'=>'Terms & Conditions',    'desc'=>'Payment terms, cancellation, and warranty notes'],
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
            <h2>Everything in ZYLO's Free Proforma Invoice Creator</h2>
            <p>More than a blank format — a smart proforma tool built for Indian businesses.</p>
        </div>
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.75rem;margin-top:3rem;" class="features-grid">
            <?php
            $features = [
                ['icon'=>'M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z',
                 'title'=>'Professional Templates','desc'=>'Choose from clean, professional proforma invoice templates. Add your logo and brand — every proforma looks polished and builds buyer confidence.',
                 'pts'=>['Multiple design templates','Logo & brand colours','Professional PDF output']],
                ['icon'=>'M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2z',
                 'title'=>'GST & Tax Support','desc'=>'Apply CGST, SGST, IGST, or custom taxes per line item. Auto-calculated based on supply type — no manual percentage working needed.',
                 'pts'=>['CGST/SGST/IGST auto','HSN/SAC code support','Zero manual tax calc']],
                ['icon'=>'M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z',
                 'title'=>'Advance & Balance Amount','desc'=>'Show total, advance required, and balance due on delivery — clearly calculated and displayed. Buyers know exactly what to pay and when.',
                 'pts'=>['Advance % or flat amount','Balance due on delivery','Clear payment schedule']],
                ['icon'=>'M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4',
                 'title'=>'PDF Download & WhatsApp Share','desc'=>'Download a print-ready PDF instantly. Share via WhatsApp, email, or a direct link to the buyer in one click.',
                 'pts'=>['Instant PDF generation','1-click WhatsApp share','Email delivery']],
                ['icon'=>'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2',
                 'title'=>'1-Click to Tax Invoice','desc'=>'When goods are delivered, convert the proforma to a GST-compliant tax invoice in one click. All items, taxes, and client details carry over — zero re-entry.',
                 'pts'=>['All data auto-transferred','GST invoice generated','Zero re-entry needed']],
                ['icon'=>'M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4',
                 'title'=>'Multi-Currency Support','desc'=>'Send proforma invoices in INR, USD, EUR, or 150+ currencies. Ideal for exporters and businesses with international buyers.',
                 'pts'=>['150+ currencies','Export proforma support','Professional forex display']],
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

<!-- ========== WHEN TO USE ========== -->
<section>
    <div class="container">
        <div class="section-title">
            <h2>When Do You Need a Proforma Invoice?</h2>
            <p>Proforma invoices are used in many common business situations across India.</p>
        </div>
        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1.25rem;margin-top:3rem;" class="who-grid">
            <?php
            $useCases = [
                ['icon'=>'M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z',
                 'label'=>'Advance Payment Request','desc'=>'Collect 30–50% advance before starting work or dispatching goods.','color'=>'#dbeafe'],
                ['icon'=>'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064',
                 'label'=>'Export & Import Clearance','desc'=>'Required by customs for import permits and LC documentation.','color'=>'#dcfce7'],
                ['icon'=>'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5',
                 'label'=>'Purchase Order Response','desc'=>'Confirm order acceptance with pricing before production begins.','color'=>'#fef9c3'],
                ['icon'=>'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253',
                 'label'=>'Client Budget Approval','desc'=>'Help the buyer get internal budget approval before committing.','color'=>'#ede9fe'],
                ['icon'=>'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
                 'label'=>'Tender / Bid Response','desc'=>'Submit a proforma as part of a formal tender or RFQ response.','color'=>'#fee2e2'],
                ['icon'=>'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15',
                 'label'=>'Recurring Supply Agreement','desc'=>'Set recurring supply terms before each monthly delivery.','color'=>'#e0f2fe'],
                ['icon'=>'M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                 'label'=>'New Client Onboarding','desc'=>'Give new buyers a detailed price proposal before work starts.','color'=>'#f0fdf4'],
                ['icon'=>'M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0 M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1',
                 'label'=>'Transport & Logistics','desc'=>'Sent with consignment to describe goods for transit documentation.','color'=>'#fef3c7'],
            ];
            foreach($useCases as $uc): ?>
            <div style="background:<?= $uc['color'] ?>;border:1px solid rgba(0,0,0,0.06);border-radius:14px;padding:1.25rem;display:flex;flex-direction:column;gap:0.6rem;">
                <span style="width:38px;height:38px;background:white;border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;box-shadow:var(--shadow-sm);">
                    <svg width="18" height="18" fill="none" stroke="var(--primary)" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="<?= $uc['icon'] ?>"/></svg>
                </span>
                <div style="font-size:0.9rem;font-weight:700;color:var(--primary-dark);"><?= $uc['label'] ?></div>
                <div style="font-size:0.8rem;color:var(--text-muted);"><?= $uc['desc'] ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== WHO IT'S FOR ========== -->
<section class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>Who Uses Proforma Invoices Most?</h2>
            <p>From exporters to service providers — ZYLO's proforma creator works for every business.</p>
        </div>
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.75rem;margin-top:3rem;" class="perfect-for-grid">
            <?php
            $personas = [
                ['icon'=>'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064',
                 'title'=>'Exporters & Importers',
                 'desc' =>'Create customs-ready proforma invoices for import/export clearance, Letter of Credit (LC), and bank documentation — in any currency, with all required fields.',
                 'link' =>'export-import-business',
                 'pts'  =>['Export proforma format','Multi-currency support','Customs & LC ready']],
                ['icon'=>'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5',
                 'title'=>'Manufacturers & Traders',
                 'desc' =>'Send proforma invoices with production timelines, advance requirements, and delivery terms before accepting a purchase order — so terms are clear from the start.',
                 'link' =>'smbs',
                 'pts'  =>['Advance payment terms','Delivery date field','Convert to tax invoice']],
                ['icon'=>'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z',
                 'title'=>'Freelancers & Consultants',
                 'desc' =>'Collect advance payments professionally before starting a project. Send a proforma, receive the advance, then convert to a proper GST invoice on completion.',
                 'link' =>'freelancers-self-employed',
                 'pts'  =>['Advance collection','Project-based billing','GST invoice on completion']],
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

<!-- ========== FREE VS PRO ========== -->
<section>
    <div class="container">
        <div class="section-title">
            <h2>Free Proforma Creator vs Full Invoicing Software</h2>
            <p>Start free. Upgrade when you need full billing automation.</p>
        </div>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:1.75rem;margin-top:3rem;max-width:800px;margin-left:auto;margin-right:auto;padding-top:1.5rem;" class="perfect-for-grid">
            <div style="background:white;border:1px solid var(--border-color);border-radius:18px;padding:2.25rem;display:flex;flex-direction:column;">
                <div style="font-size:0.85rem;font-weight:700;color:var(--text-muted);text-transform:uppercase;letter-spacing:1px;margin-bottom:0.75rem;">Free Plan</div>
                <div style="font-size:2.5rem;font-weight:800;color:var(--primary-dark);line-height:1;margin-bottom:0.3rem;">₹0</div>
                <div style="font-size:0.85rem;color:var(--text-muted);margin-bottom:1.75rem;">forever free</div>
                <ul style="list-style:none;padding:0;margin:0 0 2rem;flex:1;">
                    <?php foreach(['Up to 20 proformas/month','GST & tax calculation','Advance & balance fields','Delivery date & terms','Logo & branding','PDF download','WhatsApp & email share','Multi-currency'] as $pt): ?>
                    <li style="display:flex;align-items:center;gap:0.5rem;font-size:0.88rem;color:var(--text-muted);margin-bottom:0.6rem;">
                        <svg width="14" height="14" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg><?= $pt ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <a href="contact" class="btn btn-outline" style="width:100%;text-align:center;">Start Free</a>
            </div>
            <div style="background:white;border:2px solid var(--primary);border-radius:18px;padding:2.25rem;display:flex;flex-direction:column;box-shadow:var(--shadow-lg);position:relative;overflow:visible;">
                <div style="position:absolute;top:0;left:50%;transform:translate(-50%,-50%);background:var(--primary);color:white;font-size:0.7rem;font-weight:700;padding:0.3rem 1rem;border-radius:50px;text-transform:uppercase;letter-spacing:1px;white-space:nowrap;box-shadow:0 4px 12px rgba(12,79,120,0.3);">Most Popular</div>
                <div style="font-size:0.85rem;font-weight:700;color:var(--primary);text-transform:uppercase;letter-spacing:1px;margin-bottom:0.75rem;">Pro Plan</div>
                <div style="font-size:2.5rem;font-weight:800;color:var(--primary-dark);line-height:1;margin-bottom:0.3rem;">₹3,999</div>
                <div style="font-size:0.85rem;color:var(--text-muted);margin-bottom:1.75rem;">per month</div>
                <ul style="list-style:none;padding:0;margin:0 0 2rem;flex:1;">
                    <?php foreach(['Everything in Free','Unlimited proforma invoices','1-click convert to GST invoice','GST e-Invoice with IRN','GSTR-1 & GSTR-3B reports','Payment links on invoices','Advance payment tracking','Automated reminders','Priority support'] as $pt): ?>
                    <li style="display:flex;align-items:center;gap:0.5rem;font-size:0.88rem;color:var(--text-muted);margin-bottom:0.6rem;">
                        <svg width="14" height="14" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg><?= $pt ?>
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
            <h2>What Our Customers Say</h2>
            <p>Used by exporters, manufacturers, and freelancers across India every day.</p>
        </div>
        <div class="grid-3" style="margin-top:3rem;">
            <?php
            $reviews = [
                ['quote'=>'"We export handicrafts and every shipment needs a proforma for customs. ZYLO creates one in 60 seconds — with all the required fields, in USD or EUR, with our logo. Our freight forwarder loves the format."',
                 'name'=>'Suresh Patel','role'=>'Export Manager, Artisan Exports · Jaipur','img'=>'assets/store/avatar-david.svg'],
                ['quote'=>'"I used to email Word doc proformas and then manually re-create the invoice after delivery. ZYLO\'s 1-click proforma to invoice conversion saves me 45 minutes per order. Over 30 orders a month — that\'s huge."',
                 'name'=>'Anita Sharma','role'=>'Owner, Sharma Traders · Pune','img'=>'assets/store/avatar-sarah.svg'],
                ['quote'=>'"As a freelance designer I always collect 50% advance. Sending a professional proforma invoice instead of a casual message changed everything. Clients take it seriously and pay faster."',
                 'name'=>'Emily Watson','role'=>'Freelance Designer · Delhi','img'=>'assets/store/avatar-emily.svg'],
            ];
            foreach($reviews as $r): ?>
            <div class="card" style="background:white;display:flex;flex-direction:column;" itemscope itemtype="https://schema.org/Review">
                <div style="display:flex;gap:2px;margin-bottom:1.1rem;" aria-label="5 out of 5 stars">
                    <?php for($i=0;$i<5;$i++): ?><svg width="15" height="15" fill="#FBBF24" viewBox="0 0 20 20" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><?php endfor; ?>
                </div>
                <p itemprop="reviewBody" style="font-style:italic;font-size:0.95rem;line-height:1.75;margin-bottom:1.5rem;color:var(--text-main);flex:1;"><?= $r['quote'] ?></p>
                <div style="display:flex;align-items:center;gap:0.85rem;padding-top:1.1rem;border-top:1px solid var(--border-color);" itemscope itemprop="author" itemtype="https://schema.org/Person">
                    <img src="<?= $r['img'] ?>" alt="<?= $r['name'] ?>" width="42" height="42" style="width:42px;height:42px;border-radius:50%;object-fit:cover;flex-shrink:0;" loading="lazy">
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
            <p>Everything about ZYLO's free Proforma Invoice Creator.</p>
        </div>
        <div style="margin-top:2.5rem;" itemscope itemtype="https://schema.org/FAQPage">
            <?php
            $faqs = [
                ['q'=>'What is a proforma invoice?','a'=>'A proforma invoice is a preliminary bill sent before delivery of goods or services. It shows the price, quantity, and terms but is not a legal demand for payment and does not trigger GST liability. It helps buyers arrange finance, get import approvals, or pay an advance.'],
                ['q'=>'Is ZYLO Proforma Invoice Creator free?','a'=>'Yes. Up to 20 proforma invoices per month are free — with GST support, advance/balance fields, PDF download, and WhatsApp sharing. The Pro plan (₹3,999/month) adds unlimited proformas and 1-click conversion to GST tax invoice.'],
                ['q'=>'What is the difference between a proforma invoice and a tax invoice?','a'=>'A proforma invoice is issued before delivery — GST is not yet due. A tax invoice is issued after delivery — GST is due and must be paid. ZYLO lets you convert a proforma to a tax invoice in one click once goods are delivered.'],
                ['q'=>'Can I add advance amount to a proforma invoice?','a'=>'Yes. ZYLO shows the total amount, the advance payment required, and the balance due on delivery — all clearly calculated and displayed in the proforma.'],
                ['q'=>'Can I convert a proforma invoice to a tax invoice?','a'=>'Yes. Convert the proforma to a GST-compliant tax invoice in one click after delivery — all items, taxes, and client details carry over automatically. Available on the Pro plan.'],
            ];
            foreach($faqs as $i=>$faq): ?>
            <div style="border:1px solid var(--border-color);border-radius:12px;margin-bottom:0.9rem;overflow:hidden;" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <button onclick="toggleFaq(this)" aria-expanded="<?= $i===0?'true':'false' ?>"
                    style="width:100%;text-align:left;background:white;border:none;padding:1.2rem 1.5rem;font-size:0.97rem;font-weight:600;color:var(--primary-dark);cursor:pointer;display:flex;justify-content:space-between;align-items:center;gap:1rem;">
                    <span itemprop="name"><?= $faq['q'] ?></span>
                    <svg class="faq-icon" width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true" style="flex-shrink:0;transition:transform 0.3s;<?= $i===0?'transform:rotate(180deg)':'' ?>">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="faq-body" style="<?= $i===0?'':'display:none;' ?>padding:0 1.5rem 1.25rem;background:white;" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
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
            <p>Everything you need to run your business billing — free to start.</p>
        </div>
        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1.25rem;margin-top:3rem;" class="who-grid">
            <?php
            $tools = [
                ['icon'=>'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z','label'=>'Invoice Generator',  'href'=>'invoice-generator',      'desc'=>'Create professional invoices'],
                ['icon'=>'M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2z','label'=>'GST Invoice Maker',  'href'=>'gst-invoice-maker',      'desc'=>'GSTN-compliant tax invoices'],
                ['icon'=>'M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z','label'=>'Quotation Generator','href'=>'quotation-generator',    'desc'=>'Send professional quotes'],
                ['icon'=>'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064','label'=>'Commercial Invoice',  'href'=>'commercial-invoice',     'desc'=>'For export & trade'],
                ['icon'=>'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z','label'=>'Purchase Order',    'href'=>'create-purchase-order',  'desc'=>'Create POs for suppliers'],
                ['icon'=>'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4','label'=>'Delivery Challan',   'href'=>'create-delivery-challan','desc'=>'Track goods movement'],
                ['icon'=>'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15','label'=>'Consulting Invoice',  'href'=>'consulting-invoice',     'desc'=>'For service providers'],
                ['icon'=>'M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z','label'=>'Invoice Formats',    'href'=>'invoice-formats',        'desc'=>'Download ready templates'],
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
        <h2 style="font-size:2.5rem;color:white;margin-bottom:1.25rem;line-height:1.2;">Create Your Proforma Invoice Free — Right Now</h2>
        <p style="font-size:1.1rem;color:rgba(255,255,255,0.85);margin-bottom:2.5rem;line-height:1.7;">No credit card. No complex setup. Join 10,000+ Indian businesses already using ZYLO proforma invoices.</p>
        <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
            <a href="contact" class="btn" style="padding:1rem 2.25rem;font-size:1.05rem;background:white;color:var(--primary);border-radius:10px;font-weight:700;">Create Proforma Free</a>
            <a href="https://wa.me/917501137266?text=Hi%2C%20I%20want%20to%20create%20a%20proforma%20invoice%20using%20ZYLO" target="_blank" rel="noopener noreferrer"
               class="btn" style="padding:1rem 2.25rem;font-size:1.05rem;background:#25d366;color:white;border-radius:10px;font-weight:600;border:none;">💬 Chat on WhatsApp</a>
        </div>
        <p style="color:rgba(255,255,255,0.5);font-size:0.82rem;margin-top:1.5rem;margin-bottom:0;">Free · No credit card · 20 proformas/month free forever</p>
    </div>
</section>

<script>
function toggleFaq(btn) {
    var body=btn.nextElementSibling,icon=btn.querySelector('.faq-icon'),expanded=btn.getAttribute('aria-expanded')==='true';
    document.querySelectorAll('.faq-body').forEach(function(el){el.style.display='none';});
    document.querySelectorAll('[onclick="toggleFaq(this)"]').forEach(function(el){el.setAttribute('aria-expanded','false');el.querySelector('.faq-icon').style.transform='';});
    if(!expanded){body.style.display='block';btn.setAttribute('aria-expanded','true');icon.style.transform='rotate(180deg)';}
}
</script>

<style>
@media(max-width:768px){
    .stats-bar-grid{grid-template-columns:1fr 1fr !important;}
    .features-grid{grid-template-columns:1fr !important;}
    .steps-grid{grid-template-columns:1fr 1fr !important;}
    .steps-connector{display:none !important;}
    .who-grid{grid-template-columns:1fr 1fr !important;}
    .perfect-for-grid{grid-template-columns:1fr !important;}
}
@media(max-width:480px){
    .steps-grid{grid-template-columns:1fr !important;}
    .who-grid{grid-template-columns:1fr 1fr !important;}
}
</style>

<?php include 'includes/footer.php'; ?>

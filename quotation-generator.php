<?php
$pageTitle = "Free Quotation Generator – Create & Send Professional Quotes Online | ZYLO CRM";
$pageDescription = "Generate professional quotations online for free with ZYLO. Add logo, itemised pricing, GST, and terms — download as PDF or send via WhatsApp in under 60 seconds. No signup required.";
$pageKeywords = "free quotation generator, quotation generator online India, create quotation online free, quote generator free, online quotation maker India, business quotation generator, estimate generator free, price quotation generator";
$canonicalPath = '/quotation-generator';

$pageSchema = [
    '@context' => 'https://schema.org',
    '@type'    => 'SoftwareApplication',
    'name'     => 'ZYLO Free Quotation Generator',
    'url'      => 'https://zylocrm.com/quotation-generator',
    'description' => 'Free online quotation generator for Indian businesses. Create professional price quotes with logo, itemised pricing, GST, and terms. Download as PDF or share via WhatsApp instantly.',
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
        'description'   => 'Free quotation generator. Pro plan from ₹3,999/month.',
        'pricingModel'  => 'Freemium'
    ],
    'aggregateRating' => [
        '@type'       => 'AggregateRating',
        'ratingValue' => '4.9',
        'reviewCount' => '1562',
        'bestRating'  => '5'
    ],
    'featureList' => [
        'Free professional quotation generation',
        'Add logo and business branding',
        'Itemised line items with quantity and rate',
        'GST and discount support',
        'PDF download and WhatsApp sharing',
        'Expiry date and payment terms',
        'Convert quote to invoice in one click',
        'Multiple quotation templates'
    ]
];

$faqSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name'  => 'How do I create a quotation online for free?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'With ZYLO\'s free Quotation Generator: 1) Enter your business name and details, 2) Add your client\'s name and address, 3) Add line items with description, quantity, and rate, 4) Apply GST or discounts if needed, 5) Set expiry date and payment terms, 6) Download as PDF or share via WhatsApp. The whole process takes under 60 seconds.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Is ZYLO Quotation Generator really free?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. ZYLO\'s Quotation Generator is free for up to 20 quotations per month. The free plan includes PDF download, GST calculation, WhatsApp sharing, and branding. The Pro plan (₹3,999/month) adds unlimited quotes, quote tracking, e-signatures, and one-click quote-to-invoice conversion.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'What is the difference between a quotation and an invoice?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'A quotation (or quote) is a document sent before work begins — it states the price you\'re offering for goods or services and invites the client to approve it. An invoice is sent after work is done or goods are delivered — it requests payment. In ZYLO, you can convert an approved quotation into an invoice with one click.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can I add GST to my quotation?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. ZYLO supports GST, CGST, SGST, IGST, and other taxes on quotations. You can apply different GST rates per line item — the totals are calculated automatically. This makes it easy to send accurate, professional quotes to both GST-registered and unregistered buyers.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can I convert a quotation to an invoice?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. Once a client approves your quotation, ZYLO lets you convert it to a GST-compliant invoice in one click — all line items, pricing, taxes, and client details carry over automatically with zero re-entry. Available on the Pro plan.']
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
                    100% Free · No Signup Required
                </div>

                <h1 style="font-size:3.2rem;color:var(--primary-dark);line-height:1.12;margin-bottom:1.4rem;">
                    Free Quotation Generator — Create Professional Quotes in 60 Seconds
                </h1>
                <p style="font-size:1.18rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.9rem;">
                    Add your logo, client details, items, and pricing — ZYLO generates a polished quote PDF you can download or share on WhatsApp instantly. GST-ready, fully customisable, and completely free.
                </p>

                <div style="display:flex;flex-wrap:wrap;gap:0.55rem;margin-bottom:2rem;">
                    <?php foreach(['Free to Use','Add Your Logo','GST Support','PDF Download','WhatsApp Share','Quote to Invoice'] as $p): ?>
                    <span style="background:white;border:1px solid var(--border-color);color:var(--text-main);font-size:0.82rem;font-weight:600;padding:0.35rem 0.9rem;border-radius:50px;box-shadow:var(--shadow-sm);">✓ &nbsp;<?= $p ?></span>
                    <?php endforeach; ?>
                </div>

                <div style="display:flex;gap:1rem;flex-wrap:wrap;">
                    <a href="contact" class="btn btn-primary" style="padding:0.9rem 2rem;font-size:1rem;">Generate Quote Free</a>
                    <a href="quotation-software" class="btn btn-outline" style="padding:0.9rem 2rem;font-size:1rem;">Explore Full Software</a>
                </div>
                <p style="margin-top:1.5rem;font-size:0.85rem;color:var(--text-muted);margin-bottom:0;">
                    ⭐ 4.9/5 from 1,562 reviews &nbsp;·&nbsp; Used by 10,000+ businesses
                </p>
            </div>

            <div style="position:relative;">
                <img src="assets/store/section-1.jpg"
                     alt="ZYLO free quotation generator showing a professional quote with logo itemised pricing and GST"
                     width="580" height="400"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;"
                     fetchpriority="high">

                <!-- Floating: Quote ready -->
                <div style="position:absolute;top:-1rem;left:-1.25rem;background:white;border-radius:14px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.7rem;">
                    <span style="width:36px;height:36px;background:#dcfce7;border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="17" height="17" fill="none" stroke="#16a34a" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.75rem;color:var(--text-muted);">Quote ready</div>
                        <div style="font-size:0.88rem;font-weight:700;color:#16a34a;">PDF + WhatsApp in 60s ✓</div>
                    </div>
                </div>

                <!-- Floating: Quote approved -->
                <div style="position:absolute;bottom:-1.25rem;right:-1rem;background:white;border-radius:14px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.7rem;">
                    <span style="width:36px;height:36px;background:rgba(12,79,120,0.08);border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="17" height="17" fill="none" stroke="var(--primary)" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.75rem;color:var(--text-muted);">Client approved</div>
                        <div style="font-size:0.88rem;font-weight:700;color:var(--text-main);">QT-089 · ₹82,000 ✓</div>
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
                ['val'=>'< 60s',  'label'=>'To Create Any Quotation'],
                ['val'=>'Free',   'label'=>'Up to 20 Quotes/Month'],
                ['val'=>'1,562+', 'label'=>'5-Star Reviews'],
                ['val'=>'10,000+','label'=>'Businesses Use ZYLO'],
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
            <h2>How to Generate a Quotation Online in 4 Steps</h2>
            <p>No templates to fill manually. Just add your details and ZYLO does the rest.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1.5rem;margin-top:3rem;position:relative;" class="steps-grid">
            <div style="position:absolute;top:36px;left:calc(12.5% + 1rem);right:calc(12.5% + 1rem);height:2px;background:linear-gradient(90deg,var(--primary) 0%,var(--primary-light) 100%);z-index:0;" class="steps-connector" aria-hidden="true"></div>
            <?php
            $steps = [
                ['n'=>'1','icon'=>'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
                 'title'=>'Your Business Details',
                 'desc' =>'Add your business name, address, GSTIN, and upload your logo. Saved for all future quotations.'],
                ['n'=>'2','icon'=>'M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z',
                 'title'=>'Add Client Details',
                 'desc' =>'Enter the buyer\'s name, address, and email. ZYLO saves them for quick reuse on future quotes.'],
                ['n'=>'3','icon'=>'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3',
                 'title'=>'Add Items & Pricing',
                 'desc' =>'List products or services with quantity, rate, and any discounts or GST. Totals are auto-calculated.'],
                ['n'=>'4','icon'=>'M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4',
                 'title'=>'Download or Share',
                 'desc' =>'Download the PDF or share on WhatsApp. Client approves — convert to invoice in one click.'],
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

<!-- ========== QUOTATION vs INVOICE ========== -->
<section class="bg-offwhite">
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:center;" class="intro-grid">
            <div>
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.78rem;font-weight:700;padding:0.3rem 0.85rem;border-radius:50px;margin-bottom:1.25rem;text-transform:uppercase;letter-spacing:1px;">Quotation vs Invoice</div>
                <h2 style="font-size:2.2rem;color:var(--primary-dark);line-height:1.25;margin-bottom:1.25rem;">
                    What's the Difference Between a Quotation and an Invoice?
                </h2>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.75rem;">
                    A quotation is a price offer — sent before work begins, inviting the client to agree. An invoice is a payment request — sent after work is done or goods delivered. ZYLO handles both, and lets you convert an approved quote to an invoice in one click.
                </p>

                <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;margin-bottom:1.75rem;">
                    <!-- Quotation -->
                    <div style="background:white;border:1px solid var(--border-color);border-radius:14px;padding:1.25rem;">
                        <div style="font-size:0.8rem;font-weight:700;color:var(--primary);text-transform:uppercase;letter-spacing:1px;margin-bottom:0.75rem;">📄 Quotation</div>
                        <?php foreach(['Sent before work','Price offer to client','No payment obligation','Has expiry date','Client approves or rejects'] as $p): ?>
                        <div style="display:flex;align-items:center;gap:0.5rem;font-size:0.82rem;color:var(--text-muted);margin-bottom:0.35rem;">
                            <svg width="12" height="12" fill="none" stroke="var(--primary)" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <?= $p ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- Invoice -->
                    <div style="background:white;border:1px solid var(--border-color);border-radius:14px;padding:1.25rem;">
                        <div style="font-size:0.8rem;font-weight:700;color:#16a34a;text-transform:uppercase;letter-spacing:1px;margin-bottom:0.75rem;">🧾 Invoice</div>
                        <?php foreach(['Sent after work done','Payment request','Payment is due','Has due date','Client pays'] as $p): ?>
                        <div style="display:flex;align-items:center;gap:0.5rem;font-size:0.82rem;color:var(--text-muted);margin-bottom:0.35rem;">
                            <svg width="12" height="12" fill="none" stroke="#16a34a" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <?= $p ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <a href="contact" class="btn btn-primary" style="padding:0.75rem 1.75rem;">Generate Your Quote Free</a>
            </div>

            <div style="position:relative;">
                <img src="assets/store/section-2.jpg"
                     alt="ZYLO quotation format showing the difference between a quote and invoice with one-click conversion"
                     width="560" height="380"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" loading="lazy">
                <div style="position:absolute;bottom:-1rem;right:-1rem;background:white;border-radius:12px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);">
                    <div style="font-size:0.75rem;color:var(--text-muted);margin-bottom:0.2rem;">Quote → Invoice</div>
                    <div style="font-size:0.9rem;font-weight:700;color:var(--text-main);">1-click conversion ✓</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== WHAT GOES IN A QUOTATION ========== -->
<section>
    <div class="container">
        <div class="section-title">
            <h2>What Should a Professional Quotation Include?</h2>
            <p>ZYLO includes every required field automatically — nothing to remember, nothing to miss.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1.25rem;margin-top:3rem;" class="who-grid">
            <?php
            $fields = [
                ['icon'=>'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5','label'=>'Business Name & Logo',  'desc'=>'Your full company name, address, contact and logo'],
                ['icon'=>'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z',  'label'=>'Client Details',         'desc'=>'Buyer name, address, and email'],
                ['icon'=>'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z','label'=>'Quote Number & Date',  'desc'=>'Unique reference and quotation date'],
                ['icon'=>'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3','label'=>'Itemised Line Items',  'desc'=>'Products/services with qty, rate, and amount'],
                ['icon'=>'M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2z','label'=>'Taxes & Discounts',   'desc'=>'GST, CGST/SGST/IGST, and line-item discounts'],
                ['icon'=>'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z',          'label'=>'Validity / Expiry Date','desc'=>'Date until the price offer is valid'],
                ['icon'=>'M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z','label'=>'Payment Terms',        'desc'=>'Advance, milestone, or net days terms'],
                ['icon'=>'M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z','label'=>'Terms & Notes',        'desc'=>'Scope of work, delivery, and special terms'],
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
            <h2>Everything in ZYLO's Free Quotation Generator</h2>
            <p>More than a blank template — a smart quoting tool built for Indian businesses.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.75rem;margin-top:3rem;" class="features-grid">
            <?php
            $features = [
                [
                    'icon'  => 'M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z',
                    'title' => 'Professional Templates',
                    'desc'  => 'Choose from multiple professionally designed quotation templates. Add your logo, brand colours, and contact details — every quote looks polished and wins client confidence.',
                    'pts'   => ['Multiple design templates','Custom logo & colours','Professional PDF output']
                ],
                [
                    'icon'  => 'M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2z',
                    'title' => 'GST, Taxes & Discounts',
                    'desc'  => 'Apply GST (CGST, SGST, IGST) per line item or overall. Add line-item or overall discounts. All totals are calculated automatically — zero manual percentage working.',
                    'pts'   => ['GST CGST SGST IGST','Line-item or overall discount','Auto total calculation']
                ],
                [
                    'icon'  => 'M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4',
                    'title' => 'PDF Download & WhatsApp Share',
                    'desc'  => 'Download a print-ready PDF instantly. Share via WhatsApp, email, or a direct link. Your client receives a branded, mobile-friendly quotation they can approve on any device.',
                    'pts'   => ['Instant PDF generation','1-click WhatsApp share','Mobile-friendly quote link']
                ],
                [
                    'icon'  => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2',
                    'title' => '1-Click Quote to Invoice',
                    'desc'  => 'Once a client approves your quote, convert it to a GST invoice in one click. All items, pricing, taxes, and client details carry over — zero re-entry, zero delay.',
                    'pts'   => ['All data auto-transferred','GST invoice generated','Zero re-entry of data']
                ],
                [
                    'icon'  => 'M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4',
                    'title' => 'Multi-Currency Quotes',
                    'desc'  => 'Send quotations in INR, USD, EUR, GBP, or 150+ currencies. Perfect for freelancers and businesses quoting international clients — set currency per quote.',
                    'pts'   => ['150+ currencies','Per-quote currency setting','Professional forex display']
                ],
                [
                    'icon'  => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z',
                    'title' => 'Quote History & Tracking',
                    'desc'  => 'All quotations saved in your account. See which are approved, pending, or expired. Know when a client opens your quote so you can follow up at the perfect time.',
                    'pts'   => ['Full quote history','Approved/pending/expired status','Client open notification']
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

<!-- ========== WHO IT'S FOR ========== -->
<section>
    <div class="container">
        <div class="section-title">
            <h2>Perfect for Every Business That Sends Quotes</h2>
            <p>Whether you quote one client a month or fifty — ZYLO makes every quote count.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.75rem;margin-top:3rem;" class="perfect-for-grid">
            <?php
            $personas = [
                [
                    'icon'  => 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z',
                    'title' => 'Freelancers & Consultants',
                    'desc'  => 'Send professional project quotes in minutes instead of formatting Word docs. Add your hourly rate, scope of work, and GST — impress clients before work even starts.',
                    'link'  => 'freelancers-self-employed',
                    'pts'   => ['Project-based pricing','Hourly rate support','WhatsApp quote delivery']
                ],
                [
                    'icon'  => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
                    'title' => 'Traders & Manufacturers',
                    'desc'  => 'Create accurate sales quotations from your product catalogue in seconds. Auto-apply GST, add bulk discounts, and convert approved quotes to tax invoices instantly.',
                    'link'  => 'smbs',
                    'pts'   => ['Product catalogue pricing','GST auto-calculation','1-click quote to invoice']
                ],
                [
                    'icon'  => 'M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                    'title' => 'Agencies & Service Firms',
                    'desc'  => 'Send detailed project proposals with scope, pricing, and terms. Track which quotes clients viewed, follow up at the right time, and close more projects.',
                    'link'  => 'consultants',
                    'pts'   => ['Detailed project proposals','Quote open tracking','Follow-up reminders']
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

<!-- ========== FREE VS PRO ========== -->
<section class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>Free Quotation Generator vs Full Quotation Software</h2>
            <p>Start free. Upgrade for tracking, e-signatures, and full pipeline management.</p>
        </div>

        <div style="display:grid;grid-template-columns:1fr 1fr;gap:1.75rem;margin-top:3rem;max-width:800px;margin-left:auto;margin-right:auto;padding-top:1.5rem;" class="perfect-for-grid">
            <div style="background:white;border:1px solid var(--border-color);border-radius:18px;padding:2.25rem;display:flex;flex-direction:column;">
                <div style="font-size:0.85rem;font-weight:700;color:var(--text-muted);text-transform:uppercase;letter-spacing:1px;margin-bottom:0.75rem;">Free Plan</div>
                <div style="font-size:2.5rem;font-weight:800;color:var(--primary-dark);line-height:1;margin-bottom:0.3rem;">₹0</div>
                <div style="font-size:0.85rem;color:var(--text-muted);margin-bottom:1.75rem;">forever free</div>
                <ul style="list-style:none;padding:0;margin:0 0 2rem;flex:1;">
                    <?php foreach(['Up to 20 quotes/month','GST & tax calculation','Discounts support','Logo & branding','PDF download','WhatsApp & email share','Multi-currency','Basic templates'] as $pt): ?>
                    <li style="display:flex;align-items:center;gap:0.5rem;font-size:0.88rem;color:var(--text-muted);margin-bottom:0.6rem;">
                        <svg width="14" height="14" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <?= $pt ?>
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
                    <?php foreach(['Everything in Free','Unlimited quotations','Quote open & view tracking','Digital e-signature','1-click quote to invoice','Automated follow-up reminders','Product catalogue','Sales pipeline management','Priority support'] as $pt): ?>
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
<section>
    <div class="container">
        <div class="section-title">
            <h2>What People Say About ZYLO Quotation Generator</h2>
            <p>Used by freelancers, traders, and agencies across India every day.</p>
        </div>

        <div class="grid-3" style="margin-top:3rem;">
            <?php
            $reviews = [
                [
                    'quote' => '"I used to send quotes as Word documents and clients would never approve — the formatting looked amateur. ZYLO quotes look like they came from a big company. My approval rate went from 35% to 62% just from switching."',
                    'name'  => 'Rohan Desai',
                    'role'  => 'Interior Designer · Mumbai',
                    'img'   => 'assets/store/avatar-david.jpg',
                ],
                [
                    'quote' => '"The 1-click quote to invoice is the feature I didn\'t know I needed. Before, I\'d re-enter everything from the quote into an invoice. Now it takes 3 seconds. Our billing is 100× faster."',
                    'name'  => 'Priya Nair',
                    'role'  => 'Founder, NairTech Agency · Bengaluru',
                    'img'   => 'assets/store/avatar-sarah.jpg',
                ],
                [
                    'quote' => '"I ship internationally so multi-currency quotes are essential for me. ZYLO lets me send quotes in USD or EUR to my overseas clients and INR to local buyers — from the same tool. Saves me so much time."',
                    'name'  => 'Emily Watson',
                    'role'  => 'Export Consultant · Delhi',
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
            <p>Everything about ZYLO's free Quotation Generator.</p>
        </div>

        <div style="margin-top:2.5rem;" itemscope itemtype="https://schema.org/FAQPage">
            <?php
            $faqs = [
                ['q'=>'How do I create a quotation online for free?',        'a'=>'With ZYLO\'s free Quotation Generator: enter your business details, add client information, add line items with quantity and rate, apply GST or discounts, set expiry date and payment terms, then download as PDF or share via WhatsApp. The whole process takes under 60 seconds.'],
                ['q'=>'Is ZYLO Quotation Generator really free?',            'a'=>'Yes. Up to 20 quotations per month are completely free — PDF download, GST calculation, WhatsApp sharing, and branding included. The Pro plan (₹3,999/month) adds unlimited quotes, quote tracking, e-signatures, and 1-click quote-to-invoice conversion.'],
                ['q'=>'What is the difference between a quotation and an invoice?','a'=>'A quotation is sent before work begins — it\'s a price offer the client can approve or reject. An invoice is sent after work is done — it\'s a payment request. In ZYLO, you can convert an approved quote to a GST invoice with one click.'],
                ['q'=>'Can I add GST to my quotation?',                      'a'=>'Yes. ZYLO supports GST, CGST, SGST, IGST, and custom taxes per line item. Totals are calculated automatically — no manual percentage working needed.'],
                ['q'=>'Can I convert a quotation to an invoice?',            'a'=>'Yes. Once a client approves your quote, convert it to a GST-compliant invoice in one click — all items, pricing, taxes, and client details carry over automatically with zero re-entry. Available on the Pro plan.'],
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

<!-- ========== RELATED FREE TOOLS ========== -->
<section>
    <div class="container">
        <div class="section-title">
            <h2>More Free Tools from ZYLO</h2>
            <p>Everything you need to run your business billing — free to start.</p>
        </div>
        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1.25rem;margin-top:3rem;" class="who-grid">
            <?php
            $tools = [
                ['icon'=>'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z','label'=>'Invoice Generator',   'href'=>'invoice-generator',         'desc'=>'Create professional invoices'],
                ['icon'=>'M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2z',              'label'=>'GST Invoice Maker',   'href'=>'gst-invoice-maker',         'desc'=>'GSTN-compliant tax invoices'],
                ['icon'=>'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2','label'=>'Proforma Invoice',   'href'=>'creator-proforma-invoice',  'desc'=>'Quote before delivery'],
                ['icon'=>'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064','label'=>'Commercial Invoice',  'href'=>'commercial-invoice',        'desc'=>'For export & international'],
                ['icon'=>'M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z','label'=>'Invoice Formats',     'href'=>'invoice-formats',           'desc'=>'Download ready templates'],
                ['icon'=>'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z',                        'label'=>'Purchase Order',      'href'=>'create-purchase-order',     'desc'=>'Create POs for suppliers'],
                ['icon'=>'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4',                                               'label'=>'Delivery Challan',    'href'=>'create-delivery-challan',   'desc'=>'Track goods movement'],
                ['icon'=>'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15',   'label'=>'Consulting Invoice',  'href'=>'consulting-invoice',        'desc'=>'For service providers'],
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

<!-- ========== CTA ========== -->
<section style="text-align:center;padding:6rem 0;background:linear-gradient(135deg,var(--primary) 0%,var(--primary-dark) 100%);">
    <div class="container" style="max-width:700px;margin:0 auto;">
        <h2 style="font-size:2.5rem;color:white;margin-bottom:1.25rem;line-height:1.2;">
            Create Your First Professional Quote Free — Right Now
        </h2>
        <p style="font-size:1.1rem;color:rgba(255,255,255,0.85);margin-bottom:2.5rem;line-height:1.7;">
            No credit card. No complex setup. Join 10,000+ Indian businesses already winning more deals with ZYLO quotations.
        </p>
        <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
            <a href="contact" class="btn" style="padding:1rem 2.25rem;font-size:1.05rem;background:white;color:var(--primary);border-radius:10px;font-weight:700;">
                Generate Quote Free
            </a>
            <a href="https://wa.me/917501137266?text=Hi%2C%20I%20want%20to%20create%20a%20free%20quotation%20using%20ZYLO"
               target="_blank" rel="noopener noreferrer"
               class="btn" style="padding:1rem 2.25rem;font-size:1.05rem;background:#25d366;color:white;border-radius:10px;font-weight:600;border:none;">
                💬 Chat on WhatsApp
            </a>
        </div>
        <p style="color:rgba(255,255,255,0.5);font-size:0.82rem;margin-top:1.5rem;margin-bottom:0;">Free · No credit card · 20 quotes/month free forever</p>
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

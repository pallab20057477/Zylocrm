<?php
$pageTitle = "Quotation Software – Create & Send Professional Quotes Online | ZYLO CRM";
$pageDescription = "ZYLO's quotation software lets you create, send & track professional quotes in minutes. Convert quotes to invoices instantly, add e-signatures, and close deals faster. Free plan available.";
$pageKeywords = "quotation software India, online quotation maker, quote software for small business, estimate software, proposal software India, quotation generator, free quotation software, quote to invoice software";
$canonicalPath = '/quotation-software';

$pageSchema = [
    '@context' => 'https://schema.org',
    '@type'    => 'SoftwareApplication',
    'name'     => 'ZYLO Quotation Software',
    'url'      => 'https://zylocrm.com/quotation-software',
    'description' => 'Professional quotation software for Indian businesses. Create branded quotes, send for e-signature, convert to invoices instantly, and track quote status in real time.',
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
        'reviewCount' => '412',
        'bestRating'  => '5'
    ],
    'featureList' => [
        'Professional quotation creation in minutes',
        'One-click quote to invoice conversion',
        'e-Signature for online quote approval',
        'Quote tracking — viewed, approved, expired',
        'Product catalogue with auto-pricing',
        'GST-ready quotes with tax breakdown',
        'Custom quote templates with branding',
        'Multi-currency quotations'
    ]
];

$faqSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name'  => 'What is quotation software?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Quotation software is a tool that helps businesses create, send, and track professional price quotes or estimates for clients. It automates pricing, applies GST, lets clients approve quotes digitally, and converts approved quotes into invoices with one click.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Is ZYLO quotation software free?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. ZYLO offers a free plan that includes up to 20 quotes per month with basic branding and PDF download. The Pro plan starts at ₹3,999/month with unlimited quotes, e-signatures, quote tracking, and one-click invoice conversion.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can I convert a quote to an invoice in ZYLO?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. Once a client approves a quote, you can convert it to a GST-compliant invoice in one click. All line items, pricing, taxes, and client details are automatically carried over — no re-entry required.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Does ZYLO support e-signatures on quotes?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. ZYLO quotes include a digital approval flow. Clients can review the quote online and approve it with an e-signature from any device — no printing or scanning required. You get an instant notification when a quote is approved.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can I track when a client views my quote?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. ZYLO tracks every quote in real time — when it was sent, when the client opened it, whether it was approved or expired. You get instant notifications so you can follow up at exactly the right moment.']
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
                    <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                    Close Deals 3× Faster
                </div>

                <h1 style="font-size:3.2rem;color:var(--primary-dark);line-height:1.12;margin-bottom:1.4rem;">
                    Quotation Software That Wins You More Business
                </h1>
                <p style="font-size:1.18rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.9rem;">
                    Create professional, GST-ready quotes in minutes. Send for e-signature, track when clients view them, and convert approved quotes to invoices in one click — no re-entry, no delay.
                </p>

                <div style="display:flex;flex-wrap:wrap;gap:0.55rem;margin-bottom:2rem;">
                    <?php foreach(['GST-Ready Quotes','e-Signature','Quote Tracking','1-Click to Invoice','Product Catalogue','Free Plan'] as $p): ?>
                    <span style="background:white;border:1px solid var(--border-color);color:var(--text-main);font-size:0.82rem;font-weight:600;padding:0.35rem 0.9rem;border-radius:50px;box-shadow:var(--shadow-sm);">✓ &nbsp;<?= $p ?></span>
                    <?php endforeach; ?>
                </div>

                <div style="display:flex;gap:1rem;flex-wrap:wrap;">
                    <a href="contact" class="btn btn-primary" style="padding:0.9rem 2rem;font-size:1rem;">Create Quote Free</a>
                    <a href="#features" class="btn btn-outline" style="padding:0.9rem 2rem;font-size:1rem;">See All Features</a>
                </div>
                <p style="margin-top:1.5rem;font-size:0.85rem;color:var(--text-muted);margin-bottom:0;">
                    ⭐ 4.8/5 from 412 reviews &nbsp;·&nbsp; Trusted by 10,000+ businesses
                </p>
            </div>

            <div style="position:relative;">
                <img src="assets/store/section-1.jpg"
                     alt="ZYLO quotation software showing a professional GST quote with e-signature and one-click invoice conversion"
                     width="580" height="400"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;"
                     fetchpriority="high">

                <!-- Floating: Quote approved -->
                <div style="position:absolute;top:-1rem;left:-1.25rem;background:white;border-radius:14px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.7rem;">
                    <span style="width:36px;height:36px;background:#dcfce7;border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="17" height="17" fill="none" stroke="#16a34a" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.75rem;color:var(--text-muted);">Quote approved</div>
                        <div style="font-size:0.88rem;font-weight:700;color:#16a34a;">QT-0089 · e-signed ✓</div>
                    </div>
                </div>

                <!-- Floating: Conversion rate -->
                <div style="position:absolute;bottom:-1.25rem;right:-1rem;background:white;border-radius:14px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.7rem;">
                    <span style="width:36px;height:36px;background:rgba(12,79,120,0.08);border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="17" height="17" fill="none" stroke="var(--primary)" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.75rem;color:var(--text-muted);">Quote conversion rate</div>
                        <div style="font-size:0.88rem;font-weight:700;color:var(--text-main);">68% this month ↑</div>
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
                ['val'=>'3×',     'label'=>'Faster Quote Approval'],
                ['val'=>'68%',    'label'=>'Average Conversion Rate'],
                ['val'=>'< 5 min','label'=>'From Blank to Sent'],
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

<!-- ========== INTRO ========== -->
<section>
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:center;" class="intro-grid">
            <div>
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.78rem;font-weight:700;padding:0.3rem 0.85rem;border-radius:50px;margin-bottom:1.25rem;text-transform:uppercase;letter-spacing:1px;">Smart Quoting</div>
                <h2 style="font-size:2.2rem;color:var(--primary-dark);line-height:1.25;margin-bottom:1.25rem;">
                    Send a Quote in 5 Minutes. Get It Approved the Same Day.
                </h2>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.5rem;">
                    ZYLO's quotation software removes every friction point from the quoting process. Build a quote from your product catalogue, apply GST, add your branding, and send — all in under 5 minutes.
                </p>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.75rem;">
                    Clients receive a polished, mobile-friendly quote they can review and approve with an e-signature from any device. You get notified the moment they open it — so you can follow up at exactly the right time.
                </p>

                <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;margin-bottom:1.75rem;">
                    <?php
                    $metrics = [
                        ['val'=>'3×',     'label'=>'faster client approval'],
                        ['val'=>'68%',    'label'=>'average win rate'],
                        ['val'=>'1-click','label'=>'quote to invoice'],
                        ['val'=>'Zero',   'label'=>'re-entry of data'],
                    ];
                    foreach($metrics as $m): ?>
                    <div style="background:var(--bg-offwhite);border:1px solid var(--border-color);border-radius:12px;padding:0.9rem 1rem;">
                        <div style="font-size:1.35rem;font-weight:800;color:var(--primary-dark);margin-bottom:0.2rem;"><?= $m['val'] ?></div>
                        <div style="font-size:0.8rem;color:var(--text-muted);"><?= $m['label'] ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a href="contact" class="btn btn-primary" style="padding:0.75rem 1.75rem;">Start Free — No Card Needed</a>
            </div>

            <div style="position:relative;">
                <img src="assets/store/section-2.jpg"
                     alt="ZYLO quote builder showing itemised pricing with GST and e-signature option"
                     width="560" height="380"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" loading="lazy">
                <div style="position:absolute;bottom:-1rem;right:-1rem;background:white;border-radius:12px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);">
                    <div style="font-size:0.75rem;color:var(--text-muted);margin-bottom:0.2rem;">Client opened quote</div>
                    <div style="font-size:0.88rem;font-weight:700;color:var(--text-main);">QT-0089 · 2 mins ago 👁</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== KEY FEATURES ========== -->
<section id="features" class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>Everything You Need to Quote Confidently & Close Faster</h2>
            <p>Smart features that turn your quotes into signed deals — automatically.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.75rem;margin-top:3rem;" class="features-grid">
            <?php
            $features = [
                [
                    'icon'  => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
                    'title' => 'Professional Quote Builder',
                    'desc'  => 'Build itemised, branded quotes from your product catalogue in minutes. Add descriptions, discounts, taxes, and terms. Download as PDF or share a live link.',
                    'pts'   => ['Logo & brand colours','Itemised line items','Discount & tax support']
                ],
                [
                    'icon'  => 'M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2z',
                    'title' => 'GST-Ready Quotes',
                    'desc'  => 'ZYLO auto-applies GST rates from your product master, splits CGST/SGST or IGST correctly, and shows a full tax breakdown — so clients know exactly what they\'re paying.',
                    'pts'   => ['CGST/SGST/IGST auto-calc','HSN/SAC code auto-fill','Zero manual tax entry']
                ],
                [
                    'icon'  => 'M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z',
                    'title' => 'e-Signature & Online Approval',
                    'desc'  => 'Clients receive a mobile-friendly quote they can approve with a digital signature from any device. No printing. No email attachments. Just click, sign, done.',
                    'pts'   => ['Digital signature capture','Instant approval notification','Legally valid e-sign']
                ],
                [
                    'icon'  => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2',
                    'title' => 'One-Click Quote → Invoice',
                    'desc'  => 'Once a quote is approved, convert it to a GST invoice in one click. All line items, pricing, taxes, and client details carry over automatically — zero re-entry.',
                    'pts'   => ['All data auto-transferred','GST invoice generated instantly','Linked quote & invoice records']
                ],
                [
                    'icon'  => 'M15 12a3 3 0 11-6 0 3 3 0 016 0z M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z',
                    'title' => 'Real-Time Quote Tracking',
                    'desc'  => 'Know the moment your client opens a quote. Track status — sent, viewed, approved, or expired — and get instant alerts so you can follow up at the perfect moment.',
                    'pts'   => ['Open & view notifications','Sent/Viewed/Approved status','Expiry date reminders']
                ],
                [
                    'icon'  => 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4',
                    'title' => 'Product Catalogue & Pricing',
                    'desc'  => 'Build a catalogue of your products and services with pre-set prices, GST rates, and descriptions. Add items to any quote in seconds — no typing, no pricing errors.',
                    'pts'   => ['Pre-loaded product prices','Auto GST rates per item','Bulk item import from CSV']
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
            <h2>From Quote to Cash in 4 Simple Steps</h2>
            <p>The fastest path from enquiry to signed deal to payment.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1.5rem;margin-top:3rem;position:relative;" class="steps-grid">
            <div style="position:absolute;top:36px;left:calc(12.5% + 1rem);right:calc(12.5% + 1rem);height:2px;background:linear-gradient(90deg,var(--primary) 0%,var(--primary-light) 100%);z-index:0;" class="steps-connector" aria-hidden="true"></div>
            <?php
            $steps = [
                ['n'=>'1','icon'=>'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z','title'=>'Build the Quote',    'desc'=>'Add client, pick products from catalogue, apply discount or GST. Quote is ready in minutes.'],
                ['n'=>'2','icon'=>'M12 19l9 2-9-18-9 18 9-2zm0 0v-8',                                                                                          'title'=>'Send to Client',   'desc'=>'Send via email or WhatsApp. Client gets a branded, mobile-friendly quote with a live link.'],
                ['n'=>'3','icon'=>'M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z',                          'title'=>'Client Approves',  'desc'=>'Client reviews and signs the quote digitally. You get an instant approval notification.'],
                ['n'=>'4','icon'=>'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2','title'=>'Convert & Invoice','desc'=>'One click converts the approved quote to a GST invoice. Send and get paid — done.'],
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

<!-- ========== e-SIGNATURE SPOTLIGHT ========== -->
<section class="bg-offwhite">
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:center;" class="intro-grid">
            <div>
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.78rem;font-weight:700;padding:0.3rem 0.85rem;border-radius:50px;margin-bottom:1.25rem;text-transform:uppercase;letter-spacing:1px;">e-Signature & Tracking</div>
                <h2 style="font-size:2.2rem;color:var(--primary-dark);line-height:1.25;margin-bottom:1.25rem;">
                    Know When They Read It. Get Approved the Same Day.
                </h2>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.5rem;">
                    ZYLO tells you the exact moment your client opens a quote — so you can follow up while you're still top of mind. No more sending into a void and wondering if they saw it.
                </p>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.75rem;">
                    When they're ready, clients sign digitally from any device. You get an instant notification and the quote is automatically locked. One click later — it's an invoice.
                </p>

                <!-- Timeline -->
                <div style="background:white;border:1px solid var(--border-color);border-radius:14px;padding:1.25rem 1.5rem;margin-bottom:1.75rem;">
                    <div style="font-size:0.8rem;font-weight:700;color:var(--primary);text-transform:uppercase;letter-spacing:1px;margin-bottom:0.75rem;">Quote lifecycle in ZYLO</div>
                    <?php
                    $timeline = [
                        ['icon'=>'M12 19l9 2-9-18-9 18 9-2zm0 0v-8',                                                           'color'=>'var(--primary)','text'=>'Quote sent via email & WhatsApp'],
                        ['icon'=>'M15 12a3 3 0 11-6 0 3 3 0 016 0z M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z','color'=>'#0ea5e9','text'=>'Client opens quote · you get notified'],
                        ['icon'=>'M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z','color'=>'#16a34a','text'=>'Client approves with e-signature'],
                        ['icon'=>'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2','color'=>'#f59e0b','text'=>'One click: quote becomes GST invoice'],
                    ];
                    foreach($timeline as $i=>$tl): ?>
                    <div style="display:flex;align-items:center;gap:0.75rem;padding:0.6rem 0;<?= $i<count($timeline)-1?'border-bottom:1px solid var(--border-color);':'' ?>">
                        <span style="width:30px;height:30px;background:<?= $tl['color'] ?>;border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                            <svg width="14" height="14" fill="none" stroke="white" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="<?= $tl['icon'] ?>"/></svg>
                        </span>
                        <span style="font-size:0.88rem;color:var(--text-main);"><?= $tl['text'] ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a href="contact" class="btn btn-primary" style="padding:0.75rem 1.75rem;">Try It Free</a>
            </div>

            <div style="position:relative;">
                <img src="assets/store/hero-1.jpg"
                     alt="ZYLO quote tracking showing real-time viewed and approved status with e-signature"
                     width="560" height="380"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" loading="lazy">
                <div style="position:absolute;top:-1rem;right:-1rem;background:white;border-radius:12px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);">
                    <div style="font-size:0.75rem;color:var(--text-muted);margin-bottom:0.2rem;">Client approved</div>
                    <div style="font-size:0.88rem;font-weight:700;color:#16a34a;">QT-0089 · e-signed ✓</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== QUOTE TYPES ========== -->
<section>
    <div class="container">
        <div class="section-title">
            <h2>Every Quotation Format Your Business Needs</h2>
            <p>From quick estimates to detailed project proposals — all covered.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1.25rem;margin-top:3rem;" class="who-grid">
            <?php
            $types = [
                ['icon'=>'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z','label'=>'Sales Quotation',    'desc'=>'Itemised quote with GST for product sales'],
                ['icon'=>'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2','label'=>'Service Estimate',   'desc'=>'Quote for services with scope & pricing'],
                ['icon'=>'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z','label'=>'Project Proposal',  'desc'=>'Multi-phase project with milestone pricing'],
                ['icon'=>'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064','label'=>'Export Quotation',  'desc'=>'International quote in any currency'],
                ['icon'=>'M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z','label'=>'Retainer Quote',    'desc'=>'Monthly service agreement with auto-invoice'],
                ['icon'=>'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z','label'=>'Freelance Quote',   'desc'=>'Simple quote for freelancers & solopreneurs'],
                ['icon'=>'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z','label'=>'Approved Quote',   'desc'=>'Signed & locked — converts to invoice'],
                ['icon'=>'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15','label'=>'Revised Quote',    'desc'=>'Update & resend after client feedback'],
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

<!-- ========== WHO IT'S FOR ========== -->
<section class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>Built for Every Business That Sends Quotes</h2>
            <p>Whether you quote one client or a hundred — ZYLO makes every quote count.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.75rem;margin-top:3rem;" class="perfect-for-grid">
            <?php
            $personas = [
                [
                    'icon'  => 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z',
                    'title' => 'Freelancers & Consultants',
                    'desc'  => 'Win more projects with polished, professional quotes. Track when clients view them, collect e-signatures, and convert to invoices the moment you get the green light.',
                    'link'  => 'freelancers-self-employed',
                    'pts'   => ['Mobile-friendly quotes','Digital approval & e-sign','Instant invoice conversion']
                ],
                [
                    'icon'  => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
                    'title' => 'Traders & Manufacturers',
                    'desc'  => 'Build a product catalogue and create accurate, GST-compliant sales quotations in seconds. No pricing errors, no missed tax calculations.',
                    'link'  => 'smbs',
                    'pts'   => ['Product catalogue pricing','GST auto-calculation','Bulk quote management']
                ],
                [
                    'icon'  => 'M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                    'title' => 'Agencies & Service Firms',
                    'desc'  => 'Send detailed project proposals with milestone pricing, scope of work, and terms. Get legally valid e-signatures and never chase a paper approval again.',
                    'link'  => 'professional-services',
                    'pts'   => ['Multi-page proposals','Milestone-based pricing','e-Signature & audit trail']
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

<!-- ========== COMPARISON ========== -->
<section>
    <div class="container">
        <div class="section-title">
            <h2>ZYLO vs Other Quotation Tools</h2>
            <p>Why businesses choose ZYLO to send and win quotes.</p>
        </div>

        <div style="overflow-x:auto;margin-top:2.5rem;border-radius:16px;box-shadow:var(--shadow-md);border:1px solid var(--border-color);" class="comparison-table">
            <table style="width:100%;border-collapse:collapse;background:white;min-width:560px;">
                <thead>
                    <tr style="background:var(--primary);color:white;">
                        <th style="padding:1.1rem 1.5rem;text-align:left;font-weight:600;font-size:0.93rem;width:34%;">Feature</th>
                        <th style="padding:1.1rem 1.5rem;text-align:center;font-weight:700;font-size:0.93rem;">
                            <span style="background:rgba(255,255,255,0.15);padding:0.2rem 0.75rem;border-radius:50px;">ZYLO CRM</span>
                        </th>
                        <th style="padding:1.1rem 1.5rem;text-align:center;font-weight:600;font-size:0.93rem;opacity:0.8;">Other Quoting Tools</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $rows = [
                        ['Free Plan',                     '✅ Forever free tier',           '❌ Trial only'],
                        ['GST Auto-Calculation',          '✅ CGST/SGST/IGST built-in',     '⚠️ Manual / India-specific add-on'],
                        ['e-Signature',                   '✅ Built-in digital approval',   '⚠️ Paid add-on'],
                        ['Real-Time Open Tracking',       '✅ Instant notifications',       '⚠️ Basic email read receipts'],
                        ['One-Click Quote → Invoice',     '✅ Zero re-entry',               '❌ Export & re-create'],
                        ['WhatsApp Sharing',              '✅ One-click share',             '❌ Email only'],
                        ['Product Catalogue',             '✅ Built-in with GST rates',     '⚠️ Basic item list'],
                        ['Price / Month',                 '₹0 – ₹3,999',                  '₹3,000 – ₹15,000+'],
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
<section class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>What Our Customers Say</h2>
            <p>Real results from businesses winning more deals with ZYLO quotes.</p>
        </div>

        <div class="grid-3" style="margin-top:3rem;">
            <?php
            $reviews = [
                [
                    'quote' => '"Before ZYLO, I\'d send a quote by email and hear nothing for days. Now I get notified the moment the client opens it, call them immediately, and close the deal the same day. My conversion rate went from 40% to 72%."',
                    'name'  => 'Vikram Singh',
                    'role'  => 'Sales Manager, VS Interiors · Jaipur',
                    'img'   => 'assets/store/avatar-david.jpg',
                ],
                [
                    'quote' => '"The e-signature feature is a game-changer for us. Clients used to take a week to print, sign, and scan. Now they approve in minutes on their phone. Our project starts are 3× faster."',
                    'name'  => 'Priya Nair',
                    'role'  => 'Director, NairTech Agency · Bengaluru',
                    'img'   => 'assets/store/avatar-sarah.jpg',
                ],
                [
                    'quote' => '"The one-click quote-to-invoice conversion saves our team an hour every single day. No more copying line items between tools. Approve quote → invoice in 10 seconds. Clients are impressed too."',
                    'name'  => 'Emily Watson',
                    'role'  => 'Operations Head, Craft Exports · Delhi',
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
            <p>Everything you need to know about ZYLO Quotation Software.</p>
        </div>

        <div style="margin-top:2.5rem;" itemscope itemtype="https://schema.org/FAQPage">
            <?php
            $faqs = [
                ['q'=>'What is quotation software?',                'a'=>'Quotation software helps businesses create, send, and track professional price quotes for clients. It automates pricing, applies GST, lets clients approve quotes digitally, and converts approved quotes into invoices with one click.'],
                ['q'=>'Is ZYLO quotation software free?',           'a'=>'Yes. ZYLO offers a free plan with up to 20 quotes per month. The Pro plan starts at ₹3,999/month with unlimited quotes, e-signatures, real-time tracking, and one-click invoice conversion.'],
                ['q'=>'Can I convert a quote to an invoice?',       'a'=>'Yes. Once a client approves a quote, convert it to a GST-compliant invoice in one click. All line items, pricing, taxes, and client details are automatically carried over — no re-entry required.'],
                ['q'=>'Does ZYLO support e-signatures on quotes?',  'a'=>'Yes. Clients can review the quote online and approve it with an e-signature from any device — no printing or scanning required. You get an instant notification when a quote is approved.'],
                ['q'=>'Can I track when a client views my quote?',  'a'=>'Yes. ZYLO tracks every quote in real time — when it was sent, when the client opened it, whether it was approved or expired — so you can follow up at exactly the right moment.'],
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
            Send Your First Professional Quote Today — Free
        </h2>
        <p style="font-size:1.1rem;color:rgba(255,255,255,0.85);margin-bottom:2.5rem;line-height:1.7;">
            Join 10,000+ businesses that create winning quotes with ZYLO. Free plan available — no credit card, no setup fee.
        </p>
        <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
            <a href="contact" class="btn" style="padding:1rem 2.25rem;font-size:1.05rem;background:white;color:var(--primary);border-radius:10px;font-weight:700;">
                Create Your First Quote Free
            </a>
            <a href="https://wa.me/917501137266?text=Hi%2C%20I%20want%20to%20know%20more%20about%20ZYLO%20Quotation%20Software"
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
    .steps-grid      { grid-template-columns: 1fr 1fr !important; }
    .steps-connector { display: none !important; }
    .who-grid        { grid-template-columns: 1fr 1fr !important; }
    .perfect-for-grid{ grid-template-columns: 1fr !important; }
}
@media (max-width: 480px) {
    .steps-grid { grid-template-columns: 1fr !important; }
    .who-grid   { grid-template-columns: 1fr 1fr !important; }
}
</style>

<?php include 'includes/footer.php'; ?>

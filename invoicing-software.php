<?php
$pageTitle = "Invoicing Software – Create & Send Professional Invoices Online | ZYLO CRM";
$pageDescription = "ZYLO's invoicing software lets you create, send & track professional invoices in seconds. GST-ready, recurring billing, online payments, automated reminders. Free plan available. Trusted by 10,000+ businesses.";
$pageKeywords = "invoicing software India, online invoice maker, professional invoice software, recurring billing software, invoice tracking software, free invoicing software, invoice generator India, best invoicing software for small business";
$canonicalPath = '/invoicing-software';

$pageSchema = [
    '@context' => 'https://schema.org',
    '@type'    => 'SoftwareApplication',
    'name'     => 'ZYLO Invoicing Software',
    'url'      => 'https://zylocrm.com/invoicing-software',
    'description' => 'Professional invoicing software for Indian businesses. Create GST-compliant invoices, automate recurring billing, accept online payments, and track invoice status in real time.',
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
        'reviewCount' => '618',
        'bestRating'  => '5'
    ],
    'featureList' => [
        'Professional invoice creation in under 30 seconds',
        'GST-compliant invoices with auto tax calculation',
        'Recurring and subscription billing',
        'Automated payment reminders',
        'Online payment links',
        'Invoice tracking — viewed, due, paid',
        'Multi-currency invoicing',
        'Custom invoice templates with branding'
    ]
];

$faqSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name'  => 'What is invoicing software?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Invoicing software is a tool that helps businesses create, send, and track professional invoices electronically. It automates calculations, applies tax (GST, VAT), sends payment reminders, and lets you monitor which invoices are paid, due, or overdue — from any device.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Is ZYLO invoicing software free?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. ZYLO offers a free plan that includes up to 50 invoices per month, basic GST invoicing, and PDF download. The Pro plan starts at ₹3,999/month with unlimited invoices, recurring billing, payment links, and 24/7 support.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can I create GST invoices with ZYLO?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. ZYLO auto-calculates CGST, SGST, and IGST based on the supply type and customer\'s state. It generates fully GSTN-compliant invoices and supports e-Invoice with IRN and QR code for eligible businesses.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Does ZYLO support recurring invoices?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. ZYLO lets you set up recurring invoices on weekly, monthly, or custom schedules. Invoices are generated and sent automatically on the schedule you define — perfect for subscription-based businesses and retainer clients.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can my customers pay online through the invoice?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. Every ZYLO invoice includes a "Pay Now" link. Customers can pay via UPI, net banking, cards, or wallets directly from the invoice email or PDF — no separate payment setup required.']
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
                <!-- Badge -->
                <div style="display:inline-flex;align-items:center;gap:0.5rem;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.8rem;font-weight:700;padding:0.38rem 1rem;border-radius:50px;margin-bottom:1.5rem;text-transform:uppercase;letter-spacing:1px;border:1px solid rgba(12,79,120,0.18);">
                    <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    Invoice in Under 30 Seconds
                </div>

                <h1 style="font-size:3.2rem;color:var(--primary-dark);line-height:1.12;margin-bottom:1.4rem;">
                    Professional Invoicing Software That Gets You Paid Faster
                </h1>
                <p style="font-size:1.18rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.9rem;">
                    Create beautiful, GST-ready invoices in seconds. Automate recurring billing, send payment reminders, and let clients pay online — all from one clean dashboard.
                </p>

                <div style="display:flex;flex-wrap:wrap;gap:0.55rem;margin-bottom:2rem;">
                    <?php foreach(['GST Invoices','Recurring Billing','Online Payments','Auto Reminders','Invoice Tracking','Free Plan'] as $p): ?>
                    <span style="background:white;border:1px solid var(--border-color);color:var(--text-main);font-size:0.82rem;font-weight:600;padding:0.35rem 0.9rem;border-radius:50px;box-shadow:var(--shadow-sm);">✓ &nbsp;<?= $p ?></span>
                    <?php endforeach; ?>
                </div>

                <div style="display:flex;gap:1rem;flex-wrap:wrap;">
                    <a href="contact" class="btn btn-primary" style="padding:0.9rem 2rem;font-size:1rem;">Create Invoice Free</a>
                    <a href="#features" class="btn btn-outline" style="padding:0.9rem 2rem;font-size:1rem;">See All Features</a>
                </div>
                <p style="margin-top:1.5rem;font-size:0.85rem;color:var(--text-muted);margin-bottom:0;">
                    ⭐ 4.8/5 from 618 reviews &nbsp;·&nbsp; Trusted by 10,000+ businesses
                </p>
            </div>

            <div style="position:relative;">
                <img src="assets/store/section-1.jpg"
                     alt="ZYLO invoicing software dashboard showing a professional GST invoice with payment tracking"
                     width="580" height="400"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;"
                     fetchpriority="high">

                <!-- Floating: Invoice paid -->
                <div style="position:absolute;top:-1rem;left:-1.25rem;background:white;border-radius:14px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.7rem;">
                    <span style="width:36px;height:36px;background:#dcfce7;border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="17" height="17" fill="none" stroke="#16a34a" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.75rem;color:var(--text-muted);">Invoice paid</div>
                        <div style="font-size:0.88rem;font-weight:700;color:#16a34a;">₹58,400 received ✓</div>
                    </div>
                </div>

                <!-- Floating: Overdue alert -->
                <div style="position:absolute;bottom:-1.25rem;right:-1rem;background:white;border-radius:14px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.7rem;">
                    <span style="width:36px;height:36px;background:rgba(12,79,120,0.08);border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="17" height="17" fill="none" stroke="var(--primary)" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.75rem;color:var(--text-muted);">Outstanding this month</div>
                        <div style="font-size:0.88rem;font-weight:700;color:var(--text-main);">24 invoices · ₹3,12,000</div>
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
                ['val'=>'5M+',    'label'=>'Invoices Created'],
                ['val'=>'< 30s',  'label'=>'Time to Create Invoice'],
                ['val'=>'42%',    'label'=>'Faster Payment vs Email'],
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

<!-- ========== INTRO SECTION ========== -->
<section>
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:center;" class="intro-grid">
            <div>
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.78rem;font-weight:700;padding:0.3rem 0.85rem;border-radius:50px;margin-bottom:1.25rem;text-transform:uppercase;letter-spacing:1px;">Smart Invoicing</div>
                <h2 style="font-size:2.2rem;color:var(--primary-dark);line-height:1.25;margin-bottom:1.25rem;">
                    Stop Chasing Payments. Start Getting Paid.
                </h2>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.5rem;">
                    ZYLO makes invoicing effortless. Pick a client, add your services, and send a polished PDF invoice in under 30 seconds. GST is auto-calculated, your logo is pre-loaded, and a "Pay Now" link is embedded by default.
                </p>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.75rem;">
                    Clients receive a branded invoice by email or WhatsApp, pay online in one click, and you get an instant notification the moment money lands. No chasing. No confusion.
                </p>

                <!-- Mini metrics -->
                <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;margin-bottom:1.75rem;">
                    <?php
                    $metrics = [
                        ['val'=>'42%',    'label'=>'faster payment vs manual'],
                        ['val'=>'3x',     'label'=>'more invoices sent per day'],
                        ['val'=>'Zero',   'label'=>'calculation errors'],
                        ['val'=>'< 30s',  'label'=>'from blank to sent'],
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
                     alt="ZYLO invoice creation screen with auto GST calculation and client details"
                     width="560" height="380"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" loading="lazy">
                <div style="position:absolute;bottom:-1rem;right:-1rem;background:white;border-radius:12px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);">
                    <div style="font-size:0.75rem;color:var(--text-muted);margin-bottom:0.2rem;">Reminder sent automatically</div>
                    <div style="font-size:0.88rem;font-weight:700;color:var(--text-main);">INV-0042 · 3 days overdue</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== KEY FEATURES ========== -->
<section id="features" class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>Everything You Need to Invoice Like a Pro</h2>
            <p>Powerful features that make billing effortless — and getting paid inevitable.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.75rem;margin-top:3rem;" class="features-grid">
            <?php
            $features = [
                [
                    'icon'  => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
                    'title' => 'Professional Invoice Creation',
                    'desc'  => 'Create branded, itemised invoices in under 30 seconds. Add your logo, payment terms, and notes. Download as PDF or send directly from ZYLO.',
                    'pts'   => ['Custom logo & branding','Itemised line items','PDF download & email send']
                ],
                [
                    'icon'  => 'M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2z',
                    'title' => 'GST Auto-Calculation',
                    'desc'  => 'Select a product and ZYLO applies the correct GST rate, splits CGST/SGST or IGST based on supply state, and adds HSN codes automatically.',
                    'pts'   => ['CGST/SGST/IGST auto-split','HSN/SAC code auto-fill','e-Invoice with IRN support']
                ],
                [
                    'icon'  => 'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15',
                    'title' => 'Recurring & Subscription Billing',
                    'desc'  => 'Set up invoices that generate and send themselves — weekly, monthly, or on any custom schedule. Perfect for retainers, subscriptions, and SaaS billing.',
                    'pts'   => ['Weekly / monthly schedules','Auto-send on due date','Pause or cancel anytime']
                ],
                [
                    'icon'  => 'M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z',
                    'title' => 'Online Payment Links',
                    'desc'  => 'Every invoice includes a "Pay Now" button. Clients pay via UPI, net banking, cards, or wallets — directly from the invoice email. Funds hit your account instantly.',
                    'pts'   => ['UPI, cards, net banking','One-click payment for clients','Instant payment notification']
                ],
                [
                    'icon'  => 'M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9',
                    'title' => 'Automated Payment Reminders',
                    'desc'  => 'ZYLO automatically sends polite payment reminders before and after due dates. Reduce overdue invoices by up to 60% without a single manual follow-up.',
                    'pts'   => ['Pre & post-due reminders','WhatsApp + email delivery','Customisable reminder schedule']
                ],
                [
                    'icon'  => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z',
                    'title' => 'Invoice Tracking & Analytics',
                    'desc'  => 'Know exactly when your invoice was opened, which ones are overdue, and your average payment cycle. Identify slow-paying clients and act before cash flow tightens.',
                    'pts'   => ['Viewed / paid / overdue status','Average payment time report','Top slow-paying clients']
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
            <h2>From Blank to Paid in 4 Steps</h2>
            <p>The fastest path from work done to money received.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1.5rem;margin-top:3rem;position:relative;" class="steps-grid">
            <div style="position:absolute;top:36px;left:calc(12.5% + 1rem);right:calc(12.5% + 1rem);height:2px;background:linear-gradient(90deg,var(--primary) 0%,var(--primary-light) 100%);z-index:0;" class="steps-connector" aria-hidden="true"></div>
            <?php
            $steps = [
                ['n'=>'1','icon'=>'M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z','title'=>'Pick Your Client',     'desc'=>'Select from your client list or add a new one. ZYLO pre-fills their GSTIN, address, and currency.'],
                ['n'=>'2','icon'=>'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3','title'=>'Add Services/Products','desc'=>'Pick items from your catalogue. GST rates, HSN codes, and totals auto-calculate instantly.'],
                ['n'=>'3','icon'=>'M12 19l9 2-9-18-9 18 9-2zm0 0v-8',                                                                                         'title'=>'Send Invoice',         'desc'=>'Send via email or WhatsApp in one click. Include a "Pay Now" link for instant online payment.'],
                ['n'=>'4','icon'=>'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z',                                                                            'title'=>'Get Paid',             'desc'=>'Client pays online. You get an instant notification. Invoice marked paid automatically.'],
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

<!-- ========== RECURRING BILLING SPOTLIGHT ========== -->
<section class="bg-offwhite">
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:center;" class="intro-grid">
            <div>
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.78rem;font-weight:700;padding:0.3rem 0.85rem;border-radius:50px;margin-bottom:1.25rem;text-transform:uppercase;letter-spacing:1px;">Recurring Billing</div>
                <h2 style="font-size:2.2rem;color:var(--primary-dark);line-height:1.25;margin-bottom:1.25rem;">
                    Set It Once. Get Paid Every Month Automatically.
                </h2>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.5rem;">
                    For retainer clients, subscriptions, or monthly service agreements — ZYLO's recurring billing engine generates and sends invoices on your schedule, every time, without you lifting a finger.
                </p>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.75rem;">
                    Set the frequency, amount, client, and start date. ZYLO handles the rest — including payment reminders, follow-ups, and marking invoices paid when funds arrive.
                </p>
                <div style="display:grid;grid-template-columns:1fr 1fr;gap:0.75rem;margin-bottom:1.75rem;">
                    <?php foreach(['Weekly, monthly, custom','Auto-send on schedule','Auto payment reminders','Pause or cancel any time','Payment confirmation alerts','Full audit history'] as $pt): ?>
                    <div style="display:flex;align-items:center;gap:0.5rem;font-size:0.88rem;color:var(--text-muted);">
                        <svg width="14" height="14" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <?= $pt ?>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a href="contact" class="btn btn-primary" style="padding:0.75rem 1.75rem;">Set Up Recurring Billing</a>
            </div>

            <div style="position:relative;">
                <img src="assets/store/hero-1.jpg"
                     alt="ZYLO recurring billing setup showing monthly invoice schedule and auto-send settings"
                     width="560" height="380"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" loading="lazy">
                <div style="position:absolute;top:-1rem;right:-1rem;background:white;border-radius:12px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);">
                    <div style="font-size:0.75rem;color:var(--text-muted);margin-bottom:0.2rem;">Next auto-invoice</div>
                    <div style="font-size:0.88rem;font-weight:700;color:var(--text-main);">12 clients · 1st of month</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== INVOICE TYPES ========== -->
<section>
    <div class="container">
        <div class="section-title">
            <h2>Every Invoice Format You'll Ever Need</h2>
            <p>From quick proformas to detailed tax invoices — all covered.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1.25rem;margin-top:3rem;" class="who-grid">
            <?php
            $types = [
                ['icon'=>'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z','label'=>'Tax Invoice',          'desc'=>'GST-compliant with full tax breakdown'],
                ['icon'=>'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2','label'=>'Proforma Invoice',    'desc'=>'Quote before the work begins'],
                ['icon'=>'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15','label'=>'Recurring Invoice',   'desc'=>'Auto-generated on a set schedule'],
                ['icon'=>'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064','label'=>'Export Invoice',       'desc'=>'For international clients in any currency'],
                ['icon'=>'M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z','label'=>'Debit Note',          'desc'=>'Adjust an existing invoice upward'],
                ['icon'=>'M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z','label'=>'Credit Note',         'desc'=>'Cancel or reduce an invoice amount'],
                ['icon'=>'M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z','label'=>'Receipt / Payment',  'desc'=>'Confirm payment received by client'],
                ['icon'=>'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z','label'=>'Subscription Invoice','desc'=>'Automated billing for recurring services'],
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
            <h2>Built for Every Type of Business</h2>
            <p>Whether you bill one client or hundreds — ZYLO scales with you.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.75rem;margin-top:3rem;" class="perfect-for-grid">
            <?php
            $personas = [
                [
                    'icon'  => 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z',
                    'title' => 'Freelancers & Consultants',
                    'desc'  => 'Send professional invoices from your phone in minutes. Set up recurring billing for retainer clients and stop worrying about chasing payments.',
                    'link'  => 'freelancers-self-employed',
                    'pts'   => ['Mobile invoicing','Recurring retainer billing','WhatsApp invoice sharing']
                ],
                [
                    'icon'  => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
                    'title' => 'Small & Medium Businesses',
                    'desc'  => 'Manage hundreds of invoices with ease. GST compliance, payment tracking, and GSTR reports — all handled automatically so your team can focus on growth.',
                    'link'  => 'smbs',
                    'pts'   => ['Bulk invoicing','GST & e-Invoice','GSTR-ready reports']
                ],
                [
                    'icon'  => 'M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                    'title' => 'Agencies & SaaS Businesses',
                    'desc'  => 'Automate client billing completely. Subscription invoices go out on time, every time. Integrate with your stack via the ZYLO API.',
                    'link'  => 'startups',
                    'pts'   => ['Subscription billing','API integration','Multi-currency support']
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
            <h2>ZYLO vs Other Invoicing Tools</h2>
            <p>Why 10,000+ businesses switched to ZYLO for invoicing.</p>
        </div>

        <div style="overflow-x:auto;margin-top:2.5rem;border-radius:16px;box-shadow:var(--shadow-md);border:1px solid var(--border-color);" class="comparison-table">
            <table style="width:100%;border-collapse:collapse;background:white;min-width:560px;">
                <thead>
                    <tr style="background:var(--primary);color:white;">
                        <th style="padding:1.1rem 1.5rem;text-align:left;font-weight:600;font-size:0.93rem;width:34%;">Feature</th>
                        <th style="padding:1.1rem 1.5rem;text-align:center;font-weight:700;font-size:0.93rem;">
                            <span style="background:rgba(255,255,255,0.15);padding:0.2rem 0.75rem;border-radius:50px;">ZYLO CRM</span>
                        </th>
                        <th style="padding:1.1rem 1.5rem;text-align:center;font-weight:600;font-size:0.93rem;opacity:0.8;">Other Invoicing Tools</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $rows = [
                        ['Free Plan',                   '✅ Forever free tier',          '❌ 30-day trial only'],
                        ['GST Auto-Calculation',        '✅ CGST/SGST/IGST auto',        '⚠️ Manual / add-on'],
                        ['e-Invoice with IRN',          '✅ Built-in IRP integration',   '❌ Not available'],
                        ['Recurring Billing',           '✅ Full automation',            '⚠️ Basic / paid feature'],
                        ['Online Payment Links',        '✅ UPI, cards, net banking',    '⚠️ Limited gateways'],
                        ['WhatsApp Invoice Sharing',    '✅ One-click share',            '❌ Email only'],
                        ['Inventory + CRM Bundled',     '✅ All-in-one platform',        '❌ Invoicing only'],
                        ['Price / Month',               '₹0 – ₹3,999',                 '₹2,000 – ₹10,000+'],
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
            <p>Real results from businesses that switched to ZYLO invoicing.</p>
        </div>

        <div class="grid-3" style="margin-top:3rem;">
            <?php
            $reviews = [
                [
                    'quote' => '"I used to spend 3 hours a week on invoicing. With ZYLO, I create and send an invoice in 90 seconds. The auto-reminders alone recovered ₹1.2L in overdue payments last quarter."',
                    'name'  => 'Rohan Desai',
                    'role'  => 'Freelance Designer · Mumbai',
                    'img'   => 'assets/store/avatar-david.jpg',
                ],
                [
                    'quote' => '"The recurring billing feature is gold. We have 40+ retainer clients and ZYLO invoices all of them automatically on the 1st of every month. Zero manual work."',
                    'name'  => 'Priya Nair',
                    'role'  => 'Director, NairTech Agency · Bengaluru',
                    'img'   => 'assets/store/avatar-sarah.jpg',
                ],
                [
                    'quote' => '"Our clients love the Pay Now button. Average payment time dropped from 22 days to 6 days after we switched to ZYLO. That\'s massive for our cash flow."',
                    'name'  => 'Emily Watson',
                    'role'  => 'Operations Manager · Delhi',
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
            <p>Everything you need to know about ZYLO Invoicing Software.</p>
        </div>

        <div style="margin-top:2.5rem;" itemscope itemtype="https://schema.org/FAQPage">
            <?php
            $faqs = [
                ['q'=>'What is invoicing software?',            'a'=>'Invoicing software helps businesses create, send, and track professional invoices electronically. It automates tax calculations, sends payment reminders, and lets you monitor which invoices are paid, due, or overdue — from any device.'],
                ['q'=>'Is ZYLO invoicing software free?',       'a'=>'Yes. ZYLO offers a free plan with up to 50 invoices per month, basic GST invoicing, and PDF download. The Pro plan starts at ₹3,999/month with unlimited invoices, recurring billing, payment links, and 24/7 support.'],
                ['q'=>'Can I create GST invoices with ZYLO?',   'a'=>'Yes. ZYLO auto-calculates CGST, SGST, and IGST based on supply type and customer\'s state. It generates fully GSTN-compliant invoices and supports e-Invoice with IRN and QR code for eligible businesses.'],
                ['q'=>'Does ZYLO support recurring invoices?',  'a'=>'Yes. Set up recurring invoices on weekly, monthly, or custom schedules. Invoices are generated and sent automatically — perfect for subscription businesses and retainer clients.'],
                ['q'=>'Can clients pay online through ZYLO?',   'a'=>'Yes. Every ZYLO invoice includes a "Pay Now" link. Clients pay via UPI, net banking, cards, or wallets directly from the invoice email or PDF — no separate payment setup required.'],
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
            Start Invoicing Professionally Today — For Free
        </h2>
        <p style="font-size:1.1rem;color:rgba(255,255,255,0.85);margin-bottom:2.5rem;line-height:1.7;">
            Join 10,000+ businesses that create, send, and track invoices with ZYLO. Free plan available — no credit card, no setup fee.
        </p>
        <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
            <a href="contact" class="btn" style="padding:1rem 2.25rem;font-size:1.05rem;background:white;color:var(--primary);border-radius:10px;font-weight:700;">
                Create Your First Invoice Free
            </a>
            <a href="https://wa.me/917501137266?text=Hi%2C%20I%20want%20to%20know%20more%20about%20ZYLO%20Invoicing%20Software"
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
    .feature-img-right { order: 0 !important; }
}
@media (max-width: 480px) {
    .steps-grid { grid-template-columns: 1fr !important; }
    .who-grid   { grid-template-columns: 1fr 1fr !important; }
}
</style>

<?php include 'includes/footer.php'; ?>

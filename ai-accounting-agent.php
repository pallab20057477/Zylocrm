<?php
$pageTitle = "AI Accounting Agent – Automate Your Books with AI | ZYLO CRM";
$pageDescription = "ZYLO's AI Accounting Agent automates bookkeeping, GST filing, expense categorisation, and financial forecasting. Let AI handle your accounts while you focus on growth. Free plan available.";
$pageKeywords = "AI accounting software India, AI bookkeeping, automated accounting, AI GST filing, artificial intelligence accounting, AI expense tracking, smart accounting software, AI financial reports";
$canonicalPath = '/ai-accounting-agent';

$pageSchema = [
    '@context' => 'https://schema.org',
    '@type'    => 'SoftwareApplication',
    'name'     => 'ZYLO AI Accounting Agent',
    'url'      => 'https://zylocrm.com/ai-accounting-agent',
    'description' => 'AI-powered accounting agent that automates bookkeeping, GST compliance, expense categorisation, and financial forecasting for Indian businesses.',
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
        'priceCurrency' => 'USD',
        'price'         => '0',
        'description'   => 'Free plan available. Pro plan from $49/month.',
        'pricingModel'  => 'Freemium'
    ],
    'aggregateRating' => [
        '@type'       => 'AggregateRating',
        'ratingValue' => '4.9',
        'reviewCount' => '248',
        'bestRating'  => '5'
    ],
    'featureList' => [
        'AI-powered bookkeeping automation',
        'Automated GST categorisation & filing',
        'Smart expense classification',
        'AI cash flow forecasting',
        'Anomaly detection & fraud alerts',
        'Natural language financial Q&A'
    ]
];

$faqSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name'  => 'What is an AI Accounting Agent?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'An AI Accounting Agent is a software system that uses artificial intelligence and machine learning to automate bookkeeping tasks such as transaction categorisation, GST filing, invoice matching, expense tracking, and financial report generation — without manual data entry.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'How does ZYLO\'s AI Accounting Agent work?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'ZYLO\'s AI agent connects to your bank feeds, invoices, and expense receipts. It automatically categorises transactions, flags anomalies, calculates GST, and generates reports using trained ML models — learning your business patterns over time to get smarter with every transaction.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Is ZYLO AI Accounting Agent accurate?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'ZYLO\'s AI achieves 98.5% categorisation accuracy on average. All AI actions are fully auditable — every automated entry shows the reasoning behind it, and you can override any decision with one click.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can the AI handle GST filing?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. The AI agent auto-classifies every transaction by GST type (CGST, SGST, IGST), generates GSTR-1 and GSTR-3B ready reports, and flags mismatches before filing — reducing errors and saving hours of manual reconciliation.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Is my financial data safe with ZYLO AI?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. All data is encrypted with 256-bit AES encryption at rest and in transit. AI models are trained on anonymised, aggregated data. Your individual business data is never shared or used to train models for other customers.']
        ]
    ]
];

include 'includes/header.php';
?>
<script type="application/ld+json"><?php echo json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>

<!-- ========== HERO ========== -->
<section style="padding-top:calc(var(--header-height) + 4.5rem); padding-bottom:5rem; background:linear-gradient(160deg, #f0f7fb 0%, #ffffff 60%); position:relative; overflow:hidden;">
    <!-- BG orb -->
    <div style="position:absolute; top:-10%; right:-5%; width:500px; height:500px; background:radial-gradient(circle, rgba(12,79,120,0.07) 0%, transparent 70%); border-radius:50%; pointer-events:none;" aria-hidden="true"></div>

    <div class="container">
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:4rem; align-items:center;" class="intro-grid">
            <div>
                <!-- Badge -->
                <div style="display:inline-flex; align-items:center; gap:0.5rem; background:linear-gradient(135deg,rgba(12,79,120,0.1),rgba(12,79,120,0.05)); color:var(--primary); font-size:0.8rem; font-weight:700; padding:0.4rem 1rem; border-radius:50px; margin-bottom:1.5rem; text-transform:uppercase; letter-spacing:1px; border:1px solid rgba(12,79,120,0.2);">
                    <span style="width:7px;height:7px;background:#22c55e;border-radius:50%;display:inline-block;animation:pulse-dot 2s ease-in-out infinite;"></span>
                    Powered by AI · Live
                </div>

                <h1 style="font-size:3.25rem; color:var(--primary-dark); line-height:1.12; margin-bottom:1.5rem;">
                    Your AI Accounting Agent That Never Sleeps
                </h1>
                <p style="font-size:1.2rem; line-height:1.8; color:var(--text-muted); margin-bottom:2rem;">
                    ZYLO's AI agent reads your transactions, categorises expenses, files GST, and forecasts cash flow — automatically, 24/7. So you can stop doing bookkeeping and start running your business.
                </p>

                <!-- Feature pills -->
                <div style="display:flex; flex-wrap:wrap; gap:0.6rem; margin-bottom:2rem;">
                    <?php foreach(['AI Bookkeeping','Auto GST','Smart Categorisation','Cash Flow AI','Fraud Alerts','Free Plan'] as $pill): ?>
                    <span style="background:white; border:1px solid var(--border-color); color:var(--text-main); font-size:0.82rem; font-weight:600; padding:0.35rem 0.9rem; border-radius:50px; box-shadow:var(--shadow-sm);">✓ &nbsp;<?= $pill ?></span>
                    <?php endforeach; ?>
                </div>

                <div style="display:flex; gap:1rem; flex-wrap:wrap;">
                    <a href="contact" class="btn btn-primary" style="padding:0.9rem 2rem; font-size:1rem;">Try AI Agent Free</a>
                    <a href="#how-it-works" class="btn btn-outline" style="padding:0.9rem 2rem; font-size:1rem;">See How It Works</a>
                </div>
                <p style="margin-top:1.5rem; font-size:0.85rem; color:var(--text-muted); margin-bottom:0;">
                    ⭐ 4.9/5 from 248 reviews &nbsp;·&nbsp; 98.5% AI accuracy rate
                </p>
            </div>

            <div style="position:relative;">
                <img src="assets/store/hero-1.jpg"
                     alt="ZYLO AI Accounting Agent dashboard showing automated transaction categorisation and financial insights"
                     width="580" height="400"
                     style="width:100%; border-radius:20px; box-shadow:var(--shadow-xl); display:block;"
                     fetchpriority="high">

                <!-- Floating: AI categorised -->
                <div style="position:absolute; top:-1rem; left:-1.25rem; background:white; border-radius:14px; padding:0.85rem 1.1rem; box-shadow:var(--shadow-lg); border:1px solid var(--border-color); display:flex; align-items:center; gap:0.7rem; max-width:230px;">
                    <span style="width:36px;height:36px;background:rgba(12,79,120,0.08);border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="17" height="17" fill="none" stroke="var(--primary)" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 3H5a2 2 0 00-2 2v4m6-6h10a2 2 0 012 2v4M9 3v18m0 0h10a2 2 0 002-2V9M9 21H5a2 2 0 01-2-2V9m0 0h18" /></svg>
                    </span>
                    <div>
                        <div style="font-size:0.75rem;color:var(--text-muted);">AI categorised</div>
                        <div style="font-size:0.88rem;font-weight:700;color:var(--text-main);">142 transactions · auto</div>
                    </div>
                </div>

                <!-- Floating: GST saved -->
                <div style="position:absolute; bottom:-1.25rem; right:-1rem; background:white; border-radius:14px; padding:0.85rem 1.1rem; box-shadow:var(--shadow-lg); border:1px solid var(--border-color); display:flex; align-items:center; gap:0.7rem;">
                    <span style="width:36px;height:36px;background:#dcfce7;border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="17" height="17" fill="none" stroke="#16a34a" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    </span>
                    <div>
                        <div style="font-size:0.75rem;color:var(--text-muted);">GST auto-filed</div>
                        <div style="font-size:0.88rem;font-weight:700;color:#16a34a;">GSTR-1 ready ✓</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
@keyframes pulse-dot {
    0%,100% { opacity:1; transform:scale(1); }
    50%      { opacity:0.5; transform:scale(1.5); }
}
</style>

<!-- ========== STATS BAR ========== -->
<section style="padding:2.75rem 0; background:white; border-bottom:1px solid var(--border-color);">
    <div class="container">
        <div style="display:grid; grid-template-columns:repeat(4,1fr); gap:1rem; text-align:center;" class="stats-bar-grid">
            <?php
            $stats = [
                ['val'=>'98.5%',  'label'=>'AI Categorisation Accuracy'],
                ['val'=>'10 hrs', 'label'=>'Saved per Month on Average'],
                ['val'=>'0',      'label'=>'Manual Data Entry Required'],
                ['val'=>'24/7',   'label'=>'AI Agent Always Running'],
            ];
            foreach ($stats as $i => $s):
                $border = $i > 0 ? 'border-left:1px solid var(--border-color);' : '';
            ?>
            <div style="<?= $border ?>">
                <div style="font-size:2rem; font-weight:800; color:var(--primary-dark); line-height:1; margin-bottom:0.4rem;"><?= $s['val'] ?></div>
                <div style="font-size:0.83rem; color:var(--text-muted);"><?= $s['label'] ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== HOW IT WORKS ========== -->
<section id="how-it-works" class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>How the AI Accounting Agent Works</h2>
            <p>Set it up once. Let it run forever.</p>
        </div>

        <div style="display:grid; grid-template-columns:repeat(4,1fr); gap:1.5rem; margin-top:3rem; position:relative;" class="steps-grid">
            <!-- Connector -->
            <div style="position:absolute; top:36px; left:calc(12.5% + 1rem); right:calc(12.5% + 1rem); height:2px; background:linear-gradient(90deg, var(--primary) 0%, var(--primary-light) 100%); z-index:0;" class="steps-connector" aria-hidden="true"></div>

            <?php
            $steps = [
                ['n'=>'1','icon'=>'M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1','title'=>'Connect','desc'=>'Link your bank, invoices, and receipts. One-click sync with 1000+ banks and accounting tools.'],
                ['n'=>'2','icon'=>'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z','title'=>'AI Reads','desc'=>'The AI agent reads every transaction, receipt, and invoice — understanding context, not just numbers.'],
                ['n'=>'3','icon'=>'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15','title'=>'Auto-Process','desc'=>'Transactions are categorised, GST calculated, and reports generated — all without you lifting a finger.'],
                ['n'=>'4','icon'=>'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z','title'=>'You Review','desc'=>'Get a clean daily summary. Override anything with one click. Full audit trail of every AI decision.'],
            ];
            foreach ($steps as $step): ?>
            <div style="text-align:center; padding:2rem 1.25rem; background:white; border-radius:18px; border:1px solid var(--border-color); box-shadow:var(--shadow-sm); position:relative; z-index:1;">
                <div style="width:64px;height:64px;background:var(--primary);color:white;border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 1.25rem;box-shadow:0 0 0 8px rgba(12,79,120,0.1);">
                    <svg width="26" height="26" fill="none" stroke="white" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="<?= $step['icon'] ?>" /></svg>
                </div>
                <div style="font-size:0.75rem;font-weight:700;color:var(--primary);text-transform:uppercase;letter-spacing:1px;margin-bottom:0.5rem;">Step <?= $step['n'] ?></div>
                <h3 style="font-size:1.1rem; color:var(--primary-dark); margin-bottom:0.65rem;"><?= $step['title'] ?></h3>
                <p style="font-size:0.88rem; color:var(--text-muted); line-height:1.65; margin:0;"><?= $step['desc'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== AI CAPABILITIES ========== -->
<section id="features">
    <div class="container">
        <div class="section-title">
            <h2>What the AI Agent Does For You</h2>
            <p>From raw transactions to ready-to-file reports — fully automated.</p>
        </div>

        <div style="display:grid; grid-template-columns:repeat(3,1fr); gap:1.75rem; margin-top:3rem;" class="features-grid">
            <?php
            $features = [
                [
                    'icon'  => 'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15',
                    'color' => 'rgba(12,79,120,0.08)',
                    'title' => 'Auto Bookkeeping',
                    'desc'  => 'Every bank transaction, invoice, and receipt is automatically posted to the correct account. Double-entry bookkeeping done by AI — zero manual journals.',
                    'pts'   => ['Auto journal entries','Bank feed matching','Receipt-to-ledger posting']
                ],
                [
                    'icon'  => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
                    'color' => 'rgba(12,79,120,0.08)',
                    'title' => 'Smart GST Automation',
                    'desc'  => 'AI classifies every transaction by GST type, auto-calculates CGST/SGST/IGST, detects ITC mismatches, and generates GSTR-1 & GSTR-3B reports ready to file.',
                    'pts'   => ['Auto CGST/SGST/IGST split','ITC mismatch detection','GSTR-1 & GSTR-3B ready']
                ],
                [
                    'icon'  => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01',
                    'color' => 'rgba(12,79,120,0.08)',
                    'title' => 'Expense Categorisation',
                    'desc'  => 'AI reads merchant names, amounts, and patterns to categorise every expense accurately — travel, utilities, salaries, vendor payments — and flags deductible items automatically.',
                    'pts'   => ['Merchant pattern recognition','Tax deduction flagging','Custom category rules']
                ],
                [
                    'icon'  => 'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6',
                    'color' => 'rgba(12,79,120,0.08)',
                    'title' => 'Cash Flow Forecasting',
                    'desc'  => 'AI analyses your historical income and expense patterns to forecast cash flow for the next 30, 60, and 90 days — so you never get caught short.',
                    'pts'   => ['30/60/90-day forecasts','Invoice payment predictions','Low-balance early warnings']
                ],
                [
                    'icon'  => 'M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z',
                    'color' => 'rgba(12,79,120,0.08)',
                    'title' => 'Anomaly & Fraud Detection',
                    'desc'  => 'The AI agent monitors every transaction in real time, flagging unusual patterns — duplicate payments, abnormal amounts, or suspicious vendor activity — before they become problems.',
                    'pts'   => ['Duplicate payment alerts','Unusual spend detection','Vendor fraud signals']
                ],
                [
                    'icon'  => 'M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z',
                    'color' => 'rgba(12,79,120,0.08)',
                    'title' => 'Natural Language Insights',
                    'desc'  => 'Ask your books anything. "What did I spend on travel last quarter?" or "Which clients owe me the most?" — get instant answers in plain English, no SQL needed.',
                    'pts'   => ['Plain English queries','Instant financial answers','No technical knowledge needed']
                ],
            ];
            foreach ($features as $f): ?>
            <div class="card" style="padding:2rem; border-left:3px solid var(--primary); display:flex; flex-direction:column;">
                <div style="width:48px;height:48px;background:<?= $f['color'] ?>;border-radius:10px;display:flex;align-items:center;justify-content:center;margin-bottom:1.25rem;color:var(--primary);flex-shrink:0;">
                    <svg width="23" height="23" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="<?= $f['icon'] ?>" /></svg>
                </div>
                <h3 style="font-size:1.1rem; color:var(--primary-dark); margin-bottom:0.7rem;"><?= $f['title'] ?></h3>
                <p style="color:var(--text-muted); font-size:0.92rem; line-height:1.7; margin-bottom:1rem; flex:1;"><?= $f['desc'] ?></p>
                <ul style="list-style:none; padding:0; margin:0;">
                    <?php foreach($f['pts'] as $pt): ?>
                    <li style="display:flex;align-items:center;gap:0.5rem;font-size:0.84rem;color:var(--text-muted);margin-bottom:0.35rem;">
                        <svg width="13" height="13" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                        <?= $pt ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== FEATURE SPOTLIGHT 1: AI BOOKKEEPING ========== -->
<section class="bg-offwhite">
    <div class="container">
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:5rem; align-items:center;" class="intro-grid">
            <div>
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.78rem;font-weight:700;padding:0.3rem 0.85rem;border-radius:50px;margin-bottom:1.25rem;text-transform:uppercase;letter-spacing:1px;">AI Bookkeeping</div>
                <h2 style="font-size:2.2rem; color:var(--primary-dark); line-height:1.25; margin-bottom:1.25rem;">
                    From Raw Transactions to Clean Books — Automatically
                </h2>
                <p style="font-size:1.05rem; line-height:1.8; color:var(--text-muted); margin-bottom:1.5rem;">
                    ZYLO's AI agent ingests every bank transaction the moment it lands, matches it against invoices and purchase orders, and posts it to the right account — no spreadsheets, no manual journals, no end-of-month scramble.
                </p>
                <p style="font-size:1.05rem; line-height:1.8; color:var(--text-muted); margin-bottom:1.75rem;">
                    The AI learns your business patterns over time, getting more accurate with every transaction. Most customers see 98%+ automation within the first 30 days.
                </p>

                <!-- Mini stat cards -->
                <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem; margin-bottom:1.75rem;">
                    <?php
                    $miniStats = [
                        ['val'=>'98.5%','label'=>'Categorisation accuracy'],
                        ['val'=>'10 hrs','label'=>'Saved per month'],
                        ['val'=>'<5 min','label'=>'Monthly close time'],
                        ['val'=>'Zero','label'=>'Manual data entry'],
                    ];
                    foreach ($miniStats as $ms): ?>
                    <div style="background:white;border:1px solid var(--border-color);border-radius:12px;padding:0.9rem 1rem;">
                        <div style="font-size:1.35rem;font-weight:800;color:var(--primary-dark);margin-bottom:0.2rem;"><?= $ms['val'] ?></div>
                        <div style="font-size:0.8rem;color:var(--text-muted);"><?= $ms['label'] ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a href="contact" class="btn btn-primary" style="padding:0.75rem 1.75rem;">Start Automating</a>
            </div>
            <div style="position:relative;">
                <img src="assets/store/section-1.jpg"
                     alt="ZYLO AI agent automatically categorising bank transactions in real time"
                     width="560" height="380"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" loading="lazy">
                <!-- Floating badge -->
                <div style="position:absolute;bottom:-1rem;left:-1rem;background:white;border-radius:12px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);">
                    <div style="font-size:0.75rem;color:var(--text-muted);margin-bottom:0.25rem;">AI accuracy this month</div>
                    <div style="font-size:1rem;font-weight:800;color:var(--primary-dark);">98.7% <span style="font-size:0.78rem;color:#16a34a;font-weight:600;">↑ learning</span></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== FEATURE SPOTLIGHT 2: GST + FORECAST ========== -->
<section>
    <div class="container">
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:5rem; align-items:center;" class="intro-grid">
            <div style="order:2;" class="feature-img-right">
                <div style="position:relative;">
                    <img src="assets/store/section-2.jpg"
                         alt="ZYLO AI cash flow forecasting and GST automation dashboard"
                         width="560" height="380"
                         style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" loading="lazy">
                    <div style="position:absolute;top:-1rem;right:-1rem;background:white;border-radius:12px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);">
                        <div style="font-size:0.75rem;color:var(--text-muted);margin-bottom:0.25rem;">Cash flow forecast (30d)</div>
                        <div style="font-size:1rem;font-weight:800;color:var(--primary-dark);">₹4,18,000 <span style="font-size:0.78rem;color:#16a34a;font-weight:600;">surplus</span></div>
                    </div>
                </div>
            </div>
            <div style="order:1;">
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.78rem;font-weight:700;padding:0.3rem 0.85rem;border-radius:50px;margin-bottom:1.25rem;text-transform:uppercase;letter-spacing:1px;">GST + Forecasting</div>
                <h2 style="font-size:2.2rem; color:var(--primary-dark); line-height:1.25; margin-bottom:1.25rem;">
                    Never Miss a GST Deadline or a Cash Crunch Again
                </h2>
                <p style="font-size:1.05rem; line-height:1.8; color:var(--text-muted); margin-bottom:1.5rem;">
                    The AI agent tracks every rupee of GST liability and ITC in real time. When filing time comes, your GSTR-1 and GSTR-3B are already prepared — reviewed, reconciled, and ready to upload.
                </p>
                <p style="font-size:1.05rem; line-height:1.8; color:var(--text-muted); margin-bottom:1.75rem;">
                    Meanwhile, the cash flow AI analyses your invoice payment patterns and expense cycles to give you 30, 60, and 90-day forecasts — with early warnings if a shortfall is coming.
                </p>
                <div style="display:grid; grid-template-columns:1fr 1fr; gap:0.75rem; margin-bottom:1.75rem;">
                    <?php foreach(['Auto ITC matching','GSTR-1 & GSTR-3B','30/60/90-day forecast','Payment predictions','Low-balance alerts','One-click filing prep'] as $pt): ?>
                    <div style="display:flex;align-items:center;gap:0.5rem;font-size:0.88rem;color:var(--text-muted);">
                        <svg width="14" height="14" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                        <?= $pt ?>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a href="contact" class="btn btn-outline" style="padding:0.75rem 1.75rem;">See a Live Demo</a>
            </div>
        </div>
    </div>
</section>

<!-- ========== COMPARISON ========== -->
<section class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>AI Agent vs Manual Bookkeeping vs Traditional Software</h2>
            <p>See exactly what changes when AI takes over the accounts.</p>
        </div>

        <div style="overflow-x:auto; margin-top:2.5rem; border-radius:16px; box-shadow:var(--shadow-md); border:1px solid var(--border-color);" class="comparison-table">
            <table style="width:100%; border-collapse:collapse; background:white; min-width:580px;">
                <thead>
                    <tr style="background:var(--primary); color:white;">
                        <th style="padding:1.1rem 1.5rem; text-align:left; font-weight:600; font-size:0.93rem; width:35%;">Task</th>
                        <th style="padding:1.1rem 1.5rem; text-align:center; font-weight:700; font-size:0.93rem;">
                            <span style="background:rgba(255,255,255,0.15);padding:0.2rem 0.75rem;border-radius:50px;">ZYLO AI Agent</span>
                        </th>
                        <th style="padding:1.1rem 1.5rem; text-align:center; font-weight:600; font-size:0.93rem; opacity:0.8;">Manual / Traditional</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $rows = [
                        ['Transaction categorisation',  '⚡ Instant, AI-automated',      '⏱️ 2–4 hrs/month manual'],
                        ['GST calculation & filing',    '✅ Auto-calculated + GSTR-ready','❌ Manual + error-prone'],
                        ['Bank reconciliation',          '✅ Auto-matched daily',          '⏱️ 3–5 hrs/month'],
                        ['Expense deduction flagging',  '✅ AI identifies deductibles',   '❌ Missed or manual'],
                        ['Cash flow forecast',           '✅ 90-day AI forecast',          '❌ Not available'],
                        ['Fraud / anomaly detection',   '✅ Real-time AI alerts',         '❌ Discovered too late'],
                        ['Month-end close',              '< 5 minutes',                   '2–3 days'],
                        ['Cost',                         '₹0 – ₹3,999/month',            '₹15,000+/month (accountant)'],
                    ];
                    foreach ($rows as $i => $row):
                        $bg = $i % 2 === 1 ? 'background:#f8f9fa;' : '';
                    ?>
                    <tr style="<?= $bg ?>">
                        <td style="padding:1rem 1.5rem;font-weight:600;color:var(--primary-dark);font-size:0.9rem;border-bottom:1px solid var(--border-color);" data-label="Task"><?= $row[0] ?></td>
                        <td style="padding:1rem 1.5rem;text-align:center;font-size:0.9rem;border-bottom:1px solid var(--border-color);color:var(--primary-dark);font-weight:500;" data-label="ZYLO AI"><?= $row[1] ?></td>
                        <td style="padding:1rem 1.5rem;text-align:center;font-size:0.9rem;border-bottom:1px solid var(--border-color);color:var(--text-muted);" data-label="Manual"><?= $row[2] ?></td>
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
            <h2>What Businesses Say About the AI Agent</h2>
            <p>Real results from teams that handed their books to ZYLO AI.</p>
        </div>

        <div class="grid-3" style="margin-top:3rem;">
            <?php
            $reviews = [
                [
                    'quote' => '"I used to spend 3 hours every Sunday doing bookkeeping. With ZYLO AI, my books close themselves. I just review a 5-minute summary on Monday morning. That\'s it."',
                    'name'  => 'Arjun Mehta',
                    'role'  => 'Founder, Mehta Exports · Surat',
                    'img'   => 'assets/store/avatar-david.jpg',
                ],
                [
                    'quote' => '"The GST automation alone is worth every rupee. ITC mismatches used to cost us ₹40,000+ a year in penalties. ZYLO AI catches them before we file. Zero penalties for 18 months."',
                    'name'  => 'Kavitha Reddy',
                    'role'  => 'CFO, RedTech Solutions · Hyderabad',
                    'img'   => 'assets/store/avatar-sarah.jpg',
                ],
                [
                    'quote' => '"I asked the AI \'what\'s my most profitable client this year?\' and got the answer in 3 seconds. I used to pull that from 4 different spreadsheets. This is the future."',
                    'name'  => 'Emily Watson',
                    'role'  => 'Consultant · Bengaluru',
                    'img'   => 'assets/store/avatar-emily.jpg',
                ],
            ];
            foreach ($reviews as $r): ?>
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
            <p>Everything you need to know about ZYLO's AI Accounting Agent.</p>
        </div>

        <div style="margin-top:2.5rem;" itemscope itemtype="https://schema.org/FAQPage">
            <?php
            $faqs = [
                ['q'=>'What is an AI Accounting Agent?',            'a'=>'An AI Accounting Agent is a software system that uses artificial intelligence and machine learning to automate bookkeeping — transaction categorisation, GST filing, invoice matching, expense tracking, and financial report generation — without manual data entry.'],
                ['q'=>'How does ZYLO\'s AI Accounting Agent work?', 'a'=>'ZYLO\'s AI agent connects to your bank feeds, invoices, and expense receipts. It automatically categorises transactions, flags anomalies, calculates GST, and generates reports using trained ML models — learning your business patterns over time to get smarter with every transaction.'],
                ['q'=>'Is ZYLO AI Accounting Agent accurate?',      'a'=>'ZYLO\'s AI achieves 98.5% categorisation accuracy on average. All AI actions are fully auditable — every automated entry shows the reasoning behind it, and you can override any decision with one click.'],
                ['q'=>'Can the AI handle GST filing?',              'a'=>'Yes. The AI agent auto-classifies every transaction by GST type (CGST, SGST, IGST), generates GSTR-1 and GSTR-3B ready reports, and flags mismatches before filing — reducing errors and saving hours of manual reconciliation.'],
                ['q'=>'Is my financial data safe with ZYLO AI?',   'a'=>'All data is encrypted with 256-bit AES at rest and in transit. AI models are trained on anonymised, aggregated data. Your individual business data is never shared or used to train models for other customers.'],
            ];
            foreach ($faqs as $i => $faq): ?>
            <div style="border:1px solid var(--border-color);border-radius:12px;margin-bottom:0.9rem;overflow:hidden;"
                 itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <button onclick="toggleFaq(this)" aria-expanded="<?= $i===0?'true':'false' ?>"
                    style="width:100%;text-align:left;background:white;border:none;padding:1.2rem 1.5rem;font-size:0.97rem;font-weight:600;color:var(--primary-dark);cursor:pointer;display:flex;justify-content:space-between;align-items:center;gap:1rem;">
                    <span itemprop="name"><?= $faq['q'] ?></span>
                    <svg class="faq-icon" width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"
                         style="flex-shrink:0;transition:transform 0.3s;<?= $i===0?'transform:rotate(180deg)':'' ?>">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
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
<section style="text-align:center;padding:6rem 0;background:linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);">
    <div class="container" style="max-width:700px;margin:0 auto;">
        <div style="display:inline-flex;align-items:center;gap:0.5rem;background:rgba(255,255,255,0.1);color:rgba(255,255,255,0.9);font-size:0.8rem;font-weight:700;padding:0.4rem 1rem;border-radius:50px;margin-bottom:1.5rem;text-transform:uppercase;letter-spacing:1px;border:1px solid rgba(255,255,255,0.2);">
            <span style="width:7px;height:7px;background:#22c55e;border-radius:50%;display:inline-block;animation:pulse-dot 2s ease-in-out infinite;"></span>
            AI Agent Ready to Activate
        </div>
        <h2 style="font-size:2.5rem;color:white;margin-bottom:1.25rem;line-height:1.2;">
            Let AI Handle Your Books. You Handle Your Business.
        </h2>
        <p style="font-size:1.1rem;color:rgba(255,255,255,0.85);margin-bottom:2.5rem;line-height:1.7;">
            Join 10,000+ businesses that have automated their accounting with ZYLO AI. Free plan available — no credit card, no setup fee.
        </p>
        <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
            <a href="contact" class="btn" style="padding:1rem 2.25rem;font-size:1.05rem;background:white;color:var(--primary);border-radius:10px;font-weight:700;">
                Activate AI Agent Free
            </a>
            <a href="https://wa.me/917501137266?text=Hi%2C%20I%20want%20to%20know%20more%20about%20ZYLO%20AI%20Accounting%20Agent"
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
    var body     = btn.nextElementSibling;
    var icon     = btn.querySelector('.faq-icon');
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
    .feature-img-right { order: 0 !important; }
}
@media (max-width: 480px) {
    .steps-grid     { grid-template-columns: 1fr !important; }
    .stats-bar-grid { grid-template-columns: 1fr 1fr !important; }
}
</style>

<?php include 'includes/footer.php'; ?>

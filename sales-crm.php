<?php
$pageTitle = "Sales CRM Software – Manage Leads, Pipeline & Close Deals Faster | ZYLO CRM";
$pageDescription = "ZYLO's Sales CRM helps you manage leads, track deals through a visual pipeline, automate follow-ups, and close more deals. Free plan available. Trusted by 10,000+ Indian businesses.";
$pageKeywords = "sales CRM software India, CRM for small business, lead management software, sales pipeline software, customer relationship management India, CRM software free, contact management software, deal tracking software";
$canonicalPath = '/sales-crm';

$pageSchema = [
    '@context' => 'https://schema.org',
    '@type'    => 'SoftwareApplication',
    'name'     => 'ZYLO Sales CRM',
    'url'      => 'https://zylocrm.com/sales-crm',
    'description' => 'Sales CRM software for Indian businesses. Manage leads, track deals through a visual pipeline, automate follow-ups, and get a 360-degree view of every customer.',
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
        'reviewCount' => '538',
        'bestRating'  => '5'
    ],
    'featureList' => [
        'Visual sales pipeline with drag-and-drop deal management',
        'Lead capture and scoring',
        'Automated follow-up reminders and sequences',
        '360-degree customer view with interaction history',
        'WhatsApp and email integration',
        'Sales forecasting and revenue reports',
        'Team performance analytics',
        'Mobile CRM for Android and iOS'
    ]
];

$faqSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name'  => 'What is a Sales CRM?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'A Sales CRM (Customer Relationship Management) software helps businesses manage leads, track deals through a sales pipeline, log customer interactions, automate follow-ups, and analyse sales performance — all in one place. It replaces spreadsheets and scattered notes with a centralised system that helps sales teams close more deals.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Is ZYLO CRM free?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. ZYLO offers a free plan with unlimited contacts, basic pipeline management, and task tracking for up to 3 users. The Pro plan starts at ₹3,999/month with unlimited users, automation, WhatsApp integration, and advanced analytics.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Does ZYLO CRM integrate with WhatsApp?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. ZYLO integrates with WhatsApp Business. Log WhatsApp conversations against contacts, send follow-up messages directly from the CRM, and track message history alongside emails and calls — all in one conversation timeline.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can I manage my entire sales team in ZYLO CRM?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. ZYLO CRM supports unlimited team members on the Pro plan. Assign leads to specific team members, track individual and team performance, set sales targets, and monitor conversion rates — all from the manager dashboard.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can I import my existing contacts into ZYLO CRM?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. Import contacts and leads from Excel, CSV, or directly from Google Contacts. ZYLO maps your existing fields automatically and flags duplicates before import — so your database stays clean from day one.']
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
                    Close 3× More Deals
                </div>

                <h1 style="font-size:3.2rem;color:var(--primary-dark);line-height:1.12;margin-bottom:1.4rem;">
                    Sales CRM That Helps Your Team Close More, Faster
                </h1>
                <p style="font-size:1.18rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.9rem;">
                    Capture every lead, track every deal through a visual pipeline, automate follow-ups, and get a complete view of every customer — so nothing slips through the cracks and no opportunity is left on the table.
                </p>

                <div style="display:flex;flex-wrap:wrap;gap:0.55rem;margin-bottom:2rem;">
                    <?php foreach(['Visual Pipeline','Lead Scoring','Auto Follow-ups','WhatsApp CRM','360° Customer View','Free Plan'] as $p): ?>
                    <span style="background:white;border:1px solid var(--border-color);color:var(--text-main);font-size:0.82rem;font-weight:600;padding:0.35rem 0.9rem;border-radius:50px;box-shadow:var(--shadow-sm);">✓ &nbsp;<?= $p ?></span>
                    <?php endforeach; ?>
                </div>

                <div style="display:flex;gap:1rem;flex-wrap:wrap;">
                    <a href="contact" class="btn btn-primary" style="padding:0.9rem 2rem;font-size:1rem;">Start CRM Free</a>
                    <a href="#features" class="btn btn-outline" style="padding:0.9rem 2rem;font-size:1rem;">See All Features</a>
                </div>
                <p style="margin-top:1.5rem;font-size:0.85rem;color:var(--text-muted);margin-bottom:0;">
                    ⭐ 4.8/5 from 538 reviews &nbsp;·&nbsp; Trusted by 10,000+ businesses
                </p>
            </div>

            <div style="position:relative;">
                <img src="assets/store/section-1.jpg"
                     alt="ZYLO Sales CRM dashboard showing visual sales pipeline with leads and deal stages"
                     width="580" height="400"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;"
                     fetchpriority="high">

                <!-- Floating: Deal won -->
                <div style="position:absolute;top:-1rem;left:-1.25rem;background:white;border-radius:14px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.7rem;">
                    <span style="width:36px;height:36px;background:#dcfce7;border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="17" height="17" fill="none" stroke="#16a34a" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.75rem;color:var(--text-muted);">Deal closed</div>
                        <div style="font-size:0.88rem;font-weight:700;color:#16a34a;">₹2,40,000 · Won ✓</div>
                    </div>
                </div>

                <!-- Floating: Pipeline value -->
                <div style="position:absolute;bottom:-1.25rem;right:-1rem;background:white;border-radius:14px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.7rem;">
                    <span style="width:36px;height:36px;background:rgba(12,79,120,0.08);border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="17" height="17" fill="none" stroke="var(--primary)" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.75rem;color:var(--text-muted);">Pipeline this month</div>
                        <div style="font-size:0.88rem;font-weight:700;color:var(--text-main);">₹18,40,000 · 24 deals</div>
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
                ['val'=>'3×',     'label'=>'More Deals Closed on Average'],
                ['val'=>'47%',    'label'=>'Reduction in Follow-up Misses'],
                ['val'=>'360°',   'label'=>'Customer View Per Contact'],
                ['val'=>'10,000+','label'=>'Sales Teams Trust ZYLO'],
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

<!-- ========== PIPELINE SPOTLIGHT ========== -->
<section>
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:center;" class="intro-grid">
            <div>
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.78rem;font-weight:700;padding:0.3rem 0.85rem;border-radius:50px;margin-bottom:1.25rem;text-transform:uppercase;letter-spacing:1px;">Visual Pipeline</div>
                <h2 style="font-size:2.2rem;color:var(--primary-dark);line-height:1.25;margin-bottom:1.25rem;">
                    See Every Deal. Know Exactly Where Each One Stands.
                </h2>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.5rem;">
                    ZYLO's drag-and-drop sales pipeline gives your team a single, shared view of every deal in progress. Move deals between stages with one drag, see deal value at each stage, and spot bottlenecks before they cost you revenue.
                </p>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.75rem;">
                    Build unlimited pipelines for different products, regions, or teams. Each pipeline can have its own custom stages, deal fields, and win probability weightings.
                </p>

                <!-- Pipeline stages visual -->
                <div style="display:flex;gap:0.5rem;margin-bottom:1.75rem;overflow-x:auto;padding-bottom:0.5rem;">
                    <?php
                    $stages = [
                        ['label'=>'New Lead',      'count'=>'12', 'value'=>'₹8.2L', 'color'=>'#e0f2fe'],
                        ['label'=>'Contacted',     'count'=>'8',  'value'=>'₹6.1L', 'color'=>'#dbeafe'],
                        ['label'=>'Demo Done',     'count'=>'5',  'value'=>'₹4.8L', 'color'=>'#ede9fe'],
                        ['label'=>'Proposal Sent', 'count'=>'4',  'value'=>'₹3.9L', 'color'=>'#fef9c3'],
                        ['label'=>'Won ✓',         'count'=>'3',  'value'=>'₹2.4L', 'color'=>'#dcfce7'],
                    ];
                    foreach($stages as $stage): ?>
                    <div style="background:<?= $stage['color'] ?>;border-radius:10px;padding:0.7rem 0.85rem;min-width:90px;flex-shrink:0;">
                        <div style="font-size:0.7rem;font-weight:700;color:var(--primary-dark);margin-bottom:0.35rem;"><?= $stage['label'] ?></div>
                        <div style="font-size:1.1rem;font-weight:800;color:var(--primary-dark);"><?= $stage['count'] ?></div>
                        <div style="font-size:0.72rem;color:var(--text-muted);"><?= $stage['value'] ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a href="contact" class="btn btn-primary" style="padding:0.75rem 1.75rem;">Try Pipeline View Free</a>
            </div>

            <div style="position:relative;">
                <img src="assets/store/section-2.jpg"
                     alt="ZYLO CRM visual sales pipeline with drag-and-drop deal stages"
                     width="560" height="380"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" loading="lazy">
                <div style="position:absolute;bottom:-1rem;right:-1rem;background:white;border-radius:12px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);">
                    <div style="font-size:0.75rem;color:var(--text-muted);margin-bottom:0.2rem;">Win rate this quarter</div>
                    <div style="font-size:0.9rem;font-weight:700;color:var(--text-main);">68% <span style="color:#16a34a;font-size:0.8rem;">↑ 12% vs last Q</span></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== KEY FEATURES ========== -->
<section id="features" class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>Everything Your Sales Team Needs to Win More Deals</h2>
            <p>From first contact to closed invoice — ZYLO CRM covers the entire sales journey.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.75rem;margin-top:3rem;" class="features-grid">
            <?php
            $features = [
                [
                    'icon'  => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z',
                    'title' => 'Lead Capture & Management',
                    'desc'  => 'Capture leads from web forms, WhatsApp, email, and referrals automatically. Assign to the right rep, score by potential, and track every interaction from first touch.',
                    'pts'   => ['Web form lead capture','Auto lead assignment','Lead scoring & prioritisation']
                ],
                [
                    'icon'  => 'M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2',
                    'title' => 'Visual Sales Pipeline',
                    'desc'  => 'Drag-and-drop deals across custom pipeline stages. See total value at each stage, win probability, and expected close dates — so you always know where your revenue is coming from.',
                    'pts'   => ['Unlimited custom pipelines','Drag-and-drop deal movement','Revenue forecast per stage']
                ],
                [
                    'icon'  => 'M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9',
                    'title' => 'Automated Follow-up Sequences',
                    'desc'  => 'Set up follow-up sequences that run automatically. ZYLO reminds your team at the right time, sends WhatsApp or email follow-ups, and escalates if there\'s no response.',
                    'pts'   => ['Time-based follow-up triggers','WhatsApp & email sequences','Escalation on no-response']
                ],
                [
                    'icon'  => 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z',
                    'title' => '360° Customer View',
                    'desc'  => 'Every contact has a complete timeline — all calls, emails, WhatsApp messages, meetings, quotes, invoices, and notes in one place. Your team is always fully briefed before every interaction.',
                    'pts'   => ['Full interaction history','Linked quotes & invoices','Meeting notes & call logs']
                ],
                [
                    'icon'  => 'M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z',
                    'title' => 'WhatsApp & Email Integration',
                    'desc'  => 'Log WhatsApp and email conversations directly against contacts. Send follow-ups from within the CRM. Track open rates, response times, and conversation threads — all in one timeline.',
                    'pts'   => ['WhatsApp Business integration','Email open & click tracking','Unified conversation timeline']
                ],
                [
                    'icon'  => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z',
                    'title' => 'Sales Reports & Forecasting',
                    'desc'  => 'Real-time dashboards show revenue won, conversion rates, avg deal size, and sales cycle length. Forecast next month\'s revenue based on weighted pipeline — so you can plan with confidence.',
                    'pts'   => ['Real-time revenue dashboard','Weighted pipeline forecast','Rep-wise performance reports']
                ],
                [
                    'icon'  => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2',
                    'title' => 'Quotes & Invoices from CRM',
                    'desc'  => 'Create and send quotations directly from a deal card. Once approved, convert to a GST invoice in one click. The entire quote-to-cash journey happens without switching tools.',
                    'pts'   => ['Quote from deal card','1-click quote to invoice','GST invoice generation']
                ],
                [
                    'icon'  => 'M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z',
                    'title' => 'Mobile CRM',
                    'desc'  => 'Full CRM access on the go. Your field sales team can update deal stages, log calls, add notes, and check customer history from their phone — even offline.',
                    'pts'   => ['iOS & Android app','Offline mode','Location-based check-ins']
                ],
                [
                    'icon'  => 'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z',
                    'title' => 'Team Management & Targets',
                    'desc'  => 'Set monthly and quarterly sales targets per rep. Track attainment, compare team performance, and identify coaching opportunities — all from the manager dashboard.',
                    'pts'   => ['Individual sales targets','Leaderboard view','Coaching flag alerts']
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

<!-- ========== FOLLOW-UP SPOTLIGHT ========== -->
<section>
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:center;" class="intro-grid">
            <div>
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.78rem;font-weight:700;padding:0.3rem 0.85rem;border-radius:50px;margin-bottom:1.25rem;text-transform:uppercase;letter-spacing:1px;">Auto Follow-ups</div>
                <h2 style="font-size:2.2rem;color:var(--primary-dark);line-height:1.25;margin-bottom:1.25rem;">
                    Never Miss a Follow-up. Not Even Once.
                </h2>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.5rem;">
                    47% of deals are lost because no one followed up at the right time. ZYLO eliminates that entirely. Set follow-up sequences that run automatically — reminders for your team, WhatsApp messages to the prospect, escalations if there's silence.
                </p>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.75rem;">
                    The right message, to the right person, at exactly the right moment — without anyone manually tracking it.
                </p>
                <div style="display:grid;grid-template-columns:1fr 1fr;gap:0.75rem;margin-bottom:1.75rem;">
                    <?php foreach(['Day 1: Welcome message','Day 3: Follow-up call alert','Day 7: Demo offer via WhatsApp','Day 14: Proposal reminder','Day 21: Escalate to manager','Custom schedule support'] as $pt): ?>
                    <div style="display:flex;align-items:center;gap:0.5rem;font-size:0.88rem;color:var(--text-muted);">
                        <svg width="14" height="14" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <?= $pt ?>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a href="contact" class="btn btn-primary" style="padding:0.75rem 1.75rem;">Set Up Auto Follow-ups</a>
            </div>

            <div style="position:relative;">
                <img src="assets/store/hero-1.jpg"
                     alt="ZYLO CRM automated follow-up sequence showing WhatsApp and email reminders timeline"
                     width="560" height="380"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" loading="lazy">
                <div style="position:absolute;top:-1rem;right:-1rem;background:white;border-radius:12px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);">
                    <div style="font-size:0.75rem;color:var(--text-muted);margin-bottom:0.2rem;">Follow-up sent</div>
                    <div style="font-size:0.88rem;font-weight:700;color:var(--text-main);">WhatsApp · 3 leads · just now</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== WHO IT'S FOR ========== -->
<section class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>Built for Every Sales Team</h2>
            <p>Whether you're a solo founder or running a 50-person sales floor — ZYLO CRM scales with you.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.75rem;margin-top:3rem;" class="perfect-for-grid">
            <?php
            $personas = [
                [
                    'icon'  => 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z',
                    'title' => 'Solo Founders & Freelancers',
                    'desc'  => 'Keep track of every prospect without a spreadsheet. Know exactly who to follow up with today, send quotes from within the CRM, and convert leads to paying clients faster.',
                    'link'  => 'freelancers-self-employed',
                    'pts'   => ['Simple lead tracking','WhatsApp follow-ups','Quote from CRM']
                ],
                [
                    'icon'  => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
                    'title' => 'SMBs & Growing Teams',
                    'desc'  => 'Give your sales team a shared pipeline so everyone\'s on the same page. Automate follow-ups, track team performance, and forecast next month\'s revenue accurately.',
                    'link'  => 'smbs',
                    'pts'   => ['Shared team pipeline','Auto follow-up sequences','Revenue forecasting']
                ],
                [
                    'icon'  => 'M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                    'title' => 'Agencies & Consultancies',
                    'desc'  => 'Manage a high-volume outbound pipeline with custom stages per client type. Track proposal status, schedule demos, and convert opportunities to retainer clients.',
                    'link'  => 'consultants',
                    'pts'   => ['Multi-pipeline support','Proposal tracking','Retainer client management']
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
            <h2>ZYLO CRM vs Other Sales CRM Software</h2>
            <p>Why 10,000+ Indian sales teams chose ZYLO over the alternatives.</p>
        </div>

        <div style="overflow-x:auto;margin-top:2.5rem;border-radius:16px;box-shadow:var(--shadow-md);border:1px solid var(--border-color);" class="comparison-table">
            <table style="width:100%;border-collapse:collapse;background:white;min-width:560px;">
                <thead>
                    <tr style="background:var(--primary);color:white;">
                        <th style="padding:1.1rem 1.5rem;text-align:left;font-weight:600;font-size:0.93rem;width:34%;">Feature</th>
                        <th style="padding:1.1rem 1.5rem;text-align:center;font-weight:700;font-size:0.93rem;">
                            <span style="background:rgba(255,255,255,0.15);padding:0.2rem 0.75rem;border-radius:50px;">ZYLO CRM</span>
                        </th>
                        <th style="padding:1.1rem 1.5rem;text-align:center;font-weight:600;font-size:0.93rem;opacity:0.8;">Other CRM Tools</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $rows = [
                        ['Free Plan',                         '✅ Forever free tier',            '❌ Trial only (14–30 days)'],
                        ['WhatsApp CRM Integration',          '✅ Built-in WhatsApp Business',   '❌ Not available or paid add-on'],
                        ['GST Invoice from CRM',              '✅ 1-click quote → GST invoice',  '❌ Requires separate billing tool'],
                        ['Inventory Linked to CRM',           '✅ All-in-one platform',          '❌ Separate tools required'],
                        ['Automated Follow-up Sequences',     '✅ WhatsApp + email automation',  '⚠️ Email only or paid plan'],
                        ['Mobile App (Android/iOS)',          '✅ Full offline CRM',             '⚠️ Basic / view-only mobile'],
                        ['India-Specific (GST, INR, Hindi)', '✅ Built for India',              '❌ US/EU-centric design'],
                        ['Price / Month',                     '₹0 – ₹3,999',                   '₹4,000 – ₹25,000+'],
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
            <p>Real results from sales teams that switched to ZYLO CRM.</p>
        </div>

        <div class="grid-3" style="margin-top:3rem;">
            <?php
            $reviews = [
                [
                    'quote' => '"Our sales team was losing leads in WhatsApp chat chaos. ZYLO\'s WhatsApp CRM integration changed everything. Every conversation is logged against the contact. Win rate went from 28% to 51% in 3 months."',
                    'name'  => 'Rohan Desai',
                    'role'  => 'Sales Head, RD Solutions · Mumbai',
                    'img'   => 'assets/store/avatar-david.jpg',
                ],
                [
                    'quote' => '"The automated follow-up sequences alone paid for the subscription 10× over. We stopped losing deals to silence. ZYLO follows up so our reps don\'t have to remember — and it never misses."',
                    'name'  => 'Priya Nair',
                    'role'  => 'Founder, NairTech Consulting · Bengaluru',
                    'img'   => 'assets/store/avatar-sarah.jpg',
                ],
                [
                    'quote' => '"I love that I can send a quote and convert it to a GST invoice in one click — right from the deal card. No switching tools. Our sales cycle dropped from 21 days to 9 days."',
                    'name'  => 'Emily Watson',
                    'role'  => 'Director, Craft Exports · Delhi',
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
            <p>Everything you need to know about ZYLO Sales CRM.</p>
        </div>

        <div style="margin-top:2.5rem;" itemscope itemtype="https://schema.org/FAQPage">
            <?php
            $faqs = [
                ['q'=>'What is a Sales CRM?',                         'a'=>'A Sales CRM helps businesses manage leads, track deals through a pipeline, log customer interactions, automate follow-ups, and analyse sales performance — all in one place. It replaces spreadsheets with a centralised system that helps sales teams close more deals.'],
                ['q'=>'Is ZYLO CRM free?',                            'a'=>'Yes. ZYLO offers a free plan with unlimited contacts, basic pipeline management, and task tracking for up to 3 users. The Pro plan starts at ₹3,999/month with unlimited users, automation, WhatsApp integration, and advanced analytics.'],
                ['q'=>'Does ZYLO CRM integrate with WhatsApp?',       'a'=>'Yes. ZYLO integrates with WhatsApp Business. Log conversations against contacts, send follow-up messages from the CRM, and track message history alongside emails and calls — all in one timeline.'],
                ['q'=>'Can I manage my entire sales team in ZYLO?',   'a'=>'Yes. ZYLO CRM supports unlimited team members on the Pro plan. Assign leads, track individual and team performance, set targets, and monitor conversion rates — all from the manager dashboard.'],
                ['q'=>'Can I import existing contacts into ZYLO CRM?','a'=>'Yes. Import from Excel, CSV, or Google Contacts. ZYLO auto-maps your fields and flags duplicates before import — keeping your database clean from day one.'],
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
            Stop Losing Deals to Silence. Start Closing More.
        </h2>
        <p style="font-size:1.1rem;color:rgba(255,255,255,0.85);margin-bottom:2.5rem;line-height:1.7;">
            Join 10,000+ Indian sales teams that manage leads, pipelines, and follow-ups with ZYLO CRM. Free plan available — no credit card, no setup fee.
        </p>
        <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
            <a href="contact" class="btn" style="padding:1rem 2.25rem;font-size:1.05rem;background:white;color:var(--primary);border-radius:10px;font-weight:700;">
                Start CRM Free
            </a>
            <a href="https://wa.me/917501137266?text=Hi%2C%20I%20want%20to%20know%20more%20about%20ZYLO%20Sales%20CRM"
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
    .stats-bar-grid   { grid-template-columns: 1fr 1fr !important; }
    .features-grid    { grid-template-columns: 1fr !important; }
    .perfect-for-grid { grid-template-columns: 1fr !important; }
}
</style>

<?php include 'includes/footer.php'; ?>

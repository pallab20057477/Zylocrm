<?php
$pageTitle = "Lead Management Software – Capture, Track & Convert Leads Faster | ZYLO CRM";
$pageDescription = "ZYLO's lead management software captures leads from all sources, auto-assigns to reps, scores by priority, and automates follow-ups. Stop losing leads. Start converting them. Free plan available.";
$pageKeywords = "lead management software India, lead tracking software, lead capture software, sales lead management, CRM lead management, lead scoring software, lead follow-up software, lead management system for small business";
$canonicalPath = '/lead-management-software';

$pageSchema = [
    '@context' => 'https://schema.org',
    '@type'    => 'SoftwareApplication',
    'name'     => 'ZYLO Lead Management Software',
    'url'      => 'https://zylocrm.com/lead-management-software',
    'description' => 'Lead management software for Indian businesses. Capture leads from web, WhatsApp, and social media, auto-assign to reps, score by priority, and automate follow-up sequences to close more deals.',
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
        'reviewCount' => '462',
        'bestRating'  => '5'
    ],
    'featureList' => [
        'Multi-source lead capture — web forms, WhatsApp, social media',
        'Automatic lead assignment to sales reps',
        'Lead scoring and prioritisation',
        'Automated follow-up sequences via WhatsApp and email',
        'Lead source tracking and ROI analytics',
        'Duplicate lead detection and merging',
        'Lead nurturing workflows',
        'Conversion funnel reports'
    ]
];

$faqSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name'  => 'What is lead management software?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Lead management software helps businesses capture leads from multiple sources (web forms, WhatsApp, social media), organise and score them by priority, assign to the right sales rep, track every interaction, and automate follow-up sequences — so no lead is ever forgotten or lost.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Is ZYLO lead management software free?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. ZYLO offers a free plan with lead capture, basic tracking, and manual follow-up reminders for up to 100 leads/month. The Pro plan starts at ₹3,999/month with unlimited leads, automated follow-up sequences, lead scoring, WhatsApp integration, and advanced analytics.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can ZYLO capture leads from WhatsApp and web forms?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. ZYLO captures leads from web forms (embeddable on your website), WhatsApp Business, Facebook Lead Ads, Google Ads, and email. Each lead is automatically tagged with its source so you know exactly where your best leads come from.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'How does lead scoring work in ZYLO?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'ZYLO assigns a lead score based on criteria you define — demographics (company size, industry), behaviour (pages visited, emails opened, form fields filled), and engagement (WhatsApp replies, calls answered). Higher scores surface automatically to your team so the hottest leads always get attention first.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can I auto-assign leads to specific sales reps?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. ZYLO supports rule-based lead assignment — by geography, product interest, lead source, or round-robin. Leads are assigned the moment they come in, and the assigned rep is notified instantly via app and WhatsApp.']
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
                    <span style="width:7px;height:7px;background:#22c55e;border-radius:50%;display:inline-block;animation:pulse-dot 2s ease-in-out infinite;"></span>
                    Zero Leads Slipping Through
                </div>

                <h1 style="font-size:3.2rem;color:var(--primary-dark);line-height:1.12;margin-bottom:1.4rem;">
                    Lead Management Software That Turns Enquiries Into Revenue
                </h1>
                <p style="font-size:1.18rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.9rem;">
                    Capture every lead from every source, auto-assign to the right rep, score by potential, and follow up automatically — so your team spends time closing, not chasing.
                </p>

                <div style="display:flex;flex-wrap:wrap;gap:0.55rem;margin-bottom:2rem;">
                    <?php foreach(['Multi-Source Capture','Lead Scoring','Auto Assignment','WhatsApp Follow-up','Source Analytics','Free Plan'] as $p): ?>
                    <span style="background:white;border:1px solid var(--border-color);color:var(--text-main);font-size:0.82rem;font-weight:600;padding:0.35rem 0.9rem;border-radius:50px;box-shadow:var(--shadow-sm);">✓ &nbsp;<?= $p ?></span>
                    <?php endforeach; ?>
                </div>

                <div style="display:flex;gap:1rem;flex-wrap:wrap;">
                    <a href="contact" class="btn btn-primary" style="padding:0.9rem 2rem;font-size:1rem;">Capture Leads Free</a>
                    <a href="#features" class="btn btn-outline" style="padding:0.9rem 2rem;font-size:1rem;">See All Features</a>
                </div>
                <p style="margin-top:1.5rem;font-size:0.85rem;color:var(--text-muted);margin-bottom:0;">
                    ⭐ 4.8/5 from 462 reviews &nbsp;·&nbsp; Trusted by 10,000+ businesses
                </p>
            </div>

            <div style="position:relative;">
                <img src="assets/store/section-1.jpg"
                     alt="ZYLO lead management software dashboard showing incoming leads from multiple sources with scoring"
                     width="580" height="400"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;"
                     fetchpriority="high">

                <!-- Floating: New lead -->
                <div style="position:absolute;top:-1rem;left:-1.25rem;background:white;border-radius:14px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.7rem;">
                    <span style="width:36px;height:36px;background:#dcfce7;border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="17" height="17" fill="none" stroke="#16a34a" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.75rem;color:var(--text-muted);">New lead captured</div>
                        <div style="font-size:0.88rem;font-weight:700;color:#16a34a;">WhatsApp · Score 87 · Hot 🔥</div>
                    </div>
                </div>

                <!-- Floating: Conversion rate -->
                <div style="position:absolute;bottom:-1.25rem;right:-1rem;background:white;border-radius:14px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.7rem;">
                    <span style="width:36px;height:36px;background:rgba(12,79,120,0.08);border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="17" height="17" fill="none" stroke="var(--primary)" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.75rem;color:var(--text-muted);">Lead conversion rate</div>
                        <div style="font-size:0.88rem;font-weight:700;color:var(--text-main);">34% this month ↑ 8%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
@keyframes pulse-dot {
    0%,100%{opacity:1;transform:scale(1);}
    50%{opacity:0.5;transform:scale(1.5);}
}
</style>

<!-- ========== STATS BAR ========== -->
<section style="padding:2.75rem 0;background:white;border-bottom:1px solid var(--border-color);">
    <div class="container">
        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1rem;text-align:center;" class="stats-bar-grid">
            <?php
            $stats = [
                ['val'=>'Zero',   'label'=>'Leads Lost to No Follow-up'],
                ['val'=>'< 60s',  'label'=>'Lead Assigned After Capture'],
                ['val'=>'3×',     'label'=>'Faster Response vs Manual'],
                ['val'=>'10,000+','label'=>'Businesses Trust ZYLO'],
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

<!-- ========== LEAD SOURCES ========== -->
<section>
    <div class="container">
        <div class="section-title">
            <h2>Capture Leads from Every Channel — Automatically</h2>
            <p>No more manual lead entry. Every enquiry, from every source, flows straight into ZYLO.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1.25rem;margin-top:3rem;" class="who-grid">
            <?php
            $sources = [
                ['icon'=>'M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9','label'=>'Website Forms',       'desc'=>'Embed lead capture forms on any page. Leads arrive in ZYLO instantly.','color'=>'#dbeafe'],
                ['icon'=>'M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z','label'=>'WhatsApp Business',  'desc'=>'Every WhatsApp enquiry is auto-captured as a new lead with contact details.','color'=>'#dcfce7'],
                ['icon'=>'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z','label'=>'Email Enquiries',     'desc'=>'Parse incoming emails and create leads automatically from any mailbox.','color'=>'#fef9c3'],
                ['icon'=>'M13 10V3L4 14h7v7l9-11h-7z','label'=>'Facebook Lead Ads',  'desc'=>'Connect your Facebook Ads account. Leads sync to ZYLO in real time.','color'=>'#ede9fe'],
                ['icon'=>'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z','label'=>'Google Ads',          'desc'=>'Import Google lead forms and track cost-per-lead from your ad campaigns.','color'=>'#fee2e2'],
                ['icon'=>'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z','label'=>'Referrals',           'desc'=>'Log referrals from existing clients and track which referrers convert best.','color'=>'#e0f2fe'],
                ['icon'=>'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2','label'=>'Manual / Walk-in',   'desc'=>'Add leads manually from calls, trade shows, or walk-in enquiries in seconds.','color'=>'#f0fdf4'],
                ['icon'=>'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4','label'=>'API / Integration',  'desc'=>'Push leads from any system via REST API or Zapier/Make automation.','color'=>'#f8fafc'],
            ];
            foreach($sources as $s): ?>
            <div style="background:<?= $s['color'] ?>;border:1px solid var(--border-color);border-radius:14px;padding:1.25rem;display:flex;flex-direction:column;gap:0.6rem;">
                <span style="width:38px;height:38px;background:white;border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;box-shadow:var(--shadow-sm);">
                    <svg width="18" height="18" fill="none" stroke="var(--primary)" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="<?= $s['icon'] ?>"/></svg>
                </span>
                <div style="font-size:0.9rem;font-weight:700;color:var(--primary-dark);"><?= $s['label'] ?></div>
                <div style="font-size:0.8rem;color:var(--text-muted);line-height:1.5;"><?= $s['desc'] ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== KEY FEATURES ========== -->
<section id="features" class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>Every Feature You Need to Convert More Leads</h2>
            <p>From capture to close — ZYLO handles the entire lead lifecycle automatically.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.75rem;margin-top:3rem;" class="features-grid">
            <?php
            $features = [
                [
                    'icon'  => 'M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z',
                    'title' => 'Multi-Source Lead Capture',
                    'desc'  => 'Every lead from every channel flows into one inbox automatically — website, WhatsApp, Facebook, Google Ads, email, referrals, and manual entry. No lead falls through the cracks.',
                    'pts'   => ['8+ source integrations','Real-time lead sync','Unified lead inbox']
                ],
                [
                    'icon'  => 'M13 10V3L4 14h7v7l9-11h-7z',
                    'title' => 'Lead Scoring & Prioritisation',
                    'desc'  => 'ZYLO scores every lead based on criteria you define — demographics, behaviour, engagement, and fit. Your team sees the hottest leads first and never wastes time on cold contacts.',
                    'pts'   => ['Custom scoring criteria','Hot/Warm/Cold classification','Auto-sort by score']
                ],
                [
                    'icon'  => 'M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4',
                    'title' => 'Auto Lead Assignment',
                    'desc'  => 'Assign leads to the right rep the moment they arrive — by geography, product interest, source, or round-robin. The rep is notified instantly via app and WhatsApp.',
                    'pts'   => ['Rule-based auto-assignment','Round-robin distribution','Instant rep notification']
                ],
                [
                    'icon'  => 'M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9',
                    'title' => 'Automated Follow-up Sequences',
                    'desc'  => 'Set multi-step follow-up sequences that trigger automatically when a lead enters or stalls in a stage. WhatsApp messages, emails, call reminders — all on autopilot.',
                    'pts'   => ['WhatsApp + email sequences','Stage-triggered automation','Escalation on no-response']
                ],
                [
                    'icon'  => 'M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2',
                    'title' => 'Lead Pipeline Tracking',
                    'desc'  => 'Move leads through custom stages — New, Contacted, Demo Done, Proposal Sent, Won/Lost. See every lead\'s status at a glance and act before deals go cold.',
                    'pts'   => ['Custom pipeline stages','Drag-and-drop movement','Stage time tracking']
                ],
                [
                    'icon'  => 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z',
                    'title' => '360° Lead Profile',
                    'desc'  => 'Every lead has a complete activity timeline — calls, WhatsApp messages, emails, notes, meetings, and documents. Your reps are always fully briefed before every contact.',
                    'pts'   => ['Full interaction history','Linked documents & notes','Call log & WhatsApp history']
                ],
                [
                    'icon'  => 'M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7',
                    'title' => 'Lead Source Analytics',
                    'desc'  => 'See exactly which sources generate the most leads, the best conversion rates, and the lowest cost per acquisition. Invest more in what works, cut what doesn\'t.',
                    'pts'   => ['Source-wise conversion rates','Cost per lead by channel','ROI per marketing source']
                ],
                [
                    'icon'  => 'M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z',
                    'title' => 'Duplicate Detection & Merging',
                    'desc'  => 'ZYLO automatically detects duplicate leads (by phone, email, or name) when a new lead arrives. Merge duplicates with one click to keep your database clean and accurate.',
                    'pts'   => ['Auto duplicate detection','One-click lead merge','Clean database maintained']
                ],
                [
                    'icon'  => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z',
                    'title' => 'Conversion Reports & Forecasting',
                    'desc'  => 'Real-time dashboards show lead volume, conversion rates, average close time, and rep performance. Forecast revenue based on pipeline and lead scores with confidence.',
                    'pts'   => ['Conversion funnel report','Rep-wise performance','Revenue forecast']
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

<!-- ========== LEAD LIFECYCLE SPOTLIGHT ========== -->
<section>
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:center;" class="intro-grid">
            <div>
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.78rem;font-weight:700;padding:0.3rem 0.85rem;border-radius:50px;margin-bottom:1.25rem;text-transform:uppercase;letter-spacing:1px;">Lead Lifecycle</div>
                <h2 style="font-size:2.2rem;color:var(--primary-dark);line-height:1.25;margin-bottom:1.25rem;">
                    From First Enquiry to Closed Deal — Fully Automated
                </h2>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.75rem;">
                    ZYLO manages every step of the lead journey automatically. From the moment a lead arrives, it's scored, assigned, and followed up — without anyone manually tracking a spreadsheet or sticky note.
                </p>

                <!-- Lead lifecycle flow -->
                <div style="background:var(--bg-offwhite);border:1px solid var(--border-color);border-radius:14px;padding:1.25rem 1.5rem;margin-bottom:1.75rem;">
                    <div style="font-size:0.8rem;font-weight:700;color:var(--primary);text-transform:uppercase;letter-spacing:1px;margin-bottom:0.85rem;">Lead Journey in ZYLO</div>
                    <?php
                    $lifecycle = [
                        ['icon'=>'M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z', 'color'=>'var(--primary)', 'text'=>'Lead captured from any source automatically'],
                        ['icon'=>'M13 10V3L4 14h7v7l9-11h-7z',                                                              'color'=>'#f59e0b',         'text'=>'Scored 0–100 based on profile & behaviour'],
                        ['icon'=>'M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4',                                      'color'=>'#0ea5e9',         'text'=>'Assigned to best-fit rep within 60 seconds'],
                        ['icon'=>'M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11',                                     'color'=>'#8b5cf6',         'text'=>'Automated WhatsApp/email sequence triggered'],
                        ['icon'=>'M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7',                                             'color'=>'#06b6d4',         'text'=>'Rep tracks deal through pipeline stages'],
                        ['icon'=>'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z',                                          'color'=>'#16a34a',         'text'=>'Deal won → converted to invoice in 1 click'],
                    ];
                    foreach($lifecycle as $i=>$lc): ?>
                    <div style="display:flex;align-items:center;gap:0.75rem;padding:0.6rem 0;<?= $i<count($lifecycle)-1?'border-bottom:1px solid var(--border-color);':'' ?>">
                        <span style="width:30px;height:30px;background:<?= $lc['color'] ?>;border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                            <svg width="14" height="14" fill="none" stroke="white" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="<?= $lc['icon'] ?>"/></svg>
                        </span>
                        <span style="font-size:0.88rem;color:var(--text-main);"><?= $lc['text'] ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a href="contact" class="btn btn-primary" style="padding:0.75rem 1.75rem;">Start Free Trial</a>
            </div>

            <div style="position:relative;">
                <img src="assets/store/section-2.jpg"
                     alt="ZYLO lead lifecycle dashboard showing lead scoring, assignment and follow-up automation"
                     width="560" height="380"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" loading="lazy">
                <div style="position:absolute;top:-1rem;right:-1rem;background:white;border-radius:12px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);">
                    <div style="font-size:0.75rem;color:var(--text-muted);margin-bottom:0.2rem;">Leads this week</div>
                    <div style="font-size:0.88rem;font-weight:700;color:var(--text-main);">48 new · 12 converted ↑</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== LEAD SCORING SPOTLIGHT ========== -->
<section class="bg-offwhite">
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:center;" class="intro-grid">
            <div style="order:2;" class="feature-img-right">
                <div style="position:relative;">
                    <img src="assets/store/hero-1.jpg"
                         alt="ZYLO lead scoring dashboard showing hot warm cold lead classification"
                         width="560" height="380"
                         style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" loading="lazy">
                    <div style="position:absolute;bottom:-1rem;left:-1rem;background:white;border-radius:12px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);">
                        <div style="font-size:0.75rem;color:var(--text-muted);margin-bottom:0.2rem;">Lead score updated</div>
                        <div style="font-size:0.88rem;font-weight:700;color:#16a34a;">Raj Kumar · 62 → 91 🔥</div>
                    </div>
                </div>
            </div>
            <div style="order:1;">
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.78rem;font-weight:700;padding:0.3rem 0.85rem;border-radius:50px;margin-bottom:1.25rem;text-transform:uppercase;letter-spacing:1px;">Lead Scoring</div>
                <h2 style="font-size:2.2rem;color:var(--primary-dark);line-height:1.25;margin-bottom:1.25rem;">
                    Your Team Works the Hottest Leads First. Always.
                </h2>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.5rem;">
                    Not all leads are equal — but without scoring, your team treats them that way. ZYLO assigns a score to every lead based on criteria you configure, and surfaces the highest-value opportunities to the top of every rep's queue automatically.
                </p>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.75rem;">
                    Scores update in real time as the lead interacts with your content, replies to messages, or progresses through stages — so your team always knows who's ready to buy.
                </p>
                <div style="display:grid;grid-template-columns:1fr 1fr;gap:0.75rem;margin-bottom:1.75rem;">
                    <?php
                    $scoringCriteria = ['Company size & industry','Budget indicated','Lead source quality','Pages visited on site','Email open & click','WhatsApp reply rate','Time since last contact','Demo attendance'];
                    foreach($scoringCriteria as $sc): ?>
                    <div style="display:flex;align-items:center;gap:0.5rem;font-size:0.88rem;color:var(--text-muted);">
                        <svg width="14" height="14" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <?= $sc ?>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a href="contact" class="btn btn-outline" style="padding:0.75rem 1.75rem;">Set Up Lead Scoring</a>
            </div>
        </div>
    </div>
</section>

<!-- ========== WHO IT'S FOR ========== -->
<section>
    <div class="container">
        <div class="section-title">
            <h2>Built for Every Business That Generates Leads</h2>
            <p>Whether you get 10 leads a month or 10,000 — ZYLO handles them all without missing one.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.75rem;margin-top:3rem;" class="perfect-for-grid">
            <?php
            $personas = [
                [
                    'icon'  => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
                    'title' => 'Real Estate & Builders',
                    'desc'  => 'Capture every property enquiry from portals, WhatsApp, and ads. Score by budget and location, assign to the right channel sales exec, and automate follow-up until the site visit is booked.',
                    'link'  => 'smbs',
                    'pts'   => ['Portal & WhatsApp lead sync','Budget & location scoring','Site visit scheduling']
                ],
                [
                    'icon'  => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253',
                    'title' => 'Education & EdTech',
                    'desc'  => 'Manage student enquiries from ads, website, and events. Score by course interest and readiness, nurture with automated messages, and track enrolment conversion per channel.',
                    'link'  => 'startups',
                    'pts'   => ['Admission enquiry tracking','Course interest scoring','Enrolment funnel reports']
                ],
                [
                    'icon'  => 'M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                    'title' => 'B2B Sales & Agencies',
                    'desc'  => 'Handle high-value inbound and outbound leads with full pipeline visibility. Score by company size and budget, track every touchpoint, and forecast revenue from pipeline.',
                    'link'  => 'consultants',
                    'pts'   => ['ICP-based lead scoring','Multi-touch attribution','Revenue pipeline forecast']
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
<section class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>ZYLO vs Other Lead Management Tools</h2>
            <p>See why growing Indian businesses choose ZYLO to manage and convert leads.</p>
        </div>

        <div style="overflow-x:auto;margin-top:2.5rem;border-radius:16px;box-shadow:var(--shadow-md);border:1px solid var(--border-color);" class="comparison-table">
            <table style="width:100%;border-collapse:collapse;background:white;min-width:560px;">
                <thead>
                    <tr style="background:var(--primary);color:white;">
                        <th style="padding:1.1rem 1.5rem;text-align:left;font-weight:600;font-size:0.93rem;width:34%;">Feature</th>
                        <th style="padding:1.1rem 1.5rem;text-align:center;font-weight:700;font-size:0.93rem;">
                            <span style="background:rgba(255,255,255,0.15);padding:0.2rem 0.75rem;border-radius:50px;">ZYLO CRM</span>
                        </th>
                        <th style="padding:1.1rem 1.5rem;text-align:center;font-weight:600;font-size:0.93rem;opacity:0.8;">Other Lead Tools</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $rows = [
                        ['Free Plan',                         '✅ Forever free tier',            '❌ Paid plans only'],
                        ['WhatsApp Lead Capture',             '✅ Built-in WhatsApp integration', '❌ Not available'],
                        ['Lead Scoring',                      '✅ Custom scoring rules',         '⚠️ Basic / paid add-on'],
                        ['Auto Assignment',                   '✅ Rule-based + round-robin',     '⚠️ Manual only'],
                        ['Automated WhatsApp Follow-ups',    '✅ Native WhatsApp sequences',    '❌ Email only'],
                        ['Invoice from Lead',                 '✅ Quote → Invoice in 1 click',   '❌ Separate billing tool'],
                        ['Lead Source ROI Analytics',         '✅ Built-in channel analytics',   '⚠️ Paid add-on'],
                        ['Price / Month',                     '₹0 – ₹3,999',                   '₹3,000 – ₹20,000+'],
                    ];
                    foreach($rows as $i=>$row):
                        $bg=$i%2===1?'background:#f8f9fa;':'';
                    ?>
                    <tr style="<?= $bg ?>">
                        <td style="padding:1rem 1.5rem;font-weight:600;color:var(--primary-dark);font-size:0.9rem;border-bottom:1px solid var(--border-color);"><?= $row[0] ?></td>
                        <td style="padding:1rem 1.5rem;text-align:center;font-size:0.9rem;border-bottom:1px solid var(--border-color);color:var(--primary-dark);font-weight:500;"><?= $row[1] ?></td>
                        <td style="padding:1rem 1.5rem;text-align:center;font-size:0.9rem;border-bottom:1px solid var(--border-color);color:var(--text-muted);"><?= $row[2] ?></td>
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
            <h2>What Our Customers Say</h2>
            <p>Real results from teams that stopped losing leads and started converting them.</p>
        </div>

        <div class="grid-3" style="margin-top:3rem;">
            <?php
            $reviews = [
                [
                    'quote' => '"We were losing 60% of our leads because no one followed up in time. ZYLO captures every WhatsApp enquiry, assigns it instantly, and sends the first follow-up automatically. Our conversion jumped from 12% to 31% in 6 weeks."',
                    'name'  => 'Rahul Mehta',
                    'role'  => 'Sales Director, RealtyPrime · Mumbai',
                    'img'   => 'assets/store/avatar-david.jpg',
                ],
                [
                    'quote' => '"The lead scoring is exactly what our team needed. Instead of treating every enquiry the same, ZYLO automatically surfaces the hot leads to the top. Our team\'s time is now spent on the right people — close rate went from 18% to 44%."',
                    'name'  => 'Priya Nair',
                    'role'  => 'Growth Head, EduMax India · Bengaluru',
                    'img'   => 'assets/store/avatar-sarah.jpg',
                ],
                [
                    'quote' => '"The lead source analytics showed us that Facebook Ads were costing 4× more per conversion than Google. We shifted budget in a week. ZYLO paid for itself in the first month just from that insight."',
                    'name'  => 'Emily Watson',
                    'role'  => 'Marketing Manager, Craft Interiors · Delhi',
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
            <p>Everything you need to know about ZYLO Lead Management Software.</p>
        </div>

        <div style="margin-top:2.5rem;" itemscope itemtype="https://schema.org/FAQPage">
            <?php
            $faqs = [
                ['q'=>'What is lead management software?',               'a'=>'Lead management software helps businesses capture leads from multiple sources, organise and score them by priority, assign to the right sales rep, track every interaction, and automate follow-up sequences — so no lead is ever forgotten or lost.'],
                ['q'=>'Is ZYLO lead management software free?',          'a'=>'Yes. ZYLO offers a free plan with lead capture, basic tracking, and manual reminders for up to 100 leads/month. The Pro plan starts at ₹3,999/month with unlimited leads, automated follow-up sequences, lead scoring, WhatsApp integration, and advanced analytics.'],
                ['q'=>'Can ZYLO capture leads from WhatsApp and forms?', 'a'=>'Yes. ZYLO captures leads from web forms, WhatsApp Business, Facebook Lead Ads, Google Ads, and email. Each lead is tagged with its source automatically so you know where your best leads come from.'],
                ['q'=>'How does lead scoring work in ZYLO?',             'a'=>'ZYLO scores leads 0–100 based on criteria you configure — demographics, behaviour, engagement, and fit. Higher-scoring leads surface automatically to the top of your rep\'s queue. Scores update in real time as leads interact with your content or progress through stages.'],
                ['q'=>'Can I auto-assign leads to specific sales reps?', 'a'=>'Yes. ZYLO supports rule-based lead assignment by geography, product interest, lead source, or round-robin. Leads are assigned the moment they arrive and the rep is notified instantly via app and WhatsApp.'],
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
            Stop Losing Leads. Start Converting Every Enquiry.
        </h2>
        <p style="font-size:1.1rem;color:rgba(255,255,255,0.85);margin-bottom:2.5rem;line-height:1.7;">
            Join 10,000+ businesses that capture, track, and convert leads automatically with ZYLO. Free plan available — no credit card, no setup fee.
        </p>
        <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
            <a href="contact" class="btn" style="padding:1rem 2.25rem;font-size:1.05rem;background:white;color:var(--primary);border-radius:10px;font-weight:700;">
                Capture Leads Free
            </a>
            <a href="https://wa.me/917501137266?text=Hi%2C%20I%20want%20to%20know%20more%20about%20ZYLO%20Lead%20Management%20Software"
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
    .who-grid         { grid-template-columns: 1fr 1fr !important; }
    .perfect-for-grid { grid-template-columns: 1fr !important; }
    .feature-img-right{ order: 0 !important; }
}
@media (max-width: 480px) {
    .who-grid { grid-template-columns: 1fr 1fr !important; }
}
</style>

<?php include 'includes/footer.php'; ?>

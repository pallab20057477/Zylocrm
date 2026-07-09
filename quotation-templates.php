<?php
$pageTitle = "Free Quotation Templates - Download Professional Quote Formats | ZYLO CRM";
$pageDescription = "Download free professional quotation templates for service, trading, consulting, and project businesses. Use ready quote formats in PDF, Word, and Excel or generate online with ZYLO.";
$pageKeywords = "quotation templates, free quotation format, quotation template word, quotation format excel, quotation format pdf, business quote template india, estimate template";
$canonicalPath = '/quotation-templates';
$pageImage = 'https://zylocrm.com/assets/store/section-1.jpg';

$pageSchema = [
    '@context' => 'https://schema.org',
    '@type'    => 'CollectionPage',
    'name'     => 'Free Quotation Templates for Businesses - ZYLO CRM',
    'url'      => 'https://zylocrm.com/quotation-templates',
    'description' => 'Free collection of professional quotation templates for Indian businesses. Includes service quotations, GST quotations, project estimates, and consulting quote formats.',
    'provider' => [
        '@type' => 'Organization',
        'name'  => 'ZYLO CRM',
        'url'   => 'https://zylocrm.com'
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
            'name' => 'Quotation Templates',
            'item' => 'https://zylocrm.com/quotation-templates'
        ]
    ]
];

$faqSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name'  => 'What should a professional quotation template include?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'A professional quotation template should include quotation number, issue date, business details, client details, itemized pricing, taxes, validity period, payment terms, and notes. ZYLO templates include all these fields.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can I download quotation templates in Word and Excel?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. ZYLO quotation templates are available in PDF, Word, and Excel friendly formats. You can also use the online quotation generator for faster creation and instant sharing.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'What is the difference between quotation and proforma invoice?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'A quotation is a formal price offer sent before order confirmation. A proforma invoice is a pre-sales billing document often used for advance payment or customs reference. Both are supported in ZYLO.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'How long should quotation validity be?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Most businesses keep quotation validity between 7 and 30 days depending on market price fluctuation and project scope. ZYLO allows custom validity dates for every quotation.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can I convert quotation to invoice later?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. ZYLO allows one-click quotation to invoice conversion so all item lines, prices, and client details carry forward without re-entry.']
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
                    Free Templates · Business-Ready
                </div>

                <h1 style="font-size:3.1rem;color:var(--primary-dark);line-height:1.12;margin-bottom:1.4rem;">
                    Free Quotation Templates for Fast, Professional Client Proposals
                </h1>
                <p style="font-size:1.15rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.9rem;">
                    Use ready-to-send quotation formats for products, services, projects, and consulting. Add your logo, itemized pricing, GST, terms, and validity date in minutes.
                </p>

                <div style="display:flex;flex-wrap:wrap;gap:0.55rem;margin-bottom:2rem;">
                    <?php foreach(['Word + Excel + PDF','GST-ready','Client-Friendly Design','Free Download','Editable Terms','Quote-to-Invoice Flow'] as $p): ?>
                    <span style="background:white;border:1px solid var(--border-color);color:var(--text-main);font-size:0.82rem;font-weight:600;padding:0.35rem 0.9rem;border-radius:50px;box-shadow:var(--shadow-sm);">&#10003; &nbsp;<?= $p ?></span>
                    <?php endforeach; ?>
                </div>

                <div style="display:flex;gap:1rem;flex-wrap:wrap;">
                    <a href="quotation-generator" class="btn btn-primary" style="padding:0.9rem 2rem;font-size:1rem;">Use Online Template Free</a>
                    <a href="quotation-software" class="btn btn-outline" style="padding:0.9rem 2rem;font-size:1rem;">Explore Full Quotation Software</a>
                </div>
                <p style="margin-top:1.5rem;font-size:0.85rem;color:var(--text-muted);margin-bottom:0;">
                    Used by agencies, consultants, traders, and SMEs across India
                </p>
            </div>

            <div style="position:relative;">
                <img src="assets/store/section-1.jpg"
                     alt="Professional quotation templates with itemized pricing GST and terms"
                     width="580" height="400"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;"
                     fetchpriority="high">

                <div style="position:absolute;top:-1rem;left:-1.25rem;background:white;border-radius:14px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.7rem;">
                    <span style="width:36px;height:36px;background:#dcfce7;border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="17" height="17" fill="none" stroke="#16a34a" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.75rem;color:var(--text-muted);">Template selected</div>
                        <div style="font-size:0.88rem;font-weight:700;color:#16a34a;">Ready in less than 1 minute</div>
                    </div>
                </div>

                <div style="position:absolute;bottom:-1.25rem;right:-1rem;background:white;border-radius:14px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.7rem;">
                    <span style="width:36px;height:36px;background:rgba(12,79,120,0.08);border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="17" height="17" fill="none" stroke="var(--primary)" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.75rem;color:var(--text-muted);">Export options</div>
                        <div style="font-size:0.88rem;font-weight:700;color:var(--text-main);">PDF, Word, Excel</div>
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
                ['val'=>'15+',  'label'=>'Template Styles'],
                ['val'=>'Free', 'label'=>'Download and Use'],
                ['val'=>'GST',  'label'=>'Tax-Ready Formats'],
                ['val'=>'< 60s','label'=>'To Create and Share'],
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
            <h2>Popular Quotation Template Types</h2>
            <p>Choose a format based on your business model and buyer expectations.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.75rem;margin-top:3rem;" class="features-grid">
            <?php
            $types = [
                ['icon'=>'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z','title'=>'Standard Business Quotation','desc'=>'Clean format for routine client quotations with item pricing and terms.','href'=>'quotation-generator'],
                ['icon'=>'M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2z','title'=>'GST Quotation Format','desc'=>'Includes taxable value and GST estimates for tax-aware buyer communication.','href'=>'gst-invoice-maker'],
                ['icon'=>'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z','title'=>'Consulting Quotation','desc'=>'Best for service scopes, milestones, retainers, and professional terms.','href'=>'consulting-invoice'],
                ['icon'=>'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064','title'=>'Commercial Export Quotation','desc'=>'Suitable for international clients with currency and shipping terms.','href'=>'commercial-invoice'],
                ['icon'=>'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z','title'=>'Project Estimate Template','desc'=>'Great for project-based agencies with phase-wise effort and costing.','href'=>'quotation-generator'],
                ['icon'=>'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15','title'=>'Recurring Service Quotation','desc'=>'For monthly support plans and recurring contract proposals.','href'=>'quotation-software'],
            ];
            foreach($types as $t): ?>
            <div class="card" style="padding:2rem;border-left:3px solid var(--primary);display:flex;flex-direction:column;">
                <div style="width:48px;height:48px;background:rgba(12,79,120,0.08);border-radius:10px;display:flex;align-items:center;justify-content:center;margin-bottom:1.25rem;color:var(--primary);flex-shrink:0;">
                    <svg width="23" height="23" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="<?= $t['icon'] ?>"/></svg>
                </div>
                <h3 style="font-size:1.1rem;color:var(--primary-dark);margin-bottom:0.7rem;"><?= $t['title'] ?></h3>
                <p style="color:var(--text-muted);font-size:0.92rem;line-height:1.7;margin-bottom:1rem;flex:1;"><?= $t['desc'] ?></p>
                <a href="<?= $t['href'] ?>" class="btn btn-outline" style="font-size:0.88rem;padding:0.6rem 1rem;text-align:center;">Use This Template</a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="bg-offwhite">
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:center;" class="intro-grid">
            <div>
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.78rem;font-weight:700;padding:0.3rem 0.85rem;border-radius:50px;margin-bottom:1.25rem;text-transform:uppercase;letter-spacing:1px;">Quotation Best Practices</div>
                <h2 style="font-size:2.2rem;color:var(--primary-dark);line-height:1.25;margin-bottom:1.25rem;">
                    What Makes a Quotation Look Professional?
                </h2>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.75rem;">
                    A strong quotation is clear, branded, and easy to approve. It should remove ambiguity around scope, price, timeline, and payment terms.
                </p>

                <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;margin-bottom:1.75rem;">
                    <div style="background:white;border:1px solid var(--border-color);border-radius:14px;padding:1.25rem;">
                        <div style="font-size:0.8rem;font-weight:700;color:var(--primary);text-transform:uppercase;letter-spacing:1px;margin-bottom:0.75rem;">Must Include</div>
                        <?php foreach(['Quote number and date','Client details','Itemized pricing','Tax and discount','Validity period'] as $p): ?>
                        <div style="display:flex;align-items:center;gap:0.5rem;font-size:0.82rem;color:var(--text-muted);margin-bottom:0.35rem;">
                            <svg width="12" height="12" fill="none" stroke="var(--primary)" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <?= $p ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div style="background:white;border:1px solid var(--border-color);border-radius:14px;padding:1.25rem;">
                        <div style="font-size:0.8rem;font-weight:700;color:#16a34a;text-transform:uppercase;letter-spacing:1px;margin-bottom:0.75rem;">Helps Conversion</div>
                        <?php foreach(['Scope clarity','Milestone terms','Response deadline','Acceptance section','Next-step CTA'] as $p): ?>
                        <div style="display:flex;align-items:center;gap:0.5rem;font-size:0.82rem;color:var(--text-muted);margin-bottom:0.35rem;">
                            <svg width="12" height="12" fill="none" stroke="#16a34a" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <?= $p ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <a href="quotation-generator" class="btn btn-primary" style="padding:0.75rem 1.75rem;">Create Quotation Using Template</a>
            </div>

            <div style="position:relative;">
                <img src="assets/store/section-2.jpg"
                     alt="Professional quotation sample layout with pricing and terms"
                     width="560" height="380"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" loading="lazy">
                <div style="position:absolute;bottom:-1rem;right:-1rem;background:white;border-radius:12px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);">
                    <div style="font-size:0.75rem;color:var(--text-muted);margin-bottom:0.2rem;">Client-ready format</div>
                    <div style="font-size:0.9rem;font-weight:700;color:var(--text-main);">Professional and approval-friendly</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-offwhite">
    <div class="container" style="max-width:820px;">
        <div class="section-title">
            <h2>Frequently Asked Questions</h2>
            <p>Common questions about quotation templates and usage.</p>
        </div>

        <div style="margin-top:2.5rem;" itemscope itemtype="https://schema.org/FAQPage">
            <?php
            $faqs = [
                ['q'=>'What should a professional quotation template include?', 'a'=>'It should include quotation number, issue date, business and client details, line-item pricing, taxes, validity period, payment terms, and notes.'],
                ['q'=>'Can I download quotation templates in Word and Excel?', 'a'=>'Yes. ZYLO templates are editable and suitable for PDF, Word, and Excel workflows.'],
                ['q'=>'What is the difference between quotation and proforma invoice?', 'a'=>'Quotation is a pricing proposal before order confirmation. Proforma invoice is a pre-sales billing style document often used for advance or reference.'],
                ['q'=>'How long should quotation validity be?', 'a'=>'Typically 7 to 30 days based on pricing volatility and project nature. Set validity clearly to avoid pricing disputes.'],
                ['q'=>'Can quotation be converted to invoice later?', 'a'=>'Yes. In ZYLO you can convert approved quotations to invoices with one click and without re-entering item details.'],
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

<section style="text-align:center;padding:6rem 0;background:linear-gradient(135deg,var(--primary) 0%,var(--primary-dark) 100%);">
    <div class="container" style="max-width:700px;margin:0 auto;">
        <h2 style="font-size:2.5rem;color:white;margin-bottom:1.25rem;line-height:1.2;">
            Create Better Client Quotations with Professional Templates
        </h2>
        <p style="font-size:1.1rem;color:rgba(255,255,255,0.85);margin-bottom:2.5rem;line-height:1.7;">
            Stop formatting proposals manually. Use ZYLO templates to create polished quotations in minutes and improve client response speed.
        </p>
        <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
            <a href="quotation-generator" class="btn" style="padding:1rem 2.25rem;font-size:1.05rem;background:white;color:var(--primary);border-radius:10px;font-weight:700;">
                Use Quotation Template Free
            </a>
            <a href="https://wa.me/917501137266?text=Hi%2C%20I%20want%20quotation%20templates%20from%20ZYLO"
               target="_blank" rel="noopener noreferrer"
               class="btn" style="padding:1rem 2.25rem;font-size:1.05rem;background:#25d366;color:white;border-radius:10px;font-weight:600;border:none;">
                Chat on WhatsApp
            </a>
        </div>
        <p style="color:rgba(255,255,255,0.5);font-size:0.82rem;margin-top:1.5rem;margin-bottom:0;">Free start · Professional format · Fast quote creation</p>
    </div>
</section>

<style>
@media (max-width: 768px) {
    .stats-bar-grid   { grid-template-columns: 1fr 1fr !important; }
    .features-grid    { grid-template-columns: 1fr !important; }
    .who-grid         { grid-template-columns: 1fr 1fr !important; }
}
@media (max-width: 480px) {
    .who-grid { grid-template-columns: 1fr 1fr !important; }
}
</style>

<?php include 'includes/footer.php'; ?>


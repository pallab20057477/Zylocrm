<?php
$pageTitle = "The Perfect Business App for Freelancers & Self-Employed Professionals | ZYLO CRM";
$pageDescription = "ZYLO CRM is the best invoicing and accounting app for freelancers and self-employed professionals in India. GST invoices in seconds, expense tracking, multi-currency billing, retainer invoices, and tax-ready reports — free plan available.";
$pageKeywords = "freelancer invoicing app India, self employed accounting software, GST invoice for freelancers, freelance billing software, expense tracker freelancer, multi-currency invoice India, retainer billing freelancer, tax reports freelancer India";
$canonicalPath = '/freelancers-self-employed';
$pageImage = 'https://zylocrm.com/assets/store/section-1.jpg';

$pageSchema = [
    '@context' => 'https://schema.org',
    '@type'    => 'SoftwareApplication',
    'name'     => 'ZYLO CRM for Freelancers & Self-Employed',
    'url'      => 'https://zylocrm.com/freelancers-self-employed',
    'description' => 'GST invoicing, expense tracking, multi-currency billing, and tax-ready reports for freelancers and self-employed professionals in India.',
    'applicationCategory' => 'BusinessApplication',
    'operatingSystem' => 'Web, Android, iOS',
    'provider' => ['@type'=>'Organization','name'=>'ZYLO CRM','url'=>'https://zylocrm.com','logo'=>'https://zylocrm.com/assets/logo.png'],
    'offers'   => ['@type'=>'Offer','priceCurrency'=>'INR','price'=>'0','pricingModel'=>'Freemium'],
    'aggregateRating' => ['@type'=>'AggregateRating','ratingValue'=>'4.9','reviewCount'=>'8240','bestRating'=>'5'],
    'featureList' => [
        'GST invoice in under 30 seconds',
        'Expense tracking & categorisation',
        'Multi-currency invoicing for international clients',
        'Retainer & recurring billing',
        'Tax-ready reports for ITR',
        'Mobile app for Android & iOS',
        'Free Starter plan',
        'UPI & bank payment links on invoices'
    ]
];

$breadcrumb = [
    '@context' => 'https://schema.org',
    '@type'    => 'BreadcrumbList',
    'itemListElement' => [
        ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://zylocrm.com/'],
        ['@type'=>'ListItem','position'=>2,'name'=>'Freelancers & Self-Employed','item'=>'https://zylocrm.com/freelancers-self-employed'],
    ]
];

$faqSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        ['@type'=>'Question','name'=>'Is ZYLO free for freelancers?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes. ZYLO offers a free Starter plan with no credit card required. Freelancers can create GST invoices, track expenses, and manage up to a set number of clients — all for free. Paid plans unlock unlimited invoices, advanced reports, and multi-currency billing.']],
        ['@type'=>'Question','name'=>'How do I send a GST invoice as a freelancer?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'In ZYLO, select your client, add your service with the correct SAC code, and ZYLO auto-calculates GST (CGST/SGST/IGST). The professional PDF invoice is ready to email or share on WhatsApp in under 30 seconds.']],
        ['@type'=>'Question','name'=>'What SAC code should freelancers use for their services?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'ZYLO has a built-in SAC code library. Common codes for freelancers include 998314 (IT/software services), 998361 (management consulting), 998381 (advertising & marketing), and 997212 (training services). ZYLO helps you select the right SAC code for your profession.']],
        ['@type'=>'Question','name'=>'Can I invoice international clients in foreign currency?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes. ZYLO supports 150+ currencies. You can invoice international clients in USD, EUR, GBP, or any other currency. ZYLO auto-converts amounts for your GST reporting in INR and generates export invoices with the required LUT/Bond reference.']],
        ['@type'=>'Question','name'=>'How does ZYLO help me track expenses for tax filing?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'ZYLO lets you log and categorise every business expense — travel, software subscriptions, equipment, coworking space, etc. At year-end, you get a complete expense summary report that your CA can use directly for ITR filing under Section 44ADA or as a sole proprietor.']],
    ]
];

$pageSchema = [$pageSchema, $breadcrumb];

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
                    Built for Indian Freelancers
                </div>
                <h1 style="font-size:3.2rem;color:var(--primary-dark);line-height:1.12;margin-bottom:1.4rem;">
                    The Perfect Business App for Freelancers &amp; Self-Employed Professionals
                </h1>
                <p style="font-size:1.18rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.9rem;">
                    Create GST invoices in seconds, track every expense, bill international clients in any currency, and walk into tax season fully prepared — all from one free app built for India's independent professionals.
                </p>
                <div style="display:flex;flex-wrap:wrap;gap:0.55rem;margin-bottom:2rem;">
                    <?php foreach(['GST Invoicing','Expense Tracker','Multi-Currency','Retainer Billing','Tax Reports','Free Plan'] as $p): ?>
                    <span style="background:white;border:1px solid var(--border-color);color:var(--text-main);font-size:0.82rem;font-weight:600;padding:0.35rem 0.9rem;border-radius:50px;box-shadow:var(--shadow-sm);">✓ &nbsp;<?= $p ?></span>
                    <?php endforeach; ?>
                </div>
                <div style="display:flex;gap:1rem;flex-wrap:wrap;">
                    <a href="contact" class="btn btn-primary" style="padding:0.9rem 2rem;font-size:1rem;">Start Free — No Credit Card</a>
                    <a href="accounting-software" class="btn btn-outline" style="padding:0.9rem 2rem;font-size:1rem;">See All Features</a>
                </div>
                <p style="margin-top:1.5rem;font-size:0.85rem;color:var(--text-muted);margin-bottom:0;">
                    ⭐ 4.9/5 from 8,000+ reviews &nbsp;·&nbsp; Trusted by 50,000+ freelancers across India
                </p>
            </div>
            <div style="position:relative;">
                <img src="assets/store/section-1.jpg"
                     alt="ZYLO CRM freelancer dashboard showing GST invoices, expense tracker, and multi-currency billing"
                     width="580" height="400"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" fetchpriority="high" loading="lazy">
                <div style="position:absolute;bottom:-1.25rem;left:-1.25rem;background:white;border-radius:14px;padding:0.9rem 1.25rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.75rem;">
                    <span style="width:38px;height:38px;background:#dcfce7;border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="18" height="18" fill="none" stroke="#16a34a" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.78rem;color:var(--text-muted);">3 clients · this month</div>
                        <div style="font-size:1rem;font-weight:700;color:var(--text-main);">₹2,40,000 <span style="color:#16a34a;font-size:0.8rem;">earned</span></div>
                    </div>
                </div>
                <div style="position:absolute;top:-1rem;right:-1rem;background:white;border-radius:14px;padding:0.9rem 1.25rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.65rem;">
                    <span style="width:34px;height:34px;background:rgba(12,79,120,0.08);border-radius:8px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="16" height="16" fill="none" stroke="var(--primary)" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.78rem;color:var(--text-muted);">Invoice sent</div>
                        <div style="font-size:0.9rem;font-weight:700;color:var(--text-main);">INV-2024 · Paid ✓</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

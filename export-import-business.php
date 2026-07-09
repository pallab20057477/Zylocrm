<?php
$pageTitle = "Software for Export Import Business – Commercial Invoice, HS Codes & Multi-Currency | ZYLO CRM";
$pageDescription = "ZYLO CRM is built for Indian export-import businesses. Create GST-compliant commercial invoices, add HS codes, handle multi-currency billing, manage foreign clients, and track trade documents. Free plan.";
$pageKeywords = "export import business software India, export invoicing software, commercial invoice software India, HS code invoicing, multi-currency invoice India, import export billing software, EXIM software India";
$canonicalPath = '/export-import-business';
$pageImage = 'https://zylocrm.com/assets/store/section-1.jpg';

$pageSchema = [
    '@context' => 'https://schema.org',
    '@type'    => 'SoftwareApplication',
    'name'     => 'ZYLO CRM for Export Import Business',
    'url'      => 'https://zylocrm.com/export-import-business',
    'description' => 'All-in-one trade management platform for Indian export-import businesses. Commercial invoices with HS codes, multi-currency billing, GST zero-rating, foreign buyer management, and shipping document tracking.',
    'applicationCategory' => 'BusinessApplication',
    'operatingSystem' => 'Web, Android, iOS',
    'provider' => ['@type'=>'Organization','name'=>'ZYLO CRM','url'=>'https://zylocrm.com','logo'=>'https://zylocrm.com/assets/logo.png'],
    'offers'   => ['@type'=>'Offer','priceCurrency'=>'INR','price'=>'0','pricingModel'=>'Freemium'],
    'aggregateRating' => ['@type'=>'AggregateRating','ratingValue'=>'4.8','reviewCount'=>'3940','bestRating'=>'5'],
    'featureList' => [
        'Commercial invoice with HS codes',
        'GST zero-rating for exports (0% IGST)',
        'Multi-currency billing (USD, EUR, GBP, AED)',
        'Foreign buyer & supplier management',
        'Proforma invoice for trade negotiations',
        'Packing list & shipping document generation',
        'Letter of credit & payment terms tracking',
        'FIRC & bank realisation certificate tracking'
    ]
];

$breadcrumb = [
    '@context' => 'https://schema.org',
    '@type'    => 'BreadcrumbList',
    'itemListElement' => [
        ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://zylocrm.com/'],
        ['@type'=>'ListItem','position'=>2,'name'=>'Export Import Business','item'=>'https://zylocrm.com/export-import-business'],
    ]
];

$faqSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        ['@type'=>'Question','name'=>'How does ZYLO handle GST for export invoices?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'For export invoices, ZYLO applies 0% IGST (zero-rated supply under GST) and includes the required declaration — "Supply Meant for Export Under Bond/LUT Without Payment of IGST". You can also choose to export with payment of IGST for refund claims. All export invoices are e-Invoice compliant with IRN and QR code.']],
        ['@type'=>'Question','name'=>'Can ZYLO add HS codes to commercial invoices?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes. ZYLO allows you to add the 8-digit HS (Harmonized System) code for each product line in your commercial invoice. HS codes are required by customs authorities for import/export clearance and are auto-saved per product for faster future invoicing.']],
        ['@type'=>'Question','name'=>'Does ZYLO support multi-currency invoicing for foreign buyers?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes. ZYLO supports invoicing in USD, EUR, GBP, AED, SGD, and other major currencies. The invoice is generated in the foreign currency with the INR equivalent auto-calculated using the exchange rate you specify. Your GST records are maintained in INR as required by law.']],
        ['@type'=>'Question','name'=>'Can I create proforma invoices for trade negotiations?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes. ZYLO lets you create proforma invoices for export enquiries and trade negotiations. Once the buyer confirms, convert the proforma invoice to a commercial invoice in one click — no re-entry of data.']],
        ['@type'=>'Question','name'=>'Does ZYLO work for both exporters and importers?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes. Exporters use ZYLO to create commercial invoices, packing lists, and track foreign receivables. Importers use ZYLO to manage purchase orders, track import costs, record customs duty, and manage foreign supplier payments — all from one platform.']],
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
                    Built for Indian EXIM Businesses
                </div>

                <h1 style="font-size:3.2rem;color:var(--primary-dark);line-height:1.12;margin-bottom:1.4rem;">
                    Trade Management Software for Export Import Businesses
                </h1>
                <p style="font-size:1.18rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.9rem;">
                    Create GST-compliant commercial invoices with HS codes, bill foreign buyers in USD, EUR or GBP, manage trade documents, and track international receivables — all from one platform.
                </p>

                <div style="display:flex;flex-wrap:wrap;gap:0.55rem;margin-bottom:2rem;">
                    <?php foreach(['HS Codes','Multi-Currency','0% IGST Export','Commercial Invoice','Proforma Invoice','Free Plan'] as $p): ?>
                    <span style="background:white;border:1px solid var(--border-color);color:var(--text-main);font-size:0.82rem;font-weight:600;padding:0.35rem 0.9rem;border-radius:50px;box-shadow:var(--shadow-sm);">✓ &nbsp;<?= $p ?></span>
                    <?php endforeach; ?>
                </div>

                <div style="display:flex;gap:1rem;flex-wrap:wrap;">
                    <a href="contact" class="btn btn-primary" style="padding:0.9rem 2rem;font-size:1rem;">Start Free — No Credit Card</a>
                    <a href="commercial-invoice" class="btn btn-outline" style="padding:0.9rem 2rem;font-size:1rem;">See Commercial Invoice</a>
                </div>

                <p style="margin-top:1.5rem;font-size:0.85rem;color:var(--text-muted);margin-bottom:0;">
                    ⭐ 4.8/5 from 3,940+ reviews &nbsp;·&nbsp; Trusted by 2,500+ EXIM businesses across India
                </p>
            </div>

            <div style="position:relative;">
                <img src="assets/store/section-1.jpg"
                     alt="ZYLO CRM export import dashboard showing commercial invoice with HS codes, multi-currency billing and trade documents"
                     width="580" height="400"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" fetchpriority="high" loading="lazy">

                <div style="position:absolute;bottom:-1.25rem;left:-1.25rem;background:white;border-radius:14px;padding:0.9rem 1.25rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.75rem;">
                    <span style="width:38px;height:38px;background:#dcfce7;border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="18" height="18" fill="none" stroke="#16a34a" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.78rem;color:var(--text-muted);">Export revenue (USD)</div>
                        <div style="font-size:1rem;font-weight:700;color:var(--text-main);">$48,200 <span style="color:#16a34a;font-size:0.8rem;">↑ 22%</span></div>
                    </div>
                </div>

                <div style="position:absolute;top:-1rem;right:-1rem;background:white;border-radius:14px;padding:0.9rem 1.25rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.65rem;">
                    <span style="width:34px;height:34px;background:rgba(12,79,120,0.08);border-radius:8px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="16" height="16" fill="none" stroke="var(--primary)" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.78rem;color:var(--text-muted);">Commercial invoice</div>
                        <div style="font-size:0.9rem;font-weight:700;color:var(--text-main);">EXP-0142 · Shipped ✓</div>
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
                ['val'=>'2,500+', 'label'=>'EXIM Businesses Trust ZYLO'],
                ['val'=>'15+',    'label'=>'Currencies Supported'],
                ['val'=>'0%',     'label'=>'IGST on Export Invoices'],
                ['val'=>'< 2min', 'label'=>'Commercial Invoice Time'],
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

<!-- ========== CHALLENGES → SOLUTIONS ========== -->
<section>
    <div class="container">
        <div style="text-align:center;max-width:700px;margin:0 auto 4rem;">
            <h2 style="font-size:2.5rem;color:var(--primary-dark);margin-bottom:1rem;">The Real Challenges EXIM Businesses Face — And How ZYLO Solves Them</h2>
            <p style="color:var(--text-muted);font-size:1.05rem;">International trade comes with complex documentation, compliance, and payment challenges. ZYLO eliminates them all.</p>
        </div>
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:2rem;" class="features-grid">
            <?php
            $challenges = [
                ['icon'=>'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
                 'problem'=>'Creating GST-Compliant Export Invoices is Confusing',
                 'solution'=>'ZYLO auto-applies 0% IGST on export invoices and includes the mandatory LUT/Bond declaration. Generate e-Invoices with IRN and QR codes for all B2B exports above ₹5 crore turnover — fully compliant, zero confusion.',
                 'tag'=>'Export GST Compliance'],
                ['icon'=>'M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3',
                 'problem'=>'Manually Looking Up HS Codes for Every Product',
                 'solution'=>'Add the 8-digit HS (Harmonized System) code once per product and ZYLO saves it permanently. Every new commercial invoice auto-fills the HS code — required for customs clearance and international trade compliance.',
                 'tag'=>'HS Code Management'],
                ['icon'=>'M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9',
                 'problem'=>'Billing Foreign Buyers in Multiple Currencies',
                 'solution'=>'Invoice US buyers in USD, European clients in EUR, Gulf buyers in AED — ZYLO handles 15+ currencies. Enter your exchange rate and the INR equivalent is auto-calculated for your GST books. No manual conversion.',
                 'tag'=>'Multi-Currency Billing'],
                ['icon'=>'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4',
                 'problem'=>'Managing Trade Documents Across Shipments',
                 'solution'=>'Generate commercial invoices, proforma invoices, and packing lists from one platform. Link documents to shipments, track status from proforma to final payment, and maintain a complete trade document history per buyer.',
                 'tag'=>'Trade Documents'],
                ['icon'=>'M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z',
                 'problem'=>'Tracking Foreign Payments & Bank Realisations',
                 'solution'=>'Track outstanding export receivables in foreign currency, record FIRC (Foreign Inward Remittance Certificate) numbers against invoices, and monitor bank realisation status for each shipment — all from your dashboard.',
                 'tag'=>'Payment Tracking'],
                ['icon'=>'M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
                 'problem'=>'No Clear View of Import Costs & Landed Prices',
                 'solution'=>'Record purchase orders to foreign suppliers, track import costs including customs duty, freight, and insurance. Calculate the true landed price per unit and monitor your import margins in real-time.',
                 'tag'=>'Import Cost Tracking'],
            ];
            foreach($challenges as $c): ?>
            <div class="card" style="padding:2rem;border-left:3px solid var(--primary);display:flex;flex-direction:column;">
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.72rem;font-weight:700;padding:0.25rem 0.7rem;border-radius:50px;margin-bottom:1rem;text-transform:uppercase;letter-spacing:0.8px;"><?= $c['tag'] ?></div>
                <div style="width:44px;height:44px;background:rgba(12,79,120,0.08);border-radius:10px;display:flex;align-items:center;justify-content:center;margin-bottom:1rem;color:var(--primary);flex-shrink:0;">
                    <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="<?= $c['icon'] ?>"/></svg>
                </div>
                <h3 style="font-size:1.1rem;color:var(--primary-dark);margin-bottom:0.6rem;">❌ &nbsp;<?= $c['problem'] ?></h3>
                <p style="color:var(--text-muted);font-size:0.92rem;line-height:1.7;margin:0;flex:1;"><strong style="color:var(--text-main);">ZYLO fix:</strong> <?= $c['solution'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== CURRENCY SUPPORTED STRIP ========== -->
<section style="padding:3rem 0;background:white;border-top:1px solid var(--border-color);border-bottom:1px solid var(--border-color);">
    <div class="container">
        <div style="text-align:center;max-width:680px;margin:0 auto 2.5rem;">
            <h2 style="font-size:1.8rem;color:var(--primary-dark);margin-bottom:0.75rem;">Invoice in 15+ International Currencies</h2>
            <p style="color:var(--text-muted);font-size:0.97rem;">Bill your international buyers in their preferred currency. ZYLO auto-calculates INR equivalent for your GST and accounting records.</p>
        </div>
        <div style="display:flex;flex-wrap:wrap;justify-content:center;gap:1rem;">
            <?php
            $currencies = [
                ['code'=>'USD','name'=>'US Dollar','flag'=>'🇺🇸'],
                ['code'=>'EUR','name'=>'Euro','flag'=>'🇪🇺'],
                ['code'=>'GBP','name'=>'British Pound','flag'=>'🇬🇧'],
                ['code'=>'AED','name'=>'UAE Dirham','flag'=>'🇦🇪'],
                ['code'=>'SGD','name'=>'Singapore Dollar','flag'=>'🇸🇬'],
                ['code'=>'AUD','name'=>'Australian Dollar','flag'=>'🇦🇺'],
                ['code'=>'CAD','name'=>'Canadian Dollar','flag'=>'🇨🇦'],
                ['code'=>'JPY','name'=>'Japanese Yen','flag'=>'🇯🇵'],
            ];
            foreach($currencies as $c): ?>
            <div style="background:var(--bg-offwhite);border:1px solid var(--border-color);border-radius:12px;padding:0.85rem 1.4rem;display:flex;align-items:center;gap:0.6rem;box-shadow:var(--shadow-sm);">
                <span style="font-size:1.4rem;" aria-hidden="true"><?= $c['flag'] ?></span>
                <div>
                    <div style="font-size:0.95rem;font-weight:700;color:var(--primary-dark);"><?= $c['code'] ?></div>
                    <div style="font-size:0.75rem;color:var(--text-muted);"><?= $c['name'] ?></div>
                </div>
            </div>
            <?php endforeach; ?>
            <div style="background:var(--bg-offwhite);border:1px dashed var(--border-color);border-radius:12px;padding:0.85rem 1.4rem;display:flex;align-items:center;gap:0.6rem;">
                <span style="font-size:1.4rem;" aria-hidden="true">🌐</span>
                <div>
                    <div style="font-size:0.95rem;font-weight:700;color:var(--text-muted);">+7 more</div>
                    <div style="font-size:0.75rem;color:var(--text-muted);">All major currencies</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== FEATURE SPOTLIGHT 1 ========== -->
<section class="bg-offwhite">
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:center;" class="intro-grid">
            <div>
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.78rem;font-weight:700;padding:0.3rem 0.85rem;border-radius:50px;margin-bottom:1.25rem;text-transform:uppercase;letter-spacing:1px;">Export Invoicing</div>
                <h2 style="font-size:2.2rem;color:var(--primary-dark);line-height:1.25;margin-bottom:1.25rem;">GST-Compliant Commercial Invoices With HS Codes in Under 2 Minutes</h2>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.5rem;">Select your foreign buyer, add products with HS codes, set the currency and exchange rate — ZYLO auto-applies 0% IGST with the LUT declaration and generates a professional commercial invoice ready for customs clearance.</p>
                <div style="display:grid;grid-template-columns:1fr 1fr;gap:0.75rem;margin-bottom:1.75rem;">
                    <?php foreach(['8-digit HS codes per product','0% IGST with LUT declaration','Multi-currency with INR equivalent','e-Invoice with IRN & QR','Proforma to commercial conversion','PDF + email delivery'] as $r): ?>
                    <div style="display:flex;align-items:center;gap:0.5rem;font-size:0.88rem;color:var(--text-muted);">
                        <svg width="14" height="14" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <?= $r ?>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a href="commercial-invoice" class="btn btn-primary" style="padding:0.75rem 1.75rem;">Explore Commercial Invoice</a>
            </div>
            <div style="position:relative;">
                <img src="assets/store/section-1.jpg"
                     alt="ZYLO commercial invoice with HS code and 0% IGST for export shipment"
                     width="560" height="380"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- ========== FEATURE SPOTLIGHT 2 ========== -->
<section>
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:center;" class="intro-grid">
            <div style="order:2;" class="feature-img-right">
                <div style="position:relative;">
                    <img src="assets/store/section-2.jpg"
                         alt="ZYLO import cost tracking and purchase order management for import businesses"
                         width="560" height="380"
                         style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" loading="lazy">
                    <div style="position:absolute;bottom:-1rem;right:-1rem;background:white;border-radius:12px;padding:0.9rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);">
                        <div style="font-size:0.75rem;color:var(--text-muted);margin-bottom:0.3rem;">Export receivables (USD)</div>
                        <div style="font-size:1.1rem;font-weight:800;color:var(--primary-dark);">$1,24,800 <span style="color:#16a34a;font-size:0.82rem;">↑ 18%</span></div>
                    </div>
                </div>
            </div>
            <div style="order:1;">
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.78rem;font-weight:700;padding:0.3rem 0.85rem;border-radius:50px;margin-bottom:1.25rem;text-transform:uppercase;letter-spacing:1px;">Import Management</div>
                <h2 style="font-size:2.2rem;color:var(--primary-dark);line-height:1.25;margin-bottom:1.25rem;">Track Import Costs, Customs Duty & Landed Prices in Real-Time</h2>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.5rem;">Raise purchase orders to foreign suppliers, record customs duty, freight, and insurance costs, and automatically calculate the true landed price per unit — so you always know your actual import margin before pricing.</p>
                <div style="display:grid;grid-template-columns:1fr 1fr;gap:0.75rem;margin-bottom:1.75rem;">
                    <?php foreach(['Foreign supplier POs','Customs duty recording','Freight & insurance costs','Landed price calculator','Import inventory tracking','Supplier payment tracker'] as $r): ?>
                    <div style="display:flex;align-items:center;gap:0.5rem;font-size:0.88rem;color:var(--text-muted);">
                        <svg width="14" height="14" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <?= $r ?>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a href="create-purchase-order" class="btn btn-outline" style="padding:0.75rem 1.75rem;">Explore Import Management</a>
            </div>
        </div>
    </div>
</section>

<!-- ========== EXIM BUSINESS TYPES ========== -->
<section class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>ZYLO Works for Every Type of EXIM Business</h2>
            <p>Whether you export textiles, import electronics, or trade in commodities — ZYLO handles your entire trade workflow.</p>
        </div>
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.75rem;margin-top:3rem;" class="perfect-for-grid">
            <?php
            $types = [
                ['emoji'=>'👗','title'=>'Textile & Garment Exporters',
                 'desc' =>'Create commercial invoices with HS codes for apparel and textile categories. Bill buyers in USD or EUR, track shipment-wise receivables, and maintain FIRC records for bank realisation.',
                 'pts'  =>['HS codes for textiles (HS 52–63)','USD/EUR billing','FIRC tracking per shipment'],
                 'link' =>'commercial-invoice'],
                ['emoji'=>'💻','title'=>'Electronics & Tech Importers',
                 'desc' =>'Raise POs to foreign suppliers, track customs duty on electronic imports, calculate landed prices, manage inventory of imported goods, and maintain supplier payment records.',
                 'pts'  =>['Foreign supplier POs','Customs duty tracking','Landed price calculation'],
                 'link' =>'create-purchase-order'],
                ['emoji'=>'💊','title'=>'Pharma & Chemical Exporters',
                 'desc' =>'Generate pharmaceutical export invoices with correct HS codes, handle multi-currency billing for regulated markets, and maintain compliance documentation for each shipment.',
                 'pts'  =>['Pharma HS code invoicing','Regulatory compliance docs','Multi-currency billing'],
                 'link' =>'commercial-invoice'],
                ['emoji'=>'🌾','title'=>'Agriculture & Commodity Traders',
                 'desc' =>'Handle bulk commodity export invoices, manage weight-based pricing, track seasonal shipments, and maintain packing list and quality certificates linked to each export consignment.',
                 'pts'  =>['Weight-based invoicing','Seasonal shipment tracking','Packing list generation'],
                 'link' =>'commercial-invoice'],
                ['emoji'=>'🏭','title'=>'Engineering Goods Exporters',
                 'desc' =>'Create project-based export invoices for machinery and engineering components, manage milestone payments from international buyers, and track technical documentation per shipment.',
                 'pts'  =>['Milestone-based export billing','Technical doc management','Machinery HS codes'],
                 'link' =>'create-purchase-order'],
                ['emoji'=>'🛒','title'=>'Trading & Merchant Exporters',
                 'desc' =>'Manage multiple suppliers and buyers simultaneously, generate back-to-back purchase orders and commercial invoices, and track trade margins across multiple concurrent shipments.',
                 'pts'  =>['Back-to-back PO & invoice','Multi-buyer management','Trade margin tracking'],
                 'link' =>'create-purchase-order'],
            ];
            foreach($types as $t): ?>
            <div class="card" style="padding:2.25rem;display:flex;flex-direction:column;">
                <div style="font-size:2.5rem;margin-bottom:1rem;" aria-hidden="true"><?= $t['emoji'] ?></div>
                <h3 style="font-size:1.2rem;color:var(--primary-dark);margin-bottom:0.75rem;"><?= $t['title'] ?></h3>
                <p style="color:var(--text-muted);font-size:0.93rem;line-height:1.7;margin-bottom:1rem;flex:1;"><?= $t['desc'] ?></p>
                <ul style="list-style:none;padding:0;margin:0 0 1.5rem;">
                    <?php foreach($t['pts'] as $pt): ?>
                    <li style="display:flex;align-items:center;gap:0.5rem;font-size:0.85rem;color:var(--text-muted);margin-bottom:0.35rem;">
                        <svg width="14" height="14" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <?= $pt ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <a href="<?= $t['link'] ?>" style="font-weight:600;font-size:0.9rem;color:var(--primary);display:inline-flex;align-items:center;gap:0.3rem;margin-top:auto;">Learn more &rarr;</a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== COMPARISON ========== -->
<section>
    <div class="container">
        <div class="section-title">
            <h2>ZYLO vs Generic Billing Software for EXIM</h2>
            <p>See why 2,500+ export-import businesses across India trust ZYLO over generic invoicing tools.</p>
        </div>
        <div style="overflow-x:auto;margin-top:2.5rem;border-radius:16px;box-shadow:var(--shadow-md);border:1px solid var(--border-color);">
            <table style="width:100%;border-collapse:collapse;background:white;min-width:500px;">
                <thead>
                    <tr style="background:var(--primary);color:white;">
                        <th style="padding:1.1rem 1.5rem;text-align:left;font-weight:600;font-size:0.95rem;">Feature</th>
                        <th style="padding:1.1rem 1.5rem;text-align:center;font-weight:700;font-size:0.95rem;">
                            <span style="background:rgba(255,255,255,0.15);padding:0.25rem 0.75rem;border-radius:50px;">ZYLO CRM</span>
                        </th>
                        <th style="padding:1.1rem 1.5rem;text-align:center;font-weight:600;font-size:0.95rem;opacity:0.85;">Generic Billing Tools</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $rows = [
                        ['HS Code on Invoices',          '✅ Per product, saved permanently', '❌ Not supported'],
                        ['0% IGST Export Invoicing',     '✅ Auto-applied with LUT text',     '❌ Manual workaround needed'],
                        ['Multi-Currency Billing',       '✅ 15+ currencies, INR auto-calc',  '⚠️ Limited currencies only'],
                        ['e-Invoice with IRN for Export','✅ One-click IRN generation',        '❌ Separate govt portal'],
                        ['Proforma → Commercial Invoice','✅ One-click conversion',            '❌ Re-create from scratch'],
                        ['Import Cost & Landed Price',   '✅ Full landed cost calculator',     '❌ Not available'],
                        ['Foreign Buyer CRM',            '✅ Buyer history & communication',  '❌ Not available'],
                        ['Free Plan Available',          '✅ Yes — forever free',              '❌ Paid from day one'],
                    ];
                    foreach($rows as $i=>$row):
                        $bg = $i%2===1 ? 'background:#f8f9fa;' : '';
                    ?>
                    <tr style="<?= $bg ?>">
                        <td style="padding:1rem 1.5rem;font-weight:600;color:var(--primary-dark);font-size:0.93rem;border-bottom:1px solid var(--border-color);"><?= $row[0] ?></td>
                        <td style="padding:1rem 1.5rem;text-align:center;font-size:0.93rem;border-bottom:1px solid var(--border-color);color:var(--primary-dark);font-weight:500;"><?= $row[1] ?></td>
                        <td style="padding:1rem 1.5rem;text-align:center;font-size:0.93rem;border-bottom:1px solid var(--border-color);color:var(--text-muted);"><?= $row[2] ?></td>
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
            <h2>What EXIM Business Owners Say About ZYLO</h2>
            <p>Real feedback from exporters and importers using ZYLO across India.</p>
        </div>
        <div class="grid-3" style="margin-top:3rem;">
            <?php
            $reviews = [
                ['quote'=>'"We export garments to US and EU buyers and ZYLO handles everything — HS codes auto-filled, 0% IGST applied with LUT text, and USD invoices with INR equivalent for our books. The e-Invoice IRN generation is a massive time saver."',
                 'name'=>'David Chen','role'=>'Director, ChenTex Exports · Surat','avatar'=>'assets/store/avatar-david.svg','stars'=>5],
                ['quote'=>'"I import electronics from China and ZYLO helps me track landed costs perfectly. I record the supplier PO, customs duty, and freight — and instantly see my actual per-unit cost before pricing for resale. Absolutely essential."',
                 'name'=>'Sarah Miller','role'=>'Owner, TechImport Solutions · Delhi','avatar'=>'assets/store/avatar-sarah.svg','stars'=>5],
                ['quote'=>'"We needed multi-currency invoicing badly. Our buyers are in UAE, UK, and Singapore — ZYLO lets me invoice each in their local currency and the INR equivalent is automatically calculated. The proforma-to-commercial conversion saves me hours."',
                 'name'=>'Emily Watson','role'=>'MD, GlobalTrade India · Mumbai','avatar'=>'assets/store/avatar-emily.svg','stars'=>5],
            ];
            foreach($reviews as $r): ?>
            <div class="card" style="background:white;display:flex;flex-direction:column;" itemscope itemtype="https://schema.org/Review">
                <div style="display:flex;gap:2px;margin-bottom:1.1rem;" aria-label="5 out of 5 stars">
                    <?php for($i=0;$i<$r['stars'];$i++): ?>
                    <svg width="15" height="15" fill="#FBBF24" viewBox="0 0 20 20" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    <?php endfor; ?>
                </div>
                <p itemprop="reviewBody" style="font-style:italic;font-size:0.95rem;line-height:1.75;margin-bottom:1.5rem;color:var(--text-main);flex:1;"><?= $r['quote'] ?></p>
                <div style="display:flex;align-items:center;gap:0.85rem;padding-top:1.1rem;border-top:1px solid var(--border-color);" itemscope itemprop="author" itemtype="https://schema.org/Person">
                    <img src="<?= $r['avatar'] ?>" alt="<?= $r['name'] ?>" width="42" height="42"
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
            <p>Everything export-import business owners ask about ZYLO CRM.</p>
        </div>
        <div style="margin-top:2.5rem;" itemscope itemtype="https://schema.org/FAQPage">
            <?php
            $faqs = [
                ['q'=>'How does ZYLO handle GST for export invoices?',
                 'a'=>'For export invoices, ZYLO applies 0% IGST (zero-rated supply under GST) and includes the mandatory declaration — "Supply Meant for Export Under Bond/LUT Without Payment of IGST". You can also choose to export with payment of IGST for refund claims. All export invoices are e-Invoice compliant with IRN and QR code for B2B transactions.'],
                ['q'=>'Can ZYLO add HS codes to commercial invoices?',
                 'a'=>'Yes. ZYLO allows you to add the 8-digit HS (Harmonized System) code for each product in your commercial invoice. HS codes are required by customs authorities for import/export clearance. Once added per product, they are saved permanently and auto-filled on every new invoice.'],
                ['q'=>'Does ZYLO support multi-currency invoicing for foreign buyers?',
                 'a'=>'Yes. ZYLO supports invoicing in USD, EUR, GBP, AED, SGD, and 10+ other major currencies. Enter your exchange rate and the INR equivalent is auto-calculated. Your GST and accounting records are maintained in INR as required by Indian law.'],
                ['q'=>'Can I create proforma invoices for trade negotiations?',
                 'a'=>'Yes. ZYLO lets you create proforma invoices for export enquiries and trade negotiations with foreign buyers. Once confirmed, convert the proforma invoice to a final commercial invoice in one click — all product data, HS codes, and pricing carry over automatically.'],
                ['q'=>'Does ZYLO work for both exporters and importers?',
                 'a'=>'Yes. Exporters use ZYLO to create commercial invoices with HS codes, track foreign receivables, and record FIRC numbers. Importers use ZYLO to manage purchase orders to foreign suppliers, track customs duty, calculate landed prices, and manage import inventory — all from one platform.'],
            ];
            foreach($faqs as $i=>$faq): ?>
            <div style="border:1px solid var(--border-color);border-radius:12px;margin-bottom:0.9rem;overflow:hidden;"
                 itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <button onclick="toggleFaq(this)" aria-expanded="<?= $i===0?'true':'false' ?>"
                    style="width:100%;text-align:left;background:white;border:none;padding:1.25rem 1.5rem;font-size:0.97rem;font-weight:600;color:var(--primary-dark);cursor:pointer;display:flex;justify-content:space-between;align-items:center;gap:1rem;">
                    <span itemprop="name"><?= $faq['q'] ?></span>
                    <svg class="faq-icon" width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"
                         style="flex-shrink:0;transition:transform 0.3s;<?= $i===0?'transform:rotate(180deg)':'' ?>">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="faq-body" style="display:<?= $i===0?'block':'none' ?>;padding:0 1.5rem 1.25rem;background:white;"
                     itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <p itemprop="text" style="color:var(--text-muted);margin:0;font-size:0.95rem;line-height:1.7;"><?= $faq['a'] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== CTA ========== -->
<section style="text-align:center;padding:6rem 0;background:linear-gradient(135deg,var(--primary) 0%,var(--primary-dark) 100%);color:white;">
    <div class="container">
        <h2 style="font-size:2.75rem;margin-bottom:1rem;color:white;">Manage Your EXIM Business Smarter — Start Free</h2>
        <p style="max-width:620px;margin:0 auto 2.5rem;font-size:1.1rem;opacity:0.95;color:white;">Join 2,500+ Indian export-import businesses using ZYLO to create commercial invoices, add HS codes, bill in multiple currencies, and track international trade — all from one platform. Free plan, no credit card required.</p>

        <div style="display:flex;gap:1rem;flex-wrap:wrap;justify-content:center;">
            <a href="contact" style="display:inline-block;background:white;color:var(--primary);padding:1rem 2.5rem;border-radius:10px;font-weight:700;font-size:1.1rem;text-decoration:none;transition:opacity 0.2s;">Get Started Free</a>
            <a href="https://wa.me/917501137266" target="_blank" rel="noopener noreferrer"
               style="display:inline-block;background:rgba(255,255,255,0.15);border:2px solid rgba(255,255,255,0.6);color:white;padding:0.8rem 2.5rem;border-radius:10px;font-weight:700;font-size:1.1rem;text-decoration:none;transition:background 0.2s;">
                Chat on WhatsApp
            </a>
        </div>

        <p style="margin-top:1.5rem;font-size:0.9rem;opacity:0.8;color:white;">Free plan · HS codes · Multi-currency · 0% IGST export · e-Invoice · No credit card</p>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

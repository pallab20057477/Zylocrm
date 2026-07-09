<?php
$pageTitle = "Invoice Formats – Free Invoice Templates for Every Business | ZYLO CRM";
$pageDescription = "Download free invoice formats for India — GST tax invoice, proforma, commercial, consulting, delivery challan, and more. All formats are GSTN-compliant and ready to use. No signup required.";
$pageKeywords = "invoice formats India, GST invoice format, invoice format in Word Excel PDF, free invoice format download, invoice format for small business, GST invoice format India, invoice template India, professional invoice format";
$canonicalPath = '/invoice-formats';
$pageImage = 'https://zylocrm.com/assets/store/section-1.jpg';

$pageSchema = [
    '@context' => 'https://schema.org',
    '@type'    => 'CollectionPage',
    'name'     => 'Free Invoice Formats for Indian Businesses — ZYLO CRM',
    'url'      => 'https://zylocrm.com/invoice-formats',
    'description' => 'Free collection of invoice formats for Indian businesses — GST tax invoice, proforma, commercial, consulting, export, and more. All GSTN-compliant and downloadable as PDF or Word.',
    'inLanguage' => 'en-IN',
    'mainEntityOfPage' => 'https://zylocrm.com/invoice-formats',
    'isPartOf' => [
        '@type' => 'WebSite',
        'name'  => 'ZYLO CRM',
        'url'   => 'https://zylocrm.com'
    ],
    'about' => [
        ['@type' => 'Thing', 'name' => 'Invoice format'],
        ['@type' => 'Thing', 'name' => 'GST invoice'],
        ['@type' => 'Thing', 'name' => 'Tax invoice India']
    ],
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
            'name' => 'Invoice Formats',
            'item' => 'https://zylocrm.com/invoice-formats'
        ]
    ]
];

$formatsItemListSchema = [
    '@context' => 'https://schema.org',
    '@type'    => 'ItemList',
    'name'     => 'Invoice Formats Collection',
    'itemListOrder' => 'https://schema.org/ItemListOrderAscending',
    'numberOfItems' => 8,
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'GST Tax Invoice Format'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Standard Invoice Format'],
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Proforma Invoice Format'],
        ['@type' => 'ListItem', 'position' => 4, 'name' => 'Commercial Invoice Format'],
        ['@type' => 'ListItem', 'position' => 5, 'name' => 'Consulting Invoice Format'],
        ['@type' => 'ListItem', 'position' => 6, 'name' => 'Delivery Challan Format'],
        ['@type' => 'ListItem', 'position' => 7, 'name' => 'Purchase Order Format'],
        ['@type' => 'ListItem', 'position' => 8, 'name' => 'Recurring Invoice Format']
    ]
];

$faqSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name'  => 'What is the standard invoice format in India?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'The standard GST tax invoice format in India must include: seller\'s GSTIN and legal name; buyer\'s name, address, and GSTIN (for B2B); a unique sequential invoice number; invoice date; HSN/SAC codes for goods/services; taxable value per item; applicable GST rate with CGST/SGST or IGST split; total invoice value; and place of supply. ZYLO generates all these automatically.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Which invoice format is used for GST in India?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Under GST, businesses must issue a Tax Invoice for B2B supply and B2C supply above ₹2,00,000. For exempt goods or composition dealers, a Bill of Supply is issued instead. For exports, an Export Invoice is used. All these formats are available free in ZYLO.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can I download invoice formats in Word or Excel?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. ZYLO provides free invoice formats in PDF, Word (.docx), and Excel (.xlsx) — ready to download and use immediately. You can also use ZYLO\'s free online invoice generator to create and send invoices without downloading any template.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'What is the difference between a tax invoice and a bill of supply?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'A Tax Invoice is issued when GST is applicable on the supply — it shows the GST amount separately and allows the buyer to claim Input Tax Credit. A Bill of Supply is issued when no GST is charged — for exempt goods, nil-rated supplies, or by composition dealers. ZYLO supports both formats.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Is there a mandatory invoice format under GST?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. Under GST Rule 46, a tax invoice must contain specific mandatory fields including GSTIN, invoice number, HSN/SAC codes, taxable value, and GST rate. There is no prescribed visual layout — but all mandatory fields must be present. ZYLO\'s invoice generator includes all mandatory fields automatically.']
        ]
    ]
];

include 'includes/header.php';
?>
<script type="application/ld+json"><?php echo json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>
<script type="application/ld+json"><?php echo json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>
<script type="application/ld+json"><?php echo json_encode($formatsItemListSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>

<!-- ========== HERO ========== -->
<section class="bg-offwhite" style="padding-top:calc(var(--header-height) + 4.5rem); padding-bottom:5rem; position:relative; overflow:hidden;">
    <div style="position:absolute;top:-15%;right:-8%;width:520px;height:520px;background:radial-gradient(circle,rgba(12,79,120,0.07) 0%,transparent 70%);border-radius:50%;pointer-events:none;" aria-hidden="true"></div>
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:center;" class="intro-grid">
            <div>
                <div style="display:inline-flex;align-items:center;gap:0.5rem;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.8rem;font-weight:700;padding:0.38rem 1rem;border-radius:50px;margin-bottom:1.5rem;text-transform:uppercase;letter-spacing:1px;border:1px solid rgba(12,79,120,0.18);">
                    <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0"/></svg>
                    Free Download · No Signup Required
                </div>
                <h1 style="font-size:3.1rem;color:var(--primary-dark);line-height:1.12;margin-bottom:1.4rem;">
                    Free Invoice Formats for Every Indian Business
                </h1>
                <p style="font-size:1.15rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.9rem;">
                    Download ready-to-use invoice formats in PDF, Word, and Excel, or generate and send professional invoices in under 30 seconds with ZYLO. All formats are GSTN-compliant and business-ready.
                </p>

                <div style="display:flex;flex-wrap:wrap;gap:0.55rem;margin-bottom:2rem;">
                    <?php foreach(['GST Compliant','Word + Excel + PDF','Client Ready Layouts','Free Download','Online Generator','WhatsApp Share'] as $p): ?>
                    <span style="background:white;border:1px solid var(--border-color);color:var(--text-main);font-size:0.82rem;font-weight:600;padding:0.35rem 0.9rem;border-radius:50px;box-shadow:var(--shadow-sm);">&#10003; &nbsp;<?= $p ?></span>
                    <?php endforeach; ?>
                </div>

                <div style="display:flex;gap:1rem;flex-wrap:wrap;">
                    <a href="invoice-generator" class="btn btn-primary" style="padding:0.9rem 2rem;font-size:1rem;">Create Invoice Online Free</a>
                    <a href="gst-invoice-maker" class="btn btn-outline" style="padding:0.9rem 2rem;font-size:1rem;">GST Invoice Maker</a>
                </div>
                <p style="margin-top:1.5rem;font-size:0.85rem;color:var(--text-muted);margin-bottom:0;">
                    4.9/5 rating · Used by 10,000+ Indian businesses · All formats GSTN-compliant
                </p>
            </div>

            <div style="position:relative;">
                <img src="assets/store/section-1.jpg"
                     alt="Professional invoice formats preview including GST invoice, proforma invoice, and commercial invoice"
                     width="580" height="400"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;"
                     fetchpriority="high">

                <div style="position:absolute;top:-1rem;left:-1.25rem;background:white;border-radius:14px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.7rem;">
                    <span style="width:36px;height:36px;background:#dcfce7;border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="17" height="17" fill="none" stroke="#16a34a" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.75rem;color:var(--text-muted);">Formats ready</div>
                        <div style="font-size:0.88rem;font-weight:700;color:#16a34a;">12+ templates available</div>
                    </div>
                </div>

                <div style="position:absolute;bottom:-1.25rem;right:-1rem;background:white;border-radius:14px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.7rem;">
                    <span style="width:36px;height:36px;background:rgba(12,79,120,0.08);border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="17" height="17" fill="none" stroke="var(--primary)" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.75rem;color:var(--text-muted);">Download options</div>
                        <div style="font-size:0.88rem;font-weight:700;color:var(--text-main);">Word, Excel, PDF</div>
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
                ['val'=>'12+',    'label'=>'Invoice Formats Available'],
                ['val'=>'Free',   'label'=>'All Formats to Download'],
                ['val'=>'100%',   'label'=>'GSTN Compliant'],
                ['val'=>'< 30s',  'label'=>'Online Invoice Creation'],
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

<!-- ========== FORMAT GALLERY ========== -->
<section>
    <div class="container">
        <div class="section-title">
            <h2>All Invoice Formats — Free to Use</h2>
            <p>Click any format to use the online generator or download the template.</p>
        </div>
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.75rem;margin-top:3rem;" class="features-grid">
            <?php
            $formats = [
                [
                    'icon'   => 'M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2z',
                    'color'  => '#dcfce7',
                    'badge'  => 'Most Used',
                    'label'  => 'GST Tax Invoice Format',
                    'desc'   => 'The standard GSTN-compliant tax invoice for B2B and B2C supply. Includes CGST/SGST/IGST breakdown, HSN/SAC codes, GSTIN, and all mandatory fields under GST Rule 46.',
                    'fields' => ['Seller & buyer GSTIN','HSN/SAC codes','CGST/SGST/IGST split','Place of supply','Invoice number & date'],
                    'href'   => 'gst-invoice-maker',
                    'cta'    => 'Create GST Invoice Free'
                ],
                [
                    'icon'   => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
                    'color'  => '#dbeafe',
                    'badge'  => '',
                    'label'  => 'Standard Invoice Format',
                    'desc'   => 'A clean professional invoice for any business — without GST. Ideal for exempt supplies, small sellers below the GST threshold, or international billing in any currency.',
                    'fields' => ['Business name & logo','Client details','Itemised line items','Subtotal & total','Payment terms'],
                    'href'   => 'invoice-generator',
                    'cta'    => 'Create Invoice Free'
                ],
                [
                    'icon'   => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2',
                    'color'  => '#fef9c3',
                    'badge'  => '',
                    'label'  => 'Proforma Invoice Format',
                    'desc'   => 'A pre-delivery price estimate sent before goods are dispatched. Used to collect advances, for import/export clearance, purchase order confirmation, and buyer budget approvals.',
                    'fields' => ['Advance & balance amount','Delivery date & terms','GST or tax indication','Validity date','Payment schedule'],
                    'href'   => 'creator-proforma-invoice',
                    'cta'    => 'Create Proforma Free'
                ],
                [
                    'icon'   => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064',
                    'color'  => '#ede9fe',
                    'badge'  => '',
                    'label'  => 'Commercial Invoice Format',
                    'desc'   => 'Required for international trade and customs clearance. Includes country of origin, HS codes, declared value, Incoterms, and shipping details — in any currency.',
                    'fields' => ['Country of origin','HS/HS-6 codes','Incoterms','Declared customs value','Shipper & consignee details'],
                    'href'   => 'commercial-invoice',
                    'cta'    => 'Create Commercial Invoice'
                ],
                [
                    'icon'   => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z',
                    'color'  => '#e0f2fe',
                    'badge'  => '',
                    'label'  => 'Consulting Invoice Format',
                    'desc'   => 'Designed for consultants, coaches, and professional service providers. Shows hourly rate or project-based billing, retainer details, expense reimbursements, and professional service tax.',
                    'fields' => ['Hourly or project rate','Retainer billing','Expense items','Professional service tax','Scope reference'],
                    'href'   => 'consulting-invoice',
                    'cta'    => 'Create Consulting Invoice'
                ],
                [
                    'icon'   => 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4',
                    'color'  => '#f0fdf4',
                    'badge'  => '',
                    'label'  => 'Delivery Challan Format',
                    'desc'   => 'A document accompanying goods in transit when a tax invoice is not yet issued — for job work, returns, or consignment basis supply. Required for eWay Bill and compliance.',
                    'fields' => ['Challan number & date','Consignor & consignee','Item details & quantity','Vehicle number','Purpose of movement'],
                    'href'   => 'create-delivery-challan',
                    'cta'    => 'Create Delivery Challan'
                ],
                [
                    'icon'   => 'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z',
                    'color'  => '#fef3c7',
                    'badge'  => '',
                    'label'  => 'Purchase Order Format',
                    'desc'   => 'A formal document sent to a supplier to confirm an order. Specifies items, quantities, agreed prices, delivery date, and payment terms — before goods are dispatched.',
                    'fields' => ['PO number & date','Supplier details','Item specifications','Delivery schedule','Payment terms'],
                    'href'   => 'create-purchase-order',
                    'cta'    => 'Create Purchase Order'
                ],
                [
                    'icon'   => 'M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z',
                    'color'  => '#fee2e2',
                    'badge'  => '',
                    'label'  => 'Debit Note Format',
                    'desc'   => 'Issued to a buyer to increase the taxable value of a previous invoice — for short-billed amounts, price revisions, or additional charges. Linked to the original invoice.',
                    'fields' => ['Original invoice reference','Reason for debit','Revised taxable value','Additional GST amount','Effective date'],
                    'href'   => 'invoice-generator',
                    'cta'    => 'Create Debit Note'
                ],
                [
                    'icon'   => 'M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z',
                    'color'  => '#f8fafc',
                    'badge'  => '',
                    'label'  => 'Credit Note Format',
                    'desc'   => 'Issued to a buyer to reduce the taxable value — for returns, cancellations, or overbilling. The buyer\'s ITC is reversed and the seller\'s GST liability is reduced.',
                    'fields' => ['Original invoice reference','Reason for credit','Revised taxable value','GST reduction amount','Buyer acknowledgement'],
                    'href'   => 'invoice-generator',
                    'cta'    => 'Create Credit Note'
                ],
                [
                    'icon'   => 'M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
                    'color'  => '#dbeafe',
                    'badge'  => '',
                    'label'  => 'Quotation / Estimate Format',
                    'desc'   => 'A price proposal sent before work begins or an order is confirmed. Includes itemised pricing, validity date, GST indication, and payment terms — inviting the client to approve.',
                    'fields' => ['Valid until date','Scope of work','Itemised pricing','GST indication','Approval request'],
                    'href'   => 'quotation-generator',
                    'cta'    => 'Create Quotation Free'
                ],
                [
                    'icon'   => 'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15',
                    'color'  => '#dcfce7',
                    'badge'  => '',
                    'label'  => 'Recurring Invoice Format',
                    'desc'   => 'For subscription or retainer billing — generates automatically on a set schedule. Shows billing period, subscription plan, auto-renewal date, and recurring amount clearly.',
                    'fields' => ['Billing period','Subscription plan name','Auto-renewal date','Recurring amount','Cancellation terms'],
                    'href'   => 'invoicing-software',
                    'cta'    => 'Set Up Recurring Billing'
                ],
                [
                    'icon'   => 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z',
                    'color'  => '#ede9fe',
                    'badge'  => '',
                    'label'  => 'Freelance Invoice Format',
                    'desc'   => 'Simple, clean invoice for freelancers and solopreneurs. Shows project name, hourly or fixed rate, payment due date, bank/UPI details — with or without GST as applicable.',
                    'fields' => ['Project or task name','Hourly or fixed rate','UPI / bank details','Payment due date','GST if applicable'],
                    'href'   => 'invoice-generator',
                    'cta'    => 'Create Freelance Invoice'
                ],
            ];
            foreach($formats as $f): ?>
            <div class="card" style="padding:2rem;display:flex;flex-direction:column;position:relative;overflow:visible;">
                <?php if(!empty($f['badge'])): ?>
                <div style="position:absolute;top:-1px;right:1.25rem;transform:translateY(-50%);background:var(--primary);color:white;font-size:0.68rem;font-weight:700;padding:0.25rem 0.75rem;border-radius:50px;text-transform:uppercase;letter-spacing:1px;white-space:nowrap;box-shadow:0 3px 8px rgba(12,79,120,0.3);"><?= $f['badge'] ?></div>
                <?php endif; ?>
                <!-- Icon -->
                <div style="width:52px;height:52px;background:<?= $f['color'] ?>;border-radius:12px;display:flex;align-items:center;justify-content:center;margin-bottom:1.25rem;flex-shrink:0;">
                    <svg width="24" height="24" fill="none" stroke="var(--primary)" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="<?= $f['icon'] ?>"/></svg>
                </div>
                <h3 style="font-size:1.1rem;color:var(--primary-dark);margin-bottom:0.7rem;"><?= $f['label'] ?></h3>
                <p style="color:var(--text-muted);font-size:0.9rem;line-height:1.7;margin-bottom:1rem;flex:1;"><?= $f['desc'] ?></p>
                <!-- Fields -->
                <ul style="list-style:none;padding:0;margin:0 0 1.5rem;">
                    <?php foreach($f['fields'] as $field): ?>
                    <li style="display:flex;align-items:center;gap:0.5rem;font-size:0.82rem;color:var(--text-muted);margin-bottom:0.3rem;">
                        <svg width="12" height="12" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <?= $field ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <a href="<?= $f['href'] ?>" class="btn btn-outline" style="font-size:0.88rem;padding:0.6rem 1rem;text-align:center;"><?= $f['cta'] ?> →</a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== GST INVOICE FORMAT GUIDE ========== -->
<section class="bg-offwhite">
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:start;" class="intro-grid">
            <div>
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.78rem;font-weight:700;padding:0.3rem 0.85rem;border-radius:50px;margin-bottom:1.25rem;text-transform:uppercase;letter-spacing:1px;">GST Invoice Format</div>
                <h2 style="font-size:2.2rem;color:var(--primary-dark);line-height:1.25;margin-bottom:1.25rem;">
                    What Must a GST Invoice Contain Under GST Rule 46?
                </h2>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.75rem;">
                    Under GST Rule 46, a valid tax invoice must contain specific mandatory fields. Missing any of them makes the invoice non-compliant — and the buyer cannot claim Input Tax Credit (ITC). ZYLO's invoice generator includes every mandatory field automatically.
                </p>
                <!-- Mandatory fields table -->
                <div style="background:white;border:1px solid var(--border-color);border-radius:14px;overflow:hidden;margin-bottom:1.75rem;">
                    <div style="background:var(--primary);color:white;padding:0.85rem 1.25rem;display:grid;grid-template-columns:1fr auto;gap:1rem;">
                        <div style="font-size:0.82rem;font-weight:700;">Mandatory Field</div>
                        <div style="font-size:0.82rem;font-weight:700;">Required For</div>
                    </div>
                    <?php
                    $mandatoryFields = [
                        ['field'=>'Supplier name & GSTIN',        'for'=>'All invoices'],
                        ['field'=>'Supplier address',             'for'=>'All invoices'],
                        ['field'=>'Buyer name & GSTIN',           'for'=>'B2B invoices'],
                        ['field'=>'Unique invoice number',        'for'=>'All invoices'],
                        ['field'=>'Invoice date',                 'for'=>'All invoices'],
                        ['field'=>'HSN/SAC code',                 'for'=>'As per turnover'],
                        ['field'=>'Description of goods/services','for'=>'All invoices'],
                        ['field'=>'Quantity & unit',              'for'=>'Goods invoices'],
                        ['field'=>'Taxable value per item',       'for'=>'All invoices'],
                        ['field'=>'GST rate & amount',            'for'=>'All invoices'],
                        ['field'=>'Place of supply',              'for'=>'All invoices'],
                        ['field'=>'Signature/e-sign',             'for'=>'All invoices'],
                    ];
                    foreach($mandatoryFields as $i=>$mf):
                        $bg = $i%2===1?'background:#f8f9fa;':'background:white;';
                    ?>
                    <div style="<?= $bg ?>padding:0.7rem 1.25rem;display:grid;grid-template-columns:1fr auto;gap:1rem;border-top:1px solid var(--border-color);align-items:center;">
                        <div style="display:flex;align-items:center;gap:0.5rem;font-size:0.88rem;color:var(--text-main);font-weight:500;">
                            <svg width="13" height="13" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            <?= $mf['field'] ?>
                        </div>
                        <div style="font-size:0.78rem;color:var(--text-muted);white-space:nowrap;"><?= $mf['for'] ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a href="gst-invoice-maker" class="btn btn-primary" style="padding:0.75rem 1.75rem;">Create GST Invoice Free</a>
            </div>

            <div>
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.78rem;font-weight:700;padding:0.3rem 0.85rem;border-radius:50px;margin-bottom:1.25rem;text-transform:uppercase;letter-spacing:1px;">When to Use Which</div>
                <h2 style="font-size:2.2rem;color:var(--primary-dark);line-height:1.25;margin-bottom:1.25rem;">
                    Which Invoice Format Should You Use?
                </h2>
                <p style="font-size:1rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.5rem;">
                    The right format depends on your supply type and buyer's GST registration status.
                </p>
                <?php
                $guide = [
                    ['situation'=>'Selling to a GST-registered business',     'format'=>'B2B Tax Invoice','color'=>'#dcfce7','tc'=>'#16a34a'],
                    ['situation'=>'Selling to an unregistered consumer',      'format'=>'B2C Invoice','color'=>'#dbeafe','tc'=>'#3b82f6'],
                    ['situation'=>'Exporting goods or services',              'format'=>'Export Invoice','color'=>'#fef9c3','tc'=>'#ca8a04'],
                    ['situation'=>'Exempt goods or composition scheme',       'format'=>'Bill of Supply','color'=>'#ede9fe','tc'=>'#8b5cf6'],
                    ['situation'=>'Before delivery to collect advance',       'format'=>'Proforma Invoice','color'=>'#fee2e2','tc'=>'#ef4444'],
                    ['situation'=>'Sending a price quote before order',       'format'=>'Quotation/Estimate','color'=>'#e0f2fe','tc'=>'#0ea5e9'],
                    ['situation'=>'Goods moving without an invoice',          'format'=>'Delivery Challan','color'=>'#f0fdf4','tc'=>'#16a34a'],
                    ['situation'=>'Reducing or cancelling a past invoice',    'format'=>'Credit Note','color'=>'#fef3c7','tc'=>'#ca8a04'],
                ];
                foreach($guide as $g): ?>
                <div style="display:flex;align-items:center;gap:0.85rem;background:white;border:1px solid var(--border-color);border-radius:10px;padding:0.85rem 1rem;margin-bottom:0.6rem;">
                    <span style="background:<?= $g['color'] ?>;color:<?= $g['tc'] ?>;font-size:0.72rem;font-weight:700;padding:0.25rem 0.65rem;border-radius:50px;white-space:nowrap;flex-shrink:0;"><?= $g['format'] ?></span>
                    <span style="font-size:0.85rem;color:var(--text-muted);"><?= $g['situation'] ?></span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- ========== ONLINE VS DOWNLOAD ========== -->
<section>
    <div class="container">
        <div class="section-title">
            <h2>Download a Template or Use ZYLO Online?</h2>
            <p>Both are free. But one saves you a lot more time.</p>
        </div>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:1.75rem;margin-top:3rem;max-width:800px;margin-left:auto;margin-right:auto;">
            <!-- Download template -->
            <div style="background:var(--bg-offwhite);border:1px solid var(--border-color);border-radius:18px;padding:2.25rem;">
                <div style="font-size:1rem;font-weight:700;color:var(--primary-dark);margin-bottom:1.25rem;">📄 Download Template (Word/Excel)</div>
                <?php
                $download_pros = ['Free to download','Works offline','Fully customisable layout'];
                $download_cons = ['Manual data entry every time','Easy to make calculation errors','No GST auto-calculation','No tracking — who\'s paid, who hasn\'t','Can\'t share via WhatsApp directly','No payment link for client'];
                ?>
                <div style="font-size:0.78rem;font-weight:700;color:#16a34a;text-transform:uppercase;letter-spacing:1px;margin-bottom:0.5rem;">Pros</div>
                <?php foreach($download_pros as $p): ?>
                <div style="display:flex;align-items:center;gap:0.5rem;font-size:0.85rem;color:var(--text-muted);margin-bottom:0.35rem;">
                    <svg width="13" height="13" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg><?= $p ?>
                </div>
                <?php endforeach; ?>
                <div style="font-size:0.78rem;font-weight:700;color:#ef4444;text-transform:uppercase;letter-spacing:1px;margin:0.85rem 0 0.5rem;">Limitations</div>
                <?php foreach($download_cons as $c): ?>
                <div style="display:flex;align-items:center;gap:0.5rem;font-size:0.85rem;color:var(--text-muted);margin-bottom:0.35rem;">
                    <svg width="13" height="13" fill="none" stroke="#ef4444" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg><?= $c ?>
                </div>
                <?php endforeach; ?>
            </div>
            <!-- ZYLO online -->
            <div style="background:white;border:2px solid var(--primary);border-radius:18px;padding:2.25rem;box-shadow:var(--shadow-lg);">
                <div style="font-size:1rem;font-weight:700;color:var(--primary-dark);margin-bottom:1.25rem;">⚡ Use ZYLO Online Generator (Recommended)</div>
                <?php
                $online_pros = ['Auto GST CGST/SGST/IGST calculation','Professional PDF in 30 seconds','WhatsApp + email share in 1 click','Pay Now link for instant payment','Track paid/overdue/pending status','Invoice history saved automatically','Recurring billing automation','Free up to 50 invoices/month'];
                ?>
                <div style="font-size:0.78rem;font-weight:700;color:#16a34a;text-transform:uppercase;letter-spacing:1px;margin-bottom:0.5rem;">Why It's Better</div>
                <?php foreach($online_pros as $p): ?>
                <div style="display:flex;align-items:center;gap:0.5rem;font-size:0.85rem;color:var(--text-muted);margin-bottom:0.4rem;">
                    <svg width="13" height="13" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg><?= $p ?>
                </div>
                <?php endforeach; ?>
                <a href="invoice-generator" class="btn btn-primary" style="width:100%;text-align:center;margin-top:1.25rem;">Try ZYLO Free →</a>
            </div>
        </div>
    </div>
</section>

<!-- ========== FAQ ========== -->
<section class="bg-offwhite">
    <div class="container" style="max-width:820px;">
        <div class="section-title">
            <h2>Frequently Asked Questions</h2>
            <p>Common questions about invoice formats and GST invoicing in India.</p>
        </div>
        <div style="margin-top:2.5rem;" itemscope itemtype="https://schema.org/FAQPage">
            <?php
            $faqs = [
                ['q'=>'What is the standard invoice format in India?',
                 'a'=>'The standard GST tax invoice format in India must include: seller\'s GSTIN and legal name; buyer\'s name, address, and GSTIN (for B2B); a unique sequential invoice number; invoice date; HSN/SAC codes; taxable value per item; applicable GST with CGST/SGST or IGST split; total value; and place of supply. ZYLO generates all these automatically.'],
                ['q'=>'Which invoice format is used for GST?',
                 'a'=>'Under GST: use a Tax Invoice for B2B supply and B2C above ₹2,00,000. Use a Bill of Supply for exempt goods or composition dealers. Use an Export Invoice for international sales. All formats are free on ZYLO.'],
                ['q'=>'Can I download invoice formats in Word or Excel?',
                 'a'=>'Yes. ZYLO provides free invoice formats in PDF, Word (.docx), and Excel (.xlsx) — ready to use immediately. You can also use ZYLO\'s free online invoice generator — faster, no download needed, and with auto GST calculation.'],
                ['q'=>'What is the difference between a tax invoice and a bill of supply?',
                 'a'=>'A Tax Invoice is issued when GST is applicable — it shows GST separately and allows the buyer to claim ITC. A Bill of Supply is issued when no GST is charged — for exempt goods, nil-rated supplies, or by composition dealers.'],
                ['q'=>'Is there a mandatory invoice format under GST?',
                 'a'=>'Yes. Under GST Rule 46, a tax invoice must contain mandatory fields including GSTIN, invoice number, HSN/SAC codes, taxable value, and GST rate. There is no prescribed visual layout, but all mandatory fields must be present. ZYLO includes all of them automatically.'],
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

<!-- ========== USE CASE LINKS ========== -->
<section>
    <div class="container">
        <div class="section-title">
            <h2>Find the Right Invoice Format by Use Case</h2>
            <p>Use the right format for each transaction type to stay compliant and speed up approvals.</p>
        </div>
        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1.25rem;margin-top:3rem;" class="who-grid">
            <?php
            $useCases = [
                ['title'=>'GST Sales Billing', 'desc'=>'Use GST tax invoice format for taxable B2B and B2C sales.', 'href'=>'gst-invoice-maker'],
                ['title'=>'Pre-Sales Quoting', 'desc'=>'Send estimates before order confirmation with a quotation format.', 'href'=>'quotation-generator'],
                ['title'=>'Advance Request', 'desc'=>'Share proforma invoice before shipment or service delivery.', 'href'=>'creator-proforma-invoice'],
                ['title'=>'International Trade', 'desc'=>'Issue commercial invoices with export-ready fields and terms.', 'href'=>'commercial-invoice'],
                ['title'=>'Goods Dispatch', 'desc'=>'Create delivery challan when goods move before final invoicing.', 'href'=>'create-delivery-challan'],
                ['title'=>'Supplier Procurement', 'desc'=>'Raise purchase orders with item details and supplier terms.', 'href'=>'create-purchase-order'],
                ['title'=>'Service Billing', 'desc'=>'Use consulting invoice templates for retainers and projects.', 'href'=>'consulting-invoice'],
                ['title'=>'Recurring Clients', 'desc'=>'Automate subscription invoices with recurring billing setup.', 'href'=>'invoicing-software'],
            ];
            foreach($useCases as $u): ?>
            <a href="<?= $u['href'] ?>" style="background:var(--bg-offwhite);border:1px solid var(--border-color);border-radius:14px;padding:1.25rem;display:block;text-decoration:none;transition:all 0.2s;" onmouseover="this.style.borderColor='var(--primary)';this.style.transform='translateY(-3px)';this.style.boxShadow='var(--shadow-md)';" onmouseout="this.style.borderColor='var(--border-color)';this.style.transform='';this.style.boxShadow='';">
                <div style="font-size:0.95rem;font-weight:700;color:var(--primary-dark);margin-bottom:0.45rem;"><?= $u['title'] ?></div>
                <div style="font-size:0.82rem;color:var(--text-muted);line-height:1.6;"><?= $u['desc'] ?></div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== CTA ========== -->
<section style="text-align:center;padding:6rem 0;background:linear-gradient(135deg,var(--primary) 0%,var(--primary-dark) 100%);">
    <div class="container" style="max-width:700px;margin:0 auto;">
        <h2 style="font-size:2.5rem;color:white;margin-bottom:1.25rem;line-height:1.2;">
            Stop Formatting Templates. Start Invoicing Smarter.
        </h2>
        <p style="font-size:1.1rem;color:rgba(255,255,255,0.85);margin-bottom:2.5rem;line-height:1.7;">
            Create any invoice format online in under 30 seconds — with auto GST, payment links, and WhatsApp sharing. Free forever for up to 50 invoices/month.
        </p>
        <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
            <a href="invoice-generator" class="btn" style="padding:1rem 2.25rem;font-size:1.05rem;background:white;color:var(--primary);border-radius:10px;font-weight:700;">
                Create Invoice Online Free
            </a>
            <a href="gst-invoice-maker" class="btn" style="padding:1rem 2.25rem;font-size:1.05rem;background:rgba(255,255,255,0.12);color:white;border:1px solid rgba(255,255,255,0.3);border-radius:10px;font-weight:600;">
                GST Invoice Maker
            </a>
        </div>
        <p style="color:rgba(255,255,255,0.5);font-size:0.82rem;margin-top:1.5rem;margin-bottom:0;">Free · No credit card · No signup required</p>
    </div>
</section>

<script>
function toggleFaq(btn){
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
    .who-grid{grid-template-columns:1fr 1fr !important;}
}
@media(max-width:480px){
    .who-grid{grid-template-columns:1fr 1fr !important;}
}
</style>

<?php include 'includes/footer.php'; ?>

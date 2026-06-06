<?php
$pageTitle = "Inventory Management Software – Real-Time Stock Tracking | ZYLO CRM";
$pageDescription = "ZYLO's inventory management software tracks stock in real time, auto-generates purchase orders, supports barcode scanning & multi-warehouse management. Free plan available. Trusted by 10,000+ businesses.";
$pageKeywords = "inventory management software India, stock management software, warehouse management software, barcode inventory software, real-time stock tracking, inventory software for small business, purchase order software India, multi-warehouse management";
$canonicalPath = '/inventory-software';

$pageSchema = [
    '@context' => 'https://schema.org',
    '@type'    => 'SoftwareApplication',
    'name'     => 'ZYLO Inventory Management Software',
    'url'      => 'https://zylocrm.com/inventory-software',
    'description' => 'Real-time inventory management software for Indian businesses. Track stock levels, automate purchase orders, manage multiple warehouses, and use barcode scanning to eliminate stockouts.',
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
        'reviewCount' => '486',
        'bestRating'  => '5'
    ],
    'featureList' => [
        'Real-time stock level tracking',
        'Automated low-stock alerts and reorder points',
        'Automated purchase order generation',
        'Barcode and QR code scanning',
        'Multi-warehouse and multi-location management',
        'Product variant and SKU management',
        'Stock valuation — FIFO, LIFO, weighted average',
        'Inventory reports and demand forecasting'
    ]
];

$faqSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name'  => 'What is inventory management software?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Inventory management software is a tool that helps businesses track stock levels in real time, manage product variants and SKUs, automate purchase orders when stock runs low, and gain visibility across multiple warehouses — all from a single dashboard.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Is ZYLO inventory software free?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. ZYLO offers a free plan with basic inventory tracking for up to 100 SKUs. The Pro plan starts at ₹3,999/month with unlimited SKUs, multi-warehouse management, barcode scanning, automated purchase orders, and 24/7 support.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Does ZYLO support barcode scanning?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. ZYLO supports barcode and QR code scanning from the mobile app. Scan items to add stock, process sales, or do a stock count — without manual data entry. Works with standard barcodes, QR codes, and custom SKU labels.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Can ZYLO manage multiple warehouses?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. ZYLO supports unlimited warehouses and storage locations from a single account. Track stock levels at each location independently, transfer stock between warehouses, and get consolidated reports across all locations.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Does ZYLO auto-generate purchase orders?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. Set a reorder point for each product. When stock falls below the threshold, ZYLO automatically creates a draft purchase order for the preferred supplier and notifies your team — so you never run out of stock unexpectedly.']
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
                    Real-Time Stock Tracking
                </div>

                <h1 style="font-size:3.2rem;color:var(--primary-dark);line-height:1.12;margin-bottom:1.4rem;">
                    Inventory Management Software That Eliminates Stockouts
                </h1>
                <p style="font-size:1.18rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.9rem;">
                    Track every unit in real time, set reorder alerts, auto-generate purchase orders, and manage multiple warehouses — all from one dashboard. Never lose a sale to an empty shelf again.
                </p>

                <div style="display:flex;flex-wrap:wrap;gap:0.55rem;margin-bottom:2rem;">
                    <?php foreach(['Real-Time Tracking','Auto Reorder','Barcode Scanning','Multi-Warehouse','Product Variants','Free Plan'] as $p): ?>
                    <span style="background:white;border:1px solid var(--border-color);color:var(--text-main);font-size:0.82rem;font-weight:600;padding:0.35rem 0.9rem;border-radius:50px;box-shadow:var(--shadow-sm);">✓ &nbsp;<?= $p ?></span>
                    <?php endforeach; ?>
                </div>

                <div style="display:flex;gap:1rem;flex-wrap:wrap;">
                    <a href="contact" class="btn btn-primary" style="padding:0.9rem 2rem;font-size:1rem;">Track Inventory Free</a>
                    <a href="#features" class="btn btn-outline" style="padding:0.9rem 2rem;font-size:1rem;">See All Features</a>
                </div>
                <p style="margin-top:1.5rem;font-size:0.85rem;color:var(--text-muted);margin-bottom:0;">
                    ⭐ 4.8/5 from 486 reviews &nbsp;·&nbsp; Trusted by 10,000+ businesses
                </p>
            </div>

            <div style="position:relative;">
                <img src="assets/store/section-1.jpg"
                     alt="ZYLO inventory management software dashboard showing real-time stock levels and low stock alerts"
                     width="580" height="400"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;"
                     fetchpriority="high">

                <!-- Floating: Low stock alert -->
                <div style="position:absolute;top:-1rem;left:-1.25rem;background:white;border-radius:14px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.7rem;">
                    <span style="width:36px;height:36px;background:#fef9c3;border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="17" height="17" fill="none" stroke="#ca8a04" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.75rem;color:var(--text-muted);">Low stock alert</div>
                        <div style="font-size:0.88rem;font-weight:700;color:#ca8a04;">3 SKUs below reorder point</div>
                    </div>
                </div>

                <!-- Floating: PO auto-created -->
                <div style="position:absolute;bottom:-1.25rem;right:-1rem;background:white;border-radius:14px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.7rem;">
                    <span style="width:36px;height:36px;background:#dcfce7;border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <svg width="17" height="17" fill="none" stroke="#16a34a" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </span>
                    <div>
                        <div style="font-size:0.75rem;color:var(--text-muted);">Purchase order auto-created</div>
                        <div style="font-size:0.88rem;font-weight:700;color:#16a34a;">PO-2024-089 · sent to supplier</div>
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
<section style="padding:2.75rem 0;background:white;border-bottom:1px solid var(--border-color);">
    <div class="container">
        <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1rem;text-align:center;" class="stats-bar-grid">
            <?php
            $stats = [
                ['val'=>'Real-Time', 'label'=>'Stock Level Updates'],
                ['val'=>'40%',       'label'=>'Reduction in Stockouts'],
                ['val'=>'Zero',      'label'=>'Manual Reorder Work'],
                ['val'=>'10,000+',   'label'=>'Businesses Trust ZYLO'],
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
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.78rem;font-weight:700;padding:0.3rem 0.85rem;border-radius:50px;margin-bottom:1.25rem;text-transform:uppercase;letter-spacing:1px;">Smart Inventory</div>
                <h2 style="font-size:2.2rem;color:var(--primary-dark);line-height:1.25;margin-bottom:1.25rem;">
                    Know Your Stock Before It Runs Out — Automatically
                </h2>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.5rem;">
                    ZYLO watches your inventory 24/7. The moment a product dips below your reorder threshold, it alerts your team and creates a purchase order for the preferred supplier — all automatically, before customers notice a gap.
                </p>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.75rem;">
                    Every stock movement — sale, purchase, return, transfer — updates your inventory in real time. No end-of-day manual counts. No Excel sheets. Just live, accurate stock data whenever you need it.
                </p>

                <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;margin-bottom:1.75rem;">
                    <?php
                    $metrics = [
                        ['val'=>'40%',     'label'=>'fewer stockouts on average'],
                        ['val'=>'3 hrs',   'label'=>'saved on stock counts/week'],
                        ['val'=>'Real-Time','label'=>'stock updates on every sale'],
                        ['val'=>'Zero',    'label'=>'manual reorder work needed'],
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
                     alt="ZYLO inventory dashboard showing real-time stock levels across multiple warehouses"
                     width="560" height="380"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" loading="lazy">
                <div style="position:absolute;bottom:-1rem;right:-1rem;background:white;border-radius:12px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);">
                    <div style="font-size:0.75rem;color:var(--text-muted);margin-bottom:0.2rem;">Warehouse Mumbai · live</div>
                    <div style="font-size:0.88rem;font-weight:700;color:var(--text-main);">842 SKUs · all tracked ✓</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== KEY FEATURES ========== -->
<section id="features" class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>Complete Inventory Control — From Stock-In to Stock-Out</h2>
            <p>Every feature you need to run a lean, accurate, and profitable inventory operation.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.75rem;margin-top:3rem;" class="features-grid">
            <?php
            $features = [
                [
                    'icon'  => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z',
                    'title' => 'Real-Time Stock Tracking',
                    'desc'  => 'Every sale, purchase, return, and transfer updates your stock count instantly. See live inventory levels across all products, variants, and locations from one dashboard.',
                    'pts'   => ['Live stock on every transaction','Product variant tracking','Stock movement history']
                ],
                [
                    'icon'  => 'M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9',
                    'title' => 'Low-Stock Alerts & Reorder Points',
                    'desc'  => 'Set minimum stock levels per product. When inventory hits the threshold, ZYLO alerts your team and automatically creates a draft purchase order for the preferred supplier.',
                    'pts'   => ['Custom reorder thresholds','Instant email & app alerts','Auto draft PO creation']
                ],
                [
                    'icon'  => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2',
                    'title' => 'Automated Purchase Orders',
                    'desc'  => 'ZYLO auto-generates purchase orders when stock falls below reorder points. Send to suppliers with one click, track delivery status, and receive stock directly into inventory.',
                    'pts'   => ['Auto PO generation','Supplier-wise PO routing','GRN stock receipt tracking']
                ],
                [
                    'icon'  => 'M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01',
                    'title' => 'Barcode & QR Code Scanning',
                    'desc'  => 'Scan barcodes and QR codes directly from the ZYLO mobile app to add stock, process sales, or complete a stock count. Works with standard EAN, UPC, QR, and custom SKU labels.',
                    'pts'   => ['Mobile app scanning','EAN, UPC, QR support','Custom SKU label printing']
                ],
                [
                    'icon'  => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
                    'title' => 'Multi-Warehouse Management',
                    'desc'  => 'Track stock across unlimited warehouses and storage locations. Transfer stock between locations, set location-specific reorder points, and get consolidated or per-location reports.',
                    'pts'   => ['Unlimited warehouses','Inter-warehouse transfers','Location-wise stock reports']
                ],
                [
                    'icon'  => 'M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z',
                    'title' => 'Product Variants & SKU Management',
                    'desc'  => 'Manage products with multiple variants — size, colour, weight, or any custom attribute. Each variant gets its own SKU, stock count, and pricing. Bulk import from Excel in minutes.',
                    'pts'   => ['Unlimited product variants','Custom attributes','Bulk SKU import via Excel']
                ],
                [
                    'icon'  => 'M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z',
                    'title' => 'Stock Valuation Methods',
                    'desc'  => 'Calculate inventory value using FIFO, LIFO, or weighted average costing methods. Get accurate COGS reports and understand true profitability per product.',
                    'pts'   => ['FIFO, LIFO, weighted avg','COGS auto-calculation','Profitability per product']
                ],
                [
                    'icon'  => 'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6',
                    'title' => 'Demand Forecasting',
                    'desc'  => 'ZYLO analyses your sales velocity and seasonal patterns to predict future demand. Know how much to order and when — so you avoid both stockouts and overstock.',
                    'pts'   => ['Sales velocity analysis','Seasonal trend detection','Smart reorder quantity suggestions']
                ],
                [
                    'icon'  => 'M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
                    'title' => 'Inventory Reports & Analytics',
                    'desc'  => 'Get stock ageing reports, fast/slow-moving product analysis, shrinkage reports, and inventory turnover ratios — all in real time. Export to PDF or Excel with one click.',
                    'pts'   => ['Stock ageing report','Fast/slow-mover analysis','Inventory turnover ratio']
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

<!-- ========== PO SPOTLIGHT ========== -->
<section>
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:center;" class="intro-grid">
            <div>
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.78rem;font-weight:700;padding:0.3rem 0.85rem;border-radius:50px;margin-bottom:1.25rem;text-transform:uppercase;letter-spacing:1px;">Auto Reordering</div>
                <h2 style="font-size:2.2rem;color:var(--primary-dark);line-height:1.25;margin-bottom:1.25rem;">
                    Stock Runs Low → Purchase Order Goes Out Automatically
                </h2>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.5rem;">
                    ZYLO monitors every product's stock level against your defined reorder point. The moment a threshold is hit, a purchase order is drafted for the right supplier at the right quantity — and your team is notified instantly.
                </p>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.75rem;">
                    No more daily stock checks. No more manually creating POs. No more "oops, we're out of stock" moments. ZYLO has it covered before you even realise there was a problem.
                </p>

                <!-- Flow -->
                <div style="background:var(--bg-offwhite);border:1px solid var(--border-color);border-radius:14px;padding:1.25rem 1.5rem;margin-bottom:1.75rem;">
                    <div style="font-size:0.8rem;font-weight:700;color:var(--primary);text-transform:uppercase;letter-spacing:1px;margin-bottom:0.75rem;">Auto-Reorder Flow in ZYLO</div>
                    <?php
                    $flow = [
                        ['icon'=>'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10', 'color'=>'var(--primary)', 'text'=>'Stock falls below reorder point'],
                        ['icon'=>'M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5','color'=>'#f59e0b','text'=>'Team alert sent immediately'],
                        ['icon'=>'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2','color'=>'#0ea5e9','text'=>'Draft PO created for preferred supplier'],
                        ['icon'=>'M12 19l9 2-9-18-9 18 9-2zm0 0v-8','color'=>'#16a34a','text'=>'PO sent to supplier · stock replenished'],
                    ];
                    foreach($flow as $i=>$fl): ?>
                    <div style="display:flex;align-items:center;gap:0.75rem;padding:0.6rem 0;<?= $i<count($flow)-1?'border-bottom:1px solid var(--border-color);':'' ?>">
                        <span style="width:30px;height:30px;background:<?= $fl['color'] ?>;border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                            <svg width="14" height="14" fill="none" stroke="white" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="<?= $fl['icon'] ?>"/></svg>
                        </span>
                        <span style="font-size:0.88rem;color:var(--text-main);"><?= $fl['text'] ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a href="contact" class="btn btn-primary" style="padding:0.75rem 1.75rem;">Set Up Auto-Reorder</a>
            </div>

            <div style="position:relative;">
                <img src="assets/store/hero-1.jpg"
                     alt="ZYLO auto purchase order generation triggered by low stock alert"
                     width="560" height="380"
                     style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" loading="lazy">
                <div style="position:absolute;top:-1rem;right:-1rem;background:white;border-radius:12px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);">
                    <div style="font-size:0.75rem;color:var(--text-muted);margin-bottom:0.2rem;">Auto PO raised</div>
                    <div style="font-size:0.88rem;font-weight:700;color:#16a34a;">PO-2024-089 · 500 units ✓</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== MULTI-WAREHOUSE SPOTLIGHT ========== -->
<section class="bg-offwhite">
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:center;" class="intro-grid">
            <div style="order:2;" class="feature-img-right">
                <div style="position:relative;">
                    <img src="assets/store/section-1.jpg"
                         alt="ZYLO multi-warehouse inventory dashboard showing stock across Mumbai Delhi and Bengaluru"
                         width="560" height="380"
                         style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" loading="lazy">
                    <div style="position:absolute;bottom:-1rem;left:-1rem;background:white;border-radius:12px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);">
                        <div style="font-size:0.75rem;color:var(--text-muted);margin-bottom:0.2rem;">Stock transfer complete</div>
                        <div style="font-size:0.88rem;font-weight:700;color:var(--text-main);">Mumbai → Delhi · 200 units</div>
                    </div>
                </div>
            </div>
            <div style="order:1;">
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.78rem;font-weight:700;padding:0.3rem 0.85rem;border-radius:50px;margin-bottom:1.25rem;text-transform:uppercase;letter-spacing:1px;">Multi-Warehouse</div>
                <h2 style="font-size:2.2rem;color:var(--primary-dark);line-height:1.25;margin-bottom:1.25rem;">
                    Manage Every Warehouse from One Screen
                </h2>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.5rem;">
                    Whether you have one godown or twenty warehouses across India, ZYLO gives you a single, consolidated view of your entire inventory. Drill down to any location, transfer stock between warehouses, and set location-specific reorder points.
                </p>
                <div style="display:grid;grid-template-columns:1fr 1fr;gap:0.75rem;margin-bottom:1.75rem;">
                    <?php foreach(['Unlimited locations','Real-time per-location stock','Inter-warehouse transfers','Location-wise reorder points','Consolidated stock reports','Zone-wise analytics'] as $pt): ?>
                    <div style="display:flex;align-items:center;gap:0.5rem;font-size:0.88rem;color:var(--text-muted);">
                        <svg width="14" height="14" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <?= $pt ?>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a href="contact" class="btn btn-outline" style="padding:0.75rem 1.75rem;">See Multi-Warehouse Demo</a>
            </div>
        </div>
    </div>
</section>

<!-- ========== WHO IT'S FOR ========== -->
<section>
    <div class="container">
        <div class="section-title">
            <h2>Built for Every Business That Holds Stock</h2>
            <p>Whether you sell 10 SKUs or 10,000 — ZYLO scales with your operation.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.75rem;margin-top:3rem;" class="perfect-for-grid">
            <?php
            $personas = [
                [
                    'icon'  => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
                    'title' => 'Retailers & Traders',
                    'desc'  => 'Track stock across your shop floor and backroom. Know what\'s selling fast, reorder automatically, and never disappoint a customer with "out of stock" again.',
                    'link'  => 'smbs',
                    'pts'   => ['POS-linked stock update','Fast/slow-mover reports','Automatic reorder alerts']
                ],
                [
                    'icon'  => 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4',
                    'title' => 'Manufacturers & Distributors',
                    'desc'  => 'Manage raw materials, WIP, and finished goods inventory. Track production consumption, supplier lead times, and maintain optimal stock levels across your supply chain.',
                    'link'  => 'export-import-business',
                    'pts'   => ['Raw material tracking','Production consumption','Supplier lead time alerts']
                ],
                [
                    'icon'  => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064',
                    'title' => 'E-commerce & Omnichannel',
                    'desc'  => 'Sync stock across your website, marketplace, and physical store in real time. Never oversell, never disappoint. Fulfil orders from the nearest warehouse automatically.',
                    'link'  => 'startups',
                    'pts'   => ['Multi-channel stock sync','Oversell prevention','Nearest warehouse fulfilment']
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
            <h2>ZYLO vs Other Inventory Management Software</h2>
            <p>See why businesses switch to ZYLO for smarter inventory control.</p>
        </div>

        <div style="overflow-x:auto;margin-top:2.5rem;border-radius:16px;box-shadow:var(--shadow-md);border:1px solid var(--border-color);" class="comparison-table">
            <table style="width:100%;border-collapse:collapse;background:white;min-width:560px;">
                <thead>
                    <tr style="background:var(--primary);color:white;">
                        <th style="padding:1.1rem 1.5rem;text-align:left;font-weight:600;font-size:0.93rem;width:34%;">Feature</th>
                        <th style="padding:1.1rem 1.5rem;text-align:center;font-weight:700;font-size:0.93rem;">
                            <span style="background:rgba(255,255,255,0.15);padding:0.2rem 0.75rem;border-radius:50px;">ZYLO CRM</span>
                        </th>
                        <th style="padding:1.1rem 1.5rem;text-align:center;font-weight:600;font-size:0.93rem;opacity:0.8;">Standalone Inventory Tools</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $rows = [
                        ['Free Plan',                     '✅ Forever free tier',           '❌ Trial only (14–30 days)'],
                        ['Real-Time Stock Updates',       '✅ On every transaction',        '⚠️ Periodic sync / manual'],
                        ['Auto Purchase Orders',          '✅ Triggered by reorder point',  '⚠️ Manual PO creation'],
                        ['Barcode Scanning (Mobile)',     '✅ Full-featured app',           '⚠️ Hardware scanner needed'],
                        ['Multi-Warehouse',               '✅ Unlimited locations',         '⚠️ Paid add-on'],
                        ['GST Invoice + Inventory Linked','✅ All-in-one platform',         '❌ Separate tools required'],
                        ['Demand Forecasting',            '✅ Built-in AI forecasting',     '❌ Not available'],
                        ['Price / Month',                 '₹0 – ₹3,999',                  '₹3,000 – ₹20,000+'],
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
<section>
    <div class="container">
        <div class="section-title">
            <h2>What Our Customers Say</h2>
            <p>Real results from businesses that switched to ZYLO inventory management.</p>
        </div>

        <div class="grid-3" style="margin-top:3rem;">
            <?php
            $reviews = [
                [
                    'quote' => '"ZYLO cut our stockout incidents by 60% in the first quarter. The auto-reorder feature means we never have to manually check stock levels or create purchase orders. It just happens."',
                    'name'  => 'Suresh Patel',
                    'role'  => 'Owner, Patel Electronics · Ahmedabad',
                    'img'   => 'assets/store/avatar-david.jpg',
                ],
                [
                    'quote' => '"We manage 3 warehouses across Mumbai, Pune, and Nashik. Before ZYLO, stock reconciliation took 2 days every month. Now it\'s real-time and I can see everything from my phone in 30 seconds."',
                    'name'  => 'Anita Sharma',
                    'role'  => 'Operations Manager, FastTrack Distributors · Mumbai',
                    'img'   => 'assets/store/avatar-sarah.jpg',
                ],
                [
                    'quote' => '"The barcode scanning on the mobile app transformed our goods receipt process. What used to take 3 staff members and 4 hours now takes 1 person and 45 minutes. The accuracy is perfect."',
                    'name'  => 'Emily Watson',
                    'role'  => 'Warehouse Head, Craft Retail · Delhi',
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
            <p>Everything you need to know about ZYLO Inventory Management Software.</p>
        </div>

        <div style="margin-top:2.5rem;" itemscope itemtype="https://schema.org/FAQPage">
            <?php
            $faqs = [
                ['q'=>'What is inventory management software?',       'a'=>'Inventory management software helps businesses track stock levels in real time, manage product variants and SKUs, automate purchase orders when stock runs low, and gain visibility across multiple warehouses — all from a single dashboard.'],
                ['q'=>'Is ZYLO inventory software free?',             'a'=>'Yes. ZYLO offers a free plan with basic inventory tracking for up to 100 SKUs. The Pro plan starts at ₹3,999/month with unlimited SKUs, multi-warehouse management, barcode scanning, automated purchase orders, and 24/7 support.'],
                ['q'=>'Does ZYLO support barcode scanning?',          'a'=>'Yes. ZYLO supports barcode and QR code scanning from the mobile app. Scan items to add stock, process sales, or do a stock count — without manual data entry. Works with standard barcodes, QR codes, and custom SKU labels.'],
                ['q'=>'Can ZYLO manage multiple warehouses?',         'a'=>'Yes. ZYLO supports unlimited warehouses and storage locations. Track stock at each location independently, transfer stock between warehouses, and get consolidated or per-location reports — all from one account.'],
                ['q'=>'Does ZYLO auto-generate purchase orders?',     'a'=>'Yes. Set a reorder point for each product. When stock falls below the threshold, ZYLO automatically creates a draft purchase order for the preferred supplier and notifies your team — so you never run out of stock unexpectedly.'],
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
            Stop Guessing Your Stock. Start Knowing It.
        </h2>
        <p style="font-size:1.1rem;color:rgba(255,255,255,0.85);margin-bottom:2.5rem;line-height:1.7;">
            Join 10,000+ businesses that track inventory in real time with ZYLO. Free plan available — no credit card, no setup fee.
        </p>
        <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
            <a href="contact" class="btn" style="padding:1rem 2.25rem;font-size:1.05rem;background:white;color:var(--primary);border-radius:10px;font-weight:700;">
                Track Inventory Free
            </a>
            <a href="https://wa.me/917501137266?text=Hi%2C%20I%20want%20to%20know%20more%20about%20ZYLO%20Inventory%20Management%20Software"
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
    .feature-img-right{ order: 0 !important; }
}
</style>

<?php include 'includes/footer.php'; ?>

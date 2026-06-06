<?php
$pageTitle = "Invoicing API – Automate Invoice Generation via REST API | ZYLO CRM";
$pageDescription = "ZYLO's Invoicing API lets developers generate GST-compliant invoices, send payment links, and track invoice status programmatically. REST API with JSON, webhooks, and SDKs. Free sandbox available.";
$pageKeywords = "invoicing API India, invoice generation API, GST invoice API, REST API invoicing, billing API India, invoice automation API, payment link API, invoice API for developers";
$canonicalPath = '/invoicing-api';

$pageSchema = [
    '@context' => 'https://schema.org',
    '@type'    => 'SoftwareApplication',
    'name'     => 'ZYLO Invoicing API',
    'url'      => 'https://zylocrm.com/invoicing-api',
    'description' => 'REST API for invoice generation, GST billing automation, payment link creation, and invoice tracking. Integrate ZYLO invoicing into any application with JSON responses and webhook events.',
    'applicationCategory' => 'DeveloperApplication',
    'operatingSystem' => 'Platform Independent',
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
        'description'   => 'Free sandbox available. Pro plan from ₹3,999/month.',
        'pricingModel'  => 'Freemium'
    ],
    'featureList' => [
        'RESTful API with JSON responses',
        'GST-compliant invoice generation via API',
        'Payment link creation and tracking',
        'Webhook events for invoice status changes',
        'Client and product management endpoints',
        'Rate limiting with 1000 requests/minute on Pro',
        'Sandbox environment for testing',
        'SDKs for Node.js, Python, PHP, and Java'
    ]
];

$faqSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name'  => 'What can I build with the ZYLO Invoicing API?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'You can build automated invoicing workflows, integrate billing into your SaaS platform, generate GST-compliant invoices from your e-commerce orders, create payment links programmatically, and receive real-time webhook notifications when invoices are viewed, paid, or become overdue.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Is ZYLO API RESTful? What format does it use?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. ZYLO API is a fully RESTful API that uses JSON for both requests and responses. It uses standard HTTP methods (GET, POST, PUT, DELETE) and HTTP status codes. Authentication uses Bearer token via API key.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Is there a free sandbox to test the API?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. ZYLO provides a full sandbox environment at sandbox.zylocrm.com with test API keys. The sandbox mirrors the production API exactly so you can build and test integrations without affecting live data or incurring charges.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'What are the API rate limits?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Free plan: 60 requests/minute. Pro plan: 1,000 requests/minute. Enterprise plan: custom rate limits available. All limits are per API key. If you exceed the limit, the API returns a 429 Too Many Requests response.']
        ],
        [
            '@type' => 'Question',
            'name'  => 'Does the ZYLO API support webhooks?',
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. ZYLO sends webhook events for key invoice lifecycle events: invoice.created, invoice.sent, invoice.viewed, invoice.paid, invoice.overdue, and invoice.cancelled. Configure your webhook endpoint in the ZYLO dashboard and receive real-time POST requests with event payloads.']
        ]
    ]
];

include 'includes/header.php';
?>
<script type="application/ld+json"><?php echo json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>

<!-- ========== HERO ========== -->
<section style="padding-top:calc(var(--header-height) + 4.5rem); padding-bottom:5rem; background:linear-gradient(160deg, #0c1e2e 0%, #073552 100%); position:relative; overflow:hidden;">
    <!-- Grid pattern overlay -->
    <div style="position:absolute;inset:0;background-image:linear-gradient(rgba(255,255,255,0.03) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,0.03) 1px,transparent 1px);background-size:40px 40px;pointer-events:none;" aria-hidden="true"></div>

    <div class="container" style="position:relative;z-index:1;">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:center;" class="intro-grid">
            <div>
                <div style="display:inline-flex;align-items:center;gap:0.5rem;background:rgba(255,255,255,0.08);color:rgba(255,255,255,0.9);font-size:0.8rem;font-weight:700;padding:0.38rem 1rem;border-radius:50px;margin-bottom:1.5rem;text-transform:uppercase;letter-spacing:1px;border:1px solid rgba(255,255,255,0.15);">
                    <span style="width:7px;height:7px;background:#22c55e;border-radius:50%;display:inline-block;animation:pulse-dot 2s ease-in-out infinite;"></span>
                    REST API · 99.9% Uptime
                </div>

                <h1 style="font-size:3.2rem;color:white;line-height:1.12;margin-bottom:1.4rem;">
                    Invoicing API — Build Billing Into Any Application
                </h1>
                <p style="font-size:1.18rem;line-height:1.8;color:rgba(255,255,255,0.75);margin-bottom:1.9rem;">
                    Generate GST-compliant invoices, create payment links, and track invoice status programmatically. A clean REST API with JSON responses, webhooks, and SDKs — ready to integrate in minutes.
                </p>

                <div style="display:flex;flex-wrap:wrap;gap:0.55rem;margin-bottom:2rem;">
                    <?php foreach(['REST API','GST Invoices','Payment Links','Webhooks','SDKs','Free Sandbox'] as $p): ?>
                    <span style="background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.15);color:rgba(255,255,255,0.85);font-size:0.82rem;font-weight:600;padding:0.35rem 0.9rem;border-radius:50px;">✓ &nbsp;<?= $p ?></span>
                    <?php endforeach; ?>
                </div>

                <div style="display:flex;gap:1rem;flex-wrap:wrap;">
                    <a href="contact" class="btn btn-primary" style="padding:0.9rem 2rem;font-size:1rem;">Get API Key Free</a>
                    <a href="#endpoints" class="btn" style="padding:0.9rem 2rem;font-size:1rem;background:rgba(255,255,255,0.1);color:white;border:1px solid rgba(255,255,255,0.25);border-radius:8px;">View API Docs</a>
                </div>
                <p style="margin-top:1.5rem;font-size:0.85rem;color:rgba(255,255,255,0.5);margin-bottom:0;">
                    Free sandbox · No credit card to start · Production-ready in minutes
                </p>
            </div>

            <!-- Code snippet -->
            <div>
                <div style="background:#0d1117;border-radius:16px;border:1px solid rgba(255,255,255,0.1);overflow:hidden;box-shadow:0 25px 50px rgba(0,0,0,0.5);">
                    <!-- Title bar -->
                    <div style="background:#161b22;padding:0.75rem 1.25rem;display:flex;align-items:center;gap:0.5rem;border-bottom:1px solid rgba(255,255,255,0.08);">
                        <span style="width:12px;height:12px;background:#ff5f57;border-radius:50%;display:inline-block;"></span>
                        <span style="width:12px;height:12px;background:#ffbd2e;border-radius:50%;display:inline-block;"></span>
                        <span style="width:12px;height:12px;background:#28c840;border-radius:50%;display:inline-block;"></span>
                        <span style="margin-left:0.5rem;font-size:0.78rem;color:rgba(255,255,255,0.4);font-family:monospace;">POST /v1/invoices</span>
                    </div>
                    <pre style="margin:0;padding:1.5rem;font-size:0.82rem;line-height:1.7;overflow-x:auto;color:#e6edf3;font-family:'Courier New',monospace;"><span style="color:#ff7b72;">curl</span> -X POST https://api.zylocrm.com/v1/invoices \
  -H <span style="color:#a5d6ff;">"Authorization: Bearer YOUR_API_KEY"</span> \
  -H <span style="color:#a5d6ff;">"Content-Type: application/json"</span> \
  -d <span style="color:#a5d6ff;">'{
    "client_id": "clt_9Xk2mR",
    "line_items": [
      {
        "description": "Web Design Services",
        "quantity": 1,
        "unit_price": 50000,
        "gst_rate": 18
      }
    ],
    "due_date": "2024-07-15",
    "send_email": true,
    "payment_link": true
  }'</span></pre>
                    <!-- Response -->
                    <div style="border-top:1px solid rgba(255,255,255,0.08);padding:1rem 1.5rem;background:#0d1117;">
                        <div style="font-size:0.72rem;color:rgba(255,255,255,0.4);margin-bottom:0.5rem;font-family:monospace;">RESPONSE · 201 Created</div>
                        <pre style="margin:0;font-size:0.78rem;color:#3fb950;font-family:monospace;line-height:1.6;">{
  "id": "inv_A7z3kP",
  "status": "sent",
  "total": 59000,
  "gst_amount": 9000,
  "payment_link": "pay.zylocrm.com/i/A7z3kP",
  "pdf_url": "cdn.zylocrm.com/invoices/inv_A7z3kP.pdf"
}</pre>
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
                ['val'=>'< 200ms', 'label'=>'Average API Response Time'],
                ['val'=>'99.9%',   'label'=>'API Uptime SLA'],
                ['val'=>'1000/min','label'=>'Requests Per Minute (Pro)'],
                ['val'=>'REST',    'label'=>'JSON · Webhooks · SDKs'],
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

<!-- ========== USE CASES ========== -->
<section>
    <div class="container">
        <div class="section-title">
            <h2>What You Can Build with the ZYLO Invoicing API</h2>
            <p>From SaaS billing to e-commerce automation — the API handles every invoicing use case.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.75rem;margin-top:3rem;" class="features-grid">
            <?php
            $useCases = [
                [
                    'icon'  => 'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15',
                    'label' => 'SaaS Subscription Billing',
                    'desc'  => 'Trigger invoice generation automatically when a subscription renews, a trial converts, or a usage threshold is hit. Send payment links and track receipt — all via API.',
                    'pts'   => ['Auto-trigger on subscription events','Usage-based billing support','Webhook on payment received']
                ],
                [
                    'icon'  => 'M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z',
                    'label' => 'E-commerce Order Invoicing',
                    'desc'  => 'Auto-generate a GST invoice the moment an order is placed in your store. Send the PDF to the customer and sync data back to your OMS — in one API call.',
                    'pts'   => ['Order-to-invoice in one call','GST auto-calculated','PDF emailed to customer']
                ],
                [
                    'icon'  => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
                    'label' => 'ERP & CRM Integration',
                    'desc'  => 'Connect your existing ERP or CRM to ZYLO via API. Push client data, pull invoice history, and keep both systems in sync without manual data entry.',
                    'pts'   => ['Bi-directional data sync','Client & invoice CRUD endpoints','Bulk import/export support']
                ],
                [
                    'icon'  => 'M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z',
                    'label' => 'Payment Link Generation',
                    'desc'  => 'Create branded, shareable payment links via API. Embed them in your app, SMS, or WhatsApp flows. Receive a webhook when the customer pays.',
                    'pts'   => ['Branded payment pages','UPI, cards, net banking','Real-time payment webhooks']
                ],
                [
                    'icon'  => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
                    'label' => 'GST Invoice Automation',
                    'desc'  => 'Generate GSTN-compliant invoices with auto-calculated CGST/SGST/IGST via a single API call. Supports e-Invoice with IRN and QR code for eligible businesses.',
                    'pts'   => ['CGST/SGST/IGST auto-calc','e-Invoice + IRN via API','HSN/SAC code support']
                ],
                [
                    'icon'  => 'M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9',
                    'label' => 'Automated Reminders & Follow-ups',
                    'desc'  => 'Trigger payment reminder sequences via API or configure them in the dashboard. Get webhook events when invoices become overdue so your system can take action.',
                    'pts'   => ['Schedule reminder sequences','Overdue webhook trigger','Custom reminder messaging']
                ],
            ];
            foreach($useCases as $uc): ?>
            <div class="card" style="padding:2rem;border-left:3px solid var(--primary);display:flex;flex-direction:column;">
                <div style="width:48px;height:48px;background:rgba(12,79,120,0.08);border-radius:10px;display:flex;align-items:center;justify-content:center;margin-bottom:1.25rem;color:var(--primary);flex-shrink:0;">
                    <svg width="23" height="23" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="<?= $uc['icon'] ?>"/></svg>
                </div>
                <h3 style="font-size:1.1rem;color:var(--primary-dark);margin-bottom:0.7rem;"><?= $uc['label'] ?></h3>
                <p style="color:var(--text-muted);font-size:0.92rem;line-height:1.7;margin-bottom:1rem;flex:1;"><?= $uc['desc'] ?></p>
                <ul style="list-style:none;padding:0;margin:0;">
                    <?php foreach($uc['pts'] as $pt): ?>
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

<!-- ========== API ENDPOINTS ========== -->
<section id="endpoints" class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>Core API Endpoints</h2>
            <p>Everything you need to automate invoicing — clean, predictable, and well-documented.</p>
        </div>

        <div style="margin-top:3rem;border-radius:16px;overflow:hidden;box-shadow:var(--shadow-md);border:1px solid var(--border-color);">
            <!-- Invoices -->
            <div style="background:var(--primary);color:white;padding:0.9rem 1.5rem;">
                <span style="font-size:0.85rem;font-weight:700;text-transform:uppercase;letter-spacing:1px;">Invoices</span>
            </div>
            <?php
            $endpoints = [
                ['method'=>'POST',  'color'=>'#22c55e', 'path'=>'/v1/invoices',              'desc'=>'Create a new invoice with line items, GST, and optional payment link'],
                ['method'=>'GET',   'color'=>'#3b82f6', 'path'=>'/v1/invoices',              'desc'=>'List all invoices with filtering by status, date, and client'],
                ['method'=>'GET',   'color'=>'#3b82f6', 'path'=>'/v1/invoices/{id}',         'desc'=>'Retrieve a specific invoice with full details and payment status'],
                ['method'=>'PUT',   'color'=>'#f59e0b', 'path'=>'/v1/invoices/{id}',         'desc'=>'Update a draft invoice — line items, due date, or notes'],
                ['method'=>'POST',  'color'=>'#22c55e', 'path'=>'/v1/invoices/{id}/send',    'desc'=>'Send an invoice via email and/or WhatsApp to the client'],
                ['method'=>'POST',  'color'=>'#22c55e', 'path'=>'/v1/invoices/{id}/remind',  'desc'=>'Trigger a payment reminder for an outstanding invoice'],
                ['method'=>'DELETE','color'=>'#ef4444', 'path'=>'/v1/invoices/{id}/cancel',  'desc'=>'Cancel an invoice — sets status to cancelled'],
            ];
            foreach($endpoints as $i=>$ep):
                $bg = $i%2===1?'background:#f8f9fa;':'background:white;';
            ?>
            <div style="<?= $bg ?>display:flex;align-items:center;gap:1.25rem;padding:0.9rem 1.5rem;border-top:1px solid var(--border-color);flex-wrap:wrap;">
                <span style="background:<?= $ep['color'] ?>;color:white;font-size:0.72rem;font-weight:700;padding:0.25rem 0.6rem;border-radius:5px;min-width:56px;text-align:center;font-family:monospace;flex-shrink:0;"><?= $ep['method'] ?></span>
                <code style="font-size:0.85rem;color:var(--primary-dark);font-family:monospace;flex-shrink:0;"><?= $ep['path'] ?></code>
                <span style="font-size:0.85rem;color:var(--text-muted);flex:1;"><?= $ep['desc'] ?></span>
            </div>
            <?php endforeach; ?>

            <!-- Clients -->
            <div style="background:var(--primary-dark);color:white;padding:0.9rem 1.5rem;">
                <span style="font-size:0.85rem;font-weight:700;text-transform:uppercase;letter-spacing:1px;">Clients</span>
            </div>
            <?php
            $clientEps = [
                ['method'=>'POST',  'color'=>'#22c55e', 'path'=>'/v1/clients',         'desc'=>'Create a new client with GSTIN, address, and contact details'],
                ['method'=>'GET',   'color'=>'#3b82f6', 'path'=>'/v1/clients',         'desc'=>'List all clients with search and pagination'],
                ['method'=>'PUT',   'color'=>'#f59e0b', 'path'=>'/v1/clients/{id}',    'desc'=>'Update client details — name, GSTIN, address, or email'],
                ['method'=>'DELETE','color'=>'#ef4444', 'path'=>'/v1/clients/{id}',    'desc'=>'Archive a client — removes from active list, preserves invoice history'],
            ];
            foreach($clientEps as $i=>$ep):
                $bg = $i%2===1?'background:#f8f9fa;':'background:white;';
            ?>
            <div style="<?= $bg ?>display:flex;align-items:center;gap:1.25rem;padding:0.9rem 1.5rem;border-top:1px solid var(--border-color);flex-wrap:wrap;">
                <span style="background:<?= $ep['color'] ?>;color:white;font-size:0.72rem;font-weight:700;padding:0.25rem 0.6rem;border-radius:5px;min-width:56px;text-align:center;font-family:monospace;flex-shrink:0;"><?= $ep['method'] ?></span>
                <code style="font-size:0.85rem;color:var(--primary-dark);font-family:monospace;flex-shrink:0;"><?= $ep['path'] ?></code>
                <span style="font-size:0.85rem;color:var(--text-muted);flex:1;"><?= $ep['desc'] ?></span>
            </div>
            <?php endforeach; ?>

            <!-- Payments -->
            <div style="background:#073552;color:white;padding:0.9rem 1.5rem;">
                <span style="font-size:0.85rem;font-weight:700;text-transform:uppercase;letter-spacing:1px;">Payments</span>
            </div>
            <?php
            $payEps = [
                ['method'=>'POST','color'=>'#22c55e', 'path'=>'/v1/payment-links',              'desc'=>'Generate a standalone payment link for a specific amount'],
                ['method'=>'GET', 'color'=>'#3b82f6', 'path'=>'/v1/invoices/{id}/payments',    'desc'=>'Get payment history and status for a specific invoice'],
            ];
            foreach($payEps as $i=>$ep):
                $bg = $i%2===1?'background:#f8f9fa;':'background:white;';
            ?>
            <div style="<?= $bg ?>display:flex;align-items:center;gap:1.25rem;padding:0.9rem 1.5rem;border-top:1px solid var(--border-color);flex-wrap:wrap;">
                <span style="background:<?= $ep['color'] ?>;color:white;font-size:0.72rem;font-weight:700;padding:0.25rem 0.6rem;border-radius:5px;min-width:56px;text-align:center;font-family:monospace;flex-shrink:0;"><?= $ep['method'] ?></span>
                <code style="font-size:0.85rem;color:var(--primary-dark);font-family:monospace;flex-shrink:0;"><?= $ep['path'] ?></code>
                <span style="font-size:0.85rem;color:var(--text-muted);flex:1;"><?= $ep['desc'] ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== WEBHOOK EVENTS ========== -->
<section>
    <div class="container">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:start;" class="intro-grid">
            <div>
                <div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.78rem;font-weight:700;padding:0.3rem 0.85rem;border-radius:50px;margin-bottom:1.25rem;text-transform:uppercase;letter-spacing:1px;">Webhooks</div>
                <h2 style="font-size:2.2rem;color:var(--primary-dark);line-height:1.25;margin-bottom:1.25rem;">
                    Get Notified the Moment Something Happens
                </h2>
                <p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.75rem;">
                    ZYLO sends real-time POST webhooks to your endpoint for every key invoice lifecycle event. No polling, no missed updates — your system reacts the moment an invoice is paid, viewed, or becomes overdue.
                </p>

                <div style="display:grid;gap:0.75rem;margin-bottom:1.75rem;">
                    <?php
                    $webhooks = [
                        ['event'=>'invoice.created',   'color'=>'#3b82f6','desc'=>'A new invoice was created via API or dashboard'],
                        ['event'=>'invoice.sent',      'color'=>'#8b5cf6','desc'=>'Invoice was emailed or WhatsApp-ed to client'],
                        ['event'=>'invoice.viewed',    'color'=>'#f59e0b','desc'=>'Client opened the invoice link for the first time'],
                        ['event'=>'invoice.paid',      'color'=>'#22c55e','desc'=>'Full payment received — update your system'],
                        ['event'=>'invoice.overdue',   'color'=>'#ef4444','desc'=>'Invoice passed due date without full payment'],
                        ['event'=>'invoice.cancelled', 'color'=>'#6b7280','desc'=>'Invoice was cancelled — stop any pending actions'],
                    ];
                    foreach($webhooks as $w): ?>
                    <div style="display:flex;align-items:center;gap:0.85rem;background:var(--bg-offwhite);border:1px solid var(--border-color);border-radius:10px;padding:0.75rem 1rem;">
                        <span style="width:10px;height:10px;background:<?= $w['color'] ?>;border-radius:50%;flex-shrink:0;"></span>
                        <code style="font-size:0.82rem;font-weight:700;color:var(--primary-dark);font-family:monospace;min-width:160px;"><?= $w['event'] ?></code>
                        <span style="font-size:0.82rem;color:var(--text-muted);"><?= $w['desc'] ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a href="contact" class="btn btn-primary" style="padding:0.75rem 1.75rem;">Set Up Webhooks</a>
            </div>

            <!-- Webhook payload example -->
            <div>
                <div style="background:#0d1117;border-radius:16px;border:1px solid rgba(255,255,255,0.08);overflow:hidden;box-shadow:var(--shadow-xl);">
                    <div style="background:#161b22;padding:0.75rem 1.25rem;display:flex;align-items:center;justify-content:space-between;border-bottom:1px solid rgba(255,255,255,0.08);">
                        <div style="display:flex;align-items:center;gap:0.5rem;">
                            <span style="width:10px;height:10px;background:#ff5f57;border-radius:50%;"></span>
                            <span style="width:10px;height:10px;background:#ffbd2e;border-radius:50%;"></span>
                            <span style="width:10px;height:10px;background:#28c840;border-radius:50%;"></span>
                        </div>
                        <span style="font-size:0.75rem;color:rgba(255,255,255,0.4);font-family:monospace;">Webhook payload · invoice.paid</span>
                    </div>
                    <pre style="margin:0;padding:1.5rem;font-size:0.8rem;line-height:1.7;color:#e6edf3;font-family:'Courier New',monospace;overflow-x:auto;">{
  <span style="color:#79c0ff;">"event"</span>: <span style="color:#a5d6ff;">"invoice.paid"</span>,
  <span style="color:#79c0ff;">"created_at"</span>: <span style="color:#a5d6ff;">"2024-06-15T14:32:00Z"</span>,
  <span style="color:#79c0ff;">"data"</span>: {
    <span style="color:#79c0ff;">"invoice_id"</span>: <span style="color:#a5d6ff;">"inv_A7z3kP"</span>,
    <span style="color:#79c0ff;">"status"</span>: <span style="color:#a5d6ff;">"paid"</span>,
    <span style="color:#79c0ff;">"amount_paid"</span>: <span style="color:#ffa657;">59000</span>,
    <span style="color:#79c0ff;">"payment_method"</span>: <span style="color:#a5d6ff;">"upi"</span>,
    <span style="color:#79c0ff;">"paid_at"</span>: <span style="color:#a5d6ff;">"2024-06-15T14:31:55Z"</span>,
    <span style="color:#79c0ff;">"client"</span>: {
      <span style="color:#79c0ff;">"id"</span>: <span style="color:#a5d6ff;">"clt_9Xk2mR"</span>,
      <span style="color:#79c0ff;">"name"</span>: <span style="color:#a5d6ff;">"Acme Corp"</span>
    }
  }
}</pre>
                </div>

                <!-- SDK chips -->
                <div style="margin-top:1.5rem;">
                    <div style="font-size:0.8rem;font-weight:700;color:var(--text-muted);text-transform:uppercase;letter-spacing:1px;margin-bottom:0.75rem;">Official SDKs</div>
                    <div style="display:flex;flex-wrap:wrap;gap:0.6rem;">
                        <?php foreach(['Node.js','Python','PHP','Java','Ruby','Go'] as $sdk): ?>
                        <span style="background:var(--bg-offwhite);border:1px solid var(--border-color);color:var(--primary-dark);font-size:0.82rem;font-weight:600;padding:0.4rem 0.9rem;border-radius:8px;font-family:monospace;"><?= $sdk ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== GETTING STARTED ========== -->
<section class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>Up and Running in 3 Steps</h2>
            <p>From API key to first invoice — in under 10 minutes.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:2rem;margin-top:3rem;" class="steps-grid">
            <?php
            $steps = [
                ['n'=>'1','icon'=>'M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z',
                 'title'=>'Get Your API Key',
                 'desc' =>'Sign up for a free ZYLO account. Navigate to Settings → API Keys → Generate New Key. Your sandbox key is available immediately — no approval required.'],
                ['n'=>'2','icon'=>'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4',
                 'title'=>'Make Your First Call',
                 'desc' =>'Use the sandbox base URL (sandbox.zylocrm.com) to test without affecting live data. Copy any of our code examples and make your first invoice creation call in minutes.'],
                ['n'=>'3','icon'=>'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
                 'title'=>'Go Production',
                 'desc' =>'Switch to your production API key when ready. Same endpoints, same responses. Set up your webhook endpoint to receive real-time payment notifications.'],
            ];
            foreach($steps as $step): ?>
            <div style="background:white;border:1px solid var(--border-color);border-radius:18px;padding:2rem;position:relative;z-index:1;">
                <div style="width:62px;height:62px;background:var(--primary);color:white;border-radius:50%;display:flex;align-items:center;justify-content:center;margin-bottom:1.25rem;box-shadow:0 0 0 8px rgba(12,79,120,0.1);">
                    <svg width="26" height="26" fill="none" stroke="white" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="<?= $step['icon'] ?>"/></svg>
                </div>
                <div style="font-size:0.72rem;font-weight:700;color:var(--primary);text-transform:uppercase;letter-spacing:1px;margin-bottom:0.5rem;">Step <?= $step['n'] ?></div>
                <h3 style="font-size:1.1rem;color:var(--primary-dark);margin-bottom:0.65rem;"><?= $step['title'] ?></h3>
                <p style="font-size:0.88rem;color:var(--text-muted);line-height:1.65;margin:0;"><?= $step['desc'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ========== PRICING / RATE LIMITS ========== -->
<section>
    <div class="container">
        <div class="section-title">
            <h2>Simple, Transparent API Pricing</h2>
            <p>Start free in the sandbox. Scale to production when you're ready.</p>
        </div>

        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.75rem;margin-top:3rem;max-width:900px;margin-left:auto;margin-right:auto;padding-top:1.5rem;" class="perfect-for-grid">
            <?php
            $plans = [
                [
                    'name'  => 'Sandbox',
                    'price' => 'Free',
                    'sub'   => 'forever',
                    'color' => 'var(--border-color)',
                    'pts'   => ['Full API access','Test environment only','60 requests/minute','Watermarked PDFs','Community support'],
                    'cta'   => 'Get Sandbox Key',
                    'primary' => false,
                ],
                [
                    'name'  => 'Pro',
                    'price' => '₹3,999',
                    'sub'   => 'per month',
                    'color' => 'var(--primary)',
                    'pts'   => ['Full production API','1,000 requests/minute','Unlimited invoices','Real GST + e-Invoice','Webhooks included','Priority support'],
                    'cta'   => 'Start Pro Trial',
                    'primary' => true,
                    'badge' => 'Most Popular',
                ],
                [
                    'name'  => 'Enterprise',
                    'price' => 'Custom',
                    'sub'   => 'contact us',
                    'color' => 'var(--border-color)',
                    'pts'   => ['Custom rate limits','Dedicated API infrastructure','SLA agreement','Bulk invoice processing','Dedicated integration support'],
                    'cta'   => 'Contact Sales',
                    'primary' => false,
                ],
            ];
            foreach($plans as $plan):
                $border = $plan['primary'] ? "border:2px solid var(--primary);box-shadow:var(--shadow-lg);" : "border:1px solid var(--border-color);";
                $mt     = $plan['primary'] ? "" : "margin-top:1rem;";
            ?>
            <div style="background:white;border-radius:18px;<?= $border ?><?= $mt ?>padding:2.25rem;position:relative;overflow:visible;display:flex;flex-direction:column;">
                <?php if(!empty($plan['badge'])): ?>
                <div style="position:absolute;top:0;left:50%;transform:translate(-50%,-50%);background:var(--primary);color:white;font-size:0.7rem;font-weight:700;padding:0.3rem 1rem;border-radius:50px;text-transform:uppercase;letter-spacing:1px;white-space:nowrap;box-shadow:0 4px 12px rgba(12,79,120,0.3);"><?= $plan['badge'] ?></div>
                <?php endif; ?>
                <div style="font-size:0.85rem;font-weight:700;color:var(--primary);text-transform:uppercase;letter-spacing:1px;margin-bottom:0.75rem;"><?= $plan['name'] ?></div>
                <div style="font-size:2.75rem;font-weight:800;color:var(--primary-dark);line-height:1;margin-bottom:0.3rem;"><?= $plan['price'] ?></div>
                <div style="font-size:0.85rem;color:var(--text-muted);margin-bottom:1.75rem;"><?= $plan['sub'] ?></div>
                <ul style="list-style:none;padding:0;margin:0 0 2rem;flex:1;">
                    <?php foreach($plan['pts'] as $pt): ?>
                    <li style="display:flex;align-items:center;gap:0.5rem;font-size:0.88rem;color:var(--text-muted);margin-bottom:0.6rem;">
                        <svg width="14" height="14" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        <?= $pt ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <a href="contact" class="btn <?= $plan['primary']?'btn-primary':'btn-outline' ?>" style="width:100%;text-align:center;"><?= $plan['cta'] ?></a>
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
            <p>Common questions from developers integrating the ZYLO Invoicing API.</p>
        </div>

        <div style="margin-top:2.5rem;" itemscope itemtype="https://schema.org/FAQPage">
            <?php
            $faqs = [
                ['q'=>'What can I build with the ZYLO Invoicing API?',  'a'=>'You can build automated invoicing workflows, integrate billing into your SaaS platform, generate GST-compliant invoices from e-commerce orders, create payment links programmatically, and receive real-time webhook notifications when invoices are viewed, paid, or become overdue.'],
                ['q'=>'Is ZYLO API RESTful? What format does it use?',  'a'=>'Yes. ZYLO API is fully RESTful and uses JSON for both requests and responses. It uses standard HTTP methods (GET, POST, PUT, DELETE) and HTTP status codes. Authentication uses Bearer token via API key in the Authorization header.'],
                ['q'=>'Is there a free sandbox to test the API?',        'a'=>'Yes. ZYLO provides a full sandbox environment at sandbox.zylocrm.com with test API keys. The sandbox mirrors the production API exactly so you can build and test integrations without affecting live data or incurring charges.'],
                ['q'=>'What are the API rate limits?',                    'a'=>'Free/Sandbox: 60 requests/minute. Pro plan: 1,000 requests/minute. Enterprise: custom limits. All limits are per API key. Exceeding the limit returns a 429 Too Many Requests response with a Retry-After header.'],
                ['q'=>'Does the ZYLO API support webhooks?',             'a'=>'Yes. ZYLO sends webhook events for invoice.created, invoice.sent, invoice.viewed, invoice.paid, invoice.overdue, and invoice.cancelled. Configure your webhook endpoint in the ZYLO dashboard. All events are signed with HMAC-SHA256 for security.'],
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
<section style="text-align:center;padding:6rem 0;background:linear-gradient(160deg,#0c1e2e 0%,#073552 100%);position:relative;overflow:hidden;">
    <div style="position:absolute;inset:0;background-image:linear-gradient(rgba(255,255,255,0.02) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,0.02) 1px,transparent 1px);background-size:40px 40px;pointer-events:none;" aria-hidden="true"></div>
    <div class="container" style="max-width:700px;margin:0 auto;position:relative;z-index:1;">
        <h2 style="font-size:2.5rem;color:white;margin-bottom:1.25rem;line-height:1.2;">
            Start Building with the ZYLO Invoicing API Today
        </h2>
        <p style="font-size:1.1rem;color:rgba(255,255,255,0.75);margin-bottom:2.5rem;line-height:1.7;">
            Free sandbox key available instantly. No credit card required. Production-ready in minutes.
        </p>
        <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
            <a href="contact" class="btn" style="padding:1rem 2.25rem;font-size:1.05rem;background:white;color:var(--primary);border-radius:10px;font-weight:700;">
                Get Free API Key
            </a>
            <a href="https://wa.me/917501137266?text=Hi%2C%20I%20want%20to%20know%20more%20about%20ZYLO%20Invoicing%20API"
               target="_blank" rel="noopener noreferrer"
               class="btn" style="padding:1rem 2.25rem;font-size:1.05rem;background:#25d366;color:white;border-radius:10px;font-weight:600;border:none;">
                💬 Talk to an Engineer
            </a>
        </div>
        <p style="color:rgba(255,255,255,0.4);font-size:0.82rem;margin-top:1.5rem;margin-bottom:0;">Free sandbox · RESTful · JSON · Webhooks · SDKs</p>
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
    .steps-grid      { grid-template-columns: 1fr !important; }
    .perfect-for-grid{ grid-template-columns: 1fr !important; }
    .feature-img-right { order: 0 !important; }
}
</style>

<?php include 'includes/footer.php'; ?>

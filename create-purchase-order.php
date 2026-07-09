<?php
$pageTitle = "Free Purchase Order Generator - Create Professional PO Online | ZYLO CRM";
$pageDescription = "Create professional purchase orders online for free with ZYLO. Add supplier details, item lines, taxes, delivery terms, and approval notes. Download as PDF or share instantly.";
$pageKeywords = "free purchase order generator, create purchase order online, po generator india, purchase order format, purchase order template, supplier purchase order software";
$canonicalPath = '/create-purchase-order';

$pageSchema = [
	'@context' => 'https://schema.org',
	'@type'    => 'SoftwareApplication',
	'name'     => 'ZYLO Free Purchase Order Generator',
	'url'      => 'https://zylocrm.com/create-purchase-order',
	'description' => 'Free online purchase order generator for businesses. Create professional supplier POs with itemized lines, taxes, terms, and PDF export in minutes.',
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
		'description'   => 'Free purchase order generator. Pro plan from Rs 3,999/month.',
		'pricingModel'  => 'Freemium'
	],
	'aggregateRating' => [
		'@type'       => 'AggregateRating',
		'ratingValue' => '4.9',
		'reviewCount' => '1483',
		'bestRating'  => '5'
	],
	'featureList' => [
		'Free professional purchase order generation',
		'Supplier details and purchase terms',
		'Itemized line items with quantity and unit price',
		'Tax and discount support',
		'Delivery schedule and shipping terms',
		'PDF export and sharing',
		'Approval workflow on Pro plan',
		'PO to GRN and bill tracking workflow'
	]
];

$faqSchema = [
	'@context'   => 'https://schema.org',
	'@type'      => 'FAQPage',
	'mainEntity' => [
		[
			'@type' => 'Question',
			'name'  => 'How do I create a purchase order online for free?',
			'acceptedAnswer' => [
				'@type' => 'Answer',
				'text'  => 'With ZYLO Purchase Order Generator: 1) Add your business profile, 2) Select supplier details, 3) Add item lines with quantity and rate, 4) Add tax, discount, and delivery terms, 5) Review totals and approvals, 6) Download as PDF or share instantly.'
			]
		],
		[
			'@type' => 'Question',
			'name'  => 'Is ZYLO Purchase Order Generator really free?',
			'acceptedAnswer' => [
				'@type' => 'Answer',
				'text'  => 'Yes. You can create and download purchase orders for free. The Pro plan adds unlimited documents, supplier performance tracking, approval workflow, and integration with inventory and accounting workflows.'
			]
		],
		[
			'@type' => 'Question',
			'name'  => 'What should a professional purchase order include?',
			'acceptedAnswer' => [
				'@type' => 'Answer',
				'text'  => 'A professional purchase order should include PO number, issue date, buyer details, supplier details, itemized lines with quantity and unit price, taxes, delivery date, shipping terms, payment terms, and authorized sign-off. ZYLO includes these fields automatically.'
			]
		],
		[
			'@type' => 'Question',
			'name'  => 'What is the difference between a purchase order and an invoice?',
			'acceptedAnswer' => [
				'@type' => 'Answer',
				'text'  => 'A purchase order is issued by the buyer before purchase as an official request to supply goods or services. An invoice is issued by the seller after supply as a request for payment. In ZYLO you can map PO, delivery challan, and invoice for complete traceability.'
			]
		],
		[
			'@type' => 'Question',
			'name'  => 'Can I track purchase orders after sharing them?',
			'acceptedAnswer' => [
				'@type' => 'Answer',
				'text'  => 'Yes. On ZYLO Pro you can track PO status such as Draft, Sent, Partially Received, Fully Received, and Closed. You can also compare ordered vs received quantity and supplier turnaround times.'
			]
		]
	]
];

include 'includes/header.php';
?>
<script type="application/ld+json"><?php echo json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>

<section class="bg-offwhite" style="padding-top:calc(var(--header-height) + 4.5rem); padding-bottom:5rem; position:relative; overflow:hidden;">
	<div style="position:absolute;top:-15%;right:-8%;width:520px;height:520px;background:radial-gradient(circle,rgba(12,79,120,0.07) 0%,transparent 70%);border-radius:50%;pointer-events:none;" aria-hidden="true"></div>

	<div class="container">
		<div style="display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:center;" class="intro-grid">
			<div>
				<div style="display:inline-flex;align-items:center;gap:0.5rem;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.8rem;font-weight:700;padding:0.38rem 1rem;border-radius:50px;margin-bottom:1.5rem;text-transform:uppercase;letter-spacing:1px;border:1px solid rgba(12,79,120,0.18);">
					<svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
					Free Tool · Professional Purchase Orders
				</div>

				<h1 style="font-size:3.1rem;color:var(--primary-dark);line-height:1.12;margin-bottom:1.4rem;">
					Free Purchase Order Generator for Fast, Error-Free Procurement
				</h1>
				<p style="font-size:1.15rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.9rem;">
					Create clean, professional purchase orders with supplier details, item lines, taxes, delivery terms, and approvals. Download PDF instantly and keep your buying process organized from request to receipt.
				</p>

				<div style="display:flex;flex-wrap:wrap;gap:0.55rem;margin-bottom:2rem;">
					<?php foreach(['Free to Use','Supplier PO Format','Tax-Ready','PDF Download','Share Instantly','Approval Trail'] as $p): ?>
					<span style="background:white;border:1px solid var(--border-color);color:var(--text-main);font-size:0.82rem;font-weight:600;padding:0.35rem 0.9rem;border-radius:50px;box-shadow:var(--shadow-sm);">&#10003; &nbsp;<?= $p ?></span>
					<?php endforeach; ?>
				</div>

				<div style="display:flex;gap:1rem;flex-wrap:wrap;">
					<a href="contact" class="btn btn-primary" style="padding:0.9rem 2rem;font-size:1rem;">Create Purchase Order Free</a>
					<a href="inventory-software" class="btn btn-outline" style="padding:0.9rem 2rem;font-size:1rem;">Explore Procurement Workflow</a>
				</div>
				<p style="margin-top:1.5rem;font-size:0.85rem;color:var(--text-muted);margin-bottom:0;">
					Rated 4.9/5 by operations teams, traders, and growing businesses
				</p>
			</div>

			<div style="position:relative;">
				<img src="assets/store/section-1.jpg"
					 alt="Purchase order generator dashboard with supplier details item lines taxes and approvals"
					 width="580" height="400"
					 style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;"
					 fetchpriority="high">

				<div style="position:absolute;top:-1rem;left:-1.25rem;background:white;border-radius:14px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.7rem;">
					<span style="width:36px;height:36px;background:#dcfce7;border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
						<svg width="17" height="17" fill="none" stroke="#16a34a" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
					</span>
					<div>
						<div style="font-size:0.75rem;color:var(--text-muted);">PO generated</div>
						<div style="font-size:0.88rem;font-weight:700;color:#16a34a;">PO-2026-074 in under 1 min</div>
					</div>
				</div>

				<div style="position:absolute;bottom:-1.25rem;right:-1rem;background:white;border-radius:14px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);display:flex;align-items:center;gap:0.7rem;">
					<span style="width:36px;height:36px;background:rgba(12,79,120,0.08);border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
						<svg width="17" height="17" fill="none" stroke="var(--primary)" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
					</span>
					<div>
						<div style="font-size:0.75rem;color:var(--text-muted);">Procurement status</div>
						<div style="font-size:0.88rem;font-weight:700;color:var(--text-main);">Sent to supplier and approved</div>
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
				['val'=>'< 60s',  'label'=>'Average PO Creation Time'],
				['val'=>'Free',   'label'=>'Start Creating Instantly'],
				['val'=>'1,483+', 'label'=>'Operations Teams Reviewed'],
				['val'=>'10,000+','label'=>'Businesses on ZYLO'],
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
			<h2>How to Create a Purchase Order in 4 Simple Steps</h2>
			<p>Standardized purchasing helps you reduce errors, improve supplier communication, and control cost leakage.</p>
		</div>

		<div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1.5rem;margin-top:3rem;position:relative;" class="steps-grid">
			<div style="position:absolute;top:36px;left:calc(12.5% + 1rem);right:calc(12.5% + 1rem);height:2px;background:linear-gradient(90deg,var(--primary) 0%,var(--primary-light) 100%);z-index:0;" class="steps-connector" aria-hidden="true"></div>
			<?php
			$steps = [
				['n'=>'1','icon'=>'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5',
				 'title'=>'Business and Supplier',
				 'desc' =>'Add buyer details and select supplier name, address, and contact person.'],
				['n'=>'2','icon'=>'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2',
				 'title'=>'Itemized Line Items',
				 'desc' =>'Add item code, description, quantity, unit price, and discount for each purchase line.'],
				['n'=>'3','icon'=>'M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2z',
				 'title'=>'Terms and Delivery',
				 'desc' =>'Set tax, shipping terms, delivery date, payment terms, and special instructions.'],
				['n'=>'4','icon'=>'M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4',
				 'title'=>'Review and Share',
				 'desc' =>'Generate the final purchase order PDF and share with your supplier instantly.'],
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

<section class="bg-offwhite">
	<div class="container">
		<div style="display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:center;" class="intro-grid">
			<div>
				<div style="display:inline-block;background:rgba(12,79,120,0.08);color:var(--primary);font-size:0.78rem;font-weight:700;padding:0.3rem 0.85rem;border-radius:50px;margin-bottom:1.25rem;text-transform:uppercase;letter-spacing:1px;">PO vs Invoice</div>
				<h2 style="font-size:2.2rem;color:var(--primary-dark);line-height:1.25;margin-bottom:1.25rem;">
					Purchase Order vs Invoice: Why Both Matter
				</h2>
				<p style="font-size:1.05rem;line-height:1.8;color:var(--text-muted);margin-bottom:1.75rem;">
					A purchase order helps buyers formally request goods and lock pricing, quantity, and delivery terms before supply. An invoice is issued after supply and asks for payment. Maintaining both documents keeps procurement and accounting aligned.
				</p>

				<div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;margin-bottom:1.75rem;">
					<div style="background:white;border:1px solid var(--border-color);border-radius:14px;padding:1.25rem;">
						<div style="font-size:0.8rem;font-weight:700;color:var(--primary);text-transform:uppercase;letter-spacing:1px;margin-bottom:0.75rem;">Purchase Order</div>
						<?php foreach(['Issued by buyer','Before delivery','Defines requested quantity','Contains procurement terms','Controls purchase approval'] as $p): ?>
						<div style="display:flex;align-items:center;gap:0.5rem;font-size:0.82rem;color:var(--text-muted);margin-bottom:0.35rem;">
							<svg width="12" height="12" fill="none" stroke="var(--primary)" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
							<?= $p ?>
						</div>
						<?php endforeach; ?>
					</div>

					<div style="background:white;border:1px solid var(--border-color);border-radius:14px;padding:1.25rem;">
						<div style="font-size:0.8rem;font-weight:700;color:#16a34a;text-transform:uppercase;letter-spacing:1px;margin-bottom:0.75rem;">Invoice</div>
						<?php foreach(['Issued by supplier','After delivery','Requests payment','Contains billed value','Used for accounts payable'] as $p): ?>
						<div style="display:flex;align-items:center;gap:0.5rem;font-size:0.82rem;color:var(--text-muted);margin-bottom:0.35rem;">
							<svg width="12" height="12" fill="none" stroke="#16a34a" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
							<?= $p ?>
						</div>
						<?php endforeach; ?>
					</div>
				</div>

				<a href="invoice-generator" class="btn btn-primary" style="padding:0.75rem 1.75rem;">Create Matching Invoice</a>
			</div>

			<div style="position:relative;">
				<img src="assets/store/section-2.jpg"
					 alt="Purchase order and invoice workflow comparison for procurement control"
					 width="560" height="380"
					 style="width:100%;border-radius:20px;box-shadow:var(--shadow-xl);display:block;" loading="lazy">
				<div style="position:absolute;bottom:-1rem;right:-1rem;background:white;border-radius:12px;padding:0.85rem 1.1rem;box-shadow:var(--shadow-lg);border:1px solid var(--border-color);">
					<div style="font-size:0.75rem;color:var(--text-muted);margin-bottom:0.2rem;">Document control</div>
					<div style="font-size:0.9rem;font-weight:700;color:var(--text-main);">PO to invoice traceability</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="section-title">
			<h2>What Should a Professional Purchase Order Include?</h2>
			<p>Include all procurement-critical fields so suppliers can execute correctly the first time.</p>
		</div>

		<div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1.25rem;margin-top:3rem;" class="who-grid">
			<?php
			$fields = [
				['icon'=>'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z','label'=>'PO Number and Date',     'desc'=>'Unique reference for supplier and internal tracking'],
				['icon'=>'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z',                 'label'=>'Buyer and Supplier',     'desc'=>'Complete legal names, addresses, and contact details'],
				['icon'=>'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2','label'=>'Itemized Lines',        'desc'=>'SKU, description, quantity, unit, and negotiated rate'],
				['icon'=>'M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2z','label'=>'Tax and Discounts',      'desc'=>'GST and line-level or overall discounts where required'],
				['icon'=>'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z',        'label'=>'Delivery Schedule',      'desc'=>'Requested delivery date, location, and split shipments'],
				['icon'=>'M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z','label'=>'Payment Terms','desc'=>'Credit terms, due period, and payment instructions'],
				['icon'=>'M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586','label'=>'Special Instructions','desc'=>'Packing notes, compliance requirements, and clauses'],
				['icon'=>'M5 13l4 4L19 7',                                                                                'label'=>'Approval Signature',     'desc'=>'Authorized approver name, title, and sign-off date'],
			];
			foreach($fields as $f): ?>
			<div style="background:var(--bg-offwhite);border:1px solid var(--border-color);border-radius:14px;padding:1.25rem;display:flex;flex-direction:column;gap:0.6rem;">
				<span style="width:38px;height:38px;background:white;border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;box-shadow:var(--shadow-sm);">
					<svg width="18" height="18" fill="none" stroke="var(--primary)" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="<?= $f['icon'] ?>"/></svg>
				</span>
				<div style="font-size:0.9rem;font-weight:700;color:var(--primary-dark);"><?= $f['label'] ?></div>
				<div style="font-size:0.8rem;color:var(--text-muted);"><?= $f['desc'] ?></div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section id="features" class="bg-offwhite">
	<div class="container">
		<div class="section-title">
			<h2>Everything You Need in a Purchase Order Workflow</h2>
			<p>From first draft to supplier delivery, ZYLO keeps procurement documents complete and auditable.</p>
		</div>

		<div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.75rem;margin-top:3rem;" class="features-grid">
			<?php
			$features = [
				[
					'icon'  => 'M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z',
					'title' => 'Professional PO Templates',
					'desc'  => 'Use clean purchase order formats with your logo, company details, and standardized document layout for suppliers.',
					'pts'   => ['Consistent format across teams','Branding and legal footer','Print-ready PDF output']
				],
				[
					'icon'  => 'M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2z',
					'title' => 'Tax and Cost Accuracy',
					'desc'  => 'Apply taxes, freight, and discounts correctly on every order so supplier billing and internal accounts stay aligned.',
					'pts'   => ['Line-level and total-level controls','Avoid manual calculation mistakes','Cleaner invoice reconciliation']
				],
				[
					'icon'  => 'M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4',
					'title' => 'Fast Sharing and Approval',
					'desc'  => 'Export and share purchase orders instantly. On Pro, route approvals before release to suppliers.',
					'pts'   => ['Instant PDF generation','Email and WhatsApp sharing','Optional approval checkpoints']
				],
				[
					'icon'  => 'M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4',
					'title' => 'PO Status Tracking',
					'desc'  => 'Track purchase order lifecycle from draft to received so operations teams can follow up on delays quickly.',
					'pts'   => ['Draft, sent, received states','Ordered vs received visibility','Fewer missed deliveries']
				],
				[
					'icon'  => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z',
					'title' => 'Supplier Performance Insights',
					'desc'  => 'Measure supplier response and delivery performance to improve future purchasing decisions.',
					'pts'   => ['On-time delivery insights','Purchase history per supplier','Smarter sourcing decisions']
				],
				[
					'icon'  => 'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15',
					'title' => 'Connected Procurement Stack',
					'desc'  => 'Link purchase orders with delivery challan, inventory updates, and accounting records for complete documentation flow.',
					'pts'   => ['PO to GRN linkage','Inventory sync ready','Accounting-friendly records']
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

<section>
	<div class="container">
		<div class="section-title">
			<h2>Built for Teams That Need Procurement Discipline</h2>
			<p>ZYLO helps organizations of different sizes run a reliable purchase cycle without chaos.</p>
		</div>

		<div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.75rem;margin-top:3rem;" class="perfect-for-grid">
			<?php
			$personas = [
				[
					'icon'  => 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z',
					'title' => 'Small Businesses',
					'desc'  => 'Stop issuing purchase requests over calls and chats. Standardize buying with approved purchase orders and proper records.',
					'link'  => 'smbs',
					'pts'   => ['Formal supplier communication','Approval-ready documentation','Clear cost accountability']
				],
				[
					'icon'  => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
					'title' => 'Trading and Inventory Teams',
					'desc'  => 'Create repeatable PO workflows with supplier-wise history and item-level controls to avoid stock and pricing mismatches.',
					'link'  => 'inventory-software',
					'pts'   => ['Item-level procurement control','Supplier history and rates','Better stock planning']
				],
				[
					'icon'  => 'M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
					'title' => 'Operations and Finance Teams',
					'desc'  => 'Align procurement, stores, and accounting with a single PO reference across delivery and payment stages.',
					'link'  => 'accounting-software',
					'pts'   => ['PO to bill matching','Fewer audit exceptions','Faster vendor reconciliation']
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

<section class="bg-offwhite">
	<div class="container">
		<div class="section-title">
			<h2>Free Purchase Order Generator vs Full Procurement Suite</h2>
			<p>Start with free PO creation. Upgrade when your team needs deeper control and visibility.</p>
		</div>

		<div style="display:grid;grid-template-columns:1fr 1fr;gap:1.75rem;margin-top:3rem;max-width:800px;margin-left:auto;margin-right:auto;padding-top:1.5rem;" class="perfect-for-grid">
			<div style="background:white;border:1px solid var(--border-color);border-radius:18px;padding:2.25rem;display:flex;flex-direction:column;">
				<div style="font-size:0.85rem;font-weight:700;color:var(--text-muted);text-transform:uppercase;letter-spacing:1px;margin-bottom:0.75rem;">Free Plan</div>
				<div style="font-size:2.5rem;font-weight:800;color:var(--primary-dark);line-height:1;margin-bottom:0.3rem;">Rs 0</div>
				<div style="font-size:0.85rem;color:var(--text-muted);margin-bottom:1.75rem;">forever free</div>
				<ul style="list-style:none;padding:0;margin:0 0 2rem;flex:1;">
					<?php foreach(['Create professional purchase orders','Supplier and item details','Tax and total calculation','PDF download and sharing','Standard PO format','Basic document history'] as $pt): ?>
					<li style="display:flex;align-items:center;gap:0.5rem;font-size:0.88rem;color:var(--text-muted);margin-bottom:0.6rem;">
						<svg width="14" height="14" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
						<?= $pt ?>
					</li>
					<?php endforeach; ?>
				</ul>
				<a href="contact" class="btn btn-outline" style="width:100%;text-align:center;">Start Free</a>
			</div>

			<div style="background:white;border:2px solid var(--primary);border-radius:18px;padding:2.25rem;display:flex;flex-direction:column;box-shadow:var(--shadow-lg);position:relative;overflow:visible;">
				<div style="position:absolute;top:0;left:50%;transform:translate(-50%,-50%);background:var(--primary);color:white;font-size:0.7rem;font-weight:700;padding:0.3rem 1rem;border-radius:50px;text-transform:uppercase;letter-spacing:1px;white-space:nowrap;box-shadow:0 4px 12px rgba(12,79,120,0.3);">Recommended for Teams</div>
				<div style="font-size:0.85rem;font-weight:700;color:var(--primary);text-transform:uppercase;letter-spacing:1px;margin-bottom:0.75rem;">Pro Plan</div>
				<div style="font-size:2.5rem;font-weight:800;color:var(--primary-dark);line-height:1;margin-bottom:0.3rem;">Rs 3,999</div>
				<div style="font-size:0.85rem;color:var(--text-muted);margin-bottom:1.75rem;">per month</div>
				<ul style="list-style:none;padding:0;margin:0 0 2rem;flex:1;">
					<?php foreach(['Everything in Free','Unlimited purchase orders','Multi-step approval workflow','Supplier lead-time tracking','PO to delivery challan linkage','PO to invoice reconciliation','Inventory and accounts integration','Role-based access and audit trail'] as $pt): ?>
					<li style="display:flex;align-items:center;gap:0.5rem;font-size:0.88rem;color:var(--text-muted);margin-bottom:0.6rem;">
						<svg width="14" height="14" fill="none" stroke="#22c55e" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
						<?= $pt ?>
					</li>
					<?php endforeach; ?>
				</ul>
				<a href="contact" class="btn btn-primary" style="width:100%;text-align:center;">Start Pro Trial</a>
			</div>
		</div>
	</div>
</section>

<section class="bg-offwhite">
	<div class="container" style="max-width:820px;">
		<div class="section-title">
			<h2>Frequently Asked Questions</h2>
			<p>Common questions about creating and managing purchase orders with ZYLO.</p>
		</div>

		<div style="margin-top:2.5rem;" itemscope itemtype="https://schema.org/FAQPage">
			<?php
			$faqs = [
				['q'=>'How do I create a purchase order online for free?', 'a'=>'Use ZYLO Purchase Order Generator to add buyer and supplier details, item lines, taxes, delivery terms, and approval notes. Then download a professional PDF or share it instantly.'],
				['q'=>'Is ZYLO Purchase Order Generator really free?', 'a'=>'Yes. You can generate professional purchase orders free of cost. Pro features include workflow automation, role-based approvals, and advanced tracking.'],
				['q'=>'What should a purchase order include?', 'a'=>'A complete purchase order should include PO number, date, supplier details, itemized products/services, quantity, rate, taxes, delivery schedule, payment terms, and authorized sign-off.'],
				['q'=>'What is the difference between purchase order and invoice?', 'a'=>'A purchase order is created by the buyer before procurement to request goods/services. An invoice is created by the seller after supply to request payment. Both are needed for clean procurement and accounting control.'],
				['q'=>'Can I track ordered vs received quantity?', 'a'=>'Yes. With ZYLO Pro you can track full or partial receipts against purchase orders and close documents when all lines are fulfilled.'],
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

<section>
	<div class="container">
		<div class="section-title">
			<h2>More Free Business Tools from ZYLO</h2>
			<p>Use connected templates and tools to complete the full buy-to-bill cycle.</p>
		</div>
		<div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1.25rem;margin-top:3rem;" class="who-grid">
			<?php
			$tools = [
				['icon'=>'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z','label'=>'Invoice Generator',   'href'=>'invoice-generator',         'desc'=>'Create supplier payment invoices'],
				['icon'=>'M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z','label'=>'Quotation Generator',  'href'=>'quotation-generator',       'desc'=>'Generate sales quotations'],
				['icon'=>'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4','label'=>'Delivery Challan',     'href'=>'create-delivery-challan',   'desc'=>'Track dispatch and receipts'],
				['icon'=>'M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2z','label'=>'GST Invoice Maker',    'href'=>'gst-invoice-maker',         'desc'=>'GST-compliant tax invoices'],
				['icon'=>'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064','label'=>'Commercial Invoice',  'href'=>'commercial-invoice',        'desc'=>'For international trade'],
				['icon'=>'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2','label'=>'Proforma Invoice',    'href'=>'creator-proforma-invoice',  'desc'=>'Pre-sale document format'],
				['icon'=>'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z','label'=>'Invoice Formats',      'href'=>'invoice-formats',           'desc'=>'Download ready layouts'],
				['icon'=>'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15','label'=>'Consulting Invoice',   'href'=>'consulting-invoice',        'desc'=>'For service businesses'],
			];
			foreach($tools as $t): ?>
			<a href="<?= $t['href'] ?>" style="background:var(--bg-offwhite);border:1px solid var(--border-color);border-radius:14px;padding:1.25rem;display:flex;flex-direction:column;gap:0.6rem;text-decoration:none;transition:all 0.2s;" onmouseover="this.style.borderColor='var(--primary)';this.style.transform='translateY(-3px)';this.style.boxShadow='var(--shadow-md)';" onmouseout="this.style.borderColor='var(--border-color)';this.style.transform='';this.style.boxShadow='';">
				<span style="width:38px;height:38px;background:white;border-radius:9px;display:flex;align-items:center;justify-content:center;flex-shrink:0;box-shadow:var(--shadow-sm);">
					<svg width="18" height="18" fill="none" stroke="var(--primary)" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="<?= $t['icon'] ?>"/></svg>
				</span>
				<div style="font-size:0.9rem;font-weight:700;color:var(--primary-dark);"><?= $t['label'] ?></div>
				<div style="font-size:0.8rem;color:var(--text-muted);"><?= $t['desc'] ?></div>
			</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section style="text-align:center;padding:6rem 0;background:linear-gradient(135deg,var(--primary) 0%,var(--primary-dark) 100%);">
	<div class="container" style="max-width:700px;margin:0 auto;">
		<h2 style="font-size:2.5rem;color:white;margin-bottom:1.25rem;line-height:1.2;">
			Create Professional Purchase Orders in Minutes
		</h2>
		<p style="font-size:1.1rem;color:rgba(255,255,255,0.85);margin-bottom:2.5rem;line-height:1.7;">
			Standardize procurement, reduce miscommunication, and speed up supplier processing with structured purchase orders from ZYLO.
		</p>
		<div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
			<a href="contact" class="btn" style="padding:1rem 2.25rem;font-size:1.05rem;background:white;color:var(--primary);border-radius:10px;font-weight:700;">
				Create Purchase Order
			</a>
			<a href="https://wa.me/917501137266?text=Hi%2C%20I%20want%20to%20create%20a%20purchase%20order%20using%20ZYLO"
			   target="_blank" rel="noopener noreferrer"
			   class="btn" style="padding:1rem 2.25rem;font-size:1.05rem;background:#25d366;color:white;border-radius:10px;font-weight:600;border:none;">
				Chat on WhatsApp
			</a>
		</div>
		<p style="color:rgba(255,255,255,0.5);font-size:0.82rem;margin-top:1.5rem;margin-bottom:0;">Free start · Professional format · Ready for teams</p>
	</div>
</section>

<style>
@media (max-width: 768px) {
	.stats-bar-grid   { grid-template-columns: 1fr 1fr !important; }
	.features-grid    { grid-template-columns: 1fr !important; }
	.steps-grid       { grid-template-columns: 1fr 1fr !important; }
	.steps-connector  { display: none !important; }
	.who-grid         { grid-template-columns: 1fr 1fr !important; }
	.perfect-for-grid { grid-template-columns: 1fr !important; }
}
@media (max-width: 480px) {
	.steps-grid { grid-template-columns: 1fr !important; }
	.who-grid   { grid-template-columns: 1fr 1fr !important; }
}
</style>

<?php include 'includes/footer.php'; ?>

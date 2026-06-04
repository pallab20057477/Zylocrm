<?php
$pageTitle = "Services";
$pageDescription = "Discover ZYLO CRM services for accounts management, inventory control, and client management with transparent pricing and scalable features.";
$pageKeywords = "ZYLO services, CRM services, accounts management, inventory control, client management";
$pageSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'ZYLO CRM Services',
    'provider' => [
        '@type' => 'Organization',
        'name' => 'ZYLO CRM',
        'url' => 'https://zylocrm.com'
    ],
    'areaServed' => 'Worldwide'
];
include 'includes/header.php';
?>

<!-- Page Header -->
<section class="bg-offwhite" style="padding-top: calc(var(--header-height) + 4rem); padding-bottom: 4rem;">
    <div class="container" style="text-align: center;">
        <h1>Our Services</h1>
        <p style="font-size: 1.25rem; max-width: 700px; margin: 0 auto;">Everything you need to run your business smoothly.</p>
    </div>
</section>

<!-- Services Details (Expanded) -->
<section>
    <div class="container">
        <!-- Service 1 -->
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center; margin-bottom: 6rem;">
            <div>
                <div style="display: inline-flex; padding: 0.5rem 1rem; background: rgba(12, 79, 120, 0.1); color: var(--primary); border-radius: 50px; font-weight: 600; margin-bottom: 1rem;">01. Accounts Management</div>
                <h2 style="color: var(--primary-dark);">Master Your Finances</h2>
                <p>Gain complete control over your business finances with our robust accounts management module. ZYLO makes it easy to track every penny coming in and going out.</p>
                <p>Designed for both small business owners and professional accountants, our system automates ledger entries, reconciles bank statements securely via API, and prepares your data for tax season instantly.</p>
                <h4 style="margin-top: 1.5rem; margin-bottom: 0.5rem;">Key Benefits:</h4>
                <ul style="color: var(--text-muted);">
                    <li style="margin-bottom: 0.5rem;">✓ Automated invoicing and recurring billing</li>
                    <li style="margin-bottom: 0.5rem;">✓ AI-powered receipt scanning and expense tracking</li>
                    <li style="margin-bottom: 0.5rem;">✓ Comprehensive, customizable financial reporting</li>
                    <li style="margin-bottom: 0.5rem;">✓ Seamless multi-currency and multi-tax support</li>
                </ul>
                <a href="accounting-software" class="btn btn-outline" style="margin-top: 1.5rem;">Explore Accounts</a>
            </div>
            <div>
                <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Accounts Management" style="border-radius: 16px; box-shadow: var(--shadow-md);">
            </div>
        </div>

        <!-- Service 2 -->
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center; margin-bottom: 6rem;">
            <div style="order: 2;">
                <div style="display: inline-flex; padding: 0.5rem 1rem; background: rgba(12, 79, 120, 0.1); color: var(--primary); border-radius: 50px; font-weight: 600; margin-bottom: 1rem;">02. Inventory Control</div>
                <h2 style="color: var(--primary-dark);">Never Run Out of Stock</h2>
                <p>Efficiently manage your stock levels, automate purchasing, and track product movements across multiple locations with unparalleled accuracy.</p>
                <p>Our inventory module uses predictive analytics to forecast demand, helping you avoid overstocking while ensuring you never miss a sale due to stockouts. Connect directly with your suppliers for automated purchase order generation.</p>
                <h4 style="margin-top: 1.5rem; margin-bottom: 0.5rem;">Key Benefits:</h4>
                <ul style="color: var(--text-muted);">
                    <li style="margin-bottom: 0.5rem;">✓ Real-time multi-warehouse stock level monitoring</li>
                    <li style="margin-bottom: 0.5rem;">✓ Automated low-stock alerts and PO generation</li>
                    <li style="margin-bottom: 0.5rem;">✓ Batch, expiry date, and serial number tracking</li>
                    <li style="margin-bottom: 0.5rem;">✓ Mobile barcode scanning integration</li>
                </ul>
                <a href="inventory-software" class="btn btn-outline" style="margin-top: 1.5rem;">Explore Inventory</a>
            </div>
            <div style="order: 1;">
                <img src="https://images.unsplash.com/photo-1586528116311-ad8ed7c82113?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Inventory Control" style="border-radius: 16px; box-shadow: var(--shadow-md);">
            </div>
        </div>

        <!-- Service 3 -->
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
            <div>
                <div style="display: inline-flex; padding: 0.5rem 1rem; background: rgba(12, 79, 120, 0.1); color: var(--primary); border-radius: 50px; font-weight: 600; margin-bottom: 1rem;">03. Client Management</div>
                <h2 style="color: var(--primary-dark);">Build Lasting Relationships</h2>
                <p>Your clients are your most valuable asset. Manage leads, track communication history, and deliver exceptional service with our centralized CRM database.</p>
                <p>Empower your sales and support teams with a 360-degree view of every customer. From initial contact to post-sale support, ZYLO ensures no client falls through the cracks.</p>
                <h4 style="margin-top: 1.5rem; margin-bottom: 0.5rem;">Key Benefits:</h4>
                <ul style="color: var(--text-muted);">
                    <li style="margin-bottom: 0.5rem;">✓ Centralized client database with custom fields</li>
                    <li style="margin-bottom: 0.5rem;">✓ Omnichannel communication history</li>
                    <li style="margin-bottom: 0.5rem;">✓ Visual lead scoring and drag-and-drop pipeline</li>
                    <li style="margin-bottom: 0.5rem;">✓ Automated follow-up reminders and email sequencing</li>
                </ul>
                <a href="sales-crm" class="btn btn-outline" style="margin-top: 1.5rem;">Explore CRM</a>
            </div>
            <div>
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Client Management" style="border-radius: 16px; box-shadow: var(--shadow-md);">
            </div>
        </div>
    </div>
</section>

<!-- Pricing Teaser (New Content) -->
<section class="bg-offwhite" style="text-align: center;">
    <div class="container">
        <h2 style="margin-bottom: 1rem;">Simple, Transparent Pricing</h2>
        <p style="margin-bottom: 3rem;">Start for free, upgrade when you need to.</p>
        <div style="display: inline-flex; background: white; padding: 2rem; border-radius: 16px; box-shadow: var(--shadow-md); border: 1px solid var(--border-color); text-align: left; gap: 4rem; align-items: center;">
            <div>
                <h3 style="font-size: 2rem; color: var(--primary);">$0<span style="font-size: 1rem; color: var(--text-muted);">/mo</span></h3>
                <p style="font-weight: bold;">Starter Plan</p>
                <ul style="color: var(--text-muted); font-size: 0.9rem;">
                    <li>✓ Basic Invoicing</li>
                    <li>✓ Up to 50 Clients</li>
                    <li>✓ Email Support</li>
                </ul>
            </div>
            <div style="width: 1px; height: 100px; background: var(--border-color);"></div>
            <div>
                <h3 style="font-size: 2rem; color: var(--primary);">$49<span style="font-size: 1rem; color: var(--text-muted);">/mo</span></h3>
                <p style="font-weight: bold;">Pro Plan</p>
                <ul style="color: var(--text-muted); font-size: 0.9rem;">
                    <li>✓ Full CRM & Inventory</li>
                    <li>✓ Unlimited Clients</li>
                    <li>✓ 24/7 Priority Support</li>
                </ul>
            </div>
        </div>
        <div style="margin-top: 3rem;">
            <a href="contact" class="btn btn-primary">Contact Sales for Enterprise</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

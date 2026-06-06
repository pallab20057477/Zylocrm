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

<!-- Hero Section -->
<section class="bg-offwhite services-hero" style="padding-top: calc(var(--header-height) + 4rem); padding-bottom: 5rem;">
    <div class="container">
        <div style="text-align: center; max-width: 800px; margin: 0 auto;">
            <h1 style="font-size: 3.5rem; color: var(--primary-dark); margin-bottom: 1.5rem; line-height: 1.2;">Comprehensive Business Solutions</h1>
            <p style="font-size: 1.35rem; line-height: 1.7; color: var(--text-muted);">Everything you need to run your business smoothly—from accounts to inventory to client relationships.</p>
        </div>
    </div>
</section>

<!-- Services Grid -->
<section>
    <div class="container">
        <div class="section-title">
            <h2>Our Core Services</h2>
            <p>Three powerful modules that work seamlessly together.</p>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem; margin-top: 3rem;" class="services-grid">
            <div class="card" style="text-align: center; padding: 2.5rem; position: relative; overflow: hidden;">
                <div style="width: 70px; height: 70px; background: rgba(12, 79, 120, 0.1); border-radius: 14px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; color: var(--primary);">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 style="color: var(--primary-dark); font-size: 1.5rem; margin-bottom: 1rem;">Accounts Management</h3>
                <p style="color: var(--text-muted); line-height: 1.6; margin-bottom: 1.5rem;">Master your finances with robust accounting tools. Automate invoicing, track expenses, and generate comprehensive financial reports.</p>
                <a href="accounting-software" class="btn btn-outline" style="margin-top: auto;">Explore Accounts →</a>
                <div style="position: absolute; top: 0; right: 0; width: 100px; height: 100px; background: var(--primary); border-radius: 50%; transform: translate(50px, -50px); opacity: 0.05;"></div>
            </div>
            
            <div class="card" style="text-align: center; padding: 2.5rem; position: relative; overflow: hidden;">
                <div style="width: 70px; height: 70px; background: rgba(12, 79, 120, 0.1); border-radius: 14px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; color: var(--primary);">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                </div>
                <h3 style="color: var(--primary-dark); font-size: 1.5rem; margin-bottom: 1rem;">Inventory Control</h3>
                <p style="color: var(--text-muted); line-height: 1.6; margin-bottom: 1.5rem;">Never run out of stock. Manage product variants, automate purchase orders, and track stock levels across locations.</p>
                <a href="inventory-software" class="btn btn-outline" style="margin-top: auto;">Explore Inventory →</a>
                <div style="position: absolute; top: 0; right: 0; width: 100px; height: 100px; background: var(--primary); border-radius: 50%; transform: translate(50px, -50px); opacity: 0.05;"></div>
            </div>
            
            <div class="card" style="text-align: center; padding: 2.5rem; position: relative; overflow: hidden;">
                <div style="width: 70px; height: 70px; background: rgba(12, 79, 120, 0.1); border-radius: 14px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; color: var(--primary);">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
                <h3 style="color: var(--primary-dark); font-size: 1.5rem; margin-bottom: 1rem;">Client Management</h3>
                <p style="color: var(--text-muted); line-height: 1.6; margin-bottom: 1.5rem;">Build stronger relationships. Maintain a central database of your clients, track interactions, and improve satisfaction.</p>
                <a href="sales-crm" class="btn btn-outline" style="margin-top: auto;">Explore CRM →</a>
                <div style="position: absolute; top: 0; right: 0; width: 100px; height: 100px; background: var(--primary); border-radius: 50%; transform: translate(50px, -50px); opacity: 0.05;"></div>
            </div>
        </div>
    </div>
</section>

<!-- Feature Highlights -->
<section class="bg-offwhite" style="padding: 5rem 0;">
    <div class="container">
        <div class="section-title">
            <h2>Integrated Ecosystem</h2>
            <p>Our modules work together to give you a complete business management solution.</p>
        </div>
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center; margin-top: 3rem;" class="feature-highlights">
            <div>
                <div style="display: flex; gap: 1rem; margin-bottom: 2rem;">
                    <div style="flex-shrink: 0;">
                        <div style="width: 50px; height: 50px; background: var(--primary); color: white; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-weight: 700;">1</div>
                    </div>
                    <div>
                        <h4 style="color: var(--primary-dark); margin-bottom: 0.5rem; font-size: 1.2rem;">Data Flow</h4>
                        <p style="color: var(--text-muted); line-height: 1.6; margin-bottom: 0;">Client orders flow automatically to inventory, generating invoices that update financial reports in real-time.</p>
                    </div>
                </div>
                
                <div style="display: flex; gap: 1rem; margin-bottom: 2rem;">
                    <div style="flex-shrink: 0;">
                        <div style="width: 50px; height: 50px; background: var(--primary); color: white; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-weight: 700;">2</div>
                    </div>
                    <div>
                        <h4 style="color: var(--primary-dark); margin-bottom: 0.5rem; font-size: 1.2rem;">Real-time Insights</h4>
                        <p style="color: var(--text-muted); line-height: 1.6; margin-bottom: 0;">See how sales affect inventory levels and cash flow simultaneously across all modules.</p>
                    </div>
                </div>
                
                <div style="display: flex; gap: 1rem;">
                    <div style="flex-shrink: 0;">
                        <div style="width: 50px; height: 50px; background: var(--primary); color: white; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-weight: 700;">3</div>
                    </div>
                    <div>
                        <h4 style="color: var(--primary-dark); margin-bottom: 0.5rem; font-size: 1.2rem;">Unified Reporting</h4>
                        <p style="color: var(--text-muted); line-height: 1.6; margin-bottom: 0;">Generate comprehensive reports combining financial, inventory, and customer data in one view.</p>
                    </div>
                </div>
            </div>
            
            <div>
                <div style="position: relative; border-radius: 20px; overflow: hidden; box-shadow: var(--shadow-xl);">
                    <img src="assets/store/section-2.jpg" alt="Integrated Dashboard" style="width: 100%; height: auto; display: block;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Detailed Services -->
<section>
    <div class="container">
        <!-- Service 1: Accounts Management -->
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center; margin-bottom: 6rem;" class="service-detail">
            <div>
                <div style="display: inline-flex; padding: 0.5rem 1.5rem; background: rgba(12, 79, 120, 0.1); color: var(--primary); border-radius: 50px; font-weight: 600; margin-bottom: 1rem;">01. Accounts Management</div>
                <h2 style="color: var(--primary-dark); font-size: 2.5rem; margin-bottom: 1rem;">Complete Financial Control</h2>
                <p style="font-size: 1.1rem; line-height: 1.7; margin-bottom: 1.5rem;">Gain complete control over your business finances with our robust accounts management module. ZYLO makes it easy to track every penny coming in and going out.</p>
                <p style="font-size: 1.1rem; line-height: 1.7; margin-bottom: 1.5rem;">Designed for both small business owners and professional accountants, our system automates ledger entries, reconciles bank statements securely via API, and prepares your data for tax season instantly.</p>
                
                <div style="margin-top: 2rem;">
                    <h4 style="color: var(--primary-dark); margin-bottom: 1rem;">Key Benefits:</h4>
                    <ul style="color: var(--text-muted); line-height: 1.8;">
                        <li style="margin-bottom: 0.5rem; display: flex; align-items: flex-start; gap: 0.5rem;">
                            <svg style="width: 20px; height: 20px; color: var(--primary); flex-shrink: 0; margin-top: 0.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span>Automated invoicing and recurring billing</span>
                        </li>
                        <li style="margin-bottom: 0.5rem; display: flex; align-items: flex-start; gap: 0.5rem;">
                            <svg style="width: 20px; height: 20px; color: var(--primary); flex-shrink: 0; margin-top: 0.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span>AI-powered receipt scanning and expense tracking</span>
                        </li>
                        <li style="margin-bottom: 0.5rem; display: flex; align-items: flex-start; gap: 0.5rem;">
                            <svg style="width: 20px; height: 20px; color: var(--primary); flex-shrink: 0; margin-top: 0.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span>Comprehensive, customizable financial reporting</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 0.5rem;">
                            <svg style="width: 20px; height: 20px; color: var(--primary); flex-shrink: 0; margin-top: 0.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span>Seamless multi-currency and multi-tax support</span>
                        </li>
                    </ul>
                </div>
                
                <a href="accounting-software" class="btn btn-primary" style="margin-top: 2rem;">Explore Accounts Management</a>
            </div>
            <div>
                <img src="assets/store/section-1.jpg" alt="Accounts Management" style="border-radius: 20px; box-shadow: var(--shadow-xl); width: 100%; height: auto;">
            </div>
        </div>
        
        <!-- Service 2: Inventory Control -->
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center; margin-bottom: 6rem;" class="service-detail">
            <div>
                <img src="assets/store/section-2.jpg" alt="Inventory Control" style="border-radius: 20px; box-shadow: var(--shadow-xl); width: 100%; height: auto;">
            </div>
            <div>
                <div style="display: inline-flex; padding: 0.5rem 1.5rem; background: rgba(12, 79, 120, 0.1); color: var(--primary); border-radius: 50px; font-weight: 600; margin-bottom: 1rem;">02. Inventory Control</div>
                <h2 style="color: var(--primary-dark); font-size: 2.5rem; margin-bottom: 1rem;">Never Run Out of Stock</h2>
                <p style="font-size: 1.1rem; line-height: 1.7; margin-bottom: 1.5rem;">Efficiently manage your stock levels, automate purchasing, and track product movements across multiple locations with unparalleled accuracy.</p>
                <p style="font-size: 1.1rem; line-height: 1.7; margin-bottom: 1.5rem;">Our inventory module uses predictive analytics to forecast demand, helping you avoid overstocking while ensuring you never miss a sale due to stockouts. Connect directly with your suppliers for automated purchase order generation.</p>
                
                <div style="margin-top: 2rem;">
                    <h4 style="color: var(--primary-dark); margin-bottom: 1rem;">Key Benefits:</h4>
                    <ul style="color: var(--text-muted); line-height: 1.8;">
                        <li style="margin-bottom: 0.5rem; display: flex; align-items: flex-start; gap: 0.5rem;">
                            <svg style="width: 20px; height: 20px; color: var(--primary); flex-shrink: 0; margin-top: 0.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span>Real-time multi-warehouse stock level monitoring</span>
                        </li>
                        <li style="margin-bottom: 0.5rem; display: flex; align-items: flex-start; gap: 0.5rem;">
                            <svg style="width: 20px; height: 20px; color: var(--primary); flex-shrink: 0; margin-top: 0.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span>Automated low-stock alerts and PO generation</span>
                        </li>
                        <li style="margin-bottom: 0.5rem; display: flex; align-items: flex-start; gap: 0.5rem;">
                            <svg style="width: 20px; height: 20px; color: var(--primary); flex-shrink: 0; margin-top: 0.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span>Batch, expiry date, and serial number tracking</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 0.5rem;">
                            <svg style="width: 20px; height: 20px; color: var(--primary); flex-shrink: 0; margin-top: 0.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span>Mobile barcode scanning integration</span>
                        </li>
                    </ul>
                </div>
                
                <a href="inventory-software" class="btn btn-primary" style="margin-top: 2rem;">Explore Inventory Control</a>
            </div>
        </div>
        
        <!-- Service 3: Client Management -->
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;" class="service-detail">
            <div>
                <div style="display: inline-flex; padding: 0.5rem 1.5rem; background: rgba(12, 79, 120, 0.1); color: var(--primary); border-radius: 50px; font-weight: 600; margin-bottom: 1rem;">03. Client Management</div>
                <h2 style="color: var(--primary-dark); font-size: 2.5rem; margin-bottom: 1rem;">Build Lasting Relationships</h2>
                <p style="font-size: 1.1rem; line-height: 1.7; margin-bottom: 1.5rem;">Your clients are your most valuable asset. Manage leads, track communication history, and deliver exceptional service with our centralized CRM database.</p>
                <p style="font-size: 1.1rem; line-height: 1.7; margin-bottom: 1.5rem;">Empower your sales and support teams with a 360-degree view of every customer. From initial contact to post-sale support, ZYLO ensures no client falls through the cracks.</p>
                
                <div style="margin-top: 2rem;">
                    <h4 style="color: var(--primary-dark); margin-bottom: 1rem;">Key Benefits:</h4>
                    <ul style="color: var(--text-muted); line-height: 1.8;">
                        <li style="margin-bottom: 0.5rem; display: flex; align-items: flex-start; gap: 0.5rem;">
                            <svg style="width: 20px; height: 20px; color: var(--primary); flex-shrink: 0; margin-top: 0.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span>Centralized client database with custom fields</span>
                        </li>
                        <li style="margin-bottom: 0.5rem; display: flex; align-items: flex-start; gap: 0.5rem;">
                            <svg style="width: 20px; height: 20px; color: var(--primary); flex-shrink: 0; margin-top: 0.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span>Omnichannel communication history</span>
                        </li>
                        <li style="margin-bottom: 0.5rem; display: flex; align-items: flex-start; gap: 0.5rem;">
                            <svg style="width: 20px; height: 20px; color: var(--primary); flex-shrink: 0; margin-top: 0.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span>Visual lead scoring and drag-and-drop pipeline</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 0.5rem;">
                            <svg style="width: 20px; height: 20px; color: var(--primary); flex-shrink: 0; margin-top: 0.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span>Automated follow-up reminders and email sequencing</span>
                        </li>
                    </ul>
                </div>
                
                <a href="sales-crm" class="btn btn-primary" style="margin-top: 2rem;">Explore Client Management</a>
            </div>
            <div>
                <img src="assets/store/section-1.jpg" alt="Client Management" style="border-radius: 20px; box-shadow: var(--shadow-xl); width: 100%; height: auto;">
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="bg-offwhite" style="padding: 5rem 0;">
    <div class="container">
        <div class="section-title">
            <h2>Simple, Transparent Pricing</h2>
            <p>Start for free, upgrade when you need to.</p>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 2rem; margin-top: 3rem; max-width: 700px; margin-left: auto; margin-right: auto; padding-top: 1.5rem;">
            <div class="card" style="text-align: center; padding: 3rem; border: 2px solid var(--border-color);">
                <div style="font-size: 0.9rem; color: var(--primary); font-weight: 600; margin-bottom: 1rem; text-transform: uppercase; letter-spacing: 1px;">STARTER PLAN</div>
                <div style="font-size: 3.5rem; color: var(--primary-dark); font-weight: 800; margin-bottom: 0.5rem;">$0</div>
                <div style="color: var(--text-muted); margin-bottom: 2rem;">per month</div>
                <ul style="text-align: left; color: var(--text-muted); line-height: 1.8; margin-bottom: 2.5rem;">
                    <li style="margin-bottom: 0.75rem; display: flex; align-items: flex-start; gap: 0.5rem;">
                        <svg style="width: 20px; height: 20px; color: #22c55e; flex-shrink: 0; margin-top: 0.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span>Basic Invoicing</span>
                    </li>
                    <li style="margin-bottom: 0.75rem; display: flex; align-items: flex-start; gap: 0.5rem;">
                        <svg style="width: 20px; height: 20px; color: #22c55e; flex-shrink: 0; margin-top: 0.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span>Up to 50 Clients</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; gap: 0.5rem;">
                        <svg style="width: 20px; height: 20px; color: #22c55e; flex-shrink: 0; margin-top: 0.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span>Email Support</span>
                    </li>
                </ul>
                <a href="contact" class="btn btn-outline" style="width: 100%;">Get Started Free</a>
            </div>
            
            <div class="card" style="text-align: center; padding: 3rem; border: 2px solid var(--primary); position: relative; background: white; box-shadow: var(--shadow-lg); overflow: visible;">
                <div style="position: absolute; top: -1px; left: 50%; transform: translate(-50%, -50%); background: var(--primary); color: white; padding: 0.4rem 1.25rem; border-radius: 50px; font-size: 0.75rem; font-weight: 700; letter-spacing: 1px; white-space: nowrap; box-shadow: 0 4px 12px rgba(0,0,0,0.15);">POPULAR</div>
                <div style="font-size: 0.9rem; color: var(--primary); font-weight: 600; margin-bottom: 1rem; text-transform: uppercase; letter-spacing: 1px;">PRO PLAN</div>
                <div style="font-size: 3.5rem; color: var(--primary-dark); font-weight: 800; margin-bottom: 0.5rem;">$49</div>
                <div style="color: var(--text-muted); margin-bottom: 2rem;">per month</div>
                <ul style="text-align: left; color: var(--text-muted); line-height: 1.8; margin-bottom: 2.5rem;">
                    <li style="margin-bottom: 0.75rem; display: flex; align-items: flex-start; gap: 0.5rem;">
                        <svg style="width: 20px; height: 20px; color: #22c55e; flex-shrink: 0; margin-top: 0.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span>Full CRM & Inventory</span>
                    </li>
                    <li style="margin-bottom: 0.75rem; display: flex; align-items: flex-start; gap: 0.5rem;">
                        <svg style="width: 20px; height: 20px; color: #22c55e; flex-shrink: 0; margin-top: 0.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span>Unlimited Clients</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; gap: 0.5rem;">
                        <svg style="width: 20px; height: 20px; color: #22c55e; flex-shrink: 0; margin-top: 0.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span>24/7 Priority Support</span>
                    </li>
                </ul>
                <a href="contact" class="btn btn-primary" style="width: 100%;">Start Pro Trial</a>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 3rem;">
            <p style="color: var(--text-muted); font-size: 0.95rem;">Need custom enterprise features? <a href="contact" style="color: var(--primary); font-weight: 600;">Contact our sales team →</a></p>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section style="text-align: center; padding: 6rem 0; background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%); color: white;">
    <div class="container">
        <h2 style="font-size: 2.5rem; margin-bottom: 1.5rem; color: white;">Ready to Transform Your Business Operations?</h2>
        <p style="max-width: 600px; margin: 0 auto 2.5rem; font-size: 1.15rem; color: rgba(255, 255, 255, 0.85);">Join thousands of businesses that trust ZYLO to manage their accounts, inventory, and client relationships. Start your free trial today.</p>
        <a href="contact" class="btn btn-primary" style="padding: 1.25rem 3rem; font-size: 1.25rem; background: white; color: var(--primary);">Start Free Trial</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
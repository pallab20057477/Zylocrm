<?php
$pageTitle = "Home";
$pageDescription = "ZYLO CRM helps businesses manage accounts, inventory, invoices, and client relationships from one streamlined platform.";
$pageKeywords = "CRM software, business management software, inventory management, invoicing software, accounts management";
$pageSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'WebSite',
    'name' => 'ZYLO CRM',
    'url' => 'https://zylocrm.com',
    'potentialAction' => [
        '@type' => 'SearchAction',
        'target' => 'https://zylocrm.com/search?q={search_term_string}',
        'query-input' => 'required name=search_term_string'
    ]
];
include 'includes/header.php';
?>

<!-- Expanded Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h1 style="font-size: 4rem; line-height: 1.1;">The Future of Business Management is Here</h1>
            <p style="font-size: 1.35rem; margin-bottom: 2rem;">ZYLO CRM empowers your business with intelligent accounts management, seamless inventory tracking, and exceptional client relationship toolsâ€”all unified in one lightning-fast platform.</p>
            <div class="hero-btns" style="margin-bottom: 2rem;">
                <a href="services" class="btn btn-primary" style="padding: 1rem 2rem; font-size: 1.1rem;">Start Your Free Trial</a>
                <a href="contact" class="btn btn-outline" style="padding: 1rem 2rem; font-size: 1.1rem;">Book a Demo</a>
            </div>
            <p style="font-size: 0.9rem; color: var(--text-muted);">Trusted by over 10,000+ fast-growing companies worldwide.</p>
        </div>
        <div class="hero-image">
            <img src="assets/store/hero-1.jpg" alt="Dashboard Preview">
        </div>
    </div>
</section>

<!-- Trust Badges (New Content) -->
<section style="padding: 3rem 0; border-bottom: 1px solid var(--border-color);">
    <div class="container" style="text-align: center;">
        <p style="color: var(--text-muted); text-transform: uppercase; letter-spacing: 2px; font-size: 0.85rem; margin-bottom: 2rem;">Trusted by innovative teams at</p>
        <div style="display: flex; justify-content: space-around; flex-wrap: wrap; opacity: 0.5; filter: grayscale(100%);">
            <h3 style="margin: 0 1rem;">ACME Corp</h3>
            <h3 style="margin: 0 1rem;">Globex</h3>
            <h3 style="margin: 0 1rem;">Soylent</h3>
            <h3 style="margin: 0 1rem;">Initech</h3>
            <h3 style="margin: 0 1rem;">Umbrella</h3>
        </div>
    </div>
</section>

<!-- Key Features Overview -->
<section class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>Core Capabilities</h2>
            <p>Streamline your operations and focus on growth with our comprehensive suite of tools.</p>
        </div>
        
        <div class="grid-3">
            <div class="card">
                <div class="card-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3>Accounts Management</h3>
                <p>Keep track of your finances effortlessly. Generate invoices, track expenses, and view real-time financial reports.</p>
                <a href="accounting-software" style="margin-top: auto; font-weight: 600;">Learn more &rarr;</a>
            </div>
            
            <div class="card">
                <div class="card-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                </div>
                <h3>Inventory Control</h3>
                <p>Never run out of stock. Manage product variants, automate purchase orders, and track stock levels accurately.</p>
                <a href="inventory-software" style="margin-top: auto; font-weight: 600;">Learn more &rarr;</a>
            </div>
            
            <div class="card">
                <div class="card-icon">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
                <h3>Client Management</h3>
                <p>Build stronger relationships. Maintain a central database of your clients, track interactions, and improve satisfaction.</p>
                <a href="sales-crm" style="margin-top: auto; font-weight: 600;">Learn more &rarr;</a>
            </div>
        </div>
    </div>
</section>

<!-- How It Works (New Content) -->
<section>
    <div class="container">
        <div class="section-title">
            <h2>How It Works</h2>
            <p>Get up and running in three simple steps.</p>
        </div>
        <div class="grid-3">
            <div style="text-align: center; padding: 2rem;">
                <div style="width: 80px; height: 80px; background: var(--primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; font-weight: bold; margin: 0 auto 1.5rem;">1</div>
                <h3 style="margin-bottom: 1rem;">Sign Up</h3>
                <p>Create your account in less than 60 seconds. No credit card required.</p>
            </div>
            <div style="text-align: center; padding: 2rem;">
                <div style="width: 80px; height: 80px; background: var(--primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; font-weight: bold; margin: 0 auto 1.5rem;">2</div>
                <h3 style="margin-bottom: 1rem;">Customize</h3>
                <p>Import your existing data and tailor the modules to fit your specific workflow.</p>
            </div>
            <div style="text-align: center; padding: 2rem;">
                <div style="width: 80px; height: 80px; background: var(--primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; font-weight: bold; margin: 0 auto 1.5rem;">3</div>
                <h3 style="margin-bottom: 1rem;">Automate</h3>
                <p>Watch as ZYLO automates tasks, generates reports, and saves you countless hours.</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials (New Content) -->
<section class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>What Our Users Say</h2>
        </div>
        <div class="grid-3">
            <div class="card" style="background: white;">
                <div style="color: #FBBF24; margin-bottom: 1rem;">★★★★★</div>
                <p style="font-style: italic; margin-bottom: 1.5rem;">"ZYLO completely transformed how we handle our inventory. What used to take hours of manual checking now happens automatically in real-time."</p>
                <div style="display: flex; align-items: center; gap: 1rem; margin-top: auto;">
                    <div style="width: 40px; height: 40px; background: #E5E7EB; border-radius: 50%;"></div>
                    <div>
                        <h4 style="margin: 0; font-size: 1rem;">Sarah Jenkins</h4>
                        <span style="font-size: 0.85rem; color: var(--text-muted);">Operations Manager, Globex</span>
                    </div>
                </div>
            </div>
            <div class="card" style="background: white;">
                <div style="color: #FBBF24; margin-bottom: 1rem;">★★★★★</div>
                <p style="font-style: italic; margin-bottom: 1.5rem;">"The invoicing and accounts module is a lifesaver. We get paid faster and our accountant loves the clean export formats."</p>
                <div style="display: flex; align-items: center; gap: 1rem; margin-top: auto;">
                    <div style="width: 40px; height: 40px; background: #E5E7EB; border-radius: 50%;"></div>
                    <div>
                        <h4 style="margin: 0; font-size: 1rem;">David Chen</h4>
                        <span style="font-size: 0.85rem; color: var(--text-muted);">CEO, TechStart</span>
                    </div>
                </div>
            </div>
            <div class="card" style="background: white;">
                <div style="color: #FBBF24; margin-bottom: 1rem;">★★★★★</div>
                <p style="font-style: italic; margin-bottom: 1.5rem;">"We switched from a massive, clunky CRM to ZYLO and haven't looked back. It's fast, intuitive, and exactly what our sales team needed."</p>
                <div style="display: flex; align-items: center; gap: 1rem; margin-top: auto;">
                    <div style="width: 40px; height: 40px; background: #E5E7EB; border-radius: 50%;"></div>
                    <div>
                        <h4 style="margin: 0; font-size: 1rem;">Emily Watson</h4>
                        <span style="font-size: 0.85rem; color: var(--text-muted);">Sales Director, ACME Corp</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats (New Content) -->
<section style="background: var(--primary); color: white; text-align: center;">
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 2rem;">
            <div>
                <div style="font-size: 3rem; font-weight: bold; margin-bottom: 0.5rem; color: white;">10k+</div>
                <p style="color: rgba(255,255,255,0.8); margin: 0;">Active Users</p>
            </div>
            <div>
                <div style="font-size: 3rem; font-weight: bold; margin-bottom: 0.5rem; color: white;">5M+</div>
                <p style="color: rgba(255,255,255,0.8); margin: 0;">Invoices Generated</p>
            </div>
            <div>
                <div style="font-size: 3rem; font-weight: bold; margin-bottom: 0.5rem; color: white;">99.9%</div>
                <p style="color: rgba(255,255,255,0.8); margin: 0;">Uptime Guaranteed</p>
            </div>
            <div>
                <div style="font-size: 3rem; font-weight: bold; margin-bottom: 0.5rem; color: white;">24/7</div>
                <p style="color: rgba(255,255,255,0.8); margin: 0;">Customer Support</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section style="text-align: center; padding: 6rem 0;">
    <div class="container">
        <h2 style="font-size: 2.5rem; margin-bottom: 1.5rem;">Ready to upgrade your workflow?</h2>
        <p style="max-width: 600px; margin: 0 auto 2.5rem; font-size: 1.1rem;">Join thousands of businesses that trust ZYLO to manage their daily operations. Start your free trial today.</p>
        <a href="contact" class="btn btn-primary" style="padding: 1rem 3rem; font-size: 1.25rem;">Get Started Now</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>


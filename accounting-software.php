<?php
$pageTitle = "Accounting Software";
$pageDescription = "ZYLO CRM's Accounting Software helps small businesses and freelancers manage invoices, expenses, and taxes. Automate billing, track finances in real-time, and generate financial reports instantly.";
$pageKeywords = "accounting software for small business, invoicing software, expense tracker, accounting software for freelancers, GST invoicing software, accounting software India";
$pageSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'SoftwareApplication',
    'name' => 'ZYLO CRM - Accounting Software',
    'description' => 'Cloud-based accounting software with invoicing, expense tracking, tax management, and financial reporting.',
    'provider' => [
        '@type' => 'Organization',
        'name' => 'ZYLO CRM',
        'url' => 'https://zylocrm.com'
    ],
    'applicationCategory' => 'BusinessApplication',
    'offers' => [
        '@type' => 'Offer',
        'priceCurrency' => 'USD',
        'price' => '0',
        'pricingModel' => 'Freemium'
    ],
    'review' => [
        '@type' => 'Review',
        'author' => [
            '@type' => 'Person',
            'name' => 'Sarah Jenkins'
        ],
        'reviewRating' => [
            '@type' => 'Rating',
            'ratingValue' => '5',
            'bestRating' => '5'
        ],
        'reviewBody' => 'The invoicing and accounts module is a lifesaver. We get paid faster and our accountant loves the clean export formats.'
    ]
];
include 'includes/header.php';
?>

<section class="bg-offwhite" style="padding-top: calc(var(--header-height) + 4rem); padding-bottom: 4rem;">
    <div class="container" style="text-align: center;">
        <h1>Accounting Software</h1>
        <p style="font-size: 1.25rem; max-width: 700px; margin: 0 auto;">Powerful tools designed to accelerate your growth.</p>
    </div>
</section>

<section>
    <div class="container">
        <!-- Content block 1 -->
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center; margin-bottom: 6rem;">
            <div>
                <h2 style="color: var(--primary-dark);">Comprehensive Accounting Software Solutions</h2>
                <p>Welcome to our dedicated page for Accounting Software. Here at ZYLO, we understand that every business has unique needs, which is why our Accounting Software module is designed to be highly flexible and robust.</p>
                <p>By integrating Accounting Software into your daily workflow, you can automate repetitive tasks, reduce errors, and focus on what truly matters: growing your business. Our cloud-based architecture ensures your data is always accessible, secure, and up-to-date.</p>
                <ul style="margin-top: 1rem; color: var(--text-muted);">
                    <li style="margin-bottom: 0.5rem;">âœ“ Industry-leading features</li>
                    <li style="margin-bottom: 0.5rem;">âœ“ 24/7 dedicated support</li>
                    <li style="margin-bottom: 0.5rem;">âœ“ Seamless integration with other modules</li>
                </ul>
            </div>
            <div>
                <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Accounting Software" style="border-radius: 16px; box-shadow: var(--shadow-md);">
            </div>
        </div>

        <!-- Content block 2 (3x content expansion) -->
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center; margin-bottom: 6rem;">
            <div style="order: 2;">
                <h2 style="color: var(--primary-dark);">Why Choose Our Accounting Software?</h2>
                <p>Our solution is crafted by industry experts who understand the granular challenges of Accounting Software. We continuously iterate based on user feedback to ensure our product remains at the cutting edge.</p>
                <p>Experience unparalleled speed and reliability. With advanced analytics built directly into the module, you'll gain insights that were previously hidden, empowering you to make data-driven decisions instantly.</p>
            </div>
            <div style="order: 1;">
                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Dashboard metrics" style="border-radius: 16px; box-shadow: var(--shadow-md);">
            </div>
        </div>

        <!-- Key Features Section -->
        <div style="margin: 6rem 0;">
            <h2 style="text-align: center; color: var(--primary-dark); margin-bottom: 3rem;">Key Features of ZYLO Accounting Software</h2>
            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 2rem;">
                <div style="padding: 2rem; background: rgba(12, 79, 120, 0.05); border-radius: 12px; border-left: 4px solid var(--primary);">
                    <h4 style="color: var(--primary); margin-bottom: 0.5rem;">📄 Automated Invoicing</h4>
                    <p style="color: var(--text-muted);">Generate professional invoices in seconds. Customize templates, set payment terms, and send automated reminders. Support for GST, HST, VAT, and other tax formats.</p>
                </div>
                <div style="padding: 2rem; background: rgba(12, 79, 120, 0.05); border-radius: 12px; border-left: 4px solid var(--primary);">
                    <h4 style="color: var(--primary); margin-bottom: 0.5rem;">💰 Expense Tracking</h4>
                    <p style="color: var(--text-muted);">Track every expense with AI-powered receipt scanning. Categorize automatically, spot tax deductions, and prepare for audits with detailed reports.</p>
                </div>
                <div style="padding: 2rem; background: rgba(12, 79, 120, 0.05); border-radius: 12px; border-left: 4px solid var(--primary);">
                    <h4 style="color: var(--primary); margin-bottom: 0.5rem;">📊 Financial Reporting</h4>
                    <p style="color: var(--text-muted);">Generate P&L statements, balance sheets, and cash flow reports in real-time. Export to PDF, Excel, or send directly to your accountant.</p>
                </div>
                <div style="padding: 2rem; background: rgba(12, 79, 120, 0.05); border-radius: 12px; border-left: 4px solid var(--primary);">
                    <h4 style="color: var(--primary); margin-bottom: 0.5rem;">🏦 Bank Reconciliation</h4>
                    <p style="color: var(--text-muted);">Auto-sync with your bank account via secure API. Match transactions instantly and identify discrepancies. Works with 1000+ banks worldwide.</p>
                </div>
                <div style="padding: 2rem; background: rgba(12, 79, 120, 0.05); border-radius: 12px; border-left: 4px solid var(--primary);">
                    <h4 style="color: var(--primary); margin-bottom: 0.5rem;">🌍 Multi-Currency Support</h4>
                    <p style="color: var(--text-muted);">Invoice clients in 150+ currencies with real-time exchange rates. Manage international payments and cross-border transactions effortlessly.</p>
                </div>
                <div style="padding: 2rem; background: rgba(12, 79, 120, 0.05); border-radius: 12px; border-left: 4px solid var(--primary);">
                    <h4 style="color: var(--primary); margin-bottom: 0.5rem;">🔒 Tax Management</h4>
                    <p style="color: var(--text-muted);">Stay compliant with GST, VAT, and other tax regulations. Generate tax reports instantly and ensure accurate filings for 12+ countries.</p>
                </div>
            </div>
        </div>

        <!-- Use Cases Section -->
        <div style="margin: 6rem 0; background: var(--bg-light); padding: 4rem 2rem; border-radius: 12px;">
            <h2 style="text-align: center; color: var(--primary-dark); margin-bottom: 3rem;">Perfect For</h2>
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem;">
                <div style="text-align: center;">
                    <h4 style="color: var(--primary);">Freelancers & Solopreneurs</h4>
                    <p style="color: var(--text-muted);">Manage invoices and expenses with minimal effort. Track income, deduct expenses, and stay tax-ready all year.</p>
                </div>
                <div style="text-align: center;">
                    <h4 style="color: var(--primary);">Small Business Owners</h4>
                    <p style="color: var(--text-muted);">Scale your accounting operations without hiring an accountant. Automate workflows and gain financial clarity.</p>
                </div>
                <div style="text-align: center;">
                    <h4 style="color: var(--primary);">Professional Accountants</h4>
                    <p style="color: var(--text-muted);">Manage multiple client books efficiently. Collaborate with clients and streamline year-end tax preparation.</p>
                </div>
            </div>
        </div>

        <!-- Comparison Table -->
        <div style="margin: 6rem 0;">
            <h2 style="text-align: center; color: var(--primary-dark); margin-bottom: 3rem;">ZYLO vs Competitors</h2>
            <div style="overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse; background: white;">
                    <thead style="background: var(--primary); color: white;">
                        <tr>
                            <th style="padding: 1rem; text-align: left; border: 1px solid var(--border-color);">Feature</th>
                            <th style="padding: 1rem; text-align: center; border: 1px solid var(--border-color);">ZYLO CRM</th>
                            <th style="padding: 1rem; text-align: center; border: 1px solid var(--border-color);">Competitor A</th>
                            <th style="padding: 1rem; text-align: center; border: 1px solid var(--border-color);">Competitor B</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">Free Plan</td>
                            <td style="padding: 1rem; text-align: center; border: 1px solid var(--border-color);">✅ Yes</td>
                            <td style="padding: 1rem; text-align: center; border: 1px solid var(--border-color);">❌ No</td>
                            <td style="padding: 1rem; text-align: center; border: 1px solid var(--border-color);">⚠️ Limited</td>
                        </tr>
                        <tr style="background: var(--bg-light);">
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">Invoice Limit</td>
                            <td style="padding: 1rem; text-align: center; border: 1px solid var(--border-color);">Unlimited</td>
                            <td style="padding: 1rem; text-align: center; border: 1px solid var(--border-color);">5-10 only</td>
                            <td style="padding: 1rem; text-align: center; border: 1px solid var(--border-color);">Unlimited</td>
                        </tr>
                        <tr>
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">Bank Sync</td>
                            <td style="padding: 1rem; text-align: center; border: 1px solid var(--border-color);">✅ Yes</td>
                            <td style="padding: 1rem; text-align: center; border: 1px solid var(--border-color);">✅ Yes</td>
                            <td style="padding: 1rem; text-align: center; border: 1px solid var(--border-color);">❌ No</td>
                        </tr>
                        <tr style="background: var(--bg-light);">
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">AI Receipt Scanning</td>
                            <td style="padding: 1rem; text-align: center; border: 1px solid var(--border-color);">✅ Yes</td>
                            <td style="padding: 1rem; text-align: center; border: 1px solid var(--border-color);">✅ Yes</td>
                            <td style="padding: 1rem; text-align: center; border: 1px solid var(--border-color);">❌ No</td>
                        </tr>
                        <tr>
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">Price/Month</td>
                            <td style="padding: 1rem; text-align: center; border: 1px solid var(--border-color);">$0-49</td>
                            <td style="padding: 1rem; text-align: center; border: 1px solid var(--border-color);">$15-100</td>
                            <td style="padding: 1rem; text-align: center; border: 1px solid var(--border-color);">$10-80</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- FAQ Section with Schema -->
        <div style="text-align: center; max-width: 800px; margin: 6rem auto;">
            <h2 style="color: var(--primary-dark); margin-bottom: 3rem;">Frequently Asked Questions</h2>
            <div style="text-align: left;">
                <div style="margin-bottom: 2rem; padding: 1.5rem; background: var(--bg-light); border-radius: 8px;">
                    <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 0.5rem; cursor: pointer;">❓ How much does ZYLO Accounting Software cost?</h3>
                    <p style="color: var(--text-muted); margin-bottom: 0;">ZYLO offers a free plan with basic invoicing and expense tracking. Pro plan starts at $49/month with full accounting features, unlimited invoices, and 24/7 support.</p>
                </div>
                
                <div style="margin-bottom: 2rem; padding: 1.5rem; background: var(--bg-light); border-radius: 8px;">
                    <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 0.5rem; cursor: pointer;">❓ Can I import my existing invoices and expenses?</h3>
                    <p style="color: var(--text-muted); margin-bottom: 0;">Yes! We provide automated CSV import tools and a dedicated onboarding specialist to migrate your data safely with zero downtime.</p>
                </div>

                <div style="margin-bottom: 2rem; padding: 1.5rem; background: var(--bg-light); border-radius: 8px;">
                    <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 0.5rem; cursor: pointer;">❓ Is my financial data secure?</h3>
                    <p style="color: var(--text-muted); margin-bottom: 0;">Absolutely. ZYLO uses bank-grade 256-bit AES encryption, ISO 27001 compliance, and 99.9% uptime SLA. Your data is backed up every hour.</p>
                </div>

                <div style="margin-bottom: 2rem; padding: 1.5rem; background: var(--bg-light); border-radius: 8px;">
                    <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 0.5rem; cursor: pointer;">❓ Does ZYLO support GST/VAT compliance?</h3>
                    <p style="color: var(--text-muted); margin-bottom: 0;">Yes! ZYLO auto-calculates GST, VAT, and other regional taxes. Generate compliant invoices, track tax liability, and prepare for audits in minutes.</p>
                </div>

                <div style="margin-bottom: 2rem; padding: 1.5rem; background: var(--bg-light); border-radius: 8px;">
                    <h3 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 0.5rem; cursor: pointer;">❓ Can my accountant access my books?</h3>
                    <p style="color: var(--text-muted); margin-bottom: 0;">Yes. Grant your accountant read-only or full access. They can review books, collaborate on reconciliation, and prepare tax returns directly in ZYLO.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

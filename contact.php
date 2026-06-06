<?php
$pageTitle = "Contact Us - Get in Touch with ZYLO CRM";
$pageDescription = "Reach out to ZYLO CRM for sales, technical support, onboarding assistance, or partnership opportunities. Fast responses via email, phone, and WhatsApp.";
$pageKeywords = "contact ZYLO CRM, CRM support, sales inquiry, business software help, WhatsApp support, ZYLO contact number, ZYLO email";
$canonicalPath = '/contact';
$pageSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'ContactPage',
    'name' => 'Contact ZYLO CRM',
    'description' => 'Contact ZYLO CRM for sales, support, onboarding, or partnership inquiries.',
    'url' => 'https://zylocrm.com/contact',
    'mainEntity' => [
        '@type' => 'Organization',
        'name' => 'ZYLO CRM',
        'url' => 'https://zylocrm.com',
        'logo' => 'https://zylocrm.com/assets/logo.png',
        'contactPoint' => [
            [
                '@type' => 'ContactPoint',
                'telephone' => '+91-7501137266',
                'contactType' => 'customer support',
                'availableLanguage' => ['English', 'Hindi'],
                'areaServed' => 'IN'
            ],
            [
                '@type' => 'ContactPoint',
                'email' => 'support@zylocrm.com',
                'contactType' => 'customer support',
                'availableLanguage' => ['English']
            ]
        ],
        'address' => [
            '@type' => 'PostalAddress',
            'addressLocality' => 'Contai',
            'addressRegion' => 'West Bengal',
            'postalCode' => '721401',
            'addressCountry' => 'IN'
        ],
        'sameAs' => [
            'https://wa.me/917501137266'
        ]
    ]
];

// FAQ Schema
$faqSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name' => 'What are ZYLO CRM support hours?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Our standard support hours are Monday through Friday, 9:00 AM to 6:00 PM IST. Enterprise customers receive 24/7 priority support.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'How fast can I expect a response from ZYLO CRM?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'We aim to respond to all inquiries within 24 hours. Urgent technical issues are typically addressed within 2 hours.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'Does ZYLO CRM offer onboarding assistance?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Yes! All new paid accounts receive a dedicated onboarding specialist to help import data and configure your account.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'Can I reach ZYLO CRM on WhatsApp?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Yes, you can reach us directly on WhatsApp at +91 7501137266 for quick support and inquiries.'
            ]
        ]
    ]
];

include 'includes/header.php';
?>
<script type="application/ld+json"><?php echo json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>

<!-- Page Hero -->
<section class="bg-offwhite" style="padding-top: calc(var(--header-height) + 4rem); padding-bottom: 4rem;">
    <div class="container" style="text-align: center; max-width: 750px; margin: 0 auto;">
        <div style="display: inline-flex; align-items: center; gap: 0.5rem; background: rgba(12,79,120,0.08); color: var(--primary); font-size: 0.85rem; font-weight: 600; padding: 0.4rem 1rem; border-radius: 50px; margin-bottom: 1.5rem; text-transform: uppercase; letter-spacing: 1px;">
            <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
            We're here to help
        </div>
        <h1 style="font-size: 3rem; color: var(--primary-dark); margin-bottom: 1.25rem; line-height: 1.2;">Get in Touch with Us</h1>
        <p style="font-size: 1.2rem; color: var(--text-muted); line-height: 1.7;">Have a question, need support, or want to explore a partnership? Our team typically responds within a few hours.</p>
    </div>
</section>

<!-- Quick Contact Stats -->
<section style="padding: 2rem 0; background: white; border-bottom: 1px solid var(--border-color);">
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem; max-width: 750px; margin: 0 auto; text-align: center;">
            <div>
                <div style="font-size: 1.75rem; font-weight: 800; color: var(--primary-dark);">&lt; 2 hrs</div>
                <div style="font-size: 0.9rem; color: var(--text-muted); margin-top: 0.25rem;">Avg. response time</div>
            </div>
            <div style="border-left: 1px solid var(--border-color); border-right: 1px solid var(--border-color);">
                <div style="font-size: 1.75rem; font-weight: 800; color: var(--primary-dark);">24/7</div>
                <div style="font-size: 0.9rem; color: var(--text-muted); margin-top: 0.25rem;">Enterprise support</div>
            </div>
            <div>
                <div style="font-size: 1.75rem; font-weight: 800; color: var(--primary-dark);">98%</div>
                <div style="font-size: 0.9rem; color: var(--text-muted); margin-top: 0.25rem;">Customer satisfaction</div>
            </div>
        </div>
    </div>
</section>

<!-- Main Contact Section -->
<section style="padding: 5rem 0;">
    <div class="container">
        <div class="contact-grid">

            <!-- Contact Form -->
            <div>
                <div style="background: var(--bg-color); padding: 3rem; border-radius: 20px; box-shadow: var(--shadow-md); border: 1px solid var(--border-color);">
                    <h2 style="font-size: 1.75rem; color: var(--primary-dark); margin-bottom: 0.5rem;">Send us a Message</h2>
                    <p style="color: var(--text-muted); margin-bottom: 2rem; font-size: 0.95rem;">Fill in the form and we'll get back to you via WhatsApp or email.</p>

                    <form id="contactForm" novalidate
                        onsubmit="handleContactSubmit(event)">

                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.25rem;">
                            <div class="form-group" style="margin-bottom: 0;">
                                <label class="form-label" for="contact-name">Full Name <span style="color: #e53e3e;">*</span></label>
                                <input type="text" id="contact-name" name="name" class="form-control"
                                    placeholder="John Doe" required autocomplete="name">
                                <span class="field-error" id="err-name" style="display:none; color:#e53e3e; font-size:0.8rem; margin-top:0.3rem;"></span>
                            </div>
                            <div class="form-group" style="margin-bottom: 0;">
                                <label class="form-label" for="contact-email">Email Address <span style="color: #e53e3e;">*</span></label>
                                <input type="email" id="contact-email" name="email" class="form-control"
                                    placeholder="john@company.com" required autocomplete="email">
                                <span class="field-error" id="err-email" style="display:none; color:#e53e3e; font-size:0.8rem; margin-top:0.3rem;"></span>
                            </div>
                        </div>

                        <div class="form-group" style="margin-top: 1.25rem;">
                            <label class="form-label" for="contact-phone">Phone / WhatsApp</label>
                            <input type="tel" id="contact-phone" name="phone" class="form-control"
                                placeholder="+91 98765 43210" autocomplete="tel">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="contact-subject">How can we help? <span style="color: #e53e3e;">*</span></label>
                            <select id="contact-subject" name="subject" class="form-control" required>
                                <option value="">Select a topic...</option>
                                <option value="Sales Inquiry">Sales Inquiry</option>
                                <option value="Technical Support">Technical Support</option>
                                <option value="Billing Question">Billing Question</option>
                                <option value="Onboarding Help">Onboarding Help</option>
                                <option value="Partnership Opportunity">Partnership Opportunity</option>
                                <option value="General Feedback">General Feedback</option>
                            </select>
                            <span class="field-error" id="err-subject" style="display:none; color:#e53e3e; font-size:0.8rem; margin-top:0.3rem;"></span>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="contact-message">Message <span style="color: #e53e3e;">*</span></label>
                            <textarea id="contact-message" name="message" class="form-control"
                                placeholder="Tell us about your business and how we can help..." required></textarea>
                            <span class="field-error" id="err-message" style="display:none; color:#e53e3e; font-size:0.8rem; margin-top:0.3rem;"></span>
                        </div>

                        <!-- Success / Error feedback -->
                        <div id="form-success" style="display:none; background:#f0fdf4; border:1px solid #86efac; color:#166534; padding:1rem 1.25rem; border-radius:10px; margin-bottom:1.25rem; font-size:0.95rem; display:flex; align-items:center; gap:0.6rem;">
                            <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Message sent! We'll be in touch shortly.
                        </div>

                        <button type="submit" id="submit-btn" class="btn btn-primary" style="width: 100%; display: flex; align-items: center; justify-content: center; gap: 0.6rem; font-size: 1rem; padding: 0.9rem 1.5rem;">
                            <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                            Send Message via WhatsApp
                        </button>

                        <p style="text-align:center; color:var(--text-muted); font-size:0.8rem; margin-top:0.75rem;">
                            By submitting you agree to our <a href="privacy-policy" style="color:var(--primary);">Privacy Policy</a>.
                        </p>
                    </form>
                </div>
            </div>

            <!-- Contact Info -->
            <div style="display: flex; flex-direction: column; gap: 1.5rem;">

                <!-- Info Card -->
                <div class="contact-info" style="border-radius: 20px;">
                    <h3 style="font-size: 1.35rem; margin-bottom: 1.75rem;">Our Contact Details</h3>

                    <div class="info-item" style="margin-bottom: 1.5rem;">
                        <div style="width:44px; height:44px; background:rgba(255,255,255,0.15); border-radius:10px; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                            <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <div>
                            <p style="margin-bottom:0.15rem; font-weight:600; opacity:1;">Email Support</p>
                            <a href="mailto:support@zylocrm.com" style="color:rgba(255,255,255,0.85); text-decoration:none; font-size:0.95rem;">support@zylocrm.com</a>
                        </div>
                    </div>

                    <div class="info-item" style="margin-bottom: 1.5rem;">
                        <div style="width:44px; height:44px; background:rgba(255,255,255,0.15); border-radius:10px; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                            <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        </div>
                        <div>
                            <p style="margin-bottom:0.15rem; font-weight:600; opacity:1;">Phone & WhatsApp</p>
                            <a href="tel:+917501137266" style="color:rgba(255,255,255,0.85); text-decoration:none; font-size:0.95rem;">+91 7501137266</a>
                        </div>
                    </div>

                    <div class="info-item" style="margin-bottom: 1.5rem;">
                        <div style="width:44px; height:44px; background:rgba(255,255,255,0.15); border-radius:10px; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                            <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <div>
                            <p style="margin-bottom:0.15rem; font-weight:600; opacity:1;">Office Address</p>
                            <p style="color:rgba(255,255,255,0.85); margin-bottom:0; font-size:0.95rem;">Contai, East Midnapore<br>West Bengal 721401, India</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div style="width:44px; height:44px; background:rgba(255,255,255,0.15); border-radius:10px; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                            <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div>
                            <p style="margin-bottom:0.15rem; font-weight:600; opacity:1;">Business Hours</p>
                            <p style="color:rgba(255,255,255,0.85); margin-bottom:0; font-size:0.95rem;">Mon – Fri: 9:00 AM – 6:00 PM IST<br>Enterprise: 24/7 Support</p>
                        </div>
                    </div>
                </div>

                <!-- WhatsApp CTA -->
                <a href="https://wa.me/917501137266?text=Hi%2C%20I%20have%20a%20query%20about%20ZYLO%20CRM"
                    target="_blank" rel="noopener noreferrer"
                    style="display:flex; align-items:center; gap:1rem; background:#25d366; color:white; padding:1.25rem 1.5rem; border-radius:16px; text-decoration:none; font-weight:600; transition:background 0.2s;"
                    onmouseover="this.style.background='#1ebe5d'" onmouseout="this.style.background='#25d366'"
                    aria-label="Chat with ZYLO CRM on WhatsApp">
                    <svg width="28" height="28" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    <div>
                        <div style="font-size:1rem;">Chat on WhatsApp</div>
                        <div style="font-size:0.8rem; opacity:0.9; font-weight:400;">Typically replies within minutes</div>
                    </div>
                </a>

                <!-- Map Embed -->
                <div style="border-radius:16px; overflow:hidden; box-shadow:var(--shadow-md); border:1px solid var(--border-color); height:220px;">
                    <iframe
                        title="ZYLO CRM Office Location – Contai, West Bengal"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3713.0!2d87.7480!3d21.7804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a03b0c0c0c0c0c1%3A0x0!2sContai%2C%20West%20Bengal%20721401!5e0!3m2!1sen!2sin!4v1700000000000"
                        width="100%"
                        height="220"
                        style="border:0; display:block;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Support Channels -->
<section class="bg-offwhite" style="padding: 5rem 0;">
    <div class="container">
        <div class="section-title">
            <h2>How Would You Like to Reach Us?</h2>
            <p>Multiple ways to get the help you need, fast.</p>
        </div>

        <div class="grid-3" style="margin-top: 3rem;">
            <div class="card" style="text-align:center; padding:2.5rem 2rem;">
                <div class="card-icon" style="background:rgba(12,79,120,0.08); margin:0 auto 1.5rem;">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color:var(--primary);"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                </div>
                <h3 style="font-size:1.15rem;">Email Support</h3>
                <p style="color:var(--text-muted); font-size:0.95rem; margin-bottom:1.5rem;">Send us a detailed message and we'll reply within 24 hours with a thorough response.</p>
                <a href="mailto:support@zylocrm.com" class="btn btn-outline" style="font-size:0.9rem; padding:0.6rem 1.25rem;">support@zylocrm.com</a>
            </div>

            <div class="card" style="text-align:center; padding:2.5rem 2rem; border:2px solid var(--primary);">
                <div class="card-icon" style="background:rgba(12,79,120,0.08); margin:0 auto 1.5rem;">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color:var(--primary);"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                </div>
                <h3 style="font-size:1.15rem;">WhatsApp Chat</h3>
                <p style="color:var(--text-muted); font-size:0.95rem; margin-bottom:1.5rem;">Get instant answers for quick questions directly on WhatsApp. Fastest way to reach us.</p>
                <a href="https://wa.me/917501137266" target="_blank" rel="noopener noreferrer" class="btn btn-primary" style="font-size:0.9rem; padding:0.6rem 1.25rem;">Start Chat</a>
            </div>

            <div class="card" style="text-align:center; padding:2.5rem 2rem;">
                <div class="card-icon" style="background:rgba(12,79,120,0.08); margin:0 auto 1.5rem;">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color:var(--primary);"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                </div>
                <h3 style="font-size:1.15rem;">Phone Call</h3>
                <p style="color:var(--text-muted); font-size:0.95rem; margin-bottom:1.5rem;">Prefer a direct conversation? Call us during business hours for immediate assistance.</p>
                <a href="tel:+917501137266" class="btn btn-outline" style="font-size:0.9rem; padding:0.6rem 1.25rem;">+91 7501137266</a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section style="padding: 5rem 0;">
    <div class="container" style="max-width: 800px;">
        <div class="section-title">
            <h2>Frequently Asked Questions</h2>
            <p>Quick answers to common questions about reaching us.</p>
        </div>

        <div style="margin-top: 3rem;" itemscope itemtype="https://schema.org/FAQPage">

            <div style="border: 1px solid var(--border-color); border-radius: 12px; margin-bottom: 1rem; overflow: hidden;" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <button onclick="toggleFaq(this)" aria-expanded="false"
                    style="width:100%; text-align:left; background:white; border:none; padding:1.25rem 1.5rem; font-size:1rem; font-weight:600; color:var(--primary-dark); cursor:pointer; display:flex; justify-content:space-between; align-items:center; gap:1rem;">
                    <span itemprop="name">What are your support hours?</span>
                    <svg class="faq-icon" width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="flex-shrink:0; transition:transform 0.3s;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="faq-body" style="display:none; padding:0 1.5rem 1.25rem; background:white;" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <p itemprop="text" style="color:var(--text-muted); margin:0;">Our standard support hours are Monday through Friday, 9:00 AM to 6:00 PM IST. Enterprise customers receive 24/7 priority support with a dedicated account manager.</p>
                </div>
            </div>

            <div style="border: 1px solid var(--border-color); border-radius: 12px; margin-bottom: 1rem; overflow: hidden;" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <button onclick="toggleFaq(this)" aria-expanded="false"
                    style="width:100%; text-align:left; background:white; border:none; padding:1.25rem 1.5rem; font-size:1rem; font-weight:600; color:var(--primary-dark); cursor:pointer; display:flex; justify-content:space-between; align-items:center; gap:1rem;">
                    <span itemprop="name">How fast can I expect a response?</span>
                    <svg class="faq-icon" width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="flex-shrink:0; transition:transform 0.3s;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="faq-body" style="display:none; padding:0 1.5rem 1.25rem; background:white;" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <p itemprop="text" style="color:var(--text-muted); margin:0;">We aim to respond to all inquiries within 24 hours. Urgent technical issues are typically addressed within 2 hours. For fastest response, reach us on WhatsApp.</p>
                </div>
            </div>

            <div style="border: 1px solid var(--border-color); border-radius: 12px; margin-bottom: 1rem; overflow: hidden;" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <button onclick="toggleFaq(this)" aria-expanded="false"
                    style="width:100%; text-align:left; background:white; border:none; padding:1.25rem 1.5rem; font-size:1rem; font-weight:600; color:var(--primary-dark); cursor:pointer; display:flex; justify-content:space-between; align-items:center; gap:1rem;">
                    <span itemprop="name">Do you offer onboarding assistance?</span>
                    <svg class="faq-icon" width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="flex-shrink:0; transition:transform 0.3s;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="faq-body" style="display:none; padding:0 1.5rem 1.25rem; background:white;" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <p itemprop="text" style="color:var(--text-muted); margin:0;">Yes! All new paid accounts receive a dedicated onboarding specialist to help import your data, configure your workspace, and train your team to get the most out of ZYLO CRM.</p>
                </div>
            </div>

            <div style="border: 1px solid var(--border-color); border-radius: 12px; margin-bottom: 1rem; overflow: hidden;" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <button onclick="toggleFaq(this)" aria-expanded="false"
                    style="width:100%; text-align:left; background:white; border:none; padding:1.25rem 1.5rem; font-size:1rem; font-weight:600; color:var(--primary-dark); cursor:pointer; display:flex; justify-content:space-between; align-items:center; gap:1rem;">
                    <span itemprop="name">Can I reach ZYLO CRM on WhatsApp?</span>
                    <svg class="faq-icon" width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="flex-shrink:0; transition:transform 0.3s;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="faq-body" style="display:none; padding:0 1.5rem 1.25rem; background:white;" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <p itemprop="text" style="color:var(--text-muted); margin:0;">Absolutely. WhatsApp is our preferred instant support channel. Reach us at +91 7501137266 for quick queries, demos, or to get started with ZYLO CRM.</p>
                </div>
            </div>

            <div style="border: 1px solid var(--border-color); border-radius: 12px; overflow: hidden;" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                <button onclick="toggleFaq(this)" aria-expanded="false"
                    style="width:100%; text-align:left; background:white; border:none; padding:1.25rem 1.5rem; font-size:1rem; font-weight:600; color:var(--primary-dark); cursor:pointer; display:flex; justify-content:space-between; align-items:center; gap:1rem;">
                    <span itemprop="name">Do you offer a free trial or demo?</span>
                    <svg class="faq-icon" width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="flex-shrink:0; transition:transform 0.3s;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <div class="faq-body" style="display:none; padding:0 1.5rem 1.25rem; background:white;" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                    <p itemprop="text" style="color:var(--text-muted); margin:0;">Yes! ZYLO CRM offers a free Starter plan with no credit card required. You can also request a live demo with one of our product specialists by reaching out via the form above or WhatsApp.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CTA Section -->
<section style="text-align: center; padding: 6rem 0; background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%); color: white;">
    <div class="container">
        <h2 style="font-size: 2.5rem; margin-bottom: 1.5rem; color: white;">Still Have Questions?</h2>
        <p style="max-width: 560px; margin: 0 auto 2.5rem; font-size: 1.15rem; color: rgba(255,255,255,0.85);">Our team is standing by. Whether you need a quick answer or a full product demo, we've got you covered.</p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="https://wa.me/917501137266" target="_blank" rel="noopener noreferrer"
                class="btn" style="padding: 1rem 2rem; font-size: 1rem; background: #25d366; color: white; border: none; display:flex; align-items:center; gap:0.5rem; border-radius:10px;">
                <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                Chat on WhatsApp
            </a>
            <a href="mailto:support@zylocrm.com"
                class="btn" style="padding: 1rem 2rem; font-size: 1rem; background: white; color: var(--primary); border: none; border-radius:10px;">
                Send an Email
            </a>
        </div>
    </div>
</section>

<script>
// Form validation & WhatsApp submission
function handleContactSubmit(e) {
    e.preventDefault();
    const form = e.target;
    let valid = true;

    const fields = [
        { id: 'contact-name',    errId: 'err-name',    msg: 'Please enter your full name.' },
        { id: 'contact-email',   errId: 'err-email',   msg: 'Please enter a valid email address.' },
        { id: 'contact-subject', errId: 'err-subject', msg: 'Please select a topic.' },
        { id: 'contact-message', errId: 'err-message', msg: 'Please enter your message.' }
    ];

    fields.forEach(function(f) {
        const el  = document.getElementById(f.id);
        const err = document.getElementById(f.errId);
        if (!el.value.trim() || (f.id === 'contact-email' && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(el.value))) {
            err.textContent = f.msg;
            err.style.display = 'block';
            el.style.borderColor = '#e53e3e';
            valid = false;
        } else {
            err.style.display = 'none';
            el.style.borderColor = '';
        }
    });

    if (!valid) return;

    const name    = document.getElementById('contact-name').value.trim();
    const email   = document.getElementById('contact-email').value.trim();
    const phone   = document.getElementById('contact-phone').value.trim();
    const subject = document.getElementById('contact-subject').value;
    const message = document.getElementById('contact-message').value.trim();

    const text = encodeURIComponent(
        'Hello ZYLO CRM,\n\n' +
        'Name: '    + name    + '\n' +
        'Email: '   + email   + '\n' +
        (phone ? 'Phone: ' + phone + '\n' : '') +
        'Topic: '   + subject + '\n\n' +
        'Message:\n' + message
    );

    // Show success state
    const successEl = document.getElementById('form-success');
    successEl.style.display = 'flex';
    const btn = document.getElementById('submit-btn');
    btn.textContent = '✓ Message Sent';
    btn.disabled = true;
    btn.style.opacity = '0.7';

    // Open WhatsApp
    window.open('https://wa.me/917501137266?text=' + text, '_blank');

    // Reset after 5 seconds
    setTimeout(function() {
        form.reset();
        successEl.style.display = 'none';
        btn.innerHTML = '<svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg> Send Message via WhatsApp';
        btn.disabled = false;
        btn.style.opacity = '';
    }, 5000);
}

// FAQ accordion
function toggleFaq(btn) {
    const body     = btn.nextElementSibling;
    const icon     = btn.querySelector('.faq-icon');
    const expanded = btn.getAttribute('aria-expanded') === 'true';

    // Close all others
    document.querySelectorAll('.faq-body').forEach(function(el) {
        el.style.display = 'none';
    });
    document.querySelectorAll('[onclick="toggleFaq(this)"]').forEach(function(el) {
        el.setAttribute('aria-expanded', 'false');
        el.querySelector('.faq-icon').style.transform = '';
    });

    if (!expanded) {
        body.style.display = 'block';
        btn.setAttribute('aria-expanded', 'true');
        icon.style.transform = 'rotate(180deg)';
    }
}
</script>

<?php include 'includes/footer.php'; ?>

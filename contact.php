<?php
$pageTitle = "Contact Us";
$pageDescription = "Contact ZYLO CRM for sales, support, onboarding, or partnership inquiries. We respond quickly through email, phone, and WhatsApp.";
$pageKeywords = "contact ZYLO, CRM support, sales inquiry, business software contact, WhatsApp support";
$pageSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'ContactPage',
    'name' => 'Contact ZYLO CRM',
    'url' => 'https://zylocrm.com/contact'
];
include 'includes/header.php';
?>

<!-- Page Header -->
<section class="bg-offwhite" style="padding-top: calc(var(--header-height) + 4rem); padding-bottom: 4rem;">
    <div class="container" style="text-align: center;">
        <h1>Contact Us</h1>
        <p style="font-size: 1.25rem; max-width: 700px; margin: 0 auto;">We'd love to hear from you. Drop us a line!</p>
    </div>
</section>

<!-- Contact Section -->
<section>
    <div class="container">
        <div class="contact-grid">
            <!-- Contact Form -->
            <div style="background: var(--bg-color); padding: 3rem; border-radius: 16px; box-shadow: var(--shadow-md); border: 1px solid var(--border-color);">
                <h2 style="margin-bottom: 2rem;">Send us a Message</h2>
                <form onsubmit="event.preventDefault(); let n=document.getElementById('name').value; let e=document.getElementById('email').value; let s=document.getElementById('subject').value; let m=document.getElementById('message').value; let text=encodeURIComponent('Name: '+n+'\nEmail: '+e+'\nSubject: '+s+'\nMessage: '+m); window.open('https://wa.me/917501137266?text='+text, '_blank');">
                    <div class="form-group">
                        <label class="form-label" for="name">Full Name</label>
                        <input type="text" id="name" class="form-control" placeholder="John Doe" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="email">Email Address</label>
                        <input type="email" id="email" class="form-control" placeholder="john@example.com" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="subject">Subject</label>
                        <select id="subject" class="form-control" required>
                            <option value="">Select a topic...</option>
                            <option value="sales">Sales Inquiry</option>
                            <option value="support">Technical Support</option>
                            <option value="billing">Billing Question</option>
                            <option value="partnership">Partnership Opportunity</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="message">Message</label>
                        <textarea id="message" class="form-control" placeholder="How can we help you?" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width: 100%;">Send Message</button>
                </form>
            </div>
            
            <!-- Contact Info & Map -->
            <div>
                <div class="contact-info" style="margin-bottom: 2rem;">
                    <h3 style="margin-bottom: 1.5rem;">Global Headquarters</h3>
                    <div class="info-item">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        <div>
                            <p style="margin-bottom: 0;"><strong>Email</strong></p>
                            <p style="margin-bottom: 0;">support@zylocrm.com</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <div>
                            <p style="margin-bottom: 0;"><strong>Phone (Toll Free)</strong></p>
                            <p style="margin-bottom: 0;">+91 7501137266</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        <div>
                            <p style="margin-bottom: 0;"><strong>Location</strong></p>
                            <p style="margin-bottom: 0;">Contai, East Midnapore<br>West Bengal, 721401, India</p>
                        </div>
                    </div>
                </div>

                <!-- <div class="contact-info" style="margin-bottom: 2rem; background: var(--primary-dark);">
                    <h3 style="margin-bottom: 1.5rem;">European Office</h3>
                    <div class="info-item">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                        <div>
                            <p style="margin-bottom: 0;"><strong>Location</strong></p>
                            <p style="margin-bottom: 0;">45 Innovation Square<br>London, UK EC1A 1BB</p>
                        </div>
                    </div>
                </div> -->
                
                <!-- Placeholder for Map -->
                <div style="width: 100%; height: 300px; background: #e5e7eb; border-radius: 16px; display: flex; align-items: center; justify-content: center; color: var(--text-muted);">
                    <div style="text-align: center;">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" style="width: 48px; height: 48px; margin: 0 auto 1rem;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path></svg>
                        <p>Interactive Map Integration</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section (New Content) -->
<section class="bg-offwhite">
    <div class="container" style="max-width: 800px;">
        <div class="section-title">
            <h2>Frequently Asked Questions</h2>
        </div>
        
        <div style="margin-bottom: 2rem; background: white; padding: 2rem; border-radius: 8px; box-shadow: var(--shadow-sm);">
            <h3 style="font-size: 1.2rem; color: var(--primary-dark);">What are your support hours?</h3>
            <p style="margin-top: 0.5rem; color: var(--text-muted);">Our standard support hours are Monday through Friday, 9:00 AM to 6:00 PM EST. Enterprise customers receive 24/7 priority support.</p>
        </div>
        
        <div style="margin-bottom: 2rem; background: white; padding: 2rem; border-radius: 8px; box-shadow: var(--shadow-sm);">
            <h3 style="font-size: 1.2rem; color: var(--primary-dark);">How fast can I expect a response?</h3>
            <p style="margin-top: 0.5rem; color: var(--text-muted);">We aim to respond to all inquiries within 24 hours. Urgent technical issues are typically addressed within 2 hours.</p>
        </div>
        
        <div style="margin-bottom: 2rem; background: white; padding: 2rem; border-radius: 8px; box-shadow: var(--shadow-sm);">
            <h3 style="font-size: 1.2rem; color: var(--primary-dark);">Do you offer onboarding assistance?</h3>
            <p style="margin-top: 0.5rem; color: var(--text-muted);">Yes! All new paid accounts receive a dedicated onboarding specialist to help import data and configure your account.</p>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

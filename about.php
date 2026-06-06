<?php
$pageTitle = "About Us";
$pageDescription = "Learn about ZYLO CRM, our mission, values, and the team building modern business management tools for accounts, inventory, and client success.";
$pageKeywords = "About ZYLO, CRM company, business software company, inventory software, accounting software";
$pageSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'AboutPage',
    'name' => 'About ZYLO CRM',
    'url' => 'https://zylocrm.com/about'
];
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="bg-offwhite" style="padding-top: calc(var(--header-height) + 4rem); padding-bottom: 5rem;">
    <div class="container">
        <div style="text-align: center; max-width: 800px; margin: 0 auto;">
            <h1 style="font-size: 3.5rem; color: var(--primary-dark); margin-bottom: 1.5rem; line-height: 1.2;">Empowering Businesses Through Innovation</h1>
            <p style="font-size: 1.35rem; line-height: 1.7; color: var(--text-muted);">ZYLO CRM is your all-in-one solution for accounts management, inventory control, and client relationship tools. Built for businesses that demand efficiency, scalability, and seamless integration.</p>
        </div>
    </div>
</section>

<!-- About ZYLO Section -->
<section>
    <div class="container">
        <div style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 4rem; align-items: center;">
            <div>
                <h2 style="color: var(--primary); font-size: 2.5rem; margin-bottom: 1.5rem;">Who We Are</h2>
                <p style="font-size: 1.1rem; line-height: 1.7; margin-bottom: 1.5rem;">At ZYLO, our mission is to empower businesses of all sizes with robust, intuitive, and seamlessly integrated CRM solutions. We believe that managing your accounts, inventory, and clients shouldn't be a hurdle, but a catalyst for growth.</p>
                <p style="font-size: 1.1rem; line-height: 1.7; margin-bottom: 1.5rem;">Founded on the principles of simplicity, efficiency, and customer-first approach, ZYLO has grown from a simple idea into a comprehensive platform trusted by forward-thinking companies worldwide. We are dedicated to continuous innovation, ensuring our tools always meet the evolving demands of the modern business landscape.</p>
                <p style="font-size: 1.1rem; line-height: 1.7;"><strong style="color: var(--primary);">Our vision?</strong> To be the central nervous system for millions of businesses globally by 2030.</p>
            </div>
            <div>
                <div style="position: relative; border-radius: 20px; overflow: hidden; box-shadow: var(--shadow-xl);">
                    <img src="assets/store/section-1.jpg" alt="Our Team" style="width: 100%; height: auto; display: block;">
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(0,0,0,0.7), transparent); padding: 2rem 1.5rem; color: white;">
                        <div style="display: flex; gap: 2rem; justify-content: space-around; flex-wrap: wrap;">
                            <div style="text-align: center;">
                                <div style="font-size: 2.5rem; font-weight: bold;">10,000+</div>
                                <div style="font-size: 0.85rem; opacity: 0.9;">Active Users</div>
                            </div>
                            <div style="text-align: center;">
                                <div style="font-size: 2.5rem; font-weight: bold;">40+</div>
                                <div style="font-size: 0.85rem; opacity: 0.9;">Countries</div>
                            </div>
                            <div style="text-align: center;">
                                <div style="font-size: 2.5rem; font-weight: bold;">99.9%</div>
                                <div style="font-size: 0.85rem; opacity: 0.9;">Uptime</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Mission & Vision -->
<section class="bg-offwhite" style="padding: 5rem 0;">
    <div class="container">
        <div class="section-title">
            <h2>Our Mission & Vision</h2>
            <p>What drives us forward every day.</p>
        </div>
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; margin-top: 3rem;">
            <div style="background: white; padding: 2.5rem; border-radius: 16px; box-shadow: var(--shadow-md); border: 1px solid var(--border-color); transition: all var(--transition-normal);">
                <div style="width: 70px; height: 70px; background: rgba(12, 79, 120, 0.1); border-radius: 14px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; color: var(--primary);">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 style="font-size: 1.5rem; color: var(--primary-dark); margin-bottom: 1rem;">Our Mission</h3>
                <p style="line-height: 1.7; color: var(--text-muted); margin-bottom: 0;">To empower businesses of all sizes with robust, intuitive, and seamlessly integrated CRM solutions. We believe that managing accounts, inventory, and clients should be a catalyst for growth, not a hurdle.</p>
            </div>
            
            <div style="background: white; padding: 2.5rem; border-radius: 16px; box-shadow: var(--shadow-md); border: 1px solid var(--border-color); transition: all var(--transition-normal);">
                <div style="width: 70px; height: 70px; background: rgba(12, 79, 120, 0.1); border-radius: 14px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; color: var(--primary);">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                </div>
                <h3 style="font-size: 1.5rem; color: var(--primary-dark); margin-bottom: 1rem;">Our Vision</h3>
                <p style="line-height: 1.7; color: var(--text-muted); margin-bottom: 0;">We envision a world where every entrepreneur and enterprise has access to affordable, enterprise-grade software that automates mundane tasks. By breaking down data silos, we aim to be the central nervous system for millions of businesses globally by 2030.</p>
            </div>
        </div>
    </div>
</section>

<!-- Core Values -->
<section>
    <div class="container">
        <div class="section-title">
            <h2>Our Core Values</h2>
            <p>The principles that guide every decision we make.</p>
        </div>
        
        <div class="grid-3" style="margin-top: 2rem;">
            <div class="card" style="text-align: center; transition: all var(--transition-normal); position: relative; overflow: hidden;">
                <div style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%); width: 60px; height: 60px; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; color: white; position: relative; z-index: 2;">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 style="color: var(--primary); margin-bottom: 1rem; position: relative; z-index: 2;">Innovation First</h3>
                <p style="position: relative; z-index: 2;">We are constantly pushing the boundaries of what CRM software can do, leveraging AI and automation to save our users time and drive efficiency.</p>
                <div style="position: absolute; bottom: 0; right: 0; width: 100px; height: 100px; background: var(--primary); border-radius: 50%; transform: translate(20px, 20px); opacity: 0.05;"></div>
            </div>
            
            <div class="card" style="text-align: center; transition: all var(--transition-normal); position: relative; overflow: hidden;">
                <div style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%); width: 60px; height: 60px; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; color: white; position: relative; z-index: 2;">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                </div>
                <h3 style="color: var(--primary); margin-bottom: 1rem; position: relative; z-index: 2;">Uncompromising Security</h3>
                <p style="position: relative; z-index: 2;">Your data is your business. We treat it with the highest level of security, compliance, and respect using bank-grade encryption and ISO 27001 standards.</p>
                <div style="position: absolute; bottom: 0; right: 0; width: 100px; height: 100px; background: var(--primary); border-radius: 50%; transform: translate(20px, 20px); opacity: 0.05;"></div>
            </div>
            
            <div class="card" style="text-align: center; transition: all var(--transition-normal); position: relative; overflow: hidden;">
                <div style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%); width: 60px; height: 60px; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; color: white; position: relative; z-index: 2;">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path></svg>
                </div>
                <h3 style="color: var(--primary); margin-bottom: 1rem; position: relative; z-index: 2;">Customer Obsession</h3>
                <p style="position: relative; z-index: 2;">We listen to our users. Every feature we build is a direct response to solving a real-world problem for our customers. Your success is our priority.</p>
                <div style="position: absolute; bottom: 0; right: 0; width: 100px; height: 100px; background: var(--primary); border-radius: 50%; transform: translate(20px, 20px); opacity: 0.05;"></div>
            </div>
        </div>
    </div>
</section>

<!-- Our Journey Timeline -->
<section class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>Our Journey</h2>
            <p>From a simple idea to global impact.</p>
        </div>
        
        <div style="max-width: 900px; margin: 0 auto; position: relative;">
            <div style="position: absolute; left: 50%; transform: translateX(-50%); width: 4px; background: var(--primary); border-radius: 2px; top: 0; bottom: 0;"></div>
            
            <div style="position: relative; padding: 2rem 0;">
                <div style="position: absolute; left: 50%; transform: translateX(-50%); width: 30px; height: 30px; background: var(--primary); border-radius: 50%; border: 4px solid white; box-shadow: var(--shadow-md); z-index: 2;"></div>
                <div style="flex: 1; padding-left: calc(50% + 40px);">
                    <h3 style="color: var(--primary-dark); font-size: 1.5rem; margin-bottom: 0.75rem;">2018 - The Idea</h3>
                    <p style="color: var(--text-muted); line-height: 1.7;">Frustrated by clunky, outdated software, our founders decided to build a better way to manage small businesses. ZYLO was born from a simple idea: businesses deserve better tools.</p>
                </div>
            </div>
            
            <div style="position: relative; padding: 2rem 0;">
                <div style="position: absolute; left: 50%; transform: translateX(-50%); width: 30px; height: 30px; background: var(--primary); border-radius: 50%; border: 4px solid white; box-shadow: var(--shadow-md); z-index: 2;"></div>
                <div style="flex: 1; padding-right: calc(50% + 40px);">
                    <h3 style="color: var(--primary-dark); font-size: 1.5rem; margin-bottom: 0.75rem;">2020 - First Launch</h3>
                    <p style="color: var(--text-muted); line-height: 1.7;">ZYLO 1.0 was released focusing strictly on invoicing and basic accounts. We hit our first 1,000 active users within months, proving there was real demand for our approach.</p>
                </div>
            </div>
            
            <div style="position: relative; padding: 2rem 0;">
                <div style="position: absolute; left: 50%; transform: translateX(-50%); width: 30px; height: 30px; background: var(--primary); border-radius: 50%; border: 4px solid white; box-shadow: var(--shadow-md); z-index: 2;"></div>
                <div style="flex: 1; padding-left: calc(50% + 40px);">
                    <h3 style="color: var(--primary-dark); font-size: 1.5rem; margin-bottom: 0.75rem;">2023 - The CRM Expansion</h3>
                    <p style="color: var(--text-muted); line-height: 1.7;">Based on overwhelming feedback, we launched the Client Management and Inventory modules, transforming ZYLO into a true all-in-one platform for modern businesses.</p>
                </div>
            </div>
            
            <div style="position: relative; padding: 2rem 0;">
                <div style="position: absolute; left: 50%; transform: translateX(-50%); width: 30px; height: 30px; background: var(--primary); border-radius: 50%; border: 4px solid white; box-shadow: var(--shadow-md); z-index: 2;"></div>
                <div style="flex: 1; padding-right: calc(50% + 40px);">
                    <h3 style="color: var(--primary-dark); font-size: 1.5rem; margin-bottom: 0.75rem;">Today - Global Reach</h3>
                    <p style="color: var(--text-muted); line-height: 1.7;">Now serving over 10,000 businesses across 40 countries, processing billions in invoices annually. We're just getting started.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Leadership Team -->
<section>
    <div class="container">
        <div class="section-title">
            <h2>Meet the Leadership</h2>
            <p>The experienced team driving the vision behind ZYLO.</p>
        </div>
        
        <div class="grid-3" style="margin-top: 3rem;">
            <div class="card" style="text-align: center; padding: 2.5rem; transition: all var(--transition-normal);">
                <div style="width: 120px; height: 120px; border-radius: 50%; overflow: hidden; margin: 0 auto 1.5rem; box-shadow: var(--shadow-md);">
                    <img src="assets/store/avatar-sarah.jpg" alt="Michael Chang" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <h3 style="font-size: 1.35rem; color: var(--primary-dark); margin-bottom: 0.25rem;">Michael Chang</h3>
                <p style="color: var(--primary); font-weight: 600; margin-bottom: 1rem;">CEO & Founder</p>
                <p style="font-size: 0.95rem; line-height: 1.6; color: var(--text-muted);">Former VP of Engineering at TechGlobal, Michael brings 15 years of enterprise software experience. His vision shapes ZYLO's direction.</p>
            </div>
            
            <div class="card" style="text-align: center; padding: 2.5rem; transition: all var(--transition-normal);">
                <div style="width: 120px; height: 120px; border-radius: 50%; overflow: hidden; margin: 0 auto 1.5rem; box-shadow: var(--shadow-md);">
                    <img src="assets/store/avatar-david.jpg" alt="Sarah Ramirez" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <h3 style="font-size: 1.35rem; color: var(--primary-dark); margin-bottom: 0.25rem;">Sarah Ramirez</h3>
                <p style="color: var(--primary); font-weight: 600; margin-bottom: 1rem;">Chief Technology Officer</p>
                <p style="font-size: 0.95rem; line-height: 1.6; color: var(--text-muted);">Sarah leads our engineering teams, ensuring ZYLO remains the fastest and most secure platform available in the market.</p>
            </div>
            
            <div class="card" style="text-align: center; padding: 2.5rem; transition: all var(--transition-normal);">
                <div style="width: 120px; height: 120px; border-radius: 50%; overflow: hidden; margin: 0 auto 1.5rem; box-shadow: var(--shadow-md);">
                    <img src="assets/store/avatar-emily.jpg" alt="James Wilson" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <h3 style="font-size: 1.35rem; color: var(--primary-dark); margin-bottom: 0.25rem;">James Wilson</h3>
                <p style="color: var(--primary); font-weight: 600; margin-bottom: 1rem;">Chief Operating Officer</p>
                <p style="font-size: 0.95rem; line-height: 1.6; color: var(--text-muted);">With a background in global logistics, James oversees our customer success and daily operations, ensuring smooth performance.</p>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%); color: white; padding: 4rem 0;">
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 2rem; text-align: center;">
            <div>
                <div style="font-size: 3.5rem; font-weight: 800; margin-bottom: 0.75rem;">10,000+</div>
                <p style="opacity: 0.9; font-size: 1.1rem; margin: 0;">Active Users</p>
            </div>
            <div>
                <div style="font-size: 3.5rem; font-weight: 800; margin-bottom: 0.75rem;">40+</div>
                <p style="opacity: 0.9; font-size: 1.1rem; margin: 0;">Countries</p>
            </div>
            <div>
                <div style="font-size: 3.5rem; font-weight: 800; margin-bottom: 0.75rem;">99.9%</div>
                <p style="opacity: 0.9; font-size: 1.1rem; margin: 0;">Uptime Guaranteed</p>
            </div>
            <div>
                <div style="font-size: 3.5rem; font-weight: 800; margin-bottom: 0.75rem;">24/7</div>
                <p style="opacity: 0.9; font-size: 1.1rem; margin: 0;">Customer Support</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section style="text-align: center; padding: 6rem 0;">
    <div class="container">
        <h2 style="font-size: 2.5rem; color: var(--primary-dark); margin-bottom: 1.5rem;">Ready to Transform Your Business?</h2>
        <p style="max-width: 600px; margin: 0 auto 2.5rem; font-size: 1.15rem; color: var(--text-muted);">Join thousands of businesses that trust ZYLO to manage their daily operations. Experience the power of a unified platform for accounts, inventory, and client management.</p>
        <a href="contact" class="btn btn-primary" style="padding: 1.25rem 3rem; font-size: 1.25rem;">Get Started Today</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

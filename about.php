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

<!-- Page Header -->
<section class="bg-offwhite" style="padding-top: calc(var(--header-height) + 4rem); padding-bottom: 4rem;">
    <div class="container" style="text-align: center;">
        <h1>About ZYLO</h1>
        <p style="font-size: 1.25rem; max-width: 700px; margin: 0 auto;">Innovating the way you manage your business.</p>
    </div>
</section>

<!-- Mission & Vision (Expanded) -->
<section>
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center; margin-bottom: 6rem;">
            <div>
                <h2 style="color: var(--primary);">Our Mission</h2>
                <p>At ZYLO, our mission is to empower businesses of all sizes with robust, intuitive, and seamlessly integrated CRM solutions. We believe that managing your accounts, inventory, and clients shouldn't be a hurdle, but a catalyst for growth.</p>
                <p>Founded on the principles of simplicity and efficiency, ZYLO has grown from a simple idea into a comprehensive platform trusted by forward-thinking companies. We are dedicated to continuous innovation, ensuring our tools always meet the evolving demands of the modern business landscape.</p>
                
                <h2 style="color: var(--primary); margin-top: 2rem;">Our Vision</h2>
                <p>We envision a world where every entrepreneur and enterprise has access to affordable, enterprise-grade software that automates mundane tasks. By breaking down data silos, we aim to be the central nervous system for millions of businesses globally by 2030.</p>
            </div>
            <div>
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Team collaborating" style="border-radius: 16px; box-shadow: var(--shadow-lg);">
            </div>
        </div>
    </div>
</section>

<!-- Core Values (New Content) -->
<section class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>Our Core Values</h2>
            <p>The principles that guide every decision we make.</p>
        </div>
        <div class="grid-3">
            <div class="card" style="text-align: center; align-items: center;">
                <div class="card-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg></div>
                <h3>Innovation First</h3>
                <p>We are constantly pushing the boundaries of what CRM software can do, leveraging AI and automation to save our users time.</p>
            </div>
            <div class="card" style="text-align: center; align-items: center;">
                <div class="card-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg></div>
                <h3>Uncompromising Security</h3>
                <p>Your data is your business. We treat it with the highest level of security, compliance, and respect.</p>
            </div>
            <div class="card" style="text-align: center; align-items: center;">
                <div class="card-icon"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path></svg></div>
                <h3>Customer Obsession</h3>
                <p>We listen to our users. Every feature we build is a direct response to solving a real-world problem for our customers.</p>
            </div>
        </div>
    </div>
</section>

<!-- Company Timeline (New Content) -->
<section>
    <div class="container" style="max-width: 800px;">
        <div class="section-title">
            <h2>Our Journey</h2>
        </div>
        <div style="border-left: 3px solid var(--primary); padding-left: 2rem; margin-left: 1rem;">
            <div style="position: relative; margin-bottom: 3rem;">
                <div style="position: absolute; left: -2.75rem; top: 0; width: 20px; height: 20px; background: var(--primary); border-radius: 50%; border: 4px solid white;"></div>
                <h3 style="color: var(--primary-dark); margin-bottom: 0.5rem;">2018 - The Idea</h3>
                <p>Frustrated by clunky, outdated software, our founders decide to build a better way to manage small businesses.</p>
            </div>
            <div style="position: relative; margin-bottom: 3rem;">
                <div style="position: absolute; left: -2.75rem; top: 0; width: 20px; height: 20px; background: var(--primary); border-radius: 50%; border: 4px solid white;"></div>
                <h3 style="color: var(--primary-dark); margin-bottom: 0.5rem;">2020 - First Launch</h3>
                <p>ZYLO 1.0 is released focusing strictly on invoicing and basic accounts. We hit our first 1,000 active users within months.</p>
            </div>
            <div style="position: relative; margin-bottom: 3rem;">
                <div style="position: absolute; left: -2.75rem; top: 0; width: 20px; height: 20px; background: var(--primary); border-radius: 50%; border: 4px solid white;"></div>
                <h3 style="color: var(--primary-dark); margin-bottom: 0.5rem;">2023 - The CRM Expansion</h3>
                <p>Based on overwhelming feedback, we launch the Client Management and Inventory modules, transforming into a true all-in-one platform.</p>
            </div>
            <div style="position: relative;">
                <div style="position: absolute; left: -2.75rem; top: 0; width: 20px; height: 20px; background: var(--primary); border-radius: 50%; border: 4px solid white;"></div>
                <h3 style="color: var(--primary-dark); margin-bottom: 0.5rem;">Today - Global Reach</h3>
                <p>Now serving over 10,000 businesses across 40 countries, processing billions in invoices annually.</p>
            </div>
        </div>
    </div>
</section>

<!-- Meet the Team (New Content) -->
<section class="bg-offwhite">
    <div class="container">
        <div class="section-title">
            <h2>Meet the Leadership</h2>
            <p>The people driving the vision behind ZYLO.</p>
        </div>
        <div class="grid-3" style="text-align: center;">
            <div class="card" style="padding: 2rem;">
                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="CEO" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; margin: 0 auto 1.5rem;">
                <h3>Michael Chang</h3>
                <p style="color: var(--primary); font-weight: 600; margin-bottom: 1rem;">CEO & Founder</p>
                <p style="font-size: 0.9rem;">Former VP of Engineering at TechGlobal, Michael brings 15 years of enterprise software experience.</p>
            </div>
            <div class="card" style="padding: 2rem;">
                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="CTO" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; margin: 0 auto 1.5rem;">
                <h3>Sarah Ramirez</h3>
                <p style="color: var(--primary); font-weight: 600; margin-bottom: 1rem;">Chief Technology Officer</p>
                <p style="font-size: 0.9rem;">Sarah leads our engineering teams, ensuring ZYLO remains the fastest and most secure platform available.</p>
            </div>
            <div class="card" style="padding: 2rem;">
                <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="COO" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; margin: 0 auto 1.5rem;">
                <h3>James Wilson</h3>
                <p style="color: var(--primary); font-weight: 600; margin-bottom: 1rem;">Chief Operating Officer</p>
                <p style="font-size: 0.9rem;">With a background in global logistics, James oversees our customer success and daily operations.</p>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

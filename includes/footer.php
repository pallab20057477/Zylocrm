    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <h2 style="color: white; margin: 0;">ZYLO</h2>
                    <p>Empowering businesses with modern CRM solutions. Simplify accounts, inventory, and client
                        management.</p>
                </div>

                <div class="footer-links">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="about">About Us</a></li>
                        <li><a href="services">Services</a></li>
                        <li><a href="contact">Contact Us</a></li>
                    </ul>
                </div>

                <div class="footer-links">
                    <h4>Legal</h4>
                    <ul>
                        <li><a href="privacy-policy">Privacy Policy</a></li>
                        <li><a href="terms">Terms & Conditions</a></li>
                        <li><a href="cancellation">Cancellation Policy</a></li>
                        <li><a href="data-safety">Data Safety</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                &copy;
                <script>document.write(new Date().getFullYear())</script> ZYLO CRM. All rights reserved.
            </div>
        </div>
    </footer>

    <!-- FAQ Toggle Function -->
    <script>
    function toggleFaq(btn) {
        const body = btn.nextElementSibling;
        const icon = btn.querySelector('.faq-icon');
        const expanded = btn.getAttribute('aria-expanded') === 'true';
        
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

    <script src="main.js"></script>
</body>

</html>

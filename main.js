document.addEventListener('DOMContentLoaded', () => {
    // Mobile Navigation Toggle
    const hamburger = document.querySelector('.hamburger');
    const navMenu = document.querySelector('.nav-menu');

    if (hamburger && navMenu) {
        hamburger.addEventListener('click', () => {
            const isActive = hamburger.classList.toggle('active');
            navMenu.classList.toggle('active');
            hamburger.setAttribute('aria-expanded', String(isActive));
        });


        // Dropdown logic for mobile
        const dropbtn = document.querySelector('.dropbtn');
        const dropdown = document.querySelector('.dropdown');
        if (dropbtn && dropdown) {
            dropbtn.addEventListener('click', (e) => {
                if (window.innerWidth <= 992) {
                    e.preventDefault();
                    const isActive = dropdown.classList.toggle('active');
                    dropbtn.setAttribute('aria-expanded', String(isActive));
                }
            });
        }


        // Close menu when a link is clicked (excluding the dropdown button itself)
        document.querySelectorAll('.nav-menu a:not(.dropbtn)').forEach(n => n.addEventListener('click', () => {
            hamburger.classList.remove('active');
            navMenu.classList.remove('active');
            if(dropdown) dropdown.classList.remove('active');
        }));
    }

    // Close mobile menu on resize to desktop
    window.addEventListener('resize', () => {
        if (window.innerWidth > 768) {
            if (hamburger && navMenu) {
                hamburger.classList.remove('active');
                navMenu.classList.remove('active');
                hamburger.setAttribute('aria-expanded', 'false');
            }
        }
    });

    // Set active link based on current URL
    const currentPath = window.location.pathname;

    // Keep aria-expanded in sync for accessibility
    if (hamburger && navMenu) {
        const updateAria = () => {
            const isActive = navMenu.classList.contains('active');
            hamburger.setAttribute('aria-expanded', String(isActive));
        };
        updateAria();
    }


    const navLinks = document.querySelectorAll('.nav-menu a');
    
    navLinks.forEach(link => {
        const linkPath = link.getAttribute('href');
        // Match path or handle root/index
        if (currentPath.endsWith(linkPath) || (currentPath.endsWith('/') && linkPath === 'index.html')) {
            link.classList.add('active');
        }
    });

    // Simple Header scroll effect
    const header = document.querySelector('header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.style.boxShadow = '0 4px 6px -1px rgba(0, 0, 0, 0.1)';
        } else {
            header.style.boxShadow = 'none';
        }
    });
});

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Awesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <style data-purpose="custom-variables">
        :root {
            --footer-bg: #1e293b;
            /* Deep Navy/Slate background */
            --footer-text: #94a3b8;
            /* Muted text color */
            --footer-heading: #ffffff;
            --accent-green: #22c55e;
            /* Hover color from branding */
            --bottom-bar-border: rgba(255, 255, 255, 0.1);
            --social-bg: rgba(255, 255, 255, 0.1);
        }
    </style>
    <style data-purpose="layout-and-typography">
        body {
            font-family: 'Inter', sans-serif;
        }

        .main-footer {
            background-color: var(--footer-bg);
            color: var(--footer-text);
            padding-top: 80px;
            padding-bottom: 60px;
        }

        .footer-heading {
            color: var(--footer-heading);
            font-size: 1.125rem;
            font-weight: 700;
            margin-bottom: 25px;
        }

        .footer-links-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-links-list li {
            margin-bottom: 12px;
        }

        .footer-links-list a {
            color: var(--footer-text);
            text-decoration: none;
            transition: color 0.3s ease;
            font-size: 0.95rem;
        }

        .footer-links-list a:hover {
            color: var(--accent-green);
        }

        .contact-info-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
            font-size: 0.95rem;
        }

        .contact-info-item i {
            color: #3b82f6;
            /* Blue icon color as seen in reference */
            margin-right: 12px;
            margin-top: 4px;
            font-size: 1rem;
        }

        .social-icons-wrapper {
            display: flex;
            gap: 12px;
            margin-top: 25px;
        }

        .social-icon-btn {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background-color: var(--social-bg);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            text-decoration: none;
            transition: background-color 0.3s ease, transform 0.2s ease;
            font-size: 0.9rem;
        }

        .social-icon-btn:hover {
            background-color: var(--accent-green);
            color: white;
            transform: translateY(-3px);
        }

        /* Bottom Copyright Bar */
        .footer-bottom-bar {
            background-color: #ffffff;
            border-top: 1px solid #e2e8f0;
            padding: 20px 0;
        }

        .copyright-text {
            color: #64748b;
            font-size: 0.9rem;
            margin: 0;
        }

        .copyright-text a {
            color: #3b82f6;
            text-decoration: none;
        }

        .payment-methods-img {
            max-height: 24px;
            width: auto;
            object-fit: contain;
        }

        .payment-methods-list {
            display: flex;
            align-items: center;
            gap: 15px;
            justify-content: flex-end;
        }
    </style>

<!-- Main Footer Container -->
<footer class="main-footer" id="main-footer-section">
        <div class="container">
            <div class="row gy-4">
                <!-- BEGIN: Quick Links Column -->
                <div class="col-lg-2 col-md-4" data-purpose="footer-column-links">
                    <h5 class="footer-heading">Quick Links</h5>
                    <ul class="footer-links-list">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Terms Of Use</a></li>
                    </ul>
                </div>
                <!-- END: Quick Links Column -->
                <!-- BEGIN: Functional Area Column -->
                <div class="col-lg-3 col-md-4" data-purpose="footer-column-functional">
                    <h5 class="footer-heading">Jobs By Functional Area</h5>
                    <ul class="footer-links-list">
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Graphic Design</a></li>
                        <li><a href="#">Business Management</a></li>
                        <li><a href="#">Software &amp; Web Development</a></li>
                        <li><a href="#">Admin</a></li>
                        <li><a href="#">Database Administration</a></li>
                        <li><a href="#">Advertising</a></li>
                        <li><a href="#">Web Developer</a></li>
                    </ul>
                </div>
                <!-- END: Functional Area Column -->
                <!-- BEGIN: Industry Column -->
                <div class="col-lg-3 col-md-4" data-purpose="footer-column-industry">
                    <h5 class="footer-heading">Jobs By Industry</h5>
                    <ul class="footer-links-list">
                        <li><a href="#">Courier/Logistics</a></li>
                        <li><a href="#">Travel/Tourism/Transportation</a></li>
                        <li><a href="#">Fashion</a></li>
                        <li><a href="#">Electronics</a></li>
                        <li><a href="#">Automobile</a></li>
                        <li><a href="#">Advertising/PR</a></li>
                        <li><a href="#">Health &amp; Fitness</a></li>
                        <li><a href="#">Information Technology</a></li>
                    </ul>
                </div>
                <!-- END: Industry Column -->
                <!-- BEGIN: Contact Column -->
                <div class="col-lg-4 col-md-12" data-purpose="footer-column-contact">
                    <h5 class="footer-heading">Contact Us</h5>
                    <div class="contact-info-container">
                        <div class="contact-info-item">
                            <i class="fa-solid fa-location-dot"></i>
                            <span>651 N Broad St, Suite 201, Middletown, Zip Code 19709, New Castle, Delaware,
                                USA.</span>
                        </div>
                        <div class="contact-info-item">
                            <i class="fa-solid fa-envelope"></i>
                            <span>info@jobsportal.com</span>
                        </div>
                        <div class="contact-info-item">
                            <i class="fa-solid fa-phone"></i>
                            <span>+1 (302) 555-0123</span>
                        </div>
                    </div>
                    <!-- Social Media Icons -->
                    <div class="social-icons-wrapper">
                        <a aria-label="Facebook" class="social-icon-btn" href="#"><i
                                class="fa-brands fa-facebook-f"></i></a>
                        <a aria-label="X (Twitter)" class="social-icon-btn" href="#"><i
                                class="fa-brands fa-x-twitter"></i></a>
                        <a aria-label="Instagram" class="social-icon-btn" href="#"><i
                                class="fa-brands fa-instagram"></i></a>
                        <a aria-label="LinkedIn" class="social-icon-btn" href="#"><i
                                class="fa-brands fa-linkedin-in"></i></a>
                        <a aria-label="YouTube" class="social-icon-btn" href="#"><i
                                class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
                <!-- END: Contact Column -->
            </div>
        </div>
    </footer>
    <!-- END: MainFooter -->
    <!-- BEGIN: CopyrightBar -->
    <section class="footer-bottom-bar" id="copyright-bar">
        <div class="container">
            <div class="row align-items-center">
                <!-- Copyright Text -->
                <div class="col-12 text-center mb-0">
                    <p class="copyright-text">
                        Copyright © 2025 CareerConnect. All rights reserved. Design by: codewithboys
                    </p>
                </div>
                <!-- Payment Logos -->
            </div>
        </div>
    </section>
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Job Portal Mobile Footer</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <!-- Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <style>
        :root {
            --primary-color: #ec5b13;
            --bg-dark: #1a1d21;
            --bg-darker: #141619;
            --text-muted: #9ca3af;
            --border-color: #2d3136;
        }

        body {
            font-family: 'Public Sans', sans-serif;
            background-color: #f8f6f6;
            margin: 0;
            padding: 0;
        }

        .job-portal-footer {
            background-color: var(--bg-dark);
            color: #ffffff;
            padding-top: 3rem;
            padding-bottom: 1.5rem;
        }

        .footer-heading {
            color: #ffffff;
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 0.5rem;
        }

        .footer-heading::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 2px;
            background-color: var(--primary-color);
        }

        @media (max-width: 767.98px) {
            .footer-heading {
                text-align: center;
            }

            .footer-heading::after {
                left: 50%;
                transform: translateX(-50%);
            }

            .footer-links,
            .contact-info {
                text-align: center;
            }
        }

        .footer-links {
            list-style: none;
            padding: 0;
            margin-bottom: 2rem;
        }

        .footer-links li {
            margin-bottom: 0.75rem;
        }

        .footer-links a {
            color: var(--text-muted);
            text-decoration: none;
            transition: color 0.2s ease;
            font-size: 0.95rem;
            display: block;
            padding: 0.25rem 0;
        }

        .footer-links a:hover {
            color: var(--primary-color);
        }

        .contact-info {
            color: var(--text-muted);
            font-size: 0.95rem;
            margin-bottom: 2rem;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }

        @media (max-width: 767.98px) {
            .contact-item {
                justify-content: center;
            }
        }

        .contact-item .material-symbols-outlined {
            color: var(--primary-color);
            margin-right: 10px;
            font-size: 20px;
        }

        .social-links {
            display: flex;
            gap: 12px;
            margin-bottom: 2rem;
        }

        @media (max-width: 767.98px) {
            .social-links {
                justify-content: center;
            }
        }

        .social-icon {
            width: 36px;
            height: 36px;
            background-color: var(--border-color);
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: background-color 0.2s ease;
        }

        .social-icon:hover {
            background-color: var(--primary-color);
            color: white;
        }

        .footer-bottom {
            background-color: var(--bg-darker);
            padding: 1.5rem 0;
            border-top: 1px solid var(--border-color);
            margin-top: 2rem;
        }

        .payment-logos {
            display: flex;
            gap: 15px;
            align-items: center;
            flex-wrap: wrap;
        }

        @media (max-width: 767.98px) {
            .payment-logos {
                justify-content: center;
                margin-top: 1rem;
            }

            .copyright-text {
                text-align: center;
            }
        }

        .payment-logos img {
            height: 24px;
            opacity: 0.7;
            filter: grayscale(100%) brightness(200%);
        }

        .copyright-text {
            color: var(--text-muted);
            font-size: 0.85rem;
            margin: 0;
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body>
    <!-- Main Footer Container -->
    <footer class="job-portal-footer">
        <div class="container">
            <div class="row">
                <!-- Quick Links Section -->
                <div class="col-12 col-md-3">
                    <h5 class="footer-heading">Quick Links</h5>
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Browse Jobs</a></li>
                        <li><a href="#">Post a Job</a></li>
                        <li><a href="#">Success Stories</a></li>
                        <li><a href="#">Pricing Plans</a></li>
                    </ul>
                </div>
                <!-- Functional Area Section -->
                <div class="col-12 col-md-3">
                    <h5 class="footer-heading">Jobs By Functional Area</h5>
                    <ul class="footer-links">
                        <li><a href="#">Information Technology</a></li>
                        <li><a href="#">Sales &amp; Marketing</a></li>
                        <li><a href="#">Customer Service</a></li>
                        <li><a href="#">Finance &amp; Accounting</a></li>
                        <li><a href="#">Human Resources</a></li>
                        <li><a href="#">Education &amp; Training</a></li>
                    </ul>
                </div>
                <!-- Industry Section -->
                <div class="col-12 col-md-3">
                    <h5 class="footer-heading">Jobs By Industry</h5>
                    <ul class="footer-links">
                        <li><a href="#">Software Development</a></li>
                        <li><a href="#">Healthcare</a></li>
                        <li><a href="#">Manufacturing</a></li>
                        <li><a href="#">Banking &amp; Finance</a></li>
                        <li><a href="#">Retail &amp; eCommerce</a></li>
                        <li><a href="#">Telecommunications</a></li>
                    </ul>
                </div>
                <!-- Contact Section -->
                <div class="col-12 col-md-3">
                    <h5 class="footer-heading">Contact Us</h5>
                    <div class="contact-info">
                        <div class="contact-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>123 Job Tower, Career Ave, NY 10001</span>
                        </div>
                        <div class="contact-item">
                            <span class="material-symbols-outlined">mail</span>
                            <span>support@jobportal.com</span>
                        </div>
                        <div class="contact-item">
                            <span class="material-symbols-outlined">call</span>
                            <span>+1 (555) 000-1234</span>
                        </div>
                    </div>
                    <div class="social-links">
                        <a class="social-icon" href="#">
                            <svg fill="currentColor" height="18" viewbox="0 0 24 24" width="18">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z">
                                </path>
                            </svg>
                        </a>
                        <a class="social-icon" href="#">
                            <svg fill="currentColor" height="18" viewbox="0 0 24 24" width="18">
                                <path
                                    d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.84 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z">
                                </path>
                            </svg>
                        </a>
                        <a class="social-icon" href="#">
                            <svg fill="currentColor" height="18" viewbox="0 0 24 24" width="18">
                                <path
                                    d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Secondary Bottom Bar -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 text-center">
                        <p class="copyright-text">© 2024 JobPortal. All rights reserved. Built with pride.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
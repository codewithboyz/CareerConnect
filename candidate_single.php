<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elliot Scott - Candidate Profile</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        :root {
            --color-primary: #0d6efd !important;
            --color-primary-soft: #e7f1ff !important;
            --color-success: #20c997 !important;
            --color-bg-main: #f4f7fa !important;
            --color-text-main: #1a1f36 !important;
            --color-text-muted: #6c757d !important;
            --color-border: #e9ecef !important;
            --shadow-soft: 0 4px 20px rgba(0, 0, 0, 0.03) !important;
            --radius-md: 12px !important;
            --radius-lg: 16px !important;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--color-bg-main)!important;
            color: var(--color-text-main)!important;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-weight: 600;
        }

        a {
            text-decoration: none;
        }

        .text-muted-custom {
            color: var(--color-text-muted)!important;
            font-size: 0.9rem;
        }

        /* Navigation */
        .navbar {
            background: #fff;
            border-bottom: 1px solid var(--color-border)!important;
        }

        .nav-link {
            font-weight: 500;
            font-size: 0.95rem;
            color: #333 !important;
        }

        /* Hero Banner */
        .hero-banner {
            height: 250px;
            background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=2000') center/cover no-repeat !important;
        }

        /* Profile Overlap Card */
        .profile-overlap-container {
            margin-top: -80px;
            position: relative;
            z-index: 10;
        }

        .profile-avatar-box {
            position: absolute;
            top: -40px;
            left: 30px;
            width: 100px;
            height: 100px;
            border-radius: 20px;
            border: 4px solid #fff;
            background: #fff;
            overflow: hidden;
            box-shadow: var(--shadow-soft)!important;
        }

        .profile-avatar-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-card-content {
            padding-left: 150px;
            /* Space for avatar */
        }

        @media (max-width: 768px) {
            .profile-avatar-box {
                position: relative;
                top: -20px;
                left: 0;
                margin: 0 auto 20px;
            }

            .profile-card-content {
                padding-left: 0;
                text-align: center;
            }

            .profile-header-actions {
                justify-content: center;
                margin-top: 3px;
            }
        }

        /* Cards */
        .ui-card {
            background: #fff;
            border-radius: var(--radius-lg)!important;
            border: none;
            box-shadow: var(--shadow-soft)!important;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .card-header-title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.25rem;
        }

        .card-header-title h3 {
            font-size: 1.15rem;
            margin: 0;
        }

        .card-header-title span {
            font-size: 0.85rem;
            color: var(--color-text-muted)!important;
        }

        /* Badges */
        .badge-status {
            background: #dcfce7!important;
            color: #166534!important;
            font-weight: 600;
            padding: 4px 10px;
            border-radius: 4px;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .badge-skill {
            background: #f8f9fa!important;
            border: 1px solid var(--color-border)!important;
            color: #333!important;
            font-weight: 500;
            padding: 6px 14px;
            border-radius: 50px;
            font-size: 0.85rem;
            display: inline-block;
            margin: 0 6px 8px 0;
        }

        .badge-soft-primary {
            background: var(--color-primary-soft)!important;
            color: var(--color-primary)!important;
        }

        /* Experience Timeline */
        .timeline {
            border-left: 2px solid var(--color-border)!important;
            padding-left: 1.5rem;
            margin-left: 0.5rem;
        }

        .timeline-item {
            position: relative;
            margin-bottom: 2rem;
        }

        .timeline-item:last-child {
            margin-bottom: 0;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -1.5rem;
            /* Matches padding-left + border width */
            top: 5px;
            transform: translateX(-50%);
            width: 14px;
            height: 14px;
            background: #fff;
            border: 2px solid var(--color-border)!important;
            border-radius: 50%;
            transition: all 0.2s ease;
        }

        .timeline-item:hover::before {
            border-color: var(--color-primary)!important;
            background: var(--color-primary-soft)!important;
        }

        /* Case Studies */
        .case-study-img {
            width: 100%;
            height: 140px;
            object-fit: cover;
            border-radius: var(--radius-md)!important;
            margin-bottom: 1rem;
        }

        /* Details List (Right Sidebar) */
        .details-list li {
            display: flex;
            justify-content: space-between;
            padding: 0.75rem 0;
            border-bottom: 1px solid var(--color-border)!important;
            font-size: 0.9rem;
        }

        .details-list li:last-child {
            border-bottom: none;
        }

        .details-list .label {
            color: var(--color-text-muted)!important;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .details-list .value {
            font-weight: 500;
        }

        /* Icon Box */
        .icon-box {
            width: 36px;
            height: 36px;
            background: var(--color-primary-soft)!important;
            color: var(--color-primary)!important;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Footer */
        footer {
            background: #1c2331!important;
            color: #fff;
            padding-top: 3rem;
        }

        .footer-heading {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            color: #fff;
        }

        .footer-link {
            color: #a0aec0!important;
            text-decoration: none;
            font-size: 0.9rem;
            margin-bottom: 0.75rem;
            display: block;
            transition: color 0.2s;
        }

        .footer-link:hover {
            color: #fff;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1)!important;
            padding: 1.5rem 0;
            margin-top: 2rem;
            font-size: 0.85rem;
            color: #a0aec0!important;
        }
    </style>
</head>

<body>

    <?php include "landing/nav.php" ?>

    <header class="hero-banner"></header>

    <div class="container profile-overlap-container mb-4">
        <div class="ui-card position-relative p-4">

            <div class="profile-avatar-box">
                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&q=80&w=300"
                    alt="Elliot Scott">
            </div>

            <div
                class="profile-card-content d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">

                <div>
                    <span class="badge-status mb-2 d-inline-block">OPEN TO FRACTIONAL / REMOTE ROLES</span>
                    <div class="d-flex align-items-center gap-2 mb-1">
                        <h1 class="h3 fw-bold mb-0">Elliot Scott</h1>
                        <button class="btn btn-light btn-sm text-muted rounded-circle"><i
                                class="bi bi-bookmark"></i></button>
                    </div>
                    <p class="text-muted-custom mb-3">Lead Product Designer • Currently at Northwind Commerce</p>

                    <div class="d-flex flex-wrap gap-3 text-muted-custom mb-3 small">
                        <span><i class="bi bi-geo-alt me-1"></i> Seattle, USA - Remote Friendly</span>
                        <span><i class="bi bi-briefcase me-1"></i> 9 yrs experience</span>
                        <span><i class="bi bi-translate me-1"></i> English, Spanish</span>
                    </div>

                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge-skill badge-soft-primary mb-0">Fintech</span>
                        <span class="badge-skill badge-soft-primary mb-0">Design Ops</span>
                        <span class="badge-skill badge-soft-primary mb-0">Enterprise SaaS</span>
                        <span class="badge-skill badge-soft-primary mb-0">Leadership</span>
                    </div>
                </div>

                <div class="d-flex flex-column gap-2 profile-header-actions">
                    <button class="btn btn-primary px-4"><i class="bi bi-send-fill me-1"></i> Request Intro</button>
                    <button class="btn btn-outline-primary px-4"><i class="bi bi-download me-1"></i> Download
                        CV</button>
                </div>
            </div>

        </div>
    </div>

    <main class="container pb-5">
        <div class="row g-4">

            <div class="col-lg-8">

                <section class="ui-card">
                    <div class="card-header-title">
                        <h3>About Elliot</h3>
                        <span>Blending design systems with storytelling</span>
                    </div>
                    <p class="text-muted-custom lh-lg mb-4">
                        Elliot is a product design lead focused on building commerce experiences that scale across
                        markets. He has led interdisciplinary pods of researchers, PMs, and engineers to ship onboarding
                        flows, marketplace redesigns, and design system overhauls for companies like Northwind,
                        Tailspin, and Fabrikam.
                    </p>
                    <div class="row g-3">
                        <div class="col-sm-4">
                            <h4 class="fw-bold mb-1">$28M</h4>
                            <p class="text-muted small mb-0">Incremental revenue unlocked via checkout redesign</p>
                        </div>
                        <div class="col-sm-4">
                            <h4 class="fw-bold mb-1">+32%</h4>
                            <p class="text-muted small mb-0">Increase in activation after introducing guided setup</p>
                        </div>
                        <div class="col-sm-4">
                            <h4 class="fw-bold mb-1">4 countries</h4>
                            <p class="text-muted small mb-0">Launched localized experiences with on-site research</p>
                        </div>
                    </div>
                </section>

                <section class="ui-card">
                    <div class="card-header-title mb-4">
                        <h3>Experience</h3>
                        <span>Roles & Impact</span>
                    </div>

                    <div class="timeline">
                        <div class="timeline-item">
                            <h5 class="fw-bold mb-1">UI UX Designer</h5>
                            <div class="text-muted small mb-2 d-flex flex-wrap gap-3">
                                <span><i class="bi bi-geo-alt me-1"></i> Lahore - Pakistan</span>
                                <span><i class="bi bi-building me-1"></i> Arnoka Inc</span>
                                <span><i class="bi bi-calendar3 me-1"></i> 13 Dec, 2009 – 07 Feb, 2012</span>
                            </div>
                            <p class="text-muted-custom mb-0">Proactive and disciplined, leading accessibility
                                initiatives and elevating customer experiences across the entire design process.</p>
                        </div>

                        <div class="timeline-item">
                            <h5 class="fw-bold mb-1">Graphic Designer</h5>
                            <div class="text-muted small mb-2 d-flex flex-wrap gap-3">
                                <span><i class="bi bi-geo-alt me-1"></i> Liege - Belgium</span>
                                <span><i class="bi bi-building me-1"></i> Multimedia Design</span>
                                <span><i class="bi bi-calendar3 me-1"></i> 09 Jul, 2015 – 19 Nov, 2025</span>
                            </div>
                            <p class="text-muted-custom mb-0">Partnered with product and engineering to craft
                                user-centric marketing assets and campaign microsites for European launches.</p>
                        </div>

                        <div class="timeline-item">
                            <h5 class="fw-bold mb-1">Lead Product Designer</h5>
                            <div class="text-muted small mb-2 d-flex flex-wrap gap-3">
                                <span><i class="bi bi-geo-alt me-1"></i> Remote - US & EU</span>
                                <span><i class="bi bi-building me-1"></i> Northwind Commerce</span>
                                <span><i class="bi bi-calendar3 me-1"></i> 2021 – Present</span>
                            </div>
                            <p class="text-muted-custom mb-0">Guiding multi-disciplinary pods to ship merchant
                                onboarding, design systems, and AI-powered tooling for 85K SMB customers.</p>
                        </div>
                    </div>
                </section>

                <section class="ui-card">
                    <div class="card-header-title">
                        <h3>Skills & tools</h3>
                        <span>Technical + human skills</span>
                    </div>
                    <div>
                        <span class="badge-skill">Design Systems</span>
                        <span class="badge-skill">Service Design</span>
                        <span class="badge-skill">User Research</span>
                        <span class="badge-skill">Design Tokens</span>
                        <span class="badge-skill">Figma</span>
                        <span class="badge-skill">Framer</span>
                        <span class="badge-skill">ProtoPie</span>
                        <span class="badge-skill">Leadership</span>
                        <span class="badge-skill">Public Speaking</span>
                        <span class="badge-skill">Workshop Facilitation</span>
                    </div>
                </section>

                <section class="ui-card">
                    <div class="card-header-title">
                        <h3>Selected case studies</h3>
                        <a href="#" class="text-primary small text-decoration-none">View full portfolio</a>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=400"
                                class="case-study-img" alt="Case Study 1">
                            <h6 class="fw-bold mb-1">Northwind Checkout</h6>
                            <p class="text-muted small mb-0">Commerce redesign for complex B2B orders with scheduled
                                delivery.</p>
                        </div>
                        <div class="col-md-4">
                            <img src="https://images.unsplash.com/photo-1542281286-9e0a16bb7366?auto=format&fit=crop&q=80&w=400"
                                class="case-study-img" alt="Case Study 2">
                            <h6 class="fw-bold mb-1">Tailspin Loyalty</h6>
                            <p class="text-muted small mb-0">Omnichannel membership program used by 6M parents globally.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&q=80&w=400"
                                class="case-study-img" alt="Case Study 3">
                            <h6 class="fw-bold mb-1">Ops Cockpit</h6>
                            <p class="text-muted small mb-0">Internal tooling suite replacing 12 legacy screens.</p>
                        </div>
                    </div>
                </section>

                <section class="ui-card">
                    <div class="card-header-title">
                        <h3>References</h3>
                        <span>What teams say</span>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="border rounded p-3 h-100 bg-light">
                                <p class="small text-muted fst-italic mb-3">"Elliot cares deeply about the craft but
                                    also the business outcomes. He's turned ambiguous briefs into playbooks the org
                                    still uses."</p>
                                <h6 class="fw-bold mb-0 text-dark" style="font-size: 0.85rem;">Ana Castillo</h6>
                                <span class="text-muted" style="font-size: 0.75rem;">VP Product • Northwind</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="border rounded p-3 h-100 bg-light">
                                <p class="small text-muted fst-italic mb-3">"He can facilitate a workshop in the morning
                                    and prototype with engineers that afternoon. Great collaborator with marketing +
                                    ops."</p>
                                <h6 class="fw-bold mb-0 text-dark" style="font-size: 0.85rem;">Marcus Young</h6>
                                <span class="text-muted" style="font-size: 0.75rem;">Director of Experience •
                                    Tailspin</span>
                            </div>
                        </div>
                    </div>
                </section>

            </div>

            <aside class="col-lg-4">

                <div class="ui-card">
                    <h3 class="h5 mb-4">Contact Information</h3>
                    <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                        <li class="d-flex align-items-center gap-3">
                            <div class="icon-box"><i class="bi bi-telephone-fill"></i></div>
                            <div><span class="d-block text-muted small">Phone</span><span class="fw-medium">+1 234 567
                                    890</span></div>
                        </li>
                        <li class="d-flex align-items-center gap-3">
                            <div class="icon-box"><i class="bi bi-phone-fill"></i></div>
                            <div><span class="d-block text-muted small">Mobile</span><span class="fw-medium">+1 234 567
                                    978</span></div>
                        </li>
                        <li class="d-flex align-items-center gap-3">
                            <div class="icon-box"><i class="bi bi-envelope-fill"></i></div>
                            <div><span class="d-block text-muted small">Email</span><span
                                    class="fw-medium">seeker@jobsportal.com</span></div>
                        </li>
                        <li class="d-flex align-items-center gap-3">
                            <div class="icon-box"><i class="bi bi-geo-alt-fill"></i></div>
                            <div><span class="d-block text-muted small">Location</span><span class="fw-medium">Dummy
                                    Street Address 123, Seattle</span></div>
                        </li>
                    </ul>
                </div>

                <div class="ui-card">
                    <h3 class="h5 mb-4">Candidate Details</h3>
                    <ul class="list-unstyled details-list m-0">
                        <li><span class="label"><i class="bi bi-patch-check text-primary"></i> VERIFIED</span><span
                                class="value">Yes</span></li>
                        <li><span class="label"><i class="bi bi-person-check text-primary"></i> READY FOR
                                HIRE</span><span class="value">Yes</span></li>
                        <li><span class="label"><i class="bi bi-calendar text-primary"></i> AGE</span><span
                                class="value">35 years</span></li>
                        <li><span class="label"><i class="bi bi-gender-ambiguous text-primary"></i> GENDER</span><span
                                class="value">Male</span></li>
                        <li><span class="label"><i class="bi bi-heart text-primary"></i> MARITAL STATUS</span><span
                                class="value">Single</span></li>
                        <li><span class="label"><i class="bi bi-briefcase text-primary"></i> EXPERIENCE</span><span
                                class="value">9 years</span></li>
                        <li><span class="label"><i class="bi bi-bar-chart text-primary"></i> CAREER LEVEL</span><span
                                class="value">Lead / Principal</span></li>
                        <li><span class="label"><i class="bi bi-globe text-primary"></i> LOCATION</span><span
                                class="value">Seattle, USA</span></li>
                        <li><span class="label"><i class="bi bi-currency-dollar text-primary"></i> CURRENT
                                SALARY</span><span class="value">$120k</span></li>
                        <li><span class="label"><i class="bi bi-cash-coin text-primary"></i> EXPECTED SALARY</span><span
                                class="value">$165k</span></li>
                    </ul>
                </div>

                <div class="ui-card" style="background-color: #e6fcf5; border: 1px solid #c3fae8;">
                    <h3 class="h5 mb-2 text-success">Availability</h3>
                    <p class="text-muted small mb-3">Exploring fractional design leadership roles (20-30 hrs / week)
                        with remote-first teams in fintech or productivity.</p>
                    <div>
                        <span class="badge bg-white text-dark border p-2 px-3 rounded-pill fw-normal">Remote</span>
                        <span class="badge bg-white text-dark border p-2 px-3 rounded-pill fw-normal">Contract</span>
                        <span class="badge bg-white text-dark border p-2 px-3 rounded-pill fw-normal">Travel OK</span>
                    </div>
                </div>

                <div class="ui-card">
                    <h3 class="h5 mb-3">Toolbox</h3>
                    <div>
                        <span class="badge-skill">Figma</span>
                        <span class="badge-skill">FigJam</span>
                        <span class="badge-skill">Principle</span>
                        <span class="badge-skill">Notion</span>
                        <span class="badge-skill">Storybook</span>
                        <span class="badge-skill">Adobe CC</span>
                    </div>
                </div>

                <div class="ui-card">
                    <h3 class="h5 mb-3">Contact Elliot</h3>
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Your Name (e.g. Jane Recruiter)">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Work Email (e.g. jane@company.com)">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="3"
                                placeholder="Tell Elliot about the opportunity..."></textarea>
                        </div>
                        <button type="button" class="btn btn-primary w-100">Send message</button>
                    </form>
                </div>

            </aside>
        </div>
    </main>

    <?php include "landing/footer.php"?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
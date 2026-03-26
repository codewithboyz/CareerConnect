<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skyline Digital - Jobs Portal</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        /* --- Design Tokens --- */
        :root {
            --color-primary: #0066ff;
            --color-primary-soft: #e5f0ff;
            --color-success: #20c997;
            --color-bg-main: #f4f7fa;
            --color-bg-section: #f8fafd;
            --color-text-main: #1a1f36;
            --color-text-muted: #6c757d;
            --color-border: #e9ecef;
            --color-footer: #1c2331;

            --radius-md: 12px;
            --radius-lg: 20px;
            --radius-pill: 50px;
            --shadow-soft: 0 4px 20px rgba(0, 0, 0, 0.03);
            --shadow-hover: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        /* --- Base Styles --- */
        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--color-bg-main)!important;
            color: var(--color-text-main)!important;
            -webkit-font-smoothing: antialiased;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-weight: 600;
            letter-spacing: -0.01em;
        }

        a {
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .text-muted-custom {
            color: var(--color-text-muted)!important;
            font-size: 0.95rem;
        }

        /* --- Navigation --- */
        .navbar {
            background-color: #fff!important;
            border-bottom: 1px solid var(--color-border)!important;
        }

        .nav-link {
            font-weight: 500;
            font-size: 0.95rem;
            color: #333!important;
        }

        .nav-link:hover {
            color: var(--color-primary)!important;
        }

        /* --- Buttons --- */
        .btn {
            border-radius: var(--radius-pill)!important;
            font-weight: 500;
            padding: 0.5rem 1.25rem;
            transition: all 0.2s;
        }

        .btn-primary {
            background-color: var(--color-primary)!important;
            border-color: var(--color-primary)!important;
        }

        .btn-outline-primary {
            color: var(--color-primary)!important;
            border-color: var(--color-primary)!important;
        }

        .btn-outline-primary:hover {
            background-color: var(--color-primary)!important;
            color: #fff;
        }

        .btn-success {
            background-color: var(--color-success)!important;
            border: none;
            color: white;
        }

        .btn-soft-primary {
            background-color: var(--color-primary-soft)!important;
            color: var(--color-primary)!important;
            border: none;
        }

        .btn-soft-primary:hover {
            background-color: #d1e3ff!important;
        }

        /* --- Cards --- */
        .ui-card {
            background: #fff;
            border-radius: var(--radius-lg)!important;
            border: none;
            box-shadow: var(--shadow-soft)!important;
            padding: 2rem;
            margin-bottom: 1.5rem;
        }

        /* --- Hero & Overlap Header --- */
        .hero-banner {
            height: 300px;
            background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.1)), url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=2000') center/cover no-repeat !important;
        }

        .header-overlap {
            margin-top: -80px;
            position: relative;
            z-index: 10;
        }

        .company-logo-box {
            width: 80px;
            height: 80px;
            background: #fff;
            border-radius: var(--radius-md)!important;
            box-shadow: var(--shadow-soft)!important;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* --- Main Content Specifics --- */
        .ui-badge {
            background-color: var(--color-primary-soft)!important;
            color: var(--color-primary)!important;
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: var(--radius-pill)!important;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.875rem;
        }

        .feature-box {
            background-color: var(--color-bg-section)!important;
            border-radius: var(--radius-md)!important;
            padding: 1.5rem;
            height: 100%;
            transition: transform 0.2s ease;
        }

        .feature-box:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-soft)!important;
        }

        .gallery-img {
            width: 100%;
            height: 160px;
            object-fit: cover;
            border-radius: var(--radius-md)!important;
        }

        /* --- Open Roles Section --- */
        .open-roles-section {
            background-color: var(--color-bg-section)!important;
            padding: 5rem 0;
            border-top: 1px solid var(--color-border)!important;
        }

        .job-card {
            border-radius: var(--radius-lg)!important;
            border: none;
            box-shadow: var(--shadow-soft)!important;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            position: relative;
        }

        .job-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover)!important;
        }

        .badge-soft-success {
            background-color: #dcfce7!important;
            color: #166534;
            font-weight: 500;
            padding: 0.4rem 0.8rem;
            border-radius: var(--radius-pill)!important;
            font-size: 0.8rem;
        }

        .badge-soft-danger {
            background-color: #fee2e2!important;
            color: #b91c1c!important;
            font-weight: 500;
            padding: 0.4rem 0.8rem;
            border-radius: var(--radius-pill)!important;
            font-size: 0.8rem;
        }

        .urgent-icon {
            position: absolute;
            top: 24px;
            right: 24px;
            background-color: #ef4444!important;
            color: white;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
        }

        .job-logo-box {
            width: 40px;
            height: 40px;
            background-color: var(--color-bg-section)!important;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid var(--color-border)!important;
            font-size: 1.2rem;
        }

        /* --- Footer --- */
        footer {
            background-color: var(--color-footer)!important;
            color: #fff;
            padding-top: 4rem;
        }

        .footer-heading {
            font-size: 1.05rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
        }

        .footer-link {
            color: #a0aec0!important;
            text-decoration: none;
            font-size: 0.9rem;
            margin-bottom: 0.75rem;
            display: block;
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

    <div class="hero-banner"></div>

    <main>
        <div class="container header-overlap mb-4">
            <div class="ui-card py-4">
                <div
                    class="d-flex flex-column flex-lg-row align-items-start align-items-lg-center justify-content-between gap-4">
                    <div class="d-flex align-items-center gap-4">
                        <div class="company-logo-box">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_%22G%22_logo.svg"
                                alt="Skyline Logo" width="40">
                        </div>
                        <div>
                            <span class="text-muted small text-uppercase fw-semibold d-block mb-1">Digital Experience
                                Studio</span>
                            <h1 class="h3 fw-bold mb-2">Skyline Digital</h1>
                            <div class="d-flex flex-wrap gap-3 text-muted small">
                                <span><i class="bi bi-geo-alt me-1"></i> San Francisco, USA</span>
                                <span><i class="bi bi-people me-1"></i> 180+ team members</span>
                                <span><i class="bi bi-calendar3 me-1"></i> Since 2014</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex gap-2 w-100 w-lg-auto">
                        <button class="btn btn-soft-primary px-4 w-100"><i class="bi bi-bookmark-plus me-1"></i> Follow
                            Company</button>
                        <button class="btn btn-primary px-4 w-100"><i class="bi bi-briefcase me-1"></i> View Open
                            Roles</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pb-5">
            <div class="row g-4">

                <div class="col-lg-8">
                    <section class="ui-card">
                        <h2 class="h4 mb-3">Who We Are</h2>
                        <p class="text-muted-custom lh-lg mb-0">
                            Skyline Digital is a multidisciplinary studio building immersive product experiences for
                            finance, ecommerce, and emerging tech brands. We combine research-led design with
                            battle-tested engineering to launch products that scale across millions of users.<br><br>
                            Our teams operate with a maker-first culture: weekly design critiques, shared ownership of
                            roadmaps, and space to iterate rapidly so we can keep pushing what digital experiences can
                            be.
                        </p>
                    </section>

                    <section class="ui-card">
                        <h2 class="h4 mb-4">What We Value</h2>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="ui-badge"><i class="bi bi-lightbulb"></i> Product Thinking</span>
                            <span class="ui-badge"><i class="bi bi-chat-left-text"></i> Transparent Collaboration</span>
                            <span class="ui-badge"><i class="bi bi-flask"></i> Experiments Over Ego</span>
                            <span class="ui-badge"><i class="bi bi-globe-americas"></i> Global Impact</span>
                            <span class="ui-badge"><i class="bi bi-heart"></i> People-First Culture</span>
                        </div>
                    </section>

                    <section class="ui-card">
                        <h2 class="h4 mb-4">Life at Skyline</h2>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <i class="bi bi-airplane-engines fs-4 text-primary mb-2 d-block"></i>
                                    <h3 class="h6 fw-bold">Remote-Friendly</h3>
                                    <p class="text-muted small mb-0 mt-2">Work where you're most productive with
                                        quarterly in-person retreats and studio hubs worldwide.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <i class="bi bi-mortarboard fs-4 text-primary mb-2 d-block"></i>
                                    <h3 class="h6 fw-bold">Continuous Learning</h3>
                                    <p class="text-muted small mb-0 mt-2">Annual stipend for conferences,
                                        certifications, and mentorship programs led by industry experts.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <i class="bi bi-heart-pulse fs-4 text-primary mb-2 d-block"></i>
                                    <h3 class="h6 fw-bold">Health + Wellness</h3>
                                    <p class="text-muted small mb-0 mt-2">Premium medical cover, wellness allowances,
                                        and flexible time off to recharge and explore.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <i class="bi bi-graph-up-arrow fs-4 text-primary mb-2 d-block"></i>
                                    <h3 class="h6 fw-bold">Growth Mindset</h3>
                                    <p class="text-muted small mb-0 mt-2">Clear leveling frameworks, quarterly career
                                        conversations, and opportunities to switch squads.</p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="ui-card">
                        <h2 class="h4 mb-2">Inside Our Studios</h2>
                        <p class="text-muted mb-4">Take a peek at some of our favourite moments across Skyline hubs and
                            remote retreats.</p>
                        <div class="row g-3">
                            <div class="col-md-4"><img
                                    src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&q=80&w=500"
                                    class="gallery-img" alt="Studio 1"></div>
                            <div class="col-md-4"><img
                                    src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&q=80&w=500"
                                    class="gallery-img" alt="Studio 2"></div>
                            <div class="col-md-4"><img
                                    src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?auto=format&fit=crop&q=80&w=500"
                                    class="gallery-img" alt="Studio 3"></div>
                        </div>
                    </section>
                </div>

                <aside class="col-lg-4">
                    <div class="ui-card">
                        <h3 class="h5 mb-4">Company Snapshot</h3>
                        <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                            <li class="d-flex align-items-start gap-3">
                                <i class="bi bi-globe fs-5 text-muted mt-1"></i>
                                <div><strong class="d-block text-dark small">Website</strong><a href="#"
                                        class="text-primary small">skylinedigital.com</a></div>
                            </li>
                            <li class="d-flex align-items-start gap-3">
                                <i class="bi bi-building fs-5 text-muted mt-1"></i>
                                <div><strong class="d-block text-dark small">Industry</strong><span
                                        class="text-muted small">Product Design & Engineering</span></div>
                            </li>
                            <li class="d-flex align-items-start gap-3">
                                <i class="bi bi-diagram-3 fs-5 text-muted mt-1"></i>
                                <div><strong class="d-block text-dark small">Departments</strong><span
                                        class="text-muted small">Design, Engineering, Research</span></div>
                            </li>
                            <li class="d-flex align-items-start gap-3">
                                <i class="bi bi-geo-alt fs-5 text-muted mt-1"></i>
                                <div><strong class="d-block text-dark small">Offices</strong><span
                                        class="text-muted small">SF - Berlin - Singapore - Remote</span></div>
                            </li>
                            <li class="d-flex align-items-start gap-3">
                                <i class="bi bi-graph-up fs-5 text-muted mt-1"></i>
                                <div><strong class="d-block text-dark small">Growth</strong><span
                                        class="text-muted small">45% YoY revenue</span></div>
                            </li>
                        </ul>
                        <div class="mt-4 pt-3 border-top d-flex gap-3">
                            <a href="#" class="text-muted"><i class="bi bi-linkedin fs-5"></i></a>
                            <a href="#" class="text-muted"><i class="bi bi-twitter-x fs-5"></i></a>
                            <a href="#" class="text-muted"><i class="bi bi-youtube fs-5"></i></a>
                        </div>
                    </div>

                    <div class="ui-card">
                        <h3 class="h5 mb-4">Get In Touch</h3>
                        <form>
                            <div class="mb-3"><input type="text" class="form-control" placeholder="Full name"></div>
                            <div class="mb-3"><input type="email" class="form-control" placeholder="Work email"></div>
                            <div class="mb-4"><textarea class="form-control" rows="3" placeholder="Message"></textarea>
                            </div>
                            <button type="button" class="btn btn-outline-primary w-100">Send Message</button>
                        </form>
                    </div>

                    <div class="ui-card">
                        <h3 class="h5 mb-3">Studio Locations</h3>
                        <div class="position-relative rounded-3 overflow-hidden border">
                            <button class="btn btn-light btn-sm position-absolute top-0 start-0 m-2 shadow-sm z-2"
                                style="font-size: 0.8rem;"><i class="bi bi-box-arrow-up-right me-1"></i> Open in
                                Maps</button>
                            <img src="https://images.unsplash.com/photo-1524661135-423995f22d0b?auto=format&fit=crop&q=80&w=600"
                                alt="Map" class="w-100" style="height: 200px; object-fit: cover;">
                        </div>
                    </div>
                </aside>
            </div>
        </div>

        <section class="open-roles-section">
            <div class="container">
                <div class="row mb-5 align-items-center">
                    <div class="col-lg-8 mb-3 mb-lg-0">
                        <h2 class="mb-2">Open Roles</h2>
                        <p class="text-muted mb-0">We're hiring across design, engineering, and strategy. Join our fully
                            distributed team.</p>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <button class="btn btn-outline-primary bg-white shadow-sm"><i
                                class="bi bi-envelope-fill me-2"></i> Refer a Friend</button>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card job-card h-100 p-4 bg-white">
                            <div><span class="badge-soft-success">Full Time</span></div>
                            <h4 class="h5 fw-bold mt-3 mb-3">Lead Product Designer</h4>
                            <p class="small fw-medium mb-2">Salary: $120k - $150k</p>
                            <div class="text-primary small fw-medium d-flex align-items-center mb-3">
                                <i class="bi bi-geo-alt-fill me-2"></i> Remote • North America
                            </div>
                            <hr class="text-muted opacity-25 my-3">
                            <div class="d-flex align-items-center">
                                <div class="job-logo-box me-3 text-warning"><i class="bi bi-triangle"></i></div>
                                <div class="lh-sm">
                                    <p class="text-muted mb-0" style="font-size: 0.75rem;">Posted</p>
                                    <p class="mb-0 small fw-bold">3 days ago</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card job-card h-100 p-4 bg-white">
                            <div><span class="badge-soft-danger">Contract</span></div>
                            <h4 class="h5 fw-bold mt-3 mb-3">Senior Frontend Engineer</h4>
                            <p class="small fw-medium mb-2">Salary: €85k - €110k</p>
                            <div class="text-primary small fw-medium d-flex align-items-center mb-3">
                                <i class="bi bi-geo-alt-fill me-2"></i> Berlin, Germany
                            </div>
                            <hr class="text-muted opacity-25 my-3">
                            <div class="d-flex align-items-center">
                                <div class="job-logo-box me-3 text-secondary"><i class="bi bi-diagram-3"></i></div>
                                <div class="lh-sm">
                                    <p class="text-muted mb-0" style="font-size: 0.75rem;">Posted</p>
                                    <p class="mb-0 small fw-bold">1 week ago</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card job-card h-100 p-4 bg-white">
                            <div class="urgent-icon shadow-sm"><i class="bi bi-lightning-charge-fill"></i></div>
                            <div><span class="badge-soft-success">Full Time</span></div>
                            <h4 class="h5 fw-bold mt-3 mb-3">Platform Delivery Manager</h4>
                            <p class="small fw-medium mb-2">Salary: $95k - $135k</p>
                            <div class="text-primary small fw-medium d-flex align-items-center mb-3">
                                <i class="bi bi-geo-alt-fill me-2"></i> Singapore
                            </div>
                            <hr class="text-muted opacity-25 my-3">
                            <div class="d-flex align-items-center">
                                <div class="job-logo-box me-3 text-success"><i class="bi bi-camera-video"></i></div>
                                <div class="lh-sm">
                                    <p class="text-muted mb-0" style="font-size: 0.75rem;">Posted</p>
                                    <p class="mb-0 small fw-bold">2 weeks ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include "landing/footer.php"?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
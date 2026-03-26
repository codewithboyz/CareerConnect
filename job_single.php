<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Details - IT Delivery Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --brand-blue: #0d6efd;
            --bg-body: #f8f9fa; 
            --text-muted: #6c757d;
            --footer-bg: #1e293b;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-body)!important;
            color: #333;
        }

        /* Top Background Gradient */
        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 338px;
            background: linear-gradient(135deg, #e0f2fe 0%, #f0fdf4 100%);
            z-index: -1;
        }

        /* Card Customizations */
        .card-custom {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 4px 15px rgba(0,0,0,0.03);
            background: #fff;
        }

        .icon-box {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }

        /* Nav & Links */
        .nav-link {
            font-size: 0.9rem;
            font-weight: 500;
            color: #4b5563;
        }
        .nav-link:hover { color: var(--brand-blue)!important; }
        .dropdown-toggle::after { vertical-align: middle; }

        /* Badges */
        .badge-soft-primary {
            background-color: #e0f2fe!important;
            color: #0369a1!important;
        }
        .badge-soft-success {
            background-color: #dcfce7!important;
            color: #15803d!important;
        }
        .badge-soft-danger {
            background-color: #fee2e2!important;
            color: #b91c1c!important;
        }

        /* Sidebar Snapshot List */
        .snapshot-list li {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #f3f4f6;
            font-size: 0.85rem;
        }
        .snapshot-list li:last-child { border-bottom: none; }
        .snapshot-list .label { color: var(--text-muted); display: flex; align-items: center; gap: 8px;}
        .snapshot-list .value { font-weight: 600; text-align: right;}

        /* Footer */
        footer {
            background-color: var(--footer-bg);
            color: #94a3b8!important;
            font-size: 0.85rem;
        }
        footer h6 {
            color: #fff;
            font-weight: 600;
            margin-bottom: 1rem;
        }
        footer a {
            color: #94a3b8!important;
            text-decoration: none;
            display: block;
            margin-bottom: 0.5rem;
        }
        footer a:hover { color: #fff!important; }
        .footer-social-icons a {
            display: inline-flex;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: rgba(255,255,255,0.1);
            align-items: center;
            justify-content: center;
            margin-right: 8px;
        }
        
        .map-placeholder {
            width: 100%;
            height: 200px;
            background: url('https://via.placeholder.com/400x200.png?text=Map+View') center/cover;
            border-radius: 0.5rem;
        }
    </style>
</head>
<body>

    <div class="hero-bg"></div>

    <?php include "landing/nav.php" ?>

    <div class="container pb-5">
        
        <div class="card-custom p-4 mb-3 mt-3">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4">
                <div class="d-flex align-items-center gap-3">
                    <div class="icon-box bg-light border">
                        <img src="Asset\Image\emplogo1.jpg" class="rounded icon-box bg-light border" alt="Logo">
                    </div>
                    <div>
                        <span class="badge badge-soft-primary rounded-pill px-3 py-1 mb-2">PRODUCT & ENGINEERING</span>
                        <h2 class="h4 fw-bold mb-1">IT Delivery Manager — Epicor ERP</h2>
                        <div class="text-muted small d-flex flex-wrap gap-3">
                            <span><i class="bi bi-geo-alt"></i> Dubai, UAE</span>
                            <span><i class="bi bi-briefcase"></i> Full Time - Hybrid</span>
                            <span><i class="bi bi-cash"></i> $500 - $3000 / month</span>
                        </div>
                    </div>
                </div>
                <div class="d-flex gap-2">
                    <button class="btn btn-primary px-4"><i class="bi bi-send-fill me-1"></i> Apply Now</button>
                    <button class="btn btn-outline-secondary"><i class="bi bi-bookmark"></i> Save Job</button>
                    <button class="btn btn-light border"><i class="bi bi-share"></i> Share</button>
                </div>
            </div>
        </div>

        <div class="row g-3 mb-4">
            <div class="col-6 col-md-3">
                <div class="card-custom p-3 d-flex flex-row align-items-center gap-3">
                    <div class="bg-primary-subtle text-primary rounded p-2"><i class="bi bi-calendar-event"></i></div>
                    <div>
                        <div class="text-muted small" style="font-size: 0.7rem;">Posted On</div>
                        <div class="fw-bold small">May 15, 2023</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card-custom p-3 d-flex flex-row align-items-center gap-3">
                    <div class="bg-primary-subtle text-primary rounded p-2"><i class="bi bi-person-badge"></i></div>
                    <div>
                        <div class="text-muted small" style="font-size: 0.7rem;">Seniority</div>
                        <div class="fw-bold small">Lead / Manager</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card-custom p-3 d-flex flex-row align-items-center gap-3">
                    <div class="bg-primary-subtle text-primary rounded p-2"><i class="bi bi-building"></i></div>
                    <div>
                        <div class="text-muted small" style="font-size: 0.7rem;">Company</div>
                        <div class="fw-bold small">Forum International</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="card-custom p-3 d-flex flex-row align-items-center gap-3">
                    <div class="bg-primary-subtle text-primary rounded p-2"><i class="bi bi-clock"></i></div>
                    <div>
                        <div class="text-muted small" style="font-size: 0.7rem;">Working Time</div>
                        <div class="fw-bold small">Monday - Friday · 9am-5pm</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            
            <div class="col-lg-8">
                <div class="card-custom p-4 mb-4">
                    <h4 class="fw-bold h5 mb-3">Role Overview</h4>
                    <p class="text-muted small lh-lg mb-0">
                        We are looking for a strategic delivery manager who can lead cross-functional teams to ship Epicor ERP initiatives on schedule. You will coordinate the full lifecycle from discovery to go-live and ensure stakeholders are aligned every step of the way.<br><br>
                        Working closely with engineering, product, and operations, you will design scalable processes, build dashboards that surface health metrics, and remove blockers so teams can focus on creating value for thousands of global users.
                    </p>
                </div>

                <div class="card-custom p-4 mb-4">
                    <h4 class="fw-bold h5 mb-3">What You'll Do</h4>
                    <ul class="text-muted small lh-lg mb-0" style="padding-left: 1.2rem;">
                        <li>Own the roadmap for Epicor ERP releases, aligning plans with business OKRs and financial goals.</li>
                        <li>Mentor scrum leads and coordinate delivery ceremonies, sprint planning, and retrospectives.</li>
                        <li>Partner with security and infrastructure teams to maintain compliance and high availability SLAs.</li>
                        <li>Present delivery status, risk assessments, and mitigation plans to executive stakeholders.</li>
                        <li>Continuously refine workflows by analyzing cycle times, throughput, and quality signals.</li>
                    </ul>
                </div>

                <div class="card-custom p-4 mb-4">
                    <h4 class="fw-bold h5 mb-3">Skills & Experience</h4>
                    <ul class="text-muted small lh-lg mb-0" style="padding-left: 1.2rem;">
                        <li>5+ years leading enterprise software implementations or technical program management.</li>
                        <li>Hands-on experience with Epicor ERP (or similar platforms) across manufacturing workflows.</li>
                        <li>Working knowledge of Agile practices, modern DevOps tooling, and cloud infrastructure.</li>
                        <li>Comfort presenting to senior leadership and aligning teams across time zones.</li>
                        <li>Strong communication, stakeholder management, and change enablement skills.</li>
                    </ul>
                </div>

                <div class="card-custom p-4 mb-4">
                    <h4 class="fw-bold h5 mb-3">Benefits & Perks</h4>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge badge-soft-primary rounded-pill fw-normal px-3 py-2">Annual bonus</span>
                        <span class="badge badge-soft-primary rounded-pill fw-normal px-3 py-2">Hybrid work flexibility</span>
                        <span class="badge badge-soft-primary rounded-pill fw-normal px-3 py-2">Private medical cover</span>
                        <span class="badge badge-soft-primary rounded-pill fw-normal px-3 py-2">Learning stipend</span>
                        <span class="badge badge-soft-primary rounded-pill fw-normal px-3 py-2">Wellness allowance</span>
                        <span class="badge badge-soft-primary rounded-pill fw-normal px-3 py-2">Visa sponsorship</span>
                    </div>
                </div>

                <div class="card-custom p-4 mb-4">
                    <h4 class="fw-bold h5 mb-3">How to Apply</h4>
                    <p class="text-muted small mb-3">Attach your updated resume, share 2-3 project highlights, and tell us how you improved delivery velocity in your previous role.</p>
                    <button class="btn btn-primary"><i class="bi bi-cloud-upload me-2"></i>Submit Application</button>
                </div>
            </div>

            <div class="col-lg-4">
                
                <div class="card-custom p-4 mb-4">
                    <h4 class="fw-bold h5 mb-3">Job Snapshot</h4>
                    <ul class="list-unstyled snapshot-list mb-0">
                        <li>
                            <span class="label"><i class="bi bi-hash text-primary"></i> Job ID:</span>
                            <span class="value">JR132450</span>
                        </li>
                        <li>
                            <span class="label"><i class="bi bi-geo-alt text-primary"></i> Location:</span>
                            <span class="value">Dubai, United Arab Emirates</span>
                        </li>
                        <li>
                            <span class="label"><i class="bi bi-people text-primary"></i> Team Size:</span>
                            <span class="value">25+ collaborators</span>
                        </li>
                        <li>
                            <span class="label"><i class="bi bi-cash-stack text-primary"></i> Compensation:</span>
                            <span class="value">$500 - $3000</span>
                        </li>
                        <li>
                            <span class="label"><i class="bi bi-briefcase text-primary"></i> Employment:</span>
                            <span class="value">Full-time - Hybrid</span>
                        </li>
                        <li>
                            <span class="label"><i class="bi bi-mortarboard text-primary"></i> Education:</span>
                            <span class="value">Master's preferred</span>
                        </li>
                    </ul>
                </div>

                <div class="card-custom p-4 mb-4">
                    <h4 class="fw-bold h5 mb-3">Talk to Forum International</h4>
                    <form>
                        <div class="mb-3">
                            <label class="form-label small text-muted mb-1">Full name</label>
                            <input type="text" class="form-control form-control-sm bg-light" placeholder="Alex Morgan">
                        </div>
                        <div class="mb-3">
                            <label class="form-label small text-muted mb-1">Email address</label>
                            <input type="email" class="form-control form-control-sm bg-light" placeholder="you@email.com">
                        </div>
                        <div class="mb-3">
                            <label class="form-label small text-muted mb-1">Message</label>
                            <textarea class="form-control form-control-sm bg-light" rows="3" placeholder="Share a short note..."></textarea>
                        </div>
                        <button type="button" class="btn btn-outline-primary w-100 rounded-pill">Send Message</button>
                    </form>
                </div>

                <div class="card-custom p-4 mb-4">
                    <h4 class="fw-bold h5 mb-3">Office Location</h4>
                    <div class="map-placeholder position-relative">
                        <span class="badge bg-white text-primary border position-absolute top-0 start-0 m-2"><i class="bi bi-box-arrow-up-right me-1"></i>Open in Maps</span>
                    </div>
                </div>

            </div>
        </div>

        <div class="mt-5 pt-4 text-center">
            <h6 class="text-primary fw-bold text-uppercase tracking-wide small mb-1">EXPLORE MORE ROLES</h6>
            <h3 class="fw-bold mb-5">Related Opportunities</h3>
            
            <div class="row g-4 text-start">
                <div class="col-md-4">
                    <div class="card-custom p-4 h-100">
                        <span class="badge badge-soft-success rounded-pill mb-3">Full Time</span>
                        <h5 class="fw-bold mb-1">Product Delivery Lead</h5>
                        <p class="text-muted small mb-3">Salary: $6,000 - $8,500</p>
                        <p class="small text-primary mb-4"><i class="bi bi-geo-alt"></i> Doha, Qatar</p>
                        <div class="d-flex align-items-center gap-2 mt-auto pt-3 border-top">
                            <div class="bg-light p-2 rounded"><i class="bi bi-building text-secondary"></i></div>
                            <div>
                                <div class="text-muted" style="font-size:0.7rem">Posted</div>
                                <div class="fw-bold small">May 11, 2023</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-custom p-4 h-100 position-relative">
                        <span class="position-absolute top-0 end-0 m-3 text-danger"><i class="bi bi-lightning-fill"></i></span>
                        <span class="badge badge-soft-success rounded-pill mb-3">Full Time</span>
                        <h5 class="fw-bold mb-1">ERP Transformation Manager</h5>
                        <p class="text-muted small mb-3">Salary: $7,500 - $11,000</p>
                        <p class="small text-primary mb-4"><i class="bi bi-geo-alt"></i> Riyadh, Saudi Arabia</p>
                        <div class="d-flex align-items-center gap-2 mt-auto pt-3 border-top">
                            <div class="bg-light p-2 rounded"><i class="bi bi-building text-secondary"></i></div>
                            <div>
                                <div class="text-muted" style="font-size:0.7rem">Posted</div>
                                <div class="fw-bold small">May 05, 2023</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-custom p-4 h-100">
                        <span class="badge badge-soft-danger rounded-pill mb-3">Contract</span>
                        <h5 class="fw-bold mb-1">Technical Program Manager</h5>
                        <p class="text-muted small mb-3">Salary: $4,800 - $7,200</p>
                        <p class="small text-primary mb-4"><i class="bi bi-geo-alt"></i> Remote, EMEA</p>
                        <div class="d-flex align-items-center gap-2 mt-auto pt-3 border-top">
                            <div class="bg-light p-2 rounded"><i class="bi bi-building text-secondary"></i></div>
                            <div>
                                <div class="text-muted" style="font-size:0.7rem">Posted</div>
                                <div class="fw-bold small">Apr 28, 2023</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php include "landing/footer.php"?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
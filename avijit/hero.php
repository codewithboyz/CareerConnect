<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <style>
        body {
            font-family: 'Public Sans', sans-serif;
            background-color: #f8f6f6;
        }

        .hero-gradient {
            background: linear-gradient(135deg, #240f1b 0%, #361728 100%);
            min-height: 600px;
            position: relative;
            overflow: hidden;
        }

        .text-primary-custom {
            color: #22c55e !important;
        }

        .bg-primary-custom {
            background-color: #22c55e !important;
        }

        .bg-muted-purple {
            background-color: #4b2038 !important;
        }

        .text-text-pink {
            color: #ce8db1 !important;
        }

        .rounded-2xl {
            border-radius: 1rem !important;
        }

        .rounded-xl {
            border-radius: 0.75rem !important;
        }

        .search-bar {
            background: white;
            padding: 0.5rem;
            border-radius: 1.25rem;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }

        .search-input-group {
            border-right: 1px solid #f1f5f9;
        }

        @media (max-width: 767.98px) {
            .search-input-group {
                border-right: none;
                border-bottom: 1px solid #f1f5f9;
            }

            .display-3 {
                font-size: 2.5rem !important;
            }

            .floating-card-1 {
                left: 0.5rem !important;
                bottom: 0.5rem !important;
            }

            .floating-card-2 {
                right: 0.5rem !important;
                top: 0.5rem !important;
            }
        }

        .floating-card-1 {
            position: absolute;
            bottom: -1.5rem;
            left: -1.5rem;
            z-index: 20;
        }

        .floating-card-2 {
            position: absolute;
            top: 2.5rem;
            right: -1rem;
            z-index: 20;
        }

        .decoration-primary {
            text-decoration-color: #22c55e !important;
        }

        .avatar-group-item {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid #4b2038;
            margin-right: -8px;
        }
    </style>
</head>

<body class="">
    <!-- Hero Section -->
    <section class="hero-gradient d-flex align-items-center">
        <div class="container py-5">
            <div class="row align-items-center g-5">
                <!-- Left Content -->
                <div class="col-lg-7 position-relative text-center text-lg-start" style="z-index: 10;">
                    <!-- Badge -->
                    <div
                        class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill bg-muted-purple mb-4 mx-auto mx-lg-0">
                        <span class="material-symbols-outlined text-white fs-6">auto_awesome</span>
                        <span class="text-white text-uppercase fw-semibold"
                            style="font-size: 0.75rem; letter-spacing: 0.05em;">Ready to find your dream job?</span>
                    </div>
                    <!-- Heading -->
                    <h1 class="display-3 fw-bold text-white mb-4 fs-2 fs-lg-1">
                        Take the next step in your <span class="text-primary-custom">career</span> journey.
                    </h1>
                    <!-- Subtext -->
                    <p class="text-text-pink fs-5 mb-5 mx-auto mx-lg-0" style="max-width: 550px;">
                        Connect with top employers and find the perfect role that matches your skills and ambitions.
                        Explore thousands of opportunities.
                    </p>
                    <!-- Search Bar Container -->
                    <div class="search-bar">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-5 search-input-group px-3 py-2 d-flex align-items-center col-12">
                                <span class="material-symbols-outlined text-secondary me-2">search</span>
                                <input class="form-control border-0 shadow-none"
                                    placeholder="Job title, keywords, or company" type="text" />
                            </div>
                            <div class="col-md-4 px-3 py-2 d-flex align-items-center col-12">
                                <span class="material-symbols-outlined text-secondary me-2">location_on</span>
                                <select class="form-select border-0 shadow-none bg-transparent">
                                    <option>City or remote</option>
                                    <option>New York, NY</option>
                                    <option>Remote</option>
                                    <option>London, UK</option>
                                </select>
                            </div>
                            <div class="col-md-3 p-1 col-12">
                                <button class="btn bg-primary-custom text-white fw-bold w-100 py-3 rounded-xl">
                                    Search Jobs
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Bottom Links and Counter -->
                    <div
                        class="d-flex flex-wrap align-items-center gap-4 mt-5 justify-content-center justify-content-lg-start">
                        <div
                            class="d-flex align-items-center gap-2 bg-white bg-opacity-10 px-3 py-2 rounded-3 border border-white border-opacity-10">
                            <div class="d-flex">
                                <div class="avatar-group-item bg-primary-custom">
                                    <span class="material-symbols-outlined text-white"
                                        style="font-size: 10px;">person</span>
                                </div>
                                <div class="avatar-group-item" style="background-color: #ec5b13;">
                                    <span class="material-symbols-outlined text-white"
                                        style="font-size: 10px;">work</span>
                                </div>
                            </div>
                            <span class="text-white small fw-medium">50k+ Active Jobs</span>
                        </div>
                        <div class="d-flex gap-3">
                            <a class="text-text-pink text-decoration-underline decoration-primary small fw-medium"
                                href="#">Post Your Job</a>
                            <a class="text-text-pink text-decoration-underline decoration-primary small fw-medium"
                                href="#">Advanced Search</a>
                        </div>
                    </div>
                </div>
                <!-- Right Illustration -->
                <div
                    class="col-lg-5 position-relative d-flex justify-content-center justify-content-lg-end mt-5 mt-lg-0">
                    <div class="position-absolute top-0 start-0 translate-middle w-50 h-50 rounded-circle"
                        style="background: rgba(34, 197, 94, 0.2); filter: blur(60px);"></div>
                    <div class="position-absolute bottom-0 end-0 translate-middle w-50 h-50 rounded-circle"
                        style="background: rgba(236, 91, 19, 0.2); filter: blur(60px);"></div>
                    <div class="position-relative z-index-10 w-100" style="max-width: 500px;">
                        <img alt="Hero Illustration" class="img-fluid rounded-2xl"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDG1lfpFKT15zZN9LaAK-Di-s4fztRBFnytMoAfxDlrPmDF49MMY8U8mWb79wfeYlfX3n0O9bM9S3FGodhMqUaALzEr8BovdjemdpvQeNCKbiG5Oc9kZHiq4giUPq0Sk0kf1qmxDFwDPYgvbhEto2hbDk04pc8T2l1Qd5PX0aLGi9pyw1dnkfzSS0IMWBKfCx7XxKt_15ADh-o0AlHwEnvEnVzZjUmJ-exuJknxCrT2XHwx6q1xsT7WRrwskkJf5rmLnblNLNJRXw" />
                        <!-- Floating Card 1 -->
                        <div
                            class="floating-card-1 bg-white p-3 rounded-xl shadow-lg d-none d-md-flex align-items-center gap-3">
                            <div class="rounded-circle bg-success bg-opacity-10 d-flex align-items-center justify-content-center"
                                style="width: 48px; height: 48px;">
                                <span class="material-symbols-outlined text-primary-custom">verified</span>
                            </div>
                            <div>
                                <p class="mb-0 text-muted fw-medium" style="font-size: 0.7rem;">Verified Companies</p>
                                <p class="mb-0 fw-bold text-dark" style="font-size: 0.85rem;">1,200+ Trusted</p>
                            </div>
                        </div>
                        <!-- Floating Card 2 -->
                        <div class="floating-card-2 bg-white p-3 rounded-xl shadow-lg d-none d-md-block">
                            <div class="d-flex align-items-center gap-2 mb-1">
                                <div class="rounded-circle bg-primary-custom" style="width: 8px; height: 8px;"></div>
                                <span class="fw-bold text-muted" style="font-size: 0.6rem; letter-spacing: 0.05em;">NEW
                                    OPENING</span>
                            </div>
                            <p class="mb-0 fw-bold text-dark" style="font-size: 0.85rem;">Product Designer</p>
                            <p class="mb-0 text-muted" style="font-size: 0.7rem;">Google Inc.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Background Pattern -->
        <div class="position-absolute top-0 start-0 w-100 h-100 opacity-10 pointer-events-none">
            <svg class="w-100 h-100" preserveaspectratio="none" viewbox="0 0 100 100">
                <circle cx="80" cy="20" fill="white" fill-opacity="0.05" r="40"></circle>
            </svg>
        </div>
    </section>
</body>

</html>
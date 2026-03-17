<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>JobsPortal - Hero Section</title>
    <!-- Bootstrap 5.3.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />
    <style data-purpose="layout-and-bg">
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fbff;
        }

        /* Main Hero Background Gradient */
        .hero-section {
            position: relative;
            padding: 80px 0;
            background: linear-gradient(135deg, #eef7f6 0%, #ffffff 50%, #f0f4ff 100%);
            overflow: hidden;
        }

        .container-custom {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
    </style>
    <style data-purpose="typography-and-badges">
        .badge-ready {
            display: inline-block;
            background-color: #e6f7f1;
            color: #2fb383;
            font-weight: 700;
            font-size: 0.75rem;
            letter-spacing: 0.05em;
            padding: 8px 16px;
            border-radius: 50px;
            margin-bottom: 24px;
            text-transform: uppercase;
        }

        .hero-title {
            font-weight: 800;
            font-size: 3.5rem;
            color: #0f172a;
            line-height: 1.1;
            margin-bottom: 20px;
        }

        .hero-subtitle {
            color: #64748b;
            font-size: 1.1rem;
            line-height: 1.6;
            max-width: 500px;
            margin-bottom: 40px;
        }

        .status-badge {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            padding: 15px 25px;
            border-radius: 16px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
            display: inline-flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .status-badge .count {
            color: #3b82f6;
            font-weight: 800;
            font-size: 1.5rem;
            line-height: 1;
        }

        .status-badge .label {
            color: #64748b;
            font-size: 0.85rem;
            font-weight: 600;
        }
    </style>
    <style data-purpose="search-bar">
        .search-container {
            background: #ffffff;
            padding: 10px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            max-width: 700px;
        }

        .search-input-group {
            display: flex;
            flex: 1;
            align-items: center;
            padding: 0 15px;
        }

        .search-input-group:not(:last-child) {
            border-right: 1px solid #e2e8f0;
        }

        .search-container input,
        .search-container select {
            border: none;
            box-shadow: none;
            font-size: 0.95rem;
            color: #1e293b;
            width: 100%;
            padding: 10px;
        }

        .search-container input:focus,
        .search-container select:focus {
            outline: none;
        }

        .search-container .icon {
            color: #94a3b8;
            margin-right: 8px;
        }

        .btn-search {
            background-color: #22c55e;
            color: white;
            border: none;
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .btn-search:hover {
            background-color: #16a34a;
            transform: translateY(-2px);
        }

        .secondary-actions {
            display: flex;
            gap: 25px;
            align-items: center;
            margin-top: 5px;
        }

        .action-link {
            text-decoration: none;
            color: #2563eb;
            font-weight: 600;
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .action-link i {
            font-size: 1.1rem;
        }
    </style>
    <style data-purpose="visual-elements">
        .visual-wrapper {
            position: relative;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Styles to mimic the layered UI effect in IMAGE_2 */
        .main-visual-img {
            max-width: 100%;
            height: auto;
            z-index: 2;
            position: relative;
        }

        /* Responsive adjustments */
        @media (max-width: 991.98px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .visual-wrapper {
                margin-top: 50px;
            }

            .search-container {
                flex-direction: column;
                padding: 20px;
            }

            .search-input-group {
                border-right: none !important;
                border-bottom: 1px solid #e2e8f0;
                width: 100%;
                margin-bottom: 10px;
            }

            .btn-search {
                width: 100%;
                margin-top: 10px;
            }
        }
    </style>
</head>

<body>
    <!-- BEGIN: HeroSection -->
    <section class="hero-section" id="hero">
        <div class="container container-custom">
            <div class="row align-items-center">
                <!-- BEGIN: LeftContent -->
                <div class="col-lg-7" data-purpose="hero-text-content">
                    <span class="badge-ready">Ready to find your dream job?</span>
                    <h1 class="hero-title">Take the next step in your career journey.</h1>
                    <p class="hero-subtitle">
                        Explore opportunities that match your skills and passions, and land the job you've always wanted
                        with JobsPortal.
                    </p>
                    <!-- BEGIN: SearchBar -->
                    <div class="search-container" data-purpose="job-search-form">
                        <div class="search-input-group">
                            <i class="bi bi-search icon"></i>
                            <input aria-label="Skills or job title" placeholder="Enter skills or job title"
                                type="text" />
                        </div>
                        <div class="search-input-group">
                            <i class="bi bi-geo-alt icon"></i>
                            <select aria-label="Select Category">
                                <option disabled="" selected="">Select Category</option>
                                <option value="1">Design</option>
                                <option value="2">Development</option>
                                <option value="3">Marketing</option>
                            </select>
                        </div>
                        <button aria-label="Search" class="btn-search" type="button">
                            <i class="bi bi-search fs-5"></i>
                        </button>
                    </div>
                    <!-- END: SearchBar -->
                    <div class="d-flex flex-wrap align-items-center gap-4">
                        <div class="status-badge" data-purpose="active-jobs-counter">
                            <span class="count">50k+</span>
                            <span class="label">Active Jobs</span>
                        </div>
                        <div class="secondary-actions">
                            <a class="action-link" href="#">
                                <i class="bi bi-briefcase text-success"></i>
                                Post Your Job
                            </a>
                            <a class="action-link" href="#">
                                Search Jobs
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END: LeftContent -->
                <!-- BEGIN: RightVisual -->
                <div class="col-lg-5" data-purpose="hero-visual">
                    <div class="visual-wrapper">
                        <!-- Utilizing the provided image data as requested -->
                        <img alt="Professional finding a job" class="main-visual-img" src="Asset/Image/hero-image.png">
                    </div>
                </div>
                <!-- END: RightVisual -->
            </div>
        </div>
    </section>
    <!-- END: HeroSection -->
    <!-- Bootstrap 5.3.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
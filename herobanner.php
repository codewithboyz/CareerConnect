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
    <link rel="stylesheet" href="herobanner.css" />
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
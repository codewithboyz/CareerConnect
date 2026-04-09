<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal</title>
    <?php include "common/header.php"; ?>
    <link rel="stylesheet" href="asset/css/index.css">
</head>

<body>
    <!-- = = =  navber section  = = = -->
    <?php  include "common/navbar.php"; ?>

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

    <!-- = = = search and post job section = = = -->
    <div class="search-post-main">
        <div class="container ">
            <div class="row g-4">

                <!-- Search Job -->
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="job-card d-flex justify-content-between align-items-center search-card">

                        <div>
                            <h4>Search Your Desired Job</h4>
                            <p>Discover A Career You Are Passionate About</p>
                            <button class="btn btn-primary">Search Job</button>
                        </div>

                        <div>
                            <img src="Asset/Image/job-seaerch.png" class=" job-img">
                        </div>

                    </div>
                </div>

                <!-- Post Job -->
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="job-card d-flex justify-content-between align-items-center post-card ">

                        <div>
                            <h4>Post a Job Today</h4>
                            <p>Discover The Ideal Candidate for Your Team</p>
                            <button class="btn btn-success">Post Job</button>
                        </div>

                        <div>
                            <img src="Asset/Image/send-job-removebg-preview.png" class=" job-img">
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- top company hireing -->
    <div class="top-company">
        <h4 class="text-success text-center py-3 pt-5">Here You Can See</h4>
        <h2 class="text-center top-company fw-bold pb-5">Top Companies Are Hiring</h2>
        <div class="container my-4">
            <div class="row g-4">
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <a href="">
                        <div class="card align-items-center company_card">

                            <div class="card_image">
                                <img src="https://sharjeelanjum.com/html/jobs-portal/images/employers/emplogo1.jpg"
                                    class="card-img-top img-fluid" alt="..." />
                            </div>
                            <div class="card-body">
                                <h5 class="fw-bold">Multimedia Design</h5>
                                <p class="text-center location">
                                    <i class="fas fa-map-marker-alt text-info"></i>India
                                </p>
                                <div class="open-job">
                                    <p class="text-center p-1">
                                        <i class="fas fa-briefcase text-primary me-2"></i>5 Open
                                        Jobs
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <a href="">
                        <div class="card align-items-center company_card">

                            <div class="card_image">
                                <img src="https://sharjeelanjum.com/html/jobs-portal/images/employers/emplogo1.jpg"
                                    class="card-img-top img-fluid" alt="..." />
                            </div>
                            <div class="card-body">
                                <h5 class="fw-bold">Multimedia Design</h5>
                                <p class="text-center location">
                                    <i class="fas fa-map-marker-alt text-info"></i>India
                                </p>
                                <div class="open-job">
                                    <p class="text-center p-1">
                                        <i class="fas fa-briefcase text-primary me-2"></i>5 Open
                                        Jobs
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <a href="">
                        <div class="card align-items-center company_card">

                            <div class="card_image">
                                <img src="https://sharjeelanjum.com/html/jobs-portal/images/employers/emplogo1.jpg"
                                    class="card-img-top img-fluid" alt="..." />
                            </div>
                            <div class="card-body">
                                <h5 class="fw-bold">Multimedia Design</h5>
                                <p class="text-center location">
                                    <i class="fas fa-map-marker-alt text-info "></i>India
                                </p>
                                <div class="open-job">
                                    <p class="text-center p-1">
                                        <i class="fas fa-briefcase text-primary me-2"></i>5 Open
                                        Jobs
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <a href="">
                        <div class="card align-items-center company_card">

                            <div class="card_image">
                                <img src="https://sharjeelanjum.com/html/jobs-portal/images/employers/emplogo1.jpg"
                                    class="card-img-top img-fluid" alt="..." />
                            </div>
                            <div class="card-body">
                                <h5 class="fw-bold">Multimedia Design</h5>
                                <p class="text-center location">
                                    <i class="fas fa-map-marker-alt text-info"></i>India
                                </p>
                                <div class="open-job">
                                    <p class="text-center p-1">
                                        <i class="fas fa-briefcase text-primary me-2"></i>5 Open
                                        Jobs
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <a href="">
                        <div class="card align-items-center company_card">

                            <div class="card_image">
                                <img src="https://sharjeelanjum.com/html/jobs-portal/images/employers/emplogo1.jpg"
                                    class="card-img-top img-fluid" alt="..." />
                            </div>
                            <div class="card-body">
                                <h5 class="fw-bold">Multimedia Design</h5>
                                <p class="text-center location">
                                    <i class="fas fa-map-marker-alt text-info"></i>India
                                </p>
                                <div class="open-job">
                                    <p class="text-center p-1">
                                        <i class="fas fa-briefcase text-primary me-2"></i>5 Open
                                        Jobs
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>



                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <a href="">
                        <div class="card align-items-center company_card">

                            <div class="card_image">
                                <img src="https://sharjeelanjum.com/html/jobs-portal/images/employers/emplogo1.jpg"
                                    class="card-img-top img-fluid" alt="..." />
                            </div>
                            <div class="card-body">
                                <h5 class="fw-bold">Multimedia Design</h5>
                                <p class="text-center location">
                                    <i class="fas fa-map-marker-alt text-info"></i>India
                                </p>
                                <div class="open-job">
                                    <p class="text-center p-1">
                                        <i class="fas fa-briefcase text-primary me-2"></i>5 Open
                                        Jobs
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>


                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <a href="">
                        <div class="card align-items-center company_card">

                            <div class="card_image">
                                <img src="https://sharjeelanjum.com/html/jobs-portal/images/employers/emplogo1.jpg"
                                    class="card-img-top img-fluid" alt="..." />
                            </div>
                            <div class="card-body">
                                <h5 class="fw-bold">Multimedia Design</h5>
                                <p class="text-center location">
                                    <i class="fas fa-map-marker-alt text-info"></i>India
                                </p>
                                <div class="open-job">
                                    <p class="text-center p-1">
                                        <i class="fas fa-briefcase text-primary me-2"></i>5 Open
                                        Jobs
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>


                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <a href="">
                        <div class="card align-items-center company_card">

                            <div class="card_image">
                                <img src="https://sharjeelanjum.com/html/jobs-portal/images/employers/emplogo1.jpg"
                                    class="card-img-top img-fluid" alt="..." />
                            </div>
                            <div class="card-body">
                                <h5 class="fw-bold">Multimedia Design</h5>
                                <p class="text-center location">
                                    <i class="fas fa-map-marker-alt text-info"></i>India
                                </p>
                                <div class="open-job">
                                    <p class="text-center p-1">
                                        <i class="fas fa-briefcase text-primary me-2"></i>5 Open
                                        Jobs
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-primary view-all-btn py-3">View All Featured Company</button>
        </div>
    </div>

    <!-- catagorize job -->
    <section class="category-section">

        <div class="container">

            <div class="text-center mb-5">
                <p class="sub-title">Find Your Path</p>
                <h2 class="main-title">Browse Jobs By Categories</h2>
            </div>

            <div class="slider-container">

                <button class="arrow left " id="leftBtn">&#10094;</button>

                <div class="slider" id="slider">

                    <div class="category-card">
                        <div class="icon-box">
                            <img src="https://cdn-icons-png.flaticon.com/128/2910/2910768.png">
                        </div>
                        <h5>Database Administration</h5>
                    </div>

                    <div class="category-card">
                        <div class="icon-box">
                            <img src="https://cdn-icons-png.flaticon.com/128/3135/3135715.png">
                        </div>
                        <h5>Business Management</h5>
                    </div>

                    <div class="category-card">
                        <div class="icon-box">
                            <img src="https://cdn-icons-png.flaticon.com/128/4140/4140048.png">
                        </div>
                        <h5>Admin</h5>

                    </div>

                    <div class="category-card">
                        <div class="icon-box">
                            <img src="https://cdn-icons-png.flaticon.com/128/1055/1055687.png">
                        </div>
                        <h5>Information Technology</h5>

                    </div>

                    <div class="category-card">
                        <div class="icon-box">
                            <img src="https://cdn-icons-png.flaticon.com/128/6062/6062646.png">
                        </div>
                        <h5>Software Development</h5>
                    </div>

                    <div class="category-card">
                        <div class="icon-box">
                            <img src="https://cdn-icons-png.flaticon.com/128/3135/3135715.png">
                        </div>
                        <h5>Marketing</h5>

                    </div>

                </div>

                <button class="arrow right" id="rightBtn">&#10095;</button>

            </div>

            <div class="text-center">
                <button class="view-btn btn-primaty">View All Categories</button>
            </div>

        </div>

    </section>

    <!-- popular_industry -->
    <section class="py-3 sc-body">

        <div class="container text-center">

            <h5 class="text-success">Explore Sectors</h5>
            <h1 class="fw-bold">Popular Industries</h1>

            <div class="d-inline-flex flex-wrap justify-content-center gap-3 text-primary py-3 pt-4">

                <div class="bg-primary-subtle d-inline-flex align-items-center px-3 py-2 rounded-pill hover">
                    <div
                        class="icon-circle d-inline-flex align-items-center justify-content-center shadow bg-body-tertiary rounded-pill me-2">
                        <i class="fa-solid fa-industry"></i>
                    </div>
                    <span>Manufacturing (5)</span>
                </div>

                <div class="bg-primary-subtle d-inline-flex align-items-center px-3 py-2 rounded-pill hover">
                    <div
                        class="icon-circle d-inline-flex align-items-center justify-content-center shadow bg-body-tertiary rounded-pill me-2">
                        <i class="fa-solid fa-person-dress"></i>
                    </div>
                    <span>Fashion (2)</span>
                </div>

                <div class="bg-primary-subtle d-inline-flex align-items-center px-3 py-2 rounded-pill hover">
                    <div
                        class="icon-circle d-inline-flex align-items-center justify-content-center shadow bg-body-tertiary rounded-pill me-2">
                        <i class="fa-solid fa-plug"></i>
                    </div>
                    <span>Electronics (2)</span>
                </div>

                <div class="bg-primary-subtle d-inline-flex align-items-center px-3 py-2 rounded-pill hover">
                    <div
                        class="icon-circle d-inline-flex align-items-center justify-content-center shadow bg-body-tertiary rounded-pill me-2">
                        <i class="fa-solid fa-bullhorn"></i>
                    </div>
                    <span>Advertising/PR (2)</span>
                </div>

                <div class="bg-primary-subtle d-inline-flex align-items-center px-3 py-2 rounded-pill hover">
                    <div
                        class="icon-circle d-inline-flex align-items-center justify-content-center shadow bg-body-tertiary rounded-pill me-2">
                        <i class="fa-solid fa-display"></i>
                    </div>
                    <span>Information Technology (2)</span>
                </div>

                <div class="bg-primary-subtle d-inline-flex align-items-center px-3 py-2 rounded-pill hover">
                    <div
                        class="icon-circle d-inline-flex align-items-center justify-content-center shadow bg-body-tertiary rounded-pill me-2">
                        <i class="fa-solid fa-truck-fast"></i>
                    </div>
                    <span>Courier/Logistics (1)</span>
                </div>

                <div class="bg-primary-subtle d-inline-flex align-items-center px-3 py-2 rounded-pill hover">
                    <div
                        class="icon-circle d-inline-flex align-items-center justify-content-center shadow bg-body-tertiary rounded-pill me-2">
                        <i class="fa-solid fa-car"></i>
                    </div>
                    <span>Automobiling (1)</span>
                </div>

                <div class="bg-primary-subtle d-inline-flex align-items-center px-3 py-2 rounded-pill hover">
                    <div
                        class="icon-circle d-inline-flex align-items-center justify-content-center shadow bg-body-tertiary rounded-pill me-2">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <span>Education/Training (1)</span>
                </div>

                <div class="bg-primary-subtle d-inline-flex align-items-center px-3 py-2 rounded-pill hover">
                    <div
                        class="icon-circle d-inline-flex align-items-center justify-content-center shadow bg-body-tertiary rounded-pill me-2">
                        <i class="fa-solid fa-building-columns"></i>
                    </div>
                    <span>Banking/Financial Services (1)</span>
                </div>

                <div class="bg-primary-subtle d-inline-flex align-items-center px-3 py-2 rounded-pill hover">
                    <div
                        class="icon-circle d-inline-flex align-items-center justify-content-center shadow bg-body-tertiary rounded-pill me-2">
                        <i class="fa-solid fa-heart-pulse"></i>
                    </div>
                    <span>Health &Fitness (1)</span>
                </div>

            </div>


        </div>

    </section>

    <!-- simple_works -->
    <section class="py-5">
        <div class="container text-center py-3">
            <h5 class="text-success">Simple Steps</h5>
            <h1 class="mb-5 fw-bold">How It Works</h1>

            <div class="">
                <div class="row g-5">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card border-0 rounded-4 shadow h-100 py-2">
                            <div class="card-body d-flex align-items-center justify-content-center flex-column gap-2">
                                <div
                                    class="card-title title_1 shadow-lg d-inline-flex align-items-center justify-content-center fs-2 text-primary rounded-pill bg-white">
                                    <i class="fa-solid fa-user-plus"></i>
                                </div>
                                <h5 class="card-text fw-bold">Create An Account</h5>
                                <span class="text-muted mb-4">It's very easy to open an account and start your
                                    journey.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card border-0 rounded-4 shadow h-100 py-2">
                            <div class="card-body d-flex align-items-center justify-content-center flex-column gap-2">
                                <div
                                    class="card-title title_1 shadow-lg d-inline-flex align-items-center justify-content-center fs-2 text-primary rounded-pill bg-white">
                                    <i class="fa-solid fa-file"></i>
                                </div>
                                <h5 class="card-text fw-bold">Complete your profile</h5>
                                <span class="text-muted mb-4">Share all the key details so employers can get to know
                                    you.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card border-0 rounded-4 shadow h-100 py-2">
                            <div class="card-body d-flex align-items-center justify-content-center flex-column gap-2">
                                <div
                                    class="card-title title_1 shadow-lg d-inline-flex align-items-center justify-content-center fs-2 text-primary rounded-pill bg-white">
                                    <i class="fa-solid fa-paper-plane"></i>
                                </div>
                                <h5 class="card-text fw-bold">Apply job or hire</h5>
                                <span class="text-muted mb-4">Apply to your preferred jobs or hire top talent
                                    effortlessly.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- feature_job -->
    <section class="py-5 ">
        <div class="container">
            <div class="text-center">
                <h4 class="text-success">Here You Can See</h4>
                <p class="fs-1"><span class="fw-bold">Featured</span> <span class="text-primary">Jobs</span></p>
            </div>

            <div class="row g-4 py-4">
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="card border-0 shadow rounded-5 py-3 px-2">
                        <div class="card-body">
                            <p class="card-title"><i class="fa-solid fa-briefcase"></i> Full Time/Permanent</p>
                            <h5 class="card-text pt-2">Full Stack Designer</h5>
                            <div class="text-primary loc">
                                <p class="card-text"><i class="fa-solid fa-location-dot"></i> Barrington</p>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-column">
                                    <small class="text-muted">Mar 07, 2025</small>
                                    <strong class="fw-bold">Connect People</strong>
                                </div>
                                <div class="rounded-4 shadow">
                                    <img src="Asset/Image/emplogo7.jpg" width="50" class="px-1 py-2" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="card border-0 shadow rounded-5 py-3 px-2">
                        <div class="card-body">
                            <p class="card-title"><i class="fa-solid fa-briefcase"></i> Part Time</p>
                            <h5 class="card-text pt-2">Marketing Specialist</h5>
                            <div class="text-primary loc">
                                <p class="card-text"><i class="fa-solid fa-location-dot"></i> New York</p>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-column">
                                    <small class="text-muted">Mar 10, 2025</small>
                                    <strong class="fw-bold">Power Wave</strong>
                                </div>
                                <div class="rounded-4 shadow">
                                    <img src="Asset/Image/emplogo2.jpg" width="50" class="px-1 py-2" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="card border-0 shadow rounded-5 py-3 px-2">
                        <div class="card-body">
                            <p class="card-title"><i class="fa-solid fa-briefcase"></i> Freelance</p>
                            <h5 class="card-text pt-2">UI Engineer</h5>
                            <div class="text-primary loc">
                                <p class="card-text"><i class="fa-solid fa-location-dot"></i> Los Angeles</p>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-column">
                                    <small class="text-muted">Mar 12, 2025</small>
                                    <strong class="fw-bold">Design Studio</strong>
                                </div>
                                <div class="rounded-4 shadow">
                                    <img src="Asset/Image/emplogo4.jpg" width="50" class="px-1 py-2" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="card border-0 shadow rounded-5 py-3 px-2">
                        <div class="card-body">
                            <p class="card-title"><i class="fa-solid fa-briefcase"></i> Contract</p>
                            <h5 class="card-text pt-2">Data Analyst</h5>
                            <div class="text-primary loc">
                                <p class="card-text"><i class="fa-solid fa-location-dot"></i> Chicago</p>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-column">
                                    <small class="text-muted">Mar 15, 2025</small>
                                    <strong class="fw-bold">Sphere Tech</strong>
                                </div>
                                <div class="rounded-4 shadow">
                                    <img src="Asset/Image/emplogo9.jpg" width="50" class="px-1 py-2" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="card border-0 shadow rounded-5 py-3 px-2">
                        <div class="card-body">
                            <p class="card-title"><i class="fa-solid fa-briefcase"></i> Internship</p>
                            <h5 class="card-text pt-2">Junior QA Engineer</h5>
                            <div class="text-primary loc">
                                <p class="card-text"><i class="fa-solid fa-location-dot"></i> Austin</p>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-column">
                                    <small class="text-muted">Mar 18, 2025</small>
                                    <strong class="fw-bold">Media Wave</strong>
                                </div>
                                <div class="rounded-4 shadow">
                                    <img src="Asset/Image/emplogo10.jpg" width="50" class="px-1 py-2" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="card border-0 shadow rounded-5 py-3 px-2">
                        <div class="card-body">
                            <p class="card-title"><i class="fa-solid fa-briefcase"></i> Remote</p>
                            <h5 class="card-text pt-2">Product Manager</h5>
                            <div class="text-primary loc">
                                <p class="card-text"><i class="fa-solid fa-location-dot"></i> Remote</p>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-column">
                                    <small class="text-muted">Mar 20, 2025</small>
                                    <strong class="fw-bold">Power Color</strong>
                                </div>
                                <div class="rounded-4 shadow">
                                    <img src="Asset/Image/emplogo6.jpg" width="50" class="px-1 py-2" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="card border-0 shadow rounded-5 py-3 px-2">
                        <div class="card-body">
                            <p class="card-title"><i class="fa-solid fa-briefcase"></i> Hybrid</p>
                            <h5 class="card-text pt-2">DevOps Engineer</h5>
                            <div class="text-primary loc">
                                <p class="card-text"><i class="fa-solid fa-location-dot"></i> Seattle</p>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-column">
                                    <small class="text-muted">Mar 22, 2025</small>
                                    <strong class="fw-bold">Surf Wave</strong>
                                </div>
                                <div class="rounded-4 shadow">
                                    <img src="Asset/Image/emplogo8.jpg" width="50" class="px-1 py-2" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="card border-0 shadow rounded-5 py-3 px-2">
                        <div class="card-body">
                            <p class="card-title"><i class="fa-solid fa-briefcase"></i> Full Time</p>
                            <h5 class="card-text pt-2">Mobile App Developer</h5>
                            <div class="text-primary loc">
                                <p class="card-text"><i class="fa-solid fa-location-dot"></i> Miami</p>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-column">
                                    <small class="text-muted">Mar 24, 2025</small>
                                    <strong class="fw-bold">Power Wave</strong>
                                </div>
                                <div class="rounded-4 shadow">
                                    <img src="Asset/Image/emplogo2.jpg" width="50" class="px-1 py-2" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="text-center pt-4">
                <a href="#" type="button" class="view-btn btn btn-primary rounded-pill py-3 px-5">View All Featured
                    Jobs</a>
            </div>
        </div>
    </section>

    <!-- our video -->
    <section>
        <div>
            <div class=" container" style="padding-top: 40px; padding-bottom: 40px;">
                <div class="row align-items-center">

                    <!-- LEFT CONTENT -->
                    <div class="col-lg-6">

                        <span class="tag">HERE YOU CAN SEE</span>

                        <h1 class="title">
                            Watch Our <span class="blue">Video</span>
                        </h1>

                        <p class="description">
                            Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac
                            condimentum. Vestibulum congue posuere lacus, id tincidunt nisi
                            porta sit amet. Suspendisse et sapien varius, pellentesque dui non.
                        </p>

                        <ul class="features">
                            <li>Learn about our platform</li>
                            <li>Discover success stories</li>
                            <li>See how it works</li>
                        </ul>

                    </div>

                    <!-- RIGHT VIDEO -->
                    <div class="col-lg-6 text-center">

                        <div class="video-box">

                            <img src="Asset/Image/jobscarch.jpg" class="video-img">

                            <button class="play-btn text-center px-4" data-bs-toggle="modal"
                                data-bs-target="#videoModal">
                                ▶
                            </button>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- VIDEO MODAL -->

    <div class="modal fade" id="videoModal">
        <div class="modal-dialog modal-lg modal-dialog-centered">

            <div class="modal-content">

                <div class="modal-body p-0">

                    <iframe id="video" width="100%" height="500" src="" frameborder="0" allowfullscreen>
                    </iframe>

                </div>

            </div>
        </div>
    </div>

    <!-- Latest Jobs SEction -->
    <section class="py-5 sec">
        <div class="container">
            <div class="heading text-center">
                <h5 class="text-success">Here You Can See</h5>
                <p class="fs-1"><span class="fw-bold">Latest</span> <span class="text-primary">Jobs</span></p>
            </div>

            <div class="row g-4 py-4">

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card border-0 shadow rounded-5 p-3">
                        <div class="card-body">
                            <span class="badge bg-success-subtle text-success px-3 py-2 rounded-pill">Full Time</span>
                            <h4 class="fw-bold mt-3">Technical Database Engineer</h4>
                            <div class="text-muted mt-2">
                                <div>
                                    <i class="fa-solid fa-building text-primary me-2"></i>Database Management Company
                                </div>
                                <div>
                                    <i class="fa-solid fa-location-dot text-primary me-2"></i>New York
                                </div>
                            </div>
                            <hr class="text-secondary">
                            <div class="d-flex justify-content-between align-items-center">

                                <div class="d-flex align-items-center gap-2">
                                    <div class="bg-light rounded-3 shadow p-2" style="background-color: #f1f5f9;">
                                        <img src="Asset/Image/emplogo1.jpg" width="35">
                                    </div>
                                    <div class="px-2">
                                        <small class="text-muted">Posted on</small><br>
                                        <strong>Mar 07, 2025</strong>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-outline-primary rounded-pill px-3">
                                    Apply Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card border-0 shadow rounded-5 p-3">
                        <div class="card-body">
                            <span class="badge px-3 py-2 rounded-pill bgr">Freelance</span>
                            <h4 class="fw-bold mt-3">Front-end Developer</h4>
                            <div class="text-muted mt-2">
                                <div>
                                    <i class="fa-solid fa-building text-primary me-2"></i>Creative Studio
                                </div>
                                <div>
                                    <i class="fa-solid fa-location-dot text-primary me-2"></i>Boston
                                </div>
                            </div>
                            <hr class="text-secondary">
                            <div class="d-flex justify-content-between align-items-center">

                                <div class="d-flex align-items-center gap-2">
                                    <div class="rounded-3 shadow p-2" style="background-color: #f1f5f9;">
                                        <img src="Asset/Image/emplogo11.jpg" width="35">
                                    </div>
                                    <div class="px-3">
                                        <small class="text-muted">Posted on</small><br>
                                        <strong>Mar 05, 2025</strong>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-outline-primary rounded-pill px-3">
                                    Apply Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card border-0 shadow rounded-5 p-3">
                        <div class="card-body">
                            <span class="badge px-3 py-2 rounded-pill bgr1">Part Time</span>
                            <h4 class="fw-bold mt-3">Product Designer</h4>
                            <div class="text-muted mt-2">
                                <div>
                                    <i class="fa-solid fa-building text-primary me-2"></i>Bright Agency
                                </div>
                                <div>
                                    <i class="fa-solid fa-location-dot text-primary me-2"></i>Chicago
                                </div>
                            </div>
                            <hr class="text-secondary">
                            <div class="d-flex justify-content-between align-items-center">

                                <div class="d-flex align-items-center gap-2">
                                    <div class="bg-light rounded-3 shadow-sm p-2">
                                        <img src="Asset/Image/emplogo12.jpg" width="35">
                                    </div>
                                    <div class="px-3">
                                        <small class="text-muted">Posted on</small><br>
                                        <strong>Mar 04, 2025</strong>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-outline-primary rounded-pill px-3">
                                    Apply Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card border-0 shadow rounded-5 p-3">
                        <div class="card-body">
                            <span class="badge px-3 py-2 rounded-pill bgr">Freelance</span>
                            <h4 class="fw-bold mt-3">Mobile Developer</h4>
                            <div class="text-muted mt-2">
                                <div>
                                    <i class="fa-solid fa-building text-primary me-2"></i>Appify Labs
                                </div>
                                <div>
                                    <i class="fa-solid fa-location-dot text-primary me-2"></i> Remote
                                </div>
                            </div>
                            <hr class="text-secondary">
                            <div class="d-flex justify-content-between align-items-center">

                                <div class="d-flex align-items-center gap-2">
                                    <div class="bg-light rounded-3 shadow-sm p-2">
                                        <img src="Asset/Image/emplogo13.jpg" width="35">
                                    </div>
                                    <div class="px-3">
                                        <small class="text-muted">Posted on</small><br>
                                        <strong>Mar 02, 2025</strong>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-outline-primary rounded-pill px-3">
                                    Apply Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card border-0 shadow rounded-5 p-3">
                        <div class="card-body">
                            <span class="badge bg-success-subtle text-success px-3 py-2 rounded-pill">Full Time</span>
                            <h4 class="fw-bold mt-3">Senior UX Researcher</h4>
                            <div class="text-muted mt-2">
                                <div>
                                    <i class="fa-solid fa-building text-primary me-2"></i> Insights Co.
                                </div>
                                <div>
                                    <i class="fa-solid fa-location-dot text-primary me-2"></i> San Francisco
                                </div>
                            </div>
                            <hr class="text-secondary">
                            <div class="d-flex justify-content-between align-items-center">

                                <div class="d-flex align-items-center gap-2">
                                    <div class="bg-light rounded-3 shadow-sm p-2">
                                        <img src="Asset/Image/emplogo14.jpg" width="35">
                                    </div>
                                    <div class="px-3">
                                        <small class="text-muted">Posted on</small><br>
                                        <strong>Feb 28, 2025</strong>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-outline-primary rounded-pill px-3">
                                    Apply Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card border-0 shadow rounded-5 p-3">
                        <div class="card-body">
                            <span class="badge bg-success-subtle text-success px-3 py-2 rounded-pill">Full Time</span>
                            <h4 class="fw-bold mt-3">Systems Administrator</h4>
                            <div class="text-muted mt-2">
                                <div>
                                    <i class="fa-solid fa-building text-primary me-2"></i> Sphere Networks
                                </div>
                                <div>
                                    <i class="fa-solid fa-location-dot text-primary me-2"></i> Austin
                                </div>
                            </div>
                            <hr class="text-secondary">
                            <div class="d-flex justify-content-between align-items-center">

                                <div class="d-flex align-items-center gap-2">
                                    <div class="bg-light rounded-3 shadow-sm p-2">
                                        <img src="Asset/Image/emplogo15.jpg" width="35">
                                    </div>
                                    <div class="px-3">
                                        <small class="text-muted">Posted on</small><br>
                                        <strong>Feb 26, 2025</strong>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-outline-primary rounded-pill px-3">
                                    Apply Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card border-0 shadow rounded-5 p-3">
                        <div class="card-body">
                            <span class="badge px-3 py-2 rounded-pill bgr1">Part Time</span>
                            <h4 class="fw-bold mt-3">Social Media Strategist</h4>
                            <div class="text-muted mt-2">
                                <div>
                                    <i class="fa-solid fa-building text-primary me-2"></i> Connect Agency
                                </div>
                                <div>
                                    <i class="fa-solid fa-location-dot text-primary me-2"></i>Denver
                                </div>
                            </div>
                            <hr class="text-secondary">
                            <div class="d-flex justify-content-between align-items-center">

                                <div class="d-flex align-items-center gap-2">
                                    <div class="bg-light rounded-3 shadow-sm p-2">
                                        <img src="Asset/Image/emplogo16.jpg" width="35">
                                    </div>
                                    <div class="px-3">
                                        <small class="text-muted">Posted on</small><br>
                                        <strong>Feb 25, 2025</strong>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-outline-primary rounded-pill px-3">
                                    Apply Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card border-0 shadow rounded-5 p-3">
                        <div class="card-body">
                            <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill">Remote</span>
                            <h4 class="fw-bold mt-3">Support Engineer</h4>
                            <div class="text-muted mt-2">
                                <div>
                                    <i class="fa-solid fa-building text-primary me-2"></i> Helpline Inc.
                                </div>
                                <div>
                                    <i class="fa-solid fa-location-dot text-primary me-2"></i> Remote
                                </div>
                            </div>
                            <hr class="text-secondary">
                            <div class="d-flex justify-content-between align-items-center">

                                <div class="d-flex align-items-center gap-2">
                                    <div class="bg-light rounded-3 shadow-sm p-2">
                                        <img src="Asset/Image/emplogo3.jpg" width="35">
                                    </div>
                                    <div class="px-3">
                                        <small class="text-muted">Posted on</small><br>
                                        <strong>Feb 23, 2025</strong>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-outline-primary rounded-pill px-3">
                                    Apply Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card border-0 shadow rounded-5 p-3">
                        <div class="card-body">
                            <span class="badge bg-success-subtle text-success px-3 py-2 rounded-pill">Full Time</span>
                            <h4 class="fw-bold mt-3">Backend Engineer</h4>
                            <div class="text-muted mt-2">
                                <div>
                                    <i class="fa-solid fa-building text-primary me-2"></i>Rapid Systems
                                </div>
                                <div>
                                    <i class="fa-solid fa-location-dot text-primary me-2"></i> Phoenix
                                </div>
                            </div>
                            <hr class="text-secondary">
                            <div class="d-flex justify-content-between align-items-center">

                                <div class="d-flex align-items-center gap-2">
                                    <div class="bg-light rounded-3 shadow-sm p-2">
                                        <img src="Asset/Image/emplogo2.jpg" width="35">
                                    </div>
                                    <div class="px-3">
                                        <small class="text-muted">Posted on</small><br>
                                        <strong>Feb 22, 2025</strong>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-outline-primary rounded-pill px-3">
                                    Apply Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center pt-">
                <a href="#" type="button" class="view-btn btn btn-primary rounded-pill py-3 px-5">View All Latest
                    Jobs</a>
            </div>
        </div>

    </section>

    <!-- cityslider -->
    <section>
        <div style="background: linear-gradient(to right, #f3f7ff, #e8f8fe) ;">
            <div class="container" style="padding-top: 40px; padding-bottom: 40px;">

                <p class=" sub-title text-center">Choose Your Location</p>
                <h2 class=" main-title text-center">Jobs by Cities</h2>

                <div class="swiper mySlider">

                    <div class="swiper-wrapper">


                        <!-- CARD 1 -->
                        <div class="swiper-slide">

                            <div class="city-card">

                                <img src="https://images.unsplash.com/photo-1536421469767-80559bb6f5e1">

                                <div class="overlay"></div>

                                <div class="city-name">ATLANTA</div>

                                <div class="job-count">
                                    <i class="bi bi-briefcase-fill"></i>
                                    18 JOBS
                                </div>

                            </div>

                        </div>



                        <!-- CARD 2 -->
                        <div class="swiper-slide">

                            <div class="city-card">

                                <img src="https://images.unsplash.com/photo-1480714378408-67cf0d13bc1b">

                                <div class="overlay"></div>

                                <div class="city-name">BARRINGTON</div>

                                <div class="job-count">
                                    <i class="bi bi-briefcase-fill"></i>
                                    9 JOBS
                                </div>

                            </div>

                        </div>



                        <!-- CARD 3 -->
                        <div class="swiper-slide">

                            <div class="city-card">

                                <img src="https://images.unsplash.com/photo-1477959858617-67f85cf4f1df">

                                <div class="overlay"></div>

                                <div class="city-name">DURANT</div>

                                <div class="job-count">
                                    <i class="bi bi-briefcase-fill"></i>
                                    12 JOBS
                                </div>

                            </div>

                        </div>



                        <!-- CARD 4 -->
                        <div class="swiper-slide">

                            <div class="city-card">

                                <img src="https://images.unsplash.com/photo-1494526585095-c41746248156">

                                <div class="overlay"></div>

                                <div class="city-name">BESSEMER</div>

                                <div class="job-count">
                                    <i class="bi bi-briefcase-fill"></i>
                                    6 JOBS
                                </div>

                            </div>

                        </div>

                        <!-- CARD 5 -->

                        <div class="swiper-slide">

                            <div class="city-card">

                                <img src="https://images.unsplash.com/photo-1494526585095-c41746248156">

                                <div class="overlay"></div>

                                <div class="city-name">BESSEMER</div>

                                <div class="job-count">
                                    <i class="bi bi-briefcase-fill"></i>
                                    6 JOBS
                                </div>

                            </div>

                        </div>

                        <!-- CARD 6 -->

                        <div class="swiper-slide">

                            <div class="city-card">

                                <img src="https://images.unsplash.com/photo-1477959858617-67f85cf4f1df">

                                <div class="overlay"></div>

                                <div class="city-name">DURANT</div>

                                <div class="job-count">
                                    <i class="bi bi-briefcase-fill"></i>
                                    12 JOBS
                                </div>

                            </div>

                        </div>


                    </div>

                </div>

            </div>
        </div>

    </section>

    <!-- testimonial -->
    <section class="testimonial-section py-5">
        <div class="container">

            <div class="text-center mb-5">
                <h5 class="text-success fw-semibold">Stories from our community</h5>
                <h1 class="fw-bold">Success Stories</h1>
            </div>

            <div class="slider-wrapper">

                <button class="nav-btn prev-btn" id="prevBtn">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>

                <div class="marquee-container" id="sliderContainer">
                    <div class="marquee-track" id="sliderTrack">

                        <div class="testimonial-card card border-0 shadow-sm p-4">
                            <i class="fa-solid fa-quote-left text-primary fs-3 mb-3"></i>
                            <p class="text-muted flex-grow-1">
                                "JobsPortal helped me land my dream role within weeks. The process was clean, seamless,
                                and
                                the support team was always ready to assist."
                            </p>
                            <div class="d-flex align-items-center gap-3 mt-4">
                                <img src="Asset/Image/user1.jpg" width="55" class="rounded-circle shadow-sm"
                                    alt="Samantha Lee">
                                <div>
                                    <h6 class="mb-0 fw-bold">Samantha Lee</h6>
                                    <small class="text-muted">Product Designer, Bright Labs</small>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial-card card border-0 shadow-sm p-4">
                            <i class="fa-solid fa-quote-left text-primary fs-3 mb-3"></i>
                            <p class="text-muted flex-grow-1">
                                "As an employer, we found top talent faster than ever before. The platform makes
                                publishing
                                jobs and managing applicants incredibly simple."
                            </p>
                            <div class="d-flex align-items-center gap-3 mt-4">
                                <img src="Asset/Image/user2.jpg" width="55" class="rounded-circle shadow-sm"
                                    alt="Michael Robinson">
                                <div>
                                    <h6 class="mb-0 fw-bold">Michael Robinson</h6>
                                    <small class="text-muted">HR Manager, SphereTech</small>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial-card card border-0 shadow-sm p-4">
                            <i class="fa-solid fa-quote-left text-primary fs-3 mb-3"></i>
                            <p class="text-muted flex-grow-1">
                                "We scaled our hiring pipeline dramatically thanks to JobsPortal's reach and
                                user-friendly
                                tools."
                            </p>
                            <div class="d-flex align-items-center gap-3 mt-4">
                                <img src="Asset/Image/user3.jpg" width="55" class="rounded-circle shadow-sm"
                                    alt="Liam Carter">
                                <div>
                                    <h6 class="mb-0 fw-bold">Liam Carter</h6>
                                    <small class="text-muted">Founder, Appify Labs</small>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial-card card border-0 shadow-sm p-4">
                            <i class="fa-solid fa-quote-left text-primary fs-3 mb-3"></i>
                            <p class="text-muted flex-grow-1">
                                "I appreciate the curated job recommendations and the ability to connect directly with
                                companies that align with my values."
                            </p>
                            <div class="d-flex align-items-center gap-3 mt-4">
                                <img src="Asset/Image/user4.jpg" width="55" class="rounded-circle shadow-sm"
                                    alt="Priya Patel">
                                <div>
                                    <h6 class="mb-0 fw-bold">Priya Patel</h6>
                                    <small class="text-muted">Software Engineer, Connect People</small>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial-card card border-0 shadow-sm p-4">
                            <i class="fa-solid fa-quote-left text-primary fs-3 mb-3"></i>
                            <p class="text-muted flex-grow-1">
                                "JobsPortal helped me land my dream role within weeks. The process was clean, seamless,
                                and
                                the support team was always ready to assist."
                            </p>
                            <div class="d-flex align-items-center gap-3 mt-4">
                                <img src="Asset/Image/user1.jpg" width="55" class="rounded-circle shadow-sm"
                                    alt="Samantha Lee">
                                <div>
                                    <h6 class="mb-0 fw-bold">Samantha Lee</h6>
                                    <small class="text-muted">Product Designer, Bright Labs</small>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial-card card border-0 shadow-sm p-4">
                            <i class="fa-solid fa-quote-left text-primary fs-3 mb-3"></i>
                            <p class="text-muted flex-grow-1">
                                "As an employer, we found top talent faster than ever before. The platform makes
                                publishing
                                jobs and managing applicants incredibly simple."
                            </p>
                            <div class="d-flex align-items-center gap-3 mt-4">
                                <img src="Asset/Image/user2.jpg" width="55" class="rounded-circle shadow-sm"
                                    alt="Michael Robinson">
                                <div>
                                    <h6 class="mb-0 fw-bold">Michael Robinson</h6>
                                    <small class="text-muted">HR Manager, SphereTech</small>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial-card card border-0 shadow-sm p-4">
                            <i class="fa-solid fa-quote-left text-primary fs-3 mb-3"></i>
                            <p class="text-muted flex-grow-1">
                                "We scaled our hiring pipeline dramatically thanks to JobsPortal's reach and
                                user-friendly
                                tools."
                            </p>
                            <div class="d-flex align-items-center gap-3 mt-4">
                                <img src="Asset/Image/user3.jpg" width="55" class="rounded-circle shadow-sm"
                                    alt="Liam Carter">
                                <div>
                                    <h6 class="mb-0 fw-bold">Liam Carter</h6>
                                    <small class="text-muted">Founder, Appify Labs</small>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial-card card border-0 shadow-sm p-4">
                            <i class="fa-solid fa-quote-left text-primary fs-3 mb-3"></i>
                            <p class="text-muted flex-grow-1">
                                "I appreciate the curated job recommendations and the ability to connect directly with
                                companies that align with my values."
                            </p>
                            <div class="d-flex align-items-center gap-3 mt-4">
                                <img src="Asset/Image/user4.jpg" width="55" class="rounded-circle shadow-sm"
                                    alt="Priya Patel">
                                <div>
                                    <h6 class="mb-0 fw-bold">Priya Patel</h6>
                                    <small class="text-muted">Software Engineer, Connect People</small>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <button class="nav-btn next-btn" id="nextBtn">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>

            </div>
        </div>
    </section>

    
    <?php include "common/footer.php" ?>
</body>

</html>
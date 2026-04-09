<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Connect | Jobs</title>
    <?php include "../../common/header_sc.php"; ?>
    <link rel="stylesheet" href="../../asset/css/jobsection.css">

</head>

<body>
    <div>
        <!-- = = =  navber section  = = = -->
        <?php include "../../common/navbar_sc.php"; ?>


        <!-- job screen -->
        <section class="hero-bg">
            <div class="container px-4 px-lg-5">
                <div class="row justify-content-center justify-content-lg-center">
                    <div class="col-xl-9 col-lg-10">

                        <div class="text-center text-lg-start">
                            <span class="badge rounded-pill custom-badge px-3 py-2 mb-4">
                                BROWSE OPPORTUNITIES
                            </span>

                            <h1 class="display-5 hero-title mb-3">Find a role that matches your ambition</h1>

                            <p class="hero-subtitle mx-auto mx-lg-0">
                                Search thousands of curated openings across industries, experience levels, and
                                locations.
                            </p>
                        </div>

                        <form>
                            <div class="row g-3">

                                <div class="col-12 col-md-12 col-lg-5">
                                    <div class="input-group search-input-group input-primary-border overflow-hidden">
                                        <span class="input-group-text ps-3 pe-1">
                                            <i class="fa fa-search"></i>
                                        </span>
                                        <input type="text" class="form-control ps-2"
                                            placeholder="Job title, keyword or company">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-3">
                                    <div class="input-group search-input-group overflow-hidden">
                                        <span class="input-group-text ps-3 pe-1">
                                            <i class="fa fa-location-dot"></i>
                                        </span>
                                        <select class="form-select ps-2">
                                            <option selected>Location</option>
                                            <option value="1">Remote</option>
                                            <option value="2">New York</option>
                                            <option value="3">San Francisco</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-3">
                                    <div class="input-group search-input-group overflow-hidden">
                                        <span class="input-group-text ps-3 pe-1">
                                            <i class="fa fa-briefcase"></i>
                                        </span>
                                        <select class="form-select ps-2">
                                            <option selected>Category</option>
                                            <option value="1">Engineering</option>
                                            <option value="2">Design</option>
                                            <option value="3">Marketing</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-12 col-lg-1">
                                    <button
                                        class="btn btn-primary btn-search w-100 fs-5 d-flex justify-content-center align-items-center"
                                        type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>

        <!-- job section -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row g-4">

                    <!-- LEFT SIDEBAR -->
                    <div class="col-lg-3 d-none d-lg-block">

                        <!-- Filters -->
                        <div class="card p-3 mb-4 rounded-3 border-0 shadow-sm">
                            <h6 class="fw-bold">Job Type</h6>

                            <div class="d-flex justify-content-between align-items-center py-1">
                                <div class="d-flex align-items-center gap-2">
                                    <input class="form-check-input m-0" id="ftime" type="checkbox">
                                    <label class="mb-0" for="ftime">Full Time/Permanent</label>
                                </div>
                                <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                                    12
                                </span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center py-1">
                                <div class="d-flex align-items-center gap-2">
                                    <input class="form-check-input m-0" id="chk2" type="checkbox">
                                    <label for="chk2" class="mb-0">Contract</label>
                                </div>
                                <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                                    33
                                </span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center py-1">
                                <div class="d-flex align-items-center gap-2">
                                    <input class="form-check-input m-0" id="chk3" type="checkbox">
                                    <label for="chk3" class="mb-0">Part Time</label>
                                </div>
                                <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                                    18
                                </span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center py-1">
                                <div class="d-flex align-items-center gap-2">
                                    <input class="form-check-input m-0" id="chk4" type="checkbox">
                                    <label for="chk4" class="mb-0">Internship</label>
                                </div>
                                <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                                    11
                                </span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center py-1">
                                <div class="d-flex align-items-center gap-2">
                                    <input class="form-check-input m-0" id="chk5" type="checkbox">
                                    <label for="chk5" class="mb-0">Freelance</label>
                                </div>
                                <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                                    9
                                </span>
                            </div>
                        </div>

                        <!-- Location -->
                        <div class="card p-3 mb-4 rounded-3 border-0 shadow-sm">
                            <h6 class="fw-bold">Location</h6>

                            <div class="d-flex justify-content-between align-items-center py-1">
                                <div class="d-flex align-items-center gap-2">
                                    <input class="form-check-input m-0" id="lc1" type="checkbox">
                                    <label class="mb-0" for="lc1">Fairbanks</label>
                                </div>
                                <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                                    8
                                </span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center py-1">
                                <div class="d-flex align-items-center gap-2">
                                    <input class="form-check-input m-0" id="lc2" type="checkbox">
                                    <label for="lc2" class="mb-0">Bessemer</label>
                                </div>
                                <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                                    6
                                </span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center py-1">
                                <div class="d-flex align-items-center gap-2">
                                    <input class="form-check-input m-0" id="lc3" type="checkbox">
                                    <label for="lc3" class="mb-0">Barrington</label>
                                </div>
                                <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                                    4
                                </span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center py-1">
                                <div class="d-flex align-items-center gap-2">
                                    <input class="form-check-input m-0" id="lc4" type="checkbox">
                                    <label for="lc4" class="mb-0">Durant</label>
                                </div>
                                <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                                    3
                                </span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center py-1">
                                <div class="d-flex align-items-center gap-2">
                                    <input class="form-check-input m-0" id="lc5" type="checkbox">
                                    <label for="lc5" class="mb-0">Blaine</label>
                                </div>
                                <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                                    2
                                </span>
                            </div>
                        </div>

                        <!-- Industry -->
                        <div class="card p-3 mb-4 rounded-3 border-0 shadow-sm">
                            <h6 class="fw-bold">Industry</h6>

                            <div class="d-flex justify-content-between align-items-center py-1">
                                <div class="d-flex align-items-center gap-2">
                                    <input class="form-check-input m-0" id="ins1" type="checkbox">
                                    <label class="mb-0" for="ins1">Information Technology</label>
                                </div>
                                <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                                    22
                                </span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center py-1">
                                <div class="d-flex align-items-center gap-2">
                                    <input class="form-check-input m-0" id="ins2" type="checkbox">
                                    <label for="ins2" class="mb-0">Advertising/PR</label>
                                </div>
                                <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                                    15
                                </span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center py-1">
                                <div class="d-flex align-items-center gap-2">
                                    <input class="form-check-input m-0" id="ins3" type="checkbox">
                                    <label for="ins3" class="mb-0">Media & Communications</label>
                                </div>
                                <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                                    13
                                </span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center py-1">
                                <div class="d-flex align-items-center gap-2">
                                    <input class="form-check-input m-0" id="ins4" type="checkbox">
                                    <label for="ins4" class="mb-0">Fashion</label>
                                </div>
                                <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                                    9
                                </span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center py-1">
                                <div class="d-flex align-items-center gap-2">
                                    <input class="form-check-input m-0" id="ins5" type="checkbox">
                                    <label for="ins5" class="mb-0">Health & Fitness</label>
                                </div>
                                <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                                    7
                                </span>
                            </div>
                        </div>

                        <!-- Salary Range -->
                        <div class="card p-3 mb-4 rounded-3 border-0 shadow-sm">
                            <h6 class="fw-bold">Salary Range</h6>

                            <div class="d-flex justify-content-between align-items-center py-1">
                                <div class="d-flex align-items-center gap-2">
                                    <input class="form-check-input m-0" id="sr1" type="checkbox">
                                    <label class="mb-0" for="sr1">$2k - $4k</label>
                                </div>
                                <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                                    12
                                </span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center py-1">
                                <div class="d-flex align-items-center gap-2">
                                    <input class="form-check-input m-0" id="sr2" type="checkbox">
                                    <label for="sr2" class="mb-0">$2k - $4k</label>
                                </div>
                                <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                                    33
                                </span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center py-1">
                                <div class="d-flex align-items-center gap-2">
                                    <input class="form-check-input m-0" id="sr3" type="checkbox">
                                    <label for="sr3" class="mb-0">$2k - $4k</label>
                                </div>
                                <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                                    18
                                </span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center py-1">
                                <div class="d-flex align-items-center gap-2">
                                    <input class="form-check-input m-0" id="sr4" type="checkbox">
                                    <label for="sr4" class="mb-0">$2k - $4k</label>
                                </div>
                                <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                                    11
                                </span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center py-1">
                                <div class="d-flex align-items-center gap-2">
                                    <input class="form-check-input m-0" id="sr5" type="checkbox">
                                    <label for="sr5" class="mb-0">$2k - $4k</label>
                                </div>
                                <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                                    9
                                </span>
                            </div>
                        </div>

                    </div>

                    <!-- RIGHT CONTENT -->
                    <div class="col-lg-9">

                        <!-- HEADER -->
                        <div class="d-flex justify-content-between align-items-center mb-4">

                            <h3 class="fw-bold mb-0">18 Jobs Found</h3>

                            <div class="d-flex align-items-center gap-2">


                                <!-- Filter for Mobile view -->
                                <div class="d-lg-none d-flex justify-content-center align-items-center rounded-pill"
                                    style="background-color:#dde5d9; width:36px; height:36px;">
                                    <button class="btn p-0" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop"
                                        aria-controls="staticBackdrop">
                                        <i class="fa-solid fa-sliders"></i>
                                    </button>
                                </div>

                                <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1"
                                    id="staticBackdrop" aria-labelledby="staticBackdropLabel">
                                    <div class="offcanvas-header">
                                        <h5 class="offcanvas-title" id="staticBackdropLabel">Filter Your Jobs</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                        <div class="row">

                                            <div class="col-12">
                                                <div class="card p-3 mb-4 rounded-3 border-0 shadow-sm">
                                                    <h6 class="fw-bold">Job Type</h6>

                                                    <div class="d-flex justify-content-between align-items-center py-1">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <input class="form-check-input m-0" id="ftime"
                                                                type="checkbox">
                                                            <label class="mb-0" for="ftime">Full Time/Permanent</label>
                                                        </div>
                                                        <span
                                                            class="badge rounded-pill bg-primary-subtle text-primary px-2">
                                                            12
                                                        </span>
                                                    </div>

                                                    <div class="d-flex justify-content-between align-items-center py-1">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <input class="form-check-input m-0" id="chk2"
                                                                type="checkbox">
                                                            <label for="chk2" class="mb-0">Contract</label>
                                                        </div>
                                                        <span
                                                            class="badge rounded-pill bg-primary-subtle text-primary px-2">
                                                            33
                                                        </span>
                                                    </div>

                                                    <div class="d-flex justify-content-between align-items-center py-1">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <input class="form-check-input m-0" id="chk3"
                                                                type="checkbox">
                                                            <label for="chk3" class="mb-0">Part Time</label>
                                                        </div>
                                                        <span
                                                            class="badge rounded-pill bg-primary-subtle text-primary px-2">
                                                            18
                                                        </span>
                                                    </div>

                                                    <div class="d-flex justify-content-between align-items-center py-1">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <input class="form-check-input m-0" id="chk4"
                                                                type="checkbox">
                                                            <label for="chk4" class="mb-0">Internship</label>
                                                        </div>
                                                        <span
                                                            class="badge rounded-pill bg-primary-subtle text-primary px-2">
                                                            11
                                                        </span>
                                                    </div>

                                                    <div class="d-flex justify-content-between align-items-center py-1">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <input class="form-check-input m-0" id="chk5"
                                                                type="checkbox">
                                                            <label for="chk5" class="mb-0">Freelance</label>
                                                        </div>
                                                        <span
                                                            class="badge rounded-pill bg-primary-subtle text-primary px-2">
                                                            9
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="card p-3 mb-4 rounded-3 border-0 shadow-sm">
                                                    <h6 class="fw-bold">Location</h6>

                                                    <div class="d-flex justify-content-between align-items-center py-1">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <input class="form-check-input m-0" id="lc1"
                                                                type="checkbox">
                                                            <label class="mb-0" for="lc1">Fairbanks</label>
                                                        </div>
                                                        <span
                                                            class="badge rounded-pill bg-primary-subtle text-primary px-2">
                                                            8
                                                        </span>
                                                    </div>

                                                    <div class="d-flex justify-content-between align-items-center py-1">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <input class="form-check-input m-0" id="lc2"
                                                                type="checkbox">
                                                            <label for="lc2" class="mb-0">Bessemer</label>
                                                        </div>
                                                        <span
                                                            class="badge rounded-pill bg-primary-subtle text-primary px-2">
                                                            6
                                                        </span>
                                                    </div>

                                                    <div class="d-flex justify-content-between align-items-center py-1">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <input class="form-check-input m-0" id="lc3"
                                                                type="checkbox">
                                                            <label for="lc3" class="mb-0">Barrington</label>
                                                        </div>
                                                        <span
                                                            class="badge rounded-pill bg-primary-subtle text-primary px-2">
                                                            4
                                                        </span>
                                                    </div>

                                                    <div class="d-flex justify-content-between align-items-center py-1">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <input class="form-check-input m-0" id="lc4"
                                                                type="checkbox">
                                                            <label for="lc4" class="mb-0">Durant</label>
                                                        </div>
                                                        <span
                                                            class="badge rounded-pill bg-primary-subtle text-primary px-2">
                                                            3
                                                        </span>
                                                    </div>

                                                    <div class="d-flex justify-content-between align-items-center py-1">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <input class="form-check-input m-0" id="lc5"
                                                                type="checkbox">
                                                            <label for="lc5" class="mb-0">Blaine</label>
                                                        </div>
                                                        <span
                                                            class="badge rounded-pill bg-primary-subtle text-primary px-2">
                                                            2
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="12">
                                                <div class="card p-3 mb-4 rounded-3 border-0 shadow-sm">
                                                    <h6 class="fw-bold">Industry</h6>

                                                    <div class="d-flex justify-content-between align-items-center py-1">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <input class="form-check-input m-0" id="ins1"
                                                                type="checkbox">
                                                            <label class="mb-0" for="ins1">Information
                                                                Technology</label>
                                                        </div>
                                                        <span
                                                            class="badge rounded-pill bg-primary-subtle text-primary px-2">
                                                            22
                                                        </span>
                                                    </div>

                                                    <div class="d-flex justify-content-between align-items-center py-1">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <input class="form-check-input m-0" id="ins2"
                                                                type="checkbox">
                                                            <label for="ins2" class="mb-0">Advertising/PR</label>
                                                        </div>
                                                        <span
                                                            class="badge rounded-pill bg-primary-subtle text-primary px-2">
                                                            15
                                                        </span>
                                                    </div>

                                                    <div class="d-flex justify-content-between align-items-center py-1">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <input class="form-check-input m-0" id="ins3"
                                                                type="checkbox">
                                                            <label for="ins3" class="mb-0">Media &
                                                                Communications</label>
                                                        </div>
                                                        <span
                                                            class="badge rounded-pill bg-primary-subtle text-primary px-2">
                                                            13
                                                        </span>
                                                    </div>

                                                    <div class="d-flex justify-content-between align-items-center py-1">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <input class="form-check-input m-0" id="ins4"
                                                                type="checkbox">
                                                            <label for="ins4" class="mb-0">Fashion</label>
                                                        </div>
                                                        <span
                                                            class="badge rounded-pill bg-primary-subtle text-primary px-2">
                                                            9
                                                        </span>
                                                    </div>

                                                    <div class="d-flex justify-content-between align-items-center py-1">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <input class="form-check-input m-0" id="ins5"
                                                                type="checkbox">
                                                            <label for="ins5" class="mb-0">Health & Fitness</label>
                                                        </div>
                                                        <span
                                                            class="badge rounded-pill bg-primary-subtle text-primary px-2">
                                                            7
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center d-flex flex-column mx-auto" style="width: 90%;">
                                                <button type="button"
                                                    class="btn bg-primary-subtle text-primary rounded-4 px-5 py-2 mb-2">Apply
                                                    Filters</button>
                                                <button type="button"
                                                    class="btn btn btn-outline-info rounded-5 border-0 text-black">Clear
                                                    All</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <select class="form-select form-select-sm">
                                    <option>Most recent</option>
                                    <option>Salary (High to Low)</option>
                                    <option>Salary (Low to Hight)</option>
                                    <option>Featured</option>
                                </select>

                            </div>
                        </div>

                        <!-- JOB CARD -->
                        <div class="card p-4 mb-4 shadow-sm rounded-4 jobcards_hover">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge rounded-pill bg-success-subtle text-success px-3 py-2">
                                    Full Time/Permanent
                                </span>
                                <div class="bg-danger rounded-circle d-flex align-items-center justify-content-center"
                                    style="width:40px; height:40px;">
                                    <i class="fa-solid fa-bolt text-white"></i>
                                </div>
                            </div>

                            <div class="d-flex mt-3">
                                <div class="me-3">
                                    <img src="../../asset/Image/emplogo1.jpg" width="60" class="rounded-4 shadow-sm">
                                </div>

                                <div class="flex-grow-1">
                                    <h5 class="fw-bold mb-1">UI UX Designer Required</h5>
                                    <div class="d-flex justify-content-between align-items-center small_scr_break">
                                        <div class="meta-info text-muted small d-flex gap-3">
                                            <div><i class="fa fa-briefcase text-primary"></i> Multimedia Design</div>
                                            <div><i class="fa fa-location-dot text-primary"></i> Fairbanks</div>
                                            <div>$2500 - $3000</div>
                                        </div>
                                        <a href="#" class="btn btn-outline-primary rounded-pill px-4">
                                            View Details
                                        </a>
                                    </div>

                                    <div class="d-flex justify-content-between align-items-start mt-2">
                                        <p class="text-muted small mb-0" style="max-width:80%;">
                                            We are seeking a multi-disciplinary designer to ship intuitive product
                                            experiences for our expanding SaaS platform.
                                        </p>
                                        <div class="bg-body-tertiary rounded-circle d-flex align-items-center justify-content-center ms-3 bookmrk-hover"
                                            style="width:40px; height:40px;">
                                            <i class="fa-regular fa-bookmark"></i>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <hr class="my-3 opacity-25">

                            <div class="d-flex justify-content-between text-muted small">
                                <span>Posted Mar 07, 2025</span>
                                <span>ID: JP-2183</span>
                            </div>

                        </div>

                        <div class="card p-4 mb-4 shadow-sm rounded-4 jobcards_hover">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge rounded-pill bg-success-subtle text-success px-3 py-2">
                                    Full Time/Permanent
                                </span>
                                <div class="bg-danger rounded-circle d-flex align-items-center justify-content-center"
                                    style="width:40px; height:40px;">
                                    <i class="fa-solid fa-bolt text-white"></i>
                                </div>
                            </div>

                            <div class="d-flex mt-3">
                                <div class="me-3">
                                    <img src="../../asset/Image/emplogo1.jpg" width="60" class="rounded-4 shadow-sm">
                                </div>

                                <div class="flex-grow-1">
                                    <h5 class="fw-bold mb-1">UI UX Designer Required</h5>
                                    <div class="d-flex justify-content-between align-items-center small_scr_break">
                                        <div class="meta-info text-muted small d-flex gap-3">
                                            <div><i class="fa fa-briefcase text-primary"></i> Multimedia Design</div>
                                            <div><i class="fa fa-location-dot text-primary"></i> Fairbanks</div>
                                            <div>$2500 - $3000</div>
                                        </div>
                                        <a href="#" class="btn btn-outline-primary rounded-pill px-4">
                                            View Details
                                        </a>
                                    </div>

                                    <div class="d-flex justify-content-between align-items-start mt-2">
                                        <p class="text-muted small mb-0" style="max-width:80%;">
                                            We are seeking a multi-disciplinary designer to ship intuitive product
                                            experiences for our expanding SaaS platform.
                                        </p>
                                        <div class="bg-body-tertiary rounded-circle d-flex align-items-center justify-content-center ms-3 bookmrk-hover"
                                            style="width:40px; height:40px;">
                                            <i class="fa-regular fa-bookmark"></i>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <hr class="my-3 opacity-25">

                            <div class="d-flex justify-content-between text-muted small">
                                <span>Posted Mar 07, 2025</span>
                                <span>ID: JP-2183</span>
                            </div>

                        </div>
                        <div class="card p-4 mb-4 shadow-sm rounded-4 jobcards_hover">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge rounded-pill bg-success-subtle text-success px-3 py-2">
                                    Full Time/Permanent
                                </span>
                                <div class="bg-danger rounded-circle d-flex align-items-center justify-content-center"
                                    style="width:40px; height:40px;">
                                    <i class="fa-solid fa-bolt text-white"></i>
                                </div>
                            </div>

                            <div class="d-flex mt-3">
                                <div class="me-3">
                                    <img src="../../asset/Image/emplogo1.jpg" width="60" class="rounded-4 shadow-sm">
                                </div>

                                <div class="flex-grow-1">
                                    <h5 class="fw-bold mb-1">UI UX Designer Required</h5>
                                    <div class="d-flex justify-content-between align-items-center small_scr_break">
                                        <div class="meta-info text-muted small d-flex gap-3">
                                            <div><i class="fa fa-briefcase text-primary"></i> Multimedia Design</div>
                                            <div><i class="fa fa-location-dot text-primary"></i> Fairbanks</div>
                                            <div>$2500 - $3000</div>
                                        </div>
                                        <a href="#" class="btn btn-outline-primary rounded-pill px-4">
                                            View Details
                                        </a>
                                    </div>

                                    <div class="d-flex justify-content-between align-items-start mt-2">
                                        <p class="text-muted small mb-0" style="max-width:80%;">
                                            We are seeking a multi-disciplinary designer to ship intuitive product
                                            experiences for our expanding SaaS platform.
                                        </p>
                                        <div class="bg-body-tertiary rounded-circle d-flex align-items-center justify-content-center ms-3 bookmrk-hover"
                                            style="width:40px; height:40px;">
                                            <i class="fa-regular fa-bookmark"></i>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <hr class="my-3 opacity-25">

                            <div class="d-flex justify-content-between text-muted small">
                                <span>Posted Mar 07, 2025</span>
                                <span>ID: JP-2183</span>
                            </div>

                        </div>

                        <div class="card p-4 mb-4 shadow-sm rounded-4 jobcards_hover">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge rounded-pill bg-success-subtle text-success px-3 py-2">
                                    Full Time/Permanent
                                </span>
                                <div class="bg-danger rounded-circle d-flex align-items-center justify-content-center"
                                    style="width:40px; height:40px;">
                                    <i class="fa-solid fa-bolt text-white"></i>
                                </div>
                            </div>

                            <div class="d-flex mt-3">
                                <div class="me-3">
                                    <img src="../../asset/Image/emplogo1.jpg" width="60" class="rounded-4 shadow-sm">
                                </div>

                                <div class="flex-grow-1">
                                    <h5 class="fw-bold mb-1">UI UX Designer Required</h5>
                                    <div class="d-flex justify-content-between align-items-center small_scr_break">
                                        <div class="meta-info text-muted small d-flex gap-3">
                                            <div><i class="fa fa-briefcase text-primary"></i> Multimedia Design</div>
                                            <div><i class="fa fa-location-dot text-primary"></i> Fairbanks</div>
                                            <div>$2500 - $3000</div>
                                        </div>
                                        <a href="#" class="btn btn-outline-primary rounded-pill px-4">
                                            View Details
                                        </a>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-start mt-2">
                                        <p class="text-muted small mb-0" style="max-width:80%;">
                                            We are seeking a multi-disciplinary designer to ship intuitive product
                                            experiences for our expanding SaaS platform.
                                        </p>
                                        <div class="bg-body-tertiary rounded-circle d-flex align-items-center justify-content-center ms-3 bookmrk-hover"
                                            style="width:40px; height:40px;">
                                            <i class="fa-regular fa-bookmark"></i>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <hr class="my-3 opacity-25">

                            <div class="d-flex justify-content-between text-muted small">
                                <span>Posted Mar 07, 2025</span>
                                <span>ID: JP-2183</span>
                            </div>

                        </div>

                        <div class="card p-4 mb-4 shadow-sm rounded-4 jobcards_hover">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge rounded-pill bg-success-subtle text-success px-3 py-2">
                                    Full Time/Permanent
                                </span>
                                <div class="bg-danger rounded-circle d-flex align-items-center justify-content-center"
                                    style="width:40px; height:40px;">
                                    <i class="fa-solid fa-bolt text-white"></i>
                                </div>
                            </div>

                            <div class="d-flex mt-3">
                                <div class="me-3">
                                    <img src="../../asset/Image/emplogo1.jpg" width="60" class="rounded-4 shadow-sm">
                                </div>

                                <div class="flex-grow-1">
                                    <h5 class="fw-bold mb-1">UI UX Designer Required</h5>
                                    <div class="d-flex justify-content-between align-items-center small_scr_break">
                                        <div class="meta-info text-muted small d-flex gap-3">
                                            <div><i class="fa fa-briefcase text-primary"></i> Multimedia Design</div>
                                            <div><i class="fa fa-location-dot text-primary"></i> Fairbanks</div>
                                            <div>$2500 - $3000</div>
                                        </div>
                                        <a href="#" class="btn btn-outline-primary rounded-pill px-4">
                                            View Details
                                        </a>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-start mt-2">
                                        <p class="text-muted small mb-0" style="max-width:80%;">
                                            We are seeking a multi-disciplinary designer to ship intuitive product
                                            experiences for our expanding SaaS platform.
                                        </p>
                                        <div class="bg-body-tertiary rounded-circle d-flex align-items-center justify-content-center ms-3 bookmrk-hover"
                                            style="width:40px; height:40px;">
                                            <i class="fa-regular fa-bookmark"></i>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <hr class="my-3 opacity-25">

                            <div class="d-flex justify-content-between text-muted small">
                                <span>Posted Mar 07, 2025</span>
                                <span>ID: JP-2183</span>
                            </div>

                        </div>


                        <div class="d-flex justify-content-between align-items-center">
                            <p class="text-muted">Showing 1-18 of 18 results</p>
                            <!-- PAGINATION -->
                            <nav aria-label="...">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item disabled">
                                        <a class="page-link">Previous</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item ">
                                        <a class="page-link" href="#" aria-current="page">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>


                    </div>

                </div>
            </div>

        </section>




        <?php include "../../common/footer_sc.php"; ?>
    </div>
</body>

</html>
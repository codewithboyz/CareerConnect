<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Public Profile</title>

    <?php include "../../common/header_sc.php"; ?>
    <link rel="stylesheet" href="../../asset/css/public_profile.css">
</head>

<body>

    <?php include "../../common/navbar_sc.php"; ?>

    <div class="container mt-4 mb-5">
        <div class="row">

            <aside class="col-lg-3 d-none d-lg-block">
                <?php include "../../common/slidebar.php"; ?>
            </aside>

            <main class="col-lg-9 col-12">

                <button class="btn btn-outline-primary d-lg-none mb-3" data-bs-toggle="offcanvas"
                    data-bs-target="#mobileSidebar" aria-controls="mobileSidebar">
                    <i class="fa-solid fa-bars me-2"></i> Menu
                </button>

                <div class="d-flex flex-column gap-4">

                    <div class="card rounded-5 border-0 shadow-sm p-3">
                        <div class="card-body">
                            <h3 class="card-title">Public Profile Preview</h3>
                            Review what hiring teams see, control visibility, and keep your showcase links updated.
                            </p>
                            <div class="d-flex flex-column flex-md-row gap-3">
                                <button type="button" class="btn btn-outline-primary"><i class="fa-solid fa-link"></i>
                                    Copy Link</button>
                                <a href="#" class="btn btn-primary "><i class="fa-solid fa-eye"></i> View live
                                    profile</a>
                            </div>
                        </div>
                    </div>

                    <div class="card border-0 shadow-sm rounded-5 p-4 mb-4">
                        <div class="d-flex flex-column flex-md-row gap-4 align-items-md-center">

                            <div class="flex-shrink-0 text-center text-md-start">
                                <img src="https://sharjeelanjum.com/html/jobs-portal/images/candidates/01.jpg"
                                    alt="Job Seeker" class="rounded-4 object-fit-cover shadow-sm"
                                    style="width: 120px; height: 120px;">
                            </div>

                            <div class="flex-grow-1">
                                <h3 class="fw-bold mb-2 text-dark">Job Seeker</h3>

                                <p class="text-secondary mb-3 fs-6">
                                    Lead Product Designer &middot; Remote friendly &middot; Currently shipping fintech
                                    experiences with Skyline Digital.
                                </p>

                                <div class="d-flex flex-wrap gap-4 text-secondary" style="font-size: 0.95rem;">

                                    <div class="d-flex align-items-center fw-medium">
                                        <i class="fa-solid fa-location-dot me-2 fs-6"></i>
                                        Seattle, USA
                                    </div>

                                    <div class="d-flex align-items-center fw-medium">
                                        <i class="fa-solid fa-briefcase me-2 fs-6"></i>
                                        10+ yrs experience
                                    </div>

                                    <div class="d-flex align-items-center fw-medium">
                                        <i class="fa-solid fa-globe me-2 fs-6"></i>
                                        jobsportal.com/jordan
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card rounded-5 border-0 shadow-sm p-4 mb-4">
                        <h4 class="fw-bold mb-4 text-dark">Visibility Controls</h4>

                        <div class="d-flex flex-column">

                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="fw-bold text-dark">Recruiter search</h6>
                                    <p class="text-muted">Allow verified recruiters to discover you in search results.
                                    </p>
                                </div>
                                <div class="d-flex">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input prf-switch" type="checkbox" checked>
                                    </div>
                                </div>
                            </div>
                            <hr class="opacity-25">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="fw-bold text-dark">Public link</h6>
                                    <p class="text-muted">People with the link can view your profile.</p>
                                </div>
                                <div class="d-flex">
                                    <div class="form-check form-switch ">
                                        <input class="form-check-input prf-switch" type="checkbox" checked>
                                    </div>
                                </div>
                            </div>
                            <hr class="opacity-25">

                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="fw-bold text-dark">Search engine indexing</h6>
                                    <p class="text-muted">Let Google index your profile (can take up to 2 weeks).</p>
                                </div>
                                <div class="d-flex">
                                    <div class="form-check form-switch ">
                                        <input class="form-check-input prf-switch" type="checkbox">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="card rounded-5 border-0 shadow-sm p-4 mb-4">
                        <h4 class="fw-bold mb-4 text-dark">Profile Sections</h4>

                        <div class="d-flex flex-column">

                            <div class="d-flex justify-content-between align-items-center py-2 border-bottom">
                                <div>
                                    <h6 class="fw-bold mb-1 text-dark">About</h6>
                                    <small class="text-muted">Visible &middot; Last edited yesterday</small>
                                </div>
                                <div class="d-flex gap-2">
                                    <a href="editprofile.php" type="button"
                                        class="btn btn-outline-primary btn-sm rounded-3 px-2 fw-medium">Edit</a>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center py-2 border-bottom">
                                <div>
                                    <h6 class="fw-bold mb-1 text-dark">Experience</h6>
                                    <small class="text-muted">3 roles published &middot; case studies attached</small>
                                </div>
                                <div class="d-flex gap-2">
                                    <a href="editprofile.php" type="button"
                                        class="btn btn-outline-primary btn-sm rounded-3 px-2 fw-medium">Edit</a>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center py-2 border-bottom">
                                <div>
                                    <h6 class="fw-bold mb-1 text-dark">Portfolio</h6>
                                    <small class="text-muted">4 links &middot; hero thumbnails enabled</small>
                                </div>
                                <div class="d-flex gap-2">
                                    <a href="editprofile.php" type="button"
                                        class="btn btn-outline-primary btn-sm rounded-3 px-2 fw-medium">Manage</a>
                                </div>
                            </div>


                            <div class="d-flex justify-content-between align-items-center py-2">
                                <div>
                                    <h6 class="fw-bold mb-1 text-dark">Testimonials</h6>
                                    <small class="text-muted">Add quotes from managers and peers.</small>
                                </div>
                                <div class="d-flex gap-2">
                                    <a href="editprofile.php" type="button"
                                        class="btn btn-outline-secondary btn-sm rounded-3 px-2 fw-medium">Add</a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </main>

        </div>
    </div>

    <?php include "../../common/mobile_sidebar.php"; ?>

    <?php include "../../common/footer_sc.php"; ?>

</body>

</html>
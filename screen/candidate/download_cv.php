<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download CV</title>
    <?php include "../../common/header_sc.php"; ?>
    <link rel="stylesheet" href="../../asset/css/download_cv.css">
</head>

<body>

    <?php include('../../common/navbar_sc.php');
    ?>

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

                    <div class="card rounded-5 border-0 shadow p-3">
                        <div class="card-body">
                            <h3 class="card-title">Download & Share Your CV</h3>
                            <p class="card-text">Export pixel-perfect resumes, switch templates instantly, and send
                                secure share links.</p>
                            <div class="d-flex flex-column flex-md-row gap-3">
                                <button type="button" class="btn btn-outline-primary"><i
                                        class="fa-solid fa-file-pdf"></i> Download PDF</button>
                                <a href="#" class="btn btn-primary "><i class="fa-solid fa-file-arrow-down"></i>
                                    Download DOCX</a>
                            </div>
                        </div>
                    </div>

                    <div class="row g-4">
                        <div class="col-12 col-md-4">
                            <div class="card rounded-5 p-2 h-100 border shadow-sm">
                                <div class="card-body d-flex flex-column">
                                    <div class="mb-4">
                                        <div class="d-inline-flex align-items-center justify-content-center bg-primary-subtle rounded-3"
                                            style="width: 48px; height: 48px;">
                                            <i class="fa-solid fa-wand-magic-sparkles text-primary fs-5"></i>
                                        </div>
                                    </div>
                                    <h5 class="card-title fw-bold mb-3">ATS Optimized</h5>
                                    <p class="card-text text-secondary mb-4">Clean typography, zero background graphics,
                                        fully machine-readable.</p>
                                    <a href="#"
                                        class="btn btn-outline-primary rounded-pill w-100 mt-auto fw-medium">Generate
                                        ATS PDF</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
                            <div class="card rounded-5 p-2 h-100 border shadow-sm">
                                <div class="card-body d-flex flex-column">

                                    <div class="mb-4">
                                        <div class="d-inline-flex align-items-center justify-content-center bg-primary-subtle rounded-3"
                                            style="width: 48px; height: 48px;">
                                            <i class="fa-solid fa-star text-primary fs-5"></i>
                                        </div>
                                    </div>
                                    <h5 class="card-title fw-bold mb-3">Modern Visual</h5>
                                    <p class="card-text text-secondary mb-4">Use accent colors, iconography, and layout
                                        flourishes for human review.</p>
                                    <a href="#"
                                        class="btn btn-outline-primary rounded-pill w-100 mt-auto fw-medium">Export
                                        modern PDF</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
                            <div class="card rounded-5 p-2 h-100 border shadow-sm">
                                <div class="card-body d-flex flex-column">
                                    <div class="mb-4">
                                        <div class="d-inline-flex align-items-center justify-content-center bg-primary-subtle rounded-3"
                                            style="width: 48px; height: 48px;">
                                            <i class="fa-solid fa-link text-primary fs-5"></i>
                                        </div>
                                    </div>
                                    <h5 class="card-title fw-bold mb-3">Shareable Link</h5>
                                    <p class="card-text text-secondary mb-4">Create a private URL with analytics and
                                        access controls.</p>
                                    <a href="#"
                                        class="btn btn-outline-primary rounded-pill w-100 mt-auto fw-medium">Create
                                        link</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card rounded-5 border-0 shadow-sm p-4 mb-4">
                        <h4 class="fw-bold mb-4 text-dark">Resume Versions</h4>

                        <div class="d-flex flex-column">

                            <div class="d-flex justify-content-between align-items-center py-3 border-bottom">
                                <div>
                                    <h6 class="fw-bold mb-1 text-dark">General Product Resume</h6>
                                    <small class="text-muted">Updated Apr 10 &middot; Default &middot; 4
                                        downloads</small>
                                </div>
                                <div class="d-flex gap-2">
                                    <button type="button"
                                        class="btn btn-outline-primary btn-sm rounded-3 px-3 fw-medium">PDF</button>
                                    <button type="button"
                                        class="btn btn-outline-secondary btn-sm rounded-3 px-3 fw-medium">DOCX</button>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center py-3 border-bottom">
                                <div>
                                    <h6 class="fw-bold mb-1 text-dark">Fintech Lead Designer</h6>
                                    <small class="text-muted">Updated Mar 22 &middot; Template: Minimal</small>
                                </div>
                                <div class="d-flex gap-2">
                                    <button type="button"
                                        class="btn btn-outline-primary btn-sm rounded-3 px-3 fw-medium">PDF</button>
                                    <button type="button"
                                        class="btn btn-outline-secondary btn-sm rounded-3 px-3 fw-medium">DOCX</button>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center py-3">
                                <div>
                                    <h6 class="fw-bold mb-1 text-dark">Research-heavy Case Study</h6>
                                    <small class="text-muted">Updated Feb 14 &middot; Template: Insight</small>
                                </div>
                                <div class="d-flex gap-2">
                                    <button type="button"
                                        class="btn btn-outline-primary btn-sm rounded-3 px-3 fw-medium">PDF</button>
                                    <button type="button"
                                        class="btn btn-outline-secondary btn-sm rounded-3 px-3 fw-medium">DOCX</button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card rounded-5 border-0 shadow-sm p-4 mb-4">
                        <h4 class="fw-bold mb-4 text-dark">Share Links & Access</h4>

                        <div class="d-flex flex-column">

                            <div class="d-flex justify-content-between align-items-center py-3 border-bottom">
                                <div>
                                    <h6 class="fw-bold mb-1 text-dark">General resume link</h6>
                                    <small class="text-muted">jobsportal.com/cv/jordan &middot; 86 views &middot;
                                        expires in 30 days</small>
                                </div>
                                <div class="d-flex gap-2">
                                    <button type="button"
                                        class="btn btn-outline-primary btn-sm rounded-3 px-3 fw-medium">Copy</button>
                                    <button type="button"
                                        class="btn btn-outline-danger btn-sm rounded-3 px-3 fw-medium">Disable</button>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center py-3">
                                <div>
                                    <h6 class="fw-bold mb-1 text-dark">Recruiter collaboration link</h6>
                                    <small class="text-muted">Requires email &middot; analytics enabled</small>
                                </div>
                                <div class="d-flex gap-2">
                                    <button type="button"
                                        class="btn btn-outline-primary btn-sm rounded-3 px-3 fw-medium">Copy</button>
                                    <button type="button"
                                        class="btn btn-outline-secondary btn-sm rounded-3 px-3 fw-medium">Setting</button>
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Folllowings</title>
    <?php include "../../common/header_sc.php"; ?>
    <link rel="stylesheet" href="../../asset/css/public_profile.css">

    <style>
        body {
            font-family: 'Inter', sans-serif !important;
            background-color: #f1f5fd !important;
        }

        #mobileSidebar {
            max-width: 280px;
        }
    </style>
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

                <div class="d-flex flex-column gap-3">

                    <div class="card rounded-5 border-0 shadow-sm p-3">
                        <div class="card-body">
                            <h3 class="card-title">Following</h3>
                            <p class="card-text">Keep tabs on companies you admire and get nudged when they post new
                                roles.</p>
                            <div class="d-flex flex-column flex-md-row gap-3">
                                <button type="button" class="btn btn-outline-primary rounded-3 py-2 px-3"><i
                                        class="fa-solid fa-bell"></i> Notify me</button>
                                <a href="#" class="btn btn-primary rounded-3 py-2"><i
                                        class="fa-solid fa-magnifying-glass"></i> Discover companies</a>
                            </div>
                        </div>
                    </div>

                    <div class="row g-2">

                        <div class="col-12 col-md-4">
                            <div class="card border-0 rounded-4 p-2 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title fw-semibold mb-2">Skyline Digital</h5>
                                    <h6 class="card-text text-body-secondary mb-3 lh-base">Product & Engineering · San
                                        Francisco · Remote friendly</h6>
                                    <span class="text-primary fw-semibold">3 Open Jobs</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
                            <div class="card border-0 rounded-4 p-2 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title fw-semibold mb-2">Northwind Commerce</h5>
                                    <h6 class="card-text text-body-secondary mb-3 lh-base">Ecommerce Platform · Toronto
                                        · Hybrid</h6>
                                    <span class="text-primary fw-semibold">5 Open Jobs</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
                            <div class="card border-0 rounded-4 p-2 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title fw-semibold mb-2">Atlas Health</h5>
                                    <h6 class="card-text text-body-secondary mb-3 lh-base">Healthcare Technology · New
                                        York · Hybrid</h6>
                                    <span class="text-primary fw-semibold">2 Open Jobs</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
                            <div class="card border-0 rounded-4 p-2 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title fw-semibold mb-2">Mova Robotics</h5>
                                    <h6 class="card-text text-body-secondary mb-3 lh-base">Robotics & AI · Berlin ·
                                        Flexible</h6>
                                    <span class="text-primary fw-semibold">4 Open Jobs</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
                            <div class="card border-0 rounded-4 p-2 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title fw-semibold mb-2">NovaCloud</h5>
                                    <h6 class="card-text text-body-secondary mb-3 lh-base">Cloud Infrastructure · Austin
                                        · Remote friendly</h6>
                                    <span class="text-primary fw-semibold">6 Open Jobs</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
                            <div class="card border-0 rounded-4 p-2 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title fw-semibold mb-2">Bright Labs</h5>
                                    <h6 class="card-text text-body-secondary mb-3 lh-base">Fintech Platform · Berlin ·
                                        Remote EU</h6>
                                    <span class="text-primary fw-semibold">3 Open Jobs</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card rounded-5 border-0 shadow-sm p-4 mb-4">
                        <h4 class="fw-bold text-dark">Smart Suggestions</h4>

                        <div class="d-flex flex-column">

                            <div class="d-flex justify-content-between align-items-center py-3 border-bottom">
                                <div>
                                    <h6 class="fw-bold text-dark">Companies hiring for Lead Product roles</h6>
                                    <span class="text-muted">Based on your saved jobs and search history.</span>
                                </div>
                                <div class="d-flex gap-2">
                                    <button type="button"
                                        class="btn btn-outline-primary btn-sm rounded-3 px-2 fw-medium">Follow
                                        all</button>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center py-3">
                                <div>
                                    <h6 class="fw-bold text-dark">Studios expanding remote design teams</h6>
                                    <span class="text-muted">14 companies align with your preferences.</span>
                                </div>
                                <div class="d-flex">
                                    <button type="button"
                                        class="btn btn-outline-secondary btn-sm rounded-3 px-2 fw-medium">Review</button>
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
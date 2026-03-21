<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../Asset/bootstrap-5.3.7-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/employer_list.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>

<body>
  <section class="py-5 bg-light">
    <div class="container">
      <div class="row g-4">

        <!-- LEFT SIDEBAR -->
        <div class="col-lg-3 ">
          <div class="card p-3 mb-4 rounded-3 border-1 border-primary-subtle shadow-sm">
            <div class="card-body p-2">

              <h5 class="card-title fw-bold mb-3">Search companies</h5>

              <div class="input-group custom-input-group mb-3 rounded-3 overflow-hidden">
                <span class="input-group-text pe-3 text-primary">
                  <i class="fa-solid fa-building"></i>
                </span>
                <input type="text" class="form-control ps-2 py-2" placeholder="Company name">
              </div>

              <div class="input-group custom-input-group mb-3 rounded-3 overflow-hidden">
                <span class="input-group-text text-primary pe-3">
                  <i class="fa-solid fa-location-dot"></i>
                </span>
                <input type="text" class="form-control ps-2 py-2" placeholder="Location">
              </div>

              <div class="input-group custom-input-group mb-4 rounded-3 overflow-hidden">
                <span class="input-group-text text-primary pe-3">
                  <i class="fa-solid fa-industry"></i>
                </span>
                <input type="text" class="form-control ps-2 py-2" placeholder="Industry">
              </div>

              <button class="btn btn-primary w-100 py-2 rounded-3 fw-semibold">
                Apply filters
              </button>

            </div>
          </div>

          <!-- Filters -->
          <div class="card p-3 mb-4 rounded-3 border-0 shadow-sm">
            <h6 class="fw-bold">Company size</h6>

            <div class="d-flex justify-content-between align-items-center py-1">
              <div class="d-flex align-items-center gap-2">
                <input class="form-check-input m-0" id="cmp1" type="checkbox">
                <label class="mb-0" for="cmp1">1-50 employees</label>
              </div>
              <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                12
              </span>
            </div>

            <div class="d-flex justify-content-between align-items-center py-1">
              <div class="d-flex align-items-center gap-2">
                <input class="form-check-input m-0" id="cmp2" type="checkbox">
                <label for="cmp2" class="mb-0">51-200 employees</label>
              </div>
              <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                18
              </span>
            </div>

            <div class="d-flex justify-content-between align-items-center py-1">
              <div class="d-flex align-items-center gap-2">
                <input class="form-check-input m-0" id="cmp3" type="checkbox">
                <label for="cmp3" class="mb-0">51-200 employees</label>
              </div>
              <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                15
              </span>
            </div>

            <div class="d-flex justify-content-between align-items-center py-1">
              <div class="d-flex align-items-center gap-2">
                <input class="form-check-input m-0" id="cmp4" type="checkbox">
                <label for="cmp4" class="mb-0">1000+ employees</label>
              </div>
              <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                9
              </span>
            </div>

          </div>

          <!-- Open positions -->
          <div class="card p-3 mb-4 rounded-3 border-0 shadow-sm">
            <h6 class="fw-bold">Open positions</h6>

            <div class="d-flex justify-content-between align-items-center py-1">
              <div class="d-flex align-items-center gap-2">
                <input class="form-check-input m-0" id="lc1" type="checkbox">
                <label class="mb-0" for="lc1">1-5 openings</label>
              </div>
              <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                22
              </span>
            </div>

            <div class="d-flex justify-content-between align-items-center py-1">
              <div class="d-flex align-items-center gap-2">
                <input class="form-check-input m-0" id="lc2" type="checkbox">
                <label for="lc2" class="mb-0">6-15 openings</label>
              </div>
              <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                16
              </span>
            </div>

            <div class="d-flex justify-content-between align-items-center py-1">
              <div class="d-flex align-items-center gap-2">
                <input class="form-check-input m-0" id="lc3" type="checkbox">
                <label for="lc3" class="mb-0">16+ openings</label>
              </div>
              <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                8
              </span>
            </div>

          </div>

          <!-- Industry -->
          <div class="card p-3 mb-4 rounded-3 border-0 shadow-sm">
            <h6 class="fw-bold">Industry</h6>

            <div class="d-flex justify-content-between align-items-center py-1">
              <div class="d-flex align-items-center gap-2">
                <input class="form-check-input m-0" id="ins1" type="checkbox">
                <label class="mb-0" for="ins1">Technology</label>
              </div>
              <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                24
              </span>
            </div>

            <div class="d-flex justify-content-between align-items-center py-1">
              <div class="d-flex align-items-center gap-2">
                <input class="form-check-input m-0" id="ins2" type="checkbox">
                <label for="ins2" class="mb-0">Finance</label>
              </div>
              <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                12
              </span>
            </div>

            <div class="d-flex justify-content-between align-items-center py-1">
              <div class="d-flex align-items-center gap-2">
                <input class="form-check-input m-0" id="ins3" type="checkbox">
                <label for="ins3" class="mb-0">Healthcare</label>
              </div>
              <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                10
              </span>
            </div>

            <div class="d-flex justify-content-between align-items-center py-1">
              <div class="d-flex align-items-center gap-2">
                <input class="form-check-input m-0" id="ins4" type="checkbox">
                <label for="ins4" class="mb-0">E-commerce</label>
              </div>
              <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                8
              </span>
            </div>

            <div class="d-flex justify-content-between align-items-center py-1">
              <div class="d-flex align-items-center gap-2">
                <input class="form-check-input m-0" id="ins5" type="checkbox">
                <label for="ins5" class="mb-0">Consulting</label>
              </div>
              <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                6
              </span>
            </div>
          </div>

          <!-- Work model -->
          <div class="card p-3 mb-4 rounded-3 border-0 shadow-sm">
            <h6 class="fw-bold">Work model</h6>

            <div class="d-flex justify-content-between align-items-center py-1">
              <div class="d-flex align-items-center gap-2">
                <input class="form-check-input m-0" id="sr1" type="checkbox">
                <label class="mb-0" for="sr1">Remote-first</label>
              </div>
              <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                28
              </span>
            </div>

            <div class="d-flex justify-content-between align-items-center py-1">
              <div class="d-flex align-items-center gap-2">
                <input class="form-check-input m-0" id="sr2" type="checkbox">
                <label for="sr2" class="mb-0">Hybrid</label>
              </div>
              <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                18
              </span>
            </div>

            <div class="d-flex justify-content-between align-items-center py-1">
              <div class="d-flex align-items-center gap-2">
                <input class="form-check-input m-0" id="sr3" type="checkbox">
                <label for="sr3" class="mb-0">On-site</label>
              </div>
              <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                6
              </span>
            </div>

          </div>

        </div>

        <!-- RIGHT CONTENT -->
        <div class="col-lg-9">

          <!-- HEADER -->
          <div class="d-flex justify-content-between align-items-center mb-4">

            <h3 class="fw-bold mb-0">38 Jobs Found</h3>

            <div class="d-flex align-items-center gap-2">


              <!-- Filter for Mobile view -->
              <div class="d-lg-none d-flex justify-content-center align-items-center rounded-pill"
                style="background-color:#dde5d9; width:36px; height:36px;">
                <button class="btn p-0" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
                  <i class="fa-solid fa-sliders"></i>
                </button>
              </div>

              <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel" style="width: 350px;">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="staticBackdropLabel">Filter Your Jobs</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <div class="row">

                    <div class="col-12">
                      <div class="card p-3 mb-4 rounded-3 border-1 border-primary-subtle shadow-sm">
                        <div class="card-body p-2">

                          <h5 class="card-title fw-bold mb-3">Search companies</h5>

                          <div class="input-group custom-input-group mb-3 rounded-3 overflow-hidden">
                            <span class="input-group-text pe-3 text-primary">
                              <i class="fa-solid fa-building"></i>
                            </span>
                            <input type="text" class="form-control ps-2 py-2" placeholder="Company name">
                          </div>

                          <div class="input-group custom-input-group mb-3 rounded-3 overflow-hidden">
                            <span class="input-group-text text-primary pe-3">
                              <i class="fa-solid fa-location-dot"></i>
                            </span>
                            <input type="text" class="form-control ps-2 py-2" placeholder="Location">
                          </div>

                          <div class="input-group custom-input-group mb-4 rounded-3 overflow-hidden">
                            <span class="input-group-text text-primary pe-3">
                              <i class="fa-solid fa-industry"></i>
                            </span>
                            <input type="text" class="form-control ps-2 py-2" placeholder="Industry">
                          </div>

                          <button class="btn btn-primary w-100 py-2 rounded-3 fw-semibold">
                            Apply filters
                          </button>

                        </div>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="card p-3 mb-4 rounded-3 border-0 shadow-sm">
                        <h6 class="fw-bold">Company size</h6>

                        <div class="d-flex justify-content-between align-items-center py-1">
                          <div class="d-flex align-items-center gap-2">
                            <input class="form-check-input m-0" id="cmp1" type="checkbox">
                            <label class="mb-0" for="cmp1">1-50 employees</label>
                          </div>
                          <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                            12
                          </span>
                        </div>

                        <div class="d-flex justify-content-between align-items-center py-1">
                          <div class="d-flex align-items-center gap-2">
                            <input class="form-check-input m-0" id="cmp2" type="checkbox">
                            <label for="cmp2" class="mb-0">51-200 employees</label>
                          </div>
                          <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                            18
                          </span>
                        </div>

                        <div class="d-flex justify-content-between align-items-center py-1">
                          <div class="d-flex align-items-center gap-2">
                            <input class="form-check-input m-0" id="cmp3" type="checkbox">
                            <label for="cmp3" class="mb-0">51-200 employees</label>
                          </div>
                          <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                            15
                          </span>
                        </div>

                        <div class="d-flex justify-content-between align-items-center py-1">
                          <div class="d-flex align-items-center gap-2">
                            <input class="form-check-input m-0" id="cmp4" type="checkbox">
                            <label for="cmp4" class="mb-0">1000+ employees</label>
                          </div>
                          <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                            9
                          </span>
                        </div>

                      </div>
                    </div>

                    <div class="12">
                      <div class="card p-3 mb-4 rounded-3 border-0 shadow-sm">
                        <h6 class="fw-bold">Open positions</h6>

                        <div class="d-flex justify-content-between align-items-center py-1">
                          <div class="d-flex align-items-center gap-2">
                            <input class="form-check-input m-0" id="lc1" type="checkbox">
                            <label class="mb-0" for="lc1">1-5 openings</label>
                          </div>
                          <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                            22
                          </span>
                        </div>

                        <div class="d-flex justify-content-between align-items-center py-1">
                          <div class="d-flex align-items-center gap-2">
                            <input class="form-check-input m-0" id="lc2" type="checkbox">
                            <label for="lc2" class="mb-0">6-15 openings</label>
                          </div>
                          <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                            16
                          </span>
                        </div>

                        <div class="d-flex justify-content-between align-items-center py-1">
                          <div class="d-flex align-items-center gap-2">
                            <input class="form-check-input m-0" id="lc3" type="checkbox">
                            <label for="lc3" class="mb-0">16+ openings</label>
                          </div>
                          <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                            8
                          </span>
                        </div>

                      </div>


                      <div class="col-12">
                        <div class="card p-3 mb-4 rounded-3 border-0 shadow-sm">
                          <h6 class="fw-bold">Industry</h6>

                          <div class="d-flex justify-content-between align-items-center py-1">
                            <div class="d-flex align-items-center gap-2">
                              <input class="form-check-input m-0" id="ins1" type="checkbox">
                              <label class="mb-0" for="ins1">Technology</label>
                            </div>
                            <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                              24
                            </span>
                          </div>

                          <div class="d-flex justify-content-between align-items-center py-1">
                            <div class="d-flex align-items-center gap-2">
                              <input class="form-check-input m-0" id="ins2" type="checkbox">
                              <label for="ins2" class="mb-0">Finance</label>
                            </div>
                            <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                              12
                            </span>
                          </div>

                          <div class="d-flex justify-content-between align-items-center py-1">
                            <div class="d-flex align-items-center gap-2">
                              <input class="form-check-input m-0" id="ins3" type="checkbox">
                              <label for="ins3" class="mb-0">Healthcare</label>
                            </div>
                            <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                              10
                            </span>
                          </div>

                          <div class="d-flex justify-content-between align-items-center py-1">
                            <div class="d-flex align-items-center gap-2">
                              <input class="form-check-input m-0" id="ins4" type="checkbox">
                              <label for="ins4" class="mb-0">E-commerce</label>
                            </div>
                            <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                              8
                            </span>
                          </div>

                          <div class="d-flex justify-content-between align-items-center py-1">
                            <div class="d-flex align-items-center gap-2">
                              <input class="form-check-input m-0" id="ins5" type="checkbox">
                              <label for="ins5" class="mb-0">Consulting</label>
                            </div>
                            <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                              6
                            </span>
                          </div>
                        </div>
                      </div>

                      <div class="col-12">
                        <div class="card p-3 mb-4 rounded-3 border-0 shadow-sm">
                          <h6 class="fw-bold">Work model</h6>

                          <div class="d-flex justify-content-between align-items-center py-1">
                            <div class="d-flex align-items-center gap-2">
                              <input class="form-check-input m-0" id="sr1" type="checkbox">
                              <label class="mb-0" for="sr1">Remote-first</label>
                            </div>
                            <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                              28
                            </span>
                          </div>

                          <div class="d-flex justify-content-between align-items-center py-1">
                            <div class="d-flex align-items-center gap-2">
                              <input class="form-check-input m-0" id="sr2" type="checkbox">
                              <label for="sr2" class="mb-0">Hybrid</label>
                            </div>
                            <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                              18
                            </span>
                          </div>

                          <div class="d-flex justify-content-between align-items-center py-1">
                            <div class="d-flex align-items-center gap-2">
                              <input class="form-check-input m-0" id="sr3" type="checkbox">
                              <label for="sr3" class="mb-0">On-site</label>
                            </div>
                            <span class="badge rounded-pill bg-primary-subtle text-primary px-2">
                              6
                            </span>
                          </div>

                        </div>
                      </div>

                    </div>
                    <div class="text-center d-flex flex-column mx-auto" style="width: 90%;">
                      <button type="button" class="btn bg-primary-subtle text-primary rounded-4 px-5 py-2 mb-2">Apply Filters</button>
                      <button type="button" class="btn btn btn-outline-info rounded-5 border-0 text-black">Clear All</button>

                    </div>
                  </div>
                </div>
              </div>

              <select class="form-select form-select-sm">
                <option>Most relevent</option>
                <option>Most openings</option>
                <option>Company sized</option>
                <option>Recently joined</option>
              </select>

            </div>

          </div>

          <!-- JOB CARD -->
          <div class="card p-4 mb-4 shadow-sm rounded-4 jobcards_hover">
            <div class="d-flex justify-content-between">
              <!-- LEFT SIDE -->
              <div class="d-flex">
                <div class="me-3">
                  <img src="../Asset/Image/emplogo1.jpg" width="70" class="rounded-4 shadow-sm">
                </div>
                <div>
                  <span class="badge rounded-pill bg-success-subtle text-success px-3 py-2 mb-2">
                    VERIFIED
                  </span>
                  <h5 class="fw-bold mb-1">Skyline Digital</h5>
                  <div class="text-muted small mb-2">
                    Digital Experience Studio · 180+ employees · San Francisco, USA
                  </div>
                  <p class="text-muted small mb-2" style="max-width:600px;">
                    A multidisciplinary studio building immersive product experiences for finance, ecommerce, and emerging tech brands. We combine research-led design with battle-tested engineering to launch products that scale.
                  </p>
                  <!-- TAGS -->
                  <div class="d-flex gap-2 flex-wrap">
                    <span class="badge bg-primary-subtle text-primary">Product Design</span>
                    <span class="badge bg-primary-subtle text-primary">Engineering</span>
                    <span class="badge bg-primary-subtle text-primary">Remote-friendly</span>
                    <span class="badge bg-primary-subtle text-primary">Technology</span>
                  </div>
                </div>
              </div>

              <!-- RIGHT SIDE -->
              <div class="ps-4 border-start d-flex flex-column justify-content-between align-items-center btn-groups">
                <!-- bookmark -->
                <div class="bg-body-tertiary rounded-3 d-flex align-items-center justify-content-center bookmrks"
                  style="width:40px; height:40px;">
                  <i class="fa-regular fa-bookmark"></i>
                </div>
                <div class="d-flex flex-column text-muted small text-justify mt-3">
                  <div><i class="fa fa-briefcase me-1"></i> 8 open positions</div>
                  <div><i class="fa fa-calendar me-1"></i> Founded 2014</div>
                </div>
                <a href="#" class="btn btn-outline-primary rounded-pill px-4 mt-3">
                  View company
                </a>
              </div>
            </div>
          </div>

          <div class="card p-4 mb-4 shadow-sm rounded-4 jobcards_hover">
            <div class="d-flex justify-content-between">
              <!-- LEFT SIDE -->
              <div class="d-flex">
                <div class="me-3">
                  <img src="../Asset/Image/emplogo1.jpg" width="70" class="rounded-4 shadow-sm">
                </div>
                <div>
                  <span class="badge rounded-pill bg-success-subtle text-success px-3 py-2 mb-2">
                    VERIFIED
                  </span>
                  <h5 class="fw-bold mb-1">Skyline Digital</h5>
                  <div class="text-muted small mb-2">
                    Digital Experience Studio · 180+ employees · San Francisco, USA
                  </div>
                  <p class="text-muted small mb-2" style="max-width:600px;">
                    A multidisciplinary studio building immersive product experiences for finance, ecommerce, and emerging tech brands. We combine research-led design with battle-tested engineering to launch products that scale.
                  </p>
                  <!-- TAGS -->
                  <div class="d-flex gap-2 flex-wrap">
                    <span class="badge bg-primary-subtle text-primary">Product Design</span>
                    <span class="badge bg-primary-subtle text-primary">Engineering</span>
                    <span class="badge bg-primary-subtle text-primary">Remote-friendly</span>
                    <span class="badge bg-primary-subtle text-primary">Technology</span>
                  </div>
                </div>
              </div>

              <!-- RIGHT SIDE -->
              <div class="ps-4 border-start d-flex flex-column justify-content-between align-items-center btn-groups">
                <!-- bookmark -->
                <div class="bg-body-tertiary rounded-3 d-flex align-items-center justify-content-center bookmrks"
                  style="width:40px; height:40px;">
                  <i class="fa-regular fa-bookmark"></i>
                </div>
                <div class="d-flex flex-column text-muted small text-justify mt-3">
                  <div><i class="fa fa-briefcase me-1"></i> 8 open positions</div>
                  <div><i class="fa fa-calendar me-1"></i> Founded 2014</div>
                </div>
                <a href="#" class="btn btn-outline-primary rounded-pill px-4 mt-3">
                  View company
                </a>
              </div>
            </div>
          </div>


          <div class="card p-4 mb-4 shadow-sm rounded-4 jobcards_hover">
            <div class="d-flex justify-content-between">
              <!-- LEFT SIDE -->
              <div class="d-flex">
                <div class="me-3">
                  <img src="../Asset/Image/emplogo1.jpg" width="70" class="rounded-4 shadow-sm">
                </div>
                <div>
                  <span class="badge rounded-pill bg-success-subtle text-success px-3 py-2 mb-2">
                    VERIFIED
                  </span>
                  <h5 class="fw-bold mb-1">Skyline Digital</h5>
                  <div class="text-muted small mb-2">
                    Digital Experience Studio · 180+ employees · San Francisco, USA
                  </div>
                  <p class="text-muted small mb-2" style="max-width:600px;">
                    A multidisciplinary studio building immersive product experiences for finance, ecommerce, and emerging tech brands. We combine research-led design with battle-tested engineering to launch products that scale.
                  </p>
                  <!-- TAGS -->
                  <div class="d-flex gap-2 flex-wrap">
                    <span class="badge bg-primary-subtle text-primary">Product Design</span>
                    <span class="badge bg-primary-subtle text-primary">Engineering</span>
                    <span class="badge bg-primary-subtle text-primary">Remote-friendly</span>
                    <span class="badge bg-primary-subtle text-primary">Technology</span>
                  </div>
                </div>
              </div>

              <!-- RIGHT SIDE -->
              <div class="ps-4 border-start d-flex flex-column justify-content-between align-items-center btn-groups">
                <!-- bookmark -->
                <div class="bg-body-tertiary rounded-3 d-flex align-items-center justify-content-center bookmrks"
                  style="width:40px; height:40px;">
                  <i class="fa-regular fa-bookmark"></i>
                </div>
                <div class="d-flex flex-column text-muted small text-justify mt-3">
                  <div><i class="fa fa-briefcase me-1"></i> 8 open positions</div>
                  <div><i class="fa fa-calendar me-1"></i> Founded 2014</div>
                </div>
                <a href="#" class="btn btn-outline-primary rounded-pill px-4 mt-3">
                  View company
                </a>
              </div>
            </div>
          </div>


          <div class="card p-4 mb-4 shadow-sm rounded-4 jobcards_hover">
            <div class="d-flex justify-content-between">
              <!-- LEFT SIDE -->
              <div class="d-flex">
                <div class="me-3">
                  <img src="../Asset/Image/emplogo1.jpg" width="70" class="rounded-4 shadow-sm">
                </div>
                <div>
                  <span class="badge rounded-pill bg-success-subtle text-success px-3 py-2 mb-2">
                    VERIFIED
                  </span>
                  <h5 class="fw-bold mb-1">Skyline Digital</h5>
                  <div class="text-muted small mb-2">
                    Digital Experience Studio · 180+ employees · San Francisco, USA
                  </div>
                  <p class="text-muted small mb-2" style="max-width:600px;">
                    A multidisciplinary studio building immersive product experiences for finance, ecommerce, and emerging tech brands. We combine research-led design with battle-tested engineering to launch products that scale.
                  </p>
                  <!-- TAGS -->
                  <div class="d-flex gap-2 flex-wrap">
                    <span class="badge bg-primary-subtle text-primary">Product Design</span>
                    <span class="badge bg-primary-subtle text-primary">Engineering</span>
                    <span class="badge bg-primary-subtle text-primary">Remote-friendly</span>
                    <span class="badge bg-primary-subtle text-primary">Technology</span>
                  </div>
                </div>
              </div>

              <!-- RIGHT SIDE -->
              <div class="ps-4 border-start d-flex flex-column justify-content-between align-items-center btn-groups">
                <!-- bookmark -->
                <div class="bg-body-tertiary rounded-3 d-flex align-items-center justify-content-center bookmrks"
                  style="width:40px; height:40px;">
                  <i class="fa-regular fa-bookmark"></i>
                </div>
                <div class="d-flex flex-column text-muted small text-justify mt-3">
                  <div><i class="fa fa-briefcase me-1"></i> 8 open positions</div>
                  <div><i class="fa fa-calendar me-1"></i> Founded 2014</div>
                </div>
                <a href="#" class="btn btn-outline-primary rounded-pill px-4 mt-3">
                  View company
                </a>
              </div>
            </div>
          </div>

          <div class="card p-4 mb-4 shadow-sm rounded-4 jobcards_hover">
            <div class="d-flex justify-content-between">
              <!-- LEFT SIDE -->
              <div class="d-flex">
                <div class="me-3">
                  <img src="../Asset/Image/emplogo1.jpg" width="70" class="rounded-4 shadow-sm">
                </div>
                <div>
                  <span class="badge rounded-pill bg-success-subtle text-success px-3 py-2 mb-2">
                    VERIFIED
                  </span>
                  <h5 class="fw-bold mb-1">Skyline Digital</h5>
                  <div class="text-muted small mb-2">
                    Digital Experience Studio · 180+ employees · San Francisco, USA
                  </div>
                  <p class="text-muted small mb-2" style="max-width:600px;">
                    A multidisciplinary studio building immersive product experiences for finance, ecommerce, and emerging tech brands. We combine research-led design with battle-tested engineering to launch products that scale.
                  </p>
                  <!-- TAGS -->
                  <div class="d-flex gap-2 flex-wrap">
                    <span class="badge bg-primary-subtle text-primary">Product Design</span>
                    <span class="badge bg-primary-subtle text-primary">Engineering</span>
                    <span class="badge bg-primary-subtle text-primary">Remote-friendly</span>
                    <span class="badge bg-primary-subtle text-primary">Technology</span>
                  </div>
                </div>
              </div>

              <!-- RIGHT SIDE -->
              <div class="ps-4 border-start d-flex flex-column justify-content-between align-items-center btn-groups">
                <!-- bookmark -->
                <div class="bg-body-tertiary rounded-3 d-flex align-items-center justify-content-center bookmrks"
                  style="width:40px; height:40px;">
                  <i class="fa-regular fa-bookmark"></i>
                </div>
                <div class="d-flex flex-column text-muted small text-justify mt-3">
                  <div><i class="fa fa-briefcase me-1"></i> 8 open positions</div>
                  <div><i class="fa fa-calendar me-1"></i> Founded 2014</div>
                </div>
                <a href="#" class="btn btn-outline-primary rounded-pill px-4 mt-3">
                  View company
                </a>
              </div>
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
  <script src="../Asset/bootstrap-5.3.7-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
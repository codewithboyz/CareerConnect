<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Watch Video Section</title>

    <!-- Bootstrap -->
    <link href="Asset/bootstrap-5.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="ourvideo.css">
</head>

<body>

    <section class="video-section">
        <div style="background-color: #f8f9fa; height: 500px;">
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

                            <button class="play-btn" data-bs-toggle="modal" data-bs-target="#videoModal">
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


    <!-- Bootstrap JS -->
    <script src="Asset/bootstrap-5.3.7-dist/js/bootstrap.bundle.min.js"></script>

    <script src="ourvideo.js"></script>
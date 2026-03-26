<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="Asset/bootstrap-5.3.7-dist/css/bootstrap.min.css"> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet" />
</head>

<body>
    <?php
    include('landing/nav.php');
    ?>
    <div class="container mt-4 mb-5">
        <div class="row">

            <aside class="col-lg-3 d-none d-lg-block">
                <?php include('sidebar/sidebar.php'); ?>
            </aside>

            <main class="col-lg-9 col-12">

                <button class="btn btn-outline-primary d-lg-none mb-3" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar" aria-controls="mobileSidebar">
                    <i class="fa-solid fa-bars me-2"></i> Menu
                </button>



            </main>

        </div>
    </div>

    <?php include('sidebar/mobile_sidebar.php'); ?>

    <?php include('landing/footer.php'); ?>

    <script src="Asset/bootstrap-5.3.7-dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
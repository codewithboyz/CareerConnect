<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "../../common/header_sc.php"; ?>
    <link rel="stylesheet" href="../../asset/css/page-404.css">
</head>

<body>
    <div>
        <?php include "../../common/navbar_sc.php";?>


        <center>
            <div class="mb-5">
                <div class="picture">
                    <img src="https://sharjeelanjum.com/html/jobs-portal/images/error404.gif" alt="">
                </div>

                <h1 class="text404 text-center">404</h1>
                <h2 class="text-center">Oops! Page Not Found</h2>
                <p class="text-center fs-5">The page you’re looking for has moved on to a new role. Let’s get you back to the right opportunity.</p>

                <a href="index.php"><button class="btn-404-return">Return home</button></a>

            </div>
        </center>

        <?php
        include_once('../../common/footer_sc.php');
        ?>
    </div>
</body>

</html>
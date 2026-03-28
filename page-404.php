<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
    <style>
        .text404 {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 7rem;
            color: #0550e6;
            /* blue color */
            letter-spacing: 5px;
        }

        body div p {
            color: gray;
            font-family: 'Montserrat', sans-serif !important;

        }

        center div h2 {
            font-family: 'Montserrat', sans-serif !important;
            font-weight: 600;
        }

        .btn-404-return {
            border-radius: 50px;
            padding: 7px 20px 7px 20px;
            font-size: 20px;
            background-color: blue;
            border: none;
            color: whitesmoke;
            font-weight: 500;

        }

        .btn-404-return:hover {
            background-color: #5476f1;
        }

        @media(max-width:578px) {
            .picture img {
                width: 100%;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700;800&display=swap" rel="stylesheet">
</head>

<body>
    <div>
        <?php
        include_once('landing/nav.php');
        ?>


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
        include_once('landing/footer.php');
        ?>
    </div>
</body>

</html>
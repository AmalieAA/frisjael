<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Sigende titel</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/ddc56212a6.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Roboto+Serif&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="bg-baggrund">


<?php include "includes/header.php";?>

<main class="container-fluid">

    <div class="row">
        <div class="col-12 col-md-8 offset-md-2 p-4">
            <p>
                Lorem ipsum dolor sit amet,
                consectetur adipisci elit,
                sed eiusmod tempor incidunt
                ut labore et dolore magna aliqua.
                Ut enim ad minim veniam,
                quis nostrum exercitationem
                ullam corporis suscipit laboriosam,
                nisi ut aliquid ex ea commodi consequatur.
            </p>
        </div>
    </div>

    <div class="row bg-grøn py-5">
        <div class="col-12 col-md-6 mb-4 mb-md-0">
            <img class="img-fluid" src="images/stockphoto.webp"/>
        </div>

        <div class="col-12 col-md-6">
            <img class="img-fluid" src="images/stockphoto.webp"/>
        </div>

    </div>
    <?php include "includes/kontaktformular.php";?>
</main>

<?php include "includes/footer.php";?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



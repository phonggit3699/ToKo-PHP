<?php
$route = require("../../routes/adminRouter.php");
$route = new adminRouter();
$page = "";

if (isset($_GET["page"])) {
    $page = $_GET["page"];
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../../public/images/icon.ico">
    <title><?php if (!empty($_GET["action"])) {
                echo ucfirst($_GET["action"]);
            } else {
                echo "ToKo";
            } ?></title>
    <link rel="stylesheet" type="text/css" href="../../public/css/styleUsHome1.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/styleUsSlide.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/styleUsMenu1.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/styleUsPdD.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/styleUsHeader.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>

<body>

    <header>
        <!-- Duy -->
        <?php require("./header.php") ?>
    </header>

    <div class="container bgColor">
        <div <?php if($page=="detailPd" || $page== "search"){echo "style='display: none'";} ?> class="row slide">
            <!-- LONG -->
            <?php require("./slide.php") ?>
        </div>

        <div class="row main">
            <div class="col-sm-3"  <?php if($page=="detailPd" || $page== "search"){echo "style='display: none'";} ?>>
                <div class="menuLeft">
                    <!-- <p> LONG </p> -->
                    <?php require("./menu.php") ?>
                </div>
            </div>

            <div class=" <?php if($page=="detailPd" || $page== "search"){echo "col-sm-12";}else{echo "col-sm-9";} ?>">
                <div class="content">
                    <?php $route->getSourcePath(__DIR__)->router(); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="showbook">
                    <?php require("./showbook.php") ?>
                </div>
                <div class="adv">
                    <h3>Xem nhiều nhất</h3>
                <?php require("./adv.php") ?>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <!---- Ngọc ----->
    </footer>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="../../public/js/header.js"></script>
    <script src="../../public/js/slide.js"></script>
</body>

</html>
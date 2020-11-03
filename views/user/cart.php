<?php
$route = require("../../routes/adminRouter.php");
$route = new adminRouter();
$page = "";
$tk ="";
if (isset($_GET["page"])) {
    $page = $_GET["page"];
}

$conn = new mysqli('localhost', 'root','', 'toko');
if(isset($_GET['q'])){
    $tk =  $_GET['q'];
}


$sql = "SELECT * FROM book WHERE name LIKE '%{$tk}%' OR category LIKE '%{$tk}%'";
$result = mysqli_query($conn, $sql);
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
</head>

<body>

    <header>
        <!-- Duy -->
        <?php require("./header.php") ?>
    </header>

        <?php require("./viewcart.php") ?>
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
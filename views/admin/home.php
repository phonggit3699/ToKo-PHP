<?php
session_start();
$route = require("../../routes/adminRouter.php");
$db = require_once('../../databaseClass.php');
$db = new database();
$route = new adminRouter();
$page="";

if (empty($_SESSION["adminId"])) {
    header('Location: http://localhost/toko/views/admin/login.php');
    die();
}

$href = $route->routerCss("../../public/css/styleAd");

if(isset($_GET["page"])){
    $page = $_GET["page"];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../../public/images/icon.ico">
    <title><?php if (!empty($page)) {
                echo ucfirst($page);
            } else {
                echo "Admin Page";
            } ?></title>
    <link rel="stylesheet" type="text/css" href="../../public/css/styleAdHome1.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    
    <link rel="stylesheet" type="text/css" href="<?php echo $href; ?>">
    <script src="https://kit.fontawesome.com/3ea1f1912c.js" crossorigin="anonymous"></script>

</head>

<body onload="startTime()">
    <header>
        <div class="header">
            <div class="logo">
                <a href="http://localhost/toko/views/admin/home.php?action=info">
                    <h1>TOKO <span>ADMIN</span></h1>
                </a>
            </div>
            <div class="navBar">
                <ul>
                    <li><span><?php echo $_SESSION["adminId"] ?></span></li>
                    <li><span id="clock"></span></li>
                    <li><i class="fas fa-bell"></i></li>
                    <li><i class="fas fa-envelope"></i></li>
                    <li><a style="color: #1C1F22" href="http://localhost/toko/views/admin/home.php?action=logout"><i class="fas fa-power-off"></i></a></li>
                </ul>
            </div>
        </div>

    </header>

    <div class="row main">
        <div class="col-sm-3 menu">
            <div class="menuLeft">
                <ul>
                    <li class="bgC <?php if($page == "info" || $page == "changeAd" || $page =="newaccount"){echo 'active';} ?>"><a class="hoverC <?php if($page == "info" || $page == "changeAd" || $page =="newaccount"){echo 'activeAc';} ?>" href="http://localhost/toko/views/admin/home.php?page=info"><i class="fas fa-users-cog"></i> Thông tin admin</a></li>
                    <li class="bgC <?php if($page == "inforCus"){echo 'active';} ?>" ><a class="hoverC <?php if($page == "inforCus"){echo 'activeAc';} ?>" href="http://localhost/toko/views/admin/home.php?page=inforCus"><i class="fas fa-user-circle"></i> Thông tin khách hàng</a></li>
                    <li class="bgC <?php if($page== "cart"){echo 'active';} ?>"><a class="hoverC <?php if($page== "cart"){echo 'activeAc';} ?>" href="http://localhost/toko/views/admin/home.php?page=cart"><i class="fas fa-cart-arrow-down"></i> Đơn hàng</a></li>
                    <li class="bgC <?php if($page == "product" || $page == "detailPd" || $page==""){echo 'active';} ?>" ><a class="hoverC <?php if($page == "product" || $page == "detailPd" || $page==""){echo 'activeAc';} ?>" href="http://localhost/toko/views/admin/home.php?page=product"><i class="fas fa-cart-arrow-down"></i> Sản phẩm</a></li>
                    <li class="bgC <?php if($page== "add"){echo 'active';} ?>" ><a class="hoverC <?php if($page== "add"){echo 'activeAc';} ?>" href="http://localhost/toko/views/admin/home.php?page=add"><i class="fas fa-book-medical"></i> Thêm sách mới</a></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-9 content">
            <?php $route->getSourcePath(__DIR__)->router(); ?>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="../../public/js/header.js"></script>
    <script src="../../public/js/clock.js"></script>
</body>

</html>
<?php
session_start();
$db = require('../../databaseClass.php');

$db = new database();
$erorr = "";
if (!empty($_COOKIE["login"])) {
    $_SESSION["adminId"] = $_COOKIE["login"];
    header('Location: http://localhost/toko/views/admin/home.php');
}

if (isset($_POST["user"]) && isset($_POST["name"]) && isset($_POST["password"])) {

    $result = $db->table('admin')
        ->selectOne("user = '" . $_POST["user"] . "'");

    if (!$result) {
        $erorr = "Tài khoản không đúng!";
    }
    if ($result && $result["user"] == $_POST["user"] && $result["password"] == md5($_POST["password"])) {
        $_SESSION["adminId"] = $result["name"];
        $_SESSION["adminId2"] = $result["id"];
        if (!empty($_POST["remember"])) {
            setcookie("login", $_POST["name"], time() + (10 * 365 * 24 * 60 * 60));
        } else {
            if (isset($_COOKIE["login"])) {
                setcookie("login", "");
            }
        }
        header('Location: http://localhost/toko/views/admin/home.php');
        $erorr = "";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../../public/images/icon.ico">
    <title>Login</title>
    <link rel="stylesheet" href="../../public/css/styleAdLogin.css">
</head>

<body>
    <div class="loginForm">
        <img src="../../public/images/logonew.png" alt="avatar">
        <h1>login</h1>
        <?php if(!empty($erorr)){
            echo $erorr;
        }?>
        <form action="" method="POST">
            <input type="text" name="user" id="user" class="inputForm" placeholder="Username">
            <input type="text" name="name" id="name" class="inputForm" placeholder="Name">
            <input type="password" name="password" id="password" class="inputForm" placeholder="Password">
            <button type="submit">Đăng nhập</button>

            <div class="saveLogin">
                <input type="checkbox" name="remember" id="cbsave" class="cbsave" value="remember">
                <label for="cbsave">Nhớ đăng nhập</label>
            </div>
        </form>

    </div>
</body>

</html>
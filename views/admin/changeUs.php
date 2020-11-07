<?php
$db = require_once('../../databaseClass.php');

$db = new database();
$error;

$result = $db->table('user')
    ->selectOne("id = '" . $_GET["id"] . "'");

if (!empty($_POST["submit"])) {
    if (empty($_POST["user"]) || empty($_POST["name"]) || empty($_POST["password"])) {
        $error = "Chưa điền đủ thông tin";
    }
    $update = $db->table('user')->updateUsById($_GET["id"], $_POST["user"], $_POST["name"],$_POST["phone"],$_POST["address"], md5($_POST["password"]));
    if ($update > 0){
        header('Location: ./home.php?page=inforCus');
    }
}


?>

<div>
    <form action="" method="POST" enctype="multipart/form-data">
    <h1 style='font-size: 20px;'><i class='fas fa-users-cog'></i> Sửa đổi tài khoản: </h1>
        <table>
            <caption><?php if (!empty($error)){echo $error; } ?></caption>
            <tr>
                <td><label for="user">User: </label> </td>
                <td><input type="text" id="user" name="user" class="styleInput" value="<?php echo $result["user"] ?>"></td>
            </tr>
            <tr>
                <td><label for="name">Name: </label> </td>
                <td><input type="text" name="name" id="name" class="styleInput" value="<?php echo $result["name"] ?>"></td>
            </tr>
            <tr>
                <td><label for="user">SĐT: </label> </td>
                <td><input type="text" id="phone" name="phone" class="styleInput" value="<?php echo $result["phone"] ?>"></td>
            </tr>
            <tr>
                <td><label for="name">Địa chỉ: </label> </td>
                <td><input type="text" name="address" id="name" class="styleInput" value="<?php echo $result["address"] ?>"></td>
            </tr>
            <tr>
                <td><label for="password">Password: </label> </td>
                <td><input type="text" name="password" id="password" class="styleInput" value="<?php echo $result["password"] ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Cập nhật" class="btn btn-success"></input>
                    <a href="./home.php?page=info" class="btn btn-danger">Huỷ</a>
                </td>
            </tr>
        </table>
    </form>
</div>
<?php
$db = require_once('../../databaseClass.php');

$db = new database();
$error="";
if(isset($_POST["user"]) && isset($_POST["name"]) && isset($_POST["password"])){
    $insert = $db->table('admin')->insertAcc([
        "user" => $_POST["user"],
        "name" => $_POST["name"],
        "password" => md5($_POST["password"]) 
        ]);
    if($insert>0){
        header('Location: ./home.php?page=info');
    }
    else{
        $error = "Lỗi tạo tài khoản";
    }
}



?>



<div>
    <h1 style='font-size: 20px;'><i class='fas fa-user-plus'></i> Thêm tài khoản admin mới: </h1>
    <?php if($error) {echo $error;}?>
    <form action="" method="POST">
        <table>
            <tr>
                <td><label for="name">Tên tài khoản: </label> </td>
                <td><input type="text" name="name" id="name" class="styleInput"></td>
            </tr>
            <tr>
                <td><label for="name">Tên người dùng: </label> </td>
                <td><input type="text" name="user" id="user" class="styleInput"></td>
            </tr>
            <tr>
                <td><label for="name">Mật khẩu: </label> </td>
                <td><input type="password" name="password" id="password" class="styleInput"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" name="submit" class="btn btn-success">Xong</button>   <a href="./home.php?page=info" class="btn btn-danger">Huỷ</a></td>
            </tr>
        </table>
    </form>
    </div>
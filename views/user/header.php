<?php
session_start();
$erorr = "";
$conn = new mysqli('localhost', 'root','', 'toko');
$error="";
$ac ="";
if(isset($_GET['action'])){
    $ac = $_GET['action'];
} elseif (isset($_POST['action'])) {
    $ac = $_POST['action'];
}
// $result = $conn->query($sql);
$db = require('../../databaseClass.php');

$db = new database();

if (isset($_POST["user"]) && isset($_POST["password"])) {

    $resultL = $db->table('user')
        ->selectOne("user = '" . $_POST["user"] . "'");

    if (!$resultL) {
        $erorr = "Tài khoản không đúng!";
    }
    if ($resultL && $resultL["user"] == $_POST["user"] && $resultL["password"] == md5($_POST["password"])) {
        $_SESSION["userID"] = $resultL["name"];
        header('Location: http://localhost/toko/views/user/cart.php');
        $erorr = "";
    }
}
if($ac == "dx"){
    unset($_SESSION["userID"]);
    header('Location: http://localhost/toko/views/user/cart.php');
}
// // print_r($_SESSION['cart']); die();
if($ac == "dh" && !empty($_SESSION["userID"])){
    $kq = 0;
    $user = $db->table('user')->selectOne("name= '".$_SESSION["userID"]."'");
    foreach ($_SESSION['cart'] as $row){
     $kq = $db->table('cart')->insertCart([
        "name" => $row['name'],
        "price" => floatval($row['qty']*$row['price']),
        "quantity" => (int) $row['qty'],
        "image" => $row['image'],
        "phone" => $user['phone'],
        "address" => $user['address'],
        "username" => $user['name'],
        "date" => date('Y-m-d') 
     ]);
    }
    if($kq >0){
        echo "<script>alert('Đặt hàng thành công!')</script>";
    }else 
        echo "<script>alert('Không có sản phẩm trong giỏ!')</script>";
}

if ($ac == "dk"){
    
    if(isset($_POST["user"]) && isset($_POST["name"]) && isset($_POST["password"]) && isset($_POST["submit"])){
        $insert = $db->table('user')->insertAcc([
            "user" => $_POST["user"],
            "name" => $_POST["name"],
            "password" => md5($_POST["password"]),
            "phone" => $_POST['phone'],
            "address" => $_POST['address'],
            ]);
        if($insert > 0){
        echo "<script>alert('Đăng ký thành công!')</script>";
        }
        else{
            $error = "Lỗi tạo tài khoản";
        }
    }
}

?>

<div id="header">
    <div class="header-top">
        <div class="header-top1">
            <div class="logo"><a href="./home.php"><img src="../../public/images/logo.png"></a></div>
            <div class="form0">
                <form action="" method="get" class="form">
                    <input type="text" name="q" placeholder=" Tìm kiếm với Toko"
                     value="<?php if(isset($_GET['q'])) { echo $_GET['q'];} ?>"/>
                    <div class="search"><img src="../../public/images/submit_search.png"><input type="submit" name="tim" 
                    value="Tìm kiếm"/>
                    </div>
                </form>
                <!-- <div class="search"><img src="images/submit_search.png"><input type="submit" name="" value="Tìm kiếm"/></div> -->
                <?php
                    if(isset($_GET['tim'])){
                        $tk = $_GET['q'];
                        header("Location: viewsearch.php?q=$tk");
                    }
                ?>

            </div>
            <button class="dang-nhap" <?php if(!empty($_SESSION['userID'])){echo "style='display: none;'";}  ?>onclick="show1()">Đăng nhập</button>
            <?php  if(!empty($_SESSION['userID'])){
                echo "<a href='cart.php' class=\"dang-ky\" style='decoration: none'>{$_SESSION['userID']}</a>";}
            ?>
            <button class="dang-ky" <?php if(!empty($_SESSION['userID'])){echo "style='display: none;'";}  ?> onclick="show()">Đăng ký</button>
            <?php  if(!empty($_SESSION['userID'])){
                echo "<a href='cart.php?action=dx' class=\"dang-ky\" style='decoration: none'>Đăng xuất</a>";}
            ?>
            
            <div class="cart"><a href="cart.php"><img src="../../public/images/choose.png">
                <?php
            $total = 0;
            //giỏ hàng có giá trị khác null
            if (isset($_SESSION['cart']) && $_SESSION['cart'] != null) {
                foreach ($_SESSION['cart'] as $list) {
                    $total += count($list); //lấy ra số lượng truy cập đến khoá
                }
            }
            ?>
                <p><?php echo $total; ?></p></a>
            </div>
        </div>

    </div>
    <div class="menuD">
        <ul>
            <li class="menuD0"><a href="1.html">Tại sao chọn Toko</a>
                <div class="menuD-list">
                    <a href="1.html">Giới thiệu</a>
                    <a href="1.html">Quyền lợi chung</a>
                </div>
            </li>
            <li class="menuD1"><a href="2.html">Chia sẻ độc giả</a>
                <div class="banner">
                    <a href=""></a>
                </div>
            </li>
            <li class="menuD1"><a href="3.html">Báo chí nói về Toko</a>
                <div class="banner"></div>
            </li>
            <li class="menuD0"><a href="4.html">Toàn cảnh Toko</a>
                <div class="menuD-list">
                    <a href="1.html">Báo cáo thị trường sách điện tử</a>
                    <a href="1.html">Chương trình Thử thách đọc sách</a>
                    <a href="1.html">Công bố bản quyền</a>
                </div>
            </li>
            <li><a href="3.html">Tuyển dụng</a></li>
            <li><a href="4.html">Diễn đàn<img src=""></a></li>
        </ul>
    </div>
</div>
<!--modal-->
<div class="modal" id="modal">
    <div class="modal_overlay" id="modal_overlay"></div>
    <div class="modal_body" id="modal_body">
        <div class="container">
            <div class="dang-ky-headerD">
                <h4>Đăng ký</h4>
                <span class="dang-nhap-btn" onclick="show1()">Đăng nhập</span>
            </div>
            <form method="POST" action="">
                <div class="dang-ky-formD">
                    <div class="dang-ky-groupD">
                        <input type="" name="user" class="dang-nhap-input" placeholder="Nhập tài khoản">
                    </div>
                    <div class="dang-ky-groupD">
                        <input type="text" name="name" class="dang-nhap-input" placeholder="Tên người dùng">
                    </div>
                    <div class="dang-ky-groupD">
                        <input type="password" name="password" class="dang-nhap-input" placeholder="Nhập mật khẩu">
                    </div>
                    <div class="dang-ky-groupD">
                        <input type="text" name="phone" class="dang-nhap-input" placeholder="Số điện thoại">
                    </div>
                    <div class="dang-ky-groupD">
                        <input type="text" name="address" class="dang-nhap-input" placeholder="Địa chỉ">
                    </div>
                      <div class="dang-ky-groupD">
                        <input style="display: none" type="text" name="action" class="dang-nhap-input" value="dk">
                    </div>
                </div>

                <div class="text">
                    <p class="thong-tin">Bằng việc đăng ký, bạn đồng ý với Toko về
                        <a href="" class="text-link">Điều khoản dịch vụ</a> & <a href="" class="text-link"> Chính sách bảo mật</a>
                    </p>
                </div>
                <div class="form-controlD">
                    <button class="btn2" onclick="show2()">TRỞ LẠI</button>
                    <input class="btn1" type="submit" name="submit" value="ĐĂNG KÝ"></input>
                </div>
            </div>
        </form>

        <div class="form-icon">
            <div class="btn-icon">
                <a href="">
                    <div class="icon-img"><img src="../../public/images/3.png" height="30px" width="30px">
                    </div>
                    Kết nối với Facebook
                </a>
            </div>
            <div class="btn-icon">
                <a href="">
                    <div class="icon-img"><img src="../../public/images/4.png" height="25px" width="25px">
                    </div>
                    Kết nối với Google
                </a>
            </div>
        </div>
    </div>
</div>
<!--dang nhập-->
<div class="modal1" id="modal1">
    <div class="modal_overlay1" id="modal_overlay1"></div>
    <div class="modal_body1" id="modal_body1">
        <div class="container">
            <div class="dang-ky-headerD">
                <h4>Đăng nhập</h4>
                <span class="dang-nhap-btn" onclick="show()">Đăng ký</span>
            </div>
            <form action="" method="POST">
                <div class="dang-ky-formD">
                    <div class="dang-ky-groupD">
                        <input type="" name="user" class="dang-nhap-input" placeholder="Nhập tài khoản">
                    </div>
                    <div class="dang-ky-groupD">
                        <input type="password" name="password" class="dang-nhap-input" placeholder="Mật khẩu của bạn">
                    </div>
                </div>
                <div class="text">
                    <p class="thong-tin">Bằng việc đăng ký, bạn đồng ý với Toko về
                        <a href="" class="text-link">Điều khoản dịch vụ</a> & <a href="" class="text-link"> Chính sách bảo mật</a>
                    </p>
                </div>
                <div class="form-controlD">
                    <button class="btn2" onclick="show2()">TRỞ LẠI</button>
                    <button type="submit" class="btn1">ĐĂNG NHẬP</button>
                </div>
            </form>
        </div>

        <div class="form-icon">
            <div class="btn-icon">
                <a href="">
                    <div class="icon-img"><img src="../../public/images/3.png" height="30px" width="30px">
                    </div>
                    Kết nối với Facebook
                </a>
            </div>
            <div class="btn-icon">
                <a href="">
                    <div class="icon-img"><img src="../../public/images/4.png" height="30px" width="30px">
                    </div>
                    Kết nối với Google
                </a></div>
        </div>
    </div>
</div>
<?php

	$conn = new mysqli('localhost', 'root','', 'toko');
	$sql = "SELECT * FROM book";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Giỏ hàng | Toko</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../../public/css/styleUsHeader.css">

</head>
<body>

	<!-- cart -->
	<div id="listcart">
 		<div class="soluong1"><p>GIỎ HÀNG (Đang có <a href="cart.php"><?php echo $total; ?></a> sản phẩm)</p>
 		</div>
 		<?php
            $total = 0;
            //giỏ hàng có giá trị khác null
            if (isset($_SESSION['cart']) && $_SESSION['cart'] != null) {
                foreach ($_SESSION['cart'] as $list) {
                    $total += $list['qty']; //lấy ra số lượng truy cập đến khoá
                }
            }
            ?>
		<!-- <h2 style="text-align:center; color:red;margin-left: 10px; margin-bottom: 10px; margin-top: 10px">Thông tin giỏ hàng</h2> -->
		<div class="listcart1">
		<h4 style='text-align:left; color:red;margin-left: 10px; margin-bottom: 22px; margin-top: 10px'>Thông tin giỏ hàng</h4>
		<?php
			$tongcong = 0;	
			if(isset($_SESSION['cart']) && $_SESSION['cart'] != null) {
				echo "<form action='updatecart.php' method='post' class=\"listcart\">";
				echo "<table class=\"tablecart\">";
				echo "<tr class=\"formcart\">";
				echo "<td> Ảnh sản phẩm</td>";
				echo "<td> Tên sản phẩm</td>";
				echo "<td> Tác giả</td>";
				echo "<td> Số lượng</td>";
				echo "<td> Giá thành</td>";
				echo "<td> Thành tiền</td>";
				echo "<td> Xoá</td>";
				foreach ($_SESSION['cart'] as $list) {
					//echo "<div class=\"formcart\">";
					echo "<tr>";
					echo "<td class=\"cotimage\"><img src=".$list['image']."></td>";
					echo "<td class=\"cotname\"><p>".$list['name']."</p></td>";
					echo "<td class=\"cotauthor\"><p>".$list['author']."</p></td>";
					echo "<td><input type='number' Style='width:50px; text-align:center;' value='".$list['qty']."' name='qty[".$list['id']."]'></td>";
					echo "<td>".number_format($list['price'],0)." VNĐ</td>";
					echo "<td>".number_format($list['qty']*$list['price'],0)." VNĐ</td>";
					echo "<td><a href='deletecart.php?id=".$list['id']."'>Xoá</a></td>";					
					$tongcong += $list['qty']*$list['price'];
					echo "</tr>";
					
				}
				echo "<table class=\"tongcong\">";
				echo "<p class=\"tongcong\">tổng cộng: ".number_format($tongcong,0)." VNĐ</p>";
				echo "</table>";
				echo "</table>
					<p align='right' Style=' float:right; margin-top:10px;'>
					<input type='submit' value='Update' name='btnupdate' class=\"dang-ky\">
					</p>
				";
				echo "</form>";
			}
		?>
		
		</div>
		<div class="listcart2">
			<?php
			echo "<h4 style='text-align:left; color:red;margin-left: 10px; margin-bottom: 10px; margin-top: 10px'>Tổng đơn hàng</h4>";
			echo "<table class=\"tamtinh\">";
				echo "<tr>";
				echo "<td class=\"tongcong2\"><p>Tạm tính: </p></td>";
				echo "<td class=\"tongcong2\">".number_format($tongcong,0)." VNĐ</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td class=\"tongcong2\"><p>thành tiền: </p></td>";
				echo "<td class=\"tongcong1\">".number_format($tongcong,0)." VNĐ</td>";
				echo "</tr>";
				echo "</table> <p class=\"thue\">(Đã bao gồm cả thuế VAT)</p>";
				echo "<button class=\"dang-ky\"><a href='home.php'>MUA THÊM</a></button>";
				if(!empty($_SESSION['userID'])){
					echo "<a href='cart.php?action=dh' class=\"dang-ky\" style='decoration: none'>ĐẶT HÀNG</a>";
				}
				else{
					echo "<button class=\"dang-ky\" onclick='show1()'>ĐẶT HÀNG</button>";
				}
			?>
			<!-- <h4 style='text-align:left; color:red;margin-left: 10px; margin-top: 100px'>Khách hàng</h4>
			<form action="" method="POST">
                <div class="dang-ky-formD">
                	<div class="dang-ky-groupD">
                        <input type="" name="uname" class="dang-nhap-input" placeholder="Tên người nhận">
                    </div>
                    <div class="dang-ky-groupD">
                        <input type="" name="add" class="dang-nhap-input" placeholder="Nhập địa chỉ">
                    </div>
                    <div class="dang-ky-groupD">
                        <input type="" name="phone" class="dang-nhap-input" placeholder="Số diện thoại">
                    </div>
                </div>
                <button type="submit" class="btn1" style=" margin-top: 10px; margin-left: 10%";>Xác nhận địa chỉ</button>
            </form> -->
			<!-- <a href="updatecart.php"><input type='submit' value='Update' name='btnupdate' class="dang-ky"></a> -->
		</div>
	</div>
	<div></div>
	<script src="../../public/js/header.js"></script>
	

</body>
</html>
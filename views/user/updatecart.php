<?php 
	session_start();
	$_SESSION['cart'];
	if(isset($_POST['btnupdate'])) {
		// echo "<pre>";
		//lấy ra dữ liệu và truyền vào mảng
		foreach ($_POST['qty'] as $key => $val) {

			$_SESSION['cart'][$key]['qty'] = $val;
		}
		if($val <= 0){
				unset($_SESSION['cart'][$key]);
			}
	}
	header("location:cart.php");
?>
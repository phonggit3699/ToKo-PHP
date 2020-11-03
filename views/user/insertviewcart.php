<?php
$conn = new mysqli('localhost', 'root','', 'toko');
$sql = "SELECT * FROM book";
$result = $conn->query($sql);
?>
<?php
session_start();
// require_once 'header.php';
echo $id = $_GET['id'];
$new = array();
foreach ($result as $val) {
	$new[$val['id']] = $val;
}
// echo "<pre>";

if(!isset($_SESSION['cart']) || $_SESSION['cart'] == null){
	$new[$id]['qty'] = 1;
	print_r($new[$id]);
//thêm sản phẩm vào giỏ hàng
	$_SESSION['cart'][$id] = $new[$id];
} else {
	
	echo "có sản phẩm trong giỏ";
	//khi có sản phẩm trong giỏ
	if(array_key_exists($id,$_SESSION['cart'])) {
		$_SESSION['cart'][$id]['qty'] += 1;
		// print_r($_SESSION['cart']);
		//khi không có sản phẩm trong giỏ
	} else {
		$new[$id]['qty'] = 1;
		$_SESSION['cart'][$id] = $new[$id];
	}
}
header("location:cart.php");
?>
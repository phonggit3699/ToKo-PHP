<?php
$conn = new mysqli('localhost', 'root', '', 'toko');

if (isset($_GET['tim']) && !empty($_GET['s'])) {
	$tk = $_GET['s'];
}
//else{
// 	header('Location: http://localhost/toko/views/user/home.php');
// }

$tk = $_GET['s'];
$sql = "SELECT * FROM book WHERE name LIKE '%$tk%' OR author LIKE '%$tk%' OR category LIKE '%$tk%'";
$result = mysqli_query($conn, $sql);
?>

<div class="row">
	<?php
	while ($row = mysqli_fetch_array($result)) {
		echo "
		<div class='col-sm-3'>
		<div class='p-content'>
		    <div class='p-toko'>
			<div class='p-anh'>
				<img src=" . $row['image'] . " alt='Ảnh'>
				<div class='p-sp'>
					<a href=home.php?page=detailPd&id=" . $row['id'] . ">Chi tiết</a>
				</div>
			</div>
			<div class='p-book'>
				<h3>" . $row['name'] . "</h3>
				<h3 class='p-text'>
					<a>" . $row['author'] . "</a>
				</h3>
				<p>" . $row['description'] . "</p>
			</div>
		</div>
	</div>
	</div>
    ";
	}
	?>
</div>
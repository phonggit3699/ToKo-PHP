<?php
$db = require_once("../../databaseClass.php");
$db = new database();

$pp = rand(0,10);

if(isset($_GET['c'])){
	$c = $_GET['c'];
	$results = $db->table('book')->selectByCateGory(6,$pp,$c);

}else{
	$results = $db->table('book')->select(6,$pp);
}
?>



<div class="row">
<!----------------------------------------- Phương ----------------------------------------------------->
	<?php
	foreach ($results as $row) {
		echo "
		<div class='col-sm-4'>
		<div class='p-content'>
		    <div class='p-toko'>
			<div class='p-anh'>
				<img src='{$row->image}' alt='Ảnh'>
				<div class='p-sp'>
					<a href='http://localhost/toko/views/user/home.php?page=detailPd&id={$row->id}'>Chi tiết</a>
				</div>
			</div>
			<div class='p-book'>
				<h3>{$row->name}</h3>
				<h3 class='p-text'>
					<a>{$row->author}</a>
				</h3>
				<p>{$row->description}</p>
			</div>
		</div>
	</div>
	</div>
    ";
	}
	?>
</div>
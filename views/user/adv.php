<?php
$db = require_once("../../databaseClass.php");
$db = new database();

$pp = rand(0, 10);

$results = $db->table('book')->select(6, $pp);

?>


<div  class="row">
    <!----------------------------------------- Phương ----------------------------------------------------->
    <?php
    foreach ($results as $row) {
        echo "
		<div class='p-content-2'>
	<div class='p-toko-2'>
		<div class='p-anh-2'>
			<img src='{$row->image}' alt=''>
			<h3 class='p-title-2'>
				<a href=''>{$row->name}</a>
			</h3>
			<h3 class='p-text-2'>
				<a href=''>{$row->author}</a>
			</h3>
		</div>
	</div>
</div>
    ";
    }
    ?>
</div>
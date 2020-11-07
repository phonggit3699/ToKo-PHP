<?php
$db = require_once("../../databaseClass.php");
$db = new database();



if (isset($_GET['p']))
    $page = (int) $_GET['p'];
else $page = 1; //Tính số trang hiện tại

$ppage = $db->limit;

$start = ($page - 1) * $ppage;
$results = $db->table('book')->select(10,$start);

?>
<div class='bg'>
    <div class="row">
        <?php
        foreach ($results as $row) {
            echo "
            <div class='col-sm4 formProd'>
            <a style='text-decoration: none;' href='./home.php?page=detailPd&action=detailPd&id={$row->id}'>
                <div class='product'>
                    <img src='{$row->image}' alt='Ảnh'>
                        <div class='detail'>
                            <p>Giá: {$row->price}</p>
                            <p>Còn lại: {$row->quantity}</p>
                        </div>
                        <p class='dtHover'>Chi tiết</p>
                </div>
            </a>
            </div>";
        }
        ?>
    </div>
    <div class="pagination">
        <a href="./views/admin/home.php?page=product&p=<?php $pre = ($page - 1); if($pre >= 1){echo $pre;}else {echo  $pre = 1;} ?>" 
        class='pageNext arrow'>&#8249;</a>
        <?php
        $total = $total = $db->table('book')->count();
        $maxpage = ceil($total / $ppage); //Tính số trang tối đa
        for ($i = 1; $i <= $maxpage; $i++) {
            if ($i != $page) {
                echo "<a class='pageNext' style='text-decoration: none;'  href = ./home.php?page=product&p=$i> $i </a>";
            } else {
                echo "<span class='pageCurrent'>$i</span>";
            }
        }
        ?>
         <a href="./home.php?page=product&p=<?php $next = ($page + 1); if($next <= $maxpage){echo $next;}else {echo  $next = $maxpage;} ?>" class='pageNext arrow'>&#8250;</a>
    </div>
</div>
<?php
    $db = require_once('../../databaseClass.php');

   
    $db = new database();
    
    if (isset($_GET['p']))
        $page = (int) $_GET['p'];
    else $page = 1; //Tính số trang hiện tại

    $ppage = 3;

    $start = ($page - 1) * $ppage;
    $results = $db->table('cart')->select(3,$start);

    echo "<div class='clearfix'><h1 style='float: left;font-size: 20px;'><i class='fas fa-users-cog'></i> Tài khoản User: </h1></div>";
    echo "<table class='table table-striped mt-2'>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Price</th>";
    echo "<th>Quantity</th>";
    echo "<th>Customer</th>";
    echo "<th>Phone</th>";
    echo "<th>Address</th>";
    echo "<th>Date</th>";
    echo "<th>Image</th>";
    echo "</tr>";
    foreach($results as $row){
        echo "<tr>";
        echo "<td>".$row->name."</td>";
        echo "<td>".$row->price."</td>";
        echo "<td>".$row->quantity."</td>";
        echo "<td>".$row->username."</td>";
        echo "<td>".$row->phone."</td>";
        echo "<td>".$row->address."</td>";
        echo "<td>".date('d-m-Y',strtotime($row->date))."</td>";
        echo "<td><img style='width: 100px;' src='{$row->image}'></td>";
        echo "</tr>";
    };
    echo "</table>";

?>

<div class="pagination">
        <a href="http://localhost/toko/views/admin/home.php?page=cart&p=<?php $pre = ($page - 1); if($pre >= 1){echo $pre;}else {echo  $pre = 1;} ?>" 
        class='pageNext arrow'>&#8249;</a>
        <?php
        $total = $total = $db->table('cart')->count();
        $maxpage = ceil($total / $ppage); //Tính số trang tối đa
        for ($i = 1; $i <= $maxpage; $i++) {
            if ($i != $page) {
                echo "<a class='pageNext' style='text-decoration: none;'  href = http://localhost/toko/views/admin/home.php?page=cart&p=$i> $i </a>";
            } else {
                echo "<span class='pageCurrent'>$i</span>";
            }
        }
        ?>
         <a href="http://localhost/toko/views/admin/home.php?page=cart&p=<?php $next = ($page + 1); if($next <= $maxpage){echo $next;}else {echo  $next = $maxpage;} ?>" class='pageNext arrow'>&#8250;</a>
    </div>
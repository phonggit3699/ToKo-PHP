<?php
    $db1 = require_once('../../databaseClass.php');

   
    $db1 = new database();
    
    $result = $db1->table('user')->selectALL();

    if(isset($_GET["action"])){
        $action = $_GET["action"];
    }
    
    if (isset($_GET['id'])){
        $Id = (int) $_GET['id'];
    }
        
    if (!empty($action) &&  $action == "resetUs") {
        $result = $db1->table('user')
            ->selectOne("id = '" . $Id . "'");
        $update = $db1->table('user')->updateById($Id,  $result["user"],  $result["name"], md5("12345678"));
        if ($update > 0) {
            header('Location: ./home.php?page=inforCus');
        }
        if ($result["password"] == "25d55ad283aa400af464c76d713c07ad") {
            header('Location: ./home.php?page=inforCus');
        }
    }
    
    if (!empty($action) && $action == "deleteUs") {
    
        $delete = $db1->table('user')->deleteRow($Id);
        if ($delete > 0) {
            header('Location: ./home.php?page=inforCus');
        }
    }
    echo "<div class='clearfix'><h1 style='float: left;font-size: 20px;'><i class='fas fa-users-cog'></i> Tài khoản User: </h1></div>";
    echo "<table class='table table-striped mt-2'>";
    echo "<tr>";
    echo "<th>User</th>";
    echo "<th>Name</th>";
    echo "<th>Password</th>";
    echo "<th>Phone</th>";
    echo "<th>Address</th>";
    echo "<th style='text-align: center;'>Change</th>";
    echo "<th style='text-align: center;'>Reset</th>";
    echo "<th style='text-align: center;'>Delete</th>"; 
    echo "</tr>";
    foreach($result as $row){
        echo "<tr>";
        echo "<td>".$row->user."</td>";
        echo "<td>".$row->name."</td>";
        echo "<td>".$row->password."</td>";
        echo "<td>".$row->phone."</td>";
        echo "<td>".$row->address."</td>";
        echo "<td style='text-align: center;'><a href='./home.php?page=changeUs&id=".$row->id."'"."><i class='fas fa-wrench'></i> Change</a></td>";
        echo "<td style='text-align: center;'>";
        if ($_SESSION["adminId"]=="admin"){
            echo "<a href='./home.php?page=inforCus&action=resetUs&id=".$row->id."'"."><i class='fas fa-redo-alt'></i> Reset</a>";
            
        }  
        echo "</td>";
        echo "<td style='text-align: center;'>";
        if ($_SESSION["adminId"]=="admin"){
            echo "<a href='./home.php?page=inforCus&action=deleteUs&id=".$row->id."'"."><i class='fas fa-trash-alt'></i></a>";
            
        }  
        echo "</td>";
        echo "</tr>";
    };
    echo "</table>";

?>
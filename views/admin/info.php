<?php
    $db = require_once('../../databaseClass.php');

    $db = new database();

    if(isset($_GET["action"])){
        $action = $_GET["action"];
    }
    
    if (isset($_GET['id'])){
        $Id = (int) $_GET['id'];
    }
        
    $result = $db->table('admin')->selectALL();


    if (!empty($action) &&  $action == "reset") {
        $result = $db->table('admin')
            ->selectOne("id = '" . $Id . "'");
        $update = $db->table('admin')->updateById($Id,  $result["user"],  $result["name"], md5("12345678"));
        if ($update > 0) {
            header('Location: ./home.php?page=info');
        }
        if ($result["password"] == "25d55ad283aa400af464c76d713c07ad") {
            header('Location: ./home.php?page=info');
        }
    }
    
    if (!empty($action) && $action == "delete") {
        
        if($Id != $_SESSION["adminId2"]){
            $delete = $db->table('admin')->deleteRow($Id);
            if ($delete > 0) {
                header('Location: ./home.php?page=info');
            }
        }
        else{
            echo ("Không xoá được. Tài khoản đang đăng nhập!"); 
        }
       
    }

    echo "<div class='clearfix'><h1 style='float: left;font-size: 20px;'><i class='fas fa-users-cog'></i> Tài khoản Admin: </h1> 
                                    <a class='btn btn-warning' style='float: right' href='./views/admin/home.php?page=newaccount'>Thêm mới tài khoản</a></div>";
    echo "<table class='table table-striped mt-2'>";
    echo "<tr>";
    echo "<th>User</th>";
    echo "<th>Name</th>";
    echo "<th>Password</th>";
    echo "<th style='text-align: center;'>Change</th>";
    echo "<th style='text-align: center;'>Reset</th>";
    echo "<th style='text-align: center;'>Delete</th>"; 
    echo "</tr>";
    foreach($result as $row){
        echo "<tr>";
        echo "<td>".$row->user."</td>";
        echo "<td>".$row->name."</td>";
        echo "<td>".$row->password."</td>";
        echo "<td style='text-align: center;'><a href='./home.php?page=changeAd&id=".$row->id."'"."><i class='fas fa-wrench'></i> Change</a></td>";
        echo "<td style='text-align: center;'>";
        if ($_SESSION["adminId"]=="admin"){
            echo "<a href='./home.php?page=info&action=reset&id=".$row->id."'"."><i class='fas fa-redo-alt'></i> Reset</a>";
            
        }  
        echo "</td>";
        echo "<td style='text-align: center;'>";
        if ($_SESSION["adminId"]=="admin"){
            echo "<a href='./home.php?page=info&action=delete&id=".$row->id."'"."><i class='fas fa-trash-alt'></i></a>";
            
        }  
        echo "</td>";
        echo "</tr>";
    };
    echo "</table>";

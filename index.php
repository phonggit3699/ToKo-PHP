<?php
 header('Location: ./views/user/home.php');
session_start();
print_r( $_SESSION['cart']); die();
  
// Store the file name into variable 
// $file = './public/pdf/ReadPdf.pdf'; 
// $filename = 'ReadPdf.pdf'; 
  
// // Header content type 
// header('Content-type: application/pdf'); 
  
// header('Content-Disposition: inline; filename="' . $filename . '"'); 
  
// header('Content-Transfer-Encoding: binary'); 
  
// header('Accept-Ranges: bytes'); 
  
// // Read the file 
// @readfile($file); 


?>

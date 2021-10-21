<?php
 include 'config.php';
 if(isset($_SESSION['mabn']))
 {
     echo $_SESSION['mabn']; 
     unset($_SESSION['mabn']); 
 }
    include 'header.php';
    $mabn = $_GET['mabn'];
    $sql = "DELETE FROM patient WHERE patientid=$mabn";
    $res = mysqli_query($conn, $sql) or die(mysqli_error()) ;
    if($res==true)
   {
       header('location:index.php');
   }else
   {
       echo"Xoá thất bại";
   }
?>
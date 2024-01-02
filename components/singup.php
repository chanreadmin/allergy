<?php 
include('../layout/config.php');
if(isset($_POST['signup']))
{
    $adminName = $_POST['adminName'];
    $centerCode = $_POST['centerCode'];
    $adminUsername = $_POST['adminUsername'];
    $adminPassword = $_POST['adminPassword'];
    $admin_email=$_POST['admin_email'];
    $mobile = $_POST['mobile'];
    // $isActive = $_POST['isActive'];
    $active = 1;
    $hashedpass=password_hash($adminPassword, PASSWORD_BCRYPT);

    $query1=mysqli_query($conn,"INSERT INTO tbl_admin (adminName, centerCode, adminUsername, adminPassword, admin_email, isActive) 
    VALUES ('$adminName','$centerCode','$adminUsername','$hashedpass','$admin_email','$active')");

    if($query1){
echo "<script>alert('You have successfully inserted the data');</script>";
    }
    else{
echo "<script>alert('Notinserted the data');</script>";
    }

   
}

?>
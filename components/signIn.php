<?php

include('../layout/config.php');
session_start();

if (isset($_POST['login'])) {
  $adminUsername = $_POST['adminUsername'];
  $password = $_POST['adminPassword'];

  $myquery = mysqli_query($conn, "SELECT * FROM tbl_admin WHERE adminUsername='$adminUsername' OR admin_email='$adminUsername' AND isActive = 1 ");

  if ($myquery) {
    $rowCount = mysqli_num_rows($myquery);

    if ($rowCount > 0) {
      $rows = mysqli_fetch_array($myquery);
      $hashpassword = $rows['adminPassword'];
      if (password_verify($password, $hashpassword)) {
        $_SESSION['adminName'] = $rows['adminName'];
        $_SESSION['centerCode'] = $rows['centerCode'];
        $_SESSION['centerName'] = $rows['centerName'];
        $_SESSION['login'] = $_POST['adminUsername'];
        // $_SESSION['$adminPassword'] = $rows['adminPassword'];
        $_SESSION['admin_email'] = $rows['admin_email'];
        $_SESSION['isActive'] = $rows['isActive'];
        $_SESSION['status'] = $rows['status'];
        echo "<script type='text/javascript'>  document.location ='../dashboard-admin.php';</script>";
      } else {
        echo "<script>alert('Wrong Password');</script>";
        echo "<script > document.location ='../index.php'; </script>";
      }
    } else {
      echo "<script>alert('User not registered with us');</script>";
      echo "<script > document.location ='../index.php'; </script>";
    }
  } else {
    // Handle query execution error
    echo "Error: " . mysqli_error($conn);
  }
}
error_reporting(E_ALL);
?>
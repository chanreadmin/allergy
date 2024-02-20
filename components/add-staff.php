<?php
include('../layout/config.php');


// Hospital Registration
if (isset($_POST['submit'])) {

    $empName = $_POST['empName'];
    $empQualification = $_POST['empQualification'];
    $empDesignation = $_POST['empDesignation'];
    $empkmc = $_POST['empkmc'];
    $empUsername = $_POST['empUsername'];
    $empPassword = $_POST['empPassword'];
    $centerName = $_POST['centerName'];
    $centerCode = $_POST['centerCode'];
    $empImage = $_POST['empImage'];
    $useremail = $_POST['useremail'];
    $usermobile = $_POST['usermobile'];
    $role = $_POST['role'];
    $isActive = 1;

    // Check if the username and email already exist
    $checkUsernameSql = "SELECT * FROM tbl_staff WHERE empUsername = '$empUsername'";
    $checkEmailSql = "SELECT * FROM tbl_staff WHERE useremail = '$useremail'";
    $resultUsername = mysqli_query($conn, $checkUsernameSql);
    $resultEmail = mysqli_query($conn, $checkEmailSql);
    if (mysqli_num_rows($resultUsername) > 0) {
        echo "<script>alert('Username already exists. Please choose a different username.');</script>";
        echo "<script > document.location ='../add-doctor.php'; </script>";
    } elseif (mysqli_num_rows($resultEmail) > 0) {
        echo "<script>alert('Email already exists. Please choose a different email.');</script>";
        echo "<script > document.location ='../add-doctor.php'; </script>";
    } else {
        // If both username and email are available, proceed with inserting the data
        // Hash the password
        $hashedpass = password_hash($empPassword, PASSWORD_BCRYPT);
        // Insert data into the database
        $query1 = mysqli_query($conn, "INSERT INTO tbl_staff (empName, empQualification, empDesignation, empkmc, empUsername, empPassword, centerName, centerCode, empImage, useremail, usermobile, role, isActive) 
        VALUES ('$empName', '$empQualification', '$empDesignation', '$empkmc', '$empUsername', '$hashedpass', '$centerName', '$centerCode', '$empImage', '$useremail', '$usermobile', '$role', $isActive)");


        if ($query1) {
            echo "<script>alert('You have successfully inserted the data');</script>";
            echo "<script > document.location ='../add-center.php'; </script>";
        } else {
            echo "<script>alert('Failed to insert the data');</script>";
        }
    }
}

/*
if (isset($_POST['update'])) {
    $centerName = $_POST['centerName'];
    $centerCode = $_POST['centerCode'];
    $center_username = $_POST['center_username'];
    $center_password = $_POST['center_password'];
    $alt_center_email = $_POST['alt_center_email'];
    $alt_contact = $_POST['alt_contact'];
    $center_email = $_POST['center_email'];
    $center_contact = $_POST['center_contact'];
    $active = 1;
    $hashedpass = password_hash($center_password, PASSWORD_BCRYPT);
    $center_id = $_POST['centerCode'];
    $query1 = mysqli_query($conn, "UPDATE tbl_center SET 
            centerName = '$centerName',
            centerCode = '$centerCode',
            alt_center_email='$alt_center_email',
            center_username = '$center_username',
            center_password = '$hashedpass',
            center_email = '$center_email',
            center_contact = '$center_contact',
            alt_contact='$alt_contact'
            WHERE centerCode = $center_id");
    if ($query1) {
        echo "<script>alert('Data updated/inserted successfully');</script>";
        echo "<script > document.location ='../add-center.php'; </script>";
    } else {
        echo "<script>alert('Failed to update/insert data');</script>";
    }
}

*/

if (isset($_POST['username'])) {
    $username = $_POST['username'];

    $sql = "SELECT * FROM tbl_staff WHERE empUsername = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<span style="color:red;">Opps!! Username already exists</span>';
    } else {
        echo '<span style="color:green;">Congrats!! your username is unique</span>';
    }
}
?>
<?php
include('../layout/config.php');
// Hospital Registration
if (isset($_POST['submit'])) {
    $empName = $_POST['empName'];
    $empQualification = $_POST['empQualification'];
    $empDesignation = $_POST['empDesignation'];
    $empkmc = $_POST['empkmc'];
    $centerName = $_POST['centerName'];
    $centerCode = $_POST['centerCode'];
    $usertype = $_POST['usertype'];
    $center_username = $_POST['center_username'];
    $center_password = $_POST['center_password'];
    $center_email = $_POST['center_email'];
    $center_contact = $_POST['center_contact'];
    // Check if the username and email already exist
    $checkUsernameSql = "SELECT * FROM tbl_users WHERE center_username = '$center_username'";
    $checkEmailSql = "SELECT * FROM tbl_users WHERE center_email = '$center_email'";
    $resultUsername = mysqli_query($conn, $checkUsernameSql);
    $resultEmail = mysqli_query($conn, $checkEmailSql);
    if (mysqli_num_rows($resultUsername) > 0) {
        echo "<script>alert('Username already exists. Please choose a different username.');</script>";
        echo "<script > document.location ='../add-user.php'; </script>";
    } elseif (mysqli_num_rows($resultEmail) > 0) {
        echo "<script>alert('Email already exists. Please choose a different email.');</script>";
        echo "<script > document.location ='../add-user.php'; </script>";
    } else {
        // If both username and email are available, proceed with inserting the data
        // Hash the password
        $hashedpass = password_hash($center_password, PASSWORD_BCRYPT);
        // Insert data into the database
        $query1 = mysqli_query($conn, "INSERT INTO tbl_users (empName, empQualification, empDesignation, empkmc, centerName, centerCode, center_username, center_password, center_email, center_contact, usertype) 
        VALUES ('$empName','$empQualification','$empDesignation','$empkmc','$centerName','$centerCode','$center_username','$hashedpass','$center_email','$center_contact','$usertype')");
        if ($query1) {
            echo "<script>alert('You have successfully inserted the data');</script>";
            echo "<script > document.location ='../add-user.php'; </script>";
        } else {
            echo "<script>alert('Failed to insert the data');</script>";
        }
    }
}
// Hospital Update
if (isset($_POST['update'])) {
    $empName = $_POST['empName'];
    $empQualification = $_POST['empQualification'];
    $empDesignation = $_POST['empDesignation'];
    $empkmc = $_POST['empkmc'];
    $centerName = $_POST['centerName'];
    $centerCode = $_POST['centerCode'];
    $center_email = $_POST['center_email'];
    $center_contact = $_POST['center_contact'];
    $active = 1;
    $center_id = intval($_GET['hid']);
    $query1 = mysqli_query($conn, "UPDATE tbl_users SET 
            empName='$empName',
            empQualification = '$empQualification',
            empDesignation = '$empDesignation',
            empkmc = '$empkmc',
            centerName = '$centerName',
            centerCode = '$centerCode',
            center_email = '$center_email',
            center_contact = '$center_contact'
            WHERE id = $center_id");
    if ($query1) {
        echo "<script>alert('Data updated/inserted successfully');</script>";
        echo "<script > document.location ='../edit-center.php?hid=$center_id'; </script>";
    } else {
        echo "<script>alert('Failed to update/insert data');</script>";
    }
}
if (isset($_POST['username'])) {
    $username = $_POST['username'];

    $sql = "SELECT * FROM tbl_users WHERE center_username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<span style="color:red;">Opps!! Username already exists</span>';
    } else {
        echo '<span style="color:green;">Congrats!! your username is unique</span>';
    }
}
?>
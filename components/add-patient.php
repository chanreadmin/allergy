<?php

include('../layout/config.php');
session_start();

if (isset($_POST['submit'])) {
    $patient_name = $_POST['patient_name'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $physician = $_POST['physician'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $updatedBy = $_SESSION['adminName'];
    $centerName = $_SESSION['centerName'];
    $centerCode = $_SESSION['centerCode'];
    $patient_id = $_POST['patient_id'];




    $query = mysqli_query($conn, "Insert into patients (patient_name, age, sex, physician, 
        address, mobile, email, updatedBy, centerName, centerCode, patient_id )
        
    values('$patient_name','$age','$sex','$physician','$address','$mobile','$email',
    '$updatedBy', '$centerName', '$centerCode', '$patient_id' )");


    if ($query) {
        echo "<script>alert('You have successfully inserted the data');</script>";
        echo "<script > document.location ='../add-patient.php'; </script>";
    } else {
        echo "<script>alert('Failed to insert the data');</script>";
    }

}
?>
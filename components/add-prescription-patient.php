<?php
include('../layout/config.php');
session_start();
$number = count($_POST["drug_name"]);
/*
if ($number > 1) {
    for ($i = 0; $i < $number; $i++) {
        // Check if the "name" field is not empty
        if (trim($_POST["drug_name"][$i] != '')) {
            // Get values from the corresponding fields
            $name = mysqli_real_escape_string($conn, $_POST["drug_name"][$i]);
            $dose = mysqli_real_escape_string($conn, $_POST["dose"][$i]);
            $duration = mysqli_real_escape_string($conn, $_POST["duration"][$i]);
            $instruction = mysqli_real_escape_string($conn, $_POST['instruction'][$i]);
            $gid = intval($_GET['pid']);
            $updatedBy = $_SESSION['adminName'];
            $centerName = $_SESSION['centerName'];
            $centerCode = $_SESSION['centerCode'];
            $isActive = 1;

            // Insert data into the database
            $insQuery = mysqli_query($conn, "Insert into tbl_prescription 
        (drug_name, dose, duration, instruction) 
        values('$drug_name', '$dose','$duration', '$instruction' )");
        }
    }
    echo "Data Inserted";
} else {
    echo "Please Enter Name";
}*/


$number = count($_POST["drug_name"]);
if ($number > 0) {
    for ($i = 0; $i < $number; $i++) {
        if (trim($_POST["drug_name"][$i] != '')) {

            $drug_name = mysqli_real_escape_string($conn, $_POST["drug_name"][$i]);
            $dose = mysqli_real_escape_string($conn, $_POST["dose"][$i]);
            $duration = mysqli_real_escape_string($conn, $_POST["duration"][$i]);
            $instruction = mysqli_real_escape_string($conn, $_POST['instruction'][$i]);
            $gid = mysqli_real_escape_string($conn, $_POST['patient_id']);
            $visit = mysqli_real_escape_string($conn, $_POST['visit']);
            $updatedBy = $_SESSION['login'];
            $centerName = $_SESSION['centerName'];
            $centerCode = $_SESSION['centerCode'];
            $isActive = 1;

            $sql = "Insert into tbl_prescription 
    (drug_name, dose, duration, instruction, centerCode, centerName, patient_id, updatedBy, isActive, visit) 
       values('$drug_name', '$dose','$duration', '$instruction','$centerCode', '$centerName', '$gid' ,'$updatedBy','$isActive','$visit' )";
            mysqli_query($conn, $sql);
        }
    }
    echo "Data Inserted";
} else {
    echo "Please Enter Name";
}
?>
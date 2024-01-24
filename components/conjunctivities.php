<?php

include('../layout/config.php');
session_start();

if (isset($_POST['submit'])) {
    $itching = $_POST['itching'];
    $tearing = $_POST['tearing'];
    $redness = $_POST['redness'];
    $discomfort = $_POST['discomfort'];
    $discharge = $_POST['discharge'];
    $photophobia = $_POST['photophobia'];
    $seasonal = $_POST['seasonal'];
    $perinneal = $_POST['perinneal'];
    $intermittent = $_POST['intermittent'];
    $persistent = $_POST['persistent'];
    $bothersome = $_POST['bothersome'];
    $vision = $_POST['vision'];
    $interference = $_POST['interference'];
    $activities = $_POST['activities'];
    $updatedBy = $_SESSION['adminName'];
    $centerName = $_SESSION['centerName'];
    $centerCode = $_SESSION['centerCode'];
    $patient_id = intval($_GET['pid']);
    $query = mysqli_query($conn, "Insert into tbl_conjunctivities (itching, tearing, redness, discomfort, discharge, photophobia, seasonal, perinneal, intermittent, persistent, bothersome, vision, interference, activities, centerCode, centerName, patient_id, updatedBy ) 
    values('$itching','$tearing','$redness','$discomfort','$discharge','$photophobia','$seasonal','$perinneal','$intermittent','$persistent','$bothersome','$vision','$interference','$activities','$centerCode','$centerName','$patient_id','$updatedBy'
 )");
    if ($query) {
        echo "<script>alert('You have successfully inserted the data');</script>";
        echo "<script > document.location ='../add-conjuctivities-followup.php?pid=$patient_id'; </script>";
    } else {
        echo "<script>alert('Failed to insert the data');</script>";
    }
}

if (isset($_POST['update'])) {
    $itching = $_POST['itching'];
    $tearing = $_POST['tearing'];
    $redness = $_POST['redness'];
    $discomfort = $_POST['discomfort'];
    $discharge = $_POST['discharge'];
    $photophobia = $_POST['photophobia'];
    $seasonal = $_POST['seasonal'];
    $perinneal = $_POST['perinneal'];
    $intermittent = $_POST['intermittent'];
    $persistent = $_POST['persistent'];
    $bothersome = $_POST['bothersome'];
    $vision = $_POST['vision'];
    $interference = $_POST['interference'];
    $activities = $_POST['activities'];
    $updatedBy = $_SESSION['adminName'];
    $centerName = $_SESSION['centerName'];
    $centerCode = $_SESSION['centerCode'];
    $patient_id = intval($_GET['pid']);
    $query = mysqli_query($conn, "Update tbl_conjunctivities SET itching='$itching',tearing='$tearing',redness='$redness',discomfort='$discomfort',discharge='$discharge',photophobia='$photophobia',seasonal='$seasonal',perinneal='$perinneal',intermittent='$intermittent',persistent='$persistent',bothersome='$bothersome',vision='$vision',interference='$interference',activities='$activities' where id = '$patient_id'");
    if ($query) {
        echo "<script>alert('You have successfully inserted the data');</script>";
        echo "<script > document.location ='../edit-conjunctivities.php?pid=$patient_id'; </script>";
    } else {
        echo "<script>alert('Failed to insert the data');</script>";
    }
}

?>
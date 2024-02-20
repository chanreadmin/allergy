<?php

include('../layout/config.php');
session_start();

if (isset($_POST['submit'])) {
    $symptoms = $_POST['symptoms'];
    $types = $_POST['types'];
    $daytime = $_POST['daytime'];
    $limitation = $_POST['limitation'];
    $nocturnal = $_POST['nocturnal'];
    $rescue = $_POST['rescue'];
    $lf = $_POST['lf'];
    $ex = $_POST['ex'];
    $pftgrading = $_POST['pftgrading'];
    $habits = $_POST['habits'];
    $controlled = $_POST['controlled'];
    $partially = $_POST['partially'];
    $uncontrolled = $_POST['uncontrolled'];
    $resexam = $_POST['resexam'];
    $updatedBy = $_SESSION['adminName'];
    $centerName = $_SESSION['centerName'];
    $centerCode = $_SESSION['centerCode'];
    $patient_id = intval($_GET['pid']);
    $query = mysqli_query($conn, "INSERT INTO tbl_bronchitis (symptoms, types, daytime, limitation, nocturnal, rescue, lf, ex, pftgrading, habits, controlled, partially, uncontrolled,resexam, updatedBy, centerName, centerCode, patient_id) 
        VALUES ('$symptoms', '$types', '$daytime', '$limitation', '$nocturnal', '$rescue', '$lf', '$ex','$pftgrading','$habits', '$controlled', '$partially', '$uncontrolled', '$resexam','$updatedBy', '$centerName', '$centerCode', '$patient_id')");
    if ($query) {
        echo "<script>alert('You have successfully inserted the data');</script>";
        echo "<script > document.location ='../add-bronchitis.php?pid=$patient_id'; </script>";
    } else {
        echo "<script>alert('Failed to insert the data');</script>";
    }
}

if (isset($_POST['update'])) {
    $symptoms = $_POST['symptoms'];
    $types = $_POST['types'];
    $daytime = $_POST['daytime'];
    $limitation = $_POST['limitation'];
    $nocturnal = $_POST['nocturnal'];
    $rescue = $_POST['rescue'];
    $lf = $_POST['lf'];
    $ex = $_POST['ex'];
    $pftgrading = $_POST['pftgrading'];
    $habits = $_POST['habits'];
    $controlled = $_POST['controlled'];
    $partially = $_POST['partially'];
    $uncontrolled = $_POST['uncontrolled'];
    $resexam = $_POST['resexam'];
    $updatedBy = $_SESSION['adminName'];
    $centerName = $_SESSION['centerName'];
    $centerCode = $_SESSION['centerCode'];
    $sid = intval($_GET['sid']);
    $pid = intval($_GET['pid']);
    $query = mysqli_query($conn, "Update tbl_bronchitis SET symptoms = '$symptoms',types = '$types', daytime = '$daytime',limitation = '$limitation',
    nocturnal = '$nocturnal',rescue = '$rescue',lf = '$lf',ex = '$ex',pftgrading = '$pftgrading',habits = '$habits',controlled = '$controlled',partially = '$partially',uncontrolled = '$uncontrolled', resexam = '$resexam' where id = '$sid'");
    if ($query) {
        echo "<script>alert('You have successfully inserted the data');</script>";
        echo "<script > document.location ='../edit-bronchitis-followup.php?pid=$pid&&sid=$sid'; </script>";
    } else {
        echo "<script>alert('Failed to insert the data');</script>";
    }
}

?>
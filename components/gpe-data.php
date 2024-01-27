<?php

include('../layout/config.php');
session_start();

if (isset($_POST['submit'])) {

    $weights = $_POST['weights'];
    $pulse = $_POST['pulse'];
    $bp = $_POST['bp'];
    $rr = $_POST['rr'];
    $temp = $_POST['temp'];
    $spo = $_POST['spo'];
    $ent = $_POST['ent'];
    $cns = $_POST['cns'];
    $cvs = $_POST['cvs'];
    $rs = $_POST['rs'];
    $pa = $_POST['pa'];
    $eyemeds = $_POST['eyemeds'];
    $drugadverse = $_POST['drugadverse'];
    $drugcomp = $_POST['drugcomp'];
    $advise = $_POST['advise'];
    $updatedBy = $_SESSION['adminName'];
    $centerName = $_SESSION['centerName'];
    $centerCode = $_SESSION['centerCode'];
    $patient_id = intval($_GET['pid']);

    $query = mysqli_query($conn, "Insert into tbl_gpe (weights,pulse,bp,rr,temp,spo,ent,cns,cvs,rs,pa,drugadverse,drugcomp,advise,eyemeds, centerCode,centerName,patient_id,updatedBy)
    values('$weights','$pulse','$bp','$rr','$temp','$spo','$ent','$cns','$cvs','$rs','$pa','$drugadverse','$drugcomp','$advise','$eyemeds','$centerCode','$centerName','$patient_id','$updatedBy')");
    if ($query) {
        echo "<script>alert('You have successfully inserted the data');</script>";
        echo "<script > document.location ='../add-gpe.php?pid=$patient_id'; </script>";
    } else {
        echo "<script>alert('Failed to insert the data');</script>";
    }

}
if (isset($_POST['updated'])) {

    $weights = $_POST['weights'];
    $pulse = $_POST['pulse'];
    $bp = $_POST['bp'];
    $rr = $_POST['rr'];
    $temp = $_POST['temp'];
    $spo = $_POST['spo'];
    $ent = $_POST['ent'];
    $cns = $_POST['cns'];
    $cvs = $_POST['cvs'];
    $rs = $_POST['rs'];
    $pa = $_POST['pa'];
    $drugadverse = $_POST['drugadverse'];
    $drugcomp = $_POST['drugcomp'];
    $advise = $_POST['advise'];
    $eyemeds = $_POST['eyemeds'];
    $updatedBy = $_SESSION['adminName'];
    $centerName = $_SESSION['centerName'];
    $centerCode = $_SESSION['centerCode'];
    $p_id = intval($_GET['pid']);

    $query = mysqli_query($conn, "UPDATE tbl_gpe SET weights='$weights',pulse='$pulse',bp='$bp',
    rr='$rr',temp='$temp',spo='$spo',ent='$ent',cns='$cns',cvs='$cvs',rs='$rs',pa='$pa',drugadverse='$drugadverse',
    drugcomp = '$drugcomp',advise = '$advise', eyemeds ='$eyemeds' where id = '$p_id'");


    if ($query) {
        echo "<script>alert('You have successfully inserted the data');</script>";
        echo "<script > document.location ='../edit-allergic-followup.php?pid=$p_id'; </script>";
    } else {
        echo "<script>alert('Failed to insert the data');</script>";
    }

}
?>
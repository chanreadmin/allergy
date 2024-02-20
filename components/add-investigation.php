<?php

include('../layout/config.php');
session_start();

if (isset($_POST['submit'])) {

    $hb = $_POST["hb"];
    $tc = $_POST["tc"];

    $neutrophils = $_POST["neutrophils"];
    $eosinophil = $_POST["eosinophil"];
    $lymphocytes = $_POST["lymphocytes"];
    $monocytes = $_POST["monocytes"];
    $platelets = $_POST["platelets"];
    $esr = $_POST["esr"];
    $serum_creatinine = $_POST["serum_creatinine"];
    $serumig = $_POST["serumig"];
    $clevel = $_POST["clevel"];
    $clevel4 = $_POST['clevel4'];
    $ana = $_POST["ana"];
    $urine_routine = $_POST["urine_routine"];
    $allergy_panel = $_POST["allergy_panel"];
    $updatedBy = $_SESSION['adminName'];
    $centerName = $_SESSION['centerName'];
    $centerCode = $_SESSION['centerCode'];
    $patient_id = intval($_GET['pid']);

    $query = mysqli_query($conn, "Insert into tbl_investigation ( hb, tc,  neutrophils, eosinophil, lymphocytes, monocytes, platelets, esr, serum_creatinine, serumig, clevel,clevel4, ana, urine_routine, allergy_panel, centerCode, centerName, patient_id, updatedBy )
        
    values('$hb','$tc','$neutrophils','$eosinophil','$lymphocytes','$monocytes','$platelets','$esr','$serum_creatinine','$serumig','$clevel','$clevel4','$ana','$urine_routine','$allergy_panel','$centerCode','$centerName','$patient_id','$updatedBy')");


    if ($query) {
        echo "<script>alert('You have successfully inserted the data');</script>";
        echo "<script > document.location ='../add-test.php?pid=$patient_id'; </script>";
    } else {
        echo "<script>alert('Failed to insert the data');</script>";
    }

}
?>
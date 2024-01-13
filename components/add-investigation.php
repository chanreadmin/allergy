<?php

include('../layout/config.php');
session_start();

if (isset($_POST['submit'])) {
    $cbc = $_POST["cbc"];
    $hb = $_POST["hb"];
    $tc = $_POST["tc"];
    $dc = $_POST["dc"];
    $neutrophils = $_POST["neutrophils"];
    $eosinophil = $_POST["eosinophil"];
    $lymphocytes = $_POST["lymphocytes"];
    $monocytes = $_POST["monocytes"];
    $platelets = $_POST["platelets"];
    $esr = $_POST["esr"];
    $serum_creatinine = $_POST["serum_creatinine"];
    $serumig = $_POST["serumig"];
    $clevel = $_POST["clevel"];
    $ana = $_POST["ana"];
    $urine_routine = $_POST["urine_routine"];
    $allergy_panel = $_POST["allergy_panel"];
    $updatedBy = $_SESSION['adminName'];
    $centerName = $_SESSION['centerName'];
    $centerCode = $_SESSION['centerCode'];
    $patient_id = intval($_GET['pid']);

    $query = mysqli_query($conn, "Insert into tbl_investigation (cbc, hb, tc, dc, neutrophils, eosinophil, lymphocytes, monocytes, platelets, esr, serum_creatinine, serumig, clevel, ana, urine_routine, allergy_panel, centerCode, centerName, patient_id, updatedBy )
        
    values('$cbc','$hb','$tc','$dc','$neutrophils','$eosinophil','$lymphocytes','$monocytes','$platelets','$esr','$serum_creatinine','$serumig','$clevel','$ana','$urine_routine','$allergy_panel','$centerCode','$centerName','$patient_id','$updatedBy')");


    if ($query) {
        echo "<script>alert('You have successfully inserted the data');</script>";
        echo "<script > document.location ='../add-test.php?pid=$patient_id'; </script>";
    } else {
        echo "<script>alert('Failed to insert the data');</script>";
    }

}
?>
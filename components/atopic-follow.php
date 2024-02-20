<?php

include('../layout/config.php');
session_start();

if (isset($_POST['submit'])) {
    $symptoms = $_POST['symptoms'];
    $affected_area = $_POST['affected_area'];
    $erythema = $_POST['erythema'];
    $oedema = $_POST['oedema'];
    $swl = $_POST['swl'];
    $oozing = $_POST['oozing'];
    $crusting = $_POST['crusting'];
    $excoration = $_POST['excoration'];
    $lichenification = $_POST['lichenification'];
    $dryness = $_POST['dryness'];
    $redness = $_POST['redness'];
    $swelling = $_POST['swelling'];
    $ooz = $_POST['ooz'];
    $scratching = $_POST['scratching'];
    $thickend = $_POST['thickend'];
    $itching = $_POST['itching'];
    $sleep = $_POST['sleep'];
    $pmedications = $_POST['pmedications'];
    $lapplication = $_POST['lapplication'];
    $othermedications = $_POST['othermedications'];
    $skinexam = $_POST['skinexam'];
    $updatedBy = $_SESSION['adminName'];
    $centerName = $_SESSION['centerName'];
    $centerCode = $_SESSION['centerCode'];
    // $patient_id = $_POST['patient_id'];
    $patient_id = intval($_GET['pid']);



    $query = mysqli_query($conn, "Insert into tbl_atopic (symptoms, affected_area, erythema, oedema, swl, oozing, crusting, excoration, lichenification, dryness, redness, swelling, ooz, scratching, thickend, itching, sleep, pmedications, lapplication, othermedications,skinexam, centerCode, centerName, patient_id, updatedBy )
        
    values('$symptoms','$affected_area','$erythema','$oedema','$swl','$oozing','$crusting','$excoration','$lichenification','$dryness','$redness','$swelling','$ooz','$scratching','$thickend','$itching','$sleep','$pmedications','$lapplication','$othermedications','$skinexam','$centerCode','$centerName','$patient_id','$updatedBy'
 )");


    if ($query) {
        echo "<script>alert('You have successfully inserted the data');</script>";
        echo "<script > document.location ='../atopic-dermatis.php?pid=$patient_id'; </script>";
    } else {
        echo "<script>alert('Failed to insert the data');</script>";
    }

}

if (isset($_POST['update'])) {
    $symptoms = $_POST['symptoms'];
    $affected_area = $_POST['affected_area'];
    $erythema = $_POST['erythema'];
    $oedema = $_POST['oedema'];
    $swl = $_POST['swl'];
    $oozing = $_POST['oozing'];
    $crusting = $_POST['crusting'];
    $excoration = $_POST['excoration'];
    $lichenification = $_POST['lichenification'];
    $dryness = $_POST['dryness'];
    $redness = $_POST['redness'];
    $swelling = $_POST['swelling'];
    $ooz = $_POST['ooz'];
    $scratching = $_POST['scratching'];
    $thickend = $_POST['thickend'];
    $itching = $_POST['itching'];
    $sleep = $_POST['sleep'];
    $pmedications = $_POST['pmedications'];
    $lapplication = $_POST['lapplication'];
    $othermedications = $_POST['othermedications'];
    $skinexam = $_POST['skinexam'];
    $updatedBy = $_SESSION['adminName'];
    $centerName = $_SESSION['centerName'];
    $centerCode = $_SESSION['centerCode'];
    // $patient_id = $_POST['patient_id'];
    $patient_id = intval($_GET['pid']);
    $edit_id = intval($_GET['sid']);


    //     $query = mysqli_query($conn, "Insert into tbl_atopic (symptoms, affected_area, erythema, oedema, swl, oozing, crusting, 
// excoration, lichenification, dryness, redness, swelling, ooz, scratching, thickend, itching, sleep, pmedications, lapplication, othermedications, centerCode, centerName, patient_id, updatedBy )
//     values('$symptoms','$affected_area','$erythema','$oedema','$swl','$oozing','$crusting','$excoration','$lichenification','$dryness','$redness','$swelling','$ooz','$scratching','$thickend','$itching','$sleep','$pmedications','$lapplication','$othermedications','$centerCode','$centerName','$patient_id','$updatedBy'
//  )");


    $query = mysqli_query($conn, "UPDATE tbl_atopic SET symptoms='$symptoms', affected_area = '$affected_area', erythema = '$erythema', 
oedema= '$oedema', swl = '$swl', oozing = '$oozing', crusting = '$crusting', excoration= '$excoration', lichenification = '$lichenification', dryness = '$dryness',  redness='$redness', swelling='$swelling',
ooz = '$ooz', scratching = '$scratching', thickend = '$thickend', itching = '$itching', sleep= '$sleep', pmedications='$pmedications', lapplication = '$lapplication', othermedications = '$othermedications', skinexam='$skinexam' WHERE id= '$edit_id'
 ");

    if ($query) {
        echo "<script>alert('You have successfully inserted the data');</script>";
        echo "<script > document.location ='../atopic-edit.php?pid=$patient_id&&sid=$edit_id'; </script>";
    } else {
        echo "<script>alert('Failed to insert the data');</script>";
    }

}


?>
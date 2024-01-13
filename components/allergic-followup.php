<?php

include('../layout/config.php');
session_start();

if (isset($_POST['submit'])) {
    $sneezing = $_POST['sneezing'];
    $rnose = $_POST['rnose'];
    $congestion = $_POST['congestion'];
    $itchynose = $_POST['itchynose'];
    $pns = $_POST['pns'];
    $tns = $_POST['tns'];
    $eyesymptoms = $_POST['eyesymptoms'];
    $throatsymptoms = $_POST['throatsymptoms'];
    $chronic = $_POST['chronic'];
    $earsymptoms = $_POST['earsymptoms'];
    $headache = $_POST['headache'];
    $mental = $_POST['mental'];
    $tnns = $_POST['tnns'];
    $quality = $_POST['quality'];
    $nnsymptoms = $_POST['nnsymptoms'];
    $medicationns = $_POST['medicationns'];
    $antihistamine = $_POST['antihistamine'];
    $othermedication = $_POST['othermedication'];
    $weight = $_POST['weight'];
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
    $updatedBy = $_SESSION['adminName'];
    $centerName = $_SESSION['centerName'];
    $centerCode = $_SESSION['centerCode'];
    $patient_id = intval($_GET['pid']);

    $query = mysqli_query($conn, "Insert into tbl_allergic_rhinitis (sneezing,rnose,congestion,itchynose,pns,tns,eyesymptoms,throatsymptoms,chronic,earsymptoms,headache,mental,tnns,quality,nnsymptoms,medicationns,antihistamine,othermedication,weight,pulse,bp,rr,temp,spo,ent,cns,cvs,rs,pa,drugadverse,drugcomp,advise,centerCode,centerName,patient_id,updatedBy)
        
    values('$sneezing','$rnose','$congestion','$itchynose','$pns','$tns','$eyesymptoms','$throatsymptoms','$chronic','$earsymptoms','$headache','$mental','$tnns','$quality','$nnsymptoms','$medicationns','$antihistamine','$othermedication','$weight','$pulse','$bp','$rr','$temp','$spo','$ent','$cns','$cvs','$rs','$pa','$drugadverse','$drugcomp','$advise','$centerCode','$centerName','$patient_id','$updatedBy')");


    if ($query) {
        echo "<script>alert('You have successfully inserted the data');</script>";
        echo "<script > document.location ='../allergic-rhinitis.php?pid=$patient_id'; </script>";
    } else {
        echo "<script>alert('Failed to insert the data');</script>";
    }

}
if (isset($_POST['updated'])) {
    $sneezing = $_POST['sneezing'];
    $rnose = $_POST['rnose'];
    $congestion = $_POST['congestion'];
    $itchynose = $_POST['itchynose'];
    $pns = $_POST['pns'];
    $tns = $_POST['tns'];
    $eyesymptoms = $_POST['eyesymptoms'];
    $throatsymptoms = $_POST['throatsymptoms'];
    $chronic = $_POST['chronic'];
    $earsymptoms = $_POST['earsymptoms'];
    $headache = $_POST['headache'];
    $mental = $_POST['mental'];
    $tnns = $_POST['tnns'];
    $quality = $_POST['quality'];
    $nnsymptoms = $_POST['nnsymptoms'];
    $medicationns = $_POST['medicationns'];
    $antihistamine = $_POST['antihistamine'];
    $othermedication = $_POST['othermedication'];
    $weight = $_POST['weight'];
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
    $updatedBy = $_SESSION['adminName'];
    $centerName = $_SESSION['centerName'];
    $centerCode = $_SESSION['centerCode'];
    $p_id = intval($_GET['pid']);

    $query = mysqli_query($conn, "UPDATE tbl_allergic_rhinitis SET sneezing = '$sneezing', rnose='$rnose', congestion='$congestion', itchynose='$itchynose', pns='$pns',tns='$tns',eyesymptoms='$eyesymptoms',throatsymptoms='$throatsymptoms',
    chronic='$chronic',earsymptoms='$earsymptoms',headache='$headache',mental='$mental',tnns='$tnns',quality = '$quality',nnsymptoms= '$nnsymptoms',medicationns = '$medicationns',
    antihistamine='$antihistamine',othermedication='$othermedication',weight='$weight',pulse='$pulse',bp='$bp',
    rr='$rr',temp='$temp',spo='$spo',ent='$ent',cns='$cns',cvs='$cvs',rs='$rs',pa='$pa',drugadverse='$drugadverse',
    drugcomp = '$drugcomp',advise = '$advise' where id = '$p_id'");


    if ($query) {
        echo "<script>alert('You have successfully inserted the data');</script>";
        echo "<script > document.location ='../edit-allergic-followup.php?pid=$p_id'; </script>";
    } else {
        echo "<script>alert('Failed to insert the data');</script>";
    }

}
?>
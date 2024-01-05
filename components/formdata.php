<?php

include('../layout/config.php');
session_start();

if (isset($_POST['submit'])) {
    // $patient_name = $_POST['patient_name'];
    // $age = $_POST['age'];
    // $sex = $_POST['sex'];
    // $physician = $_POST['physician'];
    // $address = $_POST['address'];
    // $mobile = $_POST['mobile'];
    // $email = $_POST['email'];
    $hayfever = $_POST['hayfever'];
    $asthma = $_POST['asthma'];
    $breath = $_POST['breath'];
    $hives = $_POST['hives'];
    $sinus = $_POST['sinus'];
    $eczema_oak = $_POST['eczema_oak'];
    $foodallergy = $_POST['foodallergy'];
    $arthritisdiseases = $_POST['arthritisdiseases'];
    $immune = $_POST['immune'];
    $drugallergy = $_POST['drugallergy'];
    $beesting = $_POST['beesting'];
    $fevergrade = $_POST['fevergrade'];
    $itchingsore = $_POST['itchingsore'];
    $cycleoffever = $_POST['cycleoffever'];
    $exacerbations = $_POST['exacerbations'];
    $admhospital = $_POST['admhospital'];
    $admhospital_yes = $_POST['admhospital_yes'];
    $gp = $_POST['gp'];
    $gp_yes = $_POST['gp_yes'];
    $ae = $_POST['ae'];
    $ae_yes = $_POST['ae_yes'];
    $itu = $_POST['itu'];
    $itu_yes = $_POST['itu_yes'];
    $coughwhz = $_POST['coughwhz'];
    $coughwhz_yes = $_POST['coughwhz_yes'];
    $intervals = $_POST['intervals'];
    $intervals_yes = $_POST['intervals_yes'];
    $cough_night = $_POST['cough_night'];
    $cough_night_yes = $_POST['cough_night_yes'];
    $morningCough = $_POST['morningCough'];
    $morningCough_yes = $_POST['morningCough_yes'];
    $exercise_symptom = $_POST['exercise_symptom'];
    $exercise_yes = $_POST['exercise_yes'];
    $smoke = $_POST['smoke'];
    $smoke_yes = $_POST['smoke_yes'];
    $pets = $_POST['pets'];
    $pets_yes = $_POST['pets_yes'];
    $triggers = $_POST['triggers'];
    $triggers_other = $_POST['triggers_other'];
    $Sneezing = $_POST['Sneezing'];
    $nasal = $_POST['nasal'];
    $runningnose = $_POST['runningnose'];
    $itching = $_POST['itching'];
    $itchingeyes = $_POST['itchingeyes'];
    $coughing1 = $_POST['coughing1'];
    $Wheezing = $_POST['Wheezing'];
    $coughingorwheezing = $_POST['coughingorwheezing'];
    $withexcercise = $_POST['withexcercise'];
    $headaches = $_POST['headaches'];
    $nasaldrop = $_POST['nasaldrop'];
    $heaves = $_POST['heaves'];
    $hd = implode(",", $_POST['hd']);
    $eczema = $_POST['eczema'];
    $eczemad = implode(",", $_POST['eczemad']);
    $ulcer = $_POST['ulcer'];
    $ulcerd = implode(",", $_POST['ulcerd']);
    $papaulo = $_POST['papaulo'];
    $papaulod = implode(",", $_POST['papaulod']);
    $norashes = $_POST['norashes'];
    $norashesd = implode(",", $_POST['norashesd']);
    $hypertension = $_POST['hypertension'];
    $diabetes = $_POST['diabetes'];
    $epilepsy = $_POST['epilepsy'];
    $ihd = $_POST['ihd'];
    $dak = $_POST['dak'];
    $pro = $_POST['pro'];
    $def = $_POST['def'];
    $occupation = $_POST['occupation'];
    $pce = $_POST['pce'];
    $location = implode(",", $_POST['location']);
    $fhistory = $_POST['fhistory'];
    $ocavity = $_POST['ocavity'];
    $skin = $_POST['skin'];
    $ent = $_POST['ent'];
    $eye = $_POST['eye'];
    $rs = $_POST['rs'];
    $cvs = $_POST['cvs'];
    $cns = $_POST['cns'];
    $abdomen = $_POST['abdomen'];
    $anyother = $_POST['anyother'];
    $sctest = implode(",", $_POST['sctest']);
    $apanel = $_POST['apanel'];
    $pdfreport = $_FILES["pdfreport"]["name"];
    $updatedBy = $_SESSION['adminName'];
    $centerName = $_SESSION['centerName'];
    $centerCode = $_SESSION['centerCode'];
    $patient_id = $_POST['patient_id'];
    $extension = substr($pdfreport, strlen($pdfreport) - 4, strlen($pdfreport));
    $allowed_extensions = array(".jpg", ".pdf", ".png", ".PDF");
    if (!in_array($extension, $allowed_extensions)) {
        echo "<script>alert('Invalid format. Only jpg / jpeg/ png /pdf format allowed');</script>";
    } else {
        //rename the image file
        $pdfdata = md5($pdfreport) . $extension;
        // Code for move image into directory
        move_uploaded_file($_FILES["pdfreport"]["tmp_name"], "../postimages/" . $pdfdata);

        $query = mysqli_query($conn, "Insert into tbl_history (hayfever, asthma, breath, hives, sinus, eczema_oak, foodallergy, 
        arthritisdiseases, immune, drugallergy, beesting, fevergrade, itchingsore, cycleoffever, 
        exacerbations, admhospital, admhospital_yes, gp, gp_yes, ae, ae_yes, itu, itu_yes, coughwhz, 
        coughwhz_yes, intervals, intervals_yes, cough_night, cough_night_yes, morningCough, morningCough_yes, 
        exercise_symptom, exercise_yes, smoke, smoke_yes, pets, pets_yes, triggers, triggers_other, Sneezing, 
        nasal, runningnose, itching, itchingeyes, coughing1, Wheezing, coughingorwheezing, withexcercise, 
        headaches, nasaldrop, heaves, hd, eczema, eczemad, ulcer, ulcerd, papaulo, papaulod, 
        norashes, norashesd, hypertension, diabetes, epilepsy, ihd, dak, pro, def, occupation, 
        pce, location, fhistory, ocavity, skin, ent, eye, rs, cvs, cns, abdomen, anyother, sctest, 
        apanel, pdfreport, updatedBy, centerName, centerCode, patient_id ) 
        
    values('$hayfever','$asthma','$breath','$hives','$sinus','$eczema_oak','$foodallergy','$arthritisdiseases',
    '$immune','$drugallergy','$beesting','$fevergrade','$itchingsore','$cycleoffever','$exacerbations',
    '$admhospital','$admhospital_yes','$gp','$gp_yes','$ae','$ae_yes','$itu','$itu_yes','$coughwhz',
    '$coughwhz_yes','$intervals','$intervals_yes','$cough_night','$cough_night_yes','$morningCough',
    '$morningCough_yes','$exercise_symptom','$exercise_yes','$smoke','$smoke_yes','$pets','$pets_yes',
    '$triggers','$triggers_other','$Sneezing','$nasal','$runningnose','$itching','$itchingeyes',
    '$coughing1','$Wheezing','$coughingorwheezing','$withexcercise','$headaches','$nasaldrop','$heaves',
    '$hd','$eczema','$eczemad','$ulcer','$ulcerd','$papaulo','$papaulod','$norashes','$norashesd',
    '$hypertension','$diabetes','$epilepsy','$ihd','$dak','$pro','$def','$occupation','$pce','$location',
    '$fhistory','$ocavity','$skin','$ent','$eye','$rs','$cvs','$cns','$abdomen','$anyother','$sctest',
    '$apanel','$pdfdata','$updatedBy', '$centerName', '$centerCode', '$patient_id' )");


        if ($query) {
            echo "<script>alert('You have successfully inserted the data');</script>";
            echo "<script > document.location ='../add-history.php'; </script>";
        } else {
            echo "<script>alert('Failed to insert the data');</script>";
        }
    }
}
?>
function skin_allergys() {
    var b = document.getElementById('skin_allergy').value;
    if (b == 'No') {
        document.getElementById("heavesy").disabled = true;
        document.getElementById("heavesn").disabled = true;
        document.getElementById("hd").disabled = true;
        document.getElementById("eczemay").disabled = true;
        document.getElementById("eczeman").disabled = true;
        document.getElementById("eczemad").disabled = true;
        document.getElementById("ulcery").disabled = true;
        document.getElementById("ulcern").disabled = true;
        document.getElementById("ulcerd").disabled = true;
        document.getElementById("papauloy").disabled = true;
        document.getElementById("papaulon").disabled = true;
        document.getElementById("papaulod").disabled = true;
        document.getElementById("norashesy").disabled = true;
        document.getElementById("norashesn").disabled = true;
        document.getElementById("norashesd").disabled = true;
    } else {
        document.getElementById("heavesy").disabled = false;
        document.getElementById("heavesn").disabled = false;
        document.getElementById("hd").disabled = false;
        document.getElementById("eczemay").disabled = false;
        document.getElementById("eczeman").disabled = false;
        document.getElementById("eczemad").disabled = false;
        document.getElementById("ulcery").disabled = false;
        document.getElementById("ulcern").disabled = false;
        document.getElementById("ulcerd").disabled = false;
        document.getElementById("papauloy").disabled = false;
        document.getElementById("papaulon").disabled = false;
        document.getElementById("papaulod").disabled = false;
        document.getElementById("norashesy").disabled = false;
        document.getElementById("norashesn").disabled = false;
        document.getElementById("norashesd").disabled = false;
    }
}

function asthmas() {
    var a = document.getElementById('Asthma_data').value;
    if (a == 'No') {
        document.getElementById("exacerbations").disabled = true;
        document.getElementById("admhospitaly").disabled = true;
        document.getElementById("admhospitaln").disabled = true;
        document.getElementById("gpy").disabled = true;
        document.getElementById("gpn").disabled = true;
        document.getElementById("aey").disabled = true;
        document.getElementById("aen").disabled = true;
        document.getElementById("ituy").disabled = true;
        document.getElementById("itun").disabled = true;
        document.getElementById("coughwhzy").disabled = true;
        document.getElementById("coughwhzn").disabled = true;
        document.getElementById("intervaly").disabled = true;
        document.getElementById("intervaln").disabled = true;
        document.getElementById("cough_nighty").disabled = true;
        document.getElementById("cough_nightn").disabled = true;
        document.getElementById("morningCoughy").disabled = true;
        document.getElementById("morningCoughn").disabled = true;
        document.getElementById("exercise_symptomy").disabled = true;
        document.getElementById("exercise_symptomn").disabled = true;
        document.getElementById("smokey").disabled = true;
        document.getElementById("smoken").disabled = true;
        document.getElementById("petsy").disabled = true;
        document.getElementById("petsn").disabled = true;
        document.getElementById("triggers1").disabled = true;
        document.getElementById("triggers2").disabled = true;
        document.getElementById("triggers3").disabled = true;
        document.getElementById("triggers4").disabled = true;
        document.getElementById("triggers5").disabled = true;
        document.getElementById("triggers6").disabled = true;
        document.getElementById("triggers_other").disabled = true;
        document.getElementById("sneezing_not_so_much").disabled = true;
        document.getElementById("sneezing_mild").disabled = true;
        document.getElementById("sneezing_mod").disabled = true;
        document.getElementById("sneezing_severe").disabled = true;
        document.getElementById("nasal_not_so_much").disabled = true;
        document.getElementById("nasal_mild").disabled = true;
        document.getElementById("nasal_mod").disabled = true;
        document.getElementById("nasal_severe").disabled = true;
        document.getElementById("runningnose_not_so_much").disabled = true;
        document.getElementById("runningnose_mild").disabled = true;
        document.getElementById("runningnose_mod").disabled = true;
        document.getElementById("runningnose_severe").disabled = true;
        document.getElementById("itching_not_so_much").disabled = true;
        document.getElementById("itching_mild").disabled = true;
        document.getElementById("itching_mod").disabled = true;
        document.getElementById("itching_severe").disabled = true;
        document.getElementById("itchingeyes_not_so_much").disabled = true;
        document.getElementById("itchingeyes_mild").disabled = true;
        document.getElementById("itchingeyes_mod").disabled = true;
        document.getElementById("itchingeyes_severe").disabled = true;
        document.getElementById("coughing1_not_so_much").disabled = true;
        document.getElementById("coughing1_mild").disabled = true;
        document.getElementById("coughing1_mod").disabled = true;
        document.getElementById("coughing1_severe").disabled = true;
        document.getElementById("wheezing_not_so_much").disabled = true;
        document.getElementById("wheezing_mild").disabled = true;
        document.getElementById("wheezing_mod").disabled = true;
        document.getElementById("wheezing_severe").disabled = true;
        document.getElementById("coughingorwheezing_not_so_much").disabled = true;
        document.getElementById("coughingorwheezing_mild").disabled = true;
        document.getElementById("coughingorwheezing_mod").disabled = true;
        document.getElementById("coughingorwheezing_severe").disabled = true;
        document.getElementById("withexercise_not_so_much").disabled = true;
        document.getElementById("withexercise_mild").disabled = true;
        document.getElementById("withexercise_mod").disabled = true;
        document.getElementById("withexercise_severe").disabled = true;
        document.getElementById("headaches_not_so_much").disabled = true;
        document.getElementById("headaches_mild").disabled = true;
        document.getElementById("headaches_mod").disabled = true;
        document.getElementById("headaches_severe").disabled = true;
        document.getElementById("nasaldrop_not_so_much").disabled = true;
        document.getElementById("nasaldrop_mild").disabled = true;
        document.getElementById("nasaldrop_mod").disabled = true;
        document.getElementById("nasaldrop_severe").disabled = true;
    } else {


        document.getElementById("exacerbations").disabled = false;
        document.getElementById("admhospitaly").disabled = false;
        document.getElementById("admhospitaln").disabled = false;
        document.getElementById("gpy").disabled = false;
        document.getElementById("gpn").disabled = false;
        document.getElementById("aey").disabled = false;
        document.getElementById("aen").disabled = false;
        document.getElementById("ituy").disabled = false;
        document.getElementById("itun").disabled = false;
        document.getElementById("coughwhzy").disabled = false;
        document.getElementById("coughwhzn").disabled = false;
        document.getElementById("intervaly").disabled = false;
        document.getElementById("intervaln").disabled = false;
        document.getElementById("cough_nighty").disabled = false;
        document.getElementById("cough_nightn").disabled = false;
        document.getElementById("morningCoughy").disabled = false;
        document.getElementById("morningCoughn").disabled = false;
        document.getElementById("exercise_symptomy").disabled = false;
        document.getElementById("exercise_symptomn").disabled = false;
        document.getElementById("smokey").disabled = false;
        document.getElementById("smoken").disabled = false;
        document.getElementById("petsy").disabled = false;
        document.getElementById("petsn").disabled = false;
        document.getElementById("triggers1").disabled = false;
        document.getElementById("triggers2").disabled = false;
        document.getElementById("triggers3").disabled = false;
        document.getElementById("triggers4").disabled = false;
        document.getElementById("triggers5").disabled = false;
        document.getElementById("triggers6").disabled = false;
        document.getElementById("triggers_other").disabled = false;
        document.getElementById("sneezing_not_so_much").disabled = false;
        document.getElementById("sneezing_mild").disabled = false;
        document.getElementById("sneezing_mod").disabled = false;
        document.getElementById("sneezing_severe").disabled = false;
        document.getElementById("nasal_not_so_much").disabled = false;
        document.getElementById("nasal_mild").disabled = false;
        document.getElementById("nasal_mod").disabled = false;
        document.getElementById("nasal_severe").disabled = false;
        document.getElementById("runningnose_not_so_much").disabled = false;
        document.getElementById("runningnose_mild").disabled = false;
        document.getElementById("runningnose_mod").disabled = false;
        document.getElementById("runningnose_severe").disabled = false;
        document.getElementById("itching_not_so_much").disabled = false;
        document.getElementById("itching_mild").disabled = false;
        document.getElementById("itching_mod").disabled = false;
        document.getElementById("itching_severe").disabled = false;
        document.getElementById("itchingeyes_not_so_much").disabled = false;
        document.getElementById("itchingeyes_mild").disabled = false;
        document.getElementById("itchingeyes_mod").disabled = false;
        document.getElementById("itchingeyes_severe").disabled = false;
        document.getElementById("coughing1_not_so_much").disabled = false;
        document.getElementById("coughing1_mild").disabled = false;
        document.getElementById("coughing1_mod").disabled = false;
        document.getElementById("coughing1_severe").disabled = false;
        document.getElementById("wheezing_not_so_much").disabled = false;
        document.getElementById("wheezing_mild").disabled = false;
        document.getElementById("wheezing_mod").disabled = false;
        document.getElementById("wheezing_severe").disabled = false;
        document.getElementById("coughingorwheezing_not_so_much").disabled = false;
        document.getElementById("coughingorwheezing_mild").disabled = false;
        document.getElementById("coughingorwheezing_mod").disabled = false;
        document.getElementById("coughingorwheezing_severe").disabled = false;
        document.getElementById("withexercise_not_so_much").disabled = false;
        document.getElementById("withexercise_mild").disabled = false;
        document.getElementById("withexercise_mod").disabled = false;
        document.getElementById("withexercise_severe").disabled = false;
        document.getElementById("headaches_not_so_much").disabled = false;
        document.getElementById("headaches_mild").disabled = false;
        document.getElementById("headaches_mod").disabled = false;
        document.getElementById("headaches_severe").disabled = false;
        document.getElementById("nasaldrop_not_so_much").disabled = false;
        document.getElementById("nasaldrop_mild").disabled = false;
        document.getElementById("nasaldrop_mod").disabled = false;
        document.getElementById("nasaldrop_severe").disabled = false;

    }
}

function addmission(action) {
    var admhospital_yes = document.getElementById('admhospital_yes');

    if (action === 'show') {
        admhospital_yes.style.display = 'block';
    } else {
        admhospital_yes.style.display = 'none';
    }
}

function gpattendances(action) {
    var gp_yes = document.getElementById('gp_yes');

    if (action === 'show') {
        gp_yes.style.display = 'block';
    } else {
        gp_yes.style.display = 'none';
    }
}

function aeattendances(action) {
    var ae_yes = document.getElementById('ae_yes');

    if (action === 'show') {
        ae_yes.style.display = 'block';
    } else {
        ae_yes.style.display = 'none';
    }
}

function itu_addmission(action) {
    var itu_yes = document.getElementById('itu_yes');

    if (action === 'show') {
        itu_yes.style.display = 'block';
    } else {
        itu_yes.style.display = 'none';
    }
}

function coughwhzz(action) {
    var coughwhz_yes = document.getElementById('coughwhz_yes');

    if (action === 'show') {
        coughwhz_yes.style.display = 'block';
    } else {
        coughwhz_yes.style.display = 'none';
    }
}

function intervalsymptoms(action) {
    var interval_yes = document.getElementById('interval_yes');

    if (action === 'show') {
        interval_yes.style.display = 'block';
    } else {
        interval_yes.style.display = 'none';
    }
}

function cough_nightz(action) {
    var cough_night_yes = document.getElementById('cough_night_yes');

    if (action === 'show') {
        cough_night_yes.style.display = 'block';
    } else {
        cough_night_yes.style.display = 'none';
    }
}

function morningCoughs(action) {
    var morningCough_yes = document.getElementById('morningCough_yes');

    if (action === 'show') {
        morningCough_yes.style.display = 'block';
    } else {
        morningCough_yes.style.display = 'none';
    }
}

function exercise_symptoms(action) {
    var exercise_yes = document.getElementById('exercise_yes');

    if (action === 'show') {
        exercise_yes.style.display = 'block';
    } else {
        exercise_yes.style.display = 'none';
    }
}
function smokes(action) {
    var smoke_yes = document.getElementById('smoke_yes');

    if (action === 'show') {
        smoke_yes.style.display = 'block';
    } else {
        smoke_yes.style.display = 'none';
    }
}
function petsz(action) {
    var pets_yes = document.getElementById('pets_yes');

    if (action === 'show') {
        pets_yes.style.display = 'block';
    } else {
        pets_yes.style.display = 'none';
    }
}
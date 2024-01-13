function allergic() {
    var d = document.getElementById('allergic_rhinitis').value;
    if (d == 'No') {
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
        // values
        document.getElementById("sneezing_not_so_much").checked = false;
        document.getElementById("sneezing_mild").checked = false;
        document.getElementById("sneezing_mod").checked = false;
        document.getElementById("sneezing_severe").checked = false;
        document.getElementById("nasal_not_so_much").checked = false;
        document.getElementById("nasal_mild").checked = false;
        document.getElementById("nasal_mod").checked = false;
        document.getElementById("nasal_severe").checked = false;
        document.getElementById("runningnose_not_so_much").checked = false;
        document.getElementById("runningnose_mild").checked = false;
        document.getElementById("runningnose_mod").checked = false;
        document.getElementById("runningnose_severe").checked = false;
        document.getElementById("itching_not_so_much").checked = false;
        document.getElementById("itching_mild").checked = false;
        document.getElementById("itching_mod").checked = false;
        document.getElementById("itching_severe").checked = false;
        document.getElementById("itchingeyes_not_so_much").checked = false;
        document.getElementById("itchingeyes_mild").checked = false;
        document.getElementById("itchingeyes_mod").checked = false;
        document.getElementById("itchingeyes_severe").checked = false;
        document.getElementById("coughing1_not_so_much").checked = false;
        document.getElementById("coughing1_mild").checked = false;
        document.getElementById("coughing1_mod").checked = false;
        document.getElementById("coughing1_severe").checked = false;
        document.getElementById("wheezing_not_so_much").checked = false;
        document.getElementById("wheezing_mild").checked = false;
        document.getElementById("wheezing_mod").checked = false;
        document.getElementById("wheezing_severe").checked = false;
        document.getElementById("coughingorwheezing_not_so_much").checked = false;
        document.getElementById("coughingorwheezing_mild").checked = false;
        document.getElementById("coughingorwheezing_mod").checked = false;
        document.getElementById("coughingorwheezing_severe").checked = false;
        document.getElementById("withexercise_not_so_much").checked = false;
        document.getElementById("withexercise_mild").checked = false;
        document.getElementById("withexercise_mod").checked = false;
        document.getElementById("withexercise_severe").checked = false;
        document.getElementById("headaches_not_so_much").checked = false;
        document.getElementById("headaches_mild").checked = false;
        document.getElementById("headaches_mod").checked = false;
        document.getElementById("headaches_severe").checked = false;
        document.getElementById("nasaldrop_not_so_much").checked = false;
        document.getElementById("nasaldrop_mild").checked = false;
        document.getElementById("nasaldrop_mod").checked = false;
        document.getElementById("nasaldrop_severe").checked = false;
    } else {
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


        document.getElementById("heavesy").checked = false;
        document.getElementById("heavesn").checked = false;
        document.getElementById("hd").checked = false;
        document.getElementById("eczemay").checked = false;
        document.getElementById("eczeman").checked = false;
        document.getElementById("eczemad").checked = false;
        document.getElementById("ulcery").checked = false;
        document.getElementById("ulcern").checked = false;
        document.getElementById("ulcerd").checked = false;
        document.getElementById("papauloy").checked = false;
        document.getElementById("papaulon").checked = false;
        document.getElementById("papaulod").checked = false;
        document.getElementById("norashesy").checked = false;
        document.getElementById("norashesn").checked = false;
        document.getElementById("norashesd").checked = false;
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

        document.getElementById("admhospital_yess").disabled = true;
        document.getElementById("gp_yess").disabled = true;
        document.getElementById("ae_yess").disabled = true;
        document.getElementById("itu_yess").disabled = true;
        document.getElementById("coughwhz_yess").disabled = true;
        document.getElementById("intervals_yess").disabled = true;
        document.getElementById("cough_night_yess").disabled = true;
        document.getElementById("morningCough_yess").disabled = true;
        document.getElementById("exercise_yess").disabled = true;
        document.getElementById("smoke_yess").disabled = true;
        document.getElementById("pets_yess").disabled = true;
        document.getElementById("pets_yess").disabled = true;
        document.getElementById("admhospital_yess").value = '';
        document.getElementById("gp_yess").value = '';
        document.getElementById("ae_yess").value = '';
        document.getElementById("itu_yess").value = '';
        document.getElementById("coughwhz_yess").value = '';
        document.getElementById("intervals_yess").value = '';
        document.getElementById("cough_night_yess").value = '';
        document.getElementById("morningCough_yess").value = '';
        document.getElementById("exercise_yess").value = '';
        document.getElementById("smoke_yess").value = '';
        document.getElementById("pets_yess").value = '';
        document.getElementById("pets_yess").value = '';


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

        //value
        document.getElementById("exacerbations").value = '';
        document.getElementById("admhospitaly").checked = false;
        document.getElementById("admhospitaln").checked = false;
        document.getElementById("gpy").checked = false;
        document.getElementById("gpn").checked = false;
        document.getElementById("aey").checked = false;
        document.getElementById("aen").checked = false;
        document.getElementById("ituy").checked = false;
        document.getElementById("itun").checked = false;
        document.getElementById("coughwhzy").checked = false;
        document.getElementById("coughwhzn").checked = false;
        document.getElementById("intervaly").checked = false;
        document.getElementById("intervaln").checked = false;
        document.getElementById("cough_nighty").checked = false;
        document.getElementById("cough_nightn").checked = false;
        document.getElementById("morningCoughy").checked = false;
        document.getElementById("morningCoughn").checked = false;
        document.getElementById("exercise_symptomy").checked = false;
        document.getElementById("exercise_symptomn").checked = false;
        document.getElementById("smokey").checked = false;
        document.getElementById("smoken").checked = false;
        document.getElementById("petsy").checked = false;
        document.getElementById("petsn").checked = false;
        document.getElementById("triggers1").checked = false;
        document.getElementById("triggers2").checked = false;
        document.getElementById("triggers3").checked = false;
        document.getElementById("triggers4").checked = false;
        document.getElementById("triggers5").checked = false;
        document.getElementById("triggers6").checked = false;
        document.getElementById("triggers_other").checked = false;

    } else {


        document.getElementById("admhospital_yess").disabled = false;
        document.getElementById("gp_yess").disabled = false;
        document.getElementById("ae_yess").disabled = false;
        document.getElementById("itu_yess").disabled = false;
        document.getElementById("coughwhz_yess").disabled = false;
        document.getElementById("intervals_yess").disabled = false;
        document.getElementById("cough_night_yess").disabled = false;
        document.getElementById("morningCough_yess").disabled = false;
        document.getElementById("exercise_yess").disabled = false;
        document.getElementById("smoke_yess").disabled = false;
        document.getElementById("pets_yess").disabled = false;
        document.getElementById("pets_yess").disabled = false;


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

function updateSneezing() {
    var slider1 = document.getElementById("rangeSlider1");
    var sliderValueDisplay1 = document.getElementById("sliderValue1");
    sliderValueDisplay1.innerHTML = "Value: " + slider1.value;
}

function updateRunningNose() {
    var slider2 = document.getElementById("rangeSlider2");
    var sliderValueDisplay2 = document.getElementById("sliderValue2");
    sliderValueDisplay2.innerHTML = "Value: " + slider2.value;
}
function Congestion() {
    var slider3 = document.getElementById("rangeSlider3");
    var sliderValueDisplay3 = document.getElementById("sliderValue3");
    sliderValueDisplay3.innerHTML = "Value: " + slider3.value;
}

function ItchyNose() {
    var slider4 = document.getElementById("rangeSlider4");
    var sliderValueDisplay4 = document.getElementById("sliderValue4");
    sliderValueDisplay4.innerHTML = "Value: " + slider4.value;
}

function PostNasalDrop() {
    var slider5 = document.getElementById("rangeSlider5");
    var sliderValueDisplay5 = document.getElementById("sliderValue5");
    sliderValueDisplay5.innerHTML = "Value: " + slider5.value;
}

function totalns() {
    var a = parseInt(document.getElementById("rangeSlider1").value);
    var b = parseInt(document.getElementById("rangeSlider2").value);
    var c = parseInt(document.getElementById("rangeSlider3").value);
    var d = parseInt(document.getElementById("rangeSlider4").value);
    var e = parseInt(document.getElementById("rangeSlider5").value);

    var sum = a + b + c + d + e;
    document.getElementById('tns').value = sum;
}


function updateEyeSymptoms() {
    var slider6 = document.getElementById("rangeSlider6");
    var sliderValueDisplay6 = document.getElementById("sliderValue6");
    sliderValueDisplay6.innerHTML = "Value: " + slider6.value;
}

function updateThroatSymptoms() {
    var slider7 = document.getElementById("rangeSlider7");
    var sliderValueDisplay7 = document.getElementById("sliderValue7");
    sliderValueDisplay7.innerHTML = "Value: " + slider7.value;
}
function updateChronicSymptoms() {
    var slider8 = document.getElementById("rangeSlider8");
    var sliderValueDisplay8 = document.getElementById("sliderValue8");
    sliderValueDisplay8.innerHTML = "Value: " + slider8.value;
}

function updateEarSymptoms() {
    var slider9 = document.getElementById("rangeSlider9");
    var sliderValueDisplay9 = document.getElementById("sliderValue9");
    sliderValueDisplay9.innerHTML = "Value: " + slider9.value;
}
function updateHeadache() {
    var slider10 = document.getElementById("rangeSlider10");
    var sliderValueDisplay10 = document.getElementById("sliderValue10");
    sliderValueDisplay10.innerHTML = "Value: " + slider10.value;
}

function updateMentalFunction() {
    var slider11 = document.getElementById("rangeSlider11");
    var sliderValueDisplay11 = document.getElementById("sliderValue11");
    sliderValueDisplay11.innerHTML = "Value: " + slider11.value;
}

function tnnsymptom() {
    var f = parseInt(document.getElementById("rangeSlider6").value);
    var g = parseInt(document.getElementById("rangeSlider7").value);
    var h = parseInt(document.getElementById("rangeSlider8").value);
    var i = parseInt(document.getElementById("rangeSlider9").value);
    var j = parseInt(document.getElementById("rangeSlider10").value);
    var k = parseInt(document.getElementById("rangeSlider11").value);

    var summ = f + g + h + i + j + k;
    document.getElementById('tnns').value = summ;
}

function updateQuality() {
    var slider12 = document.getElementById("rangeSlider12");
    var sliderValueDisplay12 = document.getElementById("sliderValue12");
    sliderValueDisplay12.innerHTML = "Value: " + slider12.value;
}
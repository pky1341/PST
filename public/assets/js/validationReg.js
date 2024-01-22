$(document).ready(function () {
    var pattern = /^[a-zA-Z\s]+$/;
    $("#nameErr").hide();
    let nameError = true;
    $("#name").keyup(function () {
        validateName();
    });

    function validateName() {
        let name = $("#name").val().trim();
        if (name.length == "") {
            $("#nameErr").show();
            $("#nameErr").html("***name is required");
            nameError = false;
            return false;
        } else if (name.length < 3 || name.length > 30) {
            $("#nameErr").show();
            $("#nameErr").html(`***Name should be between 3 and 30 characters`);
            nameError = false;
            return false;
        } else if (!pattern.test(name)) {
            $("#nameErr").show();
            $("#nameErr").html(
                "***Name should contain only letters and spaces"
            );
            nameError = false;
            return false;
        } else {
            $("#nameErr").hide();
            nameError = true;
            return true;
        }
    }
    $("#villageErr").hide();
    let villageError = true;
    $("#village").keyup(function () {
        validateVillage();
    });
    function validateVillage() {
        let village = $("#village").val().trim();
        if (village.length == "") {
            $("#villageErr").show();
            $("#villageErr").html("***Village name is required");
            villageError = false;
            return false;
        } else if (village.length < 3 || village.length > 30) {
            $("#villageErr").show();
            $("#villageErr").html(
                `***Village name should be between 3 and 30 characters`
            );
            villageError = false;
            return false;
        } else if (!pattern.test(village)) {
            $("#villageErr").show();
            $("#villageErr").html(
                "***Village name should contain only letters and spaces"
            );
            villageError = false;
            return false;
        } else {
            $("#villageErr").hide();
            villageError = true;
            return true;
        }
    }
    $("#tehsilErr").hide();
    let tehsilError = true;
    $("#tehsil").keyup(function () {
        validateTehsil();
    });
    function validateTehsil() {
        let tehsil = $("#tehsil").val().trim();
        if (tehsil.length == "") {
            $("#tehsilErr").show();
            $("#tehsilErr").html("***Tehsil name is required");
            tehsilError = false;
            return false;
        } else if (tehsil.length < 3 || tehsil.length > 30) {
            $("#tehsilErr").show();
            $("#tehsilErr").html(
                `***Tehsil name should be between 3 and 30 characters`
            );
            tehsilError = false;
            return false;
        } else if (!pattern.test(tehsil)) {
            $("#tehsilErr").show();
            $("#tehsilErr").html(
                "***Tehsil name should contain only letters and spaces"
            );
            tehsilError = false;
            return false;
        } else {
            $("#tehsilErr").hide();
            tehsilError = true;
            return true;
        }
    }
    $("#disErr").hide();
    let districtError = true;
    $("#dis").keyup(function () {
        validateDistrict();
    });
    function validateDistrict() {
        let dis = $("#dis").val().trim();
        if (dis.length == "") {
            $("#disErr").show();
            $("#disErr").html("***District name is required");
            districtError = false;
            return false;
        } else if (dis.length < 3 || dis.length > 30) {
            $("#disErr").show();
            $("#disErr").html(
                `***District name should be between 3 and 30 characters`
            );
            districtError = false;
            return false;
        } else if (!pattern.test(dis)) {
            $("#disErr").show();
            $("#disErr").html(
                "***District name should contain only letters and spaces"
            );
            districtError = false;
            return false;
        } else {
            $("#disErr").hide();
            districtError = true;
            return true;
        }
    }
    $("#stateErr").hide();
    let stateError = true;
    $("#state").keyup(function () {
        validateState();
    });
    function validateState() {
        let state = $("#state").val().trim();
        if (state.length == "") {
            $("#stateErr").show();
            $("#stateErr").html("***State name is required");
            stateError = false;
            return false;
        } else if (state.length < 3 || state.length > 30) {
            $("#stateErr").show();
            $("#stateErr").html(
                `***State name should be between 3 and 30 characters`
            );
            stateError = false;
            return false;
        } else if (!pattern.test(state)) {
            $("#stateErr").show();
            $("#stateErr").html(
                "***State name should contain only letters and spaces"
            );
            stateError = false;
            return false;
        } else {
            $("#stateErr").hide();
            stateError = true;
            return true;
        }
    }
    $("#dobErr").hide();
    let dobError = true;
    $("#dob").keyup(function () {
        validateDob();
    });
    function validateDob() {
        let dob = $("#dob").val();
        let currentDate = new Date();
        let selectedDate = new Date(dob);
        if (!dob) {
            $("#dobErr").text("***Date of Birth is required");
            $("#dobErr").show();
            dobError = false;
            return false;
        } else if (selectedDate > currentDate) {
            $("#dobErr").text("***Date of Birth cannot be in the future");
            $("#dobErr").show();
            dobError = false;
            return false;
        } else {
            $("#dobErr").hide();
            dobError = true;
            return true;
        }
    }
    $("#bloodErr").hide();
    let bloodErr = true;
    $("#bloodgroup").keyup(function () {
        validateBlood();
    });
    function validateBlood() {
        let blood = $("#bloodgroup").val();
        if (blood == "") {
            $("#bloodErr").show();
            $("#bloodErr").html("***Blood group is required");
            bloodErr = false;
            return false;
        } else {
            $("#bloodErr").hide();
            bloodErr = true;
            return true;
        }
    }
    $("#eduErr").hide();
    let eduError = true;
    $("#edu").keyup(function () {
        validateEducation();
    });
    function validateEducation() {
        let edu = $("#edu").val().trim();
        let p = /^[A-Za-z0-9,.\s]+$/i;
        if (edu.length == "") {
            $("#eduErr").show();
            $("#eduErr").html("***Education is required");
            eduError = false;
            return false;
        } else if (edu.length < 3 || edu.length > 50) {
            $("#eduErr").show();
            $("#eduErr").html(
                `***Education should be between 3 and 50 characters`
            );
            eduError = false;
            return false;
        } else if (!p.test(edu)) {
            $("#eduErr").show();
            $("#eduErr").html(
                "***Education should contain only letters and spaces"
            );
            eduError = false;
            return false;
        } else {
            $("#eduErr").hide();
            eduError = true;
            return true;
        }
    }
    $("#jobErr").hide();
    let jobError = true;
    $("#job").keyup(function () {
        validateJob();
    });
    function validateJob() {
        let job = $("#job").val();
        if (job == "") {
            $("#jobErr").show();
            $("#jobErr").html("***job selection is required");
            jobError = false;
            return false;
        } else {
            $("#jobErr").hide();
            bloodError = true;
            return true;
        }
    }
    $("#relErr").hide();
    let relError = true;
    $("#rel").keyup(function () {
        validateReligion();
    });
    function validateReligion() {
        let rel = $("#rel").val().trim();

        if (rel.length == "") {
            $("#relErr").show();
            $("#relErr").html("***Religion is required");
            relError = false;
            return false;
        } else if (rel.length < 3 || rel.length > 50) {
            $("#relErr").show();
            $("#relErr").html(
                `***Religion should be between 3 and 50 characters`
            );
            relError = false;
            return false;
        } else if (!pattern.test(rel)) {
            $("#relErr").show();
            $("#relErr").html(
                "***Religion should contain only letters and spaces"
            );
            relError = false;
            return false;
        } else {
            $("#relErr").hide();
            relError = true;
            return true;
        }
    }
    $("#castErr").hide();
    let castError = true;
    $("#cast").keyup(function () {
        validateCast();
    });
    function validateCast() {
        let cast = $("#cast").val();
        if (cast.length == "") {
            $("#castErr").show();
            $("#castErr").html("***Cast is required");
            castError = false;
            return false;
        } else if (cast.length < 3 || cast.length > 50) {
            $("#castErr").show();
            $("#castErr").html(`***Cast should be between 3 and 50 characters`);
            castError = false;
            return false;
        } else if (!pattern.test(cast)) {
            $("#castErr").show();
            $("#castErr").html(
                "***Cast should contain only letters and spaces"
            );
            castError = false;
            return false;
        } else {
            $("#castErr").hide();
            castError = true;
            return true;
        }
    }
    $("#subcastErr").hide();
    let subcastError = true;
    $("#subcast").keyup(function () {
        validateSubcast();
    });
    function validateSubcast() {
        let subcast = $("#subcast").val();
        if (subcast.length == "") {
            $("#subcastErr").show();
            $("#subcastErr").html("***Sub Cast is required");
            subcastError = false;
            return false;
        } else if (subcast.length < 3 || subcast.length > 50) {
            $("#subcastErr").show();
            $("#subcastErr").html(
                `***Sub Cast should be between 3 and 50 characters`
            );
            subcastError = false;
            return false;
        } else if (!pattern.test(subcast)) {
            $("#subcastErr").show();
            $("#subcastErr").html(
                "***Sub Cast should contain only letters and spaces"
            );
            subcastError = false;
            return false;
        } else {
            $("#subcastErr").hide();
            subcastError = true;
            return true;
        }
    }
    $("#submit").click(function () {
        e.preventDefault();
        validateName();
        validateVillage();
        validateTehsil();
        validateDistrict();
        validateState();
        validateDob();
        validateBlood();
        validateEducation();
        validateJob();
        validateReligion();
        validateCast();
        validateSubcast();
        if (
            nameError == true &&
            villageError == true &&
            tehsilError == true &&
            districtError == true &&
            stateError == true &&
            dobError == true &&
            bloodErr == true &&
            eduError == true &&
            jobError == true &&
            relError == true &&
            castError == true &&
            subcastError == true
        ) {
            var route = $("#routeToContact").data('route');
            const name=$('#name').val();
            const village=$('#village').val();
            const tehsil=$('#tehsil').val();
            const dis=$('#dis').val();
            const state=$('#state').val();
            const dob=$('#dob').val();
            const blood=$('#bloodgroup').val();
            const edu=$('#edu').val();
            const job=$('#job').val();
            const rel=$('#rel').val();
            const cast=$('#cast').val();
            const subcast=$('#subcast').val();
            const formData = {
                name: name,
                village: village,
                tehsil: tehsil,
                dis: dis,
                state: state,
                dob: dob,
                blood: blood,
                edu: edu,
                job: job,
                rel: rel,
                cast: cast,
                subcast: subcast,
            };
            $.ajax({
                type: 'POST',
                url: route,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: formData,
                success: function (data) {
                    alert(data);
                }
            });
        } else {
            alert("Please fill all the fields");
            return false;
        }
    });
});

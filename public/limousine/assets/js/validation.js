var isSelect = false;
var limit = 0;
var current_id;
disabled_date();
validate();
togle_next2();
validate_3();

function set_date() {
    var check_in_date = document.getElementById("datepicker");
}
function validate() {
    var datepicker = document.getElementById("datepicker").value;

    var times = document.getElementById("times").value;

    var from_place = document.getElementById("from_places").value;

    var to_places = document.getElementById("to_places").value;

    var datepicker = document.getElementById("datepicker").value;
    var times = document.getElementById("times").value;

    var next_button = document.getElementById("next1");

    if ( datepicker === "" || times === "" || from_place === "" || to_places === ""){
        next_button.disabled = true;
        next_button.style.background = "#D3D3D3";
        next_button.style.borderColor = "#D3D3D3";
        next_button.style.color = "#77859";
    }

     else {
        next_button.disabled = false;
        next_button.style.background = "#978358";
        next_button.style.color = "#FFFFFF";
        // console.log('checking date::', typeof(datepicker))
        // console.log('checking time::', typeof(times))
    }
}

function validate_form3(name, error) {
    var fName = document.getElementById(name).value;
    if (fName == "" || fName == "[1-9]") {
        document.getElementById(name).style.border = "1px solid red";
        document.getElementById(error).style.display = "block";
    } else {
        document.getElementById(name).style.border = "none";
        document.getElementById(error).style.display = "none";
    }
}

function validate_3() {
    var fName = document.getElementById("fname").value;
    var lName = document.getElementById("lnamee").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("telephone").value;
    var additional = document.getElementById("additional").value;

    if (fName === "" || lName === "" ||  email === "" || phone === "" || additional==="") {
        document.getElementById("next3").style.background = "#D3D3D3";
        document.getElementById("next3").style.borderColor = "#D3D3D3";
        document.getElementById("next3").style.color = "#77859";
        document.getElementById("next3").disabled = true;
    } else {
        document.getElementById("next3").style.background = "#978358";
        document.getElementById("next3").style.color = "#FFFFFF";
        document.getElementById("next3").disabled = false;
    }
}

function disabled_date() {
    var date_filed = document.getElementById("datepicker");
    nd = new Date().toLocaleDateString().split("/").reverse().join("-");
    date_filed.setAttribute("min", nd);
}
function carModels(model) {
  document.getElementById("modelCar").innerHTML = model;
}
function car_select_id(id, btn) {
    book_id = "book-btn-" + id;
    unbook_id = "unbook-btn-" + id;

    document.getElementById("car_select_id").value = id;
    var veh = document.getElementById(id);
    var book = document.getElementById(book_id);
    var un_book = document.getElementById(unbook_id);

    if (limit == 0) {
        isSelect = true;
        limit = limit + 1;
    }

    if (limit > 0 && btn == "unbook") {
        limit = 0;
        isSelect = false;
        un_book.style.display = "none";
        veh.style.borderRadius = "none";
        veh.style.boxShadow = "none";
        veh.style.padding = "0";
        book.style.display = "inline-block";
        veh.style.border = "none";
        togle_next2();
    }

    if (isSelect) {
        veh.style.padding = "5px";
        veh.style.borderRadius = "3px";
        veh.style.boxShadow = "0px 10px 5px #888, 0px -10px 5px #888";
        book.style.display = "none";
        un_book.style.display = "inline-block";
        togle_next2();
    }
    isSelect = false;

    console.log(document.getElementById("car_select_id"));
}

function togle_next2() {
    var next_button2 = document.getElementById("next2");
    if (isSelect) {
        next_button2.disabled = false;
        next_button2.style.background = "#978358";
        next_button2.style.color = "#FFFFFF";
        document.getElementById("err-msg").style.display = "none";
    } else {
        next_button2.disabled = true;
        next_button2.style.background = "#D3D3D3";
        next_button2.style.borderColor = "#D3D3D3";
        next_button2.style.color = "#77859";
        document.getElementById("err-msg").style.display = "block";
    }
}

function err_msg() {
    if (isSelect) {
        document.getElementById("err-msg").style.display = "none";
    } else {
        document.getElementById("err-msg").styles.display = "block";
    }
}

// function carModels(image){
// alert(image);
// }

$(document).ready(function(){
    $.validator.addMethod('age', function(value, element, param) {
        return (value != 18) && (value <= 100) && (value == parseInt(value, 10));
    }, 'Please enter a valid age!');

    $.validator.addMethod('month', function(value, element, param) {
        return (value != 0) && (value <= 12) && (value == parseInt(value, 10));
    }, 'Please enter a valid month!');
    $.validator.addMethod('year', function(value, element, param) {
        return (value != 0) && (value >= 1900) && (value == parseInt(value, 10));
    }, 'Please enter a valid year not less than 1900!');


    // $.validator.addMethod('username', function(value, element, param) {
    //     var nameRegex = /^[a-zA-Z0-9]+$/;
    //     return value.match(nameRegex);
    // }, 'Only a-z, A-Z, 0-9 characters are allowed');



    // $.validator.addMethod('name', function(value, element, param) {
    //     var nameRegex = /^[a-zA-Z]+$/;
    //     return value.match(nameRegex);
    // }, 'Only a-z, A-Z characters are allowed');




    // $.validator.addMethod('cnic', function(value, element, param) {
    //     var nameRegex = /^[a-zA-Z0-9]+$/;
    //     return value.match(nameRegex);
    // }, '0 to 9 characters are allowed');




    var val = {
        // Specify validation rules
        rules: {
            datepicker: "required",
            times: "required",
            from_places: "required",
            to_places: "required",
            underfifteenyear: "required",
            category_id: "required",
            state: "required",
            city: "required",
            village: "required",
            technical_exp: "required",
            income: "required",
            cnic: {
                required:true,
                minlength:13,
                maxlength:13,
                digits:true
            },
            phone:{
                required:true,
                minlength:11,
                maxlength:11,
                digits:true
            },
            age:{
                age:true,
                required:true,
                minlength:2,
                maxlength:2,
                digits:true
            },

            password:{
                required:true,
                minlength:8,
                maxlength:16,
            }
        },
        // Specify validation error messages
        messages: {
            datepicker:      "datepicker is required",
            times:      "times is required",

            from_places:  "from_places  is required",

            to_places:  "to_places is required",

            city:  "City  is required",

            village: "village is required",
            technical_exp: "technical exp is required",
            income: "Income field is required",
            cnic: {
                required:   "Cnic is required",
                minlength:  "Please enter 13 digit mobile number",
                maxlength:  "Please enter 13 digit mobile number",
                digits:     "Only numbers are allowed in this field"
            },
            phone:{
                required:   "Phone number is requied",
                minlength:  "Please enter 10 digit mobile number",
                maxlength:  "Please enter 10 digit mobile number",
                digits:     "Only numbers are allowed in this field"
            },
            age:{
                required:   "Age is required",
                minlength:  "Age should be a 2 digit number",
                maxlength:  "Age should be a 2 digit number",
                digits:     "Age should be a number"
            },
            noofmale:{
                required:   "No of Male is required",
                minlength:  "No of Male should be a 2 digit number, e.i., 01 or 12",
                maxlength:  "No of Male should be a 2 digit number, e.i., 01 or 12",
                digits:     "Only numbers are allowed in this field"
            },
            nooffemale:{
                required:   "No of Female is required",
                minlength:  "No of Female should be a 4 digit number, e.i., 2018 or 1990",
                maxlength:  "Year should be a 4 digit number, e.i., 2018 or 1990",
                digits:     "Only numbers are allowed in this field"
            },
            underfifteenyear:{
                required:   "Under fifteen year is required",
                minlength:  "Under fifteen year should be minimum 4 characters",
                maxlength:  "Under fifteen year should be maximum 16 characters",
            },



            password:{
                required:   "Password is required",
                minlength:  "Password should be minimum 8 characters",
                maxlength:  "Password should be maximum 16 characters",
            }
        }
    }
    $("#myForm").multiStepForm(
    {
 // defaultStep:0,
        beforeSubmit : function(form, submit){
            console.log("called before submiting the form");
            console.log(form);
            console.log(submit);
        },
        validations:val,
    }
    ).navigateTo(0);
});


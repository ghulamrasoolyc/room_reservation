(function ( $ ) {
    $.fn.multiStepForm = function(args) {
        if(args === null || typeof args !== 'object' || $.isArray(args))
            throw  " : Called with Invalid argument";
            var form = this;
            var tabs = form.find('.tab');
            var steps = form.find('.step');
            steps.each(function(i, e){
                $(e).on('click', function(ev){
                });
            });
            form.navigateTo = function (i) {/*index*/
            /*Mark the current section with the class 'current'*/
            tabs.removeClass('current').eq(i).addClass('current');
            // Show only the navigation buttons that make sense for the current section:
            form.find('.previous').toggle(i > 0);
            atTheEnd = i >= tabs.length - 1;
            form.find('.next').toggle(!atTheEnd);
            // console.log('atTheEnd='+atTheEnd);
            form.find('.submit').toggle(atTheEnd);
            fixStepIndicator(curIndex());
            return form;
        }
        function curIndex() {
            /*Return the current index by looking at which section has the class 'current'*/
            return tabs.index(tabs.filter('.current'));
        }
        function fixStepIndicator(n) {
            steps.each(function(i, e){
                i == n ? $(e).addClass('active') : $(e).removeClass('active');
            });
        }
        /* Previous button is easy, just go back */
        form.find('.previous').click(function() {
            form.navigateTo(curIndex() - 1);
        });

        /* Next button goes forward iff current block validates */
        form.find('.next').click(function() {
            if('validations' in args && typeof args.validations === 'object' && !$.isArray(args.validations)){
                if(!('noValidate' in args) || (typeof args.noValidate === 'boolean' && !args.noValidate)){
                    form.validate(args.validations);
                    if(form.valid() == true){
                        form.navigateTo(curIndex() + 1);
                        return true;
                    }
                    return false;
                }
            }
            form.navigateTo(curIndex() + 1);
        });
        form.find('.submit').on('click', function(e){
            if(typeof args.beforeSubmit !== 'undefined' && typeof args.beforeSubmit !== 'function')
                args.beforeSubmit(form, this);
                /*check if args.submit is set false if not then form.submit is not gonna run, if not set then will run by default*/        
            if(typeof args.submit === 'undefined' || (typeof args.submit === 'boolean' && args.submit)){
                form.submit();
            }
            return form;
        });
        /*By default navigate to the tab 0, if it is being set using defaultStep property*/
        typeof args.defaultStep === 'number' ? form.navigateTo(args.defaultStep) : null;
        form.noValidate = function() {
    
        }
        return form;
    };
}( jQuery ));
$(document).ready(function(){
    $.validator.addMethod('date', function(value, element, param) {
        return (value != 0) && (value <= 31) && (value == parseInt(value, 10));
    }, 'Please enter a valid date!');
    $.validator.addMethod('month', function(value, element, param) {
        return (value != 0) && (value <= 12) && (value == parseInt(value, 10));
    }, 'Please enter a valid month!');
    $.validator.addMethod('year', function(value, element, param) {
        return (value != 0) && (value >= 1900) && (value == parseInt(value, 10));


    }, 'Please enter a valid year not less than 1900!');


    $.validator.addMethod('username', function(value, element, param) {
        var nameRegex = /^[a-zA-Z0-9]+$/;
        return value.match(nameRegex);
    }, 'Only a-z, A-Z, 0-9 characters are allowed');

    var val = {
        // Specify validation rules
        rules: {
            fname: "required",
            email: {
                required: true,
                email: true
            },
            phone: {
                required:true,
                minlength:10,
                maxlength:10,
                digits:true
            },
            date:{
                date:true,
                required:true,
                minlength:2,
                maxlength:2,
                digits:true
            },
            month:{
                month:true,
                required:true,
                minlength:2,
                maxlength:2,
                digits:true
            },
            year:{
                year:true,
                required:true,
                minlength:4,
                maxlength:4,
                digits:true
            },
            username:{
                username:true,
                required:true,
                minlength:4,
                maxlength:16,
            },
            password:{
                required:true,
                minlength:8,
                maxlength:16,
            }
        },
        // Specify validation error messages
        messages: {
            fname:      "First name is required",
            email: {
                required:   "Email is required",
                email:      "Please enter a valid e-mail",
            },
            phone:{
                required:   "Phone number is requied",
                minlength:  "Please enter 10 digit mobile number",
                maxlength:  "Please enter 10 digit mobile number",
                digits:     "Only numbers are allowed in this field"
            },
            date:{
                required:   "Date is required",
                minlength:  "Date should be a 2 digit number, e.i., 01 or 20",
                maxlength:  "Date should be a 2 digit number, e.i., 01 or 20",
                digits:     "Date should be a number"
            },
            month:{
                required:   "Month is required",
                minlength:  "Month should be a 2 digit number, e.i., 01 or 12",
                maxlength:  "Month should be a 2 digit number, e.i., 01 or 12",
                digits:     "Only numbers are allowed in this field"
            },
            year:{
                required:   "Year is required",
                minlength:  "Year should be a 4 digit number, e.i., 2018 or 1990",
                maxlength:  "Year should be a 4 digit number, e.i., 2018 or 1990",
                digits:     "Only numbers are allowed in this field"
            },
            username:{
                required:   "Username is required",
                minlength:  "Username should be minimum 4 characters",
                maxlength:  "Username should be maximum 16 characters",
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
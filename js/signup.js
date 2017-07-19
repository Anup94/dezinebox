$(document).ready(function () {
    $("#signupForm").validate({
        rules: {
            "email":{"email":true},
            "mobile":{IndiaMobile:true},
            "username":{minlength:5,maxlength:10},
            "password":{minlength:5,maxlength:10},
            "confirmPassword":{"equalTo":"[name='password']"}
        },
        invalidHandler: function (form, validator) {
            thisForm = form.currentTarget;
            errors = validator.numberOfInvalids();
            if (errors) {
                toastr['error'](validator.errorList[0].message);
                var errEle = validator.errorList[0].element;
                if ($(errEle).data('select2')) {
                    $(errEle).select2('open');
                } else {
                    errEle.focus();
                }
            }
        },
        errorPlacement: function (error, element) {
            return;
        },
        messages: {
            "name": "Enter name000",
            "mobile": "Enter a valid 10 digit mobile no",
            "email": "Enter valid email address",
            "username": "Enter a valid username (5-10 characters)",
            "password": "Enter a valid password (5-10 characters)",
            "confirmPassword": "Enter the same password again",
        },
        submitHandler: function (form) {
            $(form).find(".modal-content").addClass("loading");
            $(form).ajaxSubmit(function (data) {
                $(form).find(".modal-content").removeClass("loading");
                if (data && data['status'] == "1") {
                    toastr["success"]("Signup successful.");
                    location.href="/get-your-box.php";
                } else {
                    toastr["error"](data['msg'] || "Error signing up.");
                }
            });
        },
    });
	
	
	    $("#forget-password-form").validate({
        rules: {
            
            "email":{required:true, email:true}
        },
        invalidHandler: function (form, validator) {
            thisForm = form.currentTarget;
            errors = validator.numberOfInvalids();
            if (errors) {
                toastr['error'](validator.errorList[0].message);
                var errEle = validator.errorList[0].element;
                if ($(errEle).data('select2')) {
                    $(errEle).select2('open');
                } else {
                    errEle.focus();
                }
            }
        },
        errorPlacement: function (error, element) {
            return;
        },
        messages: {
            
           
        },
        submitHandler: function (form) {
            $(form).find(".modal-content").addClass("loading");
            $(form).ajaxSubmit(function (data) {
                $(form).find(".modal-content").removeClass("loading");
                if (data && data['status'] == "1") {
                    toastr["success"]("Password Reset successful.");
                    location.href="/";
                } else {
                    toastr["error"](data['msg'] || "Error signing up.");
                }
            });
        },
    });
	
	
});
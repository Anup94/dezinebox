$(document).ready(function () {
    
	
	    $("#forgot-pass").validate({
			
        rules: {
            
            "password1":{minlength:5,maxlength:10},
            "confirmPassword":{"equalTo":"[name='password2']"}
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
            
            "password": "Enter a valid password (5-10 characters)",
            "confirmPassword": "Enter the same password again",
        },
        submitHandler: function (form) {
			console.log("sxsxsxsx");
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
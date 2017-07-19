toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-top-right",
  "preventDuplicates": true,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1100",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
$(document).on("keypress", "form", function(event) { 
    return event.keyCode != 13;
});
$(document).ready(function () {
    if($("#login-form").length) {
        $("#login-form").validate({
            rules: {
                "username":{minlength:5,maxlength:10,required:true},
                "password":{minlength:5,maxlength:10,required:true},
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
                "username": "Enter a valid username (5-10 characters)",
                "password": "Enter a valid password (5-10 characters)",
            },
            submitHandler: function (form) {
                $(form).find(".modal-content").addClass("loading");
                $(form).ajaxSubmit(function (data) {
                    $(form).find(".modal-content").removeClass("loading");
                    if (data && data['status'] == "1") {
                        toastr["success"]("Login successful.");
                        $(form).resetForm();
                        $(form).modal("hide");
                        setTimeout(function() {
                            location.href="/get-your-box.php";
                        },1000);
                    } else {
                        toastr["error"](data['msg'] || "Error loging in.");
                    }
                });
            },
        });
    }
    if($("#signup-form").length) {
        $("#signup-form").validate({
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
                "name": "Enter name00",
                "mobile": "Enter a valid 10 digit mobile no",
                "email": "Enter valid email address",
                "username": "Enter a valid username (5-10 characters)",
                "password": "Enter a valid password (5-10 characters)",
                "confirmPassword": "Enter the same password again",
                "success": "Signup successful"
            },
            submitHandler: function (form) {
                $(form).find(".modal-content").addClass("loading");
                $(form).ajaxSubmit(function (data) {
                    $(form).find(".modal-content").removeClass("loading");
                    if (data && data['status'] == "1") {
                        toastr["success"]("Signup successful.");
                        $(form).resetForm();
                        $(form).modal("hide");
                        setTimeout(function() {
                            location.href="/get-your-box.php";
                        },1000);
                    } else {
                        toastr["error"](data['msg'] || "Error signing up.");
                    }
                });
            },
        });
    }
	
	
	
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
                    toastr["success"](data['msg']);
                    location.href="/";
                } else {
                    toastr["error"](data['msg'] || "Error signing up.");
                }
            });
        },
    });
	
	
	
	
});

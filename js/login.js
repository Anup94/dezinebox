$(document).ready(function () {
    $("#loginForm").validate({
        rules: {
            "username":{minlength:5,maxlength:10},
            "password":{minlength:5,maxlength:10},
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
                    location.href="/get-your-box.php";
                } else {
                    toastr["error"](data['msg'] || "Error loging in.");
                }
            });
        },
    });
});
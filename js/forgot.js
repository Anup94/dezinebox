$(document).ready(function () {
    
	
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
$(document).ready(function () {
    $("#designPartnerForm").validate({
        rules: {
            "name":{"required":true},
            "profession[]":{"required":true},
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
          "name":"Please enter name",
          "email":"Please enter email",
          "profession[]":"Please select a profession"
        },
        submitHandler: function (form) {
            $(form).find("[type='submit']").prop("disabled",true);
            $(form).find(".modal-content").addClass("loading");
            $(form).ajaxSubmit(function (data) {
                $(form).find("[type='submit']").prop("disabled",false);
                $(form).find(".modal-content").removeClass("loading");
                if (data && data['status'] == "1") {
                    $(form).resetForm();
                    toastr["success"]("Registration successful.");
                } else {
                    toastr["error"](data['msg'] || "Error on registration.");
                }
            });
        },
    });
});
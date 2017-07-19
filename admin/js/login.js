$(document).ready(function() {
	$("#loginForm").validate({
		rules: {
		},
		invalidHandler: function (form, validator) {
			thisForm = form.currentTarget;
			errors = validator.numberOfInvalids();
			if (errors) {
				toastr['error'](validator.errorList[0].message);
				validator.errorList[0].element.focus();
			}
		},
		errorPlacement: function (error, element) {
			return;
		},
		submitHandler: function (form) {
			$(form).addClass("loading").ajaxSubmit(function(data) {
				$(form).removeClass("loading");
				console.log(data);
				if(data && data["status"]=="1") {
					toastr["success"](data["msg"]);
					$(form).resetForm();
					location.href="index.php";
				} else {
					toastr["error"](data["msg"]);
				}
			});
		},
		messages: {
			"username":"Enter username",
			"password":"Enter password"
		}
	});
});
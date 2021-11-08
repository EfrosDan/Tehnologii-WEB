jQuery(function($) {
	var validation_holder;
	
	$("form#login_form input[name='submit']").click(function() {
	
	var validation_holder = 0;
	
		var email 			= $("form#login_form input[name='email']").val();
		var email_regex 	= /^[\w%_\-.\d]+@[\w.\-]+.[A-Za-z]{2,6}$/; // reg ex email check	
		var password 		= $("form#login_form input[name='password']").val();
		
		/* validation start */	
		if(email == "") {
			$("span.val_email").html("This field is required.").addClass('validate');
			validation_holder = 1;
		} else {
			if(!email_regex.test(email)){ // if invalid email
				$("span.val_email").html("Invalid Email!").addClass('validate');
				validation_holder = 1;
			} else {
				$("span.val_email").html("");
			}
		}
		if(password == "") {
			$("span.val_pass").html("This field is required.").addClass('validate');
			validation_holder = 1;
		} else {
				$("span.val_pass").html("");
			}
		if(validation_holder == 1) { // if have a field is blank, return false
			$("p.validate_msg").slideDown("fast");
			return false;
		}  validation_holder = 0; // else return true
		/* validation end */	
	}); // click end 

}); // jQuery End



/*function validateText(id){
	if($("#"+id).val()==null || $("#"+id).val()==""){
		var div = $("#"+id).closest("div");
		div.removeClass("has-success");
		$("#glypcn"+id).remove();
		div.addClass("has-error has-feedback");
		div.append('<span  id="glypcn'+id+'" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>');
		return false;
	}else {
		var div = $("#"+id).closest("div"); 
		div.removeClass("has-error");
		div.addClass("has-success has-feedback");
		$("#glypcn"+id).remove();
		div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>');
		return true;
	}
}*/


// $(document).ready(function(){
	// $("#btn-submit").click(function(){
		// if(!validateText("fName")){
			// return false;
		// }
		// if(!validateText("lName")){
			// return false;
		// }
		// if(!validateText("username")){
			// return false;
		// }
		// if(!validateText("email")){
			// return false;
		// }
		// if(!validateText("password")){
			// return false;
		// }
		// if(!validateText("confirmPass")){
			// return false;
		// }
	// });
	
// });



function checkPasswordMatch() {
    var password = $("#password").val();
    var confirmPassword = $("#confirmPass").val();

    if (password != confirmPassword){
        $("#confirmPass").after('<span style="color: rgb(245, 112, 117);" class="error error-keyup-5"><h6>Passwords do not match</h6></span>');
	}
    else if(!password) {
         $("#confirmPass").after('<span style="color: rgb(245, 112, 117);" class="error error-keyup-5"><h6>Fill in the password field</h6></span>');
	}
	else {		
		$("#confirmPass").after('<span style="color: rgb(245, 112, 117);" class="error error-keyup-5"><h6>passwords match</h6></span>');
	}
}

    $(document).ready(function(){
        $("#email").on('keyup',function(){
			 $('span.error-keyup-7').remove();
				var inputVal = $(this).val();
				var emailReg = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+(?:[A-Z]{2}|com|org|net|gov|mil|biz|info|mobi|name|aero|jobs|museum)\b/;
				if(!emailReg.test(inputVal) || $(this).val()==null || $(this).val()== "") {
					$(this).after('<span style="color: rgb(245, 112, 117);" class="error error-keyup-7"><h6>Please fill in, and as showen in the example!</h6></span>');
					var div = $(this).closest("div");
					div.removeClass("has-success");
					$("#glypcnemail").remove();
					div.addClass("has-error has-feedback");
					div.append('<span  id="glypcnemail" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>');
					return false;
							}else {
					var div = $(this).closest("div"); 
					div.removeClass("has-error");
					div.addClass("has-success has-feedback");
					$("#glypcnemail").remove();
					div.append('<span id="glypcnemail" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>');
					return true;
				}
        });
		
		$("#fName").on('keyup',function(){
			 $('span.error-keyup-4').remove();
				var inputVal = $(this).val();
				var emailReg = /^(([A-Z\a-z]).{1,20})?$/;
				if(!emailReg.test(inputVal) || $(this).val()==null || $(this).val()== "") {
					$(this).after('<span style="color: rgb(245, 112, 117);" class="error error-keyup-4"><h6>Invalid input, try and use letters</h6></span>');
				var div = $(this).closest("div");
					div.removeClass("has-success");
					$("#glypcnfName").remove();
					div.addClass("has-error has-feedback");
					div.append('<span  id="glypcnfName" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>');
					return false;
							}else {
					var div = $(this).closest("div"); 
					div.removeClass("has-error");
					div.addClass("has-success has-feedback");
					$("#glypcnfName").remove();
					div.append('<span id="glypcnfName" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>');
					return true;
				}
        });
		
		$("#lName").on('keyup',function(){
			 $('span.error-keyup-3').remove();
				var inputVal = $(this).val();
				var emailReg = /^(([A-Z\a-z]).{1,20})?$/;
				if(!emailReg.test(inputVal) || $(this).val()==null || $(this).val()== "") {
					$(this).after('<span style="color: rgb(245, 112, 117);" class="error error-keyup-3"><h6>Invalid input, try and use letters</h6></span>');
				var div = $(this).closest("div");
					div.removeClass("has-success");
					$("#glypcnlName").remove();
					div.addClass("has-error has-feedback");
					div.append('<span  id="glypcnlName" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>');
					return false;
							}else {
					var div = $(this).closest("div"); 
					div.removeClass("has-error");
					div.addClass("has-success has-feedback");
					$("#glypcnlName").remove();
					div.append('<span id="glypcnlName" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>');
					return true;
				}
        });
		
		$("#username").on('keyup',function(){
			 $('span.error-keyup-2').remove();
				var inputVal = $(this).val();
				var emailReg = /^(([A-Z\a-z\0-9\#?!@$%^&*-]).{1,20})?$/;
				if(!emailReg.test(inputVal) || $(this).val()==null || $(this).val()== "") {
					$(this).after('<span style="color: rgb(245, 112, 117);" class="error error-keyup-2"><h6>Invalid input, try and use letters</h6></span>');
				var div = $(this).closest("div");
					div.removeClass("has-success");
					$("#glypcnuser").remove();
					div.addClass("has-error has-feedback");
					div.append('<span  id="glypcnuser" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>');
					return false;
							}else {
					var div = $(this).closest("div"); 
					div.removeClass("has-error");
					div.addClass("has-success has-feedback");
					$("#glypcnuser").remove();
					div.append('<span id="glypcnuser" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>');
					return true;
				}
        });
		
	 $("#password").on('keyup',function(){		
			 $('span.error-keyup-6').remove();		
				var inputVal = $(this).val();
				var passReg = /^((?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,})?$/;
				if(!passReg.test(inputVal) || $(this).val()==null || $(this).val()== "") {
					$(this).after('<span style="color: rgb(245, 112, 117);" class="error error-keyup-6"><h6>Must contain at least 8 characters, at least 1 number and both lower and uppercase letters</h6></span>');
				var div = $(this).closest("div");
					div.removeClass("has-success");
					$("#glypcnpass").remove();
					div.addClass("has-error has-feedback");
					div.append('<span  id="glypcnpass" class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>');
					return false;
							}else {
					var div = $(this).closest("div"); 
					div.removeClass("has-error");
					div.addClass("has-success has-feedback");
					$("#glypcnpass").remove();
					div.append('<span id="glypcnpass" class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>');
					return true;
				}
        });	
	
	 	$("#confirmPass").on('keyup',function(){
			$('span.error-keyup-5').remove();
			$(this).after(checkPasswordMatch);	
		});
    });

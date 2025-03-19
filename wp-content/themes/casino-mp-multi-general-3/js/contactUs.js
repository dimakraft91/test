$(document).ready(function () {
		$(".SubmitContactUs").click(function (){
			name = $("#name").val();
			email = $("#email").val();
			contactEmail = $("#contactEmail").val();
			subject = $("#subject").val();
			message = $("#message").val();
			if (email == '' || contactEmail == '' || subject == '' || message == ''){
				alert(allFieldsLabel);
			}
			else if(!validateEmail(email) || !validateEmail(email)){
				alert(emailInvalidLabel);
			}
			else{
				$("#ContactUsForm").css('z-index','1');
				$("div.waiting").show();
				$.ajax({
					type: "POST",
					url: stylesheetURL+"/sendEmailAjax.php",
					data: "email="+email+"&contactEmail="+contactEmail+"&subject="+subject+"&message="+nameLabel+": "+name+"<br/>"+message,
					success:function(response){
								if(response == "KO"){
									alert(retryLaterLabel);
								}
								else{
									$("div.waiting").hide();
									alert("OK!");
									$('#overlay').fadeOut();
									$('#ContactUsForm').fadeOut();
									$("#ContactUsForm").css('z-index','2000000');
									$("#name").val('');
									$("#email").val('');
									$("#subject").val('');
									$("#message").val('');
								}
							}
				});
			}
		});
		
		
	});
	function validateEmail(elementValue){  
		emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;  
		return emailPattern.test(elementValue);  
	}
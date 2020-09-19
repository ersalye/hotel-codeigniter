 <script>
$(document).ready(function(){
	$(".loginr").hide();	
 $('#valid-phone').hide();
 $('#valid-name').hide();
 $('#valid-mail').hide();
 $('#exist-lmail').hide();
 $('#valid-lmail').hide();
 $('#exist-mail').hide();
 $('#valid-pass').hide();
 $('#exist-phone').hide();
 $('#valid-otp').hide(); 
 $('#eotp').hide();
 $('#rg-save').hide();
 $('#exist-fmail').hide();
 $('#valid-fmail').hide();
 $("#changepassword").hide();	
 $("#valid-otp").hide();	
 $("#sendotp-email").hide();
$("#valid-otp_forgot").hide(); 
	
});
</script>
 <script>

$(document).ready(function () {
  $("#cphone").keypress(function (e) {
	   

     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
		$("#valid-phone").hide();
        $("#errmsgg").html("Digits Only").show().fadeOut(500);
               return false;
    }
   });
$('#cphone').numeric();

   $("#forgot-email").keypress(function (e) {
	   
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
		
               return false;
    }
   });
   $("#login-uname").keypress(function (e) {
	   
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
		
               return false;
    }
   });
});
	// Phone minlength 10
	$("#cphone").keyup(function (e) {
	var numcphone = $("#cphone").val();
	var num = $.isNumeric($("#cphone").val());

var filter = /^[0-9-+]+$/;
if (filter.test(numcphone)) {
    if($('#cphone').val().length < 9) {
       $("#ephone").css("border","1px red solid");
	   $('#exist-phone').hide();
	   $('#valid-phone').show();
      }else{
		$('#valid-phone').hide();
		var url = "<?php echo site_url('Products/phone_check');?>";
		$.ajax({
                url : url,
                method : "POST",
				//dataType:"json",   
				data : {phone: numcphone},
				success: function(data){
		if(data.length==0){
		$("#ephone").css("border","1px #e6e6e6 solid");
		 $('#exist-phone').hide();
					}else{
		$("#ephone").css("border","1px red solid");				
		$('#exist-phone').show();
					}
				
			console.log(data);
                   // $('#toatalprice').html(data.total);
                },
    error: function(){
        //alert("fail ajax load");
    }
            });
		$("#ephone").css("border","1px #e6e6e6 solid");
		$('#valid-phone').hide();
		
}}
else {
     $("#ephone").css("border","1px red solid");
	 $('#exist-phone').hide();
	  //$('#valid-phone').show();
}
	

	});
	// Name minlength 4
	$("#cname").keyup(function (e) {		
	if($('#cname').val().length < 4) {
       $("#ename").css("border","1px red solid");
	   $('#valid-name').show();
      return false;
    }else{
		//alert('sdf');
		$("#ename").css("border","1px #e6e6e6 solid");
		$('#valid-name').hide();
	}
	});
	
/////////// start Password validation /////////////////	
	$("#cpassword").keyup(function (e) {		
	if($('#cpassword').val().length < 6) {
       $("#epassword").css("border","1px red solid");
     $('#valid-pass').show();
	   return false;
	   
	   
    }else{
		//alert('sdf');
		$("#epassword").css("border","1px #e6e6e6 solid");
	
		 $('#valid-pass').hide();
	}
	});
	/////////// End password validation /////////////////
	/////////// Login Email validation /////////////////
	
		$("#login-uname").keyup(function (e) {
			
			$('#exist-lmail').hide();
			$('#valid-lmail').show();
				var numcphone = $("#login-uname").val();
	var num = $.isNumeric($("#login-uname").val());

var filter = /^[0-9-+]+$/;
if (filter.test(numcphone)) {
    if($('#login-uname').val().length < 9) {
       $("#ephone").css("border","1px red solid");
			$('#exist-lmail').hide();
			$('#valid-lmail').show();
      }else{
		$('#valid-lmail').hide();
		var url = "<?php echo site_url('Products/phone_check');?>";
		$.ajax({
                url : url,
                method : "POST",
				//dataType:"json",   
				data : {phone: numcphone},
				success: function(data){
		if(data.length==0){
		$("#lemail").css("border","1px red solid");			
		$('#exist-lmail').show();
					}else{
		$("#lemail").css("border","1px #e6e6e6 solid");
		$('#exist-lmail').hide();
		return false;
					}
				
			console.log(data);
                   // $('#toatalprice').html(data.total);
                },
    error: function(){
        console.log("fail ajax load");
    }
            });
		$("#lemail").css("border","1px #e6e6e6 solid");
		$('#valid-phone').hide();
		
}}
else {
     $("#lemail").css("border","1px red solid");
	 $('#exist-lmail').hide();
	   $('#valid-lmail').show();
}	});
	/////////// End Login Email validation /////////////////
	/////////// start  forgot phone validation /////////////////	
	$("#forgot-email").keyup(function (e) {
	var email = $('#forgot-email').val();
	$('#exist-fmail').hide();
	$('#valid-fmail').show();
			
	if(email.length > 8) {
		//alert(email);
		$('#valid-fmail').hide();
		var url = "<?php echo site_url('Products/phone_check');?>";
		$.ajax({
				url : url,
                method : "POST",
				//dataType:"json",   
				data : {phone: email},
				success: function(data){
		if(data.length==0){
		$("#femail").css("border","1px red solid");			
		$('#exist-fmail').show();
		 $("#send-otp").attr("disabled", true);		


					}else{
	$("#femail").css("border","1px #e6e6e6 solid");
	$('#exist-fmail').hide();
	$("#send-otp").removeAttr("disabled");
	 return false;
						}
				
			console.log(data);
                },
    error: function(){
    }
            });
    }else{
	$('#valid-mail').show();
	$("#eemail").css("border","1px red solid");
   
	 return false;	
	}
	
	});
	/////////// start email validation /////////////////	
	$("#cemail").keyup(function (e) {
	var email = $('#cemail').val();
	$('#exist-mail').hide();
	$('#valid-mail').show();
	if(isValidEmailAddress(email)) {
		$('#valid-mail').hide();
		var url = "<?php echo site_url('Products/email_check');?>";
		$.ajax({
                url : url,
                method : "POST",
				//dataType:"json",   
				data : {email: email},
				success: function(data){
					if(data.length==0){
		$("#eemail").css("border","1px #e6e6e6 solid");
		$("#rg-button").removeAttr("disabled");
		$('#exist-mail').hide();

					}else{
	$("#eemail").css("border","1px red solid");
    $("#rg-button").attr("disabled", true);
	$('#exist-mail').show();
	 return false;
						
					}
				
			console.log(data);
                   // $('#toatalprice').html(data.total);
                },
    error: function(){
    }
            });
    }else{
		$('#valid-mail').show();
	$("#eemail").css("border","1px red solid");
    $("#rg-button").attr("disabled", true);
	 return false;	
	}
	
	});
	
	
	function isValidphone(phone) {
		var url = "<?php echo site_url('Products/phone_check');?>";
		$.ajax({
                url : url,
                method : "POST",
				//dataType:"json",   
				data : {phone: phone},
				success: function(data){
			if(data.length==0){
				$('#rg-button').hide();
				$('#ephone').hide();
				$('#ename').hide();
				$('#eemail').hide();
				$('#epassword').hide();
				
				$('#eotp').show();
				$('#rg-save').show();
					}else{
				
				return false
					}
				
			console.log(data);
                   // $('#toatalprice').html(data.total);
                },
    error: function(){
        //alert("fail ajax load");
    }
            });
	}
	function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/);
    return pattern.test(emailAddress);
}

/////////// end email validation /////////////////	

	 $('.nav-link').click(function(){
		 
	$('.forgot').hide();	 
	$('#configform').hide();	 
	$('.loginf').show();	
	$('#fotp')[0].reset();	
		 
	 });
	 $('#rg-button').click(function(){
		var mobile   = $('#cphone').val();
		var name = $('#cname').val();
		var email    = $('#cemail').val();
		var password = $('#cpassword').val();
		var filter = /^[0-9-+]+$/;
		if(mobile.length < 9 || name.length < 4 || password.length < 6 || email.length < 4 ) {
		if(mobile.length >= 9){
		$("#ephone").css("border","1px #e6e6e6 solid");	
		}else{
		$("#ephone").css("border","1px red solid");	}
		if(name.length >= 4){
		$("#ename").css("border","1px #e6e6e6 solid");	}else{
		$("#ename").css("border","1px red solid");	}
		if(email.length >= 6){
		$("#eemail").css("border","1px #e6e6e6 solid");	}else{
		$("#eemail").css("border","1px red solid");	}
		if(password.length >= 6){
		$("#epassword").css("border","1px #e6e6e6 solid");	}else{
		$("#epassword").css("border","1px red solid");	}
		return false;}
		if(filter.test(mobile)){
			//alert(mobile);
		}else{
			return false;
		}
       
		if(name.length < 4) {
		$("#ename").css("border","1px red solid");
		return false;}
       
		if(!isValidEmailAddress(email)) {
			return false;
		}
		
		if(password.length < 6) {
		$("#epassword").css("border","1px red solid");	
		return false;}
		if(isValidphone(mobile)) {
			return false;
		}
			var url = "<?php echo site_url('Products/SendOTP');?>";
				$.ajax({
                url : url,
                method : "POST",
			//	dataType:"json",   
				data : {mobile: mobile,email:email},
				success: function(data){
				if(data == "existed"){
				$("#eotp").css("border","1px red solid");	
				}
				console.log(data);
				
        },
		
            });
		
          });
      </script>
	    <script>
	 $('.lcreate').click(function(){
		  $('#valid-mail').hide();
		 $('#configform')[0].reset();
		 
	 });
	 $('#aformcreate').click(function(){
		  $('#configform').show();
		 $('#valid-lmail').hide();
		 $('#loginformr')[0].reset();
	 });
	 
	 
	 $('#rg-save').click(function(){
			var name 	= $('#cname').val();
			var mobile  = $('#cphone').val();
			var email   = $('#cemail').val();
			var password = $('#cpassword').val();
			var otp = $('#cotp').val();
		if(otp.length != 0) {
			}else{
			$("#eotp").css("border","1px red solid");
			return false;
		}
		$("#loader").show();
		$('#loader').html("<img src='<?php echo site_url();?>/progress.gif' width='40px'/>");
		var url = "<?php echo site_url('Products/addajax');?>";
			
    	$.ajax({
                url : url,
                method : "POST",
				dataType:"json",   
				data : {name: name, email: email, mobile: mobile, password: password,otp:otp},
				success: function(data){
					$("#loader").hide();
				var arr = data.errors;
				if(arr){
				var ename = arr.name;
				if(ename){$("#ename").css("border","1px red solid");}else{
					$("#ename").css("border","1px #e6e6e6 solid");
				}
				var eemail = arr.email;
				if(eemail){$("#eemail").css("border","1px red solid");}else{
					$("#eemail").css("border","1px #e6e6e6 solid");
				}
				var emobile = arr.mobile;
				if(emobile){$("#ephone").css("border","1px red solid");}else{
					$("#ephone").css("border","1px #e6e6e6 solid");
				}
				var ephone = arr.phone;
				if(ephone){$("#ephone").css("border","1px red solid");
				$('#exist-phone').show();
				}else{
					$("#ephone").css("border","1px #e6e6e6 solid");
					$('#exist-phone').hide();
				}
				var epassword = arr.password;
				if(epassword){$("#epassword").css("border","1px red solid");
				}else{
					$("#epassword").css("border","1px #e6e6e6 solid");
				}
				var OTP = arr.OTP;
				if(OTP){$("#eotp").css("border","1px red solid");
				$('#valid-otp').show();
				}else{
					$("#valid-otp").css("border","1px #e6e6e6 solid");
				}
				}else if(data.OTP=='99'){
					
					$("#eotp").css("border","1px #e6e6e6 solid");
					$('#valid-otp').hide();
					$("#sucregister").html('<div style="font-size: 30px;color: green;line-height: 35px;margin-top:100px;text-align:center;"> <div><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></div>Please Confirm Your Email Address to Complete Your Subscription</div>');
				   setTimeout(function() {
					location.reload();
       }, 2000);
				}else{
				 	
				}
			console.log(data);
			console.log(data.OTP);
                   // $('#toatalprice').html(data.total);
                },
    error: function(){
        console.log("failure");
    }
            });
		  });
      </script>
    <script>
	 $('#send-otp').click(function(){
		
        var emaill     = $('#forgot-email').val();
		if(emaill.length >9){
		var url = "<?php echo site_url('Products/SendOTPby_email');?>";
		$("#sendsubmitotp").hide();
		$("#floader").show();
		$('#floader').html("<img src='<?php echo site_url();?>/progress.gif' width='40px'/>");	
    	$.ajax({
                url : url,
                method : "POST",
				dataType:"json",   
				data : {mobile: emaill},
				success: function(data){
					
					$("#floader").hide();
					if(data.msg=='seccess'){
			$("#fotp").hide();	
			$("#sendotp-email").show();	
			$("#otp-email").val(data.mail);	
					}
				
				
			console.log(data);
                   // $('#toatalprice').html(data.total);
                },
    error: function(){
      //  alert("failure");
    }
	
            });
		}else{
			$("#valid-fmail").show();
			
			return false;
			
		}		
			
	 });
		
      </script>

	  <script>
	 $('#OTP-send').click(function(){
		
        var mobile     = $('#otp-email').val();
        var otp     = $('#OTP').val();
		var url = "<?php echo site_url('Products/VerifyOTP');?>";
			
    	$.ajax({
                url : url,
                method : "POST",
				dataType:"json",   
				data : {mobile: mobile,otp:otp},
				success: function(data){
					if(data.msg=='Failed1'){
					$("#valid-otp_forgot").show();	
					}else{
					$("#sendotp-email").hide();
					$("#pass-email").val(mobile);
					$("#changepassword").show();
					}
			console.log(data);
                },
    error: function(){
    }
	
            });
			
	 });
		
      </script>
	  <script>
	 $('#ch-Password').click(function(){
		
        var password     	= $('#chng-password').val();
        var uemail     		= $('#pass-email').val();
        var password1     	= $('#cnfm-password').val();
		if(password != password1){
			$("#not-match").html("<span class='btn btn-danger'> Password not Matched </span>");
		return false;
		}
		
		
		var url = "<?php echo site_url('Products/Update_userpassword');?>";
			
    	$.ajax({
                url : url,
                method : "POST",
				dataType:"json",   
				data : {password: password,email:uemail},
				success: function(data){
					if(data.msg=='reset'){
						$("#not-match").html("<span class='btn btn-success'> Password Changed Succufully </span>");
					setTimeout(function() {   location.reload();}, 1000); 
					}else{
					
					}
			console.log(data);
                },
    error: function(){
    }
	
            });
			
	 });
		
      </script>
	  
    <script>
	 $('#login-button').click(function(){
        var email     = $('#login-uname').val();
        var password    = $('#login-password').val();
		var url = "<?php echo site_url('Products/ajaxlogin');?>";
			
    	$.ajax({
                url : url,
                method : "POST",
				dataType:"json",   
				data : {email: email,password: password},
				success: function(data){
					
				var arr = data.errors;
				var wrong = data.wrong;
				//for(var key in arr){  }
				if(arr){
				var eemail = arr.email;
				if(eemail){$("#lemail").css("border","1px red solid");}
				var epassword = arr.password;
				if(epassword){$("#lpassword").css("border","1px red solid");}
				}else if(wrong){
					notif({
				type: "error",
				msg: wrong,
				position: "right",
				width: 500,
				height: 60,
				autohide: true
			});
				}
				else{
					location.reload();
					//alert(data.message);
					//$('#configform')[0].reset();
	
					
				}
				
			console.log(data);
                   // $('#toatalprice').html(data.total);
                },
    error: function(){
        //alert("failure");
    }
            });
          });
      </script>	  
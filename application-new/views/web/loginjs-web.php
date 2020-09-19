 <script>
$(document).ready(function(){
 $('#valid-phone').hide();
 $('#valid-name').hide();
 $('#valid-mail').hide();
 $('#exist-lmail').hide();
 $('#valid-lmail').hide();
 $('#exist-mail').hide();
 $('#valid-pass').hide();
 $('#exist-phone').hide();
});
</script>
 <script>
$('#cphone').keypress(function(event) {
    if (((event.which != 46 || (event.which == 46 && $(this).val() == '')) ||
            $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
        event.preventDefault();
    }
}).on('paste', function(event) {
    event.preventDefault();
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
	   $('#valid-phone').show();
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
	var email = $('#login-uname').val();
	$('#exist-lmail').hide();
	$('#valid-lmail').show();
			
	if(isValidEmailAddress(email)) {
		$('#valid-lmail').hide();
		var url = "<?php echo site_url('Products/email_check');?>";
		$.ajax({
				url : url,
                method : "POST",
				//dataType:"json",   
				data : {email: email},
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
      //  alert("fail ajax");
    }
            });
		      
	   
    }else{
	$('#valid-mail').show();
	$("#eemail").css("border","1px red solid");
    $("#rg-button").attr("disabled", true);
	 return false;	
	}
	
	});
	/////////// End Login Email validation /////////////////


	
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
       // alert("fail ajax");
    }
            });
		      
	   
    }else{
		$('#valid-mail').show();
	$("#eemail").css("border","1px red solid");
    $("#rg-button").attr("disabled", true);
	 return false;	
	}
	
	});
	
	
	function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
    return pattern.test(emailAddress);
}

/////////// end email validation /////////////////	

	 $('#rg-button').click(function(){
		var mobile   = $('#cphone').val();
		var filter = /^[0-9-+]+$/;
		if(mobile.length < 9) {
		$("#ephone").css("border","1px red solid");	
		return false;}
		if(filter.test(mobile)){
			//alert(mobile);
		}else{
			return false;
		}


	
        var name     = $('#cname').val();
		if(name.length < 4) {
		$("#ename").css("border","1px red solid");
		return false;}
        var email    = $('#cemail').val();
		if(!isValidEmailAddress(email)) {
			return false;
		}
		var password = $('#cpassword').val();
		if(password.length < 6) {
		$("#epassword").css("border","1px red solid");	
		return false;}

		var url = "<?php echo site_url('Products/addajax');?>";
			
    	$.ajax({
                url : url,
                method : "POST",
				dataType:"json",   
				data : {name: name, email: email, mobile: mobile, password: password},
				success: function(data){
				var arr = data.errors;
				//for(var key in arr){  }
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
				}else{
					alert("Succusssfully Register");
					window.location.href = "<?php echo site_url('Restaurants');?>";
				}
				
			console.log(data);
                   // $('#toatalprice').html(data.total);
                },
    error: function(){
       // alert("failure");
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
					alert(wrong);
					$("#wrong-credentials").css("border","1px red solid");
				}
				else{
					window.location.href = "<?php echo site_url('Restaurants');?>";
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
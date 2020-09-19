    <script>
	 $('#rg-button').click(function(){
        var name     = $('#cname').val();
        var email    = $('#cemail').val();
		var mobile   = $('#cphone').val();
		var password = $('#cpassword').val();
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
				if(ename){$("#ename").css("border","1px red solid");}
				var eemail = arr.email;
				if(eemail){$("#eemail").css("border","1px red solid");}
				var emobile = arr.mobile;
				if(emobile){$("#ephone").css("border","1px red solid");}
				var epassword = arr.password;
				if(epassword){$("#epassword").css("border","1px red solid");}
					//alert("Succusssfully Register");
				}else{
					$('#configform')[0].reset();
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
					notif({
				type: "error",
				msg: wrong,
				position: "center",
				width: 500,
				height: 60,
				autohide: true
			});
					$("#wrong-credentials").css("border","1px red solid");
				}
				else{
					location.reload();
					//$('#configform')[0].reset();
	
					
				}
				
			console.log(data);
                   // $('#toatalprice').html(data.total);
                },
    error: function(){
       notif({
				type: "error",
				msg: "<span style='color:#fff'>Oops failure will back to you</span>",
				position: "center",
				width: 500,
				height: 60,
				autohide: true
			});
    }
            });
          });
      </script>	  
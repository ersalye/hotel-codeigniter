    <div class="aside">
         <div class="aside-header">
            <span class="close" data-dismiss="aside" aria-hidden="true">&times;</span>
         </div>
         <div class="aside-contents">
            <div class="limiter">
               <div class="container-login100">
                  <div class="wrap-login100">
                     <form class="login100-form validate-form">
                        <span class="login100-form-title p-b-30">
                       Edit Address
                      
                       
                        </span>
                        <div id="edit-title" class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                           <input id="id" class="input100" type="hidden" name="address_id">
                           <input id="title" class="input100" type="text" name="title">
							 <span class="focus-input100"></span>
							 <span class="label-input100">Address Title</span>
							 <span id="valid-title" class="err-valid">Enter minimum 4 char</span>
                        </div>
                        <div id="edit-address" class="wrap-input100 validate-input" data-validate="Password is required">
						<input id="address" class="input100" type="text" name="address">
						 <span class="focus-input100"></span>
						 <span class="label-input100">Address</span>
						  <span id="valid-address" class="err-valid">Enter minimum 4 char</span>
                        </div>
                        <div id="edit-landmark" class="wrap-input100 validate-input" data-validate="Password is required">
						<input id="landmark" class="input100" type="text" name="landmark">
						 <span class="focus-input100"></span>
						 <span class="label-input100">Landmark</span>
						 <span id="valid-landmark" class="err-valid">Enter minimum 4 char</span>
                        </div>
                        <div id="edit-Pincode" class="wrap-input100 validate-input" data-validate="Password is required">
						<input id="pincode" class="input100" type="text" name="pincode">
						 <span class="focus-input100"></span>
						 <span class="label-input100">Pincode</span>
						 <span id="valid-pincode" class="err-valid">Enter minimum 4 char</span>
                        </div>

                        <div class="container-login100-form-btn">
                           <button type="button" id="Form-address-button" class="login100-form-btn">
                           SAVE ADDRESS & PROCEED
                           </button>
                        </div>
                     </form>
                     <div class="login100-more" style="background-image: url('<?php echo base_url(); ?>web-assets/images/bg-01.jpg');">
                     </div>
                  </div>
               </div>
            </div>
            
         </div>
      </div>
	<script>
	 $('.edit-address').click(function(){
        var p_id    = $(this).data("pid");
		var url = "<?php echo site_url('Products/getc_adddress/');?>"+ p_id;
			
    	$.ajax({
                url : url,
                method : "POST",
				dataType:"json",   
				success: function(data){
				var arr = data.errors;
				//for(var key in arr){  }
				$("#id").val(data.address[0].id);
				$("#title").val(data.address[0].title);
				$("#address").val(data.address[0].address);
				$("#landmark").val(data.address[0].landmark);
				$("#pincode").val(data.address[0].pincode);
				
			console.log(data.address);
                   // $('#toatalprice').html(data.total);
                },
    error: function(){
       // alert("failure");
    }
            });
          });
      </script>
	  <script>
	    $('#valid-title').hide();
		$('#valid-address').hide();		 
		$('#valid-landmark').hide();		 
		$('#valid-pincode').hide();		

//////////////////////////		
		$("#title").keyup(function (e) {	
		var title    = $('#title').val();		
			if(title.length < 4) {
			
			$("#edit-title").css("border","1px red solid");
			$('#valid-title').show();
			return false;
			}else{
			//alert('sdf');
			$("#edit-title").css("border","1px #e6e6e6 solid");
			$('#valid-title').hide();
			}
			});
	/////////////////////////
		$("#address").keyup(function (e) {	
		var address    = $('#address').val();		
			if(address.length < 4) {
				
			$("#edit-address").css("border","1px red solid");
			$('#valid-address').show();
			return false;
			}else{
			//alert('sdf');
			$("#edit-address").css("border","1px #e6e6e6 solid");
			$('#valid-address').hide();
			}
			});
/////////////////////////
		$("#landmark").keyup(function (e) {	
		var landmark    = $('#landmark').val();		
			if(landmark.length < 4) {
			
			$("#edit-landmark").css("border","1px red solid");
			$('#valid-landmark').show();
			return false;
			}else{
			//alert('sdf');
			$("#edit-landmark").css("border","1px #e6e6e6 solid");
			$('#valid-landmark').hide();
			}
			});
////////////////////////
			$("#pincode").keyup(function (e) {	
		var pincode    = $('#pincode').val();		
			if(pincode.length < 4) {
			
			$("#edit-Pincode").css("border","1px red solid");
			$('#valid-pincode').show();
			return false;
			}else{
			//alert('sdf');
			$("#edit-Pincode").css("border","1px #e6e6e6 solid");
			$('#valid-pincode').hide();
			}
			});
			
			
	/////////////////////////////////////////////////////////////////////		
	 $('#Form-address-button').click(function(){
		
		var p_id     = $('#id').val();
        var title    = $('#title').val();
		
		var address  = $('#address').val();
		var landmark = $('#landmark').val();
		var pincode  = $('#pincode').val();
		if(title.length < 4) {return false;}
		if(address.length < 4) {return false;}
		if(landmark.length < 4) {return false;}
		if(pincode.length < 4) {return false;}
		//alert(p_id);
      	var url = "<?php echo site_url('Products/update_adddress/');?>"+ p_id;
	
    	$.ajax({
                url : url,
                method : "POST",
				//dataType:"json",   
				data : {p_id: p_id, title: title, address: address, landmark: landmark, pincode: pincode},
				success: function(data){
							
					location.reload();			
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
	 $('.delete-address').click(function(){
        var p_id    = $(this).data("pid");
		alert(p_id);
		var url = "<?php echo site_url('Products/delete_adddress/');?>"+ p_id;
			
    	$.ajax({
                url : url,
                method : "POST",
				dataType:"json",   
				success: function(data){
				
				location.reload();
			console.log(data);
                  
                },
    error: function(){
        //alert("failure");
    }
            });
          });
      </script>	  
	  
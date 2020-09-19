    <div class="aside">
         <div class="aside-header">
		 <a  href="<?php echo base_url(); ?>"> <img class="img-rounded" src="<?php echo base_url(); ?>web-assets/images/storkks_logo_dark.png" alt=""> </a>
            <span class="close" data-dismiss="aside" aria-hidden="true">&times;</span>
         </div>
         <div class="aside-contents">
            <div class="limiter">
               <div class="container-login100">
                  <div class="wrap-login100">
				  <style>
				  .view-order{
					  width:100%;
					  background-color:transparent;
					  border:0;
					  margin:0;
				  }
				  .down-arr{
					     padding: 10px 0 5px 0;
				  }
				  .aside-contents .wrap-login100 .view-order{
	padding: 0px 20px !important;
}
				  </style>
				  					<div class="pricing-box view-order">

					<h5 class="text-left">Order No : <span id="orderid"></span> <span id="inviceorder"></span></h5>
					<br><p class="text-left"><i class="fa fa-map-marker" aria-hidden="true"></i> <b><span id="shopname"></span></b></p>
					<p class="text-left" style="line-height: 14px;"><small id="shop_address"></small></p>
					<p class="text-left down-arr"><i class="fa fa-long-arrow-down" aria-hidden="true"></i></p>
					<p class="text-left"><i class="fa fa-map-marker" aria-hidden="true"></i> <b>
					<span id="address_title"></span></b></p>
					<p class="text-left" style="line-height: 14px;"><small id="address_description"></small> <br><small id="address_landmark"> </small> <br><small id="address_pincode"></small></p>
					
					<ul id="orderinformation" class="order-d">
					

					</ul>
					<ul class="tax-sec">
					<li>Total <span class="pull-right">$ 
					<span id="items_total"></span></span>
					</li>
					<li>Offer Discount <span class="pull-right">- $ <span id="as-dicount">1.50									  </span></span></li>
					<li>Delivery Charges <span class="pull-right">$ <span id="adeliverc">5.00</span></span></li>
					<li>GST<span class="pull-right"> $ <span id="agstprc">1.57</span></span></li>

					<li class="total-a"><b>To Pay <span class="pull-right"><strong>$ <span id="aordertotal">80.07</span></strong></span></b> </li>

					</ul>





					</div>

                     <form class="editaddress login100-form validate-form">
                        <h3 class="login100-form-title p-b-10">
                       Edit Address
                      
                       
                        </h3>
                        <div id="edit-title" class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                           <input id="ad_id" class="input100" type="hidden" name="address_id">
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
						<input id="pincode" class="input100" type="tel" maxlength="6" name="pincode">
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
	  <input type="text" id="address_id" name="address_id" value="51">
	  <input type="text" id="rshop_id" name="rshop_id" value="28">
	<script>
	
$(document).on('click', '.edit-address', function(){ 		 
		
        var p_id    = $(this).data("pid");
		var url = "<?php echo site_url('Products/getc_adddress/');?>"+ p_id;
			
    	$.ajax({
                url : url,
                method : "POST",
				dataType:"json",   
				success: function(data){
	//				 alert(data.address[0].id);
				
				//for(var key in arr){  }
				$("#ad_id").val(data.address.id);
				$("#title").val(data.address.title);
				$("#address").val(data.address.address);
				$("#landmark").val(data.address.landmark);
				$("#pincode").val(data.address.pincode);
				
			console.log(data);
                   // $('#toatalprice').html(data.total);
                },
    error: function(){
        //alert("failure");
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
		
		var p_id     = $('#ad_id').val();
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
				dataType:"json",   
				data : {p_id: p_id, title: title, address: address, landmark: landmark, pincode: pincode},
				success: function(data){
					$('#adressids').html('');
					$.each(data.address, function (key, data) {	
					
					$('#adressids').append('<div class="col-sm-6"><div class="deliver"><div class="home-icon"><i class="fa fa-home" aria-hidden="true"></i></div><div><div class="add-title">'+data.title +'</div><div class="add-sec">'+data.address +'</div><button type="button" data-pid="'+data.id +'" id="edit_'+data.id +'" class="btn edit-address theme-btn btn-sm" onclick="$('+"'.aside'"+').asidebar('+"'open'"+')" style="margin-right: 3px;">Edit</button><button type="button" data-pid="'+data.id +'" id="edits_'+data.id +'" class="delete-address btn theme-btn btn-sm">Delete</button></div></div></div>');

					
					 console.log(data.id);
					 
					});
			console.log(data);
			 $(".close").trigger("click");
                },
    error: function(){
       // alert("failure");
    }
            });
          });
      </script>
	<script>
	 $('.getinvoice').click(function(){
	$(".editaddress").hide();
	$(".pricing-box").show();
	
	 });
	 $('.edit-address').click(function(){
	$(".pricing-box").hide();	
	$(".editaddress").show();	
	 });
	 

$(document).on('click', '.delete-address', function(){ 	
	var p_id    = $(this).data("pid");
	var url = "<?php echo site_url('Products/delete_adddress/');?>"+ p_id;
			
    	$.ajax({
                url : url,
                method : "POST",
				dataType:"json",   
				success: function(data){
				$('#adressids').html('');
					$.each(data.address, function (key, data) {	
					
					$('#adressids').append('<div class="col-sm-6"><div class="deliver"><div class="home-icon"><i class="fa fa-home" aria-hidden="true"></i></div><div><div class="add-title">'+data.title +'</div><div class="add-sec">'+data.address +'</div><button type="button" data-pid="'+data.id +'" id="edit_'+data.id +'" class="btn edit-address theme-btn btn-sm" onclick="$('+"'.aside'"+').asidebar('+"'open'"+')" style="margin-right: 3px;">Edit</button><button type="button" data-pid="'+data.id +'" id="edits_'+data.id +'" class="delete-address btn theme-btn btn-sm">Delete</button></div></div></div>');

					
					 console.log(data.id);
					 
					});
			console.log(data);
			
			
                  
                },
    error: function(){
        //alert("failure");
    }
            });
          });
      </script>	  
	  <script>
$(document).ready(function(){
    $(".getinvoice").click(function(){
		$('#shopname').html('');
		$('#shop_address').html('');
		$('#address_title').html('');
		$('#address_description').html('');
		$('#address_landmark').html('');
		$('#address_pincode').html('');
		$('#orderinformation').html('');
		$('#orderid').html('');
		$('#items_total').html('');
		$('#as-dicount').html('');
		$('#adeliverc').html('');
		$('#agstprc').html('');
		$('#aordertotal').html('');
       var orderid = $(this).attr("orderid");
       var orderaddresid = $(this).attr("orderaddresid");
       var ordershopid = $(this).attr("ordershopid");
	   var url = "<?php echo site_url('Products/Invoiceorder/');?>"+ orderid+'/'+orderaddresid+'/'+ordershopid;
		$.ajax({
                url : url,
                method : "POST",
				dataType:"json",   
				success: function(data){
				
				$.each( data.orderdetails, function( index, value ){
					
				$('#orderinformation').append('<li >'+value.item_name +'<span class="pull-right"><span>'+ value.qty +'</span> X <span>$'+ value.item_price +'</span></span></li>');
				
				console.log(value.itemid);
								});
				$('#orderid').html(data.orders.o_id);
				$('#items_total').html(data.orders.items_total);
				$('#as-dicount').html(data.orders.r_discount);
				$('#adeliverc').html(data.orders.delivery_price);
				$('#agstprc').html(data.orders.gst);
				$('#aordertotal').html(data.orders.total);$('#address_title').html(data.addresss.title);	
				$('#address_description').html(data.addresss.address);	
				$('#address_landmark').html(data.addresss.landmark);	
				$('#address_pincode').html(data.addresss.pincode);	
				$('#shopname').html(data.ShopRows.name);
				$('#shop_address').html(data.ShopRows.address);	
				$('#inviceorder').html('<a href="<?php echo base_url('Products/Invoicepdf/'); ?>'+data.orders.o_id+'" class="pull-right text-primary"><b>INVOICE</b></a>');
				
				console.log(data);
                },
			error: function(){
     console.log("failure");
			}
            });
			

		
	  
    });
});
</script>


    <div class="aside aside_scroll">
         <div class="aside-header">
		 <a  href="<?php echo base_url(); ?>"> <img class="img-rounded" src="<?php echo base_url(); ?>web-assets/images/storkks_logo_dark.png" alt=""> </a>
            <span class="close" data-dismiss="aside" aria-hidden="true">&times;</span>
         </div>
		 <style>
		.coupon-sec .theme-btn{
	width: auto;
    height: auto;
    padding: 7px 10px;
    font-size: 14px;
		 }
		 .coupon-sec{
			     padding: 30px !important;
		 }
		 </style>
         <div class="aside-contents coupon-sec">
		 
		 <div>
   <style>
   .coupon_input {
    position: relative;
    padding-bottom: 20px;
    display: block;
}
.coupon_input-in {
    border: 1px solid #d4d5d9;
    padding: 0;
    display: block;
    position: relative;
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
}
.c_apply {
    position: absolute;
    top: 1px;
    right: 0;
    width: 110px;
    background: #fc8019;
    color: #fff !important;
    height: 50px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    cursor: pointer;
    font-weight: 600;
}
.coupon_input-in input{
	background-color: transparent;
    line-height: normal;
    border: none;
    outline: none;
    width: 100%;
    margin: 0;
    padding: 0 20px;
    box-shadow: none;
    box-sizing: border-box;
    border-radius: 0;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-weight: 500;
	height: 50px;
    padding-top: 0;
    font-size: 1.15rem;
}
.code_sec {
    border: 1px solid #e9e9eb;
    padding: 30px 0 30px 30px;
    margin-bottom: 30px;
}
h2.a_h2{
    color: #7e808c;
    font-weight: 600;
    margin: 0 0 15px;
    font-size: 12px;
    text-transform: uppercase;
}
.apply_code {
    width: 100%;
    text-decoration: none;
    display: inline-block;
    text-align: center;
    border: none;
    line-height: 50px;
    font-size: 14px;
    height: 50px;
    padding: 0 2rem;
    color: #fc8019;
    letter-spacing: 0;
    border: 1px solid #fc8019;
    margin-top:15px;
    line-height: 36px;
    width: auto;
    height: 36px;
    padding: 0 15px;
    outline: none;
    min-width: 120px;
    background: #fff;
	cursor: pointer;
}
.use_code{
	width: 50%;
    border: 2px dotted #fc8019;
    background: #f5f5f5;
    text-align: center;
    padding: 5px;
    margin-bottom: 10px;
}
.aside.in{
	height: 100%;
    overflow: auto;
}

   </style>
   <div class="coupon_input">
      <div class="coupon_input-in">
         <input class="_381fS _1oTLG" id="specialcpn" type="text" name="specialcpn" placeholder="Enter coupon code" value="">
         <div class="_2EeI1 _26LFr"></div>
         <label class="_1Cvlf _2tL9P"></label>
      </div>
      <div class="c_apply cupon_code">APPLY</div>
   </div>
</div>





            <!--<div class="row">
			<div class="col-xs-8">
			<input class="form-control" type="text" placeholder="Enter Coupon Code">
			</div>
			<div class="col-xs-4"><button class="btn theme-btn btn-lg">Search food</button></div>
			</div>-->
<h2 class="a_h2">Available Coupons</h2>
			<form action="<?php echo base_url('Products/Offer_applay'); ?>" method="POST">
			
			
			<?php  foreach ($promocodes as $items) { ?>
			<input class="form-control" id="cupon_id_<?php echo $items['id']; ?>" name="cupon_id" value="<?php echo $items['id']; ?>" type="hidden">
			<input class="form-control" id="cupon_type_<?php echo $items['id']; ?>" name="cupon_type" value="<?php echo $items['promocode_type']; ?>" type="hidden">	
			<input class="form-control" id="cupon_discount_<?php echo $items['id']; ?>" name="cupon_discount" value="<?php echo $items['discount']; ?>" type="hidden">
			
			
			
			<div class="code_sec">

<div class="use_code">
<?php  echo $items['promo_code']; ?>
</div>
<div class="get_free">Get Free Delivery</div>
<p><?php echo $items['description']; ?></p>
<input class="form-control cupon_code apply_code" name="cupon_code" value="APPLY COUPON" type="button" offerid="<?php echo $items['id']; ?>"; promo_code="<?php echo $items['promo_code']; ?>"; id="cupon_code_<?php echo $items['id']; ?>" placeholder="Enter Coupon Code">
</div>
			
			
			<?php // print_r($items);
			} ?><br>
            </form>
         </div>
      </div>
	  <script>
$('.cupon_code').click(function(){
	 var offer_id = $(this).attr('offerid');
	var userid = "<?php echo $this->session->userdata('customer_id'); ?>";
	var cupon_id = $('#cupon_id_'+offer_id).val();
	var specialcpn = $('#specialcpn').val();
	var cupon_codee = $(this).attr('promo_code');
	if(cupon_codee){
		var cupon_code = cupon_codee;
		$('#specialcpn').val('');
	}else{
		
var cupon_code = specialcpn;		
	}
	alert(cupon_code);
	var cupon_discount = $('#cupon_discount_'+offer_id).val();
	var cupon_type = $('#cupon_type_'+offer_id).val();
	var url = "<?php echo site_url('Products/Verifyoffer');?>";
		    	$.ajax({
                url : url,
                method : "POST",
				//dataType:"json",   
				data : {userid: userid, cupon_code: cupon_code,cupon_id:cupon_id,cupon_discount:cupon_discount,cupon_type:cupon_type},
				success: function(data){
					//console.log(data);
				if(data=='0'){
					 location.reload();
					}else if(data=='2'){
				notif({
				type: "error",
				msg: "<span style='color:#fff'>Coupon Not valid</span>",
				position: "right",
				width: 500,
				height: 60,
				autohide: true
			});	
					}else if(data=='1'){
						notif({
				type: "error",
				msg: "<span style='color:#fff'>Coupon already used</span>",
				position: "right",
				width: 500,
				height: 60,
				autohide: true
			});
					}
			
					console.log(data);
                 },
    error: function(){
       console.log("ajax failure");
    }
            });
	
});
</script>
	
	 
		  
	  
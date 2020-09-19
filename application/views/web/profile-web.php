<?php $this->view('web/header'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>web-assets/css/notifIt.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>web-assets/css/jquery.confirm-1.1.css">
      <div class="page-wrapper">
            <!-- top Links -->
            <div class="top-links">
               <div class="container">
                  <ul class="row links">
                     <li class="col-xs-12 col-sm-3 link-item active"><span>1</span><a href="<?php echo base_url(); ?>">Choose Your Location</a></li>
                     <li class="col-xs-12 col-sm-3 link-item active"><span>2</span><a href="<?php echo base_url('Restaurants'); ?>">Choose Restaurant</a></li>
                     <li class="col-xs-12 col-sm-3 link-item active"><span>3</span><a >Select your menu</a></li>
                     <li class="col-xs-12 col-sm-3 link-item"><span>4</span><a >Order and Pay online</a></li>
                  </ul>
               </div>
            </div>
            <!-- end:Top links -->
            <!-- start: Inner page hero -->
            <section class="inner-page-hero bg-image" data-image-src="<?php echo base_url(); ?>web-assets/images/profile-banner.jpg">
               <div class="profile">
                  <div class="container">
                     <div class="row">
                        <div class="col-xs-12 col-sm-12  col-md-3 col-lg-3 profile-img">
                           <div class="image-wrap">
                              <figure><img src="<?php echo base_url(); ?>uploads/images/<?php echo $shops['shop_logo']; ?>" alt="Profile Image"></figure>
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 profile-desc">
                           <div class="pull-left right-text white-txt">
                              <h6><?php echo $shops['name']; ?></h6>
                              <a class="btn btn-small btn-green"><?php 
							    $t_date = Date("H:i");
							 
								 $tday = date('l');
							    //print_r($timings);
							   if($tday == "Monday"){
							   $tone = $timings[0]['m_morning_open'];
							   $ttwo = $timings[0]['m_morning_close'];
							   $tth = $timings[0]['m_evening_open'];
							   $tf = $timings[0]['m_evening_close'];
							   }
							   if($tday == "Tuesday"){
							   $tone = $timings[0]['t_morning_open'];
							   $ttwo = $timings[0]['t_morning_close'];
							   $tth = $timings[0]['t_evening_open'];
							   $tf = $timings[0]['t_evening_close'];
							   }
							   if($tday == "Wednesday"){
								$tone = $timings[0]['w_morning_open'];
							    $ttwo = $timings[0]['w_morning_close'];
							    $tth = $timings[0]['w_evening_open'];
							    $tf = $timings[0]['w_eveningclose'];
							   }
							   if($tday == "Thursday"){
								$tone = $timings[0]['th_morning_open'];
							    $ttwo = $timings[0]['th_morning_close'];
							    $tth = $timings[0]['th_evening_open'];
							    $tf = $timings[0]['th_evening_close'];
							   }
							   if($tday == "Friday"){
								   $tone = $timings[0]['f_morning_open'];
							   $ttwo = $timings[0]['f_morning_close'];
							   $tth = $timings[0]['f_evening_open'];
							   $tf = $timings[0]['f_evening_close'];
							   }
							   if($tday == "Saturday"){
								   $tone = $timings[0]['s_morning_open'];
							   $ttwo = $timings[0]['s_morning_close'];
							   $tth = $timings[0]['s_evening_open'];
							   $tf = $timings[0]['s_evening_close'];
							   }
							   if($tday == "Sunday"){
							   $tone = $timings[0]['sun_morning_open'];
							   $ttwo = $timings[0]['sun_morning_close'];
							   $tth = $timings[0]['sun_evening_open'];
							   $tf = $timings[0]['sun_evening_close'];
							   }
							   if($shops['everyday'] == "ALL"){
							    $tone = $shops['m_resturant_opens'];
							    $ttwo = $shops['m_resturant_close'];
							    $tth = $shops['e_resturant_opens'];
							    $tf = $shops['e_resturant_close'];
							   }
							    if($shops['status']== "active"){
									
							  if( ($t_date >= $tone && $t_date <= $ttwo) || ($t_date >= $tth && $t_date <= $tf) ){
								  echo "Open";
							  
							  }else{
								   echo "Close";
								}}else{
									if($shops['status']=="onboarding"){
										echo "On Boarding";
									}else{
										echo $shops['status'];
									}
								}
							//  if(count($timings)>0){ echo "Open";}else{ echo "Close";} 
							?></a>
                              <p><?php  $shops['Cuisine']; 
							  $categories = '';
							$cats = explode(",", $shops['Cuisine']);
							$result = '';
							foreach($cats as $cat) {
								 $cat = trim($cat);
								
									$CI =& get_instance();
									$cus = $CI->Cuisines($cat) ;
									$result .= $cus['name'].", ";
								
							}
							$result = rtrim($result,', ');
							echo $result.'.';
							
							?>
							</p>
                              <ul class="nav nav-inline">
                                 <li class="nav-item"> <a class="nav-link active" ><i class="fa fa-check"></i> Min $ <?php echo $shops['min_amount']; ?></a> </li>
                                 <li class="nav-item"> <a class="nav-link"><i class="fa fa-motorcycle"></i> <?php echo $shops['estimated_delivery_time']; ?> min</a> </li>
                                 <li class="nav-item ratings">
                                    <a class="nav-link" href="#"> <span>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    </span> </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
						<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
     <?php if($shops['min_amount_offer']){ ?> <fieldset>
  <legend> <span><i class="fa fa-percent" aria-hidden="true"></i></span> Offer</legend>
 <?php echo $shops['discount']; ?> % <?php if($shops['offertitle']){
									 echo $shops['offertitle']; }else{ echo "orders above "; } ?>  $ <?php echo $shops['min_amount_offer']; ?>
	 </fieldset><?php }?>
      </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- end:Inner page hero -->
            
            <div class="container m-t-30">
               <div class="row">
                  <div class="col-xs-12 col-md-2 col-lg-2 stickky">
                     <div class="sidebar clearfix m-b-20">
                        <div class="main-block">
                           
                           <ul>
						     <?php foreach($category as $cat){ ?>
                              <li><a href="#<?php echo $cat['id']; ?>" class="smth scroll"><?php echo $cat['cat_name']; ?>
							  </a></li>
							 <?php }?>
                              
                           </ul>
                           <div class="clearfix"></div>
                        </div>
                        <!-- end:Sidebar nav -->
                        
                     </div>
                     <!-- end:Left Sidebar -->
                    
                  </div>
                  <div class="col-xs-12 col-md-5  col-lg-6 p-border">
				  <div>
				  <?php foreach($category as $cat){ ?>
				  <?php  
									$idd = $cat['id']; 
									$rid = $shops['id']; 
									$CI =& get_instance();
									$productslist = $CI->products($idd,$rid) ;
												
													?>
                     <div class="menu-widget m-b-30" id="<?php echo $cat['id']; ?>">
                        <div class="widget-heading">
						
                           <h3 class="widget-title text-dark">
                              <?php echo $cat['cat_name']; ?> (<?php echo count($productslist); ?> Items) 
							  <button class="btn btn-link pull-right arrows" data-toggle="collapse" data-target="#popular<?php echo $cat['id']; ?>" aria-expanded="true">
                              <i class="fa fa-angle-right pull-right"></i>
                              <i class="fa fa-angle-down pull-right"></i>
                              </button>
                           </h3>
                           <div class="clearfix"></div>
                        </div>
                        <div class="collapse in" id="popular<?php echo $cat['id']; ?>" >
						
													<?php 
													//print_r($productslist); 
													foreach($productslist as $prd){ ?>
                           <div class="food-item white">
                              <div class="row">
                                 <div class="col-xs-12 col-sm-12 col-lg-8">
                                    <div class="rest-logo pull-left">
                                       <a class="restaurant-logo pull-left" ><img src="<?php echo base_url(); ?>uploads/images/<?php echo $prd['product_image'];?>" alt="Food logo"></a>
                                    </div>
                                    <!-- end:Logo -->
                                    <div class="rest-descr">
                                       <h6><a >	<?php //print_r($prd);
									   $open_m = $prd['m_product_opens'];
									   $open_e = $prd['m_product_close'];
									   $close_m = $prd['e_product_opens'];
									   $close_e = $prd['e_product_close'];
									   
									   
									   echo $prd['product_name'];
									
									   ?></a>
									
									   </h6>
                                      <div><span class="price pull-left">$ <?php echo number_format($prd['price'],2); ?></span></div>
                                    </div>
                                    <!-- end:Description -->
                                 </div>
                                 <!-- end:col -->
                                 <div class="col-xs-12 col-sm-12 col-lg-4 pull-right item-cart-info"> 
<?php 
if( ($t_date >= $tone && $t_date <= $ttwo) || ($t_date >= $tth && $t_date <= $tf) ){ 
if($prd['status']=='Enabled'){ 
?>
								 
								 <?php if($prd['addons']){ ?>
	<a id="addonbtn_<?php echo $prd['id']; ?>" data-toggle="modal" data-target="#order-modal<?php echo $prd['id']; ?>" class="btn-add addonbtn pull-right btn-add-id">ADD +</a>	
								 <?php
								 $btnupd = 'btnupdadon';
								 }else{ ?>
	<a id="add_<?php echo $prd['id']; ?>" value="<?php echo $prd['id']; ?>" class="btn-add pull-right btn-add-id" data-productid="<?php echo $prd['id'];?>" data-productname="<?php echo $prd['product_name'];?>" data-productprice="<?php echo $prd['price'];?>"> ADD <?php echo $prd['addons'];?></a>							 
								 <?php
								 $btnupd = 'btnupd';

								 }?>								 
			
			<div class="stepper-widget">
			  <button type="button" data-pidi="D" data-pid="<?php echo $prd['id'];?>" data-p_name="<?php echo $prd['product_name'];?>" data-p_price="<?php echo $prd['price'];?>" data-addon="<?php echo $prd['addons'];?>" class="js-qty-down btn <?php echo $btnupd; ?> dec_<?php echo $prd['id']; ?>"><i class="fa fa-minus" aria-hidden="true"></i></button>
			  <input id="qnty_<?php echo $prd['id']; ?>" type="text" class="js-qty-input form-control qty_<?php echo $prd['id']; ?>" value="1" readonly/>
			  <button type="button" data-pidi="I" data-pid="<?php echo $prd['id'];?>" data-p_name="<?php echo $prd['product_name'];?>" data-p_price="<?php echo $prd['price'];?>" data-addon="<?php echo $prd['addons'];?>" class="js-qty-up btn <?php echo $btnupd; ?> inc_cart_<?php echo $prd['id']; ?>"><i class="fa fa-plus" aria-hidden="true"></i></button>
			</div>
			
			<?php }else{ ?>
									
									 
							 <div class="not_avail"> Not Avilable </div>
					
<?php }}else{?>
 <div class="not_avail"> Closed </div>
<?php } ?>
								 </div>
                              </div>
							 
                              <!-- end:row -->
                           </div>
						   <div class="modal fade" id="order-modal<?php echo $prd['id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
              
				<form id="addonsform_<?php echo $prd['id'];?>">
			  <div class="modal-body cart-addon">
      <div class="custom-item p-t-0">
      <div class="row">
      <div class="col-sm-12"><h3 class="title-text"><?php echo $prd['product_name'];?></h3></div>
      
      </div>
      </div>
                  <div class="food-item white">
                     <div class="row">
                        <div class="col-xs-12 col-sm-6 col-lg-6">
                           
                          
                           <div class="addon-s">
                        
<?php $arr = $prd['addons_cat'];

  $aaa = explode( ',', $arr );
  foreach($aaa as $key=>$value) {?>
  <?php 		$CI =& get_instance();
				$sids = $CI->getAddonsbycat($value);	
				?>
	<p class="m-b-10"><b><?php 
	$catadnsid = $sids['cat_addon'];
	//echo $sids['cat_addon'];
	$CI =& get_instance();
	$catadons = $CI->getAddonsbycategory($catadnsid);				
	echo $catadons['addon_cat_name'];
	?></b></p>
	<?php
	$arrrr = $prd['addons'];
	$aaa = explode( ',', $arrrr );
	foreach($aaa as $key=>$valueee) {
				$CI =& get_instance();
				$sid = $CI->Addonsbyproduct($valueee,$catadnsid);
				if(!empty($sid)){
	 ?>
		
		
		
		<div class="form-group">
		<label class="custom-control custom-radio">
		 <input id="adnpricei_<?php echo $value; ?>"  type="hidden" value="<?php echo $sid['price']?>"> 
		<input id="addonid_<?php echo $sid['id'] ?>" name="radioadn" type="checkbox" prodid="<?php echo $sid['id']; ?>" productidd="<?php echo $prd['id']; ?>" pricval="<?php echo $sid['price']; ?>" value="<?php echo $value;?>" class="ckid custom-control-input">
		<span class="custom-control-indicator"></span>
		<span class="custom-control-description">
		<?php	echo $sid['addon_name'];		?>
		
		</span>
		<span class="addon-price"> $<?php echo $sid['price']; ?></span>
		</label>
		</div>
  <?php }}}?>
                             
       <input id="prid_<?php echo $prd['id']; ?>" name="prid" type="hidden" value="<?php echo $prd['id']; ?>">  
       <input id="prname_<?php echo $prd['id']; ?>" name="prname" type="hidden" value="<?php echo $prd['product_name']; ?>">  
       <input id="prprice_<?php echo $prd['id']; ?>" name="prprice" type="hidden" value="<?php echo $prd['price']; ?>">  
                        
                           </div>
                           
                        </div>
                        
                     </div>
                     <!-- end:row -->
                  </div>
                 
                
                 
                 
                 
               </div>
               <div class="modal-footer">
			   <div class="col-sm-12">
                  <span class="addon-t">Total : $<input type="button" id="itemprice<?php echo $prd['id']; ?>"  value="<?php echo $prd['price']; ?>"></span>
				  <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                  <div id="<?php echo $prd['id']; ?>" class="addonsbumit btn theme-btn">ADD TO CART</div>
				  </div>
               </div>
			   </form>
            </div>
         </div>
      
       
        
       
        
       
    </div>
													<?php }?>
                           <!-- end:Food item -->
                          
                           <!-- end:Food item -->
                           
                           <!-- end:Food item -->
                        </div>
                        <!-- end:Collapse -->
                     </div>
                     <!-- end:Widget menu -->
					 
					 
				  <?php } ?>
					 
                    
                     <!-- end:Widget menu -->
                     
                     <!--/row -->
					 </div>
                  </div>
                  <!-- end:Bar -->
                  <div class="col-xs-12 col-md-5 col-lg-4 stickky">
                     <div class="">
                        <div class="widget widget-cart">
                           <div class="widget-heading">
                              <h3 class="widget-title text-dark">
                                 Your Shopping Cart
                              </h3>
                              <div class="clearfix"></div>
                           </div>
						   <div class="" id="style-7">
                           <div class="order-row bg-white">
                              <div class="widget-body">
							  <?php $totalbl = $this->cart->total() ?>
                                 <!-- <div class="title-row">Pizza Quatro Stagione <a href="#"><i class="fa fa-trash pull-right"></i></a></div> -->
                                  <div id="detaill_cart">
								   <?php echo number_format($totalbl,2);?>
								  </div>
                              </div>
                           </div>
                           
						   
						   </div>
                           <!-- end:Order row -->
                          
                           <div class="widget-body">
                              <!--<div class="price-wrap row">
							  <div class="col-xs-8"><p>TOTAL</p></div>
							  <div class="col-xs-4"><h3 class="value"><strong>$ <span id="toatal_price"><?php echo $this->cart->total(); ?></span></strong></h3></div>
                              
                              </div>-->
							  <div class="row">
							  <div class="col-xs-12">
							  <button id="btn-ckut" type="button" class="btn btn-block theme-btn">CHECKOUT</button>

							  </div>
							  
							  </div>
                           </div>
                        </div><div id="success_message" >
                     </div>
                  </div>
                  <!-- end:Right Sidebar -->
               </div>
               <!-- end:row -->
            </div>
			 
	<style>
   .custom-item{
       padding: 20px 0;
    border-bottom: 1px dotted #ccc;
 margin-bottom:15px;
   }
   .addon-s .form-group{
   margin-bottom:10px;
   }
   .custom-control-indicator{
   top: 1px;
   }
   .modal-body{
       padding: 15px 25px;
   }
   </style>
	</div>
            <!-- end:Container -->
            <section class="app-section">
               <div class="app-wrap">
                  <div class="container">
                     <div class="row text-img-block text-xs-left">
                        <div class="container">
                           <div class="col-xs-12 col-sm-6 hidden-xs-down right-image text-center">
                              <figure> <img src="<?php echo base_url(); ?>web-assets/images/app.png" alt="Right Image"> </figure>
                           </div>
                           <div class="col-xs-12 col-sm-6 left-text">
                              <h3>The Best Food Delivery App</h3>
                              <p>Now you can make food happen pretty much wherever you are thanks to the free easy-to-use Food Delivery &amp; Takeout App.</p>
                              <div class="social-btns">
                                 <a href="#" class="app-btn apple-button clearfix">
                                    <div class="pull-left"><i class="fa fa-apple"></i> </div>
                                    <div class="pull-right"> <span class="text">Available on the</span> <span class="text-2">App Store</span> </div>
                                 </a>
                                 <a href="#" class="app-btn android-button clearfix">
                                    <div class="pull-left"><i class="fa fa-android"></i> </div>
                                    <div class="pull-right"> <span class="text">Available on the</span> <span class="text-2">Play store</span> </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- start: FOOTER -->
          <?php $this->view('web/footer');?>
            <!-- end:Footer -->
         </div>
         <!-- end:page wrapper -->
      </div>
      <!--/end:Site wrapper -->
      <!-- Modal -->
      
    <!--/end:Site wrapper -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="<?php echo base_url(); ?>web-assets/js/jquery.min.js"></script>
   
    <script src="<?php echo base_url(); ?>web-assets/js/tether.min.js"></script>
    <script src="<?php echo base_url(); ?>web-assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>web-assets/js/animsition.min.js"></script>
    <script src="<?php echo base_url(); ?>web-assets/js/bootstrap-slider.min.js"></script>
    <script src="<?php echo base_url(); ?>web-assets/js/jquery.isotope.min.js"></script>
    <script src="<?php echo base_url(); ?>web-assets/js/headroom.js"></script>
    <script src="<?php echo base_url(); ?>web-assets/js/foodpicky.min.js"></script>
	<script src="<?php echo base_url(); ?>web-assets/js/stepper.widget.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>web-assets/js/notifIt.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>web-assets/js/jquery.confirm-1.1.js"></script>
	<script>
	
            jQuery(document).on('ready', function(){
                jQuery('.stepper-widget').stepper();

                jQuery('.stepper-widget').on('stepperupdate', function(ev, data){
                    console.log(data.updateType);
                });
            });
        </script>

<script>
  //$(".nice-number").hide();
  $(".btn-add-id").click(function(){
	 // 	 alert($(this).attr('value'));
		var addid = $(this).attr('value'); 
  $("#div_"+addid).show();
  $("#add_"+addid).hide();
  
});
							  </script>
<script type="text/javascript" src="<?php echo base_url(); ?>web-assets/js/asidebar.jquery.js"></script>
	  	 
	  <script>
$(document).ready(function(){
$(".forgot").hide();
$(".lfadeout").click(function(){
   $(".loginr").show();
    $(".loginf").hide();
	
    });
$(".lcreate").click(function(){
   
    $(".loginf").show();
	$(".loginr").hide();
	
    });
$(".txt1").click(function(){
   
    $(".forgot").show();
	$(".loginf").hide();
    });

});
</script>	
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>						  
<script type="text/javascript">
   
    $(document).ready(function(){
        $('.btnupdadon').click(function(){
			
		var qnty      = $(this).data("pid");
         $('#order-modal'+qnty).modal('show');
		});
		

        $('.btn-add').click(function(){
			
            var product_id    = $(this).data("productid");
            var product_name  = $(this).data("productname");
            var product_price = $(this).data("productprice");
            var quantity      = 1;
			
			$("#qnty_"+product_id).val(quantity);
			$.ajax({
                url : "<?php echo site_url('Products/add_to_cart');?>",
                method : "POST",
                data : {product_id: product_id, product_name: product_name, product_price: product_price, quantity: quantity},
			    success: function(data){
					console.log(data);
                    $('#detaill_cart').html(data);
					$("#qnty_"+product_id).val(quantity);
                }
            });
        });
		
		 $('.btnupd').click(function(){
			
        var qnty      = $(this).data("pid");
        var qntydi      = $(this).data("pidi");
		var qntyy     = $('#qnty_'+qnty).val();
		var rowid     = $('#rid_'+qnty).val();
		var addddonprice = $('#optonprice_'+qnty).val();
		var addddonid = $('#optonid_'+qnty).val();
		if(qntydi == 'I'){
				if(qntyy >= 99){
					return false;
				}
			var fquantity = parseFloat(qntyy)+1;
		}else{
			var fquantity = parseFloat(qntyy)-1;
				if(qntyy < 1){
					return false;
				}
		}
	
		var p_id    = $(this).data("pid");
        var p_name  = $(this).data("p_name");
        var p_price = $(this).data("p_price");
        var addon = $(this).data("addon");
		if(rowid.length!=''){
		var url = "<?php echo site_url('Products/update_cart');?>";
		}else{
			var url = "<?php echo site_url('Products/add_to_cart');?>";
			var	rowid = " ";
			
		}
    	$.ajax({
                url : url,
                method : "POST",
                data : {product_id: p_id, product_name: p_name, product_price: p_price, quantity: fquantity,rowid:rowid,addddonprice:addddonprice,addddonid:addddonid},
				success: function(data){
					if(qntyy == 1 && qntydi != 'I'){
						$("#addonbtn_"+qnty).show();
					$("#add_"+qnty).show();}
					
				$('#detaill_cart').html(data);
				$("#qnty_"+qnty).val(fquantity);
				
                }
            });
          });
        $('#detaill_cart').load("<?php echo site_url('Products/load_cart');?>");
 
         
        $(document).on('click','.buttonitmupd',function(){
			 var qnty      = $(this).data("pid");
        var qntydi      = $(this).data("pidi");
		
		var rowid     = $(this).data("rowid");
		var qntyy     = $('#cart_'+rowid).val();
		var p_id    = $(this).data("pid");
        var p_name  = $(this).data("p_name");
        var p_price = $(this).data("p_price");
		if(qntydi == 'I'){
				if(qntyy >= 99){
					return false;
				}
			var fquantity = parseFloat(qntyy)+1;
		}else{
			if(qntyy == 1){
				
				$("#item_div_"+rowid).hide();
				$('#add_'+p_id).show();
			}
			var fquantity = parseFloat(qntyy)-1;
		}
	
		
		var url = "<?php echo site_url('Products/check_update_cart');?>";
			
    	$.ajax({
                url : url,
                method : "POST",
				dataType: 'json',
                data : {product_id: p_id, product_name: p_name, product_price: p_price, quantity: fquantity,rowid:rowid},
				success: function(data){
					
				var itempriceee = (parseFloat(fquantity) * parseFloat(p_price)).toFixed(2);
				
				$('#cart_'+rowid).val(fquantity);
				$('#qnty_'+p_id).val(fquantity);
				
				$('#itemprice_'+rowid).html('$'+itempriceee);	
				var totalckout = (data.total).toFixed(2);
				$('#totalcartaj').html(totalckout);	
				$('#tpriceck').val(totalckout);	
				console.log(data);
					
					
					
					
					
					                
				}
            });
			
		});
        $(document).on('click','.romove_cart',function(){
            var row_id=$(this).attr("id"); 
            var pdeletee=$(this).attr("pdelete"); 
			
            $.ajax({
                url : "<?php echo site_url('Products/delete_cart');?>",
                method : "POST",
                data : {row_id : row_id},
                success :function(data){
                    $('#detaill_cart').html(data);
					$("#add_"+pdeletee).show();
					$("#qnty_"+pdeletee).val('1');
					$("#addonbtn_"+pdeletee).show();

					console.log(pdeletea);
					
                }
            });
        });
    });
	

</script>
<?php if(!empty($checkout)){ foreach ($checkout as $items) { ?>
<script>
var addid = "<?php echo $items['id']; ?>";
var adcartqty = "<?php echo $items['qty']; ?>";
$("#add_"+addid).hide();
//$("#addonbtn_"+addid).hide();
$("#qnty_"+addid).val(adcartqty);
</script>
<?php  }} ?>
 <?php $this->view('web/loginjs-web.php') ?>
     <script>
		$('#btn-ckut').click(function(){
		var tck_price = $('#tpriceck').val();
		if(tck_price<20){
			notif({
				type: "error",
				msg: "<span style='color:#fff'>Minimum amount $20.</span>",
				position: "right",
				width: 500,
				height: 60,
				autohide: false
			});

				return false;
		}else{
			//redirect('Products/checkout');
			window.location.href = "<?php echo site_url('Products/checkout');?>";
		}
          });
$(".smth").click(function(e){
   /* some statements */
   e.preventDefault();
});
      </script>
<script>
		  
		$(document).ready(function(){
    $('.ckid').click(function() {
        var selValue = $('input[name=radioadn]:checked').val(); 
		var priceval = $(this).attr('pricval');
		var prodid = $(this).attr('productidd');
		var prprice1 = $('#prprice_'+prodid).val();
		
		 var sum = 0;

    $("input[name=radioadn]:checked").each(function(){
      sum += parseInt($(this).attr("pricval"));
    });


  	if(selValue){
		var prprice2 = parseFloat(prprice1)+parseFloat(sum);
		}else{
			var prprice2 = parseFloat(prprice1);
		}
		$("#itemprice"+prodid).val(prprice2);
    });
});
</script>
<script>
		  
		$(document).ready(function(){
    $('.addonsbumit').click(function() {
			var product_id = $(this).attr('id');
            var prprice1 = $('#prprice_'+product_id).val();
            var product_name  = $('#prname_'+product_id).val();
            var product_price = $("#itemprice"+product_id).val();
			var selValue = $('input[name=radioadn]:checked').val();
			var adnpricei  = $('#adnpricei_'+selValue).val();
            var quantity      = 1;
			var searchIDs = $('input[name=radioadn]:checked').map(function(){
        
			return $(this).attr("prodid");
        
			});
			var pricevalues = $('input[name=radioadn]:checked').map(function(){
        
			return  parseInt($(this).attr("pricval"));
        
			});
			var selValuefinal = searchIDs.get();
			var adnpriceifinal = pricevalues.get();
//			alert(selValuefinal);alert(adnpriceifinal);
			$("#qnty_"+product_id).val(quantity);
//			history.go(0);
			$.ajax({
                url : "<?php echo site_url('Products/add_to_cart');?>",
                method : "POST",
                data : {product_id: product_id, product_name: product_name, product_price: product_price, quantity: quantity,selValue:selValuefinal,adnpricei:adnpriceifinal},
                success: function(data){
					 $('#addonsform_'+product_id)[0].reset();
					 $('#itemprice'+product_id).val(prprice1);
					console.log(data);
                    $('#detaill_cart').html(data);
					$("#qnty_"+product_id).val(quantity);
					$("#order-modal"+product_id+" .close").click()
                }
            });

    });
});
</script>
	  
	<?php
if(!empty($ridss)){
	if($ridss !=$shops['id']){ $this->cart->destroy(); }}
	?>
 <style>
				 .addon-t{
					 float:left;
					 font-weight:600;
				 }
				 .addon-t input{
					     background: transparent;
				 }
				 .addon-price{
					 padding-left: 10px;
    font-size: 12px;
    color: #999;
				 }
				 </style>	
</body>

</html>
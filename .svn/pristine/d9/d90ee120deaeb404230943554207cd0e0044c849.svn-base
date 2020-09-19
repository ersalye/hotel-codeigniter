<?php $this->view('web/header'); ?>

      <div class="page-wrapper">
            <!-- top Links -->
            <div class="top-links">
               <div class="container">
                  <ul class="row links">
                     <li class="col-xs-12 col-sm-3 link-item active"><span>1</span><a href="<?php echo base_url(); ?>">Choose Your Location</a></li>
                     <li class="col-xs-12 col-sm-3 link-item active"><span>2</span><a href="<?php echo base_url('Restaurants'); ?>">Choose Restaurant</a></li>
                     <li class="col-xs-12 col-sm-3 link-item active"><span>3</span><a >Select your menu</a></li>
                     <li class="col-xs-12 col-sm-3 link-item"><span>4</span><a href="checkout.html">Order and Pay online</a></li>
                  </ul>
               </div>
            </div>
            <!-- end:Top links -->
            <!-- start: Inner page hero -->
            <section class="inner-page-hero bg-image" data-image-src="<?php echo base_url(); ?>web-assets/images/profile-banner.jpg">
               <div class="profile">
                  <div class="container">
                     <div class="row">
                        <div class="col-xs-12 col-sm-12  col-md-4 col-lg-4 profile-img">
                           <div class="image-wrap">
                              <figure><img src="<?php echo base_url(); ?>uploads/images/<?php echo $shops['shop_logo']; ?>" alt="Profile Image"></figure>
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 profile-desc">
                           <div class="pull-left right-text white-txt">
                              <h6><a href="#"><?php echo $shops['name']; ?></a></h6>
                              <a class="btn btn-small btn-green">Open</a>
                              <p>Burgers, American, Sandwiches, Fast Food, BBQ</p>
                              <ul class="nav nav-inline">
                                 <li class="nav-item"> <a class="nav-link active" href="#"><i class="fa fa-check"></i> Min $ <?php echo $shops['min_amount']; ?></a> </li>
                                 <li class="nav-item"> <a class="nav-link" href="#"><i class="fa fa-motorcycle"></i> <?php echo $shops['estimated_delivery_time']; ?> min</a> </li>
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
                     </div>
                  </div>
               </div>
            </section>
            <!-- end:Inner page hero -->
            
            <div class="container m-t-30">
               <div class="row">
                  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 stickky">
                     <div class="sidebar clearfix m-b-20">
                        <div class="main-block">
                           
                           <ul>
						     <?php foreach($category as $cat){ ?>
                              <li><a href="#<?php echo $cat['id']; ?>" class="scroll active"><?php echo $cat['cat_name']; ?>
							  </a></li>
							 <?php }?>
                              
                           </ul>
                           <div class="clearfix"></div>
                        </div>
                        <!-- end:Sidebar nav -->
                        
                     </div>
                     <!-- end:Left Sidebar -->
                    
                  </div>
                  <div class="col-xs-12 col-sm-8 col-md-8 col-lg-6">
				  <?php foreach($category as $cat){ ?>
				  <?php  
									 $idd = $cat['id']; 
									$CI =& get_instance();
									$productslist = $CI->products($idd) ;
												
													?>
                     <div class="menu-widget m-b-30" id="<?php echo $cat['id']; ?>">
                        <div class="widget-heading">
                           <h3 class="widget-title text-dark">
                              <?php echo $cat['cat_name']; ?> (<?php echo count($productslist); ?> Items) <a class="btn btn-link pull-right" data-toggle="collapse" href="#popular" aria-expanded="true">
                              <i class="fa fa-angle-right pull-right"></i>
                              <i class="fa fa-angle-down pull-right"></i>
                              </a>
                           </h3>
                           <div class="clearfix"></div>
                        </div>
                        <div class="collapse in" >
						
													<?php foreach($productslist as $prd){ ?>
                           <div class="food-item white">
                              <div class="row">
                                 <div class="col-xs-12 col-sm-12 col-lg-8">
                                    <div class="rest-logo pull-left">
                                       <a class="restaurant-logo pull-left" href="#"><img src="<?php echo base_url(); ?>web-assets/images/food4.jpg" alt="Food logo"></a>
                                    </div>
                                    <!-- end:Logo -->
                                    <div class="rest-descr">
                                       <h6><a href="#">	<?php echo $prd['product_name']; ?></a></h6>
                                      <div><span class="price pull-left">$ <?php echo $prd['price']; ?></span></div>
                                    </div>
                                    <!-- end:Description -->
                                 </div>
                                 <!-- end:col -->
                                 <div class="col-xs-12 col-sm-12 col-lg-4 pull-right item-cart-info"> 
								 <a id="add_<?php echo $prd['id']; ?>" value="<?php echo $prd['id']; ?>" class="btn-add pull-right btn-add-id" data-productid="<?php echo $prd['id'];?>" data-productname="<?php echo $prd['product_name'];?>" data-productprice="<?php echo $prd['price'];?>">ADD</a> 
			<div class="stepper-widget">
			  <button type="button" data-pidi="D" data-pid="<?php echo $prd['id'];?>" data-p_name="<?php echo $prd['product_name'];?>" data-p_price="<?php echo $prd['price'];?>" class="js-qty-down btn btnupd dec_<?php echo $prd['id']; ?>"><i class="fa fa-minus" aria-hidden="true"></i></button>
			  <input id="qnty_<?php echo $prd['id']; ?>" type="text" class="js-qty-input form-control qty_<?php echo $prd['id']; ?>" value="1" readonly/>
			  <button type="button" data-pidi="I" data-pid="<?php echo $prd['id'];?>" data-p_name="<?php echo $prd['product_name'];?>" data-p_price="<?php echo $prd['price'];?>" class="js-qty-up btn btnupd inc_cart_<?php echo $prd['id']; ?>"><i class="fa fa-plus" aria-hidden="true"></i></button>
			</div>
								 </div>
                              </div>
							 
                              <!-- end:row -->
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
                  <!-- end:Bar -->
                  <div class="col-xs-12 col-md-12 col-lg-3 stickky">
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
                                 <!-- <div class="title-row">Pizza Quatro Stagione <a href="#"><i class="fa fa-trash pull-right"></i></a></div> -->
                                  <div id="detaill_cart"></div>
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
							  <button onclick="location.href='<?php echo base_url('Products/checkout'); ?>'" type="button" class="btn btn-block theme-btn btn-lg">Checkout</button>

							  </div>
							  </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- end:Right Sidebar -->
               </div>
               <!-- end:row -->
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
      <div class="modal fade" id="order-modal" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
               <div class="modal-body cart-addon">
                  <div class="food-item white">
                     <div class="row">
                        <div class="col-xs-12 col-sm-6 col-lg-6">
                           <div class="item-img pull-left">
                              <a class="restaurant-logo pull-left" href="#"><img src="<?php echo base_url(); ?>web-assets/images/pepsi.png" alt="Food logo"></a>
                           </div>
                           <!-- end:Logo -->
                           <div class="rest-descr">
                              <h6><a href="#">Sandwich de Alegranza Grande Menü (28 - 30 cm.)</a></h6>
                           </div>
                           <!-- end:Description -->
                        </div>
                        <!-- end:col -->
                        <div class="col-xs-6 col-sm-2 col-lg-2 text-xs-center"> <span class="price pull-left">$ 2.99</span></div>
                        <div class="col-xs-6 col-sm-4 col-lg-4">
                           <div class="row no-gutter">
                              <div class="col-xs-7">
                                 <select class="form-control b-r-0" id="exampleSelect2">
                                    <option>Size SM</option>
                                    <option>Size LG</option>
                                    <option>Size XL</option>
                                 </select>
                              </div>
                              <div class="col-xs-5">
                                 <input class="form-control" type="number" value="0" id="quant-input-2"> 
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- end:row -->
                  </div>
                  <!-- end:Food item -->
                  <div class="food-item">
                     <div class="row">
                        <div class="col-xs-12 col-sm-6 col-lg-6">
                           <div class="item-img pull-left">
                              <a class="restaurant-logo pull-left" href="#"><img src="<?php echo base_url(); ?>web-assets/images/cola.jpg" alt="Food logo"></a>
                           </div>
                           <!-- end:Logo -->
                           <div class="rest-descr">
                              <h6><a href="#">Sandwich de Alegranza Grande Menü (28 - 30 cm.)</a></h6>
                           </div>
                           <!-- end:Description -->
                        </div>
                        <!-- end:col -->
                        <div class="col-xs-6 col-sm-2 col-lg-2 text-xs-center"> <span class="price pull-left">$ 2.49</span></div>
                        <div class="col-xs-6 col-sm-4 col-lg-4">
                           <div class="row no-gutter">
                              <div class="col-xs-7">
                                 <select class="form-control b-r-0" id="exampleSelect3">
                                    <option>Size SM</option>
                                    <option>Size LG</option>
                                    <option>Size XL</option>
                                 </select>
                              </div>
                              <div class="col-xs-5">
                                 <input class="form-control" type="number" value="0" id="quant-input-3"> 
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- end:row -->
                  </div>
                  <!-- end:Food item -->
                  <div class="food-item">
                     <div class="row">
                        <div class="col-xs-12 col-sm-6 col-lg-6">
                           <div class="item-img pull-left">
                              <a class="restaurant-logo pull-left" href="#"><img src="<?php echo base_url(); ?>web-assets/images/pepsi.png" alt="Food logo"></a>
                           </div>
                           <!-- end:Logo -->
                           <div class="rest-descr">
                              <h6><a href="#">Sandwich de Alegranza Grande Menü (28 - 30 cm.)</a></h6>
                           </div>
                           <!-- end:Description -->
                        </div>
                        <!-- end:col -->
                        <div class="col-xs-6 col-sm-2 col-lg-2 text-xs-center"> <span class="price pull-left">$ 1.99</span></div>
                        <div class="col-xs-6 col-sm-4 col-lg-4">
                           <div class="row no-gutter">
                              <div class="col-xs-7">
                                 <select class="form-control b-r-0" id="exampleSelect5">
                                    <option>Size SM</option>
                                    <option>Size LG</option>
                                    <option>Size XL</option>
                                 </select>
                              </div>
                              <div class="col-xs-5">
                                 <input class="form-control" type="number" value="0" id="quant-input-4"> 
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- end:row -->
                  </div>
                  <!-- end:Food item -->
                  <div class="food-item">
                     <div class="row">
                        <div class="col-xs-12 col-sm-6 col-lg-6">
                           <div class="item-img pull-left">
                              <a class="restaurant-logo pull-left" href="#"><img src="<?php echo base_url(); ?>web-assets/images/cola.jpg" alt="Food logo"></a>
                           </div>
                           <!-- end:Logo -->
                           <div class="rest-descr">
                              <h6><a href="#">Sandwich de Alegranza Grande Menü (28 - 30 cm.)</a></h6>
                           </div>
                           <!-- end:Description -->
                        </div>
                        <!-- end:col -->
                        <div class="col-xs-6 col-sm-2 col-lg-2 text-xs-center"> <span class="price pull-left">$ 3.15</span></div>
                        <div class="col-xs-6 col-sm-4 col-lg-4">
                           <div class="row no-gutter">
                              <div class="col-xs-7">
                                 <select class="form-control b-r-0" id="exampleSelect6">
                                    <option>Size SM</option>
                                    <option>Size LG</option>
                                    <option>Size XL</option>
                                 </select>
                              </div>
                              <div class="col-xs-5">
                                 <input class="form-control" type="number" value="0" id="quant-input-5"> 
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- end:row -->
                  </div>
                  <!-- end:Food item -->
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn theme-btn">Add to cart</button>
               </div>
            </div>
         </div>
      
       
        
       
        
       
    </div>
    <!--/end:Site wrapper -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="<?php echo base_url(); ?>web-assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>web-assets/js/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>web-assets/js/tether.min.js"></script>
    <script src="<?php echo base_url(); ?>web-assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>web-assets/js/animsition.min.js"></script>
    <script src="<?php echo base_url(); ?>web-assets/js/bootstrap-slider.min.js"></script>
    <script src="<?php echo base_url(); ?>web-assets/js/jquery.isotope.min.js"></script>
    <script src="<?php echo base_url(); ?>web-assets/js/headroom.js"></script>
    <script src="<?php echo base_url(); ?>web-assets/js/foodpicky.min.js"></script>
	<script src="<?php echo base_url(); ?>web-assets/js/stepper.widget.js"></script>
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

$(".lfadeout").click(function(){
   $(".loginr").show();
    $(".loginf").hide();
    });
$(".lcreate").click(function(){
   
    $(".loginf").show();
	$(".loginr").hide();
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
        $('.btn-add').click(function(){
			
            var product_id    = $(this).data("productid");
            var product_name  = $(this).data("productname");
            var product_price = $(this).data("productprice");
            var quantity      = 1;
			$.ajax({
                url : "<?php echo site_url('Products/add_to_cart');?>",
                method : "POST",
                data : {product_id: product_id, product_name: product_name, product_price: product_price, quantity: quantity},
				//alert(data);
                success: function(data){
					//alert(data);
                    $('#detaill_cart').html(data);
                }
            });
        });
		
		 $('.btnupd').click(function(){
        var qnty      = $(this).data("pid");
        var qntydi      = $(this).data("pidi");
		var qntyy     = $('#qnty_'+qnty).val();
		var rowid     = $('#rid_'+qnty).val();
			if(qntydi == 'I'){
				if(qntyy >= 99){
					return false;
				}
			var fquantity = parseFloat(qntyy)+1;
		}else{
			if(qntyy == 1){
				$("#add_"+qnty).show();
			}
			var fquantity = parseFloat(qntyy)-1;
		}
		var p_id    = $(this).data("pid");
        var p_name  = $(this).data("p_name");
        var p_price = $(this).data("p_price");
		if(rowid){
		var url = "<?php echo site_url('Products/update_cart');?>";
		}else{
			var url = "<?php echo site_url('Products/add_to_cart');?>";
			var	rowid = " ";
			
		}
    	$.ajax({
                url : url,
                method : "POST",
                data : {product_id: p_id, product_name: p_name, product_price: p_price, quantity: fquantity,rowid:rowid},
				success: function(data){
					
                    $('#detaill_cart').html(data);
                }
            });
          });
        $('#detaill_cart').load("<?php echo site_url('Products/load_cart');?>");
 
         
        $(document).on('click','.romove_cart',function(){
            var row_id=$(this).attr("id"); 
            $.ajax({
                url : "<?php echo site_url('Products/delete_cart');?>",
                method : "POST",
                data : {row_id : row_id},
                success :function(data){
                    $('#detaill_cart').html(data);
					var pdeletea = $(this).data("pdelete");
				//	  alert($("#e4da3b7fbbce2345d7772b0674a318d5").attr("pdelete"));
					
                }
            });
        });
    });
	
	 $('.home').mouseover(function(){
	$(".rclass").each(function(){
          // alert($(this).attr('id'));
		  var str = $(this).attr('id');
var str_array = str.split('_');
for(var i = 1; i < str_array.length; i++) {
   str_array[i] = str_array[i].replace(/^\s*/, "").replace(/\s*$/, "");
   var rid = str_array[i];
    $("#add_"+rid).hide();
	var carval = $("#cart_"+rid).val();
	$("#qnty_"+rid).val(carval);
}	
		   
        });
		  });
</script>
     <!--<script>
		$('.btnupd').click(function(){
		var url = "<?php echo site_url('Products/check_price');?>";
			
    	$.ajax({
                url : url,
                method : "POST",
				dataType: 'json',
                success: function(data){
				console.log(data.checkout);
                $('#toatal_price').html(data.total);
                }
            });
          });
      </script>-->

</body>

</html>
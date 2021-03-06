<?php $this->view('web/header') ?>
         <div class="page-wrapper">
            <!-- top Links -->
            <div class="top-links">
               <div class="container">
                  <ul class="row links">
                     <li class="col-xs-12 col-sm-3 link-item active"><span>1</span><a href="<?php echo base_url(); ?>">Choose Your Location</a></li>
                     <li class="col-xs-12 col-sm-3 link-item active"><span>2</span><a >Choose Restaurant</a></li>
                     <li class="col-xs-12 col-sm-3 link-item"><span>3</span><a >Pick Your favorite food</a></li>
                     <li class="col-xs-12 col-sm-3 link-item"><span>4</span><a href="Checkout">Order and Pay online</a></li>
                  </ul>
               </div>
            </div>
            <!-- end:Top links -->
            <!-- start: Inner page hero -->
            <div>
               <div class="container item-search">
                  <div id="morphsearch" class="morphsearch">
                     <form class="morphsearch-form">
                        <input class="morphsearch-input" id="searchhide" type="search" placeholder="Search for restaurant or cuisine"/>
                        <button class="morphsearch-submit" type="submit">Search</button>
                     </form>
                     <div class="morphsearch-content" id="style-7">
                        <div class="dummy-column">
                           <h2>Search result</h2>
						   <span id="shop_list">
                            </span>
                           
                        </div>
                        <div class="dummy-column">
                           <h2>Restaurants</h2>
                           <?php 
										
										foreach($restaurants as $r){ ?>
						   <a class="dummy-media-object" href="<?php echo base_url('Profile/'); ?><?php echo $r['id']; ?>" style="background:url(<?php echo base_url(); ?>uploads/images/<?php echo $r['shop_logo']; ?>);">
                              <h3><?php echo $r['name']; ?></h3>
                           </a>
										<?php } ?>
                        </div>
                        
                     </div>
                     <!-- /morphsearch-content -->
                     <span class="morphsearch-close"></span>
                  </div>
                  <!-- /morphsearch -->
               </div>
            </div>
            <div class="result-show">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-3">
                        <p><span class="primary-color"><strong><?php echo count($restaurants); ?></strong></span> Restaurants 							
                        </p>
                     </div>
                     <div class="col-sm-9">
                        <!--<select class="custom-select pull-right">
                           <option selected>Open this select menu</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                           </select>-->
                     </div>
                  </div>
               </div>
            </div>
            <!-- //results show -->
            <section class="restaurants-page">
               <div class="container">
                  <div class="row">
                     <div class="col-xs-12">
                        <div class="row">
                           <!-- Each popular food item starts -->
						   <?php 
										
										foreach($restaurants as $r){ ?>
                           <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 food-item">
                              <div class="food-item-wrap">
                                 <div class="figure-wrap bg-image" data-image-src="<?php echo base_url(); ?>uploads/images/<?php echo $r['shop_logo']; ?>">
                                    <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                 </div>
                                 <div class="content">
								 <span id="favappend" class="fav" >
								 <?php  $rid = $r['id']; 
													$CI =& get_instance();
													  $fid = $CI->getr_favrets($rid);
													if($fid == 1){
													?>
							<i class="fa fa-heart fav-class cla_<?php echo $r['id']; ?>" id="<?php echo $r['id']; ?>" aria-hidden="true"></i><?php }else {?>
				<i class="fa fa-heart-o fav-class hla_<?php echo $r['id']; ?>" id="<?php echo $r['id']; ?>"  aria-hidden="true"></i><?php }?>
							</span>
                                    <h5><a href="#"><?php echo $r['name']; ?></a></h5>
                                    <div class="product-name"><?php  $r['Cuisine']; 
									 $idd = $r['Cuisine']; 
													$CI =& get_instance();
													$CI->Cuisine_name($idd) ;
													
													?>
									
									</div>
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-check"></i> Min $ <?php echo $r['min_amount']; ?></li>
                                       <li class="list-inline-item"><i class="fa fa-motorcycle"></i> <?php echo $r['estimated_delivery_time']; ?> min</li>
                                    </ul>
                                    <a href="<?php echo base_url('Profile/').$r['id']; ?>" class="btn theme-btn-dash pull-right">Order Now</a>
								<?php if($r['pure_veg'] == 1){ ?><div><h5 class="veg-only">
								VEG ONLY</h5></div><?php } ?>
                                 </div>
                              </div>
                           </div>
						   <?php  } ?>
                           <!-- Each popular food item starts -->
                          
                        </div>
                        <!-- end:right row -->
                     </div>
                  </div>
               </div>
            </section>
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
            <?php $this->view('web/footer'); ?>
            <!-- end:Footer -->
         </div>
      </div>
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
      <script src="<?php echo base_url(); ?>web-assets/js/classie.js"></script>
      <script>
         (function() {
         	var morphSearch = document.getElementById( 'morphsearch' ),
         		input = morphSearch.querySelector( 'input.morphsearch-input' ),
         		ctrlClose = morphSearch.querySelector( 'span.morphsearch-close' ),
         		isOpen = isAnimating = false,
         		// show/hide search area
         		toggleSearch = function(evt) {
         			// return if open and the input gets focused
         			if( evt.type.toLowerCase() === 'focus' && isOpen ) return false;
         
         			var offsets = morphsearch.getBoundingClientRect();
         			if( isOpen ) {
         				classie.remove( morphSearch, 'open' );
         
         				// trick to hide input text once the search overlay closes 
         				// todo: hardcoded times, should be done after transition ends
         				if( input.value !== '' ) {
         					setTimeout(function() {
         						classie.add( morphSearch, 'hideInput' );
         						setTimeout(function() {
         							classie.remove( morphSearch, 'hideInput' );
         							input.value = '';
         						}, 300 );
         					}, 500);
         				}
         				
         				input.blur();
         			}
         			else {
         				classie.add( morphSearch, 'open' );
         			}
         			isOpen = !isOpen;
         		};
         
         	// events
         	input.addEventListener( 'focus', toggleSearch );
         	ctrlClose.addEventListener( 'click', toggleSearch );
         	// esc key closes search overlay
         	// keyboard navigation events
         	document.addEventListener( 'keydown', function( ev ) {
         		var keyCode = ev.keyCode || ev.which;
         		if( keyCode === 27 && isOpen ) {
         			toggleSearch(ev);
         		}
         	} );
         
         
         	/***** for demo purposes only: don't allow to submit the form *****/
         	morphSearch.querySelector( 'button[type="submit"]' ).addEventListener( 'click', function(ev) { ev.preventDefault(); } );
         })();
      </script>
      <script>
         $("#searchhide").click(function(){
         $(".home").css("overflow-y", "hidden");
         });
         $(".morphsearch-close").click(function(){
         $(".home").css("overflow-y", "auto");
         });
      </script>
      <script>
         $(document).ready(function(){
         
         $(".categories").click(function(){
          $(".categories-sec").animate({
                     height: 'toggle'
                 });
         
             });
         
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
<?php $this->view('web/loginjs-web.php') ?>
<script>
$(document).ready(function(){
    $("#searchhide").keyup(function(){
		var title     = $('#searchhide').val();
        var url = "<?php echo site_url('Products/search_restorents');?>";
			
    	$.ajax({
                url : url,
                method : "POST",
				dataType:"json",   
				data : {title: title},
				success: function(data){
				//for(var key in arr){  }
				$.each(data, function (key, data) {
    console.log(key)
    $.each(data, function (index, data) {
        $('#shop_list').html("<a class='dummy-media-object' href='<?php echo base_url('Profile/'); ?>"+data.id+"' style='background:url(<?php echo base_url(); ?>uploads/images/"+data.shop_logo+");'><h3> "+ data.name +"</h3></a>");
		console.log('index', data)
    })
})
				console.log(data);
                // $('#toatalprice').html(data.total);
                },
    error: function(){
        alert("failure");
    }
            });
    });
});
</script>
<script>
$(document).ready(function(){
    $(".fav-class").click(function(){
		var id     =  $(this).attr("id");
		var ses_id = "<?php echo $this->session->userdata('customer_id'); ?>";
		if(ses_id == ''){
			alert('Please Login');
			return false;
		}
		
        var url = "<?php echo site_url('Products/updatesfavrets');?>";
	//	alert(url);	
    	$.ajax({
                url : url,
                method : "POST",
			//	dataType:"json",   
				data : {id: id,ses_id:ses_id},
				success: function(data){
					
					if(data == 1){
					//	alert(data);
					$(".cla_"+id).removeClass("fa-heart-o");
					$(".cla_"+id).addClass("fa-heart");	
						
						
					
					$(".hla_"+id).removeClass("fa-heart-o");
					$(".hla_"+id).addClass("fa-heart");	
					
					
					//$(".hla_"+id).show();
					}else{
					$(".cla_"+id).removeClass("fa-heart");	
					$(".cla_"+id).addClass("fa-heart-o");	
					
					$(".hla_"+id).removeClass("fa-heart");
					$(".hla_"+id).addClass("fa-heart-o");	
						

						
					}	
		//$(".cla_"+id).css('color: #ff3300');
				console.log(data);
                },
    error: function(){
        alert("failure load fav");
    }
            });
    });
});
</script>

 <?php $this->view('web/location-web-js') ?>
 <style>
 .fav{
 position: absolute;
    right: 30px;
}
.fa-heart{
	color: #ff3300;
}
 </style>
 
   </body>
</html>

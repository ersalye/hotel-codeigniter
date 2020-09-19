<?php $this->view('web/header') ?>
         <div class="page-wrapper">
            <!-- top Links -->
            <div class="top-links">
               <div class="container">
                  <ul class="row links">
                     <li class="col-xs-12 col-sm-3 link-item active"><span>1</span><a href="<?php echo base_url(); ?>">Choose Your Location</a></li>
					 <?php if(!empty($_GET['city'])){
					  $city = $_GET['city'];
				  }else{
					  $city=$this->uri->segment(3); 
				  }
				  ?>
                     <li class="col-xs-12 col-sm-3 link-item active"><span>2</span><a href="<?php echo base_url('Restaurants'); ?> ">Choose Restaurant</a></li>
<!--					 <li class="col-xs-12 col-sm-3 link-item active"><span>2</span><a href="<?php echo base_url('Restaurants').'/'.'Search'.'/'.$city; ?> ">Choose Restaurant</a></li>-->
                     <li class="col-xs-12 col-sm-3 link-item"><span>3</span><a >Pick Your favorite food</a></li>
                     <li class="col-xs-12 col-sm-3 link-item"><span>4</span><a >Order and Pay online</a></li>
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
						   <a class="dummy-media-object" href="<?php echo base_url('Profile/'); ?><?php echo $r['id']; ?>" style="background:url(<?php echo base_url(); ?>uploads/images/<?php echo $r['shop_logo']; ?>) center;">
                             <div class="s_bg"></div> <h3><?php echo $r['name']; ?></h3>
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
                        <p><span class="primary-color"><strong><?php echo count($restaurantscls); ?></strong></span> Restaurants 							
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
			
			<?php 
							   ?>
            <!-- //results show -->
            <section class="restaurants-page">
               <div class="container">
                  <div class="row">
                     <div class="col-xs-12">
                        <div class="row">
                           <!-- Each popular food item starts -->
						   <?php 
										
										foreach($restaurants as $r){ ?>
										
										<?php
										 $t_date = Date("H:i");
							 
								 $tday = date('l');
								$rid = $r['id']; 
								$CI =& get_instance();
								$fid = $CI->Gettimings($rid);
								//print_r($fid);
								if($tday == "Monday"){
							   $tone = $fid[0]['m_morning_open'];
							   $ttwo = $fid[0]['m_morning_close'];
							   $tth = $fid[0]['m_evening_open'];
							   $tf = $fid[0]['m_evening_close'];
							   }
							   if($tday == "Tuesday"){
							   $tone = $fid[0]['t_morning_open'];
							   $ttwo = $fid[0]['t_morning_close'];
							   $tth = $fid[0]['t_evening_open'];
							   $tf = $fid[0]['t_evening_close'];
							   }
							   if($tday == "Wednesday"){
								$tone = $fid[0]['w_morning_open'];
							    $ttwo = $fid[0]['w_morning_close'];
							    $tth = $fid[0]['w_evening_open'];
							    $tf = $fid[0]['w_eveningclose'];
							   }
							   if($tday == "Thursday"){
								$tone = $fid[0]['th_morning_open'];
							    $ttwo = $fid[0]['th_morning_close'];
							    $tth = $fid[0]['th_evening_open'];
							    $tf = $fid[0]['th_evening_close'];
							   }
							   if($tday == "Friday"){
								   $tone = $fid[0]['f_morning_open'];
							   $ttwo = $fid[0]['f_morning_close'];
							   $tth = $fid[0]['f_evening_open'];
							   $tf = $fid[0]['f_evening_close'];
							   }
							   if($tday == "Saturday"){
								   $tone = $fid[0]['s_morning_open'];
							   $ttwo = $fid[0]['s_morning_close'];
							   $tth = $fid[0]['s_evening_open'];
							   $tf = $fid[0]['s_evening_close'];
							   }
							   if($tday == "Sunday"){
							   $tone = $fid[0]['sun_morning_open'];
							   $ttwo = $fid[0]['sun_morning_close'];
							   $tth = $fid[0]['sun_evening_open'];
							   $tf = $fid[0]['sun_evening_close'];
							   }
							   if($r['everyday'] == "ALL"){
							    $tone = $r['m_resturant_opens'];
							    $ttwo = $r['m_resturant_close'];
							    $tth = $r['e_resturant_opens'];
							    $tf = $r['e_resturant_close'];
							   }
						
							//	echo $fid['first_name'];?>
				<?php if(($t_date >= $tone && $t_date <= $ttwo) || ($t_date >= $tth && $t_date <= $tf)){
					$dclass ="";
					
				}else{ $dclass = "cdnone";
						
						} ?>
							<style>
							.cdnone{display:none;}
							</style>
                           <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 food-item <?php echo $dclass; ?>">
                              <div class="food-item-wrap">
                                 <div class="figure-wrap bg-image" data-image-src="<?php echo base_url(); ?>uploads/images/<?php echo $r['shop_logo']; ?>">
								
								 <?php if( ($t_date >= $tone && $t_date <= $ttwo) || ($t_date >= $tth && $t_date <= $tf) ){}else{ ?>
								<div class="res-dis">Closed</div>
							  <?php } ?>
								  <?php if($r['min_amount_offer']){ ?>
								 <div class="distance"> <?php echo $r['discount']; ?>% <?php if($r['offertitle']){
									 echo $r['offertitle']; }else{ echo "orders above "; } ?> $ <?php echo $r['min_amount_offer']; ?></div>
								 <?php }?>
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
                                    <h5><a ><?php echo $r['name']; ?></a></h5>
                                    <div class="product-name"><?php  
								//	echo $r['m_resturant_opens']."<br>"; 
									//echo $r['m_resturant_close']."<br>"; 
									//echo $r['e_resturant_opens']."<br>"; 
									//echo $r['e_resturant_close']."<br>"; 
									 $idd = $r['Cuisine'];
									 $CI =& get_instance();
													$CI->Cuisine_name($idd) ;
													
													?>
									
									</div>
                                    <ul class="list-inline">
                                       <li class="list-inline-item"><i class="fa fa-check"></i> Min $ <?php echo $r['min_amount']; ?></li>
                                       <li class="list-inline-item"><i class="fa fa-motorcycle"></i> <?php echo $r['estimated_delivery_time']; ?> min</li>
                                    </ul>
									<?php if($r['status']=="active"){?>
									 <a href="<?php echo base_url('Profile/').$r['id']; ?>" class="btn theme-btn-dash pull-right">ORDER NOW</a>
									<?php }else{ ?>
									 <a class="btn theme-btn-dash pull-right">Coming soon</a>
									<?php }?>
								<?php if($r['pure_veg'] != '0'){ ?><div><h5 class="veg-only">
								<?php echo $r['pure_veg']; ?></h5></div><?php } ?>
                                 </div>
                              </div>
                           </div>
						    <!-- Start Close restaurants -->
							
							
						
						   
						   <?php  } ?>
                           <!-- Each popular food item starts -->
                          
                        </div>
						<div class="row">
                           <!-- Each popular food item starts -->
						   <?php 
										
										foreach($restaurantscls as $r){ ?>
										
										<?php
										 $t_date = Date("H:i");

								 $tday = date('l');
								$rid = $r['id']; 
								$CI =& get_instance();
								$fid = $CI->Gettimings($rid);
								//print_r($fid);
								if($tday == "Monday"){
							   $tone = $fid[0]['m_morning_open'];
							   $ttwo = $fid[0]['m_morning_close'];
							   $tth = $fid[0]['m_evening_open'];
							   $tf = $fid[0]['m_evening_close'];
							   }
							   if($tday == "Tuesday"){
							   $tone = $fid[0]['t_morning_open'];
							   $ttwo = $fid[0]['t_morning_close'];
							   $tth = $fid[0]['t_evening_open'];
							   $tf = $fid[0]['t_evening_close'];
							   }
							   if($tday == "Wednesday"){
								$tone = $fid[0]['w_morning_open'];
							    $ttwo = $fid[0]['w_morning_close'];
							    $tth = $fid[0]['w_evening_open'];
							    $tf = $fid[0]['w_eveningclose'];
							   }
							   if($tday == "Thursday"){
								$tone = $fid[0]['th_morning_open'];
							    $ttwo = $fid[0]['th_morning_close'];
							    $tth = $fid[0]['th_evening_open'];
							    $tf = $fid[0]['th_evening_close'];
							   }
							   if($tday == "Friday"){
								   $tone = $fid[0]['f_morning_open'];
							   $ttwo = $fid[0]['f_morning_close'];
							   $tth = $fid[0]['f_evening_open'];
							   $tf = $fid[0]['f_evening_close'];
							   }
							   if($tday == "Saturday"){
								   $tone = $fid[0]['s_morning_open'];
							   $ttwo = $fid[0]['s_morning_close'];
							   $tth = $fid[0]['s_evening_open'];
							   $tf = $fid[0]['s_evening_close'];
							   }
							   if($tday == "Sunday"){
							   $tone = $fid[0]['sun_morning_open'];
							   $ttwo = $fid[0]['sun_morning_close'];
							   $tth = $fid[0]['sun_evening_open'];
							   $tf = $fid[0]['sun_evening_close'];
							   }
							   if($r['everyday'] == "ALL"){
							    $tone = $r['m_resturant_opens'];
							    $ttwo = $r['m_resturant_close'];
							    $tth = $r['e_resturant_opens'];
							    $tf = $r['e_resturant_close'];
							   }
						
							//	echo $fid['first_name'];?>
				<?php if(($t_date >= $tone && $t_date <= $ttwo) || ($t_date >= $tth && $t_date <= $tf)){
					$dclass ="cdnone";
					
				}
				else{ $dclass = "";
						} 
				if($r['status']=='onboarding'){
					$dclass ="";
				}		?>
							<style>
							.cdnone{display:none;}
							</style>
                           <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 food-item <?php echo $dclass; ?>">
                              <div class="food-item-wrap">
                                 <div class="figure-wrap bg-image" data-image-src="<?php echo base_url(); ?>uploads/images/<?php echo $r['shop_logo']; ?>">
								
								
								
								<?php if($r['status']=='active'){ ?>
								<div class="res-dis">Closed </div>
								
								 <?php }else{ ?>
								 <div class="res-dis">
								  Coming soon</div>
								 <?php } ?>
							  <?php if($r['min_amount_offer']){ ?>
								 <div class="distance"><i class="fa fa-percent" aria-hidden="true"></i> <?php echo $r['min_amount_offer']; ?></div>
							  <?php }?>
                                    <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                 </div>
								 <?php if($r['status']=='active'){ ?>
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
                                    <h5><a ><?php echo $r['name']; ?></a></h5>
                                    <div class="product-name"><?php  $r['Cuisine']; 
									 $idd = $r['Cuisine']; 
													$CI =& get_instance();
													$CI->Cuisine_name($idd) ;
													
													?>
									
									</div>
                                  
									<ul class="list-inline close-time">
                                       <li class="list-inline-item">Min $  <?php echo $r['min_amount']; ?></li>
                                       <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> Next Open at <?php  
  $t_date ;
//echo "<br>".$tone."<br>".$ttwo."<br>".$tth."<br>".$tf;
switch ($t_date){
case ($t_date <= $tone):
echo $tone;
break;
case ($t_date <= $tth):
echo $tth;
break;
default:
echo $tone;
break;	   }
?></li>
                                    </ul>
									
								<?php if($r['pure_veg'] == 1){ ?><div><h5 class="veg-only">
								VEG ONLY</h5></div><?php } ?>
                                 </div>
								 <?php }else{?>
								 <div class="content"><h5><a><?php echo $r['name']; ?></a>
								 </h5></div>
								 <?php }?>
                              </div>
                           </div>
						    <!-- Start Close restaurants -->
							
							
						
						   
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
 <script type="text/javascript" src="<?php echo base_url(); ?>web-assets/js/notifIt.js"></script>

	  
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
<?php $this->view('web/loginjs-web.php') ?>
<script>
$(document).ready(function(){
    $("#searchhide").keyup(function(){
		$('#shop_list').html('');
		var title     = $('#searchhide').val();
		if(title){}else{
			return false;
		}
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
        $('#shop_list').append("<a class='dummy-media-object' href='<?php echo base_url('Profile/'); ?>"+data.id+"' style='background:url(<?php echo base_url(); ?>uploads/images/"+data.shop_logo+");'><h3> "+ data.name +"</h3></a>");
		console.log('index', data)
    })
})
				console.log(data);
                // $('#toatalprice').html(data.total);
                },
    error: function(){
        console.log("failure");
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
			notif({
				type: "error",
				msg: "<span style='color:#fff'>Please Login</span>",
				position: "right",
				width: 300,
				height: 60,
				autohide: true
			});
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

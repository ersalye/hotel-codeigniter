<?php $this->view('web/header') ?>
      <div class="page-wrapper">
            
            <!-- start: Inner page hero -->
            <section class="bg-image space-md" data-image-src="<?php echo base_url(); ?>web-assets/images/profile-banner.jpg">
               <div class="profile">
                  <div class="container">
                     <div class="row">
                        <div class="col-xs-12 col-sm-12  col-lg-12 text-center">
                                <h1 class="font-white text-center">Tracking Order</h1> 
								</div>
                        
                     </div>
                  </div>
               </div>
            </section>
            <!-- end:Inner page hero -->
            
           <section class="food__about__us__area section-padding--lg bg--white  static">
            <div class="container">
                <div class="row">
				<div class="col-lg-1"></div>
                    <div class="col-lg-10">
              <style>
			  .cont{
      height: 100%;
    width: 576px;
    margin-left: calc(50% - 288px);
    padding: 0;
    margin: 0 auto;
    position: relative;
}
#progress-bar{
  appearance:none;
  width: 576px;
  color: #000;
  height: 2px;
  margin: 0 auto;
}
.ee {
  height: 10px;
  width: 10px;
  border-radius: 100%;
  border: 3px solid #137CC0;
  background:#ffffff;
  position: absolute;
  left:0;
  top: 9px;
  cursor: pointer;
  transition: all 0.4s ease-in-out;
}
.cont p{
  font-family: Arial;
  font-size: 14pt;
  <!-- text-shadow: 1px 1px 0px #000; -->
  color: #ff4a00;
  text-align: center;
  margin-top: 15px;
}
.cont h1{
   font-family: Arial;
  font-size: 24pt;
  text-shadow: 1px 1px 0px #000;
  color: #fff;
  text-align: center; 
  margin:0;
  padding:0;
}
.cont h3{
  font-family: Arial;
  font-size: 16pt;
  text-shadow: 1px 1px 0px #000;
  color: #fff;
  text-align: center; 
}
.second{
  left: 192px;
}
.third{
  left: 384px;
}
.fourth{
  left: 576px;
}
#progress-bar::-webkit-progress-value{ /* Changes line color */
  background: red;
  transition: all 0.4s ease-in-out;
}
#progress-bar::-webkit-progress-bar{ /* Changes background color */
  background: #137CC0;
}
.border-change{
  border-color:#ff4a00;
  transition: all 0.4s ease-in-out;
}
.order-s{
    position: absolute;
    top: -30px;
    left: -80px;
    text-align: center;
	width: 160px;
}
.confirm-text{
text-align:center;
margin-bottom: 50px;
}
.confirm-text img{
    width: 130px;
}
.confirm-sec{
    padding: 20px 0px;
    border: 1px solid #ccc;
}
			  </style>   
<div class="confirm-sec">			  
<div class="confirm-text">
<br>
<?php  $ridstatus = $Order['rid_status'];  ?>
<img src="<?php echo base_url(); ?>web-assets/images/order-confirm.png">
<h4>"<?php $rid = $Order['rid']; $CI =& get_instance(); $fid = $CI->getShopname($rid); ?>" has 
<?php if($ridstatus==0){ echo "Not accepted your order";}else{ echo "confirmed your order"; }?>  </h4>
</div>			  
	<?php if($ridstatus==0){ }else{?>
	<div class="cont">
 
<progress id="progress-bar" min="1" max="100" value="0"></progress>
<span class="ee first border-change"><div class="order-s">Order Confirmed</div></span>
<span class="ee second"><div class="order-s">Food Making</div></span>
<span class="ee third"><div class="order-s">On the way</div></span>
<span class="ee fourth"><div class="order-s">Delivered</div></span>
<p class="percent">0% Complete</p>
	</div><?php } ?>
</div>
                    </div>
					<div class="col-lg-1"></div>
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
           <?php $this->view('web/footer') ?>
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
    <script type="text/javascript">
    $(document).ready(function(){
		setTimeout(function() {
    location.reload();
}, 5000);
		var percentage = <?php echo $Order['rid_status']; ?>;
		//alert(percentage);
		if(percentage == 1){
			 $('#progress-bar').val('0');
			  $('.percent').html("0% Complete");
		}else if(percentage == 2){
			$('.second').addClass('border-change');
			$('#progress-bar').addClass('border-change');
			 $('#progress-bar').val('34');
			  $('.percent').html("33% Complete");
		}else if (percentage == 2 || percentage == 3){
			$('.third').addClass('border-change');
			$('.second').addClass('border-change');
			$('#progress-bar').addClass('border-change');
			 $('#progress-bar').val('67');
			  $('.percent').html("66% Complete");
		}else if (percentage == 4){
			$('.fourth').addClass('border-change');
			$('.second').addClass('border-change');
			$('.third').addClass('border-change');
			$('#progress-bar').addClass('border-change');
			 $('#progress-bar').val('100');
			  $('.percent').html("100% Complete");
		}
  $('.eee').click(function(){
    if($(this).hasClass('second')){
        $(this).nextAll().removeClass('border-change');  
        $('#progress-bar').val('34');
        $(this).prevAll().addClass('border-change');  
        $(this).addClass('border-change');
         $('.percent').html("33% Complete");
       }else if ($(this).hasClass('third')){
        $(this).nextAll().removeClass('border-change');  
        $('#progress-bar').val('67');
        $(this).prevAll().addClass('border-change'); 
        $(this).addClass('border-change');
        $('.percent').html("66% Complete");
       } else{
        $('#progress-bar').val('100');
         $(this).addClass('border-change');
        $(this).prevAll().addClass('border-change');
         $('.percent').html("100% Complete");
       }
  });
});// complete click 
    </script>
</body>

</html>
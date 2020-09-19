<?php $this->view('web/header')?>
      <div class="page-wrapper">
            
            <!-- start: Inner page hero -->
            <section class="bg-image space-md" data-image-src="<?php echo base_url(); ?>web-assets/images/profile-banner.jpg">
               <div class="profile">
                  <div class="container">
                     <div class="row">
                        <div class="col-xs-12 col-sm-12  col-lg-12 text-center">
                                <h1 class="font-white text-center">Careers</h1> 
								</div>
                        
                     </div>
                  </div>
               </div>
            </section>
            <!-- end:Inner page hero -->
            
           <section class="food__about__us__area  bg--white  static">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="content">
               <div class="demo">

    <div class="row careers_top">
	<div class="col-xs-4"><h5>Role</h5></div>
	<div class="col-xs-4"><h5>Functional Area</h5></div>
	<div class="col-xs-4"><h5>Experience</h5></div>
	</div>
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
<?php $i= 1; foreach($careers as $o){ ?>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne<?php echo $o['id'];  ?>" aria-expanded="true" aria-controls="collapseOne">
                        <!-- <i class="fa fa-plus" aria-hidden="true"></i> -->
                       <div class="row careers_top">
	<div class="col-xs-4"><span><?php echo $o['title'];  ?></span></div>
	<div class="col-xs-4"><span><?php echo $o['functional_area']; ?></span></div>
	<div class="col-xs-4"><span><?php echo $o['experience']; ?></span></div>
	</div>
                    </a>
                </h4>
            </div>
            <div id="collapseOne<?php echo $o['id'];  ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
				<div>
				<?php echo $o['content']; ?>
				<!--<p class="contact-form">
					<div class="row text-center">
					            <input class="btn btn-orange" type="submit" name="submit" value="Apply Now">
					        </div>

				</p>-->
			</div>
                </div>
            </div>
        </div>
<?php $i++; } ?>
        

       

    </div><!-- panel-group -->
    
    
</div><!-- container -->
            </div>
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
	<script>
	function toggleIcon(e) {
    $(e.target)
        .prev('.panel-heading')
        .find(".more-less")
        .toggleClass('fa-plus fa-minus');
}
$('.panel-group').on('hidden.bs.collapse', toggleIcon);
$('.panel-group').on('shown.bs.collapse', toggleIcon);
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
</body>

</html>

    <footer class="footer footer-static footer-light navbar-border">
         <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
            <span class="float-md-left d-xs-block d-md-inline-block">
                © 2018 Storkks 
            </span>
        </p>
            
    </footer>
  

    <!-- BEGIN VENDOR JS-->
    <script src="<?php echo base_url(); ?>restaurant-assets/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
        <!-- BEGIN PAGE VENDOR JS-->
    <script src="<?php echo base_url(); ?>restaurant-assets/js/raphael-min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/morris.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/unslider-min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/horizontal-timeline.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
        <!-- BEGIN STACK JS-->
    <script src="<?php echo base_url(); ?>restaurant-assets/js/app-menu.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/app.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/customizer.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/dataTables.buttons.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/buttons.flash.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/jszip.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/pdfmake.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/vfs_fonts.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/buttons.html5.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/buttons.print.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/jquery.raty.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/datatable-advanced.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/rating.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/star.rating.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/froala_editor.pkgd.min.js" type="text/javascript"></script>
    <!-- END STACK JS-->
    
    <script src="<?php echo base_url(); ?>restaurant-assets/js/scripts.js" type="text/javascript"></script>
<script>

$(document).on('click', '.float-xs-center', function(){
var orderid = $(this).attr('id');
alert(orderid);
//$("#item_adiv_"+qnty).hide();
$("#orderform"+orderid).hide();
	});
 window.setTimeout(update, 4000);
function update() {
var clval =	$('.float-xs-center').attr('id');

//					 location.reload();
  var Url = '<?php echo site_url('Shop/Orderscount/');?>';
$.ajax({
                url : Url,
                method : "POST",
				dataType:"json",   
				success: function(data){
			
				 window.setTimeout(update, 5000);
				console.log(data);
//				alert(data.shoporders);
				 $("#tot_incom_order").html(data.count);
				 var order=data.shoporders;
				 $.each(order, function (key, data) {
					 if(clval==data.o_id){
		$("#new_order").html("<span id='"+data.o_id+"' class='float-xs-center order"+data.o_id+"'><a >New Order <i class='ft-arrow-right'></i>"+data.o_id+"</a></span><br>");
					 }else{
		$("#new_order").append("<span id='"+data.o_id+"' class='float-xs-center order"+data.o_id+"'><a  >New Order "+data.o_id+"<i class='ft-arrow-right'></i></a></span><br>");						 
					 }
				 });
				 
   				//	 location.reload();
                },
    error: function(){
      		console.log("loading data failed");
    }
            });
}
</script>  
</body>
</html>

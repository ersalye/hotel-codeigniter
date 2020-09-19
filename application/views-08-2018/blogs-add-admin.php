<?php  $this->load->view('adminheader');	?>
       <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                                <div class="card">
    <div class="card-header">
        <h3 class="card-title">Add Notice</h3>
    </div>
	<style>
                     .req{
                     color:red;
                     }
                  </style>
    <div class="card-body collapse in">
        <div class="card-block">
            <form class="form-horizontal" role="form" method="POST" action="" enctype="multipart/form-data">
                
                <div class="form-group col-xs-12 mb-2">
                    <label for="name">Title <span class="req">*</span></label>
                    <input type="text" id="title"  class="form-control" required  name="title"/>
                                        </div>
				<div class="form-group col-xs-12 mb-2">
                    <label>Categories</label>
                    <select name="category" class="form-control" required>
						<option value="">Choose Category</option>
						<option value="1">Maxican Food</option>
						<option value="2">Pizza</option>
						<option value="3">Food & Beverage</option>
						<option value="4">Asian Twist</option>
						<option value="5">Taco Food</option>
                    </select>
                </div>
                <div class="form-group col-xs-12 mb-2">
                    <label for="name">Short Notes <span class="req">*</span></label>
                    <input type="text" class="form-control"  name="short" required />

                </div>
                <div class="form-group col-xs-12 mb-2">
                    <label for="name">Content <span class="req">*</span></label>
                   <textarea name="content" id="editor1" required><p></p></textarea>
            
					
                </div>
				<div class="form-group col-xs-12">
					<label for="avatar">Image <span class="req">*</span></label>
					<input type="file" accept="image/*" name="avatar" class="dropify" id="avatar" aria-describedby="fileHelp" required>
				 </div>
			<div class="form-group col-xs-12 mb-2">
                    <label>Status</label>
				<select name="status" class="form-control" required>
						<option value="1">Yes</option>
						<option value="2">No</option>
				</select>
			</div>
            <div class="col-xs-12 mb-2">
                    <a href="<?php echo base_url('Admin'); ?>" class="btn btn-warning mr-1">
                        <i class="ft-x"></i> Cancel
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-check-square-o"></i> Save
                    </button>
            </div>
            </form>
        </div>
    </div>
</div>

            </div>
        </div>
    </div>
 
      <footer class="footer footer-static footer-light navbar-border">
         <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
            <span class="float-md-left d-xs-block d-md-inline-block">
            © 2018 Storkks 
            </span>
         </p>
      </footer>
     
      <!-- BEGIN VENDOR JS-->
    <script src="<?php echo base_url(); ?>admin-assets/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
        <!-- BEGIN PAGE VENDOR JS-->
    <script src="<?php echo base_url(); ?>admin-assets/js/raphael-min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/morris.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/unslider-min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/horizontal-timeline.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
        <!-- BEGIN STACK JS-->
	 <script src="<?php echo base_url(); ?>admin-assets/js/app-menu.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/app.min.js" type="text/javascript"></script>	
  
    <script src="<?php echo base_url(); ?>admin-assets/js/dropify.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/bootstrap-clockpicker.min.js" type="text/javascript"></script>
    <!-- END STACK JS-->
        
     <!-- BEGIN PAGE LEVEL JS-->
   
   <script type="text/javascript">
    function disableEnterKey(e)
    {
        var key;
        if(window.e)
            key = window.e.keyCode; // IE
        else
            key = e.which; // Firefox

        if(key == 13)
            return e.preventDefault();
    }
    $('.clockpicker').clockpicker({
        donetext: "Done"
    });
    $('.dropify').dropify();
    $('#everyday').change(function() {
        if($(this).is(":checked")) {
            $('.everyday').show();
            $('.singleday').hide();
            $('.singleday .chk').prop('checked',false);
            $('.everyday .chk').prop('checked',true);
        }else{
            $('.everyday').hide();
            $('.singleday').show();
            $('.everyday .chk').prop('checked',false);
            $('.singleday .chk').prop('checked',true);
        }
    });
</script>
    <!--   END STACK JS
     BEGIN PAGE LEVEL JS-->
     <script src="https://sdk.ckeditor.com/vendor/ckeditor/4.9.2/ckeditor.js"></script>
      <script>
                CKEDITOR.replace( 'editor1' );
            </script>
   </body>
</html>
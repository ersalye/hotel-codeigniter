	  <?php  $this->load->view('adminheader');	?>
<div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                                <div class="card">
    <div class="card-header">
        <h3 class="card-title">Create Promocode</h3>
    </div>
    <div class="card-body collapse in">
        <div class="card-block">
            <form role="form" method="POST" action="" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="EfpS9wfDaFRvZ5HXrsXG43sCN0Ui2NTTXTmJ8VF2">

                <div class="form-group">
                    <label for="promo_code">Promo Code</label>

                    <input id="promo_code" type="text" class="form-control" name="promo_code" value="<?php if (!empty($pages)){echo $pages['promo_code']; }?>" required autofocus>

                                    </div>
                <div class="form-group">
                    <label for="promo_code">Discount</label>

                    <input id="discount" type="number" class="form-control" name="discount" value="<?php if (!empty($pages)){echo $pages['discount']; }?>" required >

                                    </div>
                <div class="form-group">
                    <label for="status">Promocode Type</label>

                    <select class="form-control" id="promocode_type" name="promocode_type">
					<?php if (!empty($pages)){ ?>
                        <option value="amount" <?=$pages['promocode_type'] == 'amount' ? ' selected="selected"' : '';?>>Amount</option>
                        <option value="percent" <?=$pages['promocode_type'] == 'percent' ? ' selected="selected"' : '';?>>Percent</option>
						 <?php  } else{ ?>
                    <option value="amount" >Amount		</option>
                        <option value="percent">Percent</option>
						 <?php } ?>	
						</select>

                                    </div>
				<div class="form-group col-xs-12 mb-2">
                    <label for="name">Description</label>
                    <textarea id="notice"  class="form-control "  name="description"  required ><?php if (!empty($pages)){echo $pages['description']; }?></textarea>

                                        </div>
						<div class="input-append date" id="dp3" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
  <input class="span2" size="16" type="text" value="12-02-2012">
  <span class="add-on"><i class="icon-th"></i></span>
</div>				
                <!-- <div class="form-group">
                    <label for="status">status</label>

                    <select class="form-control" id="status" name="status">
					<?php if (!empty($pages)){ ?>
                        <option value="ADDED"<?=$pages['promocode_type'] == 'ADDED' ? ' selected="selected"' : '';?>>ADDED</option>
                        <option value="EXPIRED"<?=$pages['promocode_type'] == 'EXPIRED' ? ' selected="selected"' : '';?>>EXPIRED</option>
					<?php  } else{ ?>	
					<option value="ADDED">ADDED</option>
                        <option value="EXPIRED">EXPIRED</option>
					<?php } ?>
                    </select>

                                    </div>-->
                 <div class="form-group">
                    <label for="expiration">Expaire Date</label>

                    <input id="expiration" type="text" class="form-control datepicker" data-date-format="yyyy-mm-dd" name="expiration" value="<?php if (!empty($pages)){echo $pages['expiration']; }?>" required >

                                    </div>
                 <div class="col-xs-12 mb-2">
                    <a href="<?php echo base_url(); ?>Admin/Promocodes" class="btn btn-warning mr-1">
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
    <!-- END PAGE VENDOR JS-->
        <!-- BEGIN STACK JS-->
    <script src="<?php echo base_url(); ?>admin-assets/js/app-menu.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/app.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/customizer.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- END STACK JS-->
        
     <!-- BEGIN PAGE LEVEL JS-->
<script>
$('.datepicker').datepicker();
</script>

    <script src="<?php echo base_url(); ?>admin-assets/js/scripts.js" type="text/javascript"></script>

</body>
</html>
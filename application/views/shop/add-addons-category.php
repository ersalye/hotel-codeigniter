	   <?php  $this->load->view('shop/shop-header');	?>	
	   <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                            
        <div class="card-box table-responsive">

            <form role="form" method="POST" action="" enctype="multipart/form-data">
               

                
                        <h4 class="m-t-0 header-title">
                            <b>Create Addon</b>
                        </h4>
                        <hr>

                        <div class="form-group">
                            <label for="category">Shop Name</label>

                            
                                
                    <p><?php echo $this->session->userdata['Shopname']; ?></p>
                   <input type="hidden" value="<?php echo $this->session->userdata['Shopid']; ?>" name="shop_id" />
                   <input type="hidden" value="<?php echo $this->session->userdata['Shopname']; ?>" name="shop_name" />
                                    
                                <?php //print_r($addons); ?>
                            
                                                    </div>

                        <div class="form-group">
                            <label for="name">Name</label>

                            <input id="name" type="text" class="form-control" name="name" value="<?php if (!empty($addons)){echo $addons['addon_cat_name']; }?>" required autofocus>

                        </div>
                        
					
						<div class="form-group">
						<label for="status">Status</label>
						<select class="form-control" id="status" name="status">

						<?php if (!empty($addons)){ ?>
						<option value="Active" <?=$addons['status'] == 'Active' ? ' selected="selected"' : '';?>>Active</option>
						<option value="Inactive" <?=$addons['status'] == 'Inactive' ? ' selected="selected"' : '';?>>Inactive</option>
						<?php  } else{ ?>
						<option value="Active">Active</option>
						<option value="Inactive">Inactive</option>
						<?php } ?>		
						</select>
						</div>
				
                        <div class="col-md-4 col-md-offset-4">
                            <button type="submit" class="btn btn-primary btn-block">
                                Save
                            </button>
                        </div>
                   
            </form>
       
</div>
            </div>
        </div>
    </div>


   
   <?php  $this->load->view('shop/shop-footer');	?>	 

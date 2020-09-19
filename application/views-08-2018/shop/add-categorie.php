   <?php  $this->load->view('shop/shop-header');	?>	
	  	     <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                                 <div class="card">
    <div class="card-header">
        <h3 class="card-title">Create Category</h3>
    </div>
    <div class="card-body collapse in">
        <div class="card-block">
            <form role="form" method="POST" action="" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="wfoddVYuew6iRgIErkPWmJQvw3Ldjlu1eQ4rLzZz">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input id="name" type="text" class="form-control" name="name" value="<?php if (!empty($category)){echo $category['cat_name']; }?>" required autofocus>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required>
				 	<?php if (!empty($category)){echo $category['cat_description']; }?></textarea>
                </div>
                <!--<div class="form-group">
                
                    <label for="description">Avilable Timings</label></div>
					<div class="form-group">
					<div class="col-xs-6">
                                       
                                          
                                          <div class="input-group clockpicker">
                                             <input type="text" class="form-control" name="cat_opens" value="<?php if (!empty($category)){echo $category['cat_opens']; }?>" placeholder="From">
                                             <span class="input-group-addon">
                                             <i class="fa fa-clock-o"></i>
                                             </span>
                                          </div>
                                      
                                    </div>
									<div class="col-xs-6">
                                      
                                         
                                          <div class="input-group clockpicker">
                                             <input type="text" class="form-control" name="cat_close" value="<?php if (!empty($category)){echo $category['cat_close']; }?>" placeholder="To">
                                             <span class="input-group-addon">
                                             <i class="fa fa-clock-o"></i>
                                             </span>
                                          </div>
                                      
                                    </div>
                </div>-->
                <div class="form-group">
                    <label for="parent_id"> <strong>Shop:</strong> <?php echo $this->session->userdata['Shopname']; ?></label>
                    <input name="shop_id" type="hidden" value="<?php echo $this->session->userdata['Shopid']; ?>" />
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status">
                        
					<?php if (!empty($category)){ ?>
                    <option value="Enabled" <?=$category['status'] == 'Enabled' ? ' selected="selected"' : '';?>>Enabled</option>
                    <option value="Disabled" <?=$category['status'] == 'Disabled' ? ' selected="selected"' : '';?>>Disabled</option>
					<?php  } else{ ?>
                   <option value="enabled">Enabled</option>
                   <option value="disabled">Disabled</option>
					 <?php } ?>		
                    </select>
				</div>
                <div class="form-group">
                    <label for="status">Category order</label>
                    <input type="number" class="form-control" value="<?php if (!empty($category)){echo $category['cat_order']; }?>" id="position" name="position"/>
                </div>
               <!-- <div class="form-group">
                    <label for="image">Image</label>
		<div id="dropify-file">
		<input type="hidden" name="avatarimage" value="<?php if (!empty($category)){echo $category['cat_image']; }?>" >
                    <input type="file" accept="image/*" name="avatar" class="dropify" id="image" aria-describedby="fileHelp">
					
				</div>
<div id="dropify-idp" class="dropify-wrapper has-preview">
<div class="dropify-loader" style="display: none;"></div>
<div class="dropify-errors-container"><ul></ul></div>
<button type="button" id="dropify-clearr" class="dropify-clear">Remove</button><div class="dropify-preview" style="display: block;"><span class="dropify-render"><img src="<?php echo base_url(); ?>uploads/images/<?php if (!empty($category)){echo $category['cat_image']; }?>"></span><div class="dropify-infos"><div class="dropify-infos-inner">
<p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"><?php if (!empty($category)){echo $category['cat_image']; }?></span></p>
<p class="dropify-infos-message">Drag and drop or click to replace</p></div></div></div></div>				</div>-->
				
                <div class="col-xs-12 mb-2">
                <a href="<?php echo base_url(); ?>/Shop/Category" class="btn btn-warning mr-1">
                    <i class="ft-x"></i> Cancel </a>
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
  <?php  $this->load->view('shop/shop-footer');	?>	
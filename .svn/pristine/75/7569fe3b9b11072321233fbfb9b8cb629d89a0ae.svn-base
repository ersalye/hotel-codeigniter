   <?php  $this->load->view('shop/shop-header');	?>	
	   <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                                 
<!-- File export table -->
                <div class="row file">
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-header">
                                                            <h4 class="card-title">Categories</h4>
							<div class="table-btn btn btn-icon btn-success">	<?php echo $this->session->flashdata('catdelete'); ?>							</div>
							<div class="table-btn btn btn-icon btn-success">	<?php echo $this->session->flashdata('msg'); ?>							</div>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a href="Addcategory" class="btn btn-primary add-btn btn-darken-3">Add Category</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body collapse in">
                                <div class="card-block card-dashboard table-responsive">
                                    <table class="table table-striped table-bordered file-export">
                                        <thead>
                                            <tr>
                                                <th>S.no</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody><?php $i= 1; foreach($category as $p){ ?>
										<tr>
										<td><?php echo $i; ?></td>
										<td><?php echo $p['cat_name']; ?></td>
                                        <td><?php echo $p['cat_description']; ?></td>
                                        <td><img src="<?php echo base_url(); ?>uploads/images/<?php echo $p['cat_image']; ?>" width="50px" height="50"></td>
                                        <td><?php echo $p['status']; ?></td>
								<td><a href="EditCategory/<?php echo $p['id']; ?>" class="table-btn btn btn-icon btn-success"><i class="fa fa-pencil-square-o"></i></a>
                                <a href="Categorydelete/<?php echo $p['id']; ?>" class="table-btn btn btn-icon btn-danger">Remove</a></td>
                                        </tr>
										 <?php $i++; } ?>
										</tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- File export table -->
            </div>
        </div>
    </div>
   <?php  $this->load->view('shop/shop-footer');	?>	
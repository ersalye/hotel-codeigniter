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
                            <h4 class="card-title">Addons Category</h4>
							<div class="table-btn btn btn-icon btn-success">	<?php echo $this->session->flashdata('addondelete'); ?>							</div>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        <li><a href="<?php echo base_url(); ?>Shop/AddAddonscat" class="btn btn-primary add-btn btn-darken-3">Add Addon Category</a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body collapse in">
                <div class="card-block card-dashboard table-responsive">
                    <table class="table table-striped table-bordered file-export">
                        <thead>
                            <tr>
                                <th>Sl.No</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php $i= 1; foreach($addons as $p){ ?>
									<tr>
										<td><?php echo $i; ?></td>
										<td><?php echo $p['addon_cat_name']; ?></td>
                                        <td><?php echo $p['status']; ?></td>
                                        <td><a href="EditAddoncat/<?php echo $p['id']; ?>" class="table-btn btn btn-icon btn-success"><i class="fa fa-pencil-square-o"></i></a>
                                <a href="CatAddondelete/<?php echo $p['id']; ?>" class="table-btn btn btn-icon btn-danger">Remove</a></td>
									</tr>
									<?php $i++; } ?>

                                                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>

   <?php  $this->load->view('shop/shop-footer');	?>	 

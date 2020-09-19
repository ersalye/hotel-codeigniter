<?php  $this->load->view('adminheader');	?>
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
                           <h4 class="card-title">Blog</h4>
                           <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                           <div class="heading-elements">
                              <ul class="list-inline mb-0">
                                 <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                 <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                 <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                 <li><a href="#" class="btn btn-primary add-btn btn-darken-3">Add New</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="card-body collapse in">
                           <div class="card-block card-dashboard table-responsive">
                              <table class="table table-striped table-bordered file-export">
                                 <thead>
                                    <tr>
                                       <th>S.No</th>
                                       <th>Title</th>
                                       <th>Index</th>
                                       <th>Categories</th>
                                       <th>Created Date</th>
                                       <th>Updated Date</th>
                                       <th>Status</th>
                                       <th>Actions</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php $i= 1; foreach($blogs as $b){ ?>
								<tr>
										<td><?php echo $i; ?></td>
                                       <td><?php echo $b['title']; ?></td>
                                       <td><?php echo $b['short']; ?></td>
                                       <td>Maxican Food</td>
                                       <td><?php echo $b['create_date']; ?></td>
                                       <td><?php echo $b['modified_date']; ?></td>
                                       <td>
                                         <span class="tag  tag-success">Active</span>
                                       </td>
                                       <td>
                                          <a href="#" class="table-btn btn btn-icon btn-success"><i class="fa fa-pencil-square-o"></i></a>
                                          <button   class="table-btn btn btn-icon btn-danger" form="resource-delete-1" ><i class="fa fa-trash-o"></i></button>
                                          <form id="resource-delete-1" action="#" method="POST">
                                             <input type="hidden" name="_token">
                                             <input type="hidden" name="_method" value="DELETE">
                                          </form>
                                       </td>
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

    <footer class="footer footer-static footer-light navbar-border">
         <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
            <span class="float-md-left d-xs-block d-md-inline-block">
                © 2018 Storkks 
            </span>
        </p>
            
    </footer>
    <script>
    var resizefunc = [];
    </script>

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
    <script src="<?php echo base_url(); ?>admin-assets/js/customizer.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/dataTables.buttons.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/buttons.flash.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/jszip.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/pdfmake.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/vfs_fonts.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/buttons.html5.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/buttons.print.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/jquery.raty.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/datatable-advanced.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/rating.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/star.rating.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/froala_editor.pkgd.min.js" type="text/javascript"></script>
    <!-- END STACK JS-->
        
     <!-- BEGIN PAGE LEVEL JS-->
   
    

    <script src="<?php echo base_url(); ?>admin-assets/js/scripts.js" type="text/javascript"></script>

</body>
</html>
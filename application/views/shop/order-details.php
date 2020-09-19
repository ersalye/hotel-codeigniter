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
                                <h4 class="card-title">Order Info Details</h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                       
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body collapse in">
                                <div class="card-block card-dashboard table-responsive">
								
                                    <table class="table table-striped table-bordered file-export">
                                        <thead>
                                            <tr>
                                                <th>SN</th>
                                                <th>Item Id</th>
                                                <th>Item Name</th>
                                                <th>Quantity  </th>
                                                <th>Price  </th>
                                                <th>Order No </th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                                  <?php //print_r($orders_details);
												  $i= 1; foreach($orders_details as $o){ ?>
													<tr>
													<td><?php echo $i; ?></td>
													<td> <?php echo $o['itemid']; ?> </td>
													<td> <?php echo $o['item_name']; ?> </td>
													<td> <?php echo $o['qty']; ?> </td>
													<td> <?php echo $o['item_price']; ?> </td>
													<td> <?php echo $o['o_id']; ?></td>

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


                 <!-- Menu List Modal Starts -->
    <div class="modal fade text-xs-left" id="menu-list">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h2 class="modal-title" id="myModalLabel1">Menu List</h2>
                </div>
                <div class="modal-body">
                    <div class="row m-0">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Product Image</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <div class="bg-img order-img" style="background-image: url(../assets/img/product-1.jpg);"></div>
                                        </th>
                                        <td>Burger Bistro</td>
                                        <td>$100</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu List Modal Ends -->
            </div>
        </div>
    </div>
 
   <?php  $this->load->view('shop/shop-footer');	?>	 

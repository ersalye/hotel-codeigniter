   <?php  $this->load->view('shop/shop-header');	?>		 
   <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                                 <div class="card">
    <div class="card-header">
        <h4 class="card-title">Deliveries</h4>
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
        <div class="card-block">
            <form>
            <input type="hidden" name="list" value="true" />
            <input type="hidden" name="all" value="" />
           <!--  <div class="form-group col-xs-12 mb-2">
                
                <div class="form-group col-xs-6 ">
                    <label>Delivery People</label>
                    <select id="user_name" name="dp" class="form-control">
                         <option value=""   >Select</option>
                                                    <option value="1"    >Veer</option>
                                                    <option value="2"    >Noah Demo</option>
                                                    <option value="3"    >Raj</option>
                                                    <option value="4"    >Mason Demo</option>
                                                    <option value="5"    >vineeth</option>
                                                    <option value="6"    >Ranveer</option>
                                                    <option value="7"    >Ryan</option>
                                                    <option value="8"    >Cathy</option>
                                                    <option value="9"    >Jam Demo</option>
                                                    <option value="10"    >charlie</option>
                                                    <option value="11"    >Nik Demo</option>
                                                    <option value="12"    >saara</option>
                                                    <option value="13"    >Ram Demo</option>
                                                   
                                            </select>
                </div>
				<div class="form-group col-xs-6 ">
                    <label>Status</label>
                    <select id="user_name" name="st" class="form-control">
                        <option value=""   >Select</option>
                        <option value="completed"    >Completed</option>        
                        <option value="cancelled"    >Cancelled</option>
                    </select>
                </div>
            </div>
           <div class="form-group col-xs-12 mb-2">
                
                <div class="form-group col-xs-6 ">
                    <label>Payment Method</label>
                    <select id="user_name" name="pm" class="form-control">
                         <option value=""   >Select</option>
                        <option value="cash"   >Cash</option>
                        <option value="wallet"   >Wallet</option>
                        <option value="card"   >Credit Card</option>
                    </select>
                </div>
            </div>-->
            <div class="form-group col-xs-12 ">
                <div class="form-group col-xs-6 ">
                    <label>Start Date</label>
                    <input type="text" id="date" required  readonly name="start_date" value="" class="form-control datepicker"/>
                </div>
                <div class="form-group col-xs-6 ">
                    <label>End Date</label>
                    <input type="text" id="date" required  readonly name="end_date" value="" class="form-control datepicker"/>
                </div>
            </div>
            <button class="pull-right btn btn-success">Search</button>
            </form>
        </div>
                <div class="card-block card-dashboard table-responsive">
            <div><a href="/admin/orders?list=true&amp;exl=1"  class="btn btn-primary">Export As Excel</a></div>
            <br/>
            <table class="table table-striped table-bordered file-export">
                <thead>
                    <tr>
                        <th>S.no</th>
                        <th>Order No</th>
                        <th>Customer Name</th>
                        <th>Delivery Person</th>
                        <th>Phone No</th>
                        <th>Cost</th>
                        <th>Status</th>
                        <th>Order List</th>
                    </tr>
                </thead>
                <tbody><?php $i= 1; foreach($orders as $o){ ?>
								<tr>
									<td><?php echo $i; ?></td>
                        <td><?php echo $o['o_id']; ?></td>
                        <td>
                            <?php
								$rid = $o['u_id']; 
								$CI =& get_instance();
								$fid = $CI->getcustomer($rid);	
								echo $fid['first_name']; ?>
                        </td>
                           <td><?php echo $o['delivery_person']; 
								if(empty($o['delivery_person'])){
									echo "<div class='danger'>Not Alloted</div>";
								}?></td>
                        <td><?php echo $fid['phone']; ?></td>
                        <td><?php echo $o['total']; ?></td>
                        <td><span class="tag  tag-success 
                                                "><?php echo $o['delivery_person']; 
								if(empty($o['delivery_person'])){
									echo "<div class='danger'>Not Alloted</div>";
								}?></span></td>
                        <td>
                            <a href="<?php echo base_url('Shop/Deliver_detail/').$o['o_id']; ?>" class="btn btn-primary btn-darken-3 tab-order orderlist" data-id="4" >Order List</a>
                        </td>
                    </tr>
					 <?php $i++; } ?>
                                                            
                                    </tbody>
            </table>
        </div>
       <!-- <div class="card-block">
        <h3>Total Earning:- </h3>
                            <div class="row m-0">
                <dt class="col-sm-3 order-txt p-0">Total Earning</dt>
                <dd class="col-sm-9 order-txt "><span>: ₹2133.00</span></dd>
            </div>
            <div class="row m-0">
                <dt class="col-sm-3 order-txt p-0">Commision from Food Items</dt>
                <dd class="col-sm-9 order-txt "><span>: ₹42.81</span> </dd>
            </div>
            <div class="row m-0">
                <dt class="col-sm-3 order-txt p-0">Commision from Delivery Charge</dt>
                <dd class="col-sm-9 order-txt "><span>: ₹22.40</span> </dd>
            </div>
            <div class="row m-0">
                <dt class="col-sm-3 order-txt p-0">Total Commision </dt>
                <dd class="col-sm-9 order-txt "><span>: ₹65.21</span> </dd>
            </div>
                </div>-->
    </div>
</div>


<!-- Order List Modal Starts -->
<div class="modal fade text-xs-left" id="order-list">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h2 class="modal-title" id="myModalLabel1">Order List</h2>
                <!-- <div><p id="order_timer"></p></div> -->
            </div>
            <div class="modal-body">
                <div class="row m-0">
                    <dl class="order-modal-top">
                        <div class="row m-0">
                            <dt class="col-sm-3 order-txt p-0">Order ID</dt>
                            <dd class="col-sm-9 order-txt orderid"></dd>
                        </div>
                        <div class="row m-0">
                            <dt class="col-sm-3 order-txt p-0">Restaurant Name</dt>
                            <dd class="col-sm-9 order-txt rest_name"><span>: </span> Burger King</dd>
                        </div>
                        <div class="row m-0">
                            <dt class="col-sm-3 order-txt p-0">Customer Name</dt>
                            <dd class="col-sm-9 order-txt cust_name"><span>: </span> William Hawings</dd>
                        </div>
                        <div class="row m-0">
                            <dt class="col-sm-3 order-txt p-0">Address</dt>
                            <dd class="col-sm-9 order-txt address">
                                <span>: </span> 20B, Northeasrt Street,
                                <br> Newuork City,
                                <br> United States.
                            </dd>
                        </div>
                        <div class="row m-0">
                            <dt class="col-sm-3 order-txt p-0">Phone Number</dt>
                            <dd class="col-sm-9 order-txt cust_phone"><span>: </span> +12 445 8878 989</dd>
                        </div>
                        <div class="row m-0">
                            <dt class="col-sm-3 order-txt p-0">Delivery Date</dt>
                            <dd class="col-sm-9 order-txt cust_delivery_date"></dd>
                        </div>
                         <div class="row m-0">
                            <dt class="col-sm-3 order-txt p-0">Note</dt>
                            <dd class="col-sm-9 order-txt cust_order_note"></dd>
                        </div>
                        <div class="row m-0">
                            <dt class="col-sm-3 order-txt p-0">Shop Rating</dt>
                            <dd class="col-sm-9 order-txt rate_shop"></dd>
                        </div>
                        <div class="row m-0">
                            <dt class="col-sm-3 order-txt p-0">Delivery boy rating</dt>
                            <dd class="col-sm-9 order-txt rate_deliveryboy"></dd>
                        </div>
                        <div class="row m-0">
                            <dt class="col-sm-3 order-txt p-0">Total Amount</dt>
                            <dd class="col-sm-9 order-txt tot_amt"><span>: </span> $1600</dd>
                            <br/>
                            <br/>
                        </div>
                        <div class="row m-0" >
                            <dt class="col-sm-3 order-txt p-0 status-title">Status</dt>
                            <dt class="col-sm-9 order-txt ">Time</dt>
                        </div>
                         <div class="row m-0" id="order_status_list">
                            <dt class="col-sm-3 order-txt p-0">INCOMING</dt>
                            <dd class="col-sm-9 order-txt ">  2018-03-16 11:42:37</dd>
                        </div>
                        <hr/>
                    </dl>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Product Image</th>
                                    <th>Product Name</th>
                                    <th>Note</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Cost</th>
                                </tr>
                            </thead>
                            <tbody class="cartstbl">
                                
                            </tbody>
                            <tfoot>
                                 <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>Discount</th>
                                    <th class="discount"> ₹ 1600</th>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>Delivery Charge</th>
                                    <th class="delivery_charge"> ₹ 1600</th>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>Tax</th>
                                    <th class="tax"> ₹ 1600</th>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>Total</th>
                                    <th class="tot_amt"> ₹ 1600</th>
                                </tr>
                            </tfoot>
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
<!-- Order List Modal Ends -->
            </div>
        </div>
    </div>

   <?php  $this->load->view('shop/shop-footer');	?>	 

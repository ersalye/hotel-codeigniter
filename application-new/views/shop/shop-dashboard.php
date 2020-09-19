   <?php  $this->load->view('shop/shop-header');	?>	
   <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                                 <!-- Stats -->
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                    <div class="p-2 text-xs-center box-primary bg-primary bg-darken-2 media-left media-middle" style="background-color: #ff6d00 !important;">
                                        <i class="fa fa-cart-arrow-down font-large-2 white"></i>
                                    </div>
                                    <div class="p-2 bg-gradient-x-primary white media-body">
                                        <h5>Orders Received</h5>
                                        <h5 class="text-bold-400"><i class="ft-plus"></i> 0</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                    <div class="p-2 text-xs-center bg-danger bg-darken-2 media-left media-middle">
                                        <i class="fa fa-cart-plus font-large-2 white"></i>
                                    </div>
                                    <div class="p-2 bg-gradient-x-danger white media-body">
                                        <h5>Orders Delivered</h5>
                                        <h5 class="text-bold-400"><i class="ft-arrow-up"></i>0</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                    <div class="p-2 text-xs-center bg-warning bg-darken-2 media-left media-middle">
                                        <i class="icon-basket-loaded font-large-2 white"></i>
                                    </div>
                                    <div class="p-2 bg-gradient-x-warning white media-body">
                                        <h5>Today Earnings</h5>
                                        <h5 class="text-bold-400"><i class="ft-arrow-down"></i> $0</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                    <div class="p-2 text-xs-center bg-success bg-darken-2 media-left media-middle">
                                        <i class="icon-wallet font-large-2 white"></i>
                                    </div>
                                    <div class="p-2 bg-gradient-x-success white media-body">
                                        <h5>Monthly Earnings</h5>
                                        <h5 class="text-bold-400"><i class="ft-arrow-up"></i> $0</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Stats -->
                <!--Product sale & buyers -->
                <div class="row match-height">
                    <div class="col-xl-8 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Products Sales</h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body collapse in">
                                <div class="card-block">
                                    <div id="products-sales" class="height-300"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Recent Deliveries</h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body px-1">
                                <div id="recent-buyers" class="list-group height-300 position-relative">
                                                                        <a href="#" class="list-group-item list-group-item-action media no-border">
                                        <div class="media-left">
                                            <span class="avatar avatar-md avatar-online"><img class="media-object rounded-circle" src="<?php echo base_url(); ?>restaurant-assets/images/avatar-s-7.png" alt="Generic placeholder image"><i></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="list-group-item-heading">bharathi <span class="font-medium-4 float-xs-right pt-1">$33</span></h6>
                                            <p class="list-group-item-text">
                                                <span class="tag tag-primary">Delivered</span>
                                            </p>
                                        </div>
                                    </a>
                                                                        <a href="#" class="list-group-item list-group-item-action media no-border">
                                        <div class="media-left">
                                            <span class="avatar avatar-md avatar-online"><img class="media-object rounded-circle" src="<?php echo base_url(); ?>restaurant-assets/images/avatar-s-7.png" alt="Generic placeholder image"><i></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="list-group-item-heading">bharathi <span class="font-medium-4 float-xs-right pt-1">$28</span></h6>
                                            <p class="list-group-item-text">
                                                <span class="tag tag-primary">Delivered</span>
                                            </p>
                                        </div>
                                    </a>
                                                                        <a href="#" class="list-group-item list-group-item-action media no-border">
                                        <div class="media-left">
                                            <span class="avatar avatar-md avatar-online"><img class="media-object rounded-circle" src="<?php echo base_url(); ?>restaurant-assets/images/avatar-s-7.png" alt="Generic placeholder image"><i></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="list-group-item-heading">David <span class="font-medium-4 float-xs-right pt-1">$1527</span></h6>
                                            <p class="list-group-item-text">
                                                <span class="tag tag-primary">Delivered</span>
                                            </p>
                                        </div>
                                    </a>
                                                                        <a href="#" class="list-group-item list-group-item-action media no-border">
                                        <div class="media-left">
                                            <span class="avatar avatar-md avatar-online"><img class="media-object rounded-circle" src="<?php echo base_url(); ?>restaurant-assets/images/avatar-s-7.png" alt="Generic placeholder image"><i></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="list-group-item-heading">Anu <span class="font-medium-4 float-xs-right pt-1">$235</span></h6>
                                            <p class="list-group-item-text">
                                                <span class="tag tag-primary">Delivered</span>
                                            </p>
                                        </div>
                                    </a>
                                                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Product sale & buyers -->
                <!--Recent Orders & Monthly Salse -->
                <div class="row match-height">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Recent Orders</h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-block">
                                    <p>Total paid invoices <span>$240</span>, unpaid <span>$150</span>. <span class="float-xs-right"><a href="#" >Invoice Summary <i class="ft-arrow-right"></i></a></span></p>
                                </div>
                                <div class="table-responsive">
                                    <table id="recent-orders" class="table table-hover mb-0 ps-container ps-theme-default">
                                        <thead>
                                            <tr>
                                                <th>Order Id</th>
                                                <th>Customer Name</th>
                                                <th>Restaturant Name</th>
                                                <th>Delivery People</th>
                                                <th>Status</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                                                        <tr>
                                                <td class="text-truncate">35</td>
                                                <td class="text-truncate">David</td>
                                                <td class="text-truncate">McDonald&#039;s</td>
                                                <td class="text-truncate"></td>
                                                <td class="text-truncate"><span class="tag tag-default tag-success">RECEIVED</span></td>
                                                <td class="text-truncate">$ 130</td>
                                            </tr>
                                                                                        <tr>
                                                <td class="text-truncate">34</td>
                                                <td class="text-truncate">David</td>
                                                <td class="text-truncate">McDonald&#039;s</td>
                                                <td class="text-truncate"></td>
                                                <td class="text-truncate"><span class="tag tag-default tag-success">RECEIVED</span></td>
                                                <td class="text-truncate">$ 977</td>
                                            </tr>
                                                                                        <tr>
                                                <td class="text-truncate">32</td>
                                                <td class="text-truncate">David</td>
                                                <td class="text-truncate">McDonald&#039;s</td>
                                                <td class="text-truncate"></td>
                                                <td class="text-truncate"><span class="tag tag-default tag-success">RECEIVED</span></td>
                                                <td class="text-truncate">$ 856</td>
                                            </tr>
                                                                                        <tr>
                                                <td class="text-truncate">29</td>
                                                <td class="text-truncate">Rav</td>
                                                <td class="text-truncate">McDonald&#039;s</td>
                                                <td class="text-truncate"></td>
                                                <td class="text-truncate"><span class="tag tag-default tag-success">RECEIVED</span></td>
                                                <td class="text-truncate">$ 185</td>
                                            </tr>
                                                                                        <tr>
                                                <td class="text-truncate">28</td>
                                                <td class="text-truncate">Rav</td>
                                                <td class="text-truncate">McDonald&#039;s</td>
                                                <td class="text-truncate"></td>
                                                <td class="text-truncate"><span class="tag tag-default tag-success">RECEIVED</span></td>
                                                <td class="text-truncate">$ 163</td>
                                            </tr>
                                                                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/Recent Orders & Monthly Salse -->
            </div>
        </div>
    </div>
<?php  $this->load->view('shop/shop-footer');	?>	 
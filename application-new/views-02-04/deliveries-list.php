<?php  $this->load->view('adminheader');	?>	 	 	 
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
            <div class="form-group col-xs-12 mb-2">
                <div class="form-group col-xs-6 ">
                    <label>Restaurant</label>
                    <select id="user_name" name="sp" class="form-control">
                         <option value=""   >Select</option>
                                                    <option value="1"    >Gary Danko</option>
                                                    <option value="2"    >McDonald&#039;s</option>
                                                    <option value="3"    >Waterfall Restaurant</option>
                                                    <option value="11"    >The Thickshake Factory</option>
                                                    <option value="12"    >Behrouz Briyani</option>
                                                    <option value="15"    >Faasos</option>
                                            </select>
                </div>
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
                                                    <option value="14"    >Raj Demo</option>
                                                    <option value="15"    >David</option>
                                                    <option value="16"    >Ravi Demo</option>
                                                    <option value="17"    >vijay</option>
                                                    <option value="18"    >Dev Demo</option>
                                                    <option value="19"    >Ram Demo</option>
                                                    <option value="20"    >Revanth</option>
                                                    <option value="21"    >test</option>
                                                    <option value="23"    >Naveen</option>
                                                    <option value="24"    >Anu</option>
                                                    <option value="25"    >Venu</option>
                                                    <option value="26"    >Alex</option>
                                                    <option value="27"    >Ramkumar</option>
                                                    <option value="28"    >Raja Ganapathi</option>
                                                    <option value="29"    >sugan</option>
                                                    <option value="30"    >Rajkumar</option>
                                                    <option value="31"    >John</option>
                                                    <option value="32"    >venu</option>
                                            </select>
                </div>
            </div>
            <div class="form-group col-xs-12 mb-2">
                <div class="form-group col-xs-6 ">
                    <label>Status</label>
                    <select id="user_name" name="st" class="form-control">
                        <option value=""   >Select</option>
                        <option value="completed"    >Completed</option>        
                        <option value="cancelled"    >Cancelled</option>
                    </select>
                </div>
                <div class="form-group col-xs-6 ">
                    <label>Payment Method</label>
                    <select id="user_name" name="pm" class="form-control">
                         <option value=""   >Select</option>
                        <option value="cash"   >Cash</option>
                        <option value="wallet"   >Wallet</option>
                        <option value="card"   >Credit Card</option>
                    </select>
                </div>
            </div>
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
                        <th>Customer Name</th>
                        <th>Delivery People</th>
                        <th>Restaurant</th>
                        <th>Address</th>
                        <th>Cost</th>
                        <th>Status</th>
                        <th>Order List</th>
                    </tr>
                </thead>
                <tbody>
                                                            <tr>
                        <td>1</td>
                        <td>Tamil</td>
                        <td>
                            John
                        </td>
                        <td>Gary Danko</td>
                        <td>jajja</td>
                        <td>₹59</td>
                        <td><span class="tag  tag-success 
                                                ">COMPLETED</span></td>
                        <td>
                            <button class="btn btn-primary btn-darken-3 tab-order orderlist" data-id="4" >Order List</button>
                        </td>
                    </tr>
                                                            <tr>
                        <td>2</td>
                        <td>Tamil</td>
                        <td>
                            John
                        </td>
                        <td>Gary Danko</td>
                        <td>jajja</td>
                        <td>₹85</td>
                        <td><span class="tag  tag-success 
                                                ">COMPLETED</span></td>
                        <td>
                            <button class="btn btn-primary btn-darken-3 tab-order orderlist" data-id="5" >Order List</button>
                        </td>
                    </tr>
                                                            <tr>
                        <td>3</td>
                        <td>bharathi</td>
                        <td>
                            Ranveer
                        </td>
                        <td>Gary Danko</td>
                        <td>23/573</td>
                        <td>₹28</td>
                        <td><span class="tag  tag-success 
                                                ">COMPLETED</span></td>
                        <td>
                            <button class="btn btn-primary btn-darken-3 tab-order orderlist" data-id="6" >Order List</button>
                        </td>
                    </tr>
                                                            <tr>
                        <td>4</td>
                        <td>David</td>
                        <td>
                            Ranveer
                        </td>
                        <td>Gary Danko</td>
                        <td>12</td>
                        <td>₹42</td>
                        <td><span class="tag  tag-success 
                                                ">COMPLETED</span></td>
                        <td>
                            <button class="btn btn-primary btn-darken-3 tab-order orderlist" data-id="7" >Order List</button>
                        </td>
                    </tr>
                                                            <tr>
                        <td>5</td>
                        <td>Veer</td>
                        <td>
                            Raj
                        </td>
                        <td>Gary Danko</td>
                        <td>hshjsj</td>
                        <td>₹28</td>
                        <td><span class="tag  tag-success 
                                                ">COMPLETED</span></td>
                        <td>
                            <button class="btn btn-primary btn-darken-3 tab-order orderlist" data-id="8" >Order List</button>
                        </td>
                    </tr>
                                                            <tr>
                        <td>6</td>
                        <td>Veer</td>
                        <td>
                            Ranveer
                        </td>
                        <td>Gary Danko</td>
                        <td>hshjsj</td>
                        <td>₹33</td>
                        <td><span class="tag  tag-success 
                                                ">COMPLETED</span></td>
                        <td>
                            <button class="btn btn-primary btn-darken-3 tab-order orderlist" data-id="9" >Order List</button>
                        </td>
                    </tr>
                                                            <tr>
                        <td>7</td>
                        <td>David</td>
                        <td>
                            David
                        </td>
                        <td>Gary Danko</td>
                        <td>12</td>
                        <td>₹199</td>
                        <td><span class="tag  tag-success 
                                                ">COMPLETED</span></td>
                        <td>
                            <button class="btn btn-primary btn-darken-3 tab-order orderlist" data-id="10" >Order List</button>
                        </td>
                    </tr>
                                                            <tr>
                        <td>8</td>
                        <td>David</td>
                        <td>
                            David
                        </td>
                        <td>Gary Danko</td>
                        <td>13</td>
                        <td>₹180</td>
                        <td><span class="tag  tag-success 
                                                ">COMPLETED</span></td>
                        <td>
                            <button class="btn btn-primary btn-darken-3 tab-order orderlist" data-id="11" >Order List</button>
                        </td>
                    </tr>
                                                            <tr>
                        <td>9</td>
                        <td>Tamil</td>
                        <td>
                            John
                        </td>
                        <td>Gary Danko</td>
                        <td>jajja</td>
                        <td>₹59</td>
                        <td><span class="tag  tag-success 
                                                ">COMPLETED</span></td>
                        <td>
                            <button class="btn btn-primary btn-darken-3 tab-order orderlist" data-id="14" >Order List</button>
                        </td>
                    </tr>
                                                            <tr>
                        <td>10</td>
                        <td>Tamil</td>
                        <td>
                            John
                        </td>
                        <td>Gary Danko</td>
                        <td>jajja</td>
                        <td>₹46</td>
                        <td><span class="tag  tag-success 
                                                ">COMPLETED</span></td>
                        <td>
                            <button class="btn btn-primary btn-darken-3 tab-order orderlist" data-id="15" >Order List</button>
                        </td>
                    </tr>
                                                            <tr>
                        <td>11</td>
                        <td>Ramkumar</td>
                        <td>
                            John
                        </td>
                        <td>Gary Danko</td>
                        <td>Ofs</td>
                        <td>₹107</td>
                        <td><span class="tag  tag-success 
                                                ">COMPLETED</span></td>
                        <td>
                            <button class="btn btn-primary btn-darken-3 tab-order orderlist" data-id="17" >Order List</button>
                        </td>
                    </tr>
                                                            <tr>
                        <td>12</td>
                        <td>Ramkumar</td>
                        <td>
                            Ramkumar
                        </td>
                        <td>Gary Danko</td>
                        <td>Ofs</td>
                        <td>₹41</td>
                        <td><span class="tag  tag-success 
                                                ">COMPLETED</span></td>
                        <td>
                            <button class="btn btn-primary btn-darken-3 tab-order orderlist" data-id="20" >Order List</button>
                        </td>
                    </tr>
                                                            <tr>
                        <td>13</td>
                        <td>Ramkumar</td>
                        <td>
                            Ramkumar
                        </td>
                        <td>Gary Danko</td>
                        <td>Ofs</td>
                        <td>₹67</td>
                        <td><span class="tag  tag-success 
                                                ">COMPLETED</span></td>
                        <td>
                            <button class="btn btn-primary btn-darken-3 tab-order orderlist" data-id="21" >Order List</button>
                        </td>
                    </tr>
                                                            <tr>
                        <td>14</td>
                        <td>Ramkumar</td>
                        <td>
                            Ramkumar
                        </td>
                        <td>Gary Danko</td>
                        <td>Ofs</td>
                        <td>₹41</td>
                        <td><span class="tag  tag-success 
                                                ">COMPLETED</span></td>
                        <td>
                            <button class="btn btn-primary btn-darken-3 tab-order orderlist" data-id="22" >Order List</button>
                        </td>
                    </tr>
                                                            <tr>
                        <td>15</td>
                        <td>Richi</td>
                        <td>
                            vijay
                        </td>
                        <td>Gary Danko</td>
                        <td>12</td>
                        <td>₹41</td>
                        <td><span class="tag  tag-success 
                                                ">COMPLETED</span></td>
                        <td>
                            <button class="btn btn-primary btn-darken-3 tab-order orderlist" data-id="26" >Order List</button>
                        </td>
                    </tr>
                                                            <tr>
                        <td>16</td>
                        <td>Richi</td>
                        <td>
                            vijay
                        </td>
                        <td>Gary Danko</td>
                        <td>12</td>
                        <td>₹28</td>
                        <td><span class="tag  tag-success 
                                                ">COMPLETED</span></td>
                        <td>
                            <button class="btn btn-primary btn-darken-3 tab-order orderlist" data-id="28" >Order List</button>
                        </td>
                    </tr>
                                                            <tr>
                        <td>17</td>
                        <td>Vish</td>
                        <td>
                            Noah Demo
                        </td>
                        <td>Gary Danko</td>
                        <td>jxjfjd</td>
                        <td>₹28</td>
                        <td><span class="tag  tag-success 
                                                ">COMPLETED</span></td>
                        <td>
                            <button class="btn btn-primary btn-darken-3 tab-order orderlist" data-id="33" >Order List</button>
                        </td>
                    </tr>
                                                            <tr>
                        <td>18</td>
                        <td>Vish</td>
                        <td>
                            Ranveer
                        </td>
                        <td>Gary Danko</td>
                        <td>jxjfjd</td>
                        <td>₹33</td>
                        <td><span class="tag  tag-success 
                                                ">COMPLETED</span></td>
                        <td>
                            <button class="btn btn-primary btn-darken-3 tab-order orderlist" data-id="34" >Order List</button>
                        </td>
                    </tr>
                                                            <tr>
                        <td>19</td>
                        <td>Vish</td>
                        <td>
                            Ramkumar
                        </td>
                        <td>Gary Danko</td>
                        <td>jxjfjd</td>
                        <td>₹28</td>
                        <td><span class="tag  tag-success 
                                                ">COMPLETED</span></td>
                        <td>
                            <button class="btn btn-primary btn-darken-3 tab-order orderlist" data-id="35" >Order List</button>
                        </td>
                    </tr>
                                                            <tr>
                        <td>20</td>
                        <td>Vish</td>
                        <td>
                            Ranveer
                        </td>
                        <td>Gary Danko</td>
                        <td>jxjfjd</td>
                        <td>₹28</td>
                        <td><span class="tag  tag-success 
                                                ">COMPLETED</span></td>
                        <td>
                            <button class="btn btn-primary btn-darken-3 tab-order orderlist" data-id="39" >Order List</button>
                        </td>
                    </tr>
                                                            <tr>
                        <td>21</td>
                        <td>Raja Demo</td>
                        <td>
                            Ramkumar
                        </td>
                        <td>McDonald&#039;s</td>
                        <td>12</td>
                        <td>₹97</td>
                        <td><span class="tag  tag-success 
                                                ">COMPLETED</span></td>
                        <td>
                            <button class="btn btn-primary btn-darken-3 tab-order orderlist" data-id="45" >Order List</button>
                        </td>
                    </tr>
                                                            <tr>
                        <td>22</td>
                        <td>Raja Demo</td>
                        <td>
                            charlie
                        </td>
                        <td>McDonald&#039;s</td>
                        <td>12</td>
                        <td>₹185</td>
                        <td><span class="tag  tag-success 
                                                ">COMPLETED</span></td>
                        <td>
                            <button class="btn btn-primary btn-darken-3 tab-order orderlist" data-id="46" >Order List</button>
                        </td>
                    </tr>
                                                            <tr>
                        <td>23</td>
                        <td>Raja Demo</td>
                        <td>
                            charlie
                        </td>
                        <td>McDonald&#039;s</td>
                        <td>12</td>
                        <td>₹185</td>
                        <td><span class="tag  tag-success 
                                                ">COMPLETED</span></td>
                        <td>
                            <button class="btn btn-primary btn-darken-3 tab-order orderlist" data-id="47" >Order List</button>
                        </td>
                    </tr>
                                                            <tr>
                        <td>24</td>
                        <td>Ramkumar</td>
                        <td>
                            Ramkumar
                        </td>
                        <td>McDonald&#039;s</td>
                        <td>Ofs</td>
                        <td>₹196</td>
                        <td><span class="tag  tag-success 
                                                ">COMPLETED</span></td>
                        <td>
                            <button class="btn btn-primary btn-darken-3 tab-order orderlist" data-id="48" >Order List</button>
                        </td>
                    </tr>
                                                            <tr>
                        <td>25</td>
                        <td>Dev Demo</td>
                        <td>
                            charlie
                        </td>
                        <td>Gary Danko</td>
                        <td>Kxkd</td>
                        <td>₹28</td>
                        <td><span class="tag  tag-success 
                                                ">COMPLETED</span></td>
                        <td>
                            <button class="btn btn-primary btn-darken-3 tab-order orderlist" data-id="49" >Order List</button>
                        </td>
                    </tr>
                                                            <tr>
                        <td>26</td>
                        <td>Ramkumar</td>
                        <td>
                            Ramkumar
                        </td>
                        <td>McDonald&#039;s</td>
                        <td>Ofs</td>
                        <td>₹185</td>
                        <td><span class="tag  tag-success 
                                                ">COMPLETED</span></td>
                        <td>
                            <button class="btn btn-primary btn-darken-3 tab-order orderlist" data-id="51" >Order List</button>
                        </td>
                    </tr>
                                                            <tr>
                        <td>27</td>
                        <td>Dev Demo</td>
                        <td>
                            charlie
                        </td>
                        <td>Gary Danko</td>
                        <td>Kxkd</td>
                        <td>₹28</td>
                        <td><span class="tag  tag-success 
                                                ">COMPLETED</span></td>
                        <td>
                            <button class="btn btn-primary btn-darken-3 tab-order orderlist" data-id="52" >Order List</button>
                        </td>
                    </tr>
                                                            <tr>
                        <td>28</td>
                        <td>Dev Demo</td>
                        <td>
                            charlie
                        </td>
                        <td>Gary Danko</td>
                        <td>Kxkd</td>
                        <td>₹28</td>
                        <td><span class="tag  tag-success 
                                                ">COMPLETED</span></td>
                        <td>
                            <button class="btn btn-primary btn-darken-3 tab-order orderlist" data-id="53" >Order List</button>
                        </td>
                    </tr>
                                    </tbody>
            </table>
        </div>
        <div class="card-block">
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
                </div>
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
    <script src="<?php echo base_url(); ?>restaurant-assets/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
        <!-- BEGIN PAGE VENDOR JS-->
    <script src="<?php echo base_url(); ?>restaurant-assets/js/raphael-min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/morris.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/unslider-min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/horizontal-timeline.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
        <!-- BEGIN STACK JS-->
    <script src="<?php echo base_url(); ?>restaurant-assets/js/app-menu.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/app.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/customizer.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/dataTables.buttons.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/buttons.flash.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/jszip.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/pdfmake.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/vfs_fonts.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/buttons.html5.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/buttons.print.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/jquery.raty.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/datatable-advanced.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/rating.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/star.rating.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/froala_editor.pkgd.min.js" type="text/javascript"></script>
    <!-- END STACK JS-->
        
     <!-- BEGIN PAGE LEVEL JS-->
   
    <script type="text/javascript">
        //var data = "[{&quot;month&quot;:&quot;2018-01&quot;,&quot;delivered&quot;:&quot;0&quot;,&quot;cancelled&quot;:&quot;0&quot;},{&quot;month&quot;:&quot;2018-02&quot;,&quot;delivered&quot;:&quot;0&quot;,&quot;cancelled&quot;:&quot;0&quot;},{&quot;month&quot;:&quot;2018-03&quot;,&quot;delivered&quot;:&quot;21&quot;,&quot;cancelled&quot;:&quot;11&quot;},{&quot;month&quot;:&quot;2018-04&quot;,&quot;delivered&quot;:&quot;0&quot;,&quot;cancelled&quot;:&quot;0&quot;},{&quot;month&quot;:&quot;2018-05&quot;,&quot;delivered&quot;:&quot;0&quot;,&quot;cancelled&quot;:&quot;0&quot;},{&quot;month&quot;:&quot;2018-06&quot;,&quot;delivered&quot;:&quot;0&quot;,&quot;cancelled&quot;:&quot;0&quot;},{&quot;month&quot;:&quot;2018-07&quot;,&quot;delivered&quot;:&quot;0&quot;,&quot;cancelled&quot;:&quot;0&quot;},{&quot;month&quot;:&quot;2018-08&quot;,&quot;delivered&quot;:&quot;0&quot;,&quot;cancelled&quot;:&quot;0&quot;},{&quot;month&quot;:&quot;2018-09&quot;,&quot;delivered&quot;:&quot;0&quot;,&quot;cancelled&quot;:&quot;0&quot;},{&quot;month&quot;:&quot;2018-10&quot;,&quot;delivered&quot;:&quot;0&quot;,&quot;cancelled&quot;:&quot;0&quot;},{&quot;month&quot;:&quot;2018-11&quot;,&quot;delivered&quot;:&quot;0&quot;,&quot;cancelled&quot;:&quot;0&quot;},{&quot;month&quot;:&quot;2018-12&quot;,&quot;delivered&quot;:&quot;0&quot;,&quot;cancelled&quot;:&quot;0&quot;}]";
        var data = [ 
                        {
                month: "2018-01",  delivered: 0, cancelled: 0
            },
                        {
                month: "2018-02",  delivered: 0, cancelled: 0
            },
                        {
                month: "2018-03",  delivered: 21, cancelled: 11
            },
                        {
                month: "2018-04",  delivered: 0, cancelled: 0
            },
                        {
                month: "2018-05",  delivered: 0, cancelled: 0
            },
                        {
                month: "2018-06",  delivered: 0, cancelled: 0
            },
                        {
                month: "2018-07",  delivered: 0, cancelled: 0
            },
                        {
                month: "2018-08",  delivered: 0, cancelled: 0
            },
                        {
                month: "2018-09",  delivered: 0, cancelled: 0
            },
                        {
                month: "2018-10",  delivered: 0, cancelled: 0
            },
                        {
                month: "2018-11",  delivered: 0, cancelled: 0
            },
                        {
                month: "2018-12",  delivered: 0, cancelled: 0
            },
                    ];
    </script>
     <script src="<?php echo base_url(); ?>restaurant-assets/js/dashboard-ecommerce.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url(); ?>restaurant-assets/js/scripts.js" type="text/javascript"></script>

</body>
</html>
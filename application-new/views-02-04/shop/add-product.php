<?php  $this->load->view('shop/shop-header');	?>	
<div class="app-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-header row"></div>
            <div class="content-body">
                                 <div class="card">
    <div class="card-header">
        <h3 class="card-title">Create Product</h3>
    </div>
    <div class="card-body collapse in">
        <div class="card-block">

            <form role="form" method="POST" action="" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="wfoddVYuew6iRgIErkPWmJQvw3Ldjlu1eQ4rLzZz">

                <input type="hidden" name="shop" value="2" />
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Name</label>

                            <input id="name" type="text" class="form-control" name="name" value="" required autofocus>

                                                    </div>

                        <div class="form-group">
                            <label for="description">Description</label>

                            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>

                                                    </div>

                        <div class="form-group">
                            <label for="category">Category</label>

                            <select class="form-control" id="category" name="category">
                                
                                                                    <option value="23" >Desserts</option>
                                    
                                                                    <option value="15" >Burger and Sandwitches</option>
                                    
                                                                    <option value="16" >McNuggets</option>
                                    
                                                                    <option value="17" >Happy Meals</option>
                                    
                                                               
                            </select>
                                                    </div>
                        <div class="form-group">
                            <label for="status">Status</label>

                            <select class="form-control" id="status" name="status">
                                <option value="enabled">Enabled</option>
                                <option value="disabled">Disabled</option>
                            </select>

                                                    </div>

                        <div class="form-group">
                            <label for="status">Product Order</label>

                            <input type="number" class="form-control" id="product_position" name="product_position"/>
                                

                                                    </div>

                        <div class="form-group">
                            <label for="image">Image</label>

                            <input type="file" accept="image/*" required name="avatar" class="dropify form-control" id="image" aria-describedby="fileHelp">

                                                    </div>
                        <div class="form-group">
                            <label for="featured">Is Featured Product</label>
                            <input type="checkbox" class="form-control" id="featured" name="featured"/>
                            <label for="featured">Featured Position</label>
                            <input type="number" min="0" class="form-control" value="1" id="featured_position" name="featured_position"/>
                          

                                                    </div>
                        <div class="form-group">
                            <label for="image">Featured Image</label>
                            <p>Note:- Please upload Image size 252x152 for featured Product</p>

                            <input type="file" accept="image/*" required name="featured_image" class="dropify form-control" id="featured_image" aria-describedby="fileHelp">

                                                    </div>

                    </div>
                    <div class="col-md-6">

                        <h4 class="m-t-0 header-title">
                            <b>Pricing</b>
                        </h4>
                        <hr>

                        <div class="form-group">
                            <label for="price">Price</label>

                            <input id="price" type="text" class="form-control" name="price" value="" required autofocus>

                                                    </div>

                        <div class="form-group" >
                            <label for="discount">Discount</label>

                            <input id="discount" type="text" class="form-control" name="discount" value="0" required autofocus>

                                                    </div>

                        <div class="form-group" style=>
                            <label for="discount_type">Discount Type</label>

                            <select class="form-control" id="discount_type" name="discount_type">
                                <option value="percentage">Percentage</option>
                                <option value="amount">Amount</option>
                            </select>
							</div>

                        <!-- <div class="form-group">
                            <label for="currency">Currency</label>

                            <select class="form-control" id="currency" name="currency">
                                <option value="₹">₹ - Rupee</option>
                                <option value="$">$ - Dollars</option>
                                <option value="£">£ - Sterling Pounds</option>
                            </select>

                                                    </div> -->

                       
                                                <div class="form-group">
                            <label for="addons">Addons List</label>
                                                        <p><input type="checkbox" name="addons[]" value="5">Chicken McNuggets</p>
                            <p>Price</p>
                            <p><input type="text" class="form-control" name="addons_price[]" value="0"></p>
                                                        <p><input type="checkbox" name="addons[]" value="6">Mexican cheesy Fries</p>
                            <p>Price</p>
                            <p><input type="text" class="form-control" name="addons_price[]" value="0"></p>
                                                        <p><input type="checkbox" name="addons[]" value="7">Fries</p>
                            <p>Price</p>
                            <p><input type="text" class="form-control" name="addons_price[]" value="0"></p>
                                                        <p><input type="checkbox" name="addons[]" value="49">FOOD DRINK</p>
                            <p>Price</p>
                            <p><input type="text" class="form-control" name="addons_price[]" value="0"></p>
                                                                                </div>
                                            </div>
                </div>

                <div class="col-xs-12 mb-2">
                    <a href="<?php echo base_url(); ?>/Shop/Products" class="btn btn-warning mr-1">
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
    <script src="<?php echo base_url(); ?>restaurant-assets/js/dropify.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/bootstrap-clockpicker.min.js" type="text/javascript"></script>
    <!-- END STACK JS-->
        
     <!-- BEGIN PAGE LEVEL JS-->
   
   <script type="text/javascript">
    function disableEnterKey(e)
    {
        var key;
        if(window.e)
            key = window.e.keyCode; // IE
        else
            key = e.which; // Firefox

        if(key == 13)
            return e.preventDefault();
    }
    $('.clockpicker').clockpicker({
        donetext: "Done"
    });
    $('.dropify').dropify();
    $('#everyday').change(function() {
        if($(this).is(":checked")) {
            $('.everyday').show();
            $('.singleday').hide();
            $('.singleday .chk').prop('checked',false);
            $('.everyday .chk').prop('checked',true);
        }else{
            $('.everyday').hide();
            $('.singleday').show();
            $('.everyday .chk').prop('checked',false);
            $('.singleday .chk').prop('checked',true);
        }
    });
</script>
     <script src="<?php echo base_url(); ?>restaurant-assets/js/dashboard-ecommerce.min.js" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDkKetQwosod2SZ7ZGCpxuJdxY3kxo5Po&libraries=places&callback=initMap" async defer></script>
    <script src="<?php echo base_url(); ?>restaurant-assets/js/scripts.js" type="text/javascript"></script>


</body>
</html>	
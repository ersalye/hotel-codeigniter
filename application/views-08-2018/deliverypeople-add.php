<?php  $this->load->view('adminheader');	?>	 
<div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                                <div class="card">
    <div class="card-header">
        <h3 class="card-title">Create Delivery People </h3>
		<?php //print_r($people); ?>
    </div>
    <div class="card-body collapse in">
        <div class="card-block">
            <form class="form-horizontal" id="transporter_form" role="form" method="POST" action="" enctype="multipart/form-data">
                <!--<input type="hidden" name="_token" value="EfpS9wfDaFRvZ5HXrsXG43sCN0Ui2NTTXTmJ8VF2">-->
               
                <div class="form-group col-xs-12 mb-2">
         <input id="name" type="text" class="form-control" name="name" value="<?php if (empty($people)) {  $people ='';}else {echo $people['name']; }?>" required placeholder="Name" autofocus>

                                    </div>
                <div class="form-group col-xs-12 mb-2">
                    <input id="email" type="email" class="form-control" name="email" value="<?php if (empty($people)) {  $people ='';}else {echo $people['email']; }?>" placeholder="Email Address" required>

                      
                </div>
				<div class="form-group col-xs-12 mb-2">
                    <input id="phone" type="text" class="form-control" name="phone" value="<?php if (empty($people)) {  $people ='';}else {echo $people['phone']; }?>" placeholder="Phone number" required>

                      
                </div>
				<div class="form-group col-xs-12 mb-2">
                    <input id="car_number" type="text" class="form-control" name="car_number" value="<?php if (empty($people)) {  $people ='';}else {echo $people['car_number']; }?>" placeholder="Car number / Motor" required>
                </div>
				<div class="form-group col-xs-12 mb-2">
                    <input id="license_number" type="text" class="form-control" name="license_number" value="<?php if (empty($people)) {  $people ='';}else {echo $people['license_number']; }?>" placeholder="Driving License number" required>
                </div>
				<?php if (empty($people)) { ?>
                <div class="form-group col-xs-12 mb-2">
                    <input id="password" type="password" class="form-control" name="password" required  placeholder="Password">

                                    </div>
                
				<?php  }?>
                 <div class="form-group col-xs-12 mb-2">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Address:</label>
                            <input id="pac-input" type="text" class="form-control" name="address"  required placeholder="Address" value="<?php if (empty($people)) {  $people ='';}else {echo $people['address']; }?>"  />
                            <input type="hidden" id="latitude" name="latitude" value="" readonly required>
                            <input type="hidden" id="longitude" name="longitude" value="" readonly required>
                                                    </div>
                        <div class="form-group">
                            <label>Profile Image:</label>
                    <div  id="dropify-file">
			   <input type="hidden" name="avatarimage" value="<?php if (!empty($people)){echo $people['profile_image']; }?>" >
                           <input type="file" accept="image/*" name="avatar" class="dropify form-control" id="avatar" aria-describedby="fileHelp" ></div>
						   <div id="dropify-idp" class="dropify-wrapper has-preview">
<div class="dropify-loader" style="display: none;"></div>
<div class="dropify-errors-container"><ul></ul></div>
<button type="button" id="dropify-clearr" class="dropify-clear">Remove</button><div class="dropify-preview" style="display: block;"><span class="dropify-render"><img src="<?php echo base_url(); ?>uploads/images/<?php if (!empty($people)){echo $people['profile_image']; }?>"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"><?php if (!empty($people)){echo $people['profile_image']; }?></span></p><p class="dropify-infos-message">Drag and drop or click to replace</p></div></div></div></div>

                                                    </div>
                    </div>
                    <div class="col-md-6">
                        <div id="map" style="height:400px;"></div>
                    </div>
                    
                </div>
				 <div class="col-xs-12 mb-2">
                            <label for="parent_id">Status</label>
                            <select class="form-control"  id="status" name="status">
							<?php if (!empty($people)){?> 
                            <option value="1" <?=$people['status'] == '1' ? ' selected="selected"' : '';?>>Active</option>
							<option value="2" <?=$people['status'] == '2' ? ' selected="selected"' : '';?>>Inactive</option>
							<?php }else{ ?>
							<option class="form-control" value="1">Active</option>
							<option class="form-control" value="2">Inactive</option>    
							
								<?php }?>

							
                            </select>

                                                    </div>
                
                <div class="col-xs-12 mb-2">
                    <a href="<?php echo base_url('Admin/DeliveryPeople'); ?>" class="btn btn-warning mr-1">
                        <i class="ft-x"></i> Cancel
                    </a>
                    <button type="submit" onclick="return usercreate();" class="btn btn-primary">
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
    <script src="<?php echo base_url(); ?>admin-assets/js/dropify.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/bootstrap-clockpicker.min.js" type="text/javascript"></script>
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
 
</script>
<script>
    var map;
    var input = document.getElementById('pac-input');
    var latitude = document.getElementById('latitude');
    var longitude = document.getElementById('longitude');
    var address = document.getElementById('address');
//console.log(latitude);
    function initMap() {

        var userLocation = new google.maps.LatLng(
                13.0796758,
                80.2696968
            );

        map = new google.maps.Map(document.getElementById('map'), {
            center: userLocation,
            zoom: 15
        });

        var service = new google.maps.places.PlacesService(map);
        var autocomplete = new google.maps.places.Autocomplete(input);
        var infowindow = new google.maps.InfoWindow();

        autocomplete.bindTo('bounds', map);

        var infowindow = new google.maps.InfoWindow({
            content: "Shop Location",
        });

        var marker = new google.maps.Marker({
            map: map,
            draggable: true,
            anchorPoint: new google.maps.Point(0, -29)
        });

        marker.setVisible(true);
        marker.setPosition(userLocation);
        infowindow.open(map, marker);

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(location) {
                var userLocation = new google.maps.LatLng(
                    location.coords.latitude,
                    location.coords.longitude
                );
                marker.setPosition(userLocation);
                map.setCenter(userLocation);
                map.setZoom(13);
            });
        }

        google.maps.event.addListener(map, 'click', updateMarker);
        google.maps.event.addListener(marker, 'dragend', updateMarker);

        function updateMarker(event) {
            var geocoder = new google.maps.Geocoder();
            geocoder.geocode({'latLng': event.latLng}, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results[0]) {
                        input.value = results[0].formatted_address;
                        updateForm(event.latLng.lat(), event.latLng.lng(), results[0].formatted_address);
                    } else {
                        alert('No Address Found');
                    }
                } else {
                    alert('Geocoder failed due to: ' + status);
                }
            });

            marker.setPosition(event.latLng);
            map.setCenter(event.latLng);
        }

        autocomplete.addListener('place_changed', function(event) {
            marker.setVisible(false);
            var place = autocomplete.getPlace();

            if (place.hasOwnProperty('place_id')) {
                if (!place.geometry) {
                    window.alert("Autocomplete's returned place contains no geometry");
                    return;
                }
                updateLocation(place.geometry.location);
            } else {
                service.textSearch({
                    query: place.name
                }, function(results, status) {
                    if (status == google.maps.places.PlacesServiceStatus.OK) {
                        updateLocation(results[0].geometry.location, results[0].formatted_address);
                        input.value = results[0].formatted_address;
                    }
                });
            }
        });

        function updateLocation(location) {
            map.setCenter(location);
            marker.setPosition(location);
            marker.setVisible(true);
            infowindow.open(map, marker);
            updateForm(location.lat(), location.lng(), input.value);
        }

        function updateForm(lat, lng, addr) {
            console.log(lat,lng, addr);
            latitude.value = lat;
            longitude.value = lng;
            address.value = addr;
        }
    }
</script>
<?php if (!empty($people)){ ?> 
<script>
$(document).ready(function(){
    $("#dropify-file").hide();
    $("#dropify-clearr").click(function(){
       $("#dropify-idp").hide();
       $("#dropify-file").show();
    });
});
</script><?php }else{ ?>
<script>
$(document).ready(function(){
        $("#dropify-idp").hide();
        $("#dropify-file").show();
});
</script>
<?php } ?>
   
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDkKetQwosod2SZ7ZGCpxuJdxY3kxo5Po&libraries=places&callback=initMap" async defer></script>
    <script src="<?php echo base_url(); ?>admin-assets/js/scripts.js" type="text/javascript"></script>

</body>
</html>
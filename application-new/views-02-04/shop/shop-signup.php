
<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Storkks</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>restaurant-assets/images/favicon.png">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>restaurant-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>restaurant-assets/css/style.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>restaurant-assets/css/extensions/pace.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>restaurant-assets/css/unslider.css">
    <link rel="stylesheet" type="text/css" href="Climacons-Font-master/climacons.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>restaurant-assets/css/style1.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>restaurant-assets/css/morris.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN STACK CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>restaurant-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>restaurant-assets/css/app.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>restaurant-assets/css/colors.min.css">
    <!-- END STACK CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>restaurant-assets/css/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>restaurant-assets/css/vertical-overlay-menu.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>restaurant-assets/css/style2.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>restaurant-assets/css/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>restaurant-assets/css/timeline.min.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>restaurant-assets/css/star.rating.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>restaurant-assets/css/froala_editor.pkgd.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>restaurant-assets/css/style.css">
	 <link rel="stylesheet" href="<?php echo base_url(); ?>restaurant-assets/css/bootstrap-clockpicker.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>restaurant-assets/css/dropify.min.css" />
    
   
</head>
<body>
    <div class="login bg-img" style="background-image: url(images/login-bg.jpg);">
       <div class="login-overlay"></div>
        <div class="login-content">
            <div class="login-content-inner">
                                <div class="panel-heading">
                    <h3 class="text-center">Register as <strong class="text-custom">Foodie Vendor</strong> </h3>
                </div>

                <div class="wizard">
                    <div class="wizard-inner">
                        <ul class="nav nav-tabs row" role="tablist">
                            <li role="presentation" class="active col-sm-6">
                                <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Profile">
                                    <p><span class="fa fa-user"></span></p>
                                    Profile
                                </a>
                            </li>

                            <li role="presentation" class="disabled col-sm-6">
                                <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Location">
                                    <p><span class="fa fa-map-marker"></span></p>
                                    Location
                                </a>
                            </li>
                        </ul>
                    </div>


                    <form class="form-horizontal" role="form" method="POST" action="">
                        <input type="hidden" name="_token" value="sp3cFNsmDM2QZx9dssMS79Iv2O04uVUu5drQZB9s">
                        <input type="hidden" id="latitude" name="latitude" value="" readonly required>
                        <input type="hidden" id="longitude" name="longitude" value="" readonly required>

                        <div class="tab-content">
                            <div class="tab-pane active fade in" role="tabpanel" id="step1">

                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label for="name">Name</label>

                                        <input id="name" type="text" class="form-control" name="name" value="" required autofocus>

                                                                            </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group p-r-5">
                                        <label for="email">E-Mail Address</label>

                                        <input id="email" type="text" class="form-control" name="email" value="" required autofocus>

                                                                            </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>

                                        <input id="phone" type="text" class="form-control" name="phone" value="" required autofocus>

                                                                            </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group p-r-5">
                                        <label for="password">Password</label>

                                        <input id="password" type="password" class="form-control" name="password" required>

                                                                            </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password-confirm">Confirm Password</label>

                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>

                                <div class="col-xs-6">
                                    <div class="form-group p-r-5">
                                        <label for="hours_opening">Shop Opens</label>

                                        <div class="input-group clockpicker">
                                            <input type="text" class="form-control" name="hours_opening" value="00:00" required>
                                            <span class="input-group-addon">
                                                <i class="fa fa-clock-o"></i>
                                            </span>
                                        </div>

                                                                            </div>
                                </div>

                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label for="hours_closing">Shop Closes</label>

                                        <div class="input-group clockpicker">
                                            <input type="text" class="form-control" name="hours_closing" value="00:00" required>
                                            <span class="input-group-addon">
                                                <i class="fa fa-clock-o"></i>
                                            </span>
                                        </div>

                                                                            </div>
                                </div>

                                <div class="col-xs-12">
                                    <div class="form-group text-right">
                                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Location" class="btn btn-primary">Next</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" role="tabpanel" id="step2">

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="maps_address">Location</label>
                                        <input tabindex="2" id="pac-input" class="form-control controls" type="text" placeholder="Enter Shop Location" name="maps_address" value="">
                                    </div>
                                </div>

                                <div class="col-xs-12">
                                    <div class="form-group form-group-default required m-t-5">
                                        <label>Address</label>
                                        <textarea class="form-control" placeholder="Enter Address" id="address" name="address" required></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12">
                                        <div id="map" style="height: 200px;"></div>
                                    </div>
                                </div>

                                <div class="col-xs-12">
                                    <div class="form-group text-right">
                                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Profile" class="btn btn-pink prev-step">Previous</a>
                                        <button type="submit" class="btn btn-primary">Register</button>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- BEGIN VENDOR JS-->
    <script src="<?php echo base_url(); ?>restaurant-assets/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
      <script type="text/javascript" src="<?php echo base_url(); ?>restaurant-assets/js/bootstrap-clockpicker.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>restaurant-assets/js/dropify.min.js"></script>
        
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
     <script src="<?php echo base_url(); ?>restaurant-assets/js/dashboard-ecommerce.min.js" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDkKetQwosod2SZ7ZGCpxuJdxY3kxo5Po&libraries=places&callback=initMap" async defer></script>
    <script src="js/scripts.js" type="text/javascript"></script>

</body>
</html>
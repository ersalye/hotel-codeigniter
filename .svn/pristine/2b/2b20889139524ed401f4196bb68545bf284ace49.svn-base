<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="#">
      <title>Storkks Inovice</title>
      <!-- Bootstrap core CSS -->
      <link href="<?php echo base_url(); ?>web-assets/css/bootstrap.min.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>web-assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>web-assets/css/animsition.min.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>web-assets/css/animate.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="<?php echo base_url(); ?>web-assets/css/style.css" rel="stylesheet">
   </head>
   <body class="home">
      <div class="site-wrapper" data-animsition-in="fade-in" data-animsition-out="fade-out">
         <!--header starts-->
         <div><?php //print_r($orders); 
								$uid = $orders['u_id']; 
								$rid = $orders['rid']; 
								$c_id = $orders['oredr_address_id'];
								$uidetails 	= $this->Restaurant->getusers($uid);	
								$query 	= $this->Restaurant->getuser_address_byorder($c_id);
								$restaurants = $this->Restaurant->getShopRows($rid);
								//print_r($restaurants); ?>
		 <div class="container">
               <div style="text-align:right;padding:10px;font-weight:bold;font-size:30px;color:#c40f10;">
			   <!--<img src="<?php echo base_url(); ?>web-assets/images/logo-dark.png" style="width:100px;">-->
			   STORKKS
			   </div>
			   <div>
			   <p>Thanks for choosing Storkks, <b><?php echo $uidetails['first_name']; ?>!</b> Here are your order details:</p>
			   <table style="width:100%;padding:10px;">
			   <tr>
			   <td style="width:45%;padding:10px;">
			   
                     <p>Order No: <b>#00<?php echo $orders['o_id']?></b></p>
                     <p>Order placed at: <b><?php echo $orders['date_of_order']?></b></p>
                     <p>Order delivered at: <b><?php echo $orders['date_of_order']?></b></p>
                     <p>Order Status: <b>Delivered</b></p>
                     <p>Ordered from:</p>
                     <p><b><?php echo $restaurants['name']; ?></b></p>
                     <p><?php echo $restaurants['address']; ?>
                     </p>
			   </td>
			   <td style="width:45%">
			   <p>Delivery To:</p>
                     <p><b><?php echo $uidetails['first_name']; ?></b></p>
                     <p>
					 <?php echo $query['address']; ?><br>
					 <?php echo $query['landmark']; ?><br>
					 <?php echo $query['pincode']; ?>
					 
                     </p>
			   </td>
			   </tr>
			   </table>
			   <table style="width:100%;padding:10px;">
			   <tr style="background: #ddd;padding:10px;">
			   <th style="text-align:left;padding:10px;"> Item Name</th>
			   <th style="text-align:center;padding:10px;">Quantity</th>
			   <th style="text-align:right;padding:10px;"> Price</th>
			   
			   </tr>
			    <?php //print_r($orders);
			   foreach ($orderdetails as $items) {
				 
				 ?>
			   <tr>
			   <td style="text-align:left;padding:10px;border-bottom: 2px solid #ccc;"><?php echo $items['item_name']; ?></td>
			   <td style="text-align:center;padding:10px;border-bottom: 2px solid #ccc;"><?php echo $items['qty']; ?></td>
			   <td style="text-align:right;padding:10px;border-bottom: 2px solid #ccc;"><?php echo $items['item_price']; ?></td>
			   
			   </tr>
			   <?php }?>
			   <tr >
			   
			   <td></td>
			   <td style="text-align:right;padding:10px;">Item Total:</td>
			   
			   <td style="text-align:right;padding:10px;">$ <?php echo $orders['items_total']?></td>
			   
			   </tr>
			   <tr>
			   
			   <td></td>
			   <td style="text-align:right;padding:10px;">Discount:</td>
			   
			   <td style="text-align:right;padding:10px;">- $ <?php echo $orders['r_discount']?></td>
			   
			   </tr>
			   <tr>
			   
			   <td></td>
			   <td style="text-align:right;padding:10px;">GST:</td>
			   
			   <td style="text-align:right;padding:10px;">$ <?php echo $orders['gst']?></td>
			   
			   </tr>
			   <tr>
			   
			   <td></td>
			   <td style="text-align:right;padding:10px;">Delivery Charges:</td>
			   
			   <td style="text-align:right;padding:10px;">$ <?php echo $orders['delivery_price']?></td>
			   
			   </tr>
			   <tr style="border-top: 1px solid #ddd;background:#eee;">
			   
			   <td></td>
			   <td style="text-align:right;padding:10px;font-weight:bold;">Grand Total:</td>
			   
			   <td style="text-align:right;padding:10px;font-weight:bold;">$ <?php echo $orders['total']?></td>
			   
			   </tr>
			   </table>
			   </div>
               
               
              
            </div>
            
         </div>
         <!-- end:page wrapper -->
      </div>
      <!--/end:Site wrapper -->
      <!--/end:Site wrapper -->
      <!-- Bootstrap core JavaScript
         ================================================== -->
      <script src="<?php echo base_url(); ?>web-assets/js/jquery.min.js"></script>
      <script src="<?php echo base_url(); ?>web-assets/js/tether.min.js"></script>
      <script src="<?php echo base_url(); ?>web-assets/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url(); ?>web-assets/s/animsition.min.js"></script>
      <script src="<?php echo base_url(); ?>web-assets/js/bootstrap-slider.min.js"></script>
      <script src="<?php echo base_url(); ?>web-assets/js/jquery.isotope.min.js"></script>
      <script src="<?php echo base_url(); ?>web-assets/js/headroom.js"></script>
      <script src="<?php echo base_url(); ?>web-assets/js/foodpicky.min.js"></script>
   </body>
</html>
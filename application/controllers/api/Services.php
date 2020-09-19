<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

//include Rest Controller library
require APPPATH . '/libraries/REST_Controller.php';

class Services extends REST_Controller {

    public function __construct() { 
        parent::__construct();
		
		//load user model
		$this->output
        ->set_content_type('application/json')
        ->set_output(json_encode(array('foo' => 'bar')));
        $this->load->model('User_rest');
        $this->load->model('Restaurant');
		$this->load->library("cart");
    }
		public function Shops_post($id = 0) {
		  $t_date = Date("H:i"); // exit;
		   $tday = date('l');
		$shops = $this->User_rest->getShops($id);
		if(!empty($shops)){
			$this->response([
				'totalshops' => count($shops),
				'status' => true,
				'imagepath' => 'https://www.storkks.com/uploads/images/',
				'shops' => $shops
			], REST_Controller::HTTP_OK);
		}else{
			$this->response([
				'status' => FALSE,
				'message' => 'No user were found.'
			], REST_Controller::HTTP_NOT_FOUND);
		}
	}
	public function user_get($id = 0) {
		$users = $this->User_rest->getRows($id);
		if(!empty($users)){
			$this->response($users, REST_Controller::HTTP_OK);
		}else{
			$this->response([
				'status' => FALSE,
				'message' => 'No user were found.'
			], REST_Controller::HTTP_NOT_FOUND);
		}
	}
	public function userlogin_post() {
		
		$phone = $this->post('phone');
		$password = $this->post('password');
		$users = $this->User_rest->getRows_userlogin($phone,$password);
		
		if(!empty($users)){
			$this->response($users, REST_Controller::HTTP_OK);
		}else{
			$this->response([
				'status' => 0,
				'message' => 'No user were found.'
			], REST_Controller::HTTP_NOT_FOUND);
		}
	}
	
	 function users_register_post() {
		$userData = array();
		$userData['first_name'] = $this->post('first_name');
		$userData['email'] = $this->post('email');
		$userData['phone'] = $this->post('phone');
		$userData['password'] = md5($this->post('password'));
		$otp = $this->post('otp');
		if(empty($otp) && !empty($userData['phone'])){
		$subject = "Storkks registation OTP";
		//$otpn = mt_rand(100000, 999999);
		$otpn = 12345;
		$messge = "Storkks Your OTP is ".$otpn;
		$vh_usr_id = $this->Restaurant->phoneno_exists($userData['phone']);
		if(empty($vh_usr_id)){
		$dataa = array(
				'phone' => $userData['phone'],
				'otp_code' => $otpn,
				);
				
        $insert = $this->Restaurant->Insert_Otp($dataa);
		if($insert){
				$this->response([
					'status' => TRUE,
					'message' => 'OTP has been Send successfully.'
				], REST_Controller::HTTP_OK);
			}else{
				$this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
		}}else{
			$this->response("Phone number already registered.", REST_Controller::HTTP_BAD_REQUEST);
		}
		}else if(!empty($userData['first_name']) && !empty($userData['password']) && !empty($userData['email']) && !empty($userData['phone']) && !empty($otp)){
			
		$phonea = $userData['phone'];
		$otp = $otp;
        $otp_id = $this->Restaurant->VerifyOTP($phonea,$otp); //exit
		if($otp_id['id']){
				$uid = $otp_id['id'];
				$data = array('verified' => 1,);
				$userupdate = $this->Restaurant->Update_otp_status($data,$uid);
				$insert = $this->User_rest->Users_insert($userData);
			if($insert){
				$this->response([
					'status' => TRUE,
					'message' => 'User has been added successfully.'
				], REST_Controller::HTTP_OK);
			}else{
				$this->response([
					'status' => false,
					'message' => 'Registation failed, please try again.'
				], REST_Controller::HTTP_BAD_REQUEST);
			}
			//$this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
		
		}else{

		$this->response([
					'status' => false,
					'message' => 'otp verified failed, please try again.'
				], REST_Controller::HTTP_BAD_REQUEST);
		}
	
        }else{
		    $this->response($userData, REST_Controller::HTTP_BAD_REQUEST);
		}
	}
	public function CheckEmail_post() {
		$email = $this->post('email');
		$vh_phone = $this->Restaurant->email_exists($email);
	
		if(!empty($vh_phone)){
			$this->response([
				'status' => true,
				'Message' => 'Email Registered'
			], REST_Controller::HTTP_OK);
		}else{
			$this->response([
				'status' => FALSE,
				'message' => 'Not Registered'
			], REST_Controller::HTTP_NOT_FOUND);
		}
	}
	public function CheckMobile_post() {
		$phone = $this->post('phone');
		$vh_phone = $this->Restaurant->phoneno_exists($phone);
	
		if(!empty($vh_phone)){
			$this->response([
				'status' => true,
				'Message' => 'Mobile Number Registered'
			], REST_Controller::HTTP_OK);
		}else{
			$this->response([
				'status' => FALSE,
				'message' => 'Not Registered'
			], REST_Controller::HTTP_NOT_FOUND);
		}
	}
	public function Sendotp_post() {
		$phone = $this->post('phone');
		$vh_phone = $this->Restaurant->phoneno_exists($phone);
		if(!empty($vh_phone)){ 
		$subject = "Storkks Forgot Password OTP";
		//$otpn = mt_rand(100000, 999999);
		$otpn = '12345';
		$messge = "Storkks Your OTP is ".$otpn;
		//$data['service_url'] = $this->sendsmsotp($mail,$messge);
		$dataa = array(
				'phone' => $phone,
				'otp_code' => $otpn,
				);
        $otp_id = $this->Restaurant->Insert_Otp($dataa);
		if(!empty($otp_id)){
			$this->response([
				'status' => true,
				'Message' => 'Otp sent Successfully'
			], REST_Controller::HTTP_OK);
		}else{
			$this->response([
				'status' => FALSE,
				'message' => 'Not sent failed'
			], REST_Controller::HTTP_NOT_FOUND);
		}}else{

		$this->response([
					'status' => false,
					'message' => 'Not registered with this no'
				], REST_Controller::HTTP_BAD_REQUEST);
		}
	}
	public function VerifyMobileOtp_post() {
		$phone = $this->post('phone');
		$otp = $this->post('otp');
		 $otp_id = $this->Restaurant->VerifyOTP($phone,$otp); //exit
		if($otp_id['id']){
				$uid = $otp_id['id'];
				$data = array('verified' => 1,);
				$userupdate = $this->Restaurant->Update_otp_status($data,$uid);
			
		}
		if(!empty($otp_id)){
			$this->response([
				'status' => true,
				'Message' => 'Mobile Number OTP Verified '
			], REST_Controller::HTTP_OK);
		}else{
			$this->response([
				'status' => FALSE,
				'message' => 'Wrong OTP'
			], REST_Controller::HTTP_NOT_FOUND);
		}
	}
	public function UpdatePassword_post() {
		$phone = $this->post('phone');
		$password = $this->post('password');
		
		if(!empty($phone) && !empty($password)){
			$vh_phone = $this->Restaurant->phoneno_exists($phone);
		if(!empty($vh_phone)){
		$data = array('password' =>md5($password));
		$reset = $this->Restaurant->Reset_UserPassword($data,$phone);
			
		
		if(!empty($reset)){
			$this->response([
				'status' => true,
				'Message' => 'Password Changed Successfully'
			], REST_Controller::HTTP_OK);
		}else{
			$this->response([
				'status' => FALSE,
				'message' => 'Failed to update password'
			], REST_Controller::HTTP_BAD_REQUEST);
		}}else{
		$this->response([
					'status' => false,
					'message' => 'Not registered Mobile'
				], REST_Controller::HTTP_BAD_REQUEST);
		}}else{
		$this->response([
					'status' => false,
					'message' => 'enter all fields'
				], REST_Controller::HTTP_BAD_REQUEST);
		}
	}	
	public function user_put() {
		$userData = array();
		$id = $this->put('id');
		$userData['first_name'] = $this->put('first_name');
		$userData['last_name'] = $this->put('last_name');
		$userData['email'] = $this->put('email');
		$userData['phone'] = $this->put('phone');
		if(!empty($id) && !empty($userData['first_name']) && !empty($userData['last_name']) && !empty($userData['email']) && !empty($userData['phone'])){
			$update = $this->User_rest->update($userData, $id);
			if($update){
				$this->response([
					'status' => TRUE,
					'message' => 'User has been updated successfully.'
				], REST_Controller::HTTP_OK);
			}else{
				$this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
			}
        }else{
		    $this->response("Provide complete user information to update.", REST_Controller::HTTP_BAD_REQUEST);
		}
	}
	public function Shopcategories_post($id = 0) {
		$category = $this->Restaurant->getCategorybyshop($id);
		if(!empty($category)){
			$this->response([
				'totalshops' => count($category),
				'status' => true,
				'categories' => $category
			], REST_Controller::HTTP_OK);
		}else{
			$this->response([
				'status' => FALSE,
				'message' => 'No user were found.'
			], REST_Controller::HTTP_NOT_FOUND);
		}
	}
	public function Cuisins_post($id = 0) {
		$cuisins = $this->Restaurant->getCuisinesRows();
		if(!empty($cuisins)){
			$this->response([
				'total_cuisins' => count($cuisins),
				'status' => true,
				'cuisins' => $cuisins
			], REST_Controller::HTTP_OK);
		}else{
			$this->response([
				'status' => FALSE,
				'message' => 'No cuisins were found.'
			], REST_Controller::HTTP_NOT_FOUND);
		}
	}
	public function OrderStatus_post(){
		$id =$this->post('orderid');
		$order = $this->Restaurant->getOrders($id);
		if($order['rid_status']==1){
			$ostatus="Order conformed";
		}else if($order['rid_status']==2){
			$ostatus="Food prepared";
		}else if($order['rid_status']==3){
			$ostatus="Food Ready";
		}else if($order['rid_status']==4){
			$ostatus="On the way";
		}
		if(!empty($order)){
			$this->response([
				'status' => true,
				'order_status' => $order['rid_status'],
				'Message' => $ostatus
			], REST_Controller::HTTP_OK);
		}else{
			$this->response([
				'status' => FALSE,
				'message' => 'No cuisins were found.'
			], REST_Controller::HTTP_NOT_FOUND);
		}
	}
	public function Cuisinsb_by_Shops_post($id = 0) {
		
		$cuisins =$this->post('cuisins');
		$shops = $this->Restaurant->getShopRows_cuisins($cuisins);
		if(!empty($shops)){
			$this->response([
				'total_shops' => count($shops),
				'status' => true,
				'shops' => $shops
			], REST_Controller::HTTP_OK);
		}else{
			$this->response([
				'status' => FALSE,
				'message' => 'No restaurant were found.'
			], REST_Controller::HTTP_NOT_FOUND);
		}
	}
	public function ShopItemsBycat_post() {
		$catid = $this->post('catid');
		$rid = $this->post('rid');
		$products = $this->Restaurant->getproductsby_cat_rest($catid,$rid);
		if(!empty($products)){
			$this->response([
				'totalproducts' => count($products),
				'status' => true,
				'products' => $products
			], REST_Controller::HTTP_OK);
	}else{
			$this->response([
				'status' => FALSE,
				'message' => 'No Items were found.'
			], REST_Controller::HTTP_NOT_FOUND);
		}
	}
	public function Promocode_offers_post() {
		
		$promocodes = $this->Restaurant->getPromocodeRowsbyuser();
		if(!empty($promocodes)){
			$this->response([
				'totalpromocodes' => count($promocodes),
				'status' => true,
				'promocodes' => $promocodes
			], REST_Controller::HTTP_OK);
		}else{
			$this->response([
				'status' => FALSE,
				'message' => 'No offers were found.'
			], REST_Controller::HTTP_NOT_FOUND);
		}
	}
	public function UpdateFavourites_post() {
		$uid = $this->post('userid');
		$rid = $this->post('rid');
		$norows = $this->Restaurant->get_favourite($rid,$uid);
		if(!empty($norows)){
		if($norows['status'] == 1){
		$status = 2;}else{$status = 1;}
		$data = array('status' => $status );
		$query = $this->Restaurant->update_favourite($data,$rid,$uid); 
		}else{ $status = 1;
		$data = array(
                'uid' => strip_tags($uid),
                'rid' => strip_tags($rid),
                'status' => $status                              
        );
		 $query = $this->Restaurant->insert_favourite($data); 
		}
		
		if(!empty($query)){
			$this->response([
				'status' => true,
				'favourites' => 'Updated'
			], REST_Controller::HTTP_OK);
		}else{
			$this->response([
				'status' => FALSE,
				'message' => 'No favourites update failed.'
			], REST_Controller::HTTP_NOT_FOUND);
		}
	}
	public function Favourites_post() {
		$c_id = $this->post('userid');
		$favourites = $this->Restaurant->get_favsbyuser($c_id);
		if(!empty($favourites)){
			$this->response([
				'total_favourites' => count($favourites),
				'status' => true,
				'favourites' => $favourites
			], REST_Controller::HTTP_OK);
		}else{
			$this->response([
				'status' => FALSE,
				'message' => 'No favourites were found.'
			], REST_Controller::HTTP_NOT_FOUND);
		}
	}
	public function address_post() {
		$c_id = $this->post('userid');
		$address = $this->Restaurant->getuser_address($c_id);
		if(!empty($address)){
			$this->response([
				'total_addresslist' => count($address),
				'status' => true,
				'address' => $address
			], REST_Controller::HTTP_OK);
		}else{
			$this->response([
				'status' => FALSE,
				'message' => 'No favourites were found.'
			], REST_Controller::HTTP_NOT_FOUND);
		}
	}
	public function Addtocart_post() {
		$data = array(
            'id' => $this->post('product_id'), 
            'name' => $this->post('product_name'), 
            'price' => $this->post('product_price'), 
            'qty' => $this->post('quantity'),
           );
        $this->cart->insert($data); 
		if(!empty($this->cart->contents())){
			$this->response([
				'cart' => $this->cart->contents(),
				'status' => true,
				], REST_Controller::HTTP_OK);
		}else{
			$this->response([
				'status' => FALSE,
				'message' => 'No items were found.'
			], REST_Controller::HTTP_NOT_FOUND);
		}
	}
	public function Reorder_cart_post() {
		$id= $this->post('oredr_id');
	$orders_detailsr = $this->Restaurant->getOrders_details($id);
	 foreach ($orders_detailsr as $items) {
		  $data = array(
            'id' => $items['itemid'], 
            'name' => $items['item_name'], 
            'price' => $items['item_price'],
            'qty' => $items['qty']
        );
        $this->cart->insert($data); 
	 }
        
		if(!empty($this->cart->contents())){
			$this->response([
				'total_items' => count($this->cart->contents()),
				'cart' => $this->cart->contents(),
				'status' => true,
				], REST_Controller::HTTP_OK);
		}else{
			$this->response([
				'status' => FALSE,
				'message' => 'No items were found.'
			], REST_Controller::HTTP_NOT_FOUND);
		}
	}
	public function Updatecart_post() {

	$id= $this->post('product_id');
	$name = $this->post('product_name'); 
	$price = $this->post('product_price'); 
	$qty = $this->post('quantity');
	$rowid = $this->post('rowid');
          
	$dataaa = array(
        'id' => $rowid,
        'name' => $name,
        'price' => $price,
        'qty' => $qty,
		'rowid' => $rowid,
        );

    $this->cart->update($dataaa);
       
		if(!empty($this->cart->contents())){
			$this->response([
				'total_items' => count($this->cart->contents()),
				'cart' => $this->cart->contents(),
				'status' => true,
				], REST_Controller::HTTP_OK);
		}else{
			$this->response([
				'status' => FALSE,
				'message' => 'No items were found.'
			], REST_Controller::HTTP_NOT_FOUND);
		}
	}
	public function Remove_cartByID_post(){
	$data = array(
            'rowid' => $this->post('row_id'), 
            'qty' => 0, 
        );
		$this->cart->remove($this->post('row_id'));
        $this->cart->update($data);
		if(!empty($this->cart->contents())){
			$this->response([
				'total_items' => count($this->cart->contents()),
				'cart' => $this->cart->contents(),
				'status' => true,
				], REST_Controller::HTTP_OK);
		}else{
			$this->response([
				'status' => FALSE,
				'message' => 'No items were found.'
			], REST_Controller::HTTP_NOT_FOUND);
		}
	}
	public function Remove_allcart_post(){
	$this->cart->destroy();
		if(empty($this->cart->contents())){
			$this->response([
				'total_items' => count($this->cart->contents()),
				'status' => true,
				], REST_Controller::HTTP_OK);
		}else{
			$this->response([
				'status' => FALSE,
				'message' => 'No items were found.'
			], REST_Controller::HTTP_NOT_FOUND);
		}
	}
	public function Mycart_post(){
	if(!empty($this->cart->contents())){
			$this->response([
				'total_items' => count($this->cart->contents()),
				'cart' => $this->cart->contents(),
				'total_amount' => $this->cart->total(),
				'status' => true,
				], REST_Controller::HTTP_OK);
		}else{
			$this->response([
				'status' => FALSE,
				'message' => 'No items were found.'
			], REST_Controller::HTTP_NOT_FOUND);
		}
	}
	public function Mycart_order_post(){
		
		$userData = array();
		$userData['u_id'] = $this->post('user_id');
		$userData['rid'] = $this->post('rid');
		$userData['status'] = "Ordered";
		$userData['total'] = $this->post('total');
		$userData['items_total'] = number_format($this->cart->total(),2);
		$userData['oredr_address_id'] = $this->post('oredr_address_id');
		$userData['offer_code_id'] = $this->post('offer_code_id');
		$userData['offer_code'] = $this->post('offer_code');
		$userData['notetext'] = $this->post('notetext');
		$userData['r_discount'] = $this->post('r_discount');
		$userData['gst'] = $this->post('gst');
		$userData['cupon_discount'] = $this->post('cupon_discount');
		$userData['delivery_price'] = $this->post('delivery_price');
		$userData['storkksfee'] = $this->post('offer_percentage');
		
		if(!empty($userData['u_id']) && $userData['total']>20 && !empty($this->cart->contents())){
		$insert_oderid = $this->Restaurant->Item_oreder($userData);	
	if(!empty($insert_oderid)){
			foreach ($this->cart->contents() as $items) {
			$item_id = $items['id'];
			$rid = $this->Restaurant->getproducts($item_id);
			$r_id = $rid['restaurant_id'];
			$userData = array(
                'o_id' => $insert_oderid,
                'u_id' => $userData['u_id'],
                'rid' => $r_id,
                'itemid' => $items['id'],
                'item_name' => $items['name'],
                'qty' => $items['qty'],
                'item_price' => $items['price'],
				);
			$Itemid = $this->Restaurant->Item_oreder_details($userData);		
			$this->cart->remove($items['rowid']);	
			
		}
		
			$this->response([
				'Total Items' => count($this->cart->contents()),
				'cart' => $this->cart->contents(),
				'Message' => 'Successfully ordered',
				'status' => true,
				], REST_Controller::HTTP_OK);
		}else{
			$this->response([
				'status' => FALSE,
				'message' => 'No items were found.'
			], REST_Controller::HTTP_NOT_FOUND);
		}
		}else{
			$this->response([
				'status' => FALSE,
				'message' => 'Bad request'
			], REST_Controller::HTTP_BAD_REQUEST);
		}
	}
	public function Save_address_post() {
		$userData = array();
		$userData['title'] = $this->post('title');
		$userData['address'] = $this->post('address');
		$userData['landmark'] = $this->post('landmark');
		$userData['pincode'] = $this->post('pincode');
		$userData['customer_id'] = $this->post('customer_id');
		if(!empty($userData['title']) && !empty($userData['address']) && !empty($userData['pincode']) && !empty($userData['customer_id'])){
			$insert = $this->Restaurant->InsertAddress($userData);
			if($insert){
				$this->response([
					'status' => TRUE,
					'message' => 'Address has been added successfully.'
				], REST_Controller::HTTP_OK);
			}else{
				$this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
			}
        }else{
		    $this->response("Provide complete user information to Add.", REST_Controller::HTTP_BAD_REQUEST);
		}
	}
	public function Update_address_put() {
		$userData = array();
		
		$userData['title'] = $this->put('title');
		$userData['address'] = $this->put('address');
		$userData['landmark'] = $this->put('landmark');
		$userData['pincode'] = $this->put('pincode');
		$customer_id = $this->put('address_id');
		if(!empty($customer_id) && !empty($userData['title']) && !empty($userData['address'])){
			
			$update = $this->Restaurant->Update_Address($userData,$customer_id);
			//print_r($update); exit;
			if($update){
				$this->response([
					'status' => TRUE,
					'message' => 'Address has been updated successfully.'
				], REST_Controller::HTTP_OK);
			}else{
				$this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
			}
        }else{
		    $this->response("Provide complete user information to update.", REST_Controller::HTTP_BAD_REQUEST);
		}
	}
	public function Delete_address_post(){
		$c_id = $this->post('address_id');
		$address = $this->Restaurant->delete_adddress($c_id);
		if(!empty($address)){
			$this->response([
				'status' => true,
				'message' => 'Address has been deleted successfully.'
			], REST_Controller::HTTP_OK);
		}else{
			$this->response([
				'status' => FALSE,
				'message' => 'No favourites were found.'
			], REST_Controller::HTTP_NOT_FOUND);
		}
	}
	public function user_pastorders_post() {
		$c_id = $this->post('userid');
		$Ordersbyuser = $this->Restaurant->getOrdersbyuser($c_id);
			if(!empty($Ordersbyuser)){
			$this->response([
				'totalOrders' => count($Ordersbyuser),
				'status' => true,
				'Orders' => $Ordersbyuser
			], REST_Controller::HTTP_OK);
		}else{
			$this->response([
				'status' => FALSE,
				'message' => 'No Orders were found.'
			], REST_Controller::HTTP_NOT_FOUND);
		}
	}
	public function Ordersbyuser_post() {
		$c_id = $this->post('userid');
		$Ordersbyuser = $this->Restaurant->getOrdersbyuserService($c_id);
			if(!empty($Ordersbyuser)){
			$this->response([
				'totalOrders' => count($Ordersbyuser),
				'status' => true,
				'imagepath' => 'https://www.storkks.com/uploads/images/',
				'Orders' => $Ordersbyuser
			], REST_Controller::HTTP_OK);
		}else{
			$this->response([
				'status' => FALSE,
				'message' => 'No Orders were found.'
			], REST_Controller::HTTP_NOT_FOUND);
		}
	}
	public function Orderdetails_post() {
		$c_id = $this->post('order_id');
		$orderdetails = $this->Restaurant->getOrders_details($c_id);
		if(!empty($orderdetails)){
			$this->response([
				'total_items' => count($orderdetails),
				'status' => true,
				'Items' => $orderdetails
			], REST_Controller::HTTP_OK);
		}else{
			$this->response([
				'status' => FALSE,
				'message' => 'No Orders were found.'
			], REST_Controller::HTTP_NOT_FOUND);
		}
	}
	public function Verifyoffer_post() {
		 $userid = $this->post('userid'); 
		 $cupon_code = $this->post('cupon_code'); 
		$validcoupan = $this->Restaurant->getPromocodevalid($cupon_code);
		if(!empty($validcoupan)){
			 $data = $this->Restaurant->Verify_Offer_byuser($userid,$cupon_code); 
			 if(count($data)==0){
			$this->response([
				'status' => true
			 ], REST_Controller::HTTP_OK);
			 }else{
				 $this->response([
				'status' => FALSE,
				'message' => 'user offer already used.'
			], REST_Controller::HTTP_NOT_FOUND);
			 }
		}else{
			$this->response([
				'status' => FALSE,
				'message' => 'Not valid coupan.'
			], REST_Controller::HTTP_NOT_FOUND);
		}
	}
	public function user_delete($id){
        if($id){
            $delete = $this->User_rest->delete($id);
            if($delete){
        		$this->response([
					'status' => TRUE,
					'message' => 'User has been removed successfully.'
				], REST_Controller::HTTP_OK);
            }else{
        		$this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
            }
        }else{
			$this->response([
				'status' => FALSE,
				'message' => 'No user were found.'
			], REST_Controller::HTTP_NOT_FOUND);
		}
    }  
}

?>

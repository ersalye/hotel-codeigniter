<?php
/* 
 * Generated by Ravikumar Pulusu 
 * www.tayatech.com
 */
 
class Products extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Restaurant');
		
    }

 	public function index(){
		
		 $data['restaurants'] = $this->Restaurant->getShopRows();
		 $data['csns'] = $this->Restaurant->getCuisinesRows();
		 $this->load->view('web/restaurants-web',$data);
	}
	function sendmail($mail,$mobile,$messge,$subject){
		$this->load->library('email');
		$this->email->set_newline("\r\n");
		$this->email->set_header('MIME-Version', '1.0; charset=utf-8'); 
		$this->email->set_header('Content-type', 'text/html'); 

		$this->email->from('storkks2018@gmail.com', 'Storkks');
		$this->email->to($mail);
		$this->email->subject($subject);
		$this->email->message($messge);
		$emailll = $this->email->send();
		if($emailll){
		}else{
			echo "mail not sent ";
			echo $this->email->print_debugger();			exit;
		}
		
	}
	public function SendOTPby_email(){
		$mail = $this->input->post('mobile');
		$subject = "Storkks Forgot Password OTP";
		//$otpn = mt_rand(100000, 999999);
		$otpn = '12345';
		$mobile='';
		$messge = "Storkks Your OTP is ".$otpn;
		//$data['service_url'] = $this->sendsmsotp($mail,$messge);
		$dataa = array(
				'phone' => $this->input->post('mobile'),
				'otp_code' => $otpn,
				);
        $otp_id = $this->Restaurant->Insert_Otp($dataa);
		if($otp_id){
		$data['msg'] = "seccess";
		$data['mail'] = $mail;
		
		}else{
		$data['msg'] = "Failed";			
		}
		echo json_encode($data);

		
	}
	public function Emailconformation(){
		 $uid = $this->uri->segment(3);
		 $uemail = $this->uri->segment(4);
		$user = $this->Restaurant->user_email_verification($uid,$uemail);
		if($user){
			$data = array(
            'status' => 2,);
		$userupdate = $this->Restaurant->Update_user_status($data,$uid);
		$this->session->set_flashdata('Rgstr', 'Email veryfied Succusssfully');
	$query 	= $this->Restaurant->getusers($uid);
	 $customer_id = $query['id'];
	 $customer_name = $query['first_name'];
	 $customer_email = $query['email'];
	$customer_phone = $query['phone'];
	$this->session->set_userdata('customer_id', $customer_id);
	$this->session->set_userdata('customer_name', $customer_name);
	$this->session->set_userdata('customer_email', $customer_email);
	$this->session->set_userdata('customer_phone', $customer_phone);
		redirect();
		}else{
			echo "Not Accessed"; exit;
		}
	}

	public function SendOTP(){
		$mobile = $this->input->post('mobile');
		$mail = $this->input->post('email');
		//$otp_id = $this->Restaurant->VerifyOTP_last($mobile); 
		$subject = "Storkks registation OTP";
		//$otpn = mt_rand(100000, 999999);
		$otpn = 12345;
		$messge = "Storkks Your OTP is ".$otpn;
		//$data['service_url'] = $this->sendsmsotp($mobile,$messge);
		$dataa = array(
				'phone' => $this->input->post('mobile'),
				'otp_code' => $otpn,
				);
				//print_r($dataa); exit;
        $data['otpid'] = $this->Restaurant->Insert_Otp($dataa);
		echo json_encode($data);
	}

	public function VerifyOTP(){
		$mobile = $this->input->post('mobile');
		$otp = $this->input->post('otp');
		
        $otp_id = $this->Restaurant->VerifyOTP($mobile,$otp); //exit
		//echo $otp_id['id']; exit;
		if($otp_id['id']){
				$uid = $otp_id['id'];
				$data = array('verified' => 1,);
				$userupdate = $this->Restaurant->Update_otp_status($data,$uid);
			$data['msg'] = "SUC1";
		}else{
			$data['msg'] = "Failed1";
		}
	echo json_encode($data);
		
	}
	public function VerifyOTPedit(){
		$mobile = $this->input->post('mobile');
		$otp = $this->input->post('otp');
		
        $otp_id = $this->Restaurant->VerifyOTP($mobile,$otp); //exit
		if($otp_id['id']){
				$uid = $otp_id['id'];
				$data = array('verified' => 1,);
				$userupdate = $this->Restaurant->Update_otp_status($data,$uid);
			$data['msg'] = "SUC1";
		}else{
			$data['msg'] = "Failed1";
		}
	return $data;
		
	}
	
	public function Update_userpassword(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$data = array('password' =>md5($password));
		$reset = $this->Restaurant->Reset_UserPassword($data,$email);
		if($reset){
		$data['msg'] = "reset";
		}else{
			$data['msg'] = "fail";
		}
	echo json_encode($data);
	}
	public function Verifyoffer(){
		$userid = $this->input->post('userid');
		$cupon_code = $this->input->post('cupon_code');
		$validcoupan = $this->Restaurant->getPromocodevalid($cupon_code); 
		if($validcoupan){
        $data = $this->Restaurant->Verify_Offer_byuser($userid,$cupon_code); 
		if(count($data)==0){
			$this->Offer_applay();
			$dataa=0;
		}else{
			$dataa = 1;
		}
		}else{
			$dataa = 2;
		}
	echo $dataa; exit;
		
	}	

	public function Offer_applay(){
		$cupon_discount = $this->input->post('cupon_discount'); 
		$cupon_id = $this->input->post('cupon_id'); 
		$cupon_code = $this->input->post('cupon_code'); 
		$cupon_type = $this->input->post('cupon_type'); 
		$this->session->set_userdata('cupon_discount', $cupon_discount);
		$this->session->set_userdata('cupon_id', $cupon_id);
		$this->session->set_userdata('cupon_code', $cupon_code);
		$this->session->set_userdata('cupon_type', $cupon_type);
		//redirect('Products/checkout');
	}
	public function Offer_Remove(){
	$this->session->unset_userdata('cupon_discount');
	$this->session->unset_userdata('cupon_id');
	$this->session->unset_userdata('cupon_code');
	redirect($_SERVER['HTTP_REFERER']);
	}
	public function checkout(){
		 $data['promocodes'] = $this->Restaurant->getPromocodeRowsbyuser();
		 $data['charges'] = $this->Restaurant->get_charges($c_id="1");
		 $data['checkout'] = $this->cart->contents();
		 $data['total'] = $this->cart->total();
		
		 $this->load->view('web/checkout-web',$data);
	}
	function Reorder_add_to_cart($id){ 
	
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
	 redirect('Products/checkout');
	
	}
	function add_to_cart(){ 
	$this->load->library("cart");
$a = $this->input->post('selValue');						
$b = $this->input->post('adnpricei');
if(!empty($a) && !empty($a)){
$opionsadons  = array_combine($a, $b);
}else{
	$opionsadons ='';
}
        $data = array(
            'id' => $this->input->post('product_id'), 
            'name' => $this->input->post('product_name'), 
            'price' => $this->input->post('product_price'), 
            'qty' => $this->input->post('quantity'),
            'options' => $opionsadons,
        );
        $this->cart->insert($data); 
        echo $this->show_cart(); 
    }
 function update_cart(){
	 $this->load->library("cart");
    // Recieve post values,calcute them and update
	$opionsadonsup = array($this->input->post('addddonid') => $this->input->post('addddonprice'));
    $rowid =$this->input->post('product_id');
    $name = $this->input->post('product_name');
    $price = $this->input->post('product_price')+ $this->input->post('addddonprice');
    $amount = $price * $this->input->post('quantity');
    $qty = $this->input->post('quantity'); //exit;
    $rowid = $this->input->post('rowid'); //exit;
	$suad = $price + $this->input->post('addddonprice');

    $data = array(
        'id' => $rowid,
        'name' => $name,
        'price' => $price,
        'qty' => $qty,
		'rowid' => $rowid,
		'options' => $opionsadonsup,
        );
//	print_r($dataa); exit;	
    $this->cart->update($data); //exit;
    echo $this->show_cart(); 
    }
 function check_price(){
	$data['checkout'] = $this->cart->contents();
	$data['total'] = $this->cart->total();
	echo json_encode($data);
 }
 function check_update_cart(){
	 $this->load->library("cart");
    // Recieve post values,calcute them and update
    $rowid =$this->input->post('product_id');
    $name = $this->input->post('product_name');
    $price = $this->input->post('product_price');
    $amount = $price * $this->input->post('quantity');
    $qty = $this->input->post('quantity'); //exit;
    $rowid = $this->input->post('rowid'); //exit;

    $dataaa = array(
        'id' => $rowid,
        'name' => $name,
        'price' => $price,
        'qty' => $qty,
		'rowid' => $rowid,
        );

    $this->cart->update($dataaa); //exit;
    $data['checkout'] = $this->cart->contents();
	$data['total'] = $this->cart->total();
	$data['cartcount'] = count($this->cart->contents());;
	
	echo json_encode($data);	
    }	
    function show_cartaddons($id){ 
	return $addons = $this->Restaurant->getAddonsbyproductcart($id);	
	// print_r($addons);
	}
    function show_cart(){ 
        $output = '';
        $no = 0;
        foreach ($this->cart->contents() as $items) {
			if(!empty($items['options'])){
				$adonididprice ='';
				$aaa ='';
			foreach($items['options'] as $key=>$valueee) {
				$adonidid = $key;
				$addd = $this->Restaurant->getAddonsbyproductcart($adonidid);
				if($addd){
				$aaa .='<span class="addon-cart">'.$addd['addon_name'].' - $'.$valueee.'</span>';
				$adonididprice .='<span>'.$valueee.'</span>';}
			}}else{
				$adonidid = '';
				$adonididprice = '';
				$aaa='';	
			}
		$stprice = $items['price'] * $items['qty'];	
		//$sbtprice = $stprice+$adonididprice;	
            $no++;
            $output .='
                <div class="row no-gutter font-checkout order-row bg-white" id="item_div_'.$items['rowid'].'">
                                    <div class="col-xs-5">
                                       <span><b>'.$items['name'].'</b></span>
										'.$aaa.'
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="stepper-widget">
								<input type="hidden" class="rclass" id="rid_'.$items['id'].'" name="rid" value="'.$items['rowid'].'"/>	
								<input type="hidden" class="rclass" id="optonid_'.$items['id'].'" name="rid" value="'.$adonidid.'"/>
								<input type="hidden" class="rclass" id="optonprice_'.$items['id'].'" name="rid" value="'.$adonididprice.'" />		
								  <button type="button" data-pidi="D" data-pid="'.$items['id'].'" data-p_name="'.$items['name'].'" data-rowid="'.$items['rowid'].'" data-p_price="'.$items['price'].'" class="js-qty-down btn buttonitmupd dec_"'.$items['id'].'"><i class="fa fa-minus" aria-hidden="true"></i></button>
								  <input type="text" class="js-qty-input form-control" id="cart_'.$items['rowid'].'" value="'.$items['qty'].'" readonly/>
								  <button type="button" data-pidi="I" data-pid="'.$items['id'].'" data-p_name="'.$items['name'].'" data-rowid="'.$items['rowid'].'" data-p_price="'.$items['price'].'" class="js-qty-up btn buttonitmupd"><i class="fa fa-plus" aria-hidden="true"></i></button>
								  
								</div> 
                                    </div>
									<div class="col-xs-3 text-right">
									<span id="itemprice_'.$items['rowid'].'">$'.number_format($stprice,2).'</span>
									</div>
									<div class="close-item">
									<span><button pdelete="'.$items['id'].'" type="button" id="'.$items['rowid'].'" class="romove_cart close-btn"><i class="fa fa-times-circle-o" aria-hidden="true"></i></button></span>
									</div>
                                 </div>
				
				
				
				
            ';
        }
        $output .= '
            <div class="price-wrap row">
							  <div class="col-xs-7"><p><b>Total</b></p></div>
							  <div class="col-xs-5 text-right"><h3 class="value"><strong>$ <span id="totalcartaj">'.number_format($this->cart->total(),2).'</span></strong><input type="hidden" id="tpriceck" value="'.number_format($this->cart->total(),2).'"></h3></div>
                              
                              </div>
        ';
        return $output;
    }
 
    function load_cart(){ 
        echo $this->show_cart();
    }
 
    function delete_cart(){ 
        $data = array(
            'rowid' => $this->input->post('row_id'), 
            'qty' => 0, 
        );
		$this->cart->remove($this->input->post('row_id'));
        $this->cart->update($data);
        echo $this->show_cart();
    }
	function addajax()
    {
		
	$errors         = array();      // array to hold validation errors
	$data           = array();      // array to pass back data

// validate the variables ======================================================
    // if any of these variables don't exist, add an error to our $errors array
	if($this->input->post('mobile')){
		$phonec = $this->input->post('mobile');
		$phone = $this->Restaurant->phoneno_exists($phonec);
		if($phone){
		$errors['phone'] = 'Mobile already registered';
		}
	}
	if($this->input->post('otp')){
		$mobile = $this->input->post('mobile');
		$otp = $this->input->post('otp');
		
        $otp_id = $this->Restaurant->VerifyOTP($mobile,$otp);
		if(empty($otp_id)){
		$errors['OTP'] = 'Enter Valid Otp';
		}else{
		$uid = $otp_id['id'];
		$data = array('verified' => 1,);
		$userupdate = $this->Restaurant->Update_otp_status($data,$uid);	
		$data['OTP'] = "99";
		}
	}
    if (empty($_POST['name']))
        $errors['name'] = 'Name is required.';

    if (empty($_POST['email']))
        $errors['email'] = 'Email is required.';

    if (empty($_POST['mobile']))
        $errors['mobile'] = 'Mobile is required.';
		
	if (empty($_POST['password']))
        $errors['password'] = 'Password is required.';
	
	

// return a response ===========================================================
    if ( ! empty($errors)) {

     
		$data['success'] = false;
        $data['errors']  = $errors;
		
    } else {
		$password = $this->input->post('password');
		$dataa = array(
				'first_name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('mobile'),
				'password' => md5($password),
				);
        $vusr_id = $this->Restaurant->InsertUsers($dataa);
	if($vusr_id){
	$mail = $this->input->post('email');
	$name = $this->input->post('name');
	$mobile = $this->input->post('mobile');
	$subject = "Storkks register Email Verification";
//	$messge = "click here: "."https://www.storkks.com/Products/Emailconformation/".$vusr_id."/".$mail;
	$messge = "<h1>Hi $name</h1><p> You are one step away from the world of Storkks. Verify your email by clicking this big red button:</p> <a style='background-color: #f44336;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px; margin: 4px 2px;cursor: pointer;' href='https://www.storkks.com/Products/Emailconformation/$vusr_id/$mail' class='button'>Verify Email Address</a>";
	$this->sendmail($mail,$mobile,$messge,$subject);	
	$query 	= $this->Restaurant->getusers($vusr_id);
	 $customer_id = $query['id'];
	 $customer_name = $query['first_name'];
	 $customer_email = $query['email'];
	$customer_phone = $query['phone'];
	$this->session->set_userdata('customer_id', $customer_id);
	$this->session->set_userdata('customer_name', $customer_name);
	$this->session->set_userdata('customer_email', $customer_email);
	$this->session->set_userdata('customer_phone', $customer_phone);
	$data['success'] = true; 
	 $data['message'] = "Register";
		}
        
       
    }

    // return all our data to an AJAX call
    echo json_encode($data);

	
	}
	function ajaxlogin()
    {
		
	$errors         = array();      // array to hold validation errors
	$data           = array();      // array to pass back data

// validate the variables ======================================================
    // if any of these variables don't exist, add an error to our $errors array

   
    if (empty($_POST['email']))
        $errors['email'] = 'Email is required.';
	if (empty($_POST['password']))
        $errors['password'] = 'password is required.';
	
	

// return a response ===========================================================
    if ( ! empty($errors)) {
		$data['success'] = false;
        $data['errors']  = $errors;
		
    } else {
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$pass = md5($password);
		$customer = $this->Restaurant->verifycustomer($email,$pass);
	if($customer){

	 $customer_id = $customer['id'];
	 $customer_name = $customer['first_name'];
	 $customer_email = $customer['email'];
	 $customer_phone = $customer['phone'];
	 $Updatelogin = $this->Restaurant->Updatelogin($customer_id);
	$this->session->set_userdata('customer_id', $customer_id);
	$this->session->set_userdata('customer_name', $customer_name);
	$this->session->set_userdata('customer_email', $customer_email);
	$this->session->set_userdata('customer_phone', $customer_phone);
	$data['success'] = true; 
	$data['message'] = "Succusssfully Login";
		}else{
    $data['wrong'] = "<span style='color:#fff'>Enter valid credentials</span>";    
		}  
    }

    // return all our data to an AJAX call
    echo json_encode($data);

	
	}
	function saveaddress()
    {
		
	$errors         = array();      // array to hold validation errors
	$data           = array();      // array to pass back data

// validate the variables ======================================================
    // if any of these variables don't exist, add an error to our $errors array

   
    if (empty($_POST['title']))
        $errors['title'] = 'title is required.';
	if (empty($_POST['address']))
        $errors['address'] = 'address is required.';
    if (empty($_POST['landmark']))
        $errors['landmark'] = 'landmark is required.';
	if (empty($_POST['pincode']))
        $errors['pincode'] = 'address is required.';
	
	

// return a response ===========================================================
    if ( ! empty($errors)) {
		$data['success'] = false;
        $data['errors']  = $errors;
		
    } else {
		$c_id =$this->session->userdata('customer_id');
				$dataa = array(
				'title' => $this->input->post('title'),
				'address' => $this->input->post('address'),
				'landmark' => $this->input->post('landmark'),
				'pincode' => $this->input->post('pincode'),
				'customer_id' => $c_id,
				);
        $address_id = $this->Restaurant->InsertAddress($dataa);
	if($address_id){
	$query 	= $this->Restaurant->getuser_address($c_id);
	 
	$data['address'] = $query; 
	$data['success'] = true; 
	$data['message'] = "Succusssfully Insert";
		} 
    }

    // return all our data to an AJAX call
    echo json_encode($data);

	
	}
	function total_cart_ajax(){
	$data['total_cart'] = $this->cart->total();
	echo json_encode($data);
	}

	function update_adddress($p_id){
	$c_id =$this->session->userdata('customer_id');
				$dataa = array(
				'title' => $this->input->post('title'),
				'address' => $this->input->post('address'),
				'landmark' => $this->input->post('landmark'),
				'pincode' => $this->input->post('pincode'),
				//'customer_id' => $c_id,
				);
				
	 $update_id = $this->Restaurant->Update_Address($dataa,$p_id);
	 if($update_id){
		 $data['success'] = true; 
	$data['message'] = "Succusssfully Update address";
		}else{
	$data['message'] = "Failed Update address";		
		}
	$data['address'] = $this->Restaurant->getuser_address($c_id);
	echo json_encode($data);		
	}
	function getc_adddress($p_id){
//		echo $p_id; exit;
	$c_id =$this->session->userdata('customer_id');
	$query = $this->Restaurant->get_address($p_id);
	$data['address'] = $query; 
	echo json_encode($data);
	}
	function delete_adddress($p_id){
	$c_id =$this->session->userdata('customer_id');
	$query = $this->Restaurant->delete_adddress($p_id);
	$data['address'] = $this->Restaurant->getuser_address($c_id);
	echo json_encode($data);
	}
	function customer_adddress_web(){
	$c_id =$this->session->userdata('customer_id');
	$query = $this->Restaurant->getuser_address($c_id);
	$data['address'] = $query; 
	echo json_encode($data);
	}
	function customer_adddress_webid($id){
	//	echo $id; exit;
	$c_id =$this->session->userdata('customer_id');
	$query = $this->Restaurant->getuser_address_delivery($c_id,$id);
	$data['address'] = $query; 
	echo json_encode($data);
	}
	function customer_adddress($id){
	$c_id =$this->session->userdata('customer_id');
	$query = $this->Restaurant->getuser_address($c_id);
	$data['address'] = $query; 
	echo json_encode($data);
	}
	function search_restorents(){
		$title = $this->input->post('title');
		$query = $this->Restaurant->get_serchShops($title);
		$data['restorents'] = $query; 
		echo json_encode($data);
	}
	function updatesfavrets(){
		$rid = $this->input->post('id');
		$uid = $this->session->userdata('customer_id');
		$norows = $this->Restaurant->get_favourite($rid,$uid);
		if($norows){
//			print_r($norows); exit;
		if($norows['status'] == 1){
		$status = 2;
		}else{
		$status = 1;
		}
			$data = array(
                              'status' => $status                              
        );
		 $query = $this->Restaurant->update_favourite($data,$rid,$uid); 
		}else{
		//print_r($norows);	exit;
		$status = 1;
		$data = array(
                'uid' => strip_tags($this->input->post('ses_id')),
                'rid' => strip_tags($this->input->post('id')),
                'status' => $status                              
        );
		 $query = $this->Restaurant->insert_favourite($data); 
		}
		$wwww = $this->Restaurant->get_favourite($rid,$uid);
		echo $wwww['status']; exit;
		

	}

	function cprofile_update(){
		$uid = $this->session->userdata('customer_id');
		if($this->input->post('otp')){
			$suc = $this->VerifyOTPedit();
			
				if($suc['msg']=='Failed1'){
					echo "F1"; exit;
				} 
			
		}
		$data = array(
                'first_name' => strip_tags($this->input->post('name')),
                'phone' => strip_tags($this->input->post('phone'))
        );
		 $query = $this->Restaurant->update_cprofile($data,$uid); //exit;
		if($query){
			$this->session->unset_userdata('customer_name');
			$customer_name = $this->input->post('name');
			$this->session->set_userdata('customer_name', $customer_name);
		}
		echo $query;
	}
	function email_check($email='')
    {
		$email = $this->input->post('email');
		echo $vh_usr_id = $this->Restaurant->email_exists($email);// exit;	
    }
	function cart_check(){
		
	}
	function phone_check(){
		$phonec = $this->input->post('phone');
		echo $vh_usr_id = $this->Restaurant->phoneno_exists($phonec);// exit;	
    }
	function cart_ckfinal()
    {
		$adress_id = $_POST['adress_id']; 
		if($adress_id){}else{
			echo "1";	exit;
		}
		if($this->cart->total()<20){
			echo "20below";	exit;
		}
	$c_id =$this->session->userdata('customer_id'); //exit;
	$userData = array(
                'u_id' => $c_id,
                'status' => "Ordered",
                'total' => $this->input->post('total_to_pay'),
				'items_total' => number_format($this->cart->total(),2),
                'oredr_address_id' => $adress_id,
                'offer_code_id' => $this->input->post('offer_code_id'),
                'offer_code' => $this->input->post('offer_code'),
                'notetext' => $this->input->post('notetext'),
                'r_discount' => $this->input->post('r_discount'),
                'gst' => $this->input->post('gstprice'),
                'cupon_discount' => $this->input->post('cupon_discount_price'),
                'delivery_price' => $this->input->post('delivery_price'),
                'storkksfee' => $this->input->post('offer_percentage'),
				);
	$insert_oderid = $this->Restaurant->Item_oreder($userData);		
	if($insert_oderid){
		foreach ($this->cart->contents() as $items) {
			$item_id = $items['id'];
			$rid = $this->Restaurant->getproducts($item_id);
			$r_id = $rid['restaurant_id'];
			 $userData = array(
                'o_id' => $insert_oderid,
                'u_id' => $c_id,
                'rid' => $r_id,
                'itemid' => $items['id'],
                'item_name' => $items['name'],
                'qty' => $items['qty'],
                'item_price' => $items['price'],
				);
			$Itemid = $this->Restaurant->Item_oreder_details($userData);		
			$this->cart->remove($items['rowid']);	
			
		}
		$up_order_rid = array('rid' => $r_id);
		$updatee = $this->Restaurant->Item_oreder_update($up_order_rid,$insert_oderid);	
	$this->session->unset_userdata('cupon_discount');
	$this->session->unset_userdata('cupon_id');
	$this->session->unset_userdata('cupon_code');
	}
echo $insert_oderid; exit;	
		 
	}
function phone_checkedit($id)
    {
		
		$phonec = $this->input->post('phone');
		echo $vh_usr_id = $this->Restaurant->phonenoedit_exists($phonec,$id);// exit;	
    }
	function logout(){
   $this->session->unset_userdata('customer_id');
   $this->session->unset_userdata('customer_name');
   $this->session->unset_userdata('customer_email');
   //$this->session->sess_destroy();
  redirect($_SERVER['HTTP_REFERER']);

}
	function Order($id){
		$data['Order'] =  $this->Restaurant->getOrders($id);
		$this->load->view('web/status-order-web',$data);
	}
	function Orderstatus($id){
		$data['Order'] =  $this->Restaurant->getOrders($id);
		echo json_encode($data);
	}
	function getShopname($id){
		return $getShopname =  $this->Restaurant->getShopname($id);
	}
   function Invoice($id){
	   $data['orderdetails'] = $this->Restaurant->getOrders_details($id);
	   $data['orders'] =  $this->Restaurant->getOrders($id);

	   $this->load->view('about',$data);
   }
   function Invoicepdf($id){
     $this->load->helper(array('dompdf', 'file'));
	 $data['orderdetails'] = $this->Restaurant->getOrders_details($id);	 
	 $data['orders'] =  $this->Restaurant->getOrders($id);

     $html = $this->load->view('about', $data, true);
     pdf_create($html, $id);
    }
	function Invoiceorder($id,$orderaddresid,$ordershopid){
	   $data['orderdetails'] = $this->Restaurant->getOrders_details($id);
	   $data['orders'] =  $this->Restaurant->getOrders($id);
	   $data['addresss'] = $this->Restaurant->getuser_address_byorder($orderaddresid);
	   $data['ShopRows'] = $this->Restaurant->getShopRows($ordershopid);

	   echo json_encode($data);
   }
   function getuser_address_byorder($id){
	   $data['addresss'] = $this->Restaurant->getuser_address_byorder($id);
	   echo json_encode($data);
   }
   function getrestaurent_byrid($id){
	   $data['ShopRows'] = $this->Restaurant->getShopRows($id);
	   echo json_encode($data);
   }

function sendsmsotp($maill,$otpn){
$phone = '91'.$maill;
$textmessage = urlencode($otpn);
$service_url = 'https://110.4.44.41:15001/cgi-bin/sendsms?gw-username=dhaaksh&gw-password=73e4d2&gw-from=Storks&gw-to='.$phone.'&gw-text='.$textmessage;
$ch = curl_init($service_url);
$timeout  =  30;
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt ($ch,CURLOPT_CONNECTTIMEOUT, $timeout) ;
$content  = curl_exec($ch);
curl_close($ch);
return $service_url;	
	}


	

}

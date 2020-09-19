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

 
	public function index()
	{
		 $data['restaurants'] = $this->Restaurant->getShopRows();
		 $data['csns'] = $this->Restaurant->getCuisinesRows();
		 $this->load->view('web/restaurants-web',$data);
	}
	public function checkout()
	{
		 $data['checkout'] = $this->cart->contents();
		 $data['total'] = $this->cart->total() + 18;
		
		 $this->load->view('web/checkout-web',$data);
	}
	function add_to_cart(){ 
	$this->load->library("cart");
        $data = array(
            'id' => $this->input->post('product_id'), 
            'name' => $this->input->post('product_name'), 
            'price' => $this->input->post('product_price'), 
            'qty' => $this->input->post('quantity')
        );
        $this->cart->insert($data); 
        echo $this->show_cart(); 
    }
 function update_cart(){
	 $this->load->library("cart");
    // Recieve post values,calcute them and update
    $rowid =$this->input->post('product_id');
    $name = $this->input->post('product_name');
    $price = $this->input->post('product_price');
    $amount = $price * $this->input->post('quantity');
    $qty = $this->input->post('quantity'); //exit;
    $rowid = $this->input->post('rowid'); //exit;

    $data = array(
        'id' => $rowid,
        'name' => $name,
        'price' => $price,
        'qty' => $qty,
		'rowid' => $rowid,
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

    $dataa = array(
        'id' => $rowid,
        'name' => $name,
        'price' => $price,
        'qty' => $qty,
		'rowid' => $rowid,
        );

    $this->cart->update($dataa); //exit;
    $data['checkout'] = $this->cart->contents();
	$data['total'] = $this->cart->total();
	echo json_encode($data);	
    }	
    function show_cart(){ 
        $output = '';
        $no = 0;
        foreach ($this->cart->contents() as $items) {
            $no++;
            $output .='
                <div class="row no-gutter font-checkout">
                                    <div class="col-xs-5">
                                       <span>'.$items['name'].'</span>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="stepper-widget">
								<input type="hidden" class="rclass" id="rid_'.$items['id'].'" name="rid" value="'.$items['rowid'].'"/>		
								  
								  <input type="text" class="js-qty-input form-control" id="cart_'.$items['id'].'" value="'.$items['qty'].'" />
								  
								</div> 
                                    </div>
									<div class="col-xs-2 text-right">
									<span>$'.number_format($items['price']).'</span>
									</div><div class="col-xs-1 text-right">
									<span><button pdelete="'.$items['id'].'" type="button" id="'.$items['rowid'].'" class="romove_cart close-btn"><i class="fa fa-times-circle-o" aria-hidden="true"></i></button></span>
									</div>
                                 </div>
				
				
				
				
            ';
        }
        $output .= '
            <div class="price-wrap row">
							  <div class="col-xs-8"><p><b>Total</b></p></div>
							  <div class="col-xs-4"><h3 class="value"><strong>$ '.number_format($this->cart->total()).'</strong></h3></div>
                              
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
		//print_r($data); exit;
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
	$this->session->set_userdata('customer_id', $customer_id);
	$this->session->set_userdata('customer_name', $customer_name);
	$this->session->set_userdata('customer_email', $customer_email);
	$this->session->set_userdata('customer_phone', $customer_phone);
	$data['success'] = true; 
	$data['message'] = "Succusssfully Login";
		}else{
    $data['wrong'] = "Enter Valid credentials";    
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
		echo $p_id;
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
	echo json_encode($data);		
	}
	function getc_adddress($p_id){
	$c_id =$this->session->userdata('customer_id');
	$query = $this->Restaurant->get_address($p_id);
	$data['address'] = $query; 
	echo json_encode($data);
	}
	function delete_adddress($p_id){
	$c_id =$this->session->userdata('customer_id');
	$query = $this->Restaurant->delete_adddress($p_id);
	$data['address'] = $query; 
	echo json_encode($data);
	}
	function customer_adddress_web(){
	$c_id =$this->session->userdata('customer_id');
	$query = $this->Restaurant->getuser_address($c_id);
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
		$data = array(
                'first_name' => strip_tags($this->input->post('name')),
                'phone' => strip_tags($this->input->post('phone'))
        );
		//print_r($data); exit;
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
	function phone_check()
    {
		$phonec = $this->input->post('phone');
		echo $vh_usr_id = $this->Restaurant->phoneno_exists($phonec);// exit;	
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
   $this->session->sess_destroy();
   redirect();
}

	

}

<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Restaurant extends CI_Model {

    public function __construct() {
        parent::__construct();
		
		//load database library
        $this->load->database();
    }
	/*
     * Fetch Admin_login data
     */
    function Admin_login($usn,$pwd){
        $query = $this->db->get_where('users', array('email' => $usn, 'password' => md5($pwd),'is_admin '=>99));
        return $query->row_array();
    }
/*
     * Fetch Email data
     */	
	function user_email_verification($uid,$uemail){
		$query = $this->db->get_where('users', array('email' => $uemail,'id' =>$uid));
        return $query->row_array();
		 
    }
	/*
     * Update User status 
     */
    public function Update_otp_status($data, $uid) {
        if(!empty($data) && !empty($uid)){
			
            $update = $this->db->update('ts_otp', $data, array('id'=>$uid));
            return $update?true:false;
        }else{
            return false;
        }
    }
    public function Reset_UserPassword($data, $email) {
        if(!empty($data) && !empty($email)){
			
            $update = $this->db->update('users', $data, array('phone'=>$email));
            return $update?true:false;
        }else{
            return false;
        }
    }
	public function UpdateShopPassword($dataa, $email) {
        if(!empty($dataa) && !empty($email)){
			
            $update = $this->db->update('ts_restaurant', $dataa, array('email'=>$email));
            return $update?true:false;
        }else{
            return false;
        }
    }
	public function UpdateShopPasswordbyid($dataa, $id) {
        if(!empty($dataa) && !empty($id)){
			
          echo  $update = $this->db->update('ts_restaurant', $dataa, array('id'=>$id)); exit;
            return $update?true:false;
        }else{
            return false;
        }
    }
	/*
     * Update User status 
     */
    public function Update_user_status($data, $uid) {
        if(!empty($data) && !empty($uid)){
			
            $update = $this->db->update('users', $data, array('id'=>$uid));
            return $update?true:false;
        }else{
            return false;
        }
    }
	function email_exists($email){
		$query = $this->db->get_where('users', array('email' => $email));
        $rowname = $query->row_array();
		return $rowname['id']; 
    }
	function phoneno_exists($phonec){
		$query = $this->db->get_where('users', array('phone' => $phonec));
        $rowname = $query->row_array();
		return $rowname['id']; 
    }
	function phonenoedit_exists($phonec,$id){
		//echo $phonec; exit;
		$this->db->from('users');
		$query = $this->db->where_not_in('id',$id);
		$query = $this->db->where('phone',$phonec);
		$query = $this->db->get();
		$qq = $query->row_array();
	//	print_r($qq); exit;
	return $qq['id']; 
    }
	/*
     * Veryify OTP
     */
    function VerifyOTP_last($mobile){
		$this->db->order_by('id', 'DESC');
		$this->db->limit('1'); 
        $query = $this->db->get_where('ts_otp', array('phone' => $mobile,'verified !='=>1));
        return $query->row_array();
    }
	/*
     * 
     */
    function VerifyOTP($mobile,$otp){
        $query = $this->db->get_where('ts_otp', array('phone' => $mobile, 'otp_code' => $otp,'verified !='=>1));
        return $query->row_array();
	}	
    function Verify_Offer_byuser($userid,$cupon_code){
        $query = $this->db->get_where('ts_order', array('u_id' => $userid, 'offer_code' => $cupon_code));
        return $query->result_array();
    }
	/* Fetch Category data
     */
    function Shop_login($usn,$pwd){
        $query = $this->db->get_where('ts_restaurant', array('email' => $usn, 'password' => md5($pwd)));
        return $query->row_array();
    }
	/*
     * Fetch Category data
     */
    function getShopname($id){
	    $query = $this->db->get_where('ts_restaurant', array('id' => $id));
        $rowname = $query->row_array();
		echo $rowname['name']; 
    }
	/*
     * Fetch D boyname data
     */
    function getdboyname($id){
	    $query = $this->db->get_where('ts_delivery_people', array('id' => $id));
        $rowname = $query->row_array();
		echo $rowname['name']; 
    }	/*
     * Fetch D boyname data
     */
    function getCategoryname($id){
	    $query = $this->db->get_where('ts_category', array('id' => $id));
        $rowname = $query->row_array();
		echo $rowname['cat_name']; 
    }
	/*
     * Fetch Addons data
     */
    function getAddons($id = ""){
		$sessid = $this->session->userdata['Shopid']; //exit;
        if(!empty($id)){
            $query = $this->db->get_where('ts_addons', array('id' => $id,'restaurant_id' =>$sessid));
            return $query->row_array();
        }else{
            $query = $this->db->get_where('ts_addons', array('restaurant_id' =>$sessid));
            return $query->result_array();
        }
    }
	/*
     * Fetch Addons data
     */
    function getAddonsbyproductcart($valueee){
        if(!empty($valueee)){
            $query = $this->db->get_where('ts_addons', array('id' => $valueee));
            return $query->row_array();
        }
    }
    function getAddonsbyproduct($valueee,$catadnsid){
        if(!empty($valueee)){
            $query = $this->db->get_where('ts_addons', array('id' => $valueee,'cat_addon'=>$catadnsid));
            return $query->row_array();
        }
    }
    function getAddonsbycat($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('ts_addons', array('cat_addon' => $id));
            return $query->row_array();
        }
    }
    function getAddonsbycategory($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('ts_addons_cat', array('id' => $id));
            return $query->row_array();
        }
    }

	/*
     * Fetch Addons by restaurant_id data
     */
    function getRAddons($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('ts_addons', array('restaurant_id' => $id));
            return $query->result_array();
        }else{
            $query = $this->db->get('ts_addons');
            return $query->result_array();
        }
    }
    function getAddonscat($id = ""){
        $sessid = $this->session->userdata['Shopid']; //exit;
        if(!empty($id)){
            $query = $this->db->get_where('ts_addons_cat', array('id' => $id,'restaurant_id' =>$sessid));
            return $query->row_array();
        }else{
            $query = $this->db->get_where('ts_addons_cat', array('restaurant_id' =>$sessid));
            return $query->result_array();
        }
    }
	/*
     * Update Order status by Restaurant
     */
    public function UpdateOrderstatus($data, $id) {
        if(!empty($data) && !empty($id)){
			
            $update = $this->db->update('ts_order', $data, array('o_id'=>$id));
            return $update?true:false;
        }else{
            return false;
        }
    }	
	/*
     * Update Addons data
     */
    public function UpdateAddons($data, $id) {
        if(!empty($data) && !empty($id)){
			if(!array_key_exists('modefied_date', $data)){
				$data['modefied_date'] = date("Y-m-d H:i:s");
			}
            $update = $this->db->update('ts_addons', $data, array('id'=>$id));
            return $update?true:false;
        }else{
            return false;
        }
    }	
	public function UpdateAddonscat($data, $id) {
        if(!empty($data) && !empty($id)){
	
            $update = $this->db->update('ts_addons_cat', $data, array('id'=>$id));
            return $update?true:false;
        }else{
            return false;
        }
    }	
	/*
     * Insert OTP
     */
    public function Insert_Otp($data = array()) {
		if(!array_key_exists('created', $data)){
			$data['create_date'] = date("Y-m-d H:i:s");
		}
		$insert = $this->db->insert('ts_otp', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
	/*
     * Insert Category notice data
     */
    public function InsertAddons($data = array()) {
		if(!array_key_exists('created', $data)){
			$data['create_date'] = date("Y-m-d H:i:s");
		}
		if(!array_key_exists('modefied_date', $data)){
			$data['modefied_date'] = date("Y-m-d H:i:s");
		}
        $insert = $this->db->insert('ts_addons', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
    public function InsertAddonscat($data = array()) {
		if(!array_key_exists('created', $data)){
			$data['create_date'] = date("Y-m-d H:i:s");
		}

        $insert = $this->db->insert('ts_addons_cat', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
	/*
     * Fetch Category data
     */
     function getproducts($id = ""){
	
        if(!empty($id)){
			
            $query = $this->db->get_where('ts_product', array('id' => $id));
            return $query->row_array();
        }else{
				$shopid = $this->session->userdata['Shopid'];	
            $query = $this->db->get_where('ts_product', array('restaurant_id' => $shopid));
            return $query->result_array();
        }
    }
	/*
     * Fetch Category data
     */
     function get_products($shopid = ""){
	
        
			$shopid = $this->session->userdata['Shopid'];	
            $query = $this->db->get_where('ts_product', array('restaurant_id' => $shopid));
            return $query->result_array();
        
    }
	/*
     * Insert Category notice data
     */
    public function InsertProduct($data = array()) {
		if(!array_key_exists('created', $data)){
			$data['create_date'] = date("Y-m-d H:i:s");
		}
		if(!array_key_exists('modified', $data)){
			$data['modefied_date'] = date("Y-m-d H:i:s");
		}
        $insert = $this->db->insert('ts_product', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
	/*
     * Update Product data
     */
    public function updateProduct($data, $id) {
        if(!empty($data) && !empty($id)){
			if(!array_key_exists('modefied_date', $data)){
				$data['modefied_date'] = date("Y-m-d H:i:s");
			}
		//	echo "sdfsdf"; exit;	
            $update = $this->db->update('ts_product', $data, array('id'=>$id));
		//	echo $this->db->last_query(); exit;
            return $update?true:false;
        }else{
            return false;
        }
    }	
	/*
     * Fetch Category byid
     */
    function getShop_up($id = "",$pos){
		//$sessid = $this->session->userdata['Shopid']; 
			$query = $this->db->order_by("order_position");
            $query = $this->db->get_where('ts_restaurant', array('order_position >=' => $pos,'id !='=>$id));
            return $query->result_array();
     }
	 /*
     * Fetch Category byid
     */
    function getCategory_up($id = "",$pos){
		$sessid = $this->session->userdata['Shopid']; 
	 $query = $this->db->order_by("cat_order");
            $query = $this->db->get_where('ts_category', array('cat_order >=' => $pos,'restaurant_id'=>$sessid,'id !='=>$id));
            return $query->result_array();
     }
	  /*
     * Fetch Category data
     */
    function getCategory($id = ""){
		$sessid = $this->session->userdata['Shopid']; 
        if(!empty($id)){
            $query = $this->db->get_where('ts_category', array('id' => $id,'restaurant_id' => $sessid));
            return $query->row_array();
        }else{
            $query = $this->db->get_where('ts_category', array('restaurant_id' => $sessid));
            return $query->result_array();
        }
    }
	
	 function getCategorybyshop($id = ""){
		    if(!empty($id)){
				 $query = $this->db->order_by("cat_order");
            $query = $this->db->get_where('ts_category', array('restaurant_id' => $id));
            return $query->result_array();
        }else{
			 $query = $this->db->order_by("cat_order");
            $query = $this->db->get_where('ts_category');
            return $query->result_array();
        }
    }
	
	/*
     * Update categorie data
     */
    public function UpdateCategoryinc($data, $id) {
        
            $update = $this->db->update('ts_category', $data, array('id'=>$id));
            return $update?true:false;
        
    }	
	/*
     * Update Shop Order data
     */
    public function UpdateShop_position($data, $id) {
        
            $update = $this->db->update('ts_restaurant', $data, array('id'=>$id));
            return $update?true:false;
        
    }
	/*
     * Update categorie data
     */
    public function UpdateCategory($data, $id) {
        if(!empty($data) && !empty($id)){
			if(!array_key_exists('modefied_date', $data)){
				$data['modefied_date'] = date("Y-m-d H:i:s");
			}
            $update = $this->db->update('ts_category', $data, array('id'=>$id));
            return $update?true:false;
        }else{
            return false;
        }
    }	
	/*
     * Insert Category notice data
     */
    public function InsertCategory($data = array()) {
		if(!array_key_exists('created', $data)){
			$data['create_date'] = date("Y-m-d H:i:s");
		}
		if(!array_key_exists('modified', $data)){
			$data['modefied_date'] = date("Y-m-d H:i:s");
		}
        $insert = $this->db->insert('ts_category', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }	
	/*
     * Insert Custome notice data
     */
    public function InsertCustomeNotice($data = array()) {
		if(!array_key_exists('created', $data)){
			$data['created'] = date("Y-m-d H:i:s");
		}
		if(!array_key_exists('modified', $data)){
			$data['modified'] = date("Y-m-d H:i:s");
		}
        $insert = $this->db->insert('custompush', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
	 /*
     * Fetch Subadmin data
     */
    function getsubadmin($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('users', array('id' => $id));
            return $query->row_array();
        }else{
            $query = $this->db->get_where('users', array('is_admin !='=>99,'is_admin'=>'Subadmin'));
            return $query->result_array();
        }
    }
	/*
     * Fetch Orders by user
     */
    function getOrdersbyuser($id = ""){
        if(!empty($id)){
			$query = $this->db->order_by("o_id", "desc");
            $query = $this->db->get_where('ts_order', array('u_id' => $id));
            return $query->result_array();
        }else{
		 $query = $this->db->order_by("u_id", "desc");
		$query = $this->db->get('ts_order');
           return $query->result_array();
        }
    }
    function getOrdersbyuserService($id = ""){
        if(!empty($id)){
			$query = $this->db->order_by("ts_order.o_id", "desc");
            $this->db->select('ts_order.rid,ts_order.o_id,ts_order.total,ts_order.date_of_order,ts_restaurant.name,ts_restaurant.shop_logo,ts_restaurant.address');
			$query = $this->db->join('ts_restaurant', 'ts_order.rid = ts_restaurant.id');
			$query = $this->db->join('ts_order_details', 'ts_order.o_id = ts_order_details.o_id');
			$query = $this->db->get_where('ts_order', array('ts_order.u_id' => $id));
            return $query->result_array();
        }else{
		 $query = $this->db->order_by("u_id", "desc");
		$query = $this->db->get('ts_order');
           return $query->result_array();
        }
    }	/*
     * Fetch Orders
     */
    function getOrderstoday($id = ""){
        if(!empty($id)){
			$datse = date('Y-m-d');
            $query = $this->db->where('rid',$id);
			$query = $this->db->like('date_of_order',$datse);
			$query = $this->db->get('ts_order');
			return $query->result_array();
			//return $query;
        }
    }
    function getOrdersbymonth($id = ""){
        if(!empty($id)){
			$datse = date('Y-m');
            $query = $this->db->where('rid',$id);
			$query = $this->db->like('date_of_order',$datse);
			$query = $this->db->get('ts_order');
			return $query->result_array();
			//return $query;
        }
    }
    function getOrders($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('ts_order', array('o_id' => $id));
            return $query->row_array();
        }else{
		 $query = $this->db->order_by("o_id", "desc");
		$query = $this->db->get('ts_order');
           return $query->result_array();
        }
    }
    function getOrdersbiday($id = ""){
		$query = $this->db->order_by("date_of_order", "desc");
		$shpid = $this->session->userdata('Shopid');
		if(!empty($shpid)){
			$ridd = $shpid;
			$query = $this->db->like('rid',$ridd);
		}
		if(!empty($_GET['rid'])){
			$ridd = $_GET['rid'];
			$query = $this->db->like('rid',$ridd);
		}
		$query = $this->db->like('date_of_order',$id);
		$query = $this->db->get('ts_order');
		return $query->result_array();
    }
    function getOrdersbydayshops($id = ""){
		$query = $this->db->order_by("date_of_order", "desc");
		if(!empty($_GET['rid'])){
			$ridd = $_GET['rid'];
			$query = $this->db->like('rid',$ridd);
		}
		$shpid = $this->session->userdata('Shopid');
		if(!empty($shpid)){
			$ridd = $shpid;
			$query = $this->db->like('rid',$ridd);
		}
		$query = $this->db->like('date_of_order',$id);
		$query = $this->db->get('ts_order');
		return $query->result_array();
    }
    function Pomocodeusers($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('ts_order', array('o_id' => $id,'offer_code_id >' => 0));
            return $query->row_array();
        }else{
		 $query = $this->db->order_by("o_id", "desc");
		$query = $this->db->get_where('ts_order', array('offer_code_id >' => 0));
           return $query->result_array();
        }
    }
	/*
     * Fetch Shop wise Orders details
     */
    function getOrders_shop($id = ""){
        if(!empty($id)){
			 $query = $this->db->order_by("o_id", "desc");
            $query = $this->db->get_where('ts_order', array('rid' => $id));
            return $query->result_array();
        }else{
		 $query = $this->db->order_by("rid", "desc");
		$query = $this->db->get('ts_order');
           return $query->result_array();
        }
    }  
	function getOrders_shopnew($id = ""){
        if(!empty($id)){
			$date = date('Y-m-d H:i:s', strtotime(' - 2 minutes'));
			$query = $this->db->order_by("o_id", "desc");
            $query = $this->db->get_where('ts_order', array('rid' => $id,'rid_status' => 0,'date_of_order >='=>$date));
            return $query->result_array();
        }else{
		 $query = $this->db->order_by("rid", "desc");
		$query = $this->db->get('ts_order');
           return $query->result_array();
        }
    }
    function getOrders_shoplatest($id = ""){
        if(!empty($id)){
			 $query = $this->db->order_by("o_id", "desc");
            $query = $this->db->get_where('ts_order', array('rid' => $id,'rid_status '=>0));
            return $query->result_array();
        }
    }
	/*
     * Fetch Orders details
     */
    function getOrders_details($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('ts_order_details', array('o_id' => $id));
            return $query->result_array();
        }else{
		 $query = $this->db->order_by("o_id", "desc");
		$query = $this->db->get('ts_order_details');
           return $query->result_array();
        }
    }
	/*
     * Fetch notices data
     */
    function getusers($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('users', array('id' => $id));
            return $query->row_array();
        }else{
			 $query = $this->db->order_by("id", "desc");
            $query = $this->db->get_where('users', array('is_admin !='=>99));
            return $query->result_array();
        }
    }
	/*
     * Fetch Customer Login data
     */
    function verifycustomer($email,$pass){
		
		$query = $this->db->get_where('users', array('phone' => $email,'password' => $pass));
		return $query->row_array();
		
	}
	/*
     * Insert Customer Address
     */
    public function InsertAddress($data = array()) {
		if(!array_key_exists('created', $data)){
			$data['created'] = date("Y-m-d H:i:s");
		}
		if(!array_key_exists('modified', $data)){
			$data['modified'] = date("Y-m-d H:i:s");
		}
        $insert = $this->db->insert('customer_address', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
	/*
     * Insert Order
     */
    public function Item_oreder($data = array()) {
		if(!array_key_exists('date_of_order', $data)){
			$data['date_of_order'] = date("Y-m-d H:i:s");
		}
		$insert = $this->db->insert('ts_order', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
			/*
     * Update Order data
     */
    public function Item_oreder_update($up_order_rid,$insert_oderid) {
        if(!empty($up_order_rid) && !empty($insert_oderid)){
			$update = $this->db->update('ts_order', $up_order_rid, array('o_id'=>$insert_oderid));
            return $update?true:false;
        }else{
            return false;
        }
    }
	/*
     * Insert Order Detail
     */
    public function Item_oreder_details($data = array()) {
		if(!array_key_exists('datecreate', $data)){
			$data['datecreate'] = date("Y-m-d H:i:s");
		}
		$insert = $this->db->insert('ts_order_details', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }

		/*
     * Update Update_Address data
     */
    public function Update_Address($dataa,$p_id) {
        if(!empty($dataa) && !empty($p_id)){
			if(!array_key_exists('modified', $dataa)){
				$dataa['modified'] = date("Y-m-d H:i:s");
			}
            $update = $this->db->update('customer_address', $dataa, array('id'=>$p_id));
			//echo $this->db->last_query(); exit;
            return $update?true:false;
        }else{
            return false;
        }
    }
	/*
     * Update Last login data
     */
    public function Updatelogin($customer_id) {
        if(!empty($customer_id)){
				$dataa['modified'] = date("Y-m-d H:i:s");
				$dataa['last_active'] = date("Y-m-d H:i:s");
			$update = $this->db->update('users', $dataa, array('id'=>$customer_id));
			return $update?true:false;
        }else{
            return false;
        }
    }
	/*
     * Update Pages data
     */
    public function Pagedata($dataa,$p_id) {
        if(!empty($dataa) && !empty($p_id)){
			if(!array_key_exists('modified', $dataa)){
				$dataa['modified'] = date("Y-m-d H:i:s");
			}
            $update = $this->db->update('ts_pages', $dataa, array('page_id'=>$p_id));
			//echo $this->db->last_query(); exit;
            return $update?true:false;
        }else{
            return false;
        }
    }
		/*
     * Fetch Pages Data
     */
    function get_pages($c_id = ""){
        if(!empty($c_id)){
            $query = $this->db->get_where('ts_pages', array('page_id' => $c_id));
            return $query->row_array();
        }else{
            $query = $this->db->get('ts_pages');
            return $query->result_array();
        }
    }
		/*
     * Fetch Charges Data
     */
    function get_charges($c_id = ""){
        if(!empty($c_id)){
            $query = $this->db->get_where('ts_charges', array('id' => $c_id));
            return $query->row_array();
        }else{
            $query = $this->db->get('ts_charges');
            return $query->result_array();
        }
    }
    public function Chargesdata($dataa,$p_id) {
        if(!empty($dataa) && !empty($p_id)){
			if(!array_key_exists('modified_date', $dataa)){
				$dataa['modified_date'] = date("Y-m-d H:i:s");
			}
            $update = $this->db->update('ts_charges', $dataa, array('id'=>$p_id));
            return $update?true:false;
        }else{
            return false;
        }
    }
	
	public function delete_adddress($p_id){
        $delete = $this->db->delete('customer_address',array('id'=>$p_id));
        return $delete?true:false;
    }
	/*
     * Fetch Shops search
     */
    function get_serchShops($title = ""){
        if(!empty($title)){
				$this->db->from('ts_restaurant');
				$this->db->like('name', $title,'after');
				$this->db->limit(8);
			return $query = $this->db->get()->result_array();
            
          
        }else{
            $query = $this->db->get('ts_restaurant');
            return $query->result_array();
        }
    }
	/*
     * Fetch Customer Address 
     */
    function getuser_address($c_id = ""){
        if(!empty($c_id)){
            $query = $this->db->get_where('customer_address', array('customer_id' => $c_id));
            return $query->result_array();
        }else{
            $query = $this->db->get('customer_address');
            return $query->result_array();
        }
    }
	function getuser_address_byorder($c_id = ""){
        if(!empty($c_id)){
            $query = $this->db->get_where('customer_address', array('id' => $c_id));
            return $query->row_array();
        }else{
            $query = $this->db->get('customer_address');
            return $query->result_array();
        }
    }
    function getuser_address_delivery($c_id = "",$id){
        if(!empty($c_id)){
            $query = $this->db->get_where('customer_address', array('customer_id' => $c_id,'id'=>$id));
            return $query->row_array();
        }else{
            $query = $this->db->get('customer_address');
            return $query->result_array();
        }
    }
	/*
     * Fetch User Address 
     */
    function get_user_address($id = ""){

        if(!empty($id)){
            $query = $this->db->get_where('customer_address', array('customer_id' => $id));
            return $query->row_array();
        }else{
            $query = $this->db->get('customer_address');
            return $query->result_array();
        }
    }
	/*
     * Fetch get Address 
     */
    function get_address($id = ""){

        if(!empty($id)){
            $query = $this->db->get_where('customer_address', array('id' => $id));
            return $query->row_array();
        }else{
            $query = $this->db->get('customer_address');
            return $query->result_array();
        }
    }	/*
     * Insert notice data
     */
    public function InsertUsers($data = array()) {
		if(!array_key_exists('created', $data)){
			$data['created'] = date("Y-m-d H:i:s");
		}
		if(!array_key_exists('modified', $data)){
			$data['modified'] = date("Y-m-d H:i:s");
		}
        $insert = $this->db->insert('users', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
	/*
     * Fetch get_blogposts data
     */
    function get_blogposts($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('ts_blog', array('id' => $id));
            return $query->row_array();
        }else{
            $query = $this->db->get('ts_blog');
            return $query->result_array();
        }
    }
	/*
     *  InsertBlogpost data
     */
    public function InsertBlogpost($data = array()) {
		if(!array_key_exists('create_date', $data)){
			$data['create_date'] = date("Y-m-d H:i:s");
		}
		if(!array_key_exists('modified_date', $data)){
			$data['modified_date'] = date("Y-m-d H:i:s");
		}
        $insert = $this->db->insert('ts_blog', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
	/*
     *  Insert Careers data
     */
    public function Insertcareers($data = array()) {
		if(!array_key_exists('create_date', $data)){
			$data['create_date'] = date("Y-m-d H:i:s");
		}
		if(!array_key_exists('modified_date', $data)){
			$data['modified_date'] = date("Y-m-d H:i:s");
		}
        $insert = $this->db->insert('ts_careers', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
	/*
     *  Insert Partners data
     */
    public function Insertpartners($data = array()) {
		if(!array_key_exists('create_date', $data)){
			$data['create_date'] = date("Y-m-d H:i:s");
		}
        $insert = $this->db->insert('ts_partner', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
		/*
     * Fetch Partners data
     */
    function get_Partners($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('ts_partner', array('id' => $id));
            return $query->row_array();
        }else{
			$this->db->order_by('id', 'DESC');
            $query = $this->db->get('ts_partner');
            return $query->result_array();
        }
    }	
	/*
     * Fetch Careers data
     */
    function Getcareers($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('ts_careers', array('id' => $id));
            return $query->row_array();
        }else{
            $query = $this->db->get('ts_careers');
            return $query->result_array();
        }
    }	
	

	
	/*
     * Update users data
     */
    public function UpdateUsers($data, $id) {
        if(!empty($data) && !empty($id)){
			if(!array_key_exists('modified', $data)){
				$data['modified'] = date("Y-m-d H:i:s");
			}
            $update = $this->db->update('users', $data, array('id'=>$id));
            return $update?true:false;
        }else{
            return false;
        }
    }

	/*
     * Fetch notices data
     */
    function getnotices($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('ts_noticeboard', array('id' => $id));
            return $query->row_array();
        }else{
            $query = $this->db->get('ts_noticeboard');
            return $query->result_array();
        }
    }
	/*
     * Update notices data
     */
    public function UpdateNotice($data, $id) {
        if(!empty($data) && !empty($id)){
			if(!array_key_exists('modified', $data)){
				$data['modified_date'] = date("Y-m-d H:i:s");
			}
            $update = $this->db->update('ts_noticeboard', $data, array('id'=>$id));
            return $update?true:false;
        }else{
            return false;
        }
    }
	/*
     * Insert notice data
     */
    public function InsertNotice($data = array()) {
		if(!array_key_exists('created', $data)){
			$data['create_date'] = date("Y-m-d H:i:s");
		}
		if(!array_key_exists('modified', $data)){
			$data['modified_date'] = date("Y-m-d H:i:s");
		}
        $insert = $this->db->insert('ts_noticeboard', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
	/*
     * Fetch RestaurentBanners data
     */
    function getRestaurentBanner($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('ts_rbanner', array('id' => $id));
            return $query->row_array();
        }else{
            $query = $this->db->get('ts_rbanner');
            return $query->result_array();
        }
    }
	/*
     * Update ts_rbanner data
     */
    public function UpdateBanner($data, $id) {
        if(!empty($data) && !empty($id)){
			if(!array_key_exists('modified', $data)){
				$data['modified_date'] = date("Y-m-d H:i:s");
			}
            $update = $this->db->update('ts_rbanner', $data, array('id'=>$id));
            return $update?true:false;
        }else{
            return false;
        }
    }	
	/*
     * Insert RestaurentBanners data
     */
    public function InsergetRestaurentBanner($data = array()) {
		if(!array_key_exists('created', $data)){
			$data['create_date'] = date("Y-m-d H:i:s");
		}
		if(!array_key_exists('modified', $data)){
			$data['modified_date'] = date("Y-m-d H:i:s");
		}
        $insert = $this->db->insert('ts_rbanner', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
	 /*
     * Fetch Promocode data
     */
    function getPromocodeRowsbyuser($id = ""){
		$dt =date("Y-m-d H:i:s");
        if(!empty($id)){
            $query = $this->db->get_where('ts_promocods', array('id' => $id));
            return $query->row_array();
        }else{
            $query = $this->db->get_where('ts_promocods', array('expiration >' => $dt));
            return $query->result_array();
        }
    }
	/*
     * Fetch Promocode data
     */
    function getPromocodeRows($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('ts_promocods', array('id' => $id));
            return $query->row_array();
        }else{
            $query = $this->db->get('ts_promocods');
            return $query->result_array();
        }
    }
	function getPromocodevalid($cupon_code = ""){
			$dt =date("Y-m-d H:i:s");
            $query = $this->db->get_where('ts_promocods', array('promo_code'=>$cupon_code));
            return $query->row_array();
    }
	/*
     * Update ts_promocods data
     */
    public function UpdatePromocode($data, $id) {
        if(!empty($data) && !empty($id)){
			if(!array_key_exists('modified', $data)){
				$data['modified_date'] = date("Y-m-d H:i:s");
			}
            $update = $this->db->update('ts_promocods', $data, array('id'=>$id));
            return $update?true:false;
        }else{
            return false;
        }
    }
	/*
     * Insert Promocode data
     */
    public function InserPromocode($data = array()) {
		if(!array_key_exists('created', $data)){
			$data['create_date'] = date("Y-m-d H:i:s");
		}
		if(!array_key_exists('modified', $data)){
			$data['modified_date'] = date("Y-m-d H:i:s");
		}
        $insert = $this->db->insert('ts_promocods', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
	
	/*
     * Fetch Cuisines data
     */
    function getCuisinesRows($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('ts_cuisines', array('id' => $id));
            return $query->row_array();
        }else{
            $query = $this->db->get('ts_cuisines');
            return $query->result_array();
        }
    }
	/*
     * Insert Cuisines data
     */
    public function InserCuisines($data = array()) {
		if(!array_key_exists('created', $data)){
			$data['create_date'] = date("Y-m-d H:i:s");
		}
		if(!array_key_exists('modified', $data)){
			$data['modified_date'] = date("Y-m-d H:i:s");
		}
        $insert = $this->db->insert('ts_cuisines', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }	
	/*
     * Update ts_cuisines data
     */
    public function UpdateCuisines($data, $id) {
        if(!empty($data) && !empty($id)){
			if(!array_key_exists('modified', $data)){
				$data['modified_date'] = date("Y-m-d H:i:s");
			}
            $update = $this->db->update('ts_cuisines', $data, array('id'=>$id));
            return $update?true:false;
        }else{
            return false;
        }
    }
	/*
     * Fetch user data
     */
    function getManagerRows($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('ts_dispute_manager', array('id' => $id));
            return $query->row_array();
        }else{
            $query = $this->db->get('ts_dispute_manager');
            return $query->result_array();
        }
    }
	/*
     * Update People data
     */
    public function ManagerUpdate($data, $id) {
        if(!empty($data) && !empty($id)){
			if(!array_key_exists('modified', $data)){
				$data['modified_date'] = date("Y-m-d H:i:s");
			}
            $update = $this->db->update('ts_dispute_manager', $data, array('id'=>$id));
            return $update?true:false;
        }else{
            return false;
        }
    }
	/*
     * Insert Manager data
     */
    public function Managerinsert($data = array()) {
		if(!array_key_exists('created', $data)){
			$data['create_date'] = date("Y-m-d H:i:s");
		}
		if(!array_key_exists('modified', $data)){
			$data['modified_date'] = date("Y-m-d H:i:s");
		}
        $insert = $this->db->insert('ts_dispute_manager', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
	 /*
     * Fetch user data
     */
    function getPeopleRows($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('ts_delivery_people', array('id' => $id));
            return $query->row_array();
        }else{
            $query = $this->db->get('ts_delivery_people');
            return $query->result_array();
        }
    }
	/*
     * Insert user data
     */
    public function Peopleinsert($data = array()) {
		if(!array_key_exists('created', $data)){
			$data['create_date'] = date("Y-m-d H:i:s");
		}
		if(!array_key_exists('modified', $data)){
			$data['modified_date'] = date("Y-m-d H:i:s");
		}
        $insert = $this->db->insert('ts_delivery_people', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
    /*
     * Update People data
     */
    public function updatePeople($data, $id) {
        if(!empty($data) && !empty($id)){
			if(!array_key_exists('modified', $data)){
				$data['modified_date'] = date("Y-m-d H:i:s");
			}
            $update = $this->db->update('ts_delivery_people', $data, array('id'=>$id));
            return $update?true:false;
        }else{
            return false;
        }
    }
	public function Catdelete($id){
        $delete = $this->db->delete('ts_category',array('id'=>$id));
        return $delete?true:false;
    }	
	public function Shopdelete($id){
        $delete = $this->db->delete('ts_restaurant',array('id'=>$id));
        return $delete?true:false;
    }
	public function Dpeopledelete($id){
        $delete = $this->db->delete('ts_delivery_people',array('id'=>$id));
        return $delete?true:false;
    }
	public function DManagerdelete($id){
        $delete = $this->db->delete('ts_dispute_manager',array('id'=>$id));
        return $delete?true:false;
    }
	public function cuisinesDelete($id){
        $delete = $this->db->delete('ts_cuisines',array('id'=>$id));
        return $delete?true:false;
    }
	public function PromoDelete($id){
        $delete = $this->db->delete('ts_promocods',array('id'=>$id));
        return $delete?true:false;
    }
	public function BannerDelete($id){
        $delete = $this->db->delete('ts_rbanner',array('id'=>$id));
        return $delete?true:false;
    }
	public function UserDelete($id){
        $delete = $this->db->delete('users',array('id'=>$id));
        return $delete?true:false;
    }
	public function Addondelete($id){
        $delete = $this->db->delete('ts_addons',array('id'=>$id));
        return $delete?true:false;
    }
	public function catAddondelete($id){
        $delete = $this->db->delete('ts_addons_cat',array('id'=>$id));
        return $delete?true:false;
    }
	public function Product_delete($id){
        $delete = $this->db->delete('ts_product',array('id'=>$id));
        return $delete?true:false;
    }

    /*
     * Fetch user data
     */
    function getShopRowsweb($id = ""){
        
			 $first_date = Date('h:i');
			// echo $time =  Date('h:i'); exit;
	if(date('l') == "Monday"){
		$df = "m_";}

$this->db->from('ts_restaurant');
$this->db->join('ts_restaurant_timeings', 'ts_restaurant.id = ts_restaurant_timeings.rid');
$this->db->where(array('ts_restaurant_timeings.rid ='=>$id));	
$query = $this->db->get();			
//echo $this->db->last_query(); exit;
            return $query->result_array();
        
    }
    function getShopRows($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('ts_restaurant', array('id' => $id));
            return $query->row_array();
        }else{
			$query = $this->db->order_by("order_position");
            $query = $this->db->get_where('ts_restaurant');
            return $query->result_array();
        }
    }
    function getShopRowswebuser($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('ts_restaurant', array('id' => $id));
            return $query->row_array();
        }else{
			$query = $this->db->order_by("order_position");
            $query = $this->db->get_where('ts_restaurant', array('status' => 'active'));
            return $query->result_array();
        }
    }
    function getmostpopularrest($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('ts_restaurant', array('id' => $id));
            return $query->row_array();
        }else{
			$query = $this->db->limit(6);
			$query = $this->db->order_by("order_position");
            $query = $this->db->get_where('ts_restaurant', array('status' => 'active'));
            return $query->result_array();
        }
    }
    function getShopRowsclose($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('ts_restaurant', array('id' => $id));
            return $query->row_array();
        }else{
			$query = $this->db->order_by("order_position");
			$query = $this->db->like('status', 'active');
			$query = $this->db->or_like('status', 'onboarding');
            $query = $this->db->get_where('ts_restaurant');
	
            return $query->result_array();
        }
    } 
    function getShopRowsbyemail($email = ""){

            $query = $this->db->get_where('ts_restaurant', array('email' => $email));
            return $query->row_array();
    } 
	function getShopRows_search($city,$cat){
       // echo $cat.'/'.$city; exit;
			$query = $this->db->order_by("order_position");
            if(!empty($cat)){
				$query = $this->db->like('Cuisine', $cat);
				}
			if(!empty($city)){
           // $query = $this->db->like('address', $city);
			}
			$query = $this->db->like('status', 'active');
            $query = $this->db->get('ts_restaurant');
            return $query->result_array();
        
    }
	function getShopRows_cuisins($cuisins){
			
			$query = $this->db->order_by("order_position");
            if(!empty($cuisins)){
				$cats = explode(",", $cuisins);
				foreach($cats as $cat) {
					$cat = trim($cat);
					$query = $this->db->or_like('Cuisine', $cat);		
					}
				
				}

			//$query = $this->db->like('status', 'active');
			//$query = $this->db->or_like('status', 'onboarding');
            $query = $this->db->get('ts_restaurant');
        return  $query->result_array();
        // echo $this->db->last_query(); exit;
    }
	function getShopRows_searchclose($city,$cat){
       // echo $cat.'/'.$city; exit;
			$query = $this->db->order_by("order_position");
            if(!empty($cat)){
				$query = $this->db->like('Cuisine', $cat);
				}
			if(!empty($city)){
           // $query = $this->db->like('address', $city);
			}
			$query = $this->db->like('status', 'active');
			$query = $this->db->or_like('status', 'onboarding');
            $query = $this->db->get('ts_restaurant');
            return $query->result_array();
        
    }
    /*
     * Fetch Shop timings data
     */
    function getShoptimings($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('ts_restaurant_timeings', array('rid' => $id));
            return $query->row_array();
        }else{
            $query = $this->db->get('ts_restaurant_timeings');
            return $query->result_array();
        }
    }
   	
    
    /*
     * Insert user Shop data
     */
    public function insert($data = array()) {
		if(!array_key_exists('created', $data)){
			$data['create_date'] = date("Y-m-d H:i:s");
		}
		if(!array_key_exists('modified', $data)){
			$data['modified_date'] = date("Y-m-d H:i:s");
		}
        $insert = $this->db->insert('ts_restaurant', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
	/*
     * Insert user Shop data
     */
    public function Shoptimingsdata($data = array()) {
		if(!array_key_exists('created', $data)){
			$data['create_date'] = date("Y-m-d H:i:s");
		}
	
        $insert = $this->db->insert('ts_restaurant_timeings', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
	 /*
     * Fetch Faverates data
     */
    function get_favourite($rid,$uid){
        if(!empty($rid)){
            $query = $this->db->get_where('ts_favourite', array('rid' => $rid,'uid' => $uid));
            return $query->row_array();
        }
    }
	/*
     * Fetch Faverates data
     */
    function get_favsbyuser($c_id){
        if(!empty($c_id)){
            $query = $this->db->get_where('ts_favourite', array('uid' => $c_id,'status'=>1));
            return $query->result_array();
        }
    }
	/*
     * update Faverates data
     */
    function update_favourite($data,$rid,$uid){
        if(!empty($rid)){
           
			 $update = $this->db->update('ts_favourite', $data, array('rid'=>$rid,'uid' => $uid));
            return $update?true:false;
            //return $query->row_array();
        }
    }
	/*
     * update profile data
     */
    function update_cprofile($data,$uid){
        if(!empty($uid)){
           
			 $update = $this->db->update('users', $data, array('id' => $uid));
            return $update?true:false;
            //return $query->row_array();
        }
    }
    /*
     * Insert Faverates data
     */
    public function insert_favourite($data = array()) {
		if(!array_key_exists('create_date', $data)){
			$data['create_date'] = date("Y-m-d H:i:s");
		}
        $insert = $this->db->insert('ts_favourite', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
	
    
    /*
     * Update user data
     */
    public function updateShop($data, $id) {
        if(!empty($data) && !empty($id)){
			if(!array_key_exists('modified', $data)){
				$data['modified_date'] = date("Y-m-d H:i:s");
			}
            $update = $this->db->update('ts_restaurant', $data, array('id'=>$id));
            return $update?true:false;
        }else{
            return false;
        }
    }
    /*
     * Update user data
     */
    public function UpdateShoptimings($data, $id) {
        if(!empty($data) && !empty($id)){
		//	print_r($data); exit;
			 $update = $this->db->update('ts_restaurant_timeings', $data, array('rid'=>$id)); 
            return $update?true:false;
        }else{
            return false;
        }
    }
    
    /*
     * Delete user data
     */
    public function delete($id){
        $delete = $this->db->delete('ts_restaurant',array('id'=>$id));
        return $delete?true:false;
    }
	
	/*
	Get Products by Cat 
*/
 function getproductsbycat($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('ts_product', array('category' => $id));
            return $query->result_array();
        }else{
            $query = $this->db->get('ts_product');
            return $query->result_array();
        }
    }
		/*
	Get Products by Cat 
*/
 function getproductsby_cat_rest($id = "",$rid){
        if(!empty($id)){
            $query = $this->db->get_where('ts_product', array('category' => $id,'restaurant_id' => $rid));
            return $query->result_array();
        }else{
            $query = $this->db->get('ts_product');
            return $query->result_array();
        }
    }
	

}
?>
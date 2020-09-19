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
        $query = $this->db->get_where('users', array('email' => $usn, 'password' => md5($pwd)));
        return $query->row_array();
    }
/*
     * Fetch Email data
     */	
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
     * Fetch Category data
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
            $update = $this->db->update('ts_product', $data, array('id'=>$id));
            return $update?true:false;
        }else{
            return false;
        }
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
            $query = $this->db->get_where('ts_category', array('restaurant_id' => $id));
            return $query->result_array();
        }else{
            $query = $this->db->get_where('ts_category');
            return $query->result_array();
        }
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
     * Fetch notices data
     */
    function getusers($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('users', array('id' => $id));
            return $query->row_array();
        }else{
            $query = $this->db->get_where('users', array('is_admin !='=>99));
            return $query->result_array();
        }
    }
	/*
     * Fetch Customer Login data
     */
    function verifycustomer($email,$pass){
        
            $query = $this->db->get_where('users', array('email' => $email,'password' => $pass));
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
	/*
     * Fetch get Address 
     */
    function get_address($id = ""){

        if(!empty($id)){
            $query = $this->db->get_where('customer_address', array('id' => $id));
            return $query->result_array();
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
    }	 /*
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
    function getPromocodeRows($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('ts_promocods', array('id' => $id));
            return $query->row_array();
        }else{
            $query = $this->db->get('ts_promocods');
            return $query->result_array();
        }
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
	public function Product_delete($id){
        $delete = $this->db->delete('ts_addons',array('id'=>$id));
        return $delete?true:false;
    }

    /*
     * Fetch user data
     */
    function getShopRows($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('ts_restaurant', array('id' => $id));
            return $query->row_array();
        }else{
            $query = $this->db->get('ts_restaurant');
            return $query->result_array();
        }
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

}
?>
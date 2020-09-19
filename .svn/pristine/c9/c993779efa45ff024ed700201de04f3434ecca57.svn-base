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
     * Fetch Category data
     */
    function Shop_login($usn,$pwd){
        $query = $this->db->get_where('ts_restaurant', array('email' => $usn, 'password' => md5($pwd)));
        return $query->row_array();
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
     * Fetch Addons data
     */
    function getAddons($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('ts_addons', array('id' => $id));
            return $query->row_array();
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
            $query = $this->db->get('ts_product');
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
     * Fetch Category data
     */
    function getCategory($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('ts_category', array('id' => $id));
            return $query->row_array();
        }else{
            $query = $this->db->get('ts_category');
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
     * Fetch notices data
     */
    function getusers($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('users', array('id' => $id));
            return $query->row_array();
        }else{
            $query = $this->db->get('users');
            return $query->result_array();
        }
    }
	/*
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
     * Insert user data
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
     * Delete user data
     */
    public function delete($id){
        $delete = $this->db->delete('ts_restaurant',array('id'=>$id));
        return $delete?true:false;
    }

}
?>
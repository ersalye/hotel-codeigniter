<?php
/* 
 * Generated by Ravikumar pulusu 
 *
 */
 
class Shop_login extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Restaurant');
		$this->load->library('session');
				
    }
	function index(){
	if(!empty($_POST)){
	$usn = $this->input->post('email');
	$pwd = $this->input->post('password');
	$query = $this->Restaurant->Shop_login($usn,$pwd);
	if($query){
	$shop_id = $query['id'];
	$shop_name = $query['name'];
	$sess_array = array('id' => $query['id'],'shopname' => $query['name'],'email'=> $query['email']);
	$this->session->set_userdata('Shopid', $shop_id);
	$this->session->set_userdata('Shopname', $shop_name);
	$session_shop = $this->session->userdata['Shopid']; // exit;
	redirect('Shop');
	}
	}
        $this->load->view('shop-login');
    }
	function logout(){
      $user_data = $this->session->all_userdata();

    $this->session->sess_destroy();
    redirect('Shop');
    }
	
	}
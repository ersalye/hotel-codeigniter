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
        $this->load->view('shop-login');
    }
	function logout(){
      $user_data = $this->session->all_userdata();

    $this->session->sess_destroy();
    redirect('Shop');
    }
	
	}
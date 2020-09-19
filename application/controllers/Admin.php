<?php
/* 
 * Generated by Ravikumar pulusu 
 *
 */
 
class Admin extends CI_Controller{
    function __construct()
    {
        parent::__construct();
		$session_admin = $this->session->userdata('admin');
			if($session_admin){}else{
		redirect('Admin_login');
		}
        $this->load->model('Restaurant');
    }

    function index(){
		$session_admin = $this->session->userdata('admin');
	if($session_admin){
		$data['users'] = $this->Restaurant->getusers();
		$data['shops'] = $this->Restaurant->getShopRows();
		$data['orders'] = $this->Restaurant->getOrders();
		$data['deliverie_people'] = $this->Restaurant->getPeopleRows();
		$this->load->view('admin_dashboard',$data);
	}else{
		redirect('Admin_login');
	}
//        $this->load->view('admin_dashboard');
    }
	

	
	function Deliverypersonreviews($id=""){
		$data['orders_details'] = $this->Restaurant->getOrders($id);
		$this->load->view('driver-reviews-admin',$data);
	}
	function DeliveryPaymentinfo($id=""){
		$data['orders_details'] = $this->Restaurant->getOrders($id);
		$this->load->view('deliveries-info-admin',$data);
	}
	function getShops($id){
	return $data['shops'] = $this->Restaurant->getShopRows($id);
	}
	function getcustomer($id){
		return $data['people'] = $this->Restaurant->getusers($id);
	}
	function get_user_address($id){
		return $data['address'] = $this->Restaurant->get_user_address($id);
	}
	function getAddress_byid($id){
		return $data['address'] = $this->Restaurant->get_address($id);
	}
	function Partners(){
		 $data['Partners'] = $this->Restaurant->get_Partners();
		 $this->load->view('partners-admin',$data);
	}
	function UploadImage(){
				$config['upload_path'] = 'uploads/images';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = time().$_FILES['avatar']['name'];
                
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('avatar')){
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                }else{
                   echo $picture = 'not upload'; exit; 
                }
				return $picture;

	}
	function Blogs(){
		$data['blogs'] = $this->Restaurant->get_blogposts();
		$this->load->view('blog-admin',$data);
	}
	function Subscribers(){
		$data['subscribers'] = $this->Restaurant->get_blogposts();
		$this->load->view('subscribers-admin',$data);
	}
	function Aboutus(){
		
		$p_id = 1;
	     if(!empty($_POST)){
			$userData = array(
                'name' => 'About Us',
                'content' => $this->input->post('content'),
                'status' => 1,
              );
		$update = $this->Restaurant->Pagedata($userData,$p_id);
		if($update){
			redirect('Admin/Aboutus');
		}
		}
		
	 $data['pages'] = $this->Restaurant->get_pages($p_id);
	 
	$this->load->view('about-admin',$data);
	}
	function Privacy(){
		
		$p_id = 3;
	     if(!empty($_POST)){
			$userData = array(
                'name' => 'Privacy Policy',
                'content' => $this->input->post('content'),
                'status' => 1,
              );
		$update = $this->Restaurant->Pagedata($userData,$p_id);
		if($update){
			redirect('Admin/Privacy');
		}
		}
		
	 $data['pages'] = $this->Restaurant->get_pages($p_id);
	 
	$this->load->view('about-admin',$data);
	}
	function Refund(){
		
		$p_id = 8;
	     if(!empty($_POST)){
			$userData = array(
                'name' => 'Refund Policy',
                'content' => $this->input->post('content'),
                'status' => 1,
              );
		$update = $this->Restaurant->Pagedata($userData,$p_id);
		if($update){
			redirect('Admin/Refund');
		}
		}
		
	 $data['pages'] = $this->Restaurant->get_pages($p_id);
	 
	$this->load->view('about-admin',$data);
	}
	function TermsCondition(){
		
		$p_id = 4;
	     if(!empty($_POST)){
			$userData = array(
                'name' => 'Terms & Conditions',
                'content' => $this->input->post('content'),
                'status' => 1,
              );
		$update = $this->Restaurant->Pagedata($userData,$p_id);
		if($update){
			redirect('Admin/TermsCondition');
		}
		}
		
	 $data['pages'] = $this->Restaurant->get_pages($p_id);
	 
	$this->load->view('about-admin',$data);
	}
	function FAQ(){
		
		$p_id = 2;
	     if(!empty($_POST)){
			$userData = array(
                'name' => 'FAQ',
                'content' => $this->input->post('content'),
                'status' => 1,
              );
		$update = $this->Restaurant->Pagedata($userData,$p_id);
		if($update){
			redirect('Admin/FAQ');
		}
		}
		
	 $data['pages'] = $this->Restaurant->get_pages($p_id);
	 
	$this->load->view('about-admin',$data);
	}
	function Charges(){
		
		$p_id = 1;
	     if(!empty($_POST)){
			$userData = array(
                'gst' => $this->input->post('gst'),
                'delivery_charges' => $this->input->post('delivery'),
              );
		$update = $this->Restaurant->Chargesdata($userData,$p_id);
		if($update){
			redirect('Admin/Charges');
		}
		}
		
	 $data['charges'] = $this->Restaurant->get_charges($p_id);
	 
	$this->load->view('charges-admin',$data);
	}
	function Offer_terms(){
		
		$p_id = 5;
	     if(!empty($_POST)){
			$userData = array(
                'name' => 'Offer terms',
                'content' => $this->input->post('content'),
                'status' => 1,
              );
		$update = $this->Restaurant->Pagedata($userData,$p_id);
		if($update){
			redirect('Admin/Offer_terms');
		}
		}
		
	 $data['pages'] = $this->Restaurant->get_pages($p_id);
	 
	$this->load->view('about-admin',$data);
	}
	function ContactUs(){
		
		$p_id = 6;
	     if(!empty($_POST)){
			$userData = array(
                'name' => 'Contact Us',
                'content' => $this->input->post('content'),
                'status' => 1,
              );
		$update = $this->Restaurant->Pagedata($userData,$p_id);
		if($update){
			redirect('Admin/ContactUs');
		}
		}
		
	 $data['pages'] = $this->Restaurant->get_pages($p_id);
	 
	$this->load->view('about-admin',$data);
	}
	function General_Queries(){
		
		$p_id = 7;
	     if(!empty($_POST)){
			$userData = array(
                'name' => 'General Queries',
                'content' => $this->input->post('content'),
                'status' => 1,
              );
		$update = $this->Restaurant->Pagedata($userData,$p_id);
		if($update){
			redirect('Admin/General_Queries');
		}
		}
		
	 $data['pages'] = $this->Restaurant->get_pages($p_id);
	 
	$this->load->view('about-admin',$data);
	}
	function Careers(){
		$data['careers'] = $this->Restaurant->Getcareers();
		$this->load->view('careers-list',$data);	
	}
	function AddCareers(){
		//echo '<pre>'; print_r($_POST); echo '</pre>';	 exit;
	if(!empty($_POST)){
	     
			$userData = array(
                'title' => strip_tags($this->input->post('role')),
                'functional_area' => strip_tags($this->input->post('functional_area')),
                'experience' => strip_tags($this->input->post('experience')),
				'content' => $this->input->post('content'),
				'status' => strip_tags($this->input->post('status')),
				'category' => 'careers',
            );
		$insert = $this->Restaurant->Insertcareers($userData);
		if($insert){
			redirect('Admin/Careers');
		}
	}
	 
	$this->load->view('careers-admin');
	}
	function Sms(){
		$this->load->view('sms-admin');
	}
	function Local(){
		$this->load->view('local-admin');
	}
	function Social_media(){
		$this->load->view('socila-media-admin');
	}
	function Blogs_add(){
		//echo '<pre>'; print_r($_POST); echo '</pre>';	 exit;
		if(!empty($_POST)){
	        if(!empty($_FILES['avatar']['name'])){
				$picture = $this->UploadImage();
			}
			$userData = array(
                'title' => strip_tags($this->input->post('title')),
                'category' => strip_tags($this->input->post('category')),
                'short' => strip_tags($this->input->post('short')),
				'content' => $this->input->post('content'),
				'status' => strip_tags($this->input->post('status')),
                'image' => $picture               
            );
		$insert = $this->Restaurant->InsertBlogpost($userData);
		if($insert){
			redirect('Admin/Blogs');
		}
	}
		$this->load->view('blogs-add-admin');
	}
	function Email(){
		$this->load->view('email-admin');
	}
	function Addons($id){
	$data['addons'] = $this->Restaurant->getRAddons($id);	
	$this->load->view('rlist-addons',$data);
	}
	function Subadmin(){
	$data['users'] = $this->Restaurant->getsubadmin();	
	$this->load->view('subadminslist',$data);
		
	}
	function AddSubadmin(){
		
	if(!empty($_POST)){
	        if(!empty($_FILES['avatar']['name'])){
				$picture = $this->UploadImage();
			}
			$userData = array(
                'first_name' => strip_tags($this->input->post('name')),
                'phone' => strip_tags($this->input->post('phone')),
                'email' => strip_tags($this->input->post('email')),
                'password' => md5($this->input->post('password')),
				 'address' => strip_tags($this->input->post('address')),
                'profile_image' => $picture,
                'is_admin' =>  'Subadmin'
               
            );
		$update = $this->Restaurant->InsertUsers($userData);
		if($update){
			redirect('Admin/Subadmin');
		}else{
			//echo "failed Create"; exit;
		}
	}
	$this->load->view('addsubadmin');
		
	}
	function Editsubadmin($id){
		$data['people'] = $this->Restaurant->getusers($id);
		
	if(!empty($_POST)){
	        if(!empty($_FILES['avatar']['name'])){
				$picture = $this->UploadImage();
			}else{
				
			$picture = $this->input->post('avatarimage');	
			}
		$userData = array(
                'first_name' => strip_tags($this->input->post('name')),
                'phone' => strip_tags($this->input->post('phone_number')),
                'email' => strip_tags($this->input->post('email')),
               'address' => strip_tags($this->input->post('address')),
                'profile_image' => $picture,
                'status' =>  strip_tags($this->input->post('status')),
               
            );
		$insert = $this->Restaurant->UpdateUsers($userData,$id);
		if($insert){
			//echo "Thanks for register will get back to you soon".$insert; exit;
			redirect('Admin/Subadmin');
		}else{
			//echo "failed Createtion"; exit;
		}
		
	}	
	$this->load->view('add-user', $data);
	}
	function Sales_info(){
		$data['orders_details'] = $this->Restaurant->Item_oreder_details();
		$data['orders'] = $this->Restaurant->getOrders();
		$this->load->view('sales-info',$data);
	}
	function getOrdersbyuser($id=""){
		$data['orders_details'] = $this->Restaurant->Item_oreder_details();
		$data['orders'] = $this->Restaurant->getOrdersbyuser($id);
		$this->load->view('sales-info',$data);
	}
	function Totalordes($id=""){
	return $data['totalordes'] =  $this->Restaurant->getOrdersbyuser($id);
	}
	function Order_info_details($id=""){
	return $data['orders_details'] = $this->Restaurant->getOrders_details($id);
	}
	function Sales_info_details($id=""){
		$data['orders_details'] = $this->Restaurant->getOrders_details($id);
		$this->load->view('sales-info-details',$data);
	}
	function Userorders($id=""){
		$data['orders_details'] = $this->Restaurant->getOrders($id);
		$this->load->view('user-order-admin',$data);
	}
	function UserReviews($id=""){
		$data['orders_details'] = $this->Restaurant->getOrders($id);
		$this->load->view('user-reviews-admin',$data);
	}
	function Paymentsinfo($id=""){
		$data['orders_details'] = $this->Restaurant->getOrders($id);
		$data['shops'] = $this->Restaurant->getShopRows();
		$this->load->view('paymentsinfo-admin',$data);
	}
	function Paymentsinfoday($id=""){
		$data['orders_details'] = $this->Restaurant->getOrdersbydayshops($id);
		$data['shops'] = $this->Restaurant->getShopRows();
		$this->load->view('paymentsinfoday-admin',$data);
	}
	function Restaurant_reviews(){
		$this->load->view('restaurant-reviews');
	}
	function Shopname($id){
	$dataaa = $this->Restaurant->getShopname($id);	
	echo $dataaa; //exit;
	}
	function D_boyname($id){
	$dataaa = $this->Restaurant->getdboyname($id);	
	echo $dataaa; //exit;
	}	
	function Users(){
		$data['pages'] = $this->Restaurant->getusers();
		$this->load->view('users-list', $data);
	}
	function EditUser($id){
		$data['people'] = $this->Restaurant->getusers($id);
		
	if(!empty($_POST)){
	        if(!empty($_FILES['avatar']['name'])){
				$picture = $this->UploadImage();
			}else{
				
			$picture = $this->input->post('avatarimage');	
			}
		$userData = array(
                'first_name' => strip_tags($this->input->post('name')),
                'phone' => strip_tags($this->input->post('phone_number')),
                'email' => strip_tags($this->input->post('email')),
                //'password' => md5($this->input->post('password')),
                'profile_image' => $picture,
                'country_code' =>  strip_tags($this->input->post('country_code')),
               
            );
		$insert = $this->Restaurant->UpdateUsers($userData,$id);
		if($insert){
			//echo "Thanks for register will get back to you soon".$insert; exit;
			redirect('Admin/Users');
		}else{
			echo "failed Create"; exit;
		}
		
	}	
	$this->load->view('add-user', $data);}
	function AddUser(){
	if(!empty($_POST)){
	        if(!empty($_FILES['avatar']['name'])){
				$picture = $this->UploadImage();
			}
			$userData = array(
                'first_name' => strip_tags($this->input->post('name')),
                'phone' => strip_tags($this->input->post('phone_number')),
                'email' => strip_tags($this->input->post('email')),
                'password' => md5($this->input->post('password')),
                'profile_image' => $picture,
                'country_code' =>  strip_tags($this->input->post('country_code')),
               
            );
		$update = $this->Restaurant->InsertUsers($userData);
		if($update){
			redirect('Admin/Users');
		}else{
			echo "failed Create"; exit;
		}
	}
	$this->load->view('add-user');
	}
	function Notice(){
		$data['pages'] = $this->Restaurant->getnotices();
		$this->load->view('noticeboard_list', $data);
	}
	
	function EditNotice($id){
		$data['pages'] = $this->Restaurant->getnotices($id);
		$data['people'] = $this->Restaurant->getPeopleRows();
		if(!empty($_POST)){
		$userData = array(
                'transporter_id' => strip_tags($this->input->post('transporter_id')),
                'title' => strip_tags($this->input->post('title')),
                'notice' => strip_tags($this->input->post('notice')),
                'note' => strip_tags($this->input->post('note'))
                              
        );
		$update = $this->Restaurant->UpdateNotice($userData,$id);
		if($update){
		redirect('Admin/Notice');
		}else{
			echo "failed Create"; exit;
		}
	}
	$this->load->view('add-noticeboard',$data);
	}
	function Addnotice(){
		$data['people'] = $this->Restaurant->getPeopleRows();
		
	if(!empty($_POST)){
		//echo '<pre>'; print_r($_POST); echo '</pre>';	 exit;
		$userData = array(
                'transporter_id' => strip_tags($this->input->post('transporter_id')),
                'title' => strip_tags($this->input->post('title')),
                'notice' => strip_tags($this->input->post('notice')),
                'note' => strip_tags($this->input->post('note'))
                              
        );
		$insert = $this->Restaurant->InsertNotice($userData);
		if($insert){
		redirect('Admin/Notice');
		}else{
			echo "failed Create"; exit;
		}
	}
	$this->load->view('add-noticeboard', $data);
	}
	function CustomPush(){
		
	if(!empty($_POST)){
	//	echo '<pre>'; print_r($_POST); echo '</pre>';	 exit;
		$userData = array(
                'send_to' => strip_tags($this->input->post('send_to')),
                'user_condition' => strip_tags($this->input->post('user_condition')),
                'user_active' => strip_tags($this->input->post('user_active')),
                'user_rides' => strip_tags($this->input->post('user_rides')),
                'user_amount' => strip_tags($this->input->post('user_amount')),
                'user_location' => strip_tags($this->input->post('user_location')),
                'provider_condition' => strip_tags($this->input->post('provider_condition')),
                'provider_active' => strip_tags($this->input->post('provider_active')),
                'provider_rides' => strip_tags($this->input->post('provider_rides')),
                'provider_amount' => strip_tags($this->input->post('provider_amount')),
                'message' => strip_tags($this->input->post('message')),
                'schedule_date' => strip_tags($this->input->post('schedule_date')),
                'schedule_time' => strip_tags($this->input->post('schedule_time'))
                              
        );
		$insert = $this->Restaurant->InsertCustomeNotice($userData);
		if($insert){
				//echo "Thanks for register will get back to you soon".$insert; exit;
				redirect('Admin/Notice');
			}else{
				echo "failed Create"; exit;
			}
	}
	$this->load->view('custom-push');
	}
	function RestaurentBanners(){
		$data['pages'] = $this->Restaurant->getRestaurentBanner();
		$this->load->view('rbanners_list', $data);
	}
	
	function EditRBanner($id){
	$data['pages'] = $this->Restaurant->getRestaurentBanner($id);	
	$data['shops'] = $this->Restaurant->getShopRows();

		if(!empty($_POST)){
			 if(!empty($_FILES['avatar']['name'])){
				$picture = $this->UploadImage();
				}else{
				$picture = 	$this->input->post('avatarimage');
				}
		$userData = array(
                'shop_id' => strip_tags($this->input->post('shop_id')),
                'product_id' => strip_tags($this->input->post('product_id')),
                'position' => strip_tags($this->input->post('position')),
                'banner' =>$picture,
                'status' => strip_tags($this->input->post('status'))
                              
        );
		 $update = $this->Restaurant->UpdateBanner($userData,$id);
		if($update){
						redirect('admin/RestaurentBanners');
			}else{
				echo "failed Create"; exit;
			}
	}
	$this->load->view('add-rbanners',$data);
		
	}
	function AddRestaurentBanner(){
		
	if(!empty($_POST)){
			 if(!empty($_FILES['avatar']['name'])){
				$picture = $this->UploadImage();
				//echo $picture; exit;
			}
		$userData = array(
                'shop_id' => strip_tags($this->input->post('shop_id')),
                'product_id' => strip_tags($this->input->post('product_id')),
                'position' => strip_tags($this->input->post('position')),
                'banner' =>$picture,
                'status' => strip_tags($this->input->post('status'))
                              
        );
		 $insert = $this->Restaurant->InsergetRestaurentBanner($userData);
		if($insert){
				//echo "Thanks for register will get back to you soon".$insert; exit;
				redirect('admin/RestaurentBanners');
			}else{
				echo "failed Create"; exit;
			}
	}
	$this->load->view('add-rbanners');
	}	
	function Promocodes()
    {
		$data['pages'] = $this->Restaurant->getPromocodeRows();
		$this->load->view('promocodes_list', $data);
	}
	
	function Pomocodeusers()
    {
		$data['Userspromo'] = $this->Restaurant->Pomocodeusers();
		$this->load->view('promocode-users-admin', $data);
	}
	
	
	function EditPcode($id){
	$data['pages'] = $this->Restaurant->getPromocodeRows($id);
	if(!empty($_POST)){
		$userData = array(
                'promo_code' => strip_tags($this->input->post('promo_code')),
                'discount' => strip_tags($this->input->post('discount')),
                'promocode_type' => strip_tags($this->input->post('promocode_type')),
                'description' => strip_tags($this->input->post('description')),
                'status' => strip_tags($this->input->post('status')),
                'expiration' => strip_tags($this->input->post('expiration'))
        );
	$update = $this->Restaurant->UpdatePromocode($userData,$id);
		if($update){
			redirect('admin/Promocodes');
			}else{
				echo "failed Create"; exit;
			}
	}
	$this->load->view('add-promocode',$data);
	}
	function AddPromocode(){
	if(!empty($_POST)){
			$userData = array(
                'promo_code' => strip_tags($this->input->post('promo_code')),
                'discount' => strip_tags($this->input->post('discount')),
                'promocode_type' => strip_tags($this->input->post('promocode_type')),
                'status' => strip_tags($this->input->post('status')),
				'description' => strip_tags($this->input->post('description')),
                'expiration' =>  strip_tags($this->input->post('expiration'))
                              
        );
		 $insert = $this->Restaurant->InserPromocode($userData);
		if($insert){
				//echo "Thanks for register will get back to you soon".$insert; exit;
				redirect('admin/Promocodes');
			}else{
				echo "failed Create"; exit;
			}
	}
	$this->load->view('add-promocode');
	}
		function Deliveries(){
		$this->load->view('deliveries-list');
	}
	function shops()
    {
		 $data['pages'] = $this->Restaurant->getShopRows();
		 $this->load->view('restaurant_list', $data);
    }

	function EditShop($id){
	if(!empty($_POST)){
			//echo '<pre>'; print_r($_POST); echo '</pre>';	 exit;
	if(!empty($_FILES['avatar']['name'])){
				$picture = $this->UploadImage();
						}else{
				 $picture =	strip_tags($this->input->post('bavatar')); //exit;
						}
				$pos = $this->input->post('order_position');		
				$userData = array(
                'name' => strip_tags($this->input->post('name')),
                'Cuisine' => implode(",",$_POST['cuisine_id']),
                'phone' => strip_tags($this->input->post('phone')),
                'email' => strip_tags($this->input->post('email')),
                'order_position' => strip_tags($this->input->post('order_position')),
                //'password' => md5($this->input->post('password')),
                'm_resturant_opens' => $_POST['m_resturant_opens'],
                'm_resturant_close' => $_POST['m_resturant_close'],
                'e_resturant_opens' => $_POST['e_resturant_opens'],
                'e_resturant_close' => $_POST['e_resturant_close'],
			   
                'contact_name' =>  strip_tags($this->input->post('contact_name')),
                'paymentmode' =>  strip_tags($this->input->post('paymentmode')),
                'pure_veg' =>  strip_tags($this->input->post('pure_veg')),
                'shop_logo' =>  $picture,
                'min_amount' =>  strip_tags($this->input->post('delivery_min_amount')),
                'min_amount_offer' =>  strip_tags($this->input->post('offer_min_amount')),
                'offertitle' =>  strip_tags($this->input->post('offertitle')),
                'discount' =>  strip_tags($this->input->post('discount')),
                'offer_percentage' =>  strip_tags($this->input->post('offer_percent')),
                'estimated_delivery_time' =>  strip_tags($this->input->post('estimated_delivery_time')),
                'description' =>  strip_tags($this->input->post('description')),
                'address' =>  strip_tags($this->input->post('address')),
                'latitude' =>  strip_tags($this->input->post('latitude')),
                'longitude' =>  strip_tags($this->input->post('longitude')),
                'status' =>  strip_tags($this->input->post('status')),
                'everyday' =>  strip_tags($this->input->post('day'))         
            );
			
		 $insert_id = $this->Restaurant->updateShop($userData,$id);
		 $timingsdata = array(
               // 'rid' => $insert,
                'm_morning_open' => $_POST['m-hours_opening']['MON'],
                'm_morning_close' => $_POST['m-hours_closing']['MON'],
                'm_evening_open' => $_POST['e-hours_opening']['MON'],
                'm_evening_close' => $_POST['e-hours_closing']['MON'],
                't_morning_open' => $_POST['m-hours_opening']['TUE'],
                't_morning_close' => $_POST['m-hours_closing']['TUE'],
                't_evening_open' => $_POST['e-hours_opening']['TUE'],
                't_evening_close' => $_POST['e-hours_closing']['TUE'],
                'w_morning_open' =>  $_POST['m-hours_opening']['WED'],
                'w_morning_close' => $_POST['m-hours_closing']['WED'],
                'w_evening_open' =>  $_POST['e-hours_opening']['WED'],
                'w_eveningclose' =>  $_POST['e-hours_closing']['WED'],
                'th_morning_open' =>  $_POST['m-hours_opening']['THU'],
                'th_morning_close' =>  $_POST['m-hours_closing']['THU'],
                'th_evening_open' =>  $_POST['e-hours_opening']['THU'],
                'th_evening_close' =>  $_POST['e-hours_closing']['THU'],
                'f_morning_open' =>  $_POST['m-hours_opening']['FRI'],
                'f_morning_close' =>  $_POST['m-hours_closing']['FRI'],
                'f_evening_open' =>  $_POST['e-hours_opening']['FRI'],
                'f_evening_close' =>  $_POST['e-hours_closing']['FRI'],
				's_morning_open' =>  $_POST['m-hours_opening']['SAT'],
                's_morning_close' =>  $_POST['m-hours_closing']['SAT'],
                's_evening_open' =>  $_POST['e-hours_opening']['SAT'],
                's_evening_close' =>  $_POST['e-hours_closing']['SAT'],
				'sun_morning_open' =>  $_POST['m-hours_opening']['SUN'],
                'sun_morning_close' =>  $_POST['m-hours_closing']['SUN'],
                'sun_evening_open' =>  $_POST['e-hours_opening']['SUN'],
                'sun_evening_close' =>  $_POST['e-hours_closing']['SUN'],
            
            );
			//print_r($timingsdata); exit;
				
			 $inserttimings = $this->Restaurant->UpdateShoptimings($timingsdata,$id);//exit;
		
		if($insert_id){
			
			$getall = $this->Restaurant->getShop_up($id,$pos);
			$ic =$pos;
			foreach($getall as $p ){
				$icc = $ic+1;
				$catData= array(                
				'order_position' => $icc,
            );
			$cidd = $p['id'];
			$updatsse = $this->Restaurant->UpdateShop_position($catData,$cidd);
			$ic++;
			}
			
			
				redirect('Admin/Shops');
			}else{
				//echo "failed Create"; exit;
			}
	}
		
		$data['time'] = $this->Restaurant->getShoptimings($id);
		//print_r($data['time']); exit;
		$data['people'] = $this->Restaurant->getShopRows($id);
		$data['csns'] = $this->Restaurant->getCuisinesRows();
		$this->load->view('addrestaurant',$data);

	}	
	function Cuisines(){	
	$data['pages'] = $this->Restaurant->getCuisinesRows();
	$this->load->view('cuisines_list', $data);
	}
	function EditCuisines($id){
	$data['pages'] = $this->Restaurant->getCuisinesRows($id);
	if(!empty($_POST)){
		$userData = array(
                'name' => strip_tags($this->input->post('name'))
        );
		 $Update = $this->Restaurant->UpdateCuisines($userData,$id);
		if($Update){
				redirect('admin/Cuisines');
			}else{
				echo "failed Create"; exit;
			}
	}
		$this->load->view('add-cuisines',$data);	
	}
	function AddCuisines(){
	if(!empty($_POST)){
		$userData = array(
                'name' => strip_tags($this->input->post('name'))
        );
		 $insert = $this->Restaurant->InserCuisines($userData);
		if($insert){
				//echo "Thanks for register will get back to you soon".$insert; exit;
				redirect('admin/Cuisines');
			}else{
				echo "failed Create"; exit;
			}
	}
		$this->load->view('add-cuisines');
	}
	function DisputeManager(){
		 $data['people'] = $this->Restaurant->getManagerRows();
		 $this->load->view('dmanagerlist', $data);
	}
	function EditManager($id){
		 $data['people'] = $this->Restaurant->getManagerRows($id);
		if(!empty($_POST)){
		if(!empty($_FILES['avatar']['name'])){
			$picture = $this->UploadImage();}
			else{$picture = $this->input->post('avataredit');}
		$userData = array(
                'name' => strip_tags($this->input->post('name')),
                'phone' => strip_tags($this->input->post('phone')),
                'email' => strip_tags($this->input->post('email')),
               // 'password' => md5($this->input->post('password')),
                'profile_image' =>$picture
        );
		 $update = $this->Restaurant->ManagerUpdate($userData,$id);
		if($update){
				redirect('admin/DisputeManager');
			}else{
				echo "failed Create"; exit;
			}
	}
		$this->load->view('dispute-add',$data);
		
	}
	function AddManager(){
	if(!empty($_POST)){
		//		echo '<pre>'; print_r($_POST); echo '</pre>';	 exit;
		if(!empty($_FILES['avatar']['name'])){
				$picture = $this->UploadImage();
				//echo $picture; exit;
			}
		$userData = array(
                'name' => strip_tags($this->input->post('name')),
                'phone' => strip_tags($this->input->post('phone')),
                'email' => strip_tags($this->input->post('email')),
                'password' => md5($this->input->post('password')),
                'profile_image' =>$picture
                              
        );
		 $insert = $this->Restaurant->Managerinsert($userData);
		if($insert){
				redirect('admin/DisputeManager');
			}else{
				echo "failed Create"; exit;
			}
	}
		$this->load->view('dispute-add');
	}
	function DeliveryPeople()
    {
		 $data['people'] = $this->Restaurant->getPeopleRows();
		 $this->load->view('deliverypeople_list', $data);
	}
	function EditPeople($id){
	if(!empty($_POST)){
	if(!empty($_FILES['avatar']['name'])){
		$picture = $this->UploadImage();
				}else{
		$picture = $this->input->post('avatarimage');					
				}
		$userData = array(
                'name' => strip_tags($this->input->post('name')),
                'phone' => strip_tags($this->input->post('phone')),
                'email' => strip_tags($this->input->post('email')),
                'profile_image' =>  $picture,
                'address' =>  strip_tags($this->input->post('address')),
                'latitude' =>  strip_tags($this->input->post('latitude')),
                'longitude' =>  strip_tags($this->input->post('longitude')),
                'car_number' =>  strip_tags($this->input->post('car_number')),
                'license_number' =>  strip_tags($this->input->post('license_number')),
        );
		 $Update = $this->Restaurant->updatePeople($userData,$id);
		if($Update){
			redirect('admin/deliveryPeople');
			}else{
				echo "failed Create"; exit;
			}
	}
		
		$data['people'] = $this->Restaurant->getPeopleRows($id);
		$this->load->view('deliverypeople-add',$data);

	}	
	function AddPeople(){
	if(!empty($_POST)){
		//echo '<pre>'; print_r($_POST); echo '</pre>';	 exit;
	 if(!empty($_FILES['avatar']['name'])){
				$picture = $this->UploadImage();
						}
		$userData = array(
                'name' => strip_tags($this->input->post('name')),
                'phone' => strip_tags($this->input->post('phone')),
                'email' => strip_tags($this->input->post('email')),
                'password' => md5($this->input->post('password')),
                'profile_image' =>  $picture,
                'address' =>  strip_tags($this->input->post('address')),
                'latitude' =>  strip_tags($this->input->post('latitude')),
                'longitude' =>  strip_tags($this->input->post('longitude')),
                'car_number' =>  strip_tags($this->input->post('car_number')),
                'license_number' =>  strip_tags($this->input->post('license_number')),
               
            );
		 $insert = $this->Restaurant->Peopleinsert($userData);
		if($insert){
				//echo "Thanks for register will get back to you soon".$insert; exit;
				redirect('admin/deliveryPeople');
			}else{
				echo "failed Create"; exit;
			}
	}
 $this->load->view('deliverypeople-add');
	}
	
	function Shopsdelete($id){
		$efected = $this->Restaurant->Shopdelete($id);
		redirect('admin/shops');
	}
	function DPeopleDelete($id){
		$efected = $this->Restaurant->Dpeopledelete($id);
		redirect('admin/DeliveryPeople');
	}
	function DManagerDelete($id){
		$efected = $this->Restaurant->DManagerdelete($id);
		redirect('admin/DisputeManager');
	}
	function CuisinesDelete($id){
		$efected = $this->Restaurant->cuisinesDelete($id);
		redirect('admin/Cuisines');
	}
	function PromocodesDelete($id){
		$efected = $this->Restaurant->PromoDelete($id);
		redirect('admin/Promocodes');
	}
	function BannerDelete($id){
		$efected = $this->Restaurant->BannerDelete($id);
		redirect('admin/RestaurentBanners');
	}
	function UserDelete($id){
		$efected = $this->Restaurant->UserDelete($id);
		redirect('admin/Users');
	}
	function Addshop()
    {	
	if(!empty($_POST)){
			//echo '<pre>'; print_r($_POST); echo '</pre>'; echo $_POST['m-hours_opening']['SUN'];exit;
			if(!empty($_FILES['avatar']['name'])){
			$picture = $this->UploadImage();
			}
			$pos = $this->input->post('order_position');
		$userData = array(
                'name' => strip_tags($this->input->post('name')),
                'Cuisine' => implode(",",$_POST['cuisine_id']),
                'phone' => strip_tags($this->input->post('phone')),
                'email' => strip_tags($this->input->post('email')),
                'order_position' => strip_tags($this->input->post('order_position')),
                'password' => md5($this->input->post('password')),
                'm_resturant_opens' => $_POST['m_resturant_opens'],
                'm_resturant_close' => $_POST['m_resturant_close'],
                'e_resturant_opens' => $_POST['e_resturant_opens'],
                'e_resturant_close' => $_POST['e_resturant_close'],
                'shop_logo' => $picture,
                'contact_name' =>  strip_tags($this->input->post('contact_name')),
                'paymentmode' =>  strip_tags($this->input->post('paymentmode')),
                'pure_veg' =>  strip_tags($this->input->post('pure_veg')),
                'min_amount' =>  strip_tags($this->input->post('delivery_min_amount')),
                'min_amount_offer' =>  strip_tags($this->input->post('offer_min_amount')),
                'offertitle' =>  strip_tags($this->input->post('offertitle')),
                'discount' =>  strip_tags($this->input->post('discount')),
                'offer_percentage' =>  strip_tags($this->input->post('offer_percent')),
                'estimated_delivery_time' =>  strip_tags($this->input->post('estimated_delivery_time')),
                'description' =>  strip_tags($this->input->post('description')),
                'address' =>  strip_tags($this->input->post('address')),
                'latitude' =>  strip_tags($this->input->post('latitude')),
                'longitude' =>  strip_tags($this->input->post('longitude')),
                'status' =>  strip_tags($this->input->post('status')),
                'everyday' =>  strip_tags($this->input->post('day')),
            
            );
		 $insert = $this->Restaurant->insert($userData);
		if($insert){
			//	echo "Thanks for register will get back to you soon";
			$timingsdata = array(
                'rid' => $insert,
                'm_morning_open' => $_POST['m-hours_opening']['MON'],
                'm_morning_close' => $_POST['m-hours_closing']['MON'],
                'm_evening_open' => $_POST['e-hours_opening']['MON'],
                'm_evening_close' => $_POST['e-hours_closing']['MON'],
                't_morning_open' => $_POST['m-hours_opening']['TUE'],
                't_morning_close' => $_POST['m-hours_closing']['TUE'],
                't_evening_open' => $_POST['e-hours_opening']['TUE'],
                't_evening_close' => $_POST['e-hours_closing']['TUE'],
                'w_morning_open' =>  $_POST['m-hours_opening']['WED'],
                'w_morning_close' => $_POST['m-hours_closing']['WED'],
                'w_evening_open' =>  $_POST['e-hours_opening']['WED'],
                'w_eveningclose' =>  $_POST['e-hours_closing']['WED'],
                'th_morning_open' =>  $_POST['m-hours_opening']['THU'],
                'th_morning_close' =>  $_POST['m-hours_closing']['THU'],
                'th_evening_open' =>  $_POST['e-hours_opening']['THU'],
                'th_evening_close' =>  $_POST['e-hours_closing']['THU'],
                'f_morning_open' =>  $_POST['m-hours_opening']['FRI'],
                'f_morning_close' =>  $_POST['m-hours_closing']['FRI'],
               // 'f_evening_open' =>  $_POST['e-hours_opening']['FRI'],
                //'f_evening_close' =>  $_POST['e-hours_closing']['FRI'],
				's_morning_open' =>  $_POST['m-hours_opening']['SAT'],
                's_morning_close' =>  $_POST['m-hours_closing']['SAT'],
                's_evening_open' =>  $_POST['e-hours_opening']['SAT'],
                's_evening_close' =>  $_POST['e-hours_closing']['SAT'],
				'sun_morning_open' =>  $_POST['m-hours_opening']['SUN'],
                'sun_morning_close' =>  $_POST['m-hours_closing']['SUN'],
                'sun_evening_open' =>  $_POST['e-hours_opening']['SUN'],
                'sun_evening_close' =>  $_POST['e-hours_closing']['SUN'],
            
            );
				
			$inserttimings = $this->Restaurant->Shoptimingsdata($timingsdata);
			$getall = $this->Restaurant->getShop_up($insert,$pos);
			$ic =$pos;
			foreach($getall as $p ){
				$icc = $ic+1;
				$catData= array(                
				'order_position' => $icc,
            );
			$cidd = $p['id'];
			$updatsse = $this->Restaurant->UpdateShop_position($catData,$cidd);
			$ic++;
			}

				redirect('admin/shops');

			}else{
				echo "fail"; exit;
			}
	}			
       $data['csns'] = $this->Restaurant->getCuisinesRows();
	   $this->load->view('addrestaurant',$data);
    }

}
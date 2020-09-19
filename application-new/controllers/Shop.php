<?php
/* 
 * Generated by Ravikumar pulusu 
 *
 */
 
class Shop extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Restaurant');
		$this->load->library('session');

		
    }
	function location(){
		$this->load->view('location');		
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
	function index(){
		redirect('Shop/dashboard');
    }
    function dashboard(){
		
	if(!empty($_POST)){
	$usn = $this->input->post('email');
	$pwd = $this->input->post('password');
	$query = $this->Restaurant->Shop_login($usn,$pwd);
	$shop_id = $query['id'];
	$shop_name = $query['name'];
	$sess_array = array('id' => $query['id'],'shopname' => $query['name'],'email'=> $query['email']);
	$this->session->set_userdata('Shopid', $shop_id);
	$this->session->set_userdata('Shopname', $shop_name);
	$session_shop = $this->session->userdata['Shopid']; // exit;
	}
	if($this->session->userdata('Shopid')== null ){ redirect('Shop_login');}
	$this->load->view('shop/shop-dashboard');
	}
	function Dispatcher(){
		if($this->session->userdata['Shopid']== null ){ redirect('Shop_login');}	
		$this->load->view('shop/Shop-dashboard');
	}
	function Register(){
	
	if(!empty($_POST)){
		//	echo '<pre>'; print_r($_POST); echo '</pre>'; exit;
				$userData = array(
                'name' => strip_tags($this->input->post('name')),
               //'Cuisine' => implode(",",$_POST['cuisine_id']),
                'phone' => strip_tags($this->input->post('phone')),
                'email' => strip_tags($this->input->post('email')),
                'password' => md5($this->input->post('password')),
                'resturant_opens' => $this->input->post('hours_opening'),
                'resturant_close' => $this->input->post('hours_closing'),
               // 'shop_logo' => $picture,
               //'pure_veg' =>  strip_tags($this->input->post('pure_veg')),
               // 'min_amount' =>  strip_tags($this->input->post('offer_min_amount')),
               // 'offer_percentage' =>  strip_tags($this->input->post('offer_percent')),
               //  'estimated_delivery_time' =>  strip_tags($this->input->post('estimated_delivery_time')),
                'description' =>  strip_tags($this->input->post('description')),
                'address' =>  strip_tags($this->input->post('address')),
                'latitude' =>  strip_tags($this->input->post('latitude')),
                'longitude' =>  strip_tags($this->input->post('longitude')),
                'status' =>  strip_tags($this->input->post('status'))
               // 'everyday' =>  strip_tags($this->input->post('everyday')),
            
            );
		 $insert = $this->Restaurant->insert($userData);
		if($insert){
			//	echo "Thanks for register will get back to you soon";
				redirect('Shop');

			}else{
				echo "fail"; exit;
			}
	}
		$this->load->view('shop/shop-signup');
	}	
	function Addcategory(){
	if(!empty($_POST)){
	if(!empty($_FILES['avatar']['name'])){
		$picture = $this->UploadImage(); //exit;
		}else{
			$picture = 	$this->input->post('avatarimage');
		}
		$userData = array(
                'cat_name' => strip_tags($this->input->post('name')),
                'cat_description' => strip_tags($this->input->post('description')),
			    'restaurant_id' => strip_tags($this->input->post('shop_id')),
                'status' => strip_tags($this->input->post('status')),
                'cat_order' => strip_tags($this->input->post('position')),
                'cat_image' =>$picture
                );
		$insert = $this->Restaurant->InsertCategory($userData);
		if($insert){
			$this->session->set_flashdata('msg','Succussfully  Category  Created'); 
			redirect('Shop/Category');
			}else{
			$this->session->set_flashdata('msg','Failed Category  Created');
			redirect('Shop/Category');
			}
	}
	$this->load->view('shop/add-categorie');
	}
	function Category(){
		
	if($this->session->userdata['Shopid']== null ){ redirect('Shop_login');}	
	$data['category'] = $this->Restaurant->getCategory();	
	$this->load->view('shop/list-categories',$data);
	}
	function Categoryname($id){
	$catname = $this->Restaurant->getCategoryname($id);
	echo $catname; //exit;
	}
	function EditCategory($id){
	$data['category'] = $this->Restaurant->getCategory($id);		
	if(!empty($_POST)){
		//echo '<pre>'; print_r($_POST); echo '</pre>';	 exit;
	if(!empty($_FILES['avatar']['name'])){
				$picture = $this->UploadImage();
			}else{
				$picture = '';
			}
	$userData = array(
                'cat_name' => strip_tags($this->input->post('name')),
                'cat_description' => strip_tags($this->input->post('description')),
                'status' => strip_tags($this->input->post('status')),
                'cat_image' =>$picture
            );
	$update = $this->Restaurant->UpdateCategory($userData,$id);
		if($update){
			$this->session->set_flashdata('msg','Succussfully  Category Updated'); 
			redirect('Shop/Category');
		}else{
			$this->session->set_flashdata('msg','Failed Category Updated'); 
			redirect('Shop/Category');
		}
	}
	$this->load->view('shop/add-categorie',$data);
	}
	function Categorydelete($id){
		$efected = $this->Restaurant->Catdelete($id);
		if($efected){
			 $this->session->set_flashdata('catdelete','Succussfully  Category deleted'); 
		}
		redirect('shop/Category');
	}
	function Addons(){
		$data['addons'] = $this->Restaurant->getAddons();	
		$this->load->view('shop/list-addons',$data);
	}
	function Addondelete($id){
		$efected = $this->Restaurant->Addondelete($id);
		if($efected){
		 $this->session->set_flashdata('addondelete','Succussfully  Addon deleted'); 
		}
		redirect('shop/Addons');
	}
	function EditAddon($id){
	$data['addons'] = $this->Restaurant->getAddons($id);		

	if(!empty($_POST)){
	$userData = array(
                'addon_name' => strip_tags($this->input->post('name')),
                'status' => strip_tags($this->input->post('status'))
            );
	$update = $this->Restaurant->UpdateAddons($userData,$id);
	if($update){
		$this->session->set_flashdata('addondelete','Succussfully  Addon Updated'); 
		redirect('Shop/Addons');
	}else{
		$this->session->set_flashdata('addondelete','Failed  Addon Updated'); 
		//echo "failed Create"; exit;		
	 }
	}
		$this->load->view('shop/add-addons',$data);		
	}
	function AddAddons(){
	if(!empty($_POST)){
	
	$userData = array(
                'restaurant_id' => strip_tags($this->input->post('shop_id')),
                'restaurant_name' => strip_tags($this->input->post('shop_name')),
                'addon_name' => strip_tags($this->input->post('name')),
                'price' => strip_tags($this->input->post('price')),
                'status' => strip_tags($this->input->post('status'))
            );
	$Insert = $this->Restaurant->InsertAddons($userData);
	if($Insert){
		$this->session->set_flashdata('addondelete','Succussfully  Addon Created'); 
		redirect('Shop/Addons');
			}else{
		$this->session->set_flashdata('addondelete','Failed Create');
		redirect('Shop/Addons');
	 }
	}
		$this->load->view('shop/add-addons');
	}
	function Products(){
	if($this->session->userdata['Shopid']== null ){ redirect('Shop_login');}		
		$data['products'] = $this->Restaurant->getproducts();	
		$this->load->view('shop/list-products',$data);
	}
	function Productdelete($id){
	if($this->session->userdata['Shopid']== null ){ redirect('Shop_login');}		
		$data['products'] = $this->Restaurant->Product_delete($id);	
		$this->load->view('shop/list-products',$data);
	}
	function EditProduct($id){
				if($this->session->userdata['Shopid']== null ){ redirect('Shop_login');}		
					$data['products'] = $this->Restaurant->getproducts($id);	
				if(!empty($_POST)){
				if(!empty($_FILES['avatar']['name'])){
				$picture = $this->UploadImage();	
				}
				if(!empty($_FILES['avatar']['name'])){
				$picture = $this->UploadImage();	
				}
				$userData = array(
							'product_name' => strip_tags($this->input->post('name')),
							'description' => strip_tags($this->input->post('description')),
							'category' => strip_tags($this->input->post('category')),
							'status' => strip_tags($this->input->post('status')),
							'product_Order' => strip_tags($this->input->post('product_position')),
							'is_featured' => strip_tags($this->input->post('featured')),
							'featured_position' => strip_tags($this->input->post('featured_position')),
							'price' => strip_tags($this->input->post('price')),
							'discount' => strip_tags($this->input->post('discount')),
							'discount_type' => strip_tags($this->input->post('discount_type')),
							'addons' =>implode(",",$_POST['addons']),
							'addons_price' =>implode(",",$_POST['addons_price']),
							'product_image' =>$picture,
							'featured_image' =>$picture
						);
				$update = $this->Restaurant->updateProduct($userData,$id);
				if($update){
				$this->session->set_flashdata('msg','Succussfully Product Updated'); 
				redirect('Shop/Products');
				}else{
			$this->session->set_flashdata('msg','Failed Product Updated'); 
			redirect('Shop/Category');			 }
				}
					$data['addons'] = $this->Restaurant->getAddons();	
					$data['category'] = $this->Restaurant->getCategory();
					$this->load->view('shop/add-product',$data);
	}
	function AddProducts(){
	if($this->session->userdata['Shopid']== null ){ redirect('Shop_login');}		
	if(!empty($_POST)){
	
	if(!empty($_FILES['avatar']['name'])){
	$picture = $this->UploadImage();	
	}
	if(!empty($_FILES['avatar']['name'])){
	$picture = $this->UploadImage();	
	}
	$rshopid =$this->session->userdata['Shopid'];
	$rshopname =$this->session->userdata['Shopname'];
	$userData = array(
                'restaurant_id' => $rshopid,
                'restaurant_name' => $rshopname,
                'product_name' => strip_tags($this->input->post('name')),
                'description' => strip_tags($this->input->post('description')),
                'category' => strip_tags($this->input->post('category')),
                'status' => strip_tags($this->input->post('status')),
                'product_Order' => strip_tags($this->input->post('product_position')),
                'is_featured' => strip_tags($this->input->post('featured')),
                'featured_position' => strip_tags($this->input->post('featured_position')),
                'price' => strip_tags($this->input->post('price')),
                'discount' => strip_tags($this->input->post('discount')),
                'discount_type' => strip_tags($this->input->post('discount_type')),
//                'addons' =>implode(",",$_POST['addons']),
         //       'addons_price' =>implode(",",$_POST['addons_price']),
                'product_image' =>$picture,
                'featured_image' =>$picture
            );
	$Insert = $this->Restaurant->InsertProduct($userData);
	if($Insert){
		$this->session->set_flashdata('msg','Succussfully Product Created'); 
		redirect('Shop/Products');
	}else{
		$this->session->set_flashdata('msg','Failed Product Created'); 
		redirect('Shop/Products');
		 }
	}
		$data['addons'] = $this->Restaurant->getAddons();	
		$data['category'] = $this->Restaurant->getCategory();
		$this->load->view('shop/add-product',$data);
	}	
	function Profile(){
		$shopid =	$this->session->userdata['Shopid']; 
		$data['profile'] = $this->Restaurant->getShopRows($shopid);	
	if(!empty($_POST)){
	//echo '<pre>'; print_r($_POST); echo '</pre>'; exit;	
	if(!empty($_FILES['avatar']['name'])){
				$picture = $this->UploadImage();
						}else{
						$picture =	strip_tags($this->input->post('shoplg'));
						}
	if(!empty($_POST['cuisine_id'])){
		$cui_id =implode(",",$_POST['cuisine_id']);
	}else{
		$cui_id = "";
	}					
				$userData = array(
                'name' => strip_tags($this->input->post('name')),
                'Cuisine' => $cui_id,
                'phone' => strip_tags($this->input->post('phone')),
                'email' => strip_tags($this->input->post('email')),
               // 'password' => md5($this->input->post('password')),
                'resturant_opens' => $_POST['hours_opening']['ALL'],
                'resturant_close' => $_POST['hours_closing']['ALL'],
                'pure_veg' =>  strip_tags($this->input->post('pure_veg')),
                'shop_logo' =>  $picture,
                'min_amount' =>  strip_tags($this->input->post('offer_min_amount')),
                'offer_percentage' =>  strip_tags($this->input->post('offer_percent')),
                'estimated_delivery_time' =>  strip_tags($this->input->post('estimated_delivery_time')),
                'description' =>  strip_tags($this->input->post('description')),
                'address' =>  strip_tags($this->input->post('address')),
                'latitude' =>  strip_tags($this->input->post('latitude')),
                'longitude' =>  strip_tags($this->input->post('longitude')),
                'status' =>  strip_tags($this->input->post('status')),
                'everyday' =>  strip_tags($this->input->post('everyday'))         
            );

		 $update = $this->Restaurant->updateShop($userData,$shopid);
		if($update){
			$this->session->set_flashdata('Update','Succussfully Profile Updated'); 
			redirect('Shop/profile');
		}else{
		$this->session->set_flashdata('Updateerror','Profile Updated Failed'); 
		}
	}
		
		$data['csns'] = $this->Restaurant->getCuisinesRows();

		$this->load->view('shop/shop-profile',$data);
	}
	function Deliveries(){
		$this->load->view('shop/list-deliveries');
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
	


}

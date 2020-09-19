<?php defined('BASEPATH') OR exit('No direct script access allowed');
class User_Authentication extends CI_Controller
{
    function __construct() {
		parent::__construct();
		
		// Load facebook library
		$this->load->library('facebook');
		
		//Load user model
		$this->load->model('user');
    }
    public function profile(){
		$this->load->view('user_authentication/profile');
	}
    public function index(){
		$userData = array();
		
		// Check if user is logged in
		if($this->facebook->is_authenticated()){
			// Get user facebook profile details
			$userProfile = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,gender,locale,picture');

            // Preparing data for database insertion
            $userData['oauth_provider'] = 'facebook';
            $userData['oauth_uid'] = $userProfile['id'];
            $userData['first_name'] = $userProfile['first_name'];
            $userData['last_name'] = $userProfile['last_name'];
            $userData['email'] = $userProfile['email'];
            $userData['gender'] = $userProfile['gender'];
            $userData['locale'] = $userProfile['locale'];
            $userData['profile_url'] = 'https://www.facebook.com/'.$userProfile['id'];
            $userData['picture_url'] = $userProfile['picture']['data']['url'];
			
            // Insert or update user data
            $userID = $this->user->checkUser($userData);
			
			// Check user data insert or update status
            if(!empty($userID)){
                $data['userData'] = $userData;
                $this->session->set_userdata('userData',$userData);
            } else {
               $data['userData'] = array();
            }
			
			// Get logout URL
			$data['logoutUrl'] = $this->facebook->logout_url();
		}else{
            $fbuser = '';
			
			// Get login URL
            $data['authUrl'] =  $this->facebook->login_url();
        }
		$userData = array();
		
		//Include the twitter oauth php libraries
		include_once APPPATH."libraries/twitter-oauth-php-codexworld/twitteroauth.php";
		
		//Twitter API Configuration
		$consumerKey = 'hOLHEgzES2GaE9aAtMWHYGNfl';
		$consumerSecret = 'LbWk7t7pdLhsE5fRnOs1oqfSHDyrTZ2ameuAAqaluMRLlkRRDs';
		$oauthCallback = base_url().'user_authentication/twitter';
		
		//Get existing token and token secret from session
		$sessToken = $this->session->userdata('token'); //exit;
		$sessTokenSecret = $this->session->userdata('token_secret');
		
		//Get status and user info from session
		$sessStatus = $this->session->userdata('status');
		$sessUserData = $this->session->userdata('userData');
		
		if(isset($sessStatus) && $sessStatus == 'verified'){
			//Connect and get latest tweets
			$connection = new TwitterOAuth($consumerKey, $consumerSecret, $sessUserData['accessToken']['oauth_token'], $sessUserData['accessToken']['oauth_token_secret']); 
			$data['tweets'] = $connection->get('statuses/user_timeline', array('screen_name' => $sessUserData['username'], 'count' => 5));

			//User info from session
			$userData = $sessUserData;
		}elseif(isset($_GET['oauth_token']) && $sessToken == $_GET['oauth_token']){
			//Successful response returns oauth_token, oauth_token_secret, user_id, and screen_name
			$connection = new TwitterOAuth($consumerKey, $consumerSecret, $sessToken, $sessTokenSecret); //print_r($connection);die;
			$accessToken = $connection->getAccessToken($_GET['oauth_verifier']);
			if($connection->http_code == '200'){
				//Get user profile info
				$userInfo = $connection->get('account/verify_credentials');

				//Preparing data for database insertion
				$name = explode(" ",$userInfo->name);
				$first_name = isset($name[0])?$name[0]:'';
				$last_name = isset($name[1])?$name[1]:'';
				$userData = array(
					'oauth_provider' => 'twitter',
					'oauth_uid' => $userInfo->id,
					'username' => $userInfo->screen_name,
					'first_name' => $first_name,
					'last_name' => $last_name,
					'locale' => $userInfo->lang,
					'profile_url' => 'https://twitter.com/'.$userInfo->screen_name,
					'picture_url' => $userInfo->profile_image_url
				);
				
				//Insert or update user data
				$userID = $this->user->checkUser($userData);
				
				//Store status and user profile info into session
				$userData['accessToken'] = $accessToken;
				$this->session->set_userdata('status','verified');
				$this->session->set_userdata('userData',$userData);
				
				//Get latest tweets
				$data['tweets'] = $connection->get('statuses/user_timeline', array('screen_name' => $userInfo->screen_name, 'count' => 5));
			}else{
				$data['error_msg'] = 'Some problem occurred, please try again later!';
			}
		}else{
			//unset token and token secret from session
			$this->session->unset_userdata('token');
			$this->session->unset_userdata('token_secret');
			
			//Fresh authentication
			$connection = new TwitterOAuth($consumerKey, $consumerSecret);
			$requestToken = $connection->getRequestToken($oauthCallback);
			
			//Received token info from twitter
			$this->session->set_userdata('token',$requestToken['oauth_token']);
			$this->session->set_userdata('token_secret',$requestToken['oauth_token_secret']);
			
			//Any value other than 200 is failure, so continue only if http code is 200
			if($connection->http_code == '200'){
				//redirect user to twitter
				$twitterUrl = $connection->getAuthorizeURL($requestToken['oauth_token']);
				 $data['oauthURL'] = $twitterUrl; 
			}else{
				 $data['oauthURL'] = base_url().'user_authentication'; 
				$data['error_msg'] = 'Error connecting to twitter! try again later!';
			}
        }
		//print_r($userData); exit;
		$data['userData'] = $userData;
		
		// Load login & profile view
        $this->load->view('user_authentication/register',$data);
    }
	public function twitter(){
		$userData = array();
		
		//Include the twitter oauth php libraries
		include_once APPPATH."libraries/twitter-oauth-php-codexworld/twitteroauth.php";
		
		//Twitter API Configuration
		$consumerKey = 'hOLHEgzES2GaE9aAtMWHYGNfl';
		$consumerSecret = 'LbWk7t7pdLhsE5fRnOs1oqfSHDyrTZ2ameuAAqaluMRLlkRRDs';
		$oauthCallback = base_url().'user_authentication/twitter';
		
		//Get existing token and token secret from session
		$sessToken = $this->session->userdata('token'); //exit;
		$sessTokenSecret = $this->session->userdata('token_secret');
		
		//Get status and user info from session
		$sessStatus = $this->session->userdata('status');
		$sessUserData = $this->session->userdata('userData');
		
		if(isset($sessStatus) && $sessStatus == 'verified'){
			//Connect and get latest tweets
			$connection = new TwitterOAuth($consumerKey, $consumerSecret, $sessUserData['accessToken']['oauth_token'], $sessUserData['accessToken']['oauth_token_secret']); 
			$data['tweets'] = $connection->get('statuses/user_timeline', array('screen_name' => $sessUserData['username'], 'count' => 5));

			//User info from session
			$userData = $sessUserData;
		}elseif(isset($_GET['oauth_token']) && $sessToken == $_GET['oauth_token']){
			//Successful response returns oauth_token, oauth_token_secret, user_id, and screen_name
			$connection = new TwitterOAuth($consumerKey, $consumerSecret, $sessToken, $sessTokenSecret); //print_r($connection);die;
			$accessToken = $connection->getAccessToken($_GET['oauth_verifier']);
			if($connection->http_code == '200'){
				//Get user profile info
				$userInfo = $connection->get('account/verify_credentials');

				//Preparing data for database insertion
				$name = explode(" ",$userInfo->name);
				$first_name = isset($name[0])?$name[0]:'';
				$last_name = isset($name[1])?$name[1]:'';
				$userData = array(
					'oauth_provider' => 'twitter',
					'oauth_uid' => $userInfo->id,
					'username' => $userInfo->screen_name,
					'first_name' => $first_name,
					'last_name' => $last_name,
					'locale' => $userInfo->lang,
					'profile_url' => 'https://twitter.com/'.$userInfo->screen_name,
					'picture_url' => $userInfo->profile_image_url
				);
				
				//Insert or update user data
				$userID = $this->user->checkUser($userData);
				
				//Store status and user profile info into session
				$userData['accessToken'] = $accessToken;
				$this->session->set_userdata('status','verified');
				$this->session->set_userdata('userData',$userData);
				
				//Get latest tweets
				$data['tweets'] = $connection->get('statuses/user_timeline', array('screen_name' => $userInfo->screen_name, 'count' => 5));
			}else{
				$data['error_msg'] = 'Some problem occurred, please try again later!';
			}
		}else{
			//unset token and token secret from session
			$this->session->unset_userdata('token');
			$this->session->unset_userdata('token_secret');
			
			//Fresh authentication
			$connection = new TwitterOAuth($consumerKey, $consumerSecret);
			$requestToken = $connection->getRequestToken($oauthCallback);
			
			//Received token info from twitter
			$this->session->set_userdata('token',$requestToken['oauth_token']);
			$this->session->set_userdata('token_secret',$requestToken['oauth_token_secret']);
			
			//Any value other than 200 is failure, so continue only if http code is 200
			if($connection->http_code == '200'){
				//redirect user to twitter
				$twitterUrl = $connection->getAuthorizeURL($requestToken['oauth_token']);
				 $data['oauthURL'] = $twitterUrl; 
			}else{
				 $data['oauthURL'] = base_url().'user_authentication'; 
				$data['error_msg'] = 'Error connecting to twitter! try again later!';
			}
        }
		//print_r($userData); exit;
		$data['userData'] = $userData;
		$this->load->view('user_authentication/register',$data);
    }

	public function logout() {
		// Remove local Facebook session
		$this->facebook->destroy_session();
		// Remove user data from session
		$this->session->unset_userdata('userData');
		// Redirect to login page
		$this->session->unset_userdata('token');
		$this->session->unset_userdata('token_secret');
		$this->session->unset_userdata('status');
		$this->session->unset_userdata('userData');
        $this->session->sess_destroy();
        redirect('/user_authentication');
    }
}
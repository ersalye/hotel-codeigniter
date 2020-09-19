<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Home';
$route['(?!Admin)(?!Shop)(?!Shop_login)(?!Restaurants)(?!Profile)(?!Products)(?!Admin_login)(:any)'] = 'Home/index/$1';
$route['Profile/(:any)'] = 'Profile/index/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

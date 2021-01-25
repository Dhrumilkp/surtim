<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['admin'] = 'Admin/Admin_controller/admin';
$route['xxauth'] = 'Admin/Admin_controller/authuser';
$route['landing'] = 'Welcome/landing';
// Home
$route['home'] = 'Home/Home_controller/home';
$route['createcat'] = 'Home/Home_controller/createcat';
$route['updateslider'] = 'Home/Home_controller/updateslider';
$route['updatehomeslider'] = 'Home/Home_controller/updatehomeslider';
$route['deleteslider'] = 'Home/Home_controller/deleteslider';
$route['logout'] = 'Home/Home_controller/logout';
$route['editcategoryname'] = 'Home/Home_controller/editcategoryname';
$route['deletecat'] = 'Home/Home_controller/deletecat';
$route['uporder'] = 'Home/Home_controller/uporder';
$route['downorder'] = 'Home/Home_controller/downorder';
// About
$route['about'] = 'Welcome/about';
$route['aabout'] = 'Home/Home_controller/aabout';
$route['updateaboutheaderslide'] = 'Home/Home_controller/updateaboutheaderslide';
$route['aboutus'] = 'Home/Home_controller/aboutus';
$route['updateaboutslider'] = 'Home/Home_controller/updateaboutslider';
$route['deleteaboutslider'] = 'Home/Home_controller/deleteaboutslider';
// SHOPE
$route['shop/(:any)/(:any)'] = 'Welcome/shop/$1/$2';
$route['shopping'] = 'Welcome/shopping';
$route['ashop'] = 'Home/Home_controller/ashop';
$route['uploadbook'] = 'Home/Home_controller/uploadbook';
$route['deletebook'] = 'Home/Home_controller/deletebook';
$route['editbook'] = 'Home/Home_controller/editbook';
$route['getbookdata'] = 'Home/Home_controller/getbookdata';
// COntact
$route['contact'] = 'Welcome/contact';
$route['updatecontact'] = 'Home/Home_controller/updatecontact';
$route['udpateaddress'] = 'Home/Home_controller/udpateaddress';
$route['updategurl'] = 'Home/Home_controller/updategurl';
$route['updateemail'] = 'Home/Home_controller/updateemail';
$route['admincontact'] = 'Home/Home_controller/admincontact';
$route['updatecontactnumber'] = 'Home/Home_controller/updatecontactnumber';
$route['deletenumber'] = 'Home/Home_controller/deletenumber';
$route['updateemaildata'] = 'Home/Home_controller/updateemaildata';
$route['deleteemail'] = 'Home/Home_controller/deleteemail';
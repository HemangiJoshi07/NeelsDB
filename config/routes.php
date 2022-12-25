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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'Home/index';
$route['category/?(:any)'] = 'Home/category/$1';
$route['category/?(:any)/?(:any)'] = 'Home/product/$1/$2';
$route['about']='Home/about';
$route['privacypolicy']='Home/privacy_policy';
$route['refundprocess']='Home/refund_process';
$route['contact']='Home/contact';
$route['inquiry/?(:any)']='Home/inquiry/$1';



$route['Admin']='Admin/Admin/index';
$route['Admin/login'] = 'Admin/Admin/login';

$route['Admin/dashboard'] = 'Admin/Admin/dashboard';
$route['Admin/change_password'] = 'Admin/Admin/change_password';
$route['Admin/logout'] = 'Admin/Admin/logout';

$route['Admin/home_banner/?(:any)'] = 'Admin/Home_banner/index/$1';
$route['Admin/home_banner/?(:any)/(:any)'] = 'Admin/Home_banner/index/$1/$2';

$route['Admin/testimonial/?(:any)'] = 'Admin/Testimonial/index/$1';
$route['Admin/testimonial/?(:any)/(:any)'] = 'Admin/Testimonial/index/$1/$2';

$route['Admin/office_environment/?(:any)'] = 'Admin/Office_environment/index/$1';
$route['Admin/office_environment/?(:any)/(:any)'] = 'Admin/Office_environment/index/$1/$2';

$route['Admin/category/?(:any)'] = 'Admin/Category/index/$1';
$route['Admin/category/?(:any)/(:any)'] = 'Admin/Category/index/$1/$2';

$route['Admin/topmenu/?(:any)'] = 'Admin/Topmenu/index/$1';
$route['Admin/topmenu/?(:any)/(:any)'] = 'Admin/Topmenu/index/$1/$2';

$route['Admin/product/?(:any)'] = 'Admin/Product/index/$1';
$route['Admin/product/?(:any)/(:any)'] = 'Admin/Product/index/$1/$2';

$route['Admin/cms_page/?(:any)'] = 'Admin/Cms_page/index/$1';
$route['Admin/cms_page/?(:any)/(:any)'] = 'Admin/Cms_page/index/$1/$2';

$route['Admin/general'] = 'Admin/General/index';



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

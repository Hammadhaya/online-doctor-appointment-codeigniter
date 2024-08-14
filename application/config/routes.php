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
$route['default_controller'] = 'Site';
$route['doctor-dashboard'] = 'Site/dashboard';
// $route['index-three'] = 'Site/index';
// $route['doctorthree'] = 'Site/doctorthree';
$route['patient-profile'] = 'Site/profile';
// $route['booking-appointment'] = 'Site/appointment';
$route['patient-invoice'] = 'Site/invoice';
$route['pharmacy'] = 'Site/pharmacy';
$route['pharmacy-shop'] = 'Site/shop';
$route['pharmacy-product-detail'] = 'Site/medical_detail';
$route['pharmacy-shop-cart'] = 'Site/shop_cart';
$route['pharmacy-checkout'] = 'Site/checkout';
$route['pharmacy-checkout'] = 'Site/checkout';
$route['pharmacy-account'] = 'Site/account';
$route['pharmacy-aboutus'] = 'Site/aboutus';
$route['pharmacy-departments'] = 'Site/departments';
$route['doctor-team-one'] = 'Site/doctor_team';
$route['pharmacy-faqs'] = 'Site/faqs';
$route['logout-page'] = 'Admin/logout_page';
$route['login-page'] = 'Admin/login_page';
$route['admin-login'] = 'Admin/admin_login';
$route['admin-logout'] = 'Admin/admin_logout';
$route['signup-page'] = 'Admin/signup_page';
$route['adminsignup-page'] = 'Admin/adminsignup_page';
$route['insert-admin'] = 'Admin/insert_admin';
$route['insert-user'] = 'Admin/insert_user';
$route['login-identify'] = 'Admin/identify_user';
$route['admin-identify'] = 'Admin/identify_admin';
// $route['pharmacy-blogs'] = 'Site/blogs';
// $route['pharmacy-blog-detail'] = 'Site/blog_detail';
$route['pharmacy-terms'] = 'Site/terms';
$route['pharmacy-privacy'] = 'Site/privacy';
$route['pharmacy-error'] = 'Site/error';
// $route['pharmacy-contact'] = 'Site/contact';
$route['patient-appointment'] = 'Site/addappointment';
$route['site-appointment'] = 'Site/site_appointment';
$route['getfees'] = 'Site/getfees';
$route['admin'] = 'Admin/admin_index';
$route['appointment'] = 'Admin/appoint';
$route['appointment-page'] = 'Admin/appointment_page';
$route['doctors'] = 'Admin/doctors';
$route['doctor-page'] = 'Admin/doctor_page';
$route['add-doctor'] = 'Admin/add_doctor';
$route['add-patient'] = 'Admin/add_patient';
$route['add-services'] = 'Admin/add_services';
$route['dr-profile'] = 'Admin/dr_profile';
$route['admin-patients'] = 'Admin/admin_patients';
$route['patient-page'] = 'Admin/patient_page';
$route['patient-profile'] = 'Admin/patient_profile';
$route['approve-patient/(:any)'] = 'Admin/approve/$1';
$route['services-page'] = 'Admin/services_page';
$route['show-services'] = 'Admin/show_services';
$route['drdelete/(:any)'] = 'Admin/delete/$1';
$route['dredit/(:any)'] = 'Admin/edit/$1';
$route['ptdelete/(:any)'] = 'Admin/ptdelete/$1';
$route['ptedit/(:any)'] = 'Admin/ptedit/$1';
$route['srdelete/(:any)'] = 'Admin/srdelete/$1';
$route['sredit/(:any)'] = 'Admin/sredit/$1';
$route['pgdelete/(:any)'] = 'Admin/pgdelete/$1';
$route['pgedit/(:any)'] = 'Admin/pgedit/$1';
$route['cdelete/(:any)'] = 'Admin/cdelete/$1';
$route['cedit/(:any)'] = 'Admin/cedit/$1';
$route['inquirydelete/(:any)'] = 'Admin/inquirydelete/$1';
$route['pages'] = 'Admin/pages';
$route['add-page'] = 'Admin/add_page';
$route['showpages'] = 'Admin/show_pages';
$route['content'] = 'Admin/content';
$route['add-content'] = 'Admin/add_content';
$route['showcontent'] = 'Admin/show_content';
$route['add-inquiry'] = 'Admin/add_inquiry';
$route['show-inquiry'] = 'Admin/show_inquiry';

$route['(:any)'] = 'Site/index';
// $route['doctor'] = 'Admin/doctor';

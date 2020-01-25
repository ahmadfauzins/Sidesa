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
$route['auth'] = 'Auth';
$route['auth_rt'] = 'Auth/rt';

//  @author    Ryan Aprianto
// ------------------------------------------------------------------------
// Custom Routing
// ------------------------------------------------------------------------

// ------------------------------------------------------------------------
// Superadmin
// ------------------------------------------------------------------------
$route['sa/dashboard']				= 'Superadmin/Dashboard_Controller';

// ------------------------------------------------------------------------
// Admin
// ------------------------------------------------------------------------
$route['a/dashboard']				= 'Admin/Dashboard_Controller';
$route['a/rt']						= 'Admin/RT_Controller';
$route['a/rt/add']					= 'Admin/RT_Controller/add';
$route['a/rt/insert']				= 'Admin/RT_Controller/insert';
$route['a/rt/edit/(:any)']			= 'Admin/RT_Controller/edit/$1';
$route['a/rt/update']				= 'Admin/RT_Controller/update';
$route['a/rt/delete/(:any)']		= 'Admin/RT_Controller/delete/$1';

$route['a/warga']					= 'Admin/Warga_Controller';
$route['a/warga/add']				= 'Admin/Warga_Controller/add';
$route['a/warga/insert']			= 'Admin/Warga_Controller/insert';
$route['a/warga/edit/(:any)']		= 'Admin/Warga_Controller/edit/$1';
$route['a/warga/update']			= 'Admin/Warga_Controller/update';
$route['a/warga/delete/(:any)']		= 'Admin/Warga_Controller/delete/$1';

$route['a/user']					= 'Admin/User_Controller';

// ------------------------------------------------------------------------
// Jurnalis
// ------------------------------------------------------------------------
$route['j/dashboard']				= 'Jurnalis/Dashboard_Controller';

$route['j/berita']					= 'Jurnalis/Berita_Controller';
$route['j/berita/add']				= 'Jurnalis/Berita_Controller/add';
$route['j/berita/insert']			= 'Jurnalis/Berita_Controller/insert';
$route['j/berita/delete/(:any)']	= 'Jurnalis/Berita_Controller/delete/$1';


// ------------------------------------------------------------------------
// RT
// ------------------------------------------------------------------------
$route['rt/dashboard']					= 'Rt/Dashboard_Controller';
$route['rt/warga']						= 'Rt/Warga_Controller';
$route['rt/warga/add']					= 'Rt/Warga_Controller/add';
$route['rt/warga/insert']				= 'Rt/Warga_Controller/insert';
$route['rt/warga/edit/(:any)']			= 'Rt/Warga_Controller/edit/$1';
$route['rt/warga/update']				= 'Rt/Warga_Controller/update';
$route['rt/warga/delete/(:any)']		= 'Rt/Warga_Controller/delete/$1';

$route['rt/rekomendasi']				= 'Rt/Rekomendasi_Controller';
$route['rt/rekomendasi/add']			= 'Rt/Rekomendasi_Controller/add';
$route['rt/rekomendasi/insert']			= 'Rt/Rekomendasi_Controller/insert';
$route['rt/rekomendasi/delete/(:any)']	= 'Rt/Rekomendasi_Controller/delete/$1';

$route['rt/profile/edit']				= 'Rt/Profile_Controller/edit';
$route['rt/profile/update']				= 'Rt/Profile_Controller/update';
$route['rt/profile/changepassword']		= 'Rt/Profile_Controller/changepassword';
$route['rt/dashboard']				= 'Rt/Dashboard_Controller';
$route['rt/warga']					= 'Rt/Warga_Controller';
$route['rt/warga/add']				= 'Rt/Warga_Controller/add';
$route['rt/warga/insert']			= 'Rt/Warga_Controller/insert';
$route['rt/warga/edit/(:any)']		= 'Rt/Warga_Controller/edit/$1';
$route['rt/warga/update']			= 'Rt/Warga_Controller/update';
$route['rt/warga/delete/(:any)']	= 'Rt/Warga_Controller/delete/$1';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

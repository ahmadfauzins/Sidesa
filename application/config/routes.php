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
$route['login'] = 'Auth/warga';
$route['berita'] = 'Berita';


//  @author    Ryan Aprianto
// ------------------------------------------------------------------------
// Custom Routing
// ------------------------------------------------------------------------

// ------------------------------------------------------------------------
// Superadmin
// ------------------------------------------------------------------------
$route['sa/dashboard']					= 'Superadmin/Dashboard_Controller';

$route['sa/penduduk']					= 'Superadmin/Penduduk_Controller';
$route['sa/rekomendasi']				= 'Superadmin/Rekomendasi_Controller';
$route['sa/keuangan']					= 'Superadmin/Keuangan_Controller';
$route['sa/profile/edit']				= 'Superadmin/Profile_Controller/edit';
$route['sa/profile/update']				= 'Superadmin/Profile_Controller/update';
$route['sa/profile/changepassword']		= 'Superadmin/Profile_Controller/changepassword';


// ------------------------------------------------------------------------
// Admin
// ------------------------------------------------------------------------
$route['a/dashboard']					= 'Admin/Dashboard_Controller';
$route['a/rt']							= 'Admin/RT_Controller';
$route['a/rt/add']						= 'Admin/RT_Controller/add';
$route['a/rt/insert']					= 'Admin/RT_Controller/insert';
$route['a/rt/edit/(:any)']				= 'Admin/RT_Controller/edit/$1';
$route['a/rt/update']					= 'Admin/RT_Controller/update';
$route['a/rt/delete/(:any)']			= 'Admin/RT_Controller/delete/$1';

$route['a/surat']						= 'Admin/Surat_Controller';
$route['a/suara-warga']					= 'Admin/SuaraWarga_Controller';

$route['a/keuangan']					= 'Admin/Keuangan_Controller';
$route['a/keuangan/add']				= 'Admin/Keuangan_Controller/add';
$route['a/keuangan/insert']				= 'Admin/Keuangan_Controller/insert';
$route['a/keuangan/edit/(:any)']		= 'Admin/Keuangan_Controller/edit/$1';
$route['a/keuangan/update']				= 'Admin/Keuangan_Controller/update';
$route['a/keuangan/delete/(:any)']		= 'Admin/Keuangan_Controller/delete/$1';

$route['a/warga']						= 'Admin/Warga_Controller';
$route['a/warga/add']					= 'Admin/Warga_Controller/add';
$route['a/warga/insert']				= 'Admin/Warga_Controller/insert';
$route['a/warga/edit/(:any)']			= 'Admin/Warga_Controller/edit/$1';
$route['a/warga/update']				= 'Admin/Warga_Controller/update';
$route['a/warga/delete/(:any)']			= 'Admin/Warga_Controller/delete/$1';

$route['a/jurnalis']					= 'Admin/Jurnalis_Controller';
$route['a/jurnalis/add']				= 'Admin/Jurnalis_Controller/add';
$route['a/jurnalis/insert']				= 'Admin/Jurnalis_Controller/insert';
$route['a/jurnalis/edit/(:any)']		= 'Admin/Jurnalis_Controller/edit/$1';
$route['a/jurnalis/update']				= 'Admin/Jurnalis_Controller/update';
$route['a/jurnalis/delete/(:any)']		= 'Admin/Jurnalis_Controller/delete/$1';

$route['a/berita']						= 'Admin/Berita_Controller';
$route['a/berita/pending']				= 'Admin/Berita_Controller/pending';
$route['a/berita/allow/(:any)']			= 'Admin/Berita_Controller/allow/$1';
$route['a/berita/detail/(:any)']		= 'Admin/Berita_Controller/detail/$1';
$route['a/berita/edit/(:any)']			= 'Admin/Berita_Controller/edit/$1';
$route['a/berita/update']				= 'Admin/Berita_Controller/update';
$route['a/berita/delete/(:any)']		= 'Admin/Berita_Controller/delete/$1';

$route['a/profile/edit']				= 'Admin/Profile_Controller/edit';
$route['a/profile/update']				= 'Admin/Profile_Controller/update';
$route['a/profile/changepassword']		= 'Admin/Profile_Controller/changepassword';


$route['a/user']						= 'Admin/User_Controller';

// ------------------------------------------------------------------------
// Jurnalis
// ------------------------------------------------------------------------
$route['j/dashboard']					= 'Jurnalis/Dashboard_Controller';

$route['j/berita']						= 'Jurnalis/Berita_Controller';
$route['j/berita/add']					= 'Jurnalis/Berita_Controller/add';
$route['j/berita/insert']				= 'Jurnalis/Berita_Controller/insert';
$route['j/berita/delete/(:any)']		= 'Jurnalis/Berita_Controller/delete/$1';

$route['j/profile/edit']				= 'Jurnalis/Profile_Controller/edit';
$route['j/profile/update']				= 'Jurnalis/Profile_Controller/update';
$route['j/profile/changepassword']		= 'Jurnalis/Profile_Controller/changepassword';


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
$route['rt/dashboard']					= 'Rt/Dashboard_Controller';
$route['rt/warga']						= 'Rt/Warga_Controller';
$route['rt/warga/add']					= 'Rt/Warga_Controller/add';
$route['rt/warga/insert']				= 'Rt/Warga_Controller/insert';
$route['rt/warga/edit/(:any)']			= 'Rt/Warga_Controller/edit/$1';
$route['rt/warga/update']				= 'Rt/Warga_Controller/update';
$route['rt/warga/delete/(:any)']		= 'Rt/Warga_Controller/delete/$1';

// ------------------------------------------------------------------------
// Warga
// ------------------------------------------------------------------------
$route['w/dashboard']					= 'Warga/Dashboard_Controller';

$route['w/suara-warga']					= 'Warga/SuaraWarga_Controller';
$route['w/suara-warga/add']				= 'Warga/SuaraWarga_Controller/add';
$route['w/suara-warga/insert']			= 'Warga/SuaraWarga_Controller/insert';
$route['w/suara-warga/edit/(:any)']		= 'Warga/SuaraWarga_Controller/edit/$1';
$route['w/suara-warga/update']			= 'Warga/SuaraWarga_Controller/update';
$route['w/suara-warga/delete/(:any)']	= 'Warga/SuaraWarga_Controller/delete/$1';

$route['w/profile/edit']				= 'Warga/Profile_Controller/edit';
$route['w/profile/update']				= 'Warga/Profile_Controller/update';
$route['w/profile/changepassword']		= 'Warga/Profile_Controller/changepassword';

$route['w/surat']						= 'Warga/Surat_Controller';
$route['w/surat/add']					= 'Warga/Surat_Controller/add';
$route['w/surat/insert']				= 'Warga/Surat_Controller/insert';
$route['w/surat/edit/(:any)']			= 'Warga/Surat_Controller/edit/$1';
$route['w/surat/update']				= 'Warga/Surat_Controller/update';
$route['w/surat/delete/(:any)']			= 'Warga/Surat_Controller/delete/$1';
$route['w/e_surat']						= 'Surat/e_surat';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

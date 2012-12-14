<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "welcome";

$route['test'] = "test";
$route['test/ajax'] = "test/ajax";

// static

$route['css/([a-z\.\-]+\.css)'] = "statics/css/$1";
$route['js/([a-z\.\-]+\.js)'] = "statics/js/$1";
$route['images/(.+)'] = "statics/images/$1";

$route['third_party/(.+)$'] = 'statics/thirdparty/$1';

//======================= ROUTES UNTUK ADMIN ==== 
$route['admin'] = "admin";

//======================= ROUTES UNTUK MAHASISWA ==== 
$route['admin/mahasiswa'] = "admin/mahasiswa";

//======================= ROUTES UNTUK DOSEN ==== 
$route['admin/dosen'] = "admin/dosen";

//======================= ROUTES UNTUK NEWS ==== 
$route['admin/news'] = "admin/news";

//======================= ROUTES UNTUK JURNAL ==== 
$route['admin/jurnal'] = "admin/jurnal";

//======================= ROUTES UNTUK MODUL ==== 
$route['admin/modul'] = "admin/modul";

//======================= ROUTES UNTUK BUKU ==== 
$route['admin/buku'] = "admin/buku";

//======================= ROUTES UNTUK BULETIN ==== 
$route['admin/buletin'] = "admin/buletin";

//======================= ROUTES UNTUK DOSEN ==== 
$route['dosen'] = "dosen";
$route['dosen/profil'] = "dosen/profil";

//======================= ROUTES UNTUK BULETIN ==== 
$route['mahasiswa'] = "mahasiswa";


// ==================== error
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */
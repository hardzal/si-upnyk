<?php
defined('BASEPATH') or exit('No direct script access allowed');
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
$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin/agenda'] = 'Event/lists';
$route['admin/agenda/create'] = 'Event/create';
$route['admin/agenda/edit/(:num)'] = 'Event/edit/$1';
$route['admin/agenda/delete/(:num)'] = 'Event/delete/$1';

$route['admin/galleries'] = 'Gallery/lists';
$route['admin/galleries/create'] = 'Gallery/create';
$route['admin/galleries/edit/(:num)'] = 'Gallery/edit/$1';
$route['admin/galleries/delete/(:num)'] = 'Gallery/delete/$1';

$route['admin/specialization'] = 'Specialization/lists';
$route['admin/specialization/create'] = 'Specialization/create';
$route['admin/specialization/edit/(:num)'] = 'Specialization/edit/$1';
$route['admin/specialization/delete/(:num)'] = 'Specialization/delete/$1';

$route['admin/question'] = 'Question/lists';
$route['admin/question/show/(:num)'] = 'Question/show/$1';
$route['admin/question/delete/(:num)'] = 'Question/delete/$1';

$route['admin/pengajaran'] = 'Tridharma/list_pengajaran';
$route['admin/pengajaran/create'] = 'Tridharma/create_pengajaran';
$route['admin/pengajaran/edit/(:num)'] = 'Tridharma/edit_pengajaran/$1';
$route['admin/pengajaran/delete/(:num)'] = 'Tridharma/delete_pengajaran/$1';

$route['admin/penelitian'] = 'Tridharma/list_penelitian';
$route['admin/penelitian/create'] = 'Tridharma/create_penelitian';
$route['admin/penelitian/edit/(:num)'] = 'Tridharma/edit_penelitian/$1';
$route['admin/penelitian/delete/(:num)'] = 'Tridharma/delete_penelitian/$1';

$route['admin/pengabdian'] = 'Tridharma/list_pengabdian';
$route['admin/pengabdian/create'] = 'Tridharma/create_pengabdian';
$route['admin/pengabdian/edit/(:num)'] = 'Tridharma/edit_pengabdian/$1';
$route['admin/pengabdian/delete/(:num)'] = 'Tridharma/delete_pengabdian/$1';

$route['admin/fasilitas'] = 'Fasilitas/lists';
$route['admin/fasilitas/create'] = 'Fasilitas/create';
$route['admin/fasilitas/edit/(:num)'] = 'Fasilitas/edit/$1';
$route['admin/fasilitas/delete/(:num)'] = 'Fasilitas/delete/$1';

$route['admin/kerja_praktik'] = 'KerjaPraktik/lists';
$route['admin/kerja_praktik/create'] = 'KerjaPraktik/create';
$route['admin/kerja_praktik/edit/(:num)'] = 'KerjaPraktik/edit/$1';
$route['admin/kerja_praktik/delete/(:num)'] = 'KerjaPraktik/delete/$1';

$route['admin/skripsi'] = 'Skripsi/lists';
$route['admin/skripsi/create'] = 'Skripsi/create';
$route['admin/skripsi/edit/(:num)'] = 'Skripsi/edit/$1';
$route['admin/skripsi/delete/(:num)'] = 'Skripsi/delete/$1';

$route['admin/kalender'] = 'Kalender/lists';
$route['admin/kalender/create'] = 'Kalender/create';
$route['admin/kalender/edit/(:num)'] = 'Kalender/edit/$1';
$route['admin/kalender/delete/(:num)'] = 'Kalender/delete/$1';

$route['admin/kurikulum'] = 'Kurikulum/lists';
$route['admin/kurikulum/create'] = 'Kurikulum/create';
$route['admin/kurikulum/edit/(:num)'] = 'Kurikulum/edit/$1';
$route['admin/kurikulum/delete/(:num)'] = 'Kurikulum/delete/$1';

$route['admin/wisuda'] = 'Wisuda/lists';
$route['admin/wisuda/create'] = 'Wisuda/create';
$route['admin/wisuda/edit/(:num)'] = 'Wisuda/edit/$1';
$route['admin/wisuda/delete/(:num)'] = 'Wisuda/delete/$1';

$route['admin/organisasi_mahasiswa'] = 'OrganisasiMahasiswa/lists';
$route['admin/organisasi_mahasiswa/create'] = 'OrganisasiMahasiswa/create';
$route['admin/organisasi_mahasiswa/edit/(:any)'] = 'OrganisasiMahasiswa/edit/$1';
$route['admin/organisasi_mahasiswa/delete/(:any)'] = 'OrganisasiMahasiswa/delete/$1';

$route['admin/alumni'] = 'Alumni/lists';
$route['admin/alumni/create'] = 'Alumni/create';
$route['admin/alumni/edit/(:any)'] = 'Alumni/edit/$1';
$route['admin/alumni/delete/(:any)'] = 'Alumni/delete/$1';

$route['admin/prestasi'] = 'Prestasi/lists';
$route['admin/prestasi/create'] = 'Prestasi/create';
$route['admin/prestasi/edit/(:any)'] = 'Prestasi/edit/$1';
$route['admin/prestasi/delete/(:any)'] = 'Prestasi/delete/$1';

$route['admin/user'] = 'User/lists';
$route['admin/user/create'] = 'User/create';
$route['admin/user/edit/(:any)'] = 'User/edit/$1';
$route['admin/user/delete/(:any)'] = 'User/delete/$1';

$route['admin/category'] = 'Category/lists';
$route['admin/category/create'] = 'Category/create';
$route['admin/category/edit/(:any)'] = 'Category/edit/$1';
$route['admin/category/delete/(:any)'] = 'Category/delete/$1';

$route['admin/Kurikulum'] = 'Kurikulum/lists';
$route['admin/Kurikulum/create'] = 'Kurikulum/create';
$route['admin/Kurikulum/edit/(:any)'] = 'Kurikulum/edit/$1';
$route['admin/Kurikulum/delete/(:any)'] = 'Kurikulum/delete/$1';

$route['admin/menu'] = 'Menu/lists';
$route['admin/menu/create'] = 'Menu/create';
$route['admin/menu/edit/(:num)'] = 'Menu/edit/$1';
$route['admin/menu/delete/(:num)'] = 'Menu/delete/$1';

$route['admin/submenu'] = 'Submenu/lists';
$route['admin/submenu/create'] = 'Submenu/create';
$route['admin/submenu/edit/(:num)'] = 'Submenu/edit/$1';
$route['admin/submenu/delete/(:num)'] = 'Submenu/delete/$1';

$route['admin/roleaccess'] = 'RoleAccess/lists';
$route['admin/roleaccess/create'] = 'RoleAccess/create';
$route['admin/roleaccess/edit/(:num)'] = 'RoleAccess/edit/$1';
$route['admin/roleaccess/delete/(:num)'] = 'RoleAccess/delete/$1';

$route['admin/grafik'] = 'Grafik/lists';
$route['admin/grafik/create'] = 'Grafik/create';
$route['admin/grafik/edit/(:num)'] = 'Grafik/edit/$1';
$route['admin/grafik/delete/(:num)'] = 'Grafik/delete/$1';

$route['admin/grafik/isi/(:num)'] = 'Grafik/lists_isi/$1';
$route['admin/grafik/isi/create/(:num)'] = 'Grafik/create_isi/$1';
$route['admin/grafik/isi/edit/(:num)/(:num)'] = 'Grafik/edit_isi/$1/$2';
$route['admin/grafik/isi/delete/(:num)/(:num)'] = 'Grafik/delete_isi/$1/$2';

$route['admin/berita'] = 'Berita/lists';
$route['admin/berita/create'] = 'Berita/create';
$route['admin/berita/edit/(:num)'] = 'Berita/edit/$1';
$route['admin/berita/delete/(:num)'] = 'Berita/delete/$1';
$route['admin/berita/show/(:num)'] = 'Berita/show/$1';

$route['admin/slide'] = 'Slide/lists';
$route['admin/slide/create'] = 'Slide/create';
$route['admin/slide/edit/(:num)'] = 'Slide/edit/$1';
$route['admin/slide/delete/(:num)'] = 'Slide/delete/$1';

$route['admin/document'] = 'Doument/lists';
$route['admin/document/create'] = 'Doument/create';
$route['admin/document/edit/(:num)'] = 'Doument/edit/$1';
$route['admin/document/delete/(:num)'] = 'Doument/delete/$1';

$route['admin/dosen'] = 'Dosen/lists';
$route['admin/dosen/create'] = 'Dosen/create';
$route['admin/dosen/edit/(:num)'] = 'Dosen/edit/$1';
$route['admin/dosen/delete/(:num)'] = 'Dosen/delete/$1';

$route['admin/struktur'] = 'Struktur/index';
$route['admin/struktur/edit/(:num)'] = 'Struktur/edit/$1';

$route['admin/tendik'] = 'Tendik/lists';
$route['admin/tendik/create'] = 'Tendik/create';
$route['admin/tendik/edit/(:num)'] = 'Tendik/edit/$1';
$route['admin/tendik/delete/(:num)'] = 'Tendik/delete/$1';
$route['admin/tendik/show/(:num)'] = 'Tendik/show/$1';

$route['admin/profile'] = 'Profile/index';
$route['admin/profile/edit/(:num)'] = 'Profile/edit/$1';

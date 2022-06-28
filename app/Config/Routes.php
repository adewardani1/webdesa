<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//route view desaq
$routes->get('/', 'Home::index');


//route login SIDES
$routes->get('auth', 'Login::index');
$routes->post('auth/proses', 'Login::auth');

//route SIDES
$routes->get('sides', 'Sides::index');
$routes->get('sides/logout', 'Sides::logout');

//route penduduk
$routes->get('sides/penduduk/create', 'Penduduk::create'); //tampil form tambah
$routes->post('sides/penduduk/save', 'Penduduk::insert');
$routes->get('sides/penduduk', 'Penduduk::index');
$routes->get('sides/penduduk/show/(:num)', 'Penduduk::show/$1');
$routes->post('sides/penduduk/update/(:num)', 'Penduduk::updated/$1');
$routes->get('sides/penduduk/delete/(:num)', 'Penduduk::destroy/$1');

//route aspirasi
$routes->get('sides/aspirasi', 'AspirasiWarga::index');
$routes->get('sides/aspirasi/delete(:num)', 'AspirasiWarga::delete/$1');

//route berita
$routes->get('sides/berita/create', 'Berita::create'); //tampil form tambah
$routes->post('sides/berita/save', 'Berita::insert');
$routes->get('sides/berita', 'Berita::index');
$routes->get('sides/berita/show/(:num)', 'Berita::show/$1');
$routes->post('sides/berita/update/(:num)', 'Berita::updated/$1');
$routes->get('sides/berita/delete/(:num)', 'Berita::destroy/$1');
$routes->get('sides/berita/foto/(:num)', 'Berita::foto/$1'); //tampil foto

//route akun
$routes->get('sides/akun/create', 'Akun::create'); //tampil form tambah
$routes->post('sides/akun/save', 'Akun::insert');
$routes->get('sides/akun', 'Akun::index');
$routes->get('sides/akun/show/(:num)', 'Akun::show/$1');
$routes->post('sides/akun/update/(:num)', 'Akun::updated/$1');
$routes->get('sides/akun/delete/(:num)', 'Akun::destroy/$1');

//route visi-misi
$routes->get('sides/visimisi/create', 'VisiMisi::create'); //tampil form tambah
$routes->post('sides/visimisi/save', 'VisiMisi::insert');
$routes->get('sides/visimisi', 'VisiMisi::index');
$routes->get('sides/visimisi/show/(:num)', 'VisiMisi::show/$1');
$routes->post('sides/visimisi/update/(:num)', 'VisiMisi::updated/$1');
$routes->get('sides/visimisi/delete/(:num)', 'VisiMisi::destroy/$1');
$routes->get('sides/visimisi/foto/(:num)', 'VisiMisi::foto/$1'); //tampil foto
//services akun
$routes->get('services/akun/(:any)', 'Akun::checkUser/$1');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

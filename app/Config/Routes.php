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

//route view desa
$routes->get('/', 'Home::index');


//route login SIDES (sistem informasi website desa)
$routes->get('auth', 'Login::index');
$routes->post('auth/proses', 'Login::auth');

//route SIDES (sistem informasi website desa)
$routes->get('sides', 'Sides::index');
$routes->get('sides/logout', 'Sides::logout');

//route penduduk (sistem informasi website desa)
$routes->get('sides/penduduk/create', 'Penduduk::create'); //tampil form tambah
$routes->post('sides/penduduk/save', 'Penduduk::insert');
$routes->get('sides/penduduk', 'Penduduk::index');
$routes->get('sides/penduduk/show/(:num)', 'Penduduk::show/$1');
$routes->post('sides/penduduk/update/(:num)', 'Penduduk::updated/$1');
$routes->get('sides/penduduk/delete/(:num)', 'Penduduk::destroy/$1');

//route aspirasi (sistem informasi desa)
$routes->get('sides/aspirasi', 'AspirasiWarga::index');
$routes->get('sides/aspirasi/(:num)', 'AspirasiWarga::show/$1');
$routes->post('sides/aspirasi/update(:num)', 'AspirasiWarga::update/$1');
$routes->get('sides/aspirasi/delete(:num)', 'AspirasiWarga::delete/$1');

//route berita (sistem informasi website desa)
$routes->get('sides/berita/create', 'Berita::create'); //tampil form tambah
$routes->post('sides/berita/save', 'Berita::insert');
$routes->get('sides/berita', 'Berita::index');
$routes->get('sides/berita/show/(:num)', 'Berita::show/$1');
$routes->post('sides/berita/update/(:num)', 'Berita::updated/$1');
$routes->get('sides/berita/delete/(:num)', 'Berita::destroy/$1');
$routes->get('sides/berita/foto/(:num)', 'Berita::foto/$1'); //tampil foto
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

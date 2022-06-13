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

//route SIDES (sistem informasi desa)
$routes->get('/sides', 'Sides::index');

//route penduduk (sistem informasi desa)
$routes->get('/penduduk/create', 'Penduduk::create'); //tampil form tambah
$routes->post('/penduduk/save', 'Penduduk::insert');
$routes->get('/penduduk', 'Penduduk::index');
$routes->get('/penduduk/show/(:num)', 'Penduduk::show/$1');
$routes->post('/penduduk/update/(:num)', 'Penduduk::updated/$1');
$routes->get('/penduduk/delete/(:num)', 'Penduduk::destroy/$1');

//route aspirasi (sistem informasi desa)
$routes->get('/aspirasi', 'AspirasiWarga::index');
$routes->get('/aspirasi/(:num)', 'AspirasiWarga::show/$1');
$routes->post('/aspirasi/update(:num)', 'AspirasiWarga::update/$1');
$routes->get('/aspirasi/delete(:num)', 'AspirasiWarga::delete/$1');

//route berita (sistem informasi desa)
$routes->get('/berita/create', 'Berita::create'); //tampil form tambah
$routes->post('/berita/save', 'Berita::insert');
$routes->get('/berita', 'Berita::index');
$routes->get('/berita/show/(:num)', 'Berita::show/$1');
$routes->post('/berita/update/(:num)', 'Berita::updated/$1');
$routes->get('/berita/delete/(:num)', 'Berita::destroy/$1');
$routes->get('/berita/foto/(:num)', 'Berita::foto/$1'); //tampil foto
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

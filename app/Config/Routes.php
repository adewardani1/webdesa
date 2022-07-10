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
$routes->get('galeri', 'Home::getGaleri');
$routes->get('kelembagaan', 'Home::getKelembagaan');
$routes->get('pemerintahan-desa', 'Home::getPemerintahDesa');
$routes->get('visi-misi', 'Home::getVisiMisi');
$routes->get('kontak', 'Home::getKontak');

//route news
$routes->get('news', 'Home::getBerita');
$routes->get('news/(:num)', 'Home::getBeritaById/$1');

//route pengumuman
$routes->get('pengumuman', 'Home::getPengumuman');
$routes->get('pengumuman/(:num)', 'Home::getPengumumanById/$1');

//route event
$routes->get('event', 'Home::getEvent');
$routes->get('event/(:num)', 'Home::getEventById/$1');

//route submit komentar
$routes->post('comment/submit/(:num)', 'Home::insert/$1');
$routes->post('aspirasi/submit', 'Home::insertAspirasi');

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
$routes->get('sides/aspirasi/delete/(:num)', 'AspirasiWarga::destroy/$1');

//route berita
$routes->get('sides/content/create', 'Content::create'); //tampil form tambah
$routes->post('sides/content/save', 'Content::insert');
$routes->get('sides/content', 'Content::index');
$routes->get('sides/content/show/(:num)', 'Content::show/$1');
$routes->post('sides/content/update/(:num)', 'Content::updated/$1');
$routes->get('sides/content/delete/(:num)', 'Content::destroy/$1');
$routes->get('sides/content/foto/(:num)', 'Content::foto/$1'); //tampil foto

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

//route kelembagaan
$routes->get('sides/kelembagaan/create', 'Kelembagaan::create'); //tampil form tambah
$routes->post('sides/kelembagaan/save', 'Kelembagaan::insert');
$routes->get('sides/kelembagaan', 'Kelembagaan::index');
$routes->get('sides/kelembagaan/show/(:num)', 'Kelembagaan::show/$1');
$routes->post('sides/kelembagaan/update/(:num)', 'Kelembagaan::updated/$1');
$routes->get('sides/kelembagaan/delete/(:num)', 'Kelembagaan::destroy/$1');
$routes->get('sides/kelembagaan/foto/(:num)', 'Kelembagaan::foto/$1'); //tampil foto

//route pemerintah-desa
$routes->get('sides/pemerintah-desa/create', 'PemerintahDesa::create'); //tampil form tambah
$routes->post('sides/pemerintah-desa/save', 'PemerintahDesa::insert');
$routes->get('sides/pemerintah-desa', 'PemerintahDesa::index');
$routes->get('sides/pemerintah-desa/show/(:num)', 'PemerintahDesa::show/$1');
$routes->post('sides/pemerintah-desa/update/(:num)', 'PemerintahDesa::updated/$1');
$routes->get('sides/pemerintah-desa/delete/(:num)', 'PemerintahDesa::destroy/$1');
$routes->get('sides/pemerintah-desa/foto/(:num)', 'PemerintahDesa::foto/$1'); //tampil foto

//route galeri
$routes->get('sides/galeri/create', 'Galeri::create'); //tampil form tambah
$routes->post('sides/galeri/save', 'Galeri::insert');
$routes->get('sides/galeri', 'Galeri::index');
$routes->get('sides/galeri/show/(:num)', 'Galeri::show/$1');
$routes->post('sides/galeri/update/(:num)', 'Galeri::updated/$1');
$routes->get('sides/galeri/delete/(:num)', 'Galeri::destroy/$1');
$routes->get('sides/galeri/foto/(:num)', 'Galeri::foto/$1'); //tampil foto

//services akun
$routes->get('services/akun/(:any)', 'Akun::checkUser/$1');

//route komentar
$routes->get('sides/komentar', 'Komentar::index');
$routes->get('sides/komentar/delete/(:num)', 'Komentar::destroy/$1');
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

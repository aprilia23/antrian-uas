<?php

namespace Config;

use App\Controllers\HomeController;
use App\Controllers\PelayananController;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
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
$routes->get('/', 'HomeController::index');
// Route For Pelayanan
$routes->get('/pelayanan', 'PelayananController::index');
$routes->get('/pelayanan/create', 'PelayananController::create');
$routes->post('/pelayanan/store', 'PelayananController::store');
$routes->get('/pelayanan/edit/(:num)', 'PelayananController::edit/$1');
$routes->post('/pelayanan/update/(:num)', 'PelayananController::update/$1');
$routes->get('/pelayanan/delete/(:num)', 'PelayananController::delete/$1');


// Route for Loket
$routes->get('/loket', 'LoketController::index');
$routes->get('/loket/create', 'LoketController::create');
$routes->post('/loket/store', 'LoketController::store');
$routes->get('/loket/edit/(:num)', 'LoketController::edit/$1');
$routes->post('/loket/update/(:num)', 'LoketController::update/$1');
$routes->get('/loket/delete/(:num)', 'LoketController::delete/$1');

// Route for Antrian
$routes->get('/antrian', 'AntrianController::index');
$routes->get('/antrian/create', 'AntrianController::create');
$routes->post('/antrian/store', 'AntrianController::store');
$routes->get('/antrian/edit/(:num)', 'AntrianController::edit/$1');
$routes->post('/antrian/update/(:num)', 'AntrianController::update/$1');
$routes->get('/antrian/delete/(:num)', 'AntrianController::delete/$1');


$routes->group('', ['filter' => 'login'], function ($routes) {
	$routes->get('/', 'HomeController::index');
	// Route For Pelayanan
	$routes->get('/pelayanan', 'PelayananController::index');
	$routes->get('/pelayanan/create', 'PelayananController::create');
	$routes->post('/pelayanan/store', 'PelayananController::store');
	$routes->get('/pelayanan/edit/(:num)', 'PelayananController::edit/$1');
	$routes->post('/pelayanan/update/(:num)', 'PelayananController::update/$1');
	$routes->get('/pelayanan/delete/(:num)', 'PelayananController::delete/$1');


	// Route for Loket
	$routes->get('/loket', 'LoketController::index');
	$routes->get('/loket/create', 'LoketController::create');
	$routes->post('/loket/store', 'LoketController::store');
	$routes->get('/loket/edit/(:num)', 'LoketController::edit/$1');
	$routes->post('/loket/update/(:num)', 'LoketController::update/$1');
	$routes->get('/loket/delete/(:num)', 'LoketController::delete/$1');

	// Route for Antrian
	$routes->get('/antrian', 'AntrianController::index');
	$routes->get('/antrian/create', 'AntrianController::create');
	$routes->post('/antrian/store', 'AntrianController::store');
	$routes->get('/antrian/edit/(:num)', 'AntrianController::edit/$1');
	$routes->post('/antrian/update/(:num)', 'AntrianController::update/$1');
	$routes->get('/antrian/delete/(:num)', 'AntrianController::delete/$1');
});

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

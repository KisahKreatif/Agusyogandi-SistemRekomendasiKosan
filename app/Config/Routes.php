<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
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

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Pages::index');
$routes->get('/Pages/login', 'Pages::login');

$routes->get('/HomePages/(:segment)', 'Pages::detail/$1');

$routes->get('/Homeadmin', 'Alternatif::index');
$routes->get('/BRadmin', 'Alternatif::index2');
$routes->get('/Homeadmin/(:segment)', 'Alternatif::detail/$1');
$routes->get('/Input', 'Alternatif::input');
$routes->get('/Edit/(:segment)', 'Alternatif::edit/$1');

$routes->get('/CRUD', 'CRUD::create');
$routes->get('/CRUD/update', 'CRUD::update');
$routes->get('/CRUD/(:segment)', 'CRUD::delete/$1');

$routes->get('/Metode', 'Metode::AmbilData');
$routes->get('/Alternatif/login', 'Alternatif::index');





/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

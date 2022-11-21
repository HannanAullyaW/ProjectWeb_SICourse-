<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('create-db', function () {
    $forge = \Config\Database::forge();
    if ($forge->createDatabase('courseus')) {
        echo 'Database created!';
    }
});

$routes->get('/daftar', 'Auth::register');
$routes->post('/auth/prosesMasuk', 'Auth::prosesMasuk');
$routes->get('/masuk', 'Auth::masuk');
$routes->post('/auth/regisProcess', 'Auth::regisProcess');
$routes->get('/logout', 'Auth::logout');

$routes->get('/', 'LandingpageController::index');
$routes->get('/beranda', 'LandingpageController::index');
$routes->get('/testimoni', 'LandingpageController::testimoni');
$routes->get('/hubungikami', 'LandingpageController::hubungikami');

$routes->get('/dashboard/pelajaran', 'DashboardController::pelajaran');
$routes->get('/dashboard/pengajar', 'DashboardController::pengajar');
$routes->get('/dashboard/beranda', 'DashboardController::beranda');


$routes->get('/admin', 'LoginAdmin::masuk');
$routes->get('/admin/register', 'LoginAdmin::register');
$routes->post('/admin/prosesMasuk', 'LoginAdmin::prosesMasuk');
$routes->post('/admin/regisProcess', 'LoginAdmin::regisProcess');
$routes->get('/admin/logout', 'LoginAdmin::logout');
$routes->get('/admin/dashboard', 'Admin::dashboard');
$routes->get('/admin/listpengajar', 'Admin::listpengajar');
$routes->get('/admin/listpelajaran', 'Admin::listpelajaran');
$routes->get('/admin/editpelajaran/(:num)', 'Admin::editpelajaran/$1');
$routes->get('/admin/editpengajar/(:num)', 'Admin::editpengajar/$1');
$routes->post('/admin/updatepengajar/(:num)', 'Admin::updatepengajar/$1');
$routes->post('/admin/updatepelajaran/(:num)', 'Admin::updatepelajaran/$1');
$routes->match(['get', 'post'], '/admin/tambahpengajar', 'Admin::uploadPengajar');
$routes->match(['get', 'post'], '/admin/tambahpelajaran', 'Admin::tambahPelajaran');
$routes->delete('/admin/hapuspengajar/(:num)', 'Admin::hapuspengajar/$1');
$routes->delete('/admin/hapuspelajaran/(:num)', 'Admin::hapuspelajaran/$1');


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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

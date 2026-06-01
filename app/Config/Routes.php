<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//sebagai alamat, nama file dari controller :: nama function di contoller
$routes->get('/', 'Home::index');

// AWAL FLOW PEMBELIAN TICKET
// untuk ngakses ke information ticket
$routes->get('/ticket', 'Tickets::index');

// untuk ngakses ke form ticket
// $routes->get('/ticket/form', 'Tickets::checkout');

$routes->get(
    '/ticket/checkout/(:num)',
    'Tickets::checkout/$1'
);
// AKHIR FLOW PEMBELIAN TICKET

$routes->post('/payment', 'Checkout::process');

$routes->post('/payment/succes', 'Checkout::succes');

$routes->group('admin', function($routes){

    // a nya harus kecil meyesuaikan nama folder
    $routes->get('dashboard', 'Admin\Dashboard::index');

    $routes->get('ticket', 'Admin\Ticket::index');

    $routes->get('transaction', 'Admin\Transaction::index');

    $routes->get('user', 'Admin\User::index');

});


// jadi dibagian Tickets nama file di controllers
// terus ::ticket itu di public functuon "ticket()"
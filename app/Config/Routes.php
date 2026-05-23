<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/ticket', 'Tickets::ticket');

$routes->group('admin', function($routes){

    // a nya harus kecil meyesuaikan nama folder
    $routes->get('dashboard', 'Admin\Dashboard::index');

    $routes->get('ticket', 'Admin\Ticket::index');

    $routes->get('transaction', 'Admin\Transaction::index');

    $routes->get('user', 'Admin\User::index');

});


// jadi dibagian Tickets nama file di controllers
// terus ::ticket itu di public functuon "ticket()"
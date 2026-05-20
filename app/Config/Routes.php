<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/ticket', 'Tickets::ticket');


// jadi dibagian Tickets nama file di controllers
// terus ::ticket itu di public functuon "ticket()"
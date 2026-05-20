<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/ticket', 'Ticket::index');

$routes->get('/lineup', 'Lineup::index');

$routes->get('/login', 'Auth::login');

$routes->get('/register', 'Auth::register');
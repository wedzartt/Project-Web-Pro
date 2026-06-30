<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//sebagai alamat, nama file dari controller :: nama function di contoller
// 1. USER PERTAMA KALI MENGAKSES WEB
$routes->get('/', 'Home::index');

// AWAL FLOW PEMBELIAN TICKET
// 2. USER MENGAKSES HALAMAN INFORMASI TICKET
$routes->get('/ticket', 'Tickets::index');

// 3, USER MEMILIH TICKET MANA YANG MAU DIBELI 
$routes->get(
    '/ticket/checkout/(:num)',
    'Tickets::checkout/$1'
);

// 4. SESUAI DENGAN TICKET MANA YANG MAU DIBELI
$routes->get(
    '/payment/succes/(:num)',
    'Payment::succes/$1'
);

// 5. MEMBALIKAN DATA TICKET YANG SUDAH DIAMBIL DI HALAMAN CHECKOUT
$routes->post(
    '/payment/process',
    'Payment::processPayment'
);

// 6. ORDER SUMMARY
$routes->post('/payment', 'Checkout::process');

// 7. PAYMNENT SUCCES
$routes->post('/payment/succes', 'Checkout::succes');
// AKHIR FLOW PEMBELIAN TICKET


// LOGIN ADMIN
$routes->get('/admin/login', 'Admin\Auth::index');
$routes->post('/admin/login', 'Admin\Auth::login');
$routes->get('/admin/logout', 'Admin\Auth::logout');
// AKHIR FLOW LOGIN ADMIN

// ADMIN
$routes->group('admin', 
    [
        'filter' => 'adminAuth'
    ],

    function ($routes) {

    // ADMIN VIEW DASHBOARD
    $routes->get('dashboard', 'Admin\Dashboard::index');

    // ADMIN VIEW TICKET MANAGEMENT
    $routes->get('ticket', 'Admin\Ticket::index');

    // ADMIN VIEW TICKET TRANSCATION 
    $routes->get('transaction', 'Admin\Transaction::index');

    // ADMIN VIEW TICKET USER DATA
    $routes->get('user', 'Admin\User::index');
});


// jadi dibagian Tickets nama file di controllers
// terus ::ticket itu di public functuon "ticket()"
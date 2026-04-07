<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/home', 'page::home');
$routes->get('/about', 'page::about');
$routes->get('/contact', 'page::contact');
$routes->get('/faqs', 'page::faqs');
$routes->get('/tos', 'page::tos');

$routes->get('/', 'Artikel::index');
$routes->get('/artikel', 'Artikel::index');
$routes->get('/artikel/(:any)', 'Artikel::view/$1');

// Routing Menu Admin
$routes->group('admin', function($routes){
    $routes->get('artikel', 'Artikel::admin_index');
    $routes->get('artikel/add', 'Artikel::add');
    $routes->post('artikel/add', 'Artikel::add');
    $routes->get('artikel/edit/(:any)', 'Artikel::edit/$1');
    $routes->post('artikel/edit/(:any)', 'Artikel::edit/$1');
    $routes->get('artikel/delete/(:any)', 'Artikel::delete/$1');
});

// Konfigurasi login dan logout
$routes->get('user/login', 'User::login');
$routes->post('user/login', 'User::login');
$routes->get('user/logout', 'User::logout');
<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

$routes->get('/', 'AuthController::login');

$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::processLogin');
$routes->get('/logout', 'AuthController::logout');

$routes->group('books', ['filter' => 'auth'], function ($routes) {
    $routes->get('/', 'BookController::index');
    $routes->get('create', 'BookController::create');
    $routes->post('store', 'BookController::store');
    $routes->get('edit/(:num)', 'BookController::edit/$1');
    $routes->post('update/(:num)', 'BookController::update/$1');
    $routes->get('delete/(:num)', 'BookController::delete/$1');
});
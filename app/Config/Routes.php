<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Auth routes
$routes->get('/', 'AuthController::login');
$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::attemptLogin');
$routes->get('logout', 'AuthController::logout');


// Employee routes - grouped
$routes->group('employees', ['filter' => 'auth'], function($routes){
    $routes->get('/', 'EmployeesController::index');
    // store employee route
    $routes->post('store', 'EmployeesController::store');
    $routes->get('form', 'EmployeesController::create');
    // update employee route
    $routes->post('update/(:num)', 'EmployeesController::update/$1');
    $routes->get('edit/(:num)', 'EmployeesController::edit/$1');
    $routes->get('delete/(:num)', 'EmployeesController::delete/$1');
    $routes->get('index', 'EmployeesController::index');
    // $routes->get('index', 'EmployeesController::index');
    
});

// $routes->get('/', 'Home::index');







// $routes->get('employees/test', 'EmployeesController::test');


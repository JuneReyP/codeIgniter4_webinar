<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('employees', 'EmployeesController::index');
$routes->get('employees/index', 'EmployeesController::index');
$routes->get('employees/form', 'EmployeesController::create');

// store employee route
$routes->post('employees/store', 'EmployeesController::store');

// update employee route
$routes->post('employees/update/(:num)', 'EmployeesController::update/$1');

$routes->get('employees/edit/(:num)', 'EmployeesController::edit/$1');
$routes->get('employees/delete/(:num)', 'EmployeesController::delete/$1');


$routes->get('employees/test', 'EmployeesController::test');

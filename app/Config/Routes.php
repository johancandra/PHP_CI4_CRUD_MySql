<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('admin', 'AdminController::index');
$routes->get('admin/create', 'AdminController::create');
$routes->post('admin/store', 'AdminController::store');
$routes->get('admin/edit/(:num)', 'AdminController::edit/$1');
$routes->post('admin/update/(:num)', 'AdminController::update/$1');
$routes->get('admin/delete/(:num)', 'AdminController::delete/$1');

$routes->get('student', 'StudentController::index');
$routes->get('student/create', 'StudentController::create');
$routes->post('student/store', 'StudentController::store');
$routes->get('student/edit/(:num)', 'StudentController::edit/$1');
$routes->post('student/update/(:num)', 'StudentController::update/$1');
$routes->get('student/delete/(:num)', 'StudentController::delete/$1');

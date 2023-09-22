<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'Home::index');      // Home = CLASS | index = FUNCTION

$routes->get('/gear1/(:any)', 'ProductController::gear1/$1');
$routes->get('/delete/(:any)', 'ProductController::delete/$1');
$routes->get('/edit/(:any)', 'ProductController::edit/$1');

$routes->get('/gear2', 'ProductController::gear2');
$routes->post('/save', 'ProductController::save');





<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/pos', 'PostController::index');
$routes->get('/pos/create', 'PostController::create');
$routes->post('/pos/store', 'PostController::store');
$routes->get('/pos/edit/(:any)', 'PostController::edit/$1');
$routes->post('/pos/update/(:any)', 'PostController::update/$1');
$routes->delete('/pos/delete/(:any)', 'PostController::destroy/$1');


$routes->get('/comment/show/(:any)', 'CommentController::index/$1');
$routes->get('/comment/create/(:any)', 'CommentController::create/$1');
$routes->post('/comment/store', 'CommentController::store');




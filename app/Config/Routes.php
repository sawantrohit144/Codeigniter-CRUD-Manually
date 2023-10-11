<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->add('table','CreateTable::table');
$routes->post('insert','Insert::insertdata');
$routes->post('update','Update::updatedata');
$routes->post('delete','Delete::deletedata');

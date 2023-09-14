<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/tickets', 'Tickets::index');

$routes->get('/tickets/reports', 'Tickets::reports');

$routes->get('/tickets/new', 'Tickets::reports');

$routes->get('/tickets/checkdb', 'Tickets::checkdb');






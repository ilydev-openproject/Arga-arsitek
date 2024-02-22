<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/layanan', 'Layanan::index');
$routes->get('/portofolio', 'Portofolio::index');
$routes->get('/tim', 'Tim::index');
$routes->get('/tentang', 'Tentang::index');
$routes->get('/kontak', 'Kontak::index');
$routes->get('/term', 'Term::index');
$routes->get('/privacy', 'Privacy::index');
$routes->get('/copyright', 'Copyright::index');

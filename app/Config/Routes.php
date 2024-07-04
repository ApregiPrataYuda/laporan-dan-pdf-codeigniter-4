<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Report::index');
$routes->post('/generateReport', 'Report::generateReport');


$routes->get('/ReportMonth', 'ReportMonth::index');
$routes->get('/Create-Report-Month', 'ReportMonth::Laporan_perbulan');
$routes->get('/Buatpdf', 'Buatpdf::index');
$routes->get('/pdf-make', 'Buatpdf::views');

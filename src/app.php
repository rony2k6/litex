<?php
// litex/src/app.php

// use Symfony\Component\Routing;

// $routes = new Routing\RouteCollection();
// $routes->add('hello', new Routing\Route('/hello/{name}', array(
//     'name' => 'World',
//     '_controller' => function ($request) {
//         return render_template($request);
//     }
// )));
// $routes->add('bye', new Routing\Route('/bye', array(
//     '_controller' => function ($request) {
//         return render_template($request);
//     }
// )));

// return $routes;

use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();
$routes->add('leap_year', new Routing\Route('/is_leap_year/{year}', array(
    'year' => null,
    '_controller' => 'Calendar\Controller\LeapYearController::index',
)));

return $routes;

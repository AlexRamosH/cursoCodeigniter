<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//$routes->get('/libros/(:num)/(:any)' , 'home::index');


//crea todas las rutas CRUD
//$routes->presenter('libros');


//usar en minusculas da pronblemas las mayusculas
//$routes->presenter('Libro');
//$routes->presenter('Categoria');

/* $routes->group('dashboard/' , function($routes){
    $routes->presenter('libros');
    $routes->presenter('categorias');
    
}); */

//solo las agregadas
//$routes->presenter('libros', ['only'=>'index']);

//todas menos las mencionadas
//$routes->presenter('libros', ['except'=>'index']);
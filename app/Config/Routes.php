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



$routes->group('Admin/', function($routes){
    $routes->presenter('Libros',['controller'=>'admin\libros']);
    $routes->presenter('Categorias',['controller'=>'admin\categorias']);
});

$routes->get('usuario/crear','Admin\Usuarios::crear_usuario');
$routes->get('usuario/crear','Admin\Usuarios::verificar_contrasena');
$routes->get('usuario/login','Admin\Usuarios::login');
$routes->post('usuario/login_post','Admin\Usuarios::login_post');
$routes->get('usuario/registro','Admin\Usuarios::register');
$routes->post('usuario/registro_post','Admin\Usuarios::register_post');
$routes->get('usuario/logout','Admin\Usuarios::logout');
$routes->group('api', ['namespace' => 'App\Controllers\Api'], function($routes) { $routes->resource('categorias'); });

$routes->group('api', ['namespace' => 'App\Controllers\Api'], function($routes) { $routes->resource('libros'); });



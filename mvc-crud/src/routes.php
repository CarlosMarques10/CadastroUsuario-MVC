<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/novoUsuario', 'UsuariosController@add');
$router->post('/novoUsuarioAction', 'UsuariosController@addAction');

$router->get('/editar/{id}', 'UsuariosController@editar');
$router->post('/editar/{id}', 'UsuariosController@editarAction');

$router->get('/excluir/{id}', 'UsuariosController@deletar');
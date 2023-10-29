<?php

$router->get('/', 'index.php');
$router->get('/about', 'about.php');
$router->get('/contact', 'contact.php');

$router->get('/register', 'registration/create.php')->only('admin');
$router->post('/register', 'registration/store.php')->only('admin');

$router->get('/filiados', 'cadastro/index.php')->only('admin');
$router->get('/dependentes', 'cadastro/index_dependentes.php')->only('admin');

$router->get('/delete', 'cadastro/destroy.php')->only('admin');
$router->delete('/delete', 'cadastro/destroy.php')->only('admin');

$router->get('/edit', 'cadastro/edit.php')->only('admin');
$router->post('/edit', 'cadastro/update.php')->only('admin');

$router->get('/edit/dependente', 'cadastro/edit_dependente.php')->only('admin');
$router->post('/edit/dependente', 'cadastro/update_dependente.php')->only('admin');

$router->get('/delete/dependente', 'cadastro/destroy_dependente.php')->only('admin');
$router->delete('/delete/dependente', 'cadastro/destroy_dependente.php')->only('admin');

$router->get('/filiado', 'cadastro/show.php')->only('auth');

$router->get('/login', 'session/create.php')->only('guest');
$router->post('/session', 'session/store.php')->only('guest');
$router->delete('/session', 'session/destroy.php')->only('auth');

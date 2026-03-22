<?php

    require_once '../app/core/Router.php';
    
    use App\Core\Router;

    $router = new Router();

    // Register Routes
    $router->add('GET', '/all', 'StudentController', 'index');
    $router->add('GET', '/create', 'StudentController', 'create');
    $router->add('GET', '/detail', 'StudentController', 'detail');

    $router->run();

?>
<?php

    require_once '../app/core/Router.php';
    
    use App\Controllers\StudentController;
    use App\Controllers\DiscussionController;
    use App\Core\Router;

    $router = new Router();

    // Register Routes
    $router->add('GET', '/login', 'AuthController', 'login');
    $router->add('GET', '/register', 'AuthController', 'signup');

    $router->add('GET', '/topics', 'DiscussionController', 'index');
    $router->add('GET', '/topics/create', 'DiscussionController', 'create');
    $router->add('GET', '/discussions', 'DiscussionController', 'all');
    $router->add('GET', '/discussions/{id}', 'DiscussionController', 'detail');
    $router->add('GET', '/trending', 'DiscussionController', 'trending');

    $router->add('GET', '/classes', 'ClassController', 'kelasSaya');
    $router->add('GET', '/subjects', 'SubjectController', 'mataPelajaran');
    $router->add('GET', '/settings', 'SettingController', 'pengaturan');

    $router->run();

?>
<?php

require_once '../app/core/Router.php';

use App\Core\Router;

$router = new Router();

// Auth
$router->add('GET',  '/login',    'StudentController', 'login');
$router->add('GET',  '/signup',   'StudentController', 'signup');

// Home / Beranda
$router->add('GET',  '/topic',    'DiscussionController', 'index');
$router->add('GET',  '/home',     'DiscussionController', 'index');

// Semua Diskusi
$router->add('GET',  '/all',              'DiscussionController', 'all');
$router->add('GET',  '/discussions',      'DiscussionController', 'all');
$router->add('GET',  '/discussions/{id}', 'DiscussionController', 'detail');

// Buat Topik Baru
$router->add('GET',  '/create',       'DiscussionController', 'create');
$router->add('POST', '/discussions',  'DiscussionController', 'store');

// Hapus Topik (method spoofing: POST + _method=DELETE)
$router->add('DELETE', '/discussions/{id}', 'DiscussionController', 'destroy');

// Trending
$router->add('GET',  '/trending',         'DiscussionController', 'trending');

// Kelas, Mata Pelajaran, Pengaturan
$router->add('GET',  '/classes',          'ClassController',   'kelasSaya');
$router->add('GET',  '/subjects',         'SubjectController', 'mataPelajaran');
$router->add('GET',  '/settings',         'SettingController', 'pengaturan');

$router->run();
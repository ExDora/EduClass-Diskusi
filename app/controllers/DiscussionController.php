<?php

    namespace App\Controllers;
    class DiscussionController
    {
        public function index()
        {
            require_once '../app/views/students/index.php';
        }
        public function all()
        {
           require_once '../app/views/students/all.php';
        }
        public function detail()
        {
            require_once '../app/views/students/detail.php';
        }
        public function trending()
        {
            require_once '../app/views/students/trending.php';
        }
        public function create()
        {
           require_once '../app/views/students/create.php';
        }
    }
?>
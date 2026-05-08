<?php

    namespace App\Controllers;
    class StudentController
    {
        public function login()
        {
            require_once '../app/views/students/login.php';
        }
        
        public function signup()
        {
            require_once '../app/views/students/sign-up.php';
        }
        // public function show(string $id)
        // {
        //    require_once '../app/views/students/show.php';
        // }
    }
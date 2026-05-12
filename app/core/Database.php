<?php

namespace App\Core;

require_once '../app/config/database.php';

class Database
{
    protected $connection;

    public function __construct()
    {
        $this->connection = mysqli_connect(
            DB_HOST,
            DB_USER,
            DB_PASSWORD,
            DB_NAME
        );

        if (!$this->connection) {
            die('Error: Gagal terhubung ke database.');
        }

        mysqli_set_charset($this->connection, 'utf8mb4');
    }
}
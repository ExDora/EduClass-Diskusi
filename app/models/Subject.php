<?php

namespace App\Models;

require_once '../app/core/Database.php';

use App\Core\Database;

class Subject extends Database
{
    protected $table = 'mata_pelajaran';

    public function getAll()
    {
        $subjects = [];

        $query = "SELECT * FROM {$this->table} ORDER BY nama ASC";

        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()) {
            $subjects[] = $row;
        }

        return $subjects;
    }
}
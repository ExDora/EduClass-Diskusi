<?php

namespace App\Models;

require_once '../app/core/Database.php';

use App\Core\Database;

class Discussion extends Database
{
    protected $table = 'diskusi';

    // Mengambil semua diskusi beserta nama pembuat dan mata pelajaran
    public function getAll()
    {
        $discussions = [];

        $query = "
            SELECT d.*, u.nama AS nama_user, u.inisial, u.avatar_class,
                   m.nama AS nama_mapel, m.slug
            FROM {$this->table} d
            JOIN users u ON u.id = d.user_id
            JOIN mata_pelajaran m ON m.id = d.mapel_id
            ORDER BY d.created_at DESC
        ";

        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()) {
            $discussions[] = $row;
        }

        return $discussions;
    }

    // Mengambil satu diskusi berdasarkan id
    public function getById(int $id)
    {
        $query = "
            SELECT d.*, u.nama AS nama_user, u.inisial, u.avatar_class,
                   m.nama AS nama_mapel, m.slug
            FROM {$this->table} d
            JOIN users u ON u.id = d.user_id
            JOIN mata_pelajaran m ON m.id = d.mapel_id
            WHERE d.id = ?
        ";

        $stmt = $this->connection->prepare($query);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_assoc();
    }

    // Menyimpan diskusi baru
    public function insert(array $data)
    {
        $user_id  = intval($data['user_id']);
        $mapel_id = intval($data['mapel_id']);
        $judul    = htmlspecialchars(trim($data['judul']));
        $isi      = htmlspecialchars(trim($data['isi']));

        $query = "INSERT INTO {$this->table} (user_id, mapel_id, judul, isi) VALUES (?, ?, ?, ?)";
        $stmt  = $this->connection->prepare($query);
        $stmt->bind_param('iiss', $user_id, $mapel_id, $judul, $isi);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            header('Location: /discussions');
            exit();
        }

        header('Location: /topics/create?error=gagal');
        exit();
    }

    // Menghapus diskusi berdasarkan id
    public function delete(int $id)
    {
        $query = "DELETE FROM {$this->table} WHERE id = ?";
        $stmt  = $this->connection->prepare($query);
        $stmt->bind_param('i', $id);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            header('Location: /discussions');
            exit();
        }

        header('Location: /discussions?error=gagal_hapus');
        exit();
    }

    // Mengambil semua mata pelajaran untuk dropdown
    public function getMapel()
    {
        $mapel = [];

        $query = "SELECT id, nama FROM mata_pelajaran ORDER BY nama ASC";
        $stmt  = $this->connection->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()) {
            $mapel[] = $row;
        }

        return $mapel;
    }
}
<?php

namespace App\Controllers;

require_once '../app/core/Controller.php';
require_once '../app/models/Discussion.php';

use App\Core\Controller;
use App\Models\Discussion;

class DiscussionController extends Controller
{
    public function index()
    {
        $model       = new Discussion();
        $discussions = $model->getAll();

        $this->view('students.index', ['discussions' => $discussions]);
    }

    public function all()
    {
        $model       = new Discussion();
        $discussions = $model->getAll();

        $this->view('students.all', ['discussions' => $discussions]);
    }

    public function detail(string $id)
    {
        $id    = intval($id);
        $model = new Discussion();
        $topic = $model->getById($id);

        if (!$topic) {
            http_response_code(404);
            echo '<h1>Topik tidak ditemukan</h1>';
            return;
        }

        $this->view('students.detail', ['topic' => $topic]);
    }

    public function trending()
    {
        $this->view('students.trending');
    }

    public function create()
    {
        $model = new Discussion();
        $mapel = $model->getMapel();

        $this->view('students.create', ['mapel' => $mapel]);
    }

    public function store()
    {
        // Sementara gunakan user_id = 1 (user yang sedang login)
        $_POST['user_id'] = 1;

        $model = new Discussion();
        $model->insert($_POST);
    }

    public function destroy(string $id)
    {
        $id    = intval($id);
        $model = new Discussion();
        $model->delete($id);
    }
}
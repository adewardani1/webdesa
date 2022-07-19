<?php

namespace App\Controllers;

use App\Models\ModelKomentar;
use CodeIgniter\Validation\Rules;
use Config\Validation;

class Komentar extends BaseController
{
    public function __construct()
    {
        $this->model = new ModelKomentar();
    }
    public function index()
    {
        $data = [
            'komentar' => $this->model->show()
        ];

        if ($data) {
            return view('sides/dashbord/komentar/index', $data);
        } else {
            return false;
        }
    }

    public function destroy($id)
    {
        $deleteKomentarById = $this->model->deleteById($id);

        if ($deleteKomentarById) {
            session()->setFlashdata('pesan_hapus', true);
            return redirect()->to('sides/komentar');
        } else {
            return false;
        }
    }

    public function logout()
    {
        session_destroy();
        return redirect()->to('auth');
    }
}

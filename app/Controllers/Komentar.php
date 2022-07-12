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
            'komentar' => $this->model->show(),
            'namaKomentar' => $this->model->getNama()
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

    public function search()
    {
        $search = $this->request->getPost('search');
        if (empty($search)) {
            return redirect()->to('sides/komentar');
        } else {
            $data = [
                'komentar' => $this->model->search($search),
                'namaKomentar' => $this->model->getNama()
            ];

            return view('sides/dashbord/komentar/search', $data);
        }
    }

    public function logout()
    {
        session_destroy();
        return redirect()->to('auth');
    }
}

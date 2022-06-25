<?php

namespace App\Controllers;

use App\Models\ModelAspirasiWarga;

class AspirasiWarga extends BaseController
{
    public function __construct()
    {
        $this->model = new ModelAspirasiWarga();
    }
    public function index()
    {
        $data = [
            'aspirasi' => $this->model->show()
        ];

        if ($data) {
            return view('sides/dashbord/aspirasi_warga/index', $data);
        } else {
            return false;
        }
    }

    public function delete($id)
    {
        $model = $this->model->deleteById($id);

        if ($model) {
            return redirect()->to('sides/aspirasi');
        } else {
            session()->setFlashdata('gagal', true);
            return redirect()->to('sides/aspirasi');
        }
    }
}

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

    public function show($id)
    {
        $data = [
            'penduduk' => $this->model->getAspirasiById($id)
        ];

        if ($data) {
            return view('sides/dashbord/aspirasi_warga/show', $data);
        } else {
            return false;
        }
    }
}

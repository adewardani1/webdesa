<?php

namespace App\Controllers;

use App\Models\ModelSides;

class Sides extends BaseController
{
    public function __construct()
    {
        $this->model = new ModelSides();
    }
    public function index()
    {
        $data = [
            'pendudukPerempuan' => $this->model->countPendudukPerempuan(),
            'pendudukLaki' => $this->model->countPendudukLaki(),
            'akun' => $this->model->countAkun(),
            'pendudukByGender' => $this->model->countPendudukByGender()
        ];

        return view('sides/dashbord/index', $data);
    }

    public function logout()
    {
        session_destroy();
        return redirect()->to('auth');
    }
}

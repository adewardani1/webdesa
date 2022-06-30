<?php

namespace App\Controllers;

use App\Models\ModelHome;

class Home extends BaseController
{
    public function __construct()
    {
        $this->model = new ModelHome();
    }
    public function index()
    {
        $data = [
            'penduduk'          => $this->model->getCountPenduduk(),
            'pendudukPerempuan' => $this->model->getCountPendudukPerempuan(),
            'pendudukLaki'      => $this->model->getCountPendudukLaki(),
            'beritaTerkini'     => $this->model->getNewsNow()
        ];

        return view('sides/site/index', $data);
    }
}

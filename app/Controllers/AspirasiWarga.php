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
            'aspirasi' => $this->model->show(),
            'namaDepan' => $this->model->getNamaDepan()
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

    public function destroy($id)
    {
        $delete = $this->model->deleteById($id);

        if ($delete) {
            session()->setFlashdata('pesan_hapus', true);
            return redirect()->to('sides/aspirasi');
        }
    }

    public function search()
    {
        $search = $this->request->getPost('search');
        if (empty($search)) {
            return redirect()->to('sides/aspirasi');
        } else {
            $data = [
                'aspirasi' => $this->model->search($search),
                'namaDepan' => $this->model->getNamaDepan()
            ];

            return view('sides/dashbord/aspirasi_warga/search', $data);
        }
    }
}

<?php

namespace App\Controllers;

use App\Models\ModelPenduduk;

class Penduduk extends BaseController
{
    public function __construct()
    {
        $this->model = new ModelPenduduk();
    }

    //return view add form
    public function create()
    {
        return view('sides/dashbord/penduduk/create');
    }

    public function index()
    {
        $data = [
            'penduduk' => $this->model->show()
        ];

        if ($data) {
            return view('sides/dashbord/penduduk/index', $data);
        } else {
            return false;
        }
    }

    public function show($id)
    {
        $data = [
            'penduduk' => $this->model->getPendudukById($id)
        ];

        return view('sides/dashbord/penduduk/show', $data);
    }

    public function insert()
    {
        $tombol = $this->request->getPost('submit');
        if (isset($tombol)) {
            $data = [
                "nama" => $this->request->getPost('nama'),
                "no_ktp" => $this->request->getPost('no_ktp'),
                "jenis_kelamin" => $this->request->getPost('jenis_kelamin'),
                "desa" => $this->request->getPost('desa'),
                "dusun" => $this->request->getPost('dusun'),
                "rt" => $this->request->getPost('rt'),
                "rw" => $this->request->getPost('rw'),
                "status" => $this->request->getPost('status'),
                "pendidikan" => $this->request->getPost('pendidikan'),
                "agama" => $this->request->getPost('agama'),
                "created_at" => date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s'))),
                "updated_at" => date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s')))
            ];
        }

        $simpan = $this->model->insert($data);

        if ($simpan) {
            session()->setFlashdata('pesan_insert', 'data berhasil di tambahkan');
            return redirect()->to('sides/penduduk');
        } else {
            return false;
        }
    }

    public function updated($id)
    {

        $tombol = $this->request->getPost('submit');

        if (isset($tombol)) {
            $data = [
                "nama" => $this->request->getPost('nama'),
                "no_ktp" => $this->request->getPost('no_ktp'),
                "jenis_kelamin" => $this->request->getPost('jenis_kelamin'),
                "desa" => $this->request->getPost('desa'),
                "dusun" => $this->request->getPost('dusun'),
                "rw" => $this->request->getPost('rt'),
                "status" => $this->request->getPost('status'),
                "pendidikan" => $this->request->getPost('pendidikan'),
                "agama" => $this->request->getPost('agama'),
                "created_at" => date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s'))),
                "updated_at" => date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s')))
            ];

            $simpan = $this->model->updateById($data, $id);
            if ($simpan) {
                return redirect()->to('sides/penduduk');
            } else {
                return false;
            }
        }
    }

    public function destroy($id)
    {
        $delete = $this->model->delete(['id' => $id]);
        if ($delete) {
            session()->setFlashdata('pesan_hapus', true);
            return redirect()->to('sides/penduduk');
        } else {
            return false;
        }
    }
}

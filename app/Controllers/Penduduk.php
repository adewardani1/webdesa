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
            'penduduk' => $this->model->show(),
            'namaPenduduk' => $this->model->getNamaPenduduk()
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
        $validation = $this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'nama wajib di isi',
                ]
            ],

            'no_ktp' => [
                'rules' => 'required|integer|min_length[16]|max_length[16]',
                'errors' => [
                    'required' => 'nomor ktp wajib di isi',
                    'min_length' => 'Nomor KTP minimal harus 16 angka',
                    'max_length' => 'Nomor KTP tidak lebih dari 16 angka'
                ]
            ],

            'jenis_kelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'jenis kelamin wajib di isi',
                ]
            ],

            'desa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'desa wajib di isi',
                ]
            ],

            'dusun' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'dusun wajib di isi',
                ]
            ],

            'rt' => [
                'rules' => 'required|integer|min_length[1]|max_length[2]',
                'errors' => [
                    'required' => 'Rt wajib di isi',
                    'min_length' => 'Nomor Rt minimal 1 angka',
                    'max_length' => 'Nomor Rt maximal 2 angka'
                ]
            ],

            'rw' => [
                'rules' => 'required|integer|min_length[1]|max_length[2]',
                'errors' => [
                    'required' => 'Rw wajib di isi',
                    'min_length' => 'Nomor Rw minimal 1 angka',
                    'max_length' => 'Nomor Rw maximal 2 angka'
                ]
            ],

            'status' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'status wajib di isi',
                ]
            ],

            'pendidikan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'pendidikan wajib di isi',
                ]
            ],

            'agama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'agama wajib di isi',
                ]
            ],
        ]);

        if (!$validation) {
            return redirect()->to('sides/penduduk/create')->withInput();
        } else {
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

            $simpan = $this->model->insert($data);

            if ($simpan) {
                session()->setFlashdata('pesan_insert', 'data berhasil di tambahkan');
                return redirect()->to('sides/penduduk');
            } else {
                return false;
            }
        }
    }

    public function updated($id)
    {

        $validation = $this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'nama wajib di isi',
                ]
            ],

            'no_ktp' => [
                'rules' => 'required|integer|min_length[16]|max_length[16]',
                'errors' => [
                    'required' => 'nomor ktp wajib di isi',
                    'min_length' => 'Nomor KTP minimal harus 16 angka',
                    'max_length' => 'Nomor KTP tidak lebih dari 16 angka'
                ]
            ],

            'jenis_kelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'jenis kelamin wajib di isi',
                ]
            ],

            'desa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'desa wajib di isi',
                ]
            ],

            'dusun' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'dusun wajib di isi',
                ]
            ],

            'rt' => [
                'rules' => 'required|integer|min_length[1]|max_length[2]',
                'errors' => [
                    'required' => 'Rt wajib di isi',
                    'min_length' => 'Nomor Rt minimal 1 angka',
                    'max_length' => 'Nomor Rt maximal 2 angka'
                ]
            ],

            'rw' => [
                'rules' => 'required|integer|min_length[1]|max_length[2]',
                'errors' => [
                    'required' => 'Rw wajib di isi',
                    'min_length' => 'Nomor Rw minimal 1 angka',
                    'max_length' => 'Nomor Rw maximal 2 angka'
                ]
            ],

            'status' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'status wajib di isi',
                ]
            ],

            'pendidikan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'pendidikan wajib di isi',
                ]
            ],

            'agama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'agama wajib di isi',
                ]
            ],
        ]);

        if (!$validation) {
            return redirect()->to('sides/penduduk/show/' . $id)->withInput();
        } else {
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

            $simpan = $this->model->updateById($data, $id);

            if ($simpan) {
                session()->setFlashdata('pesanUpdated', true);
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

    public function logout()
    {
        session_destroy();
        return redirect()->to('auth');
    }

    public function search()
    {
        $query = $this->request->getPost('search');

        if (empty($query)) {
            return redirect()->to('sides/penduduk');
        } else {
            $data = [
                'penduduk' => $this->model->search($query),
                'namaPenduduk' => $this->model->getNamaPenduduk()
            ];

            return view('sides/dashbord/penduduk/search', $data);
        }
    }
}

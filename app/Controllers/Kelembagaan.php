<?php

namespace App\Controllers;

use App\Models\ModelKelembagaan;
use CodeIgniter\Validation\Rules;
use Config\Validation;

class Kelembagaan extends BaseController
{
    public function __construct()
    {
        $this->model = new ModelKelembagaan();
    }
    public function index()
    {
        $data = [
            'kelembagaan' => $this->model->show()
        ];

        if ($data) {
            return view('sides/dashbord/kelembagaan/index', $data);
        } else {
            return false;
        }
    }

    public function create()
    {
        return view('sides/dashbord/kelembagaan/create');
    }

    public function insert()
    {
        $validation = $this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'nama kelembagaan harus di isi',
                ]
            ],

            'gambar' => [
                'rules' => 'uploaded[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png]|max_size[gambar,2048]',
                'errors' => [
                    'uploaded' => 'gambar harus di upload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]
            ]
        ]);

        if (!$validation) {
            //session()->setFlashdata('alert', true);
            return redirect()->to('sides/kelembagaan/create')->withInput();
        } else {
            $image = $this->request->getFile('gambar');
            $gambar = $image->getClientName();
            $tempfile = $image->getTempName();

            $upload = $this->uploadImage($tempfile, $gambar);

            $data = [
                'gambar' => $upload,
                'nama' => $this->request->getPost('nama')
                // 'tmp' => $img->getTempName();
                // 'gambar' => $_FILES["gambar"]["name"]
            ];
        }

        $simpan = $this->model->insert($data);
        if (!$simpan) {
            session()->setFlashdata('error', true);
            return redirect()->to('sides/kelembagaan');
        } else {
            session()->setFlashdata('pesan_insert', true);
            return redirect()->to('sides/kelembagaan');
        }
    }

    public function show($id)
    {
        $data = [
            'kelembagaan' => $this->model->getKelembagaanById($id)
        ];

        return view('sides/dashbord/kelembagaan/show', $data);
    }

    public function updated($id)
    {
        $file = empty($_FILES['gambar']['name']);
        if (!$file) {
            $validation = $this->validate([
                'nama' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'nama kelembagaan harus di isi',
                    ]
                ],

                'gambar' => [
                    'rules' => 'uploaded[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png]|max_size[gambar,2048]',
                    'errors' => [
                        'uploaded' => 'gambar harus di upload',
                        'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                        'max_size' => 'Ukuran File Maksimal 2 MB'
                    ]
                ]
            ]);

            if (!$validation) {
                session()->setFlashdata('alert', true);
                return redirect()->to('sides/kelembagaan/show/' . $id);
            } else {
                $image = $this->request->getFile('gambar');
                $gambar = $image->getClientName();
                $tempfile = $image->getTempName();

                $upload = $this->uploadImage($tempfile, $gambar);

                $data = [
                    'gambar' => $upload,
                    'nama' => $this->request->getPost('nama'),
                    'updated_at' => date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s')))
                    // 'tmp' => $img->getTempName();
                    // 'gambar' => $_FILES["gambar"]["name"]
                ];
            }

            $simpan = $this->model->updateById($data, $id);
            if (!$simpan) {
                session()->setFlashdata('error', true);
                return redirect()->to('sides/kelembagaan/show/' . $id);
            } else {
                session()->setFlashdata('pesan_insert', true);
                return redirect()->to('sides/kelembagaan');
            }
        } else {

            $data = [
                'nama' => $_POST['nama'],
                'updated_at' => date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s')))
                // 'tmp' => $img->getTempName();
                // 'gambar' => $_FILES["gambar"]["name"]
            ];

            $simpan = $this->model->updateById($data, $id);
            if (!$simpan) {
                session()->setFlashdata('error', true);
                return redirect()->to('sides/kelembagaan/show/' . $id);
            } else {
                session()->setFlashdata('pesan_insert', true);
                return redirect()->to('sides/kelembagaan');
            }
        }
    }

    public function destroy($id)
    {
        $deleteBeritaById = $this->model->delete(['id' => $id]);

        if ($deleteBeritaById) {
            session()->setFlashdata('pesan_hapus', true);
            return redirect()->to('sides/kelembagaan');
        } else {
            return false;
        }
    }

    public function uploadImage($tempfile, $gambar)
    {
        $locDir = FCPATH . '../private/kelembagaan/' . $gambar;
        $moveDir = move_uploaded_file($tempfile, $locDir);

        if ($moveDir) {
            return $gambar;
        } else {
            return false;
        }
    }

    public function foto($id)
    {
        $model = $this->model->getKelembagaanById($id);
        $path =  FCPATH . '../private/kelembagaan/' . $model->gambar;

        if (file_exists($path)) {
            return $this->response->download($path, null);
        }
    }

    public function logout()
    {
        session_destroy();
        return redirect()->to('auth');
    }
}

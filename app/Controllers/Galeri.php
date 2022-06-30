<?php

namespace App\Controllers;

use App\Models\ModelGaleri;
use CodeIgniter\Validation\Rules;
use Config\Validation;

class Galeri extends BaseController
{
    public function __construct()
    {
        $this->model = new ModelGaleri();
    }
    public function index()
    {
        $data = [
            'galeri' => $this->model->show()
        ];

        if ($data) {
            return view('sides/dashbord/galeri/index', $data);
        } else {
            return false;
        }
    }

    public function create()
    {
        return view('sides/dashbord/galeri/create');
    }

    public function insert()
    {
        $validation = $this->validate([
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
            return redirect()->to('sides/galeri/create')->withInput();
        } else {
            $image = $this->request->getFile('gambar');
            $gambar = $image->getClientName();
            $tempfile = $image->getTempName();

            $upload = $this->uploadImage($tempfile, $gambar);

            $data = [
                'gambar' => $upload,
                // 'tmp' => $img->getTempName();
                // 'gambar' => $_FILES["gambar"]["name"]
            ];
        }

        $simpan = $this->model->insert($data);
        if (!$simpan) {
            session()->setFlashdata('error', true);
            return redirect()->to('sides/galeri');
        } else {
            session()->setFlashdata('pesan_insert', true);
            return redirect()->to('sides/galeri');
        }
    }

    public function show($id)
    {
        $data = [
            'galeri' => $this->model->getGaleriById($id)
        ];

        return view('sides/dashbord/galeri/show', $data);
    }

    public function updated($id)
    {
        $validation = $this->validate([
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
            return redirect()->to('sides/galeri/show/' . $id);
        } else {
            $image = $this->request->getFile('gambar');
            $gambar = $image->getClientName();
            $tempfile = $image->getTempName();

            $upload = $this->uploadImage($tempfile, $gambar);

            $data = [
                'gambar' => $upload,
                'updated_at' => date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s')))
                // 'tmp' => $img->getTempName();
                // 'gambar' => $_FILES["gambar"]["name"]
            ];
        }

        $simpan = $this->model->updateById($data, $id);
        if (!$simpan) {
            session()->setFlashdata('error', true);
            return redirect()->to('sides/galeri/show/' . $id);
        } else {
            session()->setFlashdata('pesan_insert', true);
            return redirect()->to('sides/galeri');
        }
    }

    public function destroy($id)
    {
        $deleteBeritaById = $this->model->delete(['id' => $id]);

        if ($deleteBeritaById) {
            session()->setFlashdata('pesan_hapus', true);
            return redirect()->to('sides/galeri');
        } else {
            return false;
        }
    }

    public function uploadImage($tempfile, $gambar)
    {
        $locDir = FCPATH . 'img/galeri/' . $gambar;
        $moveDir = move_uploaded_file($tempfile, $locDir);

        if ($moveDir) {
            return $gambar;
        } else {
            return false;
        }
    }

    public function foto($id)
    {
        $model = $this->model->getGaleriById($id);
        $path =  FCPATH . 'img/galeri/' . $model->gambar;

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

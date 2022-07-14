<?php

namespace App\Controllers;

use App\Models\ModelPemerintahDesa;
use CodeIgniter\Validation\Rules;
use Config\Validation;

class PemerintahDesa extends BaseController
{
    public function __construct()
    {
        $this->model = new ModelPemerintahDesa();
    }

    public function index()
    {
        $data = [
            'pemerintahDesa' => $this->model->show()->getResult()
        ];

        if ($this->model->show()->getNumRows() > 0) {
            $newdata = [
                'isPemerintahDesa' => true
            ];

            session()->set($newdata);
        } else {
            session()->remove('isPemerintahDesa');
        }


        if ($data) {
            return view('sides/dashbord/pemerintah_desa/index', $data);
        } else {
            return false;
        }
    }

    public function create()
    {
        return view('sides/dashbord/pemerintah_desa/create');
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
            return redirect()->to('sides/pemerintah-desa/create')->withInput();
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
            return redirect()->to('sides/pemerintah-desa');
        } else {

            session()->setFlashdata('pesan_insert', true);
            return redirect()->to('sides/pemerintah-desa');
        }
    }

    public function show($id)
    {
        $data = [
            'pemerintahDesa' => $this->model->getPemerintahDesaById($id)
        ];

        return view('sides/dashbord/pemerintah_desa/show', $data);
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
            return redirect()->to('sides/pemerintah-desa/show/' . $id);
        } else {
            $model = $this->model->getPemerintahDesaById($id);
            $path = FCPATH . 'img/pemerintah_desa/' . $model->gambar;

            if (file_exists($path)) {
                unlink($path);
            }

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
            return redirect()->to('sides/pemerintah-desa/show/' . $id);
        } else {
            session()->setFlashdata('pesan_insert', true);
            return redirect()->to('sides/pemerintah-desa');
        }
    }

    public function destroy($id)
    {
        $model = $this->model->getPemerintahDesaById($id);

        $path = FCPATH . 'img/pemerintah_desa/' . $model->gambar;
        if (file_exists($path)) {
            unlink($path);
            $deletePemerintahDesaById = $this->model->deleteById($id);
            if ($deletePemerintahDesaById) {
                session()->setFlashdata('pesan_hapus', true);
                return redirect()->to('sides/pemerintah-desa');
            } else {
                return false;
            }
        } else {
            session()->setFlashdata('not-found', true);
            return redirect()->to('sides/pemerintah-desa');
        }
    }

    public function uploadImage($tempfile, $gambar)
    {
        $locDir = FCPATH . 'img/pemerintah_desa/' . $gambar;
        $moveDir = move_uploaded_file($tempfile, $locDir);

        if ($moveDir) {
            return $gambar;
        } else {
            return false;
        }
    }

    public function foto($id)
    {
        $model = $this->model->getPemerintahDesaById($id);
        $path =  FCPATH . 'img/pemerintah_desa/' . $model->gambar;

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

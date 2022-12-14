<?php

namespace App\Controllers;

use App\Models\ModelVisiMisi;
use CodeIgniter\Validation\Rules;
use Config\Validation;

class VisiMisi extends BaseController
{
    public function __construct()
    {
        $this->model = new ModelVisiMisi();
    }
    public function index()
    {
        $data = [
            'visiMisi' => $this->model->show()->getResult()
        ];

        if ($this->model->show()->getNumRows() > 0) {
            $newdata = [
                'isVisiMisi' => true
            ];

            session()->set($newdata);
        } else {
            session()->remove('isVisiMisi');
        }

        return view('sides/dashbord/visi_misi/index', $data);
        // if ($data) {
        //     dd($data['count']);
        //     if ($data['count'] > 0) {
        //         $newdata = [
        //             'isCount'  => true
        //         ];

        //         session()->set($newdata);
        //     } else {
        //         session()->remove('isCount');
        //     }
    }

    public function create()
    {
        return view('sides/dashbord/visi_misi/create');
    }

    public function show($id)
    {
        $data = [
            'visiMisi' => $this->model->getGambarVisiMisiById($id)
        ];

        return view('sides/dashbord/visi_misi/show', $data);
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
            return redirect()->to('sides/visimisi/create')->withInput();
        } else {
            $image = $this->request->getFile('gambar');
            $gambar = $image->getClientName();
            $tempfile = $image->getTempName();

            $upload = $this->uploadImage($tempfile, $gambar);

            $data = [
                'gambar' => $upload
                // 'tmp' => $img->getTempName();
                // 'gambar' => $_FILES["gambar"]["name"]
            ];
        }

        session()->remove('isVisiMisi');

        $simpan = $this->model->insert($data);
        if (!$simpan) {
            session()->setFlashdata('error', true);
            return redirect()->to('sides/visimisi');
        } else {

            $newdata = [
                'isVisiMisi' => true,
            ];

            session()->set($newdata);

            session()->setFlashdata('pesan_insert', true);
            return redirect()->to('sides/visimisi');
        }
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
            //session()->setFlashdata('alert', true);
            return redirect()->to('sides/visimisi/show/' . $id)->withInput();
        } else {
            $model = $this->model->getGambarVisiMisiById($id);
            $path = FCPATH . 'img/visi_misi/' . $model->gambar;

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

        $model =  $this->model->updateById($data, $id);;
        if (!$model) {
            session()->setFlashdata('error', true);
            return redirect()->to('sides/visimisi');
        } else {
            session()->setFlashdata('pesan_insert', true);
            return redirect()->to('sides/visimisi');
        }
    }

    public function destroy($id)
    {
        // $deleteVisiMisiById = $this->model->deleteById($id);

        // if ($deleteVisiMisiById) {
        //     session()->setFlashdata('pesan_hapus', true);
        //     return redirect()->to('sides/visimisi');
        // } else {
        //     return false;
        // }
        $model = $this->model->getGambarVisiMisiById($id);

        $path = FCPATH . 'img/visi_misi/' . $model->gambar;
        if (file_exists($path)) {
            unlink($path);
            $deleteVisiMisiById = $this->model->deleteById($id);
            if ($deleteVisiMisiById) {
                session()->setFlashdata('pesan_hapus', true);
                return redirect()->to('sides/visimisi');
            } else {
                return false;
            }
        } else {
            session()->setFlashdata('not-found', true);
            return redirect()->to('sides/visimisi');
        }
    }

    public function uploadImage($tempfile, $gambar)
    {
        $locDir = FCPATH . 'img/visi_misi/' . $gambar;
        $moveDir = move_uploaded_file($tempfile, $locDir);

        if ($moveDir) {
            return $gambar;
        } else {
            return false;
        }
    }

    public function foto($id)
    {
        $model = $this->model->getGambarVisiMisiById($id);
        $path =  FCPATH . 'img/visi_misi/' . $model->gambar;

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

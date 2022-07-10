<?php

namespace App\Controllers;

use App\Models\ModelContent;
use CodeIgniter\Validation\Rules;
use Config\Validation;

class Content extends BaseController
{
    public function __construct()
    {
        $this->model = new ModelContent();
    }
    public function index()
    {
        $data = [
            'berita' => $this->model->show()
        ];

        if ($data) {
            return view('sides/dashbord/content/index', $data);
        } else {
            return false;
        }
    }

    public function create()
    {
        return view('sides/dashbord/content/create');
    }

    public function insert()
    {
        $validation = $this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'judul harus di isi',
                ]
            ],

            'konten' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'isi berita harus di isi',
                ]
            ],

            'jenis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'jenis berita harus di isi',
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
            return redirect()->to('sides/content/create')->withInput();
        } else {
            $image = $this->request->getFile('gambar');
            $gambar = $image->getClientName();
            $tempfile = $image->getTempName();
            $jenis = $this->request->getPost('jenis');

            $upload = $this->uploadImage($tempfile, $gambar, $jenis);

            $data = [
                'gambar' => $upload,
                'judul' => $this->request->getPost('judul'),
                'jenis' => $this->request->getPost('jenis'),
                'konten' => $this->request->getPost('konten'),
                'id_akun' => session()->get('id')
                // 'tmp' => $img->getTempName();
                // 'gambar' => $_FILES["gambar"]["name"]
            ];
        }

        $simpan = $this->model->insert($data);
        if (!$simpan) {
            session()->setFlashdata('error', true);
            return redirect()->to('sides/content');
        } else {
            session()->setFlashdata('pesan_insert', true);
            return redirect()->to('sides/content');
        }
    }

    public function show($id)
    {
        $data = [
            'berita' => $this->model->getBeritaById($id)
        ];

        return view('sides/dashbord/content/show', $data);
    }

    public function updated($id)
    {
        $file = empty($_FILES['gambar']['name']);
        if (!$file) {
            $validation = $this->validate([
                'judul' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'judul harus di isi',
                    ]
                ],

                'konten' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'isi berita harus di isi',
                    ]
                ],

                'jenis' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'jenis berita harus di isi',
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
                return redirect()->to('sides/content/show/' . $id);
            } else {
                $image = $this->request->getFile('gambar');
                $gambar = $image->getClientName();
                $tempfile = $image->getTempName();

                $jenis = $this->request->getPost('jenis');

                $upload = $this->uploadImage($tempfile, $gambar, $jenis);

                $data = [
                    'gambar' => $upload,
                    'judul' => $this->request->getPost('judul'),
                    'jenis' => $this->request->getPost('jenis'),
                    'konten' => $this->request->getPost('konten'),
                    'id_akun' => session()->get('id'),
                    'updated_at' => date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s')))
                    // 'tmp' => $img->getTempName();
                    // 'gambar' => $_FILES["gambar"]["name"]
                ];
            }

            $simpan = $this->model->updateById($data, $id);
            if (!$simpan) {
                session()->setFlashdata('error', true);
                return redirect()->to('sides/content/show/' . $id);
            } else {
                session()->setFlashdata('pesan_insert', true);
                return redirect()->to('sides/content');
            }
        } else {

            $data = [
                'judul' => $_POST['judul'],
                'jenis' => $_POST['jenis'],
                'konten' => $_POST['konten'],
                'updated_at' => date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s')))
                // 'tmp' => $img->getTempName();
                // 'gambar' => $_FILES["gambar"]["name"]
            ];

            $simpan = $this->model->updateById($data, $id);
            if (!$simpan) {
                session()->setFlashdata('error', true);
                return redirect()->to('sides/content/show/' . $id);
            } else {
                session()->setFlashdata('pesan_insert', true);
                return redirect()->to('sides/content');
            }
        }
    }

    public function destroy($id)
    {
        // $deleteBeritaById = $this->model->deleteById($id);
        $model = $this->model->getBeritaById($id);

        $path = FCPATH . 'img/content/' . $model->jenis . '/' . $model->gambar;

        if (file_exists($path)) {
            unlink($path);
            $deleteBeritaById = $this->model->deleteById($id);
            if ($deleteBeritaById) {
                session()->setFlashdata('pesan_hapus', true);
                return redirect()->to('sides/content');
            } else {
                return false;
            }
        } else {
            session()->setFlashdata('not-found', true);
            return redirect()->to('sides/content');
        }
    }

    public function uploadImage($tempfile, $gambar, $jenis)
    {
        $locDir = FCPATH . 'img/content/' . $jenis . '/' . $gambar;
        $moveDir = move_uploaded_file($tempfile, $locDir);

        if ($moveDir) {
            return $gambar;
        } else {
            return false;
        }
    }

    public function foto($id)
    {
        $model = $this->model->getBeritaById($id);
        $path =  FCPATH . 'img/content/' . $model->jenis . '/' . $model->gambar;

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

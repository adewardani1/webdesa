<?php

namespace App\Controllers;

use App\Models\ModelAkun;

class Akun extends BaseController
{
    public function __construct()
    {
        $this->model = new ModelAkun();
    }

    //return view add form
    public function create()
    {
        return view('sides/dashbord/akun/create');
    }

    public function index()
    {
        $data = [
            'akun' => $this->model->show()
        ];

        if ($data) {
            return view('sides/dashbord/akun/index', $data);
        } else {
            return false;
        }
    }

    public function show($id)
    {
        $data = [
            'akun' => $this->model->getAkunById($id)
        ];

        return view('sides/dashbord/akun/show', $data);
    }

    public function insert()
    {
        $validation = $this->validate([
            'nama_depan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Depan tidak boleh kosong',
                ]
            ],

            'nama_belakang' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Belakang tidak boleh kosong',
                ]
            ],

            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Email tidak boleh kosong',
                    'valid_email' => 'Format email salah'
                ]
            ],

            'nomor_hp' => [
                'rules' => 'required|min_length[11]|max_length[13]',
                'errors' => [
                    'required' => 'Nomor Hp tidak boleh kosong',
                    'min_length' => 'Nomor Hp wajib minimal 11 digit',
                    'max_length' => 'Nomor Hp wajib maximal 13 digit',
                ]
            ]

        ]);
        if (!$validation) {
            return redirect()->to('sides/akun/create')->withInput();
        } else {
            $data = [
                "nama_depan" => $this->request->getPost('nama_depan'),
                "nama_belakang" => $this->request->getPost('nama_belakang'),
                "level" => $this->request->getPost('level'),
                "email" => $this->request->getPost('email'),
                "nomor_hp" => $this->request->getPost('nomor_hp'),
                "username" => $this->request->getPost('username'),
                "password" => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
                "created_at" => date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s'))),
                "updated_at" => date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s')))
            ];

            $model = $this->model->insert($data);

            if ($model) {
                session()->setFlashdata('pesan_insert', 'data berhasil di tambahkan');
                return redirect()->to('sides/akun');
            } else {
                return false;
            }
        }
    }

    public function updated($id)
    {
        $validation = $this->validate([
            'nama_depan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Depan tidak boleh kosong',
                ]
            ],

            'nama_belakang' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Belakang tidak boleh kosong',
                ]
            ],

            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Email tidak boleh kosong',
                    'valid_email' => 'Format email salah'
                ]
            ],

            'nomor_hp' => [
                'rules' => 'required|min_length[11]|max_length[13]',
                'errors' => [
                    'required' => 'Nomor Hp tidak boleh kosong',
                    'min_length' => 'Nomor Hp wajib minimal 11 digit',
                    'max_length' => 'Nomor Hp wajib maximal 13 digit',
                ]
            ]

        ]);

        if (!$validation) {
            return redirect()->to('sides/akun/show/' . $id)->withInput();
        } else {
            $data = [
                "nama_depan" => $this->request->getPost('nama_depan'),
                "nama_belakang" => $this->request->getPost('nama_belakang'),
                "level" => $this->request->getPost('level'),
                "email" => $this->request->getPost('email'),
                "nomor_hp" => $this->request->getPost('nomor_hp'),
                "username" => $this->request->getPost('username'),
                "password" => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
                "updated_at" => date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s')))
            ];

            $simpan = $this->model->updateById($data, $id);
            if ($simpan) {
                session()->setFlashdata('pesanUpdated', true);
                return redirect()->to('sides/akun');
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
            return redirect()->to('sides/akun');
        } else {
            return false;
        }
    }

    public function logout()
    {
        session_destroy();
        return redirect()->to('auth');
    }

    public function checkUser($username)
    {
        $model = $this->model->checkUsername($username);
        $isUnique = array('is_unique' => !($model));
        $response['status'] = 200;
        $response['status_message'] = 'data berhasil didapatkan';
        $response['data'] = $isUnique;

        $json = json_encode($response);
        echo $json;
    }

    function numeric_wcomma($str)
    {
        return preg_match('/^[0-9,]+$/', $str);
    }
}

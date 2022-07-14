<?php

namespace App\Controllers;

use App\Models\ModelLogin;

class Login extends BaseController
{
    public function __construct()
    {
        $this->model = new ModelLogin();
    }
    public function index()
    {
        session();
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('sides/dashbord/login/index', $data);
    }

    public function auth()
    {
        $validation = $this->validate([
            'user' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Username tidak boleh kosong',
                ]
            ],

            'pass' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password tidak boleh kosong',
                ]
            ],

        ]);

        if (!$validation) {
            $valid = \Config\Services::validation();
            return redirect()->to('auth')->withInput()->with('validation', $valid);
            //return view('sides/dashbord/login/index');
        } else {
            $user = $this->request->getPost('user');
            $pass = $this->request->getPost('pass');

            $isSucces = $this->prosesAuth($user, $pass);

            return $isSucces;
        }
    }

    public function prosesAuth($user, $pass)
    {
        $model = $this->model->isAkun($user);

        if (!$model) {
            session()->setFlashdata('alert', true);
            return redirect()->to('/auth');
        }
        // dd(password_hash("admin", PASSWORD_BCRYPT));

        if (!password_verify($pass, $model->password)) {
            session()->setFlashdata('alert', true);
            return redirect()->to('/auth');
        } else {
            $newdata = [
                'id'  => $model->id,
                'username'  => $user,
                'password'  => $model->password,
                'nama_depan'  => $model->nama_depan,
                'level'  => $model->level,
                'isLogged' => true
            ];

            session()->set($newdata);

            return redirect()->to('sides');
        }
    }
}

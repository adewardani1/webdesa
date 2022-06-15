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
        return view('sides/dashbord/login/index');
    }

    public function auth()
    {
        $user = $this->request->getPost('user');
        $pass = $this->request->getPost('pass');

        $passModel = $this->isUser($user);
        // dd(password_hash("admin", PASSWORD_BCRYPT));

        if (!password_verify($pass, $passModel)) {
            session()->setFlashdata('alert', true);
            return redirect()->to('/auth');
        } else {
            $newdata = [
                'username'  => $user,
                'password'  => $passModel,
                'isLogged' => true
            ];

            session()->set($newdata);

            return redirect()->to('sides');
        }
    }

    public function isUser($user)
    {
        $model = $this->model->isAkun($user);

        if (!$model) {
            return false;
        } else {
            return $model->password;
        }
    }
}

<?php

namespace App\Controllers;

class Sides extends BaseController
{
    public function index()
    {
        return view('sides/dashbord/index');
    }

    public function logout(){
        session_destroy();
        return redirect()->to('auth');
    }
}

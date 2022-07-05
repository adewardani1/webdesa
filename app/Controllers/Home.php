<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('site/index');
    }

    public function sejarah()
    {
        return view('site/sejarah-desa');
    }

    public function visi_misi()
    {
        return view('site/visi-misi');
    }

    public function pemerintahan_desa()
    {
        return view('site/pemerintahan-desa');
    }

    public function kontak_desa()
    {
        return view('site/kontak');
    }

    public function getBeritaById($id)
    {
        return view('site/berita-detail');
    }
}

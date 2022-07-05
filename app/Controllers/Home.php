<?php

namespace App\Controllers;

use App\Models\ModelHome;

class Home extends BaseController
{
    public function __construct()
    {
        $this->model = new ModelHome();
    }
    public function index()
    {
        $data = [
            'penduduk'          => $this->model->getCountPenduduk(),
            'pendudukPerempuan' => $this->model->getCountPendudukPerempuan(),
            'pendudukLaki'      => $this->model->getCountPendudukLaki(),
            'beritaTerkini'     => $this->model->getNewsNow()
        ];

        return view('sides/site/index', $data);
    }

    public function getGaleri()
    {
        $data = [
            'galeri' => $this->model->getGaleri()
        ];

        return view('sides/site/galeri', $data);
    }

    public function getKelembagaan()
    {
        $data = [
            'kelembagaan' => $this->model->getKelembagaan()
        ];

        return view('sides/site/kelembagaan', $data);
    }

    public function getBeritaById()
    {
        return view('sides/site/berita/berita-detail');
    }

    public function makeRegexTagP($val)
    {
        $re = '/(.*?[\.\!\?]){3}/';
        // Pattern matches anything to a `.!?` three times. \ is added to make it literal 
        $str = $val;
        $subst = '$0<p></p>';

        $result = preg_replace($re, $subst, $str);

        echo $result;
    }
}

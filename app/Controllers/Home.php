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
        $data = [
            'berita' => $this->model->getBeritaById()
        ];
        return view('sides/site/berita/berita-detail');
    }

<<<<<<< HEAD
    public function getBeritaById($id)
=======
    public function makeRegexTagP($val)
>>>>>>> 6c77f0d09efdc9966ac86a8d48b01a76a53345e6
    {
        $re = '/(.*?[\.\!\?]){3}/';
        // Pattern matches anything to a `.!?` three times. \ is added to make it literal 
        $str = $val;
        $subst = '$0<p></p>';

        $result = preg_replace($re, $subst, $str);

        echo $result;
    }
}

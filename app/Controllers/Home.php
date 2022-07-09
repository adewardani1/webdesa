<?php

namespace App\Controllers;

use App\Models\ModelHome;
use CodeIgniter\Validation\Rules;
use Config\Validation;

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
            'beritaTerkini'     => $this->model->getNewsNow(),
            'beritaHeadline'    => $this->model->getNewsHeadline()
        ];

        return view('sides/site/index', $data);
    }

    public function sejarah()
    {
        return view('site/sejarah-desa');
    }

    public function visi_misi()
    {
        return view('site/visi-misi');
    }

    public function getPemerintahDesa()
    {

        return view('sides/site/pemerintahan-desa');
    }

    public function getVisiMisi()
    {

        return view('sides/site/visi-misi');
    }

    public function getKontak()
    {

        return view('sides/site/kontak');
    }

    public function getBerita()
    {
        $data = [
            'berita' => $this->model->getNews()
        ];

        return view('sides/site/berita/index', $data);
    }

    public function getBeritaById($id)
    {
        $data = [
            'berita' => $this->model->getNewsById($id),
            'recentBerita' => $this->model->getRecentNews()
        ];

        return view('sides/site/berita/show', $data);
    }

    public function getEvent()
    {
        $data = [
            'event' => $this->model->getEvent(),
        ];

        return view('sides/site/event/index', $data);
    }

    public function getEventById($id)
    {
        $data = [
            'event' => $this->model->getEventById($id),
            'recentEvent' => $this->model->getRecentEvent()
        ];

        return view('sides/site/event/show', $data);
    }

    public function getPengumuman()
    {
        $data = [
            'pengumuman' => $this->model->getPengumuman()
        ];
        return view('sides/site/pengumuman/index', $data);
    }

    public function getPengumumanById($id)
    {
        $data = [
            'pengumuman' => $this->model->getPengumumanById($id),
            'recentPengumuman' => $this->model->getRecentPengumuman()
        ];
        return view('sides/site/pengumuman/show', $data);
    }

    public function insert($id)
    {
        $data = [
            'komentar' => $this->request->getPost('komentar'),
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'website' => $this->request->getPost('website'),
            'id_berita' => $id,
            'created_at' => date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s'))),
            'updated_at' => date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s')))
        ];

        $this->model->insertKomentar($data);

        session()->setFlashdata('berhasil', true);

        return redirect()->to('/');
    }

    public function kontak_desa()
    {
        return view('site/kontak');
    }
}

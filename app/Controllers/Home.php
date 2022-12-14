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

    public function visi_misi()
    {
        return view('site/visi-misi');
    }

    public function getSejarah()
    {
        return view('sides/site/sejarah-desa');
    }

    public function getPemerintahDesa()
    {
        $data = [
            'pemerintahDesa' => $this->model->getPemerintahDesa()
        ];

        return view('sides/site/pemerintahan-desa', $data);
    }

    public function getVisiMisi()
    {
        $data = [
            'visiMisi' => $this->model->getVisiMisi()
        ];
        return view('sides/site/visi-misi', $data);
    }

    public function getKontak()
    {

        return view('sides/site/kontak');
    }

    public function getLaporanTerkini()
    {

        return view('sides/site/laporan-terkini');
    }


    public function getSurat()
    {

        return view('sides/site/surat');
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

    public function getGaleri()
    {
        $data = [
            'galeri' => $this->model->getGaleri()
        ];

        return view('sides/site/galeri', $data);
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

    public function insertAspirasi()
    {
        $data = [
            'nama_depan' => $this->request->getPost('nama_depan'),
            'nama_belakang' => $this->request->getPost('nama_belakang'),
            'email' => $this->request->getPost('email'),
            'alamat' => $this->request->getPost('alamat'),
            'nomor_hp' => $this->request->getPost('nomor_hp'),
            'pesan' => $this->request->getPost('pesan'),
            'created_at' => date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s'))),
            'updated_at' => date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s')))
        ];

        $simpan = $this->model->insertAspirasi($data);

        if ($simpan) {
            session()->setFlashdata('success', true);
            return redirect()->to('/');
        }
    }


    public function getKelembagaan()
    {
        $data = [
            'kelembagaan' => $this->model->getKelembagaan(),
        ];
        return view('sides/site/kelembagaan', $data);
    }

    public function getDemografi()
    {
        return view('sides/site/demografi');
    }
    public function insertSuratPermohonan()
    {
        $validation = $this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'nama wajib di isi',
                ]
            ],

            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Email tidak boleh kosong',
                    'valid_email' => 'Format email salah'
                ]
            ],

            'nik' => [
                'rules' => 'required|integer|min_length[16]|max_length[16]',
                'errors' => [
                    'required' => 'Nomor NIK wajib di isi',
                    'min_length' => 'Nomor NIK minimal harus 16 angka',
                    'max_length' => 'Nomor NIK tidak lebih dari 16 angka'
                ]
            ],

            'jenis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'jenis wajib di isi',
                ]
            ],

            'pesan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'pesan wajib di isi',
                ]
            ]
        ]);
        if (!$validation) {
            return redirect()->to('surat');
        }

        $data = [
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'nik' => $this->request->getPost('nik'),
            'jenis_surat' => $this->request->getPost('jenis'),
            'pesan' => $this->request->getPost('pesan'),
            "created_at" => date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s'))),
            "updated_at" => date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s')))
        ];

        $simpan = $this->model->insertSurat($data);

        if ($simpan) {
            return redirect()->to('surat');
        } else {
            return false;
        }
    }
}

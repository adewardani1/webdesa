<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelHome extends Model
{
    protected $table = 'komentar';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'komentar',
        'nama',
        'email',
        'website',
        'id_berita'
    ];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function __construct()
    {
        $this->database = db_connect();
    }

    public function getCountPenduduk()
    {
        $sql = "
            SELECT
                COUNT(penduduk.id) AS penduduk
            FROM penduduk
        ";

        return $this->database->query($sql)->getRow();
    }

    public function getNews()
    {
        $sql = "
            SELECT
                berita.id,
                berita.gambar,
                berita.judul,
                berita.konten,
                berita.jenis,
                berita.created_at
            FROM berita
            WHERE berita.jenis = 'news'
        ";

        return $this->database->query($sql)->getResult();
    }

    public function getNewsById($id)
    {
        $sql = "
            SELECT
                akun.nama_depan,
                berita.id,
                berita.gambar,
                berita.judul,
                berita.konten,
                berita.jenis,
                berita.created_at,
                berita.updated_at
            FROM berita
            INNER JOIN akun ON akun.id = berita.id_akun
            WHERE berita.id = '" . $id . "'
        ";

        return $this->database->query($sql)->getRow();
    }

    public function getNewsHeadline()
    {
        $sql = "
            SELECT
                berita.id,
                berita.gambar,
                berita.judul,
                berita.jenis,
                berita.updated_at
            FROM berita
            WHERE berita.jenis = 'headline'
        ";

        return $this->database->query($sql)->getResult();
    }

    public function getRecentNews()
    {
        $sql = "
            SELECT
                berita.id,
                berita.judul,
                berita.updated_at
            FROM berita
            WHERE berita.updated_at IN (SELECT max(berita.updated_at) FROM berita);
        ";

        return $this->database->query($sql)->getRow();
    }

    public function getNewsNow()
    {
        $sql = "
            SELECT
                berita.id,
                berita.gambar,
                berita.judul,
                berita.konten,
                berita.jenis,
                berita.created_at
            FROM berita
            WHERE berita.created_at >= DATE_ADD(NOW(),INTERVAL -30 DAY) LIMIT 3
        ";

        return $this->database->query($sql)->getResult();
    }

    public function getEvent()
    {
        $sql = "
            SELECT
                berita.id,
                berita.gambar,
                berita.judul,
                berita.updated_at
            FROM berita
            WHERE berita.jenis = 'event'
        ";

        return $this->database->query($sql)->getResult();
    }

    public function getEventById($id)
    {
        $sql = "
            SELECT
                akun.nama_depan,
                berita.id,
                berita.gambar,
                berita.judul,
                berita.konten,
                berita.created_at,
                berita.updated_at
            FROM berita
            INNER JOIN akun ON akun.id = berita.id_akun
            WHERE berita.id = '" . $id . "'
        ";

        return $this->database->query($sql)->getRow();
    }

    public function getRecentEvent()
    {
        $sql = "
            SELECT
                berita.id,
                berita.judul,
                berita.updated_at
            FROM berita
            WHERE berita.updated_at IN (SELECT max(berita.updated_at) FROM berita)
        ";

        return $this->database->query($sql)->getRow();
    }

    public function getPengumuman()
    {
        $sql = "
            SELECT
                berita.id,
                berita.judul,
                berita.gambar,
                berita.updated_at
            FROM berita
            WHERE berita.jenis = 'pengumuman'
        ";

        return $this->database->query($sql)->getResult();
    }

    public function getPengumumanById($id)
    {
        $sql = "
            SELECT
                akun.nama_depan,
                berita.id,
                berita.gambar,
                berita.judul,
                berita.konten,
                berita.created_at,
                berita.updated_at
            FROM berita
            INNER JOIN akun ON akun.id = berita.id_akun
            WHERE berita.id = '" . $id . "'
        ";

        return $this->database->query($sql)->getRow();
    }

    public function getRecentPengumuman()
    {
        $sql = "
            SELECT
                berita.id,
                berita.judul,
                berita.updated_at
            FROM berita
            WHERE berita.updated_at IN (SELECT max(berita.updated_at) FROM berita)
        ";

        return $this->database->query($sql)->getRow();
    }

    public function getCountPendudukPerempuan()
    {
        $sql = "
            SELECT
                COUNT(penduduk.jenis_kelamin) AS perempuan
            FROM penduduk
            WHERE penduduk.jenis_kelamin = 'Perempuan'
        ";

        return $this->database->query($sql)->getRow();
    }

    public function getCountPendudukLaki()
    {
        $sql = "
            SELECT
                COUNT(penduduk.jenis_kelamin) AS laki
            FROM penduduk
            WHERE penduduk.jenis_kelamin = 'Laki-Laki'
        ";

        return $this->database->query($sql)->getRow();
    }

    public function getGaleri()
    {
        $sql = "
            SELECT
                galeri.gambar AS gambar
            FROM galeri
        ";

        return $this->database->query($sql)->getResult();
    }

    public function getKelembagaan()
    {
        $sql = "
            SELECT
                kelembagaan.gambar,
                kelembagaan.nama
            FROM kelembagaan
        ";

        return $this->database->query($sql)->getResult();
    }

    public function getPemerintahDesa()
    {
        $sql = "
            SELECT
                pemerintah_desa.gambar
            FROM pemerintah_desa
        ";

        return $this->database->query($sql)->getRow();
    }

    public function getVisiMisi()
    {
        $sql = "
            SELECT
                visi_misi.gambar
            FROM visi_misi
        ";

        return $this->database->query($sql)->getRow();
    }

    public function insertKomentar($data)
    {
        return $this->database->table('komentar')->insert($data);
    }

    public function insertAspirasi($data)
    {
        return $this->database->table('aspirasi')->insert($data);
    }

    public function insertSurat($data)
    {
        return $this->database->table('surat')->insert($data);
    }
}

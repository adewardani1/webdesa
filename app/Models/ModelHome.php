<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelHome extends Model
{
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

    public function getNewsNow()
    {
        $sql = "
            SELECT
                berita.id,
                berita.gambar,
                berita.judul,
                berita.konten
            FROM berita
            WHERE berita.created_at >= DATE_ADD(NOW(),INTERVAL -10 DAY) LIMIT 3
        ";

        return $this->database->query($sql)->getResult();
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
}

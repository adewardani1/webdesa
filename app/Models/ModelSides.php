<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSides extends Model
{
    public function __construct()
    {
        $this->database = db_connect();
    }

    public function countPenduduk()
    {
        $sql = "
            SELECT
                COUNT(*) AS total
            FROM penduduk
        ";

        return $this->database->query($sql)->getRow();
    }

    public function countAkun()
    {
        $sql = "
            SELECT
                COUNT(*) AS total
            FROM akun
        ";

        return $this->database->query($sql)->getRow();
    }

    public function countPendudukByGender()
    {
        $sql = "
            SELECT
                COUNT(CASE WHEN penduduk.jenis_kelamin='Laki-Laki' THEN 1 END) AS laki,
                COUNT(CASE WHEN penduduk.jenis_kelamin='Perempuan' THEN 1 END) AS perempuan
            FROM penduduk
        ";

        return $this->database->query($sql)->getResult();
    }
}

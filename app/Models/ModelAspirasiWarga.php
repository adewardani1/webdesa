<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAspirasiWarga extends Model
{
    protected $table = 'aspirasi';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama_depah',
        'nama_belakang',
        'nomor_hp',
        'alamat',
        'file_aspirasi',
        'isi'
    ];

    public function __construct()
    {
        $this->database = db_connect();
    }

    public function show()
    {
        $sql = "
            SELECT * FROM aspirasi
        ";

        return $this->database->query($sql)->getResult();
    }

    public function getAspirasiById($id)
    {
        $sql = "
            SELECT
                *
            FROM aspirasi
            WHERE aspirasi.id = '" . $id . "'
        ";

        return $this->database->query($sql)->getRow();
    }
}

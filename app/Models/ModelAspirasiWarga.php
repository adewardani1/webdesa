<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAspirasiWarga extends Model
{
    protected $table = 'aspirasi';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama_depan',
        'nama_belakang',
        'email',
        'alamat',
        'nomor_hp',
        'berkas_pdf',
        'berkas_foto',
        'pesan'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

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

    public function deleteById($id)
    {
        return $this->database->delete(['id' => $id]);
    }
}

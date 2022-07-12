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

    public function getNamaDepan()
    {
        $sql = "
            SELECT
                aspirasi.nama_depan
            FROM aspirasi
        ";

        return $this->database->query($sql)->getResult();
    }

    public function search($search)
    {
        $sql = "
            SELECT
                aspirasi.id,
                aspirasi.nama_depan,
                aspirasi.nama_belakang,
                aspirasi.email,
                aspirasi.alamat,
                aspirasi.nomor_hp,
                aspirasi.pesan,
                aspirasi.created_at,
                aspirasi.updated_at
            FROM aspirasi
            WHERE aspirasi.nama_depan = '" . $search . "'
        ";

        return $this->database->query($sql)->getResult();
    }

    public function deleteById($id)
    {
        return $this->database->table('aspirasi')->delete(['id' => $id]);
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPenduduk extends Model
{
    protected $table = 'penduduk';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama',
        'no_ktp',
        'jenis_kelamin',
        'desa',
        'dusun',
        'rt',
        'rw',
        'status',
        'pendidikan',
        'agama'
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
            SELECT * FROM penduduk
        ";

        return $this->database->query($sql)->getResult();
    }

    public function getPendudukById($id)
    {
        $sql = "
            SELECT
                *
            FROM penduduk
            WHERE penduduk.id = '" . $id . "'
        ";

        return $this->database->query($sql)->getRow();
    }

    // public function update()
    // {
    //     return $this->database->update($data, ['id' => $id]);
    // }
    public function updateById($data, $id)
    {
        return $this->database->table('penduduk')->update($data, ['id' => $id]);
    }

    public function deleteById($id)
    {
        return $this->database->delete(['id' => $id]);
    }
    // ...
}

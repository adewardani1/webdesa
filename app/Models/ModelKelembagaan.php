<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKelembagaan extends Model
{
    protected $table = 'kelembagaan';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'gambar',
        'nama'
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
            SELECT * FROM kelembagaan
        ";

        return $this->database->query($sql)->getResult();
    }

    public function getKelembagaanById($id)
    {
        $sql = "
            SELECT
                *
            FROM kelembagaan
            WHERE kelembagaan.id = '" . $id . "'
        ";

        return $this->database->query($sql)->getRow();
    }

    // public function update()
    // {
    //     return $this->database->update($data, ['id' => $id]);
    // }
    public function updateById($data, $id)
    {
        return $this->database->table('kelembagaan')->update($data, ['id' => $id]);
    }

    public function deleteById($id)
    {
        return $this->database->delete(['id' => $id]);
    }
    // ...
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPemerintahDesa extends Model
{
    protected $table = 'pemerintah_desa';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'gambar'
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
            SELECT * FROM pemerintah_desa
        ";

        return $this->database->query($sql)->getResult();
    }

    public function getPemerintahDesaById($id)
    {
        $sql = "
            SELECT
                *
            FROM pemerintah_desa
            WHERE pemerintah_desa.id = '" . $id . "'
        ";

        return $this->database->query($sql)->getRow();
    }

    // public function update()
    // {
    //     return $this->database->update($data, ['id' => $id]);
    // }
    public function updateById($data, $id)
    {
        return $this->database->table('pemerintah_desa')->update($data, ['id' => $id]);
    }

    public function deleteById($id)
    {
        return $this->database->delete(['id' => $id]);
    }
    // ...
}

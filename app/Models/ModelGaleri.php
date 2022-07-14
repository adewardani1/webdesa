<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelGaleri extends Model
{
    protected $table = 'galeri';
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
            SELECT * FROM galeri
        ";

        return $this->database->query($sql)->getResult();
    }

    public function getGaleriById($id)
    {
        $sql = "
            SELECT
                *
            FROM galeri
            WHERE galeri.id = '" . $id . "'
        ";

        return $this->database->query($sql)->getRow();
    }

    // public function update()
    // {
    //     return $this->database->update($data, ['id' => $id]);
    // }
    public function updateById($data, $id)
    {
        return $this->database->table('galeri')->update($data, ['id' => $id]);
    }

    public function deleteById($id)
    {
        return $this->database->table('galeri')->delete(['id' => $id]);
    }
    // ...
}

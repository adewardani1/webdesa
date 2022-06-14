<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelBerita extends Model
{
    protected $table = 'berita';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'gambar',
        'judul',
        'jenis',
        'konten'
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
            SELECT * FROM berita
        ";

        return $this->database->query($sql)->getResult();
    }

    public function getBeritaById($id)
    {
        $sql = "
            SELECT
                *
            FROM berita
            WHERE berita.id = '" . $id . "'
        ";

        return $this->database->query($sql)->getRow();
    }

    // public function update()
    // {
    //     return $this->database->update($data, ['id' => $id]);
    // }
    public function updateById($data, $id)
    {
        return $this->database->table('berita')->update($data, ['id' => $id]);
    }

    public function deleteById($id)
    {
        return $this->database->delete(['id' => $id]);
    }
    // ...
}

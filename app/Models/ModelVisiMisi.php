<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelVisiMisi extends Model
{
    protected $table = 'visi_misi';
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
            SELECT * FROM visi_misi
        ";

        return $this->database->query($sql)->getResult();
    }

    public function countAllData()
    {
        $sql = "
            SELECT * FROM visi_misi
        ";

        return $this->database->query($sql)->getNumRows();
    }

    public function getGambarVisiMisiById($id)
    {
        $sql = "
            SELECT
                visi_misi.id AS id,
                visi_misi.gambar AS gambar
            FROM visi_misi
            WHERE visi_misi.id = '" . $id . "'
        ";

        return $this->database->query($sql)->getRow();
    }

    public function updateById($data, $id)
    {
        return $this->database->table('visi_misi')->update($data, ['id' => $id]);
    }
}

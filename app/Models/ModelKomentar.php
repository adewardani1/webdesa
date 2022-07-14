<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKomentar extends Model
{
    protected $table = 'komentar';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'komentar',
        'nama',
        'email',
        'website',
        'id_berita'
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
            SELECT
                komentar.id,
                komentar.komentar,
                komentar.nama,
                komentar.email,
                komentar.website,
                komentar.created_at,
                komentar.updated_at,
                berita.id,
                berita.jenis
            FROM komentar
            INNER JOIN berita ON berita.id = komentar.id_berita
        ";

        return $this->database->query($sql)->getResult();
    }

    public function getNama()
    {
        $sql = "
            SELECT
                komentar.nama
            FROM komentar
        ";

        return $this->database->query($sql)->getResult();
    }

    public function search($search)
    {
        $sql = "
            SELECT
                komentar.id,
                komentar.komentar,
                komentar.nama,
                komentar.email,
                komentar.website,
                komentar.created_at,
                komentar.updated_at,
                berita.id,
                berita.jenis
            FROM komentar
            INNER JOIN berita ON berita.id = komentar.id_berita
            WHERE komentar.nama='" . $search . "'
        ";

        return $this->database->query($sql)->getResult();
    }

    public function deleteById($id)
    {
        return $this->database->delete(['id' => $id]);
    }
    // ...
}

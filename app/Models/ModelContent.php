<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelContent extends Model
{
    protected $table = 'berita';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'gambar',
        'judul',
        'jenis',
        'konten',
        'id_akun'
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
                berita.gambar,
                berita.judul,
                berita.jenis,
                berita.konten,
                berita.id,
                berita.created_at,
                berita.updated_at,
                akun.nama_depan
            FROM berita
            INNER JOIN akun ON akun.id = berita.id_akun
        ";

        return $this->database->query($sql)->getResult();
    }

    public function getBeritaById($id)
    {
        $sql = "
            SELECT
                berita.id,
                berita.gambar,
                berita.judul,
                berita.jenis,
                berita.konten
            FROM berita
            WHERE berita.id = '" . $id . "'
        ";

        return $this->database->query($sql)->getRow();
    }

    public function searchByJenis($jenis)
    {
        $sql = "
            SELECT
                berita.gambar,
                berita.judul,
                berita.jenis,
                berita.konten,
                berita.id,
                berita.created_at,
                berita.updated_at,
                akun.nama_depan
            FROM berita
            INNER JOIN akun ON akun.id = berita.id_akun
            WHERE berita.jenis = '" . $jenis . "'
        ";

        return $this->database->query($sql);
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
        return $this->database->table('berita')->delete(['id' => $id]);
    }
    // ...
}

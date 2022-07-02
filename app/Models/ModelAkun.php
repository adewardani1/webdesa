<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAkun extends Model
{
    protected $table = 'akun';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama_depan',
        'nama_belakang',
        'username',
        'password',
        'level',
        'email',
        'nomor_hp'
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
            SELECT * FROM akun
        ";

        return $this->database->query($sql)->getResult();
    }

    public function getAkunById($id)
    {
        $sql = "
            SELECT
                *
            FROM akun
            WHERE akun.id = '" . $id . "'
        ";

        return $this->database->query($sql)->getRow();
    }

    // public function update()
    // {
    //     return $this->database->update($data, ['id' => $id]);
    // }
    public function updateById($data, $id)
    {
        return $this->database->table('akun')->update($data, ['id' => $id]);
    }

    public function deleteById($id)
    {
        return $this->database->delete(['id' => $id]);
    }

    public function checkUsername($username)
    {
        $sql = "
            SELECT
                akun.username
            FROM akun
            WHERE akun.username = '" . $username . "'
        ";

        return $this->database->query($sql)->getRow();
    }
    // ...
}

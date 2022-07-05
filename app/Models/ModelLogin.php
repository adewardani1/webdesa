<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLogin extends Model
{
    protected $table = 'akun';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'username',
        'password',
        'level'
    ];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function __construct()
    {
        $this->database = db_connect();
    }

    public function isAkun($user)
    {
        $sql = "
            SELECT
                akun.id,
                akun.username,
                akun.password,
                akun.nama_depan,
                akun.level
            FROM akun
            WHERE akun.username = '" . $user . "'
        ";

        return $this->database->query($sql)->getRow();
    }
}

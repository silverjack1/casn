<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomModel extends Model
{
    protected $table      = 'users';
    protected $allowedFields = ['username'];
    public function getInfo()
    {
        $data = $this->findAll();
        $isi['soal'] = [];
        foreach ($data as $d) {
            $isi['soal'][] = '<li>' . $d['username'] . '</li>';
        }
        return json_encode($isi);
    }
}
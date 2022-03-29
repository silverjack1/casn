<?php

namespace App\Models;

use CodeIgniter\Model;

class SoalModel extends Model
{
    protected $db;
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getJawaban()
    {
        $builder = $this->db->table('tes');
        $query = $builder->get();
        return $query;
    }
}
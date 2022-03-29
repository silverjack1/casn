<?php

namespace App\Models;

use CodeIgniter\Model;

class restModel extends Model
{
    protected $table                = 'tes';
    protected $primaryKey           = 'id';
    protected $allowedFields        = [
        'id_user',
        'jawaban',
        'kunci'
    ];
}
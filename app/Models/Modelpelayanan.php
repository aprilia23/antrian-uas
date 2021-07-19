<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelpelayanan extends Model
{
    protected $table = "pelayanan";
    protected $primaryKey = "id_pelayanan";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_pelayanan', 'nama_pelayanan', 'keterangan', 'code_pelayanan'];
}

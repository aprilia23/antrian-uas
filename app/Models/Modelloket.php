<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelloket extends Model
{
	function getdata()
	{	
		$sql = "SELECT * FROM pelayanan ORDER BY nama_pelayanan ASC ";
		$query = $this->db->query($sql);

		return $query->getResult();
	}

    protected $table = "loket";
    protected $primaryKey = "id_loket";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_loket', 'nama_loket', 'keterangan', 'id_pelayanan'];
}
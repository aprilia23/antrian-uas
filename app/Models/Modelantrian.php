<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelantrian extends Model
{
    function getloket()
    {
        $sql = "SELECT * FROM loket ORDER BY id_loket ASC ";
        $query = $this->db->query($sql);

        return $query->getResult();
    }

    function getpelayanan()
    {
        $sql = "SELECT * FROM pelayanan ORDER BY id_pelayanan ASC ";
        $query = $this->db->query($sql);

        return $query->getResult();
    }

    // public function getdata()
    // {
    //      return $this->db->table('antrian')
    //      ->join('pelayanan','pelayanan.id_pelayanan=antrian.id_pelayanan')
    //      ->join('loket', 'loket.id_loket=antrian.id_loket')
    //      ->get()->getResultArray();  
    // }
    protected $table = "antrian";
    protected $primaryKey = "id_antrian";
    protected $returnType = "object";
    protected $useTimestamps = false;
    protected $allowedFields = ['id_antrian', 'tanggal', 'no_antrian', 'status', 'id_pelayanan', 'waktu_panggil', 'waktu_selesai', 'id_loket'];
}

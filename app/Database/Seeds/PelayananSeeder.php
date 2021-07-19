<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;

class PelayananSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'nama_pelayanan'=>  'Anton',
				'keterangan' =>  'Test Ketrangan',
				'kode'       =>  '081',
				'created_at' => Time::now()
			]
			];
		$this->db->table('pelayanan')->insertBatch($data);
	}
}

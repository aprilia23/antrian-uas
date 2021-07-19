<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pelayanan extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_pelayanan'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama_pelayanan'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'keterangan'       => [
				'type'              => 'TEXT',
				'constraint'        => "100",
			],
			'kode' => [
				'type'           => 'VARCHAR',
				'constraint'     => '2',
			],
			'created_at' => [
				'type'           => 'DATETIME',
				'null'           => true,
			],
			'updated_at' => [
				'type'           => 'DATETIME',
				'null'           => true,
			]
		]);
		$this->forge->addPrimaryKey('id_pelayanan');
		$this->forge->createTable('pelayanan');
	}

	public function down()
	{
		//
	}
}

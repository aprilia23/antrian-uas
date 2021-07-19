<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Loket extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_loket'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama_loket'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'keterangan'       => [
				'type'              => 'TEXT',
				'constraint'        => "100",
			],
			'id_pelayanan'          => [
				'type'           => 'INT',
				'constraint'     => 11,
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
		$this->forge->addPrimaryKey('id_loket');
		$this->forge->createTable('loket');
	}


	public function down()
	{
		//
	}
}

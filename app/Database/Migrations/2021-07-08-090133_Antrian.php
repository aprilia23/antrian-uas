<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Antrian extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_antrian'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'tanggal' => [
				'type'           => 'DATETIME',
				'null'           => true,
			],
			'no_antrian'          => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'status'       => [
				'type'              => 'INT',
				'constraint'        => "1",
			],
			'id_pelayanan'          => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'waktu_panggil' => [
				'type'           => 'DATETIME',
				'null'           => true,
			],
			'waktu_selesai' => [
				'type'           => 'DATETIME',
				'null'           => true,
			],
			'id_pelayanan'          => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'id_loket'          => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
		]);
		$this->forge->addPrimaryKey('id_antrian');
		$this->forge->createTable('antrian');
	}


	public function down()
	{
		//
	}
}

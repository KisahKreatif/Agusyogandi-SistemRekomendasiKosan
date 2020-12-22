<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataAlternatif extends Migration
{
	public function up()
	{
			$this->forge->addField([
					'id'          => [
							'type'           => 'INT',
							'constraint'     => 11,
							'unsigned'       => true,
							'auto_increment' => true,
					],
					'img'       => [
							'type'           => 'VARCHAR',
							'constraint'     => '255',
					],
					'nama_indekos' => [
							'type'           => 'VARCHAR',
							'constraint'     => '255',
					],
					'slug' => [
						'type'           => 'VARCHAR',
						'constraint'     => '255',
					],
					'domisili' => [
						'type'           => 'VARCHAR',
						'constraint'     => '255',
					],
					'alamat_indekos' => [
						'type'           => 'VARCHAR',
						'constraint'     => '255',
					],
					'jenis_indekos' => [
						'type'           => 'VARCHAR',
						'constraint'     => '255',
					],
					'no_tlp' => [
						'type'           => 'VARCHAR',
						'constraint'     => '255',
					],
					'lokasi' => [
						'type'           => 'VARCHAR',
						'constraint'     => '255',
					],
					'harga' => [
						'type'           => 'VARCHAR',
						'constraint'     => '255',
					],
					'fasilitas' => [
						'type'           => 'VARCHAR',
						'constraint'     => '255',
					],
					'keamanan' => [
						'type'           => 'VARCHAR',
						'constraint'     => '255',
					],
					'kebersihan' => [
						'type'           => 'VARCHAR',
						'constraint'     => '255',
					],
					'parkiran' => [
						'type'           => 'VARCHAR',
						'constraint'     => '255',
					],
					'nilai_rangking1' => [
						'type'           => 'VARCHAR',
						'constraint'     => '255',
					],
					'nilai_rangking2' => [
						'type'           => 'VARCHAR',
						'constraint'     => '255',
					],
					'nilai_rangking3' => [
						'type'           => 'VARCHAR',
						'constraint'     => '255',
					],

				
			]);
			$this->forge->addKey('id', true);
			$this->forge->createTable('data_alternatif');
	}

	public function down()
	{
			$this->forge->dropTable('data-alternatif');
	}
}

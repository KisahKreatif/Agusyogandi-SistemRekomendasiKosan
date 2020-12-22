<?php namespace App\Database\Seeds;

class Data_indekosSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
                $data = [
                    [   'id' => '',
                        'img' => 'plaza-atrium-senen.jpg',
                        'nama_indekos'    => 'Al-Muktafa A',
                        'slug' => 'al-muktafa-a',
                        'domisili' => 'cipadung',
                        'alamat_indekos' => 'Cisalatri Rt01/06 cipadung',
                        'jenis_indekos' => 'Laki-Laki',
                        'no_tlp' => '085778602847',
                        'lokasi' => '164',
                        'harga' => '5500000',
                        'fasilitas' => '14',
                        'keamanan' => '50',
                        'kebersihan' => '21',
                        'parkiran' => '7',
                        'nilai_rangking1' =>'10',
                        'nilai_rangking2' =>'10',
                        'nilai_rangking3' =>'10'

                    ],
                    // [
                        
                    //     'img' => 'plaza-atrium-senen_1.jpg',
                    //     'nama_indekos'    => 'Citra KDI',
                    //     'slug' => 'citra-kdi',
                    //     'domisili' => 'cipadung',
                    //     'alamat_indekos' => 'Jl Cipadung',
                    //     'jenis_indekos' => 'campur',
                    //     'no_tlp' => '082122387572',
                    //     'lokasi' => '450.0',
                    //     'harga' => '5.000.000',
                    //     'fasilitas' => '3.0',
                    //     'keamanan' => '7.3',
                    //     'kebersihan' => '3.5',
                    //     'parkiran' => '6.5',
                    //     'nilai_rangking1' =>'10.0',
                    //     'nilai_rangking2' =>'10.0',
                    //     'nilai_rangking3' =>'10.0'
            
                    // ],
                    // [
                        
                    //     'img' => 'plaza-atrium-senen_2.jpg',
                    //     'nama_indekos'    => 'Amalia',
                    //     'slug' => 'amalia',
                    //     'domisili' => 'cipadung',
                    //     'alamat_indekos' => 'Jl Cipadung',
                    //     'jenis_indekos' => 'perempuan',
                    //     'no_tlp' => '089656718984',
                    //     'harga' => '6000000',
                    //     'keamanan' => '6',
                    //     'kebersihan' => '8',
                    //     'fasilitas' => '9',
                    //     'akses_kendaraan' => '5',
                    //     'nilai_rangking1' =>'10',
                    //     'nilai_rangking2' =>'10',
                    //     'nilai_rangking3' =>'10'
            
                    // ],
                    // [
                        
                    //     'img' => 'plaza-atrium-senen_3.jpg',
                    //     'nama_indekos'    => 'Pondok Gayo 1',
                    //     'slug' => 'pondok-gayo-1',
                    //     'domisili' => 'manisi',
                    //     'alamat_indekos' => 'Depan kecamatan cibiru',
                    //     'jenis_indekos' => 'campur',
                    //     'no_tlp' => '085750465489',
                    //     'harga' => '5000000',
                    //     'keamanan' => '8',
                    //     'kebersihan' => '9',
                    //     'fasilitas' => '8',
                    //      'akses_kendaraan' => '8',
                    //      'nilai_rangking1' =>'10',
                    //      'nilai_rangking2' =>'10',
                    //      'nilai_rangking3' =>'10'
            
                    // ],
                    // [
                        
                    //     'img' => 'plaza-atrium-senen_4.jpg',
                    //     'nama_indekos'    => 'Wisma Nurzaman',
                    //     'slug' => 'wisma_nurzaman',
                    //     'domisili' => 'cipadung',
                    //     'alamat_indekos' => 'cipadung',
                    //     'jenis_indekos' => 'Perempuan',
                    //     'no_tlp' => '0812283079329',
                    //     'harga' => '7000000',
                    //     'keamanan' => '9',
                    //     'kebersihan' => '6',
                    //     'fasilitas' => '4',
                    //     'akses_kendaraan' => '6',
                    //     'nilai_rangking1' =>'10',
                    //      'nilai_rangking2' =>'10',
                    //      'nilai_rangking3' =>'10'
            
                    // ],
                    // [
                        
                    //     'img' => 'plaza-atrium-senen_5.jpg',
                    //     'nama_indekos'    => 'Pelita Bunda',
                    //     'slug' => 'pelita-bunda',
                    //     'domisili' => 'jl.pertamina',
                    //     'alamat_indekos' => 'Jl. Pertamina. Komplek Bumi Patra Asri Blok i no.2',
                    //     'jenis_indekos' => 'Perempuan',
                    //     'no_tlp' => '088220908729',
                    //     'harga' => '8000000',
                    //     'keamanan' => '8',
                    //     'kebersihan' => '8',
                    //     'fasilitas' => '9',
                    //     'akses_kendaraan' => '9',
                    //     'nilai_rangking1' =>'10',
                    //      'nilai_rangking2' =>'10',
                    //      'nilai_rangking3' =>'10'
            
                    // ],
                    // [
                        
                    //     'img' => 'plaza-atrium-senen_6.jpg',
                    //     'nama_indekos'    => 'Saung Kreatof',
                    //     'slug' => 'saung-kreatif',
                    //     'domisili' => 'manisi',
                    //     'alamat_indekos' => 'manisi',
                    //     'jenis_indekos' => 'Perempuan',
                    //     'no_tlp' => '083895576208',
                    //     'harga' => '6500000',
                    //     'keamanan' => '7',
                    //     'kebersihan' => '8',
                    //     'fasilitas' => '7',
                    //     'akses_kendaraan' => '7',
                    //     'nilai_rangking1' =>'10',
                    //     'nilai_rangking2' =>'10',
                    //     'nilai_rangking3' =>'10'
            
                    // ],
                    // [
                        
                    //     'img' => 'plaza-atrium-senen_7.jpg',
                    //     'nama_indekos'    => 'Cempaka Ungu',
                    //     'slug' => 'cempaka-ungu',
                    //     'domisili' => 'Cipadung',
                    //     'alamat_indekos' => 'cipadung',
                    //     'jenis_indekos' => 'Perempuan',
                    //     'no_tlp' => '083820830340',
                    //     'harga' => '9000000',
                    //     'keamanan' => '7',
                    //     'kebersihan' => '8',
                    //     'fasilitas' => '8',
                    //     'akses_kendaraan' => '9',
                    //     'nilai_rangking1' =>'10',
                    //     'nilai_rangking2' =>'10',
                    //     'nilai_rangking3' =>'10'
            
                    // ],
                    // [
                        
                    //     'img' => 'plaza-atrium-senen_8.jpg',
                    //     'nama_indekos'    => 'Pak Purwo',
                    //     'slug' => 'pak-purwo',
                    //     'domisili' => 'Pasir biru',
                    //     'alamat_indekos' => 'Jl.Sukasari RT 01 RW 10, Pasir Biru, Bandung',
                    //     'jenis_indekos' => 'Laki-laki',
                    //     'no_tlp' => '083839538039',
                    //     'harga' => '13000000',
                    //     'keamanan' => '5',
                    //     'kebersihan' => '7',
                    //     'fasilitas' => '8',
                    //     'akses_kendaraan' => '10',
                    //     'nilai_rangking1' =>'10',
                    //      'nilai_rangking2' =>'10',
                    //      'nilai_rangking3' =>'10'
            
                    // ],
                    // [
                        
                    //     'img' => 'plaza-atrium-senen_9.jpg',
                    //     'nama_indekos'    => 'Putri Berkah',
                    //     'slug' => 'putri-berkah',
                    //     'domisili' => 'cipadung',
                    //     'alamat_indekos' => 'gang kujang',
                    //     'jenis_indekos' => 'Perempuan',
                    //     'no_tlp' => '085648315056',
                    //     'harga' => '2500000',
                    //     'keamanan' => '8',
                    //     'kebersihan' => '8',
                    //     'fasilitas' => '5',
                    //     'akses_kendaraan' => '2',
                    //     'nilai_rangking1' =>'10',
                    //      'nilai_rangking2' =>'10',
                    //      'nilai_rangking3' =>'10'
            
                    // ],
                    // [
                        
                    //     'img' => 'plaza-atrium-senen_10.jpg',
                    //     'nama_indekos'    => 'Kosan Pemancingan',
                    //     'slug' => 'kosan-pemancingan',
                    //     'domisili' => 'cibiru hilir',
                    //     'alamat_indekos' => 'cibiru hilir',
                    //     'jenis_indekos' => 'laki-laki',
                    //     'no_tlp' => '0895370737825',
                    //     'harga' => '6000000',
                    //     'keamanan' => '6',
                    //     'kebersihan' => '5',
                    //     'fasilitas' => '7',
                    //     'akses_kendaraan' => '9',
                    //     'nilai_rangking1' =>'10',
                    //     'nilai_rangking2' =>'10',
                    //     'nilai_rangking3' =>'10'
            
                    // ],
                    // [
                        
                    //     'img' => 'plaza-atrium-senen_11.jpg',
                    //     'nama_indekos'    => 'Pak Yudi',
                    //     'slug' => 'pak-yudi',
                    //     'domisili' => 'manisi',
                    //     'alamat_indekos' => 'manisi',
                    //     'jenis_indekos' => 'laki-laki',
                    //     'no_tlp' => '085794637921',
                    //     'harga' => '6600000',
                    //     'keamanan' => '8',
                    //     'kebersihan' => '9',
                    //     'fasilitas' => '8',
                    //     'akses_kendaraan' => '8',
                    //     'nilai_rangking1' =>'10',
                    //      'nilai_rangking2' =>'10',
                    //      'nilai_rangking3' =>'10'
            
                    // ],
                    // [
                        
                    //     'img' => 'plaza-atrium-senen_12.jpg',
                    //     'nama_indekos'    => 'Yayah kost',
                    //     'slug' => 'yayah-kost',
                    //     'domisili' => 'cipadung',
                    //     'alamat_indekos' => 'jl cipadung',
                    //     'jenis_indekos' => 'Perempuan',
                    //     'no_tlp' => '081298485281',
                    //     'harga' => '8000000',
                    //     'keamanan' => '9',
                    //     'kebersihan' => '9',
                    //     'fasilitas' => '8',
                    //     'akses_kendaraan' => '9',
                    //     'nilai_rangking1' =>'10',
                    //     'nilai_rangking2' =>'10',
                    //     'nilai_rangking3' =>'10'
            
                    // ],
                    // [
                        
                    //     'img' => 'plaza-atrium-senen_13.jpg',
                    //     'nama_indekos'    => 'Karya Mekar Raharja',
                    //     'slug' => 'karya-mekar-raharja',
                    //     'domisili' => 'cipadung',
                    //     'alamat_indekos' => 'jl cipadung',
                    //     'jenis_indekos' => 'Perempuan',
                    //     'no_tlp' => '081906581878',
                    //     'harga' => '10000000',
                    //     'keamanan' => '8',
                    //     'kebersihan' => '7',
                    //     'fasilitas' => '8',
                    //     'akses_kendaraan' => '8',
                    //     'nilai_rangking1' =>'10',
                    //      'nilai_rangking2' =>'10',
                    //      'nilai_rangking3' =>'10'
            
                    // ],
                    // [
                        
                    //     'img' => 'plaza-atrium-senen_14.jpg',
                    //     'nama_indekos'    => 'Tri Jaya 2',
                    //     'slug' => 'tri-jaya-2',
                    //     'domisili' => 'cipadung',
                    //     'alamat_indekos' => 'jl cipadung',
                    //     'jenis_indekos' => 'Perempuan',
                    //     'no_tlp' => '081373836758',
                    //     'harga' => '5300000',
                    //     'keamanan' => '9',
                    //     'kebersihan' => '7',
                    //     'fasilitas' => '5',
                    //     'akses_kendaraan' => '7',
                    //     'nilai_rangking1' =>'10',
                    //     'nilai_rangking2' =>'10',
                    //     'nilai_rangking3' =>'10'
            
                    // ],
                    // [
                        
                    //     'img' => 'plaza-atrium-senen_15.jpg',
                    //     'nama_indekos'    => 'Kosan Angel',
                    //     'slug' => 'kosan-angel',
                    //     'domisili' => 'manisi',
                    //     'alamat_indekos' => 'manisi',
                    //     'jenis_indekos' => 'Perempuan',
                    //     'no_tlp' => '085721606384',
                    //     'harga' => '6700000',
                    //     'keamanan' => '9',
                    //     'kebersihan' => '7',
                    //     'fasilitas' => '8',
                    //     'akses_kendaraan' => '7',
                    //     'nilai_rangking1' =>'10',
                    //      'nilai_rangking2' =>'10',
                    //      'nilai_rangking3' =>'10'
            
                    // ],
                    // [
                        
                    //     'img' => 'plaza-atrium-senen_16.jpg',
                    //     'nama_indekos'    => 'Al Mujib',
                    //     'slug' => 'al-mujib',
                    //     'domisili' => 'manisi',
                    //     'alamat_indekos' => 'manisi',
                    //     'jenis_indekos' => 'campur',
                    //     'no_tlp' => '081317288643',
                    //     'harga' => '8000000',
                    //     'keamanan' => '5',
                    //     'kebersihan' => '3',
                    //     'fasilitas' => '3',
                    //     'akses_kendaraan' => '9',
                    //     'nilai_rangking1' =>'10',
                    //     'nilai_rangking2' =>'10',
                    //     'nilai_rangking3' =>'10'
            
                    // ],
                    // [
                        
                    //     'img' => 'plaza-atrium-senen_17.jpg',
                    //     'nama_indekos'    => 'Pondok Hijau 3 Putri',
                    //     'slug' => 'pondok-hijau-3-putri',
                    //     'domisili' => 'cipadung',
                    //     'alamat_indekos' => 'cipadung',
                    //     'jenis_indekos' => 'Perempuan',
                    //     'no_tlp' => '08181011013',
                    //     'harga' => '5500000',
                    //     'keamanan' => '7',
                    //     'kebersihan' => '8',
                    //     'fasilitas' => '8',
                    //     'akses_kendaraan' => '6',
                    //     'nilai_rangking1' =>'10',
                    //     'nilai_rangking2' =>'10',
                    //     'nilai_rangking3' =>'10'
            
                    // ],
                    // [
                        
                    //     'img' => 'plaza-atrium-senen_18.jpg',
                    //     'nama_indekos'    => 'Kostan Anjani',
                    //     'slug' => 'kostan-anjani',
                    //     'domisili' => 'manisi',
                    //     'alamat_indekos' => 'manisi',
                    //     'jenis_indekos' => 'Perempuan',
                    //     'no_tlp' => '08978402867',
                    //     'harga' => '5500000',
                    //     'keamanan' => '7',
                    //     'kebersihan' => '7',
                    //     'fasilitas' => '7',
                    //     'akses_kendaraan' => '6',
                    //     'nilai_rangking1' =>'10',
                    //     'nilai_rangking2' =>'10',
                    //     'nilai_rangking3' =>'10'
            
                    // ],
                    // [
                        
                    //     'img' => 'plaza-atrium-senen_19.jpg',
                    //     'nama_indekos'    => 'Kostan A Ferry',
                    //     'slug' => 'kostan-a-ferry',
                    //     'domisili' => 'manisi',
                    //     'alamat_indekos' => 'manisi',
                    //     'jenis_indekos' => 'Perempuan',
                    //     'no_tlp' => '085315737434',
                    //     'harga' => '7500000',
                    //     'keamanan' => '8',
                    //     'kebersihan' => '7',
                    //     'fasilitas' => '8',
                    //     'akses_kendaraan' => '7',
                    //     'nilai_rangking1' =>'10',
                    //     'nilai_rangking2' =>'10',
                    //     'nilai_rangking3' =>'10'
            
                    // ],

                    

                ];

                // Simple Queries
                // $this->db->query("INSERT INTO Data_indekos (img, nama_indekos, slug, domisili, alamat_indekos, jenis_indekos, no_tlp, harga, keamanan, kebersihan, fasilitas, akses_kendaraan) VALUES(:img:, :nama_indekos:, :slug:, :domisili:, :alamat_indekos:, :jenis_indekos:, :no_tlp:, :harga:, :keamanan:, :kebersihan:, :fasilitas:, :akses_kendaraan:, :nilai_rangking1:, :nilai_rangking2:, :nilai_rangking3:, )",
                //         $data
                // );

                // Using Query Builder
                 $this->db->table('data_alternatif')->insertBatch($data);
        }
}
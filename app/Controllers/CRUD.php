<?php namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\alternatifModel;

class CRUD extends BaseController
{
	

	public function create()
	{
		if(!$this->validate([
			'img' => [
				'rules' => 'uploaded[img]|max_size[img,1024]|is_image[img]|mime_in[img,image/jpg,image/jpeg,image/png]',
				'errors' => [
					'uploaded' => 'pilih gambar terlebih dahulu',
					'max_size' => 'ukuran gambar terlalu besar',
					'is_image' => 'yang anda pilih bukan gambar',
					'mime_in' => 'yang anda pilih bukan gambar'
					]
				]
		])){
			$validation = \Config\Services::validation();
			
			return redirect()->to('/Input')->withInput();
		}
		//getfile
		$fileImage =  $this->request->getFile('img');
	
		$fileImage ->move('img');

		$namaImg = $fileImage->getName();

		//getslug
		$slug = url_title($this->request->getVar('nama_indekos'), '-', true);

		//getranking
		$lokasi				= $this->request->getPost('lokasi');
		$harga				= $this->request->getPost('harga');
		$keamanan			= $this->request->getPost('keamanan');
		$kebersihan 		= $this->request->getPost('kebersihan');
		$fasilitas			= $this->request->getPost('fasilitas');
		$akses 	= $this->request->getPost('parkiran');

		
		$model = new AlternatifModel();
        $data = array(
			'img'				=> $namaImg,
			'nama_indekos'		=> $this->request->getPost('nama_indekos'),
			'slug'				=> $slug,
			'alamat_indekos'	=> $this->request->getPost('alamat_indekos'),
			'jenis_indekos'		=> $this->request->getPost('jenis_indekos'),
			'no_tlp'			=> $this->request->getPost('no_tlp'),
			'lokasi' 			=> $lokasi,
			'harga' 			=> $harga,
			'keamanan' 			=> $keamanan,
			'kebersihan' 		=> $kebersihan,
			'fasilitas' 		=> $fasilitas,
			'parkiran' 			=> $akses
			
        );
		$model->saveAlternatif($data);
		session()->setflashdata('pesan', 'Data berhasil di buat');
		return redirect()->to('/BRadmin');
		
		
			 
		}

	

	public function update()
    {
		$slug = url_title($this->request->getPost('nama_indekos'), '-', true);
        $model = new AlternatifModel();
        $id = $this->request->getPost('id');
        $data = array(
            'nama_indekos'		=> $this->request->getPost('nama_indekos'),
			'slug'				=> $slug,
			'domisili		'	=> $this->request->getPost('domisili'),
			'alamat_indekos'	=> $this->request->getPost('alamat_indekos'),
			'jenis_indekos'		=> $this->request->getPost('jenis_indekos'),
			'no_tlp'			=> $this->request->getPost('no_tlp'),
			'lokasi' 			=> $this->request->getPost('lokasi'),
			'harga' 			=> $this->request->getPost('harga'),
			'keamanan' 			=> $this->request->getPost('keamanan'),
			'kebersihan' 		=> $this->request->getPost('kebersihan'),
			'fasilitas' 		=> $this->request->getPost('fasilitas'),
			'parkiran' 	=> $this->request->getPost('parkiran')
        );
		$model->updateAlternatif($data, $id);
		session()->setflashdata('pesan', 'Data berhasil di edit');
        return redirect()->to('/BRadmin');
	}
	
	public function delete($id)
	{
		$del = new AlternatifModel();
		$del->delete($id);
		session()->setflashdata('pesan', 'Data berhasil di hapus');
		return redirect()->to('/BRadmin');
	}
}
	//--------------------------------------------------------------------



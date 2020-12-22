<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AlternatifModel;



class Alternatif extends BaseController
{
	public function index(){
		$alternatif = new AlternatifModel();
		$data['alternatif'] = $alternatif->getAlternatif();
			
			echo view('pages/admin/homeadmin', $data);
	}
	public function index2(){
		$alternatif = new AlternatifModel();
		$data['alternatif'] = $alternatif->getAlternatif();
			
			echo view('pages/admin/homeadmin2', $data);
	}

	public function login()
	{	
		
		$username			= $this->request->getPost('username');
		$password			= $this->request->getPost('password');
		
		$db      = \Config\Database::connect();
		$builder = $db->table('admin');
	
		$sql = $db->query("SELECT * FROM admin WHERE username='$username'");
		$query = 0;
		foreach($sql->getResultArray() as $row){
			
			$user[$query] = $row;
			$query++;
		}$ta = $query;
		if($ta > 0) {
			foreach($sql->getResultArray() as $row){
			
				$pw = $row['password'];
			
			}
		


		 	if($password == $pw){
				$vl=true;
				session()->setflashdata('noEntry', $vl);
				return redirect()->to('/Homeadmin');
	
			}else{
				return redirect()->to('/')->with('errorPW', 'Password salah!');
			}
		}else{
				return redirect()->to('/')->with('error', 'Username atau Password salah!');
			 }

		
		
		// $alternatif = new AlternatifModel();
		
	
		// $data['alternatif'] = $alternatif->getAlternatif();
		// echo view('pages/admin/homeadmin', $data);


		
		
	}

	public function detail ($slug)
	{
		$alt = new AlternatifModel();
		$data['alternatif'] = $alt->getAlternatif($slug);
		return view('pages/admin/detailalternatif', $data);
	}
	public function input()
	{
		
		$data = [
			'validation' => \Config\Services::validation()
		];
		return view('pages/admin/inputdata', $data);
		
		
	}
	public function edit($id)
	{
		$alternatif = new AlternatifModel();
		$data['alternatif'] = $alternatif->getAlternatif2($id);
		return view('pages/admin/editdata', $data);
		
		
	}
	
}

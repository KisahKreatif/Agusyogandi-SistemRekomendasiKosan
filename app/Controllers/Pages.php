<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AlternatifModel;

class Pages extends BaseController
{
	public function index()
	{
		$alternatif = new AlternatifModel();
		$data['alternatif'] = $alternatif->getAlternatif();
		return view('pages/home', $data);
	}
	// public function login()
	// {
	// 	$username			= $this->request->getPost('username');
	// 	$password			= $this->request->getPost('password');
		
	// 	$db      = \Config\Database::connect();
	// 	$builder = $db->table('admin');
	// 	$sql = $db->query("SELECT * FROM admin WHERE username='$username'");
	// 	foreach($sql->getResultArray() as $row){
	// 		$uname = $row['username'];
	// 		$pw = $row['password'];
	// 	}
	// 	$loged = True;
	// 	if($username == $uname){
	// 		session()->setflashdata('cekLog', $loged);
	// 		return redirect()->to('/Homeadmin');
	// 	}

	// 	// if ($this->request->getMethod() === 'post') {
	// 	// 	$rules = [
	// 	// 		'username' => 'required',
	// 	// 		'password' => 'required'
	// 	// 	];
	// 	// 	$validate = $this->validate($rules);
	// 	// 	if ($validate) {
	// 	// 		$username = $this->request->getPost('username');
	// 	// 		$password = $this->request->getPost('password');

	// 	// 		$userModel = new \App\Models\AdminModel;
				
	// 	// 		$user = $userModel->asObject()->where('username', $username)->first();
	// 	// 		if ($user) {
	// 	// 			if (password_verify($password, $user->password)) {
						
						
	// 	// 				return redirect('/Homeadmin');
	// 	// 			}
	// 	// 		}

	// 	// 		return redirect()->back()->withInput()->with('error', 'Username atau Password salah!');
				
	// 	// 	}else{
			
	// 	// 	return redirect()->back()->withInput()->with('no_data', 'isi username dan password');
	// 	// 	}
	// 	// 	return view('Pages/home');
	// 	//}
		
		
	// }
	public function detail ($slug)
	{
		$alt = new AlternatifModel();
		$data['alternatif'] = $alt->getAlternatif($slug);
		return view('pages/detail', $data);
	}
	public function listviewLk()
	{
		
		return view('pages/listviewLk');
	}
	public function listviewPr()
	{
		
		return view('pages/listviewPr');
	}
	public function listviewHg()
	{
		
		return view('pages/listviewHg');
	}
	public function listviewLok()
	{
		
		return view('pages/listviewLok');
	}


	//--------------------------------------------------------------------

}

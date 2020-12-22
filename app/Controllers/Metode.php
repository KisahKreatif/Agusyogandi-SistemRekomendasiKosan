<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AlternatifModel;
use App\Models\PerangkinganModel;


class Metode extends BaseController
{
	public function AmbilData()
	{
		
		$alternatif = new AlternatifModel();
		
		$dataN = $alternatif->getAlternatif2();
		

		$v1=0.5;
		$v2=0.4;
		$v3=0.6;
		

	
		$vikor = $alternatif->metode($v1,$v2,$v3);
		$kondisi1 = $alternatif->kondisi1();
		$kondisi2 = $alternatif->kondisi2();

		$data = [
			
			'alternatif' => $dataN,
			'Vikor'=> $vikor,
			'kondisi1' => $kondisi1,
			'kondisi2' => $kondisi2
			

		];

		return view('pages/admin/perankingan', $data);
	
	}

	

}


			

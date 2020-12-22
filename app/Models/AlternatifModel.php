<?php namespace App\Models;

use CodeIgniter\Model;

class AlternatifModel extends Model
{
    protected $table = 'data_alternatif';
    protected $primaryKey = 'id';


    public function getAlternatif($slug = false)
    {
        if ($slug == false)
        {
        return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }

    public function getAlternatif2($id = false)
    {
        if ($id == false)
        {
        return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }

    
   
    
    protected $allowedFields = ['nama_indekos', 'slug', 'alamat_indekos', 'jenis_indekos', 'no_tlp', 'harga', 'keamanan', 'kebersihan', 'fasilitas', 'akses_kendaraan', 'nilai_rangking'];
    public function saveAlternatif($data){
        $query = $this->db->table('data_alternatif')->insert($data);
        return $query;
    }
    public function updateAlternatif($data, $id)
    {
        $query = $this->db->table('data_alternatif')->update($data, array('id' => $id));
        return $query;
    }

    public function metode($v1, $v2, $v3){
        $Blokasi=0.12;
        $Bharga=0.42;
		$Bfasilitas=0.05;
		$Bkeamanan=0.22;
		$Bkebersihan=0.12;
        $Bakses=0.06;
        

        $db      = \Config\Database::connect();
        $builder = $db->table('data_alternatif');
        $totalData = $builder->countAll();
        $query = $builder->get();
       

        $Plokasi = $builder->selectMin('lokasi')->get();
        $Pharga = $builder->selectMin('harga')->get();
        $Pkeamanan = $builder->selectMax('keamanan')->get();
        $Pkebersihan = $builder->selectMax('kebersihan')->get();
        $Pfasilitas = $builder->selectMax('fasilitas')->get();
        $Pakses = $builder->selectMax('parkiran')->get();

        $Mlokasi = $builder->selectMax('lokasi')->get();
        $Mharga = $builder->selectMax('harga')->get();
        $Mkeamanan = $builder->selectMin('keamanan')->get();
        $Mkebersihan = $builder->selectMin('kebersihan')->get();
        $Mfasilitas = $builder->selectMin('fasilitas')->get();
        $Makses = $builder->selectMin('parkiran')->get();

        $i=0;
        foreach($Plokasi->getResultArray() as $row){
            $nilaiMaxLokasi = ($row['lokasi']); 
            
        }
        foreach($Pharga->getResultArray() as $row){
            $nilaiMaxHarga = ($row['harga']); 
            
        }
        foreach($Pkeamanan->getResultArray() as $row){
            $nilaiMaxKeamanan = ($row['keamanan']); 
        }
        foreach($Pkebersihan->getResultArray() as $row){
            $nilaiMaxKebersihan = ($row['kebersihan']); 
        }
        foreach($Pfasilitas->getResultArray() as $row){
            $nilaiMaxFasilitas = ($row['fasilitas']); 
        }
        foreach($Pakses->getResultArray() as $row){
            $nilaiMaxAkses = ($row['parkiran']); 
        }


        foreach($Mlokasi->getResultArray() as $row){
            $nilaiMinLokasi = ($row['lokasi']); 
        }
        foreach($Mharga->getResultArray() as $row){
            $nilaiMinHarga = ($row['harga']); 
        }
        foreach($Mkeamanan->getResultArray() as $row){
            $nilaiMinKeamanan = ($row['keamanan']); 
        }
        foreach($Mkebersihan->getResultArray() as $row){
            $nilaiMinKebersihan = ($row['kebersihan']); 
        }
        foreach($Mfasilitas->getResultArray() as $row){
            $nilaiMinFasilitas = ($row['fasilitas']); 
        }
        foreach($Makses->getResultArray() as $row){
            $nilaiMinAkses = ($row['parkiran']); 
        }
       d($nilaiMaxFasilitas);
        
       
        foreach ($query->getResult() as $row)
        {
                $nilaiLokasi[$i]= $row->lokasi;  
                $nilailokasi[$i] = intval($nilaiLokasi[$i]);
                $nilaiHarga[$i]= $row->harga;  
                $nilaiharga[$i] = intval($nilaiHarga[$i]);
                $nilaiKeamanan[$i] = $row->keamanan;
                $nilaikeamanan[$i] = intval($nilaiKeamanan[$i]);
                $nilaiKebersihan[$i] = $row->kebersihan;
                $nilaikebersihan[$i] = intval($nilaiKebersihan[$i]);
                $nilaiFasilitas[$i] = $row->fasilitas;
                $nilaifasilitas[$i] = intval($nilaiFasilitas[$i]);
                $nilaiAkses[$i] = $row->parkiran;
                $nilaiakses[$i] = intval($nilaiAkses[$i]);

                // d($nilaiFasilitas[$i]); 
            $i++; 
        }  
        for($j=0;$j<$totalData;$j++){
           $Nlokasi[$j] = ($nilaiMaxLokasi-$nilaiLokasi[$j])/($nilaiMaxLokasi-$nilaiMinLokasi);
           $Nharga[$j] = ($nilaiMaxHarga-$nilaiHarga[$j])/($nilaiMaxHarga-$nilaiMinHarga);
           $Nkeamanan[$j]=($nilaiMaxKeamanan-$nilaiKeamanan[$j])/($nilaiMaxKeamanan-$nilaiMinKeamanan);
           $Nkebersihan[$j]=($nilaiMaxKebersihan-$nilaiKebersihan[$j])/($nilaiMaxKebersihan-$nilaiMinKebersihan);
           $Nfasilitas[$j]=($nilaiMaxFasilitas-$nilaiFasilitas[$j])/($nilaiMaxFasilitas-$nilaiMinFasilitas);
           $Nakses[$j]=($nilaiMaxAkses-$nilaiAkses[$j])/($nilaiMaxAkses-$nilaiMinAkses);
            //d($Nfasilitas[$j]); 
           // d($nilailokasi[$j]); 
           
        }

        for($f=0;$f<$totalData;$f++){
            $Flokasi[$f]=$Blokasi*$Nlokasi[$f];
            $Fharga[$f]=$Bharga*$Nharga[$f];
            $Fkeamanan[$f]=$Bkeamanan*$Nkeamanan[$f];
            $Fkebersihan[$f]=$Bkebersihan*$Nkebersihan[$f];
            $Ffasilitas[$f]=$Bfasilitas*$Nfasilitas[$f];
            $Fakses[$f]=$Bakses*$Nakses[$f];
            // d($Fharga[$f]);                           
        }

        for($s=0;$s<$totalData;$s++){

            $Si[$s]= $Flokasi[$s]+$Fharga[$s]+$Fkeamanan[$s]+$Fkebersihan[$s]+$Ffasilitas[$s]+$Fakses[$s];
            $dataRi[$s]= [$Flokasi[$s], $Fharga[$s], $Fkeamanan[$s], $Fkebersihan[$s], $Ffasilitas[$s], $Fakses[$s]];
            $Ri[$s] = Max($dataRi[$s]);
             d($Si[$s]);

        }

        $builder = $db->query("SELECT * FROM data_alternatif");
 
        $a=0;
        foreach($builder->getResultArray() as $row):

            $id[$a] = $row['id'];
           
            $a++;
        endforeach;

        for($a=0;$a<$totalData;$a++){
        
            $maxSi[$a] = max($Si);
            $minSi[$a] = min($Si);
            $maxRi[$a] = max($Ri);
            $minRi[$a] = min($Ri);

            $Q1[$a]=($v1*(($Si[$a]-$minSi[$a])/($maxSi[0]-$minSi[0]))+((1-$v1)*(($Ri[$a]-$minRi[$a])/($maxRi[0]-$minRi[0]))));
            $Q2[$a]=($v2*(($Si[$a]-$minSi[$a])/($maxSi[0]-$minSi[0]))+((1-$v2)*(($Ri[$a]-$minRi[$a])/($maxRi[0]-$minRi[0]))));
            $Q3[$a]=($v3*(($Si[$a]-$minSi[$a])/($maxSi[0]-$minSi[0]))+((1-$v3)*(($Ri[$a]-$minRi[$a])/($maxRi[0]-$minRi[0]))));
            
            $NilaiQ1[$a]=number_format($Q1[$a], 2, '.', ',');
            $NilaiQ2[$a]=number_format($Q2[$a], 2, '.', ',');
            $NilaiQ3[$a]=number_format($Q3[$a], 2, '.', ',');      
            
            
            //$Q1[$a] = intval($NilaiQ[$a]);
            foreach($Q1 as $row){
            $sql = $db->query("UPDATE data_alternatif SET nilai_rangking1 = '$row' WHERE id=$id[$a]");}
            
            foreach($Q2 as $row){
            $sql = $db->query("UPDATE data_alternatif SET nilai_rangking2 = '$row' WHERE id=$id[$a]");}
            
            foreach($Q3 as $row){
            $sql = $db->query("UPDATE data_alternatif SET nilai_rangking3 = '$row' WHERE id=$id[$a]");}
        
        }
        

    }

    public function kondisi1(){
    
    

        $db      = \Config\Database::connect();
        $builder = $db->table('data_alternatif');
        $totalData = $builder->countAll();
        $builder = $db->query("SELECT * FROM data_alternatif ORDER BY nilai_rangking1 ASC");
        $i=0;
            foreach($builder->getResultArray() as $row):
            $nilaiRangking[$i]=$row['nilai_rangking1'];
            $i++;
            endforeach;

            $AQ=1/($totalData-1);
            $DQ=number_format($AQ, 2, '.', ',');
           
            

            $HDQ = $nilaiRangking[1]-$nilaiRangking[0];
            
            
            
                if($HDQ >= $DQ){
                    $hasil = "KONDISI 1 TERPENUHI";
                    return $hasil;
                }else{
                    $hasil = "KONDISI 1 TIDAK TERPENUHI";
                    return $hasil;
                } 
    }


    public function kondisi2(){
        $db      = \Config\Database::connect();
        $builder = $db->table('data_alternatif');
        $totalData = $builder->countAll();
        $builder1 = $db->query("SELECT nama_indekos FROM data_alternatif ORDER BY nilai_rangking1 ASC");
        $builder2 = $db->query("SELECT nama_indekos FROM data_alternatif ORDER BY nilai_rangking2 ASC");
        $builder3 = $db->query("SELECT nama_indekos FROM data_alternatif ORDER BY nilai_rangking3 ASC");
        $i=0;
        $j=0;
        $k=0;
            foreach($builder1->getResultArray() as $row):
            $NamaUrut1[$i]=$row;
            $i++;
            endforeach;
            
            foreach($builder2->getResultArray() as $row):
            $NamaUrut2[$j]=$row;
            $j++;
            endforeach;
            
            foreach($builder3->getResultArray() as $row):
            $NamaUrut3[$k]=$row;
            $k++;
            endforeach;

          
           
            
           
           // }



            // $AQ=1/($totalData-1);
            // $DQ=number_format($AQ, 2, '.', ',');

            // $HDQ = $nilaiRangking[0]-$nilaiRangking[1];
            for($p=0; $p<2 ; $p++){

            if( $NamaUrut1[$p] == $NamaUrut2[$p] ){
                    $hasil = "KONDISI 2 TERPENUHI";
                    return $hasil;
                }if( $NamaUrut2[$p] == $NamaUrut3[$p] ){
                    $hasil = "KONDISI 2 TERPENUHI";
                    return $hasil;
                }if( $NamaUrut1[$p] == $NamaUrut3[$p] ){
                    $hasil = "KONDISI 2 TERPENUHI";
                    return $hasil;
                }else{
                    $hasil = "KONDISI 2 TIDAK TERPENUHI";
                    return $hasil;
                } 
            }
            
                // if( $NamaUrut1[0]&&$NamaUrut1[1] === $NamaUrut2[0]&&$NamaUrut2[1] === $NamaUrut3[0]&&$NamaUrut3[1] ){
                //     $hasil = "KONDISI 2 TERPENUHI";
                //     return $hasil;
                // }else{
                //     $hasil = "KONDISI 2 TIDAK TERPENUHI";
                //     return $hasil;
                // } 
    }
}

    
       
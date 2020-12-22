<?php 

  $db      = \Config\Database::connect();
  $builder = $db->table('data_alternatif');
  
  $builder = $db->query("SELECT * FROM data_alternatif WHERE jenis_indekos = 'laki-laki'  ORDER BY nilai_rangking1 ASC");
 
  $a=0;
  foreach($builder->getResultArray() as $row):
    
    $NamaIndekos[$a] = $row['nama_indekos'];
    $Image[$a] = $row['img'];
    $Alamat[$a] = $row['alamat_indekos'];
    $Jenis[$a] = $row['jenis_indekos'];
    $Tlp[$a] = $row['no_tlp'];
    $Harga[$a] = $row['harga'];
    $NilaiRangking[$a] = $row['nilai_rangking1'];
    $Slug[$a] = $row['slug'];
    
    $a++;
   
  endforeach;
  $totalData = $a;
 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTVIEW | Web Rekomendasi Indekos</title>
    <link rel="stylesheet" type="text/css" href="/css/liststyle.css">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
</br>
<!-- lgoo pilihan filter -->
<center>
<img src="/img/h2.png" class="imglist" ></center>
</br>
<p class="text1"> INDEKOS LAKI - LAKI</p>
<hr class="hr"/>
<!-- tutup logo pilihan filter -->

<!-- rangking sesuai filter -->
</br>
<div class="container-xl">
<div class="row">
    <div class="col"><center>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Indekos</th>
      <th scope="col">Alamat Indekos</th>
	  <th scope="col">Jenis Indekos</th>
	  <th scope="col">Harga Indekos</th>
    <th scope="col">Rating</th>
	  <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php $a=1;
  for($i=0;$i<$totalData;$i++){ ?>
    <tr>
      <th scope="row"><?= $a++?></th>
      <td><?= $NamaIndekos[$i]?></td>
      <td><?= $Alamat[$i]?></td>
	  <td><?= $Jenis[$i]?></td>
	  <td>Rp.<?= $Harga[$i]?></td>
    <td>

    <?php 
          if($NilaiRangking[$i] <= 0.20){
          ?><p><img src="/img/bintang.png" class="rangking"><img src="/img/bintang.png" class="rangking"><img src="/img/bintang.png" class="rangking"><img src="/img/bintang.png" class="rangking"><img src="/img/bintang.png" class="rangking"></p><?php
          }if(($NilaiRangking[$i] > 0.21) && ($NilaiRangking[$i] <= 0.40)){
            ?><p><img src="/img/bintang.png" class="rangking"><img src="/img/bintang.png" class="rangking"><img src="/img/bintang.png" class="rangking"><img src="/img/bintang.png" class="rangking"></p><?php
            }if(($NilaiRangking[$i] > 0.41) && ($NilaiRangking[$i] <= 0.60)){
              ?><p><img src="/img/bintang.png" class="rangking"><img src="/img/bintang.png" class="rangking"><img src="/img/bintang.png" class="rangking"></p><?php
              }if(($NilaiRangking[$i] > 0.61) && ($NilaiRangking[$i] <= 0.80)){
                ?><p><img src="/img/bintang.png" class="rangking"><img src="/img/bintang.png" class="rangking"></p><?php
                }if(($NilaiRangking[$i] > 0.81) && ($NilaiRangking[$i] <= 1.00)){
                  ?><p><img src="/img/bintang.png" class="rangking"></p><?php
                  }
      ?>
      

    </td>

	  <td><a href="/HomePages/<?=$Slug[$i]; ?>"><button type="button" class="btn btn-primary">Lihat Detail</button></a> </td>
    </tr>
  <?php } ?>
  </tbody>
</table>
	<center>
    </div>
  </div>
</div>
</div>
<!-- tutup ranking sesuai filter-->

</br>
<!--footer-->
<div class="card text-center">
  <div class="card-header">
    WEB SKRIPSI
  </div>
  <div class="card-body">
    

    <p class="card-text">WEB ini dibuat untuk memenuhi Tugas Akhir</p>
    <p class="card-text">untuk mendapatkan gelar Sarjana Teknik</p>
    <a href="/" class="btn btn-primary">HOME</a>
  </div>

</div>
<!-- tutup filter -->

</body>
</html>

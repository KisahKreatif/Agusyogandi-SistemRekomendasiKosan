
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DETAIL | Web Rekomendasi Indekos</title>
    <link rel="stylesheet" type="text/css" href="/css/detailstyle.css">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
</br>
<!--gambar indekos-->
<center>
<img src="/img/<?= $alternatif['img'];?>" class="imgdet" ></center>
</br>
<!-- tutup gambar indekos -->

<!-- informasi singkat -->
<hr class="hr"/>
</br><center>
    <h1><?= $alternatif['nama_indekos'];?></h1>
    
</center>
</br>
<hr class="hr"/>
<!-- tutup informasi singkat -->

<!-- informasi lengkap -->
</br><center>
<div id="boxdet">
<p class="text1"> INFORMASI LENGKAP</p>
</br>
<h3><b>Nama Indekos         :</b> <?= $alternatif['nama_indekos'];?></h3>
<h3><b>Alamat Indekos       :</b> <?= $alternatif['alamat_indekos']; ?></h3>
<h3><b>Jenis Indekos        :</b> <?= $alternatif['jenis_indekos']; ?></h3>
<h3><b>Harga Indekos / Tahun:</b> Rp. <?= $alternatif['harga']; ?></h3>
<h3><b>No Telepon pemilik   :</b> <?= $alternatif['no_tlp']; ?></h3>
<h3><b>Nilai Rangking       :</b> <?= $alternatif['nilai_rangking1']; ?></h3>
<center>

<?php 
          if($alternatif['nilai_rangking1'] <= 0.20){
          ?><p><img src="/img/bintang.png" class="rangking"><img src="/img/bintang.png" class="rangking"><img src="/img/bintang.png" class="rangking"><img src="/img/bintang.png" class="rangking"><img src="/img/bintang.png" class="rangking"></p><?php
          }if(($alternatif['nilai_rangking1'] > 0.21) && ($alternatif['nilai_rangking1'] <= 0.40)){
            ?><p><img src="/img/bintang.png" class="rangking"><img src="/img/bintang.png" class="rangking"><img src="/img/bintang.png" class="rangking"><img src="/img/bintang.png" class="rangking"></p><?php
            }if(($alternatif['nilai_rangking1'] > 0.41) && ($alternatif['nilai_rangking1'] <= 0.60)){
              ?><p><img src="/img/bintang.png" class="rangking"><img src="/img/bintang.png" class="rangking"><img src="/img/bintang.png" class="rangking"></p><?php
              }if(($alternatif['nilai_rangking1'] > 0.61) && ($alternatif['nilai_rangking1'] <= 0.80)){
                ?><p><img src="/img/bintang.png" class="rangking"><img src="/img/bintang.png" class="rangking"></p><?php
                }if(($alternatif['nilai_rangking1'] > 0.81) && ($alternatif['nilai_rangking1'] <= 1.00)){
                  ?><p><img src="/img/bintang.png" class="rangking"></p><?php
                  }
      ?>

  </br></center>



</form>
</div>
</center>
<!-- tutup informasi lengkap-->
 
<!-- footer -->
</br>
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
<!-- tutup  -->
</body>
</html>

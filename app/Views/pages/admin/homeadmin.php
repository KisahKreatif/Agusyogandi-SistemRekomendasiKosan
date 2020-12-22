

<?php if (session()->getFlashdata('noEntry')==false) :?>
  </br>
  <div class="alert alert-success" role="alert">
  
  <?= 'anda belum login!!!' ?> <a href="/">| Login Sekarang</a>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ADMIN | Web Rekomendasi Indekos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="/css/headeradminstyle.css">
</head>
<body>
<div class="container-fluid">
<div id="box1">

</br>
<div class="container">
  <div class="col">

        <p class="headertext1">SILAHKAN LOGIN</p>
        <p class="headertext1">TERLEBIH DAHULU</p>
       
        

  </div>
  
</div>

</div>
</div>
</body>
</html>
<?php endif; ?>




<?php

if (session()->getFlashdata('noEntry')==true) :?>
  <!DOCTYPE html>
<html lang="en">
<head>
  <title>ADMIN | Web Rekomendasi Indekos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="/css/headeradminstyle.css">
</head>
<body>
<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      
      <a class="nav-link" href="/Input">Input Data</a>
      <a class="nav-link" href="/Metode">Tabel Perangkingan</a>
      <a class="nav-link" href="/">Logout</a>
     
    </div>
  </div>
</nav>
<!-- box -->
<div id="box1">

</br>
<div class="container">
  <div class="col">

        <p class="headertext1">SELAMAT DATANG</p>
        <p class="headertext1">ADMIN</p>
        

  </div>
  
</div>

</div>
<?php if (session()->getFlashdata('pesan')) :?>
  <div class="alert alert-success" role="alert">
  <?= session()->getFlashdata('pesan'); ?>
</div>
<?php endif; ?>

</br>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Indekos</th>
      <th scope="col">Gambar</th>
      <th scope="col">Jarak ke kampus</th>
      <th scope="col">Harga Indekos</th>
      <th scope="col">keamanan</th>
      <th scope="col">kebersihan</th>
      <th scope="col">fasilitas</th>
      <th scope="col">Parkiran</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php $i = 1; ?>
  <?php 
    foreach($alternatif as $row): ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><?=$row['nama_indekos']; ?> | <a href="/Homeadmin/<?=$row['slug']; ?>">Lihat Detail</a></td>
      <td><img src="/img/<?=$row['img']; ?>" alt="" width="100"></td>
      <td><?=$row['lokasi']; ?> M</td>
      <td>Rp.<?=$row['harga']; ?></td>
	    <td><?=$row['keamanan']; ?></td>
      <td><?=$row['kebersihan']; ?></td>
      <td><?=$row['fasilitas']; ?></td>
      <td><?=$row['parkiran']; ?></td>
      <td>
          <a href="/Edit/<?=$row['id']; ?>"><button type="button" class="btn btn-primary">Edit</button></a> | 
          <form action="/CRUD/<?=$row['id']; ?>" methode="post" class="d-inline">
             <input type="hidden" name="_methode" Value="delete"> 
             <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin ?');" >Hapus</button>
          </form>
      </td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>



</br>
<div class="card text-center">
  <div class="card-header">
    WEB SKRIPSI
  </div>
  <div class="card-body">
   
    <p class="card-text">WEB ini dibuat untuk memenuhi Tugas Akhir</p>
    <p class="card-text">untuk mendapatkan gelar Sarjana Teknik</p>
   
  </div>
  
</div>
</div>
<!-- tutup filter -->
</body>
</html>
<?php endif; ?>



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
      <a class="nav-link active" href="/BRadmin">Home <span class="sr-only">(current)</span></a>
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
<!-- tutup box -->

<!-- konten -->
<?= $this->renderSection('content2');?>
<!-- tutup konten -->

<!-- footer -->
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

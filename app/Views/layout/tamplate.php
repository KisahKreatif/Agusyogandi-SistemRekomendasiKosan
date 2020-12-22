<!DOCTYPE html>
<html lang="en">
<head>
  <title>HOME | Web Rekomendasi Indekos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="/css/headerstyle.css">
</head>
<body>

<!-- box -->
<div id="box1">
</br>

<!-- login admin modal -->



<a href="#" data-toggle="modal" data-target="#exampleModal">
<p class="headeradmin">Login Admin</p> 

<?php if(session()->has('error')): ?>
                        <p class="sess"><?=session()->getFlashdata('error') ?></p>
                    <?php endif; ?>
<?php if(session()->has('errorPW')): ?>
                        <p class="sess"><?=session()->getFlashdata('errorPW') ?></p>
                    <?php endif; ?>



                
                    



</a>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-body">
    
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <center><div class="h3"><h3>Login Admin<h3></div>
        
      </br>
      </br>
      <img src="/img/logouin.png" class="logouinform" >
      </center>
      <form action="/Alternatif/login" method="post">
      </br>
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" id="username" class="form-control"  >
            
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" id="password" class="form-control">

          </div>
        
      </div>
      
        <center>
        <button type="submit" class="btn btn-primary" >LOGIN</button>
        </center>
        </br>
        </form>
    </div>
  </div>
</div>
<!-- tutup login admin modal -->

<!-- header text -->

<p class="headertext1">SELAMAT DATANG</p>
</br>
<p class="headertext2">Di WEB Rekomendasi Indekos</p>
<!-- tutup header text -->

<!-- tabel pilihan filter -->
<center>
<table class="table table-borderless">
  
    
      <th>
      <center>
      <img src="/img/h2.png" class="imgheader" width=200px >
      </br>
      <a href="/Pages/listviewLk">
      <font face="Century Gothic" color="white" size="5">Indekos
      </br>
      Laki-laki</font></a></center>
      </th>

      <th>
      <center>
      <img src="/img/h1.png" class="imgheader" width=200px>
      </br>
      <a href="/Pages/listviewPr">
      <font face="Century Gothic" color="white" size="5">Indekos
      </br>
      Perempuan</font></center>
      </th>
      
      <th>
      <center>
      <img src="/img/src2.png" class="imgheader2" width=200px>
      </br>
      <a href="/Pages/listviewHg">
      <font face="Century Gothic" color="white" size="5">Cari Indekos
      </br></font></center>
      </th>
<!--       
      <th>
      <center>
      <img src="/img/h4.png" class="imgheader" width=200px >
      </br>
      <a href="/Pages/listviewLok">
      <font face="Century Gothic" color="white" size="5">Cari Indekos
      </br>
      Berdasarkan Domisili</font></center>
      </th> -->
      
   
  
</table>
</center>
<!-- tutup tabel pilihan filter -->
</div>
<!-- tutup box -->

<!-- konten -->
<?= $this->renderSection('content');?>
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
<!-- tutup filter -->
</body>
</html>

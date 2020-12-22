<?= $this->extend('layout/tamplateadmin');?>

<?= $this->section('content2');?>

</br>
<center><h1>Input Data Kriteria  </h1></center>
<div class="container">
  <div class="row">
    <div class="col-sm">

    </br>
    </br>
<form action="/CRUD/create" method="post" enctype="multipart/form-data">
<?= csrf_field();?>
<div class="form-group">
  <div class="custom-file">
    <input type="file" class="custom-file-input<?= ($validation->hasError('img')) ? 'is-invalid' : ''; ?>" id="img" name="img">
    <div class="invalid-feedback">
        <?= $validation->getError('img'); ?>
      </div>
    <label class="custom-file-label" for="img">Pilih Gambar</label>
  </div>
  </br>
  </br>
  <input class="form-control" type="text" id="nama_indekos" name="nama_indekos" placeholder="Nama Indekos">
  </br>
  <input class="form-control" type="text" id="lokasi" name="lokasi" placeholder="Jarak" >
  <small id="emailHelp" class="form-text text-muted">*Jarak dari Kosan ke Kampus *200 tanpa M/KM</small>
  </br>
  <input class="form-control" type="text" id="harga" name="harga" placeholder="Harga" >
  <small id="emailHelp" class="form-text text-muted">*contoh 6000000(tanpa titik)</small>
  </br>
  <input class="form-control" ptype="text" id="alamat_indekos" name="alamat_indekos" placeholder="Alamat" >
  </br>
  <input class="form-control" type="text" id="jenis_indekos" name="jenis_indekos" placeholder="Jenis" >
  </br>
  <input class="form-control" type="text" id="no_tlp" name="no_tlp" placeholder="No Telepon" >
  </div>
</div>
    <div class="col-sm"> 
    </br>
    </br>
<div class="form-group">
<input class="form-control" type="text" id="keamanan" name="keamanan"  placeholder="Keamanan" >
  <small id="emailHelp" class="form-text text-muted">*masukan nilai antara 1-10</small>
  </br>
  <input class="form-control" type="text" id="kebersihan" name="kebersihan"  placeholder="Kebersihan" >
  <small id="emailHelp" class="form-text text-muted">*masukan nilai antara 1-10</small>
  </br>
  <input class="form-control" type="text" id="fasilitas" name="fasilitas"  placeholder="fasilitas" >
  <small id="emailHelp" class="form-text text-muted">*masukan nilai antara 1-10</small>
  </br>
  <input class="form-control" type="text" id="parkiran" name="parkiran"  placeholder="Parkiran" >
  <small id="emailHelp" class="form-text text-muted">*masukan nilai antara 1-10</small>
</br>
  <button type="submit" class="btn btn-primary btn-lg btn-block" >Submit</button>
</form>
</div>
    
  </div>
</div>


<?= $this->endSection();?>
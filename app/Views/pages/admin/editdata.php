<?= $this->extend('layout/tamplateadmin');?>

<?= $this->section('content2');?>

</br>
<center><h1>Edit Data Kriteria  </h1></center>
<div class="container">
  <div class="row">
    <div class="col-sm">
    
    </br>
    </br>
<form action="/CRUD/update" method="post">
<?= csrf_field();?>
<div class="form-group">
<div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Id  </label>
    <div class="col-sm-10">
    <input class="form-control" type="text" readonly id="id" name="id" value="<?= $alternatif['id'];?>" >
    </div>
  </div>
<div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
    <input class="form-control" type="text" id="nama_indekos" readonly  name="nama_indekos" value="<?= $alternatif['nama_indekos'];?>" autofocus>
    </div>
  </div>
<div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Harga  </label>
    <div class="col-sm-10">
    <input class="form-control" type="text" id="harga" readonly  name="harga" value="<?= $alternatif['harga'];?>" >
  <small id="emailHelp" class="form-text text-muted">*contoh 6000000(tanpa titik)</small>
    </div>
  </div>
<div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Domisili </label>
    <div class="col-sm-10">
    <input class="form-control" type="text" id="domisili" name="domisili" placeholder="cipadung / manisi" >
    </div>
  </div>
<div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Alamat </label>
    <div class="col-sm-10">
    <input class="form-control" type="text" id="alamat_indekos" name="alamat_indekos" placeholder="<?= $alternatif['alamat_indekos'];?>" >
    </div>
  </div>
<div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Jenis  </label>
    <div class="col-sm-10">
    <input class="form-control" type="text" id="jenis_indekos" name="jenis_indekos" placeholder="<?= $alternatif['jenis_indekos'];?>" >
    </div>
  </div>
<div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">No Tlp  </label>
    <div class="col-sm-10">
    <input class="form-control" type="text" id="no_tlp" name="no_tlp" placeholder="<?= $alternatif['no_tlp'];?>" >
    </div>
  </div>


  </div>
</div>


    <div class="col-sm"> 
    </br>
    </br>
<div class="form-group">
<div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Jarak/Lokasi  </label>
    <div class="col-sm-10">
    <input class="form-control" type="text" id="keamanan" readonly name="lokasi"  value="<?= $alternatif['lokasi'];?>" >
  <small id="emailHelp" class="form-text text-muted">*masukan nilai antara 1-10</small>
    </div>
  </div>
<div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Keamanan  </label>
    <div class="col-sm-10">
    <input class="form-control" type="text" id="keamanan" readonly name="keamanan"  value="<?= $alternatif['keamanan'];?>" >
  <small id="emailHelp" class="form-text text-muted">*masukan nilai antara 1-10</small>
    </div>
  </div>
<div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Kebersihan  </label>
    <div class="col-sm-10">
    <input class="form-control" type="text" id="kebersihan" readonly name="kebersihan"  value="<?= $alternatif['kebersihan'];?>" >
  <small id="emailHelp" class="form-text text-muted">*masukan nilai antara 1-10</small>
    </div>
  </div>
<div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Fasilitas  </label>
    <div class="col-sm-10">
    <input class="form-control" type="text" id="fasilitas" readonly name="fasilitas"  value="<?= $alternatif['fasilitas'];?>" >
  <small id="emailHelp" class="form-text text-muted">*masukan nilai antara 1-10</small>
    </div>
  </div>
<div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Akses Kendaraan  </label>
    <div class="col-sm-10">
    <input class="form-control" type="text" id="parkiran" readonly name="parkiran"  value="<?= $alternatif['parkiran'];?>" >
  <small id="emailHelp" class="form-text text-muted">*masukan nilai antara 1-10</small>
</br>
    </div>
  </div>
  <button type="submit" class="btn btn-primary btn-lg btn-block" >Submit</button>
</form>
</div>
    
  </div>
</div>


<?= $this->endSection();?>
<?= $this->extend('layout/tamplateadmin');?>

<?= $this->section('content2');?>

</br>
<div class="container">
<h1>DATA ALTERNATIF</h1>
<p>>> <?= $alternatif['nama_indekos'];?></p>
</br>
<div class="col">
<div class="row">

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nama Indekos</th>
      <th scope="col">Gambar</th>
      <th scope="col">Slug</th>
      <th scope="col">Domisili</th>
      <th scope="col">Alamat</th>
      <th scope="col">Jenis</th>
      <th scope="col">No Telepon</th>
      <th scope="col">Jarak Ke Kampus</th>


    </tr>
  </thead>
  <tbody>

    <tr>
      <th><?= $alternatif['id'];?></th>
      <td><?= $alternatif['nama_indekos'];?></td>
      <td><img src="/img/<?=$alternatif['img']; ?>" alt="" width="100"></td>
      <td><?= $alternatif['slug'];?></td>
      <td><?= $alternatif['domisili'];?></td>
	    <td><?= $alternatif['alamat_indekos'];?></td>
      <td><?= $alternatif['jenis_indekos'];?></td>
      <td><?= $alternatif['no_tlp'];?></td>
      <td>Rp.<?= $alternatif['lokasi'];?></td>



      
    </tr>

  </tbody>
</table>
</div>
</br>
<div class="row">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Harga</th>
      <th scope="col">Nilai Keamanan</th>
      <th scope="col">Nilai Kebersihan</th>
      <th scope="col">Nilai Fasilitas</th>
      <th scope="col">Nilai Parkiran</th>

      <th scope="col">Nilai Ranking</th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <td><?= $alternatif['harga'];?></td>
      <td><?= $alternatif['keamanan'];?></td>
      <td><?= $alternatif['kebersihan'];?></td>
      <td><?= $alternatif['fasilitas'];?></td>
      <td><?= $alternatif['parkiran'];?></td>

      <td><?= $alternatif['nilai_rangking1'];?></td>
      
    </tr>

  </tbody>
</table>
</div>
</div>
</div>


<?= $this->endSection();?>
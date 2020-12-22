<?= $this->extend('layout/tamplateadmin');?>

<?= $this->section('content2');?>
</br>
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


<?= $this->endSection();?>
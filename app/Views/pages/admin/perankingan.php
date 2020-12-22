
<?= $this->extend('layout/tamplateadmin');?>

<?= $this->section('content2');?>

</br>

<div class="row">
  <div class="col">
  <h1>DATA PERANGKINGAN </h1>
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Peringkat</th>
      <th scope="col">Nama Indekos</th>
      <th scope="col">Lokasi(K1)</th>
      <th scope="col">Harga(K2)</th>
      <th scope="col">Fasilitas(K3)</th>
      <th scope="col">Keamanan(K4)</th>
      <th scope="col">Kebersihan(K5)</th>
      <th scope="col">Parkiran(K6)</th>
      
    </tr>
  </thead>
  <tbody>

  <?php 
  $db      = \Config\Database::connect();
  $builder = $db->query("SELECT * FROM data_alternatif ORDER BY nilai_rangking1 ASC");
  $builder2 = $db->query("SELECT * FROM data_alternatif ORDER BY nilai_rangking2 ASC");
  $builder3 = $db->query("SELECT * FROM data_alternatif ORDER BY nilai_rangking3 ASC");
  $i=1;
    foreach($builder->getResultArray() as $row): ?>
   
    <tr>

      <td><?=$i++; ?></td>
      <td><?=$row['nama_indekos']; ?></td>
      <td><?=$row['lokasi']; ?> M</td>
      <td>Rp.<?=$row['harga']; ?></td>
	    <td><?=$row['fasilitas']; ?></td>
      <td><?=$row['keamanan']; ?></td>
      <td><?=$row['kebersihan']; ?></td>
      <td><?=$row['parkiran']; ?></td>
      
     
      </tr>
    <?php endforeach; ?>
   
       
    
       
      
      </tbody>
</table>   
  </div>
  </div>


  <div class="row">
  <div class="col-sm-4">
  <h1>Data Q=0,5</h1>
  <table class="table">
  <thead class="thead-dark">
    <tr>
     
      
      <th scope="col">Urutan</th>
      <th scope="col">Nama Indekos</th>
      <th scope="col">Nilai Rangking</th>
    </tr>
  </thead>
  <tbody>

    <?php 
    $i=1;
    foreach($builder->getResultArray() as $row): ?>
        <tr>
        <td><?=$i++; ?></td>
        <td><?= $row['nama_indekos'];?></td>
        <td><?= $row['nilai_rangking1'];?></td>
        </tr>
       <?php endforeach;?>
    
       
      
      </tbody>
</table>   
</div>

<div class="col-sm-4">
  <h1>Data Q=0,4</h1>
  <table class="table">
  <thead class="thead-dark">
    <tr>
     
      
      <th scope="col">Urutan</th>
      <th scope="col">Nama Indekos</th>
      <th scope="col">Nilai Rangking</th>
    </tr>
  </thead>
  <tbody>

    <?php 
    $i=1;
    foreach($builder2->getResultArray() as $row): ?>
        <tr>
        <td><?=$i++; ?></td>
        <td><?= $row['nama_indekos'];?></td>
        <td><?= $row['nilai_rangking2'];?></td>
        </tr>
       <?php endforeach;?>
    
       
      
      </tbody>
</table>   
</div>

<div class="col-sm-4">
  <h1>Data Q=0,6</h1>
  <table class="table">
  <thead class="thead-dark">
    <tr>
     
      
      <th scope="col">Urutan</th>
      <th scope="col">Nama Indekos</th>
      <th scope="col">Nilai Rangking</th>
    </tr>
  </thead>
  <tbody>

    <?php 
    $i=1;
    foreach($builder3->getResultArray() as $row): ?>
        <tr>
        <td><?=$i++; ?></td>
        <td><?= $row['nama_indekos'];?></td>
        <td><?= $row['nilai_rangking3'];?></td>
        </tr>
       <?php endforeach;?>
    
       
      
      </tbody>
</table>   
</div>
</div>


<hr class="hr"/>
</br><center>
    <h1>INFORMASI PERANGKINGAN</h1>
    <h3>solusi kompromi 2 kondisi</h3>
    
</center>
</br>
<hr class="hr"/>
  
<div class="row">
  <div class="col-sm-6">
  </br>
     <center> <h1> Kondisi 1 </h1> </center>
    <center> <?= $kondisi1;?></center>
  </br>
  </div>

  <div class="col-sm-6">
  </br>
     <center> <h1> Kondisi 2 </h1> </center>
     <center> <?= $kondisi2;?></center>
     <center> <h4> karena peringkat 1, 2 dan 3 </h3> </center> 
     <center> <h4> di tempati oleh alternatif yang sama </h4> </center>
  </br>
</div>
</div>






  
  

<?= $this->endSection();?>
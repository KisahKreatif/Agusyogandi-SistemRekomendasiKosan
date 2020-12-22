<?= $this->extend('layout/tamplate');?>

<?= $this->section('content');?>
<?php 

  $db      = \Config\Database::connect();
  $builder = $db->table('data_alternatif');
  $totalData = $builder->countAll();
  $builder = $db->query("SELECT * FROM data_alternatif ORDER BY nilai_rangking1 ASC");
  
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
 ?>
<!-- paling di rekomendasikan -->
<p class="text1"> PALING DI REKOMENDASI</p>
<hr class="hr"/>
</br>

<div class="container-xl">
  

</br>
<center> <h1>PERINGKAT 1</h1></center>
  <div class="row">
    <div class="col">
	<div class="rekhome2">
 
  <?php for($i=0;$i<1;$i++){ ?>
			<p><b>Nama Indekos: </b><?= $NamaIndekos[$i]; ?></p>
			<p><b>Alamat Indekos: </b><?= $Alamat[$i]; ?></p>
			<p><b>Jenis Indekos: </b>	<?= $Jenis[$i]; ?></p>
      <p><b>Harga Indekos: </b>Rp.<?= $Harga[$i]; ?></p>
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
		<a href="/HomePages/<?=$Slug[$i]; ?>"><button type="button" class="btn btn-primary">Lihat Detail</button></a>
		</div>	
    </div>
    <div class="col"><center>
	<img src="/img/<?= $Image[$i]; ?>" class="imghomerek" ><center>
  <?php } ?>
    </div>
  </div>


  </br>
  </br>
  <center> <h1>PERINGKAT 2</h1></center>
  <div class="row">
    <div class="col">
	<div class="rekhome2">
  <?php for($i=1;$i<2;$i++){ ?>
			<p><b>Nama Indekos: </b><?= $NamaIndekos[$i]; ?></p>
			<p><b>Alamat Indekos: </b><?= $Alamat[$i]; ?></p>
			<p><b>Jenis Indekos: </b>	<?= $Jenis[$i]; ?></p>
      <p><b>Harga Indekos: </b>Rp.<?= $Harga[$i]; ?></p>
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
		<a href="/HomePages/<?=$Slug[$i]; ?>"><button type="button" class="btn btn-primary">Lihat Detail</button></a>
		</div>	
    </div>
    <div class="col"><center>
	<img src="/img/<?= $Image[$i]; ?>" class="imghomerek" ><center>
  <?php } ?>
    </div>
  </div>


  </br>
  </br>
  <center> <h1>PERINGKAT 3</h1></center>
  <div class="row">
    <div class="col">
	<div class="rekhome2">
  <?php for($i=2;$i<3;$i++){ ?>
			<p><b>Nama Indekos: </b><?= $NamaIndekos[$i]; ?></p>
			<p><b>Alamat Indekos: </b><?= $Alamat[$i]; ?></p>
			<p><b>Jenis Indekos: </b>	<?= $Jenis[$i]; ?></p>
      <p><b>Harga Indekos: </b>Rp.<?= $Harga[$i]; ?></p>
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
		<a href="/HomePages/<?=$Slug[$i]; ?>"><button type="button" class="btn btn-primary">Lihat Detail</button></a>
		</div>	
    </div>
    <div class="col"><center>
	<img src="/img/<?= $Image[$i]; ?>" class="imghomerek" ><center>
  <?php } ?>
    </div>
  </div>

  </div>


<!-- tutup paling di rekomendasikan-->

<!--peringkat selanjutnya-->
</br>
<p class="text1"> Peringkat Selanjutnya</p>
<hr class="hr"/>
</br><center>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Indekos</th>
      <th scope="col">alamat indekos</th>
	  <th scope="col">Jenis Indekos</th>
	  <th scope="col">Harga Indekos</th>
    <th scope="col">Rating</th>
	  <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $a = 4; ?>
    <?php for($i=3;$i<$totalData;$i++){ ?>
    <tr>
      <th scope="row"><?= $a++; ?></th>
      <td><?=$NamaIndekos[$i]; ?></td>
      <td><?=$Alamat[$i]; ?></td>
	    <td><?=$Jenis[$i]; ?></td>
      <td>Rp.<?=$Harga[$i]; ?></td>
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

      <td>
          <a href="/HomePages/<?=$Slug[$i]; ?>"><button type="button" class="btn btn-primary">Lihat Detail</button></a> 
          
      </td>
    </tr>
    <?php } ?>
    
  </tbody>
</table>
</center>
</br>
<!--tutup peringkat selanjutnya-->
<?= $this->endSection();?>
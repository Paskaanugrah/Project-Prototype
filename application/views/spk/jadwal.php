
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Asal</th>
      <th scope="col">Tujuan</th>
      <th scope="col">Kereta</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Waktu</th>
      
    </tr>
  </thead>
   
  <tbody>


    <?php foreach ($jadwal->result() as $baris) { ?>
    <form action="<?php echo base_url('index.php/spk/pesan') ?>" method="post" style="border:none;">
    <tr>
      <th scope="row"> <?php echo $baris->id_jdw; ?></th>
      <td>
        <input type="text" class="form-control" name="asal" value="<?php echo $baris->asal; ?>"  enabled>
      </td>
      <td>
        <input type="text" class="form-control" name="tujuan" value="<?php echo $baris->tujuan; ?>"  enabled>
      </td>
      <td>
        <input type="text" class="form-control" name="kereta" value="<?php echo $baris->kereta; ?>"  enabled>
      </td>
      <td>
        <input type="text" class="form-control" name="tanggal" value="<?php echo $baris->tanggal; ?>"  enabled>
      </td>
      <td>
        <input type="text" class="form-control" name="waktu" value="<?php echo $baris->waktu; ?>"  enabled>
      </td>
          
      <td>
        <button type="submit" class="btn btn-primary"> 
         <i class="fa fa-pencil" aria-hidden="true">  Pesan</i>
       </button>      
     </td>

    </tr>
     </form>
    <?php } ?>   

  </tbody>
   
</table>

 <!-- <form action="" method="post" style="border:none;">
<label>Jumlah</label>
     <input type="number" class="form-control" id="" name="jumlah" style="width:150px; ">

   </form>


 -->
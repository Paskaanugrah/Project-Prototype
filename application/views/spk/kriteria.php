<h3>Kriteria</h3>
<a class="btn btn-primary" href="<?php echo base_url('index.php/spk/form_kriteria');?>">Tambah</a>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th>#</th>
      <th>Kriteria</th>
      <th>Tipe</th>
      
    </tr>
  </thead>
  <tbody>
  <?php foreach($kriteria->result() as $row) { ?>
    <tr>
      <th scope="row"><?php echo $row->id; ?></th>
      <td><?php echo $row->kriteria; ?></td>
      <td><?php echo $row->tipe; ?></td>
      
    <td>
   
    <a href="<?php echo base_url('index.php/spk/editKrit/'. $row->id) ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
    <a href="<?php echo base_url('index.php/spk/deleteKrit/'. $row->id) ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
    </td>
    </tr>
  <?php } ?>
   
  </tbody>
</table>
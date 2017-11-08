<h3>Sub Kriteria</h3>
<a class="btn btn-primary" href="<?php echo base_url('index.php/spk/form_sub_kriteria');?> ">Tambah</a>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th>#</th>
      <th width="200px">Kriteria</th>
      <th width="200px">Sub Kriteria</th>
      <th>Nilai</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($subkriteria->result() as $row) { ?>
    <tr>
      <th scope="row"><?php echo $row->id; ?></th>
      <td><?php echo $row->kriteria; ?></td>
      <td><?php echo $row->subkriteria; ?></td>
      <td><?php echo $row->nilai; ?></td>
    <td>
    
    <a href="<?php echo base_url('index.php/spk/editSub/'. $row->id) ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
    <a href="<?php echo base_url('index.php/spk/deleteSub/'. $row->id) ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
    </td>
    </tr>
  <?php } ?>
   
  </tbody>
</table>
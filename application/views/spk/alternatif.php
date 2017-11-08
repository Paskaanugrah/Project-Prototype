

<h3>Alternatif</h3>
<a class="btn btn-primary" href="<?php echo base_url('index.php/spk/form_alternatif');?>">Tambah</a>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th>#</th>
      <th>Alternatif</th>
      <th>Deskripsi</th>
      <th>Gambar</th>
    </tr>
  </thead>
  <tbody>

<?php foreach($alternatif->result() as $row) { ?>
    <tr>
      <th scope="row"><?php echo $row->id; ?></th>
      <td><?php echo $row->alternatif; ?></td>
      <td><?php echo $row->deskripsi; ?></td>
      <td><?php echo $row->gambar; ?></td>
    <td>
    <a href="<?php echo base_url('index.php/spk/editImg/'. $row->id) ?>" class="btn btn-sm btn-info"><i class="fa fa-file-image-o" aria-hidden="true"></i></a>
    <a href="<?php echo base_url('index.php/spk/editAlter/'. $row->id) ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
    <a href="<?php echo base_url('index.php/spk/deleteAlter/'.$row->id) ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
    </td>
    </tr>

<?php } ?>
  </tbody>
</table>


<a class="btn btn-primary" href="<?php echo base_url('index.php/mahasiswa/add'); ?>">Tambah</a>

<table class="table mt-4">
  <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
    </tr>
  </thead>
  <tbody>
	<?php foreach($mahasiswa->result() as $row) { ?>
    <tr>
      <th scope="row"><?php echo $row->id; ?></th>
      <td><?php echo $row->first_name; ?></td>
      <td><?php echo $row->last_name; ?></td>
	  <td>
		<a href="<?php echo base_url('index.php/mahasiswa/detail/'.$row->id) ?>" class="btn btn-sm btn-info">Detail</a>
		<a href="<?php echo base_url('index.php/mahasiswa/edit/'.$row->id) ?>" class="btn btn-sm btn-warning">Edit</a>
		<a href="<?php echo base_url('index.php/mahasiswa/delete/'.$row->id) ?>" class="btn btn-sm btn-danger">Delete</a>
	  </td>
    </tr>
	<?php } ?>
  </tbody>
</table>
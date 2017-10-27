
<h4>Ubah Data Mahasiswa</h4>

<form action="<?php echo base_url('index.php/mahasiswa/update/'.$mahasiswa->id); ?>" method="post" class="mt-4">
  <div class="form-group">
    <label>First Name</label>
    <input type="text" name="first_name" class="form-control" placeholder="First Name" value="<?php echo $mahasiswa->first_name; ?>">
  </div>
  <div class="form-group">
    <label>Last Name</label>
    <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="<?php echo $mahasiswa->last_name; ?>">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<h4>Tambah Mahasiswa Baru</h4>

<form action="<?php echo base_url('index.php/mahasiswa/save'); ?>" method="post" class="mt-4">
  <div class="form-group">
    <label>First Name</label>
    <input type="text" name="first_name" class="form-control" placeholder="First Name">
  </div>
  <div class="form-group">
    <label>Last Name</label>
    <input type="text" name="last_name" class="form-control" placeholder="Last Name">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
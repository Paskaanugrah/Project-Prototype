<div class="card" style="width: 50rem;">

  <div class="card-body" style="width:50rem; padding:10rem;">
    <h4 class="card-title">Ubah Password</h4>
     
<?php foreach($user->result() as $row) { ?>
            <form action="<?php echo base_url('index.php/user/updatePass');?>"">
             
              <div class="form-group">
                <label>Password Baru</label>
                <input type="password" class="form-control" name="password" placeholder="Masukan Password Baru" required>
              </div>
              
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" required>
                  Apakah anda yakin?
                </label>
              </div><br>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
<?php } ?>
  </div>
</div>
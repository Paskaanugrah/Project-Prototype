<div class="container" style="margin:20px;">
<h4>Pendaftaran</h4>
<hr>
<br>
            <form action="<?php echo base_url('index.php/spk/save'); ?>" method="post"  style="width:400px;">
              <div class="form-group" >
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" required="">
              </div>
              <div class="form-group" >
                <label>Nomor Identitas</label>
                <input type="text" class="form-control" placeholder="KTP/SIM" name="identitas" required="">
              </div>
              <div class="form-group" >
                <label>Username</label>
                <input type="text" class="form-control" placeholder="" name="username" required="">
              </div>
              <div class="form-group" >
                <label>Password</label>
                <input type="Password" class="form-control" placeholder="" name="password" required="">
              </div>
              <br>
              <div class="form-group">
                <label>Scan identitas (belum bisa)</label><br>
                <input type="file" name="gambar" />
              </div>

              <div class="form-group">
                <label><i class="text-muted" style="font-weight:small;">File berformat JPG, ukuran maksimal 1 MB</i></label>
              </div>


            
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input">
                  Apakah anda yakin ?
                </label>
              </div><br>
              <button type="submit" class="btn btn-primary">Daftar</button>
            </form>

</div>
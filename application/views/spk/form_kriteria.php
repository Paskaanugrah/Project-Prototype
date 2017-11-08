
    <h4>Kriteria</h4>
    
            <form action="<?php echo base_url('index.php/spk/saveKrit');?>" method="post" style="width:900px;">
              <div class="form-group" >
                <label>Kriteria</label>
                <input type="text" class="form-control" id=""  name="kriteria" required >
              </div>
              <div class="form-group">
                <label>Tipe</label>
                <select name="tipe" class="form-control" required>
                  <option value="Keuntungan">Keuntungan</option>
                  <option value="Biaya">Biaya</option>
                </select>
              </div>
              
                

           
              <br>
              <div class="form-group">
              <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
    

    <h4>Sub Kriteria</h4>
   
            <form style="width:900px;" action="<?php echo base_url('index.php/spk/saveSub');?>" method="post">
              <div class="form-group" >
                <label>Kriteria</label>
                <select name="kriteria" class="form-control" required>
                  <?php foreach($kriteria->result() as $row) { ?>
                    <option value="<?php echo $row->kriteria; ?>"><?php echo $row->kriteria; ?></option>
                    <?php } ?>
                </select>
                
              </div>
              <div class="form-group">
                <label>Sub Kriteria</label>
                <input type="text" class="form-control" id="" name="subkriteria">
              </div>
              <div class="form-group">
                <label>Nilai</label>
                <input type="number" class="form-control" id="" name="nilai" style="width:150px;">
              </div>
              
                

           
              <br>
              <div class="form-group">
              <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>

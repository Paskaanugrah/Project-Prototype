
    <h4>Alternatif</h4>
    
            <form action="<?php echo base_url('index.php/spk/updateAlter/'.$alternatif->id);?>" method="post" style="width:900px;">
              <div class="form-group" >
                <label>Alternatif</label>
                <input type="text" class="form-control" name="alternatif" value="<?php echo $alternatif->alternatif; ?>" >
              </div>
              <div class="form-group">
                <label>Deskripsi</label>
                <textarea class="form-control"  name="deskripsi"><?php echo $alternatif->deskripsi; ?></textarea>
              </div>
              
               

           
              <br>
              <div class="form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
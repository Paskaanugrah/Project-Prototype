<h4>Konsultasi</h4>
<form action="<?php echo base_url('index.php/spk/saveKonsul');?>" method="post" style="width:900px;">

							
								<div class="form-group">
									<label>Silakan masukkan nama Anda</label>
									<input type="text" class="form-control" name="nama" required>
								</div>

								<div class="alert alert-info" style="margin-top: 30px">Tentukan preferensi Anda terhadap masing-masing kriteria berikut</a></div>
								  <?php foreach($konsul->result() as $row) { ?>
								<div class="form-group">
									<label><?php echo $row->kriteria; ?> </label>
									<select class="form-control" name="12" required>
										<option value="5">Sangat Penting</option>
										<option value="4">Penting</option>
										<option value="3">Biasa</option>
										<option value="2">Tidak penting</option>
										<option value="1">Sangat Tidak penting</option>
									</select>
								</div>
								<?php } ?>
										
								
								<button type="submit" class="btn btn-info" style="margin-top: 15px"><i class="fa fa-check"></i> Proses</button>

								
							</form>
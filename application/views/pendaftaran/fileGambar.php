
	<br/><br/><br/>
 
	<div class="container">
	  <div class="row">
	    <div class="col-2"></div>
	    <div class="col-6"><h1>DATA PILOT</h1></div>
	    <div class="col-4"></div>
	  </div>
	</div>
	

<div class="container">
  <div class="row">

    <div class="col-2">
      <!-- bagian kiri -->
    </div>

    <div class="col-6">
	  	<div class="card-body">
		    <table border="0">
				

				<tr>
					<td>

						<div class="card">
						  <div class="card-header">
						    File Gambar KTP <?php echo $d['nama']; ?>
						  </div>
						  <div class="card-body">
						    <img width="300px" height="300px" src="<?= base_url('vendor/sbadmin2/img/Gambar'); ?>/<?= $d['gbr_KTP']; ?>">
						    <a href="<?= base_url('pendaftaran/downloadGambar'); ?>/<?= $d['gbr_KTP']; ?>" class="btn btn-primary">Downlaod</a>
						  </div>
						</div>
						


					</td>
					<td>
						
						<div class="card">
						  <div class="card-header">
						    File Gambar FOTO<?php echo $d['nama']; ?>
						  </div>
						  <div class="card-body">
						    <img width="300px" height="300px" src="<?= base_url('vendor/sbadmin2/img/Gambar'); ?>/<?= $d['gbr_foto']; ?>">
						    <a href="<?= base_url('pendaftaran/downloadGambar'); ?>/file=<?= $d['gbr_foto']; ?>" class="btn btn-primary">Downlaod</a>
						  </div>
						</div>

					</td>
				</tr>
				
			</table>
	  	</div>
    </div>

    <div class="col-4">
      <!-- Bagian kanan -->
    </div>

  </div>
</div>

	<!-- <script>
		window.print();
	</script> -->

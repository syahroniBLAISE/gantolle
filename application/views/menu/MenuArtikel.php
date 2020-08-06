<div class="container">
	
	<div class="row">
		<div class="col">
			<a class="btn btn-primary btn-xs active" href="<?= base_url('artikel/tambahArtikel'); ?>">Tambah Artikel</a>
		</div>
	</div>

	

	<div class="row">
		<div class="col">

			<div class="container-fluid">
			  <div class="row">	
			 <div class="scroll">	
					<table class="table table-hover table-striped" ">
					  <thead>
					    <tr>
					      <th >NO</th>
					      <th >judul artikel</th>
					      <th >Tanggal Publish</th>
					      <th ><h2>PILIHAN</h2></th>
					    </tr>
					  </thead>
					  <tbody>
						<?php 
							$no = 0;
							$ds = 1;

							while($no < count($artikel)){
							$id = $artikel[$no]['id'];
							
						?>
						<tr>		
							<td><?= $ds; ?></td>
							<td><?= $artikel[$no]['judul']; ?></td>
							<td><?= $artikel[$no]['tgl_post']; ?></td>
							
							
							<td >
								<a class="btn btn-primary btn-xs active" href="<?= base_url('artikel/editArtikel'); ?>/<?= $id ?>">Edit</a>
								<a class="btn btn-primary btn-xs active" href="<?= base_url('artikel/delete'); ?>/<?= $id ?>">Delete</a>
								 
								
						
							</td>
						</tr>
						<?php $no++; $ds++; }?>
					    
					  </tbody>
					</table>

			    </div>
			    
			  </div>
			</div>

		</div>
	</div>
</div>

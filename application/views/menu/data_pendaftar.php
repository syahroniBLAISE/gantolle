
	<div class="container">
	  <div class="row">
	    <div class="col-2"></div>
	    <div class="col-6"><h2>DAFTAR DATA PILOT</h2></div>
	    <div class="col-4"></div>
	  </div>
	</div>
	

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Nama</th>
      <th scope="col">Hari</th>
      <th scope="col">Gambar Foto</th>
      <th scope="col">Gambar KTP</th>
      <th scope="col">OPSI</th>
    </tr>
  </thead>
  <tbody>
	<?php 
		$no = 0;
		$ds = 1;

		while($no < count($d)){
		$id = $d[$no]['id'];
		
	?>
	<tr>		
		<td><?php echo $ds; ?></td>
		<td><?php echo $d[$no]['nama']; ?></td>
		<td><?php echo $d[$no]['hari']; ?></td>
		<td><?php echo $d[$no]['gbr_foto']; ?></td>
		<td><?php echo $d[$no]['gbr_KTP']; ?></td>
		<td>
			<a href="<?= base_url('pendaftaran/print'); ?>/<?= $id ?>" target="_blank">Print</a> |
			<a href="<?= base_url('pendaftaran/edit'); ?>/<?= $id ?>">Edit</a>  |
			<a href="<?= base_url('pendaftaran/delet'); ?>/<?= $id ?>">Delet</a>
	
		</td>
	</tr>
	<?php $no++; $ds++; }?>
    
  </tbody>
</table>

	<!-- <div class="container">
	  <div class="row">
	    <div class="col-2"></div>
	    <div class="col-6"><h4><a href="<?= base_url('auth/registration'); ?>">KEMBALI</a></h4></div>
	    <div class="col-4"></div>
	  </div>
	</div> -->








	<!-- <script>
		window.print();
	</script> -->
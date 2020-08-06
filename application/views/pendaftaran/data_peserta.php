

	<div class="container">
	  <div class="row">
	    <div class="col-2"></div>
	    <div class="col-6">
	    	<h3 align="left">
	    		<a class="btn btn-primary btn-xs active" href="<?= base_url('pendaftaran/printAll'); ?>" target="_blank">Print Data Pilot</a>
	    		<a class="btn btn-primary btn-xs active" href="<?= base_url('Pendaftaran/printPendaftaran'); ?>" target="_blank" >Print Blangko Pendaftaran</a>
	    	</h3>
	    	<h2>DAFTAR DATA PILOT</h2>
	    </div>
	    <div class="col-4"></div>
	  </div>
	</div>

	<div class="container-fluid">
	  <div class="row">	
	 <div class="scroll">	
			<table class="table table-hover table-striped" ">
			  <thead>
			    <tr>
			      <th >NO</th>
			      <th >Nama</th>
			      <th >Tgl Daftar / Edit</th>
			      <th >Category</th>
			      <th >No. Licence</th>
			      <th >Rating Pilot</th>
			      <th >Kontingen</th>
			      <th >No. Telpon</th>
			      <th >Email</th>
			      <th >Ukuran Kaos</th>
			      <th >Herky</th>
			      <th ><h2>PILIHAN</h2></th>
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
					<td><?php echo $d[$no]['tanggal_pendaftaran']; ?></td>
					<td><?php echo $d[$no]['category']; ?></td>
					<td><?php echo $d[$no]['fai_no']; ?></td>
					<td><?php echo $d[$no]['pilot_rating']; ?></td>
					<td><?php echo $d[$no]['team']; ?></td>
					<td><?php echo $d[$no]['nok_phone']; ?></td>
					<td><?php echo $d[$no]['email']; ?></td>
					<td><?php echo $d[$no]['nok_zip']; ?></td>
					<td><?php
			      		if($d[$no]['herky'] == 1){
			      			$herky = 'Menggunakan Herky';
			      				switch($d[$no]['trip_type']){
			      					case 1:
			      					$trip = "untuk pergi";
			      					break;
			      					case 2:
			      					$trip = "untuk pergi";
			      					break;
			      					case 3:
			      					$trip = "untuk pergi";
			      					break;
			      				}
			      				echo $herky.' '.$trip;
			      		}else {
			      		echo "Tidak Menggunakan Herky";
			      	}

			       ?></td>
					
					<td >
						<a class="btn btn-primary btn-xs active" href="<?= base_url('pendaftaran/print'); ?>/<?= $id ?>" target="_blank">Print</a>
						<a class="btn btn-primary btn-xs active" href="<?= base_url('pendaftaran/edit'); ?>/<?= $id ?>">Edit</a>
						<a class="btn btn-primary btn-xs active" href="<?= base_url('pendaftaran/fileGambar'); ?>/<?= $id ?>">lihat File Gambar</a> 
						
				
					</td>
				</tr>
				<?php $no++; $ds++; }?>
			    
			  </tbody>
			</table>

	    </div>
	    
	  </div>
	</div>






	<!-- <script>
		window.print();
	</script> -->
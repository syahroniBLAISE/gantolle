	
<!-- Baris Cop Halaman Penutup -->
	<div class="row">
		<div class="col">
			<h3><b>Daftar Pilot Peserta Kejurnas KTM seri 1</b></h3>
			<br>		
		</div>
	</div>
<!-- baris ke 2 isi data pembuka -->
	<div class="row">
		<div class="col">

<!-- tabel 1 sebelah kiri pembuka	 -->
		
<table class="table table-hover table-striped" ">
			  <thead>
			    <tr>
			      <th >NO</th>
			      <th >Nama</th>
			      <th >Kelas</th>
			      <th >Provinsi</th>
			      <th >Embarkasi</th>
			      <th >Keikut Dengan Herky</th>
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
					<td><?php echo $d[$no]['category']; ?></td>
					<td><?php echo $d[$no]['team']; ?></td>
					<td><?php echo $d[$no]['embarkasi']; ?></td>
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
				</tr>
				<?php $no++; $ds++; }?>
			    
			  </tbody>
			</table>


<!-- tabel 1 sebelah kiri penutup	 -->


		</div>
	</div>
<!-- baris ke 2 isi data Penutup -->

	
</div>
<!-- <script>
		window.print();
	</script> -->
</body>
</html>




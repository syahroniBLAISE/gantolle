	
<!-- Baris Cop Halaman Penutup -->
	<div class="row">
		<div class="col">
			<h3 align="center"><font color="blacK"><b>SURAT PERNYATAAN</b></font></h3>
			<br>
			<h5>Saya yang bertanda tangan di bawah ini :</h5>
			<br>		
		</div>
	</div>
<!-- baris ke 2 isi data pembuka -->
	<div class="row">
		<div class="col">

<!-- tabel 1 sebelah kiri pembuka	 -->
		<table class="table table-striped">
		  <thead>

		  </thead>
		  <tbody>

		    <tr>
		      <th scope="row" width="200">NAMA</th>
		      <td>:</td>
		      <td><?= $d['nama']; ?></td>
		    </tr>
		    <tr>
		      <th scope="row" width="150">Tanggal Lahir</th>
		      <td>:</td>
		      <td><?= $d['hari']; ?></td>
		    </tr>
		    <tr>
		      <th scope="row" width="150">Nomor Licence</th>
		      <td>:</td>
		      <td><?= $d['fai_no']; ?></td>
		    </tr>
		    <tr>
		      <th scope="row" width="150">Pilot Rating</th>
		      <td>:</td>
		      <td><?= $d['pilot_rating']; ?></td>
		    </tr>
		    <tr>
		      <th scope="row" width="150">Kontingen / Team</th>
		      <td>:</td>
		      <td><?= $d['team']; ?></td>
		    </tr>
		    <tr>
		      <th scope="row" width="150">Alamat</th>
		      <td>:</td>
		      <td><?= $d['address1']; ?></td>
		    </tr>
		    <tr>
		      <th scope="row" width="150">Nomor Telp/Hp</th>
		      <td>:</td>
		      <td><?= $d['phone']; ?></td>
		    </tr>
		    <tr>
		      <th scope="row" width="150">Email</th>
		      <td>:</td>
		      <td><?= $d['email']; ?></td>
		    </tr>
		        
		  </tbody>
		</table>
<!-- tabel 1 sebelah kiri penutup	 -->



		</div>
		<div class="col">

<!-- tabel 2 sebelah Kanan pembuka	 -->
			<table class="table table-striped">
			  <thead>
			  </thead>
			  <tbody>
			  	<tr>
			      <th scope="row" width="200" >Ukuran Kaos</th>
			      <td>:</td>
			      <td><?= $d['nok_zip']; ?></td>
			    </tr>
			    <tr>
			      <th scope="row" >Pabrikan Gantolle</th>
			      <td>:</td>
			      <td><?= $d['glider_make']; ?></td>
			    </tr>
			    <tr>
			      <th scope="row" >Jenis Gantolle</th>
			      <td>:</td>
			      <td><?= $d['glider_model']; ?></td>
			    </tr>
			    <tr>
			      <th scope="row" >Warna Gantolle</th>
			      <td>:</td>
			      <td><?= $d['glider_color']; ?></td>
			    </tr>
			    <tr>
			      <th scope="row" >Harnes</th>
			      <td>:</td>
			      <td><?= $d['harnes']; ?></td>
			    </tr>
			    <tr>
			      <th scope="row" >Parasut Cadangan</th>
			      <td>:</td>
			      <td><?= $d['parasutEmergensi']; ?></td>
			    </tr>
			    <tr>
			      <th scope="row" >Keberangkatan Herky</th>
			      <td>:</td>
			      <td>
			      	<?php
			      		if($d['herky'] == 1){
			      			$herky = 'Menggunakan Herky';
			      				switch($d['trip_type']){
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
			  </tbody>
			</table>

		</div>
	</div>
<!-- baris ke 2 isi data Penutup -->

	<div class="row">
		<div class="col">
			<h5 >Dengan ini menyatakan bahwa bahwa data di atas adalah benar.
					<br>	
					<br>	
				Apabila terjadi sesuatu terhadap diri saya selama pertandingan, saya tidak akan menuntut hal apapun kepada panitia pelaksana Bupati padang pariaman cup 2020 (kejurnas gantolle seri I KTM ).
					<br>	
					<br>	
				demikianlah surat pernyataan ini saya buat dengan  sebenarnya, tanpa paksaan dari  pihak manapun.</h5>
			<br>		
		</div>
	</div>


	<div class="row">	
		<div class="col">
		<br>	
		<br>
		<br>	
		<br>
		<br>	
		<br>	
		<br>	
			
			
		<h6 align="center">..............................................<br>
		MANAGER</h6>		
		</div>	
				
		<div class="col" >
			
			<h6 align="center">Padang Pariaman, <?= date('d-M-Y'); ?></h6>
			<br>	
			
			    <img class="img-fluid" align="center" src="<?= base_url('assets/'); ?>/img/kotakMaterai.jpg" alt="">	
			<br>
			<br>

			<h6 align="center">
				..............................................<br>
				PESERTA
			</h6>
			

					
		</div>
		
		
	</div>
	<br>
	<br>	
	<br>	
</div>
<!-- <script>
		window.print();
	</script> -->
</body>
</html>


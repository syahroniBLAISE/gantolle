<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        <?= $title; ?>
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">



    	<script>
	function printContent(el){
		var restorepage = document.body.innerHTML;
		var printcontent = document.getElementById(el).innerHTML;
		document.body.innerHTML = printcontent;
		window.print();
		document.body.innerHTML = restorepage;
	}
	</script>
	<style type="text/css">
		hr{
			height: 	10px;
			border-top: 3px double #8c8c8c;

		}
	</style>	

</head>
<body>

	<br>	
	<br>

<div class="container">
	<div class="row">
			<div class="col"><button ><a href="<?= base_url('auth/'); ?>">Kembali Ke Home</a></button></div>	
	</div>	
</div>
	<br>	
	<br>

<div class="container" id="print">
<!-- Baris Cop Halaman Pembuka -->
	<div class="row">
		<div class="col">
			<br>
			<br>

            <img class="img-fluid" src="<?= base_url('assets/'); ?>img/panitia.jpeg" alt="">	
		</div>
		<div class="col-8">
			<br>	
			<br>	
            <h2 align="center" ><b>BUPATI PADANG PARIAMAN CUP 2020</b></h2>
            <h2 align="center" ><b>KEJURNAS GANTOLE SERI 1 KTM</b></h2>
            <h6 align="center" ><b>Sekretariat : FASIDA SUMBAR Lanud Sutan Sjahril, Padang</b></h6>
            <h6 align="center" ><b>Telepon : +62751 760136 Hp: 0823 9092 5084</b></h6>
		</div>
		<div class="col" align="right">
			<br>
			<br>
			
            <img class="img-fluid" src="<?= base_url('assets/'); ?>/img/pgpi.jpg" alt="">	
		</div>
	</div>
	
	<hr>		
	<br>	
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
			      <th >Size Baju</th>
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
					<td><?php echo $d[$no]['nama'].' '.$d[$no]['last_name']; ?></td>
					<td><?php echo $d[$no]['nok_zip']; ?></td>
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





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
</head>
<body>
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
						    Featured
						  </div>
						  <div class="card-body">
						    <h5 class="card-title">Hasil Pendaftaran</h5>
						    <p class="card-text">Selamat <?php echo $d['nama']; ?>.., anda telah berhasil mendaftar pada kejuaraan seri 1 KTM Bupati Cup Padang Pariaman 'Sumatera Barat', pada kelas </p>

						    	<ul class="list-group list-group-flush">
						    
						    <li class="list-group-item"><?php echo $d['pilot_rating']; ?></li>
						    <li class="list-group-item"><?php echo $d['fai_no']; ?></li>
						    <li class="list-group-item"><?php echo $d['phone']; ?></li>
						    <li class="list-group-item"><?php echo $d['email']; ?></li>
						    
						  </ul>
						    <a href="#" class="btn btn-primary">Go somewhere</a>
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
</body>
</html>
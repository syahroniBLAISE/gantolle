
 <html>
<head>
	<title><?= $title; ?></title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
						
						<div class="card" style="width: 18rem;">
						  <img src="gambar/profilPicture.jpg" class="card-img-top" alt="...">
						  <div class="card-body">
						    <h5 class="card-title"><?php echo $d['nama']; ?></h5>
						  </div>
						  <ul class="list-group list-group-flush">
						    <li class="list-group-item"><?php echo $d['pilot_rating']; ?></li>
						    <li class="list-group-item"><?php echo $d['fai_no']; ?></li>
						    <li class="list-group-item"><?php echo $d['phone']; ?></li>
						    <li class="list-group-item"><?php echo $d['email']; ?></li>
						  </ul>
						  <div class="card-body">
						    <<!-- a href="<?php echo $url ?>/view.php" class="card-link">KEMBALI</a> --> |
						    <!-- <a href="<?php echo $url ?>/print.php?id=<?php echo $d['id']; ?>" class="card-link">CETAK</a> -->
						    <!-- <?= base_url('auth/registration'); ?> -->
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
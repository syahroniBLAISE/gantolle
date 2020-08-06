<!-- <div class="container">
	
	<div class="row">
		<div class="col">
			
		</div>
	</div>

	<div class="row">
		<div class="col-12">

			<form action="<?= base_url('Artikel/inputArtikel/edit'); ?>/<?= $artikel['id']; ?>" method="post" enctype="multipart/form-data">
				<div class="input-group">
				  	<div class="input-group-prepend">
				    	<span class="input-group-text">Judul</span>
				  	</div>
						<input value="<?= $artikel['judul']; ?>" name="judul" id="judul" class="form-control" aria-label="With input"></input>
						<input hidden name="tgl_post" value="<?php $tgl=date('Y-m-d h:i:sa'); echo $tgl; ?>" type="text" id="tgl_post"></input>
				</div>
				<div class="input-group">
				  	<div class="input-group-prepend">
				    	<span class="input-group-text">Text Artikel</span>
				  	</div>
				  		<textarea rows="18" cols="100"  value=""  name="artikel" id="artikel" class="form-control" aria-label="With textarea"><?= $artikel['artikel']; ?></textarea>
				</div>
				<br>
			        	<input type="submit" value="simpan" name="simpan" >
				<br>                                   

			        	<input type="reset" name="Reset" value="Reset">
			</form>

		</div>
	</div>

	
</div> -->






<div class="row">
		<div class="col">
			<form action="<?= base_url('Artikel/inputArtikel/edit'); ?>/<?= $artikel['id'];  ?>" method="post" enctype="multipart/form-data">
				<div class="input-group">
				  <div class="input-group-prepend">
				    <span class="input-group-text">Judul</span>
				  </div>
				  <input name="judul" id="judul" class="form-control" aria-label="With input" value="<?= $artikel['judul'];  ?>"></input>

				  <input hidden name="tgl_post" value="<?php $tgl=date('Y-m-d h:i:sa'); echo $tgl; ?>" type="text" id="tgl_post"></input>
				</div>
				<div id="content">
					<fieldset>
						
						<textarea id="artikel" name="artikel" class="widgEditor nothing">
							<?= $artikel['artikel'];  ?>
						</textarea>
					</fieldset>		
				</div>
				<br>
			        <input type="submit" value="simpan" name="simpan" >
				<br>                                   

			        <input type="reset" name="Reset" value="Reset">
			</form>
		</div>
	</div>




	<style type="text/css" media="all">
		@import "<?= base_url('assets/'); ?>SourchEditor/css/info.css";
		@import "<?= base_url('assets/'); ?>SourchEditor/css/main.css";
		@import "<?= base_url('assets/'); ?>SourchEditor/css/widgEditor.css";
	</style>

	<script type="text/javascript" src="<?= base_url('assets/'); ?>SourchEditor/scripts/widgEditor.js"></script>


		
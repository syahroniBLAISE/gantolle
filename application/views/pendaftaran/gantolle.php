<!doctype html>
<html lang="us">
  <head>
    <meta charset="utf-8">
    

    <title>
        <?= $title; ?>
    </title>
   
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

    <!-- jaquery -->
    
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>js/jquery-ui.css">
	<style>
	body{
		font-family: "Trebuchet MS", sans-serif;
		margin: 50px;
	}
	.demoHeaders {
		margin-top: 2em;
	}
	#dialog-link {
		padding: .4em 1em .4em 20px;
		text-decoration: none;
		position: relative;
	}
	#dialog-link span.ui-icon {
		margin: 0 5px 0 0;
		position: absolute;
		left: .2em;
		top: 50%;
		margin-top: -8px;
	}
	#icons {
		margin: 0;
		padding: 0;
	}
	#icons li {
		margin: 2px;
		position: relative;
		padding: 4px 0;
		cursor: pointer;
		float: left;
		list-style: none;
	}
	#icons span.ui-icon {
		float: left;
		margin: 0 4px;
	}
	.fakewindowcontain .ui-widget-overlay {
		position: absolute;
	}
	select {
		width: 200px;
	}
	</style>
  
  </head>


 
<body>
<br>
<br>

<div class="container">
  <div class="row">
    <!-- <div class="alert alert-danger fade in">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      Pesan Alert Gagal
    </div> -->
    
    <div class="col-sm-12" style="padding:10px 20px;">
      <h1><center>Bupati Padang Pariaman CUP 2020</center></h1> 
      <h2>Registration </h2>
      <form action="<?= base_url('pendaftaran/input/tambah'); ?>" method="post" enctype="multipart/form-data">

      <!-- Cagegori ................................... -->
      <div class="form-group">
          <label for="category">Category  :</label>

          <div class="radio-inline input-lg">
            <label><input type="radio" name="category" value="kelas A" checked="checked">Kelas A</label>
          </div>

          <div class="radio-inline input-lg">
            <label><input type="radio" name="category" value="Kelas B">Kelas B</label>
          </div>
          
          <div class="radio-inline input-lg">
            <label><input type="radio" name="category" value="Junior">Kelas Junior</label>
          </div>
      </div>
      <!-- Cagegori ................................... -->  
      <center><h3>Pilot Info</h3></center>
    </div>
  </div>

      <div class="row">
        <div class="col-sm-6" style="padding:20px 20px;">
          <div class="form-group">
            <label class="control-label" for="first_name">First Name*</label>
            <input type="text" class="form-control input-sm" id="nama" name="nama" >
          </div>
          <div class="form-group">
             <label for="last_name">Last Name*</label>
             <input type="text" class="form-control input-sm" id="last_name" name="last_name">
          </div>


      	<input type="text" class="input-tanggal">
      	<h2 class="demoHeaders">Datepicker</h2>
		<div id="datepicker"></div>
      <div class="form-group">
        <label class="control-label" for="age">Date of Birth *</label>
        <select name="DOBDay" id="DOBDay">
          <?php 
            for ($i=0; $i < 31 ; $i++) {  ?>
          <option value="<?= $i; ?>"><?= $i; ?></option>
          <?php } ?>
        </select>

        <select name="DOBMonth" id="DOBMonth">
          <?php 
          $bulan = ['January',
                    'Febuary',
                    'March',
                    'April',
                    'May',
                    'June',
                    'July',
                    'August',
                    'September',
                    'October',
                    'November',
                    'December'];
          for ($i=0; $i <12 ;) { 
          ?>
          <option ><?= $bulan[$i]; ?></option>
          <?php  $i++; } ?>
        </select>



        <select name="DOBYear" id="DOBYear">
          <?php for ($i=2006; $i > 1948 ; $i--) {  ?>
          <option value="<?= $i; ?>"><?= $i; ?></option>
          <?php } ?>
        </select>
      </div>

      <div class="form-group">
        <label for="gender">Gender:</label>
        <label class="radio-inline"><input type="radio" value="female" name="gender" id="gender">Female</label>
        <label class="radio-inline"><input type="radio" value="male" name="gender" id="gender" checked="checked">Male</label>
      </div>

      <div class="form-group">
          <label for="fai_no">License Number(ex.HG0001)</label>
          <input class="form-control input-sm" id="fai_no" name="fai_no" >
      </div>

      <!-- Rating Pilot Gantolle ............................-->
      <div class="form-group">  
        <label for="pilot_rating">Pilot Rating *</label>
        <select class="form-control input-sm" name="pilot_rating" id="pilot_rating" >
            <option value="H-2" selected="selected">H-2</option>
            <option value="H-3">H-3</option>
            <option value="H-4">H-4</option>
        </select>
      </div>
      <!-- Rating Pilot Gantolle ............................-->

            
      <div class="form-group">
        <label for="team">FASIDA / TEAM</label> 
        <input class="form-control input-sm" name="team" type="text" id="team"> 
      </div>
        </div>
        <div class="col-sm-6" style="padding:10px 20px;">
    <div class="form-group">
           <label for="address1">Address</label>                        
           <input class="form-control input-sm" id="address1" name="address1">                                       
          </div>
    <!-- <input class="form-control input-sm" id=address2 name=address2> -->
          <div class="form-group">
            <label for="city">City</label>
            <input class="form-control input-sm" id="city" name="city">
          </div>
          <div class="form-group">
            <label for="zip">Postcode</label>
            <input class="form-control input-sm" id="postcode" name="postcode">
          </div>
          <div class="form-group">
            <label for="country">Country</label>
            <input class="form-control input-sm" id="country" name="country">                           
          </div>
          <div class="form-group">                                       
            <label for="phone">Phone*</label>                              
            <input class="form-control input-sm" id="phone" name="phone" >
          </div>

          <div class="form-group">                                          
            <label for="email">Email*</label>                                        
            <input class="form-control input-sm" name="email" >
          </div>

          <div class="form-group">
             <label for="nok_zip">T-Shirt Size</label>
             <select class="form-control input-sm" name="nok_zip" id="nok_zip">
                <option value="S" selected="selected">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
                <option value="XXL">XXL</option>
            </select>
          </div>
        </div>
       </div>

      <div class="row">
        <div class="col-sm-6" style="padding:10px 20px;">
          <center><h3>Emergency Contact</h3></center>
          <div class="form-group">
             <label for="nok_name">Contact Name*</label>
             <input class="form-control input-sm" id="nok_name" size="24" name="nok_name" onblur="MM_validateForm('nok_name','','R');return document.MM_returnValue">
          </div><div class="form-group">
             <label for="nok_relationship">Relationship to you</label>
             <input class="form-control input-sm" id="nok_relationship" size="24" name="nok_relationship">
          </div>
          <div class="form-group">                                   
             <label for="nok_phone">Contact Phone*</label>
             <input class="form-control input-sm" id="nok_phone" size="24" name="nok_phone" onblur="MM_validateForm('nok_phone','','R');return document.MM_returnValue">
          </div>

          
        </div>
      

        <div class="col-sm-6" style="padding:10px 20px;">
          <center><h3>Equipment Info</h3></center>
            
           <div class="form-group">
             <label for="glider_make">Manufacturer</label>
             <input class="form-control input-sm" id="glider_make" name="glider_make">

             <label for="glider_model">Glider Model</label>
             <input class="form-control input-sm" id="glider_model" name="glider_model">

             <label for="glider_color">Glider Collor</label>
             <input class="form-control input-sm" id="glider_color" name="glider_color">

             <label for="harnes">Harnes</label>
             <input class="form-control input-sm" id="harnes" name="harnes">

           <!--   <label for="parasut">Paracute</label>
             <input class="form-control input-sm" id="parasut" name="parasut">
 -->
             <label for="parasutEmergensi">Emergency Paracute</label>
             <input class="form-control input-sm" id="parasutEmergensi" name="parasutEmergensi">


          </div>
        </div>

    </div>



      <div class="row">
        <div class="col-sm-12" style="padding:10px 20px;">
          <h3>Indonesia Citizen / WNI only</h3>
          <h3>Keikutsertaan Hercules (Apabila Ada):</h3> 
          
          <div class="form-group"> 
            <label for="herky">Ikut Hercules?</label>
            <div class="radio-inline"><label><input type="radio" value="1" name="herky">Ya</label></div>
            <div class="radio-inline"><label><input type="radio" value="0" name="herky" checked="checked">Tidak</label></div>
          </div>
         <div class="form-group">
            <label for="trip_type">Keikutsertaan</label>
            <div class="radio-inline"><label><input type="radio" value="1" name="trip_type">Pergi Saja</label></div>
            <div class="radio-inline"><label><input type="radio" value="2" name="trip_type" checked="checked">Pulang Pergi (PP)</label></div>
            <div class="radio-inline"><label><input type="radio" value="3" name="trip_type">Pulang Saja</label></div>
          </div>
          <div class="form-group">
            <label for="embarkasi">Embarkasi</label> 
            <input class="form-control input-sm" name="embarkasi" type="text" id="embarkasi" size="24">
          </div>
          
          <div class="form-group">
            <label for="">Other information</label>               
            <textarea class="form-control" input-sm="" id="other" name="other"></textarea>
          </div>
        </div>

<!-- UPLOAD GAMBAR ....................................... -->

<div class="container">
  <h3 ><font color="red">File Foto dan KTP wajib di isi .......!!"jpg / png"!!</font></h3>
  <div class="row">
    <div class="col-sm-4">
        <h2 class="page-header">UPLOAD FOTO</h2>
        <div class="form-group">
          <label>FOTO</label><br>
          <input type="file" class="form-control" name="foto" required>
        </div>  
    </div>
    <div class="col-sm-4">
        <h2 class="page-header">UPLOAD KTP</h2>
        <div class="form-group">
          <label>KTP</label><br>
          <input type="file" class="form-control" name="ktp" required>
        </div>  
    </div>
  </div>    
</div> 


<br>
        <input hidden name="tanggal_pendaftaran" value="<?php $tgl=date('d-m-Y h:i:sa'); echo $tgl; ?>" type="text" id="tanggal_pendaftaran">

<br>
        <input type="submit" value="simpan" name="simpan" >
<br>                                   

        <input type="reset" name="Reset" value="Reset">
                                        
            
    </div>
  </div>
</div>
    


</form>

<br>
<br>
<br>


<script type="text/javascript" src="<?= base_url('assets/'); ?>js/jquery-ui.js"></script>
<script type="text/javascript" src="<?= base_url('assets/'); ?>js/jquery.js"></script>

<script>

$( "#accordion" ).accordion();



var availableTags = [
	"ActionScript",
	"AppleScript",
	"Asp",
	"BASIC",
	"C",
	"C++",
	"Clojure",
	"COBOL",
	"ColdFusion",
	"Erlang",
	"Fortran",
	"Groovy",
	"Haskell",
	"Java",
	"JavaScript",
	"Lisp",
	"Perl",
	"PHP",
	"Python",
	"Ruby",
	"Scala",
	"Scheme"
];
$( "#autocomplete" ).autocomplete({
	source: availableTags
});



$( "#button" ).button();
$( "#button-icon" ).button({
	icon: "ui-icon-gear",
	showLabel: false
});



$( "#radioset" ).buttonset();



$( "#controlgroup" ).controlgroup();



$( "#tabs" ).tabs();



$( "#dialog" ).dialog({
	autoOpen: false,
	width: 400,
	buttons: [
		{
			text: "Ok",
			click: function() {
				$( this ).dialog( "close" );
			}
		},
		{
			text: "Cancel",
			click: function() {
				$( this ).dialog( "close" );
			}
		}
	]
});

// Link to open the dialog
$( "#dialog-link" ).click(function( event ) {
	$( "#dialog" ).dialog( "open" );
	event.preventDefault();
});



$( "#datepicker" ).datepicker({
	inline: true
});



$( "#slider" ).slider({
	range: true,
	values: [ 17, 67 ]
});



$( "#progressbar" ).progressbar({
	value: 20
});



$( "#spinner" ).spinner();



$( "#menu" ).menu();



$( "#tooltip" ).tooltip();



$( "#selectmenu" ).selectmenu();


// Hover states on the static widgets
$( "#dialog-link, #icons li" ).hover(
	function() {
		$( this ).addClass( "ui-state-hover" );
	},
	function() {
		$( this ).removeClass( "ui-state-hover" );
	}
);
</script>

</body>
</html>
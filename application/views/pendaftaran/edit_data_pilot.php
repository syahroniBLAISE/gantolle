 

<body>

<div class="container">
  <div class="row">
    <div class="col-sm-12" style="padding:10px 20px;">
      <h1><center>Edit Data Peserta</center></h1> 
      <form action="<?= base_url('pendaftaran/input/edit/'); ?><?= $edit['id']; ?>" method="post" enctype="multipart/form-data">

      <!-- Cagegori ................................... -->
      <div class="form-group">
          <label for="category">Category  :</label>

          <div class="radio-inline input-lg">
            <label><input type="radio" name="category" value="kelas A" <?php
   
              if($edit['category'] == 'kelas A'){
                $category  = 'checked';
                echo $category ;}
             ?>
             >Kelas A</label>
          </div>

          <div class="radio-inline input-lg">
            <label><input type="radio" name="category" value="Kelas B" <?php
   
              if($edit['category'] == 'Kelas B'){
                $category  = 'checked';
                echo $category ;}
             ?>>Kelas B</label>
          </div>
          
          <div class="radio-inline input-lg">
            <label><input type="radio" name="category" value="Junior" <?php
   
              if($edit['category'] == 'Junior'){
                $category  = 'checked';
                echo $category ;}
             ?>>Kelas Junior</label>
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
            <input value="<?= $edit['nama']; ?>" type="text" class="form-control input-sm" id="nama" name="nama" >
          </div>
          <div class="form-group">
             <label for="last_name">Last Name*</label>
             <input value="<?= $edit['last_name']; ?>" type="text" class="form-control input-sm" id="last_name" name="last_name">
          </div>


      <div class="form-group">
        <label class="control-label" for="age">Date of Birth *</label>

        <select name="DOBDay" id="DOBDay">
          <option selected="selected"><?= $tanggal[0]; ?></option>
          <?php
          
           for ($i=0; $i < 31 ; $i++) {  ?>
        	<option  value="<?= $i; ?>" ><?= $i; ?></option>

          <?php }

           ?>
        </select>

        <select name="DOBMonth" id="DOBMonth" >
          <option selected="selected"><?= $tanggal[1];?></option>

          <?php $t = 1; for ($i=0; $i <12 ;) {
            $it= $i+$t;
           ?>
          <option value="<?= $it; ?>"><?= $bulan[$i]; ?></option>
          <?php  $i++; } ?>
        </select>



        <select name="DOBYear" id="DOBYear">
          <option selected="selected"><?= $tanggal[2]; ?></option>
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
          <input value="<?= $edit['fai_no']; ?>" class="form-control input-sm" id="fai_no" name="fai_no" >
      </div>

      <!-- Rating Pilot Gantolle ............................-->
      <div class="form-group">  
        <label for="pilot_rating">Pilot Rating *</label>
        <select class="form-control input-sm" name="pilot_rating" id="pilot_rating" >
          <option selected="selected"><?= $edit['pilot_rating']; ?></option>
          <?php 
          $Rating = ['H2','H3','H4'];
          for ($i=0; $i <3 ;) { 
          ?>
          <option value="<?= $Rating[$i]; ?>" ><?= $Rating[$i]; ?></option>
          <?php  $i++; } ?>
        </select>
      </div>
      <!-- Rating Pilot Gantolle ............................-->

            
      <div class="form-group">
        <label for="team">FASIDA / TEAM</label> 
        <input value="<?= $edit['team']; ?>" class="form-control input-sm" name="team" type="text" id="team"> 
      </div>
        </div>
        <div class="col-sm-6" style="padding:10px 20px;">
    <div class="form-group">
           <label for="address1">Address</label>                        
           <input value="<?= $edit['address1']; ?>" class="form-control input-sm" id="address1" name="address1">                                       
          </div>
    <!-- <input class="form-control input-sm" id=address2 name=address2> -->
          <div class="form-group">
            <label for="city">City</label>
            <input value="<?= $edit['city']; ?>" class="form-control input-sm" id="city" name="city">
          </div>
          <div class="form-group">
            <label for="zip">Postcode</label>
            <input value="<?= $edit['postcode']; ?>" class="form-control input-sm" id="postcode" name="postcode">
          </div>
          <div class="form-group">
            <label for="country">Country</label>
            <input value="<?= $edit['country']; ?>" class="form-control input-sm" id="country" name="country">                           
          </div>
          <div class="form-group">                                       
            <label for="phone">Phone*</label>                              
            <input value="<?= $edit['phone']; ?>" class="form-control input-sm" id="phone" name="phone" >
          </div>

          <div class="form-group">                                          
            <label for="email">Email*</label>                                        
            <input value="<?= $edit['email']; ?>" class="form-control input-sm" name="email" >
          </div>

          <div class="form-group">
             <label for="nok_zip">T-Shirt Size</label>
             <select class="form-control input-sm" name="nok_zip" id="nok_zip">
                <option selected="selected"><?= $edit['nok_zip']; ?></option>

                <?php 
                $size = ['S','M','L','Xl','XXL'];
                for ($i=0; $i < 5 ;) { 
                ?>
                <option value="<?= $size[$i]; ?>" ><?= $size[$i]; ?></option>
                <?php  $i++; } ?>
            </select>
          </div>
        </div>
       </div>

      <div class="row">
        <div class="col-sm-6" style="padding:10px 20px;">
          <center><h3>Emergency Contact</h3></center>
          <div class="form-group">
             <label for="nok_name">Contact Name*</label>
             <input value="<?= $edit['nok_name']; ?>" class="form-control input-sm" id="nok_name" size="24" name="nok_name" onblur="MM_validateForm('nok_name','','R');return document.MM_returnValue">
          </div><div class="form-group">
             <label for="nok_relationship">Relationship to you</label>
             <input value="<?= $edit['nok_relationship']; ?>" class="form-control input-sm" id="nok_relationship" size="24" name="nok_relationship">
          </div>
          <div class="form-group">                                   
             <label for="nok_phone">Contact Phone*</label>
             <input value="<?= $edit['nok_phone']; ?>" class="form-control input-sm" id="nok_phone" size="24" name="nok_phone" onblur="MM_validateForm('nok_phone','','R');return document.MM_returnValue">
          </div>

          
        </div>
      

        <div class="col-sm-6" style="padding:10px 20px;">
          <center><h3>Equipment Info</h3></center>
            
           <div class="form-group">
             <label for="glider_make">Manufacturer</label>
             <input value="<?= $edit['glider_make']; ?>" class="form-control input-sm" id="glider_make" name="glider_make">

             <label for="glider_model">Glider Model</label>
             <input value="<?= $edit['glider_model']; ?>" class="form-control input-sm" id="glider_model" name="glider_model">

             <label for="glider_color">Glider Collor</label>
             <input value="<?= $edit['glider_color']; ?>" class="form-control input-sm" id="glider_color" name="glider_color">

             <label for="harnes">Harnes</label>
             <input value="<?= $edit['harnes']; ?>" class="form-control input-sm" id="harnes" name="harnes">

           <!--   <label for="parasut">Paracute</label>
             <input value="<?= $edit['parasut']; ?>" class="form-control input-sm" id="parasut" name="parasut">
 -->
             <label for="parasutEmergensi">Emergency Paracute</label>
             <input value="<?= $edit['parasutEmergensi']; ?>" class="form-control input-sm" id="parasutEmergensi" name="parasutEmergensi">


          </div>
        </div>

    </div>



      <div class="row">
        <div class="col-sm-12" style="padding:10px 20px;">
          <h3>Indonesia Citizen / WNI only</h3>
          <h3>Keikutsertaan Hercules (Apabila Ada):</h3> 
          
          <div class="form-group"> 
            <label for="herky">Ikut Hercules?</label>
           
            <div class="radio-inline"><label><input type="radio" value="1" name="herky" <?php
   
              if($edit['herky'] == 1){
                $herky  = 'checked';
                echo $herky ;}
             ?>
             $herky; ?>Ya</label></div>
          
            <div class="radio-inline"><label><input type="radio" value="0" name="herky" <?php
   
              if($edit['herky'] == 0){
                $herky  = 'checked';
                echo $herky ;}
             ?> >Tidak</label></div>
            
          </div>
         <div class="form-group">
            <label for="trip_type">Keikutsertaan</label>
            <div class="radio-inline"><label><input type="radio" value="1" name="trip_type" 
                <?php
   
              if($edit['trip_type'] == 1){
                $trip_type   = 'checked';
                echo $trip_type ;}
             ?>
             >Pergi Saja</label></div>
            <div class="radio-inline"><label><input type="radio" value="2" name="trip_type" 
            <?php
   
              if($edit['trip_type'] == 2){
                $trip_type   = 'checked';
                echo $trip_type ;}
             ?>
              >Pulang Pergi (PP)</label></div>
            <div class="radio-inline"><label><input type="radio" value="3" name="trip_type" 
              <?php
   
              if($edit['trip_type'] == 3){
                $trip_type   = 'checked';
                echo $trip_type ;}
             ?>
             >Pulang Saja</label></div>
          </div>
          <div class="form-group">
            <label for="embarkasi">Embarkasi</label> 
            <input value="<?= $edit['embarkasi']; ?>" class="form-control input-sm" name="embarkasi" type="text" id="embarkasi" size="24">
          </div>
           
          <div class="form-group">
            <label  for="">Other information</label>               
            <textarea value="<?= $edit['other']; ?>" class="form-control" input-sm="" id="other" name="other"></textarea>
          </div>
        </div>

<!-- UPLOAD GAMBAR ....................................... -->

<!-- <div class="container">
  <div class="row">
    <div class="col-sm-4">
        <h2 class="page-header">UPLOAD FOTO</h2>
        <div class="form-group">
          <label>FOTO</label><br>
          <input type="file" class="form-control" value="FOTO" name="foto">
        </div> 
    </div>
    <div class="col-sm-4">
        <h2 class="page-header">UPLOAD KTP</h2>
        <div class="form-group">
          <label>KTP</label><br>
          <input type="file" class="form-control" value="KTP" name="ktp">
        </div>  
    </div>
  </div>    
</div>  -->


<input hidden name="FOTO" value="<?= $edit['gbr_foto']; ?>" type="text" id="FOTO">
<input hidden name="KTP" value="<?= $edit['gbr_KTP']; ?>" type="text" id="KTP">

<input hidden name="tanggal_pendaftaran" value="<?php $tgl=date('d-m-Y h:i:sa'); echo $tgl; ?>" type="text" id="tanggal_pendaftaran">

<br>
<br>
<br>                                   
        <input type="submit" value="simpan" name="simpan">

        <input type="reset" name="Reset" value="Reset">
                                        
            
    </div>
  </div>
</div>
    


</form>


<div class="container">
  <div class="row">
    <!-- <div class="alert alert-danger fade in">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      Pesan Alert Gagal
    </div> -->
    
    <div class="col-sm-12" style="padding:10px 20px;">
      <h2 align="center">Registration </h2>
      <form action="<?= base_url('pendaftaran/input/tambah'); ?>" method="post" enctype="multipart/form-data">

      <!-- Cagegori ................................... -->
      <div class="row">
        <div class="col-sm-4">
              <label class="control-label" for="category">Class Category </label>
              <input  type="text" class="form-control input-sm" id="category" name="category" >
        </div>
      </div>
      <!-- Cagegori ................................... -->  
      <center><h3>Pilot Info</h3></center>
    </div>
  </div>

      <div class="row">
        <div class="col-sm-6" style="padding:20px 20px;">
          <div class="form-group">
            <label class="control-label" for="first_name">First Name</label>
            <input type="text" class="form-control input-sm" id="nama" name="nama" >
          </div>
          <div class="form-group">
             <label for="last_name">Last Name</label>
             <input  type="text" class="form-control input-sm" id="last_name" name="last_name">
          </div>


      <div class="form-group">
        <label class="control-label" for="DOB">Date of Birth *</label>
        <input  type="text" class="form-control input-sm" id="DOB" name="DOB">
        
      </div>

      <div class="form-group">
        <label class="control-label" for="gender">Gender</label>
        <input  type="text" class="form-control input-sm" id="gender" name="gender">
      </div>

      <div class="form-group">
          <label for="fai_no">License Number(ex.HG0001)</label>
          <input class="form-control input-sm" id="fai_no" name="fai_no" >
      </div>

      <!-- Rating Pilot Gantolle ............................-->
      <div class="form-group">  
        <label class="control-label" for="pilot_rating">Pilot Rating</label>
        <input  type="text" class="form-control input-sm" id="pilot_rating" name="pilot_rating">
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
             <label class="control-label" for="nok_zip">T shirt Size</label>
        <input  type="text" class="form-control input-sm" id="nok_zip" name="nok_zip">
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
          <h6 align="center"><font color="red" ><B> MOHON DILINGKARI BAGIAN YANG DI PILIH</B></font></h6> 
          <div class="row">
            <div class="col-sm-6">
              <label class="control-label" for="herky">Herky</label>
              <input  type="text" class="form-control input-sm" value='YA      /     Tidak' id="herky" name="herky">
            </div>
            <div class="col-sm-6">
              <label class="control-label" for="trip_type">Keikut Sertaan</label>
              <input  type="text" class="form-control input-sm" value='Pergi Saja    |   Pulang Pergi (PP)    |    Pulang Saja' id="trip_type" name="trip_type">
            </div>
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
        <h3 >LAMPIRKAN<font color="red"> "FOTO 4X6" DAN "FOTO COPY KTP" </font></h3>
        
      </div> 



            
    </div>
  </div>
</div>
    


</form>

<br>
<br>
<br>


</body>
</html>
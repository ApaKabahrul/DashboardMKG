<?php
if($this->session->userdata('nama')){

}else{
    
}?>
<script src="<?php echo base_url()?>assets/js/uploadcsv.js"></script>
<body>
  <center><h1>UPLOAD FILE ADMIN</h1></center>
 <br></br>


  <div class="row">
  <div class="col-md-6">
  <div class="container">
      <form method="post" id="import_csv" enctype="multipart/form-data">
          <div class="card" style="width:350px; margin-left: 400px;">
              <div class="form-group">
                  <label>Select CSV File</label>
                    <input type="file" name="csv_file" id="csv_file" required accept=".csv" />
              </div>
          <br /><br />

          <input type="submit" value="upload" id="import_csv_btn" />
      </form>
</body>

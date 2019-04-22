<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$data = array(
    'name'        => 'math_captcha',
    'value'          => '',
    'class'       => 'form_login'
);
if($this->session->userdata('nama')){

}else{
    redirect(base_url('/login'));
    echo $this->session->userdata('nama');
}?>
<script src="<?php echo base_url()?>assets/js/uploadcsv.js"></script>
<body>
      <div class="col-md-9">
          <div class="container content">
              <center><h1>UPLOAD FILE ADMIN</h1></center>
              <br></br>

          <div class="card" style="margin-left: 250px; margin-right: 250px; border-style: solid; padding: 15px;">
                <form method="post" id="import_csv" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Select CSV File</label>
                        <input type="file" name="csv_file" id="csv_file" required accept=".csv" />
                            <br /><div class="hidden" id="imported_csv_data"></div>
                        <input type="submit" class="btn btn-warning" value="upload" id="import_csv_btn" />
                    </div>
                </form>
  </div>
  </div>
</body>

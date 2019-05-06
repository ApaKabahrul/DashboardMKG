<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if($this->session->userdata('nama')){

}else{
//    redirect(base_url('/login'));
// kepentingan testing

}?>
<script src="<?php echo base_url()?>assets/js/tutorial.js"></script>
<body>
      <div class="col-md-9">
          <div class="container content">
          <embed type="application/pdf" src="<?php echo base_url()?>assets/KETENTUAN FORMAT UPLOAD DATA.pdf" width="100%" height="500px"  frameborder="0">
          </div>
      </div>
</body>

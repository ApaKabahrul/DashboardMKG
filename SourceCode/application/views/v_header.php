<head>
    <title>DASHBOARD MKG</title>
    <script src="<?php echo base_url()?>assets/js/jquery_004.js"></script> 
<!--    <script src="--><?php //echo base_url()?><!--assets/bootstrap/js/bootstrap.js"></script>-->
    <script src="<?php echo base_url()?>assets/js/alertify.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.bundle.js"></script>

    <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/alertify/alertify.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/alertify/alertify.rtl.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/css.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-awesome.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/fontawesome/css/all.css" media="screen">
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/dataTables.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/validationEngine.jquery.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/datepicker3.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/ladda-themeless.css">
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/img/logo-itera.png">

    
  <style type="text/css"></style></head>
 <body>
<div class="container base">
  <div class="container">
      <div class="row ">
        <div class="col-md-1">
            <a href="<?php echo base_url()?>/home">
              <img src="<?php echo base_url()?>assets/img/logo-itera.png" style="margin-bottom:10px; " width="70px">
            </a>
        </div>
        <div class="col-md-5">
          <h3>SISTEM DASHBOARD MKG</h3>
          <p><em>"Institut Teknologi Sumatera"</em></p>
        </div>
      </div>
  </div>
</div>

  <div class="container top">
  <nav class="navbar navbar-inverse">  
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span> 
        </button>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
            <?php if($this->session->userdata('nama')){ ?>
            <li><a href= "<?php echo base_url('admin/logout'); ?>"><i id="logout" class="glyphicon glyphicon-log-out"></i> Logout</a></li>
            <?php }else{

            }?>
                    </ul>
      </div>  
  </nav>
</div>
</body>
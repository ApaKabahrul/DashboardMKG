<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$data = array(
    'name'        => 'math_captcha',
    'value'          => '',
    'class'       => 'form_login'
);
?>

<!DOCTYPE html>
<html>
<head>
	<title>DASHBOARD MKG</title>
    <script src="<?php echo base_url()?>assets/js/jquery_004.js"></script> 
    <script src="<?php echo base_url()?>assets/js/bootstrap.js"></script>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/css.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-awesome.css" media="screen">
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/dataTables.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/validationEngine.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/datepicker3.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/ladda-themeless.css">
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/img/logo%20itera%20oke.png">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/chosen.css">
    
  <style type="text/css"></style>
</head>
<div class="container base">
  <div class="container">
      <div class="row ">
        <div class="col-md-1">
            <a href="http://siakad.itera.ac.id/">
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
      </div>
  </nav>
</div>
<div class="container content">
  <div class="col-md-12">
    <div class="kotak_login">
        <p class="form_title">Admin Area</p>
		<form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
            <?php echo validation_errors(); ?>

            <?php echo form_open(); ?>
			<input type="text" name="username" class="form_login" placeholder="Username"/>
			<input type="password" name="password" class="form_login" placeholder="Password"/>

            <?php echo $math_captcha_question;?>
            <?php echo "<p>"?>
            <?php echo $str = form_input($data);?>
            
            <?php echo "<script type='text/javascript'>alert('$str');</script>"; ?>

<!--            <label class="checkbox">-->
<!--                <input type="checkbox" value="remember-me"> Remember me-->
<!--            </label>-->
            <?php echo form_submit('submit', 'Submit',"class='tombol_login '"); ?>

            <?php echo form_close();?>
<!--            belum bisa dipake-->
<!--			<input type="submit" class="tombol_login" value="Submit"/>-->
		</form>

    </div> 
</body>
  </div>
</div>
</div>
</html>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
</head>
<body background="<?php echo base_url(); ?>assets/img/full-bloom.png">
<h1>Sistem Dashboard MKG <br/> Institut Teknologi Sumatera</h1>

	<div class="kotak_login">
		<p class="tulisan_admin">Admin Area</p>
 
		<form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
			
			<input type="text" name="username" class="form_login" placeholder="Username"/>
			<input type="password" name="password" class="form_login" placeholder="Password"/>

            <?php echo validation_errors(); ?>

            <?php echo form_open(); ?>

            <?php echo $math_captcha_question;?>

            <?php echo $str = form_input('math_captcha');?>
            <?php echo "<script type='text/javascript'>alert('$str');</script>"; ?>

            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
            </label>
            <?php echo form_submit('submit', 'Submit'); ?>

            <?php echo form_close();?>
<!--            belum bisa dipake-->
<!--			<input type="submit" class="tombol_login" value="Submit"/>-->
		</form>
	</div> 
</body>
</html>
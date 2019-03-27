<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$data = array(
    'name'        => 'math_captcha',
    'value'          => '',
    'class'       => 'form_login'
);
if($this->session->userdata('nama')){
    redirect(base_url('admin/upload'));
}else{

}?>
<style>
    .content{
        background-color: #f2f2f2;
    }
</style>
<div class="container content">
  <div class="col-md-12">
    <div class="kotak_login">
        <p class="form=title"><i class="glyphicon glyphicon-lock" style="center"></i>Admin Area</p>
		<form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
            <?php echo validation_errors(); ?>

            <?php echo form_open(); ?>
			<input type="text" name="username" class="form_login" placeholder="Username"/>
			<input type="password" name="password" class="form_login" placeholder="Password"/>

            <?php echo $math_captcha_question;?>
            <?php echo "<p></p>"?>
            <?php echo $str = form_input($data); ?>
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
<div class="container content">
    <div class="row">
        <div class="col-md-3">
            <?php if($this->session->userdata('nama')){ ?>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-header">Administrator</a>
                    <a href="<?php echo base_url('admin');?>" class="list-group-item sembilan"><i class="fa fa-book tab10 sembilan" aria-hidden="true"></i>Tutorial</a>
                    <a href="<?php echo base_url('admin/upload');?>" class="list-group-item lima"><i class="fa fa-upload tab10 lima" aria-hidden="true"></i>Upload</a>
                </div>
            <?php }else{

            }?>
            </ul>

            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-header">Menu</a>

                <a href="<?php echo base_url('Home');?>" class="list-group-item satu">
                    <i class="fa fa-sun-o tab10" aria-hidden="true"></i>Panas Matahari</a>

                <a href="<?php echo base_url('Home/Suhuview');?>" class="list-group-item dua">
                    <i class="fa fa-thermometer-empty tab10 dua " aria-hidden="true"></i>&nbsp; Suhu</a>

                <a href="<?php echo base_url('Home/Kelembabanview');?>" class="list-group-item tiga">
                    <i class="fa fa-cloud tab10 " aria-hidden="true"></i> Kelembaban </a>

                <a href="<?php echo base_url('Home/arahanginview');?>" class="list-group-item empat">
                    <i class="fa fa-location-arrow tab10" aria-hidden="true"></i>&nbsp; Arah Angin </a>

                <a href="<?php echo base_url('Home/kecepatananginview');?>" class="list-group-item enam">
                    <i class="fa fa-tachometer tab10" aria-hidden="true"></i>&nbsp;Kecepatan Angin </a>

                <a href="<?php echo base_url('Home/tekananview');?>" class="list-group-item tujuh">
                    <i class="fa fa-thermometer-3 tab10" aria-hidden="true"></i>&nbsp; Tekanan Udara </a>

                <a href="<?php echo base_url('Home/curahhujanview');?>" class="list-group-item delapan">
                    <i class="fa fa-cloud tab10" aria-hidden="true"></i> Curah Hujan </a>

            </div>
        </div>

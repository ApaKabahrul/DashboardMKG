<div class="container content">
    <div class="row">
        <div class="col-md-3">
            <?php if($this->session->userdata('nama')){ ?>
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-header">Administrator</a>
                    <a href="<?php echo base_url('admin');?>" class="list-group-item lima"><i class="fa fa-home tab10 lima" aria-hidden="true"></i>Upload</a>
                </div>
            <?php }else{

            }?>
            </ul>

            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-header">Menu</a>
                <a href="<?php echo base_url('home');?>" class="list-group-item satu">
                    <i class="fa fa-list-ul tab10 satu" aria-hidden="true"></i> Tahun</a>
                <a href="#" class="list-group-item ">
                    <i class="fa fa-list-ul tab10 dua" aria-hidden="true"></i> Bulan </a>
                <a href="#" class="list-group-item ">
                    <i class="fa fa-list-ul tab10 tiga" aria-hidden="true"></i> Minggu </a>
                <a href="#" class="list-group-item ">
                    <i class="fa fa-list-ul tab10 empat" aria-hidden="true"></i> Hari </a>
            </div>
        </div>

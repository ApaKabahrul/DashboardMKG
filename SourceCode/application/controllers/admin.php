<?php 

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
        $this->load->model('adminmodel');
        $this->load->library('csvimport');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
        $this->load->library('mongo_db',array('active'=>'default'),'mongo_db');
	}

	function index(){
		$this->load->view('v_header');
		$this->load->view('v_sidebar');
		$this->load->view('admin/upload');
	}
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
    function import(){
        $file_data = $this->csvimport->get_array($_FILES["csv_file"]["tmp_name"]);
//        $res=$this->mongo_db->order_by(array('id' => 'DESC'))->limit(1)->get('admin');
        $res=$this->adminmodel->jumlah();
//        foreach ($res as $doc) {
//            $id = $doc['id'];
//        }
        $id=$res;
        $a="000";
        foreach($file_data as $row)
        {
            $id++;
            $data = array(
                'id'                =>  (String)$id,
                'waktu'		        =>	$row['waktu'],
                'temperature'	    =>	$row['temperature'],
                'sun_radiation'	    =>	$row['sun_radiation'],
                'Relative_humidity'	=>	$row['Relative_humidity'],
                'wind_direction'	=>	$row['wind_direction'],
                'wind_speed'	    =>	$row['wind_speed'],
                'pressure'	        =>	$row['pressure'],
                'rain_rate'	        =>	$row['rain_rate'],
                'timestamp'		    =>	$row['timestamp'].$a
                );
            $this->adminmodel->insertmo($data);
            $data=null;
        }

    }




    function load_data(){
	    echo 1;
    }
}
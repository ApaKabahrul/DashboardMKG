<?php 

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
        $this->load->model('adminmodel');
        $this->load->library('csvimport');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
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
	    echo "<script> console.log(a);</script>";
        $file_data = $this->csvimport->get_array($_FILES["csv_file"]["tmp_name"]);
        foreach($file_data as $row)
        {
            $data[] = array(
                'username'		=>	$row["username"],
                'password'		=>	$row["password"]
                );
        }
        $this->adminmodel->insert($data);
    }
}
<?php 

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	function index(){
		$this->load->view('v_headerl');
		$this->load->view('v_sidebar');
		$this->load->view('admin/upload');
	}
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
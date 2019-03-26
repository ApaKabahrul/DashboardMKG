<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
		//$this->load->view('admin/login');
        $this->load->library('mathcaptcha');
        $this->mathcaptcha->init();
		$data['math_captcha_question'] = $this->mathcaptcha->get_question();

        $this->form_validation->set_rules('math_captcha', 'Math CAPTCHA', 'required|callback__check_math_captcha');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('admin/login', $data);
        }
        else
        {
            $this->load->view('admin/login', $data);
        }
	}

	function aksi_login(){

        $this->load->library('mathcaptcha');
        $this->mathcaptcha->init();
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array('username' => $username,
					   'password' => md5($password));
		$cek = $this->login_model->cek_login("admin",$where)->num_rows();
        $str = $this->input->post('math_captcha');

        if ($this->mathcaptcha->check_answer($str))
        {
            if($cek>0){
                $data_session = array
                ('nama' => $username,
                    'status' => "login" );

                $this->session->set_userdata($data_session);
                $a = true;
                redirect(base_url("admin"));
            }
            else {
                echo "<script type='text/javascript'>alert('Password Salah');</script>";
                $a = false;
            }
        }else
        {
            echo "<script type='text/javascript'>alert('capsa salah');</script>";
            $a = false;
            //redirect(base_url("login"));
        }

	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('admin/login'));
	}
}

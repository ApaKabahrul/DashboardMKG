<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
        if($this->session->userdata('status') == "login"){
			redirect(base_url("admin"));
		}
	}

	public function index()
	{
		//$this->load->view('adminModel/login');
        $this->load->library('mathcaptcha');
        $this->mathcaptcha->init();
		$data['math_captcha_question'] = $this->mathcaptcha->get_question();

        $this->form_validation->set_rules('math_captcha', 'Math CAPTCHA', 'required|callback__check_math_captcha');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('v_header');
            $this->load->view('admin/login', $data);
        }
        else
        {
            $this->load->view('admin/login', $data);
        }
	}

	function aksi_login(){

        $this->load->library('mathcaptcha');
        $this->load->library('session');
        $this->mathcaptcha->init();
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array('username' => $username,
					   'password' => md5($password));
		$cek= count($this->login_model->cek_user($where));
//        $cek = $this->login_model->cek_login("admin",$where)->num_rows();
        $str = $this->input->post('math_captcha');

        if ($this->mathcaptcha->check_answer($str))
        {
            if($cek>0){
                $data_session = array
                ('nama' => $username,
                    'status' => "login" );

                $this->session->set_userdata($data_session);
                redirect(base_url("admin"));
            }
            else {
                echo "<script>
            alert('Password Salah');window.location='index';
            </script>";
                $a = false;
            }
        }else
        {
            echo "<script>
            alert('CAPTCHA Salah');window.location='index';
            </script>";
            //redirect(base_url("login"));
        }

	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('admin/login'));
	}
}
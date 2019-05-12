<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Mmanggil model untuk login
		$this->load->model('login_model');
		//Digunakan untuk melakukan pengecekan session jika ada maka akan di alihkan ke admin
        if($this->session->userdata('status') == "login"){
			redirect(base_url("admin"));
		}
	}
    //Fungsi untuk menampilan halaman login
	public function index()
	{
	    //Memanggilan library untuk captcha
        $this->load->library('mathcaptcha');
        //Inisialisasi captcha
        $this->mathcaptcha->init();
        //Pengambilan data soal dan dimasukkan kedalam array
		$data['math_captcha_question'] = $this->mathcaptcha->get_question();
		//Memanggil tampilan dan mengirimkan data soal captcha yang ada di array $data
		$this->load->view('v_header');
        $this->load->view('admin/login', $data);
	}
    //Fungsi untuk melakukan login
	function aksi_login(){
        //Melakukan pemanggilan library mathcaptcha dan session
        $this->load->library('mathcaptcha');
        $this->load->library('session');
        //Fungsi untuk memulai fungsi captcha
        $this->mathcaptcha->init();
        //Mendapatkan field username dan password
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		//fieldnya dimasukkan kedalam array
		$where = array('username' => $username,
					   'password' => md5($password));
		//melakukan cek apakah ada kecocokan terhadap username dan password
		$cek= count($this->login_model->cek_user($where));
		//Mendapatkan input dari font end
        $captcha = $this->input->post('math_captcha');
        //Melakukan pengecekan jika captcha benar maka akan membuat session login dan masuk ke halaman admin
        if ($this->mathcaptcha->check_answer($captcha))
        {
            if($cek>0){
                $data_session = array
                ('nama' => $username,
                    'status' => "login" );

                $this->session->set_userdata($data_session);
                redirect(base_url("admin"));
            }
            else {
                //jika password salah maka akan mengeluarkan pesan berikut.
                echo "<script>
            alert('Password Salah');window.location='index';
            </script>";
                $a = false;
            }
        }else
        {
            //Jika captcha yang dimasukan salah makan akan keluar pesan berikut
            echo "<script>
            alert('CAPTCHA Salah');window.location='index';
            </script>";
        }

	}
}
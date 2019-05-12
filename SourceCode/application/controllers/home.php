<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        //pemanggilan model homemodel
        $this->load->model('Homemodel');
    }
    //fungsi untuk menampilkan view sampai fungsi curahhujanview
    public function index()
	{
	    $this->load->view('v_header');
		$this->load->view('v_sidebar');
		$this->load->view('home/PanasMatahari');
	}
    public function Suhuview()
    {
        $this->load->view('v_header');
        $this->load->view('v_sidebar');
        $this->load->view('home/Suhu');
    }
    public function Kelembabanview()
    {
        $this->load->view('v_header');
        $this->load->view('v_sidebar');
        $this->load->view('home/kelembaban');
    }
    public function arahanginview()
    {
        $this->load->view('v_header');
        $this->load->view('v_sidebar');
        $this->load->view('home/arahangin');
    }
    public function kecepatananginview()
    {
        $this->load->view('v_header');
        $this->load->view('v_sidebar');
        $this->load->view('home/kecepatanangin');
    }public function tekananview()
    {
        $this->load->view('v_header');
        $this->load->view('v_sidebar');
        $this->load->view('home/tekanan');
    }public function curahhujanview()
    {
        $this->load->view('v_header');
        $this->load->view('v_sidebar');
        $this->load->view('home/curahhujan');
    }
    //Fungsi untuk mengirimkan API untuk digunakan untuk menampilkan grafik pada halaman dashboard
    //Perbedaan setiap fungsi di bawah ada pada perulangan data yang dimasukan kedalam array tergantung
    // data yang digunakan (float)$doc['sun_radiation'])
    public function panasmatahari(){
	    $res=$this->Homemodel->getwather();
	    $a=array();
        foreach ($res as $doc) {
            array_push($a,array((float)$doc['timestamp'],(float)$doc['sun_radiation']));
        }
        $someJSON = json_encode(array("item" => $a),JSON_PRETTY_PRINT);
        echo $someJSON;
    }
    public function suhu(){
	    $res=$this->Homemodel->getwather();
	    $a=array();
        foreach ($res as $doc) {
            array_push($a,array((float)$doc['timestamp'],(float)$doc['temperature']));
        }
        $someJSON = json_encode(array("item" => $a),JSON_PRETTY_PRINT);
        echo $someJSON;
    }public function kelembaban(){
	    $res=$this->Homemodel->getwather();
	    $a=array();
        foreach ($res as $doc) {
            array_push($a,array((float)$doc['timestamp'],(float)$doc['Relative_humidity']));
        }
        $someJSON = json_encode(array("item" => $a),JSON_PRETTY_PRINT);
        echo $someJSON;
    }public function arahangin(){
	    $res=$this->Homemodel->getwather();
	    $a=array();
        foreach ($res as $doc) {
            array_push($a,array((float)$doc['timestamp'],(float)$doc['wind_direction']));
        }
        $someJSON = json_encode(array("item" => $a),JSON_PRETTY_PRINT);
        echo $someJSON;
    }public function kecepatanangin(){
	    $res=$this->Homemodel->getwather();
	    $a=array();
        foreach ($res as $doc) {
            array_push($a,array((float)$doc['timestamp'],(float)$doc['wind_speed']));
        }
        $someJSON = json_encode(array("item" => $a),JSON_PRETTY_PRINT);
        echo $someJSON;
    }public function tekanan(){
	    $res=$this->Homemodel->getwather();
	    $a=array();
        foreach ($res as $doc) {
            array_push($a,array((float)$doc['timestamp'],(float)$doc['pressure']));
        }
        $someJSON = json_encode(array("item" => $a),JSON_PRETTY_PRINT);
        echo $someJSON;
    }public function curahhujan(){
	    $res=$this->Homemodel->getwather();
	    $a=array();
        foreach ($res as $doc) {
            array_push($a,array((float)$doc['timestamp'],(float)$doc['rain_rate']));
        }
        $someJSON = json_encode(array("item" => $a),JSON_PRETTY_PRINT);
        echo $someJSON;
    }
    //fungsi ini digunakan untuk menampilkan hasil query
    public function esekusi(){
        $this->load->library('mongo_db',array('active'=>'default'),'mongo_db');
//        $res=$this->mongo_db->where('id','')->delete('Weather');
        $res=$this->mongo_db->order_by(array('waktu'=>'DESC'))->limit(10)->get('Weather');
        echo '<pre>';
        print_r($res);
    }
}

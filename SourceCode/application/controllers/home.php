<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Homemodel');
    }

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
    public function panasmatahari(){
	    $res=$this->Homemodel->getwather();
	    $a=array();
        foreach ($res as $doc) {
            array_push($a,array((float)$doc['timestamp'],(float)$doc['sun_radiation']));
//            $a = $doc['sun_radiation'];
        }
//        print_r($a);
        $someJSON = json_encode(array("item" => $a),JSON_PRETTY_PRINT);
        echo $someJSON;
    }
    public function suhu(){
	    $res=$this->Homemodel->getwather();
	    $a=array();
        foreach ($res as $doc) {
            array_push($a,array((float)$doc['timestamp'],(float)$doc['temperature']));
//            $a = $doc['sun_radiation'];
        }
//        print_r($a);
        $someJSON = json_encode(array("item" => $a),JSON_PRETTY_PRINT);
        echo $someJSON;
    }public function kelembaban(){
	    $res=$this->Homemodel->getwather();
	    $a=array();
        foreach ($res as $doc) {
            array_push($a,array((float)$doc['timestamp'],(float)$doc['Relative_humidity']));
//            $a = $doc['sun_radiation'];
        }
//        print_r($a);
        $someJSON = json_encode(array("item" => $a),JSON_PRETTY_PRINT);
        echo $someJSON;
    }public function arahangin(){
	    $res=$this->Homemodel->getwather();
	    $a=array();
        foreach ($res as $doc) {
            array_push($a,array((float)$doc['timestamp'],(float)$doc['wind_direction']));
//            $a = $doc['sun_radiation'];
        }
//        print_r($a);
        $someJSON = json_encode(array("item" => $a),JSON_PRETTY_PRINT);
        echo $someJSON;
    }public function kecepatanangin(){
	    $res=$this->Homemodel->getwather();
	    $a=array();
        foreach ($res as $doc) {
            array_push($a,array((float)$doc['timestamp'],(float)$doc['wind_speed']));
//            $a = $doc['sun_radiation'];
        }
//        print_r($a);
        $someJSON = json_encode(array("item" => $a),JSON_PRETTY_PRINT);
        echo $someJSON;
    }public function tekanan(){
	    $res=$this->Homemodel->getwather();
	    $a=array();
        foreach ($res as $doc) {
            array_push($a,array((float)$doc['timestamp'],(float)$doc['pressure']));
//            $a = $doc['sun_radiation'];
        }
//        print_r($a);
        $someJSON = json_encode(array("item" => $a),JSON_PRETTY_PRINT);
        echo $someJSON;
    }public function curahhujan(){
	    $res=$this->Homemodel->getwather();
	    $a=array();
        foreach ($res as $doc) {
            array_push($a,array((float)$doc['timestamp'],(float)$doc['rain_rate']));
//            $a = $doc['sun_radiation'];
        }
//        print_r($a);
        $someJSON = json_encode(array("item" => $a),JSON_PRETTY_PRINT);
        echo $someJSON;
    }public function esekusi(){
        $this->load->library('mongo_db',array('active'=>'default'),'mongo_db');
//        $res=$this->mongo_db->where('id','')->delete('Weather');
        $res=$this->mongo_db->order_by(array('waktu'=>'DESC'))->limit(10)->get('Weather');
        echo '<pre>';
        print_r($res);
    }
}

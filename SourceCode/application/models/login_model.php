<?php 

class Login_model extends CI_Model{
    public function __construct()
    {
        $this->load->library('mongo_db',array('active'=>'default'),'mongo_db');
    }
    function cek_login($table, $where){
			return $this->db->get_where($table,$where);
	}
    function cek_user($user){
        return $res=$this->mongo_db->get_where('admin',$user);
    }
}
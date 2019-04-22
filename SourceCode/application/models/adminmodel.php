<?php
/**
 * Created by PhpStorm.
 * User: Irfan
 * Date: 30/03/2019
 * Time: 2:04
 */

class adminmodel extends CI_Model
{
    public function __construct()
    {
        $this->load->library('mongo_db',array('active'=>'default'),'mongo_db');
    }
    function insert($data)
    {
        $this->db->insert_batch('admin', $data);
    }
    function insertmo($data){

        $this->mongo_db->insert('Weather1', $data);
    }
    function jumlah(){
        return $this->mongo_db->count('Weather1');
    }
}
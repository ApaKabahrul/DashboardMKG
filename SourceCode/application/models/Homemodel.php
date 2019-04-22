<?php
/**
 * Created by PhpStorm.
 * User: Irfan
 * Date: 19/04/2019
 * Time: 18:21
 */

class Homemodel extends CI_Model
{
    public function __construct()
    {
        $this->load->library('mongo_db',array('active'=>'default'),'mongo_db');
    }
    function getwather(){
        return $this->mongo_db->get('Weather');
    }
}
?>
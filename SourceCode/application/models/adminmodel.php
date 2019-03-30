<?php
/**
 * Created by PhpStorm.
 * User: Irfan
 * Date: 30/03/2019
 * Time: 2:04
 */

class adminmodel extends CI_Model
{
    function insert($data)
    {
        $this->db->insert_batch('admin', $data);
    }
}
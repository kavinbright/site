<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/28
 * Time: 23:13
 */
class test_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function test()
    {
        $sql = "select * from ai_test";
        return $this->db->query($sql)->result_array();
    }

}
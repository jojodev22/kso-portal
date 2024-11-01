<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MainModel extends CI_Model
{
    public function get($table)
    {
        return $this->db->get($table)->result_array();
    }
}
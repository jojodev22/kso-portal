<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MainModel extends CI_Model
{
    public function get($table)
    {
        return $this->db->get($table)->result_array();
    }

    public function get_where($table, $where)
    {
        return $this->db->get_where($table, $where)->row();
    }

    public function insert($table, $data = [])
    {
        return $this->db->insert($table, $data);
    }

    public function update($table, $input = [], $where = [])
    {
        return $this->db->update($table, $input, $where);
    }

    public function delete($table, $where)
    {
        return $this->db->delete($table, $where);
    }
}
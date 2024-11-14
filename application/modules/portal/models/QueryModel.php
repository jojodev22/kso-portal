<?php
defined('BASEPATH') or exit('No direct script access allowed');

class QueryModel extends CI_Model
{
    public function getContent($search = "")
    {
        $sql = "SELECT * FROM content WHERE id_category LIKE '%$search%'";
        return $this->db->query($sql)->result_array();
    }
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class QueryModel extends CI_Model
{
    public function getContentToCategory()
    {
        $sql = 'SELECT * 
                FROM content a
                LEFT JOIN category b ON a.category_id=b.id';

        return $this->db->query($sql)->result_array();
    }
}
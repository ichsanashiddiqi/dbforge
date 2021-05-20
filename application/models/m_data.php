<?php

class M_data extends CI_Model
{
    function tampil_data()
    {
        return $this->db->get('tbl_tes');
    }
    function tampil()
    {
        return $this->db->get('tbl_blog');
    }

    function showdata()
    {
        return $this->db->get('tbl_kar');
    }
    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
}

<?php
class Model_kategori extends CI_Model{
    public function data_casual(){
        return $this->db->get_where("brg", array('kategori'=>'casual'));
    }
    public function data_cool(){
        return $this->db->get_where("brg", array('kategori'=>'the coolest'));
    }
    public function data_formal(){
        return $this->db->get_where("brg", array('kategori'=>'formal'));
    }
    public function data_sport(){
        return $this->db->get_where("brg", array('kategori'=>'sport'));
    }
}
?>
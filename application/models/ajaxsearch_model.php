<?php
class Ajaxsearch_model extends CI_Model
{
 function fetch_data($query)
 {
  $this->db->select("*");
  $this->db->from("brg");
  if($query != '')
  {
   $this->db->like('nm_brg', $query);
   $this->db->or_like('merek', $query);
   $this->db->or_like('kategori', $query);
   $this->db->or_like('size', $query);
   $this->db->or_like('warna', $query);
   $this->db->or_like('harga', $query);
  }
  $this->db->order_by('CustomerID', 'DESC');
  return $this->db->get();
 }
}
?>

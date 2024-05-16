<?php
    class Model_barang extends CI_Model{
        public function tampil_data(){
            return $this->db->get('brg');
        }
		public function get_keyword($keyword){
			$this->db->select('*');
			$this->db->from('brg');
			$this->db->like('merek', $keyword);
			$this->db->or_like('nm_brg', $keyword);
			$this->db->or_like('kategori', $keyword);
			$this->db->or_like('warna', $keyword);
			$this->db->or_like('size', $keyword);
			$this->db->or_like('harga', $keyword);
            return $this->db->get()->result();

		}
        
        public function input_data($data){
            $this->db->insert('brg', $data);
        }
        public function hapus_data($where, $table){
            $this->db->where($where);
            $this->db->delete($table);
        }
        public function edit_data($where, $table){
            return $this->db->get_where($table, $where);
        }
        public function update_data($where, $data,$table){
            $this->db->where($where);
            $this->db->update($table, $data);
        }
        public function detail_data($id= NULL){
            $query = $this->db->get_where('brg', array('id' => $id))->row();
            return $query;
        }
        public function find($id){
            $result = $this->db->where('id', $id)
            ->limit(1)
            ->get('brg');
            if($result->num_rows() > 0){
                return $result->row();
            }else{
                return array();
            }
        }
    }
?>

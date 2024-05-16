<?php
    class Model_invoice extends CI_Model{
        public function index(){
            date_default_timezone_set('Asia/Surabaya');
            $nama=$this->input->post('nama');
            $alamat=$this->input->post('alamat');

            $invoice=array(
                'nama'=> $nama,
                'alamat' => $alamat,
                'tgl' => date('Y-m-d H:i:s'),
                'batas' => date('Y-m-d H:i:s', mktime(date('H'),date('i'),date('s'),date('m'),date('d')+2,date('Y'))),

            );
            $this->db->insert('beli', $invoice);
            $id_invoice=$this->db->insert_id();

            foreach($this->cart->contents() as $item){
                $data=array(
                    'id_invoice' => $id_invoice,
                    'id_brg' => $item['id'],
                    'nama_brg' => $item['name'],
                    'jumlah' => $item['qty'],
                    'harga' =>$item['price'],
                );
                $this->db->insert('pesan', $data);
            }
                return TRUE;
        }
        public function hapus_data($where, $table){
            $this->db->where($where);
            $this->db->delete($table);
        }
        public function tampil_data(){
            $result = $this->db->get('beli');
            if($result->num_rows() > 0){
                return $result->result();
            }else{
                return false;
            }
        }
        public function data_invoice($id_invoice){
            $result = $this->db->where('id_invoice', $id_invoice)->get('pesan');
            if($result->num_rows() > 0){
                return $result->row();
            }else{
                return false;
            }
        }
        public function data_pesan($id_invoice){
            $result = $this->db->where('id_invoice', $id_invoice)->get('pesan');
            if ($result->num_rows() > 0) {
                return $result->result();
            } else {
                return false;
            }
        }
    }
?>

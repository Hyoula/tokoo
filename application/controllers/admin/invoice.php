<?php
    class Invoice extends CI_Controller{
        public function index(){
            $data['invoice']=$this->model_invoice->tampil_data();
            $this->load->view('tmp_admin/header');
            $this->load->view('tmp_admin/sidebara');
            $this->load->view('admin/invoice', $data);
            $this->load->view('tmp_admin/footer');
        }
        public function hapusi($idn){
            $where = array('idn' => $idn);
            $this->model_invoice->hapus_data($where, 'beli');
            redirect('admin/invoice/index');
        }
        public function detaili($id_invoice){
            $data['invoice'] = $this->model_invoice->data_invoice($id_invoice);
            $data['pesanan'] = $this->model_invoice->data_pesan($id_invoice);
            $this->load->view('tmp_admin/header');
            $this->load->view('tmp_admin/sidebara');
            $this->load->view('admin/detaili', $data);
            $this->load->view('tmp_admin/footer');
        }

    }
?>